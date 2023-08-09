//fitur layanan publik>>>e-surat//

const btnkembali = document.querySelector(".btnkembali");
if (btnkembali) {
  btnkembali.addEventListener("click", function () {
    window.location.href = "../../home.php";
  });
}
//pindah halaman
function pindahkeEsurat() {
  window.location.href = "e-surat.php";
}
