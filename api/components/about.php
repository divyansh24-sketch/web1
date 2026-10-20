<!-- =================================================================
     COMPONENT: ABOUT & ARCHITECTURAL HERITAGE
     Brand: SUPER HYLAM | Ultra-Luxury Warm Ivory & Champagne Theme (#faf8f5)
     Matches: Navbar, Hero, Brands, Luxury Laminates, Simple Gallery,
              Power of Six, Our Story, Features
     Contains scoped HTML, CSS, and 3D Interactive Mouse Parallax Script
     ================================================================= -->
<style>
/* Import Luxury Typography */
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap');

.superhylam-about-section {
  position: relative;
  width: 100%;
  padding: 105px 40px;
  box-sizing: border-box;
  background-color: #faf8f5;
  color: #1c1917;
  overflow: hidden;
  border-top: 1px solid rgba(0, 0, 0, 0.05);
}

.superhylam-about-container {
  max-width: 1680px;
  margin: 0 auto;
  position: relative;
  z-index: 2;
}

.superhylam-about-grid {
  display: grid;
  grid-template-columns: 1fr 1.08fr;
  gap: 75px;
  align-items: center;
}

/* -------------------------------------------------------------
   LEFT VISUAL COMPOSITION: 3D Overlapping Frames + Floating Pill
   ------------------------------------------------------------- */
.superhylam-about-visual-wrapper {
  position: relative;
  width: 100%;
  height: 570px;
  perspective: 1200px;
}

/* Background Subtle Decorative Accent Ring */
.superhylam-about-visual-decor {
  position: absolute;
  top: -20px;
  left: -20px;
  width: 280px;
  height: 280px;
  border: 1.5px dashed rgba(189, 160, 140, 0.4);
  border-radius: 50%;
  pointer-events: none;
  z-index: 1;
}

/* Main Architectural Frame */
.superhylam-about-img-main {
  width: 82%;
  height: 86%;
  border-radius: 26px;
  overflow: hidden;
  border: 1px solid rgba(0, 0, 0, 0.08);
  box-shadow: 
    0 25px 65px rgba(28, 25, 23, 0.1),
    0 4px 15px rgba(0, 0, 0, 0.03);
  position: absolute;
  top: 0;
  left: 0;
  z-index: 2;
  background: #e8e4dc;
  transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s ease;
}

.superhylam-about-img-main img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}

.superhylam-about-visual-wrapper:hover .superhylam-about-img-main img {
  transform: scale(1.04);
}

/* Overlapping Accent Frame */
.superhylam-about-img-accent {
  width: 58%;
  height: 54%;
  border-radius: 22px;
  overflow: hidden;
  border: 4px solid #ffffff;
  box-shadow: 
    0 30px 70px rgba(28, 25, 23, 0.16),
    0 8px 25px rgba(0, 0, 0, 0.06);
  position: absolute;
  bottom: 0;
  right: 15px;
  z-index: 3;
  background: #dfdad0;
  transform: translateZ(40px);
  transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s ease;
}

.superhylam-about-img-accent img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}

.superhylam-about-visual-wrapper:hover .superhylam-about-img-accent img {
  transform: scale(1.06);
}

/* Floating Heritage Badge */
.superhylam-about-experience-pill {
  position: absolute;
  top: 36px;
  right: 0;
  background: rgba(255, 255, 255, 0.94);
  backdrop-filter: blur(25px);
  -webkit-backdrop-filter: blur(25px);
  border: 1px solid rgba(189, 160, 140, 0.4);
  border-radius: 20px;
  padding: 16px 24px;
  display: flex;
  align-items: center;
  gap: 15px;
  box-shadow: 
    0 20px 45px rgba(28, 25, 23, 0.1),
    0 4px 12px rgba(0, 0, 0, 0.03);
  z-index: 5;
  animation: floatHeritagePill 4s ease-in-out infinite alternate;
}

@keyframes floatHeritagePill {
  0% { transform: translateY(0); }
  100% { transform: translateY(-10px); }
}

.superhylam-about-pill-num {
  font-family: 'Cinzel', 'Playfair Display', serif;
  font-size: 34px;
  font-weight: 700;
  color: #a8846c;
  line-height: 1;
}

.superhylam-about-pill-text {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 11px;
  font-weight: 700;
  color: #44403c;
  line-height: 1.35;
  text-transform: uppercase;
  letter-spacing: 0.12em;
}

/* -------------------------------------------------------------
   RIGHT EDITORIAL CONTENT
   ------------------------------------------------------------- */
.superhylam-about-content {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

/* Section Tag with Horizontal Rule */
.superhylam-about-tag-row {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-bottom: 18px;
}

.superhylam-about-tag {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 11.5px;
  font-weight: 700;
  letter-spacing: 0.28em;
  color: #44403c;
  text-transform: uppercase;
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

.superhylam-about-tag i {
  color: #a8846c;
  font-size: 13px;
}

.superhylam-about-tag-line {
  width: 60px;
  height: 1.5px;
  background: #78716c;
  display: inline-block;
}

/* Section Main Heading */
.superhylam-about-title {
  font-family: 'Cinzel', 'Playfair Display', serif;
  font-size: clamp(34px, 4.2vw, 52px);
  font-weight: 500;
  color: #1c1917;
  line-height: 1.18;
  letter-spacing: 0.02em;
  margin: 0 0 24px 0;
}

/* Paragraph Description */
.superhylam-about-desc {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 15px;
  line-height: 1.8;
  color: #57534e;
  margin: 0 0 34px 0;
  max-width: 620px;
}

/* 3-Column Stats Counter Strip */
.superhylam-about-stats-strip {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  width: 100%;
  max-width: 600px;
  padding-top: 28px;
  border-top: 1px solid rgba(0, 0, 0, 0.08);
  margin-bottom: 38px;
}

.superhylam-about-stat-item {
  display: flex;
  flex-direction: column;
}

.superhylam-about-stat-item h4 {
  font-family: 'Cinzel', 'Playfair Display', serif;
  font-size: 32px;
  font-weight: 600;
  color: #1c1917;
  margin: 0 0 4px 0;
  line-height: 1.1;
  letter-spacing: 0.02em;
}

.superhylam-about-stat-item p {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 12px;
  font-weight: 600;
  color: #78716c;
  margin: 0;
  text-transform: uppercase;
  letter-spacing: 0.08em;
}

/* Action CTA Button */
.superhylam-about-cta-btn {
  display: inline-flex;
  align-items: center;
  gap: 14px;
  background-color: #1c1917;
  color: #faf8f5;
  padding: 14px 28px;
  border-radius: 999px;
  text-decoration: none;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 13.5px;
  font-weight: 600;
  letter-spacing: 0.04em;
  transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
  box-shadow: 0 10px 25px rgba(28, 25, 23, 0.12);
  cursor: pointer;
}

.superhylam-about-cta-btn .cta-arrow {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 12px;
  color: #ffffff;
  transition: transform 0.35s ease, background 0.35s ease;
}

.superhylam-about-cta-btn:hover {
  background-color: #a8846c;
  color: #ffffff;
  transform: translateY(-3px);
  box-shadow: 0 16px 35px rgba(168, 132, 108, 0.28);
}

.superhylam-about-cta-btn:hover .cta-arrow {
  background: #ffffff;
  color: #1c1917;
  transform: translateX(4px);
}

/* -------------------------------------------------------------
   RESPONSIVE MEDIA QUERIES
   ------------------------------------------------------------- */
@media (max-width: 1024px) {
  .superhylam-about-grid {
    grid-template-columns: 1fr;
    gap: 50px;
  }
  .superhylam-about-visual-wrapper {
    height: 480px;
    max-width: 650px;
    margin: 0 auto;
  }
  .superhylam-about-section {
    padding: 80px 24px;
  }
}

@media (max-width: 640px) {
  .superhylam-about-section {
    padding: 60px 16px;
  }
  .superhylam-about-visual-wrapper {
    height: 380px;
  }
  .superhylam-about-img-main {
    width: 88%;
    height: 82%;
  }
  .superhylam-about-img-accent {
    width: 62%;
    height: 52%;
    right: 0;
  }
  .superhylam-about-experience-pill {
    padding: 12px 18px;
    top: 20px;
    gap: 10px;
  }
  .superhylam-about-pill-num {
    font-size: 26px;
  }
  .superhylam-about-pill-text {
    font-size: 10px;
  }
  .superhylam-about-stats-strip {
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
  }
  .superhylam-about-stat-item h4 {
    font-size: 24px;
  }
}
</style>

<!-- About Section HTML -->
<section class="superhylam-about-section" id="about">
  <div class="superhylam-about-container">
    <div class="superhylam-about-grid">

      <!-- Left Visual Composition with 3D Overlapping Frames & Mouse Parallax -->
      <div class="superhylam-about-visual-wrapper" id="superhylamAboutVisual">
        <div class="superhylam-about-visual-decor"></div>

        <!-- Main Residence Visual -->
        <div class="superhylam-about-img-main" id="aboutImgMain">
          <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80" alt="Super Hylam Architectural Residence" loading="lazy">
        </div>

        <!-- Overlapping Surface Accent Visual -->
        <div class="superhylam-about-img-accent" id="aboutImgAccent">
          <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=800&q=80" alt="Super Hylam Surface Craftsmanship" loading="lazy">
        </div>
        
        <!-- Floating Heritage Badge -->
        <div class="superhylam-about-experience-pill">
          <span class="superhylam-about-pill-num">25+</span>
          <span class="superhylam-about-pill-text">Years of<br>Excellence</span>
        </div>
      </div>

      <!-- Right Editorial Content -->
      <div class="superhylam-about-content">
        <div class="superhylam-about-tag-row">
          <span class="superhylam-about-tag">
            <i class="fa-solid fa-compass-drafting"></i> Heritage & Philosophy
          </span>
          <span class="superhylam-about-tag-line"></span>
        </div>

        <h2 class="superhylam-about-title">
          Architectural Surfaces That Transcend Trends.
        </h2>

        <p class="superhylam-about-desc">
          Founded in 2000, Super Hylam has evolved from an artisanal surface atelier into India's premier manufacturer of high-pressure architectural laminates, compact surfaces, and bespoke interior finishes. We collaborate directly with leading interior architects, luxury homebuilders, and design visionaries across the globe to craft spaces of enduring distinction.
        </p>

        <!-- Stats Counter Strip -->
        <div class="superhylam-about-stats-strip">
          <div class="superhylam-about-stat-item">
            <h4>250+</h4>
            <p>Master Projects</p>
          </div>
          <div class="superhylam-about-stat-item">
            <h4>500+</h4>
            <p>Texture Varieties</p>
          </div>
          <div class="superhylam-about-stat-item">
            <h4>100%</h4>
            <p>Made in India</p>
          </div>
        </div>

        <!-- Call to Action -->
        <div>
          <a href="#gallery" class="superhylam-about-cta-btn">
            <span>Explore Collection</span>
            <div class="cta-arrow">
              <i class="fa-solid fa-arrow-right"></i>
            </div>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Scoped 3D Interactive Mouse Parallax Script -->
<script>
(function() {
  const wrapper = document.getElementById('superhylamAboutVisual');
  const imgMain = document.getElementById('aboutImgMain');
  const imgAccent = document.getElementById('aboutImgAccent');

  if (wrapper && imgMain && imgAccent && window.innerWidth > 992) {
    wrapper.addEventListener('mousemove', function(e) {
      const rect = wrapper.getBoundingClientRect();
      const x = e.clientX - rect.left - rect.width / 2;
      const y = e.clientY - rect.top - rect.height / 2;

      imgMain.style.transform = `perspective(1000px) rotateY(${x * 0.025}deg) rotateX(${-y * 0.025}deg) translateY(-4px)`;
      imgAccent.style.transform = `perspective(1000px) rotateY(${x * 0.045}deg) rotateX(${-y * 0.045}deg) translateZ(40px) translateY(-8px)`;
    });

    wrapper.addEventListener('mouseleave', function() {
      imgMain.style.transform = 'perspective(1000px) rotateY(0deg) rotateX(0deg) translateY(0px)';
      imgAccent.style.transform = 'perspective(1000px) rotateY(0deg) rotateX(0deg) translateZ(40px) translateY(0px)';
    });
  }
})();
</script>