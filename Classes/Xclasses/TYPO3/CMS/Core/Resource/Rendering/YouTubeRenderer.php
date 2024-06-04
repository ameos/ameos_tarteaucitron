<?php

namespace Ameos\AmeosTarteaucitron\Xclasses\TYPO3\CMS\Core\Resource\Rendering;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\Resource\File;
use TYPO3\CMS\Core\Resource\FileInterface;
use TYPO3\CMS\Core\Resource\FileReference;
use TYPO3\CMS\Core\Resource\OnlineMedia\Helpers\OnlineMediaHelperInterface;
use TYPO3\CMS\Core\Resource\OnlineMedia\Helpers\OnlineMediaHelperRegistry;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\MathUtility;

class YouTubeRenderer extends \TYPO3\CMS\Core\Resource\Rendering\YouTubeRenderer
{
    /**
     * Render for given File(Reference) html output
     *
     * @param  FileInterface $file
     * @param  int|string    $width                            TYPO3 known format; examples: 220, 200m or 200c
     * @param  int|string    $height                           TYPO3 known format; examples: 220, 200m or 200c
     * @param  array         $options
     * @param  bool          $usedPathsRelativeToCurrentScript See $file->getPublicUrl()
     * @return string
     */
    public function render(FileInterface $file, $width, $height, array $options = null, $usedPathsRelativeToCurrentScript = false)
    {
        $options = $this->collectOptions($options, $file);

        if ($file instanceof FileReference) {
            $orgFile = $file->getOriginalFile();
        } else {
            $orgFile = $file;
        }

        $videoId = $this->getOnlineMediaHelper($file)->getOnlineMediaId($orgFile);
        $attributes = $this->collectIframeAttributes($width, $height, $options);
        if(is_array($attributes) && !empty($attributes)){
            if(array_key_exists('class',$attributes) && $attributes['class'] ?? false){
                $attributes['class'] .= ' youtube_player';
            }else{
                $attributes['class'] = ' youtube_player';
            }
            if(array_key_exists('allowfullscreen',$attributes) && $attributes['allowfullscreen'] ?? false){
                unset($attributes['allowfullscreen']);
            }
            if(array_key_exists('allow',$attributes) && $attributes['allow'] ?? false){
                unset($attributes['allow']);
            }
            if(array_key_exists('width',$attributes) && $attributes['width'] ?? false){
                $attributes['data-width'] = $attributes['width'];
                unset($attributes['width']);
            }
            if(array_key_exists('height',$attributes) && $attributes['height'] ?? false){
                $attributes['data-height'] = $attributes['height'];
                unset($attributes['height']);
            }
            if(!array_key_exists('style',$attributes)){
                $attributes['style'] = '';
            }
            if(array_key_exists('data-height',$attributes) && $attributes['data-height'] ?? false){
                $attributes['style'] .= ($attributes['data-height']) ? 'height:'.$attributes['data-height'].'px;' :'';
            }
            if(array_key_exists('data-width',$attributes) && $attributes['data-width'] ?? false){
                $attributes['style'] .= ($attributes['data-width']) ? 'width:'.$attributes['data-width'].'px;' :'';
            }
        }
        return sprintf(
            '<div data-videoID="%s"%s></div>',
            $videoId,
            empty($attributes) ? '' : ' ' . $this->implodeAttributes($attributes)
        );
    }
}
