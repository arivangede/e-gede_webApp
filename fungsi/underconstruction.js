const backBtn = document.querySelector("#back");
if (backBtn) {
  backBtn.addEventListener("click", function () {
    window.history.back();
  });
}
