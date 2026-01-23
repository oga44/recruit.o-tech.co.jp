/* eslint-disable no-unused-vars */

import Swiper from "swiper";
import { Autoplay } from "swiper/modules";

export const mvSlider = () => {
	const sliders = document.querySelectorAll(".js-mv-slider");

	sliders.forEach((slide) => {
		const reverse = slide.classList.contains("lower") ? true : false;

		var swiper = new Swiper(slide, {
			modules: [Autoplay],
			speed: 5000,
			autoplay: {
				delay: 0,
				// pauseOnMouseEnter: true,
				disableOnInteraction: false,
				reverseDirection: reverse,
			},
			spaceBetween: 30,
			slidesPerView: "auto",
			loop: true,
			allowTouchMove: false,
		});
	});
};

/* eslint-enable no-unused-vars */
