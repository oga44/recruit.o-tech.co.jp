import { viewportFix, viewportSize } from "./utility/viewport";
import { gsap } from "gsap";
import { isSp } from "./utility/check-device";
import { headerNav } from "./modules/header-nav";
import { currentSection } from "./modules/current-section";
import { commonLoopSlider } from "./modules/commonLoopSlider";
import { voiceChange } from "./modules/voice-change";
import { accordion } from "./modules/accordion";
import { basicSlider } from "./modules/basic-slider";
import { guidelineFlow } from "./modules/guideline-flow";

gsap.config({
	nullTargetWarn: false,
});

// event
const body = document.querySelector("body");

if (isSp) {
}

window.addEventListener("load", () => {
	body.classList.add("is-loaded");
	viewportSize();
	viewportFix();
	headerNav();
	accordion();
	currentSection();
	commonLoopSlider();
	voiceChange();
	basicSlider();
	guidelineFlow();

	setTimeout(function () {}, 300);
});

window.addEventListener("resize", () => {
	viewportSize();
	viewportFix();

	if (isSp) {
	}
});
