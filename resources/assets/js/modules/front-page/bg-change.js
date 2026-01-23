/* eslint-disable no-unused-vars */
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

export const bgChange = () => {
	const body = document.querySelector("body");
	const about = document.querySelector(".js-bg-change-section[data-section='about']");
	const aboutBg = document.querySelector(".js-bg-change-bg[data-section='about']");

	gsap.to(aboutBg, {
		scrollTrigger: {
			trigger: about,
			start: "top top",
			// markers: true,
			onEnter: () => {
				aboutBg.classList.add("is-show");
			},
			onEnterBack: () => {
				aboutBg.classList.add("is-show");
			},
			onLeaveBack: () => {
				aboutBg.classList.remove("is-show");
			},
			onLeave: () => {
				aboutBg.classList.remove("is-show");
			},
		},
	});

	const aboutChilds = about.querySelectorAll(".js-bg-change-section-child");
	aboutChilds.forEach((child, index) => {
		gsap.to(aboutBg.querySelectorAll(".js-bg-change-child")[index], {
			scrollTrigger: {
				trigger: child,
				start: "top top",
				onEnter: () => {
					aboutBg.querySelectorAll(".js-bg-change-child").forEach((c) => c.classList.remove("is-show"));
					aboutBg.querySelectorAll(".js-bg-change-child")[index].classList.add("is-show");
				},
				onEnterBack: () => {
					aboutBg.querySelectorAll(".js-bg-change-child")[index].classList.add("is-show");
				},
				onLeaveBack: () => {
					aboutBg.querySelectorAll(".js-bg-change-child")[index].classList.remove("is-show");
				},
			},
		});
	});

	const blackSection = document.querySelector(".js-bg-change-section[data-section='black']");
	const blackBg = document.querySelector(".js-bg-change-bg[data-section='black']");
	gsap.to(blackBg, {
		scrollTrigger: {
			trigger: blackSection,
			start: "top top",
			// markers: true,
			onEnter: () => {
				blackBg.classList.add("is-show");
				body.classList.add("is-black");
			},
			onEnterBack: () => {
				blackBg.classList.add("is-show");
				body.classList.add("is-black");
			},
			onLeaveBack: () => {
				blackBg.classList.remove("is-show");
				body.classList.remove("is-black");
			},
			onLeave: () => {
				blackBg.classList.remove("is-show");
				body.classList.remove("is-black");
			},
		},
	});
};

/* eslint-enable no-unused-vars */
