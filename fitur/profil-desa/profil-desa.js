function underconstruction() {
  window.location.href = "../../under-construction.php";
}
function backbtn() {
  window.location.href = "index.php";
}

function visimisi() {
  window.location.href = "visi-misi.php";
}

// visimisi

const visi = document.querySelector(".visi");
const misi = document.querySelector(".misi");
const sectionvisimisi = document.querySelector(".section-wrapper");

if (visi) {
  visi.addEventListener("click", function () {
    visi.classList.add("active");
    misi.classList.remove("active");
    sectionvisimisi.classList.remove("misi");
  });
  misi.addEventListener("click", function () {
    visi.classList.remove("active");
    misi.classList.add("active");
    sectionvisimisi.classList.add("misi");
  });
}
