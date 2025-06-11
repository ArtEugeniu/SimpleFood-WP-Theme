<?php 
/*
Template Name: Product Page
*/

get_header();
?>

<main class="main">

  <section class="top">
    <div class="container">
      <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
          <a class="breadcrumbs__link" href="index.html">Home</a>
        </li>
        <li class="breadcrumbs__item">
          <a class="breadcrumbs__link" href="http://portfolio-project.local/sample-page/product-catalog/">Product Catalog</a>
        </li>
        <li class="breadcrumbs__item">
          <a class="breadcrumbs__link">Cheeseburger with Lettuce Leaves</a>
        </li>
      </ul>
    </div>
  </section>

  <section class="product">
    <div class="container">
      <div class="product__wrapper">
        <ul class="product__slider f-carousel" id="myCarousel">
          <li class="product__slider-item f-carousel__slide" data-src="<?php echo get_template_directory_uri(); ?>/images/product.jpeg" data-fancybox="gallery">
            <img class="product__image" src="<?php echo get_template_directory_uri(); ?>/images/product.jpeg" alt="Photo of burger">
          </li>
          <li class="product__slider-item f-carousel__slide" data-src="<?php echo get_template_directory_uri(); ?>/images/product.jpeg" data-fancybox="gallery">
            <img class="product__image" src="<?php echo get_template_directory_uri(); ?>/images/product.jpeg" alt="Photo of burger">
          </li>
          <li class="product__slider-item f-carousel__slide" data-src="<?php echo get_template_directory_uri(); ?>/images/product.jpeg" data-fancybox="gallery">
            <img class="product__image" src="<?php echo get_template_directory_uri(); ?>/images/product.jpeg" alt="Photo of burger">
          </li>
        </ul>
        <div class="product__info">
          <h2 class="product__title title">Cheeseburger with Lettuce Leaves</h2>
          <div class="product__rating" data-rateyo-rating="4"></div>
          <div class="product__price">
            <span>160
              <span>$</span>
            </span>
          </div>
          <form class="product__form" action="#">
            <input class="product__num" type="number" value="1" min="1">
            <button class="product__button button-animation" type="submit">
              <svg class="product__svg">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-buy"></use>
              </svg>
              Add to Cart</button>
          </form>
          <div class="product__terms">
            <h3 class="product__terms-title">
              Delivery and Payment
            </h3>
            <p class="product__terms-text">
              Minimum order amount — 160 $.
            </p>
            <p class="product__terms-text">
              Order delivery time — 80-140 minutes.
            </p>
            <p class="product__terms-text">
              Payment is made by bank card only.
            </p>
            <p class="product__terms-text">
              Final order amount is formed after collecting the products.
            </p>
          </div>
          <a class="product__link text-animation text-decoration" href="#">More details</a>
        </div>
      </div>
    </div>
  </section>

 <section class="tabs">
  <div class="container">
    <div class="product-tabs">
      <div class="product-tabs__top">
        <a class="product-tabs__top-item product-tabs__top-item--active" href="#tab-1">Description</a>
        <a class="product-tabs__top-item" href="#tab-2">Specifications</a>
        <a class="product-tabs__top-item" href="#tab-3">Reviews (2)</a>
      </div>
      <div class="product-tabs__content">
        <div class="product-tabs__content-item product-tabs__content-item--active" id="tab-1">
          <p class="description">
            Chopped beef patty made from natural beef on a caramelized bun, with a slice of Cheddar cheese, ketchup, mustard, onions, and pickles.
          </p>
          <p class="description">
            Allergens: Gluten, Milk, Mustard. May contain soy, egg, traces of sesame.
          </p>
          <p class="description">
            The appearance of the product may differ from the images shown on the website.
          </p>
        </div>
        <div class="product-tabs__content-item" id="tab-2">
          <ul class="char">
            <li class="char__item">
              Diameter:
              <span>20 cm</span>
            </li>
            <li class="char__item">
              Weight:
              <span>300 g</span>
            </li>
            <li class="char__item">
              Calories (per 100g):
              <span>295 kcal</span>
            </li>
            <li class="char__item">
              Shelf life:
              <span>up to 3 days</span>
            </li>
          </ul>
        </div>
        <div class="product-tabs__content-item" id="tab-3">
          <h3 class="comments__title">
            What our customers say
          </h3>
          <div class="comments">
            <div class="comments__top">
              <img class="comments__img" src="<?php echo get_template_directory_uri(); ?>/images/review-img.jpeg" alt="avatar">
              <div class="comments__inner">
                <div class="comments__name">Andrey</div>
                <div class="comments__date">10.06.2021</div>
              </div>
              <div class="comments__rating" data-rateyo-rating="5"></div>
            </div>
            <div class="comments__text">
              Fast delivery. Fresh and very tasty product, will definitely order again!))
            </div>
          </div>
          <div class="comments">
            <div class="comments__top">
              <img class="comments__img" src="<?php echo get_template_directory_uri(); ?>/images/review-img.jpeg" alt="avatar">
              <div class="comments__inner">
                <div class="comments__name">Ekaterina Belaya</div>
                <div class="comments__date">7.06.2021</div>
              </div>
              <div class="comments__rating" data-rateyo-rating="4"></div>
            </div>
            <div class="comments__text">
              This burger is a good snack when you don’t have time or opportunity to cook something. A great option for a quick bite, but if I want to treat myself, I’d rather go for pizza.
            </div>
          </div>
          <form class="comment-form" action="#">
            <p class="comment-form__title">Leave a review</p>
            <div class="comment-form__rating">Your rating *
              <div class="comment-form__star" aria-required="true"></div>
            </div>
            <div class="comment-form__comment">
              <div class="comment-form__inner">
                <label class="comment-form__label" for="textarea">Your review *</label>
                <textarea class="comment-form__textarea" name="comment" id="textarea" cols="30" rows="10"
                  placeholder="Enter your review text" required></textarea>
              </div>
              <div class="comment-form-inner">
                <label class="comment-form__label" for="name">Name</label>
                <input class="comment-form__text" type="text" name="name" id="name" placeholder="Enter your name"
                  required>
                <label class="comment-form__label" for="email">Email *</label>
                <input class="comment-form__text" type="email" name="email" id="email"
                  placeholder="youremail@mail.com" required>
              </div>
            </div>
            <div class="comment-form__remember">
              <input class="comment-form__checkbox" type="checkbox" id="checkbox">
              <label class="comment-form__label" for="checkbox">
                Save my name, email, and website in this browser for the next time I comment.
              </label>
            </div>
            <button class="comment-form__btn button-animation" type="submit">Leave a review</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

  <section class="suggestion">
  <div class="container">
    <div class="suggestion__top">
      <h2 class="suggestion__title title">You Might Also Like</h2>
      <div class="arrows-wrap"></div>
    </div>
    <ul class="suggestion__list">
      <li class="suggestion__item">
        <article class="product-card">
          <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/salat-cheese.jpeg"
            alt="cheeseburger with lettuce image">
          <h3 class="product-card__title">Cheeseburger with Lettuce</h3>
          <span class="product-card__price">8
            <span>$</span>
          </span>
          <button class="product-card__btn button-animation" type="button">Add to Cart</button>
        </article>
      </li>
      <li class="suggestion__item">
        <article class="product-card">
          <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/beef.jpeg"
            alt="beef burger image">
          <h3 class="product-card__title">Beef Burger</h3>
          <span class="product-card__price">10
            <span>$</span>
          </span>
          <button class="product-card__btn button-animation" type="button">Add to Cart</button>
        </article>
      </li>
      <li class="suggestion__item">
        <article class="product-card">
          <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/royal.jpeg"
            alt="royal cheeseburger image">
          <h3 class="product-card__title">Royal Cheeseburger</h3>
          <span class="product-card__price">14
            <span>$</span>
          </span>
          <button class="product-card__btn button-animation" type="button">Add to Cart</button>
        </article>
      </li>
      <li class="suggestion__item">
        <article class="product-card">
          <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/black.jpeg"
            alt="black burger image">
          <h3 class="product-card__title">Black Burger</h3>
          <span class="product-card__price">16
            <span>$</span>
          </span>
          <button class="product-card__btn button-animation" type="button">Add to Cart</button>
        </article>
      </li>
      <li class="popular-category__item mix category-burger category-sandwich">
        <article class="product-card">
          <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/chicken.jpeg"
            alt="chicken burger image">
          <h3 class="product-card__title">Chicken Burger</h3>
          <span class="product-card__price">12
            <span>$</span>
          </span>
          <button class="product-card__btn button-animation" type="button">Add to Cart</button>
        </article>
      </li>
      <li class="suggestion__item">
        <article class="product-card">
          <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/black.jpeg"
            alt="black burger image">
          <h3 class="product-card__title">Black Burger</h3>
          <span class="product-card__price">16
            <span>$</span>
          </span>
          <button class="product-card__btn button-animation" type="button">Add to Cart</button>
        </article>
      </li>
      <li class="popular-category__item mix category-burger category-sandwich">
        <article class="product-card">
          <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/chicken.jpeg"
            alt="chicken burger image">
          <h3 class="product-card__title">Chicken Burger</h3>
          <span class="product-card__price">12
            <span>$</span>
          </span>
          <button class="product-card__btn button-animation" type="button">Add to Cart</button>
        </article>
      </li>
    </ul>
  </div>
</section>

</main>

<? get_footer(); ?>