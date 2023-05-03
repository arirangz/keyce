const characterImagesPath = "assets/images/character/";
const animationDuration = 4000;
const decreaseDuration = 1000;
const animationsImage = document.getElementById("animationsImage");
const gameOverTitle = document.getElementById("gameOverTitle");

const feedButton = document.getElementById("feed");
const sleepButton = document.getElementById("sleep");
const playButton = document.getElementById("play");
const studyButton = document.getElementById("study");
const startButton = document.getElementById("start");

const hungerBar = document.getElementById("hungerBar");
const energyBar = document.getElementById("energyBar");
const happinessBar = document.getElementById("happinessBar");
const studyBar = document.getElementById("studyBar");


let currentImage = "idle.gif";
let imageTimeout;
let decreaseTimeout;

const Tamagotchi = {
  hunger: 40,
  energy: 80,
  happiness: 50,
  study: 30,
};

function decreaseAll() {
  Tamagotchi.hunger -= 10;
  Tamagotchi.energy -= 2;
  Tamagotchi.happiness -= 5;
  Tamagotchi.study -= 1;

  checkGameover();

  decreaseTimeout = setTimeout(function() {
    decreaseAll();
    refreshStats();
  }, decreaseDuration);
}

function checkGameover() {
  if (Tamagotchi.hunger <= 0 || Tamagotchi.study <= 0 || Tamagotchi.energy <= 0  || Tamagotchi.happiness <= 0 ) {
    Tamagotchi.hunger = 0;
    Tamagotchi.study = 0;
    Tamagotchi.happiness = 0;
    Tamagotchi.energy = 0;
    gameOverTitle.classList.remove("hidden");
    animationsImage.src = characterImagesPath + "tired.gif";
    disableButtons();
    clearTimeout(decreaseTimeout);
    clearTimeout(imageTimeout);
    startButton.classList.remove("hidden");
    startButton.disabled = false;
  }
}

function initialisation() {
  Tamagotchi.energy = 50;
  Tamagotchi.hunger = 70;
  Tamagotchi.study = 60;
  Tamagotchi.happiness = 40;
  decreaseAll();
  refreshStats();
  enableButtons();
  animationsImage.src = characterImagesPath + "idle.gif";
  startButton.classList.add("hidden");
  gameOverTitle.classList.add("hidden");
}

function disableButtons() {
  const buttons = document.querySelectorAll("#actions button");

  buttons.forEach((button) => {
    button.disabled = true;
  });

}

function enableButtons() {
  const buttons = document.querySelectorAll("#actions button");

  buttons.forEach((button) => {
    button.disabled = false;
  });

}

function refreshImage() {
  disableButtons();
  animationsImage.src = characterImagesPath + currentImage;
  clearTimeout(imageTimeout);
  clearTimeout(decreaseTimeout);
  imageTimeout = setTimeout(function () {
    animationsImage.src = characterImagesPath + "idle.gif";
    enableButtons();
    decreaseAll();
  }, animationDuration);
}

function refreshStats() {
  if (Tamagotchi.hunger < 0) {
    Tamagotchi.hunger = 0;
  }
  hungerBar.value = Tamagotchi.hunger;

  if (Tamagotchi.energy < 0) {
    Tamagotchi.energy = 0;
  }
  energyBar.value = Tamagotchi.energy;

  if (Tamagotchi.happiness < 0) {
    Tamagotchi.enhappinessergy = 0;
  }
  happinessBar.value = Tamagotchi.happiness;
  
  if (Tamagotchi.study < 0) {
    Tamagotchi.study = 0;
  }
  studyBar.value = Tamagotchi.study;
}

function actionManagement(action, value) {
  currentImage = action + ".gif";
  if (Tamagotchi[action] < 100) {
    Tamagotchi[action] += value;
  } else {
    currentImage = "no.gif";
  }
  refreshStats();
  refreshImage();
}

feedButton.addEventListener("click", function () {
  actionManagement("hunger", 30);
});
sleepButton.addEventListener("click", function () {
  actionManagement("energy", 40);
});
playButton.addEventListener("click", function () {
  actionManagement("happiness", 15);
});
studyButton.addEventListener("click", function () {
  actionManagement("study", 10);
});
startButton.addEventListener("click", function() {
  initialisation();
});

initialisation();
