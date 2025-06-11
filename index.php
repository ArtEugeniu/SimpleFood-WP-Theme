<?php 
/*
Template Name: Home Page
*/

get_header();
?>

<main class="main">

  <section class="hero">
  <div class="container">
    <h1 class="sr-only">Website of the food delivery service Simple Food</h1>
    <div class="hero__wrapper">
      <div class="hero__content">
        <h2 class="hero__title">
          Delivery
          <span class="hero__title-time">in 15 minutes</span>
        </h2>
        <div class="hero__text">
          <p>
            The fastest food delivery service in your city. If we're late – delivery is on us.
          </p>
        </div>
        <div class="hero__buttons">
          <a class="hero__button-command button-animation" href="#">Order</a>
          <a class="hero__button-info text-animation text-decoration" href="#">Learn more</a>
        </div>
      </div>
      <div class="hero__content-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/header-img.png);">
        <span class="sr-only">Image of a courier</span>
      </div>
    </div>
  </div>
</section>

  <section class="popular-category">
  <div class="container">
    <h2 class="title popular-category__title">Popular Categories</h2>
    <ul class="popular-category__filter">
      <li class="popular-category__filter-item">
        <button class="popular-category__btn mixitup-control-active" type="button" data-filter="all">
          <svg class="popular-category__svg">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-burger"></use>
          </svg>
          Burgers
        </button>
      </li>
      <li class="popular-category__filter-item">
        <button class="popular-category__btn" type="button" data-filter=".category-pizza">
          <svg class="popular-category__svg">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-pizza"></use>
          </svg>
          Pizza
        </button>
      </li>
      <li class="popular-category__filter-item">
        <button class="popular-category__btn" type="button" data-filter=".category-sandwich">
          <svg class="popular-category__svg">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-sandwich"></use>
          </svg>
          Sandwiches
        </button>
      </li>
      <li class="popular-category__filter-item">
        <button class="popular-category__btn" type="button" data-filter=".category-asia">
          <svg class="popular-category__svg">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-asia"></use>
          </svg>
          Asian Cuisine
        </button>
      </li>
      <li class="popular-category__filter-item">
        <button class="popular-category__btn animation" type="button" data-filter=".category-dish">
          <svg class="popular-category__svg">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-dish"></use>
          </svg>
          Sets
        </button>
      </li>
    </ul>
    <ul class="popular-category__content">

      <li class="popular-category__item mix category-burger">
        <article class="product-card">
          <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/salat-cheese.jpeg" alt="cheeseburger with lettuce">
          <h3 class="product-card__title"><?php echo get_field('product_1', get_the_ID()); ?></h3>
          <span class="product-card__price"><?php echo get_field('price_1', get_the_ID()); ?>
            <span>UAH</span>
          </span>
          <button class="product-card__btn button-animation" type="button">Add to Cart</button>
        </article>
      </li>


      <li class="popular-category__item mix category-burger category-pizza">
        <article class="product-card">
          <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/beef.jpeg" alt="beefburger">
          <h3 class="product-card__title"><?php echo get_field('product_2', get_the_ID()); ?></h3>
          <span class="product-card__price"><?php echo get_field('price_2', get_the_ID()); ?>
            <span>UAH</span>
          </span>
          <button class="product-card__btn button-animation" type="button">Add to Cart</button>
        </article>
      </li>

      <li class="popular-category__item mix category-burger category-pizza">
        <article class="product-card">
          <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/royal.jpeg" alt="royal cheeseburger">
          <h3 class="product-card__title"><?php echo get_field('product_3', get_the_ID()); ?></h3>
          <span class="product-card__price"><?php echo get_field('price_3', get_the_ID()); ?>
            <span>UAH</span>
          </span>
          <button class="product-card__btn button-animation" type="button">Add to Cart</button>
        </article>
      </li>

      <li class="popular-category__item mix category-burger category-sandwich">
        <article class="product-card">
          <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/black.jpeg" alt="black hamburger">
          <h3 class="product-card__title"><?php echo get_field('product_4', get_the_ID()); ?></h3>
          <span class="product-card__price"><?php echo get_field('price_4', get_the_ID()); ?>
            <span>UAH</span>
          </span>
          <button class="product-card__btn button-animation" type="button">Add to Cart</button>
        </article>
      </li>

      <li class="popular-category__item mix category-burger category-sandwich">
        <article class="product-card">
          <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/chicken.jpeg" alt="chicken burger">
          <h3 class="product-card__title">Chicken Burger</h3>
          <span class="product-card__price">180
            <span>UAH</span>
          </span>
          <button class="product-card__btn button-animation" type="button">Add to Cart</button>
        </article>
      </li>

      <li class="popular-category__item mix category-burger category-sandwich category-dish">
        <article class="product-card">
          <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/salat-cheese.jpeg" alt="cheeseburger with lettuce">
          <h3 class="product-card__title"><?php echo get_field('product_1', get_the_ID()); ?></h3>
          <span class="product-card__price"><?php echo get_field('price_1', get_the_ID()); ?>
            <span>UAH</span>
          </span>
          <button class="product-card__btn button-animation" type="button">Add to Cart</button>
        </article>
      </li>

      <li class="popular-category__item mix category-burger category-asia">
        <article class="product-card">
          <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/beef.jpeg" alt="beefburger">
          <h3 class="product-card__title"><?php echo get_field('product_2', get_the_ID()); ?></h3>
          <span class="product-card__price"><?php echo get_field('price_2', get_the_ID()); ?>
            <span>UAH</span>
          </span>
          <button class="product-card__btn button-animation" type="button">Add to Cart</button>
        </article>
      </li>

      <li class="popular-category__item mix category-burger category-asia">
        <article class="product-card">
          <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/royal.jpeg" alt="royal cheeseburger">
          <h3 class="product-card__title"><?php echo get_field('product_3', get_the_ID()); ?></h3>
          <span class="product-card__price"><?php echo get_field('price_3', get_the_ID()); ?>
            <span>UAH</span>
          </span>
          <button class="product-card__btn button-animation" type="button">Add to Cart</button>
        </article>
      </li>

      <li class="popular-category__item mix category-burger category-asia category-dish">
        <article class="product-card">
          <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/black.jpeg" alt="black hamburger">
          <h3 class="product-card__title"><?php echo get_field('product_4', get_the_ID()); ?></h3>
          <span class="product-card__price"><?php echo get_field('price_4', get_the_ID()); ?>
            <span>UAH</span>
          </span>
          <button class="product-card__btn button-animation" type="button">Add to Cart</button>
        </article>
      </li>

      <li class="popular-category__item mix category-burger category-asia">
        <article class="product-card">
          <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/chicken.jpeg" alt="chicken burger">
          <h3 class="product-card__title">Chicken Burger</h3>
          <span class="product-card__price">12
            <span>UAH</span>
          </span>
          <button class="product-card__btn button-animation" type="button">Add to Cart</button>
        </article>
      </li>
    </ul>
    <a class="popular-category__link text-animation text-decoration" href="#">Show More</a>
  </div>
</section>

  <section class="advantages">
  <div class="container">
    <div class="advantages__wrapper">
      <div class="advantages__img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/advantages-img.png);">
      </div>
      <div class="advantages__content">
        <h2 class="title advantages__title">
          Stay home, <span>we'll take care of the food</span>
        </h2>
        <p class="advantages__text">
          We’ve got delicious food and we’re ready to deliver it to your door! Use our delivery service now and get a discount!
        </p>
        <ul class="advantages__list">
          <li class="advantages__info advantages__info--time">
            Fast delivery in 15 minutes
          </li>
          <li class="advantages__info advantages__info--couriers">
            Friendly couriers
          </li>
          <li class="advantages__info advantages__info--resto">
            Over 500 restaurants
          </li>
        </ul>
        <a class="advantages__link button-animation" href="#">
          Learn more
        </a>
      </div>
    </div>
  </div>
</section>

  <section class="resto">
  <div class="container">
    <h2 class="title resto__title">
      Best Restaurants
    </h2>
    <ul class="resto__items">
      <li class="resto__item">
        <article class="resto-card">
          <img class="resto-card__img" src="<?php echo get_template_directory_uri(); ?>/images/blaze-pizza.jpeg" alt="pizza photo">
          <div class="resto-card__wrapper">
            <h3 class="resto-card__title">Blaze Pizza</h3>
            <div class="resto-card__inner">
              <span class="resto-card__time">11:00 AM - 10:00 PM</span>
              <a class="resto-card__link button-animation" href="#">
                <svg class="resto-card__svg">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-arrow"></use>
                </svg>
                <span class="sr-only">Go to Blaze Pizza restaurant page</span>
              </a>
            </div>
          </div>
        </article>
      </li>
      <li class="resto__item">
        <article class="resto-card">
          <img class="resto-card__img" src="<?php echo get_template_directory_uri(); ?>/images/pizza-runcho.jpeg" alt="pizza photo">
          <div class="resto-card__wrapper">
            <h3 class="resto-card__title">Pizza Runcho</h3>
            <div class="resto-card__inner">
              <span class="resto-card__time">12:00 PM - 9:00 PM</span>
              <a class="resto-card__link button-animation" href="#">
                <svg class="resto-card__svg">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-arrow"></use>
                </svg>
                <span class="sr-only">Go to Pizza Runcho restaurant page</span>
              </a>
            </div>
          </div>
        </article>
      </li>
      <li class="resto__item">
        <article class="resto-card">
          <img class="resto-card__img" src="<?php echo get_template_directory_uri(); ?>/images/pizza-hut.jpeg" alt="pizza photo">
          <div class="resto-card__wrapper">
            <h3 class="resto-card__title">Pizza Hut</h3>
            <div class="resto-card__inner">
              <span class="resto-card__time">11:00 AM - 10:00 PM</span>
              <div class="resto-card__inner">
                <a class="resto-card__link button-animation" href="#">
                  <svg class="resto-card__svg">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-arrow"></use>
                  </svg>
                  <span class="sr-only">Go to Pizza Hut restaurant page</span>
                </a>
              </div>
            </div>
          </div>
        </article>
      </li>
      <li class="resto__item">
        <article class="resto-card">
          <img class="resto-card__img" src="<?php echo get_template_directory_uri(); ?>/images/mcdo.jpeg" alt="burger photo">
          <div class="resto-card__wrapper">
            <h3 class="resto-card__title">McDonald's</h3>
            <div class="resto-card__inner">
              <span class="resto-card__time">6:00 AM - 11:00 PM</span>
              <a class="resto-card__link button-animation" href="#">
                <svg class="resto-card__svg">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-arrow"></use>
                </svg>
                <span class="sr-only">Go to McDonald's restaurant page</span>
              </a>
            </div>
          </div>
        </article>
      </li>
      <li class="resto__item">
        <article class="resto-card">
          <img class="resto-card__img" src="<?php echo get_template_directory_uri(); ?>/images/kfc.jpeg" alt="burger photo">
          <div class="resto-card__wrapper">
            <h3 class="resto-card__title">KFC</h3>
            <div class="resto-card__inner">
              <span class="resto-card__time">6:00 AM - 11:30 PM</span>
              <a class="resto-card__link button-animation" href="#">
                <svg class="resto-card__svg">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-arrow"></use>
                </svg>
                <span class="sr-only">Go to KFC restaurant page</span>
              </a>
            </div>
          </div>
        </article>
      </li>
      <li class="resto__item">
        <article class="resto-card">
          <img class="resto-card__img" src="<?php echo get_template_directory_uri(); ?>/images/starburger.jpeg" alt="burger photo">
          <div class="resto-card__wrapper">
            <h3 class="resto-card__title">Star Burgers</h3>
            <div class="resto-card__inner">
              <span class="resto-card__time">9:00 AM - 9:00 PM</span>
              <a class="resto-card__link button-animation" href="#">
                <svg class="resto-card__svg">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-arrow"></use>
                </svg>
                <span class="sr-only">Go to Star Burgers restaurant page</span>
              </a>
            </div>
          </div>
        </article>
      </li>
    </ul>
  </div>
</section>

  <section class="reviews">
  <div class="container">
    <h2 class=" title reviews__title">Customer Reviews</h2>
    <ul class="reviews__slider">
      <li class="reviews__slider-item">
        <div class="reviews__slider-inner">
          <div class="reviews__slider-image">
            <img class="reviews__slider-img" src="<?php echo get_template_directory_uri(); ?>/images/slider-img.jpeg" alt="Customer photo">
          </div>
          <figure class="reviews__slider-comment">
            <blockquote class="reviews__slider-cite">
              SimpleFood is one of the best grocery delivery services from restaurants in the city. Very convenient website and app. Their delivery people are very polite and punctual. The company often runs promotions and gives discounts on delivery – definitely recommend!
            </blockquote>
            <figcaption class="reviews__slider-author">Daria
              <span class="reviews__slider-note">A lover of delicious food</span>
            </figcaption>
          </figure>
        </div>
      </li>
      <li class="reviews__slider-item">
        <div class="reviews__slider-inner">
          <div class="reviews__slider-image">
            <img class="reviews__slider-img" src="<?php echo get_template_directory_uri(); ?>/images/slider-img.jpeg" alt="Customer photo">
          </div>
          <figure class="reviews__slider-comment">
            <blockquote class="reviews__slider-cite">
              SimpleFood is one of the best grocery delivery services from restaurants in the city. Very convenient website and app. Their delivery people are very polite and punctual. The company often runs promotions and gives discounts on delivery – definitely recommend!
            </blockquote>
            <figcaption class="reviews__slider-author">Daria
              <span class="reviews__slider-note">A lover of delicious food</span>
            </figcaption>
          </figure>
        </div>
      </li>
      <li class="reviews__slider-item">
        <div class="reviews__slider-inner">
          <div class="reviews__slider-image">
            <img class="reviews__slider-img" src="<?php echo get_template_directory_uri(); ?>/images/slider-img.jpeg" alt="Customer photo">
          </div>
          <figure class="reviews__slider-comment">
            <blockquote class="reviews__slider-cite">
              SimpleFood is one of the best grocery delivery services from restaurants in the city. Very convenient website and app. Their delivery people are very polite and punctual. The company often runs promotions and gives discounts on delivery – definitely recommend!
            </blockquote>
            <figcaption class="reviews__slider-author">Daria
              <span class="reviews__slider-note">A lover of delicious food</span>
            </figcaption>
          </figure>
        </div>
      </li>
      <li class="reviews__slider-item">
        <div class="reviews__slider-inner">
          <div class="reviews__slider-image">
            <img class="reviews__slider-img" src="<?php echo get_template_directory_uri(); ?>/images/slider-img.jpeg" alt="Customer photo">
          </div>
          <figure class="reviews__slider-comment">
            <blockquote class="reviews__slider-cite">
              SimpleFood is one of the best grocery delivery services from restaurants in the city. Very convenient website and app. Their delivery people are very polite and punctual. The company often runs promotions and gives discounts on delivery – definitely recommend!
            </blockquote>
            <figcaption class="reviews__slider-author">Daria
              <span class="reviews__slider-note">A lover of delicious food</span>
            </figcaption>
          </figure>
        </div>
      </li>
    </ul>
    <div class="arrows-wrap"></div>
  </div>
</section>

 <section class="app">
  <div class="container">
    <div class="app__wrapper">
      <div class="app__content">
        <h2 class="title app__title">
          Download the Mobile App
        </h2>
        <p class="app__text">
          The restaurants you love — in your hands. Install the app and order food wherever it’s convenient for you.
        </p>
        <div class="app__icons">
          <a class="app__link" href="#">
            <img class="app__icon" src="<?php echo get_template_directory_uri(); ?>/images/icons/apple.svg" alt="Apple app link" width="120" height="40">
          </a>
          <a class="app__link" href="#">
            <img class="app__icon" src="<?php echo get_template_directory_uri(); ?>/images/icons/android.svg" alt="Android app link" width="135" height="40">
          </a>
        </div>
      </div>
      <div class="app__img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/app-img.jpeg);">
        <span class="sr-only">Photo of Simple Food mobile app</span>
      </div>
    </div>
  </div>
</section>

</main>

  <?php 
  get_footer();
  ?>