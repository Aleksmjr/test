<?php get_header();?>


	<section class="header-area header-one">
      <div class="header-content-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-12">
              <div class="header-wrapper">
                <div class="header-content">
                  <h1 class="header-title">
                    Стильные аксессуары и бижутерия мировых брендов
                  </h1>
                  <p class="text-lg">
                    Только оригинальное качество
                  </p>
                  <div class="header-btn rounded-buttons">
                    <h1
                      class="btn primary-btn-outline"
                      href="javascript:void(0)"
                    >
                      Перейти в каталог
                    </h1>
                  </div>
                </div>
                <!-- header content -->
              </div>
            </div>
            <!-- <div class="col-lg-6 col-12"> ЧТО ЭТО ВООБЩЕ ?) ЗАЧЕМ ОНО ТУТ? :)
              <div class="header-image d-none d-lg-block">
                <div class="image">
                  <img
                    src="/assets/images/header/header-1.svg"
                    alt="Header"
                  />
                </div>
              </div>
            </div>  -->
          </div>
          <!-- row -->
        </div>
        <!-- container -->
        <div class="header-shape">
          <img src="<?php echo(get_template_directory_uri(  )); ?>/assets/img/header-shape.svg" alt="shape" />
        </div>
        <!-- header-shape -->
      </div>
      <!-- header content area -->
    </section>

    <!-- header END -->

    <section class="portfolio-area portfolio-one">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-6 col-xl-7 col-lg-8">
            <div class="section-title text-center mb-5">
              <h2 class="mb-3 fw-bold">Популярные товары</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="portfolio-menu">
              <button data-filter="all" class="active">Все товары</button>
              <button data-filter="braslet">Браслеты</button>
              <button data-filter="kolye">Колье</button>
              <button data-filter="kolca">Кольца</button>
              <button data-filter="sergi">Серьги</button>
              <button data-filter="broshi">Броши</button>
            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row grid">
          <div class="col-lg-4 col-sm-6" data-filter="braslet">
            <div class="portfolio-style-one text-center">
              <div class="portfolio-image">
                <img
                  src="<?php echo(get_template_directory_uri(  )); ?>/assets/img/products/braslet/1.jpg"
                  alt="image"
                />
              </div>
              <div class="portfolio-overlay d-flex align-items-center">
                <div class="portfolio-content">
                  <div class="portfolio-icon">
                    <a
                      class="image-popup-two glightbox"
                      href="<?php echo(get_template_directory_uri(  )); ?>/assets/img/products/braslet/1.jpg"
                    >
                      <i class="lni lni-zoom-in"></i>
                    </a>
                  </div>
                  <div class="portfolio-text">
                    <h4 class="portfolio-title">
                      <a href="javascript:void(0)">Браслет Alcozer&J, с турмалином</a>
                    </h4>
                    <p class="text">
                    	Браслет премиум класса. Оригинальное изделие от официального представителя в России.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- single portfolio -->
          </div>
          <div class="col-lg-4 col-sm-6" data-filter="kolye">
            <div class="portfolio-style-one text-center">
              <div class="portfolio-image">
                <img
                  src="<?php echo(get_template_directory_uri(  )); ?>/assets/img/products/kolye/3.jpg"
                  alt="image"
                />
              </div>
              <div class="portfolio-overlay d-flex align-items-center">
                <div class="portfolio-content">
                  <div class="portfolio-icon">
                    <a
                      class="image-popup-two glightbox"
                      href="<?php echo(get_template_directory_uri(  )); ?>/assets/img/products/kolye/3.jpg"
                    >
                      <i class="lni lni-zoom-in"></i>
                    </a>
                  </div>
                  <div class="portfolio-text">
                    <h4 class="portfolio-title">
                      <a href="javascript:void(0)">Колье корона</a>
                    </h4>
                    <p class="text">
                    	Колье корона с рубином,жемчугом и кристаллами
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- single portfolio -->
          </div>

          <div class="col-lg-4 col-sm-6" data-filter="kolye">
            <div class="portfolio-style-one text-center">
              <div class="portfolio-image">
                <img
                  src="<?php echo(get_template_directory_uri(  )); ?>/assets/img/products/kolye2/1.png"
                  alt="image"
                />
              </div>
              <div class="portfolio-overlay d-flex align-items-center">
                <div class="portfolio-content">
                  <div class="portfolio-icon">
                    <a
                      class="image-popup-two glightbox"
                      href="<?php echo(get_template_directory_uri(  )); ?>/assets/img/products/kolye2/1.png"
                    >
                      <i class="lni lni-zoom-in"></i>
                    </a>
                  </div>
                  <div class="portfolio-text">
                    <h4 class="portfolio-title">
                      <a href="javascript:void(0)">Колье-подвеска</a>
                    </h4>
                    <p class="text">
                    	Колье хризопраз, оникс, аметист, для любого мероприятия
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- single portfolio -->
          </div>


          <div class="col-lg-4 col-sm-6" data-filter="kolca">
            <div class="portfolio-style-one text-center">
              <div class="portfolio-image">
                <img
                  src="<?php echo(get_template_directory_uri(  )); ?>/assets/img/products/kolco/1.jpg"
                  alt="image"
                />
              </div>
              <div class="portfolio-overlay d-flex align-items-center">
                <div class="portfolio-content">
                  <div class="portfolio-icon">
                    <a
                      class="image-popup-two glightbox"
                      href="/assets/img/products/kolco/1.jpg"
                    >
                      <i class="lni lni-zoom-in"></i>
                    </a>
                  </div>
                  <div class="portfolio-text">
                    <h4 class="portfolio-title">
                      <a href="javascript:void(0)">Кольцо двойное</a>
                    </h4>
                    <p class="text">
                    	Ювелирный сплав, покрытие золотом, натуральный камень
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- single portfolio -->
          </div>
          
          <div class="col-lg-4 col-sm-6" data-filter="sergi">
            <div class="portfolio-style-one text-center">
              <div class="portfolio-image">
                <img
                  src="<?php echo(get_template_directory_uri(  )); ?>/assets/img/products/sergi/1.jpeg"
                  alt="image"
                />
              </div>
              <div class="portfolio-overlay d-flex align-items-center">
                <div class="portfolio-content">
                  <div class="portfolio-icon">
                    <a
                      class="image-popup-two glightbox"
                      href="/assets/img/products/sergi/1.jpeg"
                    >
                      <i class="lni lni-zoom-in"></i>
                    </a>
                  </div>
                  <div class="portfolio-text">
                    <h4 class="portfolio-title">
                      <a href="javascript:void(0)">Серьги с бриллиантом</a>
                    </h4>
                    <p class="text">
                    	Изысканные серьги для любого мероприятия
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- single portfolio -->
          </div>


          <div class="col-lg-4 col-sm-6" data-filter="broshi">
            <div class="portfolio-style-one text-center">
              <div class="portfolio-image">
                <img
                  src="<?php echo(get_template_directory_uri(  )); ?>/assets/img/products/brosh/1.jpg"
                  alt="image"
                />
              </div>
              <div class="portfolio-overlay d-flex align-items-center">
                <div class="portfolio-content">
                  <div class="portfolio-icon">
                    <a
                      class="image-popup-two glightbox"
                      href="/assets/img/products/brosh/1.jpg"
                    >
                      <i class="lni lni-zoom-in"></i>
                    </a>
                  </div>
                  <div class="portfolio-text">
                    <h4 class="portfolio-title">
                      <a href="javascript:void(0)">Брошь синяя</a>
                    </h4>
                    <p class="text">
                    	Изысканная брошь для любого мероприятия
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- single portfolio -->
          </div>

        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </section>


     <?php get_footer(); ?>