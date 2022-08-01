var simp = document.getElementById("Simple-int")

simp.addEventListener('click',()=> {
  var p, t, r, si;
  p = document.getElementById("first");
  t = document.getElementById("second");
  r = document.getElementById("third");
  if (p.value =='' || t.value =='' || r.value =='') {
    alert("Insert values")
  } else {
    si = parseInt((p.value * t.value * r.value) / 100);
  amount = p * Math.pow(1 + r / 100, t);
  ci = amount - p;
  document.getElementById("num").innerHTML = "Simple interest : " + si;
 // document.getElementById("num1").innerHTML = "Compound interest : " + ci;
}
})