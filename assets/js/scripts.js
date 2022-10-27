$(document).ready(function () {
	$(".owl-carousel").owlCarousel({
		stagePadding: 100,
		loop: true,
		margin: 100,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 1,
			},
			1000: {
				items: 2,
			},
		},
	})
})
