const inputs = document.querySelectorAll(".input");
const button = document.getElementsByClassName(".btn");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

function isEmpty() {
  var a = document.forms["Form"]["email"].value;
  var b = document.forms["Form"]["phone"].value;
  if (a == null || a == "", b == null || b == "") {
    alert("Please enter phone numbr or email");
    return false;
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
  button.addEventListener("click", isEmpty);
});



