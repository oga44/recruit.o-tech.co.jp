/* eslint-disable no-unused-vars */

import Swiper from "swiper";
import { Navigation } from "swiper/modules";

export const basicSlider = () => {
	const sliders = document.querySelectorAll(".js-basic-slider-wrap");
	if (!sliders.length === 0) return;

	sliders.forEach((slider) => {
		const next = slider.querySelector(".js-basic-slider-next");
		const prev = slider.querySelector(".js-basic-slider-prev");
		const sliderBody = slider.querySelector(".js-basic-slider");

		var swiper = new Swiper(sliderBody, {
			modules: [Navigation],
			speed: 1000,
			spaceBetween: 24,
			slidesPerView: 1.16,

			navigation: {
				nextEl: next,
				prevEl: prev,
			},

			breakpoints: {
				768: {
					slidesPerView: 2.6,
					spaceBetween: 40,
				},
			},
		});
	});
};

/* eslint-enable no-unused-vars */
