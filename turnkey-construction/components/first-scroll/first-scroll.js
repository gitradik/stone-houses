const radioBtns = document.myFormRadio.radioFirstScroll;
const inputPhoneFirstFrom = document.getElementById('input_phone_first_from_id');
const labs = document.getElementsByClassName('labs');
const inputRegion = document.getElementById('region_id');
const submitBtnFirstForm = document.getElementById('submit_btn_first_form_id');
const regexAllPhoneUkraine = /^\+?3?8?(0\d{9})$/;

const im = new Inputmask("+380999999999");
im.mask(inputPhoneFirstFrom);

function setStylesRadio(index) {
    labs[index].classList.add('activeLinkChoice');
}

radioBtns[0].checked = true;
setStylesRadio(0);

for (let i = 0; i < radioBtns.length; i++) {
    radioBtns[i].addEventListener('change', () => {

        for (let j = 0; j < labs.length; j++) {
            labs[j].classList.remove('activeLinkChoice');
        }
        setStylesRadio(i);
        inputRegion.value = radioBtns[i].value;
    });
}

function onBlurPhone(value) {
    if(regexAllPhoneUkraine.test(value)) {
        inputPhoneFirstFrom.classList.remove('invalid-phone');
    } else {
        inputPhoneFirstFrom.classList.add('invalid-phone');
    }
}

function onChangePhone(value) {
    if(regexAllPhoneUkraine.test(value)) {
        submitBtnFirstForm.disabled = false;
    } else {
        submitBtnFirstForm.disabled = true;
    }
}

















