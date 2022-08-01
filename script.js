var submit = document.getElementById("submit");
submit.addEventListener('click', () => {
  //declaring variables
  var root1, root2;
  var a = document.getElementById("a").value;
  var b = document.getElementById("b").value;
  var c = document.getElementById("c").value;
  var result = document.getElementById("result");
  if ((a.value == '')) {
    alert("enter a number");
  } else if ((b.value = "")) {
    alert('hello')
  } else {
    // calculate discriminant
    var discriminant = b * b - 4 * a * c;

    // condition for real and different roots
    if (discriminant > 0) {
      root1 = (-b + Math.sqrt(discriminant)) / (2 * a);
      root2 = (-b - Math.sqrt(discriminant)) / (2 * a);

      // result
      result.innerHTML =
        "The Roots of the equation is " + root1 + " and " + root2;
    }

    // condition for real and equal roots
    else if (discriminant == 0) {
      root1 = root2 = -b / (2 * a);

      // result
      result.innerHTML =
        "The Roots of the equation is " + root1 + " and " + root2;
    }

    // if roots are not real
    else {
      var realPart = (-b / (2 * a)).toFixed(2);
      var imagPart = (Math.sqrt(-discriminant) / (2 * a)).toFixed(2);

      // result
      result.innerHTML =
        "The Roots of the equation is " +
        realPart +
        " + " +
        imagPart +
        "i" +
        " and " +
        realPart +
        " - " +
        imagPart +
        "i";
    }
  }
});

//Simple interest
var simp = document.getElementById("Simple-int")

simp.addEventListener('click',()=> {
  let p, t, r, si, ci;
  p = document.getElementById("first").value;
  t = document.getElementById("second").value;
  r = document.getElementById("third").value;
  si = parseInt((p * t * r) / 100);
  amount = p * Math.pow(1 + r / 100, t);
  ci = amount - p;
  document.getElementById("num").innerHTML = "Simple interest : " + si;
  document.getElementById("num1").innerHTML = "Compound interest : " + ci;
})
function compound_interest() {
  let p, t, r, ci, error;
  p = document.getElementById("first").value;
  t = document.getElementById("second").value;
  r = document.getElementById("third").value;
  error = document.getElementById("error");
  if (p == "" || t == "") {
    // error.innerHTML = "Insert value"
    alert("enter a valid number");
  } else {
    amount = p * Math.pow(1 + r / 100, t);
    ci = amount - p;
    //document.getElementById("num").innerHTML = "Simple interest : " + si;
    document.getElementById("num1").innerHTML = "Compound interest : " + ci;
  }
  NaN
  if (condition) {
    
  } else {
    
  }
}

//Simul-eqn with 2 unknowns
var Simult_eq = document.getElementById("calc");
Simult_eq.addEventListener('click', ()=>{
  // var a = document.getElementById("first-value");
  // var b = document.getElementById("second-value");
  // var C = document.getElementById("third-value");
  // var d = document.getElementById("fourth");
  // var e = document.getElementById("fifth");
  // var F = document.getElementById("sixth");
  console.log('Ive been clicked')
  // if(a.value == '' || b.value =='' || C.value =='' || d.value =='' || e.value =='' ||F.value ==''){
  //   alert('enter the right values')
  // }else{
  //   var x = (C.value*e.value - b.value*F.value)/(a.value*e.value - b.value*d.value)
  //   var y = (a.value*F.value - C.value*d.value)/(a.value*e.value - b.value*d.value)
  //   document.getElementById('num').innerHTML="The value of x is " + x + "and the value of y is " + y
  // }
})
