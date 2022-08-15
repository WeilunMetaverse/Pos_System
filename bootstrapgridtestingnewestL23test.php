<?php

$page = $_SERVER['PHP_SELF'];
$sec = "10";
include("dashboard/connection.php");

?>


<html>

<head>
    <!-- <meta http-equiv="refresh" content="<?php echo $sec ?>;"> -->
</head>
<!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

<body>
    <style>
        .text111 {
            position: relative;
            text-transform: uppercase;
            font-family: verdana;
            font-size: 250%;
            font-weight: bold;
            color: #f5f5f5;
            /*text-shadow: 
    1px 1px 1px #919191,
        1px 2px 1px #919191,
        1px 3px 1px #919191,
        1px 4px 1px #919191,
        1px 5px 1px #919191,
        1px 6px 1px #919191,
        1px 7px 1px #919191,
        1px 8px 1px #919191,
        1px 9px 1px #919191,
        1px 10px 1px #919191,
    1px 18px 6px rgba(16,16,16,0.4),
    1px 22px 10px rgba(16,16,16,0.2),
    1px 25px 35px rgba(16,16,16,0.2),
    1px 30px 60px rgba(16,16,16,0.4); */
        }
    </style>
    <style>
        .btnforsvg {
            width: 90%;
            height: 50px;
            border-radius: 0.4em;
            /*50px*/
            cursor: pointer;
            overflow: hidden;
            background: grey;
            color: #232323;
            position: absolute;
            top: 50%;
            left: 50%;
            display: flex;
            transition: width 0.2s ease-in-out;
            transform: translate(-50%, -50%);
            background-color: transparent;

        }

        .btnforsvgrectangle {
            width: 70%;
            height: 50px;
            border-radius: 0.4em;
            /*50px*/
            cursor: pointer;
            overflow: hidden;
            background: grey;
            color: #232323;
            position: absolute;
            top: 50%;
            left: 50%;
            display: flex;
            transition: width 0.2s ease-in-out;
            transform: translate(-50%, -50%);
            background-color: transparent;

        }

        .btnforsvgcircle {
            width: 70%;
            height: 50px;
            border-radius: 50%;
            /*50px*/
            cursor: pointer;
            overflow: hidden;
            background: grey;
            color: #232323;
            position: absolute;
            top: 50%;
            left: 50%;
            display: flex;
            transition: width 0.2s ease-in-out;
            transform: translate(-50%, -50%);
            background-color: transparent;

        }

        .btnforsvg:hover,
        .btnforsvgcircle:hover,
        .btnforsvgrectangle:hover {
            width: 150px;
            height: 150px;
            top: 50px;
            border: 2px solid #232323;
            box-shadow: 0 4px 5px rgba(0, 0, 0, 0.5);
            z-index: 199 !important;
            background-color: black;
        }

        .btnforsvg:hover .text,
        .btnforsvgcircle:hover .text,
        .btnforsvgrectangle:hover .text {
            opacity: 1;
            top: 0;

        }

        .btnforsvg .icon,
        .btnforsvgcircle .icon,
        .btnforsvgrectangle .icon {
            width: 60px;
            height: 60px;

            margin: 60% 0%;
            display: inline-block;
        }

        .btnforsvg .icon img,
        .btnforsvgcircle .icon img,
        .btnforsvgrectangle .icon img {
            width: 40px;
            height: 30px;
        }

        .btnforsvg .text,
        .btnforsvgcircle .text,
        .btnforsvgrectangle .text {
            position: relative;
            top: 10px;
            text-align: center;
            opacity: 0;
            line-height: 60px;
            transition: top 0.4s ease-in-out 0.3s, opacity 0.2s ease-in-out 0.3s;


        }
    </style>
    <style>
        .container {

            height: 100%;
            width: 100.3%;
            margin: auto -0.1%;
            background-color: lightgrey;
            border-radius: 1em;
            display: flex;
        }

        .containersmall {
            position: relative;
            width: 100%;
            height: 80%;
            top: 20%;
            left: 0.1%;
            font-size: 100%;
            display: flex;



        }

        .containersmall1 {
            position: relative;

            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;

            -webkit-flex-flow: column wrap;



        }

        .boxyellow {
            position: relative;
            height: 30%;
            width: 2.5%;
            background-color: yellow;
            margin-top: 40px;
            border: 0.1px solid black;
            box-shadow: -5px -5px 5px -5px var(--color1), 5px 5px 5px -5px var(--color2), -7px -7px 10px -5px transparent, 7px 7px 10px -5px transparent, 0 0 5px 0px rgba(255, 255, 255, 0), 0 55px 35px -20px rgba(0, 0, 0, 0.5);
            transition: transform 0.5s ease, box-shadow 0.2s ease;

        }

        .boxblue {
            position: relative;
            height: 40%;
            width: 2.5%;
            background-color: lightblue;
            margin-top: 20px;
            border: 0.1px solid black;
            box-shadow: -5px -5px 5px -5px var(--color1), 5px 5px 5px -5px var(--color2), -7px -7px 10px -5px transparent, 7px 7px 10px -5px transparent, 0 0 5px 0px rgba(255, 255, 255, 0), 0 55px 35px -20px rgba(0, 0, 0, 0.5);
            transition: transform 0.5s ease, box-shadow 0.2s ease;
        }

        .boxgrey {
            position: relative;
            height: 30%;
            width: 2.5%;
            background-color: grey;
            margin-top: 40px;
            border: 0.1px solid black;
            box-shadow: -5px -5px 5px -5px var(--color1), 5px 5px 5px -5px var(--color2), -7px -7px 10px -5px transparent, 7px 7px 10px -5px transparent, 0 0 5px 0px rgba(255, 255, 255, 0), 0 55px 35px -20px rgba(0, 0, 0, 0.5);
            transition: transform 0.5s ease, box-shadow 0.2s ease;
        }

        .boxlifter {
            position: relative;
            height: 30%;
            width: 3%;
            background-color: green;
            margin-top: 40px;
            border: 0.1px solid black;
            box-shadow: -5px -5px 5px -5px var(--color1), 5px 5px 5px -5px var(--color2), -7px -7px 10px -5px transparent, 7px 7px 10px -5px transparent, 0 0 5px 0px rgba(255, 255, 255, 0), 0 55px 35px -20px rgba(0, 0, 0, 0.5);
            transition: transform 0.5s ease, box-shadow 0.2s ease;

        }

        .boxliftershort {
            position: relative;
            height: 25%;
            width: 4%;
            background-color: green;
            margin-top: 40px;
            border: 0.1px solid black;
            box-shadow: -5px -5px 5px -5px var(--color1), 5px 5px 5px -5px var(--color2), -7px -7px 10px -5px transparent, 7px 7px 10px -5px transparent, 0 0 5px 0px rgba(255, 255, 255, 0), 0 55px 35px -20px rgba(0, 0, 0, 0.5);
            transition: transform 0.5s ease, box-shadow 0.2s ease;
        }

        .boxbeige {
            position: relative;
            height: 20%;
            width: 2.5%;
            background-color: #E8D4AD;
            margin-top: 40px;
            border: 0.1px solid black;
            box-shadow: -5px -5px 5px -5px var(--color1), 5px 5px 5px -5px var(--color2), -7px -7px 10px -5px transparent, 7px 7px 10px -5px transparent, 0 0 5px 0px rgba(255, 255, 255, 0), 0 55px 35px -20px rgba(0, 0, 0, 0.5);
            transition: transform 0.5s ease, box-shadow 0.2s ease;
        }

        /*.boxbeige:hover,
.boxliftershort:hover,
.boxlifter:hover,
.boxgrey:hover,
.boxblue:hover,
.boxyellow:hover
 {
            box-shadow: -20px -20px 30px -25px var(--color1), 20px 20px 30px -25px var(--color2), -7px -7px 10px -5px var(--color1), 7px 7px 10px -5px var(--color2), 0 0 13px 4px rgba(255, 255, 255, 0.3), 0 55px 35px -20px rgba(0, 0, 0, 0.5);
            }*/

        a {
            position: absolute;
            top: 20%;
            width: 100%;
            text-align: center;
            font-size: 17px;
            word-wrap: break-word;
        }

        img {
            width: 100%;
            height: 100%;
            font-size: 18px;
            object-fit: fill;
        }


        .card {
            position: relative;
            height: 100%;
            width: 100%;
            cursor: pointer;
        }

        .card+.card {
            margin-left: 30px;
        }

        .card .card__front,
        .card .card__back {
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 1px 2px 4px #333;
            height: 98%;
            width: 98%;
            transition: transform 1s;
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;

        }

        .card .card__front,
        .btnforsvg {
            animation: green 1s infinite;
        }

        .colorchanging {
            animation: red 1s infinite;
        }

        @keyframes red {
            0% {
                background-color: red;
            }

            33% {
                background-color: #000;
            }

            67% {
                background-color: red;
            }

            100% {
                background-color: #000;
            }
        }

        @keyframes green {

            0%,
            100% {
                background-color: green;
            }

        }

        @keyframes grey {

            0%,
            100% {
                background-color: grey;
            }

        }

        @keyframes yellow {

            0%,
            100% {
                background-color: yellow;
            }

        }

        @keyframes transparent {

            0%,
            100% {
                background-color: transparent;
            }

        }

        .card:not(.card--flipped) .card__back {
            transform: rotateY(180deg);
        }

        .card.card--flipped .card__front {
            transform: rotateY(180deg);
        }
    </style>


    <style>
        div.wrapperstation23 {
            position: relative;
            top: -35%;

            width: 25%;
            height: 10%;

            background-color: black;
            border-radius: 20%;
            padding: 0%;
        }

        div.popupstation23 {
            display: none;
            position: relative;
            background-color: #fff;
            background-size: 256px 256px;
            word-wrap: break-word;
            text-align: left;
            text-shadow: none;
            box-shadow: -5px -5px 5px -5px var(--color1), 5px 5px 5px -5px var(--color2), -7px -7px 10px -5px transparent, 7px 7px 10px -5px transparent, 0 0 5px 0px rgba(255, 255, 255, 0), 0 55px 35px -20px rgba(0, 0, 0, 0.5);
            transition: transform 0.5s ease, box-shadow 0.2s ease;
            z-index: 399 !important;
        }

        div.popupstation233 {
            display: none;
            position: relative;
            background-color: #fff;
            background-size: 256px 256px;
            word-wrap: break-word;
            text-align: left;
            text-shadow: none;
            box-shadow: -5px -5px 5px -5px var(--color1), 5px 5px 5px -5px var(--color2), -7px -7px 10px -5px transparent, 7px 7px 10px -5px transparent, 0 0 5px 0px rgba(255, 255, 255, 0), 0 55px 35px -20px rgba(0, 0, 0, 0.5);
            transition: transform 0.5s ease, box-shadow 0.2s ease;
            z-index: 399 !important;
        }

        div.popupstation23:hover,
        div.popupstation233:hover {
            box-shadow: -20px -20px 30px -25px var(--color1), 20px 20px 30px -25px var(--color2), -7px -7px 10px -5px var(--color1), 7px 7px 10px -5px var(--color2), 0 0 13px 4px rgba(255, 255, 255, 0.3), 0 55px 35px -20px rgba(0, 0, 0, 0.5);
        }

        div.popupstation23.active:after,
        div.popupstation23:hover:after,
        div.popupstation233.active,
        div.popupstation233:hover {
            filter: brightness(1) contrast(1);
            opacity: 1;
        }

        div.popupstation23.active,
        div.popupstation23:hover,
        div.popupstation233.active,
        div.popupstation233:hover {
            -webkit-animation: none;
            animation: none;
            transition: box-shadow 0.1s ease-out;
        }

        a.reviews {
            margin: auto -30%;
            top: -75%;
            width: 100%;
            font-size: 60%;
            padding: 0%;
            color: black;
            position: relative;
            text-align: center;
            z-index: 1;
            text-decoration: none;
            font-family: "Montserrat", sans-serif;
            text-shadow: 1px 1px #F5DCAC;
        }

        a.reviews:hover,
        a:active {
            color: blue;
            z-index: 200;
        }

        .popupstation23 {
            width: 100%;
            width: 580px;
            left: -50%;
            top: 10%;
            background: #fff;
            border-radius: 0.4em;
            z-index: 1;
            padding-bottom: 0.5px;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 0.5px;
        }

        .popupstation233 {
            width: 100%;
            width: 580px;
            left: -550px;
            top: 10%;
            background: #fff;
            border-radius: 0.4em;
            z-index: 1;
            padding-bottom: 0.5px;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 0.5px;
        }

        .wrapperstation23:hover .popupstation23 {
            display: block;

        }

        .wrapperstation23:hover .popupstation233 {
            display: block;

        }

        .wrapperstation23:hover .reviews {
            color: blue;
        }

        :root {
            --color1: rgb(0, 231, 255);
            --color2: rgb(255, 0, 231);
        }

        .rwd-table {
            margin: 5px -10px;
            width: 103.7%;
            min-width: 300px;
            font-size: 70%;
        }

        .rwd-table tr {
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
        }

        .rwd-table th {
            display: none;
        }

        .rwd-table td {
            display: block;
        }

        .rwd-table td:first-child {
            padding-top: 0;
        }

        .rwd-table td:last-child {
            padding-bottom: 0;
        }

        .rwd-table td:before {
            font-weight: bold;
            width: 6.5em;
            display: inline-block;
        }

        @media (min-width: 480px) {
            .rwd-table td:before {
                display: none;
            }
        }

        .rwd-table th,
        .rwd-table td {
            text-align: left;
        }

        @media (min-width: 480px) {

            .rwd-table th,
            .rwd-table td {
                display: table-cell;
                padding: 0.25em 0.5em;
            }

            .rwd-table th:first-child,
            .rwd-table td:first-child {
                padding-left: 0;
            }

            .rwd-table th:last-child,
            .rwd-table td:last-child {
                padding-right: 0;
            }
        }

        .rwd-table {
            background: #34495e;
            color: #fff;
            border-radius: 0.4em;
            overflow: hidden;
        }

        .rwd-table tr {
            border-color: #46637f;
        }

        @media (min-width: 480px) {

            .rwd-table th,
            .rwd-table td {
                padding: 1em !important;
            }
        }

        .rwd-table th,
        .rwd-table td:before {
            color: #dd5;
        }

        .containerstrip {
            position: absolute;
            margin-top: -52%;

            width: 100%;
            height: 15px;
            background-color: green;

        }
    </style>



    <style>
        .L23gred {
            display: grid;
            height: 100%;
            grid-template-columns: 1fr 1fr 1fr;


        }

        .areaA {
            background-color: white;
        }

        .areaB {
            background-color: white;
        }

        .areaC {
            background-color: white;
            /*#26394E */
        }

        .columnum {
            flex: 50%;
            height: 50%;

            -webkit-box-sizing: border-box;

        }

        .sizeforme {
            width: 100%;
            border: 0.1px solid black;
            box-shadow: -5px -5px 5px -5px var(--color1), 5px 5px 5px -5px var(--color2), -7px -7px 10px -5px transparent, 7px 7px 10px -5px transparent, 0 0 5px 0px rgba(255, 255, 255, 0), 0 55px 35px -20px rgba(0, 0, 0, 0.5);
            transition: transform 0.5s ease, box-shadow 0.2s ease;

        }
    </style>


    <div class="L23gred">

        <div class="areaA" style="border-top-left-radius:1em;border-bottom-left-radius:1em;">Assembly
            <div class="columnum">
                <div class="row" style="flex-wrap: nowrap;white-space:nowrap;">

                    <p id="L23flexdisplay1" style="display:flex;width: 100%;height:100px;margin-top:12%;"></p>
                    <p id="L23flexdisplay1c" style="display:flex;width: 100%;height:100px;margin-top:-3%;"></p>
                    <p id="L23flexdisplay1b" style="display:flex;width: 100%;height:100px;margin-top:-44%;"></p>




                </div>
            </div>
        </div>

        <div class="areaB">Inspection
            <div class="columnum">
                <div class="row" style="flex-wrap: nowrap;white-space:nowrap;">

                    <p id="L23flexdisplay2" style="display:flex;width: 100%;height:100px;margin-top:12%;"></p>
                    <p id="L23flexdisplay2c" style="display:flex;width: 100%;height:100px;margin-top:-3%;"></p>
                    <p id="L23flexdisplay2b" style="display:flex;width: 100%;height:100px;margin-top:-44%;"></p>


                </div>
            </div>
        </div>

        <div class="areaC" style="border-top-right-radius:1em;border-bottom-right-radius:1em;">Packing
            <div class="columnum">
                <div class="row" style="flex-wrap: nowrap;white-space:nowrap;">

                    <p id="L23flexdisplay3" style="display:flex;width: 100%;height:100px;margin-top:12%;"></p>
                    <p id="L23flexdisplay3c" style="display:flex;width: 100%;height:100px;margin-top:-3%;"></p>
                    <p id="L23flexdisplay3b" style="display:flex;width: 100%;height:100px;margin-top:-44%;"></p>


                </div>
            </div>
        </div>

        <script>
            function runL23(self) {
                self.classList.toggle('card--flipped');
            }
        </script>

        <div class="containersmall1" style="position:absolute;width:60%;height:20%;left:30%;top:70%;padding: 1%;">
            <p style="color: blue;font-size: 120%;font-family: Montserrat, sans-serif;"><img src="media/computer3.png" alt="" style="width:50px;height:50px;padding: 0%;">Network/CPU</p>
            <p style="color: blue;font-size: 120%;font-family: Montserrat, sans-serif;"><img src="media/barcode2.png" alt="" style="width:50px;height:50px;padding: 0%;">Scanner</p>
            <p style="color: blue;font-size: 120%;font-family: Montserrat, sans-serif;"><img src="media/screwdriver.png" alt="" style="width:50px;height:50px;padding: 0%;">Screw Driver</p>
            <p style="color: blue;font-size: 120%;font-family: Montserrat, sans-serif;"><img src="media/tape.png" alt="" style="width:50px;height:50px;padding: 0%;">Tape Dispenser</p>
            <p style="color: blue;font-size: 120%;font-family: Montserrat, sans-serif;"><img src="media/star.png" alt="" style="width:50px;height:50px;padding: 0%;">E-SOP Network & Electrical point</p>


        </div>
    </div>


    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="library/js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="library/js/scripts.js"></script>


    <script>
        //Load data after complete open web page
        $(document).ready(function() {




            // $("#dataCounterBody").empty();
            // $("#dataCounterBody").append('<tr align="center" style="font-weight: bold">' +
            //     '<td colspan="8"><span><img src="media/loading2.gif" width="50" height="50" alt="Mplify"><p>Loading...</p></span></td></tr>');

            // $("#scroller").container2();


        });
        getDataCounter();
        setInterval(getDataCounter, 10000);
        //Get Counter data with javascript

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



                    //------------------------------------------------------Declare-Assembly-Station---------------------------------------------------------------------------------//
                    var L23assembly1 =
                        <?php

                        $sql = "select * from production_line_L23 where station_group = 'assembly' and operating ='1'";
                        if ($result = mysqli_query($conn, $sql)) {
                            $rowcount = mysqli_num_rows($result);
                            echo $rowcount;
                        }
                        ?> + 1; //+1 = 1 box at the back if +1 +1 = 2 (x)box
                    var L23assemblyback = L23assembly1 - 1; //second last box
                    var L23assemblyroller = L23assembly1; //last box
                    var realL23assembly1 = L23assembly1 - 2;

                    //------------------------------------------------------Declare-Inspection-Station-------------------------------------------------------------------------------//
                    var L23inspection1 =
                        <?php

                        $sql = "select * from production_line_L23 where station_group = 'inspection' and operating ='1'";
                        if ($result = mysqli_query($conn, $sql)) {
                            $rowcount = mysqli_num_rows($result);
                            echo $rowcount;
                        }
                        ?> + 1;
                    var L23inspectionback = L23inspection1 - 1;
                    var L23inspectionroller = L23inspection1;
                    var realL23inspection1 = L23inspection1 - 2;

                    //------------------------------------------------------Declare-Packing-Station---------------------------------------------------------------------------------//
                    var L23packing1 =
                        <?php

                        $sql = "select * from production_line_L23 where station_group = 'packing' and operating ='1'";
                        if ($result = mysqli_query($conn, $sql)) {
                            $rowcount = mysqli_num_rows($result);
                            echo $rowcount;
                        }
                        ?> + 1 + 1;
                    var L23packingback = L23packing1 - 1;
                    var L23packingroller = L23packing1;
                    var realL23packing1 = L23packing1 - 2;

                    localStorage.setItem('L23assembly1storage', L23assembly1);
                    localStorage.setItem('L23inspection1storage', L23inspection1);
                    localStorage.setItem('L23packing1storage', L23packing1);

                    //------------------------------------------------------Append-Assembly-Station-(Dynamic)------------------------------------------------------------------------//
                    $("#L23flexdisplay1").empty();
                    for (i = 0; i <= L23assembly1; i++) {
                        if (i == 0 || i == L23assemblyroller) { //L23assemblyroller last box if we need another second box we just put i==L23assemblyback

                            $("#L23flexdisplay1").append(
                                '<div id="L23flipassem' + (i + 1) + '" class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<img class="L23imgassem' + (i - 1) + '" src="media/xvariable.png" alt="">' +
                                '<div id="L23backstatus' + (i - 1) + '" class="card__front" style="color: black;">' +
                                '</div>' +
                                '</div>'
                            );
                        } else {

                            $("#L23flexdisplay1").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<div id="L23flipassem' + (i + 1) + '" class="card" onclick="runL23(this)">' +
                                '<div id="L23backstatus' + (i - 1) + '" class="card__front" style="color: black;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div class="wrapperstation23" style="background-color: transparent;" >' +
                                '<br>' +
                                '<p><img class="L23computerdisplayassem' + (i - 1) + '"   style="width:200%;height:200%;margin:0% -50%;"></p>' +

                                '<a class="reviews">' + (i) +
                                '<div class="popupstation23">' +
                                '<table class="rwd-table" style="font-size:130%;">' +
                                '<tr>' +
                                '<th>NAME</th>' +
                                '<th>TOTAL IN</th>' +
                                '<th>PASS</th>' +
                                '<th>FAIL</th>' +
                                '<th>LAST STOP</th>' +
                                '<th>STATUS</th>' +
                                '</tr>' +
                                '<tr>' +
                                '<td class="L23stationname' + (i - 1) + '"></td>' +
                                '<td id="L23stationinput' + (i + 1) + '">1000</td>' +
                                '<td id="L23stationpass' + (i + 1) + '">997</td>' +
                                '<td id="L23stationfail' + (i + 1) + '">3</td>' +
                                '<td id="L23stationlast' + (i + 1) + '">3 mins</td>' +
                                '<td id="L23stationstatus' + (i + 1) + '" style="background:green;color:white;border-radius:0.4em;">RUN</td>' +
                                '</tr>' +
                                '</table> ' +
                                '</div>' +
                                '</a>' +
                                '</div>' +
                                '</div>' +
                                '<div class="card__back"  style="background-color: white;">' +
                                '<div style="text-align:center;">' +
                                '<p><img class="L23computerdisplayassem' + (i - 1) + '"   style="width:60%;height:40%;"></p>' +

                                '</div>' +

                                '</div>' +
                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }
                    }

                    $("#L23flexdisplay1b").empty();
                    for (i = 0; i <= L23assembly1; i++) {
                        if (i == 0 || i == L23assemblyroller) { //L23assemblyroller last box if we need another second box we just put i==L23assemblyback

                            $("#L23flexdisplay1b").append(

                                '<div id="L23flipassemB' + (i + 1) + '" class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;opacity:0;">' +
                                '<img class="L23imgassemB' + (i - 1) + '" src="media/xvariable.png" alt="">' +
                                '</div>' +
                                '</div>'
                            );
                        } else {

                            $("#L23flexdisplay1b").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;border:none;box-shadow: none;">' +
                                '<div id="L23flipassemB' + (i + 1) + '" class="card" onclick="runL23(this)">' +
                                '<div id="L23backstatusB' + (i - 1) + '" class="card__front" style="color: black;animation: transparent 1s infinite;border:none;box-shadow: none;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div id="svgL23backstatusB' + (i - 1) + '" class="btnforsvgrectangle" >' +
                                '<img class="L23imgassemB' + (i - 1) + '" src="media/robotarm.gif">' +


                                '</div>' +

                                '</div>' +

                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }


                    }


                    $("#L23flexdisplay1c").empty();
                    for (i = 0; i <= L23assembly1; i++) {
                        if (i == 0 || i == L23assemblyroller) { //L23assemblyroller last box if we need another second box we just put i==L23assemblyback
                            $("#L23flexdisplay1c").append(

                                '<div id="L23flipassemC' + (i + 1) + '" class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;opacity:0;">' +
                                '<img class="L23imgassemC' + (i - 1) + '" src="media/xvariable.png" alt="">' +
                                '</div>' +
                                '</div>'
                            );
                        } else {
                            $("#L23flexdisplay1c").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;border:none;box-shadow: none;">' +
                                '<div id="L23flipassemC' + (i + 1) + '" class="card" onclick="runL23(this)">' +
                                '<div id="L23backstatusC' + (i - 1) + '" class="card__front" style="color: black;animation: transparent 1s infinite;border:none;box-shadow: none;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div id="svgL23backstatusC' + (i - 1) + '" class="btnforsvgrectangle" >' +
                                '<img class="L23imgassemC' + (i - 1) + '" src="media/robotarm.gif">' +
                                '</div>' +

                                '</div>' +

                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }


                    }

                    //------------------------------------------------------Append-Inspection-Station-(Dynamic)----------------------------------------------------------------------//
                    $("#L23flexdisplay2").empty();
                    for (i = 0; i <= L23inspection1; i++) {
                        if (i == 0 || i == L23inspectionroller) {
                            $("#L23flexdisplay2").append(
                                '<div id="L23flipinspec' + (i + 1) + '" class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<img class="L23imginspec' + (i - 1) + '" src="media/xvariable.png" alt="">' +
                                '<div id="L23backstatusinspec' + (i - 1) + '" class="card__front" style="color: black;background-color: transparent;">' +
                                '</div>'
                            );
                        } else {

                            $("#L23flexdisplay2").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<div id="L23flipinspec' + (i + 1) + '" class="card" onclick="runL23(this)">' +
                                '<div id="L23backstatusinspec' + (i - 1) + '" class="card__front" style="color: black;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div class="wrapperstation23" style="background-color: transparent;" >' +
                                '<br>' +
                                '<p><img class="L23computerdisplayinspec' + (i - 1) + '"   style="width:200%;height:200%;margin:0% -50%;"></p>' +

                                '<a class="reviews">' + (i) +
                                '<div class="popupstation23">' +
                                '<table class="rwd-table" style="font-size:130%;">' +
                                '<tr>' +
                                '<th>NAME</th>' +
                                '<th>TOTAL IN</th>' +
                                '<th>PASS</th>' +
                                '<th>FAIL</th>' +
                                '<th>LAST STOP</th>' +
                                '<th>STATUS</th>' +
                                '</tr>' +
                                '<tr>' +
                                '<td class="L23stationnameinspec' + (i - 1) + '"></td>' +
                                '<td id="L23stationinputinspec' + (i + 1) + '">1000</td>' +
                                '<td id="L23stationpassinspec' + (i + 1) + '">997</td>' +
                                '<td id="L23stationfailinspec' + (i + 1) + '">3</td>' +
                                '<td id="L23stationlastinspec' + (i + 1) + '">3 mins</td>' +
                                '<td id="L23stationstatusinspec' + (i + 1) + '" style="background:green;color:white;border-radius:0.4em;">RUN</td>' +
                                '</tr>' +
                                '</table> ' +
                                '</div>' +
                                '</a>' +
                                '</div>' +
                                '</div>' +
                                '<div class="card__back"  style="background-color: white;">' +
                                '<div style="text-align:center;">' +
                                '<p ><img class="L23computerdisplayinspec' + (i - 1) + '"   style="width:60%;height:40%;"></p>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }




                    }

                    $("#L23flexdisplay2b").empty();
                    for (i = 0; i <= L23inspection1; i++) {
                        if (i == 0 || i == L23inspectionroller) { //L23assemblyroller last box if we need another second box we just put i==L23assemblyback
                            $("#L23flexdisplay2b").append(

                                '<div id="L23flipinspecB' + (i + 1) + '" class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;opacity:0;">' +
                                '<img class="L23imginspecB' + (i - 1) + '" src="media/xvariable.png" alt="">' +
                                '</div>' +
                                '</div>'
                            );
                        } else {

                            $("#L23flexdisplay2b").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;border:none;box-shadow: none;">' +
                                '<div id="L23flipinspecB' + (i + 1) + '" class="card" onclick="runL23(this)">' +
                                '<div id="L23backstatusinspecB' + (i - 1) + '" class="card__front" style="color: black;animation: transparent 1s infinite;border:none;box-shadow: none;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div id="svgL23backstatusinspecB' + (i - 1) + '" class="btnforsvgrectangle" >' +
                                '<img class="L23imginspecB' + (i - 1) + '" src="media/robotarm.gif">' +
                                '</div>' +

                                '</div>' +

                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }


                    }


                    $("#L23flexdisplay2c").empty();
                    for (i = 0; i <= L23inspection1; i++) {
                        if (i == 0 || i == L23inspectionroller) { //L23assemblyroller last box if we need another second box we just put i==L23assemblyback
                            $("#L23flexdisplay2c").append(

                                '<div id="L23flipinspecC' + (i + 1) + '" class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;opacity:0;">' +
                                '<img class="L23imginspecC' + (i - 1) + '" src="media/xvariable.png" alt="">' +
                                '</div>' +
                                '</div>'
                            );
                        } else {

                            $("#L23flexdisplay2c").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;border:none;box-shadow: none;">' +
                                '<div id="L23flipinspecC' + (i + 1) + '" class="card" onclick="runL23(this)">' +
                                '<div id="L23backstatusinspecC' + (i - 1) + '" class="card__front" style="color: black;animation: transparent 1s infinite;border:none;box-shadow: none;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div id="svgL23backstatusinspecC' + (i - 1) + '" class="btnforsvgrectangle" >' +
                                '<img class="L23imginspecC' + (i - 1) + '" src="media/robotarm.gif">' +
                                '</div>' +

                                '</div>' +

                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }


                    }


                    //------------------------------------------------------Append-Packing-Station-(Dynamic)------------------------------------------------------------------------//
                    $("#L23flexdisplay3").empty();
                    for (i = 0; i <= L23packing1; i++) {
                        if (i == 0 || i == L23packingroller || i == L23packingback) {
                            $("#L23flexdisplay3").append(
                                '<div id="L23flippack' + (i + 1) + '" class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<img class="L23imgpack' + (i - 1) + '" src="media/xvariable.png" alt="">' +
                                '<div id="L23backstatuspack' + (i - 1) + '" class="card__front" style="color: black;background-color: transparent;">' +
                                '</div>'
                            );
                        } else {

                            $("#L23flexdisplay3").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<div id="L23flippack' + (i + 1) + '" class="card" onclick="runL23(this)">' +
                                '<div id="L23backstatuspack' + (i - 1) + '" class="card__front" style="color: black;background-color: green;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div class="wrapperstation23" style="background-color: transparent;" >' +
                                '<br>' +
                                '<p><img class="L23computerdisplaypack' + (i - 1) + '"  style="width:200%;height:200%;margin:0% -50%;"></p>' +
                                '<a class="reviews">' + (i) +
                                '<div class="popupstation233">' +
                                '<table class="rwd-table" style="font-size:130%;">' +
                                '<tr>' +
                                '<th>NAME</th>' +
                                '<th>TOTAL IN</th>' +
                                '<th>PASS</th>' +
                                '<th>FAIL</th>' +
                                '<th>LAST STOP</th>' +
                                '<th>STATUS</th>' +
                                '</tr>' +
                                '<tr>' +
                                '<td class="L23stationnamepack' + (i - 1) + '"></td>' +
                                '<td id="L23stationinputpack' + (i + 1) + '">1000</td>' +
                                '<td id="L23stationpasspack' + (i + 1) + '">997</td>' +
                                '<td id="L23stationfailpack' + (i + 1) + '">3</td>' +
                                '<td id="L23stationlastpack' + (i + 1) + '">3 mins</td>' +
                                '<td id="L23stationstatuspack' + (i + 1) + '" style="background:green;color:white;border-radius:0.4em;">RUN</td>' +
                                '</tr>' +
                                '</table> ' +
                                '</div>' +
                                '</a>' +
                                '</div>' +
                                '</div>' +
                                '<div class="card__back"  style="background-color: white;">' +
                                '<div style="text-align:center;">' +

                                '</div>' +
                                '</div>' +
                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }


                    }

                    $("#L23flexdisplay3b").empty();
                    for (i = 0; i <= L23packing1; i++) {
                        if (i == 0 || i == L23packingroller || i == L23packingback) { //L23assemblyroller last box if we need another second box we just put i==L23assemblyback
                            $("#L23flexdisplay3b").append(

                                '<div id="L23flippackB' + (i + 1) + '" class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;opacity:0;">' +
                                '<img class="L23imgpackB' + (i - 1) + '" src="media/xvariable.png" alt="">' +
                                '</div>' +
                                '</div>'
                            );
                        } else {

                            $("#L23flexdisplay3b").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;border:none;box-shadow: none;">' +
                                '<div id="L23flippackB' + (i + 1) + '" class="card" onclick="runL23(this)">' +
                                '<div id="L23backstatuspackB' + (i - 1) + '" class="card__front" style="color: black;animation: transparent 1s infinite;border:none;box-shadow: none;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div id="svgL23backstatuspackB' + (i - 1) + '" class="btnforsvgrectangle" >' +
                                '<img class="L23imgpackB' + (i - 1) + '" src="media/robotarm.gif">' +
                                '</div>' +

                                '</div>' +

                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }


                    }


                    $("#L23flexdisplay3c").empty();
                    for (i = 0; i <= L23packing1; i++) {
                        if (i == 0 || i == L23packingroller || i == L23packingback) { //L23assemblyroller last box if we need another second box we just put i==L23assemblyback
                            $("#L23flexdisplay3c").append(

                                '<div id="L23flippackC' + (i + 1) + '" class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;opacity:0;">' +
                                '<img class="L23imgpackC' + (i - 1) + '" src="media/xvariable.png" alt="">' +
                                '</div>' +
                                '</div>'
                            );
                        } else {

                            $("#L23flexdisplay3c").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;border:none;box-shadow: none;">' +
                                '<div id="L23flippackC' + (i + 1) + '" class="card" onclick="runL23(this)">' +
                                '<div id="L23backstatuspackC' + (i - 1) + '" class="card__front" style="color: black;animation: transparent 1s infinite;border:none;box-shadow: none;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div id="svgL23backstatuspackC' + (i - 1) + '" class="btnforsvgrectangle" >' +
                                '<img class="L23imgpackC' + (i - 1) + '" src="media/robotarm.gif">' +
                                '</div>' +

                                '</div>' +

                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }


                    }

                    //------------------------------------------------------Declare-Roller---------------------------------------------------------------------------------------//


                    // $(".L23imgassem1").attr("src", "media/xvariable.png");
                    // $(".L23imgassem19").attr("src", "media/xvariable.png");

                    // $(".L23imgassem19").attr("src", "media/roller2.jpg");
                    // $(".L23imgassem9").attr("src", "media/operator.gif");


                    $(".L23imgpack" + (L23packing1 - 1)).attr("src", "media/roller2.JPG");


                    //------------------------------------------------------Assembly-Json-Collect--------------------------------------------------------------------------------//
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM production_line_L23 where station_group = 'assembly' and operating ='1'");

                    $json = array();
                    $json1 = array();
                    $json2 = array();
                    $json3 = array();
                    while ($row = $sql->fetch_assoc()) {
                        $json[] = $row['station'];
                        $json1[] = $row['robot'];
                        $json2[] = $row['cpu'];
                        $json3[] = $row['status'];
                    }
                    ?>

                    var array = <?= json_encode($json) ?>;
                    var array1 = <?= json_encode($json1) ?>;
                    var array2 = <?= json_encode($json2) ?>;
                    var array3 = <?= json_encode($json3) ?>;
                    // console.log(array);
                    // console.log(array1);
                    // console.log(array2);
                    // console.log(array3);
                    for (i = 0; i <= L23assembly1; i++) {

                        $(".L23stationname" + i).html(array[i]);




                    }


                    for (i = 0; i <= (L23assembly1 - 2); i++) {

                        if (array1[i] == 1) {
                            $(".L23imgassem" + i).attr("src", "media/robotarm.gif");
                            $("#svgL23backstatusB" + i).attr("style", "display:block;");
                            $("#svgL23backstatusC" + i).attr("style", "display:none;");

                        } else if (array1[i] == 0) {
                            $(".L23imgassemC" + i).attr("src", "media/operator.gif");
                            $("#svgL23backstatusB" + i).attr("style", "display:none;");
                            $("#svgL23backstatusC" + i).attr("style", "display:block;");
                        } else {
                            $(".L23imgassem" + i).attr("style", "display:none;");
                            $("#svgL23backstatusB" + i).attr("style", "display:none;");
                            $("#svgL23backstatusC" + i).attr("style", "display:none;");

                        }

                    }

                    for (i = 0; i <= (L23assembly1 - 2); i++) {

                        if (array2[i] == 1) {
                            $(".L23computerdisplayassem" + i).attr("src", "media/computer3.png");

                        } else {
                            $(".L23computerdisplayassem" + i).removeAttr("src");

                        }

                    }

                    for (i = 0; i <= (L23assembly1 - 2); i++) {

                        if (array3[i] == "stop") {
                            $("#L23backstatus" + i).css("animation", "red 1s infinite");
                            // $("#svgL23backstatusB" + i).css("animation", "red 1s infinite");
                            // $("#svgL23backstatusC" + i).css("animation", "red 1s infinite");
                            // $("#svgL23backstatusB" + i).remvoeClass("animation");
                            // $("#svgL23backstatusC" + i).remvoeClass("animation");


                        } else if (array3[i] == "breaks") {
                            $("#L23backstatus" + i).css("animation", "yellow 1s infinite");
                            // $("#svgL23backstatusB" + i).css("animation", "yellow 1s infinite");
                            // $("#svgL23backstatusC" + i).css("animation", "yellow 1s infinite");
                            // $("#svgL23backstatusB" + i).remvoeClass("animation");
                            // $("#svgL23backstatusC" + i).remvoeClass("animation");

                        } else if (array3[i] == "offline") {
                            $("#L23backstatus" + i).css("animation", "grey 1s infinite");
                            // $("#svgL23backstatusB" + i).css("animation", "grey 1s infinite");
                            // $("#svgL23backstatusC" + i).css("animation", "grey 1s infinite");
                            // $("#svgL23backstatusB" + i).remvoeClass("animation");
                            // $("#svgL23backstatusC" + i).remvoeClass("animation");

                        } else {
                            $("#L23backstatus" + i).css("animation", "green 1s infinite");
                            // $("#svgL23backstatusB" + i).css("animation", "green 1s infinite");
                            // $("#svgL23backstatusC" + i).css("animation", "green 1s infinite");
                            // $("#svgL23backstatusB" + i).remvoeClass("animation");
                            // $("#svgL23backstatusC" + i).remvoeClass("animation");
                        }

                    }

                    //------------------------------------------------------Inspection-Json-Collect-------------------------------------------------------------------------------//

                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM production_line_L23 where station_group = 'inspection' and operating ='1'");

                    $jsoninspec = array();
                    $jsoninspec1 = array();
                    $jsoninspec2 = array();
                    $jsoninspec3 = array();
                    while ($row = $sql->fetch_assoc()) {
                        $jsoninspec[] = $row['station'];
                        $jsoninspec1[] = $row['robot'];
                        $jsoninspec2[] = $row['cpu'];
                        $jsoninspec3[] = $row['status'];
                    }
                    ?>

                    var arrayinspec = <?= json_encode($jsoninspec) ?>;
                    var arrayinspec1 = <?= json_encode($jsoninspec1) ?>;
                    var arrayinspec2 = <?= json_encode($jsoninspec2) ?>;
                    var arrayinspec3 = <?= json_encode($jsoninspec3) ?>;
                    // console.log(array);
                    // console.log(arrayinspec1);
                    // console.log(arrayinspec2);
                    for (i = 0; i <= L23inspection1; i++) {

                        $(".L23stationnameinspec" + i).html(arrayinspec[i]);

                    }



                    for (i = 0; i <= (L23inspection1 - 2); i++) {

                        if (arrayinspec1[i] == 1) {
                            $(".L23imginspec" + i).attr("src", "media/robotarm.gif");
                            $("#svgL23backstatusinspecB" + i).attr("style", "display:block;");
                            $("#svgL23backstatusinspecC" + i).attr("style", "display:none;");

                        } else if (arrayinspec1[i] == 0) {
                            $(".L23imginspecC" + i).attr("src", "media/operator.gif");
                            $("#svgL23backstatusinspecB" + i).attr("style", "display:none;");
                            $("#svgL23backstatusinspecC" + i).attr("style", "display:block;");
                        } else {
                            $(".L23imginspec" + i).attr("style", "display:none;");
                            $("#svgL23backstatusinspecB" + i).attr("style", "display:none;");
                            $("#svgL23backstatusinspecC" + i).attr("style", "display:none;");

                        }

                    }
                    for (i = 0; i <= (L23inspection1); i++) {

                        if (arrayinspec2[i] == 1) {
                            $(".L23computerdisplayinspec" + i).attr("src", "media/computer3.png");

                        } else {
                            $(".L23computerdisplayinspec" + i).removeAttr("src");
                        }

                    }



                    for (i = 0; i <= (L23inspection1 - 2); i++) {

                        if (arrayinspec3[i] == "stop") {
                            $("#L23backstatusinspec" + i).css("animation", "red 1s infinite");

                        } else if (arrayinspec3[i] == "breaks") {
                            $("#L23backstatusinspec" + i).css("animation", "yellow 1s infinite");

                        } else if (arrayinspec3[i] == "offline") {
                            $("#L23backstatusinspec" + i).css("animation", "grey 1s infinite");

                        } else {
                            $("#L23backstatusinspec" + i).css("animation", "green 1s infinite");

                        }

                    }



                    //------------------------------------------------------Packing-Json-Collect----------------------------------------------------------------------------------//


                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM production_line_L23 where station_group = 'packing' and operating ='1'");

                    $jsonpack = array();
                    $jsonpack1 = array();
                    $jsonpack2 = array();
                    $jsonpack3 = array();
                    while ($row = $sql->fetch_assoc()) {
                        $jsonpack[] = $row['station'];
                        $jsonpack1[] = $row['robot'];
                        $jsonpack2[] = $row['cpu'];
                        $jsonpack3[] = $row['status'];
                    }
                    ?>

                    var arraypack = <?= json_encode($jsonpack) ?>;
                    var arraypack1 = <?= json_encode($jsonpack1) ?>;
                    var arraypack2 = <?= json_encode($jsonpack2) ?>;
                    var arraypack3 = <?= json_encode($jsonpack3) ?>;
                    // console.log(array);
                    // console.log(arraypack1);
                    // console.log(arraypack2);
                    for (i = 0; i <= L23packing1; i++) {

                        $(".L23stationnamepack" + i).html(arraypack[i]);




                    }


                    for (i = 0; i <= (L23packing1 - 3); i++) {

                        if (arraypack1[i] == 1) {
                            $(".L23imgpack" + i).attr("src", "media/robotarm.gif");
                            $("#svgL23backstatuspackB" + i).attr("style", "display:block;");
                            $("#svgL23backstatuspackC" + i).attr("style", "display:none;");

                        } else if (arraypack1[i] == 0) {
                            $(".L23imgpackC" + i).attr("src", "media/operator.gif");
                            $("#svgL23backstatuspackB" + i).attr("style", "display:none;");
                            $("#svgL23backstatuspackC" + i).attr("style", "display:block;");
                        } else {
                            $(".L23imgpack" + i).attr("style", "display:none;");
                            $("#svgL23backstatuspackB" + i).attr("style", "display:none;");
                            $("#svgL23backstatuspackC" + i).attr("style", "display:none;");

                        }

                    }
                    for (i = 0; i <= (L23packing1 - 3); i++) {

                        if (arraypack2[i] == 1) {
                            $(".L23computerdisplaypack" + i).attr("src", "media/computer3.png");

                        } else {
                            $(".L23computerdisplaypack" + i).removeAttr("src");
                        }

                    }


                    for (i = 0; i <= (L23packing1 - 3); i++) {

                        if (arraypack3[i] == "stop") {
                            $("#L23backstatuspack" + i).css("animation", "red 1s infinite");

                        } else if (arraypack3[i] == "breaks") {
                            $("#L23backstatuspack" + i).css("animation", "yellow 1s infinite");

                        } else if (arraypack3[i] == "offline") {
                            $("#L23backstatuspack" + i).css("animation", "grey 1s infinite");

                        } else {
                            $("#L23backstatuspack" + i).css("animation", "green 1s infinite");

                        }

                    }

                    //--------------------------------------------------------------------------------------------------------------------------------------------------------------//



                    // document.getElementById("L23backstatus8").style.backgroundColor = "yellow";
                    // document.getElementById("svgL23backstatus8").style.backgroundColor = "yellow";

                    // document.getElementById("L23stationinput8").innerHTML = "900";
                    // document.getElementById("L23stationpass8").innerHTML = "500";
                    // document.getElementById("L23stationfail8").innerHTML = "400";
                    // document.getElementById("L23stationlast8").innerHTML = "60";
                    // document.getElementById("L23stationstatus8").innerHTML = "BREAKS";
                    // document.getElementById("L23stationstatus8").style.backgroundColor = "yellow";
                    // document.getElementById("L23stationstatus8").style.color = "black";

                },

                complete: function() {
                    // Schedule the next request when the current one's complete
                    // setTimeout(getDataCounter(), 10000);  
                }
            });
        }
    </script>


    <script>
        function runL23() {

            var L23assembly1a = localStorage.getItem('L23assembly1storage');
            var L23inspection1a = localStorage.getItem('L23inspection1storage');
            var L23packing1a = localStorage.getItem('L23packing1storage');;

            for (i = 1; i <= L23assembly1a; i++) {
                document.getElementById("L23flipassem" + i).classList.toggle('card--flipped');
            }

            for (i = 1; i <= L23inspection1a; i++) {
                document.getElementById("L23flipinspec" + i).classList.toggle('card--flipped');
            }

            for (i = 1; i <= L23packing1a; i++) {
                document.getElementById("L23flippack" + i).classList.toggle('card--flipped');
            }

        }
    </script>
    <script>

    </script>

</body>

</html>