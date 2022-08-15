<button id="button">stop</button>
<button id="button2">run</button>
<button id="button3">reset 3</button>
<button id="button4" onclick="reset123()">reset 4</button>
<br>


<svg width="1100" height="100">

  <rect id="box" src="media/x.png;" x="0" y="20" rx="10" ry="10" width="50" height="50" fill="green" stroke="green" style="stroke-width:5;opacity:0.5;" />

  <!--adding this two  rx="20" ry="20" to be circle-->
</svg>
<svg width="1100" height="100">

  <rect id="box2" src="media/x.png;" x="40" y="20" width="50" height="50" fill="green" stroke="green" style="stroke-width:5;opacity:0.5;" />

  <!--adding this two  rx="20" ry="20" to be circle-->
</svg>
<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">

  <line id="length" x1="0" y1="0" x2="0" y2="0" stroke="green" />


  <!-- If you do not specify the stroke
         color the line will not be visible -->
</svg>



<script>
  // function reset() {
  //   $i == 0;
  // }
  var a = "true";
  var timetaken = 100;
  setInterval(functionsvgmoving, timetaken);
  document.getElementById("button").onclick = function() {
    a = "false";
    document.getElementById("length").setAttribute("stroke", "red");
    document.getElementById("box").setAttribute("fill", "red");
    document.getElementById("box").setAttribute("stroke", "red");
  }
  document.getElementById("button2").onclick = function() {
    a = "true";
    document.getElementById("length").setAttribute("stroke", "green");
    document.getElementById("box").setAttribute("fill", "green");
    document.getElementById("box").setAttribute("stroke", "green");
  }
  document.getElementById("button3").onclick = function reset() {
    $i = 0;
    document.getElementById("length").setAttribute("x2", "0");
    document.getElementById("box").setAttribute("x", "0");

  };

  function reset123() {
    $i = 0;
    document.getElementById("length").setAttribute("x2", "0");
    document.getElementById("box").setAttribute("x", "0");
    document.getElementById("length").setAttribute("stroke", "red");
    document.getElementById("box").setAttribute("fill", "red");
    document.getElementById("box").setAttribute("stroke", "red");
    a = "false";
  };








  $i = 0;

  function functionsvgmoving() {

    if (a == "true") {
      $i++;
    } else {
      $i == 5;
    }
    document.getElementById("length").setAttribute("x2", $i);
    document.getElementById("box").setAttribute("x", ($i * 10));
    document.getElementById("box").setAttribute("style", "opacity:" + (1 - ($i * 0.04)) + ";");
    document.getElementById("box2").setAttribute("x", ($i * 10));
    document.getElementById("box2").setAttribute("style", "opacity:" + (1 - ($i * 0.04)) + ";");
    // document.getElementById("box").setAttribute("style", "opacity:" + (($i * 0.04) - 1) + ";");
  }
</script>