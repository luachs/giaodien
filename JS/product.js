// ===========================product============
const ProductImgLarge = document.querySelector(".product-img-large");
const ProductImgSmall = document.querySelectorAll(".product-img-small img");
ProductImgSmall.forEach(function (item) {
  item.addEventListener("click", function () {
    ProductImgLarge.src = item.src;
  });
});
//------------------------Introduce -----------------
var introduceBtn = document.querySelector(".introduce-btn.a");
var specificationBtn = document.querySelector(".introduce-btn.b");
var introduceDescribe = document.querySelector(".introduce-describe");
var specification = document.querySelector(".specification");
introduceBtn.addEventListener("click", function () {
  introduceDescribe.classList.remove("hide");
  specification.classList.add("hide");
  this.classList.add("active");
  specificationBtn.classList.remove("active");
});
specificationBtn.addEventListener("click", function () {
  specification.classList.remove("hide");
  introduceDescribe.classList.add("hide");
  this.classList.add("active");
  introduceBtn.classList.remove("active");
});
