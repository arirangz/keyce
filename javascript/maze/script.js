/*
0: Empty
1: Player
2: Wall
3: Exit
*/
const level = [
  [1, 0, 0, 2, 0, 0, 2, 2, 2, 0],
  [0, 2, 2, 0, 0, 0, 2, 0, 0, 0],
  [0, 0, 0, 0, 2, 0, 0, 0, 0, 2],
  [2, 2, 2, 0, 0, 2, 0, 2, 0, 0],
  [0, 0, 0, 2, 0, 2, 0, 0, 2, 0],
  [0, 2, 0, 2, 0, 0, 2, 0, 2, 0],
  [0, 2, 0, 0, 2, 0, 2, 0, 2, 0],
  [0, 2, 0, 2, 0, 0, 2, 0, 2, 0],
  [0, 2, 2, 0, 0, 0, 0, 0, 2, 0],
  [0, 0, 0, 2, 0, 2, 0, 2, 2, 0],
  [0, 2, 0, 0, 2, 0, 2, 0, 0, 0],
  [0, 2, 0, 2, 0, 0, 0, 0, 2, 0],
  [0, 2, 0, 2, 0, 2, 0, 2, 2, 0],
  [3, 2, 0, 0, 0, 2, 0, 0, 2, 0],
];

const grid = document.querySelector(".grid");
const cells = [];
let currentIndex = [0, 0];

// Initialize the grid
for (let i = 0; i < level.length; i++) {
  const row = level[i];
  for (let j = 0; j < row.length; j++) {
    const cell = document.createElement("div");
    cell.classList.add("cell");
    if (row[j] === 1) {
      cell.classList.add("player");
      currentIndex = [i, j];
    } else if (row[j] === 2) {
      cell.classList.add("wall");
    } else if (row[j] === 3) {
      cell.classList.add("exit");
    }
    grid.appendChild(cell);
    cells.push(cell);
  }
}

// Add event listener for keydown events
document.addEventListener("keydown", function (event) {
  // Remove the "player" class from the current cell
  cells[currentIndex[0] * level[0].length + currentIndex[1]].classList.remove(
    "player"
  );

  // Move the player based on the arrow key pressed
  if (
    event.key === "ArrowLeft" &&
    currentIndex[1] > 0 &&
    level[currentIndex[0]][currentIndex[1] - 1] !== 2
  ) {
    currentIndex[1]--;
  } else if (
    event.key === "ArrowRight" &&
    currentIndex[1] < level[0].length - 1 &&
    level[currentIndex[0]][currentIndex[1] + 1] !== 2
  ) {
    currentIndex[1]++;
  } else if (
    event.key === "ArrowUp" &&
    currentIndex[0] > 0 &&
    level[currentIndex[0] - 1][currentIndex[1]] !== 2
  ) {
    currentIndex[0]--;
  } else if (
    event.key === "ArrowDown" &&
    currentIndex[0] < level.length - 1 &&
    level[currentIndex[0] + 1][currentIndex[1]] !== 2
  ) {
    currentIndex[0]++;
  }

  // Add the "player" class to the new cell
  cells[currentIndex[0] * level[0].length + currentIndex[1]].classList.add("player");

  // Check if the player has reached the exit
  if (
    cells[
      currentIndex[0] * level[0].length + currentIndex[1]
    ].classList.contains("exit")
  ) {
    alert("You win!");
  }
});