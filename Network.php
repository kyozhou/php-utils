<?php
namespace kyoz;

class Network {
    
    static function getEthIp($interface) {
        $interface = escapeshellarg($interface);
        $pattern = "/inet addr:(\d+\.\d+\.\d+\.\d+)/";
        $text = shell_exec("ifconfig $internface");
        preg_match($pattern, $text, $matches);
        return empty($matches[1]) ? '' : $matches[1];
    }
}
