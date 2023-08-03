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
      <h2>Halaman Belanja</h2>
      <p>Ini adalah halaman belanja.</p>
      <!-- Tempatkan konten halaman belanja Anda di sini -->
      <img src="../../img/icon/lock.png" alt="">
    `;
  }
}