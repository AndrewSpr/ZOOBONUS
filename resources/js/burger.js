/*Реализация бургерного меню*/
const burgerIcon = document.querySelector('.mobile-menu__icon')
const bodyMenu = document.querySelector('.mobile-menu__menu-body')
if (burgerIcon) {
	burgerIcon.addEventListener('click', function name(e) {
		bodyMenu.classList.toggle('_active')
		burgerIcon.classList.toggle('_active')
	})
}
