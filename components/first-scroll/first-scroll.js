



const radioBtns = document.myFormRadio.radioFirstScroll;
const labs = document.getElementsByClassName('labs');

function setStylesRadio(index) {
    labs[index].classList.add('active');
}

radioBtns[0].checked = true;
setStylesRadio(0);

for (let i = 0; i < radioBtns.length; i++) {
    radioBtns[i].addEventListener('change', () => {
        for (let j = 0; j < labs.length; j++) {
            labs[j].classList.remove('active');
        }
        setStylesRadio(i);
    });
}

$('.carousel').carousel()













