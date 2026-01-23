import { BASESIZE, BREAKPOINT, BREAKPOINT_FHD, BREAKPOINT_HD } from "../variables";
import { isSp } from "./check-device";

const baseSizeHandle = () => {
	const windowWidth = window.innerWidth;

	let baseWidth = BASESIZE["PC_WIDTH"];
	if (isSp) {
		baseWidth = BASESIZE["SP_WIDTH"];
	}

	let baseSize = (BASESIZE["FONT"] * windowWidth) / baseWidth / BASESIZE["FONT"];

	if (windowWidth > BREAKPOINT && windowWidth < BREAKPOINT_HD) {
		baseSize = BASESIZE["TAB_MUL"];
	} else if (windowWidth > BREAKPOINT_FHD) {
		baseSize = BASESIZE["FHD_MUL"];
	}
	return baseSize;
};

export const baseSizeValue = baseSizeHandle();
