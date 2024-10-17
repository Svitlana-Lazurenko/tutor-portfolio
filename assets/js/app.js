// ========================= Mobile menu ==================================

(() => {
  const mobileMenu = document.querySelector(".js-menu-container");
  const openMenuBtn = document.querySelector(".js-open-menu");
  const closeMenuBtn = document.querySelector(".js-close-menu");
  const mobileMenuItems = document.querySelectorAll(".mobile-menu .menu-item");

  const toggleMenu = () => {
    const isMenuOpen =
      openMenuBtn.getAttribute("aria-expanded") === "true" || false;

    openMenuBtn.setAttribute("aria-expanded", !isMenuOpen);
    closeMenuBtn.setAttribute("aria-expanded", !isMenuOpen);
    mobileMenu.setAttribute("aria-hidden", isMenuOpen);
    mobileMenu.classList.toggle("is-open");
    document.body.classList.toggle("menu-open");
  };

  openMenuBtn.addEventListener("click", toggleMenu);
  closeMenuBtn.addEventListener("click", toggleMenu);
  mobileMenuItems.forEach((item) => {
    item.addEventListener("click", toggleMenu);
  });

  // Close the mobile menu on wider screens if the device orientation changes
  window.matchMedia("(min-width: 768px)").addEventListener("change", (e) => {
    if (!e.matches) return;
    mobileMenu.classList.remove("is-open");
    openMenuBtn.setAttribute("aria-expanded", false);
    closeMenuBtn.setAttribute("aria-expanded", false);
    mobileMenu.setAttribute("aria-hidden", true);
  });
})();

// ========================= Modal window ==================================
(() => {
  const openModalBtn = document.querySelector(".js-open-modal");
  const closeModalBtn = document.querySelector(".js-close-modal");
  const backdrop = document.querySelector(".backdrop");
  const form = document.querySelector(".form");

  function toggleModal() {
    const isModalOpen =
      openModalBtn.getAttribute("aria-expanded") === "true" || false;

    openModalBtn.setAttribute("aria-expanded", !isModalOpen);
    closeModalBtn.setAttribute("aria-expanded", !isModalOpen);
    backdrop.classList.toggle("is-hidden");
    document.body.classList.toggle("modal-open");
  }

  openModalBtn.addEventListener("click", toggleModal);
  form.addEventListener("submit", function (event) {
    event.preventDefault();
    toggleModal();
  });

  // Closing the modal when pressing the Esc key
  function onEscKeyPress(event) {
    if (event.key === "Escape") {
      if (!backdrop.classList.contains("is-hidden")) {
        toggleModal();
      }
    }
  }

  document.addEventListener("keydown", onEscKeyPress);

  // Closing the modal when clicking on the backdrop
  function onBackdropClick(event) {
    if (event.target === backdrop) {
      toggleModal();
    }
  }

  backdrop.addEventListener("click", onBackdropClick);
})();

// ============== Add the "is-selected" class to selected anchor links ===============
window.addEventListener("scroll", function () {
  const sections = document.querySelectorAll("section");
  const menuLinks = document.querySelectorAll(".header-menu a, .mobile-menu a");

  let scrollPosition = window.scrollY + window.innerHeight * 0.3;

  sections.forEach(function (section) {
    let sectionTop = section.offsetTop;
    let sectionHeight = section.offsetHeight;

    if (
      scrollPosition >= sectionTop &&
      scrollPosition < sectionTop + sectionHeight
    ) {
      let targetId = section.getAttribute("id"); // Get the ID of the section
      menuLinks.forEach(function (link) {
        link.classList.remove("is-selected"); // Remove the class "is-selected" from all links
        if (link.getAttribute("href") === "#" + targetId) {
          link.classList.add("is-selected"); // Add a class for the corresponding link
        }
      });
    }
  });
});
