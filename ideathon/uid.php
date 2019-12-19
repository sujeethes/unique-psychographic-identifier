<?php
    session_start();
    $email = $_SESSION['email'];
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "ideathon";

    $conn = new mysqli($server, $user, $pass, $db);
    if($conn->connect_error)
        die("There's some problem");
    $result = array();
    $sql = array();
    $j=0;
    $hex = '';
    $sql[0] = "SELECT * FROM media WHERE email='$email'";
    $result[0] = $conn->query($sql[0]);
    $sql[1] = "SELECT * FROM travelling WHERE email='$email'";
    $result[1] = $conn->query($sql[1]);
    $sql[2] = "SELECT * FROM food WHERE email='$email'";
    $result[2] = $conn->query($sql[2]);
    $sql[3] = "SELECT * FROM fashion WHERE email='$email'";
    $result[3] = $conn->query($sql[3]);
    $sql[4] = "SELECT * FROM sports WHERE email='$email'";
    $result[4] = $conn->query($sql[4]);
    $sql[5] = "SELECT * FROM socialmedia WHERE email='$email'";
    $result[5] = $conn->query($sql[5]);
    for($i=0;$i<6;$i++)
    {
        $result_string = '';
        if($result[$i]->num_rows > 0)
        {
            $q = array();
            while($row = $result[$i]->fetch_assoc()) {
                
                $q[0] = $row['q1'];
                $q[1] = $row['q2'];
                $q[2] = $row['q3'];
                $q[3] = $row['q4'];

                $q[0] = $q[0][0];
                $q[1] = $q[1][0];
                $q[2]= $q[2][0];
                $q[3] = $q[3][0];
                foreach($q as $option)
                {
                    if($option==1)
                    {
                        $result_string .= "00";
                    }
                    else if($option==2)
                    {
                        $result_string .= "01";
                    }
                    else if($option==3)
                    {
                        $result_string.= "10";
                    }
                    else if($option==4)
                    {
                        $result_string.= "11";
                    }
                }

            }
            $hex .= hexcon($result_string);
        }
    }
    function hexcon($num)
    {
        $num = dechex(bindec($num));
        if($num<9)
            return "0".$num;
        else
            return $num;
    }
    $sql4 = "SELECT id from user WHERE email='$email'";
    $result4 = $conn->query($sql4);
    if($result4->num_rows > 0)
    {
        while($row = $result4->fetch_assoc())
        {
            $id = $row['id'];
        }
    }
    $sql1 = "SELECT uid from user WHERE uid='$hex'";
    $result1 = $conn->query($sql1);
    if($result1->num_rows > 0)
    {
        $hex.= $id;
    }
    $sql2 = "UPDATE user SET uid='$hex' WHERE email='$email'";
    $conn->query($sql2);

    header('location:thankyou.php');
?>
