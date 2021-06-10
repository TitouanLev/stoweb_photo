<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('stoweb_photo', 'Configuration/TypoScript', 'PhoSTO');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_stowebphoto_domain_model_photo', 'EXT:stoweb_photo/Resources/Private/Language/locallang_csh_tx_stowebphoto_domain_model_photo.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_stowebphoto_domain_model_photo');

    }
);
