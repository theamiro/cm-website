jQuery(window).on("load", function () {
	jQuery("body").removeClass("overflow-y-hidden")
	jQuery("#preloader").addClass("opacity-0").addClass("hidden")
})

jQuery(document).ready(function () {
	jQuery("#close-menu").click(function () {
		jQuery("#main-menu").addClass("opacity-0").addClass("hidden")
	})

	jQuery("#open-main-menu").click(function () {
		jQuery("#main-menu").removeClass("hidden").removeClass("opacity-0")
	})

	jQuery("#share-modal-open").click(function () {
		jQuery("#share-modal").removeClass("hidden").removeClass("opacity-0")
	})

	jQuery("#share-modal-close, #share-modal-bg").click(function () {
		jQuery("#share-modal").addClass("opacity-0").addClass("hidden")
		console.log("runs")
	})

	jQuery("#copy-share-link").click(function () {
		navigator.clipboard.writeText(jQuery("#single-share").select()[0].defaultValue)
		jQuery("#copied-badge").removeClass("hidden").removeClass("opacity-0")

		setTimeout(function () {
			jQuery("#copied-badge").addClass("opacity-0")
		}, 3000)
	})

	if (jQuery(".projects-carousel").length) {
		tns({
			container: ".projects-carousel",
			gutter: 40,
			fixedWidth: false,
			controls: false,
			nav: false,
			slideBy: 1,
			autoplay: false,
			autoplayHoverPause: true,
			autoplayButtonOutput: false,
			mouseDrag: true,
			responsive: {
				480: {
					gutter: 10,
					items: 1.2,
				},
				640: {
					gutter: 10,
					items: 1.4,
				},
				900: {
					gutter: 10,
					items: 2.4,
				},
			},
		})
	}
	if (jQuery(".podcast-page-carousel").length) {
		tns({
			container: ".podcast-page-carousel",
			controls: false,
			nav: true,
			navPosition: "bottom",
			navContainer: ".podcast-control",
			slideBy: 1,
			mouseDrag: true,
			items: 1,
		})
	}
	if (jQuery(".articles-page-carousel").length) {
		tns({
			container: ".articles-page-carousel",
			controls: false,
			nav: true,
			navPosition: "bottom",
			navContainer: ".articles-control",
			slideBy: 1,
			mouseDrag: true,
			items: 1,
		})
	}
	if (jQuery(".learn-page-carousel").length) {
		tns({
			container: ".learn-page-carousel",
			controls: false,
			nav: true,
			navPosition: "bottom",
			navContainer: ".learn-control",
			slideBy: 1,
			mouseDrag: true,
			items: 1,
		})
	}
	if (jQuery(".podcasts-carousel").length) {
		tns({
			container: ".podcasts-carousel",
			gutter: 10,
			controls: false,
			nav: false,
			slideBy: 1,
			autoplay: false,
			autoplayHoverPause: true,
			autoplayButtonOutput: false,
			mouseDrag: true,
			responsive: {
				480: {
					gutter: 10,
					items: 1.2,
				},
				640: {
					gutter: 10,
					items: 1.4,
				},
				900: {
					gutter: 20,
					items: 2.2,
				},
			},
		})
	}
	if (jQuery(".articles-carousel").length) {
		tns({
			container: ".articles-carousel",
			gutter: 10,
			// fixedWidth: 600,
			controls: false,
			nav: false,
			slideBy: 1,
			autoplay: false,
			autoplayHoverPause: true,
			autoplayButtonOutput: false,
			mouseDrag: true,
			responsive: {
				480: {
					gutter: 10,
					items: 1.2,
				},
				640: {
					gutter: 10,
					items: 1.4,
				},
				900: {
					gutter: 20,
					items: 2.2,
				},
			},
		})
	}
})

// Select all links with hashes
jQuery(".anchor")
	// Remove links that don't actually link to anything
	.not('[href="#"]')
	.not('[href="#0"]')
	.click(function (event) {
		// On-page links
		if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
			// Figure out element to scroll to
			var target = jQuery(this.hash)
			target = target.length ? target : jQuery("[name=" + this.hash.slice(1) + "]")
			// Does a scroll target exist?
			if (target.length) {
				// Only prevent default if animation is actually gonna happen
				event.preventDefault()
				jQuery("html, body").animate(
					{
						scrollTop: target.offset().top - 100,
					},
					1000,
					function () {
						// Callback after animation
						// Must change focus!
						var jQuerytarget = jQuery(target)
						jQuerytarget.focus()
						if (jQuerytarget.is(":focus")) {
							// Checking if the target was focused
							return false
						} else {
							jQuerytarget.attr("tabindex", "-1") // Adding tabindex for elements not focusable
							jQuerytarget.focus() // Set focus again
						}
					}
				)
			}
		}
	})
