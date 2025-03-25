<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Studio2I</title>
  @vite('resources/scss/app.scss')
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Geologica:wght@100..900&display=swap" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="body">
  <header class="header">
    <div class="header__logo"><img class="header__logo" src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Агентство 2И" /></div>
    <nav class="header__menu">
      <div class="header__menu-element">
        <a class="header__menu-link" href="/">Услуги</a>
      </div>
      <div class="header__menu-element">
        <a class="header__menu-link" href="/">Портфолио</a>
      </div>
      <div class="header__menu-element">
        <a class="header__menu-link" href="#footer__contacts">Контакты</a>
      </div>
      <button class="header__burger-button">
          <i class="fa-solid fa-bars header__burger-button-icon"></i>
          <p class="header__burger-button-text">Меню</p>
      </button>
      <a class="button button_transparent header__menu-button" href="tel:+79310093772>">
        <i class="fas fa-mobile-screen-button"></i>
        +7 931 009-37-72
      </a>
      <a class="header__menu-phone-icon" href="tel:+79310093772"><i class="fas fa-mobile-screen-button"></i></a>
    </nav>
  </header>

  <div class="cover">
    <p class="cover__heading">
      Разработка веб-сервисов<br />
      и сайтов с 2013 года
    </p>
    <a href="tel:+79310093772" class="button button_blue cover__button">
      <i class="fas fa-mobile-screen-button fa-fw"></i>
      +7 931 009-37-72
    </a>
  </div>

  <footer class="footer">
    <div id="footer__contacts" class="footer__contacts">
      <div class="footer__contacts-group">
        <p class="footer__contacts-heading">ОТДЕЛ ПРОДАЖ</p>
        <div class="footer__contacts-content">
          <a class="footer__contacts-phone" href="tel:+79310093772">+7 931 009-37-72</a>
          <div class="footer__contacts-social">
            <a class="footer__contacts-link" href="/"><i class="fa-solid fa-paper-plane"></i>Telegram</a>
            <a class="footer__contacts-link" href="/"><i class="fa-brands fa-whatsapp"></i>Whatsapp</a>
          </div>
        </div>
      </div>
      <div class="footer__contacts-group">
        <p class="footer__contacts-heading">СЕРВИСНЫЙ ОТДЕЛ</p>
        <div class="footer__contacts-content">
          <a class="footer__contacts-phone" href="tel:+79310093772">+7 931 009-37-74</a>
          <div class="footer__contacts-social">
            <a class="footer__contacts-link" href="/"><i class="fa-solid fa-paper-plane"></i>Telegram</a>
            <a class="footer__contacts-link" href="/"><i class="fa-brands fa-whatsapp"></i>Whatsapp</a>
          </div>
        </div>
      </div>
      <div class="footer__contacts-mail-and-time">
        <a class="footer__contacts-mail" href="mailto:mail@studio2i.ru">mail@studio2i.ru</a>
        <p class="footer__contacts-time">
          По будням с 10:00 до 19:00 (по Москве)
        </p>
      </div>
    </div>

    <div class="footer__copyright">
      <p class="footer__copyright-text">© 2013–2025 Диджитал-агентство 2И</p>
      <p class="footer__copyright-text">
        ИП Артамонов Иван Сергеевич<br />ОГРНИП 316470400116880
      </p>
    </div>
  </footer>
</body>

</html>