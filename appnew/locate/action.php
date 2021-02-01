<?php 
    require 'config.php';

    if (isset($_POST['action'])) {
        $sql = "SELECT * FROM place WHERE p_type !=''";

        if (isset($_POST['p_type'])){
            $p_type = implode("','", $_POST['p_type']);
            $sql .="AND p_type IN('".$p_type."')";
        }

        if (isset($_POST['postcode'])){
            $postcode = implode("','", $_POST['postcode']);
            $sql .="AND postcode IN('".$postcode."')";
        }

        if (isset($_POST['p_city'])){
            $p_city = implode("','", $_POST['p_city']);
            $sql .="AND p_city IN('".$p_city."')";
        }

        if (isset($_POST['p_state'])){
            $p_state = implode("','", $_POST['p_state']);
            $sql .="AND p_state IN('".$p_state."')";
        }

        $result = $conn->query($sql);
        $output='';

        if ($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $output .='<div class="col-md-3 mb-2">
                <div class="card-deck">
                    <div class="card border-secondary">
                        <img src="'.$row['p_image'].'" class="card-img-top">

                        <div class="card-body">
                            <h4 class="card-title text-danger"> '.$row['p_type'].'</h4>
                            <p>
                                Address: '.$row['p_address'].'<br>
                                City: '.$row['p_city'].'<br>
                                State: '.$row['p_state'].'<br>
                                PostCode: '.$row['postcode'].'<br>
                                Longitude: '.$row['lat'].'<br>
                                Latitude: '.$row['lng'].'<br>
                            </p>
                            <a href="#" class="btn btn-success btn-block"> '.$row['p_name'].' </a>
                        </div>
                    </div>
                </div>
            </div>';
            }
        }
        else {
            $output = "<h3>No Plcaes Found!</h3>";
        }
        echo $output;
    }
?>