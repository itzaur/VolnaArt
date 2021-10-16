<?php include 'form.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="Content-Security-Policy" content="default-src 'self'" />
    <meta
      content="funart, graphics, drawings, фанарт, графика, рисунки на заказ, игровые персонажи"
      name="keywords"
    />
    <meta
      name="description"
      content="Volna art. Drawings to order. Drawings of game characters | Волна арт. Рисунки на заказ. Фанарт, рисунки игровых персонажей"
    />
    <meta name="robots" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta content="VOLNA | Art" property="og:title" />
    <meta content="https://i.postimg.cc/rsKBBj5C/09.jpg" property="og:image" />
    <link rel="stylesheet" href="css/main.css" />
    <link
      rel="icon"
      type="image/svg+xml"
      href="images/logo/logo-dark.svg"
      sizes="192x192"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,500&display=swap"
      rel="stylesheet"
    />
    <link rel="author" href="preneur85@gmail.com" />
    <title>VOLNA | Art</title>
  </head>
  <body>
    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <div class="preloader">
      <div class="preloader__box">
        <div class="preloader__item"></div>
        <div class="preloader__item"></div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg">
        <defs>
          <filter id="goo-load">
            <feGaussianBlur
              in="SourceGraphic"
              stdDeviation="10"
              result="blur"
            />
            <feColorMatrix
              in="blur"
              mode="matrix"
              values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -7"
            />
          </filter>
        </defs>
      </svg>
    </div>

    <header class="header" id="header">
      <span class="logo-box">
        <img class="logo" src="images/logo/logo.svg" alt="logo" />
        <img
          class="logo-dark"
          src="images/logo/logo-dark.svg"
          alt="logo-dark"
        />
      </span>
      <div class="heading">
        <h1 class="heading-primary" data-lang="english">
          Volna&ensp;<span>|&ensp;Art</span>
        </h1>
        <h1 class="heading-primary heading-primary--rus" data-lang="russian">
          Волна&ensp;<span>|&ensp;Арт</span>
        </h1>
        <h2 class="heading-secondary" data-lang="english">
          Each gallery has its own works of art
        </h2>
        <h2 class="heading-secondary" data-lang="russian">
          В каждой галерее свои художества
        </h2>
      </div>

      <div class="header__nav">
        <nav class="header__nav-box">
          <ul class="header__nav-item">
            <li class="header__nav-list">
              <a class="header__nav-link" href="#gallery" data-lang="english">
                <div class="header__nav-link--mask"><span>Gallery</span></div>
                Gallery</a
              >
              <a class="header__nav-link" href="#gallery" data-lang="russian">
                <div class="header__nav-link--mask"><span>Галерея</span></div>
                Галерея</a
              >
            </li>
            <li class="header__nav-list">
              <a
                class="header__nav-link"
                href="#interesting"
                data-lang="english"
              >
                <div class="header__nav-link--mask">
                  <span>It is interesting...</span>
                </div>
                It is interesting...</a
              >
              <a
                class="header__nav-link"
                href="#interesting"
                data-lang="russian"
              >
                <div class="header__nav-link--mask">
                  <span>Это интересно...</span>
                </div>
                Это интересно...</a
              >
            </li>
            <li class="header__nav-list">
              <a
                class="header__nav-link"
                href="#video-gallery"
                data-lang="english"
              >
                <div class="header__nav-link--mask"><span>Video</span></div>
                Video</a
              >
              <a
                class="header__nav-link"
                href="#video-gallery"
                data-lang="russian"
              >
                <div class="header__nav-link--mask"><span>Видео</span></div>
                Видео</a
              >
            </li>
            <li class="header__nav-list">
              <a class="header__nav-link" href="#contacts" data-lang="english">
                <div class="header__nav-link--mask">
                  <span>Contact</span>
                </div>
                Contact</a
              >
              <a class="header__nav-link" href="#contacts" data-lang="russian">
                <div class="header__nav-link--mask">
                  <span>Контакты</span>
                </div>
                Контакты</a
              >
            </li>
            <li class="header__nav-list change-lang">
              <a class="header__nav-link header__nav-link--6" href="#">
                <div class="header__nav-link--mask"><span>En</span></div>
                <span class="header__nav-link--span">En</span>
                <svg
                  class="fa-sort-down active-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 320 512"
                >
                  <path
                    fill="currentColor"
                    d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41z"
                  ></path>
                </svg>
                <svg
                  class="fa-sort-up"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 320 512"
                >
                  <path
                    fill="currentColor"
                    d="M279 224H41c-21.4 0-32.1-25.9-17-41L143 64c9.4-9.4 24.6-9.4 33.9 0l119 119c15.2 15.1 4.5 41-16.9 41z"
                  ></path>
                </svg>
              </a>
            </li>
          </ul>
        </nav>
        <span class="header__nav-line"></span>
        <div class="header__nav-icons">
          <ul class="header__nav-item">
            <li class="header__nav-list-icon">
              <a
                class="header__nav-icon"
                href="https://www.vk.com/club_volna_a"
                target="_blank"
                aria-label="vk.com"
                rel="noopener"
              >
                <svg
                  class="social-icons"
                  enable-background="new 0 0 30 30"
                  height="30px"
                  viewBox="0 0 30 30"
                  width="30px"
                  xml:space="preserve"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <path
                    clip-rule="evenodd"
                    d="M16,24c1,0,1-1.441,1-2c0-1,1-2,2-2s2.715,1.715,4,3c1,1,1,1,2,1s3,0,3,0  s2-0.076,2-2c0-0.625-0.685-1.685-3-4c-2-2-3.026-0.967,0-5c1.843-2.456,3.184-4.681,2.954-5.323C29.734,7.064,24.608,6.088,24,7  c-2,3-2.367,3.735-3,5c-1,2-1.099,3-2,3c-0.909,0-1-1.941-1-3c0-3.306,0.479-5.644-1-6c0,0-2,0-3,0c-1.61,0-3,1-3,1  s-1.241,0.968-1,1c0.298,0.04,2-0.414,2,1c0,1,0,2,0,2s0.009,4-1,4c-1,0-3-4-5-7C5.215,6.823,5,7,4,7C2.928,7,2.001,7.042,1,7.042  C0,7.042-0.128,7.679,0,8c2,5,3.437,8.14,7.237,12.096C10.722,23.725,13.05,23.918,15,24C15.5,24.021,15,24,16,24z"
                    fill-rule="evenodd"
                  />
                </svg>
              </a>
            </li>
            <li class="header__nav-list-icon">
              <a
                class="header__nav-icon"
                href="https://www.youtube.com/channel/UCQBC6BuesprYAv94pVlRfvQ"
                target="_blank"
                aria-label="Youtube"
                rel="noopener"
              >
                <svg
                  class="social-icons"
                  viewBox="0 0 60 42.46"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <title />
                  <g>
                    <g>
                      <path
                        d="M47.54,0H12.46A12.46,12.46,0,0,0,0,12.46V30A12.46,12.46,0,0,0,12.46,42.46H47.54A12.46,12.46,0,0,0,60,30V12.46A12.46,12.46,0,0,0,47.54,0ZM39.11,22.08,22.7,29.91a.66.66,0,0,1-.94-.59V13.17a.66.66,0,0,1,1-.59L39.13,20.9A.66.66,0,0,1,39.11,22.08Z"
                      />
                    </g>
                  </g>
                </svg>
              </a>
            </li>
            <li class="header__nav-list-icon">
              <a
                class="header__nav-icon"
                href="https://www.instagram.com"
                target="_blank"
                aria-label="Instagram"
                rel="noopener"
              >
                <svg
                  class="social-icons"
                  viewBox="0 0 30 30"
                  xml:space="preserve"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <g>
                    <circle cx="15" cy="15" r="4" />
                    <path
                      d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
                    />
                  </g>
                </svg>
              </a>
            </li>
            <li class="header__nav-list-icon">
              <a
                class="header__nav-icon"
                href="#"
                rel="nofollow"
                aria-label="toggle icon"
              >
                <div class="toggle-menu-sunmoon--header">
                  <svg class="toggle-menu-sun" viewBox="0 0 24 24">
                    <path
                      d="M3.55,18.54L4.96,19.95L6.76,18.16L5.34,16.74M11,22.45C11.32,22.45 13,22.45 13,22.45V19.5H11M12,5.5A6,6 0 0,0 6,11.5A6,6 0 0,0 12,17.5A6,6 0 0,0 18,11.5C18,8.18 15.31,5.5 12,5.5M20,12.5H23V10.5H20M17.24,18.16L19.04,19.95L20.45,18.54L18.66,16.74M20.45,4.46L19.04,3.05L17.24,4.84L18.66,6.26M13,0.55H11V3.5H13M4,10.5H1V12.5H4M6.76,4.84L4.96,3.05L3.55,4.46L5.34,6.26L6.76,4.84Z"
                    />
                  </svg>
                  <svg class="toggle-menu-moon" viewBox="0 0 24 24">
                    <path
                      d="M17.75,4.09L15.22,6.03L16.13,9.09L13.5,7.28L10.87,9.09L11.78,6.03L9.25,4.09L12.44,4L13.5,1L14.56,4L17.75,4.09M21.25,11L19.61,12.25L20.2,14.23L18.5,13.06L16.8,14.23L17.39,12.25L15.75,11L17.81,10.95L18.5,9L19.19,10.95L21.25,11M18.97,15.95C19.8,15.87 20.69,17.05 20.16,17.8C19.84,18.25 19.5,18.67 19.08,19.07C15.17,23 8.84,23 4.94,19.07C1.03,15.17 1.03,8.83 4.94,4.93C5.34,4.53 5.76,4.17 6.21,3.85C6.96,3.32 8.14,4.21 8.06,5.04C7.79,7.9 8.75,10.87 10.95,13.06C13.14,15.26 16.1,16.22 18.97,15.95M17.33,17.97C14.5,17.81 11.7,16.64 9.53,14.5C7.36,12.31 6.2,9.5 6.04,6.68C3.23,9.82 3.34,14.64 6.35,17.66C9.37,20.67 14.19,20.78 17.33,17.97Z"
                    />
                  </svg>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="waves">
        <div class="wave"></div>
        <div class="wave"></div>
      </div>

      <div class="top-gallery">
        <div class="full-content" id="popup-1">
          <div class="full-content__wrapper">
            <a class="full-content__link" href="#!" data-lang="english"
              >&#9747; Close</a
            >
            <a class="full-content__link" href="#!" data-lang="russian"
              >&#9747; Закрыть</a
            >
            <picture class="full-content__img">
              <source
                srcset="images/top-gallery-back/large/1.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/1.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/top-gallery-back/1.jpg       500w,
                  images/top-gallery-back/large/1.jpg 862w
                "
                sizes="(max-width: 900px) 43vw, (max-width: 720px) 55vw, 500px"
                src="images/top-gallery-back/large/1.jpg"
                alt=""
              />
            </picture>
          </div>
        </div>
        <figure class="top-gallery__item top-gallery__item--1">
          <img
            class="top-gallery-square2 layer"
            data-speed="-0.6"
            src="images/header/square6-2.png"
            alt=""
          />
          <img
            class="top-gallery-square3 layer"
            data-speed="-0.9"
            src="images/header/square3-1.svg"
            alt=""
          />
          <div class="top-gallery-card">
            <picture
              class="
                top-gallery__img top-gallery__img--front top-gallery__img--1
              "
            >
              <source srcset="images/top-gallery/1.webp" type="image/webp" />
              <source srcset="images/top-gallery/1.jpg" type="image/jpeg" />
              <img src="images/top-gallery/1.jpg" alt="" />
            </picture>
            <picture class="top-gallery__img top-gallery__img--back">
              <source
                srcset="images/top-gallery-back/small/1.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/small/1.jpg"
                type="image/jpeg"
              />
              <img src="images/top-gallery-back/small/1.jpg" alt="" />
            </picture>
            <a href="#popup-1">Text</a>
          </div>
        </figure>

        <div class="full-content" id="popup-2">
          <div class="full-content__wrapper">
            <a class="full-content__link" href="#!" data-lang="english"
              >&#9747; Close</a
            >
            <a class="full-content__link" href="#!" data-lang="russian"
              >&#9747; Закрыть</a
            >
            <picture class="full-content__img">
              <source
                srcset="images/top-gallery-back/large/2.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/large/2.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/top-gallery-back/2.jpg       500w,
                  images/top-gallery-back/large/2.jpg 863w
                "
                sizes="(max-width: 900px) 43vw, (max-width: 720px) 55vw, 500px"
                src="images/top-gallery-back/large/2.jpg"
                alt=""
              />
            </picture>
          </div>
        </div>

        <figure class="top-gallery__item top-gallery__item--2">
          <div class="top-gallery-card">
            <picture
              class="
                top-gallery__img top-gallery__img--front top-gallery__img--2
              "
            >
              <source srcset="images/top-gallery/2.webp" type="image/webp" />
              <source srcset="images/top-gallery/2.jpg" type="image/jpeg" />
              <img src="images/top-gallery/2.jpg" alt="" />
            </picture>
            <picture class="top-gallery__img top-gallery__img--back">
              <source
                srcset="images/top-gallery-back/small/2.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/small/2.jpg"
                type="image/jpeg"
              />
              <img src="images/top-gallery-back/small/2.jpg" alt="Alt Text!" />
            </picture>
            <a href="#popup-2">Text</a>
          </div>
        </figure>

        <div class="full-content" id="popup-3">
          <div class="full-content__wrapper">
            <a class="full-content__link" href="#!" data-lang="english"
              >&#9747; Close</a
            >
            <a class="full-content__link" href="#!" data-lang="russian"
              >&#9747; Закрыть</a
            >
            <picture class="full-content__img">
              <source
                srcset="images/top-gallery-back/large/3.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/large/3.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/top-gallery-back/3.jpg       500w,
                  images/top-gallery-back/large/3.jpg 862w
                "
                sizes="(max-width: 900px) 43vw, (max-width: 720px) 55vw, 500px"
                src="images/top-gallery-back/large/3.jpg"
                alt=""
              />
            </picture>
          </div>
        </div>
        <figure class="top-gallery__item top-gallery__item--3">
          <div class="top-gallery-card">
            <picture
              class="
                top-gallery__img top-gallery__img--front top-gallery__img--3
              "
            >
              <source srcset="images/top-gallery/3.webp" type="image/webp" />
              <source srcset="images/top-gallery/3.jpg" type="image/jpeg" />
              <img src="images/top-gallery/3.jpg" alt="" />
            </picture>
            <picture class="top-gallery__img top-gallery__img--back">
              <source
                srcset="images/top-gallery-back/small/3.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/small/3.jpg"
                type="image/jpeg"
              />
              <img src="images/top-gallery-back/small/3.jpg" alt="" />
            </picture>
            <a href="#popup-3">Text</a>
          </div>
        </figure>

        <div class="full-content" id="popup-4">
          <div class="full-content__wrapper">
            <a class="full-content__link" href="#!" data-lang="english"
              >&#9747; Close</a
            >
            <a class="full-content__link" href="#!" data-lang="russian"
              >&#9747; Закрыть</a
            >
            <picture class="full-content__img">
              <source
                srcset="images/top-gallery-back/large/4.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/large/4.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/top-gallery-back/4.jpg        500w,
                  images/top-gallery-back/large/4.jpg 1264w
                "
                sizes="(max-width: 900px) 43vw, (max-width: 720px) 55vw, 625px"
                src="images/top-gallery-back/large/4.jpg"
                alt=""
              />
            </picture>
          </div>
        </div>

        <figure class="top-gallery__item top-gallery__item--4">
          <img
            class="top-gallery-square1 layer"
            data-speed="-0.9"
            src="images/header/square4-1s.svg"
            alt=""
          />
          <div class="top-gallery-card">
            <picture
              class="
                top-gallery__img top-gallery__img--front top-gallery__img--4
              "
            >
              <source srcset="images/top-gallery/4.webp" type="image/webp" />
              <source srcset="images/top-gallery/4.jpg" type="image/jpeg" />
              <img src="images/top-gallery/4.jpg" alt="" />
            </picture>
            <picture class="top-gallery__img top-gallery__img--back">
              <source
                srcset="images/top-gallery-back/small/4.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/small/4.jpg"
                type="image/jpeg"
              />
              <img src="images/top-gallery-back/small/4.jpg" alt="" />
            </picture>
            <a href="#popup-4">Text</a>
          </div>
        </figure>

        <div class="full-content" id="popup-5">
          <div class="full-content__wrapper">
            <a class="full-content__link" href="#!" data-lang="english"
              >&#9747; Close</a
            >
            <a class="full-content__link" href="#!" data-lang="russian"
              >&#9747; Закрыть</a
            >
            <picture class="full-content__img">
              <source
                srcset="images/top-gallery-back/large/5.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/large/5.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/top-gallery-back/5.jpg       500w,
                  images/top-gallery-back/large/5.jpg 862w
                "
                sizes="(max-width: 900px) 43vw, (max-width: 720px) 55vw, 500px"
                src="images/top-gallery-back/large/5.jpg"
                alt=""
              />
            </picture>
          </div>
        </div>
        <figure class="top-gallery__item top-gallery__item--5">
          <div class="top-gallery-card">
            <picture
              class="
                top-gallery__img top-gallery__img--front top-gallery__img--5
              "
            >
              <source srcset="images/top-gallery/5.webp" type="image/webp" />
              <source srcset="images/top-gallery/5.jpg" type="image/jpeg" />
              <img src="images/top-gallery/5.jpg" alt="" />
            </picture>
            <picture class="top-gallery__img top-gallery__img--back">
              <source
                srcset="images/top-gallery-back/small/5.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/small/5.jpg"
                type="image/jpeg"
              />
              <img src="images/top-gallery-back/small/5.jpg" alt="Alt Text!" />
            </picture>
            <a href="#popup-5">Text</a>
          </div>
        </figure>

        <div class="full-content" id="popup-6">
          <div class="full-content__wrapper">
            <a class="full-content__link" href="#!" data-lang="english"
              >&#9747; Close</a
            >
            <a class="full-content__link" href="#!" data-lang="russian"
              >&#9747; Закрыть</a
            >
            <picture class="full-content__img">
              <source
                srcset="images/top-gallery-back/large/6.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/large/6.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/top-gallery-back/6.jpg       500w,
                  images/top-gallery-back/large/6.jpg 863w
                "
                sizes="(max-width: 900px) 43vw, (max-width: 720px) 55vw, 500px"
                src="images/top-gallery-back/large/6.jpg"
                alt=""
              />
            </picture>
          </div>
        </div>
        <figure class="top-gallery__item top-gallery__item--6">
          <div class="top-gallery-card">
            <picture
              class="
                top-gallery__img top-gallery__img--front top-gallery__img--6
              "
            >
              <source srcset="images/top-gallery/6.webp" type="image/webp" />
              <source srcset="images/top-gallery/6.jpg" type="image/jpeg" />
              <img src="images/top-gallery/6.jpg" alt="" />
            </picture>
            <picture class="top-gallery__img top-gallery__img--back">
              <source
                srcset="images/top-gallery-back/small/6.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/small/6.jpg"
                type="image/jpeg"
              />
              <img src="images/top-gallery-back/small/6.jpg" alt="" />
            </picture>
            <a href="#popup-6">Text</a>
          </div>
        </figure>

        <div class="full-content" id="popup-7">
          <div class="full-content__wrapper">
            <a class="full-content__link" href="#!" data-lang="english"
              >&#9747; Close</a
            >
            <a class="full-content__link" href="#!" data-lang="russian"
              >&#9747; Закрыть</a
            >
            <picture class="full-content__img">
              <source
                srcset="images/top-gallery-back/large/7.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/large/7.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/top-gallery-back/7.jpg       500w,
                  images/top-gallery-back/large/7.jpg 863w
                "
                sizes="(max-width: 900px) 43vw, (max-width: 720px) 55vw, 500px"
                src="images/top-gallery-back/large/7.jpg"
                alt=""
              />
            </picture>
          </div>
        </div>
        <figure class="top-gallery__item top-gallery__item--7">
          <div class="top-gallery-card">
            <picture
              class="
                top-gallery__img top-gallery__img--front top-gallery__img--7
              "
            >
              <source srcset="images/top-gallery/7.webp" type="image/webp" />
              <source srcset="images/top-gallery/7.jpg" type="image/jpeg" />
              <img src="images/top-gallery/7.jpg" alt="" />
            </picture>
            <picture class="top-gallery__img top-gallery__img--back">
              <source
                srcset="images/top-gallery-back/small/7.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/small/7.jpg"
                type="image/jpeg"
              />
              <img src="images/top-gallery-back/small/7.jpg" alt="" />
            </picture>
            <a href="#popup-7">Text</a>
          </div>
        </figure>

        <div class="full-content" id="popup-8">
          <div class="full-content__wrapper">
            <a class="full-content__link" href="#!" data-lang="english"
              >&#9747; Close</a
            >
            <a class="full-content__link" href="#!" data-lang="russian"
              >&#9747; Закрыть</a
            >
            <picture class="full-content__img">
              <source
                srcset="images/top-gallery-back/large/8.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/large/8.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/top-gallery-back/8.jpg       500w,
                  images/top-gallery-back/large/8.jpg 849w
                "
                sizes="(max-width: 900px) 43vw, (max-width: 720px) 55vw, 500px"
                src="images/top-gallery-back/large/8.jpg"
                alt=""
              />
            </picture>
          </div>
        </div>
        <figure class="top-gallery__item top-gallery__item--8">
          <div class="top-gallery-card">
            <picture
              class="
                top-gallery__img top-gallery__img--front top-gallery__img--8
              "
            >
              <source srcset="images/top-gallery/8.webp" type="image/webp" />
              <source srcset="images/top-gallery/8.jpg" type="image/jpeg" />
              <img src="images/top-gallery/8.jpg" alt="" />
            </picture>
            <picture class="top-gallery__img top-gallery__img--back">
              <source
                srcset="images/top-gallery-back/small/8.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/small/8.jpg"
                type="image/jpeg"
              />
              <img src="images/top-gallery-back/small/8.jpg" alt="" />
            </picture>
            <a href="#popup-8">Text</a>
          </div>
        </figure>

        <div class="full-content" id="popup-9">
          <div class="full-content__wrapper">
            <a class="full-content__link" href="#!" data-lang="english"
              >&#9747; Close</a
            >
            <a class="full-content__link" href="#!" data-lang="russian"
              >&#9747; Закрыть</a
            >
            <picture class="full-content__img">
              <source
                srcset="images/top-gallery-back/large/9.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/large/9.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/top-gallery-back/9.jpg       500w,
                  images/top-gallery-back/large/9.jpg 846w
                "
                sizes="(max-width: 900px) 43vw, (max-width: 720px) 55vw, 500px"
                src="images/top-gallery-back/large/9.jpg"
                alt=""
              />
            </picture>
          </div>
        </div>
        <figure class="top-gallery__item top-gallery__item--9">
          <div class="top-gallery-card">
            <picture
              class="
                top-gallery__img top-gallery__img--front top-gallery__img--9
              "
            >
              <source srcset="images/top-gallery/9.webp" type="image/webp" />
              <source srcset="images/top-gallery/9.jpg" type="image/jpeg" />
              <img src="images/top-gallery/9.jpg" alt="" />
            </picture>
            <picture class="top-gallery__img top-gallery__img--back">
              <source
                srcset="images/top-gallery-back/small/9.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/small/9.jpg"
                type="image/jpeg"
              />
              <img src="images/top-gallery-back/small/9.jpg" alt="" />
            </picture>
            <a href="#popup-9">Text</a>
          </div>
        </figure>

        <div class="full-content" id="popup-10">
          <div class="full-content__wrapper">
            <a class="full-content__link" href="#!" data-lang="english"
              >&#9747; Close</a
            >
            <a class="full-content__link" href="#!" data-lang="russian"
              >&#9747; Закрыть</a
            >
            <picture class="full-content__img">
              <source
                srcset="images/top-gallery-back/large/10.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/large/10.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/top-gallery-back/10.jpg       500w,
                  images/top-gallery-back/large/10.jpg 862w
                "
                sizes="(max-width: 900px) 43vw, (max-width: 720px) 55vw, 500px"
                src="images/top-gallery-back/large/10.jpg"
                alt=""
              />
            </picture>
          </div>
        </div>
        <figure class="top-gallery__item top-gallery__item--10">
          <div class="top-gallery-card">
            <picture
              class="
                top-gallery__img top-gallery__img--front top-gallery__img--10
              "
            >
              <source srcset="images/top-gallery/10.webp" type="image/webp" />
              <source srcset="images/top-gallery/10.jpg" type="image/jpeg" />
              <img src="images/top-gallery/10.jpg" alt="" />
            </picture>
            <picture class="top-gallery__img top-gallery__img--back">
              <source
                srcset="images/top-gallery-back/small/10.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/small/10.jpg"
                type="image/jpeg"
              />
              <img src="images/top-gallery-back/small/10.jpg" alt="" />
            </picture>
            <a href="#popup-10">Text</a>
          </div>
        </figure>

        <div class="full-content" id="popup-11">
          <div class="full-content__wrapper">
            <a class="full-content__link" href="#!" data-lang="english"
              >&#9747; Close</a
            >
            <a class="full-content__link" href="#!" data-lang="russian"
              >&#9747; Закрыть</a
            >
            <picture class="full-content__img">
              <source
                srcset="images/top-gallery-back/large/11.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/large/11.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/top-gallery-back/11.jpg       500w,
                  images/top-gallery-back/large/11.jpg 863w
                "
                sizes="(max-width: 900px) 43vw, (max-width: 720px) 55vw, 500px"
                src="images/top-gallery-back/large/11.jpg"
                alt=""
              />
            </picture>
          </div>
        </div>
        <figure class="top-gallery__item top-gallery__item--11">
          <div class="top-gallery-card">
            <picture class="top-gallery__img top-gallery__img--front">
              <source srcset="images/top-gallery/11.webp" type="image/webp" />
              <source srcset="images/top-gallery/11.jpg" type="image/jpeg" />
              <img src="images/top-gallery/11.jpg" alt="" />
            </picture>
            <picture class="top-gallery__img top-gallery__img--back">
              <source
                srcset="images/top-gallery-back/small/11.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/small/11.jpg"
                type="image/jpeg"
              />
              <img src="images/top-gallery-back/small/11.jpg" alt="" />
            </picture>
            <a href="#popup-11">Text</a>
          </div>
        </figure>

        <div class="full-content" id="popup-12">
          <div class="full-content__wrapper">
            <a class="full-content__link" href="#!" data-lang="english"
              >&#9747; Close</a
            >
            <a class="full-content__link" href="#!" data-lang="russian"
              >&#9747; Закрыть</a
            >
            <picture class="full-content__img">
              <source
                srcset="images/top-gallery-back/large/12.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/large/12.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/top-gallery-back/12.jpg       500w,
                  images/top-gallery-back/large/12.jpg 863w
                "
                sizes="(max-width: 900px) 43vw, (max-width: 720px) 55vw, 500px"
                src="images/top-gallery-back/large/12.jpg"
                alt=""
              />
            </picture>
          </div>
        </div>
        <figure class="top-gallery__item top-gallery__item--12">
          <img
            class="top-gallery-square4 layer"
            data-speed="1"
            src="images/header/square4-1s.svg"
            alt=""
          />
          <div class="top-gallery-card">
            <picture class="top-gallery__img top-gallery__img--front">
              <source srcset="images/top-gallery/12.webp" type="image/webp" />
              <source srcset="images/top-gallery/12.jpg" type="image/jpeg" />
              <img src="images/top-gallery/12.jpg" alt="" />
            </picture>
            <picture class="top-gallery__img top-gallery__img--back">
              <source
                srcset="images/top-gallery-back/small/12.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/small/12.jpg"
                type="image/jpeg"
              />
              <img src="images/top-gallery-back/small/12.jpg" alt="" />
            </picture>
            <a href="#popup-12">Text</a>
          </div>
        </figure>

        <div class="full-content" id="popup-13">
          <div class="full-content__wrapper">
            <a class="full-content__link" href="#!" data-lang="english"
              >&#9747; Close</a
            >
            <a class="full-content__link" href="#!" data-lang="russian"
              >&#9747; Закрыть</a
            >
            <picture class="full-content__img">
              <source
                srcset="images/top-gallery-back/large/13.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/large/13.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/top-gallery-back/13.jpg       500w,
                  images/top-gallery-back/large/13.jpg 863w
                "
                sizes="(max-width: 900px) 43vw, (max-width: 720px) 55vw, 500px"
                src="images/top-gallery-back/large/13.jpg"
                alt=""
              />
            </picture>
          </div>
        </div>
        <figure class="top-gallery__item top-gallery__item--13">
          <div class="top-gallery-card">
            <picture class="top-gallery__img top-gallery__img--front">
              <source srcset="images/top-gallery/13.webp" type="image/webp" />
              <source srcset="images/top-gallery/13.jpg" type="image/jpeg" />
              <img src="images/top-gallery/13.jpg" alt="" />
            </picture>
            <picture class="top-gallery__img top-gallery__img--back">
              <source
                srcset="images/top-gallery-back/small/13.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/small/13.jpg"
                type="image/jpeg"
              />
              <img src="images/top-gallery-back/small/13.jpg" alt="" />
            </picture>
            <a href="#popup-13">Text</a>
          </div>
        </figure>

        <div class="full-content" id="popup-14">
          <div class="full-content__wrapper">
            <a class="full-content__link" href="#!" data-lang="english"
              >&#9747; Close</a
            >
            <a class="full-content__link" href="#!" data-lang="russian"
              >&#9747; Закрыть</a
            >
            <picture class="full-content__img">
              <source
                srcset="images/top-gallery-back/large/14.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/large/14.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/top-gallery-back/14.jpg       500w,
                  images/top-gallery-back/large/14.jpg 863w
                "
                sizes="(max-width: 900px) 43vw, (max-width: 720px) 55vw, 500px"
                src="images/top-gallery-back/large/14.jpg"
                alt=""
              />
            </picture>
          </div>
        </div>
        <figure class="top-gallery__item top-gallery__item--14">
          <img
            class="top-gallery-square5 layer"
            data-speed="-0.5"
            src="images/header/square4-1s.svg"
            alt=""
          />
          <img
            class="top-gallery-square6 layer"
            data-speed="0.95"
            src="images/header/square6-2.png"
            alt=""
          />
          <div class="top-gallery-card">
            <picture class="top-gallery__img top-gallery__img--front">
              <source srcset="images/top-gallery/14.webp" type="image/webp" />
              <source srcset="images/top-gallery/14.jpg" type="image/jpeg" />
              <img src="images/top-gallery/14.jpg" alt="" />
            </picture>
            <picture class="top-gallery__img top-gallery__img--back">
              <source
                srcset="images/top-gallery-back/small/14.webp"
                type="image/webp"
              />
              <source
                srcset="images/top-gallery-back/small/14.jpg"
                type="image/jpeg"
              />
              <img src="images/top-gallery-back/small/14.jpg" alt="" />
            </picture>
            <a href="#popup-14">Text</a>
          </div>
        </figure>
      </div>

      <input class="toggle-btn" type="checkbox" id="toggle-btn" />
      <label class="toggle-icon" for="toggle-btn" id="toggle-icon">
        <span class="el1 element"></span>
        <span class="el2 element"></span>
        <span class="el3 element"></span>
      </label>

      <div class="toggle-menu" id="toggle-menu">
        <div class="toggle-menu-sunmoon">
          <svg class="toggle-menu-sun" viewBox="0 0 24 24">
            <path
              d="M3.55,18.54L4.96,19.95L6.76,18.16L5.34,16.74M11,22.45C11.32,22.45 13,22.45 13,22.45V19.5H11M12,5.5A6,6 0 0,0 6,11.5A6,6 0 0,0 12,17.5A6,6 0 0,0 18,11.5C18,8.18 15.31,5.5 12,5.5M20,12.5H23V10.5H20M17.24,18.16L19.04,19.95L20.45,18.54L18.66,16.74M20.45,4.46L19.04,3.05L17.24,4.84L18.66,6.26M13,0.55H11V3.5H13M4,10.5H1V12.5H4M6.76,4.84L4.96,3.05L3.55,4.46L5.34,6.26L6.76,4.84Z"
            />
          </svg>
          <svg class="toggle-menu-moon" viewBox="0 0 24 24">
            <path
              d="M17.75,4.09L15.22,6.03L16.13,9.09L13.5,7.28L10.87,9.09L11.78,6.03L9.25,4.09L12.44,4L13.5,1L14.56,4L17.75,4.09M21.25,11L19.61,12.25L20.2,14.23L18.5,13.06L16.8,14.23L17.39,12.25L15.75,11L17.81,10.95L18.5,9L19.19,10.95L21.25,11M18.97,15.95C19.8,15.87 20.69,17.05 20.16,17.8C19.84,18.25 19.5,18.67 19.08,19.07C15.17,23 8.84,23 4.94,19.07C1.03,15.17 1.03,8.83 4.94,4.93C5.34,4.53 5.76,4.17 6.21,3.85C6.96,3.32 8.14,4.21 8.06,5.04C7.79,7.9 8.75,10.87 10.95,13.06C13.14,15.26 16.1,16.22 18.97,15.95M17.33,17.97C14.5,17.81 11.7,16.64 9.53,14.5C7.36,12.31 6.2,9.5 6.04,6.68C3.23,9.82 3.34,14.64 6.35,17.66C9.37,20.67 14.19,20.78 17.33,17.97Z"
            />
          </svg>
        </div>

        <ul class="toggle-nav" id="toggle-nav">
          <li class="toggle-nav__list">
            <a
              class="toggle-nav__link menu-gallery"
              href="#gallery"
              aria-label="menu gallery"
              rel="noopener"
            >
              <svg
                class="link-graphic"
                width="300%"
                height="100%"
                viewBox="0 0 1200 60"
                preserveAspectRatio="none"
              >
                <path
                  d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"
                ></path>
              </svg>
            </a>
          </li>

          <li class="toggle-nav__list">
            <a
              class="toggle-nav__link menu-interesting"
              href="#interesting"
              aria-label="menu interesting"
              rel="noopener"
            >
              <svg
                class="link-graphic"
                width="300%"
                height="100%"
                viewBox="0 0 1200 60"
                preserveAspectRatio="none"
              >
                <path
                  d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"
                ></path>
              </svg>
            </a>
          </li>

          <li class="toggle-nav__list">
            <a
              class="toggle-nav__link menu-video"
              href="#video-gallery"
              aria-label="menu video"
              rel="noopener"
            >
              <svg
                class="link-graphic"
                width="300%"
                height="100%"
                viewBox="0 0 1200 60"
                preserveAspectRatio="none"
              >
                <path
                  d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"
                ></path>
              </svg>
            </a>
          </li>

          <li class="toggle-nav__list">
            <a
              class="toggle-nav__link menu-contacts"
              href="#contacts"
              aria-label="menu contacts"
              rel="noopener"
            >
              <svg
                class="link-graphic"
                width="300%"
                height="100%"
                viewBox="0 0 1200 60"
                preserveAspectRatio="none"
              >
                <path
                  d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"
                ></path>
              </svg>
            </a>
          </li>

          <li class="toggle-nav__list">
            <a
              class="toggle-nav__link menu-language"
              href="#language"
              aria-label="menu language"
              rel="noopener"
            >
              <svg
                class="link-graphic"
                width="300%"
                height="100%"
                viewBox="0 0 1200 60"
                preserveAspectRatio="none"
              >
                <path
                  d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"
                ></path>
              </svg>
            </a>
          </li>
        </ul>
      </div>

      <a
        class="toggle-scroll"
        href="#header"
        rel="nofollow"
        aria-label="Back to header"
      >
        <div class="toggle-scroll__wrapper">
          <div class="toggle-scroll__item"></div>
          <div class="toggle-scroll__item"></div>
          <div class="toggle-scroll__item"></div>
          <div class="toggle-scroll__item"></div>
          <div class="toggle-scroll__item"></div>
          <div class="toggle-scroll__item"></div>
          <div class="toggle-scroll__item"></div>
        </div>
      </a>
    </header>

    <!--GALLERY-->
    <section class="gallery" id="gallery">
      <div class="heading-2">
        <h2 class="heading-2__title" data-lang="english">Gallery</h2>
        <h2 class="heading-2__title" data-lang="russian">Галерея</h2>
        <span class="heading-2__line"></span>
      </div>
      <div class="gallery-box">
        <div class="gallery-box__item">
          <div class="gallery-box__imgs">
            <picture class="gallery-box__img">
              <source
                srcset="images/gallery/portrait/preview/71.webp"
                type="image/webp"
              />
              <source
                srcset="images/gallery/portrait/preview/71.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/gallery/portrait/preview/71.jpg 355w,
                  images/gallery/portrait/small/71.jpg   500w
                "
                sizes="(max-width: 720px) 58vw, (max-width: 600px) 67vw, 500px"
                src="images/gallery/portrait/small/71.jpg"
                alt=""
                loading="lazy"
              />
            </picture>
            <picture class="gallery-box__img">
              <source
                srcset="images/gallery/portrait/preview/46.webp"
                type="image/webp"
              />
              <source
                srcset="images/gallery/portrait/preview/46.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/gallery/portrait/preview/46.jpg 355w,
                  images/gallery/portrait/small/46.jpg   500w
                "
                sizes="(max-width: 720px) 58vw, (max-width: 600px) 67vw, 500px"
                src="images/gallery/portrait/small/46.jpg"
                alt=""
                loading="lazy"
              />
            </picture>
            <picture class="gallery-box__img">
              <source
                srcset="images/gallery/portrait/preview/88.webp"
                type="image/webp"
              />
              <source
                srcset="images/gallery/portrait/preview/88.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/gallery/portrait/preview/88.jpg 355w,
                  images/gallery/portrait/small/88.jpg   500w
                "
                sizes="(max-width: 720px) 58vw, (max-width: 600px) 67vw, 500px"
                src="images/gallery/portrait/small/88.jpg"
                alt=""
                loading="lazy"
              />
            </picture>
          </div>
          <div class="gallery-box__link">
            <a
              class="gallery-box__subtitle"
              href="portrait.html"
              data-lang="english"
              >Portrait</a
            >
            <a
              class="gallery-box__subtitle"
              href="portrait.html"
              data-lang="russian"
              >Портрет</a
            >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="gallery-box__icon"
              viewBox="0 0 20 20"
            >
              <path
                fill-rule="evenodd"
                d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                clip-rule="evenodd"
              />
              <path
                fill-rule="evenodd"
                d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                clip-rule="evenodd"
              />
            </svg>
          </div>
        </div>

        <div class="gallery-box__item">
          <div class="gallery-box__imgs">
            <picture class="gallery-box__img">
              <source
                srcset="images/gallery/fullGrowth/preview/47.webp"
                type="image/webp"
              />
              <source
                srcset="images/gallery/fullGrowth/preview/47.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/gallery/fullGrowth/preview/47.jpg 355w,
                  images/gallery/fullGrowth/small/47.jpg   500w
                "
                sizes="(max-width: 720px) 58vw, (max-width: 600px) 67vw, 500px"
                src="images/gallery/fullGrowth/small/47.jpg"
                alt=""
                loading="lazy"
              />
            </picture>
            <picture class="gallery-box__img">
              <source
                srcset="images/gallery/fullGrowth/preview/54.webp"
                type="image/webp"
              />
              <source
                srcset="images/gallery/fullGrowth/preview/54.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/gallery/fullGrowth/preview/54.jpg 355w,
                  images/gallery/fullGrowth/small/54.jpg   500w
                "
                sizes="(max-width: 720px) 58vw, (max-width: 600px) 67vw, 500px"
                src="images/gallery/fullGrowth/small/54.jpg"
                alt=""
                loading="lazy"
              />
            </picture>
            <picture class="gallery-box__img">
              <source
                srcset="images/gallery/fullGrowth/preview/31.webp"
                type="image/webp"
              />
              <source
                srcset="images/gallery/fullGrowth/preview/31.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/gallery/fullGrowth/preview/31.jpg  355w,
                  images/gallery/fullGrowth/31.jpg         1000w
                "
                sizes="(max-width: 720px) 58vw, (max-width: 600px) 67vw, 500px"
                src="images/gallery/fullGrowth/small/31.jpg"
                alt=""
                loading="lazy"
              />
            </picture>
          </div>
          <div class="gallery-box__link">
            <a
              class="gallery-box__subtitle"
              href="full-growth.html"
              data-lang="english"
              >Full growth</a
            >
            <a
              class="gallery-box__subtitle"
              href="full-growth.html"
              data-lang="russian"
              >В полный рост</a
            >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="gallery-box__icon"
              viewBox="0 0 20 20"
            >
              <path
                fill-rule="evenodd"
                d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                clip-rule="evenodd"
              />
              <path
                fill-rule="evenodd"
                d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                clip-rule="evenodd"
              />
            </svg>
          </div>
        </div>

        <div class="gallery-box__item">
          <div class="gallery-box__imgs">
            <picture class="gallery-box__img">
              <source
                srcset="images/gallery/multipleCharacters/preview/53.webp"
                type="image/webp"
              />
              <source
                srcset="images/gallery/multipleCharacters/preview/53.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/gallery/multipleCharacters/preview/53.jpg 355w,
                  images/gallery/multipleCharacters/small/53.jpg   500w
                "
                sizes="(max-width: 720px) 58vw, (max-width: 600px) 67vw, 500px"
                src="images/gallery/multipleCharacters/small/53.jpg"
                alt=""
                loading="lazy"
              />
            </picture>
            <picture class="gallery-box__img">
              <source
                srcset="images/gallery/multipleCharacters/preview/76.webp"
                type="image/webp"
              />
              <source
                srcset="images/gallery/multipleCharacters/preview/76.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/gallery/multipleCharacters/preview/76.jpg 355w,
                  images/gallery/multipleCharacters/small/76.jpg   500w
                "
                sizes="(max-width: 720px) 58vw, (max-width: 600px) 67vw, 500px"
                src="images/gallery/multipleCharacters/small/76.jpg"
                alt=""
                loading="lazy"
              />
            </picture>
            <picture class="gallery-box__img">
              <source
                srcset="images/gallery/multipleCharacters/preview/57.webp"
                type="image/webp"
              />
              <source
                srcset="images/gallery/multipleCharacters/preview/57.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/gallery/multipleCharacters/preview/57.jpg 355w,
                  images/gallery/multipleCharacters/small/57.jpg   500w
                "
                sizes="(max-width: 720px) 58vw, (max-width: 600px) 67vw, 500px"
                src="images/gallery/multipleCharacters/small/57.jpg"
                alt=""
                loading="lazy"
              />
            </picture>
          </div>
          <div class="gallery-box__link">
            <a
              class="gallery-box__subtitle"
              href="multiple-characters.html"
              data-lang="english"
              >Multiple characters</a
            >
            <a
              class="gallery-box__subtitle"
              href="multiple-characters.html"
              data-lang="russian"
              >Несколько персонажей</a
            >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="gallery-box__icon"
              viewBox="0 0 20 20"
            >
              <path
                fill-rule="evenodd"
                d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                clip-rule="evenodd"
              />
              <path
                fill-rule="evenodd"
                d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                clip-rule="evenodd"
              />
            </svg>
          </div>
        </div>

        <div class="gallery-box__item">
          <div class="gallery-box__imgs">
            <picture class="gallery-box__img">
              <source
                srcset="images/gallery/other/preview/30.webp"
                type="image/webp"
              />
              <source
                srcset="images/gallery/other/preview/30.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/gallery/other/preview/30.jpg 355w,
                  images/gallery/other/small/30.jpg   500w
                "
                sizes="(max-width: 720px) 58vw, (max-width: 600px) 67vw, 500px"
                src="images/gallery/other/small/30.jpg"
                alt=""
                loading="lazy"
              />
            </picture>
            <picture class="gallery-box__img">
              <source
                srcset="images/gallery/other/preview/19.webp"
                type="image/webp"
              />
              <source
                srcset="images/gallery/other/preview/19.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/gallery/other/preview/19.jpg 355w,
                  images/gallery/other/small/19.jpg   500w
                "
                sizes="(max-width: 720px) 58vw, (max-width: 600px) 67vw, 500px"
                src="images/gallery/other/small/19.jpg"
                alt=""
                loading="lazy"
              />
            </picture>
            <picture class="gallery-box__img">
              <source
                srcset="images/gallery/other/preview/82.webp"
                type="image/webp"
              />
              <source
                srcset="images/gallery/other/preview/82.jpg"
                type="image/jpeg"
              />
              <img
                srcset="
                  images/gallery/other/preview/82.jpg 355w,
                  images/gallery/other/small/82.jpg   500w
                "
                sizes="(max-width: 720px) 58vw, (max-width: 600px) 67vw, 500px"
                src="images/gallery/other/small/82.jpg"
                alt=""
                loading="lazy"
              />
            </picture>
          </div>
          <div class="gallery-box__link">
            <a
              class="gallery-box__subtitle"
              href="other.html"
              data-lang="english"
              >Other</a
            >
            <a
              class="gallery-box__subtitle"
              href="other.html"
              data-lang="russian"
              >Другое</a
            >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="gallery-box__icon"
              viewBox="0 0 20 20"
            >
              <path
                fill-rule="evenodd"
                d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                clip-rule="evenodd"
              />
              <path
                fill-rule="evenodd"
                d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                clip-rule="evenodd"
              />
            </svg>
          </div>
        </div>
      </div>
    </section>
    <!--./GALLERY-->

    <!--IT IS INTERESTING-->
    <section class="interesting section" id="interesting">
      <div class="heading-2">
        <h2 class="heading-2__title" data-lang="english">
          It&nbsp;is&nbsp;interesting
        </h2>
        <h2 class="heading-2__title" data-lang="russian">Это интересно</h2>
        <span class="heading-2__line"></span>
      </div>

      <div class="interesting-box">
        <div class="interesting-item">
          <div class="interesting-item__content interesting-item__content--1">
            <div class="interesting-item__content-text">
              <h3 class="interesting-item__content-title" data-lang="english">
                Sorry
              </h3>
              <h3 class="interesting-item__content-title" data-lang="russian">
                30 полезных советов и лайфхаков в Photoshop
              </h3>
              <p
                class="interesting-item__content-paragraphe"
                data-lang="english"
              >
                These stories are still only in russian
              </p>
              <p
                class="interesting-item__content-paragraphe"
                data-lang="russian"
              >
                Полезный материал по программе Photoshop: хоткеи и сочетания
                клавиш, полезные фишки, а также различные техники.
              </p>
            </div>
            <div class="interesting-item__content-link">
              <a
                href="https://infogra.ru/design/30-poleznyh-sovetov-i-lajfhakov-v-photoshop"
                target="_blank"
                rel="noopener"
                data-lang="english"
                aria-label="30 helpful tips and life hacks in Photoshop"
                >Learn more at Infogra.ru</a
              >
              <a
                href="https://infogra.ru/design/30-poleznyh-sovetov-i-lajfhakov-v-photoshop"
                target="_blank"
                rel="noopener"
                data-lang="russian"
                aria-label="30 полезных советов и лайфхаков в Photoshop"
                >Подробнее на Infogra.ru</a
              >
              <svg
                class="gallery-box__icon"
                viewBox="0 0 32 32"
                aria-hidden="true"
              >
                <path
                  d="M18.629 15.997l-7.083-7.081L13.462 7l8.997 8.997L13.457 25l-1.916-1.916z"
                />
              </svg>
            </div>
          </div>
        </div>
        <!--./interesting-item-->

        <div class="interesting-item">
          <div class="interesting-item__content interesting-item__content--2">
            <div class="interesting-item__content-text">
              <h3 class="interesting-item__content-title" data-lang="english">
                Sorry
              </h3>
              <h3 class="interesting-item__content-title" data-lang="russian">
                Соня
              </h3>
              <p
                class="interesting-item__content-paragraphe"
                data-lang="english"
              >
                These stories are still only in russian <br />
                Please change language and click read more
              </p>
              <p
                class="interesting-item__content-paragraphe"
                data-lang="russian"
              >
                Солнце уже давно встало, и его лучики вовсю игрались со стаканом
                воды, а забавы их игр отражались яркими бликами по всей комнате.
                Сегодня Соня проснулась необычно рано. "Наконец-то!" - первая
                мысль, что пришла ей в голову, и, радостно выпригивая из
                кровати, схватила...
              </p>
            </div>
            <div class="interesting-item__content-link">
              <a href="#!" data-lang="english">Read more</a>
              <a id="story-link" href="" data-lang="russian">Подробнее</a>
              <svg
                class="gallery-box__icon"
                viewBox="0 0 32 32"
                aria-hidden="true"
              >
                <path
                  d="M18.629 15.997l-7.083-7.081L13.462 7l8.997 8.997L13.457 25l-1.916-1.916z"
                />
              </svg>
            </div>
          </div>

          <div class="story story--home-page">
            <button class="btn-story" type="button">&#9747;</button>
            <div class="story__inner story__inner--home-page">
              <picture class="full-content__img">
                <source
                  srcset="images/gallery/other/small/11.webp"
                  type="image/webp"
                />
                <source
                  srcset="images/gallery/other/small/11.jpg"
                  type="image/jpeg"
                />
                <img
                  src="images/gallery/other/small/11.jpg"
                  alt=""
                  loading="lazy"
                />
              </picture>
              <div class="story__text">
                <p>
                  Солнце уже давно встало, и его лучики вовсю игрались со
                  стаканом воды, а забавы их игр отражались яркими бликами по
                  всей комнате. Сегодня Соня проснулась необычно рано.
                </p>
                <p>
                  "Наконец-то!" - первая мысль, что пришла ей в голову, и,
                  радостно выпригивая из кровати, схватила Мистера Кьюта, уютно
                  лежавшего возле подушки.
                </p>
                <p>
                  - Вставай, Мистер Кьют! Не время спать, сегодня важный день!
                </p>
                <p>
                  Соня в одном, почти слетевшем с ноги, носке, мятой пижаме и
                  растрепанными волосами, радостно кружилась с плюшевым зайцем
                  по комнате. Любопытные птички то и дело заглядывали в окна,
                  громко щебеча, радуясь чему-то вместе с девочкой. Затем она
                  широко распахнула окно, вытянув игрушку вперед:
                </p>
                <p>
                  - Привет, Солнышко! Поздаровайся с Мистером Кюьтом! И ты,
                  Мистер Кьют, поздоровайся с Солнышком! - затем она резко
                  опустила игрушку ближе к земле, - смотри, какие цветочки!
                  Здравствуйте, цветочки, это Мистер Кьют, у нас сегодня важный
                  день!
                </p>
                <p>
                  Затем она посадила игрушку на стул, а сама наспех принялась
                  расчесываться, напевая выдуманную, знакомую только ей,
                  мелодию. Распахнула шкаф, быстро переоделась, схватила Мистера
                  Кьюта и выбежала из комнаты.
                </p>
                <p>
                  - Не уверен, что получится, - послышалось из гостиной. - Но мы
                  ведь ей обещали... - Ничего страшного, потерпит.
                </p>
                <p>
                  Соня остановилась за перилами лестницы, не решаясь спуститься
                  вниз.
                </p>
                <p>
                  - Дорогой, ну что я ей скажу, мы ведь ее только недавно
                  удочерили, а тут не сдержали слово, она так ждала этого.
                </p>
                <p>
                  - Я понимаю, милая, - мужской голос тяжело вздохнул, - но без
                  меня там не справятся. Нужно закончить исследования. И чуть
                  строже добавил:
                </p>
                <p>- В конце концов, она уже немаленькая, должна понимать.</p>
                <p>
                  Девочка крепко сжала игрушку, что казалось, если бы она была
                  живая, в этот момент лишилась бы кислорода. Мир под ногами
                  провалился. Счастливая картинка с любящей семьей треснула на
                  мелкие кусочки. Ее маленькая ладонь сжалась в кулак.
                </p>
                <p>
                  - Ничего. Подумаешь. Я сама, - Соня решила, что лучше вернется
                  в комнату и устроит праздник с Митером Кьютом, - никто нам не
                  нужен.
                </p>
                <p>
                  И в этот момент пол предательски скрипнул. Голоса замолчали, а
                  спустя несколько секунд послышалось:
                </p>
                <p>
                  - Соня? Девочка, ты уже проснулась? - спросил женский голос, -
                  спускайся, милая.
                </p>
                <p>
                  Девочке ничего не оставалось как спуститься вниз в надежде,
                  что она быстро вернется в свою комнату, в свой мир, добрый и
                  нисколько не по-детски, а вполне серьезный настоящий волшебный
                  мир. И они отпразднуют этот день с Мистером Кьютом так, как
                  захотят, и никто им не помешает.
                </p>
                <p>
                  - Мы с папой хотим тебе кое-что сказать, - взрослые
                  переглянусь. На их лицах выражалось чувство вины и неловкости.
                </p>
                <p>
                  Соня без особых эмоций, даже как-то безразлично смотрела на
                  них по очереди, поняв, что этот день будет совсем не таким,
                  каким она его себе представляла. Ей хотелось поскорей
                  вернуться в свою комнату и забыть об этом разочаровании.
                </p>
                <p>
                  - Видишь ли, милая, - подбирая слова, осторожно начала
                  говорить новая мама Сони, - ты ведь знаешь, кем папа работает?
                </p>
                <p>Соня кивнула.</p>
                <p>
                  - У него много работы, - все так же осторожно продолжала
                  женщина, переглядываясь со своим супругом. - Он заботится о
                  нас, а для этого нужно много работать. Понимаешь?
                </p>
                <p>Соня снова кивнула.</p>
                <p>
                  - Мы знаем, что сегодня особенный день, и ты очень его ждала.
                  Но к нашему большому сожалению, сегодня у нас не получится
                  провести его так, как мы тебе обещали.
                </p>
                <p>Соня все так же безучастно смотрела на взрослых.</p>
                <p>
                  - В общем, милая, мы не сможем сегодня поехать в детский центр
                  юных следопытов,- женщина взяла за руки девочку, пытаясь
                  утешить ее, и хоть как-то оправдаться, - Нет-нет! Ты только не
                  переживай, мы обязательно туда поедем! Но не сегодня... и не в
                  ближайшее время...- новая мама Сони запнулась, подбирая слова,
                  и обернувшись, глянула на супруга.
                </p>
                <p>
                  - В общем так! - строго отозвался тот, стукнув руками себя по
                  коленям, - я должен закончить свои исследования по работе, и
                  для этого должен уехать, дело не терпит отлагателсьтв, а
                  потому нужно сегодня собираться, и твой праздник придется
                  отложить. Поездка будет долгой. Мы отметим твой день рождения
                  как вернемся. Поэтому сегодня мы собираем вещи, а завтра летим
                  в Африку. Никаких возражений, ясно?
                </p>
                <p>
                  Девочка сжала Мистера Кьюта еще сильнее, и по розовой щечке
                  потекли слезы:
                </p>
                <p>
                  - У меня как раз есть розовый чемодачик... - еле сдерживая
                  улыбку от распирающих ее эмоций, Соня снова кивнула в ответ.
                </p>

                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="1280.000000pt"
                  height="776.000000pt"
                  viewBox="0 0 1280.000000 776.000000"
                  preserveAspectRatio="xMidYMid meet"
                >
                  <metadata>
                    Created by potrace 1.15, written by Peter Selinger 2001-2017
                  </metadata>
                  <g
                    transform="translate(0.000000,776.000000) scale(0.100000,-0.100000)"
                    fill="#000000"
                    stroke="none"
                  >
                    <path
                      d="M10292 7747 c-7 -8 -29 -53 -48 -98 -19 -46 -43 -92 -53 -103 -20
-20 -41 -15 -41 10 0 16 -37 94 -45 94 -2 0 -1 -22 2 -50 5 -42 3 -50 -11 -50
-19 0 -20 -2 -3 -43 34 -80 45 -262 22 -349 -10 -38 1 -64 19 -49 31 26 36
184 11 307 -17 80 -15 95 9 75 41 -34 85 14 136 148 24 61 25 136 2 108z"
                    />
                    <path
                      d="M8950 7729 c0 -10 22 -64 48 -120 27 -57 72 -160 101 -229 54 -130
76 -168 88 -157 10 11 -10 62 -94 242 -81 176 -143 289 -143 264z"
                    />
                    <path
                      d="M10305 7586 c-33 -83 -65 -173 -72 -201 -15 -65 -16 -221 -2 -247 10
-18 17 -20 72 -14 34 4 76 11 92 16 17 4 43 11 60 15 28 6 29 6 12 -12 -24
-27 -95 -61 -174 -83 -79 -23 -107 -47 -127 -109 -36 -112 -71 -511 -47 -536
5 -6 16 -33 25 -62 21 -63 54 -110 165 -233 116 -129 423 -440 433 -440 13 0
-44 80 -82 115 -78 73 -388 412 -436 478 -29 39 -58 91 -63 114 -16 61 -13
274 4 372 8 46 24 108 35 138 24 63 24 66 8 58 -7 -4 1 7 18 23 17 16 53 37
80 47 113 41 155 66 185 113 27 42 59 133 59 164 0 7 -15 -13 -32 -45 -40 -73
-57 -81 -242 -112 l-39 -6 5 118 c5 99 10 127 33 178 36 81 96 266 93 286 -2
9 -30 -52 -63 -135z"
                    />
                    <path
                      d="M8879 7657 c5 -13 37 -79 70 -145 78 -156 101 -217 101 -270 0 -77
-33 -69 -172 45 -43 35 -80 63 -83 63 -23 0 91 -129 151 -170 80 -56 124 -33
124 66 0 86 -33 168 -138 347 -46 80 -69 107 -53 64z"
                    />
                    <path
                      d="M5245 7619 c-188 -27 -229 -34 -325 -55 -238 -53 -600 -157 -765
-219 -39 -14 -105 -39 -147 -55 -42 -15 -91 -35 -110 -43 -18 -9 -60 -25 -93
-37 -92 -32 -127 -49 -295 -132 -256 -127 -410 -219 -525 -312 -241 -197 -426
-390 -539 -564 -56 -87 -61 -92 -70 -70 -7 14 -11 147 -11 343 0 333 -1 340
-45 380 -32 29 -108 24 -196 -13 -305 -128 -550 -289 -764 -501 -64 -64 -131
-138 -149 -165 -95 -144 -143 -290 -170 -521 -7 -55 -16 -133 -21 -174 l-8
-74 -200 -201 c-109 -111 -217 -223 -239 -251 -58 -72 -115 -171 -163 -283
-23 -53 -50 -115 -60 -137 -29 -66 -147 -368 -181 -462 -124 -349 -159 -532
-166 -880 l-5 -232 71 -79 c78 -86 120 -121 153 -127 11 -3 31 -11 45 -20 29
-19 43 -12 43 21 0 32 9 30 63 -11 25 -19 50 -35 56 -35 6 0 26 14 44 30 41
36 55 38 59 8 3 -22 8 -23 78 -23 70 1 163 11 305 34 54 9 93 16 235 40 53 10
188 37 245 51 314 74 406 103 603 196 41 19 76 34 78 34 3 0 62 28 132 62 140
68 289 151 360 202 26 18 58 38 71 45 l24 13 -7 -98 c-20 -288 -63 -373 -388
-761 -296 -354 -683 -724 -830 -795 -21 -10 -82 -30 -136 -44 -53 -14 -110
-29 -127 -34 -92 -24 -205 -74 -280 -125 -134 -89 -213 -175 -277 -297 -30
-57 -33 -71 -31 -143 1 -56 9 -102 26 -154 25 -72 70 -151 85 -151 5 0 14 22
21 48 7 28 28 68 51 96 22 26 45 66 51 89 22 83 96 160 219 229 98 54 262 87
441 88 89 0 102 -3 155 -30 66 -35 121 -82 182 -154 23 -28 58 -70 77 -93 30
-35 44 -63 32 -63 -2 0 -33 9 -68 20 -125 39 -136 42 -155 37 -16 -4 -16 -5 4
-6 25 -1 30 -16 7 -25 -31 -11 -13 -23 43 -29 31 -3 100 -19 152 -37 112 -37
119 -37 230 -16 195 37 305 72 455 146 55 27 111 53 125 59 14 5 112 90 218
190 106 100 198 181 203 181 5 0 9 -10 9 -22 0 -14 4 -18 9 -13 14 15 87 167
94 196 6 24 4 26 -20 21 -23 -4 -25 -2 -19 14 4 10 11 39 16 64 9 43 61 248
81 318 5 17 13 47 18 65 27 99 109 297 155 372 109 179 259 314 486 437 209
113 313 156 380 158 32 0 93 22 114 39 39 33 141 -25 221 -126 120 -151 173
-354 130 -495 -7 -26 -35 -90 -61 -143 -42 -84 -50 -95 -74 -95 -67 0 -143
-24 -174 -54 -17 -17 -60 -56 -96 -86 -237 -198 -340 -341 -323 -445 3 -20 1
-35 -4 -35 -17 0 -33 -74 -33 -149 0 -68 -12 -93 -25 -51 -15 46 -25 14 -25
-79 0 -56 -4 -103 -10 -106 -6 -3 -10 1 -10 9 0 20 -21 66 -30 66 -15 0 -17
-37 -7 -104 9 -66 0 -116 -21 -116 -5 0 -16 25 -26 55 -18 58 -57 97 -108 110
-39 10 -35 -2 16 -55 39 -39 48 -57 69 -138 29 -108 58 -151 123 -182 74 -36
157 -49 319 -50 205 0 264 13 455 105 186 89 197 92 245 70 44 -21 57 -12 27
18 -27 27 -83 28 -157 2 -51 -17 -214 -96 -276 -134 -40 -25 -120 -27 -308
-11 -291 26 -361 42 -361 82 0 11 25 71 55 133 30 62 55 119 55 127 0 8 4 18
8 23 9 10 42 151 62 265 38 217 48 248 96 314 69 94 342 366 367 366 12 0 40
3 61 7 34 5 38 4 33 -10 -3 -9 -2 -19 2 -22 17 -10 157 24 251 61 l95 37 145
-12 c80 -6 261 -11 403 -11 312 0 421 -10 580 -51 l37 -10 0 -108 c0 -233 42
-335 162 -397 90 -46 227 -69 558 -94 143 -11 246 -22 365 -40 33 -5 101 -14
150 -20 50 -6 122 -16 160 -21 39 -6 234 -17 435 -24 201 -7 372 -15 380 -19
8 -3 21 -19 28 -34 19 -44 99 -163 131 -196 16 -17 47 -56 70 -86 101 -139 98
-135 173 -166 64 -25 86 -29 178 -29 65 0 118 5 140 14 112 43 149 65 272 164
l37 30 30 -32 c40 -43 282 -154 298 -137 9 9 -59 44 -118 62 -72 22 -163 83
-167 113 -2 13 6 45 17 71 24 57 27 112 6 130 -11 9 -20 8 -42 -7 -42 -28 -80
-43 -113 -43 -36 0 -38 15 -10 70 30 59 39 113 28 167 -6 26 -12 50 -14 52 -2
2 -22 -13 -46 -33 -24 -21 -106 -68 -183 -105 -211 -102 -197 -98 -242 -63
-45 35 -92 52 -144 52 -21 0 -41 5 -44 10 -3 6 -16 10 -28 10 -12 1 -40 14
-62 30 -68 51 -124 71 -270 99 -162 30 -220 43 -326 70 -127 33 -252 76 -286
99 -15 9 -34 12 -54 8 -25 -5 -29 -3 -27 12 3 15 -9 18 -91 24 -108 7 -161 16
-161 26 0 15 36 60 111 138 45 46 81 93 85 110 4 16 25 72 47 124 22 52 45
118 51 145 l12 50 39 -3 c26 -2 45 -10 54 -23 9 -12 25 -19 48 -19 18 0 60
-13 93 -30 33 -16 68 -30 79 -30 10 0 21 -7 25 -15 4 -11 20 -15 57 -15 28 0
65 -6 82 -14 18 -8 89 -32 159 -54 131 -42 282 -97 378 -137 30 -12 75 -29
100 -36 25 -7 54 -19 66 -26 11 -7 43 -16 70 -19 27 -4 63 -15 80 -25 17 -11
38 -19 46 -19 8 0 53 -17 99 -39 46 -21 111 -46 144 -56 33 -9 75 -22 92 -27
18 -5 39 -17 45 -26 7 -10 36 -23 63 -30 28 -7 60 -23 73 -35 19 -18 24 -19
32 -7 8 13 13 12 39 -3 16 -9 34 -17 39 -17 6 0 46 -21 89 -47 48 -28 101 -51
138 -59 57 -12 279 -87 394 -133 30 -12 122 -55 205 -95 207 -101 264 -120
556 -187 25 -6 74 -19 110 -29 120 -35 155 -41 215 -38 l60 3 -85 21 c-47 12
-150 38 -230 59 -80 20 -183 45 -230 57 -89 21 -184 50 -235 73 -16 7 -40 16
-52 19 -12 4 -59 25 -105 48 -119 58 -285 125 -413 166 -60 19 -121 43 -134
54 -13 10 -37 18 -53 18 -30 0 -151 51 -178 75 -9 8 -36 25 -61 38 -28 15 -45
31 -47 45 -2 12 1 22 7 22 22 0 10 73 -21 138 -59 123 -115 176 -229 213 -35
12 -71 28 -80 35 -32 28 -123 47 -229 48 -97 1 -110 -2 -170 -30 -36 -16 -84
-36 -108 -44 -28 -9 -49 -24 -60 -42 -9 -15 -21 -28 -27 -28 -14 0 -164 55
-230 85 -52 23 -195 73 -320 110 -164 49 -329 105 -335 114 -3 4 -32 13 -65
21 -33 7 -63 15 -67 17 -14 7 19 53 51 68 18 9 77 44 130 78 109 71 160 97
190 97 12 0 21 6 21 14 0 7 7 19 15 26 23 19 126 -2 289 -56 178 -60 239 -71
471 -84 197 -11 452 -34 570 -50 176 -26 324 -32 605 -26 162 4 338 11 390 16
178 19 275 31 320 40 25 5 74 14 110 21 58 10 102 21 205 49 82 22 213 71 310
115 17 8 53 19 79 25 74 16 292 164 368 249 20 22 42 41 48 41 23 0 118 83
192 167 99 114 135 162 187 250 56 95 64 101 89 66 52 -74 172 -384 172 -444
0 -10 5 -21 10 -24 15 -9 12 89 -4 165 -23 109 -66 231 -107 308 -42 79 -49
129 -30 215 6 23 12 54 15 69 9 42 33 60 72 52 38 -7 40 -4 20 34 -24 47 -36
199 -36 470 0 145 -5 307 -10 360 -16 145 -29 251 -40 307 -6 28 -17 84 -25
127 -42 217 -132 450 -232 600 -164 246 -482 387 -727 324 -137 -36 -228 -101
-464 -331 -122 -118 -166 -176 -157 -206 4 -11 42 -58 86 -104 43 -46 81 -95
85 -110 7 -28 0 -112 -10 -122 -9 -10 -158 110 -194 156 -18 24 -32 53 -31 65
4 51 0 56 -36 56 -33 0 -34 1 -29 30 6 30 6 30 -40 30 -61 0 -75 8 -175 101
-46 43 -107 92 -136 108 -61 35 -175 137 -175 157 0 8 -4 14 -10 14 -5 0 -220
205 -477 456 -493 481 -578 558 -659 595 -45 21 -92 50 -242 151 -31 21 -58
35 -61 33 -17 -18 185 -176 252 -197 128 -40 215 -108 428 -337 520 -559 781
-813 1023 -996 126 -95 258 -231 288 -295 47 -104 61 -175 63 -320 1 -116 5
-147 28 -220 37 -118 88 -200 187 -300 93 -94 105 -100 214 -100 78 0 137 28
224 106 l64 57 116 -115 c123 -120 238 -223 285 -253 31 -20 33 -13 17 46 -7
25 -18 39 -33 43 -23 6 -150 107 -231 184 -118 113 -135 175 -64 230 27 22 82
-10 177 -101 83 -81 140 -127 157 -127 4 0 -46 55 -112 123 -174 177 -180 189
-148 278 23 65 44 195 44 274 0 140 -39 266 -115 375 -43 61 -85 135 -85 147
0 47 143 -22 242 -116 168 -158 246 -358 263 -674 6 -117 -5 -327 -25 -467
-13 -84 -29 -207 -39 -294 -5 -48 -12 -71 -25 -78 -9 -5 -27 -33 -40 -61 -22
-50 -75 -124 -128 -177 -52 -54 -145 -136 -178 -160 -19 -13 -37 -27 -40 -30
-31 -36 -286 -167 -380 -195 -104 -31 -223 -45 -385 -45 -298 0 -510 42 -639
125 -58 37 -206 177 -206 195 0 5 -6 15 -13 22 -15 14 -83 119 -141 214 -20
33 -41 78 -47 100 -16 58 -154 377 -201 464 -22 41 -84 158 -137 260 -148 280
-301 532 -431 705 -25 34 -49 68 -55 77 -52 82 -179 246 -324 419 -200 239
-662 706 -811 820 -228 175 -706 445 -945 534 -167 62 -560 148 -840 185 -49
6 -120 16 -157 21 -82 11 -460 10 -543 -2z m6029 -2066 c33 -51 52 -111 66
-211 12 -82 10 -195 -3 -209 -9 -9 -100 79 -138 133 -46 66 -55 118 -35 188
10 33 32 76 49 97 18 21 33 39 34 39 2 0 14 -17 27 -37z m-98 -337 c16 -18 41
-49 56 -69 16 -20 40 -42 55 -49 25 -12 28 -19 26 -61 -2 -57 -16 -77 -52 -77
-40 0 -134 108 -152 175 -6 19 -18 37 -29 40 -28 9 -25 30 6 54 37 29 57 26
90 -13z m-71 -216 c48 -61 75 -101 75 -114 0 -3 -18 -6 -40 -6 -76 0 -150 97
-150 198 l0 46 31 -30 c17 -16 55 -58 84 -94z m-6610 -887 c8 -273 2 -469 -17
-523 -19 -50 -51 -100 -93 -140 -43 -41 -112 -129 -142 -182 -16 -28 -20 -47
-16 -74 5 -28 3 -35 -6 -29 -8 4 -24 -4 -42 -23 -16 -16 -82 -55 -146 -87
-260 -128 -422 -268 -564 -485 -39 -61 -139 -294 -187 -435 -28 -86 -35 -110
-62 -235 -28 -129 -79 -258 -131 -332 -113 -163 -345 -360 -526 -448 -102 -50
-136 -61 -237 -75 -26 -4 -82 -17 -124 -31 -42 -13 -78 -24 -79 -24 -2 0 0 24
3 53 6 55 -8 129 -45 229 -39 106 -23 169 63 258 30 30 85 98 123 151 89 124
133 174 404 463 298 317 453 467 613 589 71 55 97 154 116 442 15 242 34 437
61 650 33 261 32 260 113 305 29 17 61 39 71 50 11 12 31 20 49 20 28 0 190
39 376 90 111 31 305 66 376 69 l42 1 7 -247z m810 137 c445 -92 845 -240
1408 -522 195 -97 359 -186 432 -234 14 -9 25 -22 25 -29 0 -7 -14 -49 -31
-94 -48 -125 -73 -143 -274 -192 -107 -26 -178 -56 -221 -92 -18 -15 -36 -27
-40 -27 -5 -1 -27 -23 -49 -50 -27 -34 -45 -48 -55 -43 -8 3 -42 9 -75 13 -33
4 -78 13 -100 22 -69 26 -107 36 -220 57 -104 19 -150 25 -340 51 -99 13 -160
27 -205 48 -23 11 -73 18 -147 20 l-112 4 -7 32 c-12 56 -76 173 -145 265
l-67 90 10 73 c5 40 14 102 19 138 5 36 14 111 19 168 14 158 26 226 55 319 3
9 12 10 32 4 15 -5 55 -14 88 -21z m234 -1140 c70 -23 160 -45 226 -54 203
-29 259 -38 345 -58 47 -10 94 -23 105 -29 11 -5 52 -11 90 -14 39 -2 111 -9
160 -15 50 -6 153 -13 230 -16 l140 -5 -32 20 c-30 19 -44 41 -25 41 4 0 39
-7 77 -15 130 -27 225 -68 225 -97 0 -9 10 -29 23 -45 65 -80 87 -154 87 -290
0 -153 -24 -223 -115 -333 l-50 -61 -105 6 c-58 3 -131 6 -162 7 -43 0 -58 4
-58 14 0 11 -9 13 -39 8 -37 -6 -39 -5 -34 16 5 20 3 21 -31 15 -26 -5 -51 -1
-89 13 -28 11 -79 26 -112 33 -82 17 -145 48 -163 78 -14 26 -16 26 -146 28
-72 1 -158 6 -191 12 -33 5 -95 15 -138 22 -48 7 -88 20 -104 32 -24 19 -27
19 -38 4 -17 -24 -74 -46 -140 -53 l-57 -7 6 31 c10 44 -11 52 -42 16 -20 -23
-38 -31 -90 -39 -45 -8 -76 -8 -98 -1 l-33 11 23 25 c58 61 114 216 137 371
11 84 8 279 -7 342 l-6 27 57 0 c41 0 92 -11 174 -40z"
                    />
                    <path
                      d="M9322 7036 c12 -21 113 -132 223 -248 109 -115 210 -224 223 -243 18
-25 54 -48 128 -85 57 -27 106 -50 109 -50 3 0 5 36 5 79 0 84 14 248 29 346
6 33 12 83 15 110 5 46 4 48 -8 25 -15 -28 -29 -98 -66 -335 -7 -38 -15 -81
-20 -95 -4 -14 -11 -33 -14 -43 -5 -15 -9 -16 -26 -7 -11 6 -134 120 -273 252
-139 133 -274 262 -300 287 l-49 46 24 -39z"
                    />
                    <path
                      d="M12510 3894 c0 -25 93 -201 115 -217 18 -13 50 -3 47 15 -3 20 -97
184 -120 211 -22 25 -42 21 -42 -9z"
                    />
                    <path
                      d="M826 2331 c-3 -5 16 -14 42 -20 100 -26 121 -35 178 -77 32 -24 63
-44 69 -44 5 0 42 -24 82 -54 66 -49 200 -112 223 -104 22 7 -34 89 -93 136
-95 73 -132 93 -226 119 -47 13 -110 30 -139 38 -59 17 -128 20 -136 6z"
                    />
                    <path
                      d="M247 1753 c-26 -43 -29 -44 -46 -29 -22 20 -31 20 -31 2 0 -18 85
-96 106 -96 12 0 14 5 8 18 -5 9 -9 47 -9 85 0 37 0 67 0 67 0 0 -13 -21 -28
-47z"
                    />
                    <path
                      d="M438 1563 c-26 -25 -28 -26 -52 -10 -14 10 -28 17 -31 17 -12 0 8
-47 46 -106 22 -34 43 -78 46 -98 3 -20 11 -35 17 -33 12 3 58 90 75 142 11
30 10 29 -20 -7 -17 -21 -34 -38 -38 -38 -4 0 -14 18 -21 40 -10 31 -11 49 -2
77 6 20 10 38 9 40 -2 1 -15 -9 -29 -24z"
                    />
                    <path
                      d="M3673 1146 c3 -19 12 -50 20 -68 27 -58 57 -154 57 -179 0 -40 11
-69 26 -69 32 0 8 193 -33 275 -18 36 -53 75 -66 75 -5 0 -7 -15 -4 -34z"
                    />
                    <path
                      d="M4835 1008 c-65 -28 -155 -87 -163 -106 -7 -18 48 -67 131 -117 95
-57 99 -43 12 46 l-80 80 30 25 c33 28 128 74 150 74 8 0 15 5 15 10 0 16 -41
11 -95 -12z"
                    />
                    <path
                      d="M3615 948 c-3 -24 -1 -74 4 -113 13 -87 14 -146 1 -165 -8 -13 -12
-12 -29 5 -16 15 -23 44 -32 120 -22 190 -41 192 -60 8 -9 -90 -18 -138 -27
-141 -18 -6 -42 59 -42 115 0 54 -17 123 -30 123 -19 0 -30 -98 -18 -179 9
-64 8 -83 -2 -96 -7 -8 -18 -15 -24 -15 -29 1 -40 22 -47 91 -14 124 -41 119
-69 -13 -26 -121 -30 -136 -47 -149 -20 -18 -29 -1 -37 73 -14 124 -31 118
-40 -12 -7 -105 -12 -130 -27 -130 -11 0 -39 95 -39 132 0 16 -7 43 -16 60
-26 50 -38 20 -42 -105 -2 -62 -8 -124 -14 -139 -22 -57 -54 -22 -77 82 -23
106 -51 107 -51 2 0 -106 -9 -142 -37 -153 -39 -15 -57 3 -68 67 -5 32 -15 59
-22 61 -17 6 -49 -50 -57 -99 -6 -38 -8 -40 -25 -24 -21 20 -45 6 -60 -36 -9
-25 -16 -28 -54 -28 -42 0 -43 -1 -39 -29 3 -21 -2 -33 -19 -45 -38 -26 -57
-21 -61 17 -3 28 -6 32 -33 32 -23 0 -31 -5 -33 -23 -4 -29 -25 -28 -58 3 -34
31 -44 29 -58 -15 -14 -44 -34 -44 -64 0 -32 48 -46 45 -50 -12 -2 -27 -8 -48
-14 -48 -6 0 -8 -10 -4 -25 5 -19 2 -25 -9 -25 -49 0 -116 66 -132 130 -7 28
-14 35 -34 35 -20 0 -25 -6 -27 -33 -2 -22 -8 -32 -21 -32 -21 0 -41 19 -41
40 0 43 -102 92 -218 106 -64 7 -77 -1 -46 -27 22 -18 44 -64 44 -91 1 -13 9
-48 20 -78 10 -30 17 -57 14 -59 -9 -9 -86 34 -118 67 -48 47 -60 89 -52 179
5 67 4 74 -12 71 -21 -4 -40 -60 -51 -145 -4 -35 -10 -66 -14 -69 -11 -12 -37
5 -58 38 -23 37 -21 99 6 177 19 54 11 65 -21 28 -23 -27 -54 -112 -54 -151
-1 -52 -39 -56 -64 -7 -12 23 -11 35 13 111 38 116 43 140 32 140 -25 0 -94
-120 -105 -183 -8 -41 -32 -59 -47 -36 -15 21 -2 95 33 196 24 70 29 96 21
104 -9 9 -21 -3 -51 -49 -21 -33 -45 -74 -52 -91 -20 -50 -33 -38 -27 25 3 33
18 79 37 116 23 43 29 63 21 71 -15 15 -50 -20 -92 -94 -30 -55 -34 -59 -37
-35 -2 14 4 70 13 122 9 53 14 98 12 100 -8 8 -65 -131 -76 -187 -17 -81 -1
-138 58 -203 26 -28 60 -73 76 -99 17 -26 39 -62 50 -80 12 -18 40 -43 64 -56
40 -22 48 -23 85 -13 37 10 46 9 96 -17 95 -49 400 -111 547 -111 59 0 110 -6
140 -16 53 -18 167 -16 298 6 363 60 460 94 874 314 79 42 145 76 147 76 10 0
119 72 196 130 164 123 293 187 436 216 76 15 84 15 101 0 15 -14 50 -16 272
-15 140 1 288 5 329 8 l75 7 -40 13 c-37 13 -219 19 -705 25 -88 0 -119 -5
-185 -35 -21 -9 -105 -39 -111 -39 -7 0 -34 105 -34 134 0 45 -24 129 -37 133
-7 3 -14 -13 -18 -39z"
                    />
                    <path
                      d="M10085 933 c35 -27 239 -122 290 -134 28 -6 58 -15 67 -20 10 -5 28
-9 40 -9 20 1 18 4 -12 20 -19 11 -45 19 -57 20 -23 0 -133 45 -252 104 -78
38 -110 46 -76 19z"
                    />
                  </g>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <!--./interesting-item-->

        <div class="interesting-item">
          <div class="interesting-item__content interesting-item__content--3">
            <div class="interesting-item__content-text">
              <h3 class="interesting-item__content-title" data-lang="english">
                Sorry
              </h3>
              <h3 class="interesting-item__content-title" data-lang="russian">
                Здесь могла быть и ваша история
              </h3>
              <p
                class="interesting-item__content-paragraphe"
                data-lang="english"
              >
                These stories are still only in russian
              </p>
              <p
                class="interesting-item__content-paragraphe"
                data-lang="russian"
              >
                Если готовы рассказать свою, милости прошу ко мне в гости (;
              </p>
            </div>
            <div class="interesting-item__content-link">
              <a href="#!" data-lang="english">Read more</a>
              <a id="story-link--2" href="#" data-lang="russian">Подробнее</a>
              <svg
                class="gallery-box__icon"
                viewBox="0 0 32 32"
                aria-hidden="true"
              >
                <path
                  d="M18.629 15.997l-7.083-7.081L13.462 7l8.997 8.997L13.457 25l-1.916-1.916z"
                />
              </svg>
            </div>
          </div>

          <div class="story story--home-page--2">
            <button class="btn-story--2" type="button">&#9747;</button>
            <div class="story__inner story__inner--home-page--2">
              <svg
                class="full-content__img full-content__img--null"
                xmlns="http://www.w3.org/2000/svg"
                width="1271.000000pt"
                height="1280.000000pt"
                viewBox="0 0 1271.000000 1280.000000"
                preserveAspectRatio="xMidYMid meet"
              >
                <metadata>
                  Created by potrace 1.15, written by Peter Selinger 2001-2017
                </metadata>
                <g
                  transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)"
                  fill="#000000"
                  stroke="none"
                >
                  <path
                    d="M6345 12794 c-27 -2 -115 -9 -195 -14 -960 -72 -1950 -418 -2815
-984 -551 -361 -709 -527 -1205 -1272 -128 -192 -304 -443 -390 -559 -935
-1249 -1504 -2517 -1679 -3745 -56 -391 -71 -852 -37 -1128 9 -74 16 -136 16
-138 0 -2 31 -4 68 -4 l68 0 43 173 c23 94 63 237 87 317 52 166 247 730 251
726 2 -2 -2 -130 -8 -285 -9 -214 -9 -340 0 -524 27 -584 104 -982 310 -1612
38 -115 94 -314 124 -441 133 -548 371 -1234 686 -1976 166 -392 393 -871 425
-897 18 -15 52 -5 95 28 l23 18 -35 139 c-110 429 -218 1030 -217 1197 1 39 5
33 52 -83 28 -69 88 -222 134 -340 56 -146 89 -217 101 -221 39 -16 82 -10 94
13 8 16 9 182 4 650 -4 345 -6 628 -4 628 3 0 63 -57 134 -128 212 -207 424
-357 712 -502 905 -457 2238 -613 3586 -420 969 139 1828 456 2403 886 383
286 617 594 773 1016 45 120 57 136 143 191 26 16 130 59 134 54 1 -1 7 -85
14 -187 32 -510 139 -1158 250 -1520 16 -52 43 -176 61 -275 54 -314 143 -684
191 -796 18 -43 49 -69 82 -69 29 0 65 51 101 146 21 54 41 103 45 107 4 5 55
-184 114 -420 59 -235 111 -444 116 -463 9 -35 10 -35 57 -32 80 5 93 10 93
37 0 23 116 316 445 1125 313 770 434 1108 531 1487 109 427 151 801 141 1238
-8 327 -36 594 -103 1006 l-18 107 73 78 c146 158 275 384 276 481 0 52 -1 53
-75 129 -66 66 -179 164 -239 206 -20 14 -20 15 12 104 29 81 32 99 32 209 -1
107 -4 128 -29 195 l-28 75 2 395 c3 622 -18 799 -145 1245 -531 1860 -1654
3299 -3164 4054 -608 304 -1244 486 -1945 556 -143 15 -663 27 -771 19z m656
-144 c1036 -80 2006 -445 2829 -1066 1064 -803 1838 -1980 2260 -3435 91 -313
120 -473 140 -769 11 -164 13 -533 4 -604 l-7 -46 -67 64 c-210 198 -675 382
-1080 426 -58 6 -106 13 -108 15 -2 1 -38 146 -82 321 -92 374 -202 780 -307
1129 -130 435 -354 1100 -389 1152 -30 47 -114 20 -114 -37 0 -15 21 -82 46
-151 244 -662 525 -1637 733 -2539 68 -299 211 -989 211 -1020 0 -8 -18 21
-39 66 -39 82 -69 114 -106 114 -33 0 -63 -28 -74 -67 -15 -52 -31 -370 -39
-748 -6 -276 -9 -320 -22 -318 -87 12 -497 47 -740 63 -280 19 -501 38 -507
44 -2 1 27 47 63 102 207 312 376 653 442 894 34 121 52 245 52 356 0 91 -3
107 -20 124 -25 25 -64 26 -89 1 -15 -15 -19 -39 -23 -137 -3 -65 -13 -155
-23 -199 -88 -422 -404 -963 -974 -1670 -163 -203 -406 -491 -421 -500 -6 -4
-6 4 1 22 23 62 90 310 128 481 114 502 183 1069 200 1646 30 983 -93 1891
-371 2746 -28 85 -57 168 -65 183 -18 35 -56 51 -86 36 -51 -27 -49 -48 18
-249 182 -543 307 -1179 350 -1790 l6 -85 -189 375 c-217 431 -233 460 -265
460 -12 0 -31 3 -43 6 -38 10 -52 -49 -58 -245 -13 -358 -77 -966 -127 -1202
l-10 -47 -62 19 c-83 25 -282 66 -387 79 -46 5 -154 10 -240 10 -251 0 -411
-34 -600 -128 -63 -31 -118 -58 -122 -60 -3 -2 -19 18 -34 45 -219 381 -444
731 -658 1021 l-90 122 -58 0 -59 0 -44 -92 c-84 -172 -157 -439 -185 -673 -7
-55 -15 -120 -19 -145 l-6 -45 -74 128 c-55 95 -78 126 -90 123 -9 -3 -37 -10
-62 -16 l-47 -12 -6 -101 c-13 -204 -17 -229 -35 -222 -49 20 -220 57 -325 71
-91 12 -168 15 -311 11 -263 -8 -442 -41 -687 -127 -62 -22 -113 -38 -114 -37
-9 11 -63 129 -99 215 -80 196 -176 496 -235 732 -11 47 -23 90 -25 97 -3 8
-21 6 -67 -8 -35 -10 -65 -18 -68 -18 -8 2 -60 -132 -120 -311 -86 -258 -140
-486 -196 -830 -6 -34 -7 -32 -46 60 -137 330 -221 632 -249 901 -17 160 -7
442 21 611 26 153 22 182 -26 194 -42 11 -75 -22 -90 -88 -34 -146 -48 -296
-47 -498 0 -276 32 -480 120 -769 l35 -116 -7 -160 c-16 -396 -73 -765 -166
-1078 -16 -56 -24 -68 -37 -63 -9 3 -44 15 -77 27 -49 17 -76 20 -146 17 l-85
-4 -72 176 c-227 551 -339 955 -399 1435 -22 174 -25 653 -5 820 82 705 325
1339 752 1964 85 124 95 156 60 191 -47 47 -79 22 -195 -152 -356 -533 -595
-1094 -699 -1643 -13 -71 -27 -155 -31 -185 -4 -30 -40 -190 -81 -355 -222
-895 -344 -1777 -344 -2480 0 -360 24 -504 93 -545 53 -32 121 -42 211 -30 66
9 211 51 298 85 14 5 17 -3 23 -52 21 -185 87 -413 183 -637 l55 -129 -13
-106 c-19 -159 -15 -393 9 -531 34 -193 106 -386 207 -547 l44 -71 -2 -517 -3
-517 -94 233 c-125 312 -147 358 -176 365 -39 10 -67 0 -89 -29 -19 -25 -21
-45 -24 -174 -5 -202 24 -477 84 -787 14 -70 23 -130 21 -132 -4 -5 -214 481
-287 666 -242 609 -457 1265 -550 1680 -18 80 -66 244 -106 365 -153 463 -234
824 -281 1245 -15 135 -18 243 -17 590 0 450 7 575 61 1067 l27 253 -24 25
c-19 21 -30 24 -55 19 -16 -3 -36 -12 -43 -18 -7 -7 -35 -98 -61 -202 -78
-304 -122 -445 -296 -939 -36 -104 -86 -253 -110 -330 l-44 -140 -1 150 c0
178 12 359 41 585 156 1253 760 2608 1710 3840 44 58 181 256 304 440 355 533
468 683 660 875 379 380 1217 859 1927 1104 431 148 938 253 1398 290 154 12
665 13 821 1z m1748 -6020 c2 -985 -184 -2094 -453 -2692 l-25 -56 36 -46 c20
-25 41 -46 47 -46 12 0 5 -8 324 364 250 291 485 580 646 794 l108 143 22 -19
c40 -37 147 -100 223 -132 299 -125 638 -126 1023 -4 61 19 114 32 119 30 18
-11 35 -146 34 -266 -1 -151 -32 -335 -72 -431 -101 -240 -383 -495 -681 -613
-77 -31 -191 -114 -218 -159 -11 -18 -37 -77 -57 -132 -46 -125 -133 -308
-187 -395 -391 -624 -1296 -1117 -2495 -1359 -1303 -264 -2711 -171 -3693 244
-361 153 -646 340 -890 585 -359 359 -503 705 -487 1165 12 341 96 668 327
1275 53 140 104 276 114 302 10 26 22 50 27 53 5 4 9 17 9 29 0 13 20 93 44
178 73 254 124 527 149 806 l12 133 63 -140 c87 -190 76 -179 151 -156 50 15
61 22 58 36 -17 63 57 522 124 779 37 138 129 423 135 417 3 -2 29 -85 58
-183 69 -228 150 -445 228 -606 60 -125 62 -127 105 -142 43 -15 46 -14 131
20 425 172 892 197 1308 72 l101 -30 47 27 c44 26 46 29 47 73 0 26 4 69 7 97
l7 49 73 -121 72 -122 38 6 c20 3 51 8 67 12 l30 7 7 155 c8 184 37 391 77
550 31 119 98 309 111 309 4 0 47 -57 97 -127 200 -283 406 -606 562 -883 45
-80 91 -153 103 -162 30 -26 57 -22 113 18 112 80 276 146 435 175 46 9 144
14 255 13 208 0 346 -21 577 -84 l140 -38 38 26 c37 26 39 30 59 137 55 289
110 773 132 1160 0 6 99 -186 219 -425 l219 -435 0 -235z m-7244 460 c46 -470
165 -918 389 -1474 l97 -240 -33 -25 c-111 -84 -192 -220 -220 -362 l-12 -65
-115 1 c-124 0 -212 -20 -312 -71 l-47 -23 -6 37 c-3 20 -9 120 -13 222 -12
367 37 958 127 1520 35 215 122 670 126 655 2 -5 10 -84 19 -175z m9649 -15
c272 -41 607 -165 816 -302 136 -89 269 -256 307 -383 33 -111 17 -254 -42
-371 -20 -40 -22 -53 -14 -92 9 -40 17 -49 89 -101 89 -64 250 -212 250 -230
0 -22 -87 -183 -136 -253 -68 -96 -242 -266 -354 -345 -171 -121 -401 -238
-636 -323 -123 -45 -402 -125 -434 -125 -13 0 -15 24 -15 168 -1 142 -4 180
-24 257 -23 87 -23 98 -17 360 11 463 18 619 28 602 5 -9 51 -139 103 -289 51
-150 99 -288 105 -306 9 -22 23 -37 47 -47 48 -20 48 -20 73 21 20 31 22 43
15 107 -9 101 -86 558 -140 843 -43 221 -160 783 -170 812 -6 16 26 15 149 -3z
m-8816 -1795 c29 -12 52 -26 52 -29 0 -14 -49 -150 -130 -361 -91 -236 -197
-552 -226 -672 -11 -43 -22 -78 -25 -78 -8 0 -70 173 -97 270 -57 207 -73 440
-39 567 43 163 144 280 277 324 40 13 132 3 188 -21z m7724 -215 c199 -14 386
-29 413 -34 l50 -7 -90 -18 c-198 -40 -455 -30 -613 23 -72 25 -151 59 -135
60 6 1 175 -10 375 -24z m2177 -187 c96 -567 120 -1146 65 -1578 -53 -422
-171 -851 -387 -1420 -47 -124 -196 -495 -330 -825 -134 -330 -256 -633 -272
-673 -21 -54 -31 -69 -35 -55 -4 10 -56 213 -115 450 l-109 433 -39 26 c-39
26 -40 26 -64 7 -16 -12 -43 -63 -78 -148 l-53 -129 -10 39 c-59 225 -110 467
-151 715 -136 827 -143 1542 -21 2058 18 75 26 90 79 152 113 131 173 234 211
360 33 109 38 120 56 120 24 0 244 56 357 92 295 91 628 252 812 392 33 25 63
46 66 46 4 0 12 -28 18 -62z m-1765 -1242 c-24 -140 -44 -337 -51 -509 -3 -92
-7 -166 -9 -164 -7 7 -35 321 -43 483 -7 138 -6 182 3 192 13 13 110 81 113
78 0 0 -5 -37 -13 -80z"
                  />
                  <path
                    d="M7185 8162 c-199 -60 -380 -226 -523 -484 -37 -67 -39 -79 -13 -102
37 -34 61 -17 115 78 131 230 302 380 476 417 82 18 231 6 319 -25 139 -49
282 -139 409 -259 57 -54 78 -68 99 -65 35 4 50 29 38 65 -12 32 -139 144
-244 216 -93 62 -205 119 -296 147 -98 32 -294 37 -380 12z"
                  />
                  <path
                    d="M3545 8075 c-229 -66 -441 -278 -616 -618 -56 -108 -59 -142 -14
-153 39 -10 51 0 84 68 51 107 146 259 216 346 83 103 166 171 273 224 75 38
92 42 174 46 143 7 252 -26 389 -118 83 -55 244 -220 289 -294 51 -85 82 -116
109 -109 36 9 46 44 26 84 -56 110 -216 290 -335 379 -71 52 -176 108 -255
136 -68 23 -271 29 -340 9z"
                  />
                  <path
                    d="M7832 5974 c-11 -7 -23 -30 -26 -51 -13 -75 -38 -134 -80 -191 -52
-71 -129 -129 -171 -129 -20 -1 -161 -75 -442 -234 -227 -129 -413 -236 -413
-239 0 -9 854 -352 878 -352 48 -1 77 55 53 100 -6 11 -134 68 -315 142 -168
68 -306 126 -306 129 0 4 127 78 283 166 416 235 491 293 562 439 40 82 61
176 46 205 -14 25 -45 32 -69 15z"
                  />
                  <path
                    d="M3505 5813 c-23 -23 -14 -70 29 -158 61 -123 197 -251 328 -309 l55
-24 6 -234 c7 -245 20 -417 38 -507 19 -92 82 -129 134 -77 33 33 39 101 32
366 -11 350 -36 618 -63 672 -16 31 -50 44 -86 32 -33 -10 -46 -32 -54 -91
l-6 -53 -57 30 c-113 61 -215 175 -257 287 -30 81 -63 103 -99 66z"
                  />
                  <path
                    d="M6025 3091 l-240 -240 -150 125 c-273 228 -294 244 -324 244 -36 0
-61 -28 -61 -68 0 -28 23 -50 272 -257 l272 -226 278 278 c153 153 281 289
285 301 8 33 -26 76 -63 80 -26 2 -55 -23 -269 -237z"
                  />
                </g>
              </svg>
              <div class="story__text">
                <p>
                  Ну, не буду же я за вас ее писать) Обязательно опубликую,
                  только пишите!
                </p>
                <p>Не стесняйтесь!</p>
              </div>
            </div>
          </div>
        </div>
        <!--./interesting-item-->
      </div>
      <div class="interesting-item__view">
        <a
          class="interesting-item__link"
          href="interesting.html"
          data-lang="english"
          >View all</a
        >
        <a
          class="interesting-item__link"
          href="interesting.html"
          data-lang="russian"
          >Посмотреть все</a
        >
        <svg
          class="gallery-box__icon gallery-box__icon--up"
          viewBox="0 0 32 32"
          aria-hidden="true"
        >
          <path
            d="M18.629 15.997l-7.083-7.081L13.462 7l8.997 8.997L13.457 25l-1.916-1.916z"
          />
        </svg>
      </div>
    </section>
    <!--./IT IS INTERESTING-->

    <!--VIDEO-->
    <section class="video-gallery section" id="video-gallery">
      <div class="heading-2">
        <h2 class="heading-2__title" data-lang="english">Video</h2>
        <h2 class="heading-2__title" data-lang="russian">Видео</h2>
        <span class="heading-2__line"></span>
      </div>
      <div class="slider-container">
        <div class="slider">
          <div class="slide">
            <div class="video" id="video0">
              <span
                class="video__link"
                href="https://www.youtube.com/embed/j6k508xEUnc?enablejsapi=1"
              >
                <picture>
                  <source
                    srcset="
                      https://res.cloudinary.com/webspeedtest/image/upload/c_limit,dpr_1,h_400,q_auto,w_714/v1633672898/hieh6bgrgphttryzwpbl.webp
                    "
                    type="image/webp"
                  />
                  <img
                    class="video__media"
                    src="https://i.ytimg.com/vi/j6k508xEUnc/maxresdefault.jpg"
                    alt=""
                  />
                </picture>
              </span>
              <button class="video__btn" aria-label="Смотреть">
                <svg height="100%" viewBox="0 0 68 48" width="100%">
                  <path
                    class="video__btn-shape"
                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                  ></path>
                  <path class="video__btn-icon" d="M 45,24 27,14 27,34"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="slide">
            <div class="video" id="video1">
              <span
                class="video__link"
                href="https://www.youtube.com/embed/qWmEVKSBNSw?enablejsapi=1"
              >
                <picture>
                  <source
                    srcset="
                      https://res.cloudinary.com/webspeedtest/image/upload/c_limit,dpr_1,h_400,q_auto,w_711/v1633986325/drjspqgqvmiw0kdk1lqo.webp
                    "
                    type="image/webp"
                  />
                  <img
                    class="video__media"
                    src="https://i.ytimg.com/vi/qWmEVKSBNSw/maxresdefault.jpg"
                    alt=""
                  />
                </picture>
              </span>
              <button class="video__btn" aria-label="Смотреть">
                <svg height="100%" viewBox="0 0 68 48" width="100%">
                  <path
                    class="video__btn-shape"
                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                  ></path>
                  <path class="video__btn-icon" d="M 45,24 27,14 27,34"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="slide">
            <div class="video" id="video2">
              <span
                class="video__link"
                href="https://www.youtube.com/embed/21qvf96Zz5k?enablejsapi=1"
              >
                <picture>
                  <source
                    srcset="
                      https://res.cloudinary.com/webspeedtest/image/upload/c_limit,dpr_1,h_400,q_auto,w_714/v1633672898/lujowkzrwqk5ynoris08.webp
                    "
                    type="image/webp"
                  />
                  <img
                    class="video__media"
                    src="https://i.ytimg.com/vi/21qvf96Zz5k/maxresdefault.jpg"
                    alt=""
                  />
                </picture>
              </span>
              <button class="video__btn" aria-label="Смотреть">
                <svg height="100%" viewBox="0 0 68 48" width="100%">
                  <path
                    class="video__btn-shape"
                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                  ></path>
                  <path class="video__btn-icon" d="M 45,24 27,14 27,34"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="slide">
            <div class="video" id="video3">
              <span
                class="video__link"
                href="https://www.youtube.com/embed/-Ok4PFdMDtc?enablejsapi=1"
              >
                <picture>
                  <source
                    srcset="
                      https://res.cloudinary.com/webspeedtest/image/upload/c_limit,dpr_1,h_400,q_auto,w_714/v1633672898/tpyt3rld7m2txq3szx7j.webp
                    "
                    type="image/webp"
                  />
                  <img
                    class="video__media"
                    src="https://i.ytimg.com/vi/-Ok4PFdMDtc/maxresdefault.jpg"
                    alt=""
                  />
                </picture>
              </span>
              <button class="video__btn" aria-label="Смотреть">
                <svg height="100%" viewBox="0 0 68 48" width="100%">
                  <path
                    class="video__btn-shape"
                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                  ></path>
                  <path class="video__btn-icon" d="M 45,24 27,14 27,34"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="slide">
            <div class="video" id="video4">
              <span
                class="video__link"
                href="https://www.youtube.com/embed/sG6hVAa8Njs?enablejsapi=1"
              >
                <picture>
                  <source
                    srcset="
                      https://res.cloudinary.com/webspeedtest/image/upload/c_limit,dpr_1,h_400,q_auto,w_714/v1633672898/txxdom59jecv0etun9vk.webp
                    "
                    type="image/webp"
                  />
                  <img
                    class="video__media"
                    src="https://i.ytimg.com/vi/sG6hVAa8Njs/maxresdefault.jpg"
                    alt=""
                  />
                </picture>
              </span>
              <button class="video__btn" aria-label="Смотреть">
                <svg height="100%" viewBox="0 0 68 48" width="100%">
                  <path
                    class="video__btn-shape"
                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                  ></path>
                  <path class="video__btn-icon" d="M 45,24 27,14 27,34"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="slide">
            <div class="video" id="video5">
              <span
                class="video__link"
                href="https://www.youtube.com/embed/L1thRuygeeA?enablejsapi=1"
              >
                <picture>
                  <source
                    srcset="
                      https://res.cloudinary.com/webspeedtest/image/upload/c_limit,dpr_1,h_400,q_auto,w_714/v1633672898/ujnbz0azn8r4n7cds9rq.webp
                    "
                    type="image/webp"
                  />
                  <img
                    class="video__media"
                    src="https://i.ytimg.com/vi/L1thRuygeeA/maxresdefault.jpg"
                    alt=""
                  />
                </picture>
              </span>
              <button class="video__btn" aria-label="Смотреть">
                <svg height="100%" viewBox="0 0 68 48" width="100%">
                  <path
                    class="video__btn-shape"
                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                  ></path>
                  <path class="video__btn-icon" d="M 45,24 27,14 27,34"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="slide">
            <div class="video" id="video6">
              <span
                class="video__link"
                href="https://www.youtube.com/embed/GIPeNL2HNZ0?enablejsapi=1"
              >
                <picture>
                  <source
                    srcset="
                      https://res.cloudinary.com/webspeedtest/image/upload/c_limit,dpr_1,h_400,q_auto,w_714/v1633672898/xaa52lqlox2tbl3vioi0.webp
                    "
                    type="image/webp"
                  />
                  <img
                    class="video__media"
                    src="https://i.ytimg.com/vi/GIPeNL2HNZ0/maxresdefault.jpg"
                    alt=""
                  />
                </picture>
              </span>
              <button class="video__btn" aria-label="Смотреть">
                <svg height="100%" viewBox="0 0 68 48" width="100%">
                  <path
                    class="video__btn-shape"
                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                  ></path>
                  <path class="video__btn-icon" d="M 45,24 27,14 27,34"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="slide">
            <div class="video" id="video7">
              <span
                class="video__link"
                href="https://www.youtube.com/embed/IWeFSNYp3mU?enablejsapi=1"
              >
                <picture>
                  <source
                    srcset="
                      https://res.cloudinary.com/webspeedtest/image/upload/c_limit,dpr_1,h_400,q_auto,w_714/v1633672898/elgkfhk0ryyfr1mmubvg.webp
                    "
                    type="image/webp"
                  />
                  <img
                    class="video__media"
                    src="https://i.ytimg.com/vi/IWeFSNYp3mU/maxresdefault.jpg"
                    alt=""
                  />
                </picture>
              </span>
              <button class="video__btn" aria-label="Смотреть">
                <svg height="100%" viewBox="0 0 68 48" width="100%">
                  <path
                    class="video__btn-shape"
                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                  ></path>
                  <path class="video__btn-icon" d="M 45,24 27,14 27,34"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="slide">
            <div class="video" id="video8">
              <span
                class="video__link"
                href="https://www.youtube.com/embed/rfO8R6QfYA0?enablejsapi=1"
              >
                <picture>
                  <source
                    srcset="
                      https://res.cloudinary.com/webspeedtest/image/upload/c_limit,dpr_1,h_400,q_auto,w_714/v1633672898/rbesz4ehuinfhmsgvnci.webp
                    "
                    type="image/webp"
                  />
                  <img
                    class="video__media"
                    src="https://i.ytimg.com/vi/rfO8R6QfYA0/maxresdefault.jpg"
                    alt=""
                  />
                </picture>
              </span>
              <button class="video__btn" aria-label="Смотреть">
                <svg height="100%" viewBox="0 0 68 48" width="100%">
                  <path
                    class="video__btn-shape"
                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                  ></path>
                  <path class="video__btn-icon" d="M 45,24 27,14 27,34"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="slide">
            <div class="video" id="video9">
              <span
                class="video__link"
                href="https://www.youtube.com/embed/sTrOKFW17fc?enablejsapi=1"
              >
                <picture>
                  <source
                    srcset="
                      https://res.cloudinary.com/webspeedtest/image/upload/c_limit,dpr_1,h_400,q_auto,w_714/v1633672898/q8tpnxbjmt31dw9fkezw.webp
                    "
                    type="image/webp"
                  />
                  <img
                    class="video__media"
                    src="https://i.ytimg.com/vi/sTrOKFW17fc/maxresdefault.jpg"
                    alt=""
                  />
                </picture>
              </span>
              <button class="video__btn" aria-label="Смотреть">
                <svg height="100%" viewBox="0 0 68 48" width="100%">
                  <path
                    class="video__btn-shape"
                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                  ></path>
                  <path class="video__btn-icon" d="M 45,24 27,14 27,34"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="slide">
            <div class="video" id="video10">
              <span
                class="video__link"
                href="https://www.youtube.com/embed/jN8-VKjZz2c?enablejsapi=1"
              >
                <picture>
                  <source
                    srcset="
                      https://res.cloudinary.com/webspeedtest/image/upload/c_limit,dpr_1,h_400,q_auto,w_714/v1633672898/dkdcvn1xj0yfwpdlpbis.webp
                    "
                    type="image/webp"
                  />
                  <img
                    class="video__media"
                    src="https://i.ytimg.com/vi/jN8-VKjZz2c/maxresdefault.jpg"
                    alt=""
                  />
                </picture>
              </span>
              <button class="video__btn" aria-label="Смотреть">
                <svg height="100%" viewBox="0 0 68 48" width="100%">
                  <path
                    class="video__btn-shape"
                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                  ></path>
                  <path class="video__btn-icon" d="M 45,24 27,14 27,34"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="slide">
            <div class="video" id="video11">
              <span
                class="video__link"
                href="https://www.youtube.com/embed/2muWUQsZEh8?enablejsapi=1"
              >
                <picture>
                  <source
                    srcset="
                      https://res.cloudinary.com/webspeedtest/image/upload/c_limit,dpr_1,h_400,q_auto,w_714/v1633672898/ld1zfgkcgbfqhhnmonkv.webp
                    "
                    type="image/webp"
                  />
                  <img
                    class="video__media"
                    src="https://i.ytimg.com/vi/2muWUQsZEh8/maxresdefault.jpg"
                    alt=""
                  />
                </picture>
              </span>
              <button class="video__btn" aria-label="Смотреть">
                <svg height="100%" viewBox="0 0 68 48" width="100%">
                  <path
                    class="video__btn-shape"
                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                  ></path>
                  <path class="video__btn-icon" d="M 45,24 27,14 27,34"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="slide">
            <div class="video" id="video12">
              <span
                class="video__link"
                href="https://www.youtube.com/embed/yHzyggJYNRY?enablejsapi=1"
              >
                <picture>
                  <source
                    srcset="
                      https://res.cloudinary.com/webspeedtest/image/upload/c_limit,dpr_1,h_400,q_auto,w_714/v1633672898/vrih7nfu4chuyyl8mdhx.webp
                    "
                    type="image/webp"
                  />
                  <img
                    class="video__media"
                    src="https://i.ytimg.com/vi/yHzyggJYNRY/maxresdefault.jpg"
                    alt=""
                  />
                </picture>
              </span>
              <button class="video__btn" aria-label="Смотреть">
                <svg height="100%" viewBox="0 0 68 48" width="100%">
                  <path
                    class="video__btn-shape"
                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                  ></path>
                  <path class="video__btn-icon" d="M 45,24 27,14 27,34"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="slide">
            <div class="video" id="video13">
              <span
                class="video__link"
                href="https://www.youtube.com/embed/RqarlcsJfYY?enablejsapi=1"
              >
                <picture>
                  <source
                    srcset="
                      https://res.cloudinary.com/webspeedtest/image/upload/c_limit,dpr_1,h_400,q_auto,w_714/v1633672898/gdjm9hdl8s13snzo8vgh.webp
                    "
                    type="image/webp"
                  />
                  <img
                    class="video__media"
                    src="https://i.ytimg.com/vi/RqarlcsJfYY/maxresdefault.jpg"
                    alt=""
                  />
                </picture>
              </span>
              <button class="video__btn" aria-label="Смотреть">
                <svg height="100%" viewBox="0 0 68 48" width="100%">
                  <path
                    class="video__btn-shape"
                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                  ></path>
                  <path class="video__btn-icon" d="M 45,24 27,14 27,34"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="slide">
            <div class="video" id="video14">
              <span
                class="video__link"
                href="https://www.youtube.com/embed/fboH4llPuoQ?enablejsapi=1"
              >
                <picture>
                  <source
                    srcset="
                      https://res.cloudinary.com/webspeedtest/image/upload/c_limit,dpr_1,h_400,q_auto,w_714/v1633672898/chi0hfrwng2xehey7x7u.webp
                    "
                    type="image/webp"
                  />
                  <img
                    class="video__media"
                    src="https://i.ytimg.com/vi/fboH4llPuoQ/maxresdefault.jpg"
                    alt=""
                  />
                </picture>
              </span>
              <button class="video__btn" aria-label="Смотреть">
                <svg height="100%" viewBox="0 0 68 48" width="100%">
                  <path
                    class="video__btn-shape"
                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                  ></path>
                  <path class="video__btn-icon" d="M 45,24 27,14 27,34"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="slide">
            <div class="video" id="video15">
              <span
                class="video__link"
                href="https://www.youtube.com/embed/SJSx1gv9uAQ?enablejsapi=1"
              >
                <picture>
                  <source
                    srcset="
                      https://res.cloudinary.com/webspeedtest/image/upload/c_limit,dpr_1,h_400,q_auto,w_711/v1633986325/ul8dy0qv6eounsycu3bd.webp
                    "
                    type="image/webp"
                  />
                  <img
                    class="video__media"
                    src="https://i.ytimg.com/vi/SJSx1gv9uAQ/maxresdefault.jpg"
                    alt=""
                  />
                </picture>
              </span>
              <button class="video__btn" aria-label="Смотреть">
                <svg height="100%" viewBox="0 0 68 48" width="100%">
                  <path
                    class="video__btn-shape"
                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                  ></path>
                  <path class="video__btn-icon" d="M 45,24 27,14 27,34"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="slide">
            <div class="video" id="video16">
              <span
                class="video__link"
                href="https://www.youtube.com/embed/-_H1PMDr08s?enablejsapi=1"
              >
                <picture>
                  <source
                    srcset="
                      https://res.cloudinary.com/webspeedtest/image/upload/c_limit,dpr_1,h_400,q_auto,w_714/v1633672898/xn5qmkgvkul4upie40zo.webp
                    "
                    type="image/webp"
                  />
                  <img
                    class="video__media"
                    src="https://i.ytimg.com/vi/-_H1PMDr08s/maxresdefault.jpg"
                    alt=""
                  />
                </picture>
              </span>
              <button class="video__btn" aria-label="Смотреть">
                <svg height="100%" viewBox="0 0 68 48" width="100%">
                  <path
                    class="video__btn-shape"
                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                  ></path>
                  <path class="video__btn-icon" d="M 45,24 27,14 27,34"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="slide">
            <div class="video" id="video17">
              <span
                class="video__link"
                href="https://www.youtube.com/embed/dNbd7kXLEdQ?enablejsapi=1"
              >
                <picture>
                  <source
                    srcset="
                      https://res.cloudinary.com/webspeedtest/image/upload/c_limit,dpr_1,h_400,q_auto,w_714/v1633672898/dxgheoti4dxep8l61jbh.webp
                    "
                    type="image/webp"
                  />
                  <img
                    class="video__media"
                    src="https://i.ytimg.com/vi/dNbd7kXLEdQ/maxresdefault.jpg"
                    alt=""
                  />
                </picture>
              </span>
              <button class="video__btn" aria-label="Смотреть">
                <svg height="100%" viewBox="0 0 68 48" width="100%">
                  <path
                    class="video__btn-shape"
                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                  ></path>
                  <path class="video__btn-icon" d="M 45,24 27,14 27,34"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="slide">
            <div class="video" id="video18">
              <span
                class="video__link"
                href="https://www.youtube.com/embed/l1GeumVWqm4?enablejsapi=1"
              >
                <picture>
                  <source
                    srcset="
                      https://res.cloudinary.com/webspeedtest/image/upload/c_limit,dpr_1,h_400,q_auto,w_714/v1633672898/oknnxe12zsmin1jf49so.webp
                    "
                    type="image/webp"
                  />
                  <img
                    class="video__media"
                    src="https://i.ytimg.com/vi/l1GeumVWqm4/maxresdefault.jpg"
                    alt=""
                  />
                </picture>
              </span>
              <button class="video__btn" aria-label="Смотреть">
                <svg height="100%" viewBox="0 0 68 48" width="100%">
                  <path
                    class="video__btn-shape"
                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                  ></path>
                  <path class="video__btn-icon" d="M 45,24 27,14 27,34"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="slide">
            <div class="video" id="video19">
              <span
                class="video__link"
                href="https://www.youtube.com/embed/f5mJAzCEESQ?enablejsapi=1"
              >
                <picture>
                  <source
                    srcset="
                      https://res.cloudinary.com/webspeedtest/image/upload/c_limit,dpr_1,h_400,q_auto,w_714/v1633672898/a1ulqc33dcw2tb4fjgm8.webp
                    "
                    type="image/webp"
                  />
                  <img
                    class="video__media"
                    src="https://i.ytimg.com/vi/f5mJAzCEESQ/maxresdefault.jpg"
                    alt=""
                  />
                </picture>
              </span>
              <button class="video__btn" aria-label="Смотреть">
                <svg height="100%" viewBox="0 0 68 48" width="100%">
                  <path
                    class="video__btn-shape"
                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                  ></path>
                  <path class="video__btn-icon" d="M 45,24 27,14 27,34"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="slide">
            <div class="video" id="video20">
              <span
                class="video__link"
                href="https://www.youtube.com/embed/LLWVZWvxziY?enablejsapi=1"
              >
                <picture>
                  <source
                    srcset="
                      https://res.cloudinary.com/webspeedtest/image/upload/c_limit,dpr_1,h_400,q_auto,w_711/v1633986325/rtnxgc2depxz6jbws0i5.webp
                    "
                    type="image/webp"
                  />
                  <img
                    class="video__media"
                    src="https://i.ytimg.com/vi/LLWVZWvxziY/maxresdefault.jpg"
                    alt=""
                  />
                </picture>
              </span>
              <button class="video__btn" aria-label="Смотреть">
                <svg height="100%" viewBox="0 0 68 48" width="100%">
                  <path
                    class="video__btn-shape"
                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                  ></path>
                  <path class="video__btn-icon" d="M 45,24 27,14 27,34"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <div class="scrollbar">
          <div class="scrollbar__handle"></div>
        </div>
        <div class="slider__btn-box">
          <button
            class="slider__btn slider__btn--left"
            aria-label="Left Button"
          >
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xml:space="preserve"
                width="64.8546mm"
                height="58.5111mm"
                viewBox="0 0 4186.2 3776.74"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <g>
                  <path
                    d="M947.86 590.99c334.21,-193.89 468.75,-558.43 726.55,-588.85 257.8,-30.42 638.85,273.28 1048.55,356.81 409.7,83.54 848.03,-53.08 1097.29,200.54 249.26,253.63 309.43,897.51 346.43,1472.47 37,574.97 50.84,1081.03 -238.43,1341.41 -289.26,260.39 -881.62,275.11 -1527.32,333.5 -645.69,58.38 -1344.72,160.43 -1633.71,-97.45 -288.99,-257.87 -167.94,-875.68 -303.15,-1398.68 -135.22,-522.99 -526.7,-951.18 -455.5,-1176.89 71.2,-225.71 605.07,-248.95 939.28,-442.85z"
                  />
                </g>
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xml:space="preserve"
                width="63.7684mm"
                height="63.3685mm"
                viewBox="0 0 5756.25 5720.15"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <g>
                  <path
                    d="M1371.45 634.51c489.8,-266.52 853.04,-636.14 1290.9,-634.5 437.85,1.63 950.32,374.53 1555.53,661.01 605.21,286.48 1303.15,486.55 1484.94,843.63 181.78,357.08 -152.58,871.16 -228.22,1454.61 -75.64,583.46 107.47,1236.27 -158.05,1613.1 -265.51,376.84 -979.65,477.72 -1526.69,685.52 -547.04,207.81 -926.97,522.55 -1278.44,452.22 -351.48,-70.34 -674.48,-525.76 -1106.67,-831.89 -432.19,-306.13 -973.55,-462.97 -1167.33,-741.19 -193.79,-278.22 -40,-677.85 -80.16,-1182.94 -40.16,-505.09 -274.29,-1115.67 -83.15,-1502.66 191.12,-386.98 807.5,-550.38 1297.31,-816.9z"
                  />
                </g>
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xml:space="preserve"
                width="38.0481mm"
                height="11.9155mm"
                viewBox="0 0 19432.17 6085.56"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <g>
                  <path
                    d="M17118.94 2669.62c-1610.32,304.04 -4628.2,686.88 -7454.72,540.5 -2826.46,-146.37 -5461.45,-822.07 -5675.45,-1261.24 -213.94,-439.17 1993.21,-641.83 3062.98,-1013.43 1069.77,-371.6 1002.2,-912.16 -416.7,-934.68 -1418.85,-22.52 -4188.98,472.98 -5551.55,844.59 -1362.57,371.6 -1317.52,619.31 -540.5,1767.93 776.97,1148.62 2285.96,3198.07 2894.03,3445.82 608.07,247.75 315.32,-1306.29 123.85,-2184.63 -191.42,-878.35 -281.51,-1081 754.45,-810.73 1036.01,270.23 3198.12,1013.43 6024.58,1283.71 2826.46,270.23 6317.33,67.57 7893.84,-416.65 1576.51,-484.22 1238.72,-1249.95 968.44,-1520.18 -270.28,-270.28 -472.93,-45.1 -2083.25,258.99z"
                  />
                </g>
              </svg>
            </span>
          </button>
          <button
            class="slider__btn slider__btn--right"
            aria-label="Right Button"
          >
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xml:space="preserve"
                width="64.8546mm"
                height="58.5111mm"
                viewBox="0 0 4186.2 3776.74"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <g>
                  <path
                    d="M947.86 590.99c334.21,-193.89 468.75,-558.43 726.55,-588.85 257.8,-30.42 638.85,273.28 1048.55,356.81 409.7,83.54 848.03,-53.08 1097.29,200.54 249.26,253.63 309.43,897.51 346.43,1472.47 37,574.97 50.84,1081.03 -238.43,1341.41 -289.26,260.39 -881.62,275.11 -1527.32,333.5 -645.69,58.38 -1344.72,160.43 -1633.71,-97.45 -288.99,-257.87 -167.94,-875.68 -303.15,-1398.68 -135.22,-522.99 -526.7,-951.18 -455.5,-1176.89 71.2,-225.71 605.07,-248.95 939.28,-442.85z"
                  />
                </g>
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xml:space="preserve"
                width="63.7684mm"
                height="63.3685mm"
                viewBox="0 0 5756.25 5720.15"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <g>
                  <path
                    d="M1371.45 634.51c489.8,-266.52 853.04,-636.14 1290.9,-634.5 437.85,1.63 950.32,374.53 1555.53,661.01 605.21,286.48 1303.15,486.55 1484.94,843.63 181.78,357.08 -152.58,871.16 -228.22,1454.61 -75.64,583.46 107.47,1236.27 -158.05,1613.1 -265.51,376.84 -979.65,477.72 -1526.69,685.52 -547.04,207.81 -926.97,522.55 -1278.44,452.22 -351.48,-70.34 -674.48,-525.76 -1106.67,-831.89 -432.19,-306.13 -973.55,-462.97 -1167.33,-741.19 -193.79,-278.22 -40,-677.85 -80.16,-1182.94 -40.16,-505.09 -274.29,-1115.67 -83.15,-1502.66 191.12,-386.98 807.5,-550.38 1297.31,-816.9z"
                  />
                </g>
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xml:space="preserve"
                width="33.3829mm"
                height="10.7969mm"
                viewBox="0 0 1140.84 368.98"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <g>
                  <metadata />
                  <path
                    d="M820.2 83.92c14.6,34.06 -81.09,58.39 -197.87,64.88 -116.78,6.49 -254.64,-4.87 -362.5,-27.58 -107.86,-22.71 -185.71,-56.76 -227.88,-47.84 -42.17,8.92 -48.66,60.82 17.84,107.04 66.5,46.22 205.99,86.77 342.23,94.07 136.24,7.3 269.24,-18.65 354.59,-44.6 85.35,-25.95 123.07,-51.9 146.79,-55.95 23.72,-4.06 33.45,13.79 32.24,38.52 -1.22,24.74 -13.38,56.36 -33.86,93.67 -20.48,37.3 -49.27,80.28 -8.52,55.55 40.75,-24.74 151.04,-117.18 211.5,-178.6 60.45,-61.42 71.07,-91.81 -27.06,-123.44 -98.13,-31.63 -304.99,-64.49 -345.98,-59.03 -40.99,5.46 83.9,49.26 98.49,83.32z"
                  />
                </g>
              </svg>
            </span>
          </button>
        </div>
      </div>
    </section>
    <!--./VIDEO-->

    <!--CONTACTS-->
    <section class="contacts section" id="contacts">
      <div class="heading-2">
        <h2 class="heading-2__title" data-lang="english">Contact</h2>
        <h2 class="heading-2__title" data-lang="russian">Контакты</h2>
        <span class="heading-2__line"></span>
      </div>
      <div class="contacts-box">
        <div class="contacts-box__item">
          <p data-lang="russian">
            Спасибо, что долистали до конца (: <br />
            Если вам понравились мои работы, то по вопросам сотрудничества
            обращайтесь незамедлительно, отправив мне сообщение, нажав на эту
            чудесную кнопочку справа...или снизу, если вы читаете это сообщение
            с телефона!
          </p>
          <a
            class="contacts-item"
            href="mailto:volnaart1@gmail.com"
            data-lang="english"
            >E-mail: <span>volnaart1@gmail.com</span></a
          >
          <a
            class="contacts-item"
            href="mailto:volnaart1@gmail.com"
            data-lang="russian"
            >Электронная почта: <span>volnaart1@gmail.com</span></a
          >
        </div>
        <div class="contacts-box__item">
          <form class="form" action="" method="POST" name="form">
            <div class="form__group" data-lang="english">
              <input
                class="form__input"
                type="text"
                name="user_name-eng"
                placeholder="Your name"
                id="name-eng"
              />
              <label class="form__label" for="name-eng">Your name</label>
            </div>
            <div class="form__group" data-lang="russian">
              <input
                class="form__input"
                type="text"
                name="user_name-rus"
                placeholder="Ваше имя"
                id="name-rus"
              />
              <label class="form__label" for="name-rus">Ваше имя</label>
            </div>

            <div class="form__group" data-lang="english">
              <input
                class="form__input"
                type="email"
                name="user_email-eng"
                placeholder="Your e-mail"
                id="mail-eng"
              />
              <label class="form__label form__label--email" for="mail-eng"
                >Your e-mail
              </label>
            </div>
            <div class="form__group" data-lang="russian">
              <input
                class="form__input"
                type="email"
                name="user_email-rus"
                placeholder="Ваша электронная почта"
                id="mail-rus"
              />
              <label class="form__label form__label--email" for="mail-rus"
                >Ваша электронная почта</label
              >
            </div>

            <div class="form__group" data-lang="english">
              <textarea
                class="form__input"
                id="message-eng"
                name="user_message-eng"
                placeholder="Message"
              ></textarea>
              <label class="form__label" for="message-eng">Message</label>
            </div>
            <div class="form__group" data-lang="russian">
              <textarea
                class="form__input"
                id="message-rus"
                name="user_message-rus"
                placeholder="Сообщение"
              ></textarea>
              <label class="form__label" for="message-rus">Сообщение</label>
            </div>

            <div class="form__group" data-lang="english">
              <div class="btn-box">
                <button class="btn-send" type="submit" name="submit-en">
                  <span class="btn btn--en">
                    Send
                    <span class="btn__blobs btn__blobs--en">
                      <span></span>
                      <span></span>
                      <span></span>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg">
                      <defs>
                        <filter id="goo-eng">
                          <feGaussianBlur
                            in="SourceGraphic"
                            stdDeviation="10"
                            result="blur"
                          ></feGaussianBlur>
                          <feColorMatrix
                            in="blur"
                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7"
                            result="goo-eng"
                          ></feColorMatrix>
                          <feBlend in="SourceGraphic" in2="goo-eng"></feBlend>
                        </filter>
                      </defs>
                    </svg>
                  </span>
                </button>
              </div>
            </div>
            <div class="form__group" data-lang="russian">
              <div class="btn-box">
                <button class="btn-send" type="submit" name="submit-rus">
                  <span class="btn btn--rus">
                    Отправить
                    <span class="btn__blobs btn__blobs--rus">
                      <span></span>
                      <span></span>
                      <span></span>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg">
                      <defs>
                        <filter id="goo-rus">
                          <feGaussianBlur
                            in="SourceGraphic"
                            stdDeviation="10"
                            result="blur"
                          ></feGaussianBlur>
                          <feColorMatrix
                            in="blur"
                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7"
                            result="goo-rus"
                          ></feColorMatrix>
                          <feBlend in="SourceGraphic" in2="goo-rus"></feBlend>
                        </filter>
                      </defs>
                    </svg>
                  </span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <span class="contacts-square1 layer" data-speed="10"></span>
      <span class="contacts-square2 layer" data-speed="-3"></span>
      <span class="contacts-square3 layer" data-speed="-2"></span>
    </section>
    <!--./CONTACTS-->

    <!--FOOTER-->
    <footer class="footer">
      <svg
        class="waves"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 14 150 28"
        preserveAspectRatio="none"
        shape-rendering="auto"
      >
        <defs>
          <linearGradient
            id="linearGradient1"
            x1="50%"
            x2="50%"
            y1="-10.959%"
            y2="100%"
          >
            <stop stop-color="#f2edea" stop-opacity=".95" offset="0%" />
            <stop stop-color="#f5e7e8" offset="100%" />
          </linearGradient>
          <linearGradient
            id="linearGradient2"
            x1="50%"
            x2="50%"
            y1="-10.959%"
            y2="100%"
          >
            <stop stop-color="#f2edea" stop-opacity=".85" offset="0%" />
            <stop stop-color="#d9cccc" offset="100%" />
          </linearGradient>
          <path
            id="gentle-wave"
            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"
          ></path>
        </defs>
        <g class="parallax">
          <use
            xlink:href="#gentle-wave"
            x="48"
            y="-10"
            fill="url(#linearGradient2)"
          ></use>
          <use
            xlink:href="#gentle-wave"
            x="48"
            y="-4"
            fill="url(#linearGradient1)"
          ></use>
        </g>
      </svg>

      <div class="footer__box">
        <div class="footer__logo">
          <img class="footer__logo-img" src="images/logo/logo.svg" alt="logo" />
          <img
            class="footer__logo-imgDark"
            src="images/logo/logo-dark.svg"
            alt="logo-dark"
          />
        </div>
        <nav class="footer__nav">
          <ul class="footer__nav-item">
            <li class="footer__nav-list">
              <a class="footer__nav-link" href="#gallery" data-lang="english">
                Gallery
              </a>
              <a class="footer__nav-link" href="#header" data-lang="russian"
                >Галерея
              </a>
            </li>
            <li class="footer__nav-list">
              <a
                class="footer__nav-link"
                href="#interesting"
                data-lang="english"
                >It is interesting...
              </a>
              <a
                class="footer__nav-link"
                href="#interesting"
                data-lang="russian"
                >Это интересно...
              </a>
            </li>
            <li class="footer__nav-list">
              <a
                class="footer__nav-link"
                href="#video-gallery"
                data-lang="english"
                >Video
              </a>
              <a
                class="footer__nav-link"
                href="#video-gallery"
                data-lang="russian"
                >Видео
              </a>
            </li>
            <li class="footer__nav-list">
              <a
                class="footer__nav-link dontClickEn"
                href="#contacts"
                data-lang="english"
                >Don't click here
              </a>
              <a
                class="footer__nav-link dontClickRus"
                href="#contacts"
                data-lang="russian"
                >Не нажимай сюда
              </a>
            </li>
          </ul>
        </nav>
        <span class="footer__line"></span>
        <div class="footer__icons">
          <a
            class="footer__icon-item"
            href="https://www.vk.com/club_volna_a"
            target="_blank"
            aria-label="vk.com"
            rel="noopener"
          >
            <svg
              class="social-icons"
              viewBox="0 0 30 30"
              xml:space="preserve"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
            >
              <path
                clip-rule="evenodd"
                d="M16,24c1,0,1-1.441,1-2c0-1,1-2,2-2s2.715,1.715,4,3c1,1,1,1,2,1s3,0,3,0  s2-0.076,2-2c0-0.625-0.685-1.685-3-4c-2-2-3.026-0.967,0-5c1.843-2.456,3.184-4.681,2.954-5.323C29.734,7.064,24.608,6.088,24,7  c-2,3-2.367,3.735-3,5c-1,2-1.099,3-2,3c-0.909,0-1-1.941-1-3c0-3.306,0.479-5.644-1-6c0,0-2,0-3,0c-1.61,0-3,1-3,1  s-1.241,0.968-1,1c0.298,0.04,2-0.414,2,1c0,1,0,2,0,2s0.009,4-1,4c-1,0-3-4-5-7C5.215,6.823,5,7,4,7C2.928,7,2.001,7.042,1,7.042  C0,7.042-0.128,7.679,0,8c2,5,3.437,8.14,7.237,12.096C10.722,23.725,13.05,23.918,15,24C15.5,24.021,15,24,16,24z"
                fill-rule="evenodd"
              />
            </svg>
          </a>
          <a
            class="footer__icon-item"
            href="https://www.youtube.com/channel/UCQBC6BuesprYAv94pVlRfvQ"
            target="_blank"
            aria-label="Youtube"
            rel="noopener"
          >
            <svg
              class="social-icons"
              viewBox="0 0 60 42.46"
              xmlns="http://www.w3.org/2000/svg"
            >
              <title />
              <g>
                <g>
                  <path
                    d="M47.54,0H12.46A12.46,12.46,0,0,0,0,12.46V30A12.46,12.46,0,0,0,12.46,42.46H47.54A12.46,12.46,0,0,0,60,30V12.46A12.46,12.46,0,0,0,47.54,0ZM39.11,22.08,22.7,29.91a.66.66,0,0,1-.94-.59V13.17a.66.66,0,0,1,1-.59L39.13,20.9A.66.66,0,0,1,39.11,22.08Z"
                  />
                </g>
              </g>
            </svg>
          </a>
          <a
            class="footer__icon-item"
            href="https://www.instagram.com"
            target="_blank"
            aria-label="Instagram"
            rel="noopener"
          >
            <svg
              class="social-icons"
              viewBox="0 0 30 30"
              xml:space="preserve"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
            >
              <g>
                <circle cx="15" cy="15" r="4" />
                <path
                  d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
                />
              </g>
            </svg>
          </a>
        </div>
      </div>

      <div class="footer__copyright" data-lang="english">
        &copy; 2021. All rights reserved
      </div>
      <div class="footer__copyright" data-lang="russian">
        &copy; 2021. Все права защищены
      </div>
    </footer>
    <!--./FOOTER-->

    <script>
      'fixloadpage';
    </script>
    <script src="script.js"></script>
    <script src="https://www.youtube.com/player_api"></script>
    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
    <noscript>Your browser does not support JavaScript!</noscript>
  </body>
</html>
