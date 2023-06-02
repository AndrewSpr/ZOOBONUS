const catalogBtn = document.querySelector('.nav-item--menu')
const catalogBody = document.querySelector('.drop-down-menu')
if (catalogBtn) {
	catalogBtn.addEventListener('click', function name(e) {
		catalogBody.classList.toggle('_active')
		catalogBtn.classList.toggle('_active')
	})
	document.addEventListener('click', function (event) {
		var isClickInside = catalogBody.contains(event.target)
		var isClickButton = catalogBtn.contains(event.target)
		if (!isClickInside && !isClickButton) {
			catalogBtn.classList.remove('_active')
			catalogBody.classList.remove('_active')
		}
	})
}
