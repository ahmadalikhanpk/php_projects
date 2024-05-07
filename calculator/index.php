<?php
require_once 'calculator.php';
$calculator = new Calculator();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />

    <title>Calculator</title>
  </head>
  <body>
    <div class="container">
      <div class="calculator">
        <form action="" method="post">
          <div class="dispaly">
            <input
              type="text"
              name="input"
              value="<?php echo htmlspecialchars(@$calculator->getResult()) ?>"
            />
          </div>
          <div>
            <input type="submit" value="AC" name="clear" class="hoverEffect" />
            <input
              type="button"
              value="DE"
              onclick="input.value = input.value.toString().slice(0,-1)"
              class="hoverEffect"
            />
            <input type="submit" value="." name="num" class="hoverEffect" />
            <input type="submit" value="/" name="op" class="hoverEffect" />
          </div>
          <div>
            <input type="submit" value="7" name="num" class="hoverEffect" />
            <input type="submit" value="8" name="num" class="hoverEffect" />
            <input type="submit" value="9" name="num" class="hoverEffect" />
            <input type="submit" value="*" name="op" class="hoverEffect" />
          </div>
          <div>
            <input type="submit" value="4" name="num" class="hoverEffect" />
            <input type="submit" value="5" name="num" class="hoverEffect" />
            <input type="submit" value="6" name="num" class="hoverEffect" />
            <input type="submit" value="-" name="op" class="hoverEffect" />
          </div>

          <div>
            <input type="submit" value="1" name="num" class="hoverEffect" />
            <input type="submit" value="2" name="num" class="hoverEffect" />
            <input type="submit" value="3" name="num" class="hoverEffect" />
            <input type="submit" value="+" name="op" class="hoverEffect" />
          </div>
          <div>
            <input type="submit" value="00" name="num" class="hoverEffect" />
            <input type="submit" value="0" name="num" class="hoverEffect" />
            <input
              type="submit"
              value="="
              name="equal"
              class="equal hoverEffect"
            />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
