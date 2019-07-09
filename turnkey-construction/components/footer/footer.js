
const inputPhoneFooterFrom = document.getElementById('input_phone_footer_from_id');
const submitBtnFooterForm = document.getElementById('submit_btn_footer_form_id');
const regexAllPhoneUkraine = /^\+?3?8?(0\d{9})$/;

const im = new Inputmask("+380999999999");
im.mask(inputPhoneFooterFrom);

function onBlurPhoneFooter(el) {
    console.log(el);
    if(regexAllPhoneUkraine.test(el.value)) {
        inputPhoneFooterFrom.classList.remove('invalid-phone');
    } else {
        inputPhoneFooterFrom.classList.add('invalid-phone');
    }
}

function onChangePhoneFooter(value) {
    if(regexAllPhoneUkraine.test(value)) {
        submitBtnFooterForm.disabled = false;
    } else {
        submitBtnFooterForm.disabled = true;
    }
}
