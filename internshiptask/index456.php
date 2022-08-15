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

        <!-- <section class="section">
       <a href="#" class="bb_button bb_button--diag-1"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--diag-1 bb_button--transp"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--diag-1 bb_button--alt"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--diag-1 bb_button--alt bb_button--transp"><span class="bb_button__text">Border Button</span></a>
    </section> -->

        <ul id="alignL01">

            <li>
                <a1 id="abc0" href="#" data-modal-target="#modal1">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L01 </span>
                    <notificationpop id="displaypop0" style="display:block;">!</notificationpop>
                </a1>
            </li>
        </ul>
        <ul id="alignL02">
            <!--top increase 11% left increase 2%-->
            <li>
                <a1 id="abc1" href="#" data-modal-target="#modal2">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L02 </span>
                    <notificationpop id="displaypop1" style="display:block;">!</notificationpop>
                </a1>
            </li>

        </ul>
        <ul id="alignL03">
            <!--top=+3.1; left=+0.6-->
            <li>
                <a3 id="abc2" href="#" data-modal-target="#modal3" style="background:red;">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L03 </span>
                    <notificationpop id="displaypop2" style="display:block;">!</notificationpop>
                </a3>
            </li>
        </ul>

        <ul id="alignL04">
            <li>
                <a3 id="abc3" href="#" data-modal-target="#modal4">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L04 </span>
                    <notificationpop id="displaypop3" style="display:block;">!</notificationpop>
                </a3>
            </li>
        </ul>
        <ul id="alignL05">
            <li>
                <a3 id="abc4" href="#" data-modal-target="#modal5">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L05 </span>
                    <notificationpop id="displaypop4" style="display:block;">!</notificationpop>
                </a3>
            </li>
        </ul>
        <ul id="alignL06">
            <li>
                <a3 id="abc5" href="#" data-modal-target="#modal6">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L06 </span>
                    <notificationpop id="displaypop5" style="display:block;">!</notificationpop>
                </a3>
            </li>
        </ul>
        <ul id="alignL08">
            <li>
                <a3 id="abc6" href="#" data-modal-target="#modal8">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L08 </span>
                    <notificationpop id="displaypop6" style="display:block;">!</notificationpop>
                </a3>
            </li>
        </ul>
        <ul id="alignL09">
            <li>
                <a3 id="abc7" href="#" data-modal-target="#modal9">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L09 </span>
                    <notificationpop id="displaypop7" style="display:block;">!</notificationpop>
                </a3>
            </li>
        </ul>

        <ul id="alignL10">
            <!--production line 2 (10,12,13,14,15,16)-->
            <li>
                <a3 id="abc8" href="#" data-modal-target="#modal10">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L10 </span>
                    <notificationpop id="displaypop8" style="display:block;">!</notificationpop>
                </a3>
            </li>
        </ul>

        <ul id="alignL12">
            <!--production line 2 (10,12,13,14,15,16)-->
            <li>
                <a31 id="abc9" href="#" data-modal-target="#modal12">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L12 </span>
                    <notificationpop id="displaypop9" style="display:block;">!</notificationpop>
                </a31>
            </li>
        </ul>

        <ul id="alignL13">
            <!--production line 2 (10,12,13,14,15,16)-->
            <li>
                <a31 id="abc10" href="#" data-modal-target="#modal13">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L13 </span>
                    <notificationpop id="displaypop10" style="display:block;">!</notificationpop>
                </a31>
            </li>
        </ul>

        <ul id="alignL14">
            <!--production line 2 (10,12,13,14,15,16)-->
            <li>
                <a3 id="abc11" href="#" data-modal-target="#modal14">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L14 </span>
                    <notificationpop id="displaypop11" style="display:block;">!</notificationpop>
                </a3>
            </li>
        </ul>

        <ul id="alignL15">
            <!--production line 2 (10,12,13,14,15,16)-->
            <li>
                <a3 id="abc12" href="#" data-modal-target="#modal15">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L15 </span>
                    <notificationpop id="displaypop12" style="display:block;">!</notificationpop>
                </a3>
            </li>
        </ul>

        <ul id="alignL16">
            <!--production line 2 (10,12,13,14,15,16)-->
            <li>
                <a32 id="abc13" href="#" data-modal-target="#modal16">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L16 </span>
                    <notificationpop id="displaypop13" style="display:block;">!</notificationpop>
                </a32>
            </li>
        </ul>


        <ul id="alignL22" style="z-index: 10;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a41 id="abc14" href="#" data-modal-target="#modal22">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L22 </span>
                    <notificationpop id="displaypop14" class="rotate1" style="display:block;">!</notificationpop>
                </a41>
            </li>
        </ul>

        <ul id="alignL23" style="z-index: 9;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a4 id="abc15" href="#" data-modal-target="#modal23">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L23 </span>
                    <notificationpop id="displaypop15" class="rotate1" style="display:block;">!</notificationpop>
                </a4>
            </li>
        </ul>

        <ul id="alignL24" style="z-index: 8;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a4 id="abc16" href="#" data-modal-target="#modal24">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L24 </span>
                    <notificationpop id="displaypop16" class="rotate1" style="display:block;">!</notificationpop>
                </a4>
            </li>
        </ul>

        <ul id="alignL25" style="z-index: 7;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a61 id="abc17" href="#" data-modal-target="#modal25">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L25 </span>
                    <notificationpop id="displaypop17" class="rotate1" style="display:block;">!</notificationpop>
                </a61>
            </li>
        </ul>

        <ul id="alignL26" style="z-index: 6;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a6 id="abc18" href="#" data-modal-target="#modal26">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L26 </span>
                    <notificationpop id="displaypop18" class="rotate1" style="display:block;">!</notificationpop>
                </a6>
            </li>
        </ul>

        <ul id="alignL27" style="z-index: 5;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a6 id="abc19" href="#" data-modal-target="#modal27">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L27 </span>
                    <notificationpop id="displaypop19" class="rotate1" style="display:block;">!</notificationpop>
                </a6>
            </li>
        </ul>

        <ul id="alignL29" style="z-index: 4;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a7 id="abc20" href="#" data-modal-target="#modal29">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L29 </span>
                    <notificationpop id="displaypop20" class="rotate1" style="display:block;">!</notificationpop>
                </a7>
            </li>
        </ul>

        <ul id="alignL30" style="z-index: 3;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a7 id="abc21" href="#" data-modal-target="#modal30">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L30 </span>
                    <notificationpop id="displaypop21" class="rotate1" style="display:block;">!</notificationpop>
                </a7>
            </li>
        </ul>

        <ul id="alignL31" style="z-index: 2;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a7 id="abc22" href="#" data-modal-target="#modal31">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L31 </span>
                    <notificationpop id="displaypop22" class="rotate1" style="display:block;">!</notificationpop>
                </a7>
            </li>
        </ul>

        <ul id="alignL32" style="z-index: 1;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a8 id="abc23" href="#" data-modal-target="# " style="display:none;">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L32 </span>
                    <notificationpop id="displaypop23" class="rotate1" style="display:block;">!</notificationpop>
                </a8>
            </li>
        </ul>

        <ul id="alignL32EC" style="z-index: 1;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a9 id="abc24" href="#" data-modal-target="#modal32EC">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span> - L32EC </span>
                    <notificationpop id="displaypop24" style="display:block;">!</notificationpop>
                </a9>
            </li>
        </ul>

        <ul id="alignL33" style="z-index: 2;">
            <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
            <li>
                <a9 id="abc25" href="#" data-modal-target="#modal33">
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
            <div class="title">Production Line L01</div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <br><br>

            <div id="figureframeset0" class="figureframe">


            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L01 content---------------------------->

    <!----------------------part for L02 content---------------------------->
    <div class="modal" id="modal2">
        <div class="modal-header">
            <div class="title">Production Line L02</div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
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
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <br><br>

            <div id="figureframeset2" class="figureframe">

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L03 content---------------------------->
    <!----------------------part for L04 content---------------------------->
    <div class="modal" id="modal4">
        <div class="modal-header">
            <div class="title">Production Line L04</div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <br><br>

            <div id="figureframeset3" class="figureframe">

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L04 content---------------------------->
    <!----------------------part for L05 content---------------------------->
    <div class="modal" id="modal5">
        <div class="modal-header">
            <div class="title">Production Line L05</div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <br><br>

            <div id="figureframeset4" class="figureframe">

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L05 content---------------------------->
    <!----------------------part for L06 content---------------------------->
    <div class="modal" id="modal6">
        <div class="modal-header">
            <div class="title">Production Line L06</div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <br><br>

            <div id="figureframeset5" class="figureframe">


            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L06 content---------------------------->
    <!----------------------part for L08 content---------------------------->
    <div class="modal" id="modal8">
        <div class="modal-header">
            <div class="title">Production Line L08</div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <br><br>

            <div id="figureframeset6" class="figureframe">


            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L08 content---------------------------->
    <!----------------------part for L09 content---------------------------->
    <div class="modal" id="modal9">
        <div class="modal-header">
            <div class="title">Production Line L09</div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
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
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <br><br>

            <div id="figureframeset8" class="figureframe">



            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L10 content---------------------------->
    <!----------------------part for L12 content---------------------------->
    <div class="modal" id="modal12">
        <div class="modal-header">
            <div class="title">Production Line L12</div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <br><br>

            <div id="figureframeset9" class="figureframe">

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L12 content---------------------------->
    <!----------------------part for L13 content---------------------------->
    <div class="modal" id="modal13">
        <div class="modal-header">
            <div class="title">Production Line L13</div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
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
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <br><br>

            <div id="figureframeset11" class="figureframe">

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L14 content---------------------------->
    <!----------------------part for L15 content---------------------------->
    <div class="modal" id="modal15">
        <div class="modal-header">
            <div class="title">Production Line L15</div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
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
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <br><br>

            <div id="figureframeset13" class="figureframe">

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L16 content---------------------------->
    <!----------------------part for L22 content---------------------------->
    <div class="modal" id="modal22">
        <div class="modal-header">
            <div class="title">Production Line L22</div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <br><br>

            <div id="figureframeset14" class="figureframe">

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L22 content---------------------------->
    <!----------------------part for L23 content---------------------------->
    <div class="modal" id="modal23">
        <div class="modal-header">
            <div class="title">Production Line L23</div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <br><br>

            <div id="figureframeset15" class="figureframe">

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L23 content---------------------------->
    <!----------------------part for L24 content---------------------------->
    <div class="modal" id="modal24">
        <div class="modal-header">
            <div class="title">Production Line L24</div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <br><br>

            <div id="figureframeset16" class="figureframe">

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L24 content---------------------------->
    <!----------------------part for L25 content---------------------------->
    <div class="modal" id="modal25">
        <div class="modal-header">
            <div class="title">Production Line L25</div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
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
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
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
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <br><br>

            <div id="figureframeset19" class="figureframe">

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L27 content---------------------------->
    <!----------------------part for L29 content---------------------------->
    <div class="modal" id="modal29">
        <div class="modal-header">
            <div class="title">Production Line L29</div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
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
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <br><br>

            <div id="figureframeset21" class="figureframe">

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L30 content---------------------------->
    <!----------------------part for L31 content---------------------------->
    <div class="modal" id="modal31">
        <div class="modal-header">
            <div class="title">Production Line L31</div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <br><br>

            <div id="figureframeset22" class="figureframe">

            </div>

        </div>

    </div>
    <div id="overlay"></div>
    <!----------------------part for L31 content---------------------------->
    <!----------------------part for L32 content---------------------------->
    <div class="modal" id="modal32">
        <div class="modal-header">
            <div class="title">Production Line L32</div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
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
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Current Production Status
            <br><br>

            <div id="figureframeset24" class="figureframe">
                <div id="mainDiv32"><?php include('link1.html') ?></div>
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
            <br><br>

            <div id="figureframeset25" class="figureframe">
                <?php include_once('../bootstrapgridtestingL33.php'); ?>
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

                    for (i = 0; i < response.length; i++) {
                        if (response[i].status == "Stop") {
                            document.getElementById('abc' + i).style.background = '#F53C42';
                            document.getElementById('figureframeset' + i).style.borderColor = '#F53C42';
                            //document.getElementById('internalline'+i+'a').style.background = '#F53C42';
                            //document.getElementById('internalline'+i+'a').style.color = 'white';
                            //document.getElementById('outputvalue'+i).innerHTML= "Actual Output : "+response[i].actual;
                            //document.getElementById('outputvalue'+i+'t').innerHTML= "Target Output : "+response[i].target;
                            //document.getElementById('outputvalue'+i+'con').textContent=" Condition: Stop";
                            //document.getElementById('outputdisplay'+i).innerHTML= response[i].actual;
                            document.getElementById('displaypop' + i).style.display = "block";
                            if (response[i].status == "Stop") {
                                temperary = response[i].line;
                                notifyError(temperary);
                            }
                            //-------------------------------------------------code for 3d production layout-----------------------------------------------------------------------------------------------------//                        
                            /*document.getElementById('L08part'+i+'a').style.background = '#F53C42';
                            document.getElementById('L08part'+i+'b').style.background = '#F53C42';
                            document.getElementById('L08part'+i+'c').style.background = '#F53C42';
                            document.getElementById('L08part'+i+'d').style.background = '#F53C42';
                            document.getElementById('L08part'+i+'e').style.background = '#F53C42';
                            document.getElementById('L08part'+i+'condition').textContent="Condition: Stop";*/
                            //-------------------------------------------------code for 3d production layout-----------------------------------------------------------------------------------------------------//                        
                        } else if (response[i].status == "Offline") {
                            document.getElementById('abc' + i).style.background = 'Grey';
                            document.getElementById('figureframeset' + i).style.borderColor = 'Grey';
                            //document.getElementById('internalline'+i+'a').style.background = 'Grey';
                            //document.getElementById('internalline'+i+'a').style.color = 'white';
                            //document.getElementById('outputvalue'+i).innerHTML= "Actual Output : "+response[i].actual;
                            //document.getElementById('outputvalue'+i+'t').innerHTML= "Target Output : "+response[i].target;
                            //document.getElementById('outputvalue'+i+'con').textContent=" Condition: Offline";
                            //document.getElementById('outputdisplay'+i).innerHTML= response[i].actual;
                            //document.getElementById('displaypop'+i).style.display = "none";
                            document.getElementById('displaypop' + i).style.display = "none";

                            //-------------------------------------------------code for 3d production layout-----------------------------------------------------------------------------------------------------//                        
                            /*document.getElementById('L01part'+i+'a').style.background = 'Grey';
                            document.getElementById('L01part'+i+'b').style.background = 'Grey';
                            document.getElementById('L01part'+i+'c').style.background = 'Grey';
                            document.getElementById('L01part'+i+'d').style.background = 'Grey';
                            document.getElementById('L01part'+i+'e').style.background = 'Grey';
                            document.getElementById('L01part'+i+'condition').textContent="Condition: Off";*/
                            //-------------------------------------------------code for 3d production layout-----------------------------------------------------------------------------------------------------//                        
                        } else if (response[i].status == "Run") {
                            document.getElementById('abc' + i).style.background = '#00D45F'; //#8AFF4C light green //#00D45F normal green //#00B14F dark green
                            document.getElementById('figureframeset' + i).style.borderColor = '#00D45F';
                            //document.getElementById('internalline'+i+'a').style.background = '#00D45F';
                            //document.getElementById('internalline'+i+'a').style.color = 'white';
                            //document.getElementById('outputvalue'+i).innerHTML= "Actual Output : "+response[i].actual;
                            //document.getElementById('outputvalue'+i+'t').innerHTML= "Target Output : "+response[i].target;
                            //document.getElementById('outputvalue'+i+'con').textContent=" Condition: Run";
                            //document.getElementById('outputdisplay'+i).innerHTML= response[i].actual;
                            //document.getElementById('displaypop'+i).style.display = "block";
                            document.getElementById('displaypop' + i).style.display = "none";
                            //-------------------------------------------------code for 3d production layout-----------------------------------------------------------------------------------------------------//                        
                            /*document.getElementById('L01part'+i+'a').style.background = '#00D45F'; //#8AFF4C light green //#00D45F normal green //#00B14F dark green
                            document.getElementById('L01part'+i+'b').style.background = '#00D45F';
                            document.getElementById('L01part'+i+'c').style.background = '#00D45F';
                            document.getElementById('L01part'+i+'d').style.background = '#00D45F';
                            document.getElementById('L01part'+i+'e').style.background = '#00D45F';
                            document.getElementById('L01part'+i+'condition').textContent="Condition: Run";*/
                            //-------------------------------------------------code for 3d production layout-----------------------------------------------------------------------------------------------------//                        
                        } else if (response[i].status == "Break") {
                            document.getElementById('abc' + i).style.background = '#FFEE4A';
                            document.getElementById('figureframeset' + i).style.borderColor = '#FFEE4A';
                            //document.getElementById('internalline'+i+'a').style.background = '#FFEE4A';
                            //document.getElementById('internalline'+i+'a').style.color = 'white';
                            //document.getElementById('outputvalue'+i).innerHTML= "Output : "+response[i].actual;
                            //document.getElementById('outputvalue'+i+'t').innerHTML= "Output : "+response[i].target;
                            //document.getElementById('outputvalue'+i+'con').textContent=" Condition: Break";
                            //document.getElementById('outputdisplay'+i).innerHTML= response[i].actual;
                            //document.getElementById('displaypop'+i).style.display = "block";
                            document.getElementById('displaypop' + i).style.display = "none";
                            //-------------------------------------------------code for 3d production layout-----------------------------------------------------------------------------------------------------//                        
                            /*document.getElementById('L01part'+i+'a').style.background = '#FFEE4A'; 
                            document.getElementById('L01part'+i+'b').style.background = '#FFEE4A';
                            document.getElementById('L01part'+i+'c').style.background = '#FFEE4A';
                            document.getElementById('L01part'+i+'d').style.background = '#FFEE4A';
                            document.getElementById('L01part'+i+'e').style.background = '#FFEE4A';
                            document.getElementById('L01part'+i+'condition').textContent="Condition: Break";*/
                            //-------------------------------------------------code for 3d production layout-----------------------------------------------------------------------------------------------------//                        
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
        function change33() {
            $('#mainDiv33').load('../bootstrapgridtestingL33.php');
        }

        function change32() {
            $('#mainDiv32').load('../bootstrapgridtestingL32.php');
        }

        function change30() {
            $('#mainDiv30').load('../bootstrapgridtestingL30.php');
        }

        function change27() {
            $('#mainDiv27').load('../bootstrapgridtestingL27.php');
        }

        function change24() {
            $('#mainDiv24').load('../bootstrapgridtestingL24.php');
        }

        function change23() {
            $('#mainDiv23').load('../bootstrapgridtestingL23.php');
        }

        function change22() {
            $('#mainDiv22').load('../bootstrapgridtestingL22.php');
        }

        function change16() {
            $('#mainDiv16').load('../bootstrapgridtestingL16.php');
        }

        function change14() {
            $('#mainDiv14').load('../bootstrapgridtestingL14.php');
        }

        function change12() {
            $('#mainDiv12').load('../bootstrapgridtestingL12.php');
        }

        function change10() {
            $('#mainDiv10').load('../bootstrapgridtestingL10.php');
        }

        function change08() {
            $('#mainDiv08').load('../bootstrapgridtestingL8.php');
        }

        function change06() {
            $('#mainDiv06').load('../bootstrapgridtestingL6.php');
        }

        function change05() {
            $('#mainDiv05').load('../bootstrapgridtestingL5.php');
        }

        function change04() {
            $('#mainDiv04').load('../bootstrapgridtestingL4.php');
        }

        function change03() {
            $('#mainDiv03').load('../bootstrapgridtestingL3.php');
        }

        function change01() {
            $('#mainDiv01').load('../bootstrapgridtestingL1.php');

        }
    </script>
</body>

</html>