<?php $pageTitle = 'Pricing — SGSPL Cloud'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/><meta name="viewport" content="width=device-width,initial-scale=1"/>
<title><?= $pageTitle ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="../assets/css/style.css"/>
<style>
.billing-toggle { display:flex;align-items:center;gap:12px;justify-content:center;margin:32px 0; }
.billing-label  { font-size:14px;font-weight:600;transition:opacity .25s; }
.toggle-track   { width:48px;height:26px;background:rgba(255,255,255,.15);border-radius:13px;position:relative;cursor:pointer;transition:background .3s; }
.toggle-track.on{ background:var(--teal); }
.toggle-track input { display:none; }
.toggle-knob    { position:absolute;top:3px;left:3px;width:20px;height:20px;border-radius:50%;background:#fff;transition:transform .25s; }
.toggle-track.on .toggle-knob { transform:translateX(22px); }
.save-badge     { padding:3px 10px;border-radius:20px;font-size:11px;font-weight:700;background:rgba(0,201,167,.15);color:var(--teal);border:1px solid rgba(0,201,167,.3); }
.plans-grid { display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:20px; }
.plan-card  { background:var(--ink2);border:1px solid var(--border);border-radius:var(--radius-lg);padding:32px;position:relative;transition:all .3s; }
.plan-card:hover { transform:translateY(-4px); }
.plan-card.popular { border-color:var(--teal);background:linear-gradient(180deg,rgba(0,201,167,.07),var(--ink2)); }
.popular-badge { position:absolute;top:-12px;left:50%;transform:translateX(-50%);padding:4px 16px;background:var(--teal);color:#000;border-radius:20px;font-size:11px;font-weight:800;white-space:nowrap; }
.plan-name { font-size:13px;font-weight:800;text-transform:uppercase;letter-spacing:2px;color:var(--muted);margin-bottom:8px; }
.plan-price { font-family:'Playfair Display',serif;font-size:48px;font-weight:900;letter-spacing:-2px;line-height:1; }
.plan-price sup { font-size:22px;vertical-align:super;font-family:'Outfit',sans-serif;font-weight:700; }
.plan-price span { font-size:16px;font-family:'Outfit',sans-serif;font-weight:500;color:var(--muted); }
.plan-desc { font-size:14px;color:var(--muted);margin:12px 0 24px;line-height:1.65; }
.plan-divider { height:1px;background:var(--border);margin:20px 0; }
.plan-features li { display:flex;align-items:flex-start;gap:9px;font-size:13px;color:rgba(255,255,255,.75);margin-bottom:10px;line-height:1.5; }
.plan-features li::before { content:'✓';color:var(--teal);font-weight:800;flex-shrink:0;margin-top:1px; }
.plan-features li.no-feat { color:rgba(255,255,255,.3); }
.plan-features li.no-feat::before { content:'—';color:rgba(255,255,255,.2); }
.plan-btn { display:block;text-align:center;padding:12px;border-radius:var(--radius);font-weight:700;font-size:15px;margin-top:24px;transition:all .25s; }
.plan-btn-primary { background:var(--teal);color:#000; }
.plan-btn-primary:hover { background:var(--teal2);transform:translateY(-1px); }
.plan-btn-ghost { border:1px solid var(--border2);color:var(--white); }
.plan-btn-ghost:hover { background:rgba(255,255,255,.07); }
.compare-table { width:100%;border-collapse:collapse;margin-top:48px;font-size:13px; }
.compare-table th { padding:14px 16px;text-align:left;font-size:11px;text-transform:uppercase;letter-spacing:1px;color:var(--muted);border-bottom:1px solid var(--border); }
.compare-table td { padding:12px 16px;border-bottom:1px solid rgba(255,255,255,.04);vertical-align:middle; }
.compare-table tr:hover td { background:rgba(255,255,255,.02); }
.compare-table td:first-child { color:rgba(255,255,255,.8);font-weight:500; }
.check { color:var(--teal);font-size:16px;font-weight:800; }
.cross { color:rgba(255,255,255,.2); }
.faq-grid { display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-top:48px; }
.faq-item { background:var(--ink2);border:1px solid var(--border);border-radius:var(--radius-lg);padding:24px; }
.faq-q { font-size:15px;font-weight:700;margin-bottom:10px; }
.faq-a { font-size:14px;color:var(--muted);line-height:1.7; }
@media(max-width:768px){.plans-grid,.faq-grid{grid-template-columns:1fr}.compare-table{display:none}}
</style>
</head>
<body>
<?php include '../includes/navbar.php'; ?>

<div class="page-hero">
  <div class="breadcrumb"><a href="../index.php">Home</a><span>/</span><span>Pricing</span></div>
  <h1 class="page-hero-title">Simple, transparent<br/><em>pricing</em></h1>
  <p class="page-hero-sub">No hidden fees. No per-visitor charges. Pay monthly or save 20% with annual billing.</p>
</div>

<section style="background:var(--ink)">

  <!-- Billing toggle -->
  <div class="billing-toggle">
    <div class="billing-label" id="lbl-monthly" style="opacity:1">Monthly</div>
    <div class="toggle-track" id="toggleTrack" onclick="toggleBilling()">
      <div class="toggle-knob" id="toggleKnob"></div>
    </div>
    <div class="billing-label" id="lbl-yearly" style="opacity:.45">Yearly</div>
    <span class="save-badge">Save 20%</span>
  </div>

  <!-- Plans -->
  <div class="plans-grid reveal">

    <!-- Lite -->
    <div class="plan-card">
      <div class="plan-name">VMS Lite</div>
      <div class="plan-price"><sup>₹</sup><span id="price-lite">999</span><span>/mo</span></div>
      <p class="plan-desc">For small offices, clinics and co-working spaces. Up to 3 gates.</p>
      <div class="plan-divider"></div>
      <ul class="plan-features">
        <li>Up to 3 entry gates</li>
        <li>Unlimited visitors</li>
        <li>Check-in / check-out</li>
        <li>Badge printing</li>
        <li>Host email alerts</li>
        <li>Monthly reports</li>
        <li>Mobile-friendly portal</li>
        <li class="no-feat">Pre-registration & QR</li>
        <li class="no-feat">Multi-site management</li>
        <li class="no-feat">API access</li>
      </ul>
      <a href="contact.php" class="plan-btn plan-btn-ghost">Start Free Trial</a>
    </div>

    <!-- Campus / Professional -->
    <div class="plan-card popular">
      <div class="popular-badge">⭐ Most Popular</div>
      <div class="plan-name">VMS Campus</div>
      <div class="plan-price"><sup>₹</sup><span id="price-campus">4999</span><span>/mo</span></div>
      <p class="plan-desc">For colleges, hospitals, IT parks and mid-size enterprises with complex needs.</p>
      <div class="plan-divider"></div>
      <ul class="plan-features">
        <li>Up to 10 entry gates</li>
        <li>Unlimited visitors</li>
        <li>Pre-registration & QR passes</li>
        <li>Photo & ID capture</li>
        <li>SMS + Email alerts</li>
        <li>Blacklist management</li>
        <li>Advanced reports & analytics</li>
        <li>Kiosk mode (self-service)</li>
        <li>Up to 3 sites</li>
        <li class="no-feat">API access</li>
      </ul>
      <a href="contact.php" class="plan-btn plan-btn-primary">Get Demo</a>
    </div>

    <!-- Enterprise -->
    <div class="plan-card">
      <div class="plan-name">VMS Enterprise</div>
      <div class="plan-price" style="font-size:32px;line-height:1.3">Custom<br/><span style="font-size:14px">Pricing</span></div>
      <p class="plan-desc">For large enterprises, government facilities and multi-campus organisations.</p>
      <div class="plan-divider"></div>
      <ul class="plan-features">
        <li>Unlimited gates & sites</li>
        <li>Unlimited visitors</li>
        <li>All Campus features</li>
        <li>CCTV & access control sync</li>
        <li>HRMS integration</li>
        <li>Custom API & webhooks</li>
        <li>Dedicated success manager</li>
        <li>White-label option</li>
        <li>On-premise deployment</li>
        <li>24×7 priority support</li>
      </ul>
      <a href="contact.php" class="plan-btn plan-btn-ghost">Contact Sales</a>
    </div>

  </div>

  <!-- Comparison table -->
  <div class="reveal">
    <h3 style="font-family:'Playfair Display',serif;font-size:28px;font-weight:900;letter-spacing:-1px;margin-top:64px;margin-bottom:4px">Full Feature Comparison</h3>
    <p style="color:var(--muted);font-size:14px;margin-bottom:0">See exactly what's included in each plan.</p>
    <table class="compare-table">
      <thead>
        <tr>
          <th style="width:38%">Feature</th>
          <th>Lite</th><th>Campus</th><th>Enterprise</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $rows = [
          ['Entry Gates','Up to 3','Up to 10','Unlimited'],
          ['Visitors / Month','Unlimited','Unlimited','Unlimited'],
          ['Check-in / Check-out','✓','✓','✓'],
          ['Badge Printing','✓','✓','✓'],
          ['Host Email Alerts','✓','✓','✓'],
          ['Pre-Registration & QR','—','✓','✓'],
          ['Photo & ID Capture','—','✓','✓'],
          ['Blacklist Management','—','✓','✓'],
          ['SMS & WhatsApp Alerts','—','✓','✓'],
          ['Overstay Alerts','—','✓','✓'],
          ['Advanced Reports','—','✓','✓'],
          ['Multi-Site Dashboard','—','3 sites','Unlimited'],
          ['Kiosk / Self-Service Mode','—','✓','✓'],
          ['CCTV Integration','—','—','✓'],
          ['Access Control Sync','—','—','✓'],
          ['HRMS Integration','—','—','✓'],
          ['REST API & Webhooks','—','—','✓'],
          ['White-Label Option','—','—','✓'],
          ['On-Premise Deployment','—','—','✓'],
          ['Dedicated Success Manager','—','—','✓'],
          ['SLA','99.9%','99.9%','99.99%'],
          ['Support','Phone + Email','Priority','24×7 Dedicated'],
        ];
        foreach($rows as [$feat, $lite, $campus, $ent]):
        ?>
        <tr>
          <td><?= $feat ?></td>
          <td class="<?= $lite==='✓'?'check':($lite==='—'?'cross':'') ?>"><?= $lite ?></td>
          <td class="<?= $campus==='✓'?'check':($campus==='—'?'cross':'') ?>"><?= $campus ?></td>
          <td class="<?= $ent==='✓'?'check':($ent==='—'?'cross':'') ?>"><?= $ent ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>

<!-- FAQ -->
<section style="background:var(--ink2)">
  <div class="section-label reveal">FAQs</div>
  <div class="section-title reveal">Frequently Asked<br/><em>Questions</em></div>
  <div class="faq-grid">
    <?php
    $faqs = [
      ['Is there a free trial?','Yes! All plans come with a 30-day free trial. No credit card required. You get full access to all features of your selected plan.'],
      ['Can I upgrade or downgrade?','Absolutely. You can upgrade or downgrade your plan at any time. Changes take effect from the next billing cycle.'],
      ['Do you charge per visitor?','No. All our plans include unlimited visitors. You only pay the flat monthly or annual fee.'],
      ['Is my data secure?','Yes. All data is encrypted at rest (AES-256) and in transit (TLS 1.3). We are SOC2 Type II certified and GDPR compliant.'],
      ['Can I host on my own server?','Enterprise plan supports on-premise deployment. We provide Docker-based packages and full technical support.'],
      ['Is XAMPP/PHP hosting supported?','Yes! Our XAMPP package runs on any PHP 7.4+ server. See our downloads page for the XAMPP installer.'],
      ['Do you offer annual discounts?','Yes — annual billing saves you 20% compared to monthly. Enterprise customers can negotiate custom pricing.'],
      ['What payment methods do you accept?','Credit/debit cards, UPI, NEFT/RTGS, and purchase orders for Enterprise. GST invoice provided for all payments.'],
    ];
    foreach($faqs as [$q,$a]):
    ?>
    <div class="faq-item reveal">
      <div class="faq-q"><?= $q ?></div>
      <p class="faq-a"><?= $a ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- CTA -->
<section style="background:var(--ink);text-align:center;padding:80px 6%">
  <div class="section-title reveal">Still have questions?<br/><em>Talk to our team.</em></div>
  <p style="color:var(--muted);font-size:17px;margin:14px auto 32px;max-width:500px" class="reveal">Our sales team is available Mon–Sat, 9 AM – 7 PM IST. We typically respond within 30 minutes.</p>
  <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap" class="reveal">
    <a href="contact.php" class="btn btn-primary btn-lg">Book a Demo</a>
    <a href="tel:+911800123456" class="btn btn-secondary btn-lg">📞 1800-123-4567</a>
  </div>
</section>

<script>
let isYearly = false;
const prices = { lite:[999,799], campus:[4999,3999] };
function toggleBilling() {
  isYearly = !isYearly;
  document.getElementById('toggleTrack').classList.toggle('on', isYearly);
  document.getElementById('lbl-monthly').style.opacity = isYearly ? '.45' : '1';
  document.getElementById('lbl-yearly').style.opacity  = isYearly ? '1'   : '.45';
  document.getElementById('price-lite').textContent   = prices.lite[isYearly?1:0].toLocaleString('en-IN');
  document.getElementById('price-campus').textContent = prices.campus[isYearly?1:0].toLocaleString('en-IN');
}
</script>
<?php include '../includes/footer.php'; ?>
