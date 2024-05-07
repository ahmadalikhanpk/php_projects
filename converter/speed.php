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
      <header>Speed conversion</header>
      <form action="" method="GET">

      <div class="form-group">
        <label for="amt">Enter Speed:</label>
        <input type="text" name="amt" id= "amt" placeholder="Enter Speed" class="form-control" required>
      </div>

      <div class="form-group" >
        <label for="from">From: </label>
        <select name="from" id="from" class="form-control" required>
          <option value="km/h">km/s</option>
         
        </select>
      </div>
      
      <div class="form-group" >
        <label for="to">To: </label>
        <select name="to" id="to" class="form-control" required>
          <option value="knots">knots</option>
          <option value="m/s"> m/s</option>
        </select>
      </div>
      <?php 
 if(isset($_REQUEST['convert'])){
  $amt = $_REQUEST['amt'];
  $to =$_REQUEST['to'];
  $from =$_REQUEST['from'];
  $currname = array("m/s" => "m/s",
                    "knots" => "knots");
  $result = 0;
  if($from == "km/h" && $to == "m/s" ){
    $result = $amt * 0.277778;
  }elseif($from == "km/h" && $to == "knots" ){
    $result = $amt * 0.539957;
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
