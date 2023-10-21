(function($) {

	var	$window = $(window),
		$body = $('body');

	// Play initial animations on page load.
		// $window.on('load', function() {
		// 	window.setTimeout(function() {
		// 		$body.removeClass('is-preload');
		// 	}, 100);
		// });

	// Dropdowns.
		$('#nav > ul').dropotron({
			mode: 'fade',
			noOpenerFade: true,
			speed: 300
		});

	// Nav.

		// Toggle.
			$(
				'<div id="navToggle">' +
					'<a href="#navPanel" class="toggle"></a>' +
				'</div>'
			)
				.appendTo($body);

		// Panel.
			$(
				'<div id="navPanel">' +
					'<nav>' +
						$('#nav').navList() +
					'</nav>' +
				'</div>'
			)
				.appendTo($body)
				.panel({
					delay: 500,
					hideOnClick: true,
					hideOnSwipe: true,
					resetScroll: true,
					resetForms: true,
					side: 'left',
					target: $body,
					visibleClass: 'navPanel-visible'
				});

})(jQuery);

if(window.location.href === window.location.origin + '/#our-services' && window.location.origin + '/#about-us' || window.location.pathname === '/') {
	// if (window.location.pathname.endsWith('/index.html')) {
	window.addEventListener("scroll", function() {
		const sections = document.querySelectorAll("main section");
		const navLinks = document.querySelectorAll("#nav a");
		let current = "";
	
			sections.forEach(function(section) {
				const sectionTop = section.offsetTop;
				const sectionHeight = section.clientHeight;
				if (scrollY >= sectionTop - sectionHeight / 3) {
					current = section.getAttribute("id");
				}
			});
	
			navLinks.forEach(function(link) {
				link.classList.remove("active");
				if (link.getAttribute("href").slice(2) === current) {
					link.classList.add("active");
				}
			});
	});
}

	


window.addEventListener("scroll", function(){
	const nav = document.getElementById("header-wrapper");
	if(window.scrollY > 100){
		nav.classList.add("adjust-height")
	}else{
		nav.classList.remove("adjust-height")
	}
});