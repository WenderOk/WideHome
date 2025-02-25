<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Studio2I</title>
  <link rel="shortcut icon" type="image/svg" src="{{ asset('images/logo.svg') }}" />
  @vite('resources/scss/app.scss')
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Geologica:wght@100..900&display=swap" />
  <link rel="stylesheet" href="{{ asset('css/Font-Awesome-6/css/all.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__logo"><img src="{{ asset('images/logo.svg') }}" alt="Агентство 2И" /></div>
    <nav class="header__menu">
      <div class="header__menu-element">
        <a class="text header__menu-link" href="/">Услуги</a>
      </div>
      <div class="header__menu-element">
        <a class="text header__menu-link" href="/">Портфолио</a>
      </div>
      <div class="header__menu-element">
        <a class="text header__menu-link" href="#contacts">Контакты</a>
      </div>
      <a class="text button button--transparent" href="tel:+79310093772>">
        <div class="icon"><i class="fas fa-mobile-screen-button"></i></div>
        +7 931 009-37-72
      </a>
    </nav>
  </header>

  <div class="cover">
    <p class="text cover__heading">
      Разработка веб-сервисов<br />
      и сайтов с 2013 года
    </p>
    <a href="tel:+79310093772" class="text button button--blue">
      <i class="fas fa-mobile-screen-button fa-fw"></i>
      +7 931 009-37-72
    </a>
  </div>

  <footer class="footer">
    <div id="contacts" class="footer__contacts">
      <div class="footer__contacts-group">
        <p class="text footer__contacts-group-heading">ОТДЕЛ ПРОДАЖ</p>
        <div class="footer__contacts-content">
          <a class="text footer__contacts-phone" href="tel:+79310093772">+7 931 009-37-72</a>
          <div class="footer__contacts-social">
            <a class="text footer__contacts-social-link" href="/"><i class="fa-solid fa-paper-plane"></i>Telegram</a>
            <a class="text footer__contacts-social-link" href="/"><i class="fa-brands fa-whatsapp"></i>Whatsapp</a>
          </div>
        </div>
      </div>
      <div class="footer__contacts-group">
        <p class="text footer__contacts-group-heading">СЕРВИСНЫЙ ОТДЕЛ</p>
        <div class="footer__contacts-content">
          <a class="text footer__contacts-phone" href="tel:+79310093772">+7 931 009-37-7</a>
          <div class="footer__contacts-social">
            <a class="text footer__contacts-social-link" href="/"><i class="fa-solid fa-paper-plane"></i>Telegram</a>
            <a class="text footer__contacts-social-link" href="/"><i class="fa-brands fa-whatsapp"></i>Whatsapp</a>
          </div>
        </div>
      </div>
      <div class="footer__contacts-mailAndTime">
        <a class="text footer__contacts-mailAndTime-mail" href="mailto:mail@studio2i.ru">mail@studio2i.ru</a>
        <p class="text footer__contacts-mailAndTime-time">
          По будням с 10:00 до 19:00 (по Москве)
        </p>
      </div>
    </div>
    <div class="footer__copyright">
      <p class="text footer__copyright-text">© 2013–2025 Диджитал-агентство 2И</p>
      <p class="text footer__copyright-text">
        ИП Артамонов Иван Сергеевич<br />ОГРНИП 316470400116880
      </p>
    </div>
  </footer>
</body>

</html>