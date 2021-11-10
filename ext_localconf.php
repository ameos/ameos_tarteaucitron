<?php
defined('TYPO3_MODE') or die('Access denied.');

if(!defined('TYPO3_version')) {
    $typo3VersionClass = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class);
    $typo3Version = \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger($typo3VersionClass->getVersion());
} else {
    $typo3Version = \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version);
}

if ($typo3Version >= 11000000) {
    $configuration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class
    )->get('ameos_tarteaucitron');
}
else if ($typo3Version >= 9002000) {
	$configuration = $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['ameos_tarteaucitron'];
}else{
	$configuration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['ameos_tarteaucitron']);
}

if($configuration['xclass_youtube'] == '1'){
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Core\Resource\Rendering\YouTubeRenderer::class] = array(
	    'className' => \Ameos\AmeosTarteaucitron\Xclasses\TYPO3\CMS\Core\Resource\Rendering\YouTubeRenderer::class,
	);
}

if($configuration['xclass_vimeo'] == '1'){
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Core\Resource\Rendering\VimeoRenderer::class] = array(
	    'className' => \Ameos\AmeosTarteaucitron\Xclasses\TYPO3\CMS\Core\Resource\Rendering\VimeoRenderer::class,
	);
}

if(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('ameos_form')){
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\Ameos\AmeosForm\Elements\ReCaptcha::class] = array(
	    'className' => \Ameos\AmeosTarteaucitron\Xclasses\Ameos\AmeosForm\Elements\ReCaptcha::class,
	);
}

