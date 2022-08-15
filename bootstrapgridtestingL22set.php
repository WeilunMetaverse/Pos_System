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

        }

        .btnforsvg:hover,
        .btnforsvgcircle:hover {
            width: 150px;
            height: 150px;
            top: 50px;
            border: 2px solid #232323;
            box-shadow: 0 4px 5px rgba(0, 0, 0, 0.5);
            z-index: 199 !important;
        }

        .btnforsvg:hover .text,
        .btnforsvgcircle:hover .text {
            opacity: 1;
            top: 0;
        }

        .btnforsvg .icon,
        .btnforsvgcircle .icon {
            width: 60px;
            height: 60px;

            margin: 60% 0%;
            display: inline-block;
        }

        .btnforsvg .icon img,
        .btnforsvgcircle .icon img {
            width: 40px;
            height: 30px;
        }

        .btnforsvg .text,
        .btnforsvgcircle .text {
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
        .L22sgred {
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


    <div class="L22sgred">

        <div class="areaA" style="border-top-left-radius:1em;border-bottom-left-radius:1em;">Assembly
            <div class="columnum">
                <div class="row" style="flex-wrap: nowrap;white-space:nowrap;">

                    <p id="L22sflexdisplay1" style="display:flex;width: 100%;height:100px;margin-top:12%;"></p>
                    <p id="L22sflexdisplay1b" style="display:flex;width: 100%;height:100px;margin-top:-1%;"></p>

                    <p id="L22sflexdisplay1c" style="display:flex;width: 100%;height:100px;margin-top:-48%;"></p>


                </div>
            </div>
        </div>

        <div class="areaB">Inspection
            <div class="columnum">
                <div class="row" style="flex-wrap: nowrap;white-space:nowrap;">

                    <p id="L22sflexdisplay2" style="display:flex;width: 100%;height:100px;margin-top:12%;"></p>
                    <p id="L22sflexdisplay2b" style="display:flex;width: 100%;height:100px;margin-top:-1%;"></p>

                    <p id="L22sflexdisplay2c" style="display:flex;width: 100%;height:100px;margin-top:-48%;"></p>

                </div>
            </div>
        </div>

        <div class="areaC" style="border-top-right-radius:1em;border-bottom-right-radius:1em;">Packing
            <div class="columnum">
                <div class="row" style="flex-wrap: nowrap;white-space:nowrap;">

                    <p id="L22sflexdisplay3" style="display:flex;width: 100%;height:100px;margin-top:12%;"></p>
                    <p id="L22sflexdisplay3b" style="display:flex;width: 100%;height:100px;margin-top:-1%;"></p>

                    <p id="L22sflexdisplay3c" style="display:flex;width: 100%;height:100px;margin-top:-48%;"></p>

                </div>
            </div>
        </div>

        <script>
            function runL22s(self) {
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
                    var L22sassembly1 =
                        <?php

                        $sql = "select * from production_line_L22s where station_group = 'assembly'";
                        if ($result = mysqli_query($conn, $sql)) {
                            $rowcount = mysqli_num_rows($result);
                            echo $rowcount;
                        }
                        ?> + 1; //+1 = 1 box at the back if +1 +1 = 2 (x)box
                    var L22sassemblyback = L22sassembly1 - 1; //second last box
                    var L22sassemblyroller = L22sassembly1; //last box
                    var realL22sassembly1 = L22sassembly1 - 2;

                    //------------------------------------------------------Declare-Inspection-Station-------------------------------------------------------------------------------//
                    var L22sinspection1 =
                        <?php

                        $sql = "select * from production_line_L22s where station_group = 'inspection'";
                        if ($result = mysqli_query($conn, $sql)) {
                            $rowcount = mysqli_num_rows($result);
                            echo $rowcount;
                        }
                        ?> + 1;
                    var L22sinspectionback = L22sinspection1 - 1;
                    var L22sinspectionroller = L22sinspection1;
                    var realL22sinspection1 = L22sinspection1 - 2;

                    //------------------------------------------------------Declare-Packing-Station---------------------------------------------------------------------------------//
                    var L22spacking1 =
                        <?php

                        $sql = "select * from production_line_L22s where station_group = 'packing'";
                        if ($result = mysqli_query($conn, $sql)) {
                            $rowcount = mysqli_num_rows($result);
                            echo $rowcount;
                        }
                        ?> + 1 + 1;
                    var L22spackingback = L22spacking1 - 1;
                    var L22spackingroller = L22spacking1;
                    var realL22spacking1 = L22spacking1 - 2;

                    localStorage.setItem('L22sassembly1storage', L22sassembly1);
                    localStorage.setItem('L22sinspection1storage', L22sinspection1);
                    localStorage.setItem('L22spacking1storage', L22spacking1);

                    //------------------------------------------------------Append-Assembly-Station-(Dynamic)------------------------------------------------------------------------//
                    $("#L22sflexdisplay1").empty();

                    for (i = 0; i <= L22sassembly1; i++) {
                        if (i == 0 || i == L22sassemblyroller) { //L22sassemblyroller last box if we need another second box we just put i==L22sassemblyback
                            $("#L22sflexdisplay1").append(
                                '<div id="L22sflipassem' + (i + 1) + '" class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<img class="L22simgassem' + (i - 1) + '" src="media/xvariable.png" alt="">' +
                                '<div id="L22sbackstatus' + (i - 1) + '" class="card__front" style="color: black;background-color: transparent;">' +
                                '</div>' +
                                '</div>'
                            );
                        } else {

                            $("#L22sflexdisplay1").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<div id="L22sflipassem' + (i + 1) + '" class="card" onclick="runL22s(this)">' +
                                '<div id="L22sbackstatus' + (i - 1) + '" class="card__front" style="color: black;background-color: green;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div class="wrapperstation23" style="background-color: transparent;" >' +
                                '<br>' +
                                '<p><img class="L22scomputerdisplayassem' + (i - 1) + '"   style="width:200%;height:200%;margin:0% -50%;"></p>' +

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
                                '<td class="L22sstationname' + (i - 1) + '"></td>' +
                                '<td id="L22sstationinput' + (i + 1) + '">1000</td>' +
                                '<td id="L22sstationpass' + (i + 1) + '">997</td>' +
                                '<td id="L22sstationfail' + (i + 1) + '">3</td>' +
                                '<td id="L22sstationlast' + (i + 1) + '">3 mins</td>' +
                                '<td id="L22sstationstatus' + (i + 1) + '" style="background:green;color:white;border-radius:0.4em;">RUN</td>' +
                                '</tr>' +
                                '</table> ' +
                                '</div>' +
                                '</a>' +
                                '</div>' +
                                '</div>' +
                                '<div class="card__back"  style="background-color: white;">' +
                                '<div style="text-align:center;">' +
                                '<p><img class="L22scomputerdisplayassem' + (i - 1) + '"   style="width:60%;height:40%;"></p>' +

                                '</div>' +

                                '</div>' +
                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }
                    }
                    //----------------------------------------------------display-robot----------------------------------------------------------------------------//
                    $("#L22sflexdisplay1b").empty();
                    for (i = 0; i <= L22sassembly1; i++) {
                        if (i == 0 || i == L22sassemblyroller) { //L22sassemblyroller last box if we need another second box we just put i==L22sassemblyback
                            $("#L22sflexdisplay1b").append(

                                '<div id="L22sflipassemB' + (i + 1) + '" class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;opacity:0;">' +
                                '<img class="L22simgassemB' + (i - 1) + '" src="media/xvariable.png" alt="">' +
                                '</div>' +
                                '</div>'
                            );
                        } else {

                            $("#L22sflexdisplay1b").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;border:none;box-shadow: none;">' +
                                '<div id="L22sflipassemB' + (i + 1) + '" class="card" onclick="runL22s(this)">' +
                                '<div id="L22sbackstatusB' + (i - 1) + '" class="card__front" style="color: black;animation: transparent 1s infinite;border:none;box-shadow: none;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div id="svgL22sbackstatusB' + (i - 1) + '" class="btnforsvg" style="animation: green 1s infinite;">' +
                                '<img class="L22simgassemB' + (i - 1) + '" src="media/robotarm.gif" alt="" style="">' +
                                '</div>' +

                                '</div>' +

                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }


                    }

                    //----------------------------------------------------display-operator--------------------------------------------------------------------------//

                    $("#L22sflexdisplay1c").empty();
                    for (i = 0; i <= L22sassembly1; i++) {
                        if (i == 0 || i == L22sassemblyroller) { //L22sassemblyroller last box if we need another second box we just put i==L22sassemblyback
                            $("#L22sflexdisplay1c").append(

                                '<div id="L22sflipassemC' + (i + 1) + '" class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;opacity:0;">' +
                                '<img class="L22simgassemC' + (i - 1) + '" src="media/xvariable.png" alt="">' +
                                '</div>' +
                                '</div>'
                            );
                        } else {

                            $("#L22sflexdisplay1c").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;border:none;box-shadow: none;">' +
                                '<div id="L22sflipassemC' + (i + 1) + '" class="card" onclick="runL22s(this)">' +
                                '<div id="L22sbackstatusC' + (i - 1) + '" class="card__front" style="color: black;animation: transparent 1s infinite;border:none;box-shadow: none;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div id="svgL22sbackstatusC' + (i - 1) + '" class="btnforsvgcircle" style="animation: green 1s infinite;">' +
                                '<img class="L22simgassemC' + (i - 1) + '" src="media/robotarm.gif" alt="" style="">' +
                                '</div>' +

                                '</div>' +

                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }


                    }

                    //------------------------------------------------------Append-Inspection-Station-(Dynamic)----------------------------------------------------------------------//
                    $("#L22sflexdisplay2").empty();
                    for (i = 0; i <= L22sinspection1; i++) {
                        if (i == 0 || i == L22sinspectionroller) {
                            $("#L22sflexdisplay2").append(
                                '<div id="L22sflipinspec' + (i + 1) + '" class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<img class="L22simginspec' + (i - 1) + '" src="media/xvariable.png" alt="">' +
                                '<div id="L22sbackstatusinspec' + (i - 1) + '" class="card__front" style="color: black;background-color: transparent;">' +
                                '</div>'
                            );
                        } else {

                            $("#L22sflexdisplay2").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<div id="L22sflipinspec' + (i + 1) + '" class="card" onclick="runL22s(this)">' +
                                '<div id="L22sbackstatusinspec' + (i - 1) + '" class="card__front" style="color: black;background-color: green;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div class="wrapperstation23" style="background-color: transparent;" >' +

                                '<br>' +
                                '<p><img class="L22scomputerdisplayinspec' + (i - 1) + '"   style="width:200%;height:200%;margin:0% -50%;"></p>' +


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
                                '<td class="L22sstationnameinspec' + (i - 1) + '"></td>' +
                                '<td id="L22sstationinputinspec' + (i + 1) + '">1000</td>' +
                                '<td id="L22sstationpassinspec' + (i + 1) + '">997</td>' +
                                '<td id="L22sstationfailinspec' + (i + 1) + '">3</td>' +
                                '<td id="L22sstationlastinspec' + (i + 1) + '">3 mins</td>' +
                                '<td id="L22sstationstatusinspec' + (i + 1) + '" style="background:green;color:white;border-radius:0.4em;">RUN</td>' +
                                '</tr>' +
                                '</table> ' +
                                '</div>' +
                                '</a>' +
                                '</div>' +
                                '</div>' +
                                '<div class="card__back"  style="background-color: white;">' +
                                '<div style="text-align:center;">' +
                                '<p ><img class="L22scomputerdisplayinspec' + (i - 1) + '"   style="width:60%;height:40%;"></p>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }


                    }
                    //----------------------------------------------------display-robot-inspection----------------------------------------------------------------------------//
                    $("#L22sflexdisplay2b").empty();
                    for (i = 0; i <= L22sinspection1; i++) {
                        if (i == 0 || i == L22sinspectionroller) { //L22sassemblyroller last box if we need another second box we just put i==L22sassemblyback
                            $("#L22sflexdisplay2b").append(

                                '<div id="L22sflipinspecB' + (i + 1) + '" class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;opacity:0;">' +
                                '<img class="L22simginspecB' + (i - 1) + '" src="media/xvariable.png" alt="">' +
                                '</div>' +
                                '</div>'
                            );
                        } else {

                            $("#L22sflexdisplay2b").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;border:none;box-shadow: none;">' +
                                '<div id="L22sflipinspecB' + (i + 1) + '" class="card" onclick="runL22s(this)">' +
                                '<div id="L22sbackstatusinspecB' + (i - 1) + '" class="card__front" style="color: black;animation: transparent 1s infinite;border:none;box-shadow: none;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div id="svgL22sbackstatusinspecB' + (i - 1) + '" class="btnforsvg" >' +
                                '<img class="L22simginspecB' + (i - 1) + '" src="media/robotarm.gif">' +
                                '</div>' +

                                '</div>' +

                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }


                    }
                    //----------------------------------------------------display-operator-inspection-------------------------------------------------------------------------//
                    $("#L22sflexdisplay2c").empty();
                    for (i = 0; i <= L22sinspection1; i++) {
                        if (i == 0 || i == L22sinspectionroller) { //L22sassemblyroller last box if we need another second box we just put i==L22sassemblyback
                            $("#L22sflexdisplay2c").append(

                                '<div id="L22sflipinspecC' + (i + 1) + '" class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;opacity:0;">' +
                                '<img class="L22simginspecC' + (i - 1) + '" src="media/xvariable.png" alt="">' +
                                '</div>' +
                                '</div>'
                            );
                        } else {

                            $("#L22sflexdisplay2c").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;border:none;box-shadow: none;">' +
                                '<div id="L22sflipinspecC' + (i + 1) + '" class="card" onclick="runL22s(this)">' +
                                '<div id="L22sbackstatusinspecC' + (i - 1) + '" class="card__front" style="color: black;animation: transparent 1s infinite;border:none;box-shadow: none;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div id="svgL22sbackstatusinspecC' + (i - 1) + '" class="btnforsvgcircle" >' +
                                '<img class="L22simginspecC' + (i - 1) + '" src="media/robotarm.gif" alt="">' +
                                '</div>' +

                                '</div>' +

                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }


                    }

                    //------------------------------------------------------Append-Packing-Station-(Dynamic)------------------------------------------------------------------------//
                    $("#L22sflexdisplay3").empty();
                    for (i = 0; i <= L22spacking1; i++) {
                        if (i == 0 || i == L22spackingroller || i == L22spackingback) {
                            $("#L22sflexdisplay3").append(
                                '<div id="L22sflippack' + (i + 1) + '" class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<img class="L22simgpack' + (i - 1) + '" src="media/xvariable.png" alt="">' +
                                '<div id="L22sbackstatuspack' + (i - 1) + '" class="card__front" style="color: black;background-color: transparent;">' +
                                '</div>'
                            );
                        } else {

                            $("#L22sflexdisplay3").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<div id="L22sflippack' + (i + 1) + '" class="card" onclick="runL22s(this)">' +
                                '<div id="L22sbackstatuspack' + (i - 1) + '" class="card__front" style="color: black;background-color: green;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div class="wrapperstation23" style="background-color: transparent;" >' +
                                '<br>' +
                                '<p><img class="L22scomputerdisplaypack' + (i - 1) + '"  style="width:200%;height:200%;margin:0% -50%;"></p>' +
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
                                '<td class="L22sstationnamepack' + (i - 1) + '"></td>' +
                                '<td id="L22sstationinputpack' + (i + 1) + '">1000</td>' +
                                '<td id="L22sstationpasspack' + (i + 1) + '">997</td>' +
                                '<td id="L22sstationfailpack' + (i + 1) + '">3</td>' +
                                '<td id="L22sstationlastpack' + (i + 1) + '">3 mins</td>' +
                                '<td id="L22sstationstatuspack' + (i + 1) + '" style="background:green;color:white;border-radius:0.4em;">RUN</td>' +
                                '</tr>' +
                                '</table> ' +
                                '</div>' +
                                '</a>' +
                                '</div>' +
                                '</div>' +
                                '<div class="card__back"  style="background-color: white;">' +
                                '<div style="text-align:center;">' +
                                '<p><img class="L22scomputerdisplaypack' + (i - 1) + '"  style="width:60%;height:40%;"></p>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }


                    }
                    //----------------------------------------------------display-robot-packing---------------------------------------------------------------------------//
                    $("#L22sflexdisplay3b").empty();
                    for (i = 0; i <= L22spacking1; i++) {
                        if (i == 0 || i == L22spackingroller) { //L22spackingroller last box if we need another second box we just put i==L22sassemblyback
                            $("#L22sflexdisplay3b").append(

                                '<div id="L22sflippackB' + (i + 1) + '" class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;opacity:0;">' +
                                '<img class="L22simgpackB' + (i - 1) + '" src="media/xvariable.png" alt="">' +
                                '</div>' +
                                '</div>'
                            );
                        } else {

                            $("#L22sflexdisplay3b").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;border:none;box-shadow: none;">' +
                                '<div id="L22sflippackB' + (i + 1) + '" class="card" onclick="runL22s(this)">' +
                                '<div id="L22sbackstatuspackB' + (i - 1) + '" class="card__front" style="color: black;animation: transparent 1s infinite;border:none;box-shadow: none;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div id="svgL22sbackstatuspackB' + (i - 1) + '" class="btnforsvg" style="animation: green 1s infinite;">' +
                                '<img class="L22simgpackB' + (i - 1) + '" src="media/robotarm.gif" alt="">' +
                                '</div>' +

                                '</div>' +

                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }


                    }
                    //----------------------------------------------------display-operator-packing-------------------------------------------------------------------------//

                    $("#L22sflexdisplay3c").empty();
                    for (i = 0; i <= L22spacking1; i++) {
                        if (i == 0 || i == L22spackingroller) { //L22sassemblyroller last box if we need another second box we just put i==L22sassemblyback
                            $("#L22sflexdisplay3c").append(

                                '<div id="L22sflippackC' + (i + 1) + '" class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;opacity:0;">' +
                                '<img class="L22simgpackC' + (i - 1) + '" src="media/xvariable.png" alt="">' +
                                '</div>' +
                                '</div>'
                            );
                        } else {

                            $("#L22sflexdisplay3c").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;width:100%;height:115%;border:none;box-shadow: none;">' +
                                '<div id="L22sflippackC' + (i + 1) + '" class="card" onclick="runL22s(this)">' +
                                '<div id="L22sbackstatuspackC' + (i - 1) + '" class="card__front" style="color: black;animation: transparent 1s infinite;border:none;box-shadow: none;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div id="svgL22sbackstatuspackC' + (i - 1) + '" class="btnforsvgcircle" style="animation: green 1s infinite;">' +
                                '<img class="L22simgpackC' + (i - 1) + '" src="media/robotarm.gif" alt="" style="">' +
                                '</div>' +

                                '</div>' +

                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }


                    }
                    //------------------------------------------------------Declare-Roller---------------------------------------------------------------------------------------//


                    // $(".L22simgassem1").attr("src", "media/xvariable.png");
                    // $(".L22simgassem19").attr("src", "media/xvariable.png");

                    // $(".L22simgassem19").attr("src", "media/roller2.jpg");
                    // $(".L22simgassem9").attr("src", "media/operator.gif");


                    $(".L22simgpack" + (L22spacking1 - 1)).attr("src", "media/roller2.JPG");


                    //------------------------------------------------------Assembly-Json-Collect--------------------------------------------------------------------------------//
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM production_line_L22s where station_group = 'assembly'");

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
                    for (i = 0; i <= L22sassembly1; i++) {

                        $(".L22sstationname" + i).html(array[i]);




                    }


                    for (i = 0; i <= (L22sassembly1 - 2); i++) {
                        if (array1[i] == 2) {
                            $(".L22simgassemc" + i).attr("src", "media/robotarm.gif");
                            $(".L22simgassemC" + i).attr("src", "media/operator.gif");
                            $("#svgL22sbackstatusassemB" + i).attr("style", "display:block;");
                            $("#svgL22sbackstatusassemC" + i).attr("style", "display:block;");

                        }
                        if (array1[i] == 1) {
                            $(".L22simgassem" + i).attr("src", "media/robotarm.gif");
                            $("#svgL22sbackstatusB" + i).attr("style", "display:block;");
                            $("#svgL22sbackstatusC" + i).attr("style", "display:none;");
                        } else if (array1[i] == 0) {
                            $(".L22simgassemC" + i).attr("src", "media/operator.gif");
                            $("#svgL22sbackstatusB" + i).attr("style", "display:none;");
                            $("#svgL22sbackstatusC" + i).attr("style", "display:block;");
                        } else {
                            $(".L22simgassem" + i).attr("src", "media/operator.gif");
                            $("#svgL22sbackstatusB" + i).attr("style", "display:none;");
                            $("#svgL22sbackstatusC" + i).attr("style", "display:none;");
                        }

                    }


                    for (i = 0; i <= (L22sassembly1 - 2); i++) {

                        if (array2[i] == 1) {
                            $(".L22scomputerdisplayassem" + i).attr("src", "media/computer3.png");

                        } else {
                            $(".L22scomputerdisplayassem" + i).removeAttr("src");

                        }

                    }

                    for (i = 0; i <= (L22sassembly1 - 2); i++) {

                        if (array3[i] == "stop") {
                            $("#L22sbackstatus" + i).css("animation", "red 1s infinite");
                            $("#svgL22sbackstatusB" + i).css("animation", "red 1s infinite");
                            $("#svgL22sbackstatusC" + i).css("animation", "red 1s infinite");


                        } else if (array3[i] == "breaks") {
                            $("#L22sbackstatus" + i).css("animation", "yellow 1s infinite");
                            $("#svgL22sbackstatusB" + i).css("animation", "yellow 1s infinite");
                            $("#svgL22sbackstatusC" + i).css("animation", "yellow 1s infinite");

                        } else if (array3[i] == "offline") {
                            $("#L22sbackstatus" + i).css("animation", "grey 1s infinite");
                            $("#svgL22sbackstatusB" + i).css("animation", "grey 1s infinite");
                            $("#svgL22sbackstatusC" + i).css("animation", "grey 1s infinite");

                        } else {
                            $("#L22sbackstatus" + i).css("animation", "green 1s infinite");
                            $("#svgL22sbackstatusB" + i).css("animation", "green 1s infinite");
                            $("#svgL22sbackstatusC" + i).css("animation", "green 1s infinite");
                        }

                    }

                    //------------------------------------------------------Inspection-Json-Collect-------------------------------------------------------------------------------//

                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM production_line_L22s where station_group = 'inspection'");

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
                    for (i = 0; i <= L22sinspection1; i++) {

                        $(".L22sstationnameinspec" + i).html(arrayinspec[i]);

                    }


                    for (i = 0; i <= (L22sinspection1 - 2); i++) {
                        if (arrayinspec1[i] == 2) {
                            $(".L22simginspec" + i).attr("src", "media/robotarm.gif");
                            $(".L22simginspecC" + i).attr("src", "media/operator.gif");
                            $("#svgL22sbackstatusinspecB" + i).attr("style", "display:block;");
                            $("#svgL22sbackstatusinspecC" + i).attr("style", "display:block;");

                        } else if (arrayinspec1[i] == 1) {
                            $(".L22simginspec" + i).attr("src", "media/robotarm.gif");
                            $("#svgL22sbackstatusinspecB" + i).attr("style", "display:block;");
                            $("#svgL22sbackstatusinspecC" + i).attr("style", "display:none;");

                        } else if (arrayinspec1[i] == 0) {
                            $(".L22simginspecC" + i).attr("src", "media/operator.gif");
                            $("#svgL22sbackstatusinspecB" + i).attr("style", "display:none;");
                            $("#svgL22sbackstatusinspecC" + i).attr("style", "display:block;");
                        } else {
                            $(".L22simginspec" + i).attr("style", "media/operator.gif");
                            $("#svgL22sbackstatusinspecB" + i).attr("style", "display:none;");
                            $("#svgL22sbackstatusinspecC" + i).attr("style", "display:none;");

                        }
                    }

                    for (i = 0; i <= (L22sinspection1 - 2); i++) {

                        if (arrayinspec2[i] == 1) {
                            $(".L22scomputerdisplayinspec" + i).attr("src", "media/computer3.png");

                        } else {
                            $(".L22scomputerdisplayinspec" + i).removeAttr("src");
                        }

                    }

                    for (i = 0; i <= (L22sinspection1 - 2); i++) {

                        if (arrayinspec3[i] == "stop") {
                            $("#L22sbackstatusinspec" + i).css("animation", "red 1s infinite");
                            $("#svgL22sbackstatusinspecB" + i).css("animation", "red 1s infinite");
                            $("#svgL22sbackstatusinspecC" + i).css("animation", "red 1s infinite");
                        } else if (arrayinspec3[i] == "breaks") {
                            $("#L22sbackstatusinspec" + i).css("animation", "yellow 1s infinite");
                            $("#svgL22sbackstatusinspecB" + i).css("animation", "yellow 1s infinite");
                            $("#svgL22sbackstatusinspecC" + i).css("animation", "yellow 1s infinite");

                        } else if (arrayinspec3[i] == "offline") {
                            $("#L22sbackstatusinspec" + i).css("animation", "grey 1s infinite");
                            $("#svgL22sbackstatusinspecB" + i).css("animation", "grey 1s infinite");
                            $("#svgL22sbackstatusinspecC" + i).css("animation", "grey 1s infinite");
                        } else {
                            $("#L22sbackstatusinspec" + i).css("animation", "green 1s infinite");
                            $("#svgL22sbackstatusinspecB" + i).css("animation", "green 1s infinite");
                            $("#svgL22sbackstatusinspecC" + i).css("animation", "green 1s infinite");
                        }

                    }



                    //------------------------------------------------------Packing-Json-Collect----------------------------------------------------------------------------------//


                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM production_line_L22s where station_group = 'packing'");

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
                    for (i = 0; i <= L22spacking1; i++) {

                        $(".L22sstationnamepack" + i).html(arraypack[i]);




                    }


                    for (i = 0; i <= (L22spacking1 - 2); i++) {
                        if (arraypack1[i] == 2) {
                            $(".L22simgpack" + i).attr("src", "media/robotarm.gif");
                            $(".L22simgpackC" + i).attr("src", "media/operator.gif");
                            $("#svgL22sbackstatuspackB" + i).attr("style", "display:block;");
                            $("#svgL22sbackstatuspackC" + i).attr("style", "display:block;");


                        } else if (arraypack1[i] == 1) {
                            $(".L22simgpack" + i).attr("src", "media/robotarm.gif");
                            $("#svgL22sbackstatuspackB" + i).attr("style", "display:block;");
                            $("#svgL22sbackstatuspackC" + i).attr("style", "display:none;");

                        } else if (arraypack1[i] == 0) {
                            $(".L22simgpackC" + i).attr("src", "media/operator.gif");
                            $("#svgL22sbackstatuspackB" + i).attr("style", "display:none;");
                            $("#svgL22sbackstatuspackC" + i).attr("style", "display:block;");
                        } else {
                            $(".L22simgpack" + i).attr("style", "media/operator.gif");
                            $("#svgL22sbackstatuspackB" + i).attr("style", "display:none;");
                            $("#svgL22sbackstatuspackC" + i).attr("style", "display:none;");

                        }

                    }

                    for (i = 0; i <= (L22spacking1 - 2); i++) {

                        if (arraypack2[i] == 1) {
                            $(".L22scomputerdisplaypack" + i).attr("src", "media/computer3.png");

                        } else {
                            $(".L22scomputerdisplaypack" + i).removeAttr("src");
                        }

                    }

                    for (i = 0; i <= (L22spacking1 - 2); i++) {

                        if (arraypack3[i] == "stop") {
                            $("#L22sbackstatuspack" + i).css("animation", "red 1s infinite");
                            $("#svgL22sbackstatuspackB" + i).css("animation", "red 1s infinite");
                            $("#svgL22sbackstatuspackC" + i).css("animation", "red 1s infinite");


                        } else if (arraypack3[i] == "breaks") {
                            $("#L22sbackstatuspack" + i).css("animation", "yellow 1s infinite");
                            $("#svgL22sbackstatuspackB" + i).css("animation", "yellow 1s infinite");
                            $("#svgL22sbackstatuspackC" + i).css("animation", "yellow 1s infinite");
                        } else if (arraypack3[i] == "offline") {
                            $("#L22sbackstatuspack" + i).css("animation", "grey 1s infinite");
                            $("#svgL22sbackstatuspackB" + i).css("animation", "grey 1s infinite");
                            $("#svgL22sbackstatuspackC" + i).css("animation", "grey 1s infinite");


                        } else {
                            $("#L22sbackstatuspack" + i).css("animation", "green 1s infinite");
                            $("#svgL22sbackstatuspackB" + i).css("animation", "green 1s infinite");
                            $("#svgL22sbackstatuspackC" + i).css("animation", "green 1s infinite");
                        }

                    }

                    //--------------------------------------------------------------------------------------------------------------------------------------------------------------//



                    // document.getElementById("L22sbackstatus8").style.backgroundColor = "yellow";
                    // document.getElementById("svgL22sbackstatus8").style.backgroundColor = "yellow";

                    // document.getElementById("L22sstationinput8").innerHTML = "900";
                    // document.getElementById("L22sstationpass8").innerHTML = "500";
                    // document.getElementById("L22sstationfail8").innerHTML = "400";
                    // document.getElementById("L22sstationlast8").innerHTML = "60";
                    // document.getElementById("L22sstationstatus8").innerHTML = "BREAKS";
                    // document.getElementById("L22sstationstatus8").style.backgroundColor = "yellow";
                    // document.getElementById("L22sstationstatus8").style.color = "black";

                },

                complete: function() {
                    // Schedule the next request when the current one's complete
                    // setTimeout(getDataCounter(), 10000);  
                }
            });
        }
    </script>


    <script>
        function runL22s() {

            var L22sassembly1a = localStorage.getItem('L22sassembly1storage');
            var L22sinspection1a = localStorage.getItem('L22sinspection1storage');
            var L22spacking1a = localStorage.getItem('L22spacking1storage');;

            for (i = 1; i <= L22sassembly1a; i++) {
                document.getElementById("L22sflipassem" + i).classList.toggle('card--flipped');
            }

            for (i = 1; i <= L22sinspection1a; i++) {
                document.getElementById("L22sflipinspec" + i).classList.toggle('card--flipped');
            }

            for (i = 1; i <= L22spacking1a; i++) {
                document.getElementById("L22sflippack" + i).classList.toggle('card--flipped');
            }

        }
    </script>
</body>

</html>