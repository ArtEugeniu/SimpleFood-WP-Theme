<footer class="footer">
  <div class="container">
    <div class="footer__wrapper">
      <div class="footer__inner">
        <a class="logo footer__logo animation" href="#start">
          <img class="logo__img" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="logo">
        </a>
        <form class="subscribe-form">
          <label class="sr-only" for="email-input">Your email address</label>
          <input class="subscribe-form__input" type="email" placeholder="Your email" id="email-input" name="email" required>
          <button class="subscribe-form__btn button-animation" type="submit">
            <svg class="subscribe-form__svg">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-subscribe"></use>
            </svg>
            Subscribe
          </button>
        </form>
      </div>
      <nav class="footer__nav">
        <ul class="footer__menu">
          <li class="footer__item">
            <a class="footer__link text-animation" href="#">How it works</a>
          </li>
          <li class="footer__item">
            <a class="footer__link text-animation" href="#">Products</a>
          </li>
          <li class="footer__item">
            <a class="footer__link text-animation" href="#">Dishes</a>
          </li>
          <li class="footer__item">
            <a class="footer__link text-animation" href="#">Menu</a>
          </li>
          <li class="footer__item">
            <a class="footer__link text-animation" href="#">About us</a>
          </li>
          <li class="footer__item">
            <a class="footer__link text-animation" href="#">News</a>
          </li>
          <li class="footer__item">
            <a class="footer__link text-animation" href="#">Partners</a>
          </li>
          <li class="footer__item">
            <a class="footer__link text-animation" href="#">FAQ</a>
          </li>
          <li class="footer__item">
            <a class="footer__link text-animation" href="#">Download app</a>
          </li>
          <li class="footer__item">
            <a class="footer__link text-animation" href="#">Blog</a>
          </li>
          <li class="footer__item">
            <a class="footer__link text-animation" href="#">What's new?</a>
          </li>
          <li class="footer__item">
            <a class="footer__link text-animation" href="#">Site map</a>
          </li>
        </ul>
      </nav>
      <address class="contacts" id="contacts">
        <ul class="feedback">
          <li class="feedback__info">
            <a class="feedback__link feedback__link--location text-animation" href="#" target="_blank" rel="noreferrer">T.G. Shevchenko St., 1</a>
          </li>
          <li class="feedback__info">
            <a class="feedback__link feedback__link--tel text-animation" href="tel:+380501112233">380501112233</a>
          </li>
          <li class="feedback__info">
            <a class="feedback__link feedback__link--email text-animation" href="mailto:support@sfood.com" target="_blank" rel="noreferrer">support@sfood.com</a>
          </li>
        </ul>
        <ul class="social-media">
          <li class="social-media__item">
            <a class="social-media__link" href="#" target="_blank" rel="noreferrer">
              <svg class="social-media__svg social-media__svg--facebook">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-facebook"></use>
              </svg>
              <span class="sr-only">our Facebook</span>
            </a>
          </li>
          <li class="social-media__item">
            <a class="social-media__link" href="#" target="_blank" rel="noreferrer">
              <svg class="social-media__svg social-media__svg--twitter">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-twitter"></use>
              </svg>
              <span class="sr-only">our Twitter</span>
            </a>
          </li>
          <li class="social-media__item">
            <a class="social-media__link" href="#" target="_blank" rel="noreferrer">
              <svg class="social-media__svg social-media__svg--instagram">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-instagram"></use>
              </svg>
              <span class="sr-only">our Instagram</span>
            </a>
          </li>
        </ul>
      </address>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="container">
      <span class="footer__rights">© 2025 Simple Food</span>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html> 