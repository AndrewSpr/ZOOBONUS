/*Реализация плавного скролла*/

const anchors = document.querySelectorAll('a[href*="#jsSmoothScroll"]')
const anchorsTarget = document.querySelectorAll('.jsSmoothScroll')

for (let anchor of anchors) {
	anchor.addEventListener('click', function (e) {
		e.preventDefault()
		const anchorId = anchor.getAttribute('anchorId')
		for(let target of anchorsTarget) {
			const anchorTarget = target.getAttribute('anchorTarget')
			if(anchorTarget == anchorId) {
				target.scrollIntoView({
					behavior: 'smooth',
					block: 'start',
				})
			}
		}	
	})
}

