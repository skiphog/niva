<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <!-- Title-->
    <title>Профиль</title>
    <!-- Favicon-->
    <link rel="icon" type="image/svg+xml" href="/img/core-img/logo.svg">
    <!-- Core Stylesheet-->
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<!-- Preloader-->
<div class="preloader" id="preloader">
    <div class="spinner-grow text-light" role="status"><span class="sr-only">Загрузка...</span></div>
</div>
<!-- Header Area-->
<header class="header-area header2">
    <div class="container">
        <div class="classy-nav-container breakpoint-off">
            <nav class="classy-navbar navbar2 justify-content-between" id="saasboxNav">
                <!-- Logo--><a class="nav-brand mr-5" href="/"><img src="/img/core-img/logo.png" alt=""></a>
                <!-- Navbar Toggler-->
                <div class="classy-navbar-toggler"><span class="navbarToggler"><span></span><span></span><span></span><span></span></span></div>
                <!-- Menu-->
                <div class="classy-menu">
                    <!-- close btn-->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start-->
                    <div class="classynav">
                        <ul id="corenav">
                            <li><a href="/">Главная</a></li>
                            <li><a href="#">Отзывы</a></li>
                            <li><a href="/blog">Блог</a></li>
                            <li><a href="#">Компании</a></li>
                            <li><a href="/contacts">Контакты</a></li>
                        </ul>
                        <!-- Login Button-->
                        <div class="login-btn-area ml-4 mt-4 mt-lg-0"><a class="btn saasbox-btn btn-sm" href="#">Войти</a></div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- Breadcrumb Area-->
<div class="breadcrumb--area bg-img bg-overlay jarallax" style="background-image: url('/img/custom-img/profile.jpg');">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb-title">Профиль</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Главная</a></li>
                            <li class="breadcrumb-item"><a href="#">Профиль</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<div class="col-12">--}}
{{--    <div class="breadcrumb-content">--}}
{{--        <nav aria-label="breadcrumb">--}}
{{--            <ol class="breadcrumb justify-content-left">--}}
{{--                <li class="breadcrumb-item"><a href="/">Главная</a></li>--}}
{{--                <li class="breadcrumb-item active" aria-current="page"><a href="#">Отзывы</a></li>--}}
{{--                <li class="breadcrumb-item active" aria-current="page"><a href="#">"Большая кормушка"</a></li>--}}
{{--            </ol>--}}
{{--        </nav>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Profile Area-->
<div class="profile-area profile-page section-padding-120">
    <div class="container position-relative zindex-5 pb-4 mb-md-3">
        <div class="row">
            <!-- Sidebar-->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="bg-white rounded-3 shadow">
                    <div class="px-4 py-4 mb-1 text-center"><img class="d-block rounded-circle mx-auto my-2" src="/img/custom-img/Hanna.jpg" alt="Ханна Вилсон" width="110">
                        <h6 class="mb-0 pt-1">Ханна Вилсон</h6><span class="text-muted fs-sm">@hanna_w</span>
                    </div>
                    <div class="d-lg-none px-4 pb-4 text-center"><a class="btn btn-primary px-5 mb-2" href="#" data-bs-toggle="collapse">Меню</a></div>
                    <div class="d-lg-block collapse pb-2" id="account-menu">
                        <h3 class="d-block bg-light fs-sm fw-semibold text-muted mb-0 px-4 py-3">Статистика</h3>
                        <a class="d-flex align-items-center nav-link-style px-4 py-3" href="#">Отзывы<span class="nav-indicator"></span><span class="text-muted fs-sm fw-normal ms-auto">7</span></a>
                        <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="#">Посты<span class="text-muted fs-sm fw-normal ms-auto">2</span></a>
                        <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="#">Друзья<span class="nav-indicator"></span><span class="text-muted fs-sm fw-normal ms-auto">100</span></a>
                        <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="#">Подписчики<span class="text-muted fs-sm fw-normal ms-auto">34</span></a>
                        <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="#">Избранное<span class="text-muted fs-sm fw-normal ms-auto">15</span></a>
                        <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="#">Награды<span class="text-muted fs-sm fw-normal ms-auto">6</span></a>
                        <h3 class="d-block bg-light fs-sm fw-semibold text-muted mb-0 px-4 py-3">Настройки</h3><a class="d-flex align-items-center nav-link-style px-4 py-3 active" href="#">Активность</a><a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="#">Способы связи</a>
                        <div class="d-flex align-items-center border-top"><a class="d-block w-100 nav-link-style px-4 py-3" href="#">Уведомления</a>
                            <div class="ms-auto px-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="notifications-switch" data-master-checkbox-for="#notification-settings" checked="">
                                    <label class="form-check-label" for="notifications-switch"></label>
                                </div>
                            </div>
                        </div><a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="#">Выйти</a>
                    </div>
                </div>
            </div>
            <!-- Content-->
            <div class="col-lg-8">
                <div class="d-flex flex-column h-100 bg-white rounded-3 shadow p-4">
                    <div class="py-2 p-md-3">
                        <!-- Title + Delete link-->
                        <div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-start">
                            <h1 class="h3 mb-2 text-nowrap">Информация профиля</h1><a class="btn btn-link text-danger fw-medium btn-sm mb-2" href="#">Удалить аккаунт</a>
                        </div>
                        <!-- Content-->
                        <div class="bg-light rounded-3 p-4 mb-4">
                            <div class="d-block d-sm-flex align-items-center"><img class="d-block rounded-circle mx-sm-0 mx-auto mb-3 mb-sm-0" src="/img/custom-img/Hanna.jpg" alt="Ханна Вилсон" width="110">
                                <div class="ps-sm-3 text-center text-sm-start">
                                    <button class="btn btn-light bg-white shadow-sm btn-sm mb-2" type="button">Изменить аватар</button>
                                    <div class="p mb-0 fs-ms text-muted">Загрузите изображение в формате JPG, GIF или PNG.<br>Рекомендуемый размер 300px x 300px.</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3 pb-1">
                                    <label class="form-label px-0" for="account-fn">Имя</label>
                                    <input class="form-control" type="text" id="account-fn" value="Ханна">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3 pb-1">
                                    <label class="form-label px-0" for="account-ln">Фамилия</label>
                                    <input class="form-control" type="text" id="account-ln" value="Вилсон">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3 pb-1">
                                    <label class="form-label px-0" for="account-email">Email</label>
                                    <input class="form-control" type="text" id="account-email" value="h.wilson@example.com">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3 pb-1">
                                    <label class="form-label px-0" for="account-username">Имя пользователя</label>
                                    <div class="input-group"><span class="input-group-text">@</span>
                                        <input class="form-control" type="text" id="account-username" value="hanna_w">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3 pb-1">
                                    <label class="form-label px-0" for="account-country">Страна</label>
                                    <select class="form-select" id="account-country">
                                        <option value="">Select country</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="France">France</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Spain">Spain</option>
                                        <option value="UK">United Kingdom</option>
                                        <option value="USA" selected="">Российская Федерация</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3 pb-1">
                                    <label class="form-label px-0" for="account-city">Город</label>
                                    <input class="form-control" type="text" id="account-city" value="Москва">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3 pb-1">
                                    <label class="form-label px-0" for="account-address">Адрес</label>
                                    <input class="form-control" type="text" id="account-address" value="Some Cool Street">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3 pb-1">
                                    <label class="form-label px-0" for="account-zip">ZIP Code</label>
                                    <input class="form-control" type="text" id="account-zip">
                                </div>
                            </div>
                            <div class="col-12">
                                <hr class="mt-2 mb-4">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="form-check d-block">
                                        <input class="form-check-input" type="checkbox" id="show-email" checked="">
                                        <label class="form-check-label" for="show-email">Показывать мой email зарегистрированным пользователям</label>
                                    </div>
                                    <button class="btn btn-primary mt-3 mt-sm-0" type="button">Сохранить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Area-->
<footer class="footer-area section-padding-120">
    <div class="container">
        <div class="row justify-content-between">
            <!-- Footer Widget Area-->
            <div class="col-12 col-sm-10 col-lg-3">
                <div class="footer-widget-area mb-70"><a class="d-block mb-4" href="/"><img src="img/core-img/logo-white.png" alt=""></a>
                    <p>По всем вопросам сотрудничества, Вы можете связаться с нами через форму обратной связи и с помощью социальных сетей, указанных ниже</p>
                    <div class="newsletter-form">
                        <form action="#">
                            <input class="form-control" type="email" placeholder="Ваш email">
                            <button class="btn d-none" type="submit">Go</button>
                        </form>
                    </div>
                    <div class="footer-social-icon d-flex align-items-center"><a href="#" data-toggle="tooltip" data-placement="top" title="Facbook"><i class="fa fa-facebook"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube"></i></a></div>
                </div>
            </div>
            <!-- Footer Widget Area-->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="footer-widget-area mb-70">
                    <h5 class="widget-title">Оставить отзыв</h5>
                    <ul>
                        <li><a href="#" target="_blank">о компании</a></li>
                        <li><a href="#" target="_blank">о сайте</a></li>
                        <li><a href="#" target="_blank">о товаре</a></li>
                        <li><a href="#" target="_blank">о фильме</a></li>
                    </ul>
                </div>
            </div>
            <!-- Footer Widget Area-->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="footer-widget-area mb-70">
                    <h5 class="widget-title">Карта сайта</h5>
                    <ul>
                        <li><a href="#" target="_blank">Отзывы</a></li>
                        <li><a href="/blog" target="_blank">Блог</a></li>
                        <li><a href="#" target="_blank">Компании</a></li>
                        <li><a href="#" target="_blank">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <!-- Footer Widget Area-->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="footer-widget-area mb-70">
                    <h5 class="widget-title">Правила</h5>
                    <ul>
                        <li><a href="#" target="_blank">FAQ</a></li>
                        <li><a href="#" target="_blank">Информация для авторов</a></li>
                        <li><a href="#" target="_blank">Информация для компаний</a></li>
                        <li><a href="#" target="_blank">Лицензионное соглашение</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 col-lg-5">
                <!-- Copywrite Text-->
                <div class="footer--content-text">
                    <p class="mb-0">2021 <a href="#" target="_blank">Отзовик</a></p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5">
                <!-- Footer Nav-->
                <div class="footer-nav">
                    <ul class="d-flex">
                        <li><a href="#" target="_blank">О проекте</a></li>
                        <li><a href="#" target="_blank">Политика</a></li>
                        <li><a href="#" target="_blank">Поддержка</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-2">
                <!-- Default dropup button-->
                <div class="language-dropdown text-center text-lg-right mt-4 mt-lg-0">
                    <div class="btn-group dropup">
                        <button class="btn saasbox-btn-2 dropdown-toggle text-white" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Выбор языка</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><span class="mr-2 flag-icon flag-icon-ru"></span>Русский</a>
                            <a class="dropdown-item" href="#"><span class="mr-2 flag-icon flag-icon-us"></span>English</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- All JavaScript Files-->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/default/classy-nav.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/default/jquery.scrollup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/default/isotope.pkgd.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animatedheadline.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jarallax.min.js"></script>
<script src="js/jarallax-video.min.js"></script>
<script src="js/default/cookiealert.js"></script>
<script src="js/default/jquery.passwordstrength.js"></script>
<script src="js/default/mail.js"></script>
<script src="js/default/active.js"></script>
</body>
</html>