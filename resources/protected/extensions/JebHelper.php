<?php
/**
 * Created by ':User:' using PhpStorm.
 * User: Syed Ekramuddin Emon <ekram.syed@gmail.com>
 * Date: 12/22/13
 * Time: 2:52 AM
 */

class JebHelper {

    /*
     *
     */
    public static function listTimezone()
    {
        $timezoneIdentifiers = DateTimeZone::listIdentifiers();
        $utcTime = new DateTime('now', new DateTimeZone('UTC'));

        $tempTimezones = array();
        foreach ($timezoneIdentifiers as $timezoneIdentifier) {
            $currentTimezone = new DateTimeZone($timezoneIdentifier);

            $tempTimezones[] = array(
                'offset' => (int)$currentTimezone->getOffset($utcTime),
                'identifier' => $timezoneIdentifier
            );
        }

        // Sort the array by offset,identifier ascending
        /*usort($tempTimezones, function($a, $b) {
            return ($a['offset'] == $b['offset'])
                ? strcmp($a['identifier'], $b['identifier'])
                : $a['offset'] - $b['offset'];
        });*/
        usort($tempTimezones, array("JebHelper", "sortByIdentifier"));

        $timezoneList = array();
        foreach ($tempTimezones as $tz) {
            $sign = ($tz['offset'] > 0) ? '+' : '-';
            $offset = gmdate('H:i', abs($tz['offset']));
            $timezoneList[$tz['identifier']] = '(UTC ' . $sign . $offset . ') ' .
                $tz['identifier'];
        }

        return $timezoneList;
    }

    public static function sortByIdentifier($a, $b){
        return ($a['offset'] == $b['offset']) ? strcmp($a['identifier'], $b['identifier']) : $a['offset'] - $b['offset'];
    }

    /*
     *
     */
    final public static function getTimezoneByOffset($offset, $isDst = null)
    {
        if ($isDst === null)
        {
            $isDst = date('I');
        }

        $offset *= 3600;
        $zone    = timezone_name_from_abbr('', $offset, $isDst);

        if ($zone === false)
        {
            foreach (timezone_abbreviations_list() as $abbr)
            {
                foreach ($abbr as $city)
                {
                    if ((bool)$city['dst'] === (bool)$isDst &&
                        strlen($city['timezone_id']) > 0    &&
                        $city['offset'] == $offset)
                    {
                        $zone = $city['timezone_id'];
                        break;
                    }
                }

                if ($zone !== false)
                {
                    break;
                }
            }
        }

        return $zone;
    }

} 