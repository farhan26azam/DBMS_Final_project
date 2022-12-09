<?php
$background = "tech_back.jpg"?>
<html style="background-image: url('<?php echo $background;?>');
    scroll-behavior: auto;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    ">
<head>
    <meta charset="UTF-8">
    <title>Cryptex NFTs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link rel="icon" type="image/x-icon" href="icon.png">

    <!--        <link rel="stylesheet" href="css/bootstrap.min.css">-->
    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.rtl.css">
    <link rel="stylesheet" href="css/bootstrap-grid.rtl.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.rtl.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.rtl.min.css">
    <!--        <link rel="stylesheet" href="good_folder/css/bootstrap-utilities.css">-->
    <link rel="stylesheet" href="css/bootstrap-utilities.min.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.rtl.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.rtl.min.css">
    <style>
        @font-face {
            font-family: LeagueSpartan;
            src: url(LeagueSpartan-VariableFont_wght.ttf);
        }
        @font-face {
            font-family: Kombu;
            src: url(gomarice_sio_kombu.ttf);
        }
        @font-face {
            font-family: Hammersmith;
            src: url(HammersmithOne-Regular.ttf);
        }
        @font-face {
            font-family: PoppinsBold;
            src: url(Poppins-Bold.ttf);
        }
        .active{
            float: left;
            color: white;
            text-align: center;
            padding: 14px 25px;
            text-decoration: none;
            font-size: 25px;
            font-family: 'LeagueSpartan',serif;
            font-weight: bold;
        }

        div.front {
            position: absolute;
            top: 55px;
            height: 700px;
            width: 98%;
            margin: 15px 15px 0 15px;
            background-color: transparent;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            border: solid thin;
            border-style: none;
            border-color: royalblue;
            border-radius: 20px;
        }

        .dashboard_button {
            font-size: 4vh;
            font-size: 2vw;
            font-family: LeagueSpartan;
            font-weight: bold;
            color: white;
            text-decoration: none;
            text-align: center;
            margin-top: 10vh;
            margin-left: 40vw;
            background-color: slateblue;
            width: 300px;
            height: 60px;
            border-radius: 10px;
            border-style: none;
        }

        div.front {
            padding-top: 2vh;
            position: absolute;
            height: 60vh;
            width: 98%;
            margin: 15px 15px 0 15px;
            background-color: transparent;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            border: solid thin;
            border-style: none;
            border-color: royalblue;
            border-radius: 20px;
        }

        div.side {
            margin: 15px 15px 15px 15px;
            position: absolute;
            top: 70vh;
            height: 60vh;
            width: 22vw;
            background-color: transparent;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            border: solid thin;
            border-color: royalblue;
            border-radius: 20px;
        }
        div.side:hover {
            border: solid;
            background-color: black;
            border-color: royalblue;
            transform: scale(1.01,1.01);
        }
        div.middle {
            margin: 15px 15px 15px 15px;
            position: absolute;
            top: 70vh;
            height: 60vh;
            width: 48vw;
            background-color: transparent;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            border: solid thin;
            border-color: royalblue;
            border-radius: 20px;
        }

        div.middle:hover {
            border: solid;
            background-color: black;
            border-color: royalblue;
            transform: scale(1.01,1.01);
        }

        p {
            color: white;
            font-family: sans-serif;
        }

        p.sidet {
            font-family: LeagueSpartan;
            font-weight: bold;
            text-align: center;
            font-size: 3vw;
            padding-top: 4vh;
            padding-bottom: 4vh;
        }

        button.more {
            position: absolute;
            margin-left: 20%;
            bottom: 20px;
            font-size: 2pc;
            font-family: LeagueSpartan;
            color: white;
            text-decoration: none;
            text-align: center;
            background-color: royalblue;
            width: 60%;
            height: 50px;
            border-radius: 10px;
            border: solid thin;
            border-color: royalblue;
        }

        button.more:hover {
            background-color: black;
            transform: scale(1.1,1.1);
        }


        div.proj {
            position: absolute;
            right: 5%;
            margin: 5pc 2pc 2pc 2pc;
            position: absolute;
            height: 50vh;
            width: 25vw;
            background-color: #161616;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            border: none;
            border-radius: 20px;
        }

        div.proj:hover {
            background-color: #282828;
            transform: scale(1.02,1.02);
        }

        div.img {
            position: absolute;
            left: 10%;
            top: 2%;
            position: absolute;
            height: 75%;
            width: 80%;
            border: none;
            border-radius: 20px;
        }

        center_gif{
            margin-top: 2px;
            margin-left: 40%;
            width: 20px;
            float: right;
        }

        .collections{
            height: 45vh;
            width: 18vw;
            margin: auto;;
            background-color: transparent;
            border-radius: 20px;
            border-style: groove;
            border-color: transparent;
        }

        .sidet_highlights{
            padding-top: -20px;
            padding-left: 25%;
            font-family: LeagueSpartan;
            font-size: 40px;
        }
        .NFT1{
            border-style: groove;
            border-color: transparent;
            border-radius: 20px;
            background-color: darkslateblue;
            width: 40%;
            height: 65%;
            float: left;
            margin-top: -5%;
            margin-left: 7%;
        }
        .NFT1_contain{
            padding-top: 1vh;
            padding-left: 1vw;
            padding-right: 1vw;
            background-color: transparent;
            width: 90%;
            height: 80%;

        }

        .NFT2{
            border-style: groove;
            border-color: transparent;
            border-radius: 20px;
            background-color: darkslateblue;
            width: 40%;
            height: 65%;
            float: right;
            margin-top: -5%;
            margin-right: 7%;
        }

        .NFT_description{
            font-size: 2vw;
            font-family: LeagueSpartan;
            margin: auto;
            text-align: center;
            padding-top: 25px;
            font-weight: bold;
        }

        .collection_contain{
            border-style: groove;
            border-color: transparent;
            border-radius: 20px;
            background-color: darkslateblue;
            width: 20vw;
            height: 40vh;
            float: left;
            margin-top: -3vh;
            margin-left: -1vw;

        }

    </style>

</head>
<body style="background-image: url('<?php echo $background; ?>')">

<div class=”top_nav”
     style="background-color: slateblue;
border-style: groove;
border-color: transparent;
border-radius: 30px;
position: fixed;
top: 0;
height: 50px;
width: 99.5%;
float: left;
z-index: 10 !important;"
>
    <div class="topnav" style="padding-left: 34vw">
        <p style="padding-top: 12px;
        color: white;font-size: 40px;
        font-family: Kombu;float: left;
        margin-left: -48%">CRYPTEX</p>
        <a class="active" href="cryptex.php">Home</a>
        <a class="active" href="#Trending">Trending</a>
        <a class="active" href="projects.php">Projects</a>
        <a class="active" href="#account">My Account</a>


    </div>
</div>

<div class="front">
    <p style="
    font-family: 'Kombu';
    font-size: 120px;
    margin-top: 5vh;
    color: white;
    text-align:center">
        Cryptex NFTs
    </p>
    <img class="center_gif"
         style="border-style: groove;border-color: transparent;
             border-radius: 30px;width: 15vw;
             height: 15vw; margin-right: 15vw; float: right;
             margin-top: 10vh" src="videos/ape_gif.webp">

    <p style="font-family: PoppinsBold;
    opacity: 1;color: white;margin-left: 10vw;
     margin-top:20vh;font-size:6vh;font-size: 4vw">
        Be at the front-line of the <br><br><br>NFT revolution
    </p>
    <button class="dashboard_button">
        Open dashboard
    </button>
</div>


<div class="side" style="">
    <p class="sidet">Collections</p>
    <div class="collections">
        <div class="collection_contain">
            <div class="NFT1_contain">
                <img style="margin: auto;

                height: 30vh;
                border-style: groove;
                border-radius: 30px;
                border-color: transparent";
                     src="videos/vampire_x.webp">
                <p class="NFT_description">Vampire - X</p>
            </div>
        </div>
    </div>
    <button class="more">
        More
    </button>
</div>

<div class="middle" style="left:24%">
    <p class="sidet">NFTs</p>

    <div class="NFT1">
        <div class="NFT1_contain">
            <img style="width: 100%; height: 90%; border-style: groove; border-radius: 30px; border-color: transparent;position: relative";
                 src="https://i.seadn.io/gae/5j5EIAn77bETPT7rK7U5uNxfu3NDhyc-39WP-g9ERCjkJb27Q8NM_z4poKhqkUvkDnxmLp7weK_7h-zOX1J_fvh8EhtjqH33Ty1EHA?auto=format&w=384">
            <p class="NFT_description">Lightborn Avatars #248</p>
        </div>

    </div>
    <div class="NFT2">
        <div class="NFT1_contain">
            <img style="width: 100%; height: 90%; border-style: groove; border-radius: 30px; border-color: transparent;position: relative";
                 src="https://i.seadn.io/gae/Z75rz2l9HH85DMteWFNGcuckSvz_aWZYvfHctCw3lUa57YuSvWfJLCGlYoIiVik3UoyVpLVuC1Ptj063qW5twYv3n_YTYdFHJarU?auto=format&w=384">
            <p class="NFT_description">Cool Cookies #1943</p>
        </div>
    </div>
    <button class="more" style="float: left; margin-left: -30%; margin-right: -30%">
        More
    </button>
</div>

<div class="side" style="right:0%">
    <p class="sidet">Creators</p>
    <div class="collections">
        <div class="collection_contain">
            <div class="NFT1_contain">
                <img style="margin: auto;

                height: 30vh;
                border-style: groove;
                border-radius: 30px;
                border-color: transparent";
                     src="https://i.seadn.io/gcs/files/f3b11e36be14a5d31c75b19d03996fed.gif?auto=format&w=256">
                <p class="NFT_description">RENGA</p>
            </div>


        </div>
    </div>
    <button class="more">
        More
    </button>
</div>



<div class="front" style="position:absolute; top:140vh; height: 80vh">
    <div style="margin-top: 0;margin-left: 5%; margin-right: 50%; background-color:transparent">
        <p style="font-size:4vw;
         font-family: LeagueSpartan">Try it out with<br><br> these projects</p>
    </div>

    <div class="proj" >
        <div class="img">
            <img style='height: 100%; width: 100%; object-fit: cover; margin-top: 25px; border-radius: 20px; border-style: none'
                 src="NFT_project_images/nft-supducks-preview.jpg" alt="p2" />  </div>
        <p class="sidet" style="position:absolute; top: 82%; left: 27%; font-size: 2.5vw">SupDucks</p>
        <a href="project.php?project_name=<?php echo $name; ?>" >   <button name='view' type="button" class="more">Details</button>

    </div>
    <div class="proj" style="right: 34%;">

        <div class="img">
            <img style='height: 100%; width: 100%; object-fit: cover; margin-top: 25px; border-radius: 20px; border-style: none'
                 src="NFT_project_images/nft-decentraland-preview.jpg" alt="p2" />  </div>
        <p class="sidet" style="position:absolute; top: 82%; left: 23%; font-size: 2.5vw">Decentraland</p>

    </div>
    <div class="proj" style="right: 63%;">

        <div class="img">
            <img style='height: 100%; width: 100%; object-fit: cover; margin-top: 25px; border-radius: 20px; border-style: none'
                 src="NFT_project_images/nft-cryptokitties-preview_27108.jpg" alt="p2" />  </div>
        <p class="sidet" style="position:absolute; top: 82%; left: 23%; font-size: 2.5vw">Crypto Kitties</p>

    </div>
</div>


<nav class="foot">
    <!--     background-color: transparent;-->
    <!--     bottom: 0;-->
    <!--     height: 50vh;"-->

    <!--    <p style="padding-top: 4vh;-->
    <!--        color: white;font-size: 50px;-->
    <!--        font-family: Kombu;float: left;-->
    <!--        margin-left: 6vw">CRYPTEX</p>-->
</nav>


</body>
</html>
