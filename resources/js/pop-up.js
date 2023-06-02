var modal = document.querySelector('.pop-up')
var popUpbtn = document.querySelector('.sub-body__user')
var popUpclose = document.getElementById('pop-up_close')

popUpbtn.onclick = function () {
	modal.style.display = 'flex'
}

window.onclick = function (event) {
	if (event.target == modal) {
		modal.style.display = 'none'
	}
}

popUpclose.onclick = function () {
	modal.style.display = 'none'
}
