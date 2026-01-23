export const scrollRefresh = (st, target) => {
	const targetRefresh = st.scrollTrigger;
	const targetRect = target.getBoundingClientRect();
	let firstRefresh = false;

	window.addEventListener("scroll", () => {
		const scrollY = window.scrollY;

		if (scrollY > targetRect.top - 300 && !firstRefresh) {
			targetRefresh.refresh();
			firstRefresh = true;
		}
	});
};
