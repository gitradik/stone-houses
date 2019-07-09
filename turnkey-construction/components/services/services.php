<style>
    <?php include 'services.css'; ?>
</style>

<div id="prod-link" class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">наши услуги</div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4>Строительство</h4>
                    </div>
                    <div class="col-md-12">

                        <div class="service-item">
                            <img src="<?php echo get_template_directory_uri() ?>/turnkey-construction/assets/images/services/proekt_gr.svg" alt="proekt_gr">
                            <div class="item-text">
                                <span>ПРОЕКТИРОВАНИЕ</span>
                                <span>Индивидуальная разработка проекта дома, с адаптацией к участку застройки. Полный комплект документов для регистрации.</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">

                        <div class="service-item">
                            <img src="<?php echo get_template_directory_uri() ?>/turnkey-construction/assets/images/services/stroit_gr.svg" alt="stroit_gr">
                            <div class="item-text">
                                <span>СТРОИТЕЛЬСТВО</span>
                                <span>Квалифицированное проведение строительно- монтажных работ на основе постоплатной системы. Гарантия качества и надежности.</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">

                        <div class="service-item">
                            <img src="<?php echo get_template_directory_uri() ?>/turnkey-construction/assets/images/services/inzh_seti_gr.svg" alt="inzh_seti_gr">
                            <div class="item-text">
                                <span>ИНЖЕНЕРНЫЕ СЕТИ</span>
                                <span>Комплексные решения по отоплению, электрике, а также водоснабжению и канализации с предоставлением гарантии.</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">

                        <div class="service-item min-h-40">
                            <img src="<?php echo get_template_directory_uri() ?>/turnkey-construction/assets/images/services/reconstr_gr.svg" alt="reconstr_gr">
                            <div class="item-text">
                                <span>РЕКОНСТРУКЦИЯ</span>
                                <span>Большой опыт по достройке и реконструкции существующих строений. Индивидуальный подход и доступная стоимость работ.</span>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="btns">
                            <button onblur="onClickLocation('Наши проекты => Строительство')"
                                    onclick="setTitleModalForm('НАШИ УСЛУГИ/СТРОИТЕЛЬСТВО')"
                                    data-toggle="modal"
                                    data-target="#formModal">
                                Подробнее
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6 ptop-sm-5">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4>Ремонтные работы</h4>
                    </div>
                    <div class="col-md-12">

                        <div class="service-item">
                            <img src="<?php echo get_template_directory_uri() ?>/turnkey-construction/assets/images/services/stroymat_gr.svg" alt="stroymat_gr">
                            <div class="item-text">
                                <span>СТРОЙМАТЕРИАЛЫ</span>
                                <span>Помощь в выборе строительных материалов и расчет необходимого количества. Привлекательные цены и грамотная логистика.</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="service-item">
                            <img src="<?php echo get_template_directory_uri() ?>/turnkey-construction/assets/images/services/proekt_gr.svg" alt="proekt_gr">
                            <div class="item-text">
                                <span>ПРОЕКТИРОВАНИЕ</span>
                                <span>Индивидуальная разработка проекта ремонта квартир. Услуга "авторский надзор".</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="service-item">
                            <img src="<?php echo get_template_directory_uri() ?>/turnkey-construction/assets/images/services/otdel_gr.svg" alt="otdel_gr">
                            <div class="item-text">
                                <span>ОТДЕЛОЧНЫЕ РАБОТЫ</span>
                                <span>Полный спектр услуг, включающий фасадные работы, а также внутреннюю отделку по индивидуальному дизайн-проекту.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="service-item min-h-40">
                            <img src="<?php echo get_template_directory_uri() ?>/turnkey-construction/assets/images/services/blag_gr.svg" alt="blag_gr">
                            <div class="item-text">
                                <span>ВСЕ ВКЛЮЧЕНО</span>
                                <span>В стоимость входят все работы, черновые материалы, менеджмент и логистика.</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="btns">
                            <button onclick="redirectToHome()">
                                Подробнее
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>