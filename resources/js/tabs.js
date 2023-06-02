let tab = function () {
	let tabNav = document.querySelectorAll('.drop-down-menu__tab'),
		tabContent = document.querySelectorAll(
			'.drop-down-menu__drop-down-content'
		),
		tabName

	tabNav.forEach((item) => {
		item.addEventListener('click', selectTabNav)
	})

	function selectTabNav() {
		tabNav.forEach((item) => {
			item.classList.remove('tab-is-active')
		})
		this.classList.add('tab-is-active')
		tabName = this.getAttribute('data-tab-name')
		selectTabContent(tabName)
	}

	function selectTabContent(tabName) {
		tabContent.forEach((item) => {
			item.classList.contains(tabName)
				? item.classList.add('content-is-active')
				: item.classList.remove('content-is-active')
		})
	}
}

tab()
