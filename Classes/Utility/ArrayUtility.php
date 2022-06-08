<?php

namespace Ameos\AmeosTarteaucitron\Utility;

class ArrayUtility {
	/**
     * @internal
     * @param array $attributes
     * @return string
     */
    public static function implodeAttributes(array $attributes): string
    {
        $attributeList = [];
        foreach ($attributes as $name => $value) {
            $name = preg_replace('/[^\p{L}0-9_.-]/u', '', $name);
            if ($value === true) {
                $attributeList[] = $name;
            } else {
                $attributeList[] = $name . '="' . htmlspecialchars($value, ENT_QUOTES | ENT_HTML5) . '"';
            }
        }
        return implode(' ', $attributeList);
    }
}