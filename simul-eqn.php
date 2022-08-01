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
           <input type="text" id="first-value" > x + <input type="text" id="second-value"> y = <input type="text" id="third-value"><br><br>
           <input type="text" id="fourth" > x + <input type="text" id="fifth"> y = <input type="text" id="sixth">
            <button id="calc">Calculate</button>
        </div>
        <h4 id="Error" style="text-align:center; padding:20px; background:white; color:red; display:none;">Please Enter the Right values</h4>
            <div id="res">
             <p id="num" style="text-align:center;"></p>
            </div>
        </div>
    </div>
    <script>       
        //Simul-eqn with 2 unknowns
        var Simult_eq = document.getElementById("calc");
        Simult_eq.addEventListener('click', ()=>{
        var a = document.getElementById("first-value");
        var b = document.getElementById("second-value");
        var C = document.getElementById("third-value");
        var d = document.getElementById("fourth");
        var e = document.getElementById("fifth");
        var F = document.getElementById("sixth");
        var error = document.getElementById("Error");

        if(a.value == '' || b.value =='' || C.value =='' || d.value =='' || e.value =='' ||F.value ==''){
            
            error.style.display = "block"
        }else{
            error.style.display = "none"
            var x = (C.value*e.value - b.value*F.value)/(a.value*e.value - b.value*d.value)
            var y = (a.value*F.value - C.value*d.value)/(a.value*e.value - b.value*d.value)
            document.getElementById('num').innerHTML="The value of x is " + x.toFixed(2) + " and the value of y is " + y.toFixed(2)
        }
        })
  </script>
     
</body>

</html>