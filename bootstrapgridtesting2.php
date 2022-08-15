
<html>

<body>

   
        
   <style>
    .gred {
        display: grid;
        height: 100px;
        grid-template-columns: 1fr 1fr 1fr;
        }

        .areaA {
        background-color: lime;
        }

        .areaB {
        background-color: yellow;
        }

        .areaC {
        background-color: red;
        }

    .columnum {
	  flex: 50%;
	  height: 50%;

      -webkit-box-sizing: border-box;

	}

    .sizeforme{
        width:100%;
        border:0.1px solid black;
    }
  
   </style>


        <div class="gred">

        <div class="areaA">Assembly
            <div class="columnum" style="margin:auto 2.3%;">
                <div class="row" style="flex-wrap: nowrap;white-space:nowrap;">
                    <p id="flexdisplay1" style="display:flex;width: 100%;"></p>
                    
                
                
                </div>
            </div>
        </div>

        <div class="areaB">Inspection
            <div class="columnum" style="margin:auto 2.3%;">
                <div class="row" style="flex-wrap: nowrap;white-space:nowrap;">
                    <p id="flexdisplay2" style="display:flex;width: 100%;"></p>
                    
                
                
                </div>
            </div>
        </div>

        <div class="areaC">Packing
            <div class="columnum" style="margin:auto 2.3%;">
                    <div class="row" style="flex-wrap: nowrap;white-space:nowrap;">
                        <p id="flexdisplay3" style="display:flex;width: 100%;"></p>
                        
                    
                    
                </div>
            </div>
        </div>

    </div>



      <script src="vendor/jquery/jquery.slim.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="library/js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
      <script src="library/js/scripts.js"></script>
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <script>
          //Load data after complete open web page
          $(document).ready(function () {

              getDataCounter();


              $("#dataCounterBody").empty();
              $("#dataCounterBody").append('<tr align="center" style="font-weight: bold">' +
                  '<td colspan="8"><span><img src="media/loading2.gif" width="50" height="50" alt="Mplify"><p>Loading...</p></span></td></tr>');

                  $("#scroller").container2();

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
                          $("#flexdisplay1").empty();
                             for(i=1;i<13;i++){

                              $("#flexdisplay1").append(
                                
                                '<div class="sizeforme"  style="flex-wrap: nowrap;background-color:lightblue;width:100%;height:200%;">'+i+


                                '</div>'
                              
                          );
                    
                              
                        }

                        $("#flexdisplay2").empty();
                             for(i=1;i<15;i++){

                              $("#flexdisplay2").append(
                                
                                '<div class="sizeforme" style="flex-wrap: nowrap;background-color:red;width:100%;height:200%;">'+i+

                                
                                '</div>'
                          );
                    
                              
                        }

                        $("#flexdisplay3").empty();
                             for(i=1;i<15;i++){

                              $("#flexdisplay3").append(
                                '<div class="sizeforme" style="flex-wrap: nowrap;background-color:green;width:100%;height:200%;">'+i+


                                '</div>'
                              
                          );
                    
                              
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