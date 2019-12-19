<!DOCTYPE html>
<html>
    <head>
        <title>IDEATHON</title>
        <style>
            body
            {
                background-image: url("https://visme.co/blog/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-03.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }
            h1{
                text-align: center;
                margin-bottom: 80px;
            }
            .signin
            {
                text-decoration: none;
                text-align: center;
                border: 1px solid gold;
                padding: 15px;
                font-size: 20px;
                margin-left: 5%;
                color:blanchedalmond;
                background-color: blueviolet;
                /* border-radius: 100px;  */
            }
            .signin:hover
            {
                background-color: gold;
                color: black;
            }
            .main
            {
                margin-top: 30px;
                display: flex;
                flex-direction: row;
            }
            .left
            {
                margin-left: 80px;
            }
            .right
            {
                margin-left: 80px;
            }
            .text
            {
                background-color: violet;
                position: relative;
                height: 50px;
                width: 500px;
                margin-top: 30px;
                padding: 10px;
                padding-top: 30px;
                font-size: 20px;
                margin-left: 30px;
                border: 1px solid black;
                border-radius: 10px; 
                text-align: center;
                overflow: hidden;
            }
            .text:hover
            {
                height: 60px;
                width: 500px;
                padding-top: 40px;
                transition-duration: 1000ms;
                font-size: 22px;
            }
            .ID
            {
                text-decoration: none;
                text-align: left;
                border: 1px solid green;
                width: 350px;
                padding: 15px;
                font-size: 20px;
                margin-left: 18%;
                color:black;
                background-color:MistyRose;
            }
            .create
            {
                font-size: 16px;
                margin-left:40%;
                color: blue;
            }
        </style>
    </head>
    <body>
        <h1>Welcome to (Website Name)</h1>
        <form action="dec.php" method="POST">
        <input class="ID" type="text" name="uid" placeholder="Enter UID here">
        <input type="submit"  class="signin" value="Click Here to know the details!!"><br>
        </form>
    </body>
</html>