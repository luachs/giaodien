//========================slider========================
const imgPosition = document.querySelectorAll(".content img");
const imgContent = document.querySelector(".content");
const dotItem = document.querySelectorAll(".dot");
let index = 0;
imgPosition.forEach(function (image, idx) {
  dotItem[idx].addEventListener("click", function () {
    index = idx;

    slider();
  });
});
function imgSlider() {
  index++;
  if (index >= imgPosition.length) {
    index = 0;
  }
  slider();
}
function slider() {
  imgContent.style.transform = "translateX(-" + index * 100 + "%)";
  const dotActive = document.querySelector(".active");
  dotActive.classList.remove("active");
  dotItem[index].classList.add("active");
}

setInterval(imgSlider, 5000);
