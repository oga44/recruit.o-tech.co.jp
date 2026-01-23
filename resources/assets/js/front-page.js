import { bgChange } from "./modules/front-page/bg-change";
import { businessSlider } from "./modules/front-page/business-slider";
import { mvSlider } from "./modules/front-page/mv-slider";
import { opening } from "./modules/front-page/opening";
import { tech } from "./modules/front-page/tech";

window.addEventListener("load", () => {
	mvSlider();
	opening();
	bgChange();
	tech();
	businessSlider();
});
