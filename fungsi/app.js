document.addEventListener("click", function (e) {
  // popup close
  if (!menuCard.contains(e.target) && !menuBtn.contains(e.target)) {
    menuPopup.classList.remove("active");
  }
});

// fitur e-news
const enewsBtn = document.querySelector(".e-newsBtn");

if (enewsBtn) {
  enewsBtn.addEventListener("click", function () {
    window.location.href = "fitur/e-news/tampil_berita.php";
  });
}

// menu popup
const menuBtn = document.querySelector("#menuBtn");
const menuPopup = document.querySelector(".menu-popup");
const closeMenuBtn = document.querySelector(".closeBtn");
const menuCard = document.querySelector(".menu-wrapper");

if (menuBtn) {
  menuBtn.addEventListener("click", function () {
    menuPopup.classList.add("active");
  });
  closeMenuBtn.addEventListener("click", function () {
    menuPopup.classList.remove("active");
  });
}

// pindah halaman
function pindahAktivitas() {
  window.location.href = "aktivitas.php";
}
function pindahHome() {
  window.location.href = "home.php";
}
function pindahNotifikasi() {
  window.location.href = "notifikasi.php";
}
function masukNotifikasi() {
  window.location.href = "isi-notifikasi.php";
}
function pindahProfil() {
  window.location.href = "profil.php";
}

function pindahFiturProfilDesa() {
  window.location.href = "fitur/profil-desa/index.php";
}

function underConstruction() {
  window.location.href = "under-construction.php";
}

// aktivitas
const laporanSaya = document.querySelector(".laporan-saya");
const disimpan = document.querySelector(".disimpan");
const pilihanAktivitas = document.querySelector(".body");

if (laporanSaya) {
  laporanSaya.addEventListener("click", function () {
    laporanSaya.classList.add("active");
    disimpan.classList.remove("active");

    pilihanAktivitas.classList.add("laporan-saya");
    pilihanAktivitas.classList.remove("disimpan");
  });

  disimpan.addEventListener("click", function () {
    laporanSaya.classList.remove("active");
    disimpan.classList.add("active");

    pilihanAktivitas.classList.remove("laporan-saya");
    pilihanAktivitas.classList.add("disimpan");
  });
}

// halaman profil
const informasiBtn = document.querySelector(".informasi");
const epasarBtn = document.querySelector(".e-pasar");
const selectScreen = document.querySelector(".section-screen");

if (informasiBtn) {
  informasiBtn.addEventListener("click", function () {
    informasiBtn.classList.add("active");
    epasarBtn.classList.remove("active");
    selectScreen.classList.remove("e-pasar");
  });
  epasarBtn.addEventListener("click", function () {
    epasarBtn.classList.add("active");
    informasiBtn.classList.remove("active");
    selectScreen.classList.add("e-pasar");
  });
}
