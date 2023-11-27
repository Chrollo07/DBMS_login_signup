<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            margin:0;
            padding:0;
            font-family: sans-serif;
            background: linear-gradient(#141e30, #243b55);
            background-attachment: fixed;
        }
        
        .card {
        margin: auto;
        width: 210px;
        height: 280px;
        background: rgb(39, 39, 39);
        border-radius: 12px;
        box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.123);
        align-items: center;
        justify-content: flex-start;
        transition-duration: .5s;
        filter: drop-shadow(0px 0px 25px rgba(209, 38, 197, 0.5));
        background: rgb(255, 0, 179);
        background: linear-gradient(147deg, rgb(255, 0, 179) 0%, rgba(0,212,255,1) 100%);
        }

        .profileImage {
        background: linear-gradient(to right,rgb(54, 54, 54),rgb(32, 32, 32));
        margin-top: 20px;
        width: 170px;
        height: 170px;
        border-radius: 50%;
        box-shadow: 5px 10px 20px rgba(0, 0, 0, 0.329);
        }

        .textContainer {
        width: 100%;
        text-align: center;
        padding: 20px;
        display: flex;
        flex-direction: column;
        }

        .name {
        font-size: 0.9em;
        font-weight: 600;
        color: white;
        letter-spacing: 0.9px;
        margin-bottom: 0;
        }

        .profile {
        font-size: 0.84em;
        color: rgb(194, 194, 194);
        letter-spacing: 0.2px;
        }

        .card:hover {
        background-color: rgb(43, 43, 43);
        transition-duration: 0.5s;
        filter: drop-shadow(0px 0px 50px rgba(209, 38, 197, 1));
        }
        .card::after {
        content: '';
        background-color: #181818;
        position: absolute;
        z-index: -1;
        transition: 0.3s ease;
        height: 90%;
        width: 90%;
        top: 5%;
        border-radius: 12px;
        }

        #img{
            position: relative;
            z-index: 5;
            width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: 50%;
        }

        #logout{
            padding: 0px 20px;
            color: #03e9f4;
            background-color: #141e30;
            border: 2px solid #03e9f4;
            
        }
        #title{
            padding: 20px 0px;
            color: #03e9f4;
            font-size: 1.4em;
            
        }
        #logout:hover{
            background: #03e9f4;
            color: #141e30;
            border-radius: 5px;
            box-shadow: 0 0 5px #03e9f4,
                        0 0 25px #03e9f4,
                        0 0 50px #03e9f4,
                        0 0 100px #03e9f4;
        }
    </style>
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {

        echo "authenticated";
        header("Location: index.html");
        exit();
    }
?>
    <nav class="navbar navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#" id="title">MEMBERS PAGE</a>

            <ul class="navbar-nav">
                <li class="navbar-item">
                    <a href="logout.php" class="nav-link btn btn-primary" id="logout">   
                    Logout</a>
                </li>
            </ul>

    </div>
    </nav>

    <div class="container px-auto" id="card_container">
        <div class="row mb-4 mt-3" id="card_row">
            <div class="col-md-2"></div>
            <div class="col-md-2 px-1">
                <div class="card">
                    <div class="profileImage">
                        <img src="gallery/chrollo.jpg" alt="" id="img">
                    </div>
                    <div class="textContainer">
                        <p class="name">Jaym Ocampo</p>
                        <p class="profile">Frontend Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 px-1">
                <div class="card">
                    <div class="profileImage">
                        <img src="gallery/gojo.jpg" alt="" id="img">
                    </div>
                    <div class="textContainer">
                        <p class="name">Jyll Yver Soner </p>
                        <p class="profile">Backend Developer I</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 px-1">
                <div class="card">
                    <div class="profileImage">
                        <img src="gallery/eren.jpg" alt="" id="img">
                    </div>
                    <div class="textContainer">
                        <p class="name">Andrei Odosis</p>
                        <p class="profile">PHP Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">

            <div class="col-md-3 px-1">
                <div class="card">
                    <div class="profileImage">
                        <img src="gallery/aki.jpg" alt="" id="img">
                    </div>
                    <div class="textContainer">
                        <p class="name">Carlos Sadaya</p>
                        <p class="profile">UI/UX Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 px-1">
                <div class="card">
                    <div class="profileImage">
                        <img src="gallery/toji.jpg" alt="" id="img">
                    </div>
                    <div class="textContainer">
                        <p class="name">Gemry Ken Lim</p>
                        <p class="profile">Database Administrator </p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 px-1">
                <div class="card">
                    <div class="profileImage">
                        <img src="gallery/denji.jpg" alt="" id="img">
                    </div>
                    <div class="textContainer">
                        <p class="name">Jacob Bongalonta</p>
                        <p class="profile">Backend Developer II</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 px-1">
                <div class="card">
                    <div class="profileImage">
                        <img src="gallery/killua.jpg" alt="" id="img">
                    </div>
                    <div class="textContainer">
                        <p class="name">Aldrin Zamora</p>
                        <p class="profile">Software Tester</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>