/* eslint-disable no-unused-vars */

import Swiper from "swiper";
import { Autoplay } from "swiper/modules";

export const commonLoopSlider = () => {
	const slider = document.querySelector(".js-common-loop-slider");
	if (!slider) return;

	var swiper = new Swiper(slider, {
		modules: [Autoplay],
		speed: 5000,
		autoplay: {
			delay: 0,
			disableOnInteraction: false,
		},
		slidesPerView: "auto",
		loop: true,
		allowTouchMove: false,
	});
};

/* eslint-enable no-unused-vars */
