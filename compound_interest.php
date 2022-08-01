<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        @media screen and (min-width: 700px) {
  * {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
  }
  body{
	margin: 0;
	padding: 0;
	background-color: #0e6cc4;
	overflow-x:hidden;
	overflow-y:hidden;
}

/*waves****************************/


.box {
	position: fixed;
	top: 0;
	transform: rotate(80deg);
	left: 0;
}

.wave {
	position: fixed;
	top: 0;
	left: 0;
  opacity: .4;
  position: absolute;
  top: 3%;
  left: 10%;
  background: #0af;
  width: 1500px;
  height: 1300px;
  margin-left: -150px;
  margin-top: -250px;
  transform-origin: 50% 48%;
  border-radius: 43%;
  animation: drift 7000ms infinite linear;
}

.wave.-three {
  animation: drift 7500ms infinite linear;
	position: fixed;
	background-color: #77daff;
}

.wave.-two {
  animation: drift 3000ms infinite linear;
  opacity: .1;
  background: black;
	position: fixed;
}

.box:after {
  content: '';
  display: block;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 11;
  transform: translate3d(0, 0, 0);
}

@keyframes drift {
  from { transform: rotate(0deg); }
  from { transform: rotate(360deg); }
}

/*LOADING SPACE*/

.contain {
	animation-delay: 4s;
	z-index: 1000;
	position: fixed;
	top: 0;
	left: 0;
	bottom: 0;
	right: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row nowrap;
  flex-flow: row nowrap;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;

  background: #25a7d7;
  background: -webkit-linear-gradient(#25a7d7, #2962FF);
  background: linear-gradient(#25a7d7, #25a7d7);
}

.icon {
  width: 100px;
  height: 100px;
  margin: 0 5px;
}

/*Animation*/
.icon:nth-child(2) img {-webkit-animation-delay: 0.2s;animation-delay: 0.2s}
.icon:nth-child(3) img {-webkit-animation-delay: 0.3s;animation-delay: 0.3s}
.icon:nth-child(4) img {-webkit-animation-delay: 0.4s;animation-delay: 0.4s}

.icon img {
  -webkit-animation: anim 2s ease infinite;
  animation: anim 2s ease infinite;
  -webkit-transform: scale(0,0) rotateZ(180deg);
  transform: scale(0,0) rotateZ(180deg);
}

@-webkit-keyframes anim{
  0% {
    -webkit-transform: scale(0,0) rotateZ(-90deg);
    transform: scale(0,0) rotateZ(-90deg);opacity:0
  }
  30% {
    -webkit-transform: scale(1,1) rotateZ(0deg);
    transform: scale(1,1) rotateZ(0deg);opacity:1
  }
  50% {
    -webkit-transform: scale(1,1) rotateZ(0deg);
    transform: scale(1,1) rotateZ(0deg);opacity:1
  }
  80% {
    -webkit-transform: scale(0,0) rotateZ(90deg);
    transform: scale(0,0) rotateZ(90deg);opacity:0
  }
}

@keyframes anim{
  0% {
    -webkit-transform: scale(0,0) rotateZ(-90deg);
    transform: scale(0,0) rotateZ(-90deg);opacity:0
  }
  30% {
    -webkit-transform: scale(1,1) rotateZ(0deg);transform: scale(1,1) rotateZ(0deg);opacity:1
  }
  50% {
    -webkit-transform: scale(1,1) rotateZ(0deg);
    transform: scale(1,1) rotateZ(0deg);opacity:1
  }
  80% {
    -webkit-transform: scale(0,0) rotateZ(90deg);
    transform: scale(0,0) rotateZ(90deg);opacity:0
  }
}
h2{
    margin: 50px;
    font-size: 3rem;
    text-align: center;
    color: aliceblue;
}
  .container {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    /* background: rgb(238, 238, 238); */
    width: 100vw;
    height: 90%;
  }
  .container-child {
    /* background-color: rgb(230, 230, 230); */
    height: 400px;
    color: aliceblue;
    width: 560px;
  }
  .container-child > p {
    margin: 20px;
    font-size: 24px;
    text-align: center;
  }
  .inputs {
    text-align: center;
  }
  input[type="text"] {
    width: 30px;
    margin-top: 10px;
    padding: 7px;
    outline: invert;
    border: none;
  }
  button {
    display: block;
    text-align: center;
    font-size: 28px;
    padding: 10px;
    border: #0af;
    color: aliceblue;
    background-image: linear-gradient( to right, rgb(111, 141, 204),rgb(38, 49, 209) );
    margin: 20px 40%;
    border-radius: 10px;
  
  }

  button:hover{
    background-image: linear-gradient( to right, rgb(0, 47, 150),rgb(136, 140, 194) );
    transition: all .2s;
  }
  #result {
    margin: 100px 20px;
    font-size: 2rem;
    text-align: center;
  }
}
@media screen and (max-width:699px) {
    * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
      }
      body{
        margin: 0;
        padding: 0;
        background-color: #0e6cc4;
        overflow-x:hidden;
        overflow-y:hidden;
    }
    
    /*waves****************************/
    
    
    .box {
        position: fixed;
        top: 0;
        transform: rotate(80deg);
        left: 0;
    }
    
    .wave {
        position: fixed;
        top: 0;
        left: 0;
      opacity: .4;
      position: absolute;
      top: 3%;
      left: 10%;
      background: #0af;
      width: 1500px;
      height: 1300px;
      margin-left: -150px;
      margin-top: -250px;
      transform-origin: 50% 48%;
      border-radius: 43%;
      animation: drift 7000ms infinite linear;
    }
    
    .wave.-three {
      animation: drift 7500ms infinite linear;
        position: fixed;
        background-color: #77daff;
    }
    
    .wave.-two {
      animation: drift 3000ms infinite linear;
      opacity: .1;
      background: black;
        position: fixed;
    }
    
    .box:after {
      content: '';
      display: block;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      z-index: 11;
      transform: translate3d(0, 0, 0);
    }
    
    @keyframes drift {
      from { transform: rotate(0deg); }
      from { transform: rotate(360deg); }
    }
    
    /*LOADING SPACE*/
    
    .contain {
        animation-delay: 4s;
        z-index: 1000;
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-flow: row nowrap;
      flex-flow: row nowrap;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    
      background: #25a7d7;
      background: -webkit-linear-gradient(#25a7d7, #2962FF);
      background: linear-gradient(#25a7d7, #25a7d7);
    }
    
    .icon {
      width: 100px;
      height: 100px;
      margin: 0 5px;
    }
    
    /*Animation*/
    .icon:nth-child(2) img {-webkit-animation-delay: 0.2s;animation-delay: 0.2s}
    .icon:nth-child(3) img {-webkit-animation-delay: 0.3s;animation-delay: 0.3s}
    .icon:nth-child(4) img {-webkit-animation-delay: 0.4s;animation-delay: 0.4s}
    
    .icon img {
      -webkit-animation: anim 2s ease infinite;
      animation: anim 2s ease infinite;
      -webkit-transform: scale(0,0) rotateZ(180deg);
      transform: scale(0,0) rotateZ(180deg);
    }
    
    @-webkit-keyframes anim{
      0% {
        -webkit-transform: scale(0,0) rotateZ(-90deg);
        transform: scale(0,0) rotateZ(-90deg);opacity:0
      }
      30% {
        -webkit-transform: scale(1,1) rotateZ(0deg);
        transform: scale(1,1) rotateZ(0deg);opacity:1
      }
      50% {
        -webkit-transform: scale(1,1) rotateZ(0deg);
        transform: scale(1,1) rotateZ(0deg);opacity:1
      }
      80% {
        -webkit-transform: scale(0,0) rotateZ(90deg);
        transform: scale(0,0) rotateZ(90deg);opacity:0
      }
    }
    
    @keyframes anim{
      0% {
        -webkit-transform: scale(0,0) rotateZ(-90deg);
        transform: scale(0,0) rotateZ(-90deg);opacity:0
      }
      30% {
        -webkit-transform: scale(1,1) rotateZ(0deg);transform: scale(1,1) rotateZ(0deg);opacity:1
      }
      50% {
        -webkit-transform: scale(1,1) rotateZ(0deg);
        transform: scale(1,1) rotateZ(0deg);opacity:1
      }
      80% {
        -webkit-transform: scale(0,0) rotateZ(90deg);
        transform: scale(0,0) rotateZ(90deg);opacity:0
      }
    }
    h2{
        margin: 50px;
        font-size: 2rem;
        text-align: center;
        color: aliceblue;
    }
      .container {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        /* background: rgb(238, 238, 238); */
        width: 100vw;
        height: 90%;
      }
      .container-child {
        /* background-color: rgb(230, 230, 230); */
        height: 400px;
        margin: 0 auto;
        position: relative;
        color: aliceblue;
    
      }
      .container-child > p {
        margin: 20px;
        font-size: 24px;
        text-align: center;
      }
      .inputs {
        text-align: center;
      }
      input[type="text"] {
        position: relative;
        width: 30px;
        margin-top: 10px;
        padding: 7px;
        
        border: none;
      }
     
      button {
        display: block;
        text-align: center;
        font-size: 28px;
        padding: 10px;
        border: #0af;
        color: aliceblue;
        background-image: linear-gradient( to right, rgb(111, 141, 204),rgb(38, 49, 209) );
        margin: 20px auto;
        border-radius: 10px;
      }
    
      button:hover{
        background-image: linear-gradient( to right, rgb(0, 47, 150),rgb(136, 140, 194) );
        transition: 4s;
      }
      #result {
        margin: 100px 0;
        text-align: center;
        font-size: 1.5rem;
      }
}
    </style>
    <title>Compound interest solver</title>
</head>
<body>
    <div class='box'>
        <div class='wave -one'></div>
        <div class='wave -two'></div>
        <div class='wave -three'></div>
      </div>
      <h2>Compound Interest Solver</h2>
    <div class="container">
       
        <div class="container-child">
            <p>
              Simple Interest = PTR/100 <br>
              Compound Interest = P (1 + r/100)<sup>nT</sup> - P
            </p>
        <div class="inputs">
            P = <input type="text" id="first" >
            T = <input type="text" id="second">
            R = <input type="text" id="third">
            <button onclick = "compound_interest()"  type="submit">Calculate</button>
        </div>
        <h4 id="error" style="display:none; text-align:center; padding:20px; background:white; color:red;"></h4>
            <div id="res">
             <p id="num1" style="text-align:center;"></p>
            </div>
        </div>
    </div>
    <!-- <script src="script.js"></script> -->
</body>
<script>
    function compound_interest() {
  let p, t, r, ci, error;
  p = document.getElementById("first").value;
  t = document.getElementById("second").value;
  r = document.getElementById("third").value;
  error = document.getElementById("error");
  if (p == "" || t == "") {
    error.style.display = "block"
    error.innerHTML = "Please Insert the appropriate values"
  }else {
    
    error.style.display = "none"
    amount = p * Math.pow(1 + r / 100, t);
    ci = amount - p;
    //document.getElementById("num").innerHTML = "Simple interest : " + si;
    document.getElementById("num1").innerHTML = "Compound interest : " + ci;
  }
}
</script>
</html>