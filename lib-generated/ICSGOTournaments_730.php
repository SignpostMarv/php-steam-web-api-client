<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ICSGOTournaments_730 extends AbstractInterface
{
    /**
     * /ICSGOTournaments_730/GetTournamentFantasyLineup/v1/
     *
     * @param uint32 $event The event ID
     * @param uint64 $steamid The SteamID of the user inventory
     * @param string $steamidkey Authentication obtained from the SteamID
     */
    public function GetTournamentFantasyLineupV1(string $event, string $steamid, string $steamidkey)
    {
        return $this->_call(__METHOD__, 'GET', array('event' => $event, 'steamid' => $steamid, 'steamidkey' => $steamidkey));
    }
    /**
     * /ICSGOTournaments_730/GetTournamentItems/v1/
     *
     * @param uint32 $event The event ID
     * @param uint64 $steamid The SteamID of the user inventory
     * @param string $steamidkey Authentication obtained from the SteamID
     */
    public function GetTournamentItemsV1(string $event, string $steamid, string $steamidkey)
    {
        return $this->_call(__METHOD__, 'GET', array('event' => $event, 'steamid' => $steamid, 'steamidkey' => $steamidkey));
    }
    /**
     * /ICSGOTournaments_730/GetTournamentLayout/v1/
     *
     * @param uint32 $event The event ID
     */
    public function GetTournamentLayoutV1(string $event)
    {
        return $this->_call(__METHOD__, 'GET', array('event' => $event));
    }
    /**
     * /ICSGOTournaments_730/GetTournamentPredictions/v1/
     *
     * @param uint32 $event The event ID
     * @param uint64 $steamid The SteamID of the user inventory
     * @param string $steamidkey Authentication obtained from the SteamID
     */
    public function GetTournamentPredictionsV1(string $event, string $steamid, string $steamidkey)
    {
        return $this->_call(__METHOD__, 'GET', array('event' => $event, 'steamid' => $steamid, 'steamidkey' => $steamidkey));
    }
    /**
     * /ICSGOTournaments_730/UploadTournamentFantasyLineup/v1/
     *
     * @param uint32 $event The event ID
     * @param uint64 $steamid The SteamID of the user inventory
     * @param string $steamidkey Authentication obtained from the SteamID
     * @param uint32 $sectionid Event section id
     * @param uint32 $pickid0 PickID to select for the slot
     * @param uint64 $itemid0 ItemID to lock in for the pick
     * @param uint32 $pickid1 PickID to select for the slot
     * @param uint64 $itemid1 ItemID to lock in for the pick
     * @param uint32 $pickid2 PickID to select for the slot
     * @param uint64 $itemid2 ItemID to lock in for the pick
     * @param uint32 $pickid3 PickID to select for the slot
     * @param uint64 $itemid3 ItemID to lock in for the pick
     * @param uint32 $pickid4 PickID to select for the slot
     * @param uint64 $itemid4 ItemID to lock in for the pick
     */
    public function UploadTournamentFantasyLineupV1(string $event, string $steamid, string $steamidkey, string $sectionid, string $pickid0, string $itemid0, string $pickid1, string $itemid1, string $pickid2, string $itemid2, string $pickid3, string $itemid3, string $pickid4, string $itemid4)
    {
        return $this->_call(__METHOD__, 'POST', array('event' => $event, 'steamid' => $steamid, 'steamidkey' => $steamidkey, 'sectionid' => $sectionid, 'pickid0' => $pickid0, 'itemid0' => $itemid0, 'pickid1' => $pickid1, 'itemid1' => $itemid1, 'pickid2' => $pickid2, 'itemid2' => $itemid2, 'pickid3' => $pickid3, 'itemid3' => $itemid3, 'pickid4' => $pickid4, 'itemid4' => $itemid4));
    }
    /**
     * /ICSGOTournaments_730/UploadTournamentPredictions/v1/
     *
     * @param uint32 $event The event ID
     * @param uint64 $steamid The SteamID of the user inventory
     * @param string $steamidkey Authentication obtained from the SteamID
     * @param uint32 $sectionid Event section id
     * @param uint32 $groupid Event group id
     * @param uint32 $index Index in group
     * @param uint32 $pickid Pick ID to select
     * @param uint64 $itemid ItemID to lock in for the pick
     */
    public function UploadTournamentPredictionsV1(string $event, string $steamid, string $steamidkey, string $sectionid, string $groupid, string $index, string $pickid, string $itemid)
    {
        return $this->_call(__METHOD__, 'POST', array('event' => $event, 'steamid' => $steamid, 'steamidkey' => $steamidkey, 'sectionid' => $sectionid, 'groupid' => $groupid, 'index' => $index, 'pickid' => $pickid, 'itemid' => $itemid));
    }
}
