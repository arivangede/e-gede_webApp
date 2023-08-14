//fitur layanan publik>>>e-surat//

const btnkembali = document.querySelector(".btnkembali");
if (btnkembali) {
  btnkembali.addEventListener("click", function () {
    window.location.href = "../../home.php";
  });
}
//pindah halaman ke e-surat
function pindahkeEsurat() {
  window.location.href = "e-surat.php";
}
//pindah halaman ke e-bansos
function pindahkeEbansos() {
  window.location.href = "e-bansos.php";
}
