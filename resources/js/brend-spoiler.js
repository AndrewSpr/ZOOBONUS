const brendSpoiler = document.querySelectorAll('.brend__title')

brendSpoiler.forEach((item) => {
    item.addEventListener('click', function(){
        let parentItem = this.parentNode;
        let brendBody = parentItem.querySelector('.brend__filter-body')
        let brendArrow = parentItem.querySelector('.brend__arrow')
        if(brendBody.classList.contains("_disable")) {
            brendBody.classList.remove('_disable');
            brendArrow.classList.add('brend__arrow--active');
        } else {
            brendBody.classList.add('_disable')
            brendArrow.classList.remove('brend__arrow--active')
        }
    })
})