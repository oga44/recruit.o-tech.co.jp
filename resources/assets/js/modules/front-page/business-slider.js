export const businessSlider = () => {
	const slider = document.querySelectorAll(".js-fp-business-slider");
	if (!slider.length === 0) return;

	const items = document.querySelectorAll(".js-fp-business-slide");
	let currentIndex = 0;

	function toggleItems() {
		for (let i = 0; i < items.length; i++) {
			if (i === currentIndex) {
				items[i].classList.add("is-show");
			} else {
				items[i].classList.remove("is-show");
			}
		}
		currentIndex = (currentIndex + 1) % items.length;
	}

	setInterval(toggleItems, 3000);
};
