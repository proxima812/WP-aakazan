const header = document.querySelector('.nav');
const first = document.querySelector('.first');
const headerHeight = header.offsetHeight;
const firstHeight = first.offsetHeight;
let lastScrollTop = 0;

window.addEventListener('scroll', () => {
  let scrollDistance = window.scrollY;

  if (scrollDistance >= firstHeight + headerHeight) {
    header.classList.add('nav_fixed');
    first.style.marginTop = `${headerHeight}px`;
  } else {
    header.classList.remove('nav_fixed');
    first.style.marginTop = null;
  }

  // if (scrollDistance > lastScrollTop) {
  //   header.classList.remove('nav_fixed');
  //   first.style.marginTop = null;
  // } else {
  //   header.classList.add('nav_fixed');
  //   first.style.marginTop = `${headerHeight}px`;
  // }

  if (scrollDistance === 0) {
    header.classList.remove('nav_fixed');
    first.style.marginTop = null;
  }

  lastScrollTop = scrollDistance;
});