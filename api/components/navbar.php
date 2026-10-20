<!-- =================================================================
     COMPONENT: NAVBAR (Transparent Sticky Glassmorphism Header)
     Brand: SUPER HYLAM | Navigation: Home, About Us, Gallery, E-Catalog, Contact
     Contains scoped HTML, CSS, and JavaScript
     ================================================================= -->
<style>
/* Scoped Glassmorphic Sticky Navbar */
:root {
  --sh-nav-glass: rgba(255, 255, 255, 0.45);
  --sh-nav-glass-scrolled: rgba(255, 255, 255, 0.85);
  --sh-nav-border: rgba(255, 255, 255, 0.6);
  --sh-nav-text: #1d2129;
  --sh-accent-gold: #c59b27;
}

.superhylam-nav-wrapper {
  position: sticky;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1000;
  padding: 16px 36px;
  box-sizing: border-box;
  background: var(--sh-nav-glass);
  backdrop-filter: blur(24px);
  -webkit-backdrop-filter: blur(24px);
  border-bottom: 1px solid var(--sh-nav-border);
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.04);
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.superhylam-nav-wrapper.scrolled {
  padding: 10px 36px;
  background: var(--sh-nav-glass-scrolled);
  box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
  border-bottom-color: rgba(200, 205, 215, 0.5);
}

.superhylam-nav-container {
  max-width: 1720px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

/* Brand Logo (SUPER HYLAM) */
.superhylam-brand {
  display: flex;
  align-items: center;
  gap: 14px;
  text-decoration: none;
  cursor: pointer;
  transition: transform 0.3s ease;
}

.superhylam-brand:hover {
  transform: translateY(-1px);
}

.superhylam-brand-logo-icon {
  width: 44px;
  height: 44px;
  display: flex;
  align-items: center;
  justify-content: center;
  filter: drop-shadow(0 3px 10px rgba(197, 155, 39, 0.25));
}

.superhylam-brand-text {
  display: flex;
  flex-direction: column;
}

.superhylam-brand-title {
  font-family: 'Cinzel', 'Playfair Display', serif;
  font-size: 21px;
  font-weight: 700;
  letter-spacing: 0.16em;
  color: #1a1e24;
  text-transform: uppercase;
  line-height: 1.1;
}

.superhylam-brand-subtitle {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 8.5px;
  font-weight: 600;
  letter-spacing: 0.25em;
  color: rgba(45, 52, 65, 0.7);
  text-transform: uppercase;
  margin-top: 3px;
}

/* Center Pill Nav Menu */
.superhylam-pill-menu {
  display: flex;
  align-items: center;
  gap: 4px;
  background: rgba(255, 255, 255, 0.55);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  padding: 5px 8px;
  border-radius: 9999px;
  border: 1px solid rgba(255, 255, 255, 0.8);
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05), inset 0 1px 1px rgba(255, 255, 255, 0.9);
}

.superhylam-nav-link {
  color: #333842;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 13.5px;
  font-weight: 500;
  padding: 8px 18px;
  border-radius: 9999px;
  text-decoration: none;
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  white-space: nowrap;
}

.superhylam-nav-link:hover {
  color: #0b0c10;
  background: rgba(255, 255, 255, 0.75);
}

.superhylam-nav-link.active {
  background: #ffffff;
  color: #0b0c10;
  font-weight: 700;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
}

/* Right Actions (Get a Quote, Icons) */
.superhylam-nav-actions {
  display: flex;
  align-items: center;
  gap: 12px;
}

.superhylam-quote-btn {
  display: inline-flex;
  align-items: center;
  gap: 14px;
  background: #ffffff;
  color: #12151b;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 13.5px;
  font-weight: 700;
  padding: 6px 6px 6px 22px;
  border-radius: 9999px;
  text-decoration: none;
  border: 1px solid rgba(255, 255, 255, 0.9);
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.07);
  transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
}

.superhylam-quote-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
  background: #ffffff;
}

.superhylam-quote-btn .quote-arrow {
  width: 34px;
  height: 34px;
  background: #1a1e24;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #ffffff;
  font-size: 12px;
  transition: transform 0.35s ease, background-color 0.35s ease;
}

.superhylam-quote-btn:hover .quote-arrow {
  background: #c59b27;
  transform: translateX(3px) rotate(-45deg);
}

.superhylam-icon-circle {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.6);
  border: 1px solid rgba(255, 255, 255, 0.85);
  color: #2b303b;
  display: flex;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  font-size: 13.5px;
  transition: all 0.3s ease;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
}

.superhylam-icon-circle:hover {
  background: #ffffff;
  color: #c59b27;
  transform: scale(1.08);
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
}

.superhylam-menu-toggle {
  display: none;
  background: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(255, 255, 255, 0.9);
  border-radius: 12px;
  width: 42px;
  height: 42px;
  cursor: pointer;
  align-items: center;
  justify-content: center;
  color: #1a1e24;
  font-size: 17px;
}

.superhylam-mobile-drawer {
  display: none;
  position: absolute;
  top: 100%;
  left: 20px;
  right: 20px;
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(25px);
  -webkit-backdrop-filter: blur(25px);
  border: 1px solid rgba(255, 255, 255, 0.9);
  border-radius: 24px;
  padding: 24px;
  flex-direction: column;
  gap: 12px;
  z-index: 999;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
  transform: translateY(-15px);
  opacity: 0;
  pointer-events: none;
  transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
}

.superhylam-mobile-drawer.open {
  transform: translateY(10px);
  opacity: 1;
  pointer-events: auto;
}

.superhylam-mobile-drawer .superhylam-nav-link {
  padding: 12px 20px;
  font-size: 15px;
  border-radius: 14px;
  text-align: center;
}

@media (max-width: 1080px) {
  .superhylam-pill-menu { display: none; }
  .superhylam-menu-toggle { display: flex; }
  .superhylam-mobile-drawer { display: flex; }
}

@media (max-width: 640px) {
  .superhylam-nav-wrapper { padding: 12px 18px; }
  .superhylam-brand-title { font-size: 18px; }
  .superhylam-brand-subtitle { font-size: 7.5px; }
  .superhylam-icon-circle.hide-mobile { display: none; }
  .superhylam-quote-btn { font-size: 12px; padding: 4px 4px 4px 14px; }
}
</style>

<!-- Navbar Markup -->
<header class="superhylam-nav-wrapper" id="superHylamNavbar">
  <div class="superhylam-nav-container">

    <!-- Brand Logo: SUPER HYLAM -->
    <a href="#hero" class="superhylam-brand" aria-label="Super Hylam Decorative Laminates">
      <div class="superhylam-brand-logo-icon">
        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" width="42" height="42">
          <path d="M12 38L24 10L36 38" stroke="url(#shGoldGrad)" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M16 29H32" stroke="url(#shGoldGrad)" stroke-width="3" stroke-linecap="round"/>
          <path d="M24 18L32 38" stroke="#1d2129" stroke-width="2.5" stroke-linecap="round" stroke-opacity="0.85"/>
          <defs>
            <linearGradient id="shGoldGrad" x1="12" y1="10" x2="36" y2="38" gradientUnits="userSpaceOnUse">
              <stop stop-color="#E5C158"/>
              <stop offset="0.5" stop-color="#C59B27"/>
              <stop offset="1" stop-color="#936F17"/>
            </linearGradient>
          </defs>
        </svg>
      </div>
      <div class="superhylam-brand-text">
        <span class="superhylam-brand-title">SUPER HYLAM</span>
        <span class="superhylam-brand-subtitle">SURFACES FOR A BETTER TOMORROW</span>
      </div>
    </a>

    <!-- Center Navigation (Home, About Us, Gallery, E-Catalog, Contact) -->
    <nav class="superhylam-pill-menu" aria-label="Main Navigation">
      <a href="#hero" class="superhylam-nav-link active">Home</a>
      <a href="#about" class="superhylam-nav-link">About Us</a>
      <a href="#gallery" class="superhylam-nav-link">Gallery</a>
      <a href="#catalog" class="superhylam-nav-link">E-Catalog</a>
      <a href="#contact" class="superhylam-nav-link">Contact</a>
    </nav>

    <!-- Right Actions -->
    <div class="superhylam-nav-actions">
      

      <a href="#gallery" class="superhylam-icon-circle hide-mobile" title="Search Textures" aria-label="Search">
        <i class="fa-solid fa-magnifying-glass"></i>
      </a>
      <a href="#gallery" class="superhylam-icon-circle hide-mobile" title="Favorites" aria-label="Wishlist">
        <i class="fa-regular fa-heart"></i>
      </a>
      <a href="#catalog" class="superhylam-icon-circle" title="Catalog / Samples" aria-label="Catalog">
        <i class="fa-solid fa-bag-shopping"></i>
      </a>

      <button class="superhylam-menu-toggle" id="superHylamNavToggle" aria-label="Toggle Menu">
        <i class="fa-solid fa-bars"></i>
      </button>
    </div>

  </div>

  <!-- Mobile Drawer -->
  <div class="superhylam-mobile-drawer" id="superHylamMobileDrawer">
    <a href="#hero" class="superhylam-nav-link active" onclick="closeShNav()">Home</a>
    <a href="#about" class="superhylam-nav-link" onclick="closeShNav()">About Us</a>
    <a href="#gallery" class="superhylam-nav-link" onclick="closeShNav()">Gallery</a>
    <a href="#catalog" class="superhylam-nav-link" onclick="closeShNav()">E-Catalog</a>
    <a href="#contact" class="superhylam-nav-link" onclick="closeShNav()">Contact</a>
  </div>
</header>

<!-- Scoped Navbar JavaScript -->
<script>
(function() {
  const navbar = document.getElementById('superHylamNavbar');
  const toggleBtn = document.getElementById('superHylamNavToggle');
  const drawer = document.getElementById('superHylamMobileDrawer');
  const navLinks = document.querySelectorAll('.superhylam-pill-menu .superhylam-nav-link');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 30) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });

  if (toggleBtn && drawer) {
    toggleBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      drawer.classList.toggle('open');
      const icon = toggleBtn.querySelector('i');
      if (drawer.classList.contains('open')) {
        icon.className = 'fa-solid fa-xmark';
      } else {
        icon.className = 'fa-solid fa-bars';
      }
    });

    document.addEventListener('click', (e) => {
      if (!drawer.contains(e.target) && !toggleBtn.contains(e.target)) {
        drawer.classList.remove('open');
        const icon = toggleBtn.querySelector('i');
        if (icon) icon.className = 'fa-solid fa-bars';
      }
    });
  }

  navLinks.forEach(link => {
    link.addEventListener('click', function() {
      navLinks.forEach(l => l.classList.remove('active'));
      this.classList.add('active');
    });
  });

  window.closeShNav = function() {
    if (drawer) {
      drawer.classList.remove('open');
      const icon = toggleBtn.querySelector('i');
      if (icon) icon.className = 'fa-solid fa-bars';
    }
  };
})();
</script>