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
      <header>Mass conversion</header>
      <form action="" method="GET">

      <div class="form-group">
        <label for="amt">Enter Mass:</label>
        <input type="text" name="amt" id= "amt" placeholder="Enter Mass" class="form-control" required>
      </div>

      <div class="form-group" >
        <label for="from">From: </label>
        <select name="from" id="from" class="form-control" required>
          <option value="kg">Kilogram</option>
          <option value="g">Grams</option>
        </select>
      </div>
      
      <div class="form-group" >
        <label for="to">To: </label>
        <select name="to" id="to" class="form-control" required>
        <option value="g">Grams</option>
          <option value="kg">Kilogram</option>
        
        </select>
      </div>
      <?php 
 if(isset($_REQUEST['convert'])){
  $amt = $_REQUEST['amt'];
  $to =$_REQUEST['to'];
  $from =$_REQUEST['from'];
  $currname = array("g" => "Grams",
                    "kg" => "Kilograms");
  $result = 0;
  if($from == "g" && $to == "kg" ){
    $result = $amt * 1000;
  }elseif($from == "g" && $to == "g" ){
    $result = $amt * 1;
  }elseif($from == "kg" && $to == "g" ){
    $result = $amt /1000 ;
  }elseif($from == "kg" && $to == "kg" ){
    $result = $amt * 1;
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
