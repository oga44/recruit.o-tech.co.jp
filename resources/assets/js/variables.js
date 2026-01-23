import { gsap } from "gsap";
import { CustomEase } from "./vendor/CustomEase";
gsap.registerPlugin(CustomEase);
gsap.ticker.fps(60);

// ブレイクポイント
export const BREAKPOINT = 768;
export const BREAKPOINT_FHD = 1920;
export const BREAKPOINT_HD = 1280;

export const BASESIZE = {
	PC_WIDTH: 1440,
	SP_WIDTH: 375,
	FONT: 16,
	FHD_MUL: 1.6,
	TAB_MUL: 1,
};

export const IS_TYPE_LOCAL = document.querySelector("body").dataset.type === "local" ? true : false;

// click
export const ClickEventType = window.ontouchstart !== null ? "click" : "touchstart";

// アニメーション時間
export const DURASION = {
	SHORT: 0.3,
	BASE: 0.4,
	FULL: 0.6,
	SCROLL: 1.0,
};

// イージング
export const EASING = {
	TRANSFORM: CustomEase.create("transform", "M0,0 C0.44,0.05 0.17,1 1,1"),
	MATERIAL: CustomEase.create("material", "M0,0 C0.26,0.16 0.1,1 1,1"),
};
