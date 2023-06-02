let tab = function () {
	let tabImg = document.querySelectorAll('.gallery-col__item'),
        tabImgContent = document.querySelectorAll(
			'.gallery__preview-image'
		),
		tabImgName

        tabImg.forEach((item) => {
		item.addEventListener('click', selectTabNav)
	})

	function selectTabNav() {
		tabImg.forEach((item) => {
			item.classList.remove('_active')
		})
		this.classList.add('_active')
		tabImgName = this.getAttribute('data-img-id')
		selectTabContent(tabImgName)
	}

	function selectTabContent(tabImgName) {
		tabImgContent.forEach((item) => {
			item.classList.contains(tabImgName)
				? item.classList.add('_active')
				: item.classList.remove('_active')
		})
	}
}

tab()
