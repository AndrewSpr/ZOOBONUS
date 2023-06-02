import Swiper from './swiper.js'

const swiper = new Swiper('.swiper', {
	speed: 1000,
	observer: true,
	observeParents: true,
	observeSlideChildren: true,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	pagination: {
		el: '.swiper-pagination',
		dynamicBullets: true,
		clickable: true,
		dynamicMainBullets: 2,
	},
	slidesPerView: 1,
	spaceBetween: 10,
	breakpoints: {
		767: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		1024: {
			slidesPerView: 3,
			spaceBetween: 30,
		},
		1280: {
			slidesPerView: 4,
			spaceBetween: 30,
		},
		1438: {
			slidesPerView: 5,
			spaceBetween: 30,
		},
	},
})
