<html>
   <head>
      <!-- jQuery -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

   <!-- jQuery UI theme or Bootstrap (optional, if you create a custom theme) -->
   <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
   <link href="css/bootstrap.min.css" rel="stylesheet">

   <!-- jQuery UI position utility (optional, if you position the keyboard yourself) -->
   <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>

   <!-- keyboard widget css & script -->
   <link href="css/keyboard.css" rel="stylesheet">
   <script src="js/jquery.keyboard.js"></script>
   <script src="js/jquery.keyboard.extension-autocomplete.js"></script>

   <!-- optional plugins -->
   <script src="js/jquery.mousewheel.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="library/js/scripts.js"></script>
    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="library/js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>
    <style>

      .wrapper{
         display:grid;
         grid-template-columns: 70% 30%;
         height:80%;
         /* grid-column-gap:1em; */
         /* grid-row-gap:1em; */
      }
      .top{
         display:flex;
         flex-wrap: nowrap;
         column-gap: 10px;
         
      }

      .bottom{
         display:flex;
         flex-wrap: nowrap;
         column-gap: 10px;
      }


      .containerboxfortop{
         width:20%;
         height:20px;
         padding:10px;
         border:solid 2px blue;
      }

      .containerboxmiddle{
         text-align:center;
         width:100%;
         height:100%;
         border:solid 2px blue;
      }
      .area1{
         background-color:green;
      }

      .area2{
         background-color:orange;
      }
    </style>

    <!--left middle table style-->
    <style>
      label.panel-label {
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      display: block;
      width: 100%;
      color: #bdc3c7;
      cursor: pointer;
      background-color: #ecf0f1;
      -webkit-transition-property: background-color, color;
      transition-property: background-color, color;
      -webkit-transition-duration: 200ms;
      transition-duration: 200ms;
      }
      label.panel-label:hover {
      color: #003399;
      }

      #panels {
      background-color: white;
      }
      #panels .container {
      margin: 0 auto;
      width: 90%;
      height: 80%;
      }
      #panels section header label.panel-label {
      padding: 12px 24px;
      box-sizing: border-box;
      
      }
      #panels section main {
      box-sizing: border-box;
      max-height: 0;
      opacity: 0;
      -webkit-transition: opacity 600ms;
      transition: opacity 600ms;
      overflow-y: hidden;
      }

      #panel-1-ctrl:checked ~ #panels #panel-1 main {
      max-height: initial;
      opacity: 1;
      padding: 48px 24px;
      }

      #panel-2-ctrl:checked ~ #panels #panel-2 main {
      max-height: initial;
      opacity: 1;
      padding: 48px 24px;
      }

      #panel-3-ctrl:checked ~ #panels #panel-3 main {
      max-height: initial;
      opacity: 1;
      padding: 48px 24px;
      }
      #panel-1-ctrl:checked ~ #tabs-list #li-for-panel-1 {
      pointer-events: none;
      cursor: default;
      -webkit-transform: translate3d(0, 1px, 0);
      transform: translate3d(0, 1px, 0);
      box-shadow: none;
      border-right: none;
      }
      #panel-1-ctrl:checked ~ #tabs-list #li-for-panel-1.last {
      border-right: 1px solid transparent;
      }
      #panel-1-ctrl:checked ~ #tabs-list #li-for-panel-1 + li {
      border-left: 1px solid #dfdfdf;
      }
      #panel-1-ctrl:checked ~ #tabs-list #li-for-panel-1 label.panel-label {
      background-color: white;
      color: #003399;
      padding-top: 24px;
      }
      #panel-1-ctrl:checked ~ #tabs-list #li-for-panel-1 label.panel-label::after {
      height: 6px;
      }

      #panel-2-ctrl:checked ~ #tabs-list #li-for-panel-2 {
      pointer-events: none;
      cursor: default;
      -webkit-transform: translate3d(0, 1px, 0);
      transform: translate3d(0, 1px, 0);
      box-shadow: none;
      border-right: none;
      }
      #panel-2-ctrl:checked ~ #tabs-list #li-for-panel-2.last {
      border-right: 1px solid transparent;
      }
      #panel-2-ctrl:checked ~ #tabs-list #li-for-panel-2 + li {
      border-left: 1px solid #dfdfdf;
      }
      #panel-2-ctrl:checked ~ #tabs-list #li-for-panel-2 label.panel-label {
      background-color: white;
      color: #003399;
      padding-top: 24px;
      }
      #panel-2-ctrl:checked ~ #tabs-list #li-for-panel-2 label.panel-label::after {
      height: 6px;
      }

      #panel-3-ctrl:checked ~ #tabs-list #li-for-panel-3 {
      pointer-events: none;
      cursor: default;
      -webkit-transform: translate3d(0, 1px, 0);
      transform: translate3d(0, 1px, 0);
      box-shadow: none;
      border-right: none;
      }
      #panel-3-ctrl:checked ~ #tabs-list #li-for-panel-3.last {
      border-right: 1px solid transparent;
      }
      #panel-3-ctrl:checked ~ #tabs-list #li-for-panel-3 + li {
      border-left: 1px solid #dfdfdf;
      }
      #panel-3-ctrl:checked ~ #tabs-list #li-for-panel-3 label.panel-label {
      background-color: white;
      color: #003399;
      padding-top: 24px;
      }
      #panel-3-ctrl:checked ~ #tabs-list #li-for-panel-3 label.panel-label::after {
      height: 6px;
      }

      ul#tabs-list {
      display: flex;
      list-style: none;
      text-align: center;
      border-bottom: 1px solid #dfdfdf;
      margin: 0;
      padding: 0;
      }
      ul#tabs-list li {
      text-align: center;
      font-size: 0.875em;
      width: 18%;
      box-shadow: 0px -2px 2px rgba(0, 0, 0, 0.05);
      border-right: 1px solid #dfdfdf;
      position: relative;
      }
      ul#tabs-list li:hover {
      -webkit-transition: none;
      transition: none;
      border-right: none;
      }
      ul#tabs-list li:hover.last {
      border-right: 1px solid transparent;
      }
      ul#tabs-list li:hover + li {
      border-left: 1px solid #dfdfdf;
      }
      ul#tabs-list li label.panel-label {
      position: relative;
      padding: 24px 0;
      font-size: 0.875em;
      }
      ul#tabs-list li label.panel-label::after {
      content: "";
      position: absolute;
      width: 100%;
      left: 0;
      bottom: 100%;
      background-color: #003399;
      height: 0;
      -webkit-transition-property: height;
      transition-property: height;
      -webkit-transition-duration: 200ms;
      transition-duration: 200ms;
      }
      ul#tabs-list li label.panel-label:hover {
      padding-top: 24px;
      }
      ul#tabs-list li label.panel-label:hover::after {
      height: 6px;
      }

      main {
         width: 70%;
         margin: 0 auto;
      }
      .panel-radios {
      display: none;
      }

    

      

      .internalcontentitem{
         display:flex;
         flex-wrap: wrap;
         gap: 5px;
      }

      .internalcontentboxsize{
         width:20%;
         height:100px;
         background-color: red;
         border:solid 2px blue;

      }

      :root {
         --background-gradient: linear-gradient(30deg, #f39c12 30%, #f1c40f);
         --gray: #34495e;
         --darkgray: #2c3e50;
         }

         select {
         /* Reset Select */
         appearance: none;
         outline: 0;
         border: 0;
         box-shadow: none;
         /* Personalize */
         flex: 1;
         padding: 0 1em;
         color: #fff;
         background-color: var(--darkgray);
         background-image: none;
         cursor: pointer;
         }
         /* Remove IE arrow */
         select::-ms-expand {
         display: none;
         }
         /* Custom Select wrapper */
         .select {
         position: relative;
         display: flex;
         width: 20em;
         height: 3em;
         border-radius: 0.25em;
         overflow: hidden;
         }
         /* Arrow */
         .select::after {
         content: "\25BC";
         position: absolute;
         top: 0;
         right: 0;
         padding: 1em;
         background-color: #34495e;
         transition: 0.25s all ease;
         pointer-events: none;
         }
         /* Transition */
         .select:hover::after {
         color: #f39c12;
         }

         /* Other styles*/
         body {
         color: #fff;
         background: var(--background-gradient);
         }
         h1 {
         margin: 0 0 0.25em;
         }
         a {
         font-weight: bold;
         color: var(--gray);
         text-decoration: none;
         padding: 0.25em;
         border-radius: 0.25em;
         background: white;
         }

      
  </style>
   </head>

   <body>

      
   <div class="top" style="background:red;">
      <div class="select" >
      
         <label for="sales_order"></label>
         <select name="sales_order" id="sales_order" data-native-menu="false">
         </select>
      
      </div>

      <div class="select">
         <div class="select" >
                  
                  <label for="sales_person"></label>
                  <select name="sales_person" id="sales_person" data-native-menu="false">
                  </select>
               
         </div>

      </div>
        
      <div id="customer"> <textarea id="alpha"></textarea> </div>


      <div class="containerboxfortop">Complete Order</div>
      <input type="text" id="basicDate" placeholder="Please select Date Time" data-input>
   </div>

    

   <div id="text1" class="wrapper" style="">
   <div id="area1a" class="area1">
      
      <div class="top">
      <div class="containerboxfortop">1</div> 
      <div class="containerboxfortop">2</div>
      <div class="containerboxfortop">3</div>
      <div class="containerboxfortop">4</div>


      </div>
      <br>
      <div class="containerboxmiddle">

      <!-- TAB CONTROLLERS -->
<input id="panel-1-ctrl" class="panel-radios" type="radio" name="tab-radios" checked>
<input id="panel-2-ctrl" class="panel-radios" type="radio" name="tab-radios">
<input id="panel-3-ctrl" class="panel-radios" type="radio" name="tab-radios">

<!-- TABS LIST -->
<ul id="tabs-list">
    <!-- MENU TOGGLE -->
    <li id="li-for-panel-1">
      <label class="panel-label" for="panel-1-ctrl">Tab1</label>
    </li><!--INLINE-BLOCK FIX-->
    <li id="li-for-panel-2">
      <label class="panel-label" for="panel-2-ctrl">Tab2</label>
    </li><!--INLINE-BLOCK FIX-->
    <li id="li-for-panel-3">
      <label class="panel-label" for="panel-3-ctrl">Tab3</label>
    </li><!--INLINE-BLOCK FIX-->
</ul>

<!-- THE PANELS -->
<article id="panels">
  <div class="container">
    <section id="panel-1">
      <main>
        <p>Menu 1 for Set Food</p>
        <div class="internalcontentitem">
         <div class="internalcontentboxsize" style="background-image:url(media/chickenchop.jpeg);background-size: cover;">Chicken Chop</div>
         <div class="internalcontentboxsize" style="background-image:url(media/nasilemak.jfif);background-size: cover;">Nasi Lemak</div>
         <div class="internalcontentboxsize" style="">Wan Tan Mee</div>
         <div class="internalcontentboxsize" style="background-image:url(media/wedges.jpg);background-size: cover;">Fries Wedges</div>
         <div class="internalcontentboxsize" style="background-image:url(media/frenchfries.jpg);background-size: cover;">French Fries</div>
         <div class="internalcontentboxsize" style="background-image:url(media/currymee.jpg);background-size: cover;">Curry Mee</div>
         <div class="internalcontentboxsize" style="background-image:url(media/tempura.jfif);background-size: cover;">Tempura</div>
         <div class="internalcontentboxsize" style="">123</div>
         <div class="internalcontentboxsize" style="">123</div>



        </div>
      </main>
    </section>
    <section id="panel-2">
      <main>
      <p>Menu 2 for Set Drinks</p>
        <div class="internalcontentitem">
         <div class="internalcontentboxsize" style="">123</div>
         <div class="internalcontentboxsize" style="">123</div>
         <div class="internalcontentboxsize" style="">123</div>
         <div class="internalcontentboxsize" style="">123</div>
         <div class="internalcontentboxsize" style="">123</div>
         <div class="internalcontentboxsize" style="">123</div>



        </div>
      </main>
    </section>
    <section id="panel-3">
      <main>
      <p>Menu 3 for Set Meal</p>
        <div class="internalcontentitem">
        <div class="internalcontentboxsize" style="">my name is jeff</div>
         <div class="internalcontentboxsize" style="">my name is jeff</div>
         <div class="internalcontentboxsize" style="">my name is jeff</div>
         <div class="internalcontentboxsize" style="">my name is jeff</div>
         <div class="internalcontentboxsize" style="">my name is jeff</div>
         <div class="internalcontentboxsize" style="">my name is jeff</div>
         <div class="internalcontentboxsize" style="">my name is jeff</div>
         <div class="internalcontentboxsize" style="">my name is jeff</div>



        </div>
      </main>
    </section>
  </div>
</article>

      </div>
      
   </div>
   <div class="area2">
      
   <div class="top">
   <div class="containerboxfortop">1</div>
   
   </div>
   <br>
   <div class="containerboxmiddle">right middle</div>
   


   </div>
   </div>
   
   <div class="bottom" style="background:grey;">
      <div class="containerboxfortop">1</div>
      <div class="containerboxfortop">2</div>


   </div>
   
   
   
   
   
    <button id="button1" class="" style="">press me</button>
   </body>

   <footer>

   </footer>

</html>

<!-- sales_order -->
<script>
   for(i=1;i<=5;i++){
   $("#sales_order").append('<option >Order '+i+'</option>')};
   $("#chickenchop").click(function(){
      $('.list').append('<div class="item">' +
         '<input class="done-check" type="checkbox" />' +
         '<label>' + $(this).val() + '</label>' +
         '<span class="delete">x</span>' +
         '</div>');


   });
</script>

<!-- sales_order -->
<script>
   for(i=1;i<=5;i++){
   $("#sales_person").append('<option >Person '+i+'</option>')};
   $("#chickenchop").click(function(){
      $('.list').append('<div class="item">' +
         '<input class="done-check" type="checkbox" />' +
         '<label>' + $(this).val() + '</label>' +
         '<span class="delete">x</span>' +
         '</div>');


   });
</script>
<script>
   document.getElementById('button1').addEventListener('click', 
   function onClick(event) {
  document.getElementById("area1a").style.backgroundColor = 'yellow';

});
</script>

<!-- customer_name -->
<script>
   $('#alpha')
	.keyboard({ layout: 'alpha' })
	.addTyping();
</script>
<script>
$("#basicDate").flatpickr({
    enableTime: true,
    dateFormat: "F, d Y H:i"
});

$("#rangeDate").flatpickr({
    mode: 'range',
    dateFormat: "Y-m-d"
});

$("#timePicker").flatpickr({
    enableTime: true,
    noCalendar: true,
    time_24hr: true,
    dateFormat: "H:i",
});

$(".resetDate").flatpickr({
    wrap: true,
    weekNumbers: true,
});
</script>