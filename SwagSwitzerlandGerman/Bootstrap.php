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

class Shopware_Plugins_Core_SwagSwitzerlandGerman_Bootstrap extends Shopware_Components_Plugin_Bootstrap
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

        return [
            'version' => $pluginJson['currentVersion'],
            'label' => $pluginJson['label']['en'],
            'supplier' => $pluginJson['author'],
            'description' => $pluginJson['description']['en'],
            'link' => $pluginJson['link'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function install()
    {
        $this->subscribeEvents();

        $modelManager = $this->get('models');
        /** @var ModelRepository $localeRepository */
        $localeRepository = $modelManager->getRepository(Locale::class);
        /** @var ModelRepository $elementRepository */
        $elementRepository = $modelManager->getRepository(Element::class);

        $element = $elementRepository->findOneBy(['name' => 'backendLocales']);
        if ($element === null) {
            return parent::install();
        }

        /** @var \Shopware\Models\Shop\Locale $swissGermanLocal */
        $swissGermanLocal = $localeRepository->findOneBy(['locale' => 'de_CH']);
        if ($swissGermanLocal === null) {
            return parent::uninstall();
        }

        $swissGermanLocalId = $swissGermanLocal->getId();
        $locales = $element->getValue();

        if (!in_array($swissGermanLocalId, $locales)) {
            $locales[] = $swissGermanLocalId;
            $element->setValue($locales);
            $modelManager->flush($element);
        }

        return parent::install();
    }

    /**
     * {@inheritdoc}
     */
    public function uninstall()
    {
        $modelManager = $this->get('models');
        /** @var ModelRepository $localeRepository */
        $localeRepository = $modelManager->getRepository(Locale::class);
        /** @var ModelRepository $elementRepository */
        $elementRepository = $modelManager->getRepository(Element::class);

        $element = $elementRepository->findOneBy(['name' => 'backendLocales']);
        if ($element === null) {
            return parent::uninstall();
        }

        $locales = $element->getValue();
        /** @var \Shopware\Models\Shop\Locale $swissGermanLocal */
        $swissGermanLocal = $localeRepository->findOneBy(['locale' => 'de_CH']);

        if ($swissGermanLocal === null) {
            return parent::uninstall();
        }

        $swissGermanLocalId = $swissGermanLocal->getId();

        if (($index = array_search($swissGermanLocalId, $locales)) !== false) {
            unset($locales[$index]);
            $element->setValue($locales);
            $modelManager->flush($element);
        }

        return parent::uninstall();
    }

    /**
     * {@inheritdoc}
     */
    public function enable()
    {
        return ['success' => true, 'invalidateCache' => ['frontend', 'theme']];
    }

    /**
     * Provide the file collection for less
     *
     * @return ArrayCollection
     */
    public function addLessFiles()
    {
        $less = new LessDefinition(
            [],
            [
                __DIR__ . '/Views/frontend/_public/src/less/all.less',
            ],
            __DIR__
        );

        return new ArrayCollection([$less]);
    }

    /**
     * Subscribes to the less collection event
     */
    private function subscribeEvents()
    {
        $this->subscribeEvent(
            'Theme_Compiler_Collect_Plugin_Less',
            'addLessFiles'
        );
    }

    /**
     * gets the plugin json and decodes it
     *
     * @return array
     */
    private function getPluginJson()
    {
        $pluginInfo = json_decode(file_get_contents($this->Path() . DIRECTORY_SEPARATOR . 'plugin.json'), true);

        return $pluginInfo;
    }
}
