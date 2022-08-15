<?php


include("dashboard/connection.php");

?>


<html>

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

        }

        .btnforsvg:hover {
            width: 150px;
            height: 150px;
            top: 50px;
            border: 2px solid #232323;
            box-shadow: 0 4px 5px rgba(0, 0, 0, 0.5);
            z-index: 199 !important;
        }

        .btnforsvg:hover .text {
            opacity: 1;
            top: 0;
        }

        .btnforsvg .icon {
            width: 60px;
            height: 60px;

            margin: 60% 0%;
            display: inline-block;
        }

        .btnforsvg .icon img {
            width: 40px;
            height: 30px;
        }

        .btnforsvg .text {
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
        .L27gred {
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


    <div class="L27gred">

        <div class="areaA" style="border-top-left-radius:1em;border-bottom-left-radius:1em;">Assembly
            <div class="columnum">
                <div class="row" style="flex-wrap: nowrap;white-space:nowrap;">

                    <p id="L27flexdisplay1" style="display:flex;width: 100%;height:100px;margin-top:12%;"></p>


                </div>
            </div>
        </div>

        <div class="areaB">Inspection
            <div class="columnum">
                <div class="row" style="flex-wrap: nowrap;white-space:nowrap;">

                    <p id="L27flexdisplay2" style="display:flex;width: 100%;height:100px;margin-top:12%;"></p>


                </div>
            </div>
        </div>

        <div class="areaC" style="border-top-right-radius:1em;border-bottom-right-radius:1em;">Packing
            <div class="columnum">
                <div class="row" style="flex-wrap: nowrap;white-space:nowrap;">

                    <p id="L27flexdisplay3" style="display:flex;width: 100%;height:100px;margin-top:12%;"></p>


                </div>
            </div>
        </div>

        <script>
            function runL27(self) {
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




            $("#dataCounterBody").empty();
            $("#dataCounterBody").append('<tr align="center" style="font-weight: bold">' +
                '<td colspan="8"><span><img src="media/loading2.gif" width="50" height="50" alt="Mplify"><p>Loading...</p></span></td></tr>');

            $("#scroller").container2();


        });
        getDataCounter();
        setInterval(getDataCounter, 60000);
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
                    var L27assembly1 =
                        <?php

                        $sql = "select * from production_line_L27 where station_group = 'assembly'";
                        if ($result = mysqli_query($conn, $sql)) {
                            $rowcount = mysqli_num_rows($result);
                            echo $rowcount;
                        }
                        ?> + 1; //+1 = 1 box at the back if +1 +1 = 2 (x)box
                    var L27assemblyback = L27assembly1 - 1; //second last box
                    var L27assemblyroller = L27assembly1; //last box
                    var realL27assembly1 = L27assembly1 - 2;

                    //------------------------------------------------------Declare-Inspection-Station-------------------------------------------------------------------------------//
                    var L27inspection1 =
                        <?php

                        $sql = "select * from production_line_L27 where station_group = 'inspection'";
                        if ($result = mysqli_query($conn, $sql)) {
                            $rowcount = mysqli_num_rows($result);
                            echo $rowcount;
                        }
                        ?> + 1;
                    var L27inspectionback = L27inspection1 - 1;
                    var L27inspectionroller = L27inspection1;
                    var realL27inspection1 = L27inspection1 - 2;

                    //------------------------------------------------------Declare-Packing-Station---------------------------------------------------------------------------------//
                    var L27packing1 =
                        <?php

                        $sql = "select * from production_line_L27 where station_group = 'packing'";
                        if ($result = mysqli_query($conn, $sql)) {
                            $rowcount = mysqli_num_rows($result);
                            echo $rowcount;
                        }
                        ?> + 1 + 1;
                    var L27packingback = L27packing1 - 1;
                    var L27packingroller = L27packing1;
                    var realL27packing1 = L27packing1 - 2;

                    localStorage.setItem('L27assembly1storage', L27assembly1);
                    localStorage.setItem('L27inspection1storage', L27inspection1);
                    localStorage.setItem('L27packing1storage', L27packing1);

                    //------------------------------------------------------Append-Assembly-Station-(Dynamic)------------------------------------------------------------------------//
                    $("#L27flexdisplay1").empty();
                    for (i = 0; i <= L27assembly1; i++) {
                        if (i == 0 || i == L27assemblyroller) { //L27assemblyroller last box if we need another second box we just put i==L27assemblyback
                            $("#L27flexdisplay1").append(
                                '<div id="L27flipassem' + (i + 1) + '" class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<img class="L27imgassem' + (i - 1) + '" src="media/xvariable.png" alt="">' +
                                '<div id="L27backstatus' + (i - 1) + '" class="card__front" style="color: black;background-color: transparent;">' +
                                '</div>' +
                                '</div>'
                            );
                        } else {

                            $("#L27flexdisplay1").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<div id="L27flipassem' + (i + 1) + '" class="card" onclick="runL27(this)">' +
                                '<div id="L27backstatus' + (i - 1) + '" class="card__front" style="color: black;background-color: green;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div id="svgL27backstatus' + (i - 1) + '" class="btnforsvg" style="background-color: green;">' +
                                '<img class="L27imgassem' + (i - 1) + '" src="media/robotarm.gif" alt="" style="">' +
                                '</div>' +
                                '<div class="wrapperstation23" style="background-color: transparent;" >' +
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
                                '<td class="L27stationname' + (i - 1) + '"></td>' +
                                '<td id="L27stationinput' + (i + 1) + '">1000</td>' +
                                '<td id="L27stationpass' + (i + 1) + '">997</td>' +
                                '<td id="L27stationfail' + (i + 1) + '">3</td>' +
                                '<td id="L27stationlast' + (i + 1) + '">3 mins</td>' +
                                '<td id="L27stationstatus' + (i + 1) + '" style="background:green;color:white;border-radius:0.4em;">RUN</td>' +
                                '</tr>' +
                                '</table> ' +
                                '</div>' +
                                '</a>' +
                                '</div>' +
                                '</div>' +
                                '<div class="card__back"  style="background-color: white;">' +
                                '<div style="text-align:center;">' +
                                '<p><img class="L27computerdisplayassem' + (i - 1) + '"   style="width:60%;height:40%;"></p>' +

                                '</div>' +

                                '</div>' +
                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }

                    }

                    //------------------------------------------------------Append-Inspection-Station-(Dynamic)----------------------------------------------------------------------//
                    $("#L27flexdisplay2").empty();
                    for (i = 0; i <= L27inspection1 - 1; i++) {
                        if (i == 0) {
                            $("#L27flexdisplay2").append(
                                '<div id="L27flipinspec' + (i + 1) + '" class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<img class="L27imginspec' + (i - 1) + '" src="media/xvariable.png" alt="">' +
                                '<div id="L27backstatusinspec' + (i - 1) + '" class="card__front" style="color: black;background-color: transparent;">' +
                                '</div>'
                            );
                        } else {

                            $("#L27flexdisplay2").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<div id="L27flipinspec' + (i + 1) + '" class="card" onclick="runL27(this)">' +
                                '<div id="L27backstatusinspec' + (i - 1) + '" class="card__front" style="color: black;background-color: green;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div id="svgL27backstatusinspec' + (i - 1) + '" class="btnforsvg" style="background-color: green;">' +
                                '<img class="L27imginspec' + (i - 1) + '" src="media/robotarm.gif" alt="" style="">' +
                                '</div>' +
                                '<div class="wrapperstation23" style="background-color: transparent;" >' +
                                '<a class="reviews">' + (i + 10) +
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
                                '<td class="L27stationnameinspec' + (i - 1) + '"></td>' +
                                '<td id="L27stationinputinspec' + (i + 1) + '">1000</td>' +
                                '<td id="L27stationpassinspec' + (i + 1) + '">997</td>' +
                                '<td id="L27stationfailinspec' + (i + 1) + '">3</td>' +
                                '<td id="L27stationlastinspec' + (i + 1) + '">3 mins</td>' +
                                '<td id="L27stationstatusinspec' + (i + 1) + '" style="background:green;color:white;border-radius:0.4em;">RUN</td>' +
                                '</tr>' +
                                '</table> ' +
                                '</div>' +
                                '</a>' +
                                '</div>' +
                                '</div>' +
                                '<div class="card__back"  style="background-color: white;">' +
                                '<div style="text-align:center;">' +
                                '<p ><img class="L27computerdisplayinspec' + (i - 1) + '"   style="width:60%;height:40%;"></p>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }


                    }


                    //------------------------------------------------------Append-Packing-Station-(Dynamic)------------------------------------------------------------------------//
                    $("#L27flexdisplay3").empty();
                    for (i = 1; i <= L27packing1; i++) {
                        if (i == L27packingroller || i == L27packingback) {
                            $("#L27flexdisplay3").append(
                                '<div id="L27flippack' + (i + 1) + '" class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<img class="L27imgpack' + (i - 1) + '" src="media/xvariable.png" alt="">' +
                                '<div id="L27backstatuspack' + (i - 1) + '" class="card__front" style="color: black;background-color: transparent;">' +
                                '</div>'
                            );
                        } else {

                            $("#L27flexdisplay3").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<div id="L27flippack' + (i + 1) + '" class="card" onclick="runL27(this)">' +
                                '<div id="L27backstatuspack' + (i - 1) + '" class="card__front" style="color: black;background-color: green;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div id="svgL27backstatuspack' + (i - 1) + '" class="btnforsvg" style="">' +
                                '<img class="L27imgpack' + (i - 1) + '" src="media/robotarm.gif" alt="" style="">' +
                                '</div>' +
                                '<div class="wrapperstation23" style="background-color: transparent;" >' +
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
                                '<td class="L27stationnamepack' + (i - 1) + '"></td>' +
                                '<td id="L27stationinputpack' + (i + 1) + '">1000</td>' +
                                '<td id="L27stationpasspack' + (i + 1) + '">997</td>' +
                                '<td id="L27stationfailpack' + (i + 1) + '">3</td>' +
                                '<td id="L27stationlastpack' + (i + 1) + '">3 mins</td>' +
                                '<td id="L27stationstatuspack' + (i + 1) + '" style="background:green;color:white;border-radius:0.4em;">RUN</td>' +
                                '</tr>' +
                                '</table> ' +
                                '</div>' +
                                '</a>' +
                                '</div>' +
                                '</div>' +
                                '<div class="card__back"  style="background-color: white;">' +
                                '<div style="text-align:center;">' +
                                '<p><img class="L27computerdisplaypack' + (i - 1) + '"  style="width:60%;height:40%;"></p>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }


                    }

                    //------------------------------------------------------Declare-Roller---------------------------------------------------------------------------------------//


                    // $(".L27imgassem1").attr("src", "media/xvariable.png");
                    // $(".L27imgassem19").attr("src", "media/xvariable.png");

                    // $(".L27imgassem19").attr("src", "media/roller2.jpg");
                    // $(".L27imgassem9").attr("src", "media/operator.gif");


                    $(".L27imgpack" + (L27packing1 - 1)).attr("src", "media/roller2.JPG");


                    //------------------------------------------------------Assembly-Json-Collect--------------------------------------------------------------------------------//
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM production_line_L27 where station_group = 'assembly'");

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
                    for (i = 0; i <= L27assembly1; i++) {

                        $(".L27stationname" + i).html(array[i]);




                    }


                    for (i = 0; i <= (L27assembly1 - 2); i++) {

                        if (array1[i] == 1) {
                            $(".L27imgassem" + i).attr("src", "media/robotarm.gif");

                        } else {
                            $(".L27imgassem" + i).attr("src", "media/operator.gif");
                        }

                    }

                    for (i = 0; i <= (L27assembly1 - 2); i++) {

                        if (array2[i] == 1) {
                            $(".L27computerdisplayassem" + i).attr("src", "media/computer3.png");

                        } else {
                            $(".L27computerdisplayassem" + i).removeAttr("src");
                        }

                    }

                    for (i = 0; i <= (L27assembly1 - 2); i++) {

                        if (array3[i] == "stop") {
                            $("#L27backstatus" + i).css("animation", "red 1s infinite");
                            $("#svgL27backstatus" + i).css("animation", "red 1s infinite");


                        } else if (array3[i] == "breaks") {
                            $("#L27backstatus" + i).css("animation", "yellow 1s infinite");
                            $("#svgL27backstatus" + i).css("animation", "yellow 1s infinite");

                        } else if (array3[i] == "offline") {
                            $("#L27backstatus" + i).css("animation", "grey 1s infinite");
                            $("#svgL27backstatus" + i).css("animation", "grey 1s infinite");

                        } else {
                            $("#L27backstatus" + i).css("animation", "green 1s infinite");
                            $("#svgL27backstatus" + i).css("animation", "green 1s infinite");
                        }

                    }

                    //------------------------------------------------------Inspection-Json-Collect-------------------------------------------------------------------------------//

                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM production_line_L27 where station_group = 'inspection'");

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
                    for (i = 0; i <= L27inspection1; i++) {

                        $(".L27stationnameinspec" + i).html(arrayinspec[i]);

                    }


                    for (i = 0; i <= (L27inspection1 - 2); i++) {

                        if (arrayinspec1[i] == 1) {
                            $(".L27imginspec" + i).attr("src", "media/robotarm.gif");

                        } else {
                            $(".L27imginspec" + i).attr("src", "media/operator.gif");
                        }

                    }

                    for (i = 0; i <= (L27inspection1); i++) {

                        if (arrayinspec2[i] == 1) {
                            $(".L27computerdisplayinspec" + i).attr("src", "media/computer3.png");

                        } else {
                            $(".L27computerdisplayinspec" + i).removeAttr("src");
                        }

                    }

                    for (i = 0; i <= (L27inspection1 - 2); i++) {

                        if (arrayinspec3[i] == "stop") {
                            $("#L27backstatusinspec" + i).css("animation", "red 1s infinite");
                            $("#svgL27backstatusinspec" + i).css("animation", "red 1s infinite");


                        } else if (arrayinspec3[i] == "breaks") {
                            $("#L27backstatusinspec" + i).css("animation", "yellow 1s infinite");
                            $("#svgL27backstatusinspec" + i).css("animation", "yellow 1s infinite");

                        } else if (arrayinspec3[i] == "offline") {
                            $("#L27backstatusinspec" + i).css("animation", "grey 1s infinite");
                            $("#svgL27backstatusinspec" + i).css("animation", "grey 1s infinite");

                        } else {
                            $("#L27backstatusinspec" + i).css("animation", "green 1s infinite");
                            $("#svgL27backstatusinspec" + i).css("animation", "green 1s infinite");
                        }

                    }



                    //------------------------------------------------------Packing-Json-Collect----------------------------------------------------------------------------------//


                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM production_line_L27 where station_group = 'packing'");

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
                    for (i = 0; i <= L27packing1; i++) {

                        $(".L27stationnamepack" + i).html(arraypack[i]);




                    }


                    for (i = 0; i <= (L27packing1 - 3); i++) {

                        if (arraypack1[i] == 1) {
                            $(".L27imgpack" + i).attr("src", "media/robotarm.gif");


                        } else {
                            $(".L27imgpack" + i).attr("src", "media/operator.gif");
                        }

                    }

                    for (i = 0; i <= (L27packing1 - 3); i++) {

                        if (arraypack2[i] == 1) {
                            $(".L27computerdisplaypack" + i).attr("src", "media/computer3.png");

                        } else {
                            $(".L27computerdisplaypack" + i).removeAttr("src");
                        }

                    }

                    for (i = 0; i <= (L27packing1 - 3); i++) {

                        if (arraypack3[i] == "stop") {
                            $("#L27backstatuspack" + i).css("animation", "red 1s infinite");
                            $("#svgL27backstatuspack" + i).css("animation", "red 1s infinite");


                        } else if (arraypack3[i] == "breaks") {
                            $("#L27backstatuspack" + i).css("animation", "yellow 1s infinite");
                            $("#svgL27backstatuspack" + i).css("animation", "yellow 1s infinite");

                        } else if (arraypack3[i] == "offline") {
                            $("#L27backstatuspack" + i).css("animation", "grey 1s infinite");
                            $("#svgL27backstatuspack" + i).css("animation", "grey 1s infinite");

                        } else {
                            $("#L27backstatuspack" + i).css("animation", "green 1s infinite");
                            $("#svgL27backstatuspack" + i).css("animation", "green 1s infinite");
                        }

                    }

                    //--------------------------------------------------------------------------------------------------------------------------------------------------------------//



                    // document.getElementById("L27backstatus8").style.backgroundColor = "yellow";
                    // document.getElementById("svgL27backstatus8").style.backgroundColor = "yellow";

                    // document.getElementById("L27stationinput8").innerHTML = "900";
                    // document.getElementById("L27stationpass8").innerHTML = "500";
                    // document.getElementById("L27stationfail8").innerHTML = "400";
                    // document.getElementById("L27stationlast8").innerHTML = "60";
                    // document.getElementById("L27stationstatus8").innerHTML = "BREAKS";
                    // document.getElementById("L27stationstatus8").style.backgroundColor = "yellow";
                    // document.getElementById("L27stationstatus8").style.color = "black";

                },

                complete: function() {
                    // Schedule the next request when the current one's complete
                    // setTimeout(getDataCounter(), 10000);  
                }
            });
        }
    </script>


    <script>
        function runL27() {

            var L27assembly1a = localStorage.getItem('L27assembly1storage');
            var L27inspection1a = localStorage.getItem('L27inspection1storage');
            var L27packing1a = localStorage.getItem('L27packing1storage');;

            for (i = 1; i <= L27assembly1a; i++) {
                document.getElementById("L27flipassem" + i).classList.toggle('card--flipped');
            }

            for (i = 1; i <= L27inspection1a; i++) {
                document.getElementById("L27flipinspec" + i).classList.toggle('card--flipped');
            }

            for (i = 2; i <= L27packing1a; i++) {
                document.getElementById("L27flippack" + i).classList.toggle('card--flipped');
            }

        }
    </script>
</body>

</html>