<?php

// Create a function, zOrQ, that returns true if the given string contains the letter q or z (uppercase and lowercase):
    
declare(strict_types=1);
    
function zOrQ(string $str) : bool {
    return preg_match("/[zqZQ]/", $str) ===1;
}
    
    var_dump(zOrQ("blah")); // bool(false)
    var_dump(zOrQ("blqh")); // bool(true)
    var_dump(zOrQ("bZ3h5")); // bool(true)
    var_dump(zOrQ("bz3h5")); // bool(true)