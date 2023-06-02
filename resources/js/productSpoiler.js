const textarea = document.querySelector('.describing__text');

if(textarea) {
    let textLenght = textarea.getClientRects().length
    let spoilerBtn = document.querySelector('.product__btn--describing')
    if (textLenght >= 2) { //если количество строк больше, либо равно 2, то будет появляться спойлер
        spoilerBtn.classList.add('_active')
    }
}