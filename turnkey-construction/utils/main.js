function setTitleModalForm(title) {
    document.getElementById('exampleModalLongTitle').innerText = title;
}

function redirectToHome() {
    window.location.href = '/';
}

function onClickLocation(value) {
   /* if(document.getElementById('locationHiddenId')) {
        document.getElementById('locationHiddenId').value = value;
    }*/
    if(document.getElementById('locationHiddenFormModalId')) {
        document.getElementById('locationHiddenFormModalId').value = value;
    }
}

const inputPhoneFormModal = document.getElementById('inputPhoneFormModalId');

const submitFormModal = document.getElementById('submitFormModalId');

if(inputPhoneFormModal) {
    const imsk = new Inputmask("+380999999999");
    imsk.mask(inputPhoneFormModal);
}

function onBlurPhoneFormModal(value) {
    if(/^\+?3?8?(0\d{9})$/.test(value)) {
        inputPhoneFormModal.classList.remove('invalid-phone');
    } else {
        inputPhoneFormModal.classList.add('invalid-phone');
    }
}

function onChangePhoneFormModal(value) {
    if(/^\+?3?8?(0\d{9})$/.test(value)) {
        submitFormModal.disabled = false;
    } else {
        submitFormModal.disabled = true;
    }
}
