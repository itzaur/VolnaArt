'use strict';

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
  console.log('test');
  darkMode = localStorage.getItem('dark');
  if (darkMode !== 'enable') {
    enableDarkMode();
  } else {
    disableDarkMode();
  }
});
