<!-- =================================================================
     COMPONENT: FOOTER & CONTACT
     Brand: SUPER HYLAM | Ultra-Luxury Warm Ivory & Champagne Theme (#faf8f5)
     Matches: Navbar, Hero, Brands, Luxury Laminates, Simple Gallery,
              Power of Six, Our Story, Features, About
     Contains scoped HTML, CSS, and Interactive Newsletter/Toast JavaScript
     ================================================================= -->
<style>
/* Import Luxury Typography */
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap');

.superhylam-footer-section {
  position: relative;
  background-color: #f6f3ed;
  border-top: 1px solid rgba(189, 160, 140, 0.3);
  padding: 100px 40px 45px 40px;
  overflow: hidden;
  color: #1c1917;
  box-sizing: border-box;
}

.superhylam-footer-container {
  max-width: 1680px;
  margin: 0 auto;
  position: relative;
  z-index: 2;
}

/* -------------------------------------------------------------
   CONSULTATION & CONTACT CTA BANNER (High-Contrast Luxury Card)
   ------------------------------------------------------------- */
.superhylam-footer-cta-card {
  background: linear-gradient(135deg, #1c1917 0%, #2a2420 100%);
  border: 1px solid rgba(189, 160, 140, 0.4);
  border-radius: 30px;
  padding: 55px 65px;
  box-sizing: border-box;
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 85px;
  flex-wrap: wrap;
  gap: 30px;
  box-shadow: 
    0 25px 60px rgba(28, 25, 23, 0.16),
    0 4px 15px rgba(0, 0, 0, 0.05);
  position: relative;
  overflow: hidden;
}

.superhylam-footer-cta-card::before {
  content: '';
  position: absolute;
  top: -60px;
  right: -60px;
  width: 260px;
  height: 260px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(189, 160, 140, 0.22) 0%, transparent 70%);
  pointer-events: none;
}

.superhylam-footer-cta-title {
  font-family: 'Cinzel', 'Playfair Display', serif;
  font-size: clamp(26px, 3.2vw, 42px);
  font-weight: 500;
  color: #faf8f5;
  line-height: 1.22;
  letter-spacing: 0.02em;
  margin: 0;
}

.superhylam-footer-cta-sub {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 15px;
  color: rgba(250, 248, 245, 0.75);
  margin-top: 10px;
  max-width: 580px;
  line-height: 1.6;
}

.superhylam-footer-cta-btn {
  display: inline-flex;
  align-items: center;
  gap: 14px;
  background-color: #bda08c;
  color: #1c1917;
  padding: 14px 30px;
  border-radius: 999px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 14px;
  font-weight: 700;
  letter-spacing: 0.04em;
  border: none;
  cursor: pointer;
  transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
}

.superhylam-footer-cta-btn .cta-arrow-circle {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: #1c1917;
  color: #faf8f5;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 12px;
  transition: transform 0.35s ease, background 0.35s ease, color 0.35s ease;
}

.superhylam-footer-cta-btn:hover {
  background-color: #d4af37;
  color: #000000;
  transform: translateY(-3px);
  box-shadow: 0 18px 40px rgba(212, 175, 55, 0.35);
}

.superhylam-footer-cta-btn:hover .cta-arrow-circle {
  background: #000000;
  color: #d4af37;
  transform: translateX(4px);
}

/* -------------------------------------------------------------
   MAIN FOOTER COLUMNS
   ------------------------------------------------------------- */
.superhylam-footer-grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1.15fr 1.4fr;
  gap: 55px;
  margin-bottom: 75px;
}

/* Brand Identity */
.superhylam-footer-brand {
  display: flex;
  align-items: center;
  gap: 14px;
  text-decoration: none;
  margin-bottom: 16px;
}

.superhylam-footer-logo-icon {
  width: 44px;
  height: 44px;
  border-radius: 12px;
  background: #ffffff;
  border: 1px solid rgba(189, 160, 140, 0.35);
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
  display: flex;
  align-items: center;
  justify-content: center;
}

.superhylam-footer-brand-text {
  display: flex;
  flex-direction: column;
}

.superhylam-footer-brand-title {
  font-family: 'Cinzel', serif;
  font-size: 21px;
  font-weight: 700;
  letter-spacing: 0.12em;
  color: #1c1917;
  line-height: 1.1;
}

.superhylam-footer-brand-subtitle {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 9.5px;
  font-weight: 700;
  letter-spacing: 0.22em;
  color: #8a837c;
  text-transform: uppercase;
}

.superhylam-footer-brand-desc {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 14px;
  line-height: 1.75;
  color: #57534e;
  max-width: 380px;
  margin: 18px 0 24px 0;
}

/* Social Media Pill / Circle Buttons */
.superhylam-footer-socials {
  display: flex;
  gap: 10px;
}

.superhylam-social-icon-btn {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: #ffffff;
  border: 1px solid rgba(189, 160, 140, 0.35);
  color: #1c1917;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 15px;
  text-decoration: none;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.superhylam-social-icon-btn:hover {
  background: #1c1917;
  color: #d4af37;
  border-color: #1c1917;
  transform: translateY(-3px);
  box-shadow: 0 8px 20px rgba(28, 25, 23, 0.15);
}

/* Column Headings */
.superhylam-footer-heading {
  font-family: 'Cinzel', 'Playfair Display', serif;
  font-size: 15px;
  font-weight: 600;
  color: #1c1917;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  margin: 0 0 22px 0;
}

/* Navigation Links */
.superhylam-footer-links {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: 13px;
}

.superhylam-footer-links li {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 14px;
  color: #57534e;
  display: flex;
  align-items: center;
}

.superhylam-footer-links a {
  color: #57534e;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 14px;
  text-decoration: none;
  transition: all 0.3s ease;
  display: inline-flex;
  align-items: center;
}

.superhylam-footer-links a:hover {
  color: #a8846c;
  transform: translateX(6px);
  font-weight: 600;
}

.superhylam-footer-links li i {
  color: #a8846c;
  margin-right: 10px;
  font-size: 13px;
  width: 14px;
  text-align: center;
}

/* Newsletter Section */
.superhylam-newsletter-desc {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 13.5px;
  color: #57534e;
  line-height: 1.65;
  margin: 0 0 16px 0;
}

.superhylam-newsletter-form {
  display: flex;
  background: #ffffff;
  border: 1.5px solid rgba(189, 160, 140, 0.4);
  border-radius: 999px;
  padding: 5px;
  box-shadow: 0 4px 18px rgba(0, 0, 0, 0.03);
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.superhylam-newsletter-form:focus-within {
  border-color: #a8846c;
  box-shadow: 0 6px 22px rgba(168, 132, 108, 0.18);
}

.superhylam-newsletter-input {
  background: none;
  border: none;
  outline: none;
  padding: 9px 18px;
  color: #1c1917;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 13.5px;
  flex: 1;
}

.superhylam-newsletter-input::placeholder {
  color: #a8a29e;
}

.superhylam-newsletter-btn {
  background: #1c1917;
  color: #faf8f5;
  border: none;
  border-radius: 999px;
  padding: 10px 22px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 13px;
  font-weight: 600;
  cursor: pointer;
  letter-spacing: 0.02em;
  transition: all 0.3s ease;
}

.superhylam-newsletter-btn:hover {
  background: #a8846c;
  color: #ffffff;
}

/* -------------------------------------------------------------
   BOTTOM COPYRIGHT & POLICY BAR
   ------------------------------------------------------------- */
.superhylam-footer-bottom {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-top: 32px;
  border-top: 1px solid rgba(0, 0, 0, 0.08);
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 13px;
  color: #78716c;
  flex-wrap: wrap;
  gap: 16px;
}

.superhylam-footer-bottom a {
  color: #78716c;
  text-decoration: none;
  transition: color 0.3s ease;
}

.superhylam-footer-bottom a:hover {
  color: #1c1917;
  font-weight: 600;
}

/* -------------------------------------------------------------
   TOAST FEEDBACK POPUP
   ------------------------------------------------------------- */
.superhylam-toast {
  position: fixed;
  bottom: 30px;
  right: 30px;
  background: #1c1917;
  border: 1px solid rgba(189, 160, 140, 0.5);
  color: #faf8f5;
  padding: 16px 24px;
  border-radius: 16px;
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 14px;
  display: flex;
  align-items: center;
  gap: 14px;
  z-index: 3000;
  transform: translateY(120px);
  opacity: 0;
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.superhylam-toast.show {
  transform: translateY(0);
  opacity: 1;
}

/* -------------------------------------------------------------
   RESPONSIVE MEDIA QUERIES
   ------------------------------------------------------------- */
@media (max-width: 1024px) {
  .superhylam-footer-grid {
    grid-template-columns: 1fr 1fr;
    gap: 45px;
  }
  .superhylam-footer-section {
    padding: 80px 24px 35px 24px;
  }
}

@media (max-width: 640px) {
  .superhylam-footer-grid {
    grid-template-columns: 1fr;
    gap: 36px;
  }
  .superhylam-footer-cta-card {
    padding: 35px 24px;
  }
  .superhylam-footer-bottom {
    flex-direction: column;
    align-items: flex-start;
  }
}
</style>

<!-- Footer HTML Markup -->
<footer class="superhylam-footer-section" id="contact">
  <div class="superhylam-footer-container">

    <!-- CTA Consultation Banner -->
    <div class="superhylam-footer-cta-card">
      <div>
        <h3 class="superhylam-footer-cta-title">Ready to Elevate Your Architectural Surfaces?</h3>
        <p class="superhylam-footer-cta-sub">Request a complimentary curated sample box or schedule an architect consultation.</p>
      </div>
      <div>
        <button class="superhylam-footer-cta-btn" id="footerRequestSampleBtn">
          <span>Request Swatch Kit</span>
          <div class="cta-arrow-circle">
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </button>
      </div>
    </div>

    <!-- Main Footer Columns -->
    <div class="superhylam-footer-grid">
      
      <!-- Column 1: Brand Info -->
      <div>
        <div class="superhylam-footer-brand">
          <div class="superhylam-footer-logo-icon">
            <svg viewBox="0 0 48 48" fill="none" width="34" height="34">
              <path d="M12 38L24 10L36 38" stroke="#a8846c" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M16 29H32" stroke="#a8846c" stroke-width="3" stroke-linecap="round"/>
              <path d="M24 18L32 38" stroke="#1c1917" stroke-width="2.5" stroke-linecap="round" stroke-opacity="0.85"/>
            </svg>
          </div>
          <div class="superhylam-footer-brand-text">
            <span class="superhylam-footer-brand-title">SUPER HYLAM</span>
            <span class="superhylam-footer-brand-subtitle">SURFACES & ARCHITECTURE</span>
          </div>
        </div>

        <p class="superhylam-footer-brand-desc">
          Crafting superior grade architectural laminates, textured veneers, and anti-fingerprint surfaces for luxury residences and commercial landmarks since 2000.
        </p>

        <div class="superhylam-footer-socials">
          <a href="#" class="superhylam-social-icon-btn" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" class="superhylam-social-icon-btn" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="#" class="superhylam-social-icon-btn" aria-label="Pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
          <a href="#" class="superhylam-social-icon-btn" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
        </div>
      </div>

      <!-- Column 2: Collections -->
      <div>
        <h4 class="superhylam-footer-heading">Collections</h4>
        <ul class="superhylam-footer-links">
          <li><a href="#gallery">Royal Woodgrains</a></li>
          <li><a href="#gallery">Italian Marble Luxe</a></li>
          <li><a href="#gallery">3D Fluted Panels</a></li>
          <li><a href="#gallery">Velvet Matte Series</a></li>
          <li><a href="#gallery">Exterior Compact</a></li>
        </ul>
      </div>

      <!-- Column 3: Headquarters & Contact -->
      <div>
        <h4 class="superhylam-footer-heading">Headquarters</h4>
        <ul class="superhylam-footer-links">
          <li><i class="fa-solid fa-location-dot"></i> Ambala, Haryana, India</li>
          <li><i class="fa-solid fa-phone"></i> +91 98765 43210</li>
          <li><i class="fa-solid fa-envelope"></i> contact@superhylam.com</li>
          <li><a href="#about"><i class="fa-solid fa-arrow-right"></i> About Our Heritage</a></li>
          <li><a href="#visualizer"><i class="fa-solid fa-arrow-right"></i> 3D Visualizer Studio</a></li>
        </ul>
      </div>

      <!-- Column 4: Newsletter -->
      <div>
        <h4 class="superhylam-footer-heading">Design Dispatch</h4>
        <p class="superhylam-newsletter-desc">
          Receive our quarterly architectural catalog, new texture drops, and specification guides.
        </p>
        <form class="superhylam-newsletter-form" id="newsletterForm" onsubmit="handleNewsletter(event)">
          <input type="email" placeholder="Architect email..." required class="superhylam-newsletter-input" id="newsletterEmail">
          <button type="submit" class="superhylam-newsletter-btn">Subscribe</button>
        </form>
      </div>

    </div>

    <!-- Bottom Bar -->
    <div class="superhylam-footer-bottom">
      <div>
        © <?php echo date('Y'); ?> Super Hylam Architectural Surfaces & Laminates. All Rights Reserved.
      </div>
      <div style="display: flex; gap: 24px;">
        <a href="#">Privacy Policy</a>
        <a href="#">Technical Specs</a>
        <a href="#">Architect Portal</a>
      </div>
    </div>

  </div>
</footer>

<!-- Toast Feedback Popup -->
<div class="superhylam-toast" id="superhylamToast">
  <i class="fa-solid fa-circle-check" style="color: #d4af37; font-size: 20px;"></i>
  <span id="toastMessage">Thank you! Your request has been received.</span>
</div>

<!-- Scoped Footer JavaScript -->
<script>
(function() {
  const toast = document.getElementById('superhylamToast') || document.getElementById('aakritiToast');
  const toastMsg = document.getElementById('toastMessage');
  const swatchBtn = document.getElementById('footerRequestSampleBtn');

  function showToast(msg) {
    if (toast && toastMsg) {
      toastMsg.textContent = msg;
      toast.classList.add('show');
      setTimeout(() => {
        toast.classList.remove('show');
      }, 4000);
    }
  }

  window.handleNewsletter = function(e) {
    e.preventDefault();
    const emailInput = document.getElementById('newsletterEmail');
    if (emailInput && emailInput.value) {
      showToast(`Thank you! Swatch catalog dispatched to ${emailInput.value}`);
      emailInput.value = '';
    }
  };

  if (swatchBtn) {
    swatchBtn.addEventListener('click', () => {
      showToast('Architectural swatch sample box requested! Our team will contact you shortly.');
    });
  }
})();
</script>