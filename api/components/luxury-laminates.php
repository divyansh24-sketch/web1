<!-- =================================================================
     COMPONENT: LUXURY LAMINATES (Premium Collection 3-Card Showcase)
     Exact replica of the uploaded reference design
     Contains scoped HTML, CSS, and JavaScript with 3D hover interactions
     ================================================================= -->
<style>
/* Import Luxury Serif Fonts */
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap');

.superhylam-luxury-section {
  position: relative;
  width: 100%;
  padding: 100px 40px 90px 40px;
  box-sizing: border-box;
  background-color: #faf8f5;
  color: #1c1917;
  overflow: hidden;
}

.superhylam-luxury-container {
  max-width: 1680px;
  margin: 0 auto;
  position: relative;
  z-index: 2;
}

/* Header Area (Exact match to screenshot) */
.superhylam-lux-header {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  margin-bottom: 50px;
  flex-wrap: wrap;
  gap: 30px;
}

.superhylam-lux-header-left {
  display: flex;
  flex-direction: column;
}

.superhylam-lux-tag-row {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-bottom: 12px;
}

.superhylam-lux-tag {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 11.5px;
  font-weight: 700;
  letter-spacing: 0.28em;
  color: #44403c;
  text-transform: uppercase;
}

.superhylam-lux-tag-line {
  width: 60px;
  height: 1.5px;
  background: #78716c;
  display: inline-block;
}

.superhylam-lux-title {
  font-family: 'Cinzel', 'Playfair Display', serif;
  font-size: clamp(34px, 4.2vw, 58px);
  font-weight: 500;
  letter-spacing: 0.08em;
  color: #1c1917;
  text-transform: uppercase;
  margin: 0;
  line-height: 1.1;
}

.superhylam-lux-header-right {
  max-width: 340px;
  text-align: right;
}

.superhylam-lux-desc {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 14.5px;
  line-height: 1.55;
  color: #57534e;
  margin: 0;
}

/* 3-Column Card Grid */
.superhylam-lux-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 32px;
  perspective: 1200px;
  margin-bottom: 70px;
}

/* Individual Card (Exact match to screenshot) */
.superhylam-lux-card {
  background: #f5f2eb;
  border: 1px solid rgba(0, 0, 0, 0.05);
  border-radius: 24px;
  padding: 16px 16px 28px 16px;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
  transform-style: preserve-3d;
  cursor: pointer;
  position: relative;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
}

.superhylam-lux-card:hover {
  transform: translateY(-8px);
  background: #ffffff;
  border-color: rgba(197, 155, 39, 0.3);
  box-shadow: 0 25px 60px rgba(28, 25, 23, 0.1);
}

/* Card Image Box */
.superhylam-lux-img-box {
  position: relative;
  width: 100%;
  height: 250px;
  border-radius: 18px;
  overflow: hidden;
  margin-bottom: 24px;
  background-color: #e7e3dc;
}

.superhylam-lux-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}

.superhylam-lux-card:hover .superhylam-lux-img {
  transform: scale(1.06);
}

/* Card Content */
.superhylam-lux-card-body {
  padding: 0 12px;
  display: flex;
  flex-direction: column;
  flex: 1;
}

.superhylam-lux-card-title {
  font-family: 'Playfair Display', serif;
  font-size: 24px;
  font-weight: 600;
  color: #1c1917;
  margin: 0 0 12px 0;
  line-height: 1.25;
}

.superhylam-lux-card-text {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 13.5px;
  line-height: 1.65;
  color: #57534e;
  margin: 0 0 26px 0;
  min-height: 44px;
}

/* Discover More Pill Button (Exact match) */
.superhylam-lux-btn {
  align-self: flex-start;
  display: inline-flex;
  align-items: center;
  gap: 10px;
  background: transparent;
  color: #44403c;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 12.5px;
  font-weight: 600;
  padding: 8px 22px;
  border-radius: 9999px;
  border: 1px solid #bba382;
  text-decoration: none;
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.superhylam-lux-btn:hover {
  background: #1c1917;
  color: #ffffff;
  border-color: #1c1917;
  transform: translateX(4px);
  box-shadow: 0 4px 15px rgba(28, 25, 23, 0.15);
}

.superhylam-lux-btn i {
  font-size: 11px;
  transition: transform 0.3s ease;
}

.superhylam-lux-btn:hover i {
  transform: translateX(3px);
}

/* Bottom Teaser (SPACES ——) */
.superhylam-lux-bottom-teaser {
  display: flex;
  align-items: center;
  gap: 14px;
  padding-top: 20px;
}

.superhylam-teaser-tag {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.28em;
  color: #57534e;
  text-transform: uppercase;
}

.superhylam-teaser-line {
  width: 70px;
  height: 1.5px;
  background: #a8a29e;
  display: inline-block;
}

/* Responsive */
@media (max-width: 1024px) {
  .superhylam-lux-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 680px) {
  .superhylam-luxury-section {
    padding: 70px 20px 60px 20px;
  }
  .superhylam-lux-grid {
    grid-template-columns: 1fr;
    gap: 24px;
  }
  .superhylam-lux-header {
    flex-direction: column;
    align-items: flex-start;
  }
  .superhylam-lux-header-right {
    text-align: left;
  }
  .superhylam-lux-title {
    font-size: 32px;
  }
  .superhylam-lux-img-box {
    height: 210px;
  }
}
</style>

<!-- Luxury Laminates Section HTML -->
<section class="superhylam-luxury-section" id="collections">
  <div class="superhylam-luxury-container">

    <!-- Top Header -->
    <div class="superhylam-lux-header">
      <div class="superhylam-lux-header-left">
        <div class="superhylam-lux-tag-row">
          <span class="superhylam-lux-tag">PREMIUM COLLECTION</span>
          <span class="superhylam-lux-tag-line"></span>
        </div>
        <h2 class="superhylam-lux-title">LUXURY LAMINATES</h2>
      </div>

      <div class="superhylam-lux-header-right">
        <p class="superhylam-lux-desc">
          Extraordinary surfaces crafted with innovation, style and lasting quality.
        </p>
      </div>
    </div>

    <!-- 3 Cards Grid -->
    <div class="superhylam-lux-grid" id="superHylamLuxGrid">

      <!-- Card 1: Compact Laminates -->
      <div class="superhylam-lux-card" data-tilt>
        <div class="superhylam-lux-img-box">
          <img src="assets/image/l1.jpg" alt="Compact Laminates - Solid Core Marble & Woodgrain Textures" class="superhylam-lux-img" loading="lazy">
        </div>
        <div class="superhylam-lux-card-body">
          <h3 class="superhylam-lux-card-title">Compact Laminates</h3>
          <p class="superhylam-lux-card-text">
            High performance, ultra-durable laminates for heavy use areas.
          </p>
          <a href="#gallery" class="superhylam-lux-btn">
            <span>Discover More</span>
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- Card 2: Exterior Laminates -->
      <div class="superhylam-lux-card" data-tilt>
        <div class="superhylam-lux-img-box">
          <img src="assets/image/l2.jpg" alt="Exterior Laminates - Weather Resistant Cladding" class="superhylam-lux-img" loading="lazy">
        </div>
        <div class="superhylam-lux-card-body">
          <h3 class="superhylam-lux-card-title">Exterior Laminates</h3>
          <p class="superhylam-lux-card-text">
            Weather resistant. UV stable. Built for the outdoors.
          </p>
          <a href="#gallery" class="superhylam-lux-btn">
            <span>Discover More</span>
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- Card 3: Decorative Laminates -->
      <div class="superhylam-lux-card" data-tilt>
        <div class="superhylam-lux-img-box">
          <img src="assets/image/l3.jpg" alt="Decorative Laminates - Wardrobes & Interior Wall Surfaces" class="superhylam-lux-img" loading="lazy">
        </div>
        <div class="superhylam-lux-card-body">
          <h3 class="superhylam-lux-card-title">Decorative Laminates</h3>
          <p class="superhylam-lux-card-text">
            Elegant designs and rich textures to bring your interiors to life.
          </p>
          <a href="#gallery" class="superhylam-lux-btn">
            <span>Discover More</span>
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>

    </div>

    <!-- Bottom Teaser: SPACES —— -->
    <div class="superhylam-lux-bottom-teaser">
      <span class="superhylam-teaser-tag">SPACES</span>
      <span class="superhylam-teaser-line"></span>
    </div>

  </div>
</section>

<!-- Scoped 3D Tilt JavaScript -->
<script>
(function() {
  const cards = document.querySelectorAll('.superhylam-lux-card');

  cards.forEach(card => {
    card.addEventListener('mousemove', function(e) {
      if (window.innerWidth < 992) return;
      const rect = this.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;

      const rotateX = ((y - centerY) / centerY) * -8;
      const rotateY = ((x - centerX) / centerX) * 8;

      this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-8px)`;
    });

    card.addEventListener('mouseleave', function() {
      this.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0px)';
    });
  });
})();
</script>