<!-- =================================================================
     COMPONENT: POWER OF SIX (Horizontal 6-Feature Performance Strip)
     Exact match to uploaded screenshot
     Features: Chemical, Stability, UV & Heat, Abrasion, Anti-Bacterial, Water Resistant
     Horizontal layout with custom rose-gold line art icons & 3D hover
     Contains scoped HTML, CSS, and JavaScript
     ================================================================= -->
<style>
/* Import Luxury Typography */
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600&family=Plus+Jakarta+Sans:wght@500;600;700&display=swap');

.superhylam-pos-section {
  position: relative;
  width: 100%;
  padding: 85px 40px 95px 40px;
  box-sizing: border-box;
  background-color: #faf8f5;
  color: #1c1917;
  overflow: hidden;
  border-top: 1px solid rgba(0, 0, 0, 0.05);
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

.superhylam-pos-container {
  max-width: 1680px;
  margin: 0 auto;
}

/* Header Area */
.superhylam-pos-header {
  text-align: center;
  margin-bottom: 60px;
}

.superhylam-pos-title {
  font-family: 'Cinzel', 'Playfair Display', serif;
  font-size: clamp(38px, 4.8vw, 64px);
  font-weight: 500;
  letter-spacing: 0.18em;
  color: #bda08c;
  text-transform: uppercase;
  margin: 0 0 10px 0;
  line-height: 1.1;
  text-shadow: 0 1px 2px rgba(189, 160, 140, 0.15);
}

.superhylam-pos-subtitle {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 14.5px;
  font-weight: 500;
  color: #78716c;
  letter-spacing: 0.06em;
  margin: 0;
}

/* Horizontal 6-Column Grid */
.superhylam-pos-grid {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  gap: 24px;
  align-items: stretch;
}

/* Individual Feature Block */
.superhylam-pos-item {
  background: #ffffff;
  border: 1px solid rgba(0, 0, 0, 0.05);
  border-radius: 20px;
  padding: 38px 18px 32px 18px;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
  cursor: default;
  position: relative;
  overflow: hidden;
  transform-style: preserve-3d;
}

.superhylam-pos-item:hover {
  transform: translateY(-8px);
  background: #ffffff;
  border-color: rgba(189, 160, 140, 0.45);
  box-shadow: 0 20px 45px rgba(189, 160, 140, 0.15);
}

.superhylam-pos-item::before {
  content: '';
  position: absolute;
  top: 0;
  left: 20%;
  right: 20%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #bda08c, transparent);
  opacity: 0;
  transition: opacity 0.35s ease;
}

.superhylam-pos-item:hover::before {
  opacity: 1;
}

/* Icon Frame */
.superhylam-pos-icon-box {
  width: 90px;
  height: 90px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 24px;
  color: #bda08c;
  transition: all 0.4s ease;
}

.superhylam-pos-item:hover .superhylam-pos-icon-box {
  transform: scale(1.08) rotateY(10deg);
  color: #9d7b63;
}

.superhylam-pos-icon-box svg {
  width: 100%;
  height: 100%;
  filter: drop-shadow(0 2px 8px rgba(189, 160, 140, 0.2));
}

/* Text Label */
.superhylam-pos-label {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 0.18em;
  color: #374151;
  text-transform: uppercase;
  line-height: 1.45;
  margin-top: auto;
  transition: color 0.3s ease;
}

.superhylam-pos-item:hover .superhylam-pos-label {
  color: #111827;
}

/* Responsive */
@media (max-width: 1200px) {
  .superhylam-pos-grid {
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
  }
}

@media (max-width: 680px) {
  .superhylam-pos-section {
    padding: 60px 18px;
  }
  .superhylam-pos-header {
    margin-bottom: 40px;
  }
  .superhylam-pos-title {
    font-size: 32px;
    letter-spacing: 0.14em;
  }
  .superhylam-pos-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 14px;
  }
  .superhylam-pos-item {
    padding: 26px 12px 22px 12px;
  }
  .superhylam-pos-icon-box {
    width: 72px;
    height: 72px;
    margin-bottom: 16px;
  }
  .superhylam-pos-label {
    font-size: 11px;
    letter-spacing: 0.14em;
  }
}
</style>

<!-- Power of Six HTML Markup -->
<section class="superhylam-pos-section" id="technology">
  <div class="superhylam-pos-container">

    <!-- Header: POWER OF SIX -->
    <div class="superhylam-pos-header">
      <h2 class="superhylam-pos-title">POWER OF SIX</h2>
      <p class="superhylam-pos-subtitle">Unmatched engineering benchmarks built into every Super Hylam surface</p>
    </div>

    <!-- Horizontal 6-Feature Grid -->
    <div class="superhylam-pos-grid" id="posGrid">

      <!-- 1. Chemical Resistant -->
      <div class="superhylam-pos-item" data-tilt>
        <div class="superhylam-pos-icon-box">
          <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="14" y="12" width="52" height="52" stroke="currentColor" stroke-width="1.8"/>
            <line x1="10" y1="64" x2="70" y2="64" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
            <line x1="14" y1="67" x2="66" y2="67" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
            <path d="M26 22L44 38C46 39.8 47 43 45.5 45.5C44 48 40.5 48.5 38 46.5L20 30" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            <line x1="24" y1="20" x2="28" y2="24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            <line x1="28" y1="27" x2="33" y2="31" stroke="currentColor" stroke-width="1.4"/>
            <path d="M28 50C28 50 25 54 25 56C25 57.8 26.3 59 28 59C29.7 59 31 57.8 31 56C31 54 28 50 28 50Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="superhylam-pos-label">
          CHEMICAL<br>RESISTANT
        </div>
      </div>

      <!-- 2. Dimensional Stability -->
      <div class="superhylam-pos-item" data-tilt>
        <div class="superhylam-pos-icon-box">
          <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="14" y="12" width="52" height="52" stroke="currentColor" stroke-width="1.8"/>
            <line x1="10" y1="64" x2="70" y2="64" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
            <line x1="10" y1="36" x2="70" y2="36" stroke="currentColor" stroke-width="2"/>
            <line x1="40" y1="22" x2="40" y2="32" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            <path d="M37 29L40 32L43 29" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            <line x1="29" y1="50" x2="29" y2="40" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            <path d="M26 43L29 40L32 43" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            <line x1="51" y1="50" x2="51" y2="40" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            <path d="M48 43L51 40L54 43" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="superhylam-pos-label">
          DIMENSIONAL<br>STABILITY
        </div>
      </div>

      <!-- 3. UV & Heat Resistant -->
      <div class="superhylam-pos-item" data-tilt>
        <div class="superhylam-pos-icon-box">
          <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="14" y="12" width="52" height="52" stroke="currentColor" stroke-width="1.8"/>
            <line x1="10" y1="64" x2="70" y2="64" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
            <path d="M48 12C48 24 58 34 70 34" stroke="currentColor" stroke-width="1.8"/>
            <line x1="44" y1="18" x2="40" y2="15" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
            <line x1="52" y1="26" x2="47" y2="23" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
            <line x1="62" y1="36" x2="58" y2="32" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
            <line x1="58" y1="28" x2="34" y2="58" stroke="currentColor" stroke-width="1.8"/>
            <line x1="34" y1="58" x2="20" y2="50" stroke="currentColor" stroke-width="1.8"/>
            <path d="M24 50L20 50L21 54" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="superhylam-pos-label">
          UV & HEAT<br>RESISTANT
        </div>
      </div>

      <!-- 4. Abrasion Resistant -->
      <div class="superhylam-pos-item" data-tilt>
        <div class="superhylam-pos-icon-box">
          <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="14" y="12" width="52" height="52" stroke="currentColor" stroke-width="1.8"/>
            <line x1="10" y1="64" x2="70" y2="64" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
            <line x1="14" y1="67" x2="66" y2="67" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
            <path d="M28 50C31 40 37 30 42 22" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
            <path d="M36 53C39 42 45 32 50 25" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
            <path d="M44 55C47 45 53 36 58 30" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
          </svg>
        </div>
        <div class="superhylam-pos-label">
          ABRASION<br>RESISTANT
        </div>
      </div>

      <!-- 5. Anti Bacterial -->
      <div class="superhylam-pos-item" data-tilt>
        <div class="superhylam-pos-icon-box">
          <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="14" y="12" width="52" height="52" stroke="currentColor" stroke-width="1.8"/>
            <line x1="10" y1="64" x2="70" y2="64" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
            <line x1="14" y1="67" x2="66" y2="67" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
            <path d="M33 39L36 33L39 39L45 42L39 45L36 51L33 45L27 42Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/>
            <path d="M48 27L50 22L52 27L57 29L52 31L50 36L48 31L43 29Z" stroke="currentColor" stroke-width="1.4" stroke-linejoin="round"/>
            <path d="M45 49V53M43 51H47" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
            <path d="M27 28V32M25 30H29" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
          </svg>
        </div>
        <div class="superhylam-pos-label">
          ANTI<br>BACTERIAL
        </div>
      </div>

      <!-- 6. Water Resistant -->
      <div class="superhylam-pos-item" data-tilt>
        <div class="superhylam-pos-icon-box">
          <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="14" y="12" width="52" height="52" stroke="currentColor" stroke-width="1.8"/>
            <line x1="10" y1="64" x2="70" y2="64" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
            <line x1="14" y1="67" x2="66" y2="67" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
            <path d="M47 22C47 22 43 27 43 30C43 32.2 44.8 34 47 34C49.2 34 51 32.2 51 30C51 27 47 22 47 22Z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
            <path d="M33 34C33 34 29 39 29 42C29 44.2 30.8 46 33 46C35.2 46 37 44.2 37 42C37 39 33 34 33 34Z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
            <path d="M45 41C45 41 41 46 41 49C41 51.2 42.8 53 45 53C47.2 53 49 51.2 49 49C49 46 45 41 45 41Z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="superhylam-pos-label">
          WATER<br>RESISTANT
        </div>
      </div>

    </div>

  </div>
</section>

<!-- Scoped 3D Tilt JavaScript -->
<script>
(function() {
  const items = document.querySelectorAll('.superhylam-pos-item');

  items.forEach(item => {
    item.addEventListener('mousemove', function(e) {
      if (window.innerWidth < 992) return;
      const rect = this.getBoundingClientRect();
      const x = e.clientX - rect.left - rect.width / 2;
      const y = e.clientY - rect.top - rect.height / 2;

      const rotateX = -(y / (rect.height / 2)) * 8;
      const rotateY = (x / (rect.width / 2)) * 8;

      this.style.transform = `perspective(700px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-8px)`;
    });

    item.addEventListener('mouseleave', function() {
      this.style.transform = 'perspective(700px) rotateX(0deg) rotateY(0deg) translateY(0px)';
    });
  });
})();
</script>