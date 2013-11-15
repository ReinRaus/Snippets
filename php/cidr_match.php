<?php 
function cidr_match($ip, $ranges) {
    $ranges = (array) $ranges;
    foreach ($ranges as $range) {
        list($subnet, $mask) = explode('/', $range);
        if((ip2long($ip) & ~((1 << (32 - $mask)) - 1)) == ip2long($subnet)) {
            return true;
        }
    }
    return false;
}
?>