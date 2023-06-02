const brendSpoiler = document.querySelectorAll('.side-info__title')

brendSpoiler.forEach((item) => {
    item.addEventListener('click', function(){
        let parentItem = this.parentNode;
        let brendBody = parentItem.querySelector('.side-info__body')
        let brendArrow = parentItem.querySelector('.side-info__arrow')
        if(brendBody.classList.contains("_disable")) {
            brendBody.classList.remove('_disable');
            brendArrow.classList.remove('side-info__arrow--disable');
        } else {
            brendBody.classList.add('_disable')
            brendArrow.classList.add('side-info__arrow--disable')
        }
    })
})