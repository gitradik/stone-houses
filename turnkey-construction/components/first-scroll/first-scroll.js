
function onClickRadio(region) {
    document.getElementById('region_id').value = region;
    const labs = [...document.getElementsByClassName('labs')];

    for (let j = 0; j < labs.length; j++) {
        labs[j].classList.remove('activeLinkChoice');
    }
    const radioZp = document.getElementById('radioZpId');
    const radioDnepr = document.getElementById('radioDneprId');
    if(region === 'zp') {
        radioDnepr.checked = false;
        radioZp.checked = true;
        labs[0].classList.add('activeLinkChoice');
    } else if (region === 'dnepr') {
        radioZp.checked = false;
        radioDnepr.checked = true;
        labs[1].classList.add('activeLinkChoice');
    }
}

const inputPhoneFirstFrom = document.getElementById('input_phone_first_from_id');

const submitBtnFirstForm = document.getElementById('submit_btn_first_form_id');

const im = new Inputmask("+380999999999");
im.mask(inputPhoneFirstFrom);

function onBlurPhone(value) {
    if(/^\+?3?8?(0\d{9})$/.test(value)) {
        inputPhoneFirstFrom.classList.remove('invalid-phone');
    } else {
        inputPhoneFirstFrom.classList.add('invalid-phone');
    }
}

function onChangePhone(value) {
    if(/^\+?3?8?(0\d{9})$/.test(value)) {
        submitBtnFirstForm.disabled = false;
    } else {
        submitBtnFirstForm.disabled = true;
    }
}

$(".first-scroll-slick").slick({
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '<button class="arrow-slider prev-arrow"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="arrow-slider next-arrow"><i class="fas fa-chevron-right"></i></button>',
});

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});

















