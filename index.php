<?php
require_once "component/common.inc.php"; 
$title = "Bino"
?>
<body>
  <section class="slider">
    <div class="header">
      <div class="container">
        <div class="nav">
          <div class="nav__logo col-xl-2 col-md-2">
            <a href="#" class="nav__logo">
              <img src="icons/logo.png" alt="">
            </a>
          </div>

          <ul class="menu col-xl-8 offset-xl-2 col-lg-8 offset-lg-2 col-md-9 offset-md-2">
            <li class="menu__item">
              <a class="menu__link" href="#">HOME</a>
            </li>
            <li class="menu__item">
              <a class="menu__link" href="#">ABOUT US</a>
            </li>
            <li class="menu__item">
              <a class="menu__link" href="# ">PORTFOLIO</a>
            </li>
            <li class="menu__item">
              <a class="menu__link" href="# ">PRICING</a>
            </li>
            <li class="menu__item">
              <a class="menu__link" href="#">TEAM</a>
            </li>
            <li class="menu__item">
              <a class="menu__link" href="#">BLOG</a>
            </li>
            <li class="menu__item">
              <a class="menu__link" href="#">CONTACT</a>
            </li>
          </ul>
        </div>

        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>

      </div>
    </div>

    <div class="carousel">
      <div id="carousel" class="carousel slide" data-bs-interval="false" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active ">
            <img src="img/slider/header.png" class="d-block w-100" alt="slide">
            <div class="carousel-caption">
              <div class="carousel__wrapper">
                <div class="carousel__subtitle">Our Clients Are Our First Priority</div>
                <div class="carousel__title">WELCOME TO BINO</div>
                <div class="lines lines__carousel col-xl-2 col-md-3">
                  <div class="line"></div>
                  <div class="dots"></div>
                  <div class="line"></div>
                </div>
                <div class="carousel__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum <br />has been the industry's standard dummy text ever since the 1500s, when an unknown <br />printer took a galley of type and scrambled it to make a type specimen book.</div>
                <div class="carousel__block">
                  <button class="btn btn__carousel">GET STARTED NOW</button>
                  <button class="btn btn__carousel btn__carousel2">LEARN MORE</button>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slider/header.png" class="d-block w-100" alt="slide">
          </div>
          <div class="carousel-item">
            <img src="img/slider/header.png" class="d-block w-100" alt="slide">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="false"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="false"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <div class="mini">
      <div class="mini__subtitle">Our Clients Are Our First Priority</div>
      <div class="mini__title">WELCOME TO BINO</div>
      <div class="lines lines__mini col-xl-2 col-md-3">
        <div class="line"></div>
        <div class="dots"></div>
        <div class="line"></div>
      </div>
      <div class="mini__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum <br />has been the industry's standard dummy text ever since the 1500s, when an unknown <br />printer took a galley of type and scrambled it to make a type specimen book.</div>
      <div class="mini__block">
        <button class="btn btn__mini">GET STARTED NOW</button> <br />
        <button class="btn btn__mini">LEARN MORE</button>
      </div>
    </div>

  </section>

  <section class="anchor">
    <div class="container">
      <div class="round round__anchor">
        <div class="round__gr">
          <a href="#form" class="round__logo1">
            <img src="icons/anchor.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="who">
    <div class="container">
      <div class="row">
        <div class="who__wrapper col-12">
          <div class="who__item col-lg-3 col-sm-6">
            <div class="who__logo">
              <div class="who__sq">
                <a href="#" class="">
                  <img src="icons/glass.png" alt="">
                </a>
              </div>
            </div>
            <div class="who__title">SLEEK DESIGN</div>
            <div class="who__line"></div>
            <div class="who__text">Lorem Ipsum is simply dummy text of the <br />printing and typesetting let. Lorem Ipsum <br />has been the industry.</div>
          </div>

          <div class="who__item col-lg-3 col-sm-6">
            <div class="who__logo">
              <div class="who__sq">
                <a href="#" class="">
                  <img src="icons/heart.png" alt="">
                </a>
              </div>
            </div>
            <div class="who__title">CLEAN CODE</div>
            <div class="who__line"></div>
            <div class="who__text">Lorem Ipsum is simply dummy text of the <br />printing and typesetting let. Lorem Ipsum <br />has been the industry.</div>
          </div>

          <div class="who__item col-lg-3 col-sm-6">
            <div class="who__logo">
              <div class="who__sq">
                <a href="#" class="">
                  <img src="icons/idea.png" alt="">
                </a>
              </div>
            </div>
            <div class="who__title">CREATIVE IDEAS</div>
            <div class="who__line"></div>
            <div class="who__text">Lorem Ipsum is simply dummy text of the <br />printing and typesetting let. Lorem Ipsum <br /> has been the industry.</div>
          </div>

          <div class="who__item col-lg-3 col-sm-6">
            <div class="who__logo">
              <div class="who__sq">
                <a href="#" class="">
                  <img src="icons/support.png" alt="">
                </a>
              </div>
            </div>
            <div class="who__title">FREE SUPPORT</div>
            <div class="who__line"></div>
            <div class="who__text">Lorem Ipsum is simply dummy text of the <br />printing and typesetting let. Lorem Ipsum <br /> has been the industry.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="services">
    <div class="container">
      <div class="row">

        <div class="services__wrapper">
          <div class="services__header col-xl-3 offset-xl-3 col-md-11 col-12 ">
            <div class="services__title">OUR SERVICES</div>
            <div class="services__line"></div>
          </div>

          <div class="services__wr">
            <div class="services__item">
              <div class="services__descr col-xl-6 col-md-6 col-12">
                <div class="services__subtitle">WEB DESIGN</div>
                <div class="services__about">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  Lorem Ip sum has <br /> been the industry's standard dummy text ever.</div>
              </div>
              <div class="round round__services col-1">
                <div class="round__gr">
                  <a href="#" class="round__logo1">
                    <img src="icons/monitor.png" alt="">
                  </a>
                </div>
              </div>
            </div>

            <div class="services__item">
              <div class="services__descr col-xl-6 col-md-6 col-12">
                <div class="services__subtitle">PRINT DESIGN</div>
                <div class="services__about">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  Lorem Ip sum has <br /> been the industry's standard dummy text ever.</div>
              </div>
              <div class="round round__services col-1 ">
                <div class="round__gr">
                  <a href="#" class="round__logo1">
                    <img src="icons/sheets.png" alt="">
                  </a>
                </div>
              </div>
            </div>

            <div class="services__item">
              <div class="services__descr col-xl-6 col-md-6 col-12">
                <div class="services__subtitle">PHOTOGRAPHY</div>
                <div class="services__about">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  Lorem Ip sum has <br /> been the industry's standard dummy text ever.</div>
              </div>
              <div class="round round__services col-1">
                <div class="round__gr">
                  <a href="#" class="round__logo1">
                    <img src="icons/photo.png" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <section class="keep">
    <div class="container">
      <div class="row">
        <div class="keep__title">KEEP IN TOUCH</div>
        <div class="keep__subtitle">Nullam sit amet odio eu est aliquet euismod a a urna. Proin eu urna suscipit, dictum
          quam nec. </div>
        <div class="lines lines__keep col-2">
          <div class="line line__keep"></div>
          <div class="dots"></div>
          <div class="line line__keep"></div>
        </div>

        <div class="keep__wrapper">

          <div class="keep__about col-xl-5 col-md-5 col-12">
            <div class="keep__item">
              <div class="keep__header">OUR ADDRESS</div>
              <div class="keep__text">House #13, Streat road, Sydney 2310 Australia</div>
            </div>
            <div class="keep__item">
              <div class="keep__header">CALL US</div>
              <div class="keep__text">
                <a href="tel:8801681091425">+ 880 168 109 1425</a><br />
                <a href="tel:0216809142">+ 0216809142</a>
              </div>
            </div>
            <div class="keep__item">
              <div class="keep__header">EMAIL US</div>
              <div class="keep__text">contactus@email.com</div>
            </div>
          </div>

          <a name="form"></a>

          <div class="keep__form col-xl-7 col-md-6 col-12">
            <form class="form" action="component/form.php" method="post">
              <input type="text" class="form-control name" name="name" id="name" placeholder="Name"><br>
              <input type="email" class="form-control email" name="email" id="email" placeholder="Email"><br>
              <input type="text" class="form-control subject" name="subject" id="subject" placeholder="Subject"><br>
              <textarea name="message" class="message" placeholder="Message"></textarea>
              <button class="btn btn__keep" name="submit">SEND MESSAGE</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="last">
    <div class="container">
      <div class="">
        <div class="last__title col-12">Let's Get Started Now. <span>It's FREE!</span></div>
        <div class="last__text col-12">30 day free trial. Free plan allows up to 2 projects. Pay if you need more. Cancel
          anytime.No catches.</div>
        <button class="btn btn__last">start free trial</button>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer__ss col-xl-3 col-sm-5">
          <a href="#" class="footer__ss__item"><i class="fa fa-facebook"></i></a>
          <a href="#" class="footer__ss__item"><i class="fa fa-twitter"></i></a>
          <a href="#" class="footer__ss__item"><i class="fa fa-rss"></i></a>
          <a href="#" class="footer__ss__item"><i class="fa fa-google-plus"></i></a>
          <a href="#" class="footer__ss__item"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="footer__ss__item"><i class="fa fa-skype"></i></a>
          <a href="#" class="footer__ss__item"><i class="fa fa-vimeo"></i></a>
          <a href="#" class="footer__ss__item"><i class="fa fa-tumblr"></i></a>
        </div>
        <div class="footer__text col-xl-3 offset-xl-6 col-sm-5 offset-md-1">Kazi Erfan © All Rights Reserved </div>
      </div>
    </div>
  </footer>

  <div class="scroll">
    <a class="scroll_to_top"><img src="icons/up.png" alt=""></a>
  </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
  <script src='js/script.js'></script>
</body>

</html>