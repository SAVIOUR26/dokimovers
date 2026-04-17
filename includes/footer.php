<?php /* DOKI Movers — shared footer */ ?>

<!-- CTA Banner (shown on all pages except contact) -->
<?php if (basename($_SERVER['PHP_SELF']) !== 'contact.php'): ?>
<section class="cta-banner">
  <div class="container">
    <div class="cta-inner">
      <div class="cta-text">
        <h2>Ready to Plan Your Move?</h2>
        <p>Get a free quote today — our team is available 24/7 to assist you.</p>
      </div>
      <div class="cta-actions">
        <a href="/contact" class="btn btn-white"><i class="fas fa-envelope"></i> Get Free Quote</a>
        <a href="tel:+256781703642" class="btn btn-navy"><i class="fas fa-phone-alt"></i> 0781703642</a>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- Footer -->
<footer>
  <div class="footer-top">
    <div class="container">
      <div class="footer-grid">

        <!-- Brand -->
        <div class="footer-brand">
          <a href="/" class="logo" aria-label="DOKI Movers">
            <div class="logo-icon"><i class="fas fa-truck-moving"></i></div>
            <div class="logo-text">
              <span class="logo-name">DOKI <span>Movers</span></span>
              <span class="logo-tagline">Move Without Stress</span>
            </div>
          </a>
          <p class="footer-desc">
            Uganda's trusted moving partner. From houses to offices, local streets to international borders — we move you safely, on time, and with zero stress.
          </p>
          <div class="social-links">
            <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-link" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
            <a href="https://wa.me/256781703642" class="social-link" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>

        <!-- Quick links -->
        <div class="footer-col">
          <h4>Quick Links</h4>
          <ul class="footer-links">
            <li><a href="/"><i class="fas fa-chevron-right"></i> Home</a></li>
            <li><a href="/about"><i class="fas fa-chevron-right"></i> About Us</a></li>
            <li><a href="/services"><i class="fas fa-chevron-right"></i> Services</a></li>
            <li><a href="/gallery"><i class="fas fa-chevron-right"></i> Gallery</a></li>
            <li><a href="/contact"><i class="fas fa-chevron-right"></i> Contact</a></li>
          </ul>
        </div>

        <!-- Services -->
        <div class="footer-col">
          <h4>Our Services</h4>
          <ul class="footer-links">
            <li><a href="/services"><i class="fas fa-chevron-right"></i> House Moving</a></li>
            <li><a href="/services"><i class="fas fa-chevron-right"></i> Office Relocation</a></li>
            <li><a href="/services"><i class="fas fa-chevron-right"></i> Pet Moving</a></li>
            <li><a href="/services"><i class="fas fa-chevron-right"></i> International Moves</a></li>
            <li><a href="/services"><i class="fas fa-chevron-right"></i> Safe Packaging</a></li>
          </ul>
        </div>

        <!-- Contact -->
        <div class="footer-col">
          <h4>Contact Us</h4>
          <div class="footer-contact-items">
            <div class="footer-contact-item">
              <i class="fas fa-map-marker-alt"></i>
              <span>Cham Towers, Kampala Road, Rm 18A, Kampala, Uganda</span>
            </div>
            <div class="footer-contact-item">
              <i class="fas fa-phone-alt"></i>
              <a href="tel:+256781703642">0781 703 642</a>
            </div>
            <div class="footer-contact-item">
              <i class="fab fa-whatsapp"></i>
              <a href="https://wa.me/256781703642">WhatsApp Us</a>
            </div>
            <div class="footer-contact-item">
              <i class="fas fa-envelope"></i>
              <a href="mailto:info@dokimovers.com">info@dokimovers.com</a>
            </div>
            <div class="footer-contact-item">
              <i class="fas fa-mail-bulk"></i>
              <span>P.O. Box 115691 Wakiso</span>
            </div>
            <div class="footer-contact-item">
              <i class="fas fa-clock"></i>
              <span>24 / 7 — We Never Close</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="footer-bottom">
      <span>&copy; <?= date('Y') ?> DOKI Movers. All rights reserved.</span>
      <span>Designed with <i class="fas fa-heart" style="color:#F5C518"></i> for Uganda's best movers &mdash; <a href="https://dokimovers.com">dokimovers.com</a></span>
    </div>
  </div>
</footer>

<!-- Floating WhatsApp -->
<a href="https://wa.me/256781703642?text=Hello%20DOKI%20Movers%2C%20I%20would%20like%20a%20quote%20for%20my%20move."
   class="whatsapp-float" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
  <i class="fab fa-whatsapp"></i>
</a>

<!-- Scroll to top -->
<button class="scroll-top" aria-label="Scroll to top">
  <i class="fas fa-chevron-up"></i>
</button>

<script src="js/main.js"></script>
</body>
</html>
