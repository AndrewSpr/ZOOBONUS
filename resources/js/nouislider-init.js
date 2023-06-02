import noUiSlider from './nouislider.js'

var rangeSlider = document.getElementById('range-slider');

if(rangeSlider) {

noUiSlider.create(rangeSlider, {
    start: [12, 6597],
    connect: true,
    range: {
        'min': 12,
        'max': 10000
    }
});

const input0 = document.getElementById('price-input-first')
const input1 = document.getElementById('price-input-second')
const inputs = [input0, input1];

rangeSlider.noUiSlider.on('update', function(values, handle){
    inputs[handle].value = Math.round(values[handle]) 
  })
  
  const setRange = (i,value) => {
    let arr = [null, null]
    arr[i] = value
    rangeSlider.noUiSlider.set(arr)
  }
  
  inputs.forEach((el,index) => {
    el.addEventListener('change',(e) => {
        setRange(index, e.currentTarget.value)
    })
  })
}
