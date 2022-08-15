<script>
    $(document).ready(function() {                                                     
    getLineProd1();

    // Create table for Production Line 1
    function getLineProd1(){
        $.ajax({    //create an ajax request to display.php
            type: "GET",
            url: "data/tact-time-assembly.php",
            cache: false,             
            // dataType: "html",   //expect html to be returned                
            success: function(response){ 
            assembly= JSON.parse(response);
            console.log(assembly);
            var assemblyTable = document.getElementById("assemblyTable"); 
            
            for(var i = assemblyTable.rows.length - 1; i > 0; i--)
            {
                assemblyTable.deleteRow(i);
                // console.log("Update Line table 1");
            }
            
            for(i=0;i<assembly.length;i++){
               
                var row = assemblyTable.insertRow(-1);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);

                row.style.textAlign = "center";
                row.style.fontWeight = "bold";
                row.style.fontSize = "16px";
                row.style.textOverflow="visible";
                row.style.cursor="pointer";
                  
                
                cell1.innerHTML = assembly[i].name;
                cell2.innerHTML = assembly[i].value;                                   


            }
            

            
                                                              
        },
        complete: function() {
            // Schedule the next request when the current one's complete
            setTimeout(getLineProd1, 1000);
        }
        });
    }
    
    
    
    
    
    
    
    });                    
</script>