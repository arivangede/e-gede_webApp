// pindah ke profil desa
const profildesaBtn = document.querySelector("#profil-desa-menu");
profildesaBtn.addEventListener("click", function () {
  window.location.href = "fitur/profil-desa/index.php";
});

// fitur e-news
const enewsBtn = document.querySelector(".e-newsBtn");
enewsBtn.addEventListener("click", function () {
  window.location.href = "fitur/e-news/tampil_berita.php";
});

// menu popup
const menuBtn = document.querySelector("#menuBtn");
const menuPopup = document.querySelector(".menu-popup");
const closeMenuBtn = document.querySelector(".closeBtn");
const menuCard = document.querySelector(".menu-wrapper");
var popupIsActive = false;
menuBtn.addEventListener("click", function () {
  menuPopup.classList.add("active");
});
closeMenuBtn.addEventListener("click", function () {
  menuPopup.classList.remove("active");
});
document.addEventListener("click", function (e) {
  if (!menuCard.contains(e.target) && !menuBtn.contains(e.target)) {
    menuPopup.classList.remove("active");
  }
});
