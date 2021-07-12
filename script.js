'use strict';
let lastScrollTop = 0;
const toggleBtn = document.querySelector('.toggle-btn');
const toggleIcon = document.querySelector('.toggle-icon');
const sliderBtn = document.querySelectorAll('.slider__btn');
const headerNav = document.querySelector('.header__nav');
const toggle = document.querySelector('.toggle');
const toggleMenu = document.querySelector('.toggle-menu');
const allElements = document.querySelectorAll('.element');
const element1 = document.querySelector('.el1');
const element2 = document.querySelector('.el2');
const element3 = document.querySelector('.el3');
const toggleNav = document.querySelector('.toggle-nav');
const toggleNavList = document.querySelectorAll('.toggle-nav li');
const toggleSunMoon = document.querySelector('.toggle-menu-sunmoon');
const toggleSun = document.querySelector('.toggle-menu-sun');
const toggleMoon = document.querySelector('.toggle-menu-moon');
// const path = document.querySelector('path');
const fullContent = document.querySelector('.top-gallery__img');

const links = document.querySelectorAll('.toggle-nav__link');
// const container = document.querySelector('.full-content');

//////////////////////////HOME PAGE POPUP///////////////////////////////////
document.getElementById('story-link').addEventListener('click', function (e) {
  e.preventDefault();

  document.querySelector('.story--home-page').classList.add('active');
  document.querySelector('.story--home-page').style.clipPath =
    'circle(100% at center)';
});

document.querySelector('.btn-story').addEventListener('click', function () {
  // document.querySelector('.story--home-page').classList.remove('active');
  document.querySelector('.story--home-page').style.clipPath =
    'circle(0rem at center)';
});

window.onclick = function (e) {
  if (e.target == document.querySelector('.story--home-page')) {
    // document.querySelector('.story--home-page').classList.remove('active');
    document.querySelector('.story--home-page').style.clipPath =
      'circle(0rem at center)';
  }

  if (e.target == document.querySelector('.story--home-page--2')) {
    // document.querySelector('.story--home-page').classList.remove('active');
    document.querySelector('.story--home-page--2').style.clipPath =
      'circle(0rem at center)';
  }
};

document
  .getElementById('story-link--2')
  .addEventListener('click', function (e) {
    e.preventDefault();

    document.querySelector('.story--home-page--2').classList.add('active');
    document.querySelector('.story--home-page--2').style.clipPath =
      'circle(100% at center)';
  });

document.querySelector('.btn-story--2').addEventListener('click', function () {
  // document.querySelector('.story--home-page').classList.remove('active');
  document.querySelector('.story--home-page--2').style.clipPath =
    'circle(0rem at center)';
});

///////////////////////////////////////////////TOGGLE MENU WITH TOP-GALLERY//////////////////////////////////
const topGalleryCards = document.querySelectorAll('.top-gallery-card a');
const topGalleryLinks = document.querySelectorAll('.full-content__link');
topGalleryCards.forEach(card => {
  card.addEventListener('click', function () {
    document.querySelector('.toggle-icon').style.opacity = 0;
  });
  topGalleryLinks.forEach(link => {
    link.addEventListener('click', function () {
      document.querySelector('.toggle-icon').style.opacity = 1;
    });
  });
});

///////////////////////////////////////////////Change language//////////////////////////////////////////
const htmlElement = document.querySelector('html');
const languageLink = document.querySelector('.header__nav-link--6 span');
const languageLinkMask = document.querySelector('.header__nav-link--span');
const russianLang = document.querySelectorAll('[lang="russian"]');
const englishLang = document.querySelectorAll('[lang="english"]');

let changeLang = localStorage.getItem('[lang="ru"]');

const russianDisable = function () {
  russianLang.forEach(ru => {
    ru.style.display = 'none';
  });
  englishLang.forEach(en => {
    en.style.display = 'block';
  });
};
russianDisable();

const russianEnable = function () {
  russianLang.forEach(ru => {
    ru.style.display = 'block';
  });
  englishLang.forEach(en => {
    en.style.display = 'none';
  });
};

const changeLanguage = function () {
  if (languageLink.textContent != 'En') {
    languageLink.textContent = 'En';
    languageLinkMask.textContent = 'En';
    document
      .querySelector('.fa-sort-up')
      .classList.replace('fa-sort-up', 'fa-sort-down');

    localStorage.setItem('[lang="ru"]', null);
    russianDisable();
  } else {
    languageLink.textContent = 'Ru';
    languageLinkMask.textContent = 'Ru';
    document
      .querySelector('.fa-sort-down')
      .classList.replace('fa-sort-down', 'fa-sort-up');

    localStorage.setItem('[lang="ru"]', 'enabled');
    russianEnable();
  }
};

const changeHTMLLang = function () {
  // changeLang = localStorage.getItem('[lang="ru"]');
  if (htmlElement.getAttribute('lang') == 'en') {
    document.querySelector('html').setAttribute('lang', 'ru');
  } else if (htmlElement.getAttribute('lang') == 'ru') {
    document.querySelector('html').setAttribute('lang', 'en');
  }
};

if (changeLang === 'enabled') {
  changeLanguage();
  changeHTMLLang();
}

languageLink.addEventListener('click', changeLanguage);

languageLinkMask.addEventListener('click', function (e) {
  e.preventDefault();
  changeLanguage();
  changeHTMLLang();
});

languageLink.addEventListener('click', changeHTMLLang);

document
  .querySelector('.menu-language')
  .addEventListener('click', changeLanguage);

document
  .querySelector('.menu-language')
  .addEventListener('click', changeHTMLLang);

//Toggle-btn functionality
const close = function (e) {
  if (
    e.target != toggleBtn && //work
    e.target != toggleIcon &&
    e.target != toggleMenu && //work
    e.target != toggleNav && //work
    e.target != toggleSunMoon &&
    e.target != toggleMoon // work + dont work
  ) {
    toggleBtn.checked = false;
    document.removeEventListener('click', close);
  }
};

toggleBtn.addEventListener('click', function () {
  if (this.checked) {
    document.addEventListener('click', close);
  }
});

//not close toggle-btn when svg clicked
toggleSunMoon.addEventListener('click', function () {
  toggleBtn.checked = true;
  document.removeEventListener('click', close);
});

//not close toggle-btn when links clicked
document.addEventListener('click', closeToggle);

function closeToggle(e) {
  for (let i = 0; i < links.length + 1; i++) {
    if (e.target == links[i]) {
      toggleBtn.checked = true;
      document.removeEventListener('click', close);
    } else {
      document.addEventListener('click', close);
    }
  }
}

//open and close toggle-btn on click
function allToggleElements() {
  allElements.forEach(el => {
    el.addEventListener('click', function (e) {
      if (e.target === el && toggleBtn.checked) {
        document.removeEventListener('click', close);
      }
    });
  });
}
allToggleElements();

//show toggle-btn on scroll down and hide on scroll up
let scrollPos;
window.addEventListener('scroll', () => {
  scrollPos = window.scrollY;
  if (scrollPos > 40) {
    toggleIcon.classList.add('scrolled');
    toggleSun.classList.add('scrollItem');
    toggleMoon.classList.add('scrollItem');

    // toggleMenu.style.display = 'block';
    // toggleMenu.classList.remove('opacity');
    // toggleMenu.style.transform = 'translateY(0%)';
  } else {
    toggleIcon.classList.remove('scrolled');
    toggleSun.classList.remove('scrollItem');
    toggleMoon.classList.remove('scrollItem');

    // allElements.forEach(el => (el.style.transform = 'rotate(90deg)'));
  }

  if (scrollPos < 10) {
    toggleMenu.classList.add('transforming');
  }

  if (scrollPos > 10) {
    toggleMenu.classList.remove('transforming');
  }
});

window.addEventListener('load', () => {
  if (scrollPos === 0) {
    toggleMenu.classList.remove('transforming');
  }
});

// window.addEventListener('click', () => {
//   // toggleIcon.classList.remove('scrolled');
// });
// function hideMenu(e) {
//   if (!toggleIcon) return;
//   if (toggleIcon.type == 'checkbox') {
//     toggleIcon.checked = !!e;
//   }
//   return e.target.type == 'checkbox';
//   console.log(e);
//   // let menuOpen = toggleIcon.checked;
//   // if ((menuOpen = false)) {
//   //   console.log('yes');
//   //   toggleIcon.unchecked;
//   // } else {
//   //   console.log('no');
//   // }
// }

// window.addEventListener('click', function (e) {
//   toggleIcon.checked = true;
//   if (e.target.type == 'checkbox') {
//     console.log('yes');
//   } else {
//     toggleIcon.setAttribute('checked', 'false');
//     toggleIcon.checked = false;
//     console.log('no');
//   }
// });

// document.addEventListener('click', function (e) {
//   if (e.target.id === 'toggle-btn') {
//     toggleBtn.classList.toggle('test');
//     console.log('yep'); //work
//     // toggleMenu.style.backgroundColor = 'pink';
//   }

//   if (e.target.id === 'toggle-menu') {
//     console.log('menu');
//   }

//   if (e.target.id === 'toggle-nav') {
//     console.log('nav');
//   }

//   if (
//     // e.target.id !== 'toggle-menu' &&
//     // e.target.id !== 'toggle-nav' &&
//     e.target.type == 'checkbox'
//   ) {
//     toggleBtn.click();
//     console.log('success');
//   }
// });
// $(document).ready(function () {
//   $(document).on('click', function (event) {
//     if ($(event.target).closest('#checkbox').length === 0) {
//       $('#checkbox').prop('checked', false);
//     }
//   });
// });

///////////////////////////////////////////////////////////Date////////////////////////////////////////////////////
const dates = document.querySelectorAll('.interesting-item__date');
const now = new Date();
const day = `${now.getDate()}`.padStart(2, 0);
const month = `${now.getMonth() + 1}`.padStart(2, 0);
const year = now.getFullYear();
dates.forEach(date => (date.textContent = `${day}.${month}.${year}`));

///////////////////////////////////////////////////////////Parallax////////////////////////////////////////////////////
// const layers = document.querySelectorAll('.layer');
// const headerParallax = document.querySelector('.header');
// const square1 = document.querySelector('.top-gallery-square1');
// const square2 = document.querySelector('.top-gallery-square2');
// const square3 = document.querySelector('.top-gallery-square3');
// const square4 = document.querySelector('.top-gallery-square4');
// const square5 = document.querySelector('.top-gallery-square5');
// const square6 = document.querySelector('.top-gallery-square6');
// const square7 = document.querySelector('.contacts-square1');
// const square8 = document.querySelector('.contacts-square2');
// const square9 = document.querySelector('.contacts-square3');

// function parallax(e) {
//   // console.log(e);

//   const speed1 = square1.getAttribute('data-speed');
//   const speed2 = square2.getAttribute('data-speed');
//   const speed3 = square3.getAttribute('data-speed');
//   square1.style.left = e.pageX * speed1 + 600 * -2 + 'px';
//   square2.style.left = e.pageX * speed2 + 480 * -2 + 'px';
//   square3.style.left = e.pageX * speed3 + 520 * -2 + 'px';

//   // layer.style.top = e.pageY * speed - 50 * 2 + 'px';
//   // console.log(square1.style.left);

//   // layers.forEach(layer => {
//   //   const speed = layer.getAttribute('data-speed');
//   //   const coordX = e.pageX;
//   //   const xPosition = e.clientX - layer.offsetWidth / 2;
//   //   layer.style.left = e.pageX + 'px';
//   //   // layer.style.transform = 'translateX(-' + coordX + 'px)';
//   // });
// }

// headerParallax.addEventListener('mousemove', parallax);
// cursor.style.top = e.pageY + 'px';
//   cursor.style.left = e.pageX + 'px';
// const layers = document.querySelectorAll('.layer');

// const layers = document.querySelectorAll('.layer');
// let y = 0,
//   x = 0,
//   endX = 0,
//   endY = 0;

// onmousemove = e => {
//   endX = innerWidth / 2 - e.x;
//   endY = innerHeight / 2 - e.y;
// };

// function parallax() {
//   x += (endX - x) / 2;
//   y += (endY - y) / 2;

//   layers.forEach(layer => {
//     const dataSpeed = layer.getAttribute('data-speed');
//     layer.style.transform = `translate(${x / 3}px, ${y / 3}px)`;
//   });
//   requestAnimationFrame(parallax);
// }

// requestAnimationFrame(parallax);

// (function () {
//   const square1 = document.querySelector('.top-gallery-square1');
//   const square2 = document.querySelector('.top-gallery-square2');
//   const square3 = document.querySelector('.top-gallery-square3');
//   const square4 = document.querySelector('.top-gallery-square4');
//   const square5 = document.querySelector('.top-gallery-square5');
//   const square6 = document.querySelector('.top-gallery-square6');
//   const square7 = document.querySelector('.contacts-square1');
//   const square8 = document.querySelector('.contacts-square2');
//   const square9 = document.querySelector('.contacts-square3');

//   let square1Item = {
//     handle: square1,
//     xPosition: square1.offsetLeft,
//     yPosition: square1.offsetTop,
//     parallax: 0.05,
//   };
//   let square2Item = {
//     handle: square2,
//     xPosition: square1.offsetLeft,
//     yPosition: square1.offsetTop,
//     parallax: 0.5,
//   };
//   let square3Item = {
//     handle: square3,
//     xPosition: square1.offsetLeft,
//     yPosition: square1.offsetTop,
//     parallax: 0.15,
//   };
//   let square4Item = {
//     handle: square4,
//     xPosition: square1.offsetLeft,
//     yPosition: square1.offsetTop,
//     parallax: 0.25,
//   };
//   let square5Item = {
//     handle: square5,
//     xPosition: square1.offsetLeft,
//     yPosition: square1.offsetTop,
//     parallax: 0.35,
//   };
//   let square6Item = {
//     handle: square6,
//     xPosition: square1.offsetLeft,
//     yPosition: square1.offsetTop,
//     parallax: 0.5,
//   };
//   let square7Item = {
//     handle: square7,
//     xPosition: square1.offsetLeft,
//     yPosition: square1.offsetTop,
//     parallax: 0.55,
//   };
//   let square8Item = {
//     handle: square8,
//     xPosition: square1.offsetLeft,
//     yPosition: square1.offsetTop,
//     parallax: 0.05,
//   };
//   let square9Item = {
//     handle: square9,
//     xPosition: square1.offsetLeft,
//     yPosition: square1.offsetTop,
//     parallax: 0.05,
//   };

//   let elements = {
//     square1Item,
//     square2Item,
//     square3Item,
//     square4Item,
//     square5Item,
//     square6Item,
//     square7Item,
//     square8Item,
//     square9Item,
//   };

//   const moveItems = function (e) {
//     let mouseX = e.x;
//     let windowWidth = window.innerWidth / 2;

//     for (let element in elements) {
//       let thisElement = elements[element];
//       let xPosition = thisElement.xPosition;
//       let elementPositionX =
//         thisElement.parallax * (windowWidth - mouseX) + thisElement.xPosition;
//       thisElement.handle.style.left = elementPositionX + 'px';
//     }
//   };

//   let resetXPositions = function () {
//     for (let element in elements) {
//       let thisElement = elements[element];
//       thisElement.xPosition = thisElement.handle.offsetLeft;
//     }
//   };

//   let centerElements = function (e) {
//     square1.style.left = window.innerWidth / 2;
//     resetXPositions();
//   };
//   centerElements();

//   document.addEventListener('mousemove', moveItems);
//   window.onresize = centerElements;
// })();

window.onload = function () {
  const layers = document.querySelectorAll('.layer');
  const headerParallax = document.querySelector('.header');
  const contactsParallax = document.querySelector('.contacts');

  if (headerParallax && contactsParallax) {
    const speed = 0.03;

    let positionX = 0,
      positionY = 0,
      coordXprocent = 0,
      coordYprocent = 0;

    function setMouseParallaxStyle() {
      const distX = coordXprocent - positionX;
      const distY = coordYprocent - positionY;

      positionX += distX * speed;
      positionY += distY * speed;

      layers.forEach(layer => {
        const dataSpeed = layer.getAttribute('data-speed');
        layer.style.transform = `translate(${positionX / dataSpeed}%, ${
          positionY / dataSpeed / 9
        }%)`;
      });

      requestAnimationFrame(setMouseParallaxStyle);
    }
    setMouseParallaxStyle();

    const headerParallaxMove = function (e) {
      const headerParallaxWidth = headerParallax.offsetWidth;
      const headerParallaxHeight = headerParallax.offsetHeight;

      const coordX = e.pageX - headerParallaxWidth / 2;
      const coordY = e.pageY - headerParallaxHeight / 2;

      coordXprocent = (coordX / headerParallaxWidth) * 100;
      coordYprocent = (coordY / headerParallaxHeight) * 100;
    };

    const contactsParallaxMove = function (e) {
      const contactsParallaxWidth = contactsParallax.offsetWidth;
      const contactsParallaxHeight = contactsParallax.offsetHeight;

      const contactsCoordX = e.pageX - contactsParallaxWidth / 2;
      const contactsCoordY = e.pageY - contactsParallaxHeight / 2;

      coordXprocent = (contactsCoordX / contactsParallaxWidth) * 100;
      coordYprocent = (contactsCoordY / contactsParallaxHeight) * 100;
    };

    headerParallax.addEventListener('mousemove', headerParallaxMove);
    contactsParallax.addEventListener('mousemove', contactsParallaxMove);
  }
};

// window.onload = function () {
//   const headerParallax = document.querySelector('.header');
//   const contactsParallax = document.querySelector('.contacts');

//   if (headerParallax && contactsParallax) {
//     const square1 = document.querySelector('.top-gallery-square1');
//     const square2 = document.querySelector('.top-gallery-square2');
//     const square3 = document.querySelector('.top-gallery-square3');
//     const square4 = document.querySelector('.top-gallery-square4');
//     const square5 = document.querySelector('.top-gallery-square5');
//     const square6 = document.querySelector('.top-gallery-square6');
//     const square7 = document.querySelector('.contacts-square1');
//     const square8 = document.querySelector('.contacts-square2');
//     const square9 = document.querySelector('.contacts-square3');

//     const forSquare1 = -1;
//     const forSquare2 = -2;
//     const forSquare3 = -4;
//     const forSquare4 = 10;
//     const forSquare5 = -3;
//     const forSquare6 = 8;
//     const forSquare7 = 10;
//     const forSquare8 = -3;
//     const forSquare9 = -2;

//     const speed = 0.55;

//     let positionX = 0,
//       positionY = 0,
//       coordXprocent = 0,
//       coordYprocent = 0;

//     function setMouseParallaxStyle() {
//       const distX = coordXprocent - positionX;
//       const distY = coordYprocent - positionY;

//       positionX += distX * speed;
//       positionY += distY * speed;

//       square1.style.transform = `translate(${positionX / forSquare1}%, ${
//         positionY / forSquare1
//       }%)`;
//       square2.style.transform = `translate(${positionX / forSquare2}%, ${
//         positionY / forSquare2
//       }%)`;
//       square3.style.transform = `translate(${positionX / forSquare3}%, ${
//         positionY / forSquare3
//       }%)`;
//       square4.style.transform = `translate(${positionX / forSquare4}%, ${
//         positionY / forSquare4
//       }%)`;
//       square5.style.transform = `translate(${positionX / forSquare5}%, ${
//         positionY / forSquare5
//       }%)`;
//       square6.style.transform = `translate(${positionX / forSquare6}%, ${
//         positionY / forSquare6
//       }%)`;
//       square7.style.transform = `translate(${positionX / forSquare7}%, ${
//         positionY / forSquare7
//       }%)`;
//       square8.style.transform = `translate(${positionX / forSquare8}%, ${
//         positionY / forSquare8
//       }%)`;
//       square9.style.transform = `translate(${positionX / forSquare9}%, ${
//         positionY / forSquare9
//       }%)`;

//       requestAnimationFrame(setMouseParallaxStyle);
//     }
//     setMouseParallaxStyle();

//     headerParallax.addEventListener('mousemove', function (e) {
//       const headerParallaxWidth = headerParallax.offsetWidth;
//       const headerParallaxHeight = headerParallax.offsetHeight;

//       const coordX = e.pageX - headerParallaxWidth / 2;
//       const coordY = e.pageY - headerParallaxHeight / 2;

//       coordXprocent = (coordX / headerParallaxWidth) * 100;
//       coordYprocent = (coordY / headerParallaxHeight) * 100;
//     });

//     contactsParallax.addEventListener('mousemove', function (e) {
//       const contactsParallaxWidth = contactsParallax.offsetWidth;
//       const contactsParallaxHeight = contactsParallax.offsetHeight;

//       const contactsCoordX = e.pageX - contactsParallaxWidth / 2;
//       const contactsCoordY = e.pageY - contactsParallaxHeight / 2;

//       coordXprocent = (contactsCoordX / contactsParallaxWidth) * 100;
//       coordYprocent = (contactsCoordY / contactsParallaxHeight) * 100;
//     });
//   }
// };

// const squares = function () {
//   layers.forEach(layer => {
//     const speed = layer.getAttribute('data-speed');
//     const coordX = event.screenX / 2;
//     const coordY = event.screenY / 2;

//     layer.style.transform = `translateX(-${(coordX * speed) / 20}px`;
//   });
// };
// function parallax(event) {
//   // console.log(event);
//   squares();
//   // const parallaxWidth = event.offsetX;
//   // const parallaxHeight = event.offsetY;
// }
// document.addEventListener('mousemove', parallax);

// function parallax(e) {
//   this.querySelectorAll('.layer').forEach(layer => {
//     const speed = layer.getAttribute('data-speed');
//     const x = window.innerWidth - e.pageX * speed;
//     const y = window.innerHeight - e.pageY * speed;
//     layer.style.transform = `translateX(${x / 75}px) translateY(${y / 65}px)`;
//   });
// }
// document.addEventListener('mousemove', parallax);

///////////////////////////////////////////////////////////Dark mode////////////////////////////////////////////////////
//Var 1
// toggleSunMoon.addEventListener('click', () => {
//   document.body.classList.toggle('dark');
// });
let darkMode = localStorage.getItem('dark');

const enableDarkMode = () => {
  document.body.classList.add('dark');
  localStorage.setItem('dark', 'enable');
};

const disableDarkMode = () => {
  document.body.classList.remove('dark');
  localStorage.setItem('dark', null);
};

if (darkMode === 'enable') {
  enableDarkMode();
}

toggleSunMoon.addEventListener('click', () => {
  darkMode = localStorage.getItem('dark');
  if (darkMode !== 'enable') {
    enableDarkMode();
  } else {
    disableDarkMode();
  }
});

document
  .querySelector('.toggle-menu-sunmoon--header')
  .addEventListener('click', function () {
    darkMode = localStorage.getItem('dark');
    if (darkMode !== 'enable') {
      enableDarkMode();
    } else {
      disableDarkMode();
    }
  });

//////////////////////////////////////////////////Scroll sections///////////////////////////////////////
// const sections = document.querySelectorAll('.section');

// const revealSection = function (entries, observer) {
//   const [entry] = entries;
//   // console.log(entry);
//   if (!entry.isIntersecting) return;
//   entry.target.classList.remove('section--hidden');
//   observer.unobserve(entry.target);
// };

// const sectionsObserver = new IntersectionObserver(revealSection, {
//   root: null,
//   threshold: 0.15,
// });

// sections.forEach(function (section) {
//   sectionsObserver.observe(section);
//   section.classList.add('section--hidden');
// });

//////////////////////////////////////////////////Slider//////////////////////////////////////////
const slides = document.querySelectorAll('.slide');
const sliderBtnLeft = document.querySelector('.slider__btn--left');
const sliderBtnRight = document.querySelector('.slider__btn--right');
const scrollbar = document.querySelector('.scrollbar__handle');
const videojs = document.querySelectorAll('.video-js');
let curSlide = 0;

const goToSlide = function (s) {
  slides.forEach((slide, i) => {
    slide.style.transform = `translateX(${100 * (i - s)}%)`;
    scrollbar.style.transform = `translateX(${
      -(100 / (slides.length - 1)) * (i - s)
    }%)`;
  });
};
goToSlide(0);

const videoPause = function () {
  videojs.forEach(video => video.pause());
};

const nextSlide = function () {
  curSlide === slides.length - 1 ? (curSlide = 0) : curSlide++;
  videoPause();
  goToSlide(curSlide);
};

const prevSlide = function () {
  curSlide === 0 ? (curSlide = slides.length - 1) : curSlide--;
  videoPause();
  goToSlide(curSlide);
};

sliderBtnRight.addEventListener('click', nextSlide);
sliderBtnLeft.addEventListener('click', prevSlide);

// document.addEventListener('keydown', function (e) {
//   console.log(e);
// });

// sliderBtn.forEach(btn => {
//   btn.addEventListener('click', function () {
//     document.querySelector('.slider__btn--left span').style.transform =
//       'translate(-50%,-50%) rotate(-360deg)';
//     document.querySelector('.slider__btn--right span').style.transform =
//       'translate(-50%,-50%) rotate(360deg)';
//   });
// });

// //////////////////////////////////////////////////////////////
// //Parallax
// function parallax(e) {
//   this.querySelectorAll('.layer').forEach(layer => {
//     const speed = layer.getAttribute('data-speed');
//     const x = window.innerWidth - e.pageX * speed;
//     const y = window.innerHeight - e.pageY * speed;
//     layer.style.transform = `translateX(${x / 75}px) translateY(${y / 65}px)`;
//   });
// }
// document.addEventListener('mousemove', parallax);

// const cursor = document.querySelector('.cursor');
// const navLinks = document.querySelectorAll('.header__nav-link');

// function cursorMove(e) {
//   cursor.style.top = e.pageY + 'px';
//   cursor.style.left = e.pageX + 'px';
// }
// window.addEventListener('mousemove', cursorMove);

// navLinks.forEach(link => {
//   link.addEventListener('mouseover', function () {
//     cursor.classList.add('nav-cursor');
//   });
//   link.addEventListener('mouseleave', function () {
//     cursor.classList.remove('nav-cursor');
//   });
// });
// document.addEventListener('mousemove', e => {
//   cursor.setAttribute(
//     'style',
//     'top: ' + (e.pageY - 0.5) + 'px; left: ' + (e.pageX - 0.5) + 'px;'
//   );
// });

// class Sketch {
//   constructor() {
//     this.canvas = document.createElement('canvas');
//     this.ctx = this.canvas.getContext('2d');
//     document.body.appendChild(this.canvas);

//     this.width = document.documentElement.clientWidth;
//     this.height = document.documentElement.clientHeight;

//     this.canvas.width = this.width;
//     this.canvas.height = this.height;

//     this.time = 0;

//     this.radius = 50;
//     this.startAngle = 10;
//     this.endAngle = Math.PI * 2;

//     this.raf();
//     this.mousemove();
//     this.x = 0;
//     this.y = 0;
//   }

//   raf() {
//     this.time++;
//     this.ctx.beginPath();

//     this.ctx.clearRect(0, 0, this.width, this.height);
//     this.ctx.fillRect(this.x, this.y, this.startAngle, this.endAngle);
//     this.ctx.fillStyle = 'orangered';

//     window.requestAnimationFrame(this.raf.bind(this));
//   }

//   mousemove() {
//     this.canvas.addEventListener('mousemove', e => {
//       this.x = e.clientX;
//       this.y = e.clientY;
//     });
//   }
// }

// new Sketch();

//////////////////////////////////////////////////Form//////////////////////////////////////////
const form = document.querySelector('.form');

const nameElEng = document.getElementById('name-eng');
const nameElRus = document.getElementById('name-rus');

const emailElEng = document.getElementById('mail-eng');
const emailElRus = document.getElementById('mail-rus');

const messageElEng = document.getElementById('message-eng');
const messageElRus = document.getElementById('message-rus');

form.addEventListener('submit', e => {
  e.preventDefault();

  checkInputs();
  checkEmail();
});

function checkInputs() {
  const usernameValueEng = nameElEng.value.trim();
  const emailValueEng = emailElEng.value.trim();
  const messageValueEng = messageElEng.value.trim();

  const usernameValueRus = nameElRus.value.trim();
  const emailValueRus = emailElRus.value.trim();
  const messageValueRus = messageElRus.value.trim();

  if (usernameValueEng === '') {
    setErrorFor(nameElEng, 'Username cannot be blank');
  } else if (usernameValueEng.length <= 1) {
    setErrorFor(nameElEng, 'Username must be 2 character');
  } else {
    setSuccessFor(nameElEng);
  }

  if (usernameValueRus === '') {
    setErrorFor(nameElRus, 'Поле с именем не может быть пустым');
  } else if (usernameValueRus.length <= 1) {
    setErrorFor(nameElRus, 'Имя должно содержать не менее двух символов');
  } else {
    setSuccessFor(nameElRus);
  }

  if (emailValueEng === '') {
    setErrorFor(emailElEng, 'Email cannot be blank');
  } else if (!checkEmail(emailValueEng)) {
    setErrorFor(emailElEng, 'Not a valid email');
  } else {
    setSuccessFor(emailElEng);
  }

  if (emailValueRus === '') {
    setErrorFor(emailElRus, 'Поле с электронной почтой не может быть пустым');
  } else if (!checkEmail(emailValueRus)) {
    setErrorFor(emailElRus, 'Недействительный адрес электронной почты');
  } else {
    setSuccessFor(emailElRus);
  }

  if (messageValueEng === '') {
    setErrorFor(messageElEng, 'Message cannot be blank');
  } else {
    setSuccessFor(messageElEng);
  }

  if (messageValueRus === '') {
    setErrorFor(messageElRus, 'Поле сообщения не может быть пустым');
  } else {
    setSuccessFor(messageElRus);
  }
}

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const label = formControl.querySelector('label');
  label.innerText = message;
  formControl.classList.add('error');
  formControl.classList.remove('success');
}

function setSuccessFor(input) {
  const formControl = input.parentElement;
  formControl.classList.add('success');
  formControl.classList.remove('error');
}

function checkEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}

// const btnSend = document.querySelector('.btn-send');

// const nameEl = document.querySelectorAll('.form__group input')
// const inputEmailEng = document.getElementById('mail-eng');
// const inputEmailRus = document.getElementById('mail-rus');
// const formLabel = document.querySelector('.form__label--email');
// const small = document.querySelector('.form__group small');
// const emailEng = inputEmailEng.value;

// // function isValidEmail(email) {
// //   const res =
// //     /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
// //   return res.test(String(email).toLowerCase());
// // }

// const regex = new RegExp(
//   /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
// );

// inputEmailEng.addEventListener('keyup', function () {
//   btnSend.classList.toggle('valid', regex.test(inputEmailEng.value));
// });

// btnSend.addEventListener('click', function (e) {
//   e.preventDefault();

//   if (emailEng === '') {
//     formLabel.classList.add('label-visible');
//     errorGenerator(emailEng, 'Please provide your email');
//   }
// });

// function errorGenerator(input, message) {
//   formLabel.textContent = message;
// }

// btnSend.addEventListener('click', function (e) {
//   e.preventDefault();

//   const emailEng = inputEmailEng.value;
//   const small = small.value;
//   // const emailRus = inputEmailRus.value;

//   if (emailEng === '') {
//     errorGenerator(emailEng, 'Please provide your email');
//     // errorGenerator(emailRus, 'Пожалуйста, введите вашу электронную почту');
//     formLabel.classList.add('label-visible');
//   } else if (!isValidEmail(emailEng)) {
//     errorGenerator(emailEng, 'Please enter a valid email');
//     // errorGenerator(
//     //   emailRus,
//     //   'Пожалуйста, проверьте правильность адреса электронной почты'
//     // );
//     // formLabel.style.transform = 'translateY(0)';
//   } else {
//     successGenerator(small, 'Wow! Cool email (:');
//     // successGenerator(emailRus, 'Спасибо за ваше сообщение!');
//     // formLabel.classList.remove('label-visible');

//     formLabel.classList.add('label-valid');
//     formLabel.style.animation = `slide-out-blurred-left 1.8s cubic-bezier(0.755, 0.050, 0.855, 0.060) alternate both`;
//     // setTimeout(function () {
//     //   successGenerator(emailEng, 'Wow! Cool email (:');
//     // }, 2500);
//   }
// });

// function errorGenerator(input, message) {
//   formLabel.textContent = message;
//   // inputEmailEng.value = '';
//   // inputEmailRus.value = '';
// }

// function successGenerator(input, message) {
//   small.textContent = message;

//   // inputEmailEng.value = '';

//   // formLabel.textContent = `${message}`;
//   // formLabel.style.color = `#3166ac`;
// }
