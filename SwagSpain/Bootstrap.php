<?php

use Shopware\Models\Shop\Locale;
use Shopware\Models\Config\Element;
use Doctrine\Common\Collections\ArrayCollection;

class Shopware_Plugins_Core_SwagSpain_Bootstrap extends Shopware_Components_Plugin_Bootstrap
{
    /**
     * @var array
     */
    private $formLabels;

    /**
     * @var array
     */
    private $elementLabels;

    /**
     * @inheritdoc
     */
    public function __construct($name, $info = null)
    {
        $this->formLabels = include_once __DIR__ . '/formsTranslations.php';
        $this->elementLabels = include_once __DIR__ . '/elementsTranslations.php';

        parent::__construct($name, $info);
    }

    /**
     * @inheritdoc
     */
    public function getLabel()
    {
        return 'Spanish translation';
    }

    /**
     * Returns the version of plugin as string.
     *
     * @throws RuntimeException
     * @return string
     */
    public function getVersion()
    {
        $info = json_decode(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR .'plugin.json'), true);

        if ($info) {
            return $info['currentVersion'];
        }

        throw new RuntimeException('The plugin has an invalid version file.');
    }

    /**
     * Uninstalls the plugin
     *
     * @return bool
     */
    public function uninstall()
    {
        $localeRepository = Shopware()->Models()->getRepository(Locale::class);
        $elementRepository = Shopware()->Models()->getRepository(Element::class);

        $element = $elementRepository->findOneBy(['name' => 'backendLocales']);
        if (!$element) {
            return true;
        }
        $locales = $element->getValue();

        $id = $localeRepository->findOneBy(['locale' => 'es_ES'])->getId();

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
        if (!$this->assertMinimumVersion('5.3.0')) {
            return false;
        }

        $this->subscribeEvents();

        $localeRepository = Shopware()->Models()->getRepository(Locale::class);
        $elementRepository = Shopware()->Models()->getRepository(Element::class);

        $element = $elementRepository->findOneBy(['name' => 'backendLocales']);
        $id = $localeRepository->findOneBy(['locale' => 'es_ES'])->getId();

        if ($element) {
            $locales = $element->getValue();

            if (!in_array($id, $locales)) {
                $locales[] = $id;
                $element->setValue($locales);
                Shopware()->Models()->flush($element);
            }
        }

        $this->insertFormsTranslations($id);
        $this->insertElementsTranslations($id);

        return true;
    }

    /**
     * Add Basic settings form names translations
     * @param $localeId
     */
    public function insertFormsTranslations($localeId)
    {
        foreach ($this->formLabels as $formLabel) {
            $currentRow = Shopware()->Db()->fetchRow(
                'SELECT s_core_config_forms.id as id, count(distinct s_core_config_form_translations.id) as translations FROM s_core_config_forms LEFT JOIN s_core_config_form_translations ON s_core_config_forms.id = s_core_config_form_translations.form_id
                    WHERE (s_core_config_form_translations.locale_id = ? OR s_core_config_form_translations.locale_id is null) AND s_core_config_forms.name = ?
                ',
                [$localeId, $formLabel['name']]
            );

            if (empty($currentRow['id'])) {
                continue;
            }

            if (!empty($currentRow) && $currentRow['translations'] == 0) {
                Shopware()->Db()->insert('s_core_config_form_translations', [
                    'form_id' => $currentRow['id'],
                    'locale_id' => $localeId,
                    'label' => $formLabel['label'],
                    'description' => $formLabel['description']
                ]);
            }
        }
    }

    /**
     * Add Basic settings element names translations
     * @param $localeId
     */
    public function insertElementsTranslations($localeId)
    {
        foreach ($this->elementLabels as $elementLabel) {
            $formId = Shopware()->Db()->fetchOne(
                'SELECT s_core_config_forms.id as id
                    FROM s_core_config_forms
                    WHERE s_core_config_forms.name = ?
                ',
                [$elementLabel['formName']]
            );

            if (empty($formId)) {
                continue;
            }

            $currentRow = Shopware()->Db()->fetchRow(
                'SELECT s_core_config_elements.id as id, count(distinct s_core_config_element_translations.id) as translations
                    FROM s_core_config_elements LEFT JOIN s_core_config_element_translations ON s_core_config_elements.id = s_core_config_element_translations.element_id
                    WHERE (s_core_config_element_translations.locale_id = ? OR s_core_config_element_translations.locale_id is null) AND s_core_config_elements.form_id = ? AND s_core_config_elements.name = ?
                ',
                [$localeId, $formId, $elementLabel['elementName']]
            );

            if (!$currentRow['id']) {
                continue;
            }

            if (!empty($currentRow) && $currentRow['translations'] == 0) {
                Shopware()->Db()->insert('s_core_config_element_translations', [
                    'element_id' => $currentRow['id'],
                    'locale_id' => $localeId,
                    'label' => $elementLabel['label'],
                    'description' => $elementLabel['description']
                ]);
            }
        }
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
     * @return ArrayCollection
     */
    public function addLessFiles()
    {
        $less = new \Shopware\Components\Theme\LessDefinition(
            [],
            [
                __DIR__ . '/Views/frontend/_public/src/less/all.less'
            ],
            __DIR__
        );

        return new ArrayCollection([$less]);
    }
}
