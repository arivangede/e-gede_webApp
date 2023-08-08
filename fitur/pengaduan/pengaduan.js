document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".pengaduan-card");
  cards.forEach((card) => {
    card.addEventListener("click", () => {
      if (card.classList.contains("active")) {
        card.classList.remove("active");
      } else {
        const activeCard = document.querySelector(".pengaduan-card.active");
        if (activeCard) {
          activeCard.classList.remove("active");
        }
        card.classList.add("active");
      }
    });
  });
});
