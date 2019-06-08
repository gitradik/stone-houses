<style>
    <?php include 'first-scroll.css'; ?>
</style>


<div class="first-scroll">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <a class="home-link" href="/">
                    <div>
                        <img src="<?= get_template_directory_uri() ?>/turnkey-construction/assets/logo.jpg" alt="logo">
                    </div>
                </a>
            </div>
            <div id="top"  class="col-md-12 text-center">
                <h1>
                    Индивидуальные решения строительства домов и коттеджей  под "Ключ"
                </h1>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-4 text-center d-flex align-items-center">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="3000">
                            <div style="background-image: url('<?= get_template_directory_uri() ?>/turnkey-construction/assets/images/6.jpg')">

                            </div>
                        </div>
                        <div class="carousel-item" data-interval="3000">
                            <div style="background-image: url('<?= get_template_directory_uri() ?>/turnkey-construction/assets/images/4.jpg')">

                            </div>
                        </div>
                        <div class="carousel-item" data-interval="3000">
                            <div style="background-image: url('<?= get_template_directory_uri() ?>/turnkey-construction/assets/images/3.jpg')">

                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
            <div class="col-md-6 col-xl-4">
                <div class="choice">
                    <h4>Выберите регион строительства:</h4>
                    <form name="myFormRadio" class="links">
                        <label class="labs">
                            <input name="radioFirstScroll" type="radio" value="zp">
                            <div class="bullet">
                                <div class="line zero"></div>
                                <div class="line one"></div>
                                <div class="line two"></div>
                                <div class="line three"></div>
                                <div class="line four"></div>
                                <div class="line five"></div>
                                <div class="line six"></div>
                                <div class="line seven"></div>
                            </div>
                            <div class="link-icon" style="background-image: url('<?= get_template_directory_uri() ?>/turnkey-construction/assets/images/zpLink.jpg')"></div>
                            <span>Запорожье и Запорожская область</span>
                        </label>
                        <label class="labs">
                            <input name="radioFirstScroll" type="radio" value="dnepr">
                            <div class="bullet">
                                <div class="line zero"></div>
                                <div class="line one"></div>
                                <div class="line two"></div>
                                <div class="line three"></div>
                                <div class="line four"></div>
                                <div class="line five"></div>
                                <div class="line six"></div>
                                <div class="line seven"></div>
                            </div>
                            <div class="link-icon" style="background-image: url('<?= get_template_directory_uri() ?>/turnkey-construction/assets/images/dneprLink.jpg')"></div>
                            <span>Днепропетровск и Днепропетровская область</span>
                        </label>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="form-back">
                    <form name="myFirstForm" class="myFirstForm telegram" method="POST">
                        <div id="loader_id" class="back-loader d-none">
                            <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                        </div>

                        <div class="form-title">
                            Заполните форму и получите <span>БЕСПЛАТНУЮ</span>
                            консультацию специалиста на объекте
                        </div>
                        <input type="text" name="SQUARE" placeholder="Площадь м2">
                        <input type="text" name="NAME" placeholder="Имя">
                        <input id="input_phone_first_from_id"
                               type="text"
                               name="PHONE"
                               placeholder="Телефон"
                               onkeyup="onChangePhone(value)"
                               onblur="onBlurPhone(value)"
                        >
                        <input id="region_id" type="text" value="zp" name="REGION" hidden>
                        <button id="submit_btn_first_form_id" disabled>Получить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

