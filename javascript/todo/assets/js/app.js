const todoInput = document.querySelector("#todo-input");
const addBtn = document.querySelector("#add-btn");
const todoList = document.querySelector("#todo-list");

const todoItems = document.querySelectorAll("#todo-list li");

/* 
  Step 1 Create a function addTodoItem with text as argument
  This function will create a need li element in the todoList
  Inside this function you will need to call saveTodoList()
*/


/*
  Step 2 create event listner for click and keypress Enter
*/



/*
  Step 3 Call the loadTodoList() function
*/


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