<?php 
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $email = $_POST['email'];
        $_SESSION['email'] = $email;
        $sma1 = $_POST['sma1'];
        $sma2 = $_POST['sma2'];
        $sma3 = $_POST['sma3'];
        $sma4 = $_POST['sma4'];
        
        $sp1 = $_POST['sp1'];
        $sp2 = $_POST['sp2'];
        $sp3 = $_POST['sp3'];
        $sp4 = $_POST['sp4'];
        
        $m1 = $_POST['m1'];
        $m2 = $_POST['m2'];
        $m3 = $_POST['m3'];
        $m4 = $_POST['m4'];

        $tr1 = $_POST['tr1'];
        $tr2 = $_POST['tr2'];
        $tr3 = $_POST['tr3'];
        $tr4 = $_POST['tr4'];

        $f1 = $_POST['f1'];
        $f2 = $_POST['f2'];
        $f3 = $_POST['f3'];
        $f4 = $_POST['f4'];

        $fa1 = $_POST['fa1'];
        $fa2 = $_POST['fa2'];
        $fa3 = $_POST['fa3'];
        $fa4 = $_POST['fa4'];

        $server = "localhost";
        $user = "root";
        $pass = "";
        $db = "ideathon";

        $conn = new mysqli($server, $user, $pass, $db);
        if($conn->connect_error)
            die("There's some problem");
        $sql1 = "INSERT INTO fashion(email,q1,q2,q3,q4) VALUES('$email','$fa1','$fa2','$fa3','$fa4')";
        $sql2 = "INSERT INTO food(email,q1,q2,q3,q4) VALUES('$email','$f1','$f2','$f3','$f4')";
        $sql3 = "INSERT INTO travelling(email,q1,q2,q3,q4) VALUES('$email','$tr1','$tr2','$tr3','$tr4')";
        $sql4 = "INSERT INTO media(email,q1,q2,q3,q4) VALUES('$email','$m1','$m2','$m3','$m4')";
        $sql5 = "INSERT INTO sports(email,q1,q2,q3,q4) VALUES('$email','$sp1','$sp2','$sp3','$sp4')";
        $sql6 = "INSERT INTO socialmedia(email,q1,q2,q3,q4) VALUES('$email','$sma1','$sma2','$sma3','$sma4')";
        $sql7 = "INSERT INTO user(email) VALUES('$email')";
        if($conn->query($sql1)==TRUE)
        {
            if($conn->query($sql2)==TRUE)
            {
                if($conn->query($sql3)==TRUE)
                {
                    if($conn->query($sql4)==TRUE)
                    {
                        if($conn->query($sql5)==TRUE)
                        {
                            if($conn->query($sql6)==TRUE)
                            {        
                                if($conn->query($sql7)==TRUE)
                                {                                              
                                    $conn->close();
                                    header("location:uid.php");
                                }
                                else
                                {
                                    echo $conn->error;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
?>
