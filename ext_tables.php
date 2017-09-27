<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'TorbenAschmons.joboffers',
            'joboffers_pi1',
            'Job Offers'
        );

		$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['joboffers_joboffers_pi1'] = 'layout,select_key';
		$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['joboffers_joboffers_pi1'] = 'pi_flexform';
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('joboffers_joboffers_pi1', 'FILE:EXT:joboffers/Configuration/FlexForms/flexform_pi1.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('joboffers', 'Configuration/TypoScript', 'Job Offers');
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('joboffers', 'Configuration/TypoScript/Bootstrap', 'Job Offers - Include Bootstrap (optional)');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_joboffers_domain_model_location', 'EXT:joboffers/Resources/Private/Language/locallang_csh_tx_joboffers_domain_model_location.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_joboffers_domain_model_location');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_joboffers_domain_model_department', 'EXT:joboffers/Resources/Private/Language/locallang_csh_tx_joboffers_domain_model_department.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_joboffers_domain_model_department');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_joboffers_domain_model_joboffer', 'EXT:joboffers/Resources/Private/Language/locallang_csh_tx_joboffers_domain_model_joboffer.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_joboffers_domain_model_joboffer');

    }
);
