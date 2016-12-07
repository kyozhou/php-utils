<?php
namespace Kyoz\Utils;

class Network {
    
    static function getEthIp($interface = 'eth0') {
        $interface = escapeshellarg($interface);
        $pattern = "/inet .*?(\d+\.\d+\.\d+\.\d+)/";
        $text = shell_exec("ifconfig $interface");
        preg_match($pattern, $text, $matches);
        return empty($matches[1]) ? '' : $matches[1];
    }
}
