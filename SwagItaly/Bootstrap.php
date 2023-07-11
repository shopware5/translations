<?php

/**
 * (c) shopware AG <info@shopware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Shopware_Plugins_Core_SwagItaly_Bootstrap extends Shopware_Components_Plugin_Bootstrap
{
    /**
     * returns the label
     *
     * @return string
     */
    public function getLabel()
    {
        $pluginJson = $this->getPluginJson();

        return $pluginJson['label']['en'];
    }

    /**
     * returns the version
     *
     * @return string
     */
    public function getVersion()
    {
        $pluginJson = $this->getPluginJson();

        return $pluginJson['currentVersion'];
    }

    /**
     * @return array
     */
    public function getInfo()
    {
        $pluginJson = $this->getPluginJson();

        return array(
            'version' => $pluginJson['currentVersion'],
            'label' => $pluginJson['label']['en'],
            'supplier' => $pluginJson['author'],
            'description' => $pluginJson['description'],
            'link' => $pluginJson['link']
        );
    }

    /**
     * gets the plugin json and decodes it
     *
     * @return mixed
     */
    private function getPluginJson()
    {
        $pluginInfo = json_decode(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'plugin.json'), true);

        return $pluginInfo;
    }

    /**
     * Uninstalls the plugin
     *
     * @return bool
     */
    public function uninstall()
    {
        $localeRepository = Shopware()->Models()->getRepository('Shopware\Models\Shop\Locale');
        $elementRepository = Shopware()->Models()->getRepository('Shopware\Models\Config\Element');

        $element = $elementRepository->findOneByName('backendLocales');
        if (!$element) {
            return true;
        }
        $locales = $element->getValue();

        $id = $localeRepository->findOneByLocale('it_IT')->getId();

        if (($index = array_search($id, $locales)) !== false) {
            unset($locales[$index]);
            $element->setValue($locales);
            Shopware()->Models()->flush($element);
        }
        return true;
    }

    /**
     * Installs the plugin
     *
     * @return bool
     */
    public function install()
    {
        if (!$this->assertMinimumVersion('5.0.0')) {
            return false;
        }

        $this->subscribeEvents();

        $localeRepository = Shopware()->Models()->getRepository('Shopware\Models\Shop\Locale');
        $elementRepository = Shopware()->Models()->getRepository('Shopware\Models\Config\Element');

        $element = $elementRepository->findOneByName('backendLocales');
        $id = $localeRepository->findOneByLocale('it_IT')->getId();

        if ($element) {
            $locales = $element->getValue();

            if (!in_array($id, $locales)) {
                $locales[] = $id;
                $element->setValue($locales);
                Shopware()->Models()->flush($element);
            }
        }

        return true;
    }

    /**
     * Standard plugin enable method
     *
     * @return array
     */
    public function enable()
    {
        return array('success' => true, 'invalidateCache' => ['frontend', 'theme']);
    }

    /**
     * Creates and subscribe the events and hooks.
     */
    protected function subscribeEvents()
    {
        $this->subscribeEvent(
            'Theme_Compiler_Collect_Plugin_Less',
            'addLessFiles'
        );
    }
    /**
     * Provide the file collection for less
     *
     * @param Enlight_Event_EventArgs $args
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function addLessFiles(Enlight_Event_EventArgs $args)
    {
        $less = new \Shopware\Components\Theme\LessDefinition(
            array(),
            array(
                __DIR__ . '/Views/responsive/frontend/_public/src/less/all.less'
            ),
            __DIR__
        );

        return new Doctrine\Common\Collections\ArrayCollection(array($less));
    }
}
