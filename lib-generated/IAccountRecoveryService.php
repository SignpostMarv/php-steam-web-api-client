<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IAccountRecoveryService extends AbstractInterface
{
    /**
     * /IAccountRecoveryService/ReportAccountRecoveryData/v1/
     *
     * @param string $loginuser_list
     * @param string $install_config
     * @param string $shasentryfile
     * @param string $machineid
     */
    public function ReportAccountRecoveryDataV1(string $loginuser_list, string $install_config, string $shasentryfile, string $machineid)
    {
        return $this->_call(__METHOD__, 'POST', array('loginuser_list' => $loginuser_list, 'install_config' => $install_config, 'shasentryfile' => $shasentryfile, 'machineid' => $machineid));
    }
    /**
     * /IAccountRecoveryService/RetrieveAccountRecoveryData/v1/
     *
     * @param string $requesthandle
     */
    public function RetrieveAccountRecoveryDataV1(string $requesthandle)
    {
        return $this->_call(__METHOD__, 'POST', array('requesthandle' => $requesthandle));
    }
}
