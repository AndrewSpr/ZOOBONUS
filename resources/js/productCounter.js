const counter = document.querySelector('.counter__input');

if(counter) { //проверяем на наличие такого класса, как counter__input, на странице
  const counterPlus = document.querySelector('.counter__plus');
  counterPlus.addEventListener('click', function() {
    if(counter.value < 15) { //пока значение счетчика будет меньше или равно максимально имеющемуся количеству товаров, плюс будет работать
    counter.value++;
    }
 })

  const counterMinus = document.querySelector('.counter__minus');
  counterMinus.addEventListener('click', function() {
  if(counter.value > 1){ //пока значение счетчика будет больше 1(минимального количества товара), минус будет работать
    counter.value--;
    }
  })

  const counterOffer = document.querySelector('.product-trade__special-offer');
  counterOffer.addEventListener('click', function() {
      counter.value='8' //значение соответствующие акции
  })
}