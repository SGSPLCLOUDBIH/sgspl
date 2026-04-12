<!-- footer.php — include at bottom of every page -->
<?php
$base = '';
if (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) $base = '../';
?>
<footer>
  <div class="footer-top">
    <div class="footer-brand">
      <a href="<?= $base ?>index.php" class="nav-logo" style="margin-bottom:4px;display:inline-flex">
        <div class="nav-logo-mark">SG</div>
        <div class="nav-logo-name" style="margin-left:10px">SGSPL<span style="color:var(--teal)">.cloud</span></div>
      </a>
      <p>India's most trusted Visitor Management System. Securing entrances for 500+ enterprises, hospitals, campuses and smart buildings across 20+ cities.</p>
      <div class="footer-social">
        <a href="#" class="social-btn" title="LinkedIn">in</a>
        <a href="#" class="social-btn" title="Twitter">𝕏</a>
        <a href="#" class="social-btn" title="YouTube">▶</a>
        <a href="#" class="social-btn" title="Instagram">📷</a>
      </div>
    </div>

    <div class="footer-col">
      <h4>Products</h4>
      <a href="<?= $base ?>pages/products.php">VMS Enterprise</a>
      <a href="<?= $base ?>pages/products.php">VMS Campus</a>
      <a href="<?= $base ?>pages/products.php">VMS Lite</a>
      <a href="<?= $base ?>pages/products.php">Mobile App</a>
      <a href="<?= $base ?>pages/products.php">API Platform</a>
    </div>

    <div class="footer-col">
      <h4>Company</h4>
      <a href="<?= $base ?>pages/about.php">About SGSPL</a>
      <a href="<?= $base ?>pages/about.php#team">Leadership</a>
      <a href="<?= $base ?>pages/about.php#careers">Careers</a>
      <a href="<?= $base ?>pages/about.php#press">Press</a>
      <a href="<?= $base ?>pages/contact.php">Contact</a>
    </div>

    <div class="footer-col">
      <h4>Contact</h4>
      <a href="mailto:hello@sgspl.cloud">hello@sgspl.cloud</a>
      <a href="tel:+917982023117">7982023117 (Toll Free)</a>
      <a href="#">New Delhi, India</a>
      <a href="#">Mumbai · Bengaluru · Hyderabad</a>
      <a href="<?= $base ?>pages/contact.php" style="color:var(--teal);margin-top:8px;font-weight:600">Get a Demo →</a>
    </div>
  </div>

  <div class="footer-bottom">
    <div>© <?= date('Y') ?> Security Gate Digital Pvt Ltd. All rights reserved.</div>
    <div style="display:flex;gap:20px">
      <a href="#">Privacy Policy</a>
      <a href="#">Terms of Service</a>
      <a href="#">Cookie Policy</a>
    </div>
    <div>GST: 00000000000000 &nbsp;·&nbsp; CIN: 000000000000000 </div>
  </div>
</footer>

<script src="<?= $base ?>assets/js/main.js"></script>
</body>
</html>
