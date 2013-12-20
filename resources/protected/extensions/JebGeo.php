<?php
/**
 * Created by ':User:' using PhpStorm.
 * User: Syed Ekramuddin Emon <ekram.syed@gmail.com>
 * Date: 12/20/13
 * Time: 4:24 AM
 *
 * Get location related information based on user IP.
 *
 * Uses
 * --------------------------------------------------------------------
 * Yii::import('ext.JebGeo');
 * $geo = new JebGeo();
 * $geo->setIp('180.234.241.160'); // optional if not set use user ip
 * $geo->fetch();
 * $geo->getData();
 *
 * Debug
 * ---------------------------------------------------------------------
 * CVarDumper::dump($geo->getDataGeobytes(), 10, true); // use for debug, geobytes.com webservice return data
 * CVarDumper::dump($geo->getDataGeoplugin(), 10, true); // use for debug, geoplugin.net webservice return data
 * CVarDumper::dump($geo->getData(), 10, true); // use for debug; combile data
 *
 * Data Structure (getData())
 * ----------------------------------------------------------------------
 * 'known' => 'true'
 * 'locationcode' => 'BDDADHAK'
 * 'fips104' => 'BG'
 * 'iso2' => 'BD'
 * 'iso3' => 'BGD'
 * 'ison' => '50'
 * 'internet' => 'BD'
 * 'countryid' => '20'
 * 'country' => 'Bangladesh'
 * 'regionid' => '1162'
 * 'region' => 'Dhaka'
 * 'regioncode' => 'DA'
 * 'adm1code' => 'BG81'
 * 'cityid' => '6036'
 * 'city' => 'Dhaka'
 * 'latitude' => '23.723101'
 * 'longitude' => '90.4086'
 * 'timezone' => '+06:00'
 * 'certainty' => '82'
 * 'mapbytesremaining' => 'Free'
 * 'request' => '180.234.241.160'
 * 'status' => 200
 * 'credit' => 'Some of the returned data includes GeoLite data created by MaxMind, available from <a href=\\\'http://www.maxmind.com\\\'>http://www.maxmind.com</a>.'
 * 'areaCode' => '0'
 * 'dmaCode' => '0'
 * 'countryCode' => 'BD'
 * 'countryName' => 'Bangladesh'
 * 'continentCode' => 'AS'
 * 'regionCode' => '81'
 * 'regionName' => 'Dhaka'
 * 'currencyCode' => 'BDT'
 * 'currencySymbol' => 'Tk'
 * 'currencySymbol_UTF8' => 'Tk'
 * 'currencyConverter' => '77.6568'
 */

class JebGeo
{

    protected $_service_geobytes = 'http://www.geobytes.com/IpLocator.htm?GetLocation&template=php3.txt&IpAddress={IP}';

    protected $_service_geoplugin = 'http://www.geoplugin.net/php.gp?ip={IP}&base_currency={CURRENCY}';

    protected $_ip;

    protected $_data_geobytes;

    protected $_data_geoplugin;

    protected $_data;

    protected $_base_currency = 'USD';

    function __construct()
    {
        if (null === $this->_ip) $this->setIp(null);

    }

    public function fetch()
    {
        $this->_data_geobytes = $this->fetchGeoBytesData();
        $this->_data_geoplugin = $this->fetchGeoPluginData();
        $this->_data = array_merge($this->_data_geobytes, $this->_data_geoplugin);
    }

    protected function fetchGeoBytesData()
    {
        $this->_service_geobytes = str_replace('{IP}',$this->_ip, $this->_service_geobytes);
        $tags = get_meta_tags($this->_service_geobytes);
        return $tags;
    }

    protected function fetchGeoPluginData(){
        $tags = array();
        $this->_service_geoplugin = str_replace('{IP}',$this->_ip, $this->_service_geoplugin);
        $this->_service_geoplugin = str_replace('{CURRENCY}', $this->_base_currency, $this->_service_geoplugin);
        $gTags = unserialize(file_get_contents($this->_service_geoplugin, 'r'));

        foreach ($gTags as $k => $v) {
            $tags[str_replace('geoplugin_', '', $k)] = $v;
        }
        return $tags;
    }


    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->_data;
    }

    /**
     * @param mixed $ip
     */
    public function setIp($ip)
    {
        if (null === $ip) $ip = $_SERVER['REMOTE_ADDR'];

        $this->_ip = $ip;
    }

    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->_ip;
    }

    /**
     * @param string $base_currency
     */
    public function setBaseCurrency($base_currency)
    {
        $this->_base_currency = $base_currency;
    }

    /**
     * @return string
     */
    public function getBaseCurrency()
    {
        return $this->_base_currency;
    }


    /**
     * @return mixed
     */
    public function getDataGeobytes()
    {
        return $this->_data_geobytes;
    }


    /**
     * @return mixed
     */
    public function getDataGeoplugin()
    {
        return $this->_data_geoplugin;
    }



}