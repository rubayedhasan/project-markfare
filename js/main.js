// get the slider controllers
const sliderControllers = document.querySelectorAll(".slider-controller");

// controller track
let controllerIndex = 0;

// handler function:: banner auto sliding
function autoSlidingBanner() {
  const controller = sliderControllers[controllerIndex];
  controller.click();
}

// call the autoSlidingBanner function after 2s
setInterval(() => {
  autoSlidingBanner();
  controllerIndex++;

  if (controllerIndex >= sliderControllers.length) {
    controllerIndex = 0;
  }
}, 2000);

// calling the functions
autoSlidingBanner();
