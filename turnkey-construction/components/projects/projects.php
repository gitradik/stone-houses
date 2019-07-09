<style>
    <?php include 'projects.css'; ?>
</style>

<div class="projects">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 data-aos="fade-right" data-aos-offset="30" data-aos-duration="1000">Наши проекты</h2>
            </div>
            <div class="col-md-6">
                <div class="card" data-aos="fade-right" data-aos-offset="30" data-aos-duration="1000">
                    <h4>Строительство</h4>
                    <div class="image-block" style="background-image: url('<?php echo get_template_directory_uri() ?>/turnkey-construction/assets/images/projects/image1.png')">
                        <div class="text">
                            Выполняем строительство домов  и коттеджов, под Ключ, с индивидуальным подходом, авторским надзором и с гарантией качества
                        </div>
                    </div>
                    <button onblur="onClickLocation('Наши проекты => Строительство')"
                            onclick="setTitleModalForm('Наши проекты/Строительство')"
                            data-toggle="modal"
                            data-target="#formModal">
                        подробнее
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" data-aos="fade-left" data-aos-offset="30" data-aos-duration="1000">
                    <h4>Ремонтные работы</h4>
                    <div class="image-block" style="background-image: url('<?php echo get_template_directory_uri() ?>/turnkey-construction/assets/images/projects/image2.jpg')">
                        <div class="text">
                            Выполняем строительство домов  и коттеджов, под Ключ, с индивидуальным подходом, авторским надзором и с гарантией качества
                        </div>
                    </div>
                    <button onclick="redirectToHome()">подробнее</button>
                </div>
            </div>
        </div>
    </div>
</div>