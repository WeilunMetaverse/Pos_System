<html>
    <head>

    <style>
            body {
  background: #eee;
}

div.wrapper23 {
  position: relative;
  top: 50px;
  left: -16px;
  width: 120px;
  height: 27px;
  background-color: #fff;
}
div.popup23 {
  display: none;
  position: relative;
  background-color: #fff;
  background-size: 256px 256px;
  word-wrap: break-word;
  text-align: left;
}
a.reviews {
  font-size: 15px;
  color: black;
  position: relative;
  text-align: center;
  line-height: 25px;
  z-index: 2;
  padding-left: 10px;
  text-decoration:none;
  
}
a.reviews:hover,
a:active {
  color: blue;
  

}

.popup23 {
  padding: 0px;
  padding-top: 30px;
  padding-bottom: 30px;
  width: 250px;
  background: #fff;
  border-radius: 5px;
  margin-top: -25px;
  z-index: 1;
}

.wrapper23:hover .popup23 {
  display: block;
  
}
.wrapper23:hover .reviews {
  color: blue;
}


        </style>
        <style>
            body {
    margin: 0;
    background: #fafafa;
    font-family: 'Montserrat', sans-serif;
  }
  
  * {
    box-sizing: border-box;
  }
  
  p {
    line-height: 1.4;
    margin-bottom: 5px;
  }
  
  .find-serial-btn {
    background: orange;
    border: none;
    color: white;
    outline: none;
    cursor: pointer;

    font-size: 16px;
    font-family: 'Montserrat', sans-serif;

    margin: -5px 10px;
    width: 50px;
    height:50px;
    
  }
  
  .find-serial-btn:hover {
    background: darkorange;
  }
  
  .btn-container {
    width: 50px;
    max-width: 50px;
    margin: 0px auto 0px;
    text-align: center;
    position: relative;
    margin:10px 30px;
    z-index: 1;
    opacity: 1;
  }
  
  .popup:after,
  .popup:before {
    bottom: 100%;
    left: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    opacity: 1;
    
  }
  
  .popup:after {
    border-color: rgba(255, 255, 255, 0);
    border-bottom-color: white;
    border-width: 10px;
    margin-left: -10px;
    
    
  }
  
  .popup:before {
    border-color: rgba(0, 0, 0, 0);
    border-bottom-color: #f0f0f0;
    border-width: 11px;
    margin-left: -11px;
    
  }
  
  .popup {
    background: white;
    color: #333;
    box-shadow: 0 2px 4px rgba(0, 0, 0, .18);
    margin-bottom: 10px;
    padding: 30px 8px 8px;
    text-align: left;
    position: absolute;
    top: 55px;
    width:400px;
    margin:auto -167px;
    z-index: 1;
    opacity: 0;
    
  }
  
  .clicked {
    z-index: 100;
    opacity: 1;
    animation: .6s fadeInDown ease both;
  }
  
  @keyframes fadeInDown {
    0% {
      opacity: 0;
      transform: translateY(-25px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }
  
  .popup .close {
    position: absolute;
    right: 10px;
    top: -10px;
    font-size: 40px;
    cursor: pointer;
    color: #777;
    -webkit-tap-highlight-color: transparent;
  }
  
  .popup .close:hover {
    color: orange;
    transition: .2s ease-in;
  }
  
  .popup img {
    max-width: 100%;
    margin: 0 auto;
    display: block;
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
            margin: auto;
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
                width: 30px;
                height: 30px;
                line-height: 30px;
            }
            50% {
                width: 40px;
                height: 40px;
                line-height: 40px;
            }
            }
    
            @keyframes scaleup {
            0%,
            100% {
                width: 30px;
                height: 30px;
                line-height: 30px;
            }
            50% {
                width: 40px;
                height: 40px;
                line-height: 40px;
            }
            }
    
            
        </style>
        <style>
            *, *::after, *::before {
            box-sizing: border-box;
            }

            .modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: 200ms ease-in-out;
            border: 1px solid black;
            border-radius: 10px;
            z-index: 10;
            background-color: white;
            width: 500px;
            height: 400px;
            max-width: 80%;
            }

            .modal.active {
            transform: translate(-50%, -50%) scale(1);
            }

            .modal-header {
            padding: 10px 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid black;
            }

            .modal-header .title {
            font-size: 1.25rem;
            font-weight: bold;
            }

            .modal-header .close-button {
            cursor: pointer;
            border: none;
            outline: none;
            background: none;
            font-size: 1.25rem;
            font-weight: bold;
            }

            .modal-body {
            padding: 10px 15px;
            }

            #overlay {
            position: fixed;
            opacity: 0;
            transition: 200ms ease-in-out;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, .5);
            pointer-events: none;
            }

            #overlay.active {
            opacity: 1;
            pointer-events: all;
            }
        </style>
        
        <style>
            @import "compass/css3";
            body {
                background-color: #3B4257;

                color: #fff;
                font-size: 15px;
                margin-top: 30px;
                text-transform: uppercase;
                letter-spacing: 5px;
                font-weight: 900;
              
                }

                .flex-container {
                padding: 0;
                margin: 0;
                list-style: none;
                
                
                display: -webkit-box;
                display: -moz-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;

                margin: auto -100px;
                -webkit-flex-flow: row wrap;
                /*justify-content: space-around;*/
                /*justify-content: center;*/
                }

                .wrapper {
                
                height: 0px;
                perspective: 800px; /*800px*/
                transform: scale(0.7);
                margin: auto 0;
                
                }

                /*.wrapper:first-child .container {
                -webkit-animation: boxFlip 4.5s infinite;
                -moz-animation: boxFlip 4.5s infinite;
                animation: boxFlip 4.5s infinite;
                -webkit-animation-timing-function: cubic-bezier(0.29, 1.53, 0.33, 1.01);
                -moz-animation-timing-function: cubic-bezier(0.29, 1.53, 0.33, 1.01);
                animation-timing-function: cubic-bezier(0.29, 1.53, 0.33, 1.01);

                }*/

                .container {
                display: flex;
                width: 130px;
                height: 145px;

                margin: 5px -16px;
                text-align: center;
                font-size: 18px;
                position: relative;
                font-family: Cambria;

                
                -webkit-backface-visibility: visible;
                backface-visibility: visible;
                -webkit-transform-style: preserve-3d;
                -moz-transform-style: preserve-3d;
                -ms-transform-style: preserve-3d;
                -o-transform-style: preserve-3d;
                transform-style: preserve-3d;

                transform-origin: 50% 50%;
                transition: all 1s ease-in-out;
                transform: rotateY(0deg) translateZ(65px);
                /*transition: all 1s ease-in-out;*/
                /*transition: all 0.4s cubic-bezier(0.29, 1.53, 0.33, 1.01);*/
                
                }

                .newcontainer{
                    max-width: 1000px;
                    height: 900px;
                    margin: auto auto;
                    background:blue;
                    border: 3px solid #73AD21;
                    
                }
                .div p {
                display: inline-block;
                font-size: 20px;
                padding: 20px;
                }

                .do-flip {
                transition: all 1s ease-in-out;
                transform: rotateY(90deg) translateZ(65px);
                
                }

                .back{
                
                transform: rotateY(0deg) translateZ(65px);
                }



                .container p { /*texture container*/
                position: relative;
                top: 0%;
                transform: translateY(0%);
                margin: 0;
                padding: 0 20px;  
          
                }

                button:hover {
                opacity: 0.5;
                background-color: blue;
                }
                /*.container:hover {
                transform: rotateY(90deg) translateZ(125px);
                
                }*/

                .box_front, .box_bottom {
                display: block;
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                z-index: 0;
                border: 1px solid black;
                }

                .box_front {
                background-color: #20B886;
                }

                .box_bottom {
                background-color: #C4C7CC;
                color: #3B4257;
                transform: translate3D(-65px, 0px, -65px) rotateY(-90deg);
                }

                
                

         
        </style>

    
    <style>
            @import "compass/css3";
            body {
                background-color: #3B4257;

                color: #fff;
                font-size: 15px;
                margin-top: 30px;
                text-transform: uppercase;
                letter-spacing: 5px;
                font-weight: 900;
              
                }

                .flex-container {
                padding: 0;
                margin: 0;
                list-style: none;
                
                
                display: -webkit-box;
                display: -moz-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;

                margin: auto -100px;
                -webkit-flex-flow: row wrap;
                /*justify-content: space-around;*/
                /*justify-content: center;*/
                }

                .wrapper {
                
                /*height: 0px;*/
                perspective: 800px; /*800px*/
                transform: scale(0.7);
                margin: auto 0;
                
                }

                /*.wrapper:first-child .container {
                -webkit-animation: boxFlip 4.5s infinite;
                -moz-animation: boxFlip 4.5s infinite;
                animation: boxFlip 4.5s infinite;
                -webkit-animation-timing-function: cubic-bezier(0.29, 1.53, 0.33, 1.01);
                -moz-animation-timing-function: cubic-bezier(0.29, 1.53, 0.33, 1.01);
                animation-timing-function: cubic-bezier(0.29, 1.53, 0.33, 1.01);

                }*/

                .container {
                display: flex;
                width: 130px;
                height: 145px;

                margin: 5px -16px;
                text-align: center;
                font-size: 18px;
                position: relative;
                font-family: Cambria;

                
                -webkit-backface-visibility: visible;
                backface-visibility: visible;
                -webkit-transform-style: preserve-3d;
                -moz-transform-style: preserve-3d;
                -ms-transform-style: preserve-3d;
                -o-transform-style: preserve-3d;
                transform-style: preserve-3d;

                transform-origin: 50% 50%;
                transition: all 1s ease-in-out;
                transform: rotateY(0deg) translateZ(65px);
                /*transition: all 1s ease-in-out;*/
                /*transition: all 0.4s cubic-bezier(0.29, 1.53, 0.33, 1.01);*/
                
                }

                .newcontainer{
                    max-width: 1000px;
                    height: 900px;
                    margin: auto auto;
                    background:blue;
                    border: 3px solid #73AD21;
                    
                }
                .div p {
                display: inline-block;
                font-size: 20px;
                padding: 20px;
                }

                .do-flip {
                transition: all 1s ease-in-out;
                transform: rotateY(90deg) translateZ(65px);
                
                }

                .back{
                
                transform: rotateY(0deg) translateZ(65px);
                }



                .container p { /*texture container*/
                position: relative;
                top: 0%;
                transform: translateY(0%);
                margin: 0;
                padding: 0 20px;  
          
                }

                button:hover {
                opacity: 0.5;
                background-color: blue;
                }
                /*.container:hover {
                transform: rotateY(90deg) translateZ(125px);
                
                }*/

                .box_front, .box_bottom {
                display: block;
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                z-index: 0;
                border: 1px solid black;
                }

                .box_front {
                background-color: #20B886;
                }

                .box_bottom {
                background-color: #C4C7CC;
                color: #3B4257;
                transform: translate3D(-65px, 0px, -65px) rotateY(-90deg);
                }

                
                

         
        </style>
        
        
        

    </head>
    <body>


            <!--<thead>
            <tr align="center" style="color: white">
                <th>Line</th>
                <th>Shift</th>
                <th>LOR</th>
                <th>Target</th>
                <th>Actual</th>
                <th>Different</th>
                <th>Status</th>
                <th>Model</th>
            </tr>
            </thead>-->
            <!--<tbody id="dataCounterBody">-->
           

                <p id="3dlayout"></p>
                <br><br><br><br><br><br>
               
                <p id="3dlayout2"></p>
                <br><br><br><br><br><br>

               
                        
                <button id="pressa" style="position: absolute;margin: 200px 20px;">flip</button>
            <!--<tr>

                <td colspan="8" align="center">
                    <span style="color: white">No data found</span>
                </td>
            </tr>-->



     </body>
    <script src="vendor/jquery/jquery.slim.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="library/js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="library/js/scripts.js"></script>

    

<script>
    //Load data after complete open web page
    $(document).ready(function () {

        getDataCounter();


        $("#dataCounterBody").empty();
        $("#dataCounterBody").append('<tr align="center" style="font-weight: bold">' +
            '<td colspan="8"><span><img src="media/loading2.gif" width="50" height="50" alt="Mplify"><p>Loading...</p></span></td></tr>');

        

    });

    //Get Counter data with javascript
    //setInterval(getDataCounter, 60000);
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
                //--style="margin:auto '+(100*i)+'px;margin-top:-70px;"---//
/////-------------------------------------------------------------------------------------------------------------------------------------------------------------------//
        
        for (i = 1; i < 2; i++) {   
            for (j = 1; j < 12; j++) {
        $("#3dlayout").append(
            '<div class="flex-container">'+
            '<div class="wrapper" style="z-index: 73;margin:0px '+100*j+'px;">'+
            '<div class="container">'+
                '<div  class="box_front" style="background-color: #33CC33;">'+
                '<img src="media/x2.png" alt="" style="width:120px;height:120px;margin: 10px 0px;">'+
                '<p></p>'+
                
                '</div>'+
                '<div  class="box_bottom" style="background-color: #33CC33;">'+
                '<img src="media/x2.png" alt="" style="width:120px;height:120px;margin: 10px 0px;">'+
                '<p></p>'+
            '</div>'+
            '</div>'+
      

            '</div>'
        );
    }
                                                
}

    var tempa= 20;
    sessionStorage.setItem("temp", tempa);

    
        for (i = 1; i < 2; i++) {   
            for (j = 1; j < 12; j++) {
        $("#3dlayout2").append(
            '<div class="flex-container">'+
            '<div class="wrapper" style="z-index: '+(100-j)+';margin:0px '+100*j+'px;">'+
            
                '<div  id="containerstation'+j+'" class="container">'+
                    '<div  class="box_front" style="z-index: 0;">'+
                    
                         
                            '<img src="media/human2.png" alt="" style="width:40px;height:40px;z-index: 1;margin:5px 50px;"></button>'+
                            '<div class="wrapper23" style="z-index:1;margin:-50px 20px;background:white;border-radius: 15%;">'+
                                '<a class="reviews" style="position:relative;">['+j+']<br><p id="stationname'+j+'" style="color: white;">MULTI</p></a>'+
                                '<div class="popup23" style="z-index:1;">'+
                                '<div>'+
                                '<p id="station'+j+'" style="color: black;font-size: 15;z-index:1;">e</p>'+
                                '<p id="stationin'+j+'" style="color: black;font-size: 15;z-index:1;">e</p>'+
                                '<p id="stationpass'+j+'" style="color: black;font-size: 15;z-index:1;">e</p>'+
                                '<p id="stationfail'+j+'" style="color: black;font-size: 15;z-index:1;">e</p>'+
                                '<p id="stationls'+j+'" style="color: black;font-size: 15;z-index:1;">e</p>'+
                                '</div>'+
                                '</div>'+
                            '</div>'+
                                
                    '<p style="margin: 120px 5px;"><img src="media/computer2.png" alt="" style="width:40px;height:40px;z-index: 1;margin:5px 50px;">'+
                    '<img src="media/barcode2.png" alt="" style="position:absolute;width:35px;height:35px;z-index: 1;margin:-45px -55px;">'+
                    '</p>'+
                    '</div>'+
                    '<div  class="box_bottom" style="background:red;">'+
                        '<img src="media/human2.png" alt="" style="width:40px;height:40px;z-index: 1;margin:5px 50px;"></button>'+
                            '<div class="wrapper23" style="z-index:1;margin:-50px 20px;background:white;border-radius: 15%;">'+
                                '<a class="reviews" style="position:relative;">['+j+']<br><p id="stationname'+j+'i" style="color: white;">[ERROR]</p></a>'+
                                '<div class="popup23" style="z-index:1;">'+
                                '<div><p style="color: black;font-size: 15;z-index:1;">Station:MULTILABEL <br>Total IN:1000 <br>Pass:998 <br>Fail:2 <br>Last Stop: 3 mins</p></div>'+
                                '</div>'+
                            '</div>'+
	                       
                    '<p style="margin: 120px 5px;"><img id="imgview'+j+'" src="media/computer2.png" alt="" style="width:40px;height:40px;z-index: 1;margin:5px 50px;">'+
                    '<img id="img2view'+j+'" src="media/barcode2.png" alt="" style="position:absolute;width:35px;height:35px;z-index: 1;margin:-45px -55px;"></p>'+
                    '</div>'+
                '</div>'+
          
            '</div>'+
            '</div>'
        );
    }
                                                
}

var namestring= ["","CUC9","PANEL","MICIF","DW","BRACKET","SC","MULTI","MIC","LED","SHOCKT","EXCITER"];
var namebackstring = ["","CUC9","PANEL","MICIF","DW","BRACKET","SC","MULTI","MIC","LED","SHOCKT","EXCITER"];
var station1 = ["","CUC9","PANEL1","MICIF BOARD2","DW3","BOARD3","BRACKET4","REAR COVER5","SC3","MULTILABEL4","MIC5","LED6","SHOCKTEST7","EXCITER8","WB10","PNL CHK 111","PNL CHK 212","HARMONY13","PACK 120","PACK 221","PROMPT22","IM29","HIPOT33"];
var stationinput1 = ["",1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000];
var stationpass1 = ["",998, 997, 998, 997, 998, 997, 998, 997, 998, 997, 998, 997, 998, 997, 998, 997, 998, 997, 998, 997, 998, 997];
var staionfail1 = ["",2,3,2,3,2,3,2,3,2,3,2,3,2,3,2,3,2,3,2,3,2,3];
var stationls1 = ["",3,2,4,5,6,7,8,9,0,9,8,6,7,5,7,5,7,5,7,4,6,4];

    for(i=1; i<12; i++){
        document.getElementById("stationname"+i).firstChild.data = namestring[i];
        document.getElementById("stationname"+i+"i").firstChild.data = namebackstring[i];
        document.getElementById("station"+i).firstChild.data = "Name : "+station1[i];
        document.getElementById("stationin"+i).firstChild.data = "Total Input : "+stationinput1[i];
        document.getElementById("stationpass"+i).firstChild.data = "Pass : "+stationpass1[i];
        document.getElementById("stationfail"+i).firstChild.data = "Fail : "+staionfail1[i];
        document.getElementById("stationls"+i).firstChild.data = "Last Stop : "+stationls1[i];
    }
   

/////-------------------------------------------------------------------------------------------------------------------------------------------------------------------//    
                for (i = 0; i < response.length; i++) {
                    
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
        var temperary =sessionStorage.getItem("temp");
        document.getElementById('pressa').onclick = function() {
            for(j = 1; j < 17; j++){
                document.getElementById('containerstation'+j).classList.toggle('do-flip');
                if(j==2||j==3||j==4||j==5||j==6||j==7||j==8){
                    document.getElementById('img2view1').style.display = "none";
                    document.getElementById('imgview2').style.display = "none";
                    document.getElementById('img2view2').style.display = "none";
                    document.getElementById('imgview3').style.display = "none";
                    document.getElementById('img2view3').style.display = "none";
                    document.getElementById('imgview4').style.display = "none";
                    document.getElementById('img2view4').style.display = "none";
                    document.getElementById('imgview5').style.display = "none";
                    document.getElementById('img2view5').style.display = "none";
                    document.getElementById('imgview6').style.display = "none";
                    document.getElementById('img2view6').style.display = "none";
                    document.getElementById('imgview7').style.display = "none";
                    document.getElementById('img2view7').style.display = "none";
                    document.getElementById('imgview8').style.display = "none";
                    document.getElementById('img2view8').style.display = "none";


                }
            }
        };

        var status;

        $("#status").change(function() {

        if($(this).val() == "working")

            {

            $("body").css("background-color","green");

            }

        else if($(this).val()=="stopped")

            {

            $("body").css("background-color","red");

            }

            else if($(this).val()=="offline")

            {

            $("body").css("background-color","lightgrey");

            }

        });
       
</script>
</html>