<!DOCTYPE html>
<html lang="en" id="start">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="images/favicons/apple-touch-icon.png"
  />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-32x32.png"
  />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-16x16.png"
  />
  <link rel="manifest" href="images/favicons/site.webmanifest" />
  <link
    rel="mask-icon"
    href="<?php echo get_template_directory_uri(); ?>/images/favicons/safari-pinned-tab.svg"
    color="#5bbad5"
  />
  <meta name="msapplication-TileColor" content="#da532c" />
  <meta name="theme-color" content="#ffffff" />
  <title>SimpleFood</title>
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="mobile-menu">
      <button class="mobile-menu__button" type="button">
        <span class="sr-only">Menu button</span>
      </button>
      <a
        class="logo header__logo mobile-menu__logo animation"
        href="/"
        ><img
          class="logo__img"
          src="<?php echo get_template_directory_uri(); ?>/images/logo.svg"
          alt="logo"
          width="200"
          height="40"
      /></a>
      <ul class="menu">
        <li class="menu__item">
          <a
            class="menu__link menu__link--active text-animation"
            href="/"
            >Home</a
          >
        </li>
        <li class="menu__item">
          <a
            class="menu__link text-animation"
            href="http://portfolio-project.local/sample-page/product-catalog/"
            >Dishes</a
          >
        </li>
        <li class="menu__item">
          <a class="menu__link text-animation" href="#contacts">Contacts</a>
        </li>
      </ul>
      <address class="contacts">
        <ul class="feedback mobile-menu__feedback">
          <li class="feedback__info">
            <a
              class="feedback__link feedback__link--location text-animation"
              href="#"
              target="_blank"
              rel="noreferrer"
              >T.G. Shevchenko St., 1</a
            >
          </li>
          <li class="feedback__info">
            <a
              class="feedback__link feedback__link--tel text-animation"
              href="tel:+380501112233"
              >380501112233</a
            >
          </li>
          <li class="feedback__info">
            <a
              class="feedback__link feedback__link--email text-animation"
              href="mailto:support@sfood.com"
              target="_blank"
              rel="noreferrer"
              >support@sfood.com</a
            >
          </li>
        </ul>
        <ul class="social-media mobile-menu__social-media">
          <li class="social-media__item">
            <a
              class="social-media__link"
              href="#"
              target="_blank"
              rel="noreferrer"
            >
              <svg class="social-media__svg social-media__svg--facebook">
                <use
                  xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-facebook"
                ></use>
              </svg>
              <span class="sr-only">our Facebook</span>
            </a>
          </li>
          <li class="social-media__item">
            <a
              class="social-media__link"
              href="#"
              target="_blank"
              rel="noreferrer"
            >
              <svg class="social-media__svg social-media__svg--twitter">
                <use
                  xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-twitter"
                ></use>
              </svg>
              <span class="sr-only">our Twitter</span>
            </a>
          </li>
          <li class="social-media__item">
            <a
              class="social-media__link"
              href="#"
              target="_blank"
              rel="noreferrer"
            >
              <svg class="social-media__svg social-media__svg--instagram">
                <use xlink:href="images/sprite.svg#icon-instagram"></use>
              </svg>
              <span class="sr-only">our Instagram</span>
            </a>
          </li>
        </ul>
      </address>
    </div>
    <div class="header__top">
      <div class="container">
        <nav class="nav">
          <a class="logo header__logo animation" href="/">
            <img
              class="logo__img"
              src="<?php echo get_template_directory_uri(); ?>/images/logo.svg"
              alt="logo"
              width="200"
              height="40"
            />
          </a>
          <ul class="menu">
            <li class="menu__item">
              <a
                class="menu__link menu__link-home text-animation"
                href="/"
                >Home</a
              >
            </li>
            <li class="menu__item">
              <a
                class="menu__link menu__link-catalog @secondActive text-animation"
                href="http://portfolio-project.local/sample-page/product-catalog/"
                >Dishes</a
              >
            </li>
            <li class="menu__item">
              <a class="menu__link text-animation" href="#contacts"
                >Contacts</a
              >
            </li>
          </ul>
          <ul class="user-nav">
            <li class="user-nav__item">
              <button class="user-nav__link" type="button">
                <svg class="user-nav__svg">
                  <use
                    xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-search"
                  ></use>
                </svg>
                <span class="sr-only">search</span>
              </button>
            </li>
            <li class="user-nav__item">
              <button class="user-nav__link" type="button">
                <svg class="user-nav__svg">
                  <use
                    xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-buy"
                  ></use>
                </svg>
                <span class="user-nav__number">4</span>
                <span class="sr-only">cart</span>
              </button>
            </li>
          </ul>
          <button class="burger" type="button">
            <span class="burger__line"></span>
            <span class="sr-only">Mobile menu button</span>
          </button>
        </nav>
      </div>
    </div>
  </header>