<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'PhoSTO.StowebPhoto',
            'Front1',
            'Photos'
        );

        $pluginSignature = str_replace('_', '', 'stoweb_photo') . '_front1';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:stoweb_photo/Configuration/FlexForms/flexform_front1.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'PhoSTO.StowebPhoto',
            'Front2',
            'Album'
        );

        $pluginSignature = str_replace('_', '', 'stoweb_photo') . '_front2';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:stoweb_photo/Configuration/FlexForms/flexform_front2.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'PhoSTO.StowebPhoto',
            'Front3',
            'Tag'
        );

        $pluginSignature = str_replace('_', '', 'stoweb_photo') . '_front3';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:stoweb_photo/Configuration/FlexForms/flexform_front3.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('stoweb_photo', 'Configuration/TypoScript', 'PhoSTO');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_stowebphoto_domain_model_photo', 'EXT:stoweb_photo/Resources/Private/Language/locallang_csh_tx_stowebphoto_domain_model_photo.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_stowebphoto_domain_model_photo');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_stowebphoto_domain_model_comment', 'EXT:stoweb_photo/Resources/Private/Language/locallang_csh_tx_stowebphoto_domain_model_comment.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_stowebphoto_domain_model_comment');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_stowebphoto_domain_model_album', 'EXT:stoweb_photo/Resources/Private/Language/locallang_csh_tx_stowebphoto_domain_model_album.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_stowebphoto_domain_model_album');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_stowebphoto_domain_model_tag', 'EXT:stoweb_photo/Resources/Private/Language/locallang_csh_tx_stowebphoto_domain_model_tag.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_stowebphoto_domain_model_tag');

    }
);
