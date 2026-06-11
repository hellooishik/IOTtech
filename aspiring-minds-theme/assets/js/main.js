document.addEventListener('DOMContentLoaded', () => {
	// Mobile Menu Toggle
	const menuToggle = document.querySelector('.menu-toggle');
	const primaryMenu = document.getElementById('primary-menu');

	if (menuToggle && primaryMenu) {
		menuToggle.addEventListener('click', () => {
			const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
			menuToggle.setAttribute('aria-expanded', !isExpanded);
			primaryMenu.style.display = isExpanded ? 'none' : 'flex';
			primaryMenu.style.flexDirection = 'column';
			primaryMenu.style.position = 'absolute';
			primaryMenu.style.top = '100%';
			primaryMenu.style.left = '0';
			primaryMenu.style.width = '100%';
			primaryMenu.style.background = 'var(--glass-bg)';
			primaryMenu.style.backdropFilter = 'blur(12px)';
			primaryMenu.style.padding = '1rem';
			primaryMenu.style.borderBottom = '1px solid var(--glass-border)';
		});
	}

	// Scroll Animations using Intersection Observer
	const observerOptions = {
		root: null,
		rootMargin: '0px',
		threshold: 0.1
	};

	const observer = new IntersectionObserver((entries, observer) => {
		entries.forEach(entry => {
			if (entry.isIntersecting) {
				entry.target.classList.add('is-visible');
				observer.unobserve(entry.target);
			}
		});
	}, observerOptions);

	// Add animate class to grid items and benefit items
	const animatedElements = document.querySelectorAll('.grid-item, .benefit-item');
	animatedElements.forEach((el, index) => {
		el.classList.add('animate-on-scroll');
		// Stagger animations slightly
		el.style.animationDelay = `${index * 0.1}s`;
		observer.observe(el);
	});
});
