export const windowHeight = () => {
	let wh = window.innerHeight;

	window.addEventListener("resize", () => {
		wh = window.innerHeight;
	});
	return wh;
};
