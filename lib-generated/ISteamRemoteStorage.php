<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ISteamRemoteStorage extends AbstractInterface
{
    /**
     * /ISteamRemoteStorage/GetCollectionDetails/v1/
     *
     * @param uint32 $collectioncount Number of collections being requested
     * @param uint64 $publishedfileids collection ids to get the details for
     */
    public function GetCollectionDetailsV1(string $collectioncount, string $publishedfileids)
    {
        return $this->_call(__METHOD__, 'POST', array('collectioncount' => $collectioncount, 'publishedfileids[0]' => $publishedfileids));
    }
    /**
     * /ISteamRemoteStorage/GetPublishedFileDetails/v1/
     *
     * @param uint32 $itemcount Number of items being requested
     * @param uint64 $publishedfileids published file id to look up
     */
    public function GetPublishedFileDetailsV1(string $itemcount, string $publishedfileids)
    {
        return $this->_call(__METHOD__, 'POST', array('itemcount' => $itemcount, 'publishedfileids[0]' => $publishedfileids));
    }
    /**
     * /ISteamRemoteStorage/GetUGCFileDetails/v1/
     *
     * @param uint64 $steamid If specified, only returns details if the file is owned by the SteamID specified
     * @param uint64 $ugcid ID of UGC file to get info for
     * @param uint32 $appid appID of product
     */
    public function GetUGCFileDetailsV1(string $steamid = null, string $ugcid, string $appid)
    {
        return $this->_call(__METHOD__, 'GET', array('steamid' => $steamid, 'ugcid' => $ugcid, 'appid' => $appid));
    }
}
