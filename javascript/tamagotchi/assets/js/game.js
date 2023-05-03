const characterImagesPath = "assets/images/character/";
const animationDuration = 4000;
const decreaseDuration = 5000;
const animationsImage = document.getElementById("animationsImage");
const feedButton = document.getElementById("feed");
const hungerProgress = document.getElementById("hungerBar");

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

function refreshImage() {
  //disableButtons();
  animationsImage.src = characterImagesPath + currentImage;
  clearTimeout(imageTimeout);
  clearTimeout(decreaseTimeout);
  imageTimeout = setTimeout(function () {
    animationsImage.src = characterImagesPath + "idle.gif";
    //enableButtons();
    //decreaseAll();
  }, animationDuration);
}
function refreshStats() {
  if (Tamagotchi.hunger < 0) {
    Tamagotchi.hunger = 0;
  }
  hungerProgress.value = Tamagotchi.hunger;
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

initialisation();
