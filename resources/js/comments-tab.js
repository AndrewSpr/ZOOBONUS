let tab = function () {
	let tabComment = document.querySelectorAll('.comments__header-title'),
		tabCommentAnchor = document.querySelectorAll('.product-trade__comment'),
		tabCommentContent = document.querySelectorAll(
			'.comments__section'
		),
		tabCommentName,
		tabCommentAcnhorName

        tabComment.forEach((item) => {
		item.addEventListener('click', selectTabNav)
	})

	function selectTabNav() {
		tabComment.forEach((item) => {
			item.classList.remove('_active')
		})
		this.classList.add('_active')
		tabCommentName = this.getAttribute('data-comments-name')
		selectTabContent(tabCommentName)
	}

	function selectTabContent(tabCommentName) {
		tabCommentContent.forEach((item) => {
			item.classList.contains(tabCommentName)
				? item.classList.add('_active')
				: item.classList.remove('_active')
		})
	}

	tabCommentAnchor.forEach((item) => {
		item.addEventListener('click', selectTabAnchor)
	})

	function selectTabAnchor() {
		tabCommentAcnhorName = this.getAttribute('data-anchor')
		selectAnchorName(tabCommentAcnhorName)
		tabCommentName = this.getAttribute('data-comments-name')
		selectTabContent(tabCommentName)
	}

	function selectAnchorName() {
		tabComment.forEach((item) => {
			item.classList.contains(tabCommentAcnhorName)
				? item.classList.add('_active')
				: item.classList.remove('_active')
		})
	}
}

tab()
