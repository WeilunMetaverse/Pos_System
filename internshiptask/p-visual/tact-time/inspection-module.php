<script>
    $(document).ready(function() {                                                     
    getLineProd2();

    // Create table for Production Line 1
    function getLineProd2(){
        $.ajax({    //create an ajax request to display.php
            type: "GET",
            url: "data/tact-time-inspection.php",
            cache: false,             
            // dataType: "html",   //expect html to be returned                
            success: function(response){ 
            inspection= JSON.parse(response);
            console.log(inspection);
            var inspectionTable = document.getElementById("inspectionTable"); 
            
            for(var i = inspectionTable.rows.length - 1; i > 0; i--)
            {
                inspectionTable.deleteRow(i);
                // console.log("Update Line table 1");
            }
            
            for(i=0;i<inspection.length;i++){
               
                var row = inspectionTable.insertRow(-1);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);

                row.style.textAlign = "center";
                row.style.fontWeight = "bold";
                row.style.fontSize = "16px";
                row.style.textOverflow="visible";
                row.style.cursor="pointer";
                  
                
                cell1.innerHTML = inspection[i].name;
                cell2.innerHTML = inspection[i].value;                                   


            }
            

            
                                                              
        },
        complete: function() {
            // Schedule the next request when the current one's complete
            setTimeout(getLineProd2, 1000);
        }
        });
    }
    
    
    
    
    
    
    
    });                    
</script>