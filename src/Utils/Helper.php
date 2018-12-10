<?php

namespace BmgApiV2Lib\Utils;

class Helper
{
    /**
     * Check given properties exists on given object.
     *
     * @param  object $obj
     * @param  array  $properties
     * @return mixed
     */
    public static function propertiesExists($obj, array $properties)
    {
        foreach ($properties as $property) {
            if (property_exists($obj, $property)) {
                return $property;
            }
        }

        return false;
    }
}
