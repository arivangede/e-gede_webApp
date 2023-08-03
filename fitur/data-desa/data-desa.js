const bar = document.querySelector(".bar");
const pie = document.querySelector(".pie");
const grafikscreen = document.querySelector(".grafik-screen");

bar.addEventListener("click", function () {
  grafikscreen.classList.remove("pie");
  bar.classList.add("active");
  pie.classList.remove("active");
});
pie.addEventListener("click", function () {
  grafikscreen.classList.add("pie");
  bar.classList.remove("active");
  pie.classList.add("active");
});
