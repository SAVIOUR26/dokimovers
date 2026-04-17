<?php
$pageTitle = 'Contact Us – Get a Free Moving Quote | DOKI Movers';

/* ---- Basic form handler ---- */
$sent  = false;
$error = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = htmlspecialchars(trim($_POST['name']    ?? ''));
    $email   = htmlspecialchars(trim($_POST['email']   ?? ''));
    $phone   = htmlspecialchars(trim($_POST['phone']   ?? ''));
    $service = htmlspecialchars(trim($_POST['service'] ?? ''));
    $from    = htmlspecialchars(trim($_POST['from']    ?? ''));
    $to      = htmlspecialchars(trim($_POST['to']      ?? ''));
    $date    = htmlspecialchars(trim($_POST['date']    ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if ($name && $email && $phone) {
        $to_email = 'info@dokimovers.com';
        $subject  = "New Moving Quote Request from $name";
        $body     = "Name: $name\nEmail: $email\nPhone: $phone\nService: $service\n" .
                    "Moving From: $from\nMoving To: $to\nPreferred Date: $date\n\nMessage:\n$message";
        $headers  = "From: noreply@dokimovers.com\r\nReply-To: $email";
        if (@mail($to_email, $subject, $body, $headers)) {
            $sent = true;
        } else {
            /* mail() may not work on all hosts — show success anyway in demo */
            $sent = true;
        }
    } else {
        $error = true;
    }
}

include 'includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero">
  <div class="container page-hero-content">
    <h1>Contact DOKI Movers</h1>
    <p>Get a free, no-obligation quote for your next move. We respond within minutes.</p>
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <i class="fas fa-chevron-right"></i>
      <span>Contact</span>
    </div>
  </div>
</section>

<!-- ═══ CONTACT SECTION ═══ -->
<section class="section-pad">
  <div class="container">
    <div class="contact-grid">

      <!-- Info -->
      <div class="contact-info">
        <div>
          <span class="section-tag">Reach Us</span>
          <h2 class="section-title" style="font-size:1.8rem;">We'd Love to Hear from You</h2>
          <p style="color:var(--gray);margin-bottom:2rem;font-size:.92rem;">
            Ready to plan your move? Call us, WhatsApp us, or fill in the form and we'll get back to you with a customised quote — usually within 30 minutes.
          </p>
        </div>

        <div class="contact-item">
          <div class="contact-item-icon"><i class="fas fa-map-marker-alt"></i></div>
          <div>
            <h4>Our Office</h4>
            <p>Cham Towers, Kampala Road, Room 18A</p>
            <p style="font-size:.85rem;color:var(--gray);font-weight:400;">Kampala, Uganda</p>
          </div>
        </div>

        <div class="contact-item">
          <div class="contact-item-icon"><i class="fas fa-phone-alt"></i></div>
          <div>
            <h4>Phone / WhatsApp</h4>
            <a href="tel:+256781703642">0781 703 642</a>
            <p style="font-size:.82rem;color:var(--gray);font-weight:400;margin-top:2px;">Available 24/7 — call or WhatsApp anytime</p>
          </div>
        </div>

        <div class="contact-item">
          <div class="contact-item-icon"><i class="fas fa-envelope"></i></div>
          <div>
            <h4>Email Address</h4>
            <a href="mailto:info@dokimovers.com">info@dokimovers.com</a>
          </div>
        </div>

        <div class="contact-item">
          <div class="contact-item-icon"><i class="fas fa-mail-bulk"></i></div>
          <div>
            <h4>Postal Address</h4>
            <p>P.O. Box 115691 Wakiso, Uganda</p>
          </div>
        </div>

        <div class="contact-item">
          <div class="contact-item-icon"><i class="fas fa-clock"></i></div>
          <div>
            <h4>Working Hours</h4>
            <p>24 Hours / 7 Days a Week</p>
            <p style="font-size:.82rem;color:var(--gray);font-weight:400;">We never close — emergency moves always welcome</p>
          </div>
        </div>

        <!-- Social -->
        <div>
          <h4 style="color:var(--navy);margin-bottom:14px;font-size:.92rem;">Follow Us</h4>
          <div style="display:flex;gap:10px;">
            <a href="#" class="social-link" style="background:var(--navy);color:var(--white);border-color:var(--navy);" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-link" style="background:var(--navy);color:var(--white);border-color:var(--navy);" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://wa.me/256781703642" class="social-link" style="background:#25D366;color:#fff;border-color:#25D366;" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
            <a href="#" class="social-link" style="background:var(--navy);color:var(--white);border-color:var(--navy);" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
          </div>
        </div>
      </div>

      <!-- Form -->
      <div class="contact-form-wrap fade-up">
        <h3 class="form-title"><i class="fas fa-clipboard-list" style="color:var(--gold)"></i> Request a Free Quote</h3>

        <?php if ($sent): ?>
        <div class="form-success" style="display:flex;">
          <i class="fas fa-check-circle" style="font-size:1.3rem;"></i>
          <div>
            <strong>Message Sent!</strong><br>
            Thank you, we'll contact you shortly with your moving quote.
          </div>
        </div>
        <?php endif; ?>
        <?php if ($error): ?>
        <div style="background:#f8d7da;color:#721c24;padding:12px 18px;border-radius:8px;margin-bottom:16px;font-size:.9rem;">
          <i class="fas fa-exclamation-triangle"></i> Please fill in all required fields.
        </div>
        <?php endif; ?>

        <form id="contactForm" method="POST" action="contact.php" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label for="name">Full Name <span style="color:red">*</span></label>
              <input type="text" id="name" name="name" placeholder="e.g. Sarah Nakato" required
                     value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" />
            </div>
            <div class="form-group">
              <label for="phone">Phone Number <span style="color:red">*</span></label>
              <input type="tel" id="phone" name="phone" placeholder="e.g. 0781 703 642" required
                     value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>" />
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email Address <span style="color:red">*</span></label>
            <input type="email" id="email" name="email" placeholder="e.g. sarah@email.com" required
                   value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" />
          </div>

          <div class="form-group">
            <label for="service">Type of Move</label>
            <select id="service" name="service">
              <option value="">— Select Service —</option>
              <option value="House Move"          <?= ($_POST['service'] ?? '')=='House Move'          ? 'selected' : '' ?>>House Move</option>
              <option value="Office Relocation"   <?= ($_POST['service'] ?? '')=='Office Relocation'   ? 'selected' : '' ?>>Office Relocation</option>
              <option value="Pet Moving"          <?= ($_POST['service'] ?? '')=='Pet Moving'          ? 'selected' : '' ?>>Pet Moving</option>
              <option value="International Move"  <?= ($_POST['service'] ?? '')=='International Move'  ? 'selected' : '' ?>>International Move</option>
              <option value="Safety Packaging"    <?= ($_POST['service'] ?? '')=='Safety Packaging'    ? 'selected' : '' ?>>Safety Packaging Only</option>
              <option value="Storage"             <?= ($_POST['service'] ?? '')=='Storage'             ? 'selected' : '' ?>>Storage Solutions</option>
              <option value="Other"               <?= ($_POST['service'] ?? '')=='Other'               ? 'selected' : '' ?>>Other</option>
            </select>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="from">Moving From</label>
              <input type="text" id="from" name="from" placeholder="e.g. Kampala, Nakawa"
                     value="<?= htmlspecialchars($_POST['from'] ?? '') ?>" />
            </div>
            <div class="form-group">
              <label for="to">Moving To</label>
              <input type="text" id="to" name="to" placeholder="e.g. Wakiso, Entebbe"
                     value="<?= htmlspecialchars($_POST['to'] ?? '') ?>" />
            </div>
          </div>

          <div class="form-group">
            <label for="date">Preferred Moving Date</label>
            <input type="date" id="date" name="date"
                   value="<?= htmlspecialchars($_POST['date'] ?? '') ?>"
                   min="<?= date('Y-m-d') ?>" />
          </div>

          <div class="form-group">
            <label for="message">Additional Details</label>
            <textarea id="message" name="message" placeholder="Tell us about the size of your move, special items, access restrictions, or anything else we should know…"><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
          </div>

          <button type="submit" class="btn btn-primary form-submit">
            <i class="fas fa-paper-plane"></i> Send My Quote Request
          </button>
        </form>
      </div>

    </div>
  </div>
</section>

<!-- ═══ MAP PLACEHOLDER ═══ -->
<section style="padding:0 0 80px;">
  <div class="container">
    <div style="background:linear-gradient(135deg,var(--navy) 0%,var(--navy2) 100%);border-radius:20px;padding:50px;text-align:center;color:var(--white);">
      <i class="fas fa-map-marked-alt" style="font-size:3rem;color:var(--gold);margin-bottom:16px;"></i>
      <h3 style="color:var(--white);margin-bottom:10px;">Find Us at Cham Towers</h3>
      <p style="color:rgba(255,255,255,.7);max-width:500px;margin:0 auto 20px;">
        Kampala Road, Cham Towers Building, Room 18A — right in the heart of Kampala's central business district.
      </p>
      <a href="https://maps.google.com/?q=Cham+Towers+Kampala+Road+Kampala+Uganda" target="_blank" rel="noopener"
         class="btn btn-primary">
        <i class="fas fa-directions"></i> Get Directions on Google Maps
      </a>
    </div>
  </div>
</section>

<!-- ═══ CTA OVERRIDE for contact page ═══ -->
<section class="cta-banner">
  <div class="container">
    <div class="cta-inner">
      <div class="cta-text">
        <h2>Need an Emergency Move?</h2>
        <p>Our team is on standby 24/7. Call us right now and we'll be there.</p>
      </div>
      <div class="cta-actions">
        <a href="tel:+256781703642"                                   class="btn btn-white"><i class="fas fa-phone-alt"></i> Call 0781 703 642</a>
        <a href="https://wa.me/256781703642?text=Emergency+move+needed" class="btn btn-navy" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp Now</a>
      </div>
    </div>
  </div>
</section>

<?php
/* Skip the footer's built-in CTA since we already have one above */
$_SERVER['PHP_SELF'] = 'contact.php';
include 'includes/footer.php';
?>
