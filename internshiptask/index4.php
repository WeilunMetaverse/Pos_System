<html>
    <head>

        <style>
            
            html {
            height: 100%;

            font-family: "Montserrat", sans-serif;
            font-size: 110%;
            background-color: #212534;
            }

            .containerstation{

                /*width:100.3%;
                height:33%; original*/
                width:100.3%;
                height:83%; 
                background:silver;
                margin: auto -0.1%;
                background-image: linear-gradient(90deg, #D0CECF 5%, #D0CECF 9.3%, #D7AFAF 9%, #D7AFAF 20%, #D7AFAF 26.8%,#D0CECF 26.7%, #D0CECF 70.5%,#D7AFAF 70%, #D7AFAF 73.5%,#D0CECF 73.5%,grey 100%);
                /*background-image: linear-gradient(90deg, #D0CECF 5%, #D0CECF 9.3%, #D7AFAF 9%, #D7AFAF 20%, #D7AFAF 26.8%,#D0CECF 26.7%, #D0CECF 70.5%,#D7AFAF 70%, #D7AFAF 73.5%,#D0CECF 73.5%,grey 100%); this is for botder 1px*/
                /*background-image: linear-gradient(90deg, #D0CECF 5%, #D0CECF 10.3%, #D7AFAF 10%, #D7AFAF 20%, #D7AFAF 29.7%,#D0CECF 29.7%, #D0CECF 81.3%,#D7AFAF 80%, #D7AFAF 84.5%,#D0CECF 82%,grey 100%); this is for border 4px*/
                border-radius: 1em;
                box-shadow: 2px 2px black;
                transition: transform 0.5s ease, box-shadow 0.2s ease;
                /*-webkit-box-reflect: below 0px linear-gradient(60deg, rgba(0,0,0,0.0), rgba(0,0,0,0.4));*/
                /*-webkit-box-reflect: below 0.5vmin linear-gradient(180deg,transparent 0 50%, white 100%);*/
            }
            
            .containerstationsmall{
                position:relative;
                width:2.81%;
                height:22%;
                /**/
                
                /**/
                left:-48.05%;
                top:-61.8%;
                font-size: 100%;
                padding: 0;

                list-style: none;

                display: -webkit-box;
                display: -moz-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                background-size: cover;
                background-position: center;
                -webkit-flex-flow: column wrap;
                
                
            }

            

            .containerstationsmall2{
                position:relative;
                width:2.811%;
                height:22.7%;
                margin: auto 5%;
                
                left:-12.2%;
                top:-84.3%;
                font-size: 100%;
                padding: 0;
                
                list-style: none;

                display: -webkit-box;
                display: -moz-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                
                -webkit-flex-flow: column wrap;
                
            }




            .pcontainerstation{
                border: 1px solid #0f4667;
                /*border-bottom-left-radius: 15%;*/
                /*border-bottom-right-radius: 15%;*/
                font-size: 100%;
                margin:auto 0%;
                transition: green 2s ease-out;
                -webkit-animation: red 1s infinite;
                animation: green 1s infinite; 
                color: rgb(88 199 250 / 0%);
                background-color: #008D00;
                box-shadow: -5px -5px 5px -5px var(--color1), 5px 5px 5px -5px var(--color2), -7px -7px 10px -5px transparent, 7px 7px 10px -5px transparent, 0 0 5px 0px rgba(255, 255, 255, 0), 0 55px 35px -20px rgba(0, 0, 0, 0.5);
                transition: transform 0.5s ease, box-shadow 0.2s ease;
                border-radius: 0px;
                transition: all 1s ease-in-out;
                -webkit-transition: background 1s, border-radius 1s;
                transition: background 1s, border-radius 1s;
                
            }


            .pcontainerstationgone{
              background-image: none;
              background-color: black;
            }
            

            .trans{
              border: 1px solid #0f4667;
                /*border-bottom-left-radius: 15%;*/
                /*border-bottom-right-radius: 15%;*/
                font-size: 100%;
                margin:auto 0%;
                transition: green 2s ease-out;
                -webkit-animation: red 1s infinite;
                animation: green 1s infinite; 
                color: rgb(88 199 250 / 0%);
                background-color: #008D00;
                box-shadow: -5px -5px 5px -5px var(--color1), 5px 5px 5px -5px var(--color2), -7px -7px 10px -5px transparent, 7px 7px 10px -5px transparent, 0 0 5px 0px rgba(255, 255, 255, 0), 0 55px 35px -20px rgba(0, 0, 0, 0.5);
                transition: transform 0.5s ease, box-shadow 0.2s ease;
                border-radius: 50%;
                transition: all 1s ease-in-out;
                -webkit-transition: background 1s, border-radius 1s;
                transition: background 1s, border-radius 1s;
            }

           

            .stripcontainerstation{
                width:100%;
                height:10%;
                margin:0px -100%;
                z-index: 200;
            }

            .stripcontainerstationgone{
              width:30%;
              margin:0px -65%;
            }

            .xcontainerstation{
                padding-top: 10px;
                border: 1px solid #0f4667;
                background-image: url(media/xvariable.png);
                background-size: 100% 100%;
                font-size: 100%;
                margin:auto 0%;
                transition: green 2s ease-out;
                -webkit-animation: red 1s infinite;
                animation: green 1s infinite; 
                color: rgb(88 199 250 / 0%);
                background-color: #008D00;
                box-shadow: -5px -5px 5px -5px var(--color1), 5px 5px 5px -5px var(--color2), -7px -7px 10px -5px transparent, 7px 7px 10px -5px transparent, 0 0 5px 0px rgba(255, 255, 255, 0), 0 55px 35px -20px rgba(0, 0, 0, 0.5);
                transition: transform 0.5s ease, box-shadow 0.2s ease;
                -webkit-backface-visibility: visible;
                backface-visibility: visible;
                -webkit-transform-style: preserve-3d;
                -moz-transform-style: preserve-3d;
                -ms-transform-style: preserve-3d;
                -o-transform-style: preserve-3d;
                transform-style: preserve-3d;

                transform-origin: 50% 50%;
                transition: all 1s ease-in-out;
                transform: rotateY(0deg) translateZ(28px);
            }


            .pcontainerstation:hover,.xcontainerstation:hover {
            box-shadow: -20px -20px 30px -25px var(--color1), 20px 20px 30px -25px var(--color2), -7px -7px 10px -5px var(--color1), 7px 7px 10px -5px var(--color2), 0 0 13px 4px rgba(255, 255, 255, 0.3), 0 55px 35px -20px rgba(0, 0, 0, 0.5);
            }

            .pcontainerstation.active:after,
            .pcontainerstation:hover:after,
            .xcontainerstation.active:after,
            .xcontainerstation:hover:after {
            filter: brightness(1) contrast(1);
            opacity: 1;
            }

            .pcontainerstation.active,
            .pcontainerstation:hover,
            .xcontainerstation.active:after,
            .xcontainerstation:hover:after {
            -webkit-animation: none;
                    animation: none;
            transition: box-shadow 0.1s ease-out;
            }

            

            .imagestation{
                position:relative;
                width:70%;
                height:70%;
                border-radius: 20%;
                left:12%;
                top:13%;
            }
            .imagestationgone{
              display:none;
            }

            .imagestationo{
                position:relative;
                width:55%;
                height:55%;
                border-radius: 20%;
                left:24%;
                top:27%;
               

            }

            @media (max-width: 1026px) {
                #image1 { display: none; }
                #image2 { display: none; }
                #image3 { display: none; }
                #image4 { display: none; }
                #image5 { display: none; }
                #image6 { display: none; }
                #image7 { display: none; }
                #image8 { display: none; }
                #reviews{ display: none; }
                
                #consmall {width:2.8%;}
            }

            @media (max-width: 1366px) {
                .container {background-image: linear-gradient(90deg, #D0CECF 5%, #D0CECF 7.5%, #D7AFAF 5%, #D7AFAF 20%, #D7AFAF 27.2%,#D0CECF 27.2%, #D0CECF 71.8%,#D7AFAF 70%, #D7AFAF 74.8%,#D0CECF 73.5%,grey 100%);}
            }

            @media (max-height: 626px) {
                #image1 { display: none; }
                #image2 { display: none; }
                #image3 { display: none; }
                #image4 { display: none; }
                #image5 { display: none; }
                #image6 { display: none; }
                #image7 { display: none; }
                #image8 { display: none; }
                #reviews{ display: none; }
                
                #consmall {width:2.8%;}
            }


            
        

        @-webkit-keyframes red {
          0% { background-color: red; }
          33% { background-color: black; }  
          67% { background-color: red; }
          100% { background-color: black; }
        }

        @keyframes red {
          0% { background-color: red; }
          33% { background-color: black; }  
          67% { background-color: red; }
          100% { background-color: black; }
        }


        @-webkit-keyframes redb {
          0% { background-color: red; }
          33% { background-color: #34495E; }  
          67% { background-color: red; }
          100% { background-color: #34495E; }
        }

        @keyframes redb {
          0% { background-color: red; }
          33% { background-color: #34495E; }  
          67% { background-color: red; }
          100% { background-color: #34495E; }
        }

        div.wrapperstation23 {    
            position:relative;
            top: 14%;

            width: 30%;
            height: 50%;
            
            margin:0% -40%;
            background-color: transparent;
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
        left: 0px;
        top:-8px;
        font-size: auto;
        color: white;
        position: relative;
        text-align: center;
        z-index: 1;
        text-decoration:none;
        font-family: "Montserrat", sans-serif;
        text-shadow: 1px 1px #F5DCAC;
        }
        
        a.reviews:hover,
        a:active {
        color: blue;
        }

        .popupstation23 {
        width: 100%;
        width: 580px;
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
        left:-560px;
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

        /*table, th, td {
        border: 1px solid black;

        font-family:"Montserrat", sans-serif;
        text-decoration: none;
        font-weight: none;
        }
        td{
           color: blue;
        }*/

        .rwd-table {
        margin: 5px -10px;
        width:103.7%;
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

        
        
        </style>
    </head>
    <body>
       
            
       <div class="containerstation">

        <img id="map" class="containerstation"  alt="" style="width:100%; height:100%;">
        
        <div id="consmall" class="containerstationsmall" style="margin:auto auto;">
        <p class="xcontainerstation" style="width:100%;height:100%;"></p>
        <p id="pcon1" class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-size: cover ;background-image:url();">
            <img id="robotimage1" class="imagestation" src="media/robotarm.gif" alt="" style="margin:auto auto;">
            <div id="statusalert1" class="stripcontainerstation" style="background-color: green;"></div>
            <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews" onclick="run1()">1
                <div id="popupinformation1" class="popupstation23">
                    <table class="rwd-table">
                        <tr>
                            <th>NAME</th>
                            <th>TOTAL IN</th>
                            <th>PASS</th>
                            <th>FAIL</th>
                            <th>LAST STOP</th>
                            <th>STATUS</th>
                          </tr>
                          <tr>
                            <td>CUC9</td>
                            <td>1000</td>
                            <td>997</td>
                            <td>3</td>
                            <td>3 mins</td>
                            <td id="redalerttable1" style="background:green;color:white;border-radius:0.4em;">Run</td>
                          </tr>
                    </table>
                </div></a></div>
            
        </p><!---CUC9 <br>Total In: 1000 <br> Pass : 997 <br> Fail : 3 <br> Last Stop : 3 mins-->
        
        <p id="pcon2" class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url();background-size:cover;">
            <img id="robotimage2" class="imagestation" src="media/robotarmrest.png" alt="" style="margin:auto auto;">
            <div id="statusalert2" class="stripcontainerstation" style="background-color: yellow;"></div>
            <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews" onclick="run2()">2
                <div id="popupinformation2" class="popupstation23">
                <table class="rwd-table">
                    <tr>
                        <th>NAME</th>
                        <th>TOTAL IN</th>
                        <th>PASS</th>
                        <th>FAIL</th>
                        <th>LAST STOP</th>
                        <th>STATUS</th>
                      </tr>
                      <tr>
                        <td>CUC9</td>
                        <td>1000</td>
                        <td>997</td>
                        <td>3</td>
                        <td>3 mins</td>
                        <td id="redalerttable2" style="background:yellow;color:black;border-radius:0.4em;">Breaks</td>
                      </tr>
                </table>   
            </div></a></div>
        </p>
        
        <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image: url(03.jpg);background-size: cover;">
            <img id="robotimage3" class="imagestation" src="media/robotarm.gif" alt="" style="margin:auto auto;">
            <div id="statusalert3" class="stripcontainerstation" style="background-color: green;"></div>
            <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">3
                <div class="popupstation23">
                    <table class="rwd-table">
                        <tr>
                            <th>NAME</th>
                            <th>TOTAL IN</th>
                            <th>PASS</th>
                            <th>FAIL</th>
                            <th>LAST STOP</th>
                            <th>STATUS</th>
                          </tr>
                          <tr>
                            <td>CUC9</td>
                            <td>1000</td>
                            <td>997</td>
                            <td>3</td>
                            <td>3 mins</td>
                            <td id="redalerttable3" style="background:green;color:white;border-radius:0.4em;">Run</td>
                          </tr>
                    </table>
                </div></a></div>
        </p>
        
        <p  class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(04.jpg);background-size:cover;">
           
            <img id="robotimage4" class="imagestation" src="media/robotarmstop.png" alt="" style="margin:auto auto;">
            <div id="statusalert4" class="stripcontainerstation" style="background-color: green;"></div>
            <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">4
                
                <div class="popupstation23" style="width: 580px;">
                <table class="rwd-table">
                    <tr>
                        <th>NAME</th>
                        <th>TOTAL IN</th>
                        <th>PASS</th>
                        <th>FAIL</th>
                        <th>LAST STOP</th>
                        <th>STATUS</th>
                      </tr>
                      <tr>
                        <td>MICIF BOARD</td>
                        <td>900</td>
                        <td>750</td>
                        <td>150</td>
                        <td>10 mins</td>
                        <td id="redalerttable4" style="background:red;color:white;border-radius:0.4em;">Error</td>
                      </tr>
                </table>
                </div></a></div>
        </p>
        
        <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(05.jpg);background-size:cover;">
            <img id="robotimage5" class="imagestation" src="media/robotarm.gif" alt="" style="margin:auto auto;">
            <div id="statusalert5" class="stripcontainerstation" style="background-color: green;"></div>
            <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">5
                <div class="popupstation23">
                    <table class="rwd-table">
                        <tr>
                            <th>NAME</th>
                            <th>TOTAL IN</th>
                            <th>PASS</th>
                            <th>FAIL</th>
                            <th>LAST STOP</th>
                            <th>STATUS</th>
                          </tr>
                          <tr>
                            <td>CUC9</td>
                            <td>1000</td>
                            <td>997</td>
                            <td>3</td>
                            <td>3 mins</td>
                            <td id="redalerttable5" style="background:green;color:white;border-radius:0.4em;">Run</td>
                          </tr>
                    </table> 
                </div></a></div>
        </p>
        
        <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(06.jpg);background-size:cover;">
            <img id="robotimage6" class="imagestation" src="media/robotarm.gif" alt="" style="margin:auto auto;">
            <div id="statusalert6" class="stripcontainerstation" style="background-color: green;"></div>
            <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">6<div class="popupstation23">
                <table class="rwd-table">
                    <tr>
                        <th>NAME</th>
                        <th>TOTAL IN</th>
                        <th>PASS</th>
                        <th>FAIL</th>
                        <th>LAST STOP</th>
                        <th>STATUS</th>
                      </tr>
                      <tr>
                        <td>CUC9</td>
                        <td>1000</td>
                        <td>997</td>
                        <td>3</td>
                        <td>3 mins</td>
                        <td id="redalerttable6" style="background:green;color:white;border-radius:0.4em;">Run</td>
                      </tr>
                </table> 
            </div></a></div>
        </p>
        
        <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(07.jpg);background-size:cover;">
            <img id="robotimage7" class="imagestation" src="media/robotarmstop.png" alt="" style="margin:auto auto;">
            <div id="statusalert7" class="stripcontainerstation" style="background-color: green;"></div>
            <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">7
                <div class="popupstation23">
                    <table class="rwd-table">
                        <tr>
                            <th>NAME</th>
                            <th>TOTAL IN</th>
                            <th>PASS</th>
                            <th>FAIL</th>
                            <th>LAST STOP</th>
                            <th>STATUS</th>
                          </tr>
                          <tr>
                            <td>CUC9</td>
                            <td>1000</td>
                            <td>997</td>
                            <td>3</td>
                            <td>3 mins</td>
                            <td id="redalerttable7" style="background:green;color:white;border-radius:0.4em;">Run</td>
                          </tr>
                    </table>  
                </div></a></div>
        </p>
        
        <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(08.jpg);background-size:cover;">
            <img id="robotimage8" class="imagestation" src="media/robotarm.gif" alt="" style="margin:auto auto;">
            <div id="statusalert8" class="stripcontainerstation" style="background-color: green;"></div>
            <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">8
                <div class="popupstation23">
                    <table class="rwd-table">
                        <tr>
                            <th>NAME</th>
                            <th>TOTAL IN</th>
                            <th>PASS</th>
                            <th>FAIL</th>
                            <th>LAST STOP</th>
                            <th>STATUS</th>
                          </tr>
                          <tr>
                            <td>CUC9</td>
                            <td>1000</td>
                            <td>997</td>
                            <td>3</td>
                            <td>3 mins</td>
                            <td id="redalerttable8" style="background:green;color:white;border-radius:0.4em;">Run</td>
                          </tr>
                    </table> 
                </div></a></div>
        </p>
        <p class="xcontainerstation" style="width:100%;height:100%;"></p>
        <p class="xcontainerstation" style="width:100%;height:100%;"></p>
           
        <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(01.jpg);background-size:cover;opacity:1;">
          <img id="robotimage9" class="imagestationo" src="media/operator.gif" alt="" style="margin:auto auto;">
          <div id="statusalert9" class="stripcontainerstation" style="background-color: green;"></div>
          <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">1
              <div class="popupstation23" style="width: 580px;">
              <table class="rwd-table">
                  <tr>
                      <th>NAME</th>
                      <th>TOTAL IN</th>
                      <th>PASS</th>
                      <th>FAIL</th>
                      <th>LAST STOP</th>
                      <th>STATUS</th>
                    </tr>
                    <tr>
                      <td>MICIF BOARD</td>
                      <td>900</td>
                      <td>750</td>
                      <td>150</td>
                      <td>10 mins</td>
                      <td id="redalerttable9" style="background:green;color:white;border-radius:0.4em;">Run</td>
                    </tr>
              </table>
              </div></a></div>
      </p>
      <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(02.jpg);background-size:cover;">
          <img id="robotimage10" class="imagestationo" src="media/operator.gif" alt="" style="margin:auto auto;">
          <div id="statusalert10" class="stripcontainerstation" style="background-color: green;"></div>
          <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">2
              <div class="popupstation23" style="width: 580px;">
              <table class="rwd-table">
                  <tr>
                      <th>NAME</th>
                      <th>TOTAL IN</th>
                      <th>PASS</th>
                      <th>FAIL</th>
                      <th>LAST STOP</th>
                      <th>STATUS</th>
                    </tr>
                    <tr>
                      <td>MICIF BOARD</td>
                      <td>900</td>
                      <td>750</td>
                      <td>150</td>
                      <td>10 mins</td>
                      <td id="redalerttable10" style="background:green;color:white;border-radius:0.4em;">Run</td>
                    </tr>
              </table>
              </div></a></div>
      </p>
      <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(03.jpg);background-size:cover;">
          <img id="robotimage11" class="imagestation" src="media/robotarm.gif" alt="" style="margin:auto auto;">
          <div id="statusalert11" class="stripcontainerstation" style="background-color: green;"></div>
          <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">3
              <div class="popupstation23" style="width: 580px;">
              <table class="rwd-table">
                  <tr>
                      <th>NAME</th>
                      <th>TOTAL IN</th>
                      <th>PASS</th>
                      <th>FAIL</th>
                      <th>LAST STOP</th>
                      <th>STATUS</th>
                    </tr>
                    <tr>
                      <td>MICIF BOARD</td>
                      <td>900</td>
                      <td>750</td>
                      <td>150</td>
                      <td>10 mins</td>
                      <td id="redalerttable11" style="background:green;color:white;border-radius:0.4em;">Run</td>
                    </tr>
              </table>
              </div></a></div>
      </p>
      <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(04.jpg);background-size:cover;">
          <img id="robotimage12" class="imagestationo" src="media/operator.gif" alt="" style="margin:auto auto;">
          <div id="statusalert12" class="stripcontainerstation" style="background-color: green;"></div>
          <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">4
              <div class="popupstation23" style="width: 580px;">
              <table class="rwd-table">
                  <tr>
                      <th>NAME</th>
                      <th>TOTAL IN</th>
                      <th>PASS</th>
                      <th>FAIL</th>
                      <th>LAST STOP</th>
                      <th>STATUS</th>
                    </tr>
                    <tr>
                      <td>MICIF BOARD</td>
                      <td>900</td>
                      <td>750</td>
                      <td>150</td>
                      <td>10 mins</td>
                      <td id="redalerttable12" style="background:green;color:white;border-radius:0.4em;">Run</td>
                    </tr>
              </table>
              </div></a></div>
      </p>
      <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(05.jpg);background-size:cover;">
          <img id="robotimage13" class="imagestationo" src="media/operatorbreak.png" alt="" style="margin:auto auto;">
          <div id="statusalert13" class="stripcontainerstation" style="background-color: grey;"></div>
          <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">5
              <div class="popupstation23" style="width: 580px;">
              <table class="rwd-table">
                  <tr>
                      <th>NAME</th>
                      <th>TOTAL IN</th>
                      <th>PASS</th>
                      <th>FAIL</th>
                      <th>LAST STOP</th>
                      <th>STATUS</th>
                    </tr>
                    <tr>
                      <td>MICIF BOARD</td>
                      <td>900</td>
                      <td>750</td>
                      <td>150</td>
                      <td>10 mins</td>
                      <td id="redalerttable13" style="background:grey;color:white;border-radius:0.4em;">Run</td>
                    </tr>
              </table>
              </div></a></div>
      </p>
      <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(06.jpg);background-size:cover;">
          <img id="robotimage14" class="imagestation" src="media/robotarmstop.png" alt="" style="margin:auto auto;">
          <div id="statusalert14" class="stripcontainerstation" style="background-color: green;"></div>
          <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">6
              <div class="popupstation23" style="width: 580px;">
              <table class="rwd-table">
                  <tr>
                      <th>NAME</th>
                      <th>TOTAL IN</th>
                      <th>PASS</th>
                      <th>FAIL</th>
                      <th>LAST STOP</th>
                      <th>STATUS</th>
                    </tr>
                    <tr>
                      <td>MICIF BOARD</td>
                      <td>900</td>
                      <td>750</td>
                      <td>150</td>
                      <td>10 mins</td>
                      <td id="redalerttable14" style="background:green;color:white;border-radius:0.4em;">Run</td>
                    </tr>
              </table>
              </div></a></div>
      </p>
      <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(07.jpg);background-size:cover;">
          <img id="robotimage15" class="imagestationo" src="media/operator.gif" alt="" style="margin:auto auto;">
          <div id="statusalert15" class="stripcontainerstation" style="background-color: green;"></div>
          <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">7
              <div class="popupstation23" style="width: 580px;">
              <table class="rwd-table">
                  <tr>
                      <th>NAME</th>
                      <th>TOTAL IN</th>
                      <th>PASS</th>
                      <th>FAIL</th>
                      <th>LAST STOP</th>
                      <th>STATUS</th>
                    </tr>
                    <tr>
                      <td>MICIF BOARD</td>
                      <td>900</td>
                      <td>750</td>
                      <td>150</td>
                      <td>10 mins</td>
                      <td id="redalerttable15" style="background:green;color:white;border-radius:0.4em;">Run</td>
                    </tr>
              </table>
              </div></a></div>
      </p>
      <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(08.jpg);background-size:cover;">
          <img id="robotimage16" class="imagestationo" src="media/operatorbreak.png" alt="" style="margin:auto auto;">
          <div id="statusalert16" class="stripcontainerstation" style="background-color: green;"></div>
          <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">8
              <div class="popupstation23" style="width: 580px;">
              <table class="rwd-table">
                  <tr>
                      <th>NAME</th>
                      <th>TOTAL IN</th>
                      <th>PASS</th>
                      <th>FAIL</th>
                      <th>LAST STOP</th>
                      <th>STATUS</th>
                    </tr>
                    <tr>
                      <td>MICIF BOARD</td>
                      <td>900</td>
                      <td>750</td>
                      <td>150</td>
                      <td>10 mins</td>
                      <td id="redalerttable16" style="background:green;color:white;border-radius:0.4em;">Run</td>
                    </tr>
              </table>
              </div></a></div>
      </p>
      <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(09.jpg);background-size:cover;">
          <img id="robotimage17" class="imagestation" src="media/robotarm.gif" alt="" style="margin:auto auto;">
          <div id="statusalert17" class="stripcontainerstation" style="background-color: green;"></div>
          <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">9
              <div class="popupstation23" style="width: 580px;">
              <table class="rwd-table">
                  <tr>
                      <th>NAME</th>
                      <th>TOTAL IN</th>
                      <th>PASS</th>
                      <th>FAIL</th>
                      <th>LAST STOP</th>
                      <th>STATUS</th>
                    </tr>
                    <tr>
                      <td>MICIF BOARD</td>
                      <td>900</td>
                      <td>750</td>
                      <td>150</td>
                      <td>10 mins</td>
                      <td id="redalerttable17" style="background:green;color:white;border-radius:0.4em;">Run</td>
                    </tr>
              </table>
              </div></a></div>
      </p>
      <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(10.jpg);background-size:cover;">

          <img id="robotimage18" class="imagestation" src="media/robotarm.gif" alt="" style="margin:auto auto;">
          <div id="statusalert18" class="stripcontainerstation" style="background-color: green;"></div>
          <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">10
              <div class="popupstation23" style="width: 580px;">
              <table class="rwd-table">
                  <tr>
                      <th>NAME</th>
                      <th>TOTAL IN</th>
                      <th>PASS</th>
                      <th>FAIL</th>
                      <th>LAST STOP</th>
                      <th>STATUS</th>
                    </tr>
                    <tr>
                      <td>MICIF BOARD</td>
                      <td>900</td>
                      <td>750</td>
                      <td>150</td>
                      <td>10 mins</td>
                      <td id="redalerttable18" style="background:green;color:white;border-radius:0.4em;">Run</td>
                    </tr>
              </table>
              </div></a></div>
      </p>
      <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(11.jpg);background-size:cover;">

          <img id="robotimage19" class="imagestation" src="media/robotarm.gif" alt="" style="margin:auto auto;">
          <div id="statusalert19" class="stripcontainerstation" style="background-color: green;"></div>
          <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">11
              <div class="popupstation233" style="width: 580px;">
              <table class="rwd-table">
                  <tr>
                      <th>NAME</th>
                      <th>TOTAL IN</th>
                      <th>PASS</th>
                      <th>FAIL</th>
                      <th>LAST STOP</th>
                      <th>STATUS</th>
                    </tr>
                    <tr>
                      <td>MICIF BOARD</td>
                      <td>900</td>
                      <td>750</td>
                      <td>150</td>
                      <td>10 mins</td>
                      <td id="redalerttable19" style="background:green;color:white;border-radius:0.4em;">Run</td>
                    </tr>
              </table>
              </div></a></div>
      </p>
      <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(12.jpg);background-size:cover;">

          <img id="robotimage20" class="imagestation" src="media/robotarm.gif" alt="" style="margin:auto auto;">
          <div id="statusalert20" class="stripcontainerstation" style="background-color: green;"></div>
          <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">12
              <div class="popupstation233" style="width: 580px;">
              <table class="rwd-table">
                  <tr>
                      <th>NAME</th>
                      <th>TOTAL IN</th>
                      <th>PASS</th>
                      <th>FAIL</th>
                      <th>LAST STOP</th>
                      <th>STATUS</th>
                    </tr>
                    <tr>
                      <td>MICIF BOARD</td>
                      <td>900</td>
                      <td>750</td>
                      <td>150</td>
                      <td>10 mins</td>
                      <td id="redalerttable20" style="background:green;color:white;border-radius:0.4em;">Run</td>
                    </tr>
              </table>
              </div></a></div>
      </p>
      <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(13.jpg);background-size:cover;">

          <img id="robotimage21" class="imagestation" src="media/robotarm.gif" alt="" style="margin:auto auto;">
          <div id="statusalert21" class="stripcontainerstation" style="background-color: green;"></div>
          <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">13
              <div class="popupstation233" style="width: 580px;">
              <table class="rwd-table">
                  <tr>
                      <th>NAME</th>
                      <th>TOTAL IN</th>
                      <th>PASS</th>
                      <th>FAIL</th>
                      <th>LAST STOP</th>
                      <th>STATUS</th>
                    </tr>
                    <tr>
                      <td>MICIF BOARD</td>
                      <td>900</td>
                      <td>750</td>
                      <td>150</td>
                      <td>10 mins</td>
                      <td id="redalerttable21" style="background:green;color:white;border-radius:0.4em;">Run</td>
                    </tr>
              </table>
              </div></a></div>
      </p>
      <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(14.jpg);background-size:cover;">

          <img id="robotimage22" class="imagestation" src="media/robotarm.gif" alt="" style="margin:auto auto;">
          <div id="statusalert22" class="stripcontainerstation" style="background-color: green;"></div>
          <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">14
              <div class="popupstation233" style="width: 580px;">
              <table class="rwd-table">
                  <tr>
                      <th>NAME</th>
                      <th>TOTAL IN</th>
                      <th>PASS</th>
                      <th>FAIL</th>
                      <th>LAST STOP</th>
                      <th>STATUS</th>
                    </tr>
                    <tr>
                      <td>MICIF BOARD</td>
                      <td>900</td>
                      <td>750</td>
                      <td>150</td>
                      <td>10 mins</td>
                      <td id="redalerttable22" style="background:green;color:white;border-radius:0.4em;">Run</td>
                    </tr>
              </table>
              </div></a></div>
      </p>
      <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(15.jpg);background-size:cover;">

          <img id="robotimage23" class="imagestation" src="media/robotarm.gif" alt="" style="margin:auto auto;">
          <div id="statusalert23" class="stripcontainerstation" style="background-color: green;"></div>
          <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">15
              <div class="popupstation233" style="width: 580px;">
              <table class="rwd-table">
                  <tr>
                      <th>NAME</th>
                      <th>TOTAL IN</th>
                      <th>PASS</th>
                      <th>FAIL</th>
                      <th>LAST STOP</th>
                      <th>STATUS</th>
                    </tr>
                    <tr>
                      <td>MICIF BOARD</td>
                      <td>900</td>
                      <td>750</td>
                      <td>150</td>
                      <td>10 mins</td>
                      <td id="redalerttable23" style="background:green;color:white;border-radius:0.4em;">Run</td>
                    </tr>
              </table>
              </div></a></div>
      </p>
      <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(16.jpg);background-size:cover;">

          <img id="robotimage24" class="imagestation" src="media/robotarm.gif" alt="" style="margin:auto auto;">
          <div id="statusalert24" class="stripcontainerstation" style="background-color: green;"></div>
          <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">16
              <div class="popupstation233" style="width: 580px;">
              <table class="rwd-table">
                  <tr>
                      <th>NAME</th>
                      <th>TOTAL IN</th>
                      <th>PASS</th>
                      <th>FAIL</th>
                      <th>LAST STOP</th>
                      <th>STATUS</th>
                    </tr>
                    <tr>
                      <td>MICIF BOARD</td>
                      <td>900</td>
                      <td>750</td>
                      <td>150</td>
                      <td>10 mins</td>
                      <td id="redalerttable24" style="background:green;color:white;border-radius:0.4em;">Run</td>
                    </tr>
              </table>
              </div></a></div>
      </p>
      
      <p class="pcontainerstation" style="width:100%;height:100%;background-color: black;background-image:url(17.jpg);background-size:cover;">

          <img id="robotimage25" class="imagestation" src="media/robotarm.gif" alt="" style="margin:auto auto;">
          <div id="statusalert25" class="stripcontainerstation" style="background-color: green;"></div>
          <div class="wrapperstation23" style="background-color: transparent;"><a class="reviews">17
              <div class="popupstation233" style="width: 580px;">
              <table class="rwd-table">
                  <tr>
                      <th>NAME</th>
                      <th>TOTAL IN</th>
                      <th>PASS</th>
                      <th>FAIL</th>
                      <th>LAST STOP</th>
                      <th>STATUS</th>
                    </tr>
                    <tr>
                      <td>MICIF BOARD</td>
                      <td>900</td>
                      <td>750</td>
                      <td>150</td>
                      <td>10 mins</td>
                      <td id="redalerttable25" style="background:green;color:white;border-radius:0.4em;">Run</td>
                    </tr>
              </table>
              </div></a></div>
      </p>
      <p class="xcontainerstation" style="width:100%;height:100%;"></p>
      
      <p class="xcontainerstation" style="width:200%;height:100%;background-image: url(media/roller2noback.png);background-size: cover;"></p>

      <!--<div class="containerxstation" id="containerstation1">
      <p class="xcontainer_front" style="width:100%;height:100%;background-color: #33CC33;">1</p>
      <p class="xcontainer_back" style="width:100%;height:100%;background-color: blue;"></p>
      </div>-->
      
        
      
    
      </div>
        </div>

    </body>

    <script>

      var a=1;
      if(a==1){
        for(i=1;i<26;i++){
          
        }
      }
         document.getElementById("statusalert4").style.animation = "red 1s infinite";
         document.getElementById("statusalert7").style.animation = "red 1s infinite";
         document.getElementById("statusalert14").style.animation = "red 1s infinite";
         document.getElementById("redalerttable4").style.animation = "redb 1s infinite";
         document.getElementById("redalerttable7").style.animation = "redb 1s infinite";
         document.getElementById("redalerttable14").style.animation = "redb 1s infinite";
         

    </script>

    <script>
      document.getElementById('pressa').onclick = function() {
            document.getElementById('containerstation1').classList.toggle('do-flip');
            document.getElementById('pcon1').style.borderRadius = "50%";
            
            };
            
          var buttonpress = 0;
          
            function run1(){
              document.getElementById('pcon1').classList.toggle('trans');
              document.getElementById('robotimage1').classList.toggle('imagestationgone');
              document.getElementById('statusalert1').classList.toggle('stripcontainerstationgone');
              document.getElementById('pcon1').classList.toggle('pcontainerstationgone');
             }

             function run2(){
              document.getElementById('pcon2').classList.toggle('trans');
              document.getElementById('robotimage2').classList.toggle('imagestationgone');
              document.getElementById('statusalert2').classList.toggle('stripcontainerstationgone');
              document.getElementById('pcon2').classList.toggle('pcontainerstationgone');
             }
    </script>
    <style>
            .wrapper123 {
                
                
                
                }

                /*.wrapper:first-child .container {
                -webkit-animation: boxFlip 4.5s infinite;
                -moz-animation: boxFlip 4.5s infinite;
                animation: boxFlip 4.5s infinite;
                -webkit-animation-timing-function: cubic-bezier(0.29, 1.53, 0.33, 1.01);
                -moz-animation-timing-function: cubic-bezier(0.29, 1.53, 0.33, 1.01);
                animation-timing-function: cubic-bezier(0.29, 1.53, 0.33, 1.01);

                }*/

                .containerx {

                width: 100%;
                height: 83%;
                    

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
                transform: rotateY(0deg) translateZ(28px);
                /*transition: all 1s ease-in-out;*/
                /*transition: all 0.4s cubic-bezier(0.29, 1.53, 0.33, 1.01);*/
                
                }

                .do-flip {
                transition: all 1s ease-in-out;
                transform: rotateY(90deg) translateZ(28px);
                
                }
                

                .back{
                
                transform: rotateY(0deg) translateZ(28px);
                }


                .container p { /*texture container*/
                position: relative;
                }
                

                
                /*.container:hover {
                transform: rotateY(90deg) translateZ(125px);
                
                }*/

                .xcontainer {
                  display: block;
                  width: 100%;
                  height: 100%;
                  top: 0;
                z-index: 0;
                border: 1px solid black;
                border-radius: 10%;
                
                }

                .xcontainer_front{
                  max-height:68px;
                  min-height:119%;
                  margin:0% 0%;
                }
                

                .xcontainer_back{
                  position: absolute;
                  max-height:69px;
                  min-height:119%;
                  background-color: #C4C7CC;
                  color: #3B4257;
                  transform: translate3D(-30%, 0px, -28px) rotateY(-60deg); 
                  
                  top:-119%;
                  margin:0% 10%;
                }

                :root{
                  --tx:-30%;
                  --ty:0%;
                  --tz:-30%%;
                }

                .box_front, .box_bottom {
                display: block;
                width: 100%;
                height: 100%;
                
                top: 0;
                z-index: 0;
                border: 1px solid black;
                border-radius: 10%;
                }

                .box_front {
                background-color: #20B886;
                }

                .box_bottom {
                background-color: #C4C7CC;
                color: #3B4257;
                transform: translate3D(-35px, 0px, -35px) rotateY(-90deg);
                
                }

                

                
    </style>
</html>