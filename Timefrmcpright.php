<?php
function DatefrmCopyright($var1){
    $newtime=date(substr($var1, 3));
    return $newtime;
}
echo DatefrmCopyright("(C)2019-20");
