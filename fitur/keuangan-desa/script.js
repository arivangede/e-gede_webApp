function showPage() {
  const selectPage = document.getElementById("selectPage");
  const selectedValue = selectPage.value;

  // Menampilkan atau menyembunyikan halaman sesuai dengan pilihan
  const pages = document.getElementsByClassName("page");
  for (let i = 0; i < pages.length; i++) {
    if (i == selectedValue) {
      pages[i].classList.add("show");
    } else {
      pages[i].classList.remove("show");
    }
  }

  // Jika halaman yang dipilih bukan halaman belanja, kosongkan konten halaman belanja
  if (selectedValue != 0) {
    const pageBelanja = document.getElementById("page1");
    pageBelanja.innerHTML = ""; // Mengosongkan konten halaman belanja
  } else {
    // Jika halaman yang dipilih adalah halaman belanja, kembalikan kontennya
    const pageBelanja = document.getElementById("page1");
    pageBelanja.innerHTML = `
      <div class="pembungkus-isi">
      <div class="isi-keuangan-desa">
        <p>Laporan Realisasi Pelaksanaan</p>
        <p>Anggaran Pendapatan dan Belanja Desa</p>
        <p>Pemerintah Desa <?= $desa ?></p>
        <p>Tahun Anggaran 2023</p>
      </div>
      <div class="isi-table-keuangan">
        <img src="../../img/img-keuangan-desa/img-apbdes/Assets 3.png" alt="">
      </div>`;
  }
}
//fiture -keuangan desa
const Btnmasuk = document.querySelector(".Btnmasuk");
Btnmasuk.addEventListener("click", function () {
  window.location.href = "index.php";
});
