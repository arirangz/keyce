let targetNumber = Math.floor((Math.random() * 100) + 1 );

// for input and button
const tryButton = document.getElementById("tryButton");
const userNumberInput = document.getElementById("userNumberInput");

// add event listener to manage click event
tryButton.addEventListener("click", function () {
    //create a variable to store user number value
    let userNumberValue = userNumberInput.value;
    
    //add a if to compare userNumberValue with targetNumber
    if (userNumberValue > targetNumber) {
        alert("Your number is too big");
    } else if (userNumberValue < targetNumber) {
        alert("Your number is too small");
    } else {
        alert("You won!!!");
    }
});
