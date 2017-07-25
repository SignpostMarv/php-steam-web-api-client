<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ICSGOServers_730 extends AbstractInterface
{
    /**
     * /ICSGOServers_730/GetGameMapsPlaytime/v1/
     *
     * @param string $interval What recent interval is requested, possible values: day, week, month
     * @param string $gamemode What game mode is requested, possible values: competitive, casual
     * @param string $mapgroup What maps are requested, possible values: operation
     */
    public function GetGameMapsPlaytimeV1($interval, $gamemode, $mapgroup)
    {
        return $this->_call(__METHOD__, 'GET', array('interval' => $interval, 'gamemode' => $gamemode, 'mapgroup' => $mapgroup));
    }
    /**
     * /ICSGOServers_730/GetGameServersStatus/v1/
     *
     */
    public function GetGameServersStatusV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
}
