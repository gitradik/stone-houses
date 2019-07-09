<!doctype html>
<html lang="en">
<link>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap&subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/156ff390ba.js"></script>
    <link rel="stylesheet" href="<?= get_template_directory_uri()?>/node_modules/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri()?>/node_modules/slick-carousel/slick/slick-theme.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri()?>/turnkey-construction/utils/loader.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri()?>/node_modules/aos/dist/aos.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/node_modules/ekko-lightbox/dist/ekko-lightbox.css">

    <link rel="stylesheet" href="<?= get_template_directory_uri()?>/turnkey-construction/components/first-scroll/fs.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri()?>/turnkey-construction/components/first-scroll/first-scroll.css">


    <title>Stone Houses</title>


</head>
<body>
<div class="page">
<!-- Navbar start	 -->
<nav id="nav" class="navbar fixed-top navbar-expand-xl">
    <a class="navbar-brand nav-link-new m-0" href="/">
        <img class="img-fluid" src="<?php bloginfo(template_url);?>/img/logo.png">
        <!-- <p>Алза Строй</p> -->
    </a>
    <div class="m-auto p-0 text-center d-xl-none">
        <a class="anim nav-link nav-link-new p-0" href="tel:+380683306111"><span style="font-size: 12px">г. Днепр, г. Запорожье</span></a>
        <a class="anim nav-link nav-link-new p-0" href="tel:+380683306111"><span>+38 (068) 330-61-11</span></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="ml-auto mr-auto navbar-nav">
            <li class="nav-item mr-xl-4 d-flex align-items-center text-center">
                <a class="nav-link nav-link-new msgIcon ml-auto mr-2" href="viber://chat?number=+380639794404"><span><i
                                class="fab fa-viber"></i></span></a>
                <a class="nav-link nav-link-new msgIcon mr-auto" href="tg://resolve?domain=alzastroy"><span><i
                                class="fab fa-telegram"></i></span></a>
            </li>
            <li class="nav-item mr-xl-5 d-none d-xl-inline">
                <a class="anim nav-link nav-link-new p-0" href="tel:+380683306111"><span style="font-size: 12px">г. Днепр, г. Запорожье</span></a>
                <a class="anim nav-link nav-link-new p-0" href="tel:+380683306111"><span>+38 (068) 330-61-11</span></a>
            </li>
            <li class="nav-item br_m"><a class="anim nav-link nav-link-new" href="#about-link"><span>О нас</span></a></li>
            <li class="nav-item br_m"><a class="anim nav-link nav-link-new" href="#prod-link"><span> Услуги</span></a></li>
            <li class="nav-item"><a class="anim nav-link nav-link-new" href="#cont-link"><span> Контакты</span></a></li>
        </ul>
    </div>
</nav>
<!-- Navbar end	 -->
    <section  class="title-scroll">
        <div class="back" data-aos="zoom-in" data-aos-duration="800"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5 pt-2 d-flex justify-content-start">

                </div>
                <div class="col-md-12 text-center" data-aos="zoom-in" data-aos-duration="1000">
                    <h1 data-aos="zoom-in" data-aos-duration="1200">
                        Строительство домов и коттеджей <span>"Под Ключ"</span>
                    </h1>
                    <ul class="center-list">
                        <li>
                            <h3 data-aos="zoom-in" data-aos-duration="1400"> Индивидуальный подход</h3>


                            </i>
                        </li>
                        <li>
                            <h3 data-aos="zoom-in" data-aos-duration="1600"> Современное оборудование</h3>
                                                 </li>
                        <li>
                            <h3 data-aos="zoom-in" data-aos-duration="1800"> Авторский и технический надзор</h3>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-start">
                    <div class="col-md-12 text-center">
                        <ul class="bottom-offer">
                            <hr>
                            <li data-aos="zoom-in" data-aos-duration="2000">
                                <h3>Выполняем работы любой сложности,<br> осуществим вашу задумку в срок и с гарантией качества!</h3>
                            </li>
                            <hr>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <a href="#top" class="slow-a button-down"><i class="fas fa-arrow-down"></i></a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-back">
                    <form class="myFirstForm form-modal telegram">
                        <div id="loaderFormModalId" class="back-loader d-none">
                            <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                        </div>

                        <div class="form-title">
                            Заполните форму<br> и получите<br> <span>БЕСПЛАТНУЮ</span><br>
                            консультацию специалиста <br><span>на объекте</span>
                        </div>
                        <div class="input-box">
                            <input type="text" name="NAME" placeholder="Имя">
                        </div>
                        <div class="input-box">
                            <input id="inputPhoneFormModalId"
                                   type="text"
                                   name="PHONE"
                                   placeholder="Телефон"
                                   onkeyup="onChangePhoneFormModal(value)"
                                   onblur="onBlurPhoneFormModal(value)"
                            >
                        </div>

                        <input id="locationHiddenFormModalId" type="text" name="LOCATION" hidden>
                        <button id="submitFormModalId" disabled>Отправить</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'turnkey-construction/components/first-scroll/first-scroll.php'?>
    <?php require_once 'turnkey-construction/components/about-us/about-us.php'?>
    <?php require_once 'turnkey-construction/components/advantages/advantages.php'?>
    <?php require_once 'turnkey-construction/components/construction-time/construction-time.php'?>
    <?php require_once 'turnkey-construction/components/working/working.php'?>
    <?php require_once 'turnkey-construction/components/projects/projects.php'?>
    <?php require_once 'turnkey-construction/components/weCreated/weCreated.php'?>
    <?php require_once 'turnkey-construction/components/services/services.php'?>
    <?php require_once 'turnkey-construction/components/footer/footer.php'?>

</div>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= get_template_directory_uri(); ?>/node_modules/slick-carousel/slick/slick.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/turnkey-construction/utils/inputmask.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/turnkey-construction/components/first-scroll/first-scroll.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/turnkey-construction/components/footer/footer.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/turnkey-construction/utils/slowScrolling.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/turnkey-construction/utils/telegram.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/turnkey-construction/utils/main.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/node_modules/aos/dist/aos.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/node_modules/ekko-lightbox/dist/ekko-lightbox.min.js"></script>

<script>
    AOS.init();
</script>
</body>
</html>