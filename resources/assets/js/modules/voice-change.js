import { ClickEventType } from "../variables";

export const voiceChange = () => {
	const wraps = document.querySelectorAll(".js-voice-wrap");

	if (wraps.length === 0) return;

	wraps.forEach((wrap) => {
		const btns = wrap.querySelectorAll(".js-voice-toggle");
		const contents = wrap.querySelectorAll(".js-voice-target");

		btns.forEach((btn) => {
			btn.addEventListener(ClickEventType, () => {
				btns.forEach((btn) => btn.classList.remove("is-active"));
				btn.classList.add("is-active");

				contents.forEach((cont) => cont.classList.remove("is-show"));

				const activeNum = btn.dataset.cont;
				const activeCont = wrap.querySelector(`.js-voice-target[data-cont="${activeNum}"]`);
				activeCont.classList.add("is-show");
			});
		});
	});
};
