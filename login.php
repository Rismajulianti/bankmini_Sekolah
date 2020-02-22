<?php
session_start();
$last_username = "";
if(isset($_COOKIE['last_username'])){
    $last_username = $_COOKIE['last_username'];
}
if(isset($_SESSION['username'])){
    header("Location: tampilan.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Aplikasi</title>
    <style>
    body{
        padding:100px;
        background-color: royalblue;
        font-family: sans-serif;
    }
    .login-box{
        background-color: aliceblue;
        border-radius:10px;
        width: 30%;
        height: 300px;
        margin: auto;
        padding:5px;
    }
    h2{
        text-align: center;
        font-weight: 250;
        padding:5px;
        font-family: 'Times New Roman', Times, serif;
    }
    .nama{
        box-sizing: border-box;
        width: 90%;
        padding: 10px;
        font-size: 10;
        margin-bottom: 20px;
        margin:10px;
        border-radius:5px;
    }
    .hr{
        width: 300px;
    }
    .tombol{
        width: 305PX;
        height:30px;
        margin:13px;
        padding:5px;
    }
    input[type=submit]:hover, input[type=submit]:active{
        background-color: aqua;
        outline: none;
    }
    label{
        margin:10px;
        padding:10px;
    }
    </style>
</head>
<body>
        <div class="login-box">
        <h2>Mini Bank</h2>
        
            <form>
            <label for="inputPassword4">username</label>
            <input type="text" class="nama" placeholder="username"><br>
            <label for="inputPassword4">password</label>
            <input type="password" class="nama" placeholder="password"><br>
            <li class="nav-item"> <a class="nav-link" href="tampilan.html">klik disini</a></li>
            <li class="nav-item"> <a class="nav-link" href="tampilan.html">klik disini</a></li>

        </form>
    </div>
</body>
</html>