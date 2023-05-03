let targetNumber = Math.floor(Math.random() * 100 + 1);


function checkNumber() {
  //create a variable to store user number value
  let userNumberValue = userNumberInput.value;

  total_attempt++;

  attemptDiv.textContent = total_attempt;

  //add a if to compare userNumberValue with targetNumber
  if (userNumberValue > targetNumber) {
    messageDiv.textContent = userNumberValue + " is too big";
  } else if (userNumberValue < targetNumber) {
    messageDiv.textContent = userNumberValue + " is too small";
  } else {
    messageDiv.textContent = userNumberValue + " is correct";
    messageDiv.classList.add("winner");
  }

  // Empty the input
  userNumberInput.value = "";
  // Give back the focus to the input
  userNumberInput.focus();
}

// for input and button
const tryButton = document.getElementById("tryButton");
const userNumberInput = document.getElementById("userNumberInput");
const messageDiv = document.getElementById("messageDiv");
const attemptDiv = document.getElementById("attemptDiv");

let total_attempt = 0;

// add event listener to manage click event
tryButton.addEventListener("click", function () {
    checkNumber();
});

userNumberInput.addEventListener("keypress", function (event) {
  if (event.key === "Enter") {
    checkNumber();
  }
});
