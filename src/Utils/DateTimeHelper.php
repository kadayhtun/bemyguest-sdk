<?php

namespace BmgApiV2Lib\Utils;

use DateTime;
use DateTimeZone;
use Exception;
use BmgApiV2Lib\APIHelper;

class DateTimeHelper
{
    /**
     * Match the pattern for a datetime string in simeple date format
     */
    const SIMPLE_DATE = 'Y-m-d';

    /**
     * Match the pattern for a datetime string in Rfc1123 format
     */
    const RFC1123 = 'D, d M Y H:i:s T';

    /**
     * Match the pattern for a datetime string in Sql format
     */
    const SQL_DATETIME = 'Y-m-d H:i:s';


    /**
     * Convert a DateTime object to a string in simple date format
     *
     * @param  mixed $date The DateTime object to convert
     * @return \DateTime|null The datetime as a string in simple date format
     * @throws \Exception
     */
    public static function toSimpleDate($date)
    {
        if (! $date) {
            return null;
        }

        if ($date instanceof DateTime) {
            return $date->format(DateTimeHelper::SIMPLE_DATE);
        }

        throw new Exception('Not a valid DateTime object.');
    }

    /**
     * Convert an array of DateTime objects to an array of strings in simple date format
     *
     * @param  array $dates The array of DateTime objects to convert
     * @return array|null The array of datetime strings in simple date format
     */
    public static function toSimpleDateArray($dates)
    {
        if (! $dates) {
            return null;
        }

        return array_map('static::toSimpleDate', $dates);
    }

    /**
     * Parse a datetime string in simple date format to a DateTime object
     *
     * @param  mixed $date A datetime string in simple date format
     * @return \DateTime|null The parsed DateTime object
     * @throws \Exception
     */
    public static function fromSimpleDate($date)
    {
        if (! $date) {
            return null;
        }

        $x = DateTime::createFromFormat(static::SIMPLE_DATE, $date);

        if ($x instanceof DateTime) {
            return $x;
        }

        throw new Exception('Incorrect format.');
    }

    /**
     * Parse an array of datetime strings in simple date format to an array of DateTime objects
     *
     * @param  array $dates An array of datetime strings in simple date format
     * @return array|null An array of parsed DateTime objects
     */
    public static function fromSimpleDateArray($dates)
    {
        if (! $dates) {
            return null;
        }

        return array_map('static::fromSimpleDate', $dates);
    }


    /**
     * Convert a DateTime object to a string in Rfc1123 format
     *
     * @param  mixed $datetime The DateTime object to convert
     * @return \DateTime|null The datetime as a string in Rfc1123 format
     */
    public static function toRfc1123DateTime($datetime)
    {
        if (! $datetime) {
            return null;
        }
        if ($datetime instanceof DateTime) {
            return $datetime->setTimeZone(new DateTimeZone('GMT'))->format(static::RFC1123);
        }

        throw new Exception('Not a valid DateTime object.');
    }

    /**
     * Convert an array of DateTime objects to an array of strings in Rfc1123 format
     *
     * @param  array $datetimes The array of DateTime objects to convert
     * @return array|null The array of datetime strings in Rfc1123 format
     */
    public static function toRfc1123DateTimeArray($datetimes)
    {
        if (! $datetimes) {
            return null;
        }

        return array_map('static::toRfc1123DateTime', $datetimes);
    }

    /**
     * Parse a datetime string in Rfc1123 format to a DateTime object
     *
     * @param  mixed $datetime A datetime string in Rfc1123 format
     * @return \DateTime|null The parsed DateTime object
     * @throws \Exception
     */
    public static function fromRfc1123DateTime($datetime)
    {
        if (! $datetime) {
            return null;
        }

        $x = DateTime::createFromFormat(DateTime::RFC1123, $datetime);

        if ($x instanceof DateTime) {
            return $x->setTimeZone(new DateTimeZone('GMT'));
        }

        throw new Exception('Incorrect format.');
    }

    /**
     * Parse an array of datetime strings in Rfc1123 format to an array of DateTime objects
     *
     * @param  array $datetimes An array of datetime strings in Rfc1123 format
     * @return array|null An array of parsed DateTime objects
     */
    public static function fromRfc1123DateTimeArray($datetimes)
    {
        if (! $datetimes) {
            return null;
        }

        return array_map('static::fromRfc1123DateTime', $datetimes);
    }


    /**
     * Convert a DateTime object to a string in Rfc3339 format
     *
     * @param  mixed $datetime The DateTime object to convert
     * @return string The datetime as a string in Rfc3339 format
     * @throws \Exception
     */
    public static function toRfc3339DateTime($datetime)
    {
        if (! $datetime) {
            return null;
        }

        if ($datetime instanceof DateTime) {
            return $datetime
                ->setTimeZone(new DateTimeZone('UTC'))
                ->format(DateTime::RFC3339);
        }

        throw new Exception('Not a valid DateTime object.');
    }

    /**
     * Convert an array of DateTime objects to an array of strings in Rfc3339 format
     *
     * @param  array $datetimes The array of DateTime objects to convert
     * @return array|null The array of datetime strings in Rfc3339 format
     */
    public static function toRfc3339DateTimeArray($datetimes)
    {
        if (! $datetimes) {
            return null;
        }

        return array_map('static::toRfc3339DateTime', $datetimes);
    }

    /**
     * Parse a datetime string in Rfc3339 format to a DateTime object
     *
     * @param  mixed $datetime A datetime string in Rfc3339 format
     * @return \DateTime|null The parsed DateTime object
     * @throws \Exception
     */
    public static function fromRfc3339DateTime($datetime)
    {
        if (! $datetime) {
            return null;
        }

        // Check for timezone information and append it if missing
        if (!(substr($datetime, strlen($datetime) - 1) == 'Z' || strpos($datetime, '+'))) {
            $datetime .= 'Z';
        }

        $x = DateTime::createFromFormat(DateTime::RFC3339, $datetime);

        if ($x instanceof DateTime) {
            return $x->setTimeZone(new DateTimeZone('UTC'));
        } else {
            $x = DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $datetime); // parse with up to 6 microseconds
            if ($x instanceof DateTime) {
                return $x->setTimeZone(new DateTimeZone('UTC'));
            } else {
                $x = DateTime::createFromFormat("Y-m-d\TH:i:s.uuP", $datetime); // parse with up to 12 microseconds
                if ($x instanceof DateTime) {
                    return $x->setTimeZone(new DateTimeZone('UTC'));
                } else {
                    throw new Exception('Incorrect format.');
                }
            }
        }
    }

    /**
     * Parse an array of datetime strings in Rfc3339 format to an array of DateTime objects
     *
     * @param  array $datetimes An array of datetime strings in Rfc3339 format
     * @return array|null An array of parsed DateTime objects
     */
    public static function fromRfc3339DateTimeArray($datetimes)
    {
        if (! $datetimes) {
            return null;
        }

        return array_map('static::fromRfc3339DateTime', $datetimes);
    }


    /**
     * Convert a DateTime object to a Unix Timestamp
     *
     * @param  mixed value The DateTime object to convert
     * @return \DateTime|null The converted Unix Timestamp
     * @throws \Exception
     */
    public static function toUnixTimestamp($datetime)
    {
        if (! $datetime) {
            return null;
        }

        if ($datetime instanceof DateTime) {
            return $datetime->getTimestamp();
        }

        throw new Exception('Not a valid DateTime object.');
    }

    /**
     * Convert an array of DateTime objects to an array of strings in Unix Timestamp
     *
     * @param  array $datetimes The array of DateTime objects to convert
     * @return array|null The array of datetime strings in Unix Timestamp
     */
    public static function toUnixTimestampArray($datetimes)
    {
        if (! $datetimes) {
            return null;
        }

        return array_map('static::toUnixTimestamp', $datetimes);
    }

    /**
     * Parse a Unix Timestamp to a DateTime object
     *
     * @param  mixed $datetime The Unix Timestamp
     * @return DateTime|null The parsed DateTime object
     * @throws \Exception
     */
    public static function fromUnixTimestamp($datetime)
    {
        if (! $datetime) {
            return null;
        }

        $x = DateTime::createFromFormat("U", $datetime);

        if ($x instanceof DateTime) {
            return $x;
        }

        throw new Exception('Incorrect format.');
    }

    /**
     * Parse an array of Unix Timestamps to an array of DateTime objects
     *
     * @param  array $datetimes An array of Unix Timestamps
     * @return array|null An array of parsed DateTime objects
     */
    public static function fromUnixTimestampArray($datetimes)
    {
        if (! $datetimes) {
            return null;
        }

        return array_map('static::fromUnixTimestamp', $datetimes);
    }

    /**
     * Convert a DateTime object to a SQL DateTime
     *
     * @param  \DateTime $datetime The DateTime object to convert
     * @return string|null The converted format
     */
    public static function toSqlDateTime($datetime)
    {
        if (! $datetime) {
            return null;
        }

        return $datetime->format(self::SQL_DATETIME);
    }

    /**
     * Convert an array of DateTime objects to an array of strings in SQL DateTime
     *
     * @param  array $datetimes The array of DateTime objects to convert
     * @return array|null The array of datetime strings in SQL DATETIME format
     */
    public static function toSqlDateTimeArray($datetimes)
    {
        if (! $datetimes) {
            return null;
        }

        return array_map('static::toSqlDateTime', $datetimes);
    }

    /**
     * Parse the SQL DateTime format to a DateTime object
     *
     * @param  mixed $datetime The SQL DateTime
     * @return \DateTime|null The parsed DateTime object
     * @throws \Exception
     */
    public static function fromSqlDateTime($datetime)
    {
        if (! $datetime) {
            return null;
        }

        $x = DateTime::createFromFormat(self::SQL_DATETIME, $datetime);

        if ($x instanceof DateTime) {
            return $x;
        }

        throw new Exception('Incorrect format.');
    }

    /**
     * Parse an array of SQL DateTime to an array of DateTime objects
     *
     * @param  array $datetimes An array of SQL DateTime
     * @return array|null An array of parsed DateTime objects
     */
    public static function fromSqlDateTimeArray(array $datetimes)
    {
        if (! $datetimes) {
            return null;
        }

        return array_map('static::fromSqlDateTime', $datetimes);
    }
}
