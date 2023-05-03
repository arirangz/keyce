const characterImagesPath = "assets/images/character/";
const animationDuration = 4000;
const decreaseDuration = 5000;
const animationsImage = document.getElementById("animationsImage");

const feedButton = document.getElementById("feed");
const sleepButton = document.getElementById("sleep");
const playButton = document.getElementById("play");
const studyButton = document.getElementById("study");

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

function initialisation() {
  refreshStats();
  //decreaseAll();
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
    //decreaseAll();
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
  studyBar.value = Tamagotchi.happiness;
}

function actionManagement(action, value) {
  currentImage = action + ".gif";
  if (Tamagotchi[action] < 100) {
    Tamagotchi[action] += 20;
  } else {
    currentImage = "no.gif";
  }
  refreshStats();
  refreshImage();
}

feedButton.addEventListener("click", function () {
  actionManagement("hunger", 20);
});
sleepButton.addEventListener("click", function () {
  actionManagement("energy", 20);
});
playButton.addEventListener("click", function () {
  actionManagement("happiness", 20);
});
studyButton.addEventListener("click", function () {
  actionManagement("study", 20);
});

initialisation();