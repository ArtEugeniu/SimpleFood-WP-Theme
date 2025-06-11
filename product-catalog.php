<?php 
/*
Template Name: Product-catalog
*/

get_header();
?>

<main class="main">

  <section class="top">
    <h2 class="sr-only">Breadcrumbs</h2>
    <div class="container">
      <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
          <a class="breadcrumbs__link" href="index.html">Home </a>
        </li>
        <li class="breadcrumbs__item">
          <span class="breadcrumbs__link">Products Catalog</span>
        </li>
      </ul>
    </div>
  </section>

  <section class="product-catalog">
  <div class="container">
    <div class="product-catalog__top">
      <h1 class="product-catalog__title title">Products Catalog</h1>
      <button class="product-catalog__open-btn" type="button">
        <svg>
          <use xlink:href="images/sprite.svg#icon-filter"></use>
        </svg>
        <span class="sr-only">Filter menu button</span>
      </button>
      <form class="product-catalog__form">

        <select class="product-catalog__select product-catalog__select-filter" name="filter">
          <option value="name">By name</option>
          <option value="price">By price</option>
        </select>
        <select class="product-catalog__select product-catalog__select-number" name="number">
          <option value="items-12">12 per page</option>
          <option value="items-8">8 per page</option>
        </select>

      </form>
    </div>
    <div class="product-catalog__inner">
      <div class="product-catalog__filters">
        <button class="product-catalog__close-btn" type="button">
          <span class="sr-only">Close filter menu button</span>
        </button>
        <div class="categories">
          <h3 class="categories__title product-catalog__titles">Categories</h3>
          <ul class="categories__filter">
            <li class="categories__item">
              <a class="categories__link text-animation" href="#">Burgers</a>
            </li>
            <li class="categories__item">
              <a class="categories__link text-animation" href="#">Pizza</a>
            </li>
            <li class="categories__item">
              <a class="categories__link text-animation" href="#">Sandwiches</a>
            </li>
            <li class="categories__item">
              <a class="categories__link text-animation" href="#">Asian cuisine</a>
            </li>
            <li class="categories__item">
              <a class="categories__link text-animation" href="#">Sets</a>
            </li>
            <li class="categories__item">
              <a class="categories__link text-animation" href="#">European cuisine</a>
            </li>
            <li class="categories__item">
              <a class="categories__link text-animation" href="#">Drinks</a>
            </li>
            <li class="categories__item">
              <a class="categories__link text-animation" href="#">Alcohol</a>
            </li>
          </ul>
        </div>

        <div class="offers">
          <h3 class="offers__title product-catalog__titles">Offers</h3>
          <form class="offers-form" action="#">

            <label class="offers-form__label">
              <input class="offers-form__input" type="checkbox" name="discount">
              <span class="offers-form__checkbox"></span>
              <span class="offers-form__text">Discounted</span>
            </label>


            <label class="offers-form__label">
              <input class="offers-form__input" type="checkbox" name="new">
              <span class="offers-form__checkbox"></span>
              <span class="offers-form__text">New</span>
            </label>


            <label class="offers-form__label">
              <input class="offers-form__input" type="checkbox" name="popular">
              <span class="offers-form__checkbox"></span>
              <span class="offers-form__text">Popular</span>
            </label>

          </form>
        </div>

        <div class="price">
          <h3 class="price__title product-catalog__titles">Price</h3>
          <form class="price__form" action="#">
            <div class="price__box">
              <label class="price__from-label">
                <input class="price__from">
              </label>
              <label class="price__to-label">
                <input class="price__to">
              </label>
            </div>
            <input class="price__input" type="text" data-min="0" data-max="1200" data-from="100" data-to="1000">
          </form>
        </div>
      </div>

      <div class="product-catalog__content">
        <ul class="product-catalog__filter">
            <li class="product-catalog__item">
              <article class="product-card">
                <a class="@secondActive" href="http://portfolio-project.local/product/">
                  <img class="product-card__img @firstActive" href="index.html" src="<?php echo get_template_directory_uri(); ?>/images/food/salat-cheese.jpeg"
                    alt="cheeseburger with lettuce image">
                </a>
  
                <h3 class="product-card__title"><?php echo get_field('product_1', get_the_ID()); ?></h3>
                <span class="product-card__price"><?php echo get_field('price_1', get_the_ID()); ?>
                  <span>$</span>
                </span>
                <button class="product-card__btn button-animation" type="button">Add to cart</button>
              </article>
            </li>
            <li class="product-catalog__item">
              <article class="product-card">
                <a class="@secondActive" href="http://portfolio-project.local/product/">
                  <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/beef.jpeg" alt="beef burger image">
                </a>
                
                <h3 class="product-card__title"><?php echo get_field('product_2', get_the_ID()); ?></h3>
                <span class="product-card__price"><?php echo get_field('price_2', get_the_ID()); ?>
                  <span>$</span>
                </span>
                <button class="product-card__btn button-animation" type="button">Add to cart</button>
              </article>
            </li>
            <li class="product-catalog__item">
              <article class="product-card">
                <a class="@secondActive" href="http://portfolio-project.local/product/">
                  <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/royal.jpeg" alt="royal hamburger image">
                </a>
                <h3 class="product-card__title"><?php echo get_field('product_3', get_the_ID()); ?></h3>
                <span class="product-card__price"><?php echo get_field('price_3', get_the_ID()); ?>
                  <span>$</span>
                </span>
                <button class="product-card__btn button-animation" type="button">Add to cart</button>
              </article>
            </li>
            <li class="product-catalog__item">
              <article class="product-card">
                <a class="@secondActive" href="http://portfolio-project.local/product/">
                  <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/black.jpeg" alt="black hamburger image">
                </a>
                
                <h3 class="product-card__title"><?php echo get_field('product_4', get_the_ID()); ?></h3>
                <span class="product-card__price"><?php echo get_field('price_4', get_the_ID()); ?>
                  <span>$</span>
                </span>
                <button class="product-card__btn button-animation" type="button">Add to cart</button>
              </article>
            </li>
            <li class="product-catalog__item">
              <article class="product-card">
                <a class="@secondActive" href="http://portfolio-project.local/product/">
                  <img class="product-card__img @firstActive" href="index.html" src="<?php echo get_template_directory_uri(); ?>/images/food/salat-cheese.jpeg"
                    alt="cheeseburger with lettuce image">
                </a>
  
                <h3 class="product-card__title"><?php echo get_field('product_1', get_the_ID()); ?></h3>
                <span class="product-card__price"><?php echo get_field('price_1', get_the_ID()); ?>
                  <span>$</span>
                </span>
                <button class="product-card__btn button-animation" type="button">Add to cart</button>
              </article>
            </li>
            <li class="product-catalog__item">
              <article class="product-card">
                <a class="@secondActive" href="http://portfolio-project.local/product/">
                  <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/beef.jpeg" alt="beef burger image">
                </a>
                
                <h3 class="product-card__title"><?php echo get_field('product_2', get_the_ID()); ?></h3>
                <span class="product-card__price"><?php echo get_field('price_2', get_the_ID()); ?>
                  <span>$</span>
                </span>
                <button class="product-card__btn button-animation" type="button">Add to cart</button>
              </article>
            </li>
            <li class="product-catalog__item">
              <article class="product-card">
                <a class="@secondActive" href="http://portfolio-project.local/product/">
                  <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/royal.jpeg" alt="royal hamburger image">
                </a>
                <h3 class="product-card__title"><?php echo get_field('product_3', get_the_ID()); ?></h3>
                <span class="product-card__price"><?php echo get_field('price_3', get_the_ID()); ?>
                  <span>$</span>
                </span>
                <button class="product-card__btn button-animation" type="button">Add to cart</button>
              </article>
            </li>
            <li class="product-catalog__item">
              <article class="product-card">
                <a class="@secondActive" href="http://portfolio-project.local/product/">
                  <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/black.jpeg" alt="black hamburger image">
                </a>
                
                <h3 class="product-card__title"><?php echo get_field('product_4', get_the_ID()); ?></h3>
                <span class="product-card__price"><?php echo get_field('price_4', get_the_ID()); ?>
                  <span>$</span>
                </span>
                <button class="product-card__btn button-animation" type="button">Add to cart</button>
              </article>
            </li>
            <li class="product-catalog__item">
              <article class="product-card">
                <a class="@secondActive" href="http://portfolio-project.local/product/">
                  <img class="product-card__img @firstActive" href="index.html" src="<?php echo get_template_directory_uri(); ?>/images/food/salat-cheese.jpeg"
                    alt="cheeseburger with lettuce image">
                </a>
  
                <h3 class="product-card__title"><?php echo get_field('product_1', get_the_ID()); ?></h3>
                <span class="product-card__price"><?php echo get_field('price_1', get_the_ID()); ?>
                  <span>$</span>
                </span>
                <button class="product-card__btn button-animation" type="button">Add to cart</button>
              </article>
            </li>
            <li class="product-catalog__item">
              <article class="product-card">
                <a class="@secondActive" href="http://portfolio-project.local/product/">
                  <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/beef.jpeg" alt="beef burger image">
                </a>
                
                <h3 class="product-card__title"><?php echo get_field('product_2', get_the_ID()); ?></h3>
                <span class="product-card__price"><?php echo get_field('price_2', get_the_ID()); ?>
                  <span>$</span>
                </span>
                <button class="product-card__btn button-animation" type="button">Add to cart</button>
              </article>
            </li>
            <li class="product-catalog__item">
              <article class="product-card">
                <a class="@secondActive" href="http://portfolio-project.local/product/">
                  <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/royal.jpeg" alt="royal hamburger image">
                </a>
                <h3 class="product-card__title"><?php echo get_field('product_3', get_the_ID()); ?></h3>
                <span class="product-card__price"><?php echo get_field('price_3', get_the_ID()); ?>
                  <span>$</span>
                </span>
                <button class="product-card__btn button-animation" type="button">Add to cart</button>
              </article>
            </li>
            <li class="product-catalog__item">
              <article class="product-card">
                <a class="@secondActive" href="http://portfolio-project.local/product/">
                  <img class="product-card__img" src="<?php echo get_template_directory_uri(); ?>/images/food/black.jpeg" alt="black hamburger image">
                </a>
                
                <h3 class="product-card__title"><?php echo get_field('product_4', get_the_ID()); ?></h3>
                <span class="product-card__price"><?php echo get_field('price_4', get_the_ID()); ?>
                  <span>$</span>
                </span>
                <button class="product-card__btn button-animation" type="button">Add to cart</button>
              </article>
            </li>
            
            </ul>
      </div>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>