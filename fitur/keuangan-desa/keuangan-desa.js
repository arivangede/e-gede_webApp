const pilihhalaman = document.getElementById("pilih-halaman");
const sections = document.querySelectorAll(".section");

pilihhalaman.addEventListener("change", function () {
  const selectedValue = this.value;
  sections.forEach((section) => {
    if (section.id === selectedValue) {
      section.style.display = "block";
    } else {
      section.style.display = "none";
    }
  });
});

function masukkeuangan() {
  window.location.href = "index.php";
}
