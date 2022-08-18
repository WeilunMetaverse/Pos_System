<html>
   <head>

    <style>
      .wrapper{
         display:grid;
         grid-template-columns: 50% 50%;
         height:250px;
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
         height:50%;
         border:solid 2px blue;
      }
      .area1{
         background-color:green;
      }

      .area2{
         background-color:orange;
      }
    </style>
   </head>

   <body>

      
   <div class="top" style="background:red;">
      <div class="containerboxfortop">Sales Order</div>
      <div class="containerboxfortop">Sales Person</div>
      <div class="containerboxfortop">Customer Name</div>
      <div class="containerboxfortop">Complete Order</div>
      <div class="containerboxfortop">Date</div>
    

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
      <div class="containerboxmiddle">left middle</div>
      
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

<script>
   document.getElementById('button1').addEventListener('click', 
   function onClick(event) {
  document.getElementById("area1a").style.backgroundColor = 'yellow';

});
</script>