

const radioBtns = document.myFormRadio.radioFirstScroll;
const labs = document.getElementsByClassName('labs');

function setStylesRadio(index) {
    labs[index].style.transition = '.4s';
    labs[index].children[3].style.color = 'white';
    labs[index].style.borderColor = '#1D88ED';
    labs[index].style.backgroundColor = '#1D88ED';
}

radioBtns[0].checked = true;
setStylesRadio(0);

for (let i = 0; i < radioBtns.length; i++) {
    radioBtns[i].addEventListener('change', () => {
        for (let j = 0; j < labs.length; j++) {
            labs[j].style.backgroundColor = 'white';
            labs[j].style.borderColor = '#1D88ED';
            labs[j].children[3].style.color = '#414042';
        }
        setStylesRadio(i);
    });
}










