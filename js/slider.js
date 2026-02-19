// get the slider controllers
const sliders = document.querySelectorAll(".slider-item");
const sliderControllers = document.querySelector(
  "#slider-controller-container",
);

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

sliderControllers.addEventListener("click", function (e) {
  const targetId = e.target.href.split("#")[1];
  console.log(targetId);

  for (const slider of sliders) {
    slider.style.display = "none";
  }

  document.getElementById(targetId).style.display = "flex";
  if (targetId === "slider1") {
    sliderIndex = 0;
    return;
  }
  if (targetId === "slider2") {
    sliderIndex = 1;
    return;
  }
  if (targetId === "slider3") {
    sliderIndex = 2;
    return;
  }
  if (targetId === "slider4") {
    sliderIndex = 3;
    return;
  }
});

// call the autoSlidingBanner function after 2s
setInterval(() => {
  autoSlidingBanner();
}, 3000);

// calling the functions
autoSlidingBanner();
