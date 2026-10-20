<?php
/**
 * AAKRITI LAMINATES - Ultra Luxury Architectural Surfaces Website
 * Main Index Orchestrator
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Aakriti Architectural Laminates - Ultra-luxury decorative surfaces, 3D fluted panels, Italian marble laminates, and zero-scratch architectural textures.">
  <title>AAKRITI | Luxury Architectural Surfaces & Laminates</title>

  <!-- Google Fonts: Syne & Plus Jakarta Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Syne:wght@600;700;800&display=swap" rel="stylesheet">

  <!-- Font Awesome 6 Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Global Base Styles & Custom Luxury Scrollbar -->
  <style>
    *, *::before, *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
      background-color: #090a0d;
      color: #f3f4f6;
      font-family: 'Plus Jakarta Sans', sans-serif;
      text-rendering: optimizeLegibility;
      -webkit-font-smoothing: antialiased;
    }

    body {
      overflow-x: hidden;
      background-color: #090a0d;
      min-height: 100vh;
      position: relative;
    }

    /* Custom Luxury Gold Scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #090a0d;
    }
    ::-webkit-scrollbar-thumb {
      background: #2a2e39;
      border-radius: 999px;
      border: 2px solid #090a0d;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #d4af37;
    }

    ::selection {
      background: #d4af37;
      color: #000;
    }
  </style>
</head>
<body>

  <!-- 1. Header Navigation -->
  <?php include __DIR__ . '/components/navbar.php'; ?>

  <!-- 2. Hero Section (3 Slides, Giant 3D Text, 3 Glass Cards) -->
  <?php include __DIR__ . '/components/hero.php'; ?>

  <?php include __DIR__ . '/components/luxury-laminates.php'; ?>
  <?php include __DIR__ . '/components/simple-gallery.php'; ?>
  <?php include __DIR__ . '/components/brands.php'; ?>
  <?php include __DIR__ . '/components/power-of-six.php'; ?>
  <!-- 3. Surface Technology Features -->
  <?php include __DIR__ . '/components/features.php'; ?>

  <!-- 4. 3D Laminate Texture Gallery with Light Simulator -->
 

  <!-- 6. Heritage Story -->
  <?php include __DIR__ . '/components/about.php'; ?>

  <!-- 7. Footer & Contact -->
  <?php include __DIR__ . '/components/footer.php'; ?>

</body>
</html>