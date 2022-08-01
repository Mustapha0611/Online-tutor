<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Simultaneous Eqn Solver</title>
</head>
<body>
    <div class='box'>
        <div class='wave -one'></div>
        <div class='wave -two'></div>
        <div class='wave -three'></div>
      </div>
      <h2>Simultaneous Eqn Solver</h2>
    <div class="container">
       
        <div class="container-child">
        <div class="inputs">
           <input type="text" id="first-value" > x + <input type="text" id="second-value"> y + <input type="text" id="second-value"> z = <input type="text" id="third-value"><br><br>
           <input type="text" id="first-value" > x + <input type="text" id="second-value"> y + <input type="text" id="second-value"> z = <input type="text" id="third-value"><br><br>
           <input type="text" id="first-value" > x + <input type="text" id="second-value"> y + <input type="text" id="second-value"> z = <input type="text" id="third-value">
            <button id="calc">Calculate</button>
        </div>
            <div id="res">
             <p id="num" style="text-align:center;"></p>
            </div>
        </div>
    </div>
    <script src="eqn.js"></script>
</body>

</html>