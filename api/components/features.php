<!-- =================================================================
     COMPONENT: FEATURES / SURFACE TECHNOLOGY
     Updated to Super Hylam Luxury Ivory & Champagne Theme (#faf8f5)
     Matches: Luxury Laminates, Our Brands, Power of Six, Our Story
     Contains scoped HTML, CSS, and JavaScript with 3D Card Tilt
     ================================================================= -->
<style>
/* Import Luxury Typography */
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap');

.superhylam-features-section {
  position: relative;
  width: 100%;
  padding: 95px 40px;
  box-sizing: border-box;
  background-color: #faf8f5;
  color: #1c1917;
  overflow: hidden;
  border-top: 1px solid rgba(0, 0, 0, 0.05);
}

.superhylam-features-container {
  max-width: 1680px;
  margin: 0 auto;
  position: relative;
  z-index: 2;
}

/* Header Area (Matching Upper Section Theme) */
.superhylam-feat-header {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  margin-bottom: 55px;
  flex-wrap: wrap;
  gap: 30px;
}

.superhylam-feat-header-left {
  display: flex;
  flex-direction: column;
}

.superhylam-feat-tag-row {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-bottom: 12px;
}

.superhylam-feat-tag {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 11.5px;
  font-weight: 700;
  letter-spacing: 0.28em;
  color: #44403c;
  text-transform: uppercase;
}

.superhylam-feat-tag-line {
  width: 60px;
  height: 1.5px;
  background: #78716c;
  display: inline-block;
}

.superhylam-feat-title {
  font-family: 'Cinzel', 'Playfair Display', serif;
  font-size: clamp(34px, 4.2vw, 54px);
  font-weight: 500;
  letter-spacing: 0.04em;
  color: #1c1917;
  line-height: 1.15;
  margin: 0;
}

.superhylam-feat-desc {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 14.5px;
  line-height: 1.7;
  color: #57534e;
  max-width: 460px;
  margin: 0;
}

/* 4-Column Card Grid */
.superhylam-features-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
  perspective: 1200px;
}

/* Feature Card Tile */
.superhylam-feat-card {
  background: #ffffff;
  border: 1px solid rgba(0, 0, 0, 0.06);
  border-radius: 22px;
  padding: 36px 28px;
  box-sizing: border-box;
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
  position: relative;
  overflow: hidden;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
  transform-style: preserve-3d;
  cursor: pointer;
  display: flex;
  flex-direction: column;
}

.superhylam-feat-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 20%;
  right: 20%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #bda08c, transparent);
  opacity: 0;
  transition: opacity 0.4s ease;
}

.superhylam-feat-card:hover {
  transform: translateY(-8px);
  border-color: rgba(189, 160, 140, 0.45);
  box-shadow: 0 22px 50px rgba(28, 25, 23, 0.1);
}

.superhylam-feat-card:hover::before {
  opacity: 1;
}

/* Icon Bubble */
.superhylam-feat-icon-box {
  width: 64px;
  height: 64px;
  border-radius: 18px;
  background: rgba(189, 160, 140, 0.12);
  border: 1px solid rgba(189, 160, 140, 0.25);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #a8846c;
  font-size: 24px;
  margin-bottom: 26px;
  transition: all 0.4s ease;
}

.superhylam-feat-card:hover .superhylam-feat-icon-box {
  background: #1c1917;
  color: #ffffff;
  border-color: #1c1917;
  transform: rotateY(180deg);
  box-shadow: 0 8px 20px rgba(28, 25, 23, 0.18);
}

/* Card Number */
.superhylam-feat-number {
  position: absolute;
  top: 26px;
  right: 28px;
  font-family: 'Playfair Display', serif;
  font-size: 15px;
  font-weight: 600;
  color: #a8a29e;
  letter-spacing: 0.05em;
}

/* Card Title */
.superhylam-feat-name {
  font-family: 'Playfair Display', serif;
  font-size: 21px;
  font-weight: 600;
  color: #1c1917;
  margin: 0 0 12px 0;
  line-height: 1.3;
}

/* Card Text */
.superhylam-feat-text {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 13.5px;
  line-height: 1.65;
  color: #57534e;
  margin: 0 0 22px 0;
  flex: 1;
}

/* Feature Badge */
.superhylam-feat-badge {
  align-self: flex-start;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: #8c6b54;
  background: rgba(189, 160, 140, 0.12);
  padding: 4px 14px;
  border-radius: 999px;
  border: 1px solid rgba(189, 160, 140, 0.28);
}

/* Responsive */
@media (max-width: 1200px) {
  .superhylam-features-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 680px) {
  .superhylam-features-section {
    padding: 65px 20px;
  }
  .superhylam-feat-header {
    flex-direction: column;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 40px;
  }
  .superhylam-feat-title {
    font-size: 32px;
  }
  .superhylam-features-grid {
    grid-template-columns: 1fr;
    gap: 20px;
  }
  .superhylam-feat-card {
    padding: 28px 22px;
  }
}
</style>

<!-- Features Section HTML -->
<section class="superhylam-features-section" id="features">
  <div class="superhylam-features-container">

    <!-- Section Header -->
    <div class="superhylam-feat-header">
      <div class="superhylam-feat-header-left">
        <div class="superhylam-feat-tag-row">
          <span class="superhylam-feat-tag">SURFACE ENGINEERING</span>
          <span class="superhylam-feat-tag-line"></span>
        </div>
        <h2 class="superhylam-feat-title">
          Unrivaled Resilience.<br>Uncompromising Elegance.
        </h2>
      </div>
      <p class="superhylam-feat-desc">
        Every Super Hylam laminate sheet undergoes precision hot-press polymerisation with micro-ceramic shields, delivering architectural surfaces that withstand decades of timeless living.
      </p>
    </div>

    <!-- 4 Feature Cards -->
    <div class="superhylam-features-grid">

      <!-- Card 1: Diamond-Scratch Guard -->
      <div class="superhylam-feat-card" data-tilt>
        <span class="superhylam-feat-number">01</span>
        <div class="superhylam-feat-icon-box">
          <i class="fa-regular fa-gem"></i>
        </div>
        <h3 class="superhylam-feat-name">Diamond-Scratch Guard</h3>
        <p class="superhylam-feat-text">
          Engineered with an electron-beam cured overlay that resists abrasive wear, everyday keys, and heavy commercial foot traffic.
        </p>
        <div class="superhylam-feat-badge">EN 438-2 Certified</div>
      </div>

      <!-- Card 2: Hydro-Lock Seal -->
      <div class="superhylam-feat-card" data-tilt>
        <span class="superhylam-feat-number">02</span>
        <div class="superhylam-feat-icon-box">
          <i class="fa-solid fa-droplet-slash"></i>
        </div>
        <h3 class="superhylam-feat-name">Hydro-Lock Seal</h3>
        <p class="superhylam-feat-text">
          Zero-porosity phenolic core resin prevents water penetration, swelling, and warping even in high-humidity kitchens and spas.
        </p>
        <div class="superhylam-feat-badge">100% Water Resistant</div>
      </div>

      <!-- Card 3: Anti-Smudge Velvet -->
      <div class="superhylam-feat-card" data-tilt>
        <span class="superhylam-feat-number">03</span>
        <div class="superhylam-feat-icon-box">
          <i class="fa-solid fa-fingerprint"></i>
        </div>
        <h3 class="superhylam-feat-name">Anti-Smudge Velvet</h3>
        <p class="superhylam-feat-text">
          Ultra-deep matte technology disperses light uniformly, eliminating fingerprint oils and providing an addictive soft-touch feel.
        </p>
        <div class="superhylam-feat-badge">Soft-Touch Matte</div>
      </div>

      <!-- Card 4: MicrobeShield™ 99.9% -->
      <div class="superhylam-feat-card" data-tilt>
        <span class="superhylam-feat-number">04</span>
        <div class="superhylam-feat-icon-box">
          <i class="fa-solid fa-shield-virus"></i>
        </div>
        <h3 class="superhylam-feat-name">MicrobeShield™ 99.9%</h3>
        <p class="superhylam-feat-text">
          Bio-active ionic silver integration eliminates 99.9% of bacteria and fungal growth on contact, keeping surfaces clean for life.
        </p>
        <div class="superhylam-feat-badge">Antimicrobial Standard</div>
      </div>

    </div>

  </div>
</section>

<!-- Scoped Features JavaScript -->
<script>
(function() {
  const cards = document.querySelectorAll('.superhylam-feat-card');
  
  cards.forEach(card => {
    card.addEventListener('mousemove', function(e) {
      if (window.innerWidth < 992) return;
      const rect = this.getBoundingClientRect();
      const x = e.clientX - rect.left - rect.width / 2;
      const y = e.clientY - rect.top - rect.height / 2;

      const rotateX = -(y / (rect.height / 2)) * 7;
      const rotateY = (x / (rect.width / 2)) * 7;

      this.style.transform = `perspective(800px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-8px)`;
    });

    card.addEventListener('mouseleave', function() {
      this.style.transform = 'perspective(800px) rotateX(0deg) rotateY(0deg) translateY(0px)';
    });
  });
})();
</script>