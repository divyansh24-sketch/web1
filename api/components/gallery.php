<!-- =================================================================
     COMPONENT: GALLERY (3D Laminate Collection & Interactive Cards)
     Contains scoped HTML, CSS, and JavaScript
     ================================================================= -->
<style>
.aakriti-gallery-section {
  position: relative;
  padding: 110px 24px;
  background: #0d0f14;
  overflow: hidden;
}

.aakriti-gallery-container {
  max-width: 1680px;
  margin: 0 auto;
  position: relative;
  z-index: 2;
}

.aakriti-gallery-header {
  text-align: center;
  max-width: 760px;
  margin: 0 auto 50px auto;
}

.aakriti-gallery-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.25em;
  color: #d4af37;
  text-transform: uppercase;
  margin-bottom: 14px;
}

.aakriti-gallery-title {
  font-family: 'Syne', sans-serif;
  font-size: clamp(32px, 3.8vw, 56px);
  font-weight: 800;
  color: #ffffff;
  line-height: 1.15;
  letter-spacing: -0.02em;
  margin-bottom: 16px;
}

.aakriti-gallery-subtitle {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 15px;
  line-height: 1.7;
  color: rgba(255, 255, 255, 0.65);
}

/* Category Filter Tabs */
.aakriti-filter-pills {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  flex-wrap: wrap;
  margin-bottom: 50px;
}

.aakriti-filter-btn {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
  color: rgba(255, 255, 255, 0.75);
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 13.5px;
  font-weight: 600;
  padding: 10px 22px;
  border-radius: 9999px;
  cursor: pointer;
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.aakriti-filter-btn:hover {
  background: rgba(255, 255, 255, 0.12);
  color: #ffffff;
  transform: translateY(-2px);
}

.aakriti-filter-btn.active {
  background: #ffffff;
  color: #0b0c10;
  border-color: #ffffff;
  font-weight: 700;
  box-shadow: 0 8px 25px rgba(255, 255, 255, 0.25);
}

/* 3D Cards Grid */
.aakriti-cards-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
  perspective: 1200px;
}

.aakriti-lam-card {
  background: rgba(18, 21, 28, 0.7);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 24px;
  overflow: hidden;
  box-shadow: 0 20px 45px rgba(0, 0, 0, 0.45);
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
  transform-style: preserve-3d;
  position: relative;
  cursor: pointer;
}

.aakriti-lam-card:hover {
  border-color: rgba(212, 175, 55, 0.4);
  box-shadow: 0 30px 70px rgba(0, 0, 0, 0.7), 0 0 40px rgba(212, 175, 55, 0.15);
}

.aakriti-lam-preview {
  position: relative;
  width: 100%;
  height: 280px;
  overflow: hidden;
  background-color: #1a1e27;
}

.aakriti-lam-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}

.aakriti-lam-card:hover .aakriti-lam-img {
  transform: scale(1.08);
}

/* Dynamic Interactive Lighting Simulator on Card */
.aakriti-lam-light-sheen {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  background: radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.3) 0%, transparent 60%);
  opacity: 0;
  transition: opacity 0.3s ease;
  mix-blend-mode: overlay;
}

.aakriti-lam-card:hover .aakriti-lam-light-sheen {
  opacity: 1;
}

.aakriti-lam-tag-floating {
  position: absolute;
  top: 18px;
  left: 18px;
  background: rgba(10, 12, 16, 0.75);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border: 1px solid rgba(255, 255, 255, 0.15);
  padding: 6px 14px;
  border-radius: 999px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 11px;
  font-weight: 700;
  color: #ffffff;
  letter-spacing: 0.1em;
}

.aakriti-lam-3d-badge {
  position: absolute;
  top: 18px;
  right: 18px;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: rgba(10, 12, 16, 0.75);
  backdrop-filter: blur(12px);
  border: 1px solid rgba(255, 255, 255, 0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #d4af37;
  font-size: 13px;
  transition: transform 0.4s ease;
}

.aakriti-lam-card:hover .aakriti-lam-3d-badge {
  transform: rotate(360deg);
  background: #d4af37;
  color: #000;
}

.aakriti-lam-body {
  padding: 24px 28px;
  box-sizing: border-box;
}

.aakriti-lam-code {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 12px;
  font-weight: 700;
  color: #d4af37;
  letter-spacing: 0.15em;
  margin-bottom: 6px;
}

.aakriti-lam-name {
  font-family: 'Syne', sans-serif;
  font-size: 22px;
  font-weight: 700;
  color: #ffffff;
  margin-bottom: 12px;
  letter-spacing: -0.01em;
}

.aakriti-lam-specs-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 12px 0;
  border-top: 1px solid rgba(255, 255, 255, 0.08);
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  margin-bottom: 20px;
}

.aakriti-spec-col {
  display: flex;
  flex-direction: column;
}

.aakriti-spec-label {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 11px;
  color: rgba(255, 255, 255, 0.5);
  text-transform: uppercase;
}

.aakriti-spec-val {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 13px;
  font-weight: 600;
  color: rgba(255, 255, 255, 0.9);
  margin-top: 2px;
}

.aakriti-lam-actions {
  display: flex;
  align-items: center;
  gap: 12px;
}

.aakriti-quickview-btn {
  flex: 1;
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.12);
  color: #ffffff;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 13px;
  font-weight: 600;
  padding: 10px 16px;
  border-radius: 12px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  transition: all 0.3s ease;
}

.aakriti-quickview-btn:hover {
  background: #ffffff;
  color: #000;
  border-color: #ffffff;
}

.aakriti-sample-btn {
  width: 42px;
  height: 42px;
  border-radius: 12px;
  background: rgba(212, 175, 55, 0.12);
  border: 1px solid rgba(212, 175, 55, 0.25);
  color: #d4af37;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s ease;
}

.aakriti-sample-btn:hover {
  background: #d4af37;
  color: #000;
  transform: scale(1.06);
}

/* Quick View 3D Modal */
.aakriti-modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.85);
  backdrop-filter: blur(15px);
  -webkit-backdrop-filter: blur(15px);
  z-index: 2000;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  box-sizing: border-box;
  opacity: 0;
  visibility: hidden;
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.aakriti-modal-backdrop.open {
  opacity: 1;
  visibility: visible;
}

.aakriti-modal-box {
  background: #141720;
  border: 1px solid rgba(255, 255, 255, 0.16);
  border-radius: 28px;
  max-width: 900px;
  width: 100%;
  display: grid;
  grid-template-columns: 1fr 1fr;
  overflow: hidden;
  box-shadow: 0 40px 100px rgba(0, 0, 0, 0.9);
  transform: scale(0.92) translateY(20px);
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
  position: relative;
}

.aakriti-modal-backdrop.open .aakriti-modal-box {
  transform: scale(1) translateY(0);
}

.aakriti-modal-close {
  position: absolute;
  top: 20px;
  right: 20px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  background: rgba(0, 0, 0, 0.5);
  border: 1px solid rgba(255, 255, 255, 0.2);
  color: #fff;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 10;
  transition: all 0.3s ease;
}

.aakriti-modal-close:hover {
  background: #ffffff;
  color: #000;
}

.aakriti-modal-preview-col {
  position: relative;
  height: 100%;
  min-height: 400px;
  background-color: #0b0c10;
}

.aakriti-modal-preview-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.aakriti-modal-info-col {
  padding: 40px 36px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

@media (max-width: 1100px) {
  .aakriti-cards-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .aakriti-cards-grid {
    grid-template-columns: 1fr;
  }
  .aakriti-modal-box {
    grid-template-columns: 1fr;
    max-height: 90vh;
    overflow-y: auto;
  }
  .aakriti-modal-preview-col {
    min-height: 250px;
  }
}
</style>

<!-- Gallery HTML Markup -->
<section class="aakriti-gallery-section" id="gallery">
  <div class="aakriti-gallery-container">

    <div class="aakriti-gallery-header">
      <div class="aakriti-gallery-badge">
        <i class="fa-solid fa-layer-group"></i> Curated Masterworks
      </div>
      <h2 class="aakriti-gallery-title">
        Architectural Textures & Grains
      </h2>
      <p class="aakriti-gallery-subtitle">
        Immerse yourself in precision-synchronized tactile textures. Move your cursor across each surface to witness how specular light illuminates authentic organic grain depths.
      </p>
    </div>

    <!-- Filter Buttons -->
    <div class="aakriti-filter-pills" id="galleryFilters">
      <button class="aakriti-filter-btn active" data-filter="all">All Textures (6)</button>
      <button class="aakriti-filter-btn" data-filter="wood">Royal Woodgrains</button>
      <button class="aakriti-filter-btn" data-filter="marble">Italian Stone & Marble</button>
      <button class="aakriti-filter-btn" data-filter="fluted">Fluted & Metallic</button>
      <button class="aakriti-filter-btn" data-filter="matte">Super Matte Velvet</button>
    </div>

    <!-- 3D Cards Grid -->
    <div class="aakriti-cards-grid" id="lamGrid">

      <!-- Card 1: Smoked Royal Teak -->
      <div class="aakriti-lam-card" data-category="wood" data-name="Smoked Royal Teak" data-code="AK-9402" data-finish="Synchronized Grain" data-thickness="1.25 mm" data-img="https://images.unsplash.com/photo-1546484396-fb3fc6f95f98?auto=format&fit=crop&w=1000&q=80">
        <div class="aakriti-lam-preview">
          <img src="https://images.unsplash.com/photo-1546484396-fb3fc6f95f98?auto=format&fit=crop&w=1000&q=80" alt="Smoked Royal Teak" class="aakriti-lam-img" loading="lazy">
          <div class="aakriti-lam-light-sheen"></div>
          <span class="aakriti-lam-tag-floating">Natural Veneer Feel</span>
          <div class="aakriti-lam-3d-badge" title="3D Spec">
            <i class="fa-solid fa-cube"></i>
          </div>
        </div>
        <div class="aakriti-lam-body">
          <div class="aakriti-lam-code">SERIES: LUXE WOOD • AK-9402</div>
          <h3 class="aakriti-lam-name">Smoked Royal Teak</h3>
          <div class="aakriti-lam-specs-row">
            <div class="aakriti-spec-col">
              <span class="aakriti-spec-label">Finish</span>
              <span class="aakriti-spec-val">Synchronized</span>
            </div>
            <div class="aakriti-spec-col">
              <span class="aakriti-spec-label">Thickness</span>
              <span class="aakriti-spec-val">1.25 mm</span>
            </div>
            <div class="aakriti-spec-col">
              <span class="aakriti-spec-label">Core</span>
              <span class="aakriti-spec-val">Phenolic Resin</span>
            </div>
          </div>
          <div class="aakriti-lam-actions">
            <button class="aakriti-quickview-btn">
              <i class="fa-regular fa-eye"></i> Quick View 3D
            </button>
            <button class="aakriti-sample-btn" title="Order Free Sample">
              <i class="fa-solid fa-box-open"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Card 2: Calacatta Michelangelo -->
      <div class="aakriti-lam-card" data-category="marble" data-name="Calacatta Michelangelo" data-code="AK-8109" data-finish="Mirror High-Gloss" data-thickness="1.50 mm" data-img="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=1000&q=80">
        <div class="aakriti-lam-preview">
          <img src="api/assets/image/g2.jpg" alt="Calacatta Michelangelo Marble" class="aakriti-lam-img" loading="lazy">
          <div class="aakriti-lam-light-sheen"></div>
          <span class="aakriti-lam-tag-floating">Italian Mineral</span>
          <div class="aakriti-lam-3d-badge" title="3D Spec">
            <i class="fa-solid fa-cube"></i>
          </div>
        </div>
        <div class="aakriti-lam-body">
          <div class="aakriti-lam-code">SERIES: MARBLE LUXE • AK-8109</div>
          <h3 class="aakriti-lam-name">Calacatta Michelangelo</h3>
          <div class="aakriti-lam-specs-row">
            <div class="aakriti-spec-col">
              <span class="aakriti-spec-label">Finish</span>
              <span class="aakriti-spec-val">Mirror High-Gloss</span>
            </div>
            <div class="aakriti-spec-col">
              <span class="aakriti-spec-label">Thickness</span>
              <span class="aakriti-spec-val">1.50 mm</span>
            </div>
            <div class="aakriti-spec-col">
              <span class="aakriti-spec-label">Core</span>
              <span class="aakriti-spec-val">Solid Core</span>
            </div>
          </div>
          <div class="aakriti-lam-actions">
            <button class="aakriti-quickview-btn">
              <i class="fa-regular fa-eye"></i> Quick View 3D
            </button>
            <button class="aakriti-sample-btn" title="Order Free Sample">
              <i class="fa-solid fa-box-open"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Card 3: Nordic Fluted Charcoal -->
      <div class="aakriti-lam-card" data-category="fluted" data-name="Nordic Fluted Charcoal" data-code="AK-7033" data-finish="Micro-Fluted 3D" data-thickness="1.30 mm" data-img="https://images.unsplash.com/photo-1533090161767-e6ffed986c88?auto=format&fit=crop&w=1000&q=80">
        <div class="aakriti-lam-preview">
          <img src="https://images.unsplash.com/photo-1533090161767-e6ffed986c88?auto=format&fit=crop&w=1000&q=80" alt="Nordic Fluted Charcoal" class="aakriti-lam-img" loading="lazy">
          <div class="aakriti-lam-light-sheen"></div>
          <span class="aakriti-lam-tag-floating">Acoustic Ribbed</span>
          <div class="aakriti-lam-3d-badge" title="3D Spec">
            <i class="fa-solid fa-cube"></i>
          </div>
        </div>
        <div class="aakriti-lam-body">
          <div class="aakriti-lam-code">SERIES: 3D FLUTED • AK-7033</div>
          <h3 class="aakriti-lam-name">Nordic Fluted Charcoal</h3>
          <div class="aakriti-lam-specs-row">
            <div class="aakriti-spec-col">
              <span class="aakriti-spec-label">Finish</span>
              <span class="aakriti-spec-val">Micro-Fluted 3D</span>
            </div>
            <div class="aakriti-spec-col">
              <span class="aakriti-spec-label">Thickness</span>
              <span class="aakriti-spec-val">1.30 mm</span>
            </div>
            <div class="aakriti-spec-col">
              <span class="aakriti-spec-label">Core</span>
              <span class="aakriti-spec-val">Marine Grade</span>
            </div>
          </div>
          <div class="aakriti-lam-actions">
            <button class="aakriti-quickview-btn">
              <i class="fa-regular fa-eye"></i> Quick View 3D
            </button>
            <button class="aakriti-sample-btn" title="Order Free Sample">
              <i class="fa-solid fa-box-open"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Card 4: Nero Velvet Touch -->
      <div class="aakriti-lam-card" data-category="matte" data-name="Nero Velvet Touch" data-code="AK-5201" data-finish="Thermal Matte" data-thickness="1.25 mm" data-img="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?auto=format&fit=crop&w=1000&q=80">
        <div class="aakriti-lam-preview">
          <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?auto=format&fit=crop&w=1000&q=80" alt="Nero Velvet Touch" class="aakriti-lam-img" loading="lazy">
          <div class="aakriti-lam-light-sheen"></div>
          <span class="aakriti-lam-tag-floating">Zero Smudge</span>
          <div class="aakriti-lam-3d-badge" title="3D Spec">
            <i class="fa-solid fa-cube"></i>
          </div>
        </div>
        <div class="aakriti-lam-body">
          <div class="aakriti-lam-code">SERIES: SUPER MATTE • AK-5201</div>
          <h3 class="aakriti-lam-name">Nero Velvet Touch</h3>
          <div class="aakriti-lam-specs-row">
            <div class="aakriti-spec-col">
              <span class="aakriti-spec-label">Finish</span>
              <span class="aakriti-spec-val">Thermal Matte</span>
            </div>
            <div class="aakriti-spec-col">
              <span class="aakriti-spec-label">Thickness</span>
              <span class="aakriti-spec-val">1.25 mm</span>
            </div>
            <div class="aakriti-spec-col">
              <span class="aakriti-spec-label">Core</span>
              <span class="aakriti-spec-val">Compact Laminate</span>
            </div>
          </div>
          <div class="aakriti-lam-actions">
            <button class="aakriti-quickview-btn">
              <i class="fa-regular fa-eye"></i> Quick View 3D
            </button>
            <button class="aakriti-sample-btn" title="Order Free Sample">
              <i class="fa-solid fa-box-open"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Card 5: Brushed Champagne -->
      <div class="aakriti-lam-card" data-category="fluted" data-name="Brushed Champagne Brass" data-code="AK-4110" data-finish="Brushed Anodized" data-thickness="1.35 mm" data-img="https://images.unsplash.com/photo-1507499739999-097706ad8914?auto=format&fit=crop&w=1000&q=80">
        <div class="aakriti-lam-preview">
          <img src="https://images.unsplash.com/photo-1507499739999-097706ad8914?auto=format&fit=crop&w=1000&q=80" alt="Brushed Champagne Brass" class="aakriti-lam-img" loading="lazy">
          <div class="aakriti-lam-light-sheen"></div>
          <span class="aakriti-lam-tag-floating">Real Metal Inlay</span>
          <div class="aakriti-lam-3d-badge" title="3D Spec">
            <i class="fa-solid fa-cube"></i>
          </div>
        </div>
        <div class="aakriti-lam-body">
          <div class="aakriti-lam-code">SERIES: METALLIC • AK-4110</div>
          <h3 class="aakriti-lam-name">Brushed Champagne</h3>
          <div class="aakriti-lam-specs-row">
            <div class="aakriti-spec-col">
              <span class="aakriti-spec-label">Finish</span>
              <span class="aakriti-spec-val">Brushed Anodized</span>
            </div>
            <div class="aakriti-spec-col">
              <span class="aakriti-spec-label">Thickness</span>
              <span class="aakriti-spec-val">1.35 mm</span>
            </div>
            <div class="aakriti-spec-col">
              <span class="aakriti-spec-label">Core</span>
              <span class="aakriti-spec-val">Poly-Phenol Core</span>
            </div>
          </div>
          <div class="aakriti-lam-actions">
            <button class="aakriti-quickview-btn">
              <i class="fa-regular fa-eye"></i> Quick View 3D
            </button>
            <button class="aakriti-sample-btn" title="Order Free Sample">
              <i class="fa-solid fa-box-open"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Card 6: Alpine White Oak -->
      <div class="aakriti-lam-card" data-category="wood" data-name="Alpine White Oak" data-code="AK-9214" data-finish="Matte Rift Cut" data-thickness="1.25 mm" data-img="https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=1000&q=80">
        <div class="aakriti-lam-preview">
          <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=1000&q=80" alt="Alpine White Oak" class="aakriti-lam-img" loading="lazy">
          <div class="aakriti-lam-light-sheen"></div>
          <span class="aakriti-lam-tag-floating">Nordic Minimal</span>
          <div class="aakriti-lam-3d-badge" title="3D Spec">
            <i class="fa-solid fa-cube"></i>
          </div>
        </div>
        <div class="aakriti-lam-body">
          <div class="aakriti-lam-code">SERIES: LUXE WOOD • AK-9214</div>
          <h3 class="aakriti-lam-name">Alpine White Oak</h3>
          <div class="aakriti-lam-specs-row">
            <div class="aakriti-spec-col">
              <span class="aakriti-spec-label">Finish</span>
              <span class="aakriti-spec-val">Matte Rift Cut</span>
            </div>
            <div class="aakriti-spec-col">
              <span class="aakriti-spec-label">Thickness</span>
              <span class="aakriti-spec-val">1.25 mm</span>
            </div>
            <div class="aakriti-spec-col">
              <span class="aakriti-spec-label">Core</span>
              <span class="aakriti-spec-val">Phenolic Resin</span>
            </div>
          </div>
          <div class="aakriti-lam-actions">
            <button class="aakriti-quickview-btn">
              <i class="fa-regular fa-eye"></i> Quick View 3D
            </button>
            <button class="aakriti-sample-btn" title="Order Free Sample">
              <i class="fa-solid fa-box-open"></i>
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- 3D Spec Quick View Modal -->
<div class="aakriti-modal-backdrop" id="lamModalBackdrop">
  <div class="aakriti-modal-box">
    <button class="aakriti-modal-close" id="lamModalClose">
      <i class="fa-solid fa-xmark"></i>
    </button>
    <div class="aakriti-modal-preview-col">
      <img src="" alt="Texture Preview" id="modalImg" class="aakriti-modal-preview-img">
    </div>
    <div class="aakriti-modal-info-col">
      <div>
        <div style="color: #d4af37; font-size: 12px; font-weight: 700; letter-spacing: 0.15em;" id="modalCode">SERIES CODE</div>
        <h2 style="font-family: 'Syne', sans-serif; font-size: 30px; color: #fff; margin: 8px 0 16px 0;" id="modalTitle">Laminate Name</h2>
        <p style="color: rgba(255,255,255,0.7); font-size: 14px; line-height: 1.6;" id="modalDesc">
          Crafted with imported European decorative print paper, synchronized tactile plate pressing, and industrial-grade melamine infusion for exceptional scratch, stain, and thermal resilience.
        </p>

        <div style="margin-top: 24px; display: grid; grid-template-columns: 1fr 1fr; gap: 14px; background: rgba(255,255,255,0.03); padding: 16px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <div>
            <span style="font-size: 11px; color: rgba(255,255,255,0.5); display: block;">SHEET SIZE</span>
            <strong style="color: #fff; font-size: 14px;">8ft × 4ft (2440×1220mm)</strong>
          </div>
          <div>
            <span style="font-size: 11px; color: rgba(255,255,255,0.5); display: block;">THICKNESS</span>
            <strong style="color: #fff; font-size: 14px;" id="modalThickness">1.25 mm</strong>
          </div>
          <div>
            <span style="font-size: 11px; color: rgba(255,255,255,0.5); display: block;">FINISH PROFILE</span>
            <strong style="color: #fff; font-size: 14px;" id="modalFinish">Synchronized</strong>
          </div>
          <div>
            <span style="font-size: 11px; color: rgba(255,255,255,0.5); display: block;">WARRANTY</span>
            <strong style="color: #d4af37; font-size: 14px;">15-Year Lifetime</strong>
          </div>
        </div>
      </div>

      <div style="margin-top: 24px; display: flex; gap: 12px;">
        <a href="#contact" class="aakriti-consult-btn" style="flex: 1; justify-content: center;" onclick="closeLamModal()">
          <span>Request Physical Swatch</span>
          <div class="arrow-bubble"><i class="fa-solid fa-arrow-right"></i></div>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Scoped Gallery JavaScript -->
<script>
(function() {
  const cards = document.querySelectorAll('.aakriti-lam-card');
  const filterBtns = document.querySelectorAll('.aakriti-filter-btn');
  const modal = document.getElementById('lamModalBackdrop');
  const modalClose = document.getElementById('lamModalClose');
  const modalImg = document.getElementById('modalImg');
  const modalTitle = document.getElementById('modalTitle');
  const modalCode = document.getElementById('modalCode');
  const modalThickness = document.getElementById('modalThickness');
  const modalFinish = document.getElementById('modalFinish');

  cards.forEach(card => {
    const sheen = card.querySelector('.aakriti-lam-light-sheen');

    card.addEventListener('mousemove', function(e) {
      const rect = this.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      const centerX = rect.width / 2;
      const centerY = rect.height / 2;

      const rotateX = ((y - centerY) / centerY) * -10;
      const rotateY = ((x - centerX) / centerX) * 10;
      this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-8px)`;

      if (sheen) {
        sheen.style.background = `radial-gradient(circle 180px at ${x}px ${y}px, rgba(255, 255, 255, 0.45) 0%, rgba(255, 255, 255, 0.1) 40%, transparent 80%)`;
      }
    });

    card.addEventListener('mouseleave', function() {
      this.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0px)';
    });

    const qvBtn = card.querySelector('.aakriti-quickview-btn');
    const badge = card.querySelector('.aakriti-lam-3d-badge');
    const openCardModal = () => {
      const name = card.getAttribute('data-name');
      const code = card.getAttribute('data-code');
      const thickness = card.getAttribute('data-thickness');
      const finish = card.getAttribute('data-finish');
      const imgSrc = card.getAttribute('data-img');

      modalTitle.textContent = name;
      modalCode.textContent = `SERIES CODE: ${code}`;
      modalThickness.textContent = thickness;
      modalFinish.textContent = finish;
      modalImg.src = imgSrc;
      modal.classList.add('open');
    };

    if (qvBtn) qvBtn.addEventListener('click', openCardModal);
    if (badge) badge.addEventListener('click', openCardModal);
  });

  window.closeLamModal = function() {
    if (modal) modal.classList.remove('open');
  };

  if (modalClose) modalClose.addEventListener('click', closeLamModal);
  if (modal) {
    modal.addEventListener('click', function(e) {
      if (e.target === modal) closeLamModal();
    });
  }

  filterBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      filterBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');

      const filter = this.getAttribute('data-filter');

      cards.forEach(card => {
        const cat = card.getAttribute('data-category');
        if (filter === 'all' || cat === filter) {
          card.style.display = 'block';
          setTimeout(() => { card.style.opacity = '1'; card.style.transform = 'scale(1)'; }, 50);
        } else {
          card.style.opacity = '0';
          card.style.transform = 'scale(0.95)';
          setTimeout(() => { card.style.display = 'none'; }, 300);
        }
      });
    });
  });
})();
</script>