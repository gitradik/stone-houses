

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