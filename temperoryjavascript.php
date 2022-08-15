<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=11">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="media/tv_logo.png" type="image/x-icon">
    <meta http-equiv="refresh" content="300">

    <title>Ajax With PHP</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="library/js/jquery.js"></script>
    

    <style>
        
        .figureframe{

        width: 1470px;
        height: 552px;
        /*border: 4px solid black;*/
        border: outset silver;
        border-radius: 25px;
        background: #eee;
        margin: auto;
        padding: 15px 10px;
        
        }

        .displaybackground {
            width: 1450px;
            height: 500px;
            border-radius:25px;
            background:url(media/backgroundproductionline1.jpg);
        }
    </style>
    
    <style>
            @import url(https://fonts.googleapis.com/css?family=Noto+Sans:400,700);

            notificationpop,
            buttonpop {
            position: absolute;
            font: normal normal normal 14px/28px "Noto Sans", sans-serif;
            }

            notificationpop {
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto 115px 95px;
            width: 28px;
            height: 28px;
            text-align: center;
            background: red;
            border-radius: 100%;
            color: white;
            transition: background .4s ease;
            -moz-user-select: none;
            -webkit-user-select: none;
            user-select: none;
            
            }

            notificationpop:hover {
            cursor: pointer;
            background: red;
            }

            buttonpop {
            left: calc(50% - 32px);
            bottom: 50px;
            border: 0;
            border-radius: 4px;
            padding: 1px 14px;
            color: #52D96A;
            background: transparent;
            border: 2px solid transparent;
            transition: border .2s ease;
            
            }

            buttonpop:hover {
            border: 2px solid #52D96A;
            cursor: pointer;
            }

            buttonpop:focus {
            outline: none
            }

            .animatepop {
            animation: scaleup 0.7s infinite;
            }

            @-webkit-keyframes scaleup {
            0%,
            100% {
                width: 28px;
                height: 28px;
                line-height: 28px;
            }
            50% {
                width: 38px;
                height: 38px;
                line-height: 38px;
            }
            }

            @keyframes scaleup {
            0%,
            100% {
                width: 28px;
                height: 28px;
                line-height: 28px;
            }
            50% {
                width: 38px;
                height: 38px;
                line-height: 38px;
            }
            }

            .rotate1{
                transform: rotateZ(90deg);
            }
        </style>

        <style>

        @import "compass/css3";

        .flex-container {

        padding: 0;
        margin: 0;
        list-style: none;
        
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        
        
        -webkit-flex-flow: row wrap;
        

        }

        .flex-item {
        position:absolute;
        background: tomato;
        left: -100px;
        padding: 5px;
        width: 200px;
        height: 150px;
        margin-top: 10px;
        border: 2px solid black;
        /*line-height: 130px;*/
        color: white;
        font-weight: bold;
        font-size: 25px;
        text-align: center;
        
        
        }

        .container2{
            position:absolute;
            left:100px;
            top:300px;
            width:100%;
            scroll-behavior: smooth;
            background-repeat:  repeat-x;
            -webkit-animation-name: my-animation;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-duration: 15s ;
            -webkit-animation-direction: left;
            -webkit-animation-timing-function: linear infinite;

      
        
        }
        

        .img{
            position:absolute;
            top:-150px;
            margin: auto 20px;
        }
        .imgh{
            position:absolute;
            top:-150px;
            margin:auto 65px;
        }

        .displayoutput{
            position:absolute;
            top:50px;
            margin: auto 10px;
            color:white;
            z-index:1;
            text-align:center;
            font-weight:bold;
        }



        @-webkit-keyframes move {
        0% {
            transform: translate3d(0, 0, 0);
        }
        100% {
            transform: translate3d(2800px, 0, 0); /* The image width */
        }
        }

        @-webkit-keyframes my-animation {
        from { -webkit-transform: translateX(-100%); }
        to { -webkit-transform: translateX(100%); }
        }
        </style>

        
    </head>
    <body >
        
        <!--<div class="container2">
        <img class="img" src="media/robot2150.gif" alt="" style="left:25.5px; display:none;">
        <img class="imgh" src="media/human2.png" alt="" style="left:75.5px; display:block;">
        <ul class="flex-container" >
        <li id="flex0" class="flex-item">1</li>
        

        </ul>
        </div>-->

        <div class="row justify-content-center" style="padding: 20px">
            <h1 style="color:white">Counter Data</h1>
            <div class="body table-responsive">
                <h4 style="color: white" align="center">TV Production</h4>
                <table id="dataCounter" style="font-size:14pt"
                    class="table table-bordered table-hover m-b-0">
                
                    <tbody id="flexdisplay"></tbody>
                    <div class="container2">
                                <img id="robot" class="img" src="media/robot2150.gif" alt="" style="left:200px; display:block;">
                                <img id="human" class="imgh" src="media/human2.png" alt="" style="left:200px; display:none;justify-content:center;">
                                <ul class="flex-container">
                                <p id="output" class="displayoutput" style="left:200px;"></p>
                                <li id="flex" class="flex-item" style="left:200px;"></li>
                                </ul>
                                <notificationpop id="displaypop" style="left:200px;top:-250px;display:block;font-weight:bold;">!</notificationpop>
                                </div>
                    </tbody>

                    
                </table>
                
                <div id="header-top"></div>
            </div>

        </div>

            <script src="vendor/jquery/jquery.slim.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="library/js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="library/js/scripts.js"></script>

        <script>
            
        </script>

        <script>
            //Load data after complete open web page
            $(document).ready(function () {

                getDataCounter();


                $("#dataCounterBody").empty();
                $("#dataCounterBody").append('<tr align="center" style="font-weight: bold">' +
                    '<td colspan="8"><span><img src="media/loading2.gif" width="50" height="50" alt="Mplify"><p>Loading...</p></span></td></tr>');

                

            });

            //Get Counter data with javascript
            setInterval(getDataCounter, 60000);
            function getDataCounter() {
                $.ajax({    //create an ajax request to display.php
                    type: "GET",
                    url: "data/ajax_counter_data.php", //Data from folder data
                    cache: false,
                    dataType: "json",   //expect html to be returned
                    success: function (response) {

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
                            $("#flexdisplay").empty();
                                for (i = 0; i < 22; i++) {  

                                $("#flexdisplay").append(
                            );
                        }

        /////-------------------------------------------------------------------------------------------------------------------------------------------------------------------//    
                        for (i = 0; i < 22; i++) {

                            switch(i) {
                            case 0:
                                // code block
                                document.getElementById('robot'+i).style.display = "none";
                                document.getElementById('human'+i).style.display = "block";
                                document.getElementById('flex'+i).innerHTML = "CUC";
                                document.getElementById('output'+i).innerHTML = "Output  30";
                                document.getElementById('flex'+i).style.background = "red";
                                document.getElementById('displaypop'+i).style.display = "block";
                                break;
                            case 1:
                                // code block
                                document.getElementById('robot'+i).style.display = "none";
                                document.getElementById('human'+i).style.display = "block";
                                document.getElementById('flex'+i).innerHTML = "PANEL";
                                document.getElementById('output'+i).innerHTML = "Output  170";
                                document.getElementById('flex'+i).style.background = "red";
                                document.getElementById('displaypop'+i).style.display = "block";
                                break;
                            case 2:
                            // code block
                                document.getElementById('robot'+i).style.display = "block";
                                document.getElementById('human'+i).style.display = "none";
                                document.getElementById('flex'+i).innerHTML = "MICIF BOARD";
                                document.getElementById('output'+i).innerHTML = "Output  220";
                                document.getElementById('flex'+i).style.background = "green";
                                document.getElementById('displaypop'+i).style.display = "none";
                                break;
                            case 3:
                                // code block
                                document.getElementById('robot'+i).style.display = "none";
                                document.getElementById('human'+i).style.display = "block";
                                document.getElementById('flex'+i).innerHTML = "DW";
                                document.getElementById('output'+i).innerHTML = "Output  140";
                                document.getElementById('flex'+i).style.background = "green";
                                document.getElementById('displaypop'+i).style.display = "none";
                                break;
                            case 4:
                                // code block
                                document.getElementById('robot'+i).style.display = "block";
                                document.getElementById('human'+i).style.display = "none";
                                document.getElementById('flex'+i).innerHTML = "BOARD";
                                document.getElementById('output'+i).innerHTML = "Output  130";
                                document.getElementById('flex'+i).style.background = "green";
                                document.getElementById('displaypop'+i).style.display = "none";
                                break;
                            case 5:
                                // code block
                                document.getElementById('robot'+i).style.display = "block";
                                document.getElementById('human'+i).style.display = "none";
                                document.getElementById('flex'+i).innerHTML = "BRACKET";
                                document.getElementById('output'+i).innerHTML = "Output  109";
                                document.getElementById('flex'+i).style.background = "green";
                                document.getElementById('displaypop'+i).style.display = "none";
                                break;
                            case 6:
                                // code block
                                document.getElementById('robot'+i).style.display = "none";
                                document.getElementById('human'+i).style.display = "block";
                                document.getElementById('flex'+i).innerHTML = "REAR COVER";
                                document.getElementById('output'+i).innerHTML = "Output  20";
                                document.getElementById('flex'+i).style.background = "#DED716";
                                document.getElementById('displaypop'+i).style.display = "none";
                                break;
                            case 7:
                                // code block
                                document.getElementById('robot'+i).style.display = "block";
                                document.getElementById('human'+i).style.display = "none";
                                document.getElementById('flex'+i).innerHTML = "SC";
                                document.getElementById('output'+i).innerHTML = "Output  10";
                                document.getElementById('flex'+i).style.background = "green";
                                document.getElementById('displaypop'+i).style.display = "none";
                                break;
                            case 8:
                                // code block
                                document.getElementById('robot'+i).style.display = "block";
                                document.getElementById('human'+i).style.display = "none";
                                document.getElementById('flex'+i).innerHTML = "MULTILABEL";
                                document.getElementById('output'+i).innerHTML = "Output  114";
                                document.getElementById('flex'+i).style.background = "green";
                                document.getElementById('displaypop'+i).style.display = "none";
                                break;
                            case 9:
                                // code block
                                document.getElementById('robot'+i).style.display = "block";
                                document.getElementById('human'+i).style.display = "none";
                                document.getElementById('flex'+i).innerHTML = "MIC";
                                document.getElementById('output'+i).innerHTML = "Output  123";
                                document.getElementById('flex'+i).style.background = "red";
                                document.getElementById('displaypop'+i).style.display = "block";
                                break;
                            case 10:
                                // code block
                                document.getElementById('robot'+i).style.display = "none";
                                document.getElementById('human'+i).style.display = "block";
                                document.getElementById('flex'+i).innerHTML = "LED";
                                document.getElementById('output'+i).innerHTML = "Output  111";
                                document.getElementById('flex'+i).style.background = "green";
                                document.getElementById('displaypop'+i).style.display = "none";
                                break;
                            case 11:
                                // code block
                                document.getElementById('robot'+i).style.display = "block";
                                document.getElementById('human'+i).style.display = "none";
                                document.getElementById('flex'+i).innerHTML = "SHOCKTEST";
                                document.getElementById('output'+i).innerHTML = "Output  105";
                                document.getElementById('flex'+i).style.background = "green";
                                document.getElementById('displaypop'+i).style.display = "none";
                                break;
                            case 12:
                                // code block
                                document.getElementById('robot'+i).style.display = "block";
                                document.getElementById('human'+i).style.display = "none";
                                document.getElementById('flex'+i).innerHTML = "EXCITER";
                                document.getElementById('output'+i).innerHTML = "Output  110";
                                document.getElementById('flex'+i).style.background = "red";
                                document.getElementById('displaypop'+i).style.display = "block";
                                break;
                            case 13:
                                // code block
                                document.getElementById('robot'+i).style.display = "block";
                                document.getElementById('human'+i).style.display = "none";
                                document.getElementById('flex'+i).innerHTML = "WB";
                                document.getElementById('output'+i).innerHTML = "Output  100";
                                document.getElementById('flex'+i).style.background = "green";
                                document.getElementById('displaypop'+i).style.display = "none";
                                break;
                            case 14:
                                // code block
                                document.getElementById('robot'+i).style.display = "none";
                                document.getElementById('human'+i).style.display = "block";
                                document.getElementById('flex'+i).innerHTML = "PNL CHK 1";
                                document.getElementById('output'+i).innerHTML = "Output  50";
                                document.getElementById('flex'+i).style.background = "#DED716";
                                document.getElementById('displaypop'+i).style.display = "none";
                                break;
                            case 15:
                                // code block
                                document.getElementById('robot'+i).style.display = "block";
                                document.getElementById('human'+i).style.display = "none";
                                document.getElementById('flex'+i).innerHTML = "PNL CHK 2";
                                document.getElementById('output'+i).innerHTML = "Output  20";
                                document.getElementById('flex'+i).style.background = "green";
                                document.getElementById('displaypop'+i).style.display = "none";
                                break;
                            case 16:
                                // code block
                                document.getElementById('robot'+i).style.display = "none";
                                document.getElementById('human'+i).style.display = "block";
                                document.getElementById('flex'+i).innerHTML = "HARMONY";
                                document.getElementById('output'+i).innerHTML = "Output  70";
                                document.getElementById('flex'+i).style.background = "green";
                                document.getElementById('displaypop'+i).style.display = "none";
                                break;
                            case 17:
                                // code block
                                document.getElementById('robot'+i).style.display = "block";
                                document.getElementById('human'+i).style.display = "none";
                                document.getElementById('flex'+i).innerHTML = "PACK 1";
                                document.getElementById('output'+i).innerHTML = "Output  120";
                                document.getElementById('flex'+i).style.background = "red";
                                document.getElementById('displaypop'+i).style.display = "block";
                                break;
                            case 18:
                                // code block
                                document.getElementById('robot'+i).style.display = "none";
                                document.getElementById('human'+i).style.display = "block";
                                document.getElementById('flex'+i).innerHTML = "PACK 2";
                                document.getElementById('output'+i).innerHTML = "Output  150";
                                document.getElementById('flex'+i).style.background = "green";
                                document.getElementById('displaypop'+i).style.display = "none";
                                break;
                            case 19:
                                // code block
                                document.getElementById('robot'+i).style.display = "block";
                                document.getElementById('human'+i).style.display = "none";
                                document.getElementById('flex'+i).innerHTML = "PROMPTS";
                                document.getElementById('output'+i).innerHTML = "Output  160";
                                document.getElementById('flex'+i).style.background = "green";
                                document.getElementById('displaypop'+i).style.display = "none";
                                break;
                            case 20:
                                // code block
                                document.getElementById('robot'+i).style.display = "block";
                                document.getElementById('human'+i).style.display = "none";
                                document.getElementById('flex'+i).innerHTML = "IM";
                                document.getElementById('output'+i).innerHTML = "Output  180";
                                document.getElementById('flex'+i).style.background = "red";
                                document.getElementById('displaypop'+i).style.display = "block";
                                break;
                            case 21:
                                // code block
                                document.getElementById('robot'+i).style.display = "block";
                                document.getElementById('human'+i).style.display = "none";
                                document.getElementById('flex'+i).innerHTML = "HIPOT";
                                document.getElementById('output'+i).innerHTML = "Output  210";
                                document.getElementById('flex'+i).style.background = "green";
                                document.getElementById('displaypop'+i).style.display = "none";
                                break;

                            }

                            



                                /*if(response[i].status=="Offline"){

                                    document.getElementById('outputvalue'+i).innerHTML= "Actual Output : "+response[i].actual;
                                    document.getElementById('outputvalue'+i+'t').innerHTML= "Target Output : "+response[i].target;
                                    document.getElementById('L01part'+i+'condition').textContent="Condition: Off";
                                    document.getElementById('robotimage'+i).style.backgroundImage= "url(media/robot2r.gif)";
                                    

                                }
                                else if(response[i].status=="Stop"){

                                    document.getElementById('outputvalue'+i).innerHTML= "Actual Output : "+response[i].actual;
                                    document.getElementById('outputvalue'+i+'t').innerHTML= "Target Output : "+response[i].target;
                                    document.getElementById('L01part'+i+'condition').textContent="Condition: Off";
                                    document.getElementById('robotimage'+i).style.backgroundImage= "url(media/robot2r.gif)";

                                }else if(response[i].status=="Run"){

                                    document.getElementById('outputvalue'+i).innerHTML= "Actual Output : "+response[i].actual;
                                    document.getElementById('outputvalue'+i+'t').innerHTML= "Target Output : "+response[i].target;
                                    document.getElementById('L01part'+i+'condition').textContent="Condition: Off";
                                    document.getElementById('robotimage'+i).style.backgroundImage= "url(media/robot2r.gif)";

                                }
                                else if(response[i].status=="Break"){

                                    document.getElementById('outputvalue'+i).innerHTML= "Actual Output : "+response[i].actual;
                                    document.getElementById('outputvalue'+i+'t').innerHTML= "Target Output : "+response[i].target;
                                    document.getElementById('L01part'+i+'condition').textContent="Condition: Off";
                                    document.getElementById('robotimage'+i).style.backgroundImage= "url(media/robot2r.gif)";
                                    
                                }*/
                                //console.log(document.getElementById('dep'+i).className);
                                //console.log(response[i].actual);
                                
                        }
                    },
                
                    complete: function () {
                        // Schedule the next request when the current one's complete
                        // setTimeout(getDataCounter(), 10000);  
                    }
                });
            }


        </script>

        <script>
                setInterval(function () {
                    $("notificationpop").addClass("animatepop");
                    $("notificationpop")[0].addEventListener(
                        "animationend",
                    function () {
                    $("notificationpop").removeClass("animatepop");
                    },
                    false
                    );
                    }, 1000);

            </script>  
    </body>
</html>