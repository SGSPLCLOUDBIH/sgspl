<!-- navbar.php — include at top of every page -->
<?php
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
$base = '';
// detect if we're in pages/ subfolder
if (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) {
    $base = '../';
}
?>
<nav class="navbar" id="navbar">
  <a href="<?= $base ?>index.php" class="nav-logo">
    <div class="nav-logo-mark">SG</div>
    <div class="nav-logo-name">SGSPL<span>.cloud</span></div>
  </a>

  <ul class="nav-links">
    <li><a href="<?= $base ?>index.php"              class="<?= $currentPage==='index'?'active':'' ?>">Home</a></li>
    <li><a href="<?= $base ?>pages/about.php"        class="<?= $currentPage==='about'?'active':'' ?>">About</a></li>
    <li><a href="<?= $base ?>pages/products.php"     class="<?= $currentPage==='products'?'active':'' ?>">Products</a></li>
    <li><a href="<?= $base ?>pages/solutions.php"    class="<?= $currentPage==='solutions'?'active':'' ?>">Solutions</a></li>
    <li><a href="<?= $base ?>pages/pricing.php"      class="<?= $currentPage==='pricing'?'active':'' ?>">Pricing</a></li>
    <li><a href="<?= $base ?>pages/contact.php"      class="<?= $currentPage==='contact'?'active':'' ?>">Contact</a></li>
  </ul>

  <div class="nav-right">
    <a href="http://localhost/vms" class="btn-nav-ghost">Login to VMS</a>
    <a href="<?= $base ?>pages/contact.php" class="btn-nav-primary">Get Demo</a>
  </div>

  <button class="hamburger" id="hamburger" aria-label="Menu">
    <span></span><span></span><span></span>
  </button>
</nav>

<!-- Mobile menu -->
<div class="mobile-menu" id="mobileMenu">
  <button class="mobile-close" id="mobileClose" style="position:absolute;top:22px;right:22px;background:none;border:none;color:white;font-size:28px;">✕</button>
  <a href="<?= $base ?>index.php">Home</a>
  <a href="<?= $base ?>pages/about.php">About Us</a>
  <a href="<?= $base ?>pages/products.php">Products</a>
  <a href="<?= $base ?>pages/solutions.php">Solutions</a>
  <a href="<?= $base ?>pages/pricing.php">Pricing</a>
  <a href="<?= $base ?>pages/contact.php">Contact</a>
  <a href="http://localhost/vms" style="color:var(--teal);">Login to VMS →</a>
</div>
