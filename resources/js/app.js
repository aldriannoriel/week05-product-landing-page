import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
	const toggle = document.querySelector('[data-navbar-toggle]');
	const menu = document.querySelector('[data-navbar-menu]');

	if (!toggle || !menu) {
		return;
	}

	const closeMenu = () => {
		menu.classList.add('hidden');
		toggle.setAttribute('aria-expanded', 'false');
		toggle.setAttribute('aria-label', 'Open navigation menu');
	};

	toggle.addEventListener('click', () => {
		const isOpen = toggle.getAttribute('aria-expanded') === 'true';

		menu.classList.toggle('hidden', isOpen);
		toggle.setAttribute('aria-expanded', String(!isOpen));
		toggle.setAttribute('aria-label', isOpen ? 'Open navigation menu' : 'Close navigation menu');
	});

	menu.querySelectorAll('a').forEach((link) => {
		link.addEventListener('click', closeMenu);
	});
});
