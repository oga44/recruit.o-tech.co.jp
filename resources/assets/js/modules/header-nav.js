import { ClickEventType } from "../variables";

export const headerNav = () => {
	const body = document.querySelector("body");
	const hamburger = document.querySelector(".js-header-hamburger");

	const header = document.querySelector(".js-header");
	const headerWrap = document.querySelector(".js-header-wrap");
	const headerMain = document.querySelector(".js-header-main");

	const headerBgs = document.querySelector(".js-header-bgs");
	const headerCircle = document.querySelector(".js-header-circle");
	const headerBg = document.querySelector(".js-header-bg");

	const nav = document.querySelector(".js-header-nav");
	const navCont = document.querySelector(".js-header-nav-cont");

	const headerMainHeight = headerMain.offsetHeight;
	const navHeight = navCont.offsetHeight;

	let isOpen = false;

	header.style.height = headerMainHeight + "px";

	hamburger.addEventListener(ClickEventType, () => {
		hamburger.classList.toggle("is-active");

		header.classList.toggle("is-show");
		headerBgs.classList.toggle("is-show");
		headerCircle.classList.toggle("is-show");
		headerBg.classList.toggle("is-show");

		nav.classList.toggle("is-show");
		navCont.classList.toggle("is-show");

		body.classList.toggle("is-over");

		if (!isOpen) {
			header.style.height = "100%";
			headerWrap.style.height = headerMainHeight + navHeight + "px";
			headerBgs.style.height = headerMainHeight + navHeight + "px";
			isOpen = true;
		} else {
			header.style.height = headerMainHeight + "px";
			headerWrap.style.height = "auto";
			headerBgs.style.height = "100%";
			isOpen = false;
		}
	});
};
