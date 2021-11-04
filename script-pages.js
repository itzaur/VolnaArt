'use strict';

const toggleMenu = document.querySelector('.toggle-menu');
const allElements = document.querySelectorAll('.element');
const toggleNav = document.querySelector('.toggle-nav');
const toggleNavList = document.querySelectorAll('.toggle-nav li');
const toggleSunMoon = document.querySelector('.toggle-menu-sunmoon');
const toggleSun = document.querySelector('.toggle-menu-sun');
const toggleMoon = document.querySelector('.toggle-menu-moon');

///////////////////////////////////////////////////////////Dark mode////////////////////////////////////////////////////
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

//toggle-scroll functionality
window.addEventListener('scroll', toggleBtnScroll);

function toggleBtnScroll() {
  const toggleScrollBtn = document.querySelector('.toggle-scroll');

  const itemHeight = document
    .querySelector('.item1')
    .getBoundingClientRect().height;
  const scrollHeight = window.pageYOffset;

  document.querySelectorAll('.toggle-scroll__item').forEach(item => {
    document.querySelector('.dark')
      ? (item.style.background = '#84c9fb')
      : (item.style.background = '#fff');
  });

  toggleScrollBtn.style.bottom = '1.2rem';

  if (scrollHeight > itemHeight) {
    toggleScrollBtn.classList.add('active-scroll');
    toggleScrollBtn.classList.remove('hidden-scroll');
  } else {
    toggleScrollBtn.classList.remove('active-scroll');
    toggleScrollBtn.classList.add('hidden-scroll');
  }
}
const wrappers = document.querySelectorAll('.full-content__wrapper');
const content = document.querySelectorAll('.full-content');
window.addEventListener('click', function (e) {
  content.forEach(el => {
    if (e.target == el) {
      el.classList.add('hide');
    }
  });
});

window.addEventListener('click', function (e) {
  wrappers.forEach(wrapper => {
    if (e.target == wrapper) {
      wrapper.closest('.full-content').classList.add('hide');
    }
  });
});

document.querySelectorAll('.grid__item').forEach(item => {
  item.addEventListener('click', function () {
    wrappers.forEach(wrapper => {
      wrapper.classList.remove('hide');
    });
  });
});

document
  .querySelectorAll('.multiple-characters-gallery__item')
  .forEach(item => {
    item.addEventListener('click', () => {
      wrappers.forEach(wrapper => {
        wrapper.closest('.full-content').classList.remove('hide');
      });
    });
  });

document.querySelectorAll('.portrait-gallery__item').forEach(item => {
  item.addEventListener('click', () => {
    wrappers.forEach(wrapper => {
      wrapper.closest('.full-content').classList.remove('hide');
    });
  });
});

document.querySelectorAll('.full-growth-gallery__item').forEach(item => {
  item.addEventListener('click', () => {
    wrappers.forEach(wrapper => {
      wrapper.closest('.full-content').classList.remove('hide');
    });
  });
});

document.querySelectorAll('.other-gallery__item').forEach(item => {
  item.addEventListener('click', () => {
    wrappers.forEach(wrapper => {
      wrapper.closest('.full-content').classList.remove('hide');
    });
  });
});
