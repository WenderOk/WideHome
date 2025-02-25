<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Studio2I</title>
  <link rel="shortcut icon" type="image/svg" src="{{ asset('images/logo.svg') }}"/>
  @vite('resources/scss/app.scss')
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Geologica:wght@100..900&display=swap" />
  <link rel="stylesheet" href="{{ asset('css/Font-Awesome-6/css/all.css') }}" />
</head>
<body>
  <header class="header">
    <div class="header__logo" ><img src="{{ asset('images/logo.svg') }}" alt="Агентство 2И" /></div>
    <nav class="header__menu">
      <div class="header__menu-element">
        <a class="header__menu-link font--bold" href="/">Услуги</a>
      </div>
      <div class="header__menu-element">
        <a class="header__menu-link font--bold" href="/">Портфолио</a>
      </div>
      <div class="header__menu-element">
        <a class="header__menu-link font--bold" href="#contacts">Контакты</a>
      </div>
      <a class="button button--transparent font--bold" href="tel:+79310093772>">
        <div class="icon"><i class="fas fa-mobile-screen-button"></i></div>
        +7 931 009-37-72
      </a>
    </nav>
  </header>

  <div class="cover">
    <p class="cover__heading">
      Разработка веб-сервисов<br />
      и сайтов с 2013 года
    </p>
    <a href="tel:+79310093772" class="font--bold button button--blue">
      <i class="fas fa-mobile-screen-button fa-fw"></i>
      +7 931 009-37-72
    </a>
  </div>

  <footer class="footer">
    <div id="contacts" class="footer__contacts">
      <div class="footer__contacts__group">
        <div class="footer__contacts-heading">ОТДЕЛ ПРОДАЖ</div>
        <div class="footer__contacts__group__contacts">
          <div class="footer__contacts__group__contacts__phone">
            <a class="footer__contacts__group__contacts__phone__text" href="tel:+79310093772">+7 931 009-37-72</a>
          </div>
          <div class="footer__contacts__group__contacts__social">
            <div class="footer__contacts__group__contacts__social__link">
              <i class="fa-solid fa-paper-plane"></i><a class="footer__contacts__group__contacts__social__link__text"
                href="/">Telegram</a>
            </div>
            <div class="footer__contacts__group__contacts__social__link">
              <i class="fa-brands fa-whatsapp"></i><a class="footer__contacts__group__contacts__social__link__text"
                href="/">Whatsapp</a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__contacts__group">
        <div class="footer__contacts-heading">СЕРВИСНЫЙ ОТДЕЛ</div>
        <div class="footer__contacts__group__contacts">
          <div class="footer__contacts__group__contacts__phone">
            <a class="footer__contacts__group__contacts__phone__text" href="tel:+79310093772">+7 931 009-37-74</a>
          </div>
          <div class="footer__contacts__group__contacts__social">
            <div class="footer__contacts__group__contacts__social__link">
              <i class="fa-solid fa-paper-plane"></i><a class="footer__social-link-text" href="/">Telegram</a>
            </div>
            <div class="footer__contacts__group__contacts__social__link">
              <i class="fa-brands fa-whatsapp"></i><a class="footer__social-link-text" href="/">Whatsapp</a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__contacts__mail-time">
        <p class="footer__contacts__mail-time__mail">
          <a class="footer__contacts__mail-time__mail__text" href="mailto:mail@studio2i.ru">mail@studio2i.ru</a>
        </p>
        <p class="footer__contacts__mail-time__time-text">
          По будням с 10:00 до 19:00 (по Москве)
        </p>
      </div>
    </div>
    <div class="footer__copyright">
      <p class="footer__copyright__text">© 2013–2025 Диджитал-агентство 2И</p>
      <p class="footer__copyright__text">
        ИП Артамонов Иван Сергеевич<br />ОГРНИП 316470400116880
      </p>
    </div>
  </footer>
</body>

</html>