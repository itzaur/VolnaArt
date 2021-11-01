'use strict';

const toggleBtn = document.querySelector('.toggle-btn');
const toggleIcon = document.querySelector('.toggle-icon');
const toggleMenu = document.querySelector('.toggle-menu');
const allElements = document.querySelectorAll('.element');
const toggleNav = document.querySelector('.toggle-nav');
const toggleSunMoon = document.querySelector('.toggle-menu-sunmoon');
const toggleSun = document.querySelector('.toggle-menu-sun');
const toggleMoon = document.querySelector('.toggle-menu-moon');
const links = document.querySelectorAll('.toggle-nav__link');

//////////////////////////HOME PAGE POPUP///////////////////////////////////
const storyLink1 = document.getElementById('story-link');
const storyLink2 = document.getElementById('story-link--2');
const storyHomePage1 = document.querySelector('.story--home-page');
const btnStory1 = document.querySelector('.btn-story');
const storyHomePage2 = document.querySelector('.story--home-page--2');
const btnStory2 = document.querySelector('.btn-story--2');

storyLink1.addEventListener('click', function (e) {
  e.preventDefault();

  storyHomePage1.classList.add('active');
  storyHomePage1.style.clipPath = 'circle(100% at center)';
});

btnStory1.addEventListener('click', function () {
  storyHomePage1.style.clipPath = 'circle(0rem at center)';
});

window.onclick = function (e) {
  if (e.target == storyHomePage1) {
    storyHomePage1.style.clipPath = 'circle(0rem at center)';
  }

  if (e.target == storyHomePage2) {
    storyHomePage2.style.clipPath = 'circle(0rem at center)';
  }
};

storyLink2.addEventListener('click', function (e) {
  e.preventDefault();

  storyHomePage2.classList.add('active');
  storyHomePage2.style.clipPath = 'circle(100% at center)';
});

btnStory2.addEventListener('click', function () {
  storyHomePage2.style.clipPath = 'circle(0rem at center)';
});

///////////////////////////////////////////////TOGGLE MENU WITH TOP-GALLERY//////////////////////////////////
const topGalleryCards = document.querySelectorAll('.top-gallery-card a');
const topGalleryLinks = document.querySelectorAll('.full-content__link');

topGalleryCards.forEach(card => {
  card.addEventListener('click', function () {
    toggleIcon.style.opacity = 0;
  });
  topGalleryLinks.forEach(link => {
    link.addEventListener('click', function () {
      toggleIcon.style.opacity = 1;
    });
  });
});

if (window.performance) {
  toggleBtn.checked = false;
}

/////////////////////////////////////////////Change language and show/hide required attribute in form//////////////////
const htmlElement = document.querySelector('html');
const languageLink = document.querySelector('.header__nav-link--6 span');
const languageLinkMask = document.querySelector('.header__nav-link--span');
const russianLang = document.querySelectorAll('[data-lang="russian"]');
const englishLang = document.querySelectorAll('[data-lang="english"]');
const menuLanguage = document.querySelectorAll('.menu-language');
const formInput = document.querySelectorAll('.form__input');

const changeAttribute = function () {
  formInput.forEach(input => {
    if (input.closest('div[style="display: none;"]')) {
      input.removeAttribute('required');
    } else if (input.closest('div[style="display: block;"]')) {
      input.setAttribute('required', 'required');
    }
  });
};

changeAttribute();

menuLanguage.forEach(menuLang => {
  menuLang.addEventListener('click', function () {
    formInput.forEach(input => {
      if (input.closest('div[style="display: block;"]')) {
        input.removeAttribute('required');
      } else if (input.closest('div[style="display: none;"]')) {
        input.setAttribute('required', 'required');
      }
    });
  });
});

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
    document.querySelector('.fa-sort-down').classList.add('active-icon');
    document.querySelector('.fa-sort-up').classList.remove('active-icon');

    localStorage.setItem('[lang="ru"]', null);
    russianDisable();
  } else {
    languageLink.textContent = 'Ru';
    languageLinkMask.textContent = 'Ru';
    document.querySelector('.fa-sort-down').classList.remove('active-icon');
    document.querySelector('.fa-sort-up').classList.add('active-icon');

    localStorage.setItem('[lang="ru"]', 'enabled');
    russianEnable();
  }
};

const changeHTMLLang = function () {
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
languageLink.addEventListener('click', changeAttribute);

languageLinkMask.addEventListener('click', function (e) {
  e.preventDefault();
  changeLanguage();
  changeHTMLLang();
  changeAttribute();
});

languageLink.addEventListener('click', changeHTMLLang);

document
  .querySelector('.menu-language')
  .addEventListener('click', changeLanguage);

document
  .querySelector('.menu-language')
  .addEventListener('click', changeHTMLLang);

///////////////////////////////////////////////Toggle-btn functionality/////////////////////////
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
    // document.removeEventListener('click', close);
  }
};

toggleBtn.addEventListener('click', function () {
  toggleIcon.style.zIndex = 36;

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
const mediaQuery = window.matchMedia('(max-width: 900px)');
function mediaQueryChanges(e) {
  if (e.matches) {
    window.removeEventListener('scroll', toggleFunc);
    window.addEventListener('scroll', toggleBtnScroll);
    toggleIcon.style.position = 'fixed';
    toggleMenu.classList.remove('transforming');
  } else {
    window.addEventListener('scroll', toggleFunc);
    window.addEventListener('scroll', toggleBtnScroll);

    if (window.scrollY === 0) {
      toggleMenu.classList.add('transforming');
    }
  }
}
mediaQuery.addEventListener('change', mediaQueryChanges);
mediaQueryChanges(mediaQuery);

let scrollPos;
function toggleFunc() {
  scrollPos = window.scrollY;
  if (scrollPos > 40) {
    toggleIcon.classList.add('scrolled');
    toggleSun.classList.add('scrollItem');
    toggleMoon.classList.add('scrollItem');
  } else {
    toggleIcon.classList.remove('scrolled');
    toggleSun.classList.remove('scrollItem');
    toggleMoon.classList.remove('scrollItem');
  }

  if (scrollPos < 10) {
    toggleMenu.classList.add('transforming');
    toggleBtn.checked = false;
  }

  if (scrollPos > 10) {
    toggleMenu.classList.remove('transforming');
  }
}

//toggle-scroll functionality
function toggleBtnScroll() {
  const toggleScrollBtn = document.querySelector('.toggle-scroll');
  const headerHeight = document
    .querySelector('header')
    .getBoundingClientRect().height;

  const scrollHeight = window.pageYOffset;

  if (scrollHeight > headerHeight) {
    toggleScrollBtn.classList.add('active-scroll');
    toggleScrollBtn.classList.remove('hidden-scroll');
  } else {
    toggleScrollBtn.classList.remove('active-scroll');
    toggleScrollBtn.classList.add('hidden-scroll');
  }
}

function toggleMenuTransform() {
  if (scrollPos === 0) {
    toggleMenu.classList.remove('transforming');
  }
}

///////////////////////////////////////////////////////////Parallax//////////////////////////////////////////////
let positionX = 0,
  positionY = 0,
  coordXprocent = 0,
  coordYprocent = 0;

function parallaxRun() {
  const headerParallax = document.querySelector('.header');
  const contactsParallax = document.querySelector('.contacts');

  if (headerParallax && contactsParallax) {
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
}

function setMouseParallaxStyle() {
  const layers = document.querySelectorAll('.layer');
  const speed = 0.03;
  const distX = coordXprocent - positionX;
  const distY = coordYprocent - positionY;

  positionX += distX * speed;
  positionY += distY * speed;

  layers.forEach(layer => {
    const dataSpeed = layer.getAttribute('data-speed');
    layer.style.transform = `translate(${positionX / dataSpeed}%, ${
      positionY / dataSpeed / 8
    }%)`;
  });

  requestAnimationFrame(setMouseParallaxStyle);
}

parallaxRun();

/////////////////////////////////////////Dark mode////////////////////////////////////////////////////
//Var 1
// toggleSunMoon.addEventListener('click', () => {
//   document.body.classList.toggle('dark');
// });

//Var 2
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

//////////////////////////////////////////////////Scroll sections////////////////////////////////////
const sections = document.querySelectorAll('.section');

const revealSection = function (entries, observer) {
  const [entry] = entries;

  if (!entry.isIntersecting) return;
  entry.target.classList.remove('section--hidden');
  observer.unobserve(entry.target);
};

const sectionsObserver = new IntersectionObserver(revealSection, {
  root: null,
  threshold: 0.15,
});

sections.forEach(function (section) {
  sectionsObserver.observe(section);
  section.classList.add('section--hidden');
});

//////////////////////////////////////////////////Slider//////////////////////////////////////////
const slides = document.querySelectorAll('.slide');
const sliderBtnLeft = document.querySelector('.slider__btn--left');
const sliderBtnRight = document.querySelector('.slider__btn--right');
const scrollbar = document.querySelector('.scrollbar__handle');
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

const nextSlide = function () {
  curSlide === slides.length - 1 ? (curSlide = 0) : curSlide++;

  goToSlide(curSlide);
};

const prevSlide = function () {
  curSlide === 0 ? (curSlide = slides.length - 1) : curSlide--;

  goToSlide(curSlide);
};

sliderBtnRight.addEventListener('click', nextSlide);
sliderBtnLeft.addEventListener('click', prevSlide);

document.addEventListener('keydown', function (e) {
  if (e.key === 'ArrowLeft') {
    prevSlide();
  } else if (e.key === 'ArrowRight') {
    nextSlide();
  }
});

function slidesVisible() {
  const slides = document.querySelectorAll('.slide');

  slides.forEach(slide => {
    slide.style.display = 'block';
  });

  document.querySelector('.scrollbar__handle').style.display = 'block';
}

window.addEventListener('load', function () {
  slidesVisible();
  toggleMenuTransform();
  changeAttribute();
  preloaderSessionStorage();
});

function findVideos() {
  let videos = document.querySelectorAll('.video');

  for (let i = 0; i < videos.length; i++) {
    setupVideo(videos[i]);
  }
}

function setupVideo(video) {
  let link = video.querySelector('.video__link');
  let media = video.querySelector('.video__media');
  let button = video.querySelector('.video__btn');
  let url = parseMediaURL(media);

  let id = video.id;

  video.addEventListener('click', () => {
    let iframe = createIframe(url);
    iframe.id = id;
    video.id = '';

    link.remove();
    button.remove();
    video.appendChild(iframe);

    let iframeIds = [];
    let playerId = [];

    iframeIds.push(iframe.id);
    playerId.push(iframe.id.replace('video', 'player'));

    const onYouTubeIframeAPIReady = function () {
      playerId[0] = new YT.Player(iframeIds[0], {
        events: {
          onStateChange: onPlayerStateChange,
        },
      });
    };
    onYouTubeIframeAPIReady();

    function onPlayerStateChange() {
      sliderBtnRight.addEventListener('click', function () {
        playerId[0].pauseVideo();
      });
      sliderBtnLeft.addEventListener('click', function () {
        playerId[0].pauseVideo();
      });
    }
  });

  link.removeAttribute('href');
  video.classList.add('video--enabled');
}

function parseMediaURL(media) {
  let regexp =
    /https:\/\/i\.ytimg\.com\/vi\/([a-zA-Z0-9_-]+)\/maxresdefault\.jpg/i;
  let urlLink = media.src;
  let match = urlLink.match(regexp);

  return match[1];
}

function createIframe(url) {
  let iframe = document.createElement('iframe');

  iframe.setAttribute('allowfullscreen', '');
  iframe.setAttribute('allow', 'autoplay');
  iframe.setAttribute('src', generateURL(url));
  iframe.classList.add('video__media');

  return iframe;
}

function generateURL(url) {
  let query = '?enablejsapi=1&showinfo=0&autoplay=1';

  return 'https://www.youtube.com/embed/' + url + query;
}

findVideos();

//////////////////////////////////////////////////Form//////////////////////////////////////////
const form = document.querySelector('.form');

const nameElEng = document.getElementById('name-eng');
const nameElRus = document.getElementById('name-rus');

const emailElEng = document.getElementById('mail-eng');
const emailElRus = document.getElementById('mail-rus');

const messageElEng = document.getElementById('message-eng');
const messageElRus = document.getElementById('message-rus');

form.addEventListener('submit', e => {
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

  checkEmail();

  if (
    nameElEng.parentElement.classList.contains('success') &&
    emailElEng.parentElement.classList.contains('success') &&
    messageElEng.parentElement.classList.contains('success')
  ) {
    return true;
  } else if (
    nameElRus.parentElement.classList.contains('success') &&
    emailElRus.parentElement.classList.contains('success') &&
    messageElRus.parentElement.classList.contains('success')
  ) {
    return true;
  } else {
    e.preventDefault();
    return false;
  }
});

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

if (document.querySelector('.alert-success')) {
  removePreloader();
  document
    .querySelector('.alert-success__close')
    .addEventListener('click', function () {
      document.querySelector('.alert-success').style.display = 'none';
    });
}

if (document.querySelector('.alert-error')) {
  removePreloader();
  document
    .querySelector('.alert-error__close')
    .addEventListener('click', function () {
      document.querySelector('.alert-error').style.display = 'none';
    });
}

////////////////////////////////////////////////////DON'T CLICK BUTTON///////////////////////////////
const dontClickBtnEn = document.querySelector('.dontClickEn');
const dontClickBtnRus = document.querySelector('.dontClickRus');

dontClickBtnRus.addEventListener('click', function (e) {
  e.preventDefault();
  setTimeout(function () {
    const div = document.createElement('div');
    div.classList.add('click-element');
    const img = document.createElement('img');
    img.className = 'click-img';
    img.src = './images/gallery/dontClick.jpg';
    img.alt = `don't click here`;
    div.appendChild(img);
    document.body.appendChild(div);
  }, 500);
});

dontClickBtnEn.addEventListener('click', function (e) {
  e.preventDefault();

  const form = document.querySelector('.form');

  form.classList.toggle('falling');
  document.querySelector('.contacts-square1').classList.toggle('falling1');
  document.querySelector('.contacts-square2').classList.toggle('falling2');
  document.querySelector('.contacts-square3').classList.toggle('falling3');

  toggleIcon.classList.toggle('falling4');
  document.querySelector('.el1').classList.toggle('falling5');
  document.querySelector('.el2').classList.toggle('falling6');
  document.querySelector('.el3').classList.toggle('falling7');
});

////////////////////////////////////////////////////PRELOADER///////////////////////////////
function preloaderSessionStorage() {
  if (!sessionStorage.isVisited) {
    sessionStorage.isVisited = 'true';
    preloader();
  } else {
    removePreloader();
  }
}

function preloader() {
  document.body.classList.add('loaded__hiding');
  window.setTimeout(function () {
    document.body.classList.add('loaded');
    document.body.classList.remove('loaded__hiding');
  }, 4500);
}

function removePreloader() {
  document.querySelector('.preloader').style.display = 'none';
  document.body.classList.remove('loaded');
}

///////Fix Error (The service worker navigation preload request was cancelled before 'preloadResponse' settled)///////
addEventListener(
  'fetch',
  event =>
    event.request.mode === 'navigate' &&
    new URL(event.request.url, location.origin).pathname !== '/test' &&
    event.respondWith(event.preloadResponse)
);

document.cookie = 'cookie1=value1; SameSite=None; Secure';

////////////////////////////////////////
const lazyImages = document.querySelectorAll('[loading="lazy"]');

const optionsImages = {
  rootMargin: '0px',
  threshold: 0,
};

const callback = function (entries, observer) {
  entries.forEach(entry => {
    if (!entry.isIntersecting) return;

    observer.unobserve(entry.target);
    const { srcset } = entry.target.dataset;
    const { src } = entry.target.dataset;
    if (!src || !srcset) return;
    entry.target.src = src;
    entry.target.srcset = srcset;
  });
};

let observer = new IntersectionObserver(callback, optionsImages);

lazyImages.forEach(img => {
  observer.observe(img);
});

//show images when card hover
const cards = document.querySelectorAll('.top-gallery-card');
const imagesTopGalleryBack = document.querySelectorAll(
  '.top-gallery__img--back img'
);
cards.forEach(card => {
  card.addEventListener('mouseover', rotateImg);
  card.addEventListener('click', showImg);
});

function rotateImg(e) {
  const img = e.target.offsetParent.children[1].lastElementChild;

  const newUrl = img.dataset.src;
  img.src = newUrl;
}

function showImg(e) {
  const fullContent = document.querySelectorAll('.full-content');
  const id = e.target.getAttribute('href').slice(1);

  fullContent.forEach(content => {
    const contentImg = content.querySelector('.full-content__img img');
    if (content.id === id) {
      const newURLSrc = contentImg.dataset.src;
      const newURLSrcset = contentImg.dataset.srcset;
      contentImg.src = newURLSrc;
      contentImg.srcset = newURLSrcset;
    }
  });
}