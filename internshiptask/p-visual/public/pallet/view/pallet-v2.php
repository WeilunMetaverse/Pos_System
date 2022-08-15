<?php $title = "L25 P-Visual";?>
<?php include("../../component/header.html"); ?>

<style>
body{
	/* background-image:url("../../asset/dark.jpg"); */
    background-color: #222222;

}
</style>
<script>
$(document).ready(function() {
  
    $('.sb-nav-fixed').toggleClass('sb-sidenav-toggled');
 
});
</script>


<body >

    <!-- topbar  -->
   

    <!-- sidebar -->
    <div id="layoutSidenav" >       
        <!-- main class  -->
        <div id="layoutSidenav_content">
            <main>
                    <div class="container-fluid">
                        
                        <!-- page title  -->
                        <h1 class="mt-4" align="center" style="color:white; font-size: 38px;font-weight:bold;">Pallet Real Time Monitoring (L25)</h1>
                        <!-- <br>  -->

                        <!-- Prepare line status  -->
                        <div class="row">
                            <div class="col-8">
                            
                            <!-- Pallet Monitor real time -->
                                
                                <br>


                                <!-- Assembly  -->
                                <ol class="breadcrumb mb-3">
                                    <li class="breadcrumb-item active" align="center" style="color:black; font-size: 20px;font-weight:bold;">Assembly</li>
                                </ol>
                                
                                
                                
                                <div class="row" style="padding-left:30px">
                                    <!-- Lifter 1 -->
                                                
                                        <script>
                                            function saveTactTime(type,number,category,value){
                                                // console.log(lineStatus);
                                                // if(lineStatus == "online")
                                                // {
                                                $.post("../data/post_tact_time.php",
                                                {
                                                type: type,
                                                number: number,
                                                category: category,
                                                value:value
                                                },
                                                function(data,status){
                                                // console.log("Data: " + data + "\nStatus: " + status);
                                                });
                                                // }else{
                                                // console.log("No tact time recorded.Line status is not online");
                                                // }
                                            }

                                            function saveTactTime1(type,number,category,value,pallet,autoserial){
                                                console.log(lineStatus);                                        
                                                // console.log("Lifter 4 Pallet No ="+ pallet);
                                                // console.log("Lifter 4 Duration ="+ value);
                                                console.log("Autoserial ="+ autoserial);
                                                if(pallet != 0){
                                                $.post("../data/post_tact_time.php",
                                                {
                                                type: type,
                                                number: number,
                                                category: category,
                                                value:value,
                                                autoserial:autoserial,
                                                },
                                                function(data,status){
                                                console.log("Data: " + data + "\nStatus: " + status);
                                                });
                                                }else
                                                console.log("Invalid record.No Pallet\nCategory:"+ category +"\n Pallet No : "+ number);

                                            }
                                            
                                            $(document).ready(function() {    
                                                var lifter01=0;
                                                var startTimeL1=0; 
                                                var durationL1 =0;
                                                var palletNoL1 = 0;
                                                var autoserialL1 = 0;          
                                                getNewLifter1();
                                                function getNewLifter1() {
                                                    $.ajax({    //create an ajax request to display.php
                                                        type: "GET",
                                                        url: "../data/get-lifter-pallet.php?lifter=1",             
                                                        dataType: "html",   //expect html to be returned                
                                                        success: function(response){ 
                                                        lifter1= JSON.parse(response);
                                                        timeL1 = lifter1.timeStamp;

                                                        if(lifter01 != lifter1.number)
                                                        {
                                                            lifter01 = lifter1.number;
                                                            
                                                            if(lifter1.number != 0){
                                                                if(startTimeL1 != 0)
                                                                {
                                                                    var durationL1 = (Date.parse(timeL1)-Date.parse(startTimeL1))/1000;
                                                                    console.log(durationL1);
                                                                    saveTactTime1("lifter","1","assembly",durationL1,palletNoL1,autoserialL1);
                                                                }
                                                                startTimeL1 = lifter1.timeStamp;
                                                                palletNoL1 = lifter1.number;
                                                                autoserialL1 = lifter1.autoserial;
                                                                $("#cubefrontlifter1").show();
                                                                $("#cubefrontlifter1").html(lifter1.number);
                                                                $("#cubebacklifter1").show();
                                                                $("#cubebacklifter1").html(lifter1.number);
                                                                $("#noFPalletL1").hide();
                                                                $("#noBPalletL1").hide();
                                                                $('.cubelifter1').toggleClass('show-back');
                                                                // $("#lifter1").show(); 
                                                            }else{
                                                                if(startTimeL1 != 0)
                                                                {
                                                                    var durationL1 = (Date.parse(timeL1)-Date.parse(startTimeL1))/1000;
                                                                    saveTactTime1("lifter","1","assembly",durationL1,palletNoL1,autoserialL1);
                                                                }
                                                                startTimeL1 = lifter1.timeStamp;
                                                                palletNoL1 = lifter1.number;
                                                                autoserialL1 = lifter1.autoserial;
                                                                $("#noFPalletL1").show();
                                                                $("#noFPalletL1").html("No Pallet");
                                                                $("#noBPalletL1").show();
                                                                $("#noBPalletL1").html("No Pallet");
                                                                $("#cubefrontlifter1").hide();
                                                                $("#cubebacklifter1").hide();
                                                                $('.cubelifter1').toggleClass('show-back');
                                                            }
                                                        
                                                        }
                                                        // console.log("station"+station.station);



                                                    
                                                    
                                                        },
                                                        complete: function() {
                                                            // Schedule the next request when the current one's complete
                                                            setTimeout(getNewLifter1, 300);
                                                        }
                                                    });
                                                }});
                                                            
                                        </script>
                                        <style>
                                        /* * { box-sizing: border-box; } */

                                        /* body { font-family: sans-serif; } */

                                        .scenelifter1 {
                                        width: 100px;
                                        height: 100px;
                                        /* border: 1px solid #CCC; */
                                        margin: 10px;
                                        perspective: 400px;
                                        }

                                        .cubelifter1 {
                                        width: 100px;
                                        height: 100px;
                                        position: relative;
                                        transform-style: preserve-3d;
                                        transform: translateZ(-50px);
                                        transition: transform 2s;
                                        }

                                        .cubelifter1.show-front  { transform: translateZ(-50px) rotateY(   -180deg); }
                                        .cubelifter1.show-right  { transform: translateZ(-50px) rotateY( -90deg); }
                                        .cubelifter1.show-back   { transform: translateZ(-50px) rotateY(180deg); }
                                        .cubelifter1.show-left   { transform: translateZ(-50px) rotateY(  90deg); }
                                        .cubelifter1.show-top    { transform: translateZ(-50px) rotateX( -90deg); }
                                        .cubelifter1.show-bottom { transform: translateZ(-50px) rotateX(  90deg); }

                                        .cubelifter1__face {
                                        position: absolute;
                                        width: 100px;
                                        height: 100px;
                                        /* border: 5px solid #40CC40; */
                                        border: 0px solid ;
                                        border-radius: 15px;
                                        line-height: 100px;
                                        font-size: 40px;
                                        font-weight: bold;
                                        color: #007bff;
                                        text-align: center;
                                        }

                                        .cubelifter1__face--front  { background: (  0, 100%, 50%, 1);background-color: #007bff; }
                                        .cubelifter1__face--right  { background: ( 60, 100%, 50%, 1);background-color: #007bff; }
                                        .cubelifter1__face--back   { background: (120, 100%, 50%, 1);background-color: #007bff; }
                                        .cubelifter1__face--left   { background: (180, 100%, 50%, 1);background-color: #007bff; }
                                        .cubelifter1__face--top    { background: (240, 100%, 50%, 1);background-color: #007bff; }
                                        .cubelifter1__face--bottom { background: (300, 100%, 50%, 1);background-color: #007bff; }

                                        .cubelifter1__face--front  { transform: rotateY(  0deg) translateZ(50px); }
                                        .cubelifter1__face--right  { transform: rotateY( 90deg) translateZ(50px); }
                                        .cubelifter1__face--back   { transform: rotateY(180deg) translateZ(50px); }
                                        .cubelifter1__face--left   { transform: rotateY(-90deg) translateZ(50px); }
                                        .cubelifter1__face--top    { transform: rotateX( 90deg) translateZ(50px); }
                                        .cubelifter1__face--bottom { transform: rotateX(-90deg) translateZ(50px); }

                                        /* label { margin-right: 10px; } */
                                        </style>
                                    <div class="col-md-auto" align="center">
                                        <div class="scenelifter1">
                                            <div class="cubelifter1">
                                                <div class="cubelifter1__face cubelifter1__face--front">
                                                    <div id ="cubefrontlifter1" style="font-family: 'Stencil';color:black; font-size: 30px;font-weight:bold;"></div>
                                                    <div id ="noFPalletL1" style="color:black; font-size: 18px;font-weight:bold;">No Pallet</div>
                                                </div>
                                                <div class="cubelifter1__face cubelifter1__face--back">
                                                    <div id ="cubebacklifter1" style="font-family: 'Stencil';color:black; font-size: 30px;font-weight:bold;"></div>
                                                    <div id ="noBPalletL1" style="color:black; font-size: 18px;font-weight:bold;">No Pallet</div>
                                                </div>
                                                <div class="cubelifter1__face cubelifter1__face--right"></div>
                                                <div class="cubelifter1__face cubelifter1__face--left"></div>
                                                <div class="cubelifter1__face cubelifter1__face--top"></div>
                                                <div class="cubelifter1__face cubelifter1__face--bottom"></div>
                                            </div>
                                        </div>
                                        <!-- <br> -->
                                        <h5 style="color:white; font-size: 15px;font-weight:bold;">Lifter 1  &ensp;<i class="fas fa-angle-right"></i></h5>
                                    </div>
                                    <!-- Assembly station  -->
                                    <?php for($i=1;$i<=10;$i++):?>

                                            <script>
                                            $(document).ready(function() {
                                                var station<?php echo $i;?> = 0;
                                                var startTimeA<?php echo $i;?>=0; 
                                                var durationA<?php echo $i;?>=0;
                                                var palletNoA<?php echo $i;?>=0;
                                                var autoserialA<?php echo $i;?>=0;
                                                getNewStationAssembly();
                                                function getNewStationAssembly(){
                                                    $.ajax({    //create an ajax request to display.php
                                                        type: "GET",
                                                        url: "../data/get-station-assembly-pallet.php?station=<?php echo $i;?>",             
                                                        dataType: "html",   //expect html to be returned                
                                                        success: function(response){ 
                                                        station= JSON.parse(response);
                                                        timeA<?php echo $i;?> = station.timeStamp;    

                                                        if(station<?php echo $i;?> != station.number)
                                                        {
                                                            station<?php echo $i;?> = station.number;
                                                                                                    
                                                            if(station.number != 0){
                                                                if(startTimeA<?php echo $i;?> != 0)
                                                                {
                                                                    var durationA<?php echo $i;?> = (Date.parse(timeA<?php echo $i;?>)-Date.parse(startTimeA<?php echo $i;?>))/1000;
                                                                    saveTactTime1("station","<?php echo $i;?>","assembly",durationA<?php echo $i;?>,palletNoA<?php echo $i;?>,autoserialA<?php echo $i;?>);
                                                                }
                                                                
                                                                startTimeA<?php echo $i;?> = station.timeStamp;
                                                                palletNoA<?php echo $i;?> = station.number;
                                                                autoserialA<?php echo $i;?> = station.autoserial;
                                                                $("#cubeFAssembly<?php echo $i;?>").show();
                                                                $("#cubeFAssembly<?php echo $i;?>").html(station.number);
                                                                $("#cubeBAssembly<?php echo $i;?>").show();
                                                                $("#cubeBAssembly<?php echo $i;?>").html(station.number);
                                                                $("#noBAPallet<?php echo $i;?>").hide();
                                                                $("#noFAPallet<?php echo $i;?>").hide();
                                                                $('.cubeassembly<?php echo $i;?>').toggleClass('show-back');
                                                                // $("#lifter1").show(); 
                                                            }else{
                                                                if(startTimeA<?php echo $i;?> != 0)
                                                                {
                                                                    var durationA<?php echo $i;?> = (Date.parse(timeA<?php echo $i;?>)-Date.parse(startTimeA<?php echo $i;?>))/1000;
                                                                    saveTactTime1("station","<?php echo $i;?>","assembly",durationA<?php echo $i;?>,palletNoA<?php echo $i;?>,autoserialA<?php echo $i;?>);
                                                                }
                                                                
                                                                startTimeA<?php echo $i;?> = station.timeStamp;
                                                                palletNoA<?php echo $i;?> = station.number;
                                                                autoserialA<?php echo $i;?> = station.autoserial;
                                                                $("#cubeFAssembly<?php echo $i;?>").hide();
                                                                $("#noFAPallet<?php echo $i;?>").show();
                                                                $("#noFAPallet<?php echo $i;?>").html("No Pallet");
                                                                $("#cubeBAssembly<?php echo $i;?>").hide();
                                                                $("#noBAPallet<?php echo $i;?>").show();
                                                                $("#noBAPallet<?php echo $i;?>").html("No Pallet");
                                                                $('.cubeassembly<?php echo $i;?>').toggleClass('show-back');
                                                            }
                                                        
                                                        }
                                                        // console.log("station"+station.station);
                                                        
                                                        
                                                    
                                                        },
                                                        complete: function() {
                                                            // Schedule the next request when the current one's complete
                                                            setTimeout(getNewStationAssembly, 300);
                                                        }
                                                    });
                                                }});                   
                                            </script>

                                    <style>
                                        /* * { box-sizing: border-box; } */

                                        /* body { font-family: sans-serif; } */

                                        .sceneassembly<?php echo $i;?> {
                                        width: 100px;
                                        height: 100px;
                                        /* border: 1px solid #CCC; */
                                        margin: 10px;
                                        perspective: 400px;
                                        }

                                        .cubeassembly<?php echo $i;?> {
                                        width: 100px;
                                        height: 100px;
                                        position: relative;
                                        transform-style: preserve-3d;
                                        transform: translateZ(-50px);
                                        transition: transform 2s;
                                        }

                                        .cubeassembly<?php echo $i;?>.show-front  { transform: translateZ(-50px) rotateY(   -180deg); }
                                        .cubeassembly<?php echo $i;?>.show-right  { transform: translateZ(-50px) rotateY( -90deg); }
                                        .cubeassembly<?php echo $i;?>.show-back   { transform: translateZ(-50px) rotateY(180deg); }
                                        .cubeassembly<?php echo $i;?>.show-left   { transform: translateZ(-50px) rotateY(  90deg); }
                                        .cubeassembly<?php echo $i;?>.show-top    { transform: translateZ(-50px) rotateX( -90deg); }
                                        .cubeassembly<?php echo $i;?>.show-bottom { transform: translateZ(-50px) rotateX(  90deg); }

                                        .cubeassembly<?php echo $i;?>__face {
                                        position: absolute;
                                        width: 100px;
                                        height: 100px;
                                        /* border: 5px solid #40CC40; */
                                        border: 0px solid ;
                                        border-radius: 15px;
                                        line-height: 100px;
                                        font-size: 40px;
                                        font-weight: bold;
                                        color: #ffc107;
                                        text-align: center;
                                        }

                                        .cubeassembly<?php echo $i;?>__face--front  { background: (  0, 100%, 50%, 1);background-color: #ffc107; }
                                        .cubeassembly<?php echo $i;?>__face--right  { background: ( 60, 100%, 50%, 1);background-color: #ffc107; }
                                        .cubeassembly<?php echo $i;?>__face--back   { background: (120, 100%, 50%, 1);background-color: #ffc107; }
                                        .cubeassembly<?php echo $i;?>__face--left   { background: (180, 100%, 50%, 1);background-color: #ffc107; }
                                        .cubeassembly<?php echo $i;?>__face--top    { background: (240, 100%, 50%, 1);background-color: #ffc107; }
                                        .cubeassembly<?php echo $i;?>__face--bottom { background: (300, 100%, 50%, 1);background-color: #ffc107; }

                                        .cubeassembly<?php echo $i;?>__face--front  { transform: rotateY(  0deg) translateZ(50px); }
                                        .cubeassembly<?php echo $i;?>__face--right  { transform: rotateY( 90deg) translateZ(50px); }
                                        .cubeassembly<?php echo $i;?>__face--back   { transform: rotateY(180deg) translateZ(50px); }
                                        .cubeassembly<?php echo $i;?>__face--left   { transform: rotateY(-90deg) translateZ(50px); }
                                        .cubeassembly<?php echo $i;?>__face--top    { transform: rotateX( 90deg) translateZ(50px); }
                                        .cubeassembly<?php echo $i;?>__face--bottom { transform: rotateX(-90deg) translateZ(50px); }

                                        /* label { margin-right: 10px; } */
                                        </style>
                                    <div class="col-md-auto" align="center">
                                        <div class="sceneassembly<?php echo $i;?>">
                                            <div class="cubeassembly<?php echo $i;?>">
                                                <div class="cubeassembly<?php echo $i;?>__face cubeassembly<?php echo $i;?>__face--front">
                                                    <div id ="cubeFAssembly<?php echo $i;?>" style="font-family: 'Stencil';color:black; font-size: 30px;font-weight:bold;"></div>
                                                    <div id ="noFAPallet<?php echo $i;?>" style="color:black; font-size: 18px;font-weight:bold;">No Pallet</div>
                                                </div>
                                                <div class="cubeassembly<?php echo $i;?>__face cubeassembly<?php echo $i;?>__face--back">
                                                    <div id ="cubeBAssembly<?php echo $i;?>" style="font-family: 'Stencil';color:black; font-size: 30px;font-weight:bold;"></div>
                                                    <div id ="noBAPallet<?php echo $i;?>" style="color:black; font-size: 18px;font-weight:bold;">No Pallet</div>
                                                </div>
                                                <div class="cubeassembly<?php echo $i;?>__face cubeassembly<?php echo $i;?>__face--right"></div>
                                                <div class="cubeassembly<?php echo $i;?>__face cubeassembly<?php echo $i;?>__face--left"></div>
                                                <div class="cubeassembly<?php echo $i;?>__face cubeassembly<?php echo $i;?>__face--top"></div>
                                                <div class="cubeassembly<?php echo $i;?>__face cubeassembly<?php echo $i;?>__face--bottom"></div>
                                            </div>
                                        </div>
                                        <!-- <br> -->
                                        <h5 style="color:white; font-size: 15px;font-weight:bold;">Station <?php echo $i;?>  &ensp;<i class="fas fa-angle-right"></i></h5>
                                    </div>
                                    <?php endfor;?>

                                    <!-- Lifter 2  -->

                                    <script>
                                    
                                        $(document).ready(function() {    
                                            var lifter02=0;
                                            var startTimeL2=0; 
                                            var durationL2 =0;
                                            var palletNoL2=0;
                                            var autoserialL2=0;             
                                            getNewLifter2();
                                            function getNewLifter2() {
                                                $.ajax({    //create an ajax request to display.php
                                                    type: "GET",
                                                    url: "../data/get-lifter-pallet.php?lifter=2",             
                                                    dataType: "html",   //expect html to be returned                
                                                    success: function(response){ 
                                                    lifter2= JSON.parse(response);
                                                    timeL2 = lifter2.timeStamp;
                                                    // console.log(lifter2);

                                                    if(lifter02 != lifter2.number)
                                                    {
                                                        lifter02 = lifter2.number;

                                                        if(lifter2.number != 0){
                                                            if(startTimeL2 != 0)
                                                            {
                                                                var durationL2 = (Date.parse(timeL2)-Date.parse(startTimeL2))/1000;
                                                                saveTactTime1("lifter","2","assembly",durationL2,palletNoL2,autoserialL2);
                                                            }
                                                            startTimeL2 = lifter2.timeStamp;
                                                            palletNoL2 = lifter2.number;
                                                            autoserialL2 = lifter2.autoserial;
                                                            // console.log("Lifter start time Lifter2 ="+ startTimeL2);
                                                            $("#cubefrontlifter2").show();
                                                            $("#cubefrontlifter2").html(lifter2.number);
                                                            $("#cubebacklifter2").show();
                                                            $("#cubebacklifter2").html(lifter2.number);
                                                            $("#noFPalletL2").hide();
                                                            $("#noBPalletL2").hide();
                                                            $('.cubelifter2').toggleClass('show-back');
                                                            // $("#lifter1").show(); 
                                                        }else{
                                                            if(startTimeL2 != 0)
                                                            {
                                                                var durationL2 = (Date.parse(timeL2)-Date.parse(startTimeL2))/1000;
                                                                saveTactTime1("lifter","2","assembly",durationL2,palletNoL2,autoserialL2);
                                                            }
                                                            startTimeL2 = lifter2.timeStamp;
                                                            palletNoL2 = lifter2.number;
                                                            autoserialL2 = lifter2.autoserial;
                                                            $("#cubefrontlifter2").hide();
                                                            $("#noFPalletL2").show();
                                                            $("#noFPalletL2").html("No Pallet");
                                                            $("#cubebacklifter2").hide();
                                                            $("#noBPalletL2").show();
                                                            $("#noBPalletL2").html("No Pallet");
                                                            $('.cubelifter2').toggleClass('show-back');
                                                        }
                                                    
                                                    }
                                                    // console.log("station"+station.station);



                                                
                                                
                                                    },
                                                    complete: function() {
                                                        // Schedule the next request when the current one's complete
                                                        setTimeout(getNewLifter2, 300);
                                                    }
                                                });
                                            }});
                                                        
                                    </script>

                                    <style>
                                        /* * { box-sizing: border-box; } */

                                        /* body { font-family: sans-serif; } */

                                        .scenelifter2 {
                                        width: 100px;
                                        height: 100px;
                                        /* border: 1px solid #CCC; */
                                        margin: 10px;
                                        perspective: 400px;
                                        }

                                        .cubelifter2 {
                                        width: 100px;
                                        height: 100px;
                                        position: relative;
                                        transform-style: preserve-3d;
                                        transform: translateZ(-50px);
                                        transition: transform 2s;
                                        }

                                        .cubelifter2.show-front  { transform: translateZ(-50px) rotateY(   -180deg); }
                                        .cubelifter2.show-right  { transform: translateZ(-50px) rotateY( -90deg); }
                                        .cubelifter2.show-back   { transform: translateZ(-50px) rotateY(180deg); }
                                        .cubelifter2.show-left   { transform: translateZ(-50px) rotateY(  90deg); }
                                        .cubelifter2.show-top    { transform: translateZ(-50px) rotateX( -90deg); }
                                        .cubelifter2.show-bottom { transform: translateZ(-50px) rotateX(  90deg); }

                                        .cubelifter2__face {
                                        position: absolute;
                                        width: 100px;
                                        height: 100px;
                                        /* border: 5px solid #40CC40; */
                                        border: 0px solid ;
                                        border-radius: 15px;
                                        line-height: 100px;
                                        font-size: 40px;
                                        font-weight: bold;
                                        color: #007bff;
                                        text-align: center;
                                        }

                                        .cubelifter2__face--front  { background: (  0, 100%, 50%, 1);background-color: #007bff; }
                                        .cubelifter2__face--right  { background: ( 60, 100%, 50%, 1);background-color: #007bff; }
                                        .cubelifter2__face--back   { background: (120, 100%, 50%, 1);background-color: #007bff; }
                                        .cubelifter2__face--left   { background: (180, 100%, 50%, 1);background-color: #007bff; }
                                        .cubelifter2__face--top    { background: (240, 100%, 50%, 1);background-color: #007bff; }
                                        .cubelifter2__face--bottom { background: (300, 100%, 50%, 1);background-color: #007bff; }

                                        .cubelifter2__face--front  { transform: rotateY(  0deg) translateZ(50px); }
                                        .cubelifter2__face--right  { transform: rotateY( 90deg) translateZ(50px); }
                                        .cubelifter2__face--back   { transform: rotateY(180deg) translateZ(50px); }
                                        .cubelifter2__face--left   { transform: rotateY(-90deg) translateZ(50px); }
                                        .cubelifter2__face--top    { transform: rotateX( 90deg) translateZ(50px); }
                                        .cubelifter2__face--bottom { transform: rotateX(-90deg) translateZ(50px); }

                                        /* label { margin-right: 10px; } */
                                        </style>
                                    <div class="col-md-auto">
                                        <div class="scenelifter2">
                                            <div class="cubelifter2">
                                                <div class="cubelifter2__face cubelifter2__face--front">
                                                    <div id ="cubefrontlifter2" style="font-family: 'Stencil';color:black; font-size: 30px;font-weight:bold;"></div>
                                                    <div id ="noFPalletL2" style="color:black; font-size: 18px;font-weight:bold;">No Pallet</div>
                                                </div>
                                                <div class="cubelifter2__face cubelifter2__face--back">
                                                    <div id ="cubebacklifter2" style="font-family: 'Stencil';color:black; font-size: 30px;font-weight:bold;"></div>
                                                    <div id ="noBPalletL2" style="color:black; font-size: 18px;font-weight:bold;">No Pallet</div>
                                                </div>
                                                
                                                <div class="cubelifter2__face cubelifter2__face--right"></div>
                                                <div class="cubelifter2__face cubelifter2__face--left"></div>
                                                <div class="cubelifter2__face cubelifter2__face--top"></div>
                                                <div class="cubelifter2__face cubelifter2__face--bottom"></div>
                                            </div>
                                        </div>
                                        <!-- <br> -->
                                        <h5 style="color:white; font-size: 15px;font-weight:bold;padding-left:20px">Lifter 2  &ensp;<i class="fas fa-angle-right"></i></h5>
                                    </div>
                                        
                                </div>

                                <br>
                                <!-- Inspection  -->
                                <ol class="breadcrumb mb-3">
                                    <li class="breadcrumb-item active" align="center" style="color:black; font-size: 20px;font-weight:bold;">Inspection</li>
                                </ol>

                                <div class="row" style="padding-left:30px">
                                    <!-- Lifter 3  -->

                                    <script>
                                    
                                        $(document).ready(function() {    
                                            var lifter03=0;
                                            var startTimeL3=0; 
                                            var durationL3 =0; 
                                            var palletNoL3 = 0;
                                            var autoserialL3= 0;           
                                            getNewLifter3();
                                            function getNewLifter3() {
                                                $.ajax({    //create an ajax request to display.php
                                                    type: "GET",
                                                    url: "../data/get-lifter-pallet.php?lifter=3",             
                                                    dataType: "html",   //expect html to be returned                
                                                    success: function(response){ 
                                                    lifter3= JSON.parse(response);
                                                    timeL3 = lifter3.timeStamp;

                                                    if(lifter03 != lifter3.number)
                                                    {
                                                        lifter03 = lifter3.number;
                                                        if(lifter3.number != 0){
                                                            if(startTimeL3 != 0)
                                                            {
                                                                var durationL3 = (Date.parse(timeL3)-Date.parse(startTimeL3))/1000;
                                                                saveTactTime1("lifter","3","inspection",durationL3,palletNoL3,autoserialL3);
                                                            }
                                                            startTimeL3 = lifter3.timeStamp;
                                                            palletNoL3 = lifter3.number;
                                                            autoserialL3 = lifter3.autoserial;
                                                            $("#cubefrontlifter3").show();
                                                            $("#cubefrontlifter3").html(lifter3.number);
                                                            $("#cubebacklifter3").show();
                                                            $("#cubebacklifter3").html(lifter3.number);
                                                            $("#noFPalletL3").hide();
                                                            $("#noBPalletL3").hide();
                                                            $('.cubelifter3').toggleClass('show-back');
                                                            
                                                        }else{
                                                            if(startTimeL3 != 0)
                                                            {
                                                                var durationL3 = (Date.parse(timeL3)-Date.parse(startTimeL3))/1000;
                                                                saveTactTime1("lifter","3","inspection",durationL3,palletNoL3,autoserialL3);
                                                            }
                                                            startTimeL3 = lifter3.timeStamp;
                                                            palletNoL3 = lifter3.number;
                                                            autoserialL3 = lifter3.autoserial;
                                                            $("#cubefrontlifter3").hide();
                                                            $("#noFPalletL3").show();
                                                            $("#noFPalletL3").html("No Pallet");
                                                            $("#cubebacklifter3").hide();
                                                            $("#noBPalletL3").show();
                                                            $("#noBPalletL3").html("No Pallet");
                                                            $('.cubelifter3').toggleClass('show-back');
                                                        }
                                                    
                                                    }
                                                    // console.log("station"+station.station);



                                                
                                                
                                                    },
                                                    complete: function() {
                                                        // Schedule the next request when the current one's complete
                                                        setTimeout(getNewLifter3, 300);
                                                    }
                                                });
                                            }});
                                                        
                                    </script>

                                    <style>
                                        /* * { box-sizing: border-box; } */

                                        /* body { font-family: sans-serif; } */

                                        .scenelifter3 {
                                        width: 100px;
                                        height: 100px;
                                        /* border: 1px solid #CCC; */
                                        margin: 10px;
                                        perspective: 400px;
                                        }

                                        .cubelifter3 {
                                        width: 100px;
                                        height: 100px;
                                        position: relative;
                                        transform-style: preserve-3d;
                                        transform: translateZ(-50px);
                                        transition: transform 2s;
                                        }

                                        .cubelifter3.show-front  { transform: translateZ(-50px) rotateY(   -180deg); }
                                        .cubelifter3.show-right  { transform: translateZ(-50px) rotateY( -90deg); }
                                        .cubelifter3.show-back   { transform: translateZ(-50px) rotateY(180deg); }
                                        .cubelifter3.show-left   { transform: translateZ(-50px) rotateY(  90deg); }
                                        .cubelifter3.show-top    { transform: translateZ(-50px) rotateX( -90deg); }
                                        .cubelifter3.show-bottom { transform: translateZ(-50px) rotateX(  90deg); }

                                        .cubelifter3__face {
                                        position: absolute;
                                        width: 100px;
                                        height: 100px;
                                        /* border: 5px solid #40CC40; */
                                        border: 0px solid ;
                                        border-radius: 15px;
                                        line-height: 100px;
                                        font-size: 40px;
                                        font-weight: bold;
                                        color: #f8f7eb;
                                        text-align: center;
                                        }

                                        .cubelifter3__face--front  { background: (  0, 100%, 50%, 1);background-color: #f8f7eb; }
                                        .cubelifter3__face--right  { background: ( 60, 100%, 50%, 1);background-color: #f8f7eb; }
                                        .cubelifter3__face--back   { background: (120, 100%, 50%, 1);background-color: #f8f7eb; }
                                        .cubelifter3__face--left   { background: (180, 100%, 50%, 1);background-color: #f8f7eb; }
                                        .cubelifter3__face--top    { background: (240, 100%, 50%, 1);background-color: #f8f7eb; }
                                        .cubelifter3__face--bottom { background: (300, 100%, 50%, 1);background-color: #f8f7eb; }

                                        .cubelifter3__face--front  { transform: rotateY(  0deg) translateZ(50px); }
                                        .cubelifter3__face--right  { transform: rotateY( 90deg) translateZ(50px); }
                                        .cubelifter3__face--back   { transform: rotateY(180deg) translateZ(50px); }
                                        .cubelifter3__face--left   { transform: rotateY(-90deg) translateZ(50px); }
                                        .cubelifter3__face--top    { transform: rotateX( 90deg) translateZ(50px); }
                                        .cubelifter3__face--bottom { transform: rotateX(-90deg) translateZ(50px); }

                                        /* label { margin-right: 10px; } */
                                        </style>
                                    <div class="col-md-auto">
                                        <div class="scenelifter3">
                                            <div class="cubelifter3">
                                                <div class="cubelifter3__face cubelifter3__face--front">
                                                    <div id ="cubefrontlifter3" style="font-family: 'Stencil';color:black; font-size: 30px;font-weight:bold;"></div>
                                                    <div id ="noFPalletL3" style="color:black; font-size: 18px;font-weight:bold;">No Pallet</div>
                                                </div>
                                                <div class="cubelifter3__face cubelifter3__face--back">
                                                    <div id ="cubebacklifter3" style="font-family: 'Stencil';color:black; font-size: 40px;font-weight:bold;"></div>
                                                    <div id ="noBPalletL3" style="color:black; font-size: 18px;font-weight:bold;">No Pallet</div>
                                                </div>
                                                <div class="cubelifter3__face cubelifter3__face--right"></div>
                                                <div class="cubelifter3__face cubelifter3__face--left"></div>
                                                <div class="cubelifter3__face cubelifter3__face--top"></div>
                                                <div class="cubelifter3__face cubelifter3__face--bottom"></div>
                                            </div>
                                        </div>
                                        <!-- <br> -->
                                        <h5 style="color:white; font-size: 15px;font-weight:bold;padding-left:20px">Lifter 3  &ensp;<i class="fas fa-angle-right"></i></h5>
                                    </div>

                                    <!-- Inspection station  -->
                                    <?php for($i=1;$i<=18;$i++):?>

                                        <script>
                                        $(document).ready(function() {
                                            var stationInspection<?php echo $i;?> = 0; 
                                            var startTimeI<?php echo $i;?>=0; 
                                            var durationI<?php echo $i;?>=0;    
                                            var palletNoI<?php echo $i;?>= 0;
                                            var autoserialI<?php echo $i;?>=0;                   
                                            getNewStationInspection();
                                            function getNewStationInspection(){
                                                $.ajax({    //create an ajax request to display.php
                                                    type: "GET",
                                                    url: "../data/get-station-inspection-pallet.php?station=<?php echo $i;?>",             
                                                    dataType: "html",   //expect html to be returned                
                                                    success: function(response){ 
                                                    station= JSON.parse(response);
                                                    timeI<?php echo $i;?> = station.timeStamp;

                                                    if(stationInspection<?php echo $i;?> != station.number)
                                                    {
                                                        stationInspection<?php echo $i;?> = station.number;                                               
                                                        
                                                        if(station.number != 0){

                                                            if(startTimeI<?php echo $i;?> != 0)
                                                            {
                                                                var durationI<?php echo $i;?> = (Date.parse(timeI<?php echo $i;?>)-Date.parse(startTimeI<?php echo $i;?>))/1000;
                                                                saveTactTime1("station","<?php echo $i;?>","inspection",durationI<?php echo $i;?>,palletNoI<?php echo $i;?>,autoserialI<?php echo $i;?>);
                                                            }
                                                            
                                                            startTimeI<?php echo $i;?> = station.timeStamp;
                                                            palletNoI<?php echo $i;?> = station.number;
                                                            autoserialI<?php echo $i;?> = station.autoserial;
                                                            $("#cubeFInspection<?php echo $i;?>").show();
                                                            $("#cubeFInspection<?php echo $i;?>").html(station.number);
                                                            $("#noFIPallet<?php echo $i;?>").hide();
                                                            $("#cubeBInspection<?php echo $i;?>").show();
                                                            $("#cubeBInspection<?php echo $i;?>").html(station.number);
                                                            $("#noBIPallet<?php echo $i;?>").hide();
                                                            $('.cubeinspection<?php echo $i;?>').toggleClass('show-back');
                                                            // $("#lifter1").show(); 
                                                        }else{

                                                            if(startTimeI<?php echo $i;?> != 0)
                                                            {
                                                                var durationI<?php echo $i;?> = (Date.parse(timeI<?php echo $i;?>)-Date.parse(startTimeI<?php echo $i;?>))/1000;
                                                                saveTactTime1("station","<?php echo $i;?>","inspection",durationI<?php echo $i;?>,palletNoI<?php echo $i;?>,autoserialI<?php echo $i;?>);
                                                            }
                                                            
                                                            startTimeI<?php echo $i;?> = station.timeStamp;
                                                            palletNoI<?php echo $i;?> = station.number;
                                                            autoserialI<?php echo $i;?> = station.autoserial;

                                                            $("#cubeFInspection<?php echo $i;?>").hide();
                                                            $("#noFIPallet<?php echo $i;?>").show();
                                                            $("#noFIPallet<?php echo $i;?>").html("No Pallet");
                                                            $("#cubeBInspection<?php echo $i;?>").hide();
                                                            $("#noBIPallet<?php echo $i;?>").show();
                                                            $("#noBIPallet<?php echo $i;?>").html("No Pallet");
                                                            $('.cubeinspection<?php echo $i;?>').toggleClass('show-back');
                                                        }
                                                    
                                                    }
                                                    // console.log("station"+station.station);
                                                    
                                                    
                                                
                                                    },
                                                    complete: function() {
                                                        // Schedule the next request when the current one's complete
                                                        setTimeout(getNewStationInspection, 300);
                                                    }
                                                });
                                            }});                   
                                        </script>

                                        <style>
                                        /* * { box-sizing: border-box; } */

                                        /* body { font-family: sans-serif; } */

                                        .sceneinspection<?php echo $i;?> {
                                        width: 100px;
                                        height: 100px;
                                        /* border: 1px solid #CCC; */
                                        margin: 10px;
                                        perspective: 400px;
                                        }

                                        .cubeinspection<?php echo $i;?> {
                                        width: 100px;
                                        height: 100px;
                                        position: relative;
                                        transform-style: preserve-3d;
                                        transform: translateZ(-50px);
                                        transition: transform 2s;
                                        }

                                        .cubeinspection<?php echo $i;?>.show-front  { transform: translateZ(-50px) rotateY(   -180deg); }
                                        .cubeinspection<?php echo $i;?>.show-right  { transform: translateZ(-50px) rotateY( -90deg); }
                                        .cubeinspection<?php echo $i;?>.show-back   { transform: translateZ(-50px) rotateY(180deg); }
                                        .cubeinspection<?php echo $i;?>.show-left   { transform: translateZ(-50px) rotateY(  90deg); }
                                        .cubeinspection<?php echo $i;?>.show-top    { transform: translateZ(-50px) rotateX( -90deg); }
                                        .cubeinspection<?php echo $i;?>.show-bottom { transform: translateZ(-50px) rotateX(  90deg); }

                                        .cubeinspection<?php echo $i;?>__face {
                                        position: absolute;
                                        width: 100px;
                                        height: 100px;
                                        /* border: 5px solid #40CC40; */
                                        border: 0px solid ;
                                        border-radius: 15px;
                                        line-height: 100px;
                                        font-size: 40px;
                                        font-weight: bold;
                                        color: #64e000;
                                        text-align: center;
                                        }

                                        .cubeinspection<?php echo $i;?>__face--front  { background: (  0, 100%, 50%, 1);background-color: #64e000; }
                                        .cubeinspection<?php echo $i;?>__face--right  { background: ( 60, 100%, 50%, 1);background-color: #64e000; }
                                        .cubeinspection<?php echo $i;?>__face--back   { background: (120, 100%, 50%, 1);background-color: #64e000; }
                                        .cubeinspection<?php echo $i;?>__face--left   { background: (180, 100%, 50%, 1);background-color: #64e000; }
                                        .cubeinspection<?php echo $i;?>__face--top    { background: (240, 100%, 50%, 1);background-color: #64e000; }
                                        .cubeinspection<?php echo $i;?>__face--bottom { background: (300, 100%, 50%, 1);background-color: #64e000; }

                                        .cubeinspection<?php echo $i;?>__face--front  { transform: rotateY(  0deg) translateZ(50px); }
                                        .cubeinspection<?php echo $i;?>__face--right  { transform: rotateY( 90deg) translateZ(50px); }
                                        .cubeinspection<?php echo $i;?>__face--back   { transform: rotateY(180deg) translateZ(50px); }
                                        .cubeinspection<?php echo $i;?>__face--left   { transform: rotateY(-90deg) translateZ(50px); }
                                        .cubeinspection<?php echo $i;?>__face--top    { transform: rotateX( 90deg) translateZ(50px); }
                                        .cubeinspection<?php echo $i;?>__face--bottom { transform: rotateX(-90deg) translateZ(50px); }

                                        /* label { margin-right: 10px; } */
                                        </style>
                                        <div class="col-md-auto" align="center">
                                        <div class="sceneinspection<?php echo $i;?>">
                                        <div class="cubeinspection<?php echo $i;?>">
                                            <div class="cubeinspection<?php echo $i;?>__face cubeinspection<?php echo $i;?>__face--front">
                                                <div id ="cubeFInspection<?php echo $i;?>" style="font-family: 'Stencil';color:black; font-size: 30px;font-weight:bold;"></div>
                                                <div id ="noFIPallet<?php echo $i;?>" style="color:black; font-size: 18px;font-weight:bold;">No Pallet</div>
                                            </div>
                                            <div class="cubeinspection<?php echo $i;?>__face cubeinspection<?php echo $i;?>__face--back">
                                                <div id ="cubeBInspection<?php echo $i;?>" style="font-family: 'Stencil';color:black; font-size: 30px;font-weight:bold;"></div>
                                                <div id ="noBIPallet<?php echo $i;?>" style="color:black; font-size: 18px;font-weight:bold;">No Pallet</div>
                                            </div>
                                            <div class="cubeinspection<?php echo $i;?>__face cubeinspection<?php echo $i;?>__face--right"></div>
                                            <div class="cubeinspection<?php echo $i;?>__face cubeinspection<?php echo $i;?>__face--left"></div>
                                            <div class="cubeinspection<?php echo $i;?>__face cubeinspection<?php echo $i;?>__face--top"></div>
                                            <div class="cubeinspection<?php echo $i;?>__face cubeinspection<?php echo $i;?>__face--bottom"></div>
                                        </div>
                                        </div>
                                        <!-- <br> -->
                                        <h5 style="color:white; font-size: 15px;font-weight:bold;">Station <?php echo $i;?>  &ensp;<i class="fas fa-angle-right"></i></h5>
                                        </div>
                                        <?php endfor;?>

                                        <!-- Lifter 4  -->

                                    <script>
                                    
                                    $(document).ready(function() {    
                                        var lifter04=0;
                                        var startTimeL4=0; 
                                        var durationL4 =0;
                                        var palletNoL4 = 0;
                                        var autoserialL4 =0;            
                                        getNewLifter4();
                                        function getNewLifter4() {
                                            $.ajax({    //create an ajax request to display.php
                                                type: "GET",
                                                url: "../data/get-lifter-pallet.php?lifter=4",             
                                                dataType: "html",   //expect html to be returned                
                                                success: function(response){ 
                                                lifter4= JSON.parse(response);
                                                // console.log(lifter2);
                                                timeL4 = lifter4.timeStamp;

                                                if(lifter04 != lifter4.number)
                                                {
                                                    lifter04 = lifter4.number;
                                                    if(lifter4.number != 0){
                                                        
                                                        if(startTimeL4 != 0)
                                                        {
                                                            var durationL4 = (Date.parse(timeL4)-Date.parse(startTimeL4))/1000;
                                                            saveTactTime1("lifter","4","inspection",durationL4,palletNoL4,autoserialL4);
                                                        }
                                                        
                                                        startTimeL4 = lifter4.timeStamp;
                                                        palletNoL4 = lifter4.number;
                                                        autoserialL4 = lifter4.autoserial;
                                                        $("#cubefrontlifter4").show();
                                                        $("#cubefrontlifter4").html(lifter4.number);
                                                        $("#cubebacklifter4").show();
                                                        $("#cubebacklifter4").html(lifter4.number);
                                                        $("#noFPalletL4").hide();
                                                        $("#noBPalletL4").hide();
                                                        $('.cubelifter4').toggleClass('show-back');
                                                        // $("#lifter1").show(); 
                                                    }else{


                                                        if(startTimeL4 != 0)
                                                        {
                                                            var durationL4 = (Date.parse(timeL4)-Date.parse(startTimeL4))/1000;
                                                            saveTactTime1("lifter","4","inspection",durationL4,palletNoL4,autoserialL4);
                                                        }
                                                        startTimeL4 = lifter4.timeStamp;
                                                        palletNoL4 = lifter4.number;
                                                        autoserialL4 = lifter4.autoserial;
                                                        $("#cubefrontlifter4").hide();
                                                        $("#noFPalletL4").show();
                                                        $("#noFPalletL4").html("No Pallet");
                                                        $("#cubebacklifter4").hide();
                                                        $("#noBPalletL4").show();
                                                        $("#noBPalletL4").html("No Pallet");
                                                        $('.cubelifter4').toggleClass('show-back');
                                                    }
                                                
                                                }
                                                // console.log("station"+station.station);



                                            
                                            
                                                },
                                                complete: function() {
                                                    // Schedule the next request when the current one's complete
                                                    setTimeout(getNewLifter4, 300);
                                                }
                                            });
                                        }});
                                                    
                                </script>

                                <style>
                                    /* * { box-sizing: border-box; } */

                                    /* body { font-family: sans-serif; } */

                                    .scenelifter4 {
                                    width: 100px;
                                    height: 100px;
                                    /* border: 1px solid #CCC; */
                                    margin: 10px;
                                    perspective: 400px;
                                    }

                                    .cubelifter4 {
                                    width: 100px;
                                    height: 100px;
                                    position: relative;
                                    transform-style: preserve-3d;
                                    transform: translateZ(-50px);
                                    transition: transform 2s;
                                    }

                                    .cubelifter4.show-front  { transform: translateZ(-50px) rotateY(   -180deg); }
                                    .cubelifter4.show-right  { transform: translateZ(-50px) rotateY( -90deg); }
                                    .cubelifter4.show-back   { transform: translateZ(-50px) rotateY(180deg); }
                                    .cubelifter4.show-left   { transform: translateZ(-50px) rotateY(  90deg); }
                                    .cubelifter4.show-top    { transform: translateZ(-50px) rotateX( -90deg); }
                                    .cubelifter4.show-bottom { transform: translateZ(-50px) rotateX(  90deg); }

                                    .cubelifter4__face {
                                    position: absolute;
                                    width: 100px;
                                    height: 100px;
                                    /* border: 5px solid #40CC40; */
                                    border: 0px solid ;
                                    border-radius: 15px;
                                    line-height: 100px;
                                    font-size: 40px;
                                    font-weight: bold;
                                    color: #f8f7eb;
                                    text-align: center;
                                    }

                                    .cubelifter4__face--front  { background: (  0, 100%, 50%, 1);background-color: #f8f7eb; }
                                    .cubelifter4__face--right  { background: ( 60, 100%, 50%, 1);background-color: #f8f7eb; }
                                    .cubelifter4__face--back   { background: (120, 100%, 50%, 1);background-color: #f8f7eb; }
                                    .cubelifter4__face--left   { background: (180, 100%, 50%, 1);background-color: #f8f7eb; }
                                    .cubelifter4__face--top    { background: (240, 100%, 50%, 1);background-color: #f8f7eb; }
                                    .cubelifter4__face--bottom { background: (300, 100%, 50%, 1);background-color: #f8f7eb; }

                                    .cubelifter4__face--front  { transform: rotateY(  0deg) translateZ(50px); }
                                    .cubelifter4__face--right  { transform: rotateY( 90deg) translateZ(50px); }
                                    .cubelifter4__face--back   { transform: rotateY(180deg) translateZ(50px); }
                                    .cubelifter4__face--left   { transform: rotateY(-90deg) translateZ(50px); }
                                    .cubelifter4__face--top    { transform: rotateX( 90deg) translateZ(50px); }
                                    .cubelifter4__face--bottom { transform: rotateX(-90deg) translateZ(50px); }

                                    /* label { margin-right: 10px; } */
                                    </style>
                                <div class="col-md-auto" align="center">
                                    <div class="scenelifter4">
                                        <div class="cubelifter4">
                                            <div class="cubelifter4__face cubelifter4__face--front">
                                                <div id ="cubefrontlifter4" style="font-family: 'Stencil';color:black; font-size: 30px;font-weight:bold;"></div>
                                                <div id ="noFPalletL4" style="color:black; font-size: 18px;font-weight:bold;">No Pallet</div>
                                            </div>
                                            <div class="cubelifter4__face cubelifter4__face--back">
                                                <div id ="cubebacklifter4" style="font-family: 'Stencil';color:black; font-size: 30px;font-weight:bold;"></div>
                                                <div id ="noBPalletL4" style="color:black; font-size: 18px;font-weight:bold;">No Pallet</div>
                                            </div>
                                            <div class="cubelifter4__face cubelifter4__face--right"></div>
                                            <div class="cubelifter4__face cubelifter4__face--left"></div>
                                            <div class="cubelifter4__face cubelifter4__face--top"></div>
                                            <div class="cubelifter4__face cubelifter4__face--bottom"></div>
                                        </div>
                                    </div>
                                    <!-- <br> -->
                                    <h5 style="color:white; font-size: 15px;font-weight:bold;">Lifter 4  &ensp;<i class="fas fa-angle-right"></i></h5>
                                </div>

                                    
                            </div>
                            </div>
                            <!-- End of Pallet Monitoring -->

                            <div class="col-4">
                            <!-- Start Tact Time Real time Value -->

                                <div class="col-12" align="center">
                                <div class="row">
                                        <script>
                                            var lineStatus;     
                                            $(document).ready(function() {                                                     
                                                getLineStatus();
                                                function getLineStatus() {
                                                    $.ajax({    //create an ajax request to display.php
                                                        type: "GET",
                                                        url: "../data/get-line-status.php",             
                                                        dataType: "html",   //expect html to be returned                
                                                        success: function(response){ 
                                                        line= JSON.parse(response);
                                                        lineStatus = line.status;
                                                        // console.log(line.target);
                                                        
                                                        $("#target").html(line.target);
                                                        $("#actual").html(line.actual);
                                                        if(line.different < 0){
                                                            $("#differentOver").hide();
                                                            $("#differentLess").html(line.different);
                                                            $("#differentLess").show();
                                                            $("#differentZero").hide();
                                                        }
                                                        if(line.different > 0){
                                                            $("#differentOver").html(line.different);
                                                            $("#differentOver").show();
                                                            $("#differentLess").hide();
                                                            $("#differentZero").hide();
                                                        }
                                                        if(line.different == 0){
                                                            $("#differentZero").html(line.different);
                                                            $("#differentZero").show();
                                                            $("#differentLess").hide();
                                                            $("#differentOver").hide();
                                                        }

                                                        

                                                        if(line.status=="linestop"){
                                                            $("#statusStop").html("STOP");
                                                            $("#statusStop").show();
                                                            $("#statusBreak").hide();
                                                            $("#statusEnd").hide();
                                                            $("#statusOnline").hide();
                                                        }
                                                        if(line.status=="breaktime"){
                                                            $("#statusBreak").html("BREAK");
                                                            $("#statusBreak").show();
                                                            $("#statusStop").hide();
                                                            $("#statusEnd").hide();
                                                            $("#statusOnline").hide();
                                                        }
                                                        if(line.status=="end" || line.status =="offline"){
                                                            if(line.status=="end")
                                                                $("#statusEnd").html("END");
                                                            else
                                                                $("#statusEnd").html("OFFLINE");
                                                            $("#statusEnd").show();
                                                            $("#statusStop").hide();
                                                            $("#statusBreak").hide();
                                                            $("#statusOnline").hide();
                                                        }
                                                        if(line.status=="online"){
                                                            $("#statusOnline").html("ONLINE");
                                                            $("#statusOnline").show();
                                                            $("#statusStop").hide();
                                                            $("#statusBreak").hide();
                                                            $("#statusEnd").hide();
                                                        }
                                                        // $("#status").html(line.status);                                           
                                                    
                                                        },
                                                        complete: function() {
                                                            // Schedule the next request when the current one's complete
                                                            setTimeout(getLineStatus, 1000);
                                                        }
                                                    });
                                                }});                    
                                        </script>
                                        <div class="col-3" align="center">
                                            
                                                <h1 class="mt-4" align="center" style="color:white; font-size: 25px;font-weight:bold;">Target </h1>
                                                <div id ="target" class="col-6" style="color:white; font-size: 25px;font-weight:bold;"></div>
                                            
                                        </div>

                                        <div class="col-3" align="center">
                                            
                                                <h1 class="mt-4" align="center" style="color:white; font-size: 25px;font-weight:bold;">Actual </h1>
                                                <div id ="actual" class="col-6" style="color:white; font-size: 25px;font-weight:bold;"></div>
                                            
                                        </div>

                                        <div class="col-3" align="center">
                                            
                                                <h1 class="mt-4" align="center" style="color:white; font-size: 25px;font-weight:bold;">Different </h1>
                                                <div id ="differentOver" class="col-6" style="color:#33ccff; font-size: 25px;font-weight:bold;"></div>
                                                <div id ="differentLess" class="col-6" style="color:red; font-size: 25px;font-weight:bold;"></div>
                                                <div id ="differentZero" class="col-6" style="color:white; font-size: 25px;font-weight:bold;"></div>
                                            
                                        </div>

                                        <div class="col-3" align="center">
                                                    <style>
                                                    .blinkingStop{
                                                            animation:blinkingTextStop 2.2s infinite;
                                                        }
                                                        @keyframes blinkingTextStop{
                                                            0%{     color: red;    }
                                                            49%{    color: red; }
                                                            60%{    color: transparent; }
                                                            99%{    color:transparent;  }
                                                            100%{   color: red;    }
                                                        }

                                                        .blinkingBreak{
                                                            animation:blinkingTextBreak 2.2s infinite;
                                                        }
                                                        @keyframes blinkingTextBreak{
                                                            0%{     color: #f2ff07;    }
                                                            49%{    color: #f2ff07; }
                                                            60%{    color: transparent; }
                                                            99%{    color:transparent;  }
                                                            100%{   color: #f2ff07;    }
                                                        }
                                                        </style>
                                            
                                                <h1 class="mt-4" align="center" style="color:white; font-size: 25px;font-weight:bold;">Status </h1>
                                                <div id ="statusStop" class="blinkingStop" style=" font-size: 25px;font-weight:bold;"></div>
                                                <div id ="statusBreak" class="blinkingBreak" style=" font-size: 25px;font-weight:bold;"></div>
                                                <div id ="statusOnline" style="color:green; font-size: 25px;font-weight:bold;"></div>
                                                <div id ="statusEnd" style="color:grey; font-size: 25px;font-weight:bold;"></div>
                                            
                                        </div>

                                </div>
                                </div>

                                <div class="col-12" align="center">                                           
                                    <h1 class="mt-4" align="center" style="color:white; font-size: 25px;font-weight:bold;">Tact Time </h1>                                            
                                </div>
                                
                                <div class="row">

                                    <div class="col-4">
                                    
                                        <ol class="breadcrumb mb-3">
                                            <li class="breadcrumb-item active" align="center" style="color:black; font-size: 18px;font-weight:bold;">Assembly</li>
                                        </ol>
                                        <div class="row" >
                                            <div class="col-7">
                                                <h1  style="color:white; font-size: 13px;font-weight:bold;">Lifter/Station</h1>
                                            </div>
                                            <div class="col-5" align="center">
                                                <div style="color:white; font-size: 13px;font-weight:bold;">Time(s)</div>
                                            </div>   
                                        </div>
                                        <br>
                                    
                                        <!-- Lifter1 tact time -->
                                        <script>
                                            var lineStatus;     
                                            $(document).ready(function() {                                                     
                                                getTactTimeLifter1();
                                                getTactTimeLifter2();
                                                getTactTimeLifter3();
                                                getTactTimeLifter4();
                                                function getTactTimeLifter1() {
                                                    $.ajax({    //create an ajax request to display.php
                                                        type: "GET",
                                                        url: "../data/get-tact-time.php?type=lifter&category=assembly&number=1",             
                                                        dataType: "html",   //expect html to be returned                
                                                        success: function(response){ 
                                                        tacttimeL1= JSON.parse(response);
                                                        valueL1 = tacttimeL1.value;
                                                        // console.log(value);
                                                        // console.log(line.target);
                                                        
                                                        $("#tactTimeLifter1").html(valueL1);
                                                        
                                                        },
                                                        complete: function() {
                                                            // Schedule the next request when the current one's complete
                                                            setTimeout(getTactTimeLifter1, 1000);
                                                        }
                                                    });
                                                }

                                                function getTactTimeLifter2() {
                                                    $.ajax({    //create an ajax request to display.php
                                                        type: "GET",
                                                        url: "../data/get-tact-time.php?type=lifter&category=assembly&number=2",             
                                                        dataType: "html",   //expect html to be returned                
                                                        success: function(response){ 
                                                        tacttimeL2= JSON.parse(response);
                                                        valueL2 = tacttimeL2.value;
                                                        // console.log(value);
                                                        // console.log(line.target);
                                                        
                                                        $("#tactTimeLifter2").html(valueL2);
                                                        
                                                        },
                                                        complete: function() {
                                                            // Schedule the next request when the current one's complete
                                                            setTimeout(getTactTimeLifter2, 1000);
                                                        }
                                                    });
                                                }

                                                function getTactTimeLifter3() {
                                                    $.ajax({    //create an ajax request to display.php
                                                        type: "GET",
                                                        url: "../data/get-tact-time.php?type=lifter&category=inspection&number=3",             
                                                        dataType: "html",   //expect html to be returned                
                                                        success: function(response){ 
                                                        tacttimeL3= JSON.parse(response);
                                                        valueL3 = tacttimeL3.value;
                                                        // console.log(value);
                                                        // console.log(line.target);
                                                        
                                                        $("#tactTimeLifter3").html(valueL3);
                                                        
                                                        },
                                                        complete: function() {
                                                            // Schedule the next request when the current one's complete
                                                            setTimeout(getTactTimeLifter3, 1000);
                                                        }
                                                    });
                                                }

                                                function getTactTimeLifter4() {
                                                    $.ajax({    //create an ajax request to display.php
                                                        type: "GET",
                                                        url: "../data/get-tact-time.php?type=lifter&category=inspection&number=4",             
                                                        dataType: "html",   //expect html to be returned                
                                                        success: function(response){ 
                                                        tacttimeL4= JSON.parse(response);
                                                        valueL4 = tacttimeL4.value;
                                                        // console.log(value);
                                                        // console.log(line.target);
                                                        
                                                        $("#tactTimeLifter4").html(valueL4);
                                                        
                                                        },
                                                        complete: function() {
                                                            // Schedule the next request when the current one's complete
                                                            setTimeout(getTactTimeLifter4, 1000);
                                                        }
                                                    });
                                                }


                                                
                                                });  
                                                                  
                                        </script>


                                        <div class="row" >
                                            <div class="col-7">
                                                <h1  style="color:#007bff; font-size: 15px;font-weight:bold;">Lifter 1 </h1>
                                            </div>
                                            <div class="col-5" align="center">
                                                <div id ="tactTimeLifter1" class="col-4" style="color:#007bff; font-size: 15px;font-weight:bold;"></div>
                                            </div>   
                                        </div>
                                        <?php for($i=1;$i<=10;$i++):?>
                                            <script>    
                                            $(document).ready(function() {                                                     
                                                getTactTimeAStation<?php echo $i;?>();
                                                function getTactTimeAStation<?php echo $i;?>() {
                                                    $.ajax({    //create an ajax request to display.php
                                                        type: "GET",
                                                        url: "../data/get-tact-time.php?type=station&category=assembly&number=<?php echo $i;?>",             
                                                        dataType: "html",   //expect html to be returned                
                                                        success: function(response){ 
                                                        tacttimeAStation<?php echo $i;?>= JSON.parse(response);
                                                        valueAS<?php echo $i;?> = tacttimeAStation<?php echo $i;?>.value;
                                                        // console.log(value);
                                                        // console.log(line.target);
                                                        
                                                        $("#tactTimeAStation<?php echo $i;?>").html(valueAS<?php echo $i;?>);
                                                        
                                                        },
                                                        complete: function() {
                                                            // Schedule the next request when the current one's complete
                                                            setTimeout(getTactTimeAStation<?php echo $i;?>, 1000);
                                                        }
                                                    });
                                                }
                                                
                                                });                    
                                        </script>
                                        <div class="row" >
                                            <div class="col-7">
                                                <h1  style="color:#ffc107; font-size: 15px;font-weight:bold;">Station <?php echo $i;?> </h1>
                                            </div>
                                            <div class="col-5" align="center">
                                                <div id ="tactTimeAStation<?php echo $i;?>" class="col-4" style="color:#ffc107; font-size: 15px;font-weight:bold;"></div>
                                            </div>   
                                        </div>

                                        <?php endfor;?>
                                        <div class="row" >
                                            <div class="col-7">
                                                <h1  style="color:#007bff; font-size: 15px;font-weight:bold;">Lifter 2 </h1>
                                            </div>
                                            <div class="col-5" align="center">
                                                <div id ="tactTimeLifter2" class="col-4" style="color:#007bff; font-size: 15px;font-weight:bold;"></div>
                                            </div>   
                                        </div>

                                    </div>

                                    <div class="col-4">
                                        <ol class="breadcrumb mb-3">
                                            <li class="breadcrumb-item active" align="center" style="color:black; font-size: 18px;font-weight:bold;">Inspection</li>
                                        </ol>

                                            <div class="row">
                                                <div class="col-7">
                                                    <h1  style="color:white; font-size: 13px;font-weight:bold;">Lifter/Station</h1>
                                                </div>
                                                <div class="col-5" align="center">
                                                    <div style="color:white; font-size: 13px;font-weight:bold;">Time(s)</div>
                                                </div> 
                                            </div> 
                                            <br>
                                            <div class="row" >
                                                <div class="col-7">
                                                    <h1  style="color:#f8f7eb; font-size: 15px;font-weight:bold;">Lifter 3 </h1>
                                                </div>
                                                <div class="col-5" align="center">
                                                    <div id ="tactTimeLifter3" class="col-4" style="color:#f8f7eb; font-size: 15px;font-weight:bold;"></div>
                                                </div>   
                                            </div> 

                                            <?php for($i=1;$i<=18;$i++):?>
                                            <script>    
                                            $(document).ready(function() {                                                     
                                                getTactTimeIStation<?php echo $i;?>();
                                                function getTactTimeIStation<?php echo $i;?>() {
                                                    $.ajax({    //create an ajax request to display.php
                                                        type: "GET",
                                                        url: "../data/get-tact-time.php?type=station&category=inspection&number=<?php echo $i;?>",             
                                                        dataType: "html",   //expect html to be returned                
                                                        success: function(response){ 
                                                        tacttimeIStation<?php echo $i;?>= JSON.parse(response);
                                                        valueIS<?php echo $i;?> = tacttimeIStation<?php echo $i;?>.value;
                                                        // console.log(value);
                                                        // console.log(line.target);
                                                        
                                                        $("#tactTimeIStation<?php echo $i;?>").html(valueIS<?php echo $i;?>);
                                                        
                                                        },
                                                        complete: function() {
                                                            // Schedule the next request when the current one's complete
                                                            setTimeout(getTactTimeIStation<?php echo $i;?>, 1000);
                                                        }
                                                    });
                                                }
                                                
                                                });                    
                                            </script>
                                            <?php endfor;?>
                                            
                                            <?php for($i=1;$i<=11;$i++):?>
                                            <div class="row" >
                                            <div class="col-7">
                                                <h1  style="color:#64e000; font-size: 15px;font-weight:bold;">Station <?php echo $i;?> </h1>
                                            </div>
                                            <div class="col-5" align="center">
                                                <div id ="tactTimeIStation<?php echo $i;?>" class="col-4" style="color:#64e000; font-size: 15px;font-weight:bold;"></div>
                                            </div>   
                                            </div>

                                            <?php endfor;?>    
                                    </div>

                                    <div class="col-4">
                                        <ol class="breadcrumb mb-3">
                                            <li class="breadcrumb-item active" align="center" style="color:black; font-size: 18px;font-weight:bold;">Inspection</li>
                                        </ol>

                                            <div class="row">
                                                <div class="col-7">
                                                    <h1  style="color:white; font-size: 13px;font-weight:bold;">Lifter/Station</h1>
                                                </div>
                                                <div class="col-5" align="center">
                                                    <div style="color:white; font-size: 13px;font-weight:bold;">Time(s)</div>
                                                </div> 
                                            </div> 
                                            <br>

                                            <?php for($i=12;$i<=18;$i++):?>
                                            <div class="row" >
                                            <div class="col-7">
                                                <h1  style="color:#64e000; font-size: 15px;font-weight:bold;">Station <?php echo $i;?> </h1>
                                            </div>
                                            <div class="col-5" align="center">
                                                <div id ="tactTimeIStation<?php echo $i;?>" class="col-4" style="color:#64e000; font-size: 15px;font-weight:bold;"></div>
                                            </div>   
                                            </div>

                                            <?php endfor;?>

                                            <div class="row" >
                                                <div class="col-7">
                                                    <h1  style="color:#f8f7eb; font-size: 15px;font-weight:bold;">Lifter 4 </h1>
                                                </div>
                                                <div class="col-5" align="center">
                                                    <div id ="tactTimeLifter4" class="col-4" style="color:#f8f7eb; font-size: 15px;font-weight:bold;"></div>
                                                </div>   
                                            </div>  
                                    </div>                                   

                                </div>

                                <div class="col-12" >                                   

                                    <div class="row-12" style="padding-left:-30px;padding-right:10px">
                                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-pause="none" data-ride="carousel" data-interval="15000" style="border-color: transparent;">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <!-- <img class="d-block w-100" src="..." alt="First slide"> -->
                                                    <iframe style="border-color: transparent;" class="d-block w-100" src="../component/bar_chart_assembly.php" height="400" width="1000"></iframe>
                                                        
                                                </div>

                                                <div class="carousel-item" data-interval="15000">
                                                    <!-- <img class="d-block w-100" src="..." alt="Second slide"> -->
                                                    <iframe style="border-color: transparent;" class="d-block w-100" src="../component/bar_chart_inspection.php" height="400" width="1000"></iframe>
                                                </div>

                                            </div>
                                            
                                        </div> 
                                    </div>

                                </div>
                            </div>
                                                        
                            <!-- End Tact time real time value -->

                        </div>

                        <br>
                         <!-- Inspection  -->
                         <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" align="center" style="color:black; font-size: 25px;font-weight:bold;">Tact Time</li>                            
                        </ol> -->

                        <!-- <div class="row-12" align="center">
                            <div class="col-6">
                               
                                <h5 style="color:white; font-size: 25px;font-weight:bold;">Assembly</h5>
                            </div>
                        </div> -->
                        
                    </div>


            </main>

                <!-- footer  -->
                <?php include("../../component/footer.html"); ?>
        
            </div>

    </div>

    <script src="../../../dist/js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="../../../dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../../../dist/js/scripts.js"></script>


</body>
</html>