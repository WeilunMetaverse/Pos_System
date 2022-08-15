<?php
$servername = "43.74.21.81";
$username = "root";
$password = "soemphp";
$dbname = "station_data";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "station_data";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
?>

<html>

<head></head>

<body>


</body>

<script src="vendor/jquery/jquery.slim.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="library/js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="library/js/scripts.js"></script>

<script>
    $(document).ready(function() {



        $("#test").empty();
        $("#test").append('<tr align="center" style="font-weight: bold">' +
            '<td colspan="8"><span><img src="media/loading2.gif" width="50" height="50" alt="Mplify"><p>Loading...</p></span></td></tr>');




    });
    getDataCounter123();


    setInterval(getDataCounter123, 10000);


    function getDataCounter123() {

        $.ajax({ //create an ajax request to display.php
            type: "GET",
            url: "output.json", //Data from folder data
            cache: false,
            dataType: "json", //expect html to be returned
            success: function(response) {

                console.log(response);
                var summaryTable = document.getElementById("test");
                //
                $("#test").empty();
                for (i = 0; i < response.length; i++) {

                    $("#test").append('<tr align="center" >' +
                        '<td><a href="" style="color:white"><span>' + response[i].id + '</span></a></td>' +
                        '<td><span  style="color:white">' + response[i].line + '  </span></td>' +
                        '<td><span  style="color:white">' + response[i].station + '  </span></td>' +
                        '<td><span  style="color:white">' + response[i].station_group + '  </span></td>' +
                        '<td><span  style="color:white">' + response[i].robot + '  </span></td>' +
                        '<td><span  style="color:white">' + response[i].cpu + '  </span></td>' +
                        '<td><span  style="color:white">' + response[i].time_stamp + '  </span></td>' +
                        '<td><span  style="color:white">' + response[i].status + '  </span></td>' +
                        '<td><span  style="color:white">' + response[i].metadata + '  </span></td>' +
                        '<td><span  style="color:white">' + response[i].extra + '  </span></td>' +
                        '<td><span  style="color:white">' + response[i].process + '  </span></td>' +
                        '<td><span  style="color:white">' + response[i].station_model + '  </span></td>'
                    );

                    // console.log(response[i].station);

                }

            }
        })
        <?php
        $sql = mysqli_query($conn, "SELECT * FROM production_line_L33 where station_group = 'assembly'");

        $json = array();
        $json1 = array();
        $json2 = array();
        $json3 = array();
        while ($row = $sql->fetch_assoc()) {
            $json[] = $row['station'];
            $json1[] = $row['robot'];
            $json2[] = $row['cpu'];
            $json3[] = $row['status'];
        }
        ?>

        var array = <?= json_encode($json) ?>;
        var array1 = <?= json_encode($json1) ?>;
        var array2 = <?= json_encode($json2) ?>;
        var array3 = <?= json_encode($json3) ?>;
        console.log(array3);
        // document.getElementById("test").innerHTML = array3;
    }
</script>

</html>