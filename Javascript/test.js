const A = document.getElementById("A");
const B = document.getElementById("B");
const C = document.getElementById("C");
const D = document.getElementById("D");
const correct = document.getElementById("correct");
const incorrect = document.getElementById("incorrect");
const validateBtn = document.getElementById("validate");

function validate() {
  if (A.checked == true) {
    correct.innerHTML = A.value + " Es correcto";
    incorrect.innerHTML = " ";
  } else if (B.checked == true) {
    correct.innerHTML = " ";
    incorrect.innerHTML = B.value + " Es Incorrecto";
  } else if (C.checked == true) {
    correct.innerHTML = " ";
    incorrect.innerHTML = C.value + " Es Incorrecto";
  } else if (D.checked == true) {
    correct.innerHTML = " ";
    incorrect.innerHTML = D.value + " Es Incorrecto";
  }
}
