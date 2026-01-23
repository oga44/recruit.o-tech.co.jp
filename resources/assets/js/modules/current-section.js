import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

export const currentSection = () => {
	const sections = document.querySelectorAll(".js-cur-sec");
	if (sections.length === 0) return;

	const links = document.querySelectorAll(".js-cur-link");

	sections.forEach((section, index) => {
		gsap.to(links[index], {
			scrollTrigger: {
				trigger: section,
				start: "top top",
				onEnter: () => {
					links[index].classList.add("is-show");
				},
				onLeaveBack: () => {
					if (index !== 0) {
						links[index].classList.remove("is-show");
					}
				},
				onEnterBack: () => {
					links[index].classList.add("is-show");
				},
				onLeave: () => {
					links[index].classList.remove("is-show");
				},
			},
		});
	});
};
