<?php

session_start();
include("connection.php");
if (!$_SESSION["username"]) {
	//Do not show protected data, redirect to login...
	header('Location: login.php');
}

?>


<html>

<head>

	<style>
		body,
		html {
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100%;
			background-color: #26394E;
		}

		#menu {
			height: 100%;
			position: fixed;
			/* background-color: #FED057; */
			background-color: #0CADFA;
			width: 300px;
			transition: 1000ms all cubic-bezier(0.19, 1, 0.22, 1);
			transform: translateX(-100%);
			left: 60px;
		}

		#menu.expanded {
			transform: translateX(0%);
			left: 0px;
		}

		.menu-inner {
			width: 100%;
			height: 100%;
			position: relative;
		}

		#blob {
			top: 0;
			z-index: -1;
			right: 60px;
			transform: translateX(100%);
			height: 100%;
			position: absolute;
		}

		#blob-path {
			height: 100%;
			/* fill:  #FED057; */
			fill: black;
		}

		.hamburger {
			right: 20px;
			position: absolute;
			width: 20px;
			height: 20px;
			margin-top: -10px;
		}

		.hamburger .line {
			width: 100%;
			height: 4px;
			background-color: #fff;
			position: absolute;
		}

		.hamburger .line:nth-child(2) {
			top: 50%;
			margin-top: -2px;
		}

		.hamburger .line:nth-child(3) {
			bottom: 0;
		}

		h1 {
			position: fixed;
			right: 0;
			margin: 0;
		}

		ul {
			padding: 0;
			list-style: none;
			width: 80%;
			margin-left: 10%;
			position: absolute;
			top: 10px;
		}

		ul li {
			color: #fff;
			font-family: sans-serif;
			padding: 20px 0;
		}

		h2 {
			position: absolute;
			left: 50%;
			color: #fff;
			margin: 0;
			font-size: 16px;
			font-family: sans-serif;
			font-weight: 100;
		}
	</style>

	<style>
		/* button */
		/* Page styling -- Not needed to replicate button visuals. */

		/* End of Page styling */

		/* Simple button styling -- No animation */


		/* End of Simple Button */

		/* Fill button styling */
		.fill {

			font-size: 20px;
			font-weight: 200;
			letter-spacing: 1px;
			padding: 10px 10px 10px;
			text-decoration: none;
			outline: 0;
			border: 3px solid white;
			border-radius: 1em;
			cursor: pointer;
			position: relative;
			background-color: rgba(0, 0, 0, 0);
			color: black;
		}

		.fill::after {
			content: "";
			/* background-color: #ffe54c; */
			background-color: white;
			width: 100%;
			z-index: -1;
			position: absolute;
			border-radius: 0.5em;
			height: 100%;
			top: 7px;
			left: 7px;
			transition: 0.2s;

		}

		.fill:hover::after {
			top: 0px;
			left: 0px;

		}

		/* End of Fill Button  */


		/* End of Slide Button  */
	</style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="library/js/scripts.js"></script>
	<script src="vendor/jquery/jquery.slim.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>

	<div id="menu">

		<div class="hamburger">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>

		<div class="menu-inner">

			<ul>
				<li><img src="../media/sysdev.png" alt="" style="width:50px;height:50px;"></li>
				<li></li>
				<li><a href="productionlayout.php" type="a" class="fill">Dashboard</a></li>
				<li><a href="../internshiptask/index.php" type="a" class="fill">Production Line</a></li>
				<li><a href="productionlayout.php" type="a" class="fill">Account</a></li>
				<li><a href="empty_page.php" type="a" class="fill">empty_page</a></li>
				<li><a href="Purchase.php" type="a" class="fill">Purchase_page</a></li>
				<li></li>
				<li></li>
				<li></li>
				<li><a href="logout.php" type="a" class="fill">Logout</a></li>
			</ul>
		</div>

		<svg version="1.1" id="blob" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			<path id="blob-path" d="M60,500H0V0h60c0,0,20,172,20,250S60,900,60,500z" />
		</svg>

	</div>
	<h2 style="opacity:0.3;font-size:20px;text-transform: uppercase;text-align:center;"><?php echo $_SESSION['username']; ?></h2>


</body>

<script>
	$(window).load(function() {
		var height = window.innerHeight,
			x = 0,
			y = height / 2,
			curveX = 10,
			curveY = 0,
			targetX = 0,
			xitteration = 0,
			yitteration = 0,
			menuExpanded = false;

		blob = $('#blob'),
			blobPath = $('#blob-path'),

			hamburger = $('.hamburger');

		$(this).on('mousemove', function(e) {
			x = e.pageX;

			y = e.pageY;
		});

		$('.hamburger, .menu-inner').on('mouseenter', function() {
			$(this).parent().addClass('expanded');
			menuExpanded = true;
		});

		$('.menu-inner').on('mouseleave', function() {
			menuExpanded = false;
			$(this).parent().removeClass('expanded');
		});

		function easeOutExpo(currentIteration, startValue, changeInValue, totalIterations) {
			return changeInValue * (-Math.pow(2, -10 * currentIteration / totalIterations) + 1) + startValue;
		}

		var hoverZone = 150;
		var expandAmount = 20;

		function svgCurve() {
			if ((curveX > x - 1) && (curveX < x + 1)) {
				xitteration = 0;
			} else {
				if (menuExpanded) {
					targetX = 0;
				} else {
					xitteration = 0;
					if (x > hoverZone) {
						targetX = 0;
					} else {
						targetX = -(((60 + expandAmount) / 100) * (x - hoverZone));
					}
				}
				xitteration++;
			}

			if ((curveY > y - 1) && (curveY < y + 1)) {
				yitteration = 0;
			} else {
				yitteration = 0;
				yitteration++;
			}

			curveX = easeOutExpo(xitteration, curveX, targetX - curveX, 100);
			curveY = easeOutExpo(yitteration, curveY, y - curveY, 100);

			var anchorDistance = 200;
			var curviness = anchorDistance - 40;

			var newCurve2 = "M60," + height + "H0V0h60v" + (curveY - anchorDistance) + "c0," + curviness + "," + curveX + "," + curviness + "," + curveX + "," + anchorDistance + "S60," + (curveY) + ",60," + (curveY + (anchorDistance * 2)) + "V" + height + "z";

			blobPath.attr('d', newCurve2);

			blob.width(curveX + 60);

			hamburger.css('transform', 'translate(' + curveX + 'px, ' + curveY + 'px)');

			$('h2').css('transform', 'translateY(' + curveY + 'px)');
			window.requestAnimationFrame(svgCurve);
		}

		window.requestAnimationFrame(svgCurve);

	});
</script>

</html>