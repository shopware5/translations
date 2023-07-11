<?php

/**
 * (c) shopware AG <info@shopware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Doctrine\Common\Collections\ArrayCollection;
use Shopware\Components\Model\ModelRepository;
use Shopware\Components\Theme\LessDefinition;
use Shopware\Models\Config\Element;
use Shopware\Models\Shop\Locale;

class Shopware_Plugins_Core_SwagDenmark_Bootstrap extends Shopware_Components_Plugin_Bootstrap
{
    /**
     * {@inheritdoc}
     */
    public function getLabel()
    {
        $pluginJson = $this->getPluginJson();

        return $pluginJson['label']['en'];
    }

    /**
     * {@inheritdoc}
     */
    public function getVersion()
    {
        $pluginJson = $this->getPluginJson();

        return $pluginJson['currentVersion'];
    }

    /**
     * {@inheritdoc}
     */
    public function getInfo()
    {
        $pluginJson = $this->getPluginJson();

        return array(
            'version' => $pluginJson['currentVersion'],
            'label' => $pluginJson['label']['en'],
            'supplier' => $pluginJson['author'],
            'description' => $pluginJson['description'],
            'link' => $pluginJson['link'],
        );
    }

    /**
     * {@inheritdoc}
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

        $id = $localeRepository->findOneByLocale('da_DK')->getId();

        if (($index = array_search($id, $locales)) !== false) {
            unset($locales[$index]);
            $element->setValue($locales);
            Shopware()->Models()->flush($element);
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function install()
    {
        $this->subscribeEvents();

        $modelManager = $this->get('models');
        /** @var ModelRepository $localeRepository */
        $localeRepository = $modelManager->getRepository('Shopware\Models\Shop\Locale');
        /** @var ModelRepository $elementRepository */
        $elementRepository = $modelManager->getRepository('Shopware\Models\Config\Element');

        $element = $elementRepository->findOneBy(array('name' => 'backendLocales'));
        if ($element === null) {
            return parent::install();
        }

        /** @var Locale $danishLocale */
        $danishLocale = $localeRepository->findOneBy(array('locale' => 'da_DK'));
        if ($danishLocale === null) {
            return parent::uninstall();
        }

        $armenianLocaleId = $danishLocale->getId();
        $locales = $element->getValue();

        if (!in_array($armenianLocaleId, $locales)) {
            $locales[] = $armenianLocaleId;
            $element->setValue($locales);
            $modelManager->flush($element);
        }

        return parent::install();
    }

    /**
     * {@inheritdoc}
     */
    public function enable()
    {
        return array('success' => true, 'invalidateCache' => array('frontend', 'theme'));
    }

    /**
     * Provide the file collection for less
     *
     * @return ArrayCollection
     */
    public function addLessFiles()
    {
        $less = new LessDefinition(
            array(),
            array(
                __DIR__ . '/Views/frontend/_public/src/less/all.less',
            ),
            __DIR__
        );

        return new ArrayCollection(array($less));
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
     * gets the plugin json and decodes it
     *
     * @return mixed
     */
    private function getPluginJson()
    {
        $pluginInfo = json_decode(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'plugin.json'), true);

        return $pluginInfo;
    }
}
