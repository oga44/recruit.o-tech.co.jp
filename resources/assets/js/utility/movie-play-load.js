/* eslint-disable */

export const playVideo = (video) => {
	var playPromise = video.play();
	if (playPromise !== undefined) {
		playPromise
			.then((_) => {
				video.play();
			})
			.catch((error) => {});
	}
};

export const videoLoad = (video) => {
	video.pause();
	video.load();
};
