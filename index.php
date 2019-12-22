<?php get_header(); ?>
<div class="page-wrapper" id="app" @mouseover="tweenShapes">
    <img class="triangle1 shape" id="shape1" src="<?php bloginfo('template_directory') ?>/images/triangle1.png" alt="triangle1">
    <img class="triangle2 shape" id="shape2" src="<?php bloginfo('template_directory') ?>/images/triangle2.png" alt="triangle2">
    <img class="triangle3 shape" id="shape3" src="<?php bloginfo('template_directory') ?>/images/triangle2.png" alt="triangle2">
    <img class="circle shape" id="shape4" src="<?php bloginfo('template_directory') ?>/images/circle.png" alt="circle">
    <img class="triangle4 shape" id="shape5" src="<?php bloginfo('template_directory') ?>/images/triangle1.png" alt="triangle1">
    <div class="top-button">
        <a class="top-button-container anchor" href="#home">
            <img src="<?php bloginfo('template_directory') ?>/images/top-button.svg" alt="top">
            <span>Наверх</span>
        </a>
    </div>
    <header class="header">
        <nav class="wow pulse navigation">
            <div class="navigation__container container d-flex-between">
                <div class="navigation__logo">
                    <img src="<?php bloginfo('template_directory') ?>/images/logo.png" alt="logo">
                </div>
                <div class="navigation__links">
                    <a class="anchor" href="#about">
                        О нас
                    </a>
                    <a class="anchor" href="#types">
                        Абонементы
                    </a>
                    <a class="anchor" href="#franchise">
                        Франшиза
                    </a>
                    <a class="anchor" href="#reviews">
                        Отзывы
                    </a>
                    <a class="anchor" href="#contacts">
                        Контакты
                    </a>
                </div>
                <div class="navigation__contacts">
                    <a href="tel:+7 (775) 232 44 88">
                        +7 (775) 232 44 88
                    </a>
                </div>
                <div class="navigation__sidebar-btn in-mobile">
                    <img src="<?php bloginfo('template_directory') ?>/images/sidebar.svg" alt="sidebar">
                </div>
            </div>
        </nav>
        <div class="header__slider swiper-container" id="home">
            <div class="header__slider-container swiper-wrapper">
                <div class="header__slide swiper-slide" style="background-image: url('<?php bloginfo('template_directory') ?>/images/header/slider1.jpg')">
                    <div class="wow fadeIn header__slide-content">
                        <div class="header__slide-container container">
                            <div class="header__slide-text">
                                <h1>
                                    ЕMS - тренировки
                                    <br>
                                    <span class="colored">
                                        20 МИНУТ В НЕДЕЛЮ!
                                    </span>
                                </h1>
                                <h2>
                                    Результат чувствуется после первой тренировки
                                    и становится заметен уже на пятом занятии!
                                </h2>
                                <div class="header__text">
                                    <div class="header__list-title colored">
                                        EMS студии Energy Life – это:
                                    </div>
                                    <div class="header__list">
                                        - Европейский стандарт технологии тренировок/Германия
                                    </div>
                                    <div class="header__list">
                                        - Персональные занятия с квалифицированным тренером
                                    </div>
                                    <div class="header__list">
                                        - Уникальный сервис - форма и аксессуары предоставляются в студии
                                    </div>
                                    <div class="header__list">
                                        - После каждой тренировки проводится массаж
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__slide swiper-slide" style="background-image: url('<?php bloginfo('template_directory') ?>/images/header/slider2.jpg')">
                    <div class="wow fadeIn header__slide-content">
                        <div class="header__slide-container container">
                            <div class="header__slide-text">
                                <h1>
                                    РАССРОЧКА
                                </h1>
                                <h2>
                                    На абонементы 3, 6 и 12 месяцев
                                </h2>
                                <div class="header__text">
                                    <div class="header__list-title colored">
                                        Занимайся больше, плати меньше!
                                    </div>
                                    <div class="header__list">
                                        - без %
                                    </div>
                                    <div class="header__list">
                                        - без переплат
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__form-content">
                <div class="header__form-container container">
                    <div class="wow fadeInRight header__form">
                        <form @submit.prevent="sendRequest">
                            <h1>Оставьте заявку</h1>
                            <h2>На пробную тренировку</h2>
                            <input type="text" placeholder="Введите ваше имя" required v-model="requestName">
                            <input type="email" placeholder="Введите ваш e-mail" required v-model="requestEmail">
                            <input v-mask="'+7 (###)-###-##-##'" type="text" placeholder="Введите номер телефона"
                                required v-model="requestPhone">
                            <button type="submit" :disabled="requestLoading">
                                <span v-if="!requestLoading">Записаться</span>
                                <span v-else>Загрузка...</span>
                            </button>
                            <!-- <label>
                                    <input type="checkbox" required>
                                    Я согласен с политикой конфиденциальности
                                </label> -->
                        </form>
                    </div>
                </div>
            </div>
            <div class="header__slider-pagination swiper-pagination"></div>
            <div class="header__actions">
                <div class="header__actions-container container">
                    <div class="header__slider-left slider-arrow">
                        <img src="<?php bloginfo('template_directory') ?>/images/header/slider-left.png" alt="slider-left">
                    </div>
                    <div class="header__slider-right slider-arrow">
                        <img src="<?php bloginfo('template_directory') ?>/images/header/slider-right.png" alt="slider-right">
                    </div>
                </div>
            </div>
        </div>
        <div class="header__form-container container in-mobile in-mobile-header">
            <div class="header__form">
                <form @submit.prevent="sendRequest">
                    <h1>Оставьте заявку</h1>
                    <h2>На пробную тренировку</h2>
                    <input type="text" placeholder="Введите ваше имя" required v-model="requestName">
                    <input type="email" placeholder="Введите ваш e-mail" required v-model="requestEmail">
                    <input v-mask="'+7 (###)-###-##-##'" type="text" placeholder="Введите номер телефона" required
                        v-model="requestPhone">
                    <button type="submit" :disabled="requestLoading">
                        <span v-if="!requestLoading">Записаться</span>
                        <span v-else>Загрузка...</span>
                    </button>
                    <label>
                        <input type="checkbox" required>
                        Я согласен с политикой конфиденциальности
                    </label>
                </form>
            </div>
        </div>
        <div class="sidebar">
            <div class="sidebar-header">
                <img src="<?php bloginfo('template_directory') ?>/images/logo.png" alt="logo">
                <img class="sidebar-close" src="<?php bloginfo('template_directory') ?>/images/close.png" alt="close">
            </div>
            <div class="sidebar-body">
                <div class="sidebar-links">
                    <a class="sidebar-link anchor" href="#home">
                        <span>01.</span>
                        Главная
                    </a>
                    <a class="sidebar-link anchor" href="#about">
                        <span>02.</span>
                        О нас
                    </a>
                    <a class="sidebar-link anchor" href="#types">
                        <span>03.</span>
                        Абонементы
                    </a>
                    <a class="sidebar-link anchor" href="#franchise">
                        <span>04.</span>
                        Франшиза
                    </a>
                    <a class="sidebar-link anchor" href="#reviews">
                        <span>05.</span>
                        Отзывы
                    </a>
                    <a class="sidebar-link anchor" href="#contacts">
                        <span>06.</span>
                        Контакты
                    </a>
                </div>
                <div class="sidebar-contacts">
                    <hr>
                    <a href="tel:+7 (775) 232 44 88">
                        +7 (775) 232 44 88
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="result-counter" id="about">
            <div class="result-counter__container container">
                <div class="wow fadeInUp result-counter-item" data-wow-delay=".2s">
                    <h1>
                        0.<span class="count">28</span>%
                    </h1>
                    <h2>
                        Столько процентов Вашего времени в месяц требуется на занятие
                    </h2>
                </div>
                <div class="wow fadeInUp result-counter-item" data-wow-delay=".2s">
                    <h1>
                        <span class="count">64</span> 000 тг
                    </h1>
                    <h2>
                        Вы экономите при покупке годового абонемента
                    </h2>
                </div>
                <div class="wow fadeInUp result-counter-item" data-wow-delay=".4s">
                    <h1>
                        <span class="count">30</span>
                        <span class="count">700</span>
                    </h1>
                    <h2>
                        Проведено персональных тренировок
                    </h2>
                </div>
                <div class="wow fadeInUp result-counter-item" data-wow-delay=".6s">
                    <h1>
                        <span class="count">-8</span> кг
                    </h1>
                    <h2>
                        Лучший результат за месяц
                    </h2>
                </div>
                <div class="wow fadeInUp result-counter-item" data-wow-delay=".8s">
                    <h1>
                        <span class="count">100</span>%
                    </h1>
                    <h2>
                        Результат при выполнении рекомендации тренера
                    </h2>
                </div>
            </div>
        </div>
        <div class="ems-about">
            <div class="ems-about__container container wow zoomIn">
                <p>
                    <strong>EnergyLife – </strong>
                    это сеть EMS-студий с европейской концепцией и
                    стандартами проведения тренировок направленных на общее
                    развитие всего тела.
                    Похудение/ Набор мышечной массы/ Реабилитация и тонус
                </p>
            </div>
        </div>
        <div class="ems-plus">
            <div class="ems-plus__container container">
                <div class="ems-plus__girl">
                    <div class="wow fadeIn ems-plus__girl-content ems-plus__girl-content1">
                        <button @click="showGirlText(1)">
                            <span v-if="girl_button === 1">-</span>
                            <span v-else>+</span>
                        </button>
                        <div v-show="girl_button === 1" class="ems-plus__girl-text">
                            Тонус и рельеф мышц
                        </div>
                    </div>
                    <div class="wow fadeIn ems-plus__girl-content ems-plus__girl-content2">
                        <button @click="showGirlText(2)">
                            <span v-if="girl_button === 2">-</span>
                            <span v-else>+</span>
                        </button>
                        <div v-show="girl_button === 2" class="ems-plus__girl-text">
                            Антивозрастной эффект
                        </div>
                    </div>
                    <div class="wow fadeIn ems-plus__girl-content ems-plus__girl-content3">
                        <button @click="showGirlText(3)">
                            <span v-if="girl_button === 3">-</span>
                            <span v-else>+</span>
                        </button>
                        <div v-show="girl_button === 3" class="ems-plus__girl-text">
                            Уменьшение целлюлита
                        </div>
                    </div>
                    <div class="wow fadeIn ems-plus__girl-content ems-plus__girl-content4">
                        <button @click="showGirlText(4)">
                            <span v-if="girl_button === 4">-</span>
                            <span v-else>+</span>
                        </button>
                        <div v-show="girl_button === 4" class="ems-plus__girl-text">
                            Уменьшение боли в спине
                        </div>
                    </div>
                    <div class="wow fadeIn ems-plus__girl-content ems-plus__girl-content5">
                        <button @click="showGirlText(5)">
                            <span v-if="girl_button === 5">-</span>
                            <span v-else>+</span>
                        </button>
                        <div v-show="girl_button === 5" class="ems-plus__girl-text">
                            Жиросжигание
                        </div>
                    </div>
                    <div class="wow fadeIn ems-plus__girl-content ems-plus__girl-content6">
                        <button @click="showGirlText(6)">
                            <span v-if="girl_button === 6">-</span>
                            <span v-else>+</span>
                        </button>
                        <div v-show="girl_button === 6" class="ems-plus__girl-text">
                            Укрепление поясничного отдела
                        </div>
                    </div>
                </div>
                <div class="ems-plus__content">
                    <h1 class="wow fadeInRight">
                        <span class="colored">Плюсы</span> наших тренировок
                    </h1>
                    <div class="ems-plus__list">
                        <div class="wow fadeInUp ems-plus__list-item" data-wow-delay=".2s">
                            <img src="<?php bloginfo('template_directory') ?>/images/plus/list1.svg" alt="list1">
                            <p>
                                Предлагаем <b>лучшее соотношение</b> стоимости
                                абонементов, <b>результата и персонализации</b> на рынке
                                EMS в РК
                            </p>
                        </div>
                        <div class="wow fadeInUp ems-plus__list-item" data-wow-delay=".4s">
                            <img src="<?php bloginfo('template_directory') ?>/images/plus/list2.svg" alt="list1">
                            <p>
                                Проводим <b>ежегодное обучение</b> ТОП-менеджмента и
                                тренерского состава Energy Life в Германии
                            </p>
                        </div>
                        <div class="wow fadeInUp ems-plus__list-item" data-wow-delay=".6s">
                            <img src="<?php bloginfo('template_directory') ?>/images/plus/list3.svg" alt="list1">
                            <p>
                                Мы работаем на оборудовании от мирового лидера
                                рынка EMS - <b>MIHA BODYTECH (Германия)</b>
                            </p>
                        </div>
                        <div class="wow fadeInUp ems-plus__list-item" data-wow-delay=".8s">
                            <img src="<?php bloginfo('template_directory') ?>/images/plus/list4.svg" alt="list1">
                            <p>
                                Energy Life - <b>единственная сеть EMS</b> - студий в РК
                                обладающая сертификатов <b> международного образца </b>,
                                выданного в Германии разработчиками технологии и оборудования
                            </p>
                        </div>
                    </div>
                    <a href="#home" role="button" class="wow pulse link-button anchor" data-wow-delay="1s">
                        Заказать звонок
                    </a>
                </div>
            </div>
        </div>
        <div class="ems-types" id="types">
            <div class="ems-types__container container">
                <h1 class="wow fadeInLeft">
                    Виды <span class="colored">абонементов</span>
                </h1>
                <h2 class="wow fadeInRight">
                    У нас есть тариф подходящий именно для вас! <br>
                    <b>+5 минутный сеанс массажа всего тела на тренажере MIHA BODYTEC в подарок!</b>
                </h2>
                <div class="ems-types__content">
                    <div class="ems-types__items">
                        <div class="wow fadeInUp ems-types__item" data-wow-delay=".2s">
                            <div class="ems-types__card">
                                <h1>1 мес.</h1>
                                <h2>За 1 тренировку/5 500тг</h2>
                                <div class="ems-types__list">
                                    <div class="ems-types__list-item">
                                        <img src="<?php bloginfo('template_directory') ?>/images/types/check.svg" alt="check">
                                        4 тренировки
                                    </div>
                                    <div class="ems-types__list-item">
                                        <img src="<?php bloginfo('template_directory') ?>/images/types/check.svg" alt="check">
                                        Заморозка 8 дней
                                    </div>
                                </div>
                            </div>
                            <button class="ems-types__button types-button">
                                Приобрести
                            </button>
                        </div>
                        <div class="wow fadeInUp ems-types__item" data-wow-delay=".4s">
                            <div class="ems-types__card">
                                <h1>INTENSIVE</h1>
                                <h2>За 1 тренировку/5 000 тг</h2>
                                <div class="ems-types__list">
                                    <div class="ems-types__list-item">
                                        <img src="<?php bloginfo('template_directory') ?>/images/types/check.svg" alt="check">
                                        8 тренировок
                                    </div>
                                    <div class="ems-types__list-item">
                                        <img src="<?php bloginfo('template_directory') ?>/images/types/check.svg" alt="check">
                                        Заморозка 8 дней
                                    </div>
                                </div>
                            </div>
                            <button class="ems-types__button types-button">
                                Приобрести
                            </button>
                        </div>
                        <div class="wow fadeInUp ems-types__item" data-wow-delay=".6s">
                            <div class="ems-types__card">
                                <h1>3 мес.</h1>
                                <h2>За 1 тренировку/5 000тг</h2>
                                <div class="ems-types__list">
                                    <div class="ems-types__list-item">
                                        <img src="<?php bloginfo('template_directory') ?>/images/types/check.svg" alt="check">
                                        12 тренировок
                                    </div>
                                    <div class="ems-types__list-item">
                                        <img src="<?php bloginfo('template_directory') ?>/images/types/check.svg" alt="check">
                                        Заморозка 15 дней
                                    </div>
                                </div>
                            </div>
                            <button class="ems-types__button types-button">
                                Приобрести
                            </button>
                        </div>
                    </div>
                    <div class="ems-types__items">
                        <div class="wow fadeInUp ems-types__item" data-wow-delay=".7s">
                            <div class="ems-types__card">
                                <h1>6 мес.</h1>
                                <h2>За 1 тренировку/4 500тг</h2>
                                <div class="ems-types__list">
                                    <div class="ems-types__list-item">
                                        <img src="<?php bloginfo('template_directory') ?>/images/types/check.svg" alt="check">
                                        24 тренировки
                                    </div>
                                    <div class="ems-types__list-item">
                                        <img src="<?php bloginfo('template_directory') ?>/images/types/check.svg" alt="check">
                                        Заморозка 20 дней
                                    </div>
                                </div>
                            </div>
                            <button class="ems-types__button types-button">
                                Приобрести
                            </button>
                        </div>
                        <div class="wow fadeInUp ems-types__item" data-wow-delay=".9s">
                            <div class="ems-types__card">
                                <h1>12 мес.</h1>
                                <h2>За 1 тренировку/4 167тг</h2>
                                <div class="ems-types__list">
                                    <div class="ems-types__list-item">
                                        <img src="<?php bloginfo('template_directory') ?>/images/types/check.svg" alt="check">
                                        48 тренировок
                                    </div>
                                    <div class="ems-types__list-item">
                                        <img src="<?php bloginfo('template_directory') ?>/images/types/check.svg" alt="check">
                                        Заморозка 30 дней
                                    </div>
                                </div>
                            </div>
                            <button class="ems-types__button types-button">
                                Приобрести
                            </button>
                        </div>
                        <div class="wow fadeInUp ems-types__item" data-wow-delay="1s">
                            <div class="ems-types__prices">
                                <div class="ems-types__price">
                                    <span>Пробная тренировка</span>
                                    <u class="type-dot"></u>
                                    <b>2 000 тг</b>
                                </div>
                                <div class="ems-types__price">
                                    <span>Разовое посещение</span>
                                    <u class="type-dot"></u>
                                    <b>7 000 тг</b>
                                </div>
                                <div class="ems-types__price">
                                    <span>Прокат костюма</span>
                                    <u class="type-dot"></u>
                                    <b>2 000 тг</b>
                                </div>
                                <div class="ems-types__price">
                                    <span>Носочки</span>
                                    <u class="type-dot"></u>
                                    <b>500 тг</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ems-types__dialog dialog">
                <div class="dialog-container">
                    <div class="ems-types__close dialog-close">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.76355" y="0.577148" width="20.1333" height="1.67778"
                                transform="rotate(45 1.76355 0.577148)" fill="#1A1A1A" />
                            <rect x="0.577148" y="14.8135" width="20.1333" height="1.67778"
                                transform="rotate(-45 0.577148 14.8135)" fill="#1A1A1A" />
                        </svg>
                    </div>
                    <h1>Оставьте заявку</h1>
                    <h2>На пробную тренировку</h2>
                    <form @submit.prevent="sendTypesRequest" class="dialog-form">
                        <input class="dialog-input" type="text" required placeholder="Ваше имя" v-model="typesName">
                        <input v-mask="'+7 (###)-###-##-##'" class="dialog-input" id="typesPhone" type="text" required
                            placeholder="Ваш номер" v-model="typesPhone">
                        <button class="dialog-button" type="submit" :disabled="typesLoading">
                            <span v-if="!typesLoading">Отправить</span>
                            <span v-else>Загрузка...</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="ems-test">
            <div class="ems-test__container container">
                <h1 class="wow fadeInLeft">
                    Узнайте подходят ли Вам <br>
                    <span class="colored">ЕМС тренировки?</span>
                </h1>
                <div class="wow fadeInRight ems-test__text">
                    <p>
                        Мы подготовили короткий тест, в конце которого <br>
                        вы узнаете подходят ли Вам ЕМС-тренировки
                    </p>
                    <img src="<?php bloginfo('template_directory') ?>/images/header/slider-right.png" alt="arrow">
                    <a href="https://mrqz.me/5d5e81c52ad2e80044ff9da4" target="blank" role="button"
                        class="link-button">Узнать!</a>
                </div>
            </div>
        </div>
        <div class="ems-reviews" id="reviews">
            <div class="ems-reviews__container container">
                <h1 class="wow fadeInLeft">
                    Вот что о нас говорят <br>
                    <span class="colored">наши клиенты</span>
                </h1>
                <h2 class="wow fadeInLeft">
                    <a href="https://www.youtube.com/playlist?list=PLrqF-Tbp98X37Qhj8xcjnYWwB5WRXVkqL" target="blank">
                        Посмотреть видео</a>
                </h2>
                <div class="wow pulse ems-reviews__slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="ems-reviews__image" src="<?php bloginfo('template_directory') ?>/images/reviews/review1.jpg" alt="review1">
                            <h1>Анастасия Балашева, бьюти-блогер</h1>
                            <button onclick="reviewText(1)">Прочитать отзыв</button>
                            <div class="ems-reviews__slide-text review-text-1">
                                <div class="ems-reviews__slide-close">
                                    <img onclick="closeReviewText(1)" src="<?php bloginfo('template_directory') ?>/images/reviews/close.svg" alt="close">
                                </div>
                                <p>
                                    «20 минут в неделю – трудно поверить, но это реально!
                                    Ощущения после тренировки – бодрость и приятный мышечный тонус!
                                    Выходишь окрыленной с каждого занятия.
                                    Большой плюс в том, что тренировки персонализированны,
                                    нет посторонних при занятиях»
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img class="ems-reviews__image" src="<?php bloginfo('template_directory') ?>/images/reviews/review2.jpg" alt="review2">
                            <h1>Дильназ Ахмадиева, певица </h1>
                            <button onclick="reviewText(2)">Прочитать отзыв</button>
                            <div class="ems-reviews__slide-text review-text-2">
                                <div class="ems-reviews__slide-close">
                                    <img onclick="closeReviewText(2)" src="<?php bloginfo('template_directory') ?>/images/reviews/close.svg" alt="close">
                                </div>
                                <p>
                                    «Друзья, живите ярко! Приходите в Energy Life!
                                    Я занимаюсь с удовольствием и успеваю при своем
                                    графике уделять время спорту и здоровью»
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img class="ems-reviews__image" src="<?php bloginfo('template_directory') ?>/images/reviews/review3.jpg" alt="review3">
                            <h1>Ася, блогер и визажист</h1>
                            <button onclick="reviewText(3)">Прочитать отзыв</button>
                            <div class="ems-reviews__slide-text review-text-3">
                                <div class="ems-reviews__slide-close">
                                    <img onclick="closeReviewText(3)" src="<?php bloginfo('template_directory') ?>/images/reviews/close.svg" alt="close">
                                </div>
                                <p>
                                    <p>
                                        «Уже месяц хожу на EMS в Energy Life и вот мои результаты:
                                        потеряла 2 кг за месяц занятий и 2 недели правильного питания;
                                        мышцы после тренировок болят – это хорошо, значит действительно работают!
                                        Чувствую себя энергичнее! EMS – самый классный вариант для работающих
                                        и мамочек – всего 1 раз в неделю на 20 минут»
                                    </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img class="ems-reviews__image" src="<?php bloginfo('template_directory') ?>/images/reviews/review4.jpg" alt="review4">
                            <h1>Анна, бизнес-леди</h1>
                            <button onclick="reviewText(4)">Прочитать отзыв</button>
                            <div class="ems-reviews__slide-text review-text-4">
                                <div class="ems-reviews__slide-close">
                                    <img onclick="closeReviewText(4)" src="<?php bloginfo('template_directory') ?>/images/reviews/close.svg" alt="close">
                                </div>
                                <p>
                                    <p>
                                        «Всем рекомендую – стройное тело
                                        гарантировано! 20 минут в неделю меняют
                                        жизнь к лучшему!»
                                    </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img class="ems-reviews__image" src="<?php bloginfo('template_directory') ?>/images/reviews/review5.jpg" alt="review5">
                            <h1>Анастасия Дирксен, блогер</h1>
                            <button onclick="reviewText(5)">Прочитать отзыв</button>
                            <div class="ems-reviews__slide-text review-text-5">
                                <div class="ems-reviews__slide-close">
                                    <img onclick="closeReviewText(5)" src="<?php bloginfo('template_directory') ?>/images/reviews/close.svg" alt="close">
                                </div>
                                <p>
                                    <p>
                                        «Пройдя несколько тренировок, уже стала
                                        видеть значимый результат. Форму выдают в
                                        студии, это очень удобно. Мышцы приходят
                                        в тонус, а еще это ооочень эффективно для
                                        уменьшения целлюлита! Очень нравится, что
                                        тренировки персональные, а еще для меня
                                        было важно, что тренировки проходят на
                                        самом качественном оборудовании»
                                    </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img class="ems-reviews__image" src="<?php bloginfo('template_directory') ?>/images/reviews/review6.jpg" alt="review6">
                            <h1>Евгения, клиентка Energy Life</h1>
                            <button onclick="reviewText(6)">Прочитать отзыв</button>
                            <div class="ems-reviews__slide-text review-text-6">
                                <div class="ems-reviews__slide-close">
                                    <img onclick="closeReviewText(6)" src="<?php bloginfo('template_directory') ?>/images/reviews/close.svg" alt="close">
                                </div>
                                <p>
                                    <p>
                                        «Хочу поделиться с Вами
                                        своим результатом! За три
                                        месяца занятий EMS в Energy
                                        Life я похудела на 15 килограмм!»
                                    </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img class="ems-reviews__image" src="<?php bloginfo('template_directory') ?>/images/reviews/review7.jpg" alt="review6">
                            <h1>Умутжан, коуч, мама</h1>
                            <button onclick="reviewText(7)">Прочитать отзыв</button>
                            <div class="ems-reviews__slide-text review-text-7">
                                <div class="ems-reviews__slide-close">
                                    <img onclick="closeReviewText(7)" src="<?php bloginfo('template_directory') ?>/images/reviews/close.svg" alt="close">
                                </div>
                                <p>
                                    <p>
                                        «Настоятельно рекомендую EMS мамам!
                                        Тело приходит в тонус, а еще EMS не
                                        только не вредит грудному вскармливанию,
                                        но и стимулирует его! Проверено на себе!»
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="ems-reviews__actions">
                        <div class="reviews__slider-left">
                            <img src="<?php bloginfo('template_directory') ?>/images/reviews/arrow-left.svg" alt="left">
                        </div>
                        <div class="swiper-pagination2"></div>
                        <div class="reviews__slider-right">
                            <img src="<?php bloginfo('template_directory') ?>/images/reviews/arrow-right.svg" alt="right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ems-test ems-test2">
            <div class="ems-test__container ems-test2__container container">
                <h1 class="wow fadeInLeft">
                    <span class="colored">
                        Получите небольшой подарок,
                    </span>
                    <br>
                    ответив всего на
                    5 вопросов
                </h1>
                <div class="ems-test2__text">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSd3_xW3k3gfkGRD1TmFHjcuYjivi30AVkHReOXy-C6G3fnfCQ/viewform"
                        target="blank" role="button" class="wow pulse link-button">Получить!</a>
                </div>
            </div>
        </div>
        <div class="ems-food">
            <div class="ems-food__container container">
                <h1 class="wow fadeInLeft">О коуче <span class="colored">по питанию</span></h1>
                <div class="ems-food__content">
                    <div class="wow bounceIn ems-food__image">
                        <img src="<?php bloginfo('template_directory') ?>/images/food/image.jpg" alt="iamge">
                    </div>
                    <div class="ems-food__text">
                        <h1 class="wow fadeInUp colored" data-wow-delay=".2s">Юлия Халикова</h1>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">Сертифицированный тренер по питанию</h2>
                        <div class="ems-food__list">
                            <div class="wow fadeInUp  ems-food__list-item" data-wow-delay=".4s">
                                <b>1.</b>Единственный в РК специалист, сертифицированный коуч PN1 Канадской школы
                                Precision Nutrition
                            </div>
                            <div class="wow fadeInUp ems-food__list-item" data-wow-delay=".5s">
                                <b>2.</b>Сертифицированный Health Coach Института Интегративного питания, Нью Йорк
                            </div>
                            <div class="wow fadeInUp ems-food__list-item" data-wow-delay=".6s">
                                <b>3.</b>Для клиентов студии Energy Life действует эксклюзивная скидка на услуги
                            </div>
                        </div>
                        <div class="ems-food__cards">
                            <div class="wow fadeInLeft ems-food__card-item" data-wow-delay=".7s">
                                <div class="ems-food__card food-card-1">
                                    <h2><s>20 000 ТГ</s></h2>
                                    <h1>10 000 ТГ</h1>
                                    <hr>
                                    <h3>
                                        Индивидуальная <br>
                                        консультация по питанию
                                    </h3>
                                </div>
                                <div class="ems-food__card-link">
                                    <a class="food-btn">Приобрести</a>
                                </div>
                            </div>
                            <div class="wow fadeInRight ems-food__card-item" data-wow-delay=".8s">
                                <div class="ems-food__card food-card-2">
                                    <h2><s>80 000 ТГ</s></h2>
                                    <h1>60 000 ТГ</h1>
                                    <hr>
                                    <h3>
                                        Индивидуальная
                                        консультация <br>
                                        8 недель сопровождения
                                    </h3>
                                </div>
                                <div class="ems-food__card-link">
                                    <a class="food-btn">Приобрести</a>
                                </div>
                            </div>
                            <div class="ems-food__dialog dialog">
                                <div class="dialog-container">
                                    <div class="ems-food__close dialog-close">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="1.76355" y="0.577148" width="20.1333" height="1.67778"
                                                transform="rotate(45 1.76355 0.577148)" fill="#1A1A1A" />
                                            <rect x="0.577148" y="14.8135" width="20.1333" height="1.67778"
                                                transform="rotate(-45 0.577148 14.8135)" fill="#1A1A1A" />
                                        </svg>
                                    </div>
                                    <h1>Оставьте заявку</h1>
                                    <h2>На консультацию по питанию</h2>
                                    <form @submit.prevent="sendFoodRequest" class="dialog-form">
                                        <input class="dialog-input" type="text" required placeholder="Ваше имя"
                                            v-model="foodName">
                                        <input v-mask="'+7 (###)-###-##-##'" class="dialog-input" type="text" required
                                            placeholder="Ваш номер" v-model="foodPhone">
                                        <button class="dialog-button" type="submit" :disabled="foodLoading">
                                            <span v-if="!foodLoading">Отправить</span>
                                            <span v-else>Загрузка...</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ems-questions">
            <div class="ems-questions__container container">
                <h1 class="wow fadeInLeft">Часто задаваемые <span class="colored">вопросы</span></h1>
                <div class="ems-questions__content">
                    <div class="wow fadeInUp ems-questions__card" data-wow-delay=".2s"
                        style="background-image: url('<?php bloginfo('template_directory') ?>/images/questions/q1.png')">
                        <h1 class="colored">01.</h1>
                        <h2>
                            Какие противопоказания есть к EMS?
                        </h2>
                        <hr>
                        <div class="ems-questions__text">
                            <h1>Полный список противопоказаний:</h1>
                            <p>
                                туберкулёз;
                                беременность;
                                наличие электронного кардиостимулятора;
                                эпилепсия;
                                злокачественная опухоль;
                                тяжелые нарушения местного кровообращения;
                                лихорадочные заболевания, острые бактериальные и вирусные процессы;
                                диабет;
                                грыжа брюшной стенки паха;
                                шунты, установленные менее 6 месяцев назад;
                                операции, проведённые менее 2 месяцев назад
                            </p>
                        </div>
                    </div>
                    <div class="wow fadeInUp ems-questions__card" data-wow-delay=".3s"
                        style="background-image: url('<?php bloginfo('template_directory') ?>/images/questions/q2.png')">
                        <h1 class="colored">02.</h1>
                        <h2>
                            Почему тренировка длится только 20 минут?
                        </h2>
                        <hr>
                        <div class="ems-questions__text">
                            <p>
                                EMS-тренировка на тренажерах
                                miha bodytec – это высокоинтенсивный вид
                                тренировки для всего тела.
                                Согласно исследованиям Университета
                                Байройта (Universität Bayreuth),
                                15-минутная EMS-тренировка всего тела
                                может вызвать в 18 раз более ускоренные
                                процессы адаптации, чем 60-минутные
                                интенсивные силовые тренировки с отягощениями.
                            </p>
                        </div>
                    </div>
                    <div class="wow fadeInUp ems-questions__card" data-wow-delay=".4s"
                        style="background-image: url('<?php bloginfo('template_directory') ?>/images/questions/q3.png')">
                        <h1 class="colored">03.</h1>
                        <h2>
                            Что нужно брать на тренировку?
                        </h2>
                        <hr>
                        <div class="ems-questions__text">
                            <p>
                                На тренировку можно приходить налегке – все
                                необходимое имеется в студиях. Душевые кабинки,
                                полотенца, принадлежности для душа.
                                Форма для тренировок также предоставляется в
                                студии
                            </p>
                        </div>
                    </div>
                    <div class="wow fadeInUp ems-questions__card" data-wow-delay=".5s"
                        style="background-image: url('<?php bloginfo('template_directory') ?>/images/questions/q4.jpg')">
                        <h1 class="colored">04.</h1>
                        <h2>
                            Достаточно ли тренироваться 1 раз в неделю?
                        </h2>
                        <hr>
                        <div class="ems-questions__text">
                            <p>
                                Поскольку EMS задействует за одну тренировку
                                до 90% мышц всего тела, включая глубокие
                                мышцы, период восстановления составляет 4-5 дней.
                                За каждую тренировку организм получает нагрузку,
                                эквивалентную 3 посещениям обычного спортзала,
                                однако не чувствует недомоганий – поскольку EMS
                                воздействует только на мышцы.
                            </p>
                        </div>
                    </div>
                    <div class="wow fadeInUp ems-questions__card" data-wow-delay=".6s"
                        style="background-image: url('<?php bloginfo('template_directory') ?>/images/questions/q5.jpg')">
                        <h1 class="colored">05.</h1>
                        <h2>
                            В каком возрасте можно заниматься EMS-тренировками?
                        </h2>
                        <hr>
                        <div class="ems-questions__text">
                            <p>
                                Заниматься можно с 18 лет. Верхнего порога
                                ограничений не существует – EMS безопасен
                                для людей пожилого возраста.
                            </p>
                        </div>
                    </div>
                    <div class="wow fadeInUp ems-questions__card" data-wow-delay=".7s"
                        style="background-image: url('<?php bloginfo('template_directory') ?>/images/questions/q6.png')">
                        <h1 class="colored">06.</h1>
                        <h2>
                            Как быстро можно похудеть?
                        </h2>
                        <hr>
                        <div class="ems-questions__text">
                            <p>
                                Процесс похудания – индивидуальный, и зависит
                                от многих факторов: питание, обмен веществ,
                                образ жизни, особенности организма и метаболизма.
                                Тренировки EMS персональны – тренер составляет
                                программу индивидуально для Вас и предлагает
                                рекомендации, которые способствуют наискорейшему
                                достижению целей.
                            </p>
                        </div>
                    </div>
                    <div class="wow fadeInUp ems-questions__card" data-wow-delay=".8s"
                        style="background-image: url('<?php bloginfo('template_directory') ?>/images/questions/q7.png')">
                        <h1 class="colored">07.</h1>
                        <h2>
                            Как EMS борется с целлюлитом?
                        </h2>
                        <hr>
                        <div class="ems-questions__text">
                            <p>
                                Тренировки EMS – эффективно и интенсивно
                                воздействуют на организм, разгоняют лимфу,
                                повышают общий тонус и укрепляют мышцы.
                                При активизации метаболических процессов
                                и дренаже происходит выведение жидкости,
                                которая и формирует целлюлит. EMS является
                                достаточно эффективным средством против целлюлита.
                            </p>
                        </div>
                    </div>
                    <div class="wow fadeInUp ems-questions__card" data-wow-delay=".9s"
                        style="background-image: url('<?php bloginfo('template_directory') ?>/images/questions/q8.png')">
                        <h1 class="colored">08.</h1>
                        <h2>
                            Как проходит массаж и для чего он нужен?
                        </h2>
                        <hr>
                        <div class="ems-questions__text">
                            <p>
                                Массаж производится на тренажере miha bodytec
                                после каждой тренировки. Он выполняет дренажную
                                и расслабляющую функцию. Благодаря
                                применению массажа, смягчается мышечная
                                боль после тренировок, а также положительное
                                воздействие оказывается на нервную систему
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ems-franchise" id="franchise">
            <div class="ems-franchise__container container">
                <h1 class="wow fadeInLeft">
                    Инновационный смарт-бизнес <br>
                    в формате франшизы с доходом <br>
                    <span class="colored">от 3 000 000 тг.</span> в месяц
                </h1>
                <h2 class="wow fadeInRight">
                    Мы осуществляем поддержку на всех этапах открытия Вашей студии!
                </h2>
                <div class="ems-franchise__content">
                    <div class="wow pulse ems-franchise__slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php bloginfo('template_directory') ?>/images/franchise/f1.png" alt="slide1">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php bloginfo('template_directory') ?>/images/franchise/f2.png" alt="slide2">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php bloginfo('template_directory') ?>/images/franchise/f3.png" alt="slide3">
                            </div>
                        </div>
                        <div class="ems-franchise__actions">
                            <div class="ems-franchise__left slider-arrow">
                                <img src="<?php bloginfo('template_directory') ?>/images/franchise/arrow-left.svg" alt="left">
                            </div>
                            <div class="swiper-pagination3"></div>
                            <div class="ems-franchise__right slider-arrow">
                                <img src="<?php bloginfo('template_directory') ?>/images/franchise/arrow-right.svg" alt="right">
                            </div>
                        </div>
                        <div class="link-video-container">
                            <a class="link-video"
                                href="https://www.youtube.com/playlist?list=PLrqF-Tbp98X37Qhj8xcjnYWwB5WRXVkqL"
                                target="blank">
                                Посмотреть видео.
                            </a>
                        </div>
                    </div>
                    <div class="wow flipInX ems-franchise__text">
                        <h1 class="colored">От 40 м2</h1>
                        <h2>Необходимо для открытия студии</h2>
                        <h1 class="colored">От 2-3 месяцев</h1>
                        <h2>Выход на окупаемость бизнеса</h2>
                        <h1 class="colored">0%</h1>
                        <h2>
                            Роялти отсутствует
                        </h2>
                        <a role="button" class="link-button franchise-btn">
                            Заказать консультацию
                        </a>
                    </div>
                </div>
            </div>
            <div class="ems-franchise__dialog dialog">
                <div class="dialog-container">
                    <div class="ems-franchise__close dialog-close">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.76355" y="0.577148" width="20.1333" height="1.67778"
                                transform="rotate(45 1.76355 0.577148)" fill="#1A1A1A" />
                            <rect x="0.577148" y="14.8135" width="20.1333" height="1.67778"
                                transform="rotate(-45 0.577148 14.8135)" fill="#1A1A1A" />
                        </svg>
                    </div>
                    <h1>Оставьте заявку</h1>
                    <h2>По вопросам франшизы</h2>
                    <form @submit.prevent="sendFranchiseRequest" class="dialog-form">
                        <input class="dialog-input" type="text" required placeholder="Ваше имя" v-model="franchiseName">
                        <input v-mask="'+7 (###)-###-##-##'" class="dialog-input" type="text" required
                            placeholder="Ваш номер" v-model="franchisePhone">
                        <button class="dialog-button" type="submit" :disabled="franchiseLoading">
                            <span v-if="!franchiseLoading">Отправить</span>
                            <span v-else>Загрузка...</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="ems-contacts" id="contacts">
            <div id="mymap"></div>
            <div class="mymap-container">
                <div class="wow jackInTheBox ems-contacts__container container">
                    <div class="ems-contacts__content">
                        <div class="flexible">
                            <div>
                                <h1>Контакты:</h1>
                                <h2 class="colored">Адрес:</h2>
                                <p>
                                    Достык 97, ЖК Самал Де Люкс
                                </p>
                                <a href="https://yandex.kz/maps/-/CGT3aSjv" target="blank">Показать на карте</a>
                                <p>
                                    Жамакаева, 254/2 блок Д2
                                </p>
                                <a href="https://yandex.kz/maps/-/CGT3aLKS" target="blank">Показать на карте</a>
                            </div>
                            <div class="flexible-image flexible-slider swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="<?php bloginfo('template_directory') ?>/images/franchise/f2.png" alt="slide1">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?php bloginfo('template_directory') ?>/images/franchise/f4.jpg" alt="slide2">
                                    </div>
                                </div>
                                <div class="swiper-pagination9"></div>
                            </div>
                        </div>
                        <div class="ems-contacts__items">
                            <div class="ems-contacts__item">
                                <h2 class="colored">Телефон:</h2>
                                <a href="tel:+7 (775) 232 44 88">+7 (775) 232 44 88</a>
                            </div>
                            <div class="ems-contacts__item">
                                <h2 class="colored">Почта:</h2>
                                <a href="mailto:energy.life.forever@gmail.com">energy.life.forever@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="wow fadeIn footer__container container">
            <div class="footer__logo">
                <a href="#home" class="anchor"><img src="<?php bloginfo('template_directory') ?>/images/footer/logo.png" alt="logo"></a>
            </div>
            <div class="footer__socials">
                <a href="https://www.youtube.com/channel/UCLJr3VolCBSLWdOSLeRL3Ig" target="blank">
                    <img src="<?php bloginfo('template_directory') ?>/images/footer/youtube.svg" alt="youtube">
                </a>
                <a href="https://www.instagram.com/energylifekz/" target="blank">
                    <img src="<?php bloginfo('template_directory') ?>/images/footer/instagram.svg" alt="instagram">
                </a>
                <a href="https://www.facebook.com/energylifekz/?ref=bookmarks" target="blank">
                    <img src="<?php bloginfo('template_directory') ?>/images/footer/facebook.svg" alt="facebook">
                </a>
            </div>
            <div class="footer__button">
                <a href="tel:+7 (775) 232 44 88" role="button">
                    Позвонить
                </a>
            </div>
        </div>
    </footer>
</div>
<?php get_footer(); ?>