const greetButton = document.getElementById("greetButton");
greetButton.addEventListener("click", function() {
  const nameInput = document.getElementById("nameInput");
  const name = nameInput.value;
  const greetingMessage = "Hello " + name + "!";
  alert(greetingMessage);
});

const piNumber = 3.141592653;

console.log("Hello!");

alert("Hello!");

// We get the div element
const greetingDiv = document.getElementById("greetingMessage");
// We replace the content
greetingDiv.textContent = "Hello!";