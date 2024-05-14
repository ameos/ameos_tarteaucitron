<?php

defined('TYPO3') or defined('TYPO3_MODE') or die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'ameos_tarteaucitron',
    'Configuration/Typoscript',
    'AMEOS - Tarte au citron'
);
