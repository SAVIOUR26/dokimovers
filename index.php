<?php
$pageTitle = 'Home – Professional Moving Services in Uganda';
include __DIR__ . '/includes/header.php';
?>

<!-- ═══════════════════ HERO ═══════════════════ -->
<section class="hero" aria-label="Hero">
  <div class="hero-shapes">
    <div class="hero-shape hero-shape-1"></div>
    <div class="hero-shape hero-shape-2"></div>
    <div class="hero-shape hero-shape-3"></div>
  </div>
  <div class="container">
    <div class="hero-grid">
      <div class="hero-content">
        <div class="hero-badge"><i class="fas fa-star"></i> Uganda's #1 Moving Company</div>
        <h1 class="hero-title">
          Move Without<br><span>Any Stress</span>
        </h1>
        <p class="hero-desc">
          DOKI Movers delivers professional, safe, and on-time relocation services across Uganda — houses, offices, pets, and international moves. We handle the heavy lifting so you don't have to.
        </p>
        <div class="hero-actions">
          <a href="/contact"       class="btn btn-primary"><i class="fas fa-calendar-check"></i> Get a Free Quote</a>
          <a href="/services"      class="btn btn-outline"><i class="fas fa-boxes-stacked"></i> Our Services</a>
        </div>
        <div class="hero-stats">
          <div class="hero-stat">
            <div class="hero-stat-num" data-count="2000" data-suffix="+">0+</div>
            <div class="hero-stat-label">Happy Clients</div>
          </div>
          <div class="hero-stat">
            <div class="hero-stat-num" data-count="10" data-suffix="+">0+</div>
            <div class="hero-stat-label">Years Experience</div>
          </div>
          <div class="hero-stat">
            <div class="hero-stat-num" data-count="50" data-suffix="+">0+</div>
            <div class="hero-stat-label">Districts Served</div>
          </div>
          <div class="hero-stat">
            <div class="hero-stat-num" data-count="100" data-suffix="%">0%</div>
            <div class="hero-stat-label">Safe Deliveries</div>
          </div>
        </div>
      </div>

      <div class="hero-visual">
        <div class="hero-card-main">
          <h3><i class="fas fa-shield-halved"></i>&nbsp; Your Belongings, Fully Protected</h3>
          <p>Every item we handle is wrapped, secured, and tracked until it reaches your new destination safely. Trust is our business.</p>
        </div>
        <div class="hero-cards-row">
          <div class="hero-mini-card">
            <i class="fas fa-truck-fast"></i>
            <p>Fast & Reliable</p>
          </div>
          <div class="hero-mini-card">
            <i class="fas fa-globe-africa"></i>
            <p>Local & International</p>
          </div>
          <div class="hero-mini-card">
            <i class="fas fa-clock"></i>
            <p>24/7 Service</p>
          </div>
          <div class="hero-mini-card">
            <i class="fas fa-box-open"></i>
            <p>Safety Packaging</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ TRUST BAR ═══════════════════ -->
<div class="trust-bar" aria-hidden="true">
  <div class="trust-track">
    <?php
    $items = [
      ['fas fa-check-circle', 'Trusted & Licensed'],
      ['fas fa-star',         'Countrywide Coverage'],
      ['fas fa-shield-alt',   '100% Safe Moves'],
      ['fas fa-clock',        '24/7 Availability'],
      ['fas fa-handshake',    'Affordable Rates'],
      ['fas fa-truck',        'Modern Fleet'],
      ['fas fa-award',        'Professional Team'],
      ['fas fa-map-marker-alt','Based in Kampala'],
      ['fas fa-check-circle', 'Trusted & Licensed'],
      ['fas fa-star',         'Countrywide Coverage'],
      ['fas fa-shield-alt',   '100% Safe Moves'],
      ['fas fa-clock',        '24/7 Availability'],
      ['fas fa-handshake',    'Affordable Rates'],
      ['fas fa-truck',        'Modern Fleet'],
      ['fas fa-award',        'Professional Team'],
      ['fas fa-map-marker-alt','Based in Kampala'],
    ];
    foreach ($items as $item):
    ?>
    <span class="trust-item"><i class="<?= $item[0] ?>"></i><?= $item[1] ?></span>
    <span class="trust-dot">•</span>
    <?php endforeach; ?>
  </div>
</div>

<!-- ═══════════════════ SERVICES ═══════════════════ -->
<section class="section-pad" id="services">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">What We Do</span>
      <h2 class="section-title">Comprehensive Moving Services</h2>
      <p class="section-subtitle">Whether you're moving across town or across borders, DOKI Movers has the right solution for every need.</p>
    </div>
    <div class="services-grid">
      <?php
      $services = [
        ['fas fa-house',          'House Moving',          'Full residential relocation — furniture, fragile items, appliances. We pack, load, transport, and unpack.', 'services.php'],
        ['fas fa-building',       'Office Relocation',     'Minimal downtime office moves. We work around your schedule to keep your business running smoothly.', 'services.php'],
        ['fas fa-paw',            'Pet Moving',            'Certified, comfortable transport for your beloved animals — locally and internationally.', 'services.php'],
        ['fas fa-globe',          'International Moves',   'Cross-border relocations with proper documentation, customs clearance, and door-to-door delivery.', 'services.php'],
        ['fas fa-box',            'Safety Packaging',      'High-quality packing materials and expert wrapping to protect every item — fragile or heavy.', 'services.php'],
        ['fas fa-warehouse',      'Storage Solutions',     'Short and long-term secure storage for your belongings while you\'re between locations.', 'services.php'],
      ];
      foreach ($services as $s):
      ?>
      <div class="service-card fade-up">
        <div class="service-icon"><i class="<?= $s[0] ?>"></i></div>
        <h3><?= $s[1] ?></h3>
        <p><?= $s[2] ?></p>
        <a href="<?= $s[3] ?>" class="service-link">Learn more <i class="fas fa-arrow-right"></i></a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════ WHY CHOOSE US ═══════════════════ -->
<section class="section-pad bg-light" id="why">
  <div class="container">
    <div class="why-grid">
      <div>
        <span class="section-tag">Why DOKI Movers</span>
        <h2 class="section-title">Uganda's Most Trusted Moving Partner</h2>
        <p style="color:var(--gray);margin-bottom:2rem;font-size:.95rem;">
          For over a decade, families and businesses across Uganda have relied on DOKI Movers for stress-free, safe, and affordable relocation. Our professional team treats your belongings like their own.
        </p>
        <div class="why-features">
          <?php
          $features = [
            ['fas fa-shield-alt',      'Fully Insured',        'Your items are insured during transit for complete peace of mind.'],
            ['fas fa-users',           'Expert Team',          'Trained, uniformed movers with years of hands-on experience.'],
            ['fas fa-truck-fast',      'On-Time Delivery',     'We respect your schedule and deliver on the agreed date.'],
            ['fas fa-tags',            'Fair Pricing',         'Transparent quotes — no hidden charges, no surprises.'],
            ['fas fa-phone-volume',    '24/7 Support',         'Our team is reachable day and night for your convenience.'],
            ['fas fa-boxes-stacked',   'Pro Packing',          'Premium materials to safeguard every item from damage.'],
          ];
          foreach ($features as $f):
          ?>
          <div class="why-feature fade-up">
            <div class="why-feature-icon"><i class="<?= $f[0] ?>"></i></div>
            <div>
              <h4><?= $f[1] ?></h4>
              <p><?= $f[2] ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="why-visual fade-up">
        <div class="why-visual-title"><i class="fas fa-star"></i> Our Moving Promise</div>
        <div class="why-checklist">
          <?php
          $checks = [
            'Free on-site assessment before your move',
            'Professional wrapping of fragile & valuable items',
            'GPS-tracked fleet for real-time updates',
            'Same-day and emergency moves available',
            'Disassembly and reassembly of furniture',
            'Thorough post-move clean-up service',
            'Serving 50+ districts across Uganda',
            'Competitive rates with student & loyalty discounts',
          ];
          foreach ($checks as $c):
          ?>
          <div class="why-check"><i class="fas fa-check-circle"></i><?= $c ?></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ STATS ═══════════════════ -->
<section class="stats-band">
  <div class="container">
    <div class="stats-grid">
      <?php
      $stats = [
        ['fas fa-smile',          2000, '+', 'Happy Clients'],
        ['fas fa-map-marker-alt', 50,   '+', 'Districts Served'],
        ['fas fa-truck',          5000, '+', 'Successful Moves'],
        ['fas fa-calendar-alt',   10,   '+', 'Years Experience'],
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

<!-- ═══════════════════ PROCESS ═══════════════════ -->
<section class="section-pad">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">How It Works</span>
      <h2 class="section-title">Your Move in 4 Simple Steps</h2>
      <p class="section-subtitle">We keep it simple so you can focus on your new beginning.</p>
    </div>
    <div class="process-steps">
      <?php
      $steps = [
        ['1', 'fas fa-phone-alt',       'Contact Us',        'Call or WhatsApp us with your moving details. We respond within minutes.'],
        ['2', 'fas fa-clipboard-list',  'Free Assessment',   'Our team visits your location and provides a detailed, no-obligation quote.'],
        ['3', 'fas fa-box-open',        'We Pack & Load',    'Professional packers secure all your items and load them onto our fleet.'],
        ['4', 'fas fa-house-chimney-window','Safe Delivery',  'Your belongings arrive safely at the destination, unpacked and arranged.'],
      ];
      foreach ($steps as $s):
      ?>
      <div class="process-step fade-up">
        <div class="step-num"><?= $s[0] ?></div>
        <i class="<?= $s[1] ?>" style="font-size:1.8rem;color:var(--navy);margin-bottom:10px;"></i>
        <h4><?= $s[2] ?></h4>
        <p><?= $s[3] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════ PHOTO GALLERY ═══════════════════ -->
<section class="section-pad" id="photos">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">Our Work in Photos</span>
      <h2 class="section-title">See DOKI Movers in Action</h2>
      <p class="section-subtitle">Real moves. Real care. Every photo tells the story of a family or business we helped move forward.</p>
    </div>
    <div class="home-gallery">
      <!-- 1: wide 960×533 → spans 2 cols -->
      <div class="home-gallery-item hg-wide fade-up">
        <img src="Photos/doki-packing-warehouse.jpg" alt="DOKI Movers team packing boxes in warehouse" loading="lazy">
      </div>
      <!-- 2: portrait 1200×1611 → spans 2 rows -->
      <div class="home-gallery-item hg-portrait fade-up">
        <img src="Photos/doki-truck-loading.jpg" alt="DOKI Movers crew loading a truck" loading="lazy">
      </div>
      <!-- 3: nearly square 1094×960 → normal -->
      <div class="home-gallery-item fade-up">
        <img src="Photos/doki-truck-branded.jpg" alt="DOKI Movers branded truck ready for a move" loading="lazy">
      </div>
      <!-- 4: 3:2 600×400 → normal -->
      <div class="home-gallery-item fade-up">
        <img src="Photos/doki-mover-checklist.jpeg" alt="Professional DOKI mover with checklist and boxes" loading="lazy">
      </div>
      <!-- 5: wide 500×278 → spans 2 cols -->
      <div class="home-gallery-item hg-wide fade-up">
        <img src="Photos/doki-team-carry.jpg" alt="DOKI Movers team carrying boxes" loading="lazy">
      </div>
      <!-- CTA card -->
      <div class="home-gallery-item hg-cta fade-up">
        <i class="fas fa-images"></i>
        <p>More from our moves</p>
        <a href="gallery.php" class="btn btn-primary" style="margin-top:14px;font-size:.85rem;">View Full Gallery</a>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ COVERAGE ═══════════════════ -->
<section class="section-pad bg-light" id="coverage">
  <div class="container">
    <div class="coverage-grid">
      <div>
        <span class="section-tag">Service Area</span>
        <h2 class="section-title">We Move You Anywhere in Uganda</h2>
        <p style="color:var(--gray);margin-bottom:1.5rem;font-size:.95rem;">
          DOKI Movers operates countrywide with our main hub in Kampala. We serve all major cities and remote districts, making us Uganda's most accessible moving company.
        </p>
        <p style="color:var(--gray);margin-bottom:2rem;font-size:.95rem;">
          Our central hub at Cham Towers on Kampala Road puts us right in the heart of Uganda's capital — ready to deploy quickly to any destination.
        </p>
        <div class="coverage-districts">
          <?php
          $districts = [
            ['fas fa-map-marker-alt', 'Kampala (HQ)',         'Central Region — Headquarters'],
            ['fas fa-map-marker-alt', 'Wakiso District',      'Central Region'],
            ['fas fa-map-marker-alt', 'Mukono District',      'Central Region'],
            ['fas fa-map-marker-alt', 'Entebbe City',         'Central Region'],
            ['fas fa-map-marker-alt', 'Jinja City',           'Eastern Uganda'],
            ['fas fa-map-marker-alt', 'Mbarara City',         'Western Uganda'],
            ['fas fa-map-marker-alt', 'Gulu City',            'Northern Uganda'],
            ['fas fa-map-marker-alt', 'All Regions',          'And every district in between…'],
          ];
          foreach ($districts as $d):
          ?>
          <div class="district-badge fade-up">
            <i class="<?= $d[0] ?>"></i>
            <span><strong><?= $d[1] ?></strong> — <?= $d[2] ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="coverage-map fade-up">
        <i class="fas fa-map"></i>
        <p style="font-size:1.1rem;">Uganda — Full Coverage</p>
        <p style="font-size:.85rem;color:var(--gray);margin-top:8px;">50+ Districts Served Nationwide</p>
        <a href="/contact" class="btn btn-navy" style="margin-top:24px;">
          <i class="fas fa-location-dot"></i> Check Your Area
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ TESTIMONIALS ═══════════════════ -->
<section class="section-pad" id="testimonials">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">Testimonials</span>
      <h2 class="section-title">What Our Clients Say</h2>
      <p class="section-subtitle">Real stories from real people who trusted DOKI Movers with their most valuable possessions.</p>
    </div>
    <div class="testimonials-grid">
      <?php
      $testimonials = [
        ['S', 'Sarah Nakato',  'Kampala',   '★★★★★', 'DOKI Movers made our house move completely stress-free! They arrived on time, packed everything carefully, and not a single item was damaged. I was genuinely impressed.'],
        ['J', 'James Okello',  'Jinja',     '★★★★★', 'We relocated our entire office without a single day of downtime. The team was professional, fast, and took great care of our equipment. Highly recommended!'],
        ['A', 'Amina Hassan',  'Mbarara',   '★★★★★', 'I was worried about my pet\'s transport but DOKI Movers handled it perfectly. My dog arrived happy and safe. Their pet moving service is outstanding.'],
        ['D', 'David Mugisha', 'Entebbe',   '★★★★★', 'Used DOKI Movers twice now — once for my house and once for my parents. Both times were flawless. The pricing is very fair and the team is friendly.'],
        ['G', 'Grace Atim',    'Gulu',      '★★★★★', 'International move to Kenya — they handled all the paperwork, customs, and delivery. Everything arrived in perfect condition. DOKI Movers are true professionals.'],
        ['R', 'Robert Byamah', 'Wakiso',    '★★★★★', 'Best money I ever spent! Their packing team is incredible. They wrapped my TV, glassware, and artwork like it was precious cargo. Because to me, it was!'],
      ];
      foreach ($testimonials as $t):
      ?>
      <div class="testimonial-card fade-up">
        <div class="stars"><?= $t[3] ?></div>
        <p class="testimonial-text">"<?= $t[4] ?>"</p>
        <div class="testimonial-author">
          <div class="author-avatar"><?= $t[0] ?></div>
          <div>
            <div class="author-name"><?= $t[1] ?></div>
            <div class="author-loc"><i class="fas fa-map-marker-alt" style="color:var(--gold);font-size:.7rem"></i> <?= $t[2] ?>, Uganda</div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
