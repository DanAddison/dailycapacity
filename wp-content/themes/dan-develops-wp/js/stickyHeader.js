document.addEventListener('DOMContentLoaded', () => {
	const header = document.getElementById('masthead');
	const shrinkPoint = 20; // px before shrinking

	window.addEventListener('scroll', () => {
		if (window.scrollY > shrinkPoint) {
			header.classList.add('is-scrolled');
		} else {
			header.classList.remove('is-scrolled');
		}
	});
});
