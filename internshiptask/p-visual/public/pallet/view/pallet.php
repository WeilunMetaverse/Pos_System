<?php $title = "L25 P-Visual";?>
<?php include("../../component/header.html"); ?>


<body class="sb-nav-fixed">

    <!-- topbar  -->
    <?php include("../../component/top-nav.html"); ?>

    <!-- sidebar -->
    <div id="layoutSidenav" >
        <?php include("../../component/side-nav.html");?>

        <!-- main class  -->
        <div id="layoutSidenav_content">
            <main>
                    <div class="container-fluid">
                        <br>
                        <!-- page title  -->
                        <h1 class="mt-4" align="center">Pallet Real Time Monitoring (L25)</h1>
                        <br> <br>

                        <!-- assembly  -->
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" align="center">Assembly</li>
                        </ol>

                        <!-- pallet content assembly  -->
                        <div class="row">

                            <!-- prepare lifter 1 data  -->

                            <script>
                                $(document).ready(function() {               
                                    getLifter1();
                                    function getLifter1() {
                                        $.ajax({    //create an ajax request to display.php
                                            type: "GET",
                                            url: "../data/get-lifter-pallet.php?lifter=1",             
                                            dataType: "html",   //expect html to be returned                
                                            success: function(response){ 
                                            lifter1= JSON.parse(response);
                                            // console.log(lifter1.number);

                                            $("#lifter1").html(lifter1.number);
                                            $("#lifter1").show(); 
                                           
                                            },
                                            complete: function() {
                                                // Schedule the next request when the current one's complete
                                                setTimeout(getLifter1, 300);
                                            }
                                        });
                                    }});
                                                
                            </script>
                            
                            <div class="col-xl-1 col-md-6">
                                <div  class="card bg-primary text-white mb-4">
                                    <div class="card-body" align="center">
                                   <div id ="lifter1" style="color:black; font-size: 19px;font-weight:bold;">No Pallet</div>
                                    </div>
                                    
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a style="color:black;font-weight:bold;font-size: 14px;" href="#">Lifter 1</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                         
                            <?php for($i=1;$i<=10;$i++):?>

                                <script>
                                $(document).ready(function() {               
                                    getStationAssembly();
                                    function getStationAssembly() {
                                        $.ajax({    //create an ajax request to display.php
                                            type: "GET",
                                            url: "../data/get-station-assembly-pallet.php?station=<?php echo $i;?>",             
                                            dataType: "html",   //expect html to be returned                
                                            success: function(response){ 
                                            station= JSON.parse(response);
                                            // console.log("station"+station.station);
                                            stationNo = <?php echo $i?>;
    
                                            if(station.number == 0){
                                            $("#stationA"+stationNo).html("No pallet");

                                            }else
                                            {
                                                $("#stationA"+stationNo).html(station.number);
                                                $("#stationA"+stationNo).show(); 
                                            }
                                            
                                            
                                           
                                            },
                                            complete: function() {
                                                // Schedule the next request when the current one's complete
                                                setTimeout(getStationAssembly, 300);
                                            }
                                        });
                                    }});                   
                                </script>

                            <div class="col-xl-1 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body" align="center">
                                    <div id ="stationA<?php echo $i?>" style="color:black; font-size: 19px;font-weight:bold;">No Pallet</div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a href="#" style="color:black;font-weight:bold;font-size: 14px;">Station <?php echo $i;?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <?php endfor;?>

                            <script>
                                $(document).ready(function() {               
                                    getLifter2();
                                    function getLifter2() {
                                        $.ajax({    //create an ajax request to display.php
                                            type: "GET",
                                            url: "../data/get-lifter-pallet.php?lifter=2",             
                                            dataType: "html",   //expect html to be returned                
                                            success: function(response){ 
                                            lifter2= JSON.parse(response);
                                            // console.log(lifter2.number);

                                            if(lifter2.number == 0){
                                                $("#lifter2").html("No pallet");

                                            }else
                                            {
                                                $("#lifter2").html(lifter2.number);
                                                $("#lifter2").show(); 
                                            } 
                                           
                                            },
                                            complete: function() {
                                                // Schedule the next request when the current one's complete
                                                setTimeout(getLifter2, 300);
                                            }
                                        });
                                    }});
                                                
                            </script>

                            <div class="col-xl-1 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body" align="center">
                                    <div id ="lifter2" style="color:black; font-size: 19px;font-weight:bold;">No Pallet</div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a style="color:black; font-size: 14px;font-weight:bold;">Lifter 2</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-xl-2 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <br>

                        <!-- Inspection  -->
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" align="center">Inspection</li>
                        </ol>

                        <div class="row">

                            <!-- prepare lifter 1 data  -->

                            <script>
                                $(document).ready(function() {               
                                    getLifter3();
                                    function getLifter3() {
                                        $.ajax({    //create an ajax request to display.php
                                            type: "GET",
                                            url: "../data/get-lifter-pallet.php?lifter=3",             
                                            dataType: "html",   //expect html to be returned                
                                            success: function(response){ 
                                            lifter3= JSON.parse(response);
                                            // console.log(lifter3.number);
                                            if(lifter3.number == 0){
                                                $("#lifter3").html("No pallet");

                                            }else
                                            {
                                                $("#lifter3").html(lifter3.number);
                                                $("#lifter3").show(); 
                                            }
                                           
                                            },
                                            complete: function() {
                                                // Schedule the next request when the current one's complete
                                                setTimeout(getLifter3, 300);
                                            }
                                        });
                                    }});
                                                
                            </script>
                        
                            <div class="col-xl-1 col-md-6">
                                <div id="card" class="card bg-dark text-white mb-4">
                                    <div class="card-body" align="center">
                                   <div id ="lifter3"  style="color:white; font-size: 19px;font-weight:bold;">No Pallet</div>
                                    </div>
                                    
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Lifter 3</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                         
                            <?php for($i=1;$i<=18;$i++):?>

                                <script>
                                $(document).ready(function() {               
                                    getStationInspection();
                                    function getStationInspection() {
                                        $.ajax({    //create an ajax request to display.php
                                            type: "GET",
                                            url: "../data/get-station-inspection-pallet.php?station=<?php echo $i;?>",             
                                            dataType: "html",   //expect html to be returned                
                                            success: function(response){ 
                                            station= JSON.parse(response);
                                            // console.log("station"+station.station);
                                            stationNo = <?php echo $i?>;

                                            if(station.number == 0){
                                                $("#stationI"+stationNo).html("No pallet");

                                            }else
                                            {
                                                $("#stationI"+stationNo).html(station.number);
                                                $("#stationI"+stationNo).show(); 
                                            }
                                            
                                           
                                            },
                                            complete: function() {
                                                // Schedule the next request when the current one's complete
                                                setTimeout(getStationInspection, 300);
                                            }
                                        });
                                    }});
                                                
                            </script>
                            <div class="col-xl-1 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body" align="center">
                                    <div id ="stationI<?php echo $i?>" style="color:white; font-size: 19px;font-weight:bold;"><h5 style="font-size:5px">No Pallet</h5></div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Station <?php echo $i;?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <?php endfor;?>

                            <script>
                                $(document).ready(function() {               
                                    getLifter4();
                                    function getLifter4() {
                                        $.ajax({    //create an ajax request to display.php
                                            type: "GET",
                                            url: "../data/get-lifter-pallet.php?lifter=4",             
                                            dataType: "html",   //expect html to be returned                
                                            success: function(response){ 
                                            lifter4= JSON.parse(response);
                                            // console.log(lifter4.number);

                                            if(lifter4.number == 0){
                                                $("#lifter4").html("No pallet");

                                            }else
                                            {
                                                $("#lifter4").html(lifter4.number);
                                                $("#lifter4").show(); 
                                            }

                                           
                                            },
                                            complete: function() {
                                                // Schedule the next request when the current one's complete
                                                setTimeout(getLifter4, 300);
                                            }
                                        });
                                    }});
                                                
                            </script>

                            <div class="col-xl-1 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body" align="center">
                                    <div id ="lifter4" style="color:white; font-size: 19px;font-weight:bold;">No Pallet</div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Lifter 4</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                      
                        
                    </div>
            </main>

                <!-- footer  -->
                <?php include("../../component/footer.html"); ?>
        
            </div>

    </div>

    <script src="../../../dist/js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <!-- <script src="../../../dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->
    <script src="../../../dist/js/scripts.js"></script>


</body>
</html>