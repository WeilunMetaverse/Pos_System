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
<style>
     /* (A) CONTAINER */
 #grid-layout {
	/* (A1) GRID LAYOUT */
	display: grid;
	grid-gap: 10px;
 
	/* (A2) DESIGN YOUR GRID TEMPLATE */
	grid-template-areas:
	"head head head"
	"main main side"
	"foot foot foot";
	}

	/* (B) GRID CELLS */
	.cell { padding: 10px; }
 
	/* (C) ASSIGN THE AREAS */
	.head {
	  grid-area: head;
	  background: #ffe5db;
	}
	.main {
	  grid-area: main;
	  background: #e3ffdb; /*original:#e3ffdb*/
	}
	.side {
	  grid-area: side;
	  background: #e1f8fd; /*original:#dbf8ff*/
	  text-align: center;
	}
	.foot {
	  grid-area: foot;
	  background: #ebebeb;
	}
	
	.circle{
		width:40px;
		height:40px;
		margin: 10px;
		border-radius: 25px;
		z-index: 5;
		border: 1px solid black;
		/*here is the testing parts*/
		
	}

	@keyframes opacityOn {
		0% {
			opacity: 1;
		}
		25% {
			opacity: 0;
		}
		100% {
			opacity: 1;
		}
	}
	
	
	.box {
		float: left;
		height: 60px;
		width: 180px;
		margin-bottom: 15px;
		border: 1px solid black;
		clear: both;
		border-radius: 10px;
		z-index: 5;
	}
	
	.boxbig {
		float: left;
		height: 765px;
		width: 850px;
		margin-bottom: 5px;
		border: 1px solid black;
		clear: both;
		z-index: 5;
	  }
	  .boxsmall {
		float: middle;
		background-color: black;
		height: 50px;
		width: 800px;
		text-align: center;
		margin-bottom: 5px;
		border: 1px solid black;
		clear: both;
		border-radius: 10px;
		  z-index: 5;
	  }  
	
	/*Dep 0*/
	.position0{ /*L01*/
	position:absolute; 
	left:1200px; 
	top:200px;
	opacity: 0;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}
	/*-------*/

	/*Dep 1*/
	.position1{ /*L02*/
	position:absolute; 
	left:1450px; 
	top:500px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}
	/*-------*/

	/*Dep 2*/
	.position2{ /*L03*/
	position:absolute; 
	left:1550px; 
	top:350px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}
	/*-------*/

	/*Dep 3*/
	.position3{ /*L04*/
	position:absolute; 
	left:1250px; 
	top:450px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}
	/*-------*/

	/*Dep 4*/
	.position4{ /*L05*/
	position:absolute; 
	left:1300px; 
	top:300px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}
	/*-------*/

	/*Dep 5*/
	.position5{ /*L06*/
	position:absolute; 
	left:1000px; 
	top:450px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}

	/*Dep 6*/
	.position6{ /*L08*/
	position:absolute; 
	left:1150px; 
	top:550px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}

	/*Dep 7*/
	.position7{ /*L09*/
	position:absolute; 
	left:1100px; 
	top:350px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}

	/*Dep 8*/
	.position8{ /*L10*/
	position:absolute; 
	left:450px; 
	top:550px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}

	/*Dep 9*/
	.position9{ /*L12*/
	position:absolute; 
	left:700px; 
	top:550px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}

	/*Dep 10*/
	.position10{ /*L13*/
	position:absolute; 
	left:900px; 
	top:150px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}

	/*Dep 11*/
	.position11{ /*L14*/
	position:absolute; 
	left:800px; 
	top:350px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}

	/*Dep 12*/
	.position12{ /*L15*/
	position:absolute; 
	left:700px; 
	top:250px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}

	/*Dep 13*/
	.position13{ /*L16*/
	position:absolute; 
	left:750px; 
	top:450px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}

	/*Dep 14*/
	.position14{ /*L22*/
	position:absolute; 
	left:1200px; 
	top:650px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}

	/*Dep 15*/
	.position15{ /*L23*/
	position:absolute; 
	left:400px; 
	top:250px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}

	/*Dep 16*/
	.position16{ /*L24*/
	position:absolute; 
	left:550px; 
	top:50px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}

	/*Dep 17*/
	.position17{ /*L25*/
	position:absolute; 
	left:150px; 
	top:250px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}

	/*Dep 18*/
	.position18{ /*L26*/
	position:absolute; 
	left:100px; 
	top:350px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}

	/*Dep 19*/
	.position19{ /*L27*/
	position:absolute; 
	left:450px; 
	top:130px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}

	/*Dep 20*/
	.position20{ /*L29*/
	position:absolute; 
	left:550px; 
	top:350px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}

	/*Dep 21*/
	.position21{ /*L30*/
	position:absolute; 
	left:700px; 
	top:120px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}

	/*Dep 22*/
	.position22{ /*L31*/
	position:absolute; 
	left:300px; 
	top:370px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}

	/*Dep 23*/
	.position23{ /*L32*/
	position:absolute; 
	left:500px; 
	top:450px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}

	/*Dep 24*/
	.position24{ /*L32EC*/
	position:absolute; 
	left:200px; 
	top:450px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}

	/*Dep 25*/
	.position25{ /*L33*/
	position:absolute; 
	left:200px; 
	top:550px;
	animation: opacityOn 4s normal forwards;
	animation-iteration-count: infinite;
	animation-delay: 2s;
	}



	/*-------*/
	
	.grey {
	  background-color: #E1ECFA; 
	}
	.green{
	background:green;
	}
	.yellow{
	background:rgba(236, 236, 3, 0.753);
	}
	.red{
	background:red;
	}
	.black{
	background-color: black;
	}
	.blue{
	background-color: blue;
	}

	.container {
	  display: grid;
	  background-color: #e3ffdb; /*#eee*/
	  height: 550px;  
	  /* This makes .left width 60% and .right 40%*/
	  grid-template-columns: 40% 60%;
	  grid-gap: 20px; /* 40px gap between .left and .right */
	  width: 63%;
	  margin: 0 auto;
	  text-align: center;
	}

	.container3 {
	  display: grid;
	  background-color: #e3ffdb; /*#eee*/
	  height: 850px;  
	  /* This makes .left width 60% and .right 40%*/
	  grid-template-columns: 40% 60%;
	  grid-gap: 20px; /* 40px gap between .left and .right */
	  width: 63%;
	  margin: 0 auto;
	  text-align: center;
	}

	.left {
	  background-color: rgb(161, 161, 0);
	}

	.right {
	  background-color: orange;
	}

	.content-table {
		border-collapse: collapse;
		margin: 25px 0;
		margin-left: -60px;
		font-size: 0.9em;
		min-width: 600px;
		border-radius: 5px 5px 0 0;
		overflow: hidden;
		box-shadow: 0 0 20px rgba(0,0,0,0.15);
	}

	.content-table thead tr {
		background-color: #009879;
		color: #ffffff;
		text-align: left;
		font-weight: bold;
	}

	.content-table th,
	.content-table td {
		padding: 12px 15px;
	}

	.content-table tbody tr{
		border-bottom: 1px solid #dddddd;
	}
	.content-table tbody tr:nth-of-type(even){
		background-color: #f3f3f3;
	}
	.content-table tbody tr:last-of-type {
		border-bottom: 2px solid #009879;

	}

	.content-table tbody tr .active-row {
		font-weight: bold;
		color: #009879;
	} 
	
	.content-table3 {
		border-collapse: collapse;
		margin: 25px 0;
		margin-left: -140px;
		font-size: 0.9em;
		min-width: 380px;
		min-height: 150px;
		max-height: 150px;
		border-radius: 5px 5px 0 0;
		overflow: hidden;
		box-shadow: 0 0 20px rgba(0,0,0,0.15);
	}

	.content-table3 thead tr {
		background-color: #009879;
		color: #ffffff;
		text-align: left;
		font-weight: bold;
	}

	.content-table3 th,
	.content-table3 td {
		padding: 12px 15px;
	}

	.content-table3 tbody tr{
		border-bottom: 1px solid #dddddd;
	}
	.content-table3 tbody tr:nth-of-type(even){
		background-color: #f3f3f3;
	}
	.content-table3 tbody tr:last-of-type {
		border-bottom: 2px solid #009879;

	}

	.content-table3 tbody tr .active-row {
		font-weight: bold;
		color: #009879;
	} 

	.content-table4 {
		border-collapse: collapse;
		margin: 25px 0;
		margin-left: 30px;
		font-size: 0.9em;
		min-width: 380px;
		min-height: 150px;
		max-height: 150px;
		border-radius: 5px 5px 0 0;
		overflow: hidden;
		box-shadow: 0 0 20px rgba(0,0,0,0.15);
	}

	.content-table4 thead tr {
		background-color: #009879;
		color: #ffffff;
		text-align: left;
		font-weight: bold;
	}

	.content-table4 th,
	.content-table4 td {
		padding: 12px 15px;
	}

	.content-table4 tbody tr{
		border-bottom: 1px solid #dddddd;
	}
	.content-table4 tbody tr:nth-of-type(even){
		background-color: #f3f3f3;
	}
	.content-table4 tbody tr:last-of-type {
		border-bottom: 2px solid #009879;

	}

	.content-table4 tbody tr .active-row {
		font-weight: bold;
		color: #009879;
	}    

</style>
<!-- Page Content -->
<!--<link rel="stylesheet" href="normal.css">-->

	
<div id="grid-layout">
  	
  	
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

	
	<img id="image3d" src="media/factory_floor_plan_layout.jpg" alt="Interior Design Factory Production 1" width="1860" height="950"></div>

    </div>
<!-------------------Department 2------------------------------------->

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
	</div>
	</div>


<!--------------------Department 3------------------------------------>

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
	</div>
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
                            //document.getElementById('adep'+i).className = "circle red";
                            //document.getElementById('adep'+i+'w').textContent=" Condition: Offline";
                            //document.getElementById('outputvalue'+i).innerHTML= response[i].actual;
                            document.getElementById('outputdisplay'+i).innerHTML= response[i].actual;

                        }
                        else if(response[i].status=="Stop"){
                            document.getElementById('dep'+i).className = "circle position"+i+" yellow";
                            //document.getElementById('adep'+i).className = "circle yellow";
                            //document.getElementById('adep'+i+'w').textContent=" Condition: Stop";
                            //document.getElementById('outputvalue'+i).innerHTML= response[i].actual;
                            document.getElementById('outputdisplay'+i).innerHTML= response[i].actual;

                        }else if(response[i].status=="Run"){
                            document.getElementById('dep'+i).className = "circle position"+i+" green";
                            //document.getElementById('adep'+i).className = "circle green";
                            //document.getElementById('adep'+i+'w').textContent=" Condition: Run";
                            //document.getElementById('outputvalue'+i).innerHTML= response[i].actual;
                            document.getElementById('outputdisplay'+i).innerHTML= response[i].actual;

                        }
                        else if(response[i].status=="Break"){
                            document.getElementById('dep'+i).className = "circle position"+i+" blue";
                            //document.getElementById('adep'+i).className = "circle blue";
                            //document.getElementById('adep'+i+'w').textContent=" Condition: Break";
                            //document.getElementById('outputvalue'+i).innerHTML= response[i].actual;
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
