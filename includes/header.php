<?php
/* DOKI Movers — shared header/nav */
$page    = basename($_SERVER['PHP_SELF']);
$siteName = 'DOKI Movers';
$phone   = '0781703642';
$phoneLink = 'tel:+256781703642';
$whatsapp  = 'https://wa.me/256781703642';
$address   = 'Cham Towers, Kampala Road, Rm 18A';
$email     = 'info@dokimovers.com';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="DOKI Movers – Professional moving services in Uganda. House moves, office moves, pet transport &amp; international relocation. Call <?= $phone ?>." />
  <meta name="keywords" content="movers Uganda, moving company Kampala, house movers Uganda, office relocation Kampala, DOKI Movers" />
  <meta name="author" content="DOKI Movers" />
  <meta property="og:title" content="DOKI Movers – Move Without Any Stress" />
  <meta property="og:description" content="Professional moving services across Uganda. Trusted, reliable and stress-free." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://dokimovers.com/" />
  <meta name="theme-color" content="#1B2A6B" />

  <title><?= isset($pageTitle) ? htmlspecialchars($pageTitle).' | DOKI Movers' : 'DOKI Movers – Move Without Any Stress' ?></title>

  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet" />
  <!-- Stylesheet -->
  <link rel="stylesheet" href="css/style.css" />

  <!-- Inline favicon (CSS/Font-Awesome truck icon rendered as SVG favicon) -->
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='18' fill='%231B2A6B'/><rect y='65' width='100' height='35' rx='0 0 18 18' fill='%23F5C518'/><text y='62' x='50' text-anchor='middle' font-size='54' font-family='serif'>🚛</text></svg>" />
</head>
<body>

<!-- Top bar -->
<div class="topbar">
  <div class="container">
    <div class="topbar-inner">
      <div class="topbar-item">
        <i class="fas fa-map-marker-alt"></i>
        <span><?= $address ?>, Kampala – Uganda</span>
      </div>
      <div class="topbar-items">
        <div class="topbar-item">
          <i class="fas fa-phone-alt"></i>
          <a href="<?= $phoneLink ?>"><?= $phone ?></a>
        </div>
        <div class="topbar-item">
          <i class="fas fa-envelope"></i>
          <a href="mailto:<?= $email ?>"><?= $email ?></a>
        </div>
        <div class="topbar-item">
          <i class="fas fa-clock"></i>
          <span>24/7 Available</span>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Navbar -->
<nav class="navbar" role="navigation" aria-label="Main navigation">
  <div class="container">
    <div class="nav-inner">

      <!-- Logo -->
      <a href="/" class="logo" aria-label="DOKI Movers Home">
        <div class="logo-icon" aria-hidden="true">
          <i class="fas fa-truck-moving"></i>
        </div>
        <div class="logo-text">
          <span class="logo-name">DOKI <span>Movers</span></span>
          <span class="logo-tagline">Move Without Stress</span>
        </div>
      </a>

      <!-- Nav links -->
      <ul class="nav-menu" role="list">
        <li><a href="/"         class="nav-link <?= $page==='index.php' ? 'active' : '' ?>">Home</a></li>
        <li><a href="/about"    class="nav-link <?= $page==='about.php' ? 'active' : '' ?>">About Us</a></li>
        <li><a href="/services" class="nav-link <?= $page==='services.php' ? 'active' : '' ?>">Services</a></li>
        <li><a href="/gallery"  class="nav-link <?= $page==='gallery.php' ? 'active' : '' ?>">Gallery</a></li>
        <li><a href="/contact"  class="nav-link <?= $page==='contact.php' ? 'active' : '' ?>">Contact</a></li>
        <li><a href="<?= $phoneLink ?>" class="btn btn-primary nav-cta"><i class="fas fa-phone-alt"></i> Call Now</a></li>
      </ul>

      <!-- Hamburger -->
      <button class="hamburger" aria-label="Toggle menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>

    </div>
  </div>
</nav>
