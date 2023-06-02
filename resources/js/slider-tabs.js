let tabSlide = document.querySelector('.swiper__header-tabs'),
	tabSlideContent = document.querySelectorAll('.swiper'),
	tabSlideName

	if(tabSlide) {
		tabSlide.addEventListener('click', event => {
			if(event.target.className == 'swiper__header-tab') {
				selectTabNav(event)
			}
		})
	}

	function selectTabNav(event) {
		for(let item of tabSlide.children) {
			item.classList.remove('header-tab--active')
		}
		event.target.classList.toggle('header-tab--active', true)
		tabSlideName = event.target.getAttribute('data-swiper-tab-name')
		selectTabContent(tabSlideName)
	}

	function selectTabContent(tabSlideName) {
		for(let item of tabSlideContent) {
			item.classList.toggle('swiper--is-active', false)
			if(item.classList.contains(tabSlideName)) {
				item.classList.toggle('swiper--is-active', true)
			}
		}
	}
