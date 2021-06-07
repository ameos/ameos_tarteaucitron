<?php
defined('TYPO3_MODE') or die('Access denied.');
if (\TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version) >= 9002000) {
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

