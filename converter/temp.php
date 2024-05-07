<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
<title>Measurement conversion</title>
  </head>
  <body>

      <div class="wrepper">
      <header>Temperature conversion</header>
      <form action="" method="GET">

      <div class="form-group">
        <label for="amt">Enter Temperature:</label>
        <input type="text" name="amt" id= "amt" placeholder="Enter Temperature" class="form-control" required>
      </div>

      <div class="form-group" >
        <label for="from">From: </label>
        <select name="from" id="from" class="form-control" required>
          <option value="Celsius">°C</option>
         
        </select>
      </div>
      
      <div class="form-group" >
        <label for="to">To: </label>
        <select name="to" id="to" class="form-control" required>
          <option value="Fahrenheit">°F</option>
          <option value="k"> k</option>
        </select>
      </div>
      <?php 
 if(isset($_REQUEST['convert'])){
  $amt = $_REQUEST['amt'];
  $to =$_REQUEST['to'];
  $from =$_REQUEST['from'];
  $currname = array("k" => "kelvin",
                    "Fahrenheit" => "°F");
  $result = 0;
  if($from == "Celsius" && $to == "k" ){
    $result = $amt + 273.15;
  }elseif($from == "Celsius" && $to == "Fahrenheit" ){
    $result = ($amt *  9/5) + 32.;
}
  echo  "<div class = 'result' ><p>" .$result. " ". $currname["$to"]. "</p> </div>";
 }

?>
     <input type="submit" value="convert" class="btn" name="convert">

    </form>
    <a href="index.php"><button class="btnmain" >Go To Main Page
</button>
    </div>

   
  </body>
</html>
