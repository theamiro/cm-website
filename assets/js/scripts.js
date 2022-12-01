jQuery(document).ready(function () {
	jQuery(".projects-carousel").owlCarousel({
		stagePadding: 100,
		loop: false,
		margin: 100,
		nav: false,
		dots: false,
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
	jQuery(".podcasts-carousel").owlCarousel({
		loop: false,
		margin: 100,
		nav: false,
		dots: false,
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
	jQuery(".articles-carousel").owlCarousel({
		loop: false,
		margin: 100,
		nav: false,
		dots: false,
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

jQuery(document).on("load", function () {
	jQuery("#preloader").addClass("hidden")
})
