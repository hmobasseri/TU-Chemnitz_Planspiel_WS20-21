<?php
    require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Exotic Places </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <h3 class="text-center text-light bg-info p-2">View Exotic Places - Learn About Histroy, Tourism, Culture & Nature In Saxony</h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <h4>All Places</h4>
                <a class="btn btn-success" href="index.html">Go Back</a><br>
                <hr>
                <h6 class="text-info">Select Exotic Places</h6>
                <ul class="list-group">
                    <?php 
                        $sql="SELECT DISTINCT p_type FROM place ORDER BY p_type";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input places_check" value ="<?= $row['p_type']; ?>" id="p_type"><?=$row['p_type']; ?>
                            </label>
                        </div>

                    </li>
                    <?php } ?>           
                </ul>

                <h6 class="text-info">Select PostCode</h6>
                <ul class="list-group">
                    <?php 
                        $sql="SELECT DISTINCT postcode FROM place ORDER BY postcode";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input places_check" value ="<?= $row['postcode']; ?>" id="postcode"><?=$row['postcode']; ?>
                            </label>
                        </div>

                    </li>
                    <?php } ?>           
                </ul>

                <h6 class="text-info">Select Cities</h6>
                <ul class="list-group">
                    <?php 
                        $sql="SELECT DISTINCT p_city FROM place ORDER BY p_city";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input places_check" value ="<?= $row['p_city']; ?>" id="p_city"><?=$row['p_city']; ?>
                            </label>
                        </div>

                    </li>
                    <?php } ?>           
                </ul>

                <h6 class="text-info">Select State</h6>
                <ul class="list-group">
                    <?php 
                        $sql="SELECT DISTINCT p_state FROM place ORDER BY p_state";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input places_check" value ="<?= $row['p_state']; ?>" id="p_state"><?=$row['p_state']; ?>
                            </label>
                        </div>

                    </li>
                    <?php } ?>           
                </ul>

            </div>
            <div class="col-lg-10">
                 <h5 class="text-center" id="textChange">View All Exotic Places</h5>
                 <hr>
                 <div class="text-center">
                     <img src="images/loader.gif" id="loader" width="200" style="display:none;">
                 </div>
                 <div class="row" id="result">
                        <?php
                            $sql="SELECT * FROM place";
                            $result=$conn->query($sql);
                            while($row=$result->fetch_assoc()){
                        ?>
                        <div class="col-md-3 mb-2">
                            <div class="card-deck">
                                <div class="card border-secondary">
                                    <img src="<?= $row['p_image']; ?>" class="card-img-top">

                                    <div class="card-body">
                                        <h4 class="card-title text-danger"> <?= $row['p_type']; ?></h4>
                                        <p>
                                            Address: <?= $row['p_address']; ?><br>
                                            City: <?= $row['p_city']; ?><br>
                                            State: <?= $row['p_state']; ?><br>
                                            PostCode: <?= $row['postcode']; ?><br>
                                            Longitude: <?= $row['lat']; ?><br>
                                            Latitude: <?= $row['lng']; ?><br>
                                        </p>
                                        <a href="#" class="btn btn-success btn-block"> <?= $row['p_name']; ?> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                 </div>          
            </div>
        </div>

    </div>
    <script type ="text/javascript">
                $(document).ready(function(){
                    
                    $(".places_check").click(function(){
                        $("#loader").show();

                        var action = 'data';
                        var p_type = get_filter_text('p_type');
                        var postcode = get_filter_text('postcode');
                        var p_city = get_filter_text('p_city');
                        var p_state = get_filter_text('p_state');

                        $.ajax({
                            url:'action.php',
                            method:'POST',
                            data:{action:action,p_type:p_type,postcode:postcode,p_city:p_city,p_state:p_state},
                            success:function(response){
                                $("#result").html(response);
                                $("#loader").hide();
                                $("#textChange").text("Filtered Places");
                            }
                        });

                    });
                    
                    function get_filter_text(text_id) {
                        var filterData = [];
                        $('#'+text_id+':checked').each(function () {
                        filterData.push($(this).val());
                        });
                        return filterData;
                    }
                });

    </script>
</body>
</html>