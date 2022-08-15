<!DOCTYPE html>
<html lang="en">

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

</head>
<body style="
background: url(media/b101.JPG);
width: 99%;">
<!-- <body  style="   
background-color:black;
width: 99%;"> -->
<style>
    

</style>
<!-- Page Content -->
<link rel="stylesheet" href="normal.css">

<div id="grid-layout">
  	<div class="cell head">
	<b style="color:black;font-size:30px;text-transform:uppercase;">BUILDING STATUS</b>
	<marquee>This is just a Prototype of The Interior Status Design</marquee> 
	</div>
  	
	<div class="cell main">
        <div class="boxsmall">
	<b style="color:white;font-size:30px;text-transform:uppercase;text-align:center;">Current Status of Production 1</b></div>
	

	<div class="container">
    <table class="content-table">
        <thead>
            <tr>
                <th style="text-transform:uppercase; text-align: center;">Line</th>
                <th style="text-transform:uppercase; text-align: center;">Status</th>
                <th style="text-transform:uppercase; text-align: center;">Condition</th>
                <th style="text-transform:uppercase; text-align: center;"></th>
            </tr>
        </thead>
    
        <tbody>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l01<br><b>output : </b><b id="outputvalue0"></b></td>
                <td><div id="adep0" class="circle green" style="margin: 0 auto;"></div></td>
                <td><b id="adep0w" style="margin:5px;">Condition : </b></td>
                <td>  </td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l02<br><b>output : </b><b id="outputvalue1"></b></td>
                <td><div id="adep1" class="circle green" style="margin: 0 auto;"></div></td>
                <td><b id="adep1w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l03<br><b>output : </b><b id="outputvalue2"></b></td>
                <td><div id="adep2" class="circle red" style="margin: 0 auto;"></div></td>
                <td><b id="adep2w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l04<br><b>output : </b><b id="outputvalue3"></b></td>
                <td><div id="adep3" class="circle yellow" style="margin: 0 auto;"></div></td>
                <td><b id="adep3w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l05<br><b>output : </b><b id="outputvalue4"></b></td>
                <td><div id="adep4" class="circle red" style="margin: 0 auto;"></div></td>
                <td><b id="adep4w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l06<br><b>output : </b><b id="outputvalue5"></b></td>
                <td><div id="adep5" class="circle green" style="margin: 0 auto;"></div></td>
                <td><b id="adep5w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l08<br><b>output : </b><b id="outputvalue6"></b></td>
                <td><div id="adep6" class="circle green" style="margin: 0 auto;"></div></td>
                <td><b id="adep6w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l09<br><b>output : </b><b id="outputvalue7"></b></td>
                <td><div id="adep7" class="circle green" style="margin: 0 auto;"></div></td>
                <td><b id="adep7w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
        </tbody>
	</table>
	</div>
	

	
	</div>
	<div class="cell side">
    <div class="box position0 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;L01
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay0"></b></div>
    <div id="dep0" class="circle position0 green"></div>

	<div class="box position1 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l02
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay1"></b></div>
	<div id="dep1" class="circle position1 green"></div>

	<div class="box position2 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l03
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay2"></b></div>
	<div id="dep2" class="circle position2 red"></div>

	<div class="box position3 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l04
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay3"></b></div>
	<div id="dep3" class="circle position3 yellow"></div>

	<div class="box position4 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l05
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay4"></b></div>
	<div id="dep4" class="circle position4 red"></div>

	<div class="box position5 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l06
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay5"></b></div>
	<div id="dep5" class="circle position5 green"></div>

    <div class="box position6 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l08
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay6"></b></div>
	<div id="dep6" class="circle position6 green"></div>

    <div class="box position7 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l09
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay7"></b></div>
	<div id="dep7" class="circle position7 green"></div>

	
	<img id="image3d" src="media/factory_floor_plan_layout.jpg" alt="Interior Design Factory Production 1" width="1000" height="810"></div>

    <div class="cell foot"></div>
    </div>
<!-------------------Department 2------------------------------------->

<div id="grid-layout">
  	<div class="cell head"></div>
  	
	<div class="cell main">
        <div class="boxsmall">
	<b style="color:white;font-size:30px;text-transform:uppercase;text-align:center;">Current Status of Production 2</b></div>
	

	<div class="container">
    <table class="content-table">
        <thead>
            <tr>
                <th style="text-transform:uppercase; text-align: center;">Line</th>
                <th style="text-transform:uppercase; text-align: center;">Status</th>
                <th style="text-transform:uppercase; text-align: center;">Condition</th>
                <th style="text-transform:uppercase; text-align: center;"></th>
            </tr>
        </thead>
    
        <tbody>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l10<br><b>output : </b><b id="outputvalue8"></b></td>
                <td><div id="adep8" class="circle green" style="margin: 0 auto;"></div></td>
                <td><b id="adep8w" style="margin:5px;">Condition : </b></td>
                <td>  </td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l12<br><b>output : </b><b id="outputvalue9"></b></td>
                <td><div id="adep9" class="circle green" style="margin: 0 auto;"></div></td>
                <td><b id="adep9w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l13<br><b>output : </b><b id="outputvalue10"></b></td>
                <td><div id="adep10" class="circle red" style="margin: 0 auto;"></div></td>
                <td><b id="adep10w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l14<br><b>output : </b><b id="outputvalue11"></b></td>
                <td><div id="adep11" class="circle yellow" style="margin: 0 auto;"></div></td>
                <td><b id="adep11w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l15<br><b>output : </b><b id="outputvalue12"></b></td>
                <td><div id="adep12" class="circle red" style="margin: 0 auto;"></div></td>
                <td><b id="adep12w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l16<br><b>output : </b><b id="outputvalue13"></b></td>
                <td><div id="adep13" class="circle green" style="margin: 0 auto;"></div></td>
                <td><b id="adep13w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
        </tbody>
	</table>
	</div>
	

	
	</div>
	<div class="cell side">
    <div class="box position8 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;L10
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay8"></b></div>
    <div id="dep8" class="circle position8 green"></div>

	<div class="box position9 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l12
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay9"></b></div>
	<div id="dep9" class="circle position9 green"></div>

	<div class="box position10 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l13
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay10"></b></div>
	<div id="dep10" class="circle position10 red"></div>

	<div class="box position11 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l14
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay11"></b></div>
	<div id="dep11" class="circle position11 yellow"></div>

	<div class="box position12 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l15
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay12"></b></div>
	<div id="dep12" class="circle position12 red"></div>

	<div class="box position13 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l16
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay13"></b></div>
	<div id="dep13" class="circle position13 green"></div>
	
	<img id="image3d" src="media/prod2.jpg" alt="Interior Design Factory Production 2" width="1000" height="810"></div>

    <div class="cell foot"></div>
    </div>
<!--------------------Department 3------------------------------------>
<div id="grid-layout">
  	<div class="cell head"></div>
  	
	<div class="cell main">
        <div class="boxsmall">
	<b style="color:white;font-size:30px;text-transform:uppercase;text-align:center;">Current Status of Production 3</b></div>
	

	<div class="container3">
    <table class="content-table3">
        <thead>
            <tr>
                <th style="text-transform:uppercase; text-align: center;">Line</th>
                <th style="text-transform:uppercase; text-align: center;">Status</th>
                <th style="text-transform:uppercase; text-align: center;">Condition</th>
                <th style="text-transform:uppercase; text-align: center;"></th>
            </tr>
        </thead>
    
        <tbody>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l22<br><b>output : </b><b id="outputvalue14"></b></td>
                <td><div id="adep14" class="circle green" style="margin: 0 auto;"></div></td>
                <td><b id="adep14w" style="margin:5px;">Condition : </b></td>
                <td>  </td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l23<br><b>output : </b><b id="outputvalue15"></b></td>
                <td><div id="adep15" class="circle green" style="margin: 0 auto;"></div></td>
                <td><b id="adep15w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l24<br><b>output : </b><b id="outputvalue16"></b></td>
                <td><div id="adep16" class="circle red" style="margin: 0 auto;"></div></td>
                <td><b id="adep16w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l25<br><b>output : </b><b id="outputvalue17"></b></td>
                <td><div id="adep17" class="circle yellow" style="margin: 0 auto;"></div></td>
                <td><b id="adep17w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l26<br><b>output : </b><b id="outputvalue18"></b></td>
                <td><div id="adep18" class="circle red" style="margin: 0 auto;"></div></td>
                <td><b id="adep18w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l27<br><b>output : </b><b id="outputvalue19"></b></td>
                <td><div id="adep19" class="circle green" style="margin: 0 auto;"></div></td>
                <td><b id="adep19w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l29<br><b>output : </b><b id="outputvalue20"></b></td>
                <td><div id="adep20" class="circle green" style="margin: 0 auto;"></div></td>
                <td><b id="adep20w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l30<br><b>output : </b><b id="outputvalue21"></b></td>
                <td><div id="adep21" class="circle green" style="margin: 0 auto;"></div></td>
                <td><b id="adep21w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l31<br><b>output : </b><b id="outputvalue22"></b></td>
                <td><div id="adep22" class="circle green" style="margin: 0 auto;"></div></td>
                <td><b id="adep22w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
            
        </tbody>
	</table>
    <table class="content-table4">
        <thead>
            <tr>
                <th style="text-transform:uppercase; text-align: center;">Line</th>
                <th style="text-transform:uppercase; text-align: center;">Status</th>
                <th style="text-transform:uppercase; text-align: center;">Condition</th>
                <th style="text-transform:uppercase; text-align: center;"></th>
            </tr>
        </thead>
    
        <tbody>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l32<br><b>output : </b><b id="outputvalue23"></b></td>
                <td><div id="adep23" class="circle green" style="margin: 0 auto;"></div></td>
                <td><b id="adep23w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l32EC<br><b>output : </b><b id="outputvalue24"></b></td>
                <td><div id="adep24" class="circle green" style="margin: 0 auto;"></div></td>
                <td><b id="adep24w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-transform:uppercase;font-weight: bold;">l33<br><b>output : </b><b id="outputvalue25"></b></td>
                <td><div id="adep25" class="circle green" style="margin: 0 auto;"></div></td>
                <td><b id="adep25w" style="margin:5px;">Condition : </b></td>
                <td></td>
            </tr>
            

        </tbody>
	</table>

	</div>
	

	
	</div>
	<div class="cell side">
    <div class="box position14 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;L22
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay14"></b></div>
    <div id="dep14" class="circle position14 green"></div>

	<div class="box position15 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l23
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay15"></b></div>
	<div id="dep15" class="circle position15 green"></div>

	<div class="box position16 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l24
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay16"></b></div>
	<div id="dep16" class="circle position16 red"></div>

	<div class="box position17 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l25
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay17"></b></div>
	<div id="dep17" class="circle position17 yellow"></div>

	<div class="box position18 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l26
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay18"></b></div>
	<div id="dep18" class="circle position18 red"></div>

	<div class="box position19 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l27
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay19"></b></div>
	<div id="dep19" class="circle position19 green"></div>

    <div class="box position20 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l29
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay20"></b></div>
	<div id="dep20" class="circle position20 green"></div>

    <div class="box position21 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l30
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay21"></b></div>
	<div id="dep21" class="circle position21 green"></div>

    <div class="box position22 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l31
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay22"></b></div>
	<div id="dep22" class="circle position22 green"></div>

    <div class="box position23 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l32
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay23"></b></div>
	<div id="dep23" class="circle position23 green"></div>

    <div class="box position24 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l32EC
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay24"></b></div>
	<div id="dep24" class="circle position24 green"></div>

    <div class="box position25 grey" style="color:#0C8FA6;font-size:15px;text-transform:uppercase;font-weight: bold;">&ensp;l33
    <br>&ensp;&ensp;&ensp;
    <b>output : </b><b id="outputdisplay25"></b></div>
	<div id="dep25" class="circle position25 green"></div>
	
	<img id="image3d" src="media/prod3.png" alt="Interior Design Factory Production 2" width="1000" height="810"></div>

    <div class="cell foot"></div>
    </div>

<!-------------------------------------------------------------------->
<div class="row justify-content-center" style="padding: 20px">
    <h1 style="color:white">Counter Data</h1>
    <div class="body table-responsive">
        <h4 style="color: white" align="center">TV Production</h4>
        <table id="dataCounter" style="font-size:14pt"
               class="table table-bordered table-hover m-b-0">
            <thead>
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
            </thead>
            <tbody id="dataCounterBody">
            <tr>

                <td colspan="8" align="center">
                    <span style="color: white">No data found</span>
                </td>
            </tr>


            </tbody>
        </table>
    </div>

</div>


<!-- Bootstrap core JavaScript -->
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
    setInterval(getDataCounter, 10000);
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
                    
                for (i = 0; i < response.length; i++) {
                    if(response[i].status=="Offline"){
                            document.getElementById('dep'+i).className = "circle position"+i+" red";
                            document.getElementById('adep'+i).className = "circle red";
                            document.getElementById('adep'+i+'w').textContent=" Condition: Offline";
                            document.getElementById('outputvalue'+i).innerHTML= response[i].actual;
                            document.getElementById('outputdisplay'+i).innerHTML= response[i].actual;

                        }
                        else if(response[i].status=="Stop"){
                            document.getElementById('dep'+i).className = "circle position"+i+" yellow";
                            document.getElementById('adep'+i).className = "circle yellow";
                            document.getElementById('adep'+i+'w').textContent=" Condition: Stop";
                            document.getElementById('outputvalue'+i).innerHTML= response[i].actual;
                            document.getElementById('outputdisplay'+i).innerHTML= response[i].actual;

                        }else if(response[i].status=="Run"){
                            document.getElementById('dep'+i).className = "circle position"+i+" green";
                            document.getElementById('adep'+i).className = "circle green";
                            document.getElementById('adep'+i+'w').textContent=" Condition: Run";
                            document.getElementById('outputvalue'+i).innerHTML= response[i].actual;
                            document.getElementById('outputdisplay'+i).innerHTML= response[i].actual;

                        }
                        else if(response[i].status=="Break"){
                            document.getElementById('dep'+i).className = "circle position"+i+" blue";
                            document.getElementById('adep'+i).className = "circle blue";
                            document.getElementById('adep'+i+'w').textContent=" Condition: Break";
                            document.getElementById('outputvalue'+i).innerHTML= response[i].actual;
                            document.getElementById('outputdisplay'+i).innerHTML= response[i].actual;
                            
                        }
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

</body>

</html>
