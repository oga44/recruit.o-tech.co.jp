import { ClickEventType } from "../variables";

export const guidelineFlow = () => {
	const tabs = document.querySelectorAll(".js-guideline-flow-tab");
	if (tabs.length === 0) return;

	tabs.forEach((tab, index) => {
		const flows = document.querySelectorAll(".js-guideline-flow");

		tab.addEventListener(ClickEventType, () => {
			tabs.forEach((tab) => tab.classList.remove("is-show"));
			flows.forEach((flow) => flow.classList.remove("is-show"));
			tab.classList.toggle("is-show");
			flows[index].classList.toggle("is-show");
		});
	});
};
