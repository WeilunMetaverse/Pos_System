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
        .gred {
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


    <div class="gred">

        <div class="areaA" style="border-top-left-radius:1em;border-bottom-left-radius:1em;">Assembly
            <div class="columnum" style="">
                <div class="row" style="flex-wrap: nowrap;white-space:nowrap;">

                    <p id="flexdisplay1" style="display:flex;width: 100%;height:100px;margin-top:20%;"></p>


                </div>
            </div>
        </div>
        <script>
            function runL04(self) {
                self.classList.toggle('card--flipped');
            }
        </script>


        <div class="areaB">Inspection
            <div class="columnum" style="">
                <div class="row" style="flex-wrap: nowrap;white-space:nowrap;">

                    <p id="flexdisplay2" style="display:flex;width: 100%;height:100px;margin-top:20%;"></p>



                </div>
            </div>
        </div>

        <div class="areaC" style="border-top-right-radius:1em;border-bottom-right-radius:1em;">Packing
            <div class="columnum" style="">
                <div class="row" style="flex-wrap: nowrap;white-space:nowrap;">

                    <p id="flexdisplay3" style="display:flex;width: 100%;height:100px;margin-top:20%;"></p>




                </div>
            </div>
        </div>
        <div class="containersmall1" style="position:absolute;width:60%;height:20%;background-color:;left:30%;top:70%;padding: 1%;">
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

                    console.log(response);

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

                    /////-------------------------------------------------------------------------------------------------------------------------------------------------------------------//

                    var assembly1 = 15;
                    var inspection1 = 15;
                    var packing1 = 14;
                    var packing1last = packing1 - 3;
                    localStorage.setItem('assembly1storage', assembly1);
                    localStorage.setItem('inspection1storage', inspection1);
                    localStorage.setItem('packing1storage', packing1);

                    $("#flexdisplay1").empty();
                    for (i = 1; i < assembly1; i++) {
                        if (i == 1) {
                            $("#flexdisplay1").append(
                                '<div id="flipassem' + i + '" class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<img class="imgassem' + i + '" src="media/xvariable.png" alt="">' +
                                '<div id="backstatus' + i + '" class="card__front" style="color: black;background-color: transparent;">' +
                                '</div>' +
                                '</div>'
                            );
                        } else {

                            $("#flexdisplay1").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<div id="flipassem' + i + '" class="card" onclick="runL04(this)">' +
                                '<div id="backstatus' + i + '" class="card__front" style="color: black;background-color: green;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div id="svgbackstatus' + i + '" class="btnforsvg" style="background-color: green;">' +
                                '<img class="imgassem' + i + '" src="media/robotarm.gif" alt="" style="">' +
                                '</div>' +
                                '<div class="wrapperstation23" style="background-color: transparent;" >' +
                                '<a class="reviews">' + (i - 1) +
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
                                '<td id="L06stationname' + i + '">CUC9</td>' +
                                '<td id="L06stationinput' + i + '">1000</td>' +
                                '<td id="L06stationpass' + i + '">997</td>' +
                                '<td id="L06stationfail' + i + '">3</td>' +
                                '<td id="L06stationlast' + i + '">3 mins</td>' +
                                '<td id="L06stationstatus' + i + '" style="background:green;color:white;border-radius:0.4em;">RUN</td>' +
                                '</tr>' +
                                '</table> ' +
                                '</div>' +
                                '</a>' +
                                '</div>' +
                                '</div>' +
                                '<div class="card__back"  style="background-color: white;">' +
                                '<div style="text-align:center;">' +
                                '<p><img src="media/barcode2.png" alt="" style="width:60%;height:40%;"></p>' +
                                '<p><img src="media/computer3.png" alt="" style="width:60%;height:40%;"></p>' +

                                '</div>' +

                                '</div>' +
                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }

                    }


                    $("#flexdisplay2").empty();
                    for (i = 1; i < inspection1; i++) {
                        if (i == 1) {
                            $("#flexdisplay2").append(
                                '<div id="flipinspec' + i + '" class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<img class="imginspec' + i + '" src="media/xvariable.png" alt="">' +
                                '<div id="backstatusinspec' + i + '" class="card__front" style="color: black;background-color: transparent;">' +
                                '</div>'
                            );
                        } else {

                            $("#flexdisplay2").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<div id="flipinspec' + i + '" class="card" onclick="runL04(this)">' +
                                '<div id="backstatusinspec' + i + '" class="card__front" style="color: black;background-color: green;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div id="svgbackstatusinspec' + i + '" class="btnforsvg" style="background-color: green;">' +
                                '<img id="imginspec' + i + '" src="media/robotarm.gif" alt="" style="">' +
                                '</div>' +
                                '<div class="wrapperstation23" style="background-color: transparent;" >' +
                                '<a class="reviews">' + (i - 1) +
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
                                '<td>CUC9</td>' +
                                '<td>1000</td>' +
                                '<td>997</td>' +
                                '<td>3</td>' +
                                '<td>3 mins</td>' +
                                '<td id="redalerttable5" style="background:green;color:white;border-radius:0.4em;">RUN</td>' +
                                '</tr>' +
                                '</table> ' +
                                '</div>' +
                                '</a>' +
                                '</div>' +
                                '</div>' +
                                '<div class="card__back"  style="background-color: white;">' +
                                '<div style="text-align:center;"></div>' +
                                '</div>' +
                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }


                    }

                    $("#flexdisplay3").empty();
                    for (i = 1; i < packing1; i++) {
                        if (i == 1 || i == packing1last || i == 12 || i == 13) {
                            $("#flexdisplay3").append(
                                '<div id="flippack' + i + '" class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<img class="imgpack' + i + '">' +
                                '<div id="backstatuspack' + i + '" class="card__front" style="color: black;background-color: transparent;">' +
                                '</div>'
                            );
                        } else {

                            $("#flexdisplay3").append(

                                '<div class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:115%;">' +
                                '<div id="flippack' + i + '" class="card" onclick="runL04(this)">' +
                                '<div id="backstatuspack' + i + '" class="card__front" style="color: black;background-color: green;">' +
                                '<a style="top:60%;text-align: left;place-content: CUC9;">' +
                                '<div id="svgbackstatuspack' + i + '" class="btnforsvg" style="">' +
                                '<img class="imgpack' + i + '" src="media/robotarm.gif" alt="" style="background-color: green;">' +
                                '</div>' +
                                '<div class="wrapperstation23" style="background-color: transparent;" >' +
                                '<a class="reviews">' + (i - 1) +
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
                                '<td>CUC9</td>' +
                                '<td>1000</td>' +
                                '<td>997</td>' +
                                '<td>3</td>' +
                                '<td>3 mins</td>' +
                                '<td id="redalerttable5" style="background:green;color:white;border-radius:0.4em;">RUN</td>' +
                                '</tr>' +
                                '</table> ' +
                                '</div>' +
                                '</a>' +
                                '</div>' +
                                '</div>' +
                                '<div class="card__back"  style="background-color: white;">' +
                                '<div style="text-align:center;"></div>' +
                                '</div>' +
                                '</div>' +



                                '</a>' +

                                '</div>'

                            );


                        }


                    }







                    $(".imgassem1").attr("src", "media/xvariable.png");

                    $(".imgassem5").attr("src", "media/robotarmstop.png");

                    $(".imgassem8").attr("src", "media/robotarmrest.png");
                    $(".imgassem9").attr("src", "media/operator.gif");




                    $(".imgpack1").attr("src", "media/xvariable.png");
                    $(".imgpack11").attr("src", "media/xvariable.png");
                    $(".imgpack12").removeProp('src');
                    $(".imgpack13").removeProp('src');
                    $(".imgpack12").attr("style", "background-image:url(media/roller2.JPG);background-size:cover;");
                    $(".imgpack13").attr("style", "background-image:url(media/roller2.JPG);background-size:cover;");
                    document.getElementById("backstatus5").style.backgroundColor = "red";
                    document.getElementById("svgbackstatus5").style.backgroundColor = "red";
                    document.getElementById("L06stationname5").innerHTML = "Test";
                    document.getElementById("L06stationinput5").innerHTML = "900";
                    document.getElementById("L06stationpass5").innerHTML = "500";
                    document.getElementById("L06stationfail5").innerHTML = "400";
                    document.getElementById("L06stationlast5").innerHTML = "60";
                    document.getElementById("L06stationstatus5").innerHTML = "ERROR";
                    document.getElementById("L06stationstatus5").style.backgroundColor = "red";

                    document.getElementById("backstatus8").style.backgroundColor = "yellow";
                    document.getElementById("svgbackstatus8").style.backgroundColor = "yellow";
                    document.getElementById("L06stationname8").innerHTML = "Test";
                    document.getElementById("L06stationinput8").innerHTML = "900";
                    document.getElementById("L06stationpass8").innerHTML = "500";
                    document.getElementById("L06stationfail8").innerHTML = "400";
                    document.getElementById("L06stationlast8").innerHTML = "60";
                    document.getElementById("L06stationstatus8").innerHTML = "BREAKS";
                    document.getElementById("L06stationstatus8").style.backgroundColor = "yellow";
                    document.getElementById("L06stationstatus8").style.color = "black";
                },

                complete: function() {
                    // Schedule the next request when the current one's complete
                    // setTimeout(getDataCounter(), 10000);  
                }
            });
        }
    </script>

    <script>
        function runL04() {

            var assembly1a = localStorage.getItem('assembly1storage');
            var inspection1a = localStorage.getItem('inspection1storage');
            var packing1a = localStorage.getItem('packing1storage');;

            for (i = 1; i < assembly1a; i++) {
                document.getElementById("flipassem" + i).classList.toggle('card--flipped');
            }

            for (i = 1; i < inspection1a; i++) {
                document.getElementById("flipinspec" + i + "").classList.toggle('card--flipped');
            }

            for (i = 1; i < packing1a; i++) {
                document.getElementById("flippack" + i + "").classList.toggle('card--flipped');
            }

        }
    </script>
</body>

</html>