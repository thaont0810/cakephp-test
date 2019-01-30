window.onload = function() {
	// $(".loading").addClass('bounceOut');
	var animate = document.getElementById("loading");
	animate.classList.add("bounceOut");
};

$(document).ready(function() {
	$(".slick-test").slick({
		infinite: true,
		dots: true,
		autoplay: true,
		autoplaySpeed: 3000
	}); // $('.slick-clients').slick({
	//   infinite: true,
	//   autoplay: true,
	//   autoplaySpeed: 2000,
	//   slidesToScroll: 1,
	//   slidesToShow: 5,
	// });
});
var video = document.getElementById("video");
var btn = document.getElementById("btn-video");
var arr = document.getElementsByClassName("arrow");
var pause = document.getElementsByClassName("pause");

function playPause() {
	if (video.paused) {
		video.play();

		if (arr) {
			btn.classList.remove("arrow");
			btn.classList.add("pause");
		}
	} else {
		video.pause();

		if (pause) {
			btn.classList.remove("pause");
			btn.classList.add("arrow");
		}
	}
}
