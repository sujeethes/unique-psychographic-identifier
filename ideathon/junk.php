<?php 
function hexcon($num)
{
    $num = dechex(bindec($num));
    if($num<9)
        return "0".$num;
    else
        return $num;
}
?>