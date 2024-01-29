console.log('321')
const filters = document.querySelectorAll(".portfolio-menu button");

      filters.forEach((filter) => {
        filter.addEventListener("click", function () {
          // ==== Filter btn toggle
          let filterBtn = filters[0];
          while (filterBtn) {
            if (filterBtn.tagName === "BUTTON") {
              filterBtn.classList.remove("active");
            }
            filterBtn = filterBtn.nextSibling;
          }
          this.classList.add("active");

          // === filter
          let selectedFilter = filter.getAttribute("data-filter");
          let itemsToHide = document.querySelectorAll(
            `.grid .col-lg-4:not([data-filter='${selectedFilter}'])`
          );
          let itemsToShow = document.querySelectorAll(
            `.grid [data-filter='${selectedFilter}']`
          );

          if (selectedFilter == "all") {
            itemsToHide = [];
            itemsToShow = document.querySelectorAll(".grid [data-filter]");
          }

          itemsToHide.forEach((el) => {
            el.classList.add("hide");
            el.classList.remove("show");
          });

          itemsToShow.forEach((el) => {
            el.classList.remove("hide");
            el.classList.add("show");
          });
        });
      });

      //========= glightbox
      const myGallery = GLightbox({
        selector: ".glightbox",
        type: "image",
        width: 900,
      });

      //===== close navbar-collapse when a  clicked
      let navbarTogglerNine = document.querySelector(
        ".navbar-nine .navbar-toggler"
      );
      navbarTogglerNine.addEventListener("click", function () {
        navbarTogglerNine.classList.toggle("active");
      });

      // ==== left sidebar toggle
      let sidebarLeft = document.querySelector(".sidebar-left");
      let overlayLeft = document.querySelector(".overlay-left");
      let sidebarClose = document.querySelector(".sidebar-close .close");

      overlayLeft.addEventListener("click", function () {
        sidebarLeft.classList.toggle("open");
        overlayLeft.classList.toggle("open");
      });
      sidebarClose.addEventListener("click", function () {
        sidebarLeft.classList.remove("open");
        overlayLeft.classList.remove("open");
      });

      // ===== navbar nine sideMenu
      let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

      sideMenuLeftNine.addEventListener("click", function () {
        sidebarLeft.classList.add("open");
        overlayLeft.classList.add("open");
      });