<!-- =================================================================
     COMPONENT: OUR BRANDS (Brand Showcase Strip)
     Exact match to the uploaded screenshot
     Brands: KIYALAM, CITY LITE, ASKAYLITE, RCIAM, COMPACT DECOR
     Contains scoped HTML, CSS, and JavaScript with 3D hover tilt
     ================================================================= -->
<style>
/* Import Typography */
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Playfair+Display:wght@500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700&display=swap');

.superhylam-brands-section {
  position: relative;
  width: 100%;
  padding: 55px 40px 65px 40px;
  box-sizing: border-box;
  background-color: #faf8f5;
  border-top: 1px solid rgba(0, 0, 0, 0.05);
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  overflow: hidden;
}

.superhylam-brands-container {
  max-width: 1680px;
  margin: 0 auto;
}

/* Header Tag: OUR BRANDS —— */
.superhylam-brands-tag-row {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-bottom: 24px;
}

.superhylam-brands-tag {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 11.5px;
  font-weight: 700;
  letter-spacing: 0.28em;
  color: #44403c;
  text-transform: uppercase;
}

.superhylam-brands-tag-line {
  width: 60px;
  height: 1.5px;
  background: #78716c;
  display: inline-block;
}

/* 5-Column Brands Row (Exact Match) */
.superhylam-brands-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 20px;
  perspective: 1000px;
}

/* Brand Card Tile */
.superhylam-brand-card {
  background: #ffffff;
  border: 1px solid rgba(0, 0, 0, 0.06);
  border-radius: 16px;
  height: 105px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  box-shadow: 0 3px 15px rgba(0, 0, 0, 0.02);
  transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
  transform-style: preserve-3d;
  cursor: pointer;
  padding: 16px 20px;
  box-sizing: border-box;
  position: relative;
  overflow: hidden;
}

.superhylam-brand-card:hover {
  transform: translateY(-5px);
  border-color: rgba(197, 155, 39, 0.4);
  box-shadow: 0 14px 35px rgba(28, 25, 23, 0.09);
}

/* Subtle Card Glow on Hover */
.superhylam-brand-card::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border-radius: 16px;
  box-shadow: inset 0 0 20px rgba(197, 155, 39, 0.08);
  opacity: 0;
  transition: opacity 0.35s ease;
  pointer-events: none;
}

.superhylam-brand-card:hover::after {
  opacity: 1;
}

/* Vector Typography Inside Cards */
.brand-logo-text-wrap {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  transition: transform 0.3s ease;
}

.superhylam-brand-card:hover .brand-logo-text-wrap {
  transform: scale(1.05);
}

/* 1. KIYALAM LAMINATES */
.brand-kiyalam-title {
  font-family: 'Playfair Display', serif;
  font-size: 18px;
  font-weight: 700;
  letter-spacing: 0.16em;
  color: #1a1e24;
  line-height: 1.1;
  text-transform: uppercase;
}
.brand-kiyalam-sub {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 8px;
  font-weight: 700;
  letter-spacing: 0.28em;
  color: #4b5563;
  text-transform: uppercase;
  margin-top: 4px;
}

/* 2. CITY LITE */
.brand-citylite-title {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 15.5px;
  font-weight: 600;
  letter-spacing: 0.25em;
  color: #1a1e24;
  text-transform: uppercase;
}

/* 3. ASKAYLITE */
.brand-askaylite-title {
  font-family: 'Playfair Display', 'Cinzel', serif;
  font-size: 16.5px;
  font-weight: 500;
  letter-spacing: 0.24em;
  color: #1a1e24;
  text-transform: uppercase;
}

/* 4. RCIAM LAMINATES */
.brand-rciam-title {
  font-family: 'Cinzel', serif;
  font-size: 18px;
  font-weight: 700;
  letter-spacing: 0.18em;
  color: #1a1e24;
  text-transform: uppercase;
  position: relative;
  display: inline-block;
  padding-bottom: 2px;
}
.brand-rciam-title::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 5%;
  right: 5%;
  height: 1px;
  background: #2a2e36;
}
.brand-rciam-sub {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 8px;
  font-weight: 700;
  letter-spacing: 0.28em;
  color: #4b5563;
  text-transform: uppercase;
  margin-top: 4px;
}

/* 5. COMPACT DECOR */
.brand-compact-title {
  font-family: 'Playfair Display', serif;
  font-size: 16.5px;
  font-weight: 600;
  letter-spacing: 0.24em;
  color: #1a1e24;
  text-transform: uppercase;
  line-height: 1.1;
}
.brand-compact-sub {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 8px;
  font-weight: 700;
  letter-spacing: 0.32em;
  color: #4b5563;
  text-transform: uppercase;
  margin-top: 4px;
}

/* Responsive */
@media (max-width: 1024px) {
  .superhylam-brands-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}

@media (max-width: 680px) {
  .superhylam-brands-section {
    padding: 40px 18px;
  }
  .superhylam-brands-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 14px;
  }
  .superhylam-brand-card {
    height: 90px;
    padding: 12px;
  }
  .brand-kiyalam-title { font-size: 15px; }
  .brand-citylite-title { font-size: 13px; }
  .brand-askaylite-title { font-size: 14px; }
  .brand-rciam-title { font-size: 15px; }
  .brand-compact-title { font-size: 14px; }
}
</style>

<!-- Our Brands Section HTML -->
<section class="superhylam-brands-section" id="brands">
  <div class="superhylam-brands-container">

    <!-- Tag: OUR BRANDS —— -->
    <div class="superhylam-brands-tag-row">
      <span class="superhylam-brands-tag">OUR BRANDS</span>
      <span class="superhylam-brands-tag-line"></span>
    </div>

    <!-- 5 Brand Cards Grid (Exact Replica of Uploaded Screenshot) -->
    <div class="superhylam-brands-grid" id="brandsGrid">

      <!-- Brand 1: KIYALAM LAMINATES -->
      <a href="#gallery" class="superhylam-brand-card" title="Kiyalam Laminates" aria-label="Kiyalam Laminates">
        <div class="brand-logo-text-wrap">
          <span class="brand-kiyalam-title">KIYALAM</span>
          <span class="brand-kiyalam-sub">LAMINATES</span>
        </div>
      </a>

      <!-- Brand 2: CITY LITE -->
      <a href="#gallery" class="superhylam-brand-card" title="City Lite Surfaces" aria-label="City Lite">
        <div class="brand-logo-text-wrap">
          <span class="brand-citylite-title">CITY LITE</span>
        </div>
      </a>

      <!-- Brand 3: ASKAYLITE -->
      <a href="#gallery" class="superhylam-brand-card" title="Askaylite Architectural" aria-label="Askaylite">
        <div class="brand-logo-text-wrap">
          <span class="brand-askaylite-title">ASKAYLITE</span>
        </div>
      </a>

      <!-- Brand 4: RCIAM LAMINATES -->
      <a href="#gallery" class="superhylam-brand-card" title="Rciam Laminates" aria-label="Rciam Laminates">
        <div class="brand-logo-text-wrap">
          <span class="brand-rciam-title">RCIAM</span>
          <span class="brand-rciam-sub">LAMINATES</span>
        </div>
      </a>

      <!-- Brand 5: COMPACT DECOR -->
      <a href="#gallery" class="superhylam-brand-card" title="Compact Decor Laminates" aria-label="Compact Decor">
        <div class="brand-logo-text-wrap">
          <span class="brand-compact-title">COMPACT</span>
          <span class="brand-compact-sub">DECOR</span>
        </div>
      </a>

    </div>

  </div>
</section>

<!-- Scoped 3D Tilt JavaScript -->
<script>
(function() {
  const cards = document.querySelectorAll('.superhylam-brand-card');

  cards.forEach(card => {
    card.addEventListener('mousemove', function(e) {
      if (window.innerWidth < 992) return;
      const rect = this.getBoundingClientRect();
      const x = e.clientX - rect.left - rect.width / 2;
      const y = e.clientY - rect.top - rect.height / 2;

      const rotateX = -(y / (rect.height / 2)) * 6;
      const rotateY = (x / (rect.width / 2)) * 6;

      this.style.transform = `perspective(600px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-5px)`;
    });

    card.addEventListener('mouseleave', function() {
      this.style.transform = 'perspective(600px) rotateX(0deg) rotateY(0deg) translateY(0px)';
    });
  });
})();
</script>