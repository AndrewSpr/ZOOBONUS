const Spoiler = document.querySelector('.spoiler-button')
const SpoilerText = document.querySelector('.seo-information__spoiler')
const SpoilerVisibility = document.querySelector('.spoiler-visibility')
if (Spoiler) {
	Spoiler.addEventListener('click', function name(e) {
		Spoiler.classList.toggle('_active')
		SpoilerText.classList.toggle('_active')
		SpoilerVisibility.classList.toggle('_active')
	})
}
