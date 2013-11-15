<?php 
function filterRegexArray($arr, $regexValue=null, $regexKey=null, $keySafe=false, $operator="&&") {
    $result= Array();
    foreach ($arr as $k=>$v) {
        if ($regexValue) {
            $fValue= preg_match($regexValue, $v);
        } else {
            $fValue= true;
        };
        if ($regexKey) {
            $fKey= preg_match($regexKey, $k);
        } else {
            $fKey= true;
        };
        if (eval("return $fValue $operator $fKey;")) if ($keySafe) {
            $result[$k]=$v;
        } else {
            $result[]= $v;
        };
    };
    return $result;
};
?>