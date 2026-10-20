<!-- =================================================================
     COMPONENT: SIMPLE GALLERY (Luxury Bento Grid Showcase)
     Customized for Laminates & Decorative Sheets Website
     ================================================================= -->
<style>
/* Import Luxury Serif Fonts */
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap');

.superhylam-simple-gallery-section {
  position: relative;
  width: 100%;
  padding: 95px 40px;
  box-sizing: border-box;
  background-color: #faf8f5;
  color: #1c1917;
  overflow: hidden;
  border-top: 1px solid rgba(0, 0, 0, 0.05);
}

.superhylam-simple-gallery-container {
  max-width: 1680px;
  margin: 0 auto;
}

/* Gallery Header */
.superhylam-sg-header {
  margin-bottom: 45px;
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  flex-wrap: wrap;
  gap: 25px;
}

.superhylam-sg-header-left {
  display: flex;
  flex-direction: column;
}

.superhylam-sg-tag-row {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-bottom: 12px;
}

.superhylam-sg-tag {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 11.5px;
  font-weight: 700;
  letter-spacing: 0.28em;
  color: #44403c;
  text-transform: uppercase;
}

.superhylam-sg-tag-line {
  width: 60px;
  height: 1.5px;
  background: #78716c;
  display: inline-block;
}

.superhylam-sg-title {
  font-family: 'Cinzel', 'Playfair Display', serif;
  font-size: clamp(34px, 4.2vw, 58px);
  font-weight: 500;
  letter-spacing: 0.08em;
  color: #1c1917;
  text-transform: uppercase;
  margin: 0;
  line-height: 1.1;
}

.superhylam-sg-header-right {
  max-width: 380px;
  text-align: right;
}

.superhylam-sg-subtitle {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 14.5px;
  line-height: 1.6;
  color: #57534e;
  margin: 0;
}

/* Main Bento Grid (Top Section) */
.superhylam-sg-bento-top {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr;
  grid-template-rows: 250px 250px;
  gap: 22px;
  margin-bottom: 22px;
}

/* Bottom Grid (4-Column Row) */
.superhylam-sg-grid-bottom {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 22px;
}

/* Individual Gallery Card Item */
.superhylam-sg-card {
  position: relative;
  border-radius: 20px;
  overflow: hidden;
  cursor: pointer;
  background-color: #f3f4f6;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
  transform-style: preserve-3d;
}

.superhylam-sg-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 20px 45px rgba(28, 25, 23, 0.12);
}

/* Tall Card (Spans 2 rows) */
.superhylam-sg-card.tall-card {
  grid-column: 1 / 2;
  grid-row: 1 / 3;
}

/* Card Image */
.superhylam-sg-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
}

.superhylam-sg-card:hover .superhylam-sg-img {
  transform: scale(1.06);
}

/* Bottom Gradient & Text Overlay */
.superhylam-sg-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  background: linear-gradient(to top, rgba(0, 0, 0, 0.76) 0%, rgba(0, 0, 0, 0.22) 40%, transparent 68%);
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  padding: 24px;
  box-sizing: border-box;
}

.superhylam-sg-card-title {
  font-family: 'Cinzel', 'Playfair Display', serif;
  font-size: 17.5px;
  font-weight: 600;
  letter-spacing: 0.04em;
  color: #ffffff;
  margin: 0;
  line-height: 1.3;
  text-shadow: 0 2px 10px rgba(0, 0, 0, 0.75);
  transition: transform 0.3s ease;
}

.superhylam-sg-card:hover .superhylam-sg-card-title {
  transform: translateX(4px);
}

/* Subtle Hover Sheen */
.superhylam-sg-sheen {
  position: absolute;
  top: 0;
  left: -100%;
  width: 60%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.18), transparent);
  transform: skewX(-20deg);
  transition: left 0.75s ease;
  pointer-events: none;
}

.superhylam-sg-card:hover .superhylam-sg-sheen {
  left: 150%;
}

/* Lightbox Modal */
.superhylam-sg-lightbox {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(10, 12, 16, 0.92);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  z-index: 2500;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 24px;
  box-sizing: border-box;
  opacity: 0;
  visibility: hidden;
  transition: all 0.35s ease;
}

.superhylam-sg-lightbox.open {
  opacity: 1;
  visibility: visible;
}

.superhylam-sg-lightbox-box {
  position: relative;
  max-width: 960px;
  max-height: 85vh;
  background: #181b22;
  border-radius: 24px;
  overflow: hidden;
  box-shadow: 0 30px 90px rgba(0, 0, 0, 0.9);
  display: flex;
  flex-direction: column;
}

.superhylam-sg-lightbox-img {
  width: 100%;
  max-height: 70vh;
  object-fit: contain;
  background-color: #0b0c10;
}

.superhylam-sg-lightbox-footer {
  padding: 20px 28px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: #181b22;
  color: #fff;
}

.superhylam-sg-lightbox-caption {
  font-family: 'Cinzel', 'Playfair Display', serif;
  font-size: 18px;
  font-weight: 600;
  letter-spacing: 0.05em;
}

.superhylam-sg-lightbox-close {
  position: absolute;
  top: 16px;
  right: 16px;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: rgba(0, 0, 0, 0.6);
  border: 1px solid rgba(255, 255, 255, 0.2);
  color: #fff;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 16px;
  transition: all 0.3s ease;
}

.superhylam-sg-lightbox-close:hover {
  background: #ffffff;
  color: #000;
}

/* Responsive */
@media (max-width: 1100px) {
  .superhylam-sg-bento-top {
    grid-template-columns: 1fr 1fr;
    grid-template-rows: auto;
  }
  .superhylam-sg-card.tall-card {
    grid-column: 1 / 3;
    grid-row: auto;
    height: 380px;
  }
  .superhylam-sg-card {
    height: 240px;
  }
  .superhylam-sg-grid-bottom {
    grid-template-columns: repeat(2, 1fr);
  }
  .superhylam-sg-header {
    flex-direction: column;
    align-items: flex-start;
  }
  .superhylam-sg-header-right {
    text-align: left;
  }
}

@media (max-width: 680px) {
  .superhylam-simple-gallery-section {
    padding: 60px 16px;
  }
  .superhylam-sg-title {
    font-size: 32px;
  }
  .superhylam-sg-bento-top {
    grid-template-columns: 1fr;
    gap: 16px;
  }
  .superhylam-sg-card.tall-card {
    grid-column: 1;
    height: 290px;
  }
  .superhylam-sg-card {
    height: 210px;
  }
  .superhylam-sg-grid-bottom {
    grid-template-columns: 1fr;
    gap: 16px;
  }
}
</style>

<!-- Simple Gallery HTML Markup -->
<section class="superhylam-simple-gallery-section" id="gallery">
  <div class="superhylam-simple-gallery-container">

    <!-- Section Heading -->
    <div class="superhylam-sg-header">
      <div class="superhylam-sg-header-left">
        <div class="superhylam-sg-tag-row">
          <span class="superhylam-sg-tag">EXQUISITE SURFACES</span>
          <span class="superhylam-sg-tag-line"></span>
        </div>
        <h2 class="superhylam-sg-title">DECORATIVE SHEET PORTFOLIO</h2>
      </div>
      <div class="superhylam-sg-header-right">
        <p class="superhylam-sg-subtitle">
          Discover high-pressure decorative laminates, anti-scratch textures, and designer wood veneers engineered for timeless interiors.
        </p>
      </div>
    </div>

    <!-- Top Bento Grid -->
    <div class="superhylam-sg-bento-top">

      <!-- 1. Tall Featured Card -->
      <div class="superhylam-sg-card tall-card" data-title="Gloss Master & Anti-Scratch Series (1.25mm)">
        <img src="api/assets/image/g1.jpg" alt="Gloss Master & Anti-Scratch Decorative Sheet" class="superhylam-sg-img" loading="lazy">
        <div class="superhylam-sg-overlay">
          <h3 class="superhylam-sg-card-title">Gloss Master (1.25mm)</h3>
        </div>
        <div class="superhylam-sg-sheen"></div>
      </div>

      <!-- 2. Synchronized Wood Grains -->
      <div class="superhylam-sg-card" data-title="Synchronized Wood Grains (Synchro Series)">
        <img src="api/assets/image/g4.jpg" alt="Synchronized Wood Grain Laminate Sheet" class="superhylam-sg-img" loading="lazy">
        <div class="superhylam-sg-overlay">
          <h3 class="superhylam-sg-card-title">Synchronized Wood</h3>
        </div>
        <div class="superhylam-sg-sheen"></div>
      </div>

      <!-- 3. Fluted Panels -->
      <div class="superhylam-sg-card" data-title="Architectural Fluted Panels">
        <img src="api/assets/image/g5.jpg" alt="Architectural Fluted Decorative Panels" class="superhylam-sg-img" loading="lazy">
        <div class="superhylam-sg-overlay">
          <h3 class="superhylam-sg-card-title">Fluted Wall Panels</h3>
        </div>
        <div class="superhylam-sg-sheen"></div>
      </div>

      <!-- 4. Acrylic Matt Touch -->
      <div class="superhylam-sg-card" data-title="Acrylic Matt & Anti-Fingerprint Sheets">
        <img src="api/assets/image/g2.jpg" alt="Acrylic Matt Anti-Fingerprint Sheet" class="superhylam-sg-img" loading="lazy">
        <div class="superhylam-sg-overlay">
          <h3 class="superhylam-sg-card-title">Acrylic Matt Touch</h3>
        </div>
        <div class="superhylam-sg-sheen"></div>
      </div>

      <!-- 5. Designer Abstract Collection -->
      <div class="superhylam-sg-card" data-title="Designer Abstract & Fabric Textures">
        <img src="api/assets/image/g9.jpg" alt="Designer Abstract Laminate Textures" class="superhylam-sg-img" loading="lazy">
        <div class="superhylam-sg-overlay">
          <h3 class="superhylam-sg-card-title">Designer Abstract</h3>
        </div>
        <div class="superhylam-sg-sheen"></div>
      </div>

    </div>

    <!-- Bottom Row (4 Uniform Cards Grid) -->
    <div class="superhylam-sg-grid-bottom">

      <!-- 6. Solid Color Core -->
      <div class="superhylam-sg-card" data-title="Solid Color Core Laminates" style="height: 220px;">
        <img src="api/assets/image/g6.jpg" alt="Solid Color Core Laminate Sheet" class="superhylam-sg-img" loading="lazy">
        <div class="superhylam-sg-overlay">
          <h3 class="superhylam-sg-card-title">Solid Color Core</h3>
        </div>
        <div class="superhylam-sg-sheen"></div>
      </div>

      <!-- 7. Marble & Stone Series -->
      <div class="superhylam-sg-card" data-title="Marble & Stone Gloss Series" style="height: 220px;">
        <img src="api/assets/image/g7.jpg" alt="Marble and Stone Gloss Laminate Sheet" class="superhylam-sg-img" loading="lazy">
        <div class="superhylam-sg-overlay">
          <h3 class="superhylam-sg-card-title">Marble & Stone Series</h3>
        </div>
        <div class="superhylam-sg-sheen"></div>
      </div>

      <!-- 8. Metallic Foil Accents -->
      <div class="superhylam-sg-card" data-title="Metallic Foil & Textured Accents" style="height: 220px;">
        <img src="api/assets/image/g10.jpg" alt="Metallic Foil Textured Sheet" class="superhylam-sg-img" loading="lazy">
        <div class="superhylam-sg-overlay">
          <h3 class="superhylam-sg-card-title">Metallic Foil Accents</h3>
        </div>
        <div class="superhylam-sg-sheen"></div>
      </div>

      <!-- 9. Natural Wood Veneers -->
      <div class="superhylam-sg-card" data-title="Natural Wood Veneer Sheets" style="height: 220px;">
        <img src="api/assets/image/g11.jpg" alt="Natural Wood Veneer Laminate" class="superhylam-sg-img" loading="lazy">
        <div class="superhylam-sg-overlay">
          <h3 class="superhylam-sg-card-title">Natural Wood Veneer</h3>
        </div>
        <div class="superhylam-sg-sheen"></div>
      </div>

    </div>

  </div>
</section>

<!-- Lightbox Modal for Zooming -->
<div class="superhylam-sg-lightbox" id="sgLightbox">
  <div class="superhylam-sg-lightbox-box">
    <button class="superhylam-sg-lightbox-close" id="sgLightboxClose" aria-label="Close Lightbox">
      <i class="fa-solid fa-xmark"></i>
    </button>
    <img src="" alt="Gallery Preview" class="superhylam-sg-lightbox-img" id="sgLightboxImg">
    <div class="superhylam-sg-lightbox-footer">
      <span class="superhylam-sg-lightbox-caption" id="sgLightboxCaption"></span>
      <a href="#contact" class="superhylam-explore-btn" style="padding: 6px 16px; font-size: 13px;" onclick="closeSgLightbox()">
        <span>Request Swatch</span>
      </a>
    </div>
  </div>
</div>

<!-- Scoped Gallery JavaScript -->
<script>
(function() {
  const cards = document.querySelectorAll('.superhylam-sg-card');
  const lightbox = document.getElementById('sgLightbox');
  const lightboxImg = document.getElementById('sgLightboxImg');
  const lightboxCaption = document.getElementById('sgLightboxCaption');
  const lightboxClose = document.getElementById('sgLightboxClose');

  cards.forEach(card => {
    card.addEventListener('click', function() {
      const img = this.querySelector('.superhylam-sg-img');
      const title = this.getAttribute('data-title');
      if (img && lightbox && lightboxImg) {
        lightboxImg.src = img.src;
        lightboxCaption.textContent = title;
        lightbox.classList.add('open');
      }
    });
  });

  window.closeSgLightbox = function() {
    if (lightbox) lightbox.classList.remove('open');
  };

  if (lightboxClose) lightboxClose.addEventListener('click', closeSgLightbox);
  if (lightbox) {
    lightbox.addEventListener('click', function(e) {
      if (e.target === lightbox) closeSgLightbox();
    });
  }
})();
</script>