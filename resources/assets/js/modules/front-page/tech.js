/* eslint-disable no-unused-vars */
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

export const tech = () => {
	const techBody = document.querySelector(".js-tech-body");
	const techArea = document.querySelector(".js-tech-area");

	const techBlocks = document.querySelectorAll(".js-tech-block");
	const techBlockLength = techBlocks.length;

	let wh = window.innerHeight;

	techBody.style.height = wh * techBlockLength + "px";

	const spacer = 100;
	// const story = document.querySelector(".js-story");
	// story.style.paddingTop = spacer + "px";

	gsap.to(techBody, {
		scrollTrigger: {
			trigger: techBody,
			start: "top top",
			end: `bottom-=${wh - spacer} top`,
			// markers: true,
			onEnter: () => {
				techArea.classList.add("is-fixed");
			},
			onEnterBack: () => {
				techArea.classList.add("is-fixed");
				techBody.style.paddingTop = 0 + "px";
			},
			onLeaveBack: () => {
				techArea.classList.remove("is-fixed");
			},
			onLeave: () => {
				techArea.classList.remove("is-fixed");
				techBody.style.paddingTop = spacer + "px";
			},
		},
	});

	const sections = [...document.querySelectorAll(".js-tech-block")];

	let isFirst = false;

	window.addEventListener("scroll", () => {
		const scrollY = window.scrollY;
		const techBodyPos = techBody.getBoundingClientRect().top + scrollY;

		if (scrollY >= techBodyPos) {
			isFirst = true;
		} else if (scrollY >= techBodyPos + wh * techBlockLength) {
			isFirst = false;
		} else {
			isFirst = false;
		}

		if (isFirst) {
			if (scrollY < techBodyPos + wh) {
				sections.forEach((section) => section.classList.remove("is-show"));
				techBlocks[0].classList.add("is-show");

				const indexItems = sections[0].querySelectorAll(".js-tech-index-item");
				indexItems.forEach((item) => item.classList.remove("is-active"));
				indexItems[0].classList.add("is-active");
			} else {
				for (let i = 1; i < techBlockLength; i++) {
					const targetPos = techBodyPos + wh * i;

					if (targetPos < scrollY) {
						sections.forEach((section) => section.classList.remove("is-show"));
						techBlocks[i].classList.add("is-show");

						const indexItems = techBlocks[i].querySelectorAll(".js-tech-index-item");
						indexItems.forEach((item) => item.classList.remove("is-active"));
						indexItems[i].classList.add("is-active");
					}
				}
			}
		}
	});
};

/* eslint-enable no-unused-vars */
