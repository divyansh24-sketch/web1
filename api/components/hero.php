<?php
/**
 * LM LAMINATES / SUPER HYLAM - Luxury Editorial Hero Section
 * 4 Full Background Slides + 3 Bottom-Right Texture Swatches + Auto-Change Engine
 * Single-file PHP component: HTML + CSS + JavaScript
 */

// 4 Background Slides (Full screen background images)
$slides = [
    [
        'id' => 1,
        'tag' => 'PREMIUM LAMINATES',
        'title_main' => 'Timeless Surfaces',
        'title_connector' => 'for',
        'title_italic' => 'Modern Living',
        'subtitle' => 'Elegant laminates that bring sophistication, durability and style to every space. Crafted for modern homes and iconic spaces.',
        'btn_text' => 'Explore Collection',
        'bg_image' => 'api/assets/image/h1.png'
    ],
    [
        'id' => 2,
        'tag' => 'EXOTIC MARBLE SLAB SERIES',
        'title_main' => 'Nero Marquina',
        'title_connector' => 'with',
        'title_italic' => 'Obsidian Gold',
        'subtitle' => 'Deep obsidian depths illuminated by sculpted metallic gold veins. Mirror-glazed perfection delivering opulent quarry drama with zero porosity.',
        'btn_text' => 'Explore Marble Series',
        'bg_image' => 'api/assets/image/h2.png'
    ],
    [
        'id' => 3,
        'tag' => 'SYNCHRONIZED WOODGRAIN ATELIER',
        'title_main' => 'Royal Smoked',
        'title_connector' => 'in',
        'title_italic' => 'Walnut Flitch',
        'subtitle' => 'Warm, undulating crown-cut grain ribbons imbued with deep amber richness. Tactile natural depth engineered for monumental monolithic millwork.',
        'btn_text' => 'Explore Woodgrains',
        'bg_image' => 'api/assets/image/h3.png'
    ],
    [
        'id' => 4,
        'tag' => 'MONOLITHIC MINERAL ATELIER',
        'title_main' => 'Tivoli Classic',
        'title_connector' => 'of',
        'title_italic' => 'Roman Limestone',
        'subtitle' => 'Quiet, monolithic sedimentary serenity celebrating ancient Italian architecture. Earthy beige stratifications woven with delicate tactile mineral textures.',
        'btn_text' => 'Explore Stone Line',
        'bg_image' => 'api/assets/image/h4.png'
    ]
];

// 3 Circular Swatches on bottom-right (Mapped to Slide 2, 3, 4)
$thumbnails = [
    [
        'target_slide' => 1, // Opens Slide 2 (Nero Marquina)
        'title' => 'Nero Marquina Gold',
        'label' => '02 • Marble',
        'image' => 'api/assets/image/c1.png'
    ],
    [
        'target_slide' => 2, // Opens Slide 3 (Royal Smoked Walnut)
        'title' => 'Royal Smoked Walnut',
        'label' => '03 • Walnut',
        'image' => 'api/assets/image/c2.png'
    ],
    [
        'target_slide' => 3, // Opens Slide 4 (Tivoli Classic Travertine)
        'title' => 'Classic Travertine',
        'label' => '04 • Stone',
        'image' => 'api/assets/image/c3.png'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LM LAMINATES | Surfaces For A Better Tomorrow</title>

    <!-- Luxury Typography: Playfair Display + Cormorant Garamond + Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,500;1,600;1,700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        /* ==========================================================================
           1. DESIGN SYSTEM & BASE RESET
           ========================================================================== */
        *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        :root {
            --bg-cream: #F7F5F0;
            --text-caviar: #1A1D23;
            --text-sub: #555E6D;
            --text-muted: #848D9C;
            --accent-bronze: #A57B4B;
            --accent-bronze-light: #C29665;
            --swoosh-taupe-start: #ABA49A;
            --swoosh-taupe-end: #8C8479;
            --transition-fluid: cubic-bezier(0.16, 1, 0.3, 1);
            --transition-speed: 0.85s;
        }

        body {
            background-color: var(--bg-cream);
            color: var(--text-caviar);
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
        }

        /* ==========================================================================
           2. HEADER / NAVBAR (Exact LM Logo from Screenshot)
           ========================================================================== */
        .lm-header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 100;
            padding: 26px 75px;
            background: transparent;
            transition: all 0.4s var(--transition-fluid);
        }

        .lm-header.scrolled {
            position: fixed;
            padding: 16px 75px;
            background: rgba(247, 245, 240, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .lm-header-container {
            max-width: 1760px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* LM Brand Logo */
        .lm-brand {
            display: flex;
            align-items: center;
            gap: 18px;
            text-decoration: none;
            color: var(--text-caviar);
        }

        .lm-brand-monogram {
            font-family: 'Playfair Display', serif;
            font-size: 2.25rem;
            font-weight: 700;
            letter-spacing: -0.04em;
            line-height: 1;
            color: #1a1d23;
        }

        .lm-brand-divider {
            width: 1px;
            height: 32px;
            background-color: rgba(0, 0, 0, 0.22);
        }

        .lm-brand-text {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .lm-brand-title {
            font-size: 0.92rem;
            font-weight: 700;
            letter-spacing: 0.38em;
            text-transform: uppercase;
            color: var(--text-caviar);
        }

        .lm-brand-subtitle {
            font-size: 0.58rem;
            font-weight: 700;
            letter-spacing: 0.24em;
            text-transform: uppercase;
            color: var(--accent-bronze);
        }

        /* Nav Menu Links */
        .lm-nav-menu {
            display: flex;
            align-items: center;
            gap: 42px;
            margin-right: 180px;
        }

        .lm-nav-link {
            text-decoration: none;
            color: #2D333F;
            font-size: 0.92rem;
            font-weight: 500;
            position: relative;
            padding: 6px 0;
            transition: color 0.3s ease;
        }

        .lm-nav-link:hover {
            color: var(--accent-bronze);
        }

        .lm-nav-link.active {
            color: var(--text-caviar);
            font-weight: 600;
        }

        .lm-nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--accent-bronze);
            border-radius: 2px;
        }

        .lm-mobile-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.4rem;
            cursor: pointer;
            color: var(--text-caviar);
        }

        /* ==========================================================================
           3. HERO STAGE (100% WIDTH X 720PX HEIGHT)
           ========================================================================== */
        .lm-hero-section {
            position: relative;
            width: 100%;
            height: 720px;
            min-height: 720px;
            max-height: 750px;
            overflow: hidden;
            display: flex;
            align-items: center;
            background-color: var(--bg-cream);
        }

        /* 4 Full Background Slider Images */
        .lm-bg-slider {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .lm-bg-slide {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center right;
            background-repeat: no-repeat;
            opacity: 0;
            transform: scale(1.06);
            transition: opacity var(--transition-speed) var(--transition-fluid),
                        transform 1.4s var(--transition-fluid);
            will-change: transform, opacity;
        }

        .lm-bg-slide.active {
            opacity: 1;
            transform: scale(1);
            z-index: 2;
        }

        /* Soft Ivory Left Gradient Overlay */
        .lm-gradient-scrim {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            z-index: 3;
            pointer-events: none;
            background: linear-gradient(90deg, 
                #F7F5F0 0%, 
                rgba(247, 245, 240, 0.35) 35%, 
                rgba(247, 245, 240, 0.35) 46%, 
                
                transparent 100%);
        }

        /* Hero Content Column */
        .lm-hero-container {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 1760px;
            margin: 0 auto;
            padding: 85px 75px 0 75px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .lm-hero-content {
            max-width: 660px;
            display: flex;
            flex-direction: column;
            gap: 1.35rem;
        }

        /* Kicker with Line */
        .lm-kicker-wrap {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .lm-kicker-text {
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.28em;
            text-transform: uppercase;
            color: #7A8290;
        }

        .lm-kicker-line {
            width: 55px;
            height: 1.5px;
            background-color: #D3CDC4;
        }

        /* Animated Headline */
        .lm-headline-box {
            position: relative;
            min-height: 140px;
        }

        .lm-headline-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            opacity: 0;
            transform: translateY(22px);
            transition: all var(--transition-speed) var(--transition-fluid);
            pointer-events: none;
        }

        .lm-headline-slide.active {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
            position: relative;
        }

        .lm-headline-slide h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.9rem, 4.4vw, 4.5rem);
            font-weight: 600;
            line-height: 1.08;
            letter-spacing: -0.01em;
            color: var(--text-caviar);
        }

        .lm-headline-slide h1 span.italic-accent {
            font-family: 'Cormorant Garamond', serif;
            font-style: italic;
            font-weight: 600;
            font-size: 1.15em;
            color: var(--accent-bronze);
            padding-left: 0.1em;
        }

        /* Subtitle */
        .lm-subtitle {
            font-size: 1.02rem;
            line-height: 1.62;
            color: var(--text-sub);
            max-width: 490px;
            font-weight: 400;
        }

        /* Dark Pill Button */
        .lm-cta-wrap {
            padding-top: 0.4rem;
        }

        .lm-btn-pill {
            display: inline-flex;
            align-items: center;
            gap: 14px;
            background-color: #1E2024;
            color: #ffffff;
            text-decoration: none;
            padding: 14px 28px;
            border-radius: 9999px;
            font-size: 0.88rem;
            font-weight: 600;
            letter-spacing: 0.02em;
            box-shadow: 0 10px 24px rgba(30, 32, 36, 0.22);
            transition: all 0.35s var(--transition-fluid);
        }

        .lm-btn-pill:hover {
            background-color: var(--accent-bronze);
            transform: translateY(-2px);
            box-shadow: 0 14px 30px rgba(165, 123, 75, 0.35);
        }

        .lm-btn-pill svg {
            width: 16px;
            height: 16px;
            stroke: currentColor;
            transition: transform 0.3s ease;
        }

        .lm-btn-pill:hover svg {
            transform: translateX(4px);
        }

        /* 3 Value Pillars (Diamond, Shield, Leaf) */
        .lm-features-row {
            display: flex;
            align-items: center;
            gap: 32px;
            margin-top: 2.6rem;
            padding-top: 1.6rem;
            max-width: 580px;
        }

        .lm-feature-item {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .lm-feature-icon {
            width: 25px;
            height: 25px;
            color: var(--accent-bronze);
            margin-bottom: 2px;
        }

        .lm-feature-title {
            font-size: 0.88rem;
            font-weight: 700;
            color: var(--text-caviar);
        }

        .lm-feature-desc {
            font-size: 0.72rem;
            color: var(--text-muted);
            line-height: 1.4;
        }

        .lm-feature-divider {
            width: 1px;
            height: 48px;
            background-color: rgba(0, 0, 0, 0.1);
        }

        /* Scroll Down (Center Bottom) */
        .lm-scroll-down {
            position: absolute;
            left: 50%;
            bottom: 22px;
            transform: translateX(-50%);
            z-index: 20;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
            text-decoration: none;
            color: #7E8694;
        }

        .lm-scroll-down span {
            font-size: 0.65rem;
            font-weight: 700;
            letter-spacing: 0.22em;
            text-transform: uppercase;
        }

        .lm-scroll-down svg {
            width: 14px;
            height: 14px;
            stroke: currentColor;
            animation: bounceDown 2s infinite ease-in-out;
        }

        @keyframes bounceDown {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(5px); }
        }

        /* ==========================================================================
           4. BOTTOM-RIGHT CURVED SWOOSH WITH 3 CIRCLES
           ========================================================================== */
        .lm-swoosh-dock {
            position: absolute;
            right: 0;
            bottom: 0;
            z-index: 30;
            background: linear-gradient(135deg, var(--swoosh-taupe-start) 0%, var(--swoosh-taupe-end) 100%);
            border-top-left-radius: 200px;
            padding: 38px 75px 32px 85px;
            display: flex;
            align-items: center;
            gap: 24px;
            box-shadow: -15px -10px 40px rgba(0, 0, 0, 0.12);
        }

        .lm-swatch-group {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        /* The 3 Circular Swatches */
        .lm-swatch-circle {
            position: relative;
            width: 68px;
            height: 68px;
            border-radius: 50%;
            cursor: pointer;
            border: 2.5px solid rgba(255, 255, 255, 0.35);
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            transition: all 0.4s var(--transition-fluid);
            background-color: #222;
        }

        .lm-swatch-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            transition: transform 0.45s ease;
        }

        .lm-swatch-circle:hover {
            transform: translateY(-4px) scale(1.08);
            border-color: #ffffff;
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.3);
        }

        .lm-swatch-circle:hover img {
            transform: scale(1.15);
        }

        /* Active Swatch with Glowing Aura */
        .lm-swatch-circle.active {
            border-color: #ffffff;
            transform: translateY(-4px) scale(1.14);
            box-shadow: 0 0 0 4.5px rgba(255, 255, 255, 0.45), 0 14px 30px rgba(0, 0, 0, 0.38);
        }

        /* Swatch Tooltip */
        .lm-swatch-tooltip {
            position: absolute;
            bottom: calc(100% + 10px);
            left: 50%;
            transform: translateX(-50%) translateY(4px);
            background: #11151c;
            color: #ffffff;
            padding: 4px 9px;
            border-radius: 6px;
            font-size: 0.68rem;
            font-weight: 700;
            white-space: nowrap;
            letter-spacing: 0.05em;
            pointer-events: none;
            opacity: 0;
            visibility: hidden;
            transition: all 0.25s ease;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.25);
        }

        .lm-swatch-circle:hover .lm-swatch-tooltip {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }

        /* Explore Textures Link */
        .lm-explore-label {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #ffffff;
            font-size: 0.74rem;
            font-weight: 700;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            text-decoration: none;
            white-space: nowrap;
            padding-left: 6px;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .lm-explore-label:hover {
            opacity: 0.88;
            transform: translateX(4px);
        }

        .lm-explore-label svg {
            width: 14px;
            height: 14px;
            stroke: currentColor;
        }

        /* ==========================================================================
           5. SECTION PEEK BELOW FOLD
           ========================================================================== */
        .lm-collection-preview {
            position: relative;
            background-color: var(--bg-cream);
            padding: 55px 75px 60px 75px;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
        }

        .lm-preview-header {
            max-width: 1760px;
            margin: 0 auto;
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            margin-bottom: 35px;
        }

        .lm-preview-titles h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.6rem;
            font-weight: 600;
            line-height: 1.15;
            color: var(--text-caviar);
        }

        .lm-preview-arrows {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .lm-arrow-btn {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: #ffffff;
            border: 1px solid rgba(0, 0, 0, 0.12);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: var(--text-caviar);
            transition: all 0.3s ease;
        }

        .lm-arrow-btn:hover {
            background-color: var(--accent-bronze);
            border-color: var(--accent-bronze);
            color: #ffffff;
        }

        .lm-arrow-btn svg {
            width: 16px;
            height: 16px;
            stroke: currentColor;
        }

        .lm-preview-grid {
            max-width: 1760px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .lm-preview-card {
            border-radius: 24px;
            overflow: hidden;
            height: 240px;
            background-color: #ddd;
        }

        .lm-preview-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* ==========================================================================
           6. RESPONSIVE DESIGN
           ========================================================================== */
        @media (max-width: 1200px) {
            .lm-header { padding: 22px 35px; }
            .lm-hero-container { padding: 70px 35px 0 35px; }
            .lm-collection-preview { padding: 40px 35px; }
            .lm-swoosh-dock { padding: 25px 40px 25px 50px; }
            .lm-swatch-circle { width: 56px; height: 56px; }
            .lm-nav-menu { margin-right: 0; gap: 25px; }
        }

        @media (max-width: 992px) {
            .lm-nav-menu { display: none; }
            .lm-mobile-toggle { display: block; }
            .lm-hero-section { height: auto; min-height: 860px; }
            .lm-gradient-scrim {
                background: linear-gradient(180deg, 
                    rgba(247, 245, 240, 0.96) 0%, 
                    rgba(247, 245, 240, 0.88) 60%, 
                    rgba(247, 245, 240, 0.4) 100%);
            }
            .lm-swoosh-dock {
                left: 0;
                right: 0;
                border-top-left-radius: 40px;
                border-top-right-radius: 40px;
                justify-content: space-between;
                padding: 20px 25px;
            }
            .lm-scroll-down { display: none; }
            .lm-preview-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <!-- ==========================================================================
         NAVBAR (LM LAMINATES)
         ========================================================================== -->
    <header class="lm-header" id="lmNavbar">
        <div class="lm-header-container">
            
            <a href="#hero" class="lm-brand">
                <span class="lm-brand-monogram">LM</span>
                <div class="lm-brand-divider"></div>
                <div class="lm-brand-text">
                    <span class="lm-brand-title">L A M I N A T E S</span>
                    <span class="lm-brand-subtitle">SURFACES FOR A BETTER TOMORROW</span>
                </div>
            </a>

            <nav class="lm-nav-menu" aria-label="Main Menu">
                <a href="#hero" class="lm-nav-link active">Home</a>
                <a href="#about" class="lm-nav-link">About Us</a>
                <a href="#gallery" class="lm-nav-link">Gallery</a>
                <a href="#catalog" class="lm-nav-link">E-Catalog</a>
                <a href="#contact" class="lm-nav-link">Contact</a>
            </nav>

            <button class="lm-mobile-toggle" aria-label="Toggle menu">
                <i class="fa-solid fa-bars"></i>
            </button>

        </div>
    </header>

    <!-- ==========================================================================
         HERO SECTION: 4 BACKGROUND IMAGES + 3 CIRCLES AUTO-CHANGER
         ========================================================================== -->
    <main class="lm-hero-section" id="hero">

        <!-- 4 FULL BACKGROUND SLIDES -->
        <div class="lm-bg-slider">
            <?php foreach ($slides as $idx => $s): ?>
                <div class="lm-bg-slide <?php echo $idx === 0 ? 'active' : ''; ?>" 
                     style="background-image: url('<?php echo htmlspecialchars($s['bg_image']); ?>');"
                     data-slide-index="<?php echo $idx; ?>">
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Ivory / Alabaster Scrim Gradient -->
        <div class="lm-gradient-scrim"></div>

        <!-- Hero Content Column -->
        <div class="lm-hero-container">
            <div class="lm-hero-content">

                <!-- Kicker Tag -->
                <div class="lm-kicker-wrap">
                    <span class="lm-kicker-text" id="kickerTag"><?php echo htmlspecialchars($slides[0]['tag']); ?></span>
                    <div class="lm-kicker-line"></div>
                </div>

                <!-- Animated Headline Slides (Auto-Change with Slide) -->
                <div class="lm-headline-box">
                    <?php foreach ($slides as $idx => $s): ?>
                        <div class="lm-headline-slide <?php echo $idx === 0 ? 'active' : ''; ?>" data-text-index="<?php echo $idx; ?>">
                            <h1>
                                <?php echo htmlspecialchars($s['title_main']); ?><br>
                                <?php echo htmlspecialchars($s['title_connector']); ?> 
                                <span class="italic-accent"><?php echo htmlspecialchars($s['title_italic']); ?></span>
                            </h1>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Subtitle -->
                <p class="lm-subtitle" id="heroSubtitle">
                    <?php echo htmlspecialchars($slides[0]['subtitle']); ?>
                </p>

                <!-- Explore Collection CTA -->
                <div class="lm-cta-wrap">
                    <a href="#catalog" class="lm-btn-pill" id="heroCtaBtn">
                        <span>Explore Collection</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>

                <!-- 3 Feature Badges -->
                <div class="lm-features-row">
                    
                    <div class="lm-feature-item">
                        <svg class="lm-feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="6 3 18 3 22 9 12 22 2 9"></polygon>
                            <line x1="12" y1="22" x2="12" y2="9"></line>
                            <line x1="2" y1="9" x2="22" y2="9"></line>
                        </svg>
                        <span class="lm-feature-title">Premium Finish</span>
                        <span class="lm-feature-desc">Luxurious look & feel</span>
                    </div>

                    <div class="lm-feature-divider"></div>

                    <div class="lm-feature-item">
                        <svg class="lm-feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <polyline points="9 12 11 14 15 10"></polyline>
                        </svg>
                        <span class="lm-feature-title">Long Lasting</span>
                        <span class="lm-feature-desc">Built for everyday life</span>
                    </div>

                    <div class="lm-feature-divider"></div>

                    <div class="lm-feature-item">
                        <svg class="lm-feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11 20A7 7 0 0 1 4 13C4 7 11 3 20 3c0 9-4 16-9 17z"></path>
                            <path d="M11 20c-1.5-3-1.5-6 0-9"></path>
                        </svg>
                        <span class="lm-feature-title">Eco Friendly</span>
                        <span class="lm-feature-desc">A safer tomorrow</span>
                    </div>

                </div>

            </div>
        </div>

        <!-- Scroll Down -->
        <a href="#collection" class="lm-scroll-down">
            <span>Scroll Down</span>
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <polyline points="19 12 12 19 5 12"></polyline>
            </svg>
        </a>

        <!-- ==========================================================================
             BOTTOM-RIGHT DOCK: EXACTLY 3 CIRCLES (SWATCHES)
             ========================================================================== -->
        <div class="lm-swoosh-dock">
            
            <div class="lm-swatch-group">
                <?php foreach ($thumbnails as $tIndex => $thumb): ?>
                    <div class="lm-swatch-circle" 
                         data-target-slide="<?php echo $thumb['target_slide']; ?>" 
                         title="<?php echo htmlspecialchars($thumb['title']); ?>">
                        
                        <img src="<?php echo htmlspecialchars($thumb['image']); ?>" 
                             alt="<?php echo htmlspecialchars($thumb['title']); ?>">
                        
                        <span class="lm-swatch-tooltip"><?php echo htmlspecialchars($thumb['label']); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>

            <a href="#collection" class="lm-explore-label">
                <span>Explore Textures</span>
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>

        </div>

    </main>

    <!-- ==========================================================================
         SECTION PEEK (OUR COLLECTION)
         ========================================================================== -->
    <section class="lm-collection-preview" id="collection">
        
        <div class="lm-preview-header">
            <div class="lm-preview-titles">
                <div class="lm-kicker-wrap" style="margin-bottom: 12px;">
                    <span class="lm-kicker-text">Our Collection</span>
                    <div class="lm-kicker-line"></div>
                </div>
                <h2>Modern Living & Cooking Space.<br>Crafted for You.</h2>
            </div>

            <div class="lm-preview-arrows">
                <button class="lm-arrow-btn" id="prevSlideBtn" aria-label="Previous">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>
                </button>
                <button class="lm-arrow-btn" id="nextSlideBtn" aria-label="Next">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </button>
            </div>
        </div>

        <div class="lm-preview-grid">
            <div class="lm-preview-card">
                <img src="api/assets/image/k1.jpg" alt="Exotic Marble">
            </div>
            <div class="lm-preview-card">
                <img src="api/assets/image/k2.jpg" alt="Smoked Walnut">
            </div>
            <div class="lm-preview-card">
                <img src="api/assets/image/k3.jpg" alt="Limestone Travertine">
            </div>
        </div>

    </section>

    <!-- ==========================================================================
         JAVASCRIPT: AUTOPLAY ENGINE (4 BACKGROUNDS -> 3 CIRCLES LINKED)
         ========================================================================== -->
    <script>
        (function() {
            'use strict';

            const slidesData = <?php echo json_encode($slides); ?>;
            const totalSlides = slidesData.length; // 4 Backgrounds
            let currentSlide = 0;
            let autoPlayTimer = null;
            const INTERVAL = 5000; // 5 Seconds auto-change

            // Elements
            const bgSlides = document.querySelectorAll('.lm-bg-slide');
            const headlineSlides = document.querySelectorAll('.lm-headline-slide');
            const swatchCircles = document.querySelectorAll('.lm-swatch-circle'); // Exactly 3 Circles
            const kickerTag = document.getElementById('kickerTag');
            const heroSubtitle = document.getElementById('heroSubtitle');
            const ctaBtnText = document.querySelector('#heroCtaBtn span');
            const navbar = document.getElementById('lmNavbar');
            const heroSection = document.getElementById('hero');

            // Navbar scroll class
            window.addEventListener('scroll', () => {
                if (window.scrollY > 40) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            /**
             * Core Function to switch to any of the 4 slides
             * Automatically activates matching circle among the 3 circles
             */
            function goToSlide(targetIndex) {
                if (targetIndex < 0 || targetIndex >= totalSlides) return;
                currentSlide = targetIndex;
                const data = slidesData[currentSlide];

                // 1. Transition Full Background Images
                bgSlides.forEach((slide, idx) => {
                    if (idx === currentSlide) {
                        slide.classList.add('active');
                    } else {
                        slide.classList.remove('active');
                    }
                });

                // 2. Transition Headline text
                headlineSlides.forEach((slide, idx) => {
                    if (idx === currentSlide) {
                        slide.classList.add('active');
                    } else {
                        slide.classList.remove('active');
                    }
                });

                // 3. Synchronize Active State on the 3 Circles
                swatchCircles.forEach(circle => {
                    const linkedSlide = parseInt(circle.getAttribute('data-target-slide'), 10);
                    if (linkedSlide === currentSlide) {
                        circle.classList.add('active');
                    } else {
                        circle.classList.remove('active');
                    }
                });

                // 4. Update Copy & CTA
                kickerTag.textContent = data.tag;
                heroSubtitle.textContent = data.subtitle;
                ctaBtnText.textContent = data.btn_text;

                resetAutoPlay();
            }

            // Click listener for the 3 circles
            swatchCircles.forEach(circle => {
                circle.addEventListener('click', function() {
                    const targetSlide = parseInt(this.getAttribute('data-target-slide'), 10);
                    goToSlide(targetSlide);
                });
            });

            // Arrow Controls (Prev/Next)
            const prevBtn = document.getElementById('prevSlideBtn');
            const nextBtn = document.getElementById('nextSlideBtn');
            if (prevBtn) prevBtn.addEventListener('click', () => goToSlide((currentSlide - 1 + totalSlides) % totalSlides));
            if (nextBtn) nextBtn.addEventListener('click', () => goToSlide((currentSlide + 1) % totalSlides));

            // Keyboard navigation
            window.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowRight') goToSlide((currentSlide + 1) % totalSlides);
                if (e.key === 'ArrowLeft') goToSlide((currentSlide - 1 + totalSlides) % totalSlides);
            });

            // ==========================================================================
            // AUTOPLAY ENGINE (Automatically changes 4 backgrounds every 5s)
            // ==========================================================================
            function startAutoPlay() {
                stopAutoPlay();
                autoPlayTimer = setInterval(() => {
                    const next = (currentSlide + 1) % totalSlides;
                    goToSlide(next);
                }, INTERVAL);
            }

            function stopAutoPlay() {
                if (autoPlayTimer) {
                    clearInterval(autoPlayTimer);
                    autoPlayTimer = null;
                }
            }

            function resetAutoPlay() {
                stopAutoPlay();
                startAutoPlay();
            }

            // Start immediately
            startAutoPlay();

            // Hover to pause, leave to resume
            heroSection.addEventListener('mouseenter', stopAutoPlay);
            heroSection.addEventListener('mouseleave', startAutoPlay);

            // Smooth Scroll for "Scroll Down"
            document.querySelector('.lm-scroll-down').addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('collection').scrollIntoView({ behavior: 'smooth' });
            });

        })();
    </script>
</body>
</html>