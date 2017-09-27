<?php
defined('TYPO3_MODE') || die('Access denied.');

// Include base TSconfig setup
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="DIR:EXT:joboffers/Configuration/TSconfig" extensions="ts">');

call_user_func(
    function()
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'TorbenAschmons.joboffers',
            'joboffers_pi1',
            [
                'JobOffer' => 'list'
            ],
            // non-cacheable actions
            [
                'Location' => '',
                'Department' => '',
                'JobOffer' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        joboffers_pi1 {
                            icon = EXT:joboffers/Resources/Public/Icons/Extension.svg
                            title = LLL:EXT:joboffers/Resources/Private/Language/locallang_db.xlf:tx_joboffers_domain_model_pi1
                            description = LLL:EXT:joboffers/Resources/Private/Language/locallang_db.xlf:tx_joboffers_domain_model_pi1.description
                            tt_content_defValues {
                                CType = list
                                list_type = joboffers_joboffers_pi1
                            }
                        }
                    }
                    show = *
                }
           }'
        );


        if (TYPO3_MODE === 'BE') {
            $icons = [
                'wizard-icon' => 'Extension.svg'
            ];
            $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
            foreach ($icons as $identifier => $path) {
                $iconRegistry->registerIcon(
                    $identifier,
                    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                    ['source' => 'EXT:joboffers/Resources/Public/Icons/' . $path]
                );
            }
        }


    }
);
