<!-- =================================================================
     COMPONENT: 3D SURFACE STUDIO / ROOM VISUALIZER
     Contains scoped HTML, CSS, and JavaScript
     ================================================================= -->
<style>
.aakriti-visualizer-section {
  position: relative;
  padding: 100px 24px;
  background: radial-gradient(circle at 50% 50%, #151821 0%, #090a0d 100%);
  overflow: hidden;
  border-top: 1px solid rgba(255, 255, 255, 0.08);
}

.aakriti-visualizer-container {
  max-width: 1680px;
  margin: 0 auto;
  position: relative;
  z-index: 2;
}

.aakriti-visualizer-header {
  text-align: center;
  max-width: 800px;
  margin: 0 auto 50px auto;
}

.aakriti-visualizer-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.25em;
  color: #d4af37;
  text-transform: uppercase;
  margin-bottom: 12px;
}

.aakriti-visualizer-title {
  font-family: 'Syne', sans-serif;
  font-size: clamp(32px, 3.8vw, 54px);
  font-weight: 800;
  color: #ffffff;
  line-height: 1.15;
  letter-spacing: -0.02em;
  margin-bottom: 16px;
}

.aakriti-visualizer-subtitle {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 15px;
  line-height: 1.7;
  color: rgba(255, 255, 255, 0.65);
}

/* 3D Studio Stage */
.aakriti-studio-stage {
  position: relative;
  width: 100%;
  height: 640px;
  border-radius: 32px;
  overflow: hidden;
  border: 1px solid rgba(255, 255, 255, 0.15);
  box-shadow: 
    0 40px 100px rgba(0, 0, 0, 0.8),
    inset 0 1px 1px rgba(255, 255, 255, 0.2);
  perspective: 1200px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.aakriti-studio-room {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  transition: all 0.7s cubic-bezier(0.16, 1, 0.3, 1);
  transform: scale(1.02);
}

.aakriti-studio-ambient-vignette {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: radial-gradient(circle at 50% 50%, transparent 40%, rgba(5, 6, 8, 0.85) 100%);
  pointer-events: none;
}

/* HUD Controls */
.aakriti-studio-hud {
  position: absolute;
  bottom: 30px;
  left: 30px;
  right: 30px;
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  pointer-events: none;
  z-index: 10;
  flex-wrap: wrap;
  gap: 20px;
}

.aakriti-swatch-dock {
  background: rgba(14, 17, 23, 0.85);
  backdrop-filter: blur(25px);
  -webkit-backdrop-filter: blur(25px);
  border: 1px solid rgba(255, 255, 255, 0.16);
  border-radius: 24px;
  padding: 12px 18px;
  display: flex;
  align-items: center;
  gap: 14px;
  pointer-events: auto;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.6);
}

.aakriti-swatch-label {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.15em;
  color: rgba(255, 255, 255, 0.5);
  text-transform: uppercase;
  padding-right: 8px;
  border-right: 1px solid rgba(255, 255, 255, 0.1);
}

.aakriti-swatch-btn {
  width: 52px;
  height: 52px;
  border-radius: 14px;
  border: 2px solid transparent;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
}

.aakriti-swatch-btn img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.aakriti-swatch-btn:hover {
  transform: translateY(-4px) scale(1.08);
}

.aakriti-swatch-btn.active {
  border-color: #d4af37;
  transform: translateY(-4px) scale(1.1);
  box-shadow: 0 8px 24px rgba(212, 175, 55, 0.45);
}

.aakriti-material-info-hud {
  background: rgba(14, 17, 23, 0.85);
  backdrop-filter: blur(25px);
  -webkit-backdrop-filter: blur(25px);
  border: 1px solid rgba(255, 255, 255, 0.16);
  border-radius: 20px;
  padding: 16px 24px;
  pointer-events: auto;
  min-width: 250px;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.6);
}

.aakriti-hud-title {
  font-family: 'Syne', sans-serif;
  font-size: 18px;
  font-weight: 700;
  color: #ffffff;
  margin-bottom: 4px;
}

.aakriti-hud-meta {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 12px;
  color: #d4af37;
  font-weight: 600;
  letter-spacing: 0.1em;
}

@media (max-width: 900px) {
  .aakriti-studio-stage {
    height: 480px;
  }
  .aakriti-studio-hud {
    position: static;
    margin-top: 20px;
    pointer-events: auto;
  }
  .aakriti-swatch-dock {
    width: 100%;
    justify-content: center;
  }
}
</style>

<!-- 3D Studio Visualizer HTML -->
<section class="aakriti-visualizer-section" id="visualizer">
  <div class="aakriti-visualizer-container">

    <div class="aakriti-visualizer-header">
      <div class="aakriti-visualizer-badge">
        <i class="fa-solid fa-wand-magic-sparkles"></i> Real-Time Studio
      </div>
      <h2 class="aakriti-visualizer-title">
        3D Architectural Surface Visualizer
      </h2>
      <p class="aakriti-visualizer-subtitle">
        Switch textures in real time to simulate how our luxury laminates transform living spaces, kitchen cabinetry, and feature walls under natural daylight and dusk illumination.
      </p>
    </div>

    <!-- 3D Stage Container -->
    <div class="aakriti-studio-stage" id="studioStage">
      <div class="aakriti-studio-room" id="studioRoom" style="background-image: url('https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1920&q=80');"></div>
      <div class="aakriti-studio-ambient-vignette"></div>

      <!-- HUD Controls -->
      <div class="aakriti-studio-hud">
        <div class="aakriti-swatch-dock">
          <span class="aakriti-swatch-label">SELECT<br>SURFACE</span>

          <button class="aakriti-swatch-btn active" data-name="Italian Dark Walnut" data-code="AK-9402" data-room="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1920&q=80" title="Italian Dark Walnut">
            <img src="https://images.unsplash.com/photo-1546484396-fb3fc6f95f98?auto=format&fit=crop&w=200&q=80" alt="Walnut Swatch">
          </button>

          <button class="aakriti-swatch-btn" data-name="Calacatta Gold Marble" data-code="AK-8109" data-room="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1920&q=80" title="Calacatta Gold Marble">
            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=200&q=80" alt="Marble Swatch">
          </button>

          <button class="aakriti-swatch-btn" data-name="Nordic Fluted Teak" data-code="AK-7033" data-room="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=1920&q=80" title="Nordic Fluted Teak">
            <img src="https://images.unsplash.com/photo-1533090161767-e6ffed986c88?auto=format&fit=crop&w=200&q=80" alt="Fluted Swatch">
          </button>

          <button class="aakriti-swatch-btn" data-name="Brushed Champagne Brass" data-code="AK-4110" data-room="https://images.unsplash.com/photo-1600585154526-990dced4db0d?auto=format&fit=crop&w=1920&q=80" title="Brushed Champagne Brass">
            <img src="https://images.unsplash.com/photo-1507499739999-097706ad8914?auto=format&fit=crop&w=200&q=80" alt="Brass Swatch">
          </button>
        </div>

        <div class="aakriti-material-info-hud">
          <div class="aakriti-hud-title" id="hudName">Italian Dark Walnut</div>
          <div class="aakriti-hud-meta" id="hudMeta">SERIES: LUXE WOOD • AK-9402</div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Scoped Visualizer JavaScript -->
<script>
(function() {
  const stage = document.getElementById('studioStage');
  const room = document.getElementById('studioRoom');
  const swatchBtns = document.querySelectorAll('.aakriti-swatch-btn');
  const hudName = document.getElementById('hudName');
  const hudMeta = document.getElementById('hudMeta');

  swatchBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      swatchBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');

      const name = this.getAttribute('data-name');
      const code = this.getAttribute('data-code');
      const roomImg = this.getAttribute('data-room');

      room.style.opacity = '0.3';
      room.style.transform = 'scale(1.05)';

      setTimeout(() => {
        room.style.backgroundImage = `url('${roomImg}')`;
        hudName.textContent = name;
        hudMeta.textContent = `SERIES: ARCHITECTURAL • ${code}`;
        room.style.opacity = '1';
        room.style.transform = 'scale(1.02)';
      }, 250);
    });
  });

  if (stage && window.innerWidth > 992) {
    stage.addEventListener('mousemove', function(e) {
      const rect = stage.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;

      const rotateX = ((y - centerY) / centerY) * -4;
      const rotateY = ((x - centerX) / centerX) * 4;

      room.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.04)`;
    });

    stage.addEventListener('mouseleave', function() {
      room.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale(1.02)';
    });
  }
})();
</script>