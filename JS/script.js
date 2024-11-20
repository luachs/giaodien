//====================sticky=========================
const header = document.querySelector("header");
window.addEventListener("scroll", function () {
  if (window.pageYOffset > 0) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
});
// =====================history=======================
const more = document.querySelector(".history-more span");
const history = document.querySelector(".history");
const historyMore = document.querySelector(".history-more");
var i = 0;
more.addEventListener("click", function () {
  history.classList.toggle("show");
  i++;
  if (i % 2 == 1) {
    more.innerHTML = "Thu gọn &#8593;";
    historyMore.style.boxShadow = "unset";
  } else {
    more.innerHTML = "Tìm hiểu thêm &#8595; ";
    historyMore.style.boxShadow = "0 -40px 10px rgba(18, 1, 1, 0.7)";
  }
});
