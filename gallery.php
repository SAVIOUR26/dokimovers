<?php
$pageTitle = 'Gallery – DOKI Movers Uganda';
include 'includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero">
  <div class="container page-hero-content">
    <h1>Our Work Gallery</h1>
    <p>A glimpse into the DOKI Movers team in action — safe, professional, and efficient every time.</p>
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <i class="fas fa-chevron-right"></i>
      <span>Gallery</span>
    </div>
  </div>
</section>

<!-- Gallery Section -->
<section class="section-pad">
  <div class="container">
    <div class="text-center" style="margin-bottom:2rem;">
      <span class="section-tag">Photo Gallery</span>
      <h2 class="section-title">Moves We're Proud Of</h2>
      <p class="section-subtitle">Every project tells a story of trust, hard work, and a satisfied client. Here are some highlights.</p>
    </div>

    <!-- Filters -->
    <div class="gallery-filter">
      <button class="filter-btn active" data-filter="all">All Projects</button>
      <button class="filter-btn" data-filter="house">House Moves</button>
      <button class="filter-btn" data-filter="office">Office Moves</button>
      <button class="filter-btn" data-filter="packing">Packing</button>
      <button class="filter-btn" data-filter="transport">Transport</button>
      <button class="filter-btn" data-filter="international">International</button>
    </div>

    <!-- Grid -->
    <div class="gallery-grid">
      <?php
      $items = [
        ['fas fa-house',            'House Move – Kampala',         'house',         ''],
        ['fas fa-boxes-stacked',    'Professional Packing',         'packing',       'large'],
        ['fas fa-truck-moving',     'Fleet on the Move',            'transport',     ''],
        ['fas fa-building',         'Office Relocation – CBD',      'office',        ''],
        ['fas fa-box-open',         'Safety Packaging',             'packing',       ''],
        ['fas fa-globe-africa',     'International – Nairobi',      'international', ''],
        ['fas fa-couch',            'Living Room – Mukono Move',    'house',         'gold'],
        ['fas fa-server',           'IT Equipment Move',            'office',        ''],
        ['fas fa-truck',            'Long Haul – Northern Uganda',  'transport',     'large'],
        ['fas fa-paw',              'Pet Transport',                'house',         'gold'],
        ['fas fa-warehouse',        'Secure Storage',               'packing',       ''],
        ['fas fa-plane-departure',  'Airport Cargo – Entebbe',      'international', ''],
      ];
      foreach ($items as $item):
        $cls = 'gallery-item fade-up ' . $item[3];
      ?>
      <div class="<?= trim($cls) ?>" data-cat="<?= $item[1] ?>">
        <i class="<?= $item[0] ?>"></i>
        <p><?= $item[1] ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Upload notice -->
    <div style="text-align:center;margin-top:3rem;padding:32px;background:var(--light);border-radius:16px;">
      <i class="fas fa-images" style="font-size:2.5rem;color:var(--navy);opacity:.4;margin-bottom:12px;display:block;"></i>
      <h3 style="color:var(--navy);margin-bottom:8px;">More Photos Coming Soon</h3>
      <p style="color:var(--gray);font-size:.9rem;max-width:500px;margin:0 auto 16px;">
        We're constantly adding new photos from our latest moves across Uganda and beyond. Follow us on social media to stay updated.
      </p>
      <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
        <a href="#" class="btn btn-navy"><i class="fab fa-facebook-f"></i> Facebook</a>
        <a href="#" class="btn btn-navy"><i class="fab fa-instagram"></i> Instagram</a>
        <a href="https://wa.me/256781703642" class="btn btn-primary"><i class="fab fa-whatsapp"></i> WhatsApp Us</a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ STATS ═══ -->
<section class="stats-band">
  <div class="container">
    <div class="stats-grid">
      <?php
      $stats = [
        ['fas fa-image',          500,  '+', 'Projects Documented'],
        ['fas fa-thumbs-up',      2000, '+', 'Satisfied Clients'],
        ['fas fa-star',           5000, '+', 'Items Safely Moved'],
        ['fas fa-map-marked-alt', 50,   '+', 'Districts Covered'],
      ];
      foreach ($stats as $s):
      ?>
      <div class="stat-item fade-up">
        <div class="stat-icon"><i class="<?= $s[0] ?>"></i></div>
        <div class="stat-num" data-count="<?= $s[1] ?>" data-suffix="<?= $s[2] ?>">0</div>
        <div class="stat-label"><?= $s[3] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
