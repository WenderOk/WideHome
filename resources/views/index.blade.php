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

<body>
  <header class="header">
    <div class="header__logo"><img class="header__logo" src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Агентство 2И" /></div>
    <nav class="menu">
      <div class="menu__element">
        <a class="menu__link" href="/">Услуги</a>
      </div>
      <div class="menu__element">
        <a class="menu__link" href="/">Портфолио</a>
      </div>
      <div class="menu__element">
        <a class="menu__link" href="#contacts">Контакты</a>
      </div>
      <button class="menu__burger-button">
          <i class="fa-solid fa-bars button__icon"></i>
          <p class="menu__burger-button-text">Меню</p>
      </button>
      <a class="button button_transparent" href="tel:+79310093772>">
        <i class="fas fa-mobile-screen-button"></i>
        +7 931 009-37-72
      </a>
      <a class="menu__phone-icon" href="tel:+79310093772"><i class="fas fa-mobile-screen-button"></i></a>
    </nav>
  </header>

  <div class="cover">
    <p class="cover__heading">
      Разработка веб-сервисов<br />
      и сайтов с 2013 года
    </p>
    <a href="tel:+79310093772" class="button button_blue">
      <i class="fas fa-mobile-screen-button fa-fw"></i>
      +7 931 009-37-72
    </a>
  </div>

  <footer class="footer">
    <div id="contacts" class="contacts">
      <div class="contacts__group">
        <p class="contacts__group-heading">ОТДЕЛ ПРОДАЖ</p>
        <div class="contacts__content">
          <a class="contacts__phone" href="tel:+79310093772">+7 931 009-37-72</a>
          <div class="contacts__social">
            <a class="contacts__social-link" href="/"><i class="fa-solid fa-paper-plane"></i>Telegram</a>
            <a class="contacts__social-link" href="/"><i class="fa-brands fa-whatsapp"></i>Whatsapp</a>
          </div>
        </div>
      </div>
      <div class="contacts__group">
        <p class="contacts__group-heading">СЕРВИСНЫЙ ОТДЕЛ</p>
        <div class="contacts__content">
          <a class="contacts__phone" href="tel:+79310093772">+7 931 009-37-74</a>
          <div class="contacts__social">
            <a class="contacts__social-link" href="/"><i class="fa-solid fa-paper-plane"></i>Telegram</a>
            <a class="contacts__social-link" href="/"><i class="fa-brands fa-whatsapp"></i>Whatsapp</a>
          </div>
        </div>
      </div>
      <div class="contacts__mail-and-time">
        <a class="contacts__mail" href="mailto:mail@studio2i.ru">mail@studio2i.ru</a>
        <p class="contacts__time">
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