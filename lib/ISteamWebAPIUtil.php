<?php

namespace Zyberspace\SteamWebApi;

class ISteamWebAPIUtil extends AbstractInterface
{
    /**
     * /ISteamWebAPIUtil/GetSupportedAPIList/v1/
     *
     */
    public function GetSupportedAPIListV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
}