<?php

session_start();

if (!$_SESSION["username"]) {
    //Do not show protected data, redirect to login...
    header('Location: ../dashboard/login.php');
}
?>


<!doctype html>
<html lang="en">

<head>

    <?php include 'view.indexstyle.php' ?>

    <style>
        ap {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            height: 60px;
            width: 200px;
            padding-top: 15px;
            /*line-height: 60px;*/
            text-align: center;
            font-family: verdana;
            font-size: 24px;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 4px;
        }

        ap:before {
            content: '';
            height: 90px;
            width: 200px;
            position: absolute;
            top: -15px;
            left: 0;
            border-left: 2px solid white;
            border-right: 2px solid white;
            transition: 1s;
        }

        ap:after {
            content: '';
            height: 60px;
            width: 230px;
            position: absolute;
            top: 0;
            left: -15px;
            border-top: 2px solid white;
            border-bottom: 2px solid white;
            transition: 1s;
        }

        ap:hover:before {
            transform: rotateX(180deg);
        }

        ap:hover:after {
            transform: rotateY(180deg);
        }

        .containertemp {

            height: 50px;
            width: 100%;
            background-color: transparent;
        }

        .btnspecial {
            border: 3px solid #1a1a1a;
            display: inline-block;
            padding: 10px;
            position: relative;
            text-align: center;
            transition: background 600ms ease, color 600ms ease;

        }

        input[type="radio"].toggle {
            display: none;

        }

        input[type="radio"].toggle+label {
            cursor: pointer;
            min-width: 70px;

        }

        input[type="radio"].toggle+label:hover {
            background: none;
            color: #1a1a1a;
        }

        input[type="radio"].toggle+label:after {
            background: #1a1a1a;
            content: "";
            height: 100%;
            position: absolute;
            top: 0;
            transition: left 200ms cubic-bezier(0.77, 0, 0.175, 1);
            width: 100%;
            z-index: -1;
        }

        input[type="radio"].toggle.toggle-left+label {
            border-right: 0;
        }

        input[type="radio"].toggle.toggle-left+label:after {
            right: 0%;
        }

        input[type="radio"].toggle.toggle-right+label {
            margin-left: -5px;
        }

        input[type="radio"].toggle.toggle-right+label:after {
            left: -105%;
        }

        input[type="radio"].toggle:checked+label {

            cursor: default;
            color: #fff;
            transition: color 200ms;
        }

        input[type="radio"].toggle:checked+label:after {

            left: 0;
        }

        /* .btnspecial {
            border: 3px solid #1a1a1a;
            display: inline-block;
            padding: 10px;
            position: relative;
            text-align: left;
            transition: background 600ms ease, color 600ms ease;
        }

        input[type=radio].toggle {
            display: none;
        }

        input[type=radio].toggle+label {
            cursor: pointer;
            min-width: 70px;

        }

        input[type=radio].toggle+label:hover {
            background: none;
            color: #1a1a1a;

        }

        input[type=radio].toggle+label:after {
            background: #1a1a1a;
            content: "";
            height: 100%;
            position: absolute;
            top: 0;
            transition: left 200ms cubic-bezier(0.77, 0, 0.175, 1);
            width: 100%;
            z-index: -1;
        }

        input[type=radio].toggle.toggle-left+label {
            right: 0;
        }

        input[type=radio].toggle.toggle-left+label:after {
            left: 100%;
        }

        input[type=radio].toggle.toggle-right+label {
            margin-left: -5px;
        }

        input[type=radio].toggle.toggle-right+label:after {
            right: 0%;
        }

        input[type=radio].toggle:checked+label {
            cursor: default;
            color: #fff;
            transition: color 200ms;
        }

        input[type=radio].toggle:checked+label:after {
            left: 0;

        } */




        /*  */


        .mid {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 1em;
        }

        .rocker {
            display: inline-block;
            position: relative;
            /*
  SIZE OF SWITCH
  ==============
  All sizes are in em - therefore
  changing the font-size here
  will change the size of the switch.
  See .rocker-small below as example.
  */
            font-size: 2em;
            font-weight: bold;
            text-align: center;
            text-transform: uppercase;
            color: #888;
            width: 7em;
            height: 4em;
            overflow: hidden;
            border-bottom: 0.5em solid #eee;
        }

        .rocker-small {
            font-size: 0.75em;
            padding: 10px;
            /* Sizes the switch */
            margin: -1% 0%;
        }

        .rocker::before {
            content: "";
            position: absolute;
            top: 0.5em;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #999;
            border: 0.5em solid #eee;
            border-bottom: 0;
        }

        .rocker input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .switch-left,
        .switch-right {
            cursor: pointer;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 2.5em;
            width: 3em;
            transition: 0.2s;
        }

        .switch-left {
            height: 2.4em;
            width: 2.75em;
            left: 0.85em;
            bottom: 0.4em;
            background-color: #ddd;
            transform: rotate(15deg) skewX(15deg);
        }

        .switch-right {

            right: 0.5em;
            bottom: 0;
            background-color: #bd5757;
            color: #fff;
        }

        .switch-left::before,
        .switch-right::before {
            content: "";
            position: absolute;
            width: 0.4em;
            height: 2.45em;
            bottom: -0.45em;
            background-color: #ccc;
            transform: skewY(-65deg);
        }

        .switch-left::before {
            left: -0.4em;
        }

        .switch-right::before {
            right: -0.375em;
            background-color: transparent;
            transform: skewY(65deg);
        }

        input:checked+.switch-left {
            background-color: #0084d0;
            color: #fff;
            bottom: 0px;
            left: 0.5em;
            height: 2.5em;
            width: 3em;
            transform: rotate(0deg) skewX(0deg);
        }

        input:checked+.switch-left::before {
            background-color: transparent;
            width: 3.0833em;
        }

        input:checked+.switch-left+.switch-right {
            background-color: #ddd;
            color: #888;
            bottom: 0.4em;
            right: 0.8em;
            height: 2.4em;
            width: 2.75em;
            transform: rotate(-15deg) skewX(-15deg);
        }

        input:checked+.switch-left+.switch-right::before {
            background-color: #ccc;
        }

        /* Keyboard Users */
        input:focus+.switch-left {
            color: #333;
        }

        input:checked:focus+.switch-left {
            color: #fff;
        }

        input:focus+.switch-left+.switch-right {
            color: #fff;
        }

        input:checked:focus+.switch-left+.switch-right {
            color: #333;
        }
    </style>



    <!-- Setting up CSS function ---------------------------------------------------------------------------------------------------------------------------------------------------------->

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!--<link rel="stylesheet" href="style3.css"/>-->
    <!--<link rel="stylesheet" href="internaltext/internaltext1.css"/>-->
    <link rel="stylesheet" href="testingcss.css">
    <link rel="stylesheet" href="buttonstyle1.css">
    <!--<link rel="stylesheet" href="3dproductionlayout.css">-->
    <!--<link rel="stylesheet" href="popup.css"/>-->
    <!--<link rel="stylesheet" href="frameview.css"/>-->
    <!--<link rel="stylesheet" href="3dworddisplay1.css">-->
    <link rel="stylesheet" href="notification.css" />

    <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-this one got problem on the pop up function-->
    <!-- Setting up CSS function ---------------------------------------------------------------------------------------------------------------------------------------------------------->


</head>

<body>
    <!--style="background:url(media/interioradjust1.JPG);"-->

    <!----------Image Layout for the Actual Factory---------------------------------------------------------------------------------------------------------------------------------------->



    <div class="outermostcontainer" style="background-color:black;width:100%;height:100%;">
        <img src="media/actuallayout1.png" style="transform: skewY(18deg);transform:skewX(18deg);border-radius: 10px;margin:4% 10%; width:80%; height:80%;opacity:1;z-index: -1;">
        <!--3dlayoutnew2-->
        <div id="notification-area">
        </div>

        <!----------Display Production L01-L09------------------------------------------------------------------------------------------------------------------------------------------------->
        <span id="title1" class="text111" style="position:absolute;">Production 1</span>
        <span id="title1a" class="text111" style="position:absolute;">L01 - L09</span>
        <!----------Display Production L10-L16------------------------------------------------------------------------------------------------------------------------------------------------->
        <span id="title2" class="text111" style="position:absolute;">Production 2</span>
        <span id="title2a" class="text111" style="position:absolute;">L10 - L16</span>
        <!----------Display Production L22-L33------------------------------------------------------------------------------------------------------------------------------------------------->
        <span id="title3" class="text111" style="position:absolute;">Production 3 </span>
        <span id="title3a" class="text111" style="position:absolute;">L22 - L33</span>

        <!----------Table List of Production Line from L01-L33--------------------------------------------------------------------------------------------------------------------------------->

        <a href="../dashboard/dashboard.php" style="position:absolute;left:-42%;top:85%;">
            <ap>Back</ap>
        </a>

        <div class="containertemp" style="position:absolute;left:42%;top:95%;">
            <div style="display: inline-block; vertical-align:middle;">
                <img src="media/sysdev.png" alt="img" style="width:20px;height:20px;font-weight: bold" />
            </div>
            <div style="display: inline-block;color:white;">
                <p>Sony EMCS(M) KL-Tec © SYSTEM DEVELOPMENT 2022</p>
            </div>
        </div>
        <!-- <section class="section">
       <a href="#" class="bb_button bb_button--diag-1"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--diag-1 bb_button--transp"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--diag-1 bb_button--alt"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--diag-1 bb_button--alt bb_button--transp"><span class="bb_button__text">Border Button</span></a>
    </section> -->

        <ul id="alignL01">

            <li>
                <a1 id="statusbackgroundcolor0" href="#" data-modal-target="#modal1">
                    <i class=" fa fa-cubes" aria-hidden="true"></i>
                    <span> - L01 </span>
                    <notificationpop id="displaypop0" style="display:block;">!</notificationpop>
                </a1>
            </li>
        </ul>


        <ul id="alignL02">
            <!--top increase 11% left increase 2%-->
            <li>
                <a1 id="statusbackgroundcolor1" href="#" data-modal-target="#modal2">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L02 </span>
                    <notificationpop id="displaypop1" style="display:block;">!</notificationpop>
                </a1>
            </li>

        </ul>
        <ul id="alignL03">
            <!--top=+3.1; left=+0.6-->
            <li>
                <a3 id="statusbackgroundcolor2" href="#" data-modal-target="#modal3" style="background:red;" onclick="change03()">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L03 </span>
                    <notificationpop id="displaypop2" style="display:block;">!</notificationpop>
                </a3>
            </li>
        </ul>

        <ul id="alignL04">
            <li>
                <a3 id="statusbackgroundcolor3" href="#" data-modal-target="#modal4" onclick="change04()">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L04 </span>
                    <notificationpop id="displaypop3" style="display:block;">!</notificationpop>
                </a3>
            </li>
        </ul>
        <ul id="alignL05">
            <li>
                <a3 id="statusbackgroundcolor4" href="#" data-modal-target="#modal5" onclick="change05()">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L05 </span>
                    <notificationpop id="displaypop4" style="display:block;">!</notificationpop>
                </a3>
            </li>
        </ul>
        <ul id="alignL06">
            <li>
                <a3 id="statusbackgroundcolor5" href="#" data-modal-target="#modal6" onclick="change06()">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L06 </span>
                    <notificationpop id="displaypop5" style="display:block;">!</notificationpop>
                </a3>
            </li>
        </ul>
        <ul id="alignL08">
            <li>
                <a3 id="statusbackgroundcolor6" href="#" data-modal-target="#modal8" onclick="change08()">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L08 </span>
                    <notificationpop id="displaypop6" style="display:block;">!</notificationpop>
                </a3>
            </li>
        </ul>
        <ul id="alignL09">
            <li>
                <a3 id="statusbackgroundcolor7" href="#" data-modal-target="#modal9">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L09 </span>
                    <notificationpop id="displaypop7" style="display:block;">!</notificationpop>
                </a3>
            </li>
        </ul>

        <ul id="alignL10">
            <!--production line 2 (10,12,13,14,15,16)-->
            <li>
                <a3 id="statusbackgroundcolor8" href="#" data-modal-target="#modal10" onclick="change10()">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L10 </span>
                    <notificationpop id="displaypop8" style="display:block;">!</notificationpop>
                </a3>
            </li>
        </ul>

        <ul id="alignL12">
            <!--production line 2 (10,12,13,14,15,16)-->
            <li>
                <a31 id="statusbackgroundcolor9" href="#" data-modal-target="#modal12" onclick="change12()">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L12 </span>
                    <notificationpop id="displaypop9" style="display:block;">!</notificationpop>
                </a31>
            </li>
        </ul>

        <ul id="alignL13">
            <!--production line 2 (10,12,13,14,15,16)-->
            <li>
                <a31 id="statusbackgroundcolor10" href="#" data-modal-target="#modal13">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L13 </span>
                    <notificationpop id="displaypop10" style="display:block;">!</notificationpop>
                </a31>
            </li>
        </ul>

        <ul id="alignL14">
            <!--production line 2 (10,12,13,14,15,16)-->
            <li>
                <a3 id="statusbackgroundcolor11" href="#" data-modal-target="#modal14" onclick="change14()">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L14 </span>
                    <notificationpop id="displaypop11" style="display:block;">!</notificationpop>
                </a3>
            </li>
        </ul>

        <ul id="alignL15">
            <!--production line 2 (10,12,13,14,15,16)-->
            <li>
                <a3 id="statusbackgroundcolor12" href="#" data-modal-target="#modal15">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L15 </span>
                    <notificationpop id="displaypop12" style="display:block;">!</notificationpop>
                </a3>
            </li>
        </ul>

        <ul id="alignL16">
            <!--production line 2 (10,12,13,14,15,16)-->
            <li>
                <a32 id="statusbackgroundcolor13" href="#" data-modal-target="#modal16" onclick="change16()">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L16 </span>
                    <notificationpop id="displaypop13" style="display:block;">!</notificationpop>
                </a32>
            </li>
        </ul>


        <ul id="alignL22" style="z-index: 10;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a41 id="statusbackgroundcolor14" href="#" data-modal-target="#modal22" onclick="change22()">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L22 </span>
                    <notificationpop id="displaypop14" class="rotate1" style="display:block;">!</notificationpop>
                </a41>
            </li>
        </ul>

        <ul id="alignL23" style="z-index: 9;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a4 id="statusbackgroundcolor15" href="#" data-modal-target="#modal23" onclick="change23()">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L23 </span>
                    <notificationpop id="displaypop15" class="rotate1" style="display:block;">!</notificationpop>
                </a4>
            </li>
        </ul>

        <ul id="alignL24" style="z-index: 8;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a4 id="statusbackgroundcolor16" href="#" data-modal-target="#modal24" onclick="change24()">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L24 </span>
                    <notificationpop id="displaypop16" class="rotate1" style="display:block;">!</notificationpop>
                </a4>
            </li>
        </ul>

        <ul id="alignL25" style="z-index: 7;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a61 id="statusbackgroundcolor17" href="#" data-modal-target="#modal25">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L25 </span>
                    <notificationpop id="displaypop17" class="rotate1" style="display:block;">!</notificationpop>
                </a61>
            </li>
        </ul>

        <ul id="alignL26" style="z-index: 6;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a6 id="statusbackgroundcolor18" href="#" data-modal-target="#modal26">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L26 </span>
                    <notificationpop id="displaypop18" class="rotate1" style="display:block;">!</notificationpop>
                </a6>
            </li>
        </ul>

        <ul id="alignL27" style="z-index: 5;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a6 id="statusbackgroundcolor19" href="#" data-modal-target="#modal27" onclick="change27()">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L27 </span>
                    <notificationpop id="displaypop19" class="rotate1" style="display:block;">!</notificationpop>
                </a6>
            </li>
        </ul>

        <ul id="alignL29" style="z-index: 4;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a7 id="statusbackgroundcolor20" href="#" data-modal-target="#modal29">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L29 </span>
                    <notificationpop id="displaypop20" class="rotate1" style="display:block;">!</notificationpop>
                </a7>
            </li>
        </ul>

        <ul id="alignL30" style="z-index: 3;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a7 id="statusbackgroundcolor21" href="#" data-modal-target="#modal30" onclick="change30()">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L30 </span>
                    <notificationpop id="displaypop21" class="rotate1" style="display:block;">!</notificationpop>
                </a7>
            </li>
        </ul>

        <ul id="alignL31" style="z-index: 2;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a7 id="statusbackgroundcolor22" href="#" data-modal-target="#modal31">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L31 </span>
                    <notificationpop id="displaypop22" class="rotate1" style="display:block;">!</notificationpop>
                </a7>
            </li>
        </ul>

        <ul id="alignL32" style="z-index: 1;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a8 id="statusbackgroundcolor23" href="#" data-modal-target="# " style="display:none;">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L32 </span>
                    <notificationpop id="displaypop23" class="rotate1" style="display:block;">!</notificationpop>
                </a8>
            </li>
        </ul>

        <ul id="alignL32EC" style="z-index: 1;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li id="nothing">
                <a9 id="statusbackgroundcolor24" href="#" data-modal-target="#modal32EC">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L32EC </span>
                    <notificationpop id="displaypop24" style="display:block;">!</notificationpop>
                </a9>
            </li>
        </ul>

        <ul id="alignL33" style="z-index: 2;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a9 id="statusbackgroundcolor25" href="#" data-modal-target="#modal33">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L33 </span>
                    <notificationpop id="displaypop25" style="display:block;">!</notificationpop>
                </a9>
            </li>
        </ul>

    </div>




    <!----------Modalling Setting for Button----------------------------------------------------------------------------------------------------------------------------------------------->

    <!----------------------part for L01 content---------------------------->
    <div class="modal" id="modal1">
        <div class="modal-header">
            <div class="title">Production Line L01 </div>
            <button id="closeputton1" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production
            <!-- <input id="toggle-on1" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on1" class="btnspecial" onclick="Buttontoggle1();">PMOD</label>
            <input id="toggle-off1" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off1" class="btnspecial" onclick="Buttontoggle1b();">SET</label> -->

            <label class="rocker rocker-small">
                <input type="checkbox">
                <span class="switch-left" onclick="Buttontoggle1b();">SET</span>
                <span class="switch-right" onclick="Buttontoggle1();">PMOD</span>
            </label>
            Status
            <br><br>

            <div id="figureframeset0" class="figureframe">
                <div id="mainDiv01"><?php include('link1.html') ?></div>

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L01 content---------------------------->

    <!----------------------part for L02 content---------------------------->
    <div class="modal" id="modal2">
        <div class="modal-header">
            <div class="title">Production Line L02</div>
            <button id="closeputton2" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production
            <input id="toggle-on2" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on2" class="btnspecial" onclick="Buttontoggle2();">PMOD</label>
            <input id="toggle-off2" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off2" class="btnspecial" onclick="Buttontoggle2b();">SET</label>
            Status
            <br><br>
            <div id="figureframeset1" class="figureframe">

            </div>
        </div>
    </div>

    <div id="overlay"></div>
    <!----------------------part for L02 content---------------------------->
    <!----------------------part for L03 content---------------------------->
    <div class="modal" id="modal3">
        <div class="modal-header">
            <div class="title">Production Line L03</div>
            <button id="closeputton3" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production
            <input id="toggle-on3" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on3" class="btnspecial" onclick="Buttontoggle3();">PMOD</label>
            <input id="toggle-off3" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off3" class="btnspecial" onclick="Buttontoggle3b();">SET</label>
            Status
            <br><br>

            <div id="figureframeset2" class="figureframe">
                <div id="mainDiv03"><?php include('link1.html') ?></div>
            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L03 content---------------------------->
    <!----------------------part for L04 content---------------------------->
    <div class="modal" id="modal4">
        <div class="modal-header">
            <div class="title">Production Line L04</div>
            <button id="closeputton4" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production
            <input id="toggle-on4" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on4" class="btnspecial" onclick="Buttontoggle4();">PMOD</label>
            <input id="toggle-off4" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off4" class="btnspecial" onclick="Buttontoggle4b();">SET</label>
            Status
            <br><br>

            <div id="figureframeset3" class="figureframe">
                <div id="mainDiv04"><?php include('link1.html') ?></div>
            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L04 content---------------------------->
    <!----------------------part for L05 content---------------------------->
    <div class=" modal" id="modal5">
        <div class="modal-header">
            <div class="title">Production Line L05</div>
            <button id="closeputton5" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production
            <input id="toggle-on5" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on5" class="btnspecial" onclick="Buttontoggle5();">PMOD</label>
            <input id="toggle-off5" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off5" class="btnspecial" onclick="Buttontoggle5b();">SET</label>
            Status
            <br><br>

            <div id="figureframeset4" class="figureframe">
                <div id="mainDiv05"><?php include('link1.html') ?></div>
            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L05 content---------------------------->
    <!----------------------part for L06 content---------------------------->
    <div class="modal" id="modal6">
        <div class="modal-header">
            <div class="title">Production Line L06</div>
            <button id="closeputton6" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <input id="toggle-on6" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on6" class="btnspecial" onclick="Buttontoggle6();">PMOD</label>
            <input id="toggle-off6" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off6" class="btnspecial" onclick="Buttontoggle6b();">SET</label>
            <br><br>

            <div id="figureframeset5" class="figureframe">
                <div id="mainDiv06"><?php include('link1.html') ?></div>

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L06 content---------------------------->
    <!----------------------part for L08 content---------------------------->
    <div class="modal" id="modal8">
        <div class="modal-header">
            <div class="title">Production Line L08</div>
            <button id="closeputton8" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <input id="toggle-on8" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on8" class="btnspecial" onclick="Buttontoggle8();">PMOD</label>
            <input id="toggle-off8" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off8" class="btnspecial" onclick="Buttontoggle8b();">SET</label>
            <br><br>

            <div id="figureframeset6" class="figureframe">

                <div id="mainDiv08"><?php include('link1.html') ?></div>
            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L08 content---------------------------->
    <!----------------------part for L09 content---------------------------->
    <div class="modal" id="modal9">
        <div class="modal-header">
            <div class="title">Production Line L09</div>
            <button id="closeputton9" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <input id="toggle-on9" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on9" class="btnspecial" onclick="Buttontoggle9();">PMOD</label>
            <input id="toggle-off9" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off9" class="btnspecial" onclick="Buttontoggle9b();">SET</label>
            <br><br>

            <div id="figureframeset7" class="figureframe">

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L09 content---------------------------->
    <!----------------------part for L10 content---------------------------->
    <div class="modal" id="modal10">
        <div class="modal-header">
            <div class="title">Production Line L10</div>
            <button id="closeputton10" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <input id="toggle-on10" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on10" class="btnspecial" onclick="Buttontoggle10();">PMOD</label>
            <input id="toggle-off10" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off10" class="btnspecial" onclick="Buttontoggle10b();">SET</label>
            <br><br>

            <div id="figureframeset8" class="figureframe">


                <div id="mainDiv10"><?php include('link1.html') ?></div>
            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L10 content---------------------------->
    <!----------------------part for L12 content---------------------------->
    <div class="modal" id="modal12">
        <div class="modal-header">
            <div class="title">Production Line L12</div>
            <button id="closeputton12" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <input id="toggle-on12" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on12" class="btnspecial" onclick="Buttontoggle12();">PMOD</label>
            <input id="toggle-off12" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off12" class="btnspecial" onclick="Buttontoggle12b();">SET</label>
            <br><br>

            <div id="figureframeset9" class="figureframe">
                <div id="mainDiv12"><?php include('link1.html') ?></div>
            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L12 content---------------------------->
    <!----------------------part for L13 content---------------------------->
    <div class="modal" id="modal13">
        <div class="modal-header">
            <div class="title">Production Line L13</div>
            <button id="closeputton13" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <input id="toggle-on13" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on13" class="btnspecial" onclick="Buttontoggle13();">PMOD</label>
            <input id="toggle-off13" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off13" class="btnspecial" onclick="Buttontoggle13b();">SET</label>
            <br><br>

            <div id="figureframeset10" class="figureframe">

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L13 content---------------------------->
    <!----------------------part for L14 content---------------------------->
    <div class="modal" id="modal14">
        <div class="modal-header">
            <div class="title">Production Line L14</div>
            <button id="closeputton14" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <input id="toggle-on14" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on14" class="btnspecial" onclick="Buttontoggle14();">PMOD</label>
            <input id="toggle-off14" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off14" class="btnspecial" onclick="Buttontoggle14b();">SET</label>
            <br><br>

            <div id="figureframeset11" class="figureframe">
                <div id="mainDiv14"><?php include('link1.html') ?></div>
            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L14 content---------------------------->
    <!----------------------part for L15 content---------------------------->
    <div class="modal" id="modal15">
        <div class="modal-header">
            <div class="title">Production Line L15</div>
            <button id="closeputton15" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <input id="toggle-on15" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on15" class="btnspecial" onclick="Buttontoggle15();">PMOD</label>
            <input id="toggle-off15" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off15" class="btnspecial" onclick="Buttontoggle15b();">SET</label>
            <br><br>

            <div id="figureframeset12" class="figureframe">

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L15 content---------------------------->
    <!----------------------part for L16 content---------------------------->
    <div class="modal" id="modal16">
        <div class="modal-header">
            <div class="title">Production Line L16</div>
            <button id="closeputton16" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <input id="toggle-on16" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on16" class="btnspecial" onclick="Buttontoggle16();">PMOD</label>
            <input id="toggle-off16" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off16" class="btnspecial" onclick="Buttontoggle16b();">SET</label>
            <br><br>

            <div id="figureframeset13" class="figureframe">
                <div id="mainDiv16"><?php include('link1.html') ?></div>
            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L16 content---------------------------->
    <!----------------------part for L22 content---------------------------->
    <div class="modal" id="modal22">
        <div class="modal-header">
            <div class="title">Production Line L22</div>
            <button id="closeputton22" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <input id="toggle-on22" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on22" class="btnspecial" onclick="Buttontoggle22();">PMOD</label>
            <input id="toggle-off22" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off22" class="btnspecial" onclick="Buttontoggle22b();">SET</label>
            <br><br>

            <div id="figureframeset14" class="figureframe">
                <div id="mainDiv22"><?php include('link1.html') ?></div>
            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L22 content---------------------------->
    <!----------------------part for L23 content---------------------------->
    <div class="modal" id="modal23">
        <div class="modal-header">
            <div class="title">Production Line L23</div>
            <button id="closeputton23" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <input id="toggle-on23" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on23" class="btnspecial" onclick="Buttontoggle23();">PMOD</label>
            <input id="toggle-off23" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off23" class="btnspecial" onclick="Buttontoggle23b();">SET</label>
            <br><br>

            <div id="figureframeset15" class="figureframe">
                <div id="mainDiv23"><?php include('link1.html') ?></div>
            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L23 content---------------------------->
    <!----------------------part for L24 content---------------------------->
    <div class="modal" id="modal24">
        <div class="modal-header">
            <div class="title">Production Line L24</div>
            <button id="closeputton24" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <input id="toggle-on24" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on24" class="btnspecial" onclick="Buttontoggle24();">PMOD</label>
            <input id="toggle-off24" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off24" class="btnspecial" onclick="Buttontoggle24b();">SET</label>
            <br><br>

            <div id="figureframeset16" class="figureframe">
                <div id="mainDiv24"><?php include('link1.html') ?></div>
            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L24 content---------------------------->
    <!----------------------part for L25 content---------------------------->
    <div class="modal" id="modal25">
        <div class="modal-header">
            <div class="title">Production Line L25</div>
            <button id="closeputton25" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <input id="toggle-on25" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on25" class="btnspecial" onclick="Buttontoggle25();">PMOD</label>
            <input id="toggle-off25" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off25" class="btnspecial" onclick="Buttontoggle25b();">SET</label>
            <br><br>

            <div id="figureframeset17" class="figureframe">

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L25 content---------------------------->
    <!----------------------part for L26 content---------------------------->
    <div class="modal" id="modal26">
        <div class="modal-header">
            <div class="title">Production Line L26</div>
            <button id="closeputton26" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <input id="toggle-on26" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on26" class="btnspecial" onclick="Buttontoggle26();">PMOD</label>
            <input id="toggle-off26" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off26" class="btnspecial" onclick="Buttontoggle26b();">SET</label>
            <br><br>

            <div id="figureframeset18" class="figureframe">

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L26 content---------------------------->
    <!----------------------part for L27 content---------------------------->
    <div class="modal" id="modal27">
        <div class="modal-header">
            <div class="title">Production Line L27</div>
            <button id="closeputton27" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <input id="toggle-on27" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on27" class="btnspecial" onclick="Buttontoggle27();">PMOD</label>
            <input id="toggle-off27" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off27" class="btnspecial" onclick="Buttontoggle27b();">SET</label>
            <br><br>

            <div id="figureframeset19" class="figureframe">
                <div id="mainDiv27"><?php include('link1.html') ?></div>
            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L27 content---------------------------->
    <!----------------------part for L29 content---------------------------->
    <div class="modal" id="modal29">
        <div class="modal-header">
            <div class="title">Production Line L29</div>
            <button id="closeputton29" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <input id="toggle-on29" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on29" class="btnspecial" onclick="Buttontoggle29();">PMOD</label>
            <input id="toggle-off29" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off29" class="btnspecial" onclick="Buttontoggle29b();">SET</label>
            <br><br>

            <div id="figureframeset20" class="figureframe">

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L29 content---------------------------->
    <!----------------------part for L30 content---------------------------->
    <div class="modal" id="modal30">
        <div class="modal-header">
            <div class="title">Production Line L30</div>
            <button id="closeputton30" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <input id="toggle-on30" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on30" class="btnspecial" onclick="Buttontoggle30();">PMOD</label>
            <input id="toggle-off30" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off30" class="btnspecial" onclick="Buttontoggle30b();">SET</label>
            <br><br>

            <div id="figureframeset21" class="figureframe">
                <div id="mainDiv30"><?php include('link1.html') ?></div>
            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L30 content---------------------------->
    <!----------------------part for L31 content---------------------------->
    <div class="modal" id="modal31">
        <div class="modal-header">
            <div class="title">Production Line L31</div>
            <button id="closeputton31" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <input id="toggle-on31" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on31" class="btnspecial" onclick="Buttontoggle31();">PMOD</label>
            <input id="toggle-off31" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off31" class="btnspecial" onclick="Buttontoggle31b();">SET</label>
            <br><br>

            <div id="figureframeset22" class="figureframe">
                <div id="mainDiv31"><?php include('link1.html') ?></div>
            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L31 content---------------------------->
    <!----------------------part for L32 content---------------------------->
    <div class="modal" id="modal32">
        <div class="modal-header">
            <div class="title">Production Line L32</div>
            <button id="closeputton32" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <input id="toggle-on32" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on32" class="btnspecial" onclick="Buttontoggle32();">PMOD</label>
            <input id="toggle-off32" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off32" class="btnspecial" onclick="Buttontoggle32b();">SET</label>
            <br><br>

            <div id="figureframeset23" class="figureframe">

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L32 content---------------------------->
    <!----------------------part for L32EC content-------------------------->
    <div class="modal" id="modal32EC">
        <div class="modal-header">
            <div class="title">Production Line L32EC</div>
            <button id="closeputton32EC" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <input id="toggle-on32EC" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on32EC" class="btnspecial" onclick="Buttontoggle32EC();">PMOD</label>
            <input id="toggle-off32EC" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off32EC" class="btnspecial" onclick="Buttontoggle32ECb();">SET</label>
            <br><br>

            <div id="figureframeset24" class="figureframe">
                <div id="mainDiv32EC"><?php include('link1.html') ?></div>

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L32EC content-------------------------->
    <!----------------------part for L33 content---------------------------->
    <div class="modal" id="modal33">
        <div class="modal-header">
            <div class="title">Production Line L33</div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <input id="toggle-on33" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on33" class="btnspecial" onclick="Buttontoggle33();">PMOD</label>
            <input id="toggle-off33" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off33" class="btnspecial" onclick="Buttontoggle33b();">SET</label>
            <br><br>

            <div id="figureframeset25" class="figureframe">

                <?php include("../bootstrapgridtestingL33.php") ?>
                <!--last one must use include if not the back button will dissapear-->
            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L33 content---------------------------->


    <!----------JSON Data Retrived--------------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- Bootstrap core JavaScript -->
    <script defer src="popup.js"></script>
    <script src="notification.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="library/js/scripts.js"></script>
    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="library/js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>

    <script src="internaltext/internaltext.js"></script>

    <script>
        //Load data after complete open web page
        $(document).ready(function() {

            getDataCounter();

            $("#dataCounterBody").empty();
            $("#dataCounterBody").append('<tr align="center" style="font-weight: bold">' +
                '<td colspan="8"><span><img src="media/loading2.gif" width="50" height="50" alt="Mplify"><p>Loading...</p></span></td></tr>');

        });

        //Get Counter data with javascript
        setInterval(getDataCounter, 10000);

        function getDataCounter() {
            $.ajax({ //create an ajax request to display.php
                type: "GET",
                url: "data/ajax_counter_data.php", //Data from folder data
                cache: false,
                dataType: "json", //expect html to be returned
                success: function(response) {

                    //console.log(response);

                    var summaryTable = document.getElementById("dataCounterBody");
                    //
                    $("#dataCounterBody").empty();
                    for (i = 0; i < response.length; i++) {

                        $("#dataCounterBody").append('<tr align="center" >' +
                            '<td><a href="" style="color:white"><span>' + response[i].line + '</span></a></td>' +
                            '<td><span  style="color:white">' + response[i].shift + '  </span></td>' +
                            '<td><span  style="color:white">' + response[i].lor + '</span></td>' +
                            '<td><span  style="color:white">' + response[i].target + '</span></td>' +
                            '<td><span  style="color:white">' + response[i].actual + '</span></td>' +
                            '<td><span  style="color:white">' + response[i].diff + '</span></td>' +
                            '<td><span  style="color:white">' + response[i].status + '</span></td>' +
                            '<td><span  style="color:white">' + response[i].model + '</span></td></tr>');

                    }

                    //document.getElementById('internalline'+i+'a').style.background = '#F53C42';
                    //document.getElementById('internalline'+i+'a').style.color = 'white';
                    //document.getElementById('outputvalue'+i).innerHTML= "Actual Output : "+response[i].actual;
                    //document.getElementById('outputvalue'+i+'t').innerHTML= "Target Output : "+response[i].target;
                    //document.getElementById('outputvalue'+i+'con').textContent=" Condition: Stop";
                    //document.getElementById('outputdisplay'+i).innerHTML= response[i].actual;

                    for (i = 0; i < response.length; i++) {
                        if (response[i].status == "Stop") {
                            document.getElementById('statusbackgroundcolor' + i).style.background = '#F53C42';
                            document.getElementById('figureframeset' + i).style.borderColor = '#F53C42';
                            document.getElementById('displaypop' + i).style.display = "block";
                            if (response[i].status == "Stop") {
                                temperary = response[i].line;
                                notifyError(temperary);
                            }

                        } else if (response[i].status == "Offline") {
                            document.getElementById('statusbackgroundcolor' + i).style.background = 'Grey';
                            document.getElementById('figureframeset' + i).style.borderColor = 'Grey';
                            //document.getElementById('internalline'+i+'a').style.background = 'Grey';
                            //document.getElementById('internalline'+i+'a').style.color = 'white';
                            //document.getElementById('outputvalue'+i).innerHTML= "Actual Output : "+response[i].actual;
                            //document.getElementById('outputvalue'+i+'t').innerHTML= "Target Output : "+response[i].target;
                            //document.getElementById('outputvalue'+i+'con').textContent=" Condition: Offline";
                            //document.getElementById('outputdisplay'+i).innerHTML= response[i].actual;
                            document.getElementById('displaypop' + i).style.display = "none";

                        } else if (response[i].status == "Run") {
                            document.getElementById('statusbackgroundcolor' + i).style.background = '#00D45F'; //#8AFF4C light green //#00D45F normal green //#00B14F dark green
                            document.getElementById('figureframeset' + i).style.borderColor = '#00D45F';
                            //document.getElementById('internalline'+i+'a').style.background = '#00D45F';
                            //document.getElementById('internalline'+i+'a').style.color = 'white';
                            //document.getElementById('outputvalue'+i).innerHTML= "Actual Output : "+response[i].actual;
                            //document.getElementById('outputvalue'+i+'t').innerHTML= "Target Output : "+response[i].target;
                            //document.getElementById('outputvalue'+i+'con').textContent=" Condition: Run";
                            //document.getElementById('outputdisplay'+i).innerHTML= response[i].actual;
                            document.getElementById('displaypop' + i).style.display = "none";

                        } else if (response[i].status == "Break") {
                            document.getElementById('statusbackgroundcolor' + i).style.background = '#FFEE4A';
                            document.getElementById('figureframeset' + i).style.borderColor = '#FFEE4A';
                            //document.getElementById('internalline'+i+'a').style.background = '#FFEE4A';
                            //document.getElementById('internalline'+i+'a').style.color = 'white';
                            //document.getElementById('outputvalue'+i).innerHTML= "Output : "+response[i].actual;
                            //document.getElementById('outputvalue'+i+'t').innerHTML= "Output : "+response[i].target;
                            //document.getElementById('outputvalue'+i+'con').textContent=" Condition: Break";
                            //document.getElementById('outputdisplay'+i).innerHTML= response[i].actual;
                            document.getElementById('displaypop' + i).style.display = "none";
                        }
                    }
                },

                complete: function() {
                    // Schedule the next request when the current one's complete
                    // setTimeout(getDataCounter(), 10000);  
                }
            });
        }
    </script>
    <!----------JSON Data Retrived--------------------------------------------------------------------------------------------------------------------------------------------------------->
    <!----------Notification Pop----------------------------------------------------------------------------------------------------------------------------------------------------------->
    <script>
        setInterval(function() {
            $("notificationpop").addClass("animatepop");
            $("notificationpop")[0].addEventListener(
                "animationend",
                function() {
                    $("notificationpop").removeClass("animatepop");
                },
                false
            );
        }, 1000);
    </script>
    <!----------Notification Pop----------------------------------------------------------------------------------------------------------------------------------------------------------->
    <!----------Notification View---------------------------------------------------------------------------------------------------------------------------------------------------------->
    <script>
        function notifyError(temperary) {
            temperarycall = "Production Line " + temperary + " |[ STOP ]| ";
            notify("error", temperarycall);
        }
    </script>
    <!----------Notification View---------------------------------------------------------------------------------------------------------------------------------------------------------->

    <!----------3d production layout function---------------------------------------------------------------------------------------------------------------------------------------------->

    <script>
        document.getElementById("checkbox").checked = true;
    </script>

    <!----------3d production layout function---------------------------------------------------------------------------------------------------------------------------------------------->

    <script>
        $('#statusbackgroundcolor24').off().on('click.data-api', function() {
            $('#mainDiv32EC').load('../bootstrapgridtestingL33.php');
        });

        $('#closeputton32EC').on('click', function() {
            $('#mainDiv32EC').load('indexempty.php');
            console.log("123");
        });



        // $('#statusbackgroundcolor22').on('click', function() {

        //     $.ajax({
        //         url: '../bootstrapgridtestingnewestL23.php',
        //         type: 'get',
        //         dataType: 'text',
        //         success: function(data) {
        //             $('#mainDiv31').html(data);
        //         }

        //     });
        //     // $('#mainDiv31').load('');
        // });

        $('#closeputton31').on('click', function() {
            $.ajax({
                url: 'indexempty.php',
                type: 'get',
                dataType: 'text',
                success: function(data) {
                    $('#mainDiv31').html(data);
                }

            });
            // $('#mainDiv31').load('indexempty.php');
        });



        // $('#statusbackgroundcolor21').on('click', function() {
        //     $('#mainDiv30').load('../bootstrapgridtestingL1.php');
        // });

        // $('#closeputton30').on('click', function() {
        //     $('#mainDiv30').load('indexempty.php');
        // });



        // $('#statusbackgroundcolor19').on('click', function() {
        //     $('#mainDiv27').load('../bootstrapgridtestingL27.php');
        // });

        // $('#closeputton27').on('click', function() {
        //     $('#mainDiv27').load('indexempty.php');
        // });



        // $('#statusbackgroundcolor16').on('click', function() {
        //     $('#mainDiv24').load('../bootstrapgridtestingL24.php');
        // });

        // $('#closeputton24').on('click', function() {
        //     $('#mainDiv24').load('indexempty.php');
        // });


        // $('#statusbackgroundcolor15').on('click', function() {
        //     $('#mainDiv23').load('../bootstrapgridtestingL23.php');
        // });

        // $('#closeputton23').on('click', function() {
        //     $('#mainDiv23').load('indexempty.php');
        // });



        // $('#statusbackgroundcolor14').on('click', function() {
        //     $('#mainDiv22').load('../bootstrapgridtestingL22.php');
        // });

        // $('#closeputton22').on('click', function() {
        //     $('#mainDiv22').load('indexempty.php');
        // });




        // $('#statusbackgroundcolor13').on('click', function() {
        //     $('#mainDiv16').load('../bootstrapgridtestingL16.php');
        // });

        // $('#closeputton16').on('click', function() {
        //     $('#mainDiv16').load('indexempty.php');
        // });



        // $('#statusbackgroundcolor11').on('click', function() {
        //     $('#mainDiv14').load('../bootstrapgridtestingL14.php');
        // });

        // $('#closeputton14').on('click', function() {
        //     $('#mainDiv14').load('indexempty.php');
        // });




        // $('#statusbackgroundcolor9').on('click', function() {
        //     $('#mainDiv12').load('../bootstrapgridtestingL12.php');
        // });

        // $('#closeputton12').on('click', function() {
        //     $('#mainDiv12').load('indexempty.php');
        // });




        // $('#statusbackgroundcolor8').on('click', function() {
        //     $('#mainDiv10').load('../bootstrapgridtestingL10.php');
        // });

        // $('#closeputton10').on('click', function() {
        //     $('#mainDiv10').load('indexempty.php');
        // });



        // $('#statusbackgroundcolor6').on('click', function() {
        //     $('#mainDiv08').load('../bootstrapgridtestingL8.php');
        // });

        // $('#closeputton8').on('click', function() {
        //     $('#mainDiv08').load('indexempty.php');
        // });




        // $('#statusbackgroundcolor5').on('click', function() {
        //     $('#mainDiv06').load('../bootstrapgridtestingL6.php');
        // });

        // $('#closeputton6').on('click', function() {
        //     $('#mainDiv06').load('indexempty.php');
        // });


        // $('#statusbackgroundcolor4').on('click', function() {
        //     $('#mainDiv05').load('../bootstrapgridtestingL5.php');
        // });

        // $('#closeputton6').on('click', function() {
        //     $('#mainDiv05').load('indexempty.php');
        // });



        // $('#statusbackgroundcolor3').on('click', function() {
        //     $('#mainDiv04').load('../bootstrapgridtestingL4.php');
        // });

        // $('#closeputton4').on('click', function() {
        //     $('#mainDiv04').load('indexempty.php');
        // });



        // $('#statusbackgroundcolor2').on('click', function() {
        //     $('#mainDiv03').load('../bootstrapgridtestingL3.php');
        // });

        // $('#closeputton3').on('click', function() {
        //     $('#mainDiv03').load('indexempty.php');
        // });



        // $('#statusbackgroundcolor0').on('click', function() {
        //     $('#mainDiv01').load('../bootstrapgridtestingL1.php');
        // });

        // $('#closeputton1').on('click', function() {
        //     $('#mainDiv01').load('indexempty.php');
        // }); 



        // $('#overlay').on('click', function() {
        //     unload();
        // });

        // function unload() {
        //     $('#mainDiv33').empty();
        //     $('#mainDiv32').empty();
        //     $('#mainDiv31').empty();
        //     $('#mainDiv30').empty();
        //     $('#mainDiv29').empty();
        //     $('#mainDiv27').empty();
        //     $('#mainDiv26').empty();
        //     $('#mainDiv25').empty();
        //     $('#mainDiv24').empty();
        //     $('#mainDiv23').empty();
        //     $('#mainDiv22').empty();
        //     $('#mainDiv16').empty();
        //     $('#mainDiv14').empty();
        //     $('#mainDiv13').empty();
        //     $('#mainDiv12').empty();
        //     $('#mainDiv10').empty();
        //     $('#mainDiv8').empty();
        //     $('#mainDiv6').empty();
        //     $('#mainDiv5').empty();
        //     $('#mainDiv4').empty();
        //     $('#mainDiv3').empty();
        //     $('#mainDiv2').empty();
        //     $('#mainDiv1').empty();
        //     console.log("456");
        // };


        function change33() {
            $('#mainDiv33').load('../bootstrapgridtestingL33.php');
        }
    </script>

    <script>
        // function Buttontoggle33() {
        //     $('#mainDiv33').load('../bootstrapgridtestingL33.php'); //need to change
        // }

        // function Buttontoggle33b() {
        //     $('#mainDiv33').load('indexempty.php');
        // }

        function Buttontoggle32EC() {
            $('#mainDiv32EC').load('../bootstrapgridtestingL33.php'); //need to change
        }

        function Buttontoggle32ECb() {
            $('#mainDiv32EC').load('indexempty.php');
        }

        // function Buttontoggle32() {
        //     $('#mainDiv32.').load('../bootstrapgridtestingL32.php');
        // }

        // function Buttontoggle32b() {
        //     $('#mainDiv32').load('indexempty.php');
        // }

        // // function Buttontoggle31() {
        // //     $('#mainDiv31').load('../bootstrapgridtestingnewestL23.php'); //need to change
        // // }

        // // function Buttontoggle31b() {
        // //     $('#mainDiv31').load('../bootstrapgridtestingL23.php'); //need to change
        // // }

        // function Buttontoggle30() {
        //     $('#mainDiv30').load(''); //need to change
        // }

        // function Buttontoggle30b() {
        //     $('#mainDiv30').load('indexempty.php');
        // }

        // function Buttontoggle29() {
        //     $('#mainDiv29').load(''); //need to change
        // }

        // function Buttontoggle29b() {
        //     $('#mainDiv29').load('indexempty.php');
        // }

        // function Buttontoggle27() {
        //     $('#mainDiv27').load('../bootstrapgridtestingL27.php');
        // }

        // function Buttontoggle27b() {
        //     $('#mainDiv27').load('indexempty.php');
        // }

        // function Buttontoggle26() {
        //     $('#mainDiv26').load(''); //need to change
        // }

        // function Buttontoggle26b() {
        //     $('#mainDiv26').load('indexempty.php');
        // }

        // function Buttontoggle25() {
        //     $('#mainDiv25').load(''); //need to change
        // }

        // function Buttontoggle25b() {
        //     $('#mainDiv25').load('indexempty.php');
        // }

        // function Buttontoggle24() {
        //     $('#mainDiv24').load('../bootstrapgridtestingL24.php');
        // }

        // function Buttontoggle24b() {
        //     $('#mainDiv24').load('indexempty.php');
        // }

        // function Buttontoggle23() {
        //     $('#mainDiv23').load('');
        // }

        // function Buttontoggle23b() {
        //     $('#mainDiv23').load('indexempty.php');
        // }

        // function Buttontoggle22() {
        //     $('#mainDiv22').load('../bootstrapgridtestingL22.php');
        // }

        // function Buttontoggle22b() {
        //     $('#mainDiv22').load('indexempty.php');
        // }

        // function Buttontoggle16() {
        //     $('#mainDiv16').load('../bootstrapgridtestingL16.php');
        // }

        // function Buttontoggle16b() {
        //     $('#mainDiv16').load('indexempty.php');
        // }

        // function Buttontoggle15() {
        //     $('#mainDiv15').load(''); //need to change
        // }

        // function Buttontoggle15b() {
        //     $('#mainDiv15').load('indexempty.php');
        // }

        // function Buttontoggle14() {
        //     $('#mainDiv14').load('../bootstrapgridtestingL14.php');
        // }

        // function Buttontoggle14b() {
        //     $('#mainDiv14').load('indexempty.php');
        // }

        // function Buttontoggle13() {
        //     $('#mainDiv13').load(''); //need to change
        // }

        // function Buttontoggle13b() {
        //     $('#mainDiv13').load('indexempty.php');
        // }

        // function Buttontoggle12() {
        //     $('#mainDiv12').load('../bootstrapgridtestingL12.php');
        // }

        // function Buttontoggle12b() {
        //     $('#mainDiv12').load('indexempty.php');
        // }

        // function Buttontoggle10() {
        //     $('#mainDiv10').load('../bootstrapgridtestingL10.php');
        // }

        // function Buttontoggle10b() {
        //     $('#mainDiv10').load('indexempty.php');
        // }

        // function Buttontoggle9() {
        //     $('#mainDiv09').load(''); //need to change
        // }

        // function Buttontoggle9b() {
        //     $('#mainDiv09').load('indexempty.php');
        // }

        // function Buttontoggle8() {
        //     $('#mainDiv08').load('../bootstrapgridtestingL8.php');
        // }

        // function Buttontoggle8b() {
        //     $('#mainDiv08').load('indexempty.php');
        // }

        // function Buttontoggle6() {
        //     $('#mainDiv06').load('../bootstrapgridtestingL6.php');
        // }

        // function Buttontoggle6b() {
        //     $('#mainDiv06').load('indexempty.php');
        // }

        // function Buttontoggle5() {
        //     $('#mainDiv05').load('../bootstrapgridtestingL5.php');
        // }

        // function Buttontoggle5b() {
        //     $('#mainDiv05').load('indexempty.php');
        // }

        // function Buttontoggle4() {
        //     $('#mainDiv04').load('../bootstrapgridtestingL4.php');
        // }

        // function Buttontoggle4b() {
        //     $('#mainDiv04').load('indexempty.php');
        // }

        // function Buttontoggle3() {
        //     $('#mainDiv03').load('../bootstrapgridtestingL3.php');
        // }

        // function Buttontoggle3b() {
        //     $('#mainDiv03').load('indexempty.php');
        // }

        // function Buttontoggle2() {
        //     $('#mainDiv02').load(''); //need to change
        // }

        // function Buttontoggle2b() {
        //     $('#mainDiv02').load('indexempty.php');
        // }

        // function Buttontoggle1() {
        //     $('#mainDiv01').load('../bootstrapgridtestingL4.php'); //need to change
        // }

        // function Buttontoggle1b() {
        //     $('#mainDiv01').load(''); //need to change
        // }
    </script>

    <script>

    </script>
</body>



</html>