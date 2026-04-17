<?php
$pageTitle = 'About Us – DOKI Movers Uganda';
include __DIR__ . '/includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero">
  <div class="container page-hero-content">
    <h1>About DOKI Movers</h1>
    <p>Uganda's trusted moving company — built on care, commitment, and expertise.</p>
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <i class="fas fa-chevron-right"></i>
      <span>About Us</span>
    </div>
  </div>
</section>

<!-- ═══ OUR STORY ═══ -->
<section class="section-pad">
  <div class="container">
    <div class="about-hero-grid">
      <div>
        <span class="section-tag">Our Story</span>
        <h2 class="section-title">Moving Uganda Forward, One Home at a Time</h2>
        <p style="color:var(--gray);margin-bottom:1.2rem;font-size:.95rem;">
          DOKI Movers was born from a simple conviction: moving should never be stressful. Founded in Kampala, Uganda, we started as a small team with big trucks and even bigger ambitions — to give every Ugandan access to professional, affordable relocation services.
        </p>
        <p style="color:var(--gray);margin-bottom:1.2rem;font-size:.95rem;">
          Over the years, we've grown into a full-service moving company with a modern fleet, expert packers, and a dedicated team that covers all 50+ districts across Uganda. From the bustling streets of Kampala to the serene towns of Mbarara and Gulu — we move you safely.
        </p>
        <p style="color:var(--gray);margin-bottom:2rem;font-size:.95rem;">
          Today, DOKI Movers is headquartered at <strong>Cham Towers, Kampala Road</strong> — a strategic location that allows us to deploy quickly and efficiently across the entire country and beyond borders.
        </p>
        <div style="display:flex;gap:16px;flex-wrap:wrap;">
          <a href="contact.php"  class="btn btn-primary"><i class="fas fa-envelope"></i> Get a Quote</a>
          <a href="services.php" class="btn btn-navy"><i class="fas fa-boxes-stacked"></i> Our Services</a>
        </div>
      </div>
      <div class="about-visual fade-up">
        <div class="about-img-card tall">
          <i class="fas fa-truck-moving"></i>
          <p style="font-size:1.1rem;font-weight:700;color:var(--navy);">10+ Years of Moving Excellence</p>
          <p>Kampala, Uganda</p>
        </div>
        <div class="about-img-card">
          <i class="fas fa-users"></i>
          <p>Expert Team</p>
        </div>
        <div class="about-img-card">
          <i class="fas fa-globe-africa"></i>
          <p>International Moves</p>
        </div>
        <div class="about-img-card">
          <i class="fas fa-shield-alt"></i>
          <p>Fully Insured</p>
        </div>
        <div class="about-img-card">
          <i class="fas fa-award"></i>
          <p>Award-Winning Service</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ MISSION & VISION ═══ -->
<section class="section-pad bg-light">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">Our Purpose</span>
      <h2 class="section-title">Mission, Vision & Values</h2>
    </div>
    <div class="mission-vision">
      <div class="mv-card fade-up">
        <i class="fas fa-bullseye"></i>
        <h3>Our Mission</h3>
        <p>To provide every client in Uganda with a seamless, stress-free moving experience — combining professionalism, safety, and genuine care for their belongings and wellbeing.</p>
      </div>
      <div class="mv-card fade-up">
        <i class="fas fa-eye"></i>
        <h3>Our Vision</h3>
        <p>To be East Africa's most trusted and accessible moving company, known for setting the gold standard in residential, commercial, and international relocation services.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ VALUES ═══ -->
<section class="section-pad">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">Core Values</span>
      <h2 class="section-title">The Principles We Live By</h2>
      <p class="section-subtitle">Everything we do is guided by values that put our clients first.</p>
    </div>
    <div class="values-grid">
      <?php
      $values = [
        ['fas fa-handshake',     'Integrity',       'We are honest, transparent, and upfront — no hidden fees, no empty promises.'],
        ['fas fa-shield-halved', 'Safety First',    'Every item is handled with the utmost care, as if it were our own.'],
        ['fas fa-bolt',          'Reliability',     'We show up when we say we will, and we deliver what we promise.'],
        ['fas fa-heart',         'Customer Love',   'Our clients are at the center of every decision we make.'],
        ['fas fa-leaf',          'Sustainability',  'We operate responsibly, minimising our footprint on Uganda's environment.'],
        ['fas fa-graduation-cap','Professionalism', 'Our team is trained, uniformed, and committed to excellence on every job.'],
      ];
      foreach ($values as $v):
      ?>
      <div class="value-card fade-up">
        <i class="<?= $v[0] ?>"></i>
        <h4><?= $v[1] ?></h4>
        <p><?= $v[2] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ STATS ═══ -->
<section class="stats-band">
  <div class="container">
    <div class="stats-grid">
      <?php
      $stats = [
        ['fas fa-smile',          2000, '+', 'Happy Clients'],
        ['fas fa-map-marker-alt', 50,   '+', 'Districts Served'],
        ['fas fa-truck',          5000, '+', 'Successful Moves'],
        ['fas fa-calendar-alt',   10,   '+', 'Years in Business'],
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

<!-- ═══ TEAM ═══ -->
<section class="section-pad bg-light">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">Our People</span>
      <h2 class="section-title">The Team Behind Every Great Move</h2>
      <p class="section-subtitle">A passionate group of professionals dedicated to making your relocation seamless.</p>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:28px;margin-top:2rem;">
      <?php
      $team = [
        ['fas fa-user-tie',     'Operations Lead',    'Coordinates every move with precision and ensures client satisfaction.'],
        ['fas fa-users-cog',    'Packing Specialists','Expert packers trained in handling fragile, heavy, and valuable items.'],
        ['fas fa-truck',        'Driver Team',        'Licensed, experienced drivers familiar with every road across Uganda.'],
        ['fas fa-headset',      'Customer Care',      '24/7 support team ready to answer your questions and track your move.'],
      ];
      foreach ($team as $tm):
      ?>
      <div class="service-card fade-up" style="text-align:center;">
        <div class="service-icon" style="margin:0 auto 18px;">
          <i class="<?= $tm[0] ?>"></i>
        </div>
        <h3><?= $tm[1] ?></h3>
        <p><?= $tm[2] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
