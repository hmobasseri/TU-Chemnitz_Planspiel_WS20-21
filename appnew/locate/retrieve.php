<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrieving all Data</title>
    <style>
    body{
        background-color: lightgreen;
    }
    table,th,td{
        border: 1px solid black;
        width: 1300px;
        background-color: lightblue;
    }
    .btn{
        width: 10%;
        height: 5%;
        font-weight: bold;
    }

    </style>
</head>
<body>
    <center>
    <h1> RETRIEVE /GET ALL DATA FROM DATABASE </h1>
    <h1> Data Report </h1>

    <div class="container">
        <form action="" method="POST">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Features</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    
                </tr>
            
            <input type="submit" class="btn" name="search" value="GET ALL LOCATIONS"><br>

        </form>

<?php 
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'places');

if (isset($_POST['search'])) 
{
    $query = "SELECT * FROM `locations`";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) 
    {
        ?>

        <tr>
            <td> <?php echo $row['name'] ?> </td>
            <td> <?php echo $row['address'] ?> </td>
            <td> <?php echo $row['features'] ?> </td>
            <td> <?php echo $row['lat'] ?> </td>
            <td> <?php echo $row['lng'] ?> </td>
        </tr>

        <?php
    }
}

?>
    
    </div><br>
    <a class="btn" href="index.html">Go Back</a><br>
    </center>
</body>
</html>