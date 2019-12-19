<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $a = $_POST['uid'];
    $a1=$a[0].$a[1];
    $a2=$a[2].$a[3];
    $a3=$a[4].$a[5];
    $a4=$a[6].$a[7];
    $a5=$a[8].$a[9];
    $a6=$a[10].$a[11];

    function hex2binary($x){
        $length_of_text_to_convert_to_binary = strlen($x);
        $hexadecimal_to_convert_to_binary_testable =$x; 
        $results_of_hexadecimal_to_binary_conversion = "";

        for($i = 0; $i < $length_of_text_to_convert_to_binary; $i++)
        {
            $current_char_of_hexadecimal_for_conversion = $hexadecimal_to_convert_to_binary_testable[$i];
        
            switch($current_char_of_hexadecimal_for_conversion)
            {
                case '0':
                    $results_of_hexadecimal_to_binary_conversion .= "0000";
                    break;
                
                case '1':
                    $results_of_hexadecimal_to_binary_conversion .= "0001";
                    break;
                
                case '2':
                    $results_of_hexadecimal_to_binary_conversion .= "0010";
                    break;
                
                case '3':
                    $results_of_hexadecimal_to_binary_conversion .= "0011";
                    break;
                
                case '4':
                    $results_of_hexadecimal_to_binary_conversion .= "0100";
                    break;
                
                case '5':
                    $results_of_hexadecimal_to_binary_conversion .= "0101";
                    break;
                
                case '6':
                    $results_of_hexadecimal_to_binary_conversion .= "0110";
                    break;
                
                case '7':
                    $results_of_hexadecimal_to_binary_conversion .= "0111";
                    break;
                
                case '8':
                    $results_of_hexadecimal_to_binary_conversion .= "1000";
                    break;
                
                case '9':
                    $results_of_hexadecimal_to_binary_conversion .= "1001";
                    break;
                
                case 'a':
                    $results_of_hexadecimal_to_binary_conversion .= "1010";
                    break;
                
                case 'b':
                    $results_of_hexadecimal_to_binary_conversion .= "1011";
                    break;
                
                case 'c':
                    $results_of_hexadecimal_to_binary_conversion .= "1100";
                    break;
                
                case 'd':
                    $results_of_hexadecimal_to_binary_conversion .= "1101";
                    break;
                
                case 'e':
                    $results_of_hexadecimal_to_binary_conversion .= "1110";
                    break;
                
                case 'f':
                    $results_of_hexadecimal_to_binary_conversion .= "1111";
                    break;
            }
        }
        return $results_of_hexadecimal_to_binary_conversion;
    }

    

$b1=hex2binary($a1);
$b2=hex2binary($a2);
$b3=hex2binary($a3);
$b4=hex2binary($a4);
$b5=hex2binary($a5);
$b6=hex2binary($a6);
$q = array();
$q[0]=$b1[0].$b1[1];
$q[1]=$b1[2].$b1[3];
$q[2]=$b1[4].$b1[5];
$q[3]=$b1[6].$b1[7];
$q[4]=$b2[0].$b2[1];
$q[5]=$b2[2].$b2[3];
$q[6]=$b2[4].$b2[5];
$q[7]=$b2[6].$b2[7];
$q[8]=$b3[0].$b3[1];
$q[9]=$b3[2].$b3[3];
$q[10]=$b3[4].$b3[5];
$q[11]=$b3[6].$b3[7];
$q[12]=$b4[0].$b4[1];
$q[13]=$b4[2].$b4[3];
$q[14]=$b4[4].$b4[5];
$q[15]=$b4[6].$b4[7];
$q[16]=$b5[0].$b5[1];
$q[17]=$b5[2].$b5[3];
$q[18]=$b5[4].$b5[5];
$q[19]=$b5[6].$b5[7];
$q[20]=$b6[0].$b6[1];
$q[21]=$b6[2].$b6[3];
$q[22]=$b6[4].$b6[5];
$q[23]=$b6[6].$b6[7];
$ansr = array();
for($e=0;$e<24;$e++)
{
    if($q[$e][0]==0)
    {
        if($q[$e][1]==0)
            $ansr[$e] = 1; 
        else
            $ansr[$e] = 2;
    }
    else
    {
        if($q[$e][1]==0)
            $ansr[$e] = 3; 
        else
            $ansr[$e] = 4;
    }
    }
}
foreach($ansr as $r)
{
    if($r==1)
    {
        
    }
}
?>