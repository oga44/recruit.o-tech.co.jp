import { ClickEventType } from "../variables";

export const accordion = () => {
	const cards = document.querySelectorAll(".js-accordion");
	if (cards.length === 0) return;

	cards.forEach((card) => {
		const btn = card.querySelector(".js-accordion-btn");

		btn.addEventListener(ClickEventType, () => {
			card.classList.toggle("is-show");
			btn.classList.toggle("is-active");
		});
	});
};
