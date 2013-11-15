<?php 
function getFolderList($path) {
    $result= Array();
    if (is_dir($path)) {
        if ($dh=opendir($path)) {
            while (($f=readdir($dh)) !==false) if ($f!="." && $f!="..") {
                $result[]= $path."/".$f;
                if (is_dir($path."/".$f)) {
                    $recur= getFolderList($path."/".$f);
                    foreach ($recur as $k=>$v) {
                        $result[]= $v;
                    };
                };
            };
        };
    };
    return $result;
};
?>