// get the slider controllers
const sliders = document.querySelectorAll(".slider-item");

// controller track
let sliderIndex = 0;

// handler function:: banner auto sliding
function autoSlidingBanner() {
  for (const slider of sliders) {
    slider.style.display = "none";
  }

  sliderIndex++;

  if (sliderIndex > sliders.length) {
    sliderIndex = 1;
  }

  sliders[sliderIndex - 1].style.display = "flex";
}

// call the autoSlidingBanner function after 2s
setInterval(() => {
  autoSlidingBanner();
}, 3000);

// calling the functions
autoSlidingBanner();
