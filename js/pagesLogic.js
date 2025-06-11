const home = document.querySelector('.menu__link-home');
const catalog = document.querySelector('.menu__link-catalog');


const currentPath = window.location.pathname;

console.log(currentPath)


if (currentPath === '/' || currentPath === '/sample-page/product-catalog/index.html' || currentPath === '/product/index.html') {
  home.classList.add('menu__link--active');
  catalog.classList.remove('menu__link--active');
} else {

  home.classList.remove('menu__link--active');
  catalog.classList.add('menu__link--active');
}