<?php

namespace BmgApiV2Lib\Utils;

use BmgApiV2Lib\Utils\{Arr, Helper};

class LocationResolver
{

    public static function resolve($locations, $type)
    {
        $resolver = self::resolver($type);

        $flatten = Arr::flatten($resolver($locations));

        return array_values(array_filter($flatten));
    }

    public static function resolver($toPick)
    {
        $tree = ['countries', 'states', 'cities'];

        $resolver = function ($location) use ($tree, &$resolver, $toPick) {
            if (is_array($location)) {
                return array_map($resolver, $location);
            }

            $type = Helper::propertiesExists($location, $tree);

            if (! $type) {
                return null;
            }

            $children = $location->{$type}->data ?? null;

            if (! $children) {
                return $children;
            }

            return $type === $toPick
                ? $children
                : $resolver($children);
        };

        return $resolver;
    }
}
