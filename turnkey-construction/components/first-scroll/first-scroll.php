

<div id="top" class="first-scroll">

    <hr class="mt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-4 pb-5 pb-xl-0">
                <div class="first-scroll-slick slick-slider" data-aos="fade-right" data-aos-offset="30" data-aos-duration="1000">
                    <div>
                        <a href="<?php echo get_template_directory_uri() ?>/turnkey-construction/assets/images/slider/home-1.png" class="my-slick-item" data-toggle="lightbox" data-gallery="example-gallery"
                             style="background-image: url('<?php echo get_template_directory_uri() ?>/turnkey-construction/assets/images/slider/home-1.png')">

                        </a>
                    </div>
                    <div>
                        <a href="<?php echo get_template_directory_uri() ?>/turnkey-construction/assets/images/slider/home-2.png" class="my-slick-item" data-toggle="lightbox" data-gallery="example-gallery"
                             style="background-image: url('<?php echo get_template_directory_uri() ?>/turnkey-construction/assets/images/slider/home-2.png')">

                        </a>
                    </div>
                    <div>
                        <a href="<?php echo get_template_directory_uri() ?>/turnkey-construction/assets/images/slider/home-3.png" class="my-slick-item" data-toggle="lightbox" data-gallery="example-gallery"
                             style="background-image: url('<?php echo get_template_directory_uri() ?>/turnkey-construction/assets/images/slider/home-3.png')">

                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="choice">
                    <h4 data-aos="fade-down" data-aos-offset="30" data-aos-duration="1000">Выберите регион строительства:</h4>
                    <form name="myFormRadio" class="links">
                        <label data-aos="fade-up" data-aos-offset="30" data-aos-duration="1000" onclick="onClickRadio('zp')" class="labs activeLinkChoice">
                            <input checked id="radioZpId" type="radio" value="zp">
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
                        <label data-aos="fade-up" data-aos-offset="100" data-aos-duration="1500" data-aos="fade-up" data-aos-duration="1000" onclick="onClickRadio('dnepr')" class="labs">
                            <input id="radioDneprId" type="radio" value="dnepr">
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
                    <form data-aos="fade-left" data-aos-offset="30" data-aos-duration="1000" onkeypress="onClickLocation('Первый скролл')" name="myFirstForm" class="myFirstForm telegram" method="POST">
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
                        <input type="text" value="First scroll" name="LOCATION" hidden>
                        <button id="submit_btn_first_form_id" disabled>Получить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

