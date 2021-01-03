<!DOCTYPE html>
<html>
  <head>
    <title>ADM-TECH Map</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="stylesheet" href="style.css">
    
  </head>
  <body>
    <div class="main-block">
      <h1>Search via Address</h1>

      <?php 
	if (isset($_POST["submit_address"])) 
	{
		$address = $_POST["address"];
		$address = str_replace (" ","+", $address);
		?>

		<iframe src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed" width="100%" height="500"></iframe>

		<?php
	}

 ?>


      <form method = "POST";>
        <hr>
        <label id="icon" for="name"><i class="fas fa-globe"></i></label>
        <input type="text" name="address" id="name" placeholder="Input address" required/>

       <hr>
          <div class="btn-block">
          <button type="submit" name="submit_address">Locate</button>
        </div>
       </form>
       </div> 

          <div class="main-block">
      <h1>Search via Coordinates</h1>

      <?php
    if (isset($_POST["submit_info"]))
    {
        $latitude = $_POST["latitude"];
        $longitude = $_POST["longitude"];
        ?>
 
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>
 
        <?php
    }
?>

      <form method="POST">
        <label id="icon" for="name"><i class="fas fa-globe"></i></label>
        <input type="text" name="latitude" id="name" placeholder="latitude" required/>
        <label id="icon" for="name"><i class="fas fa-globe"></i></label>
        <input type="text" name="longitude" id="name" placeholder="longitude" required/>
        <hr>
        <div class="btn-block">
          <button type="submit" name="submit_info">Locate</button>
        </div>
      </form>
    </div>
  </body>
</html>