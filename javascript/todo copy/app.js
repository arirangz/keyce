const todoInput = document.querySelector("#todo-input");
const addBtn = document.querySelector("#add-btn");
const todoList = document.querySelector("#todo-list");

const todoItems = document.querySelectorAll("#todo-list li");

loadTodoList();

todoInput.addEventListener("keypress", function(event) {
  if (event.key === "Enter") {
    text = todoInput.value;
    addTodoItem(text);
  }
});

addBtn.addEventListener("click", function() {
  text = todoInput.value;
  addTodoItem(text);
});

function addTodoItem(text) {
  if (text != "") {
    const todoItem = document.createElement("li");
    todoItem.textContent = text;
    
    // Add event listener to the new list item
    todoItem.addEventListener("click", function() {
      todoItem.remove();
      saveTodoList();
    });
    todoList.appendChild(todoItem);
    todoInput.value = "";
    saveTodoList();
  }

}

// Load the todo list from a cookie on page load
function loadTodoList() {
  const todoListCookie = getCookie("todoList");
  if (todoListCookie !== null) {
    const todoItemsArray = JSON.parse(todoListCookie);
    todoItemsArray.forEach(todoText => {
      addTodoItem(todoText);
    });
  }
}

function saveTodoList() {
  const todoItems = todoList.querySelectorAll("li");
  const todoItemsArray = [];

  // Loop through each todo item and add its text content to the array
  todoItems.forEach(function(todoItem) {
    const todoText = todoItem.firstChild.textContent;
    todoItemsArray.push(todoText);
  });

  // Convert the array to JSON and save it to a cookie
  const todoItemsJson = JSON.stringify(todoItemsArray);
  const cookieExpiration = getCookieExpiration();
  const cookiePath = "/";

  document.cookie = "todoList=" + todoItemsJson + "; expires=" + cookieExpiration + "; path=" + cookiePath;
}

// Get the expiration date for the todo list cookie
function getCookieExpiration() {
  const expirationDate = new Date();
  // The cookie will expire in a year
  expirationDate.setFullYear(expirationDate.getFullYear() + 1);
  return expirationDate.toUTCString();
}

function getCookie(name) {
  const cookieString = document.cookie;
  const cookies = cookieString.split("; ");

  let foundCookieValue = null;

  cookies.forEach(function(cookie) {
    const [cookieName, cookieValue] = cookie.split("=");
    if (cookieName === name) {
      foundCookieValue = cookieValue;
    }
  });

  return foundCookieValue;
}