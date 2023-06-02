const searchBtn = document.querySelector('.sub-body__search')
const searchForm = document.querySelector('.search-form')
if (searchBtn) {
	searchBtn.addEventListener('click', function name(e) {
		searchForm.classList.toggle('_active')
	})
	document.addEventListener('click', function (event) {
		var isClickInside = searchForm.contains(event.target)
		var isClickButton = searchBtn.contains(event.target)
		if (!isClickInside && !isClickButton) {
			searchForm.classList.remove('_active')
		}
	})
}