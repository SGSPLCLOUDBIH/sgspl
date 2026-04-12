<?php $pageTitle = 'Products — SGSPL Cloud'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/><meta name="viewport" content="width=device-width,initial-scale=1"/>
<title><?= $pageTitle ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="../assets/css/style.css"/>
<style>
.product-full { margin-bottom:64px;padding-bottom:64px;border-bottom:1px solid var(--border); }
.product-full:last-child { border-bottom:none;margin-bottom:0; }
.product-header { display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center; }
.product-header.flip { direction:rtl; }
.product-header.flip>* { direction:ltr; }
.ph-badge { display:inline-flex;align-items:center;gap:8px;padding:5px 14px;border-radius:30px;font-size:11px;font-weight:700;letter-spacing:2px;text-transform:uppercase;margin-bottom:16px; }
.ph-name { font-family:'Playfair Display',serif;font-size:38px;font-weight:900;letter-spacing:-1.5px;margin-bottom:14px; }
.ph-name em { font-style:italic;color:var(--teal); }
.ph-desc { font-size:16px;color:var(--muted);line-height:1.75;margin-bottom:24px; }
.ph-features { display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-bottom:28px; }
.ph-feat { display:flex;align-items:center;gap:8px;font-size:13px;color:rgba(255,255,255,.75); }
.ph-feat::before { content:'✓';color:var(--teal);font-weight:800;flex-shrink:0; }
.ph-visual { background:var(--ink2);border:1px solid var(--border);border-radius:var(--radius-lg);padding:28px;min-height:300px;display:flex;flex-direction:column;gap:14px; }
.ph-screen-bar { display:flex;align-items:center;gap:6px;margin-bottom:6px; }
.ph-screen-bar span { width:8px;height:8px;border-radius:50%; }
.module-cards { display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:52px; }
.module-card { background:var(--ink2);border:1px solid var(--border);border-radius:var(--radius-lg);padding:24px;transition:all .3s; }
.module-card:hover { border-color:rgba(0,201,167,.3);transform:translateY(-3px); }
.mc-icon { font-size:28px;margin-bottom:12px; }
.mc-name { font-size:15px;font-weight:700;margin-bottom:6px; }
.mc-desc { font-size:13px;color:var(--muted);line-height:1.65; }
@media(max-width:768px){.product-header,.product-header.flip{grid-template-columns:1fr;direction:ltr}.ph-features,.module-cards{grid-template-columns:1fr}}
</style>
</head>
<body>
<?php include '../includes/navbar.php'; ?>

<div class="page-hero">
  <div class="breadcrumb"><a href="../index.php">Home</a><span>/</span><span>Products</span></div>
  <h1 class="page-hero-title">Our <em>Product Suite</em></h1>
  <p class="page-hero-sub">Three powerful, purpose-built products for every scale of organisation — from 10-person offices to 50-campus enterprises.</p>
</div>

<section style="background:var(--ink)">

  <!-- VMS Enterprise -->
  <div class="product-full reveal">
    <div class="product-header">
      <div>
        <div class="ph-badge" style="background:rgba(0,201,167,.12);color:var(--teal);border:1px solid rgba(0,201,167,.25)">🏢 Flagship Product</div>
        <div class="ph-name">VMS <em>Enterprise</em></div>
        <p class="ph-desc">The most powerful visitor management platform in India. Built for large enterprises, hospital chains, government facilities and campuses with complex multi-gate, multi-site requirements.</p>
        <div class="ph-features">
          <?php foreach(['Unlimited visitors','Multi-site dashboard','CCTV integration','Access control sync','Biometric support','Custom workflows','Blacklist management','Advanced analytics','API access','24×7 support','Role-based access','White-label option'] as $f): ?>
            <div class="ph-feat"><?= $f ?></div>
          <?php endforeach; ?>
        </div>
        <div style="display:flex;gap:12px;flex-wrap:wrap">
          <a href="contact.php" class="btn btn-primary">Get Enterprise Demo</a>
          <a href="pricing.php" class="btn btn-secondary">View Pricing</a>
        </div>
      </div>
      <div class="ph-visual">
        <div class="ph-screen-bar"><span style="background:#ff5f57"></span><span style="background:#febc2e"></span><span style="background:#28c840"></span><div style="flex:1;background:rgba(255,255,255,.06);border-radius:4px;height:16px;margin-left:8px"></div></div>
        <?php foreach([['Main Gate','34 inside','100%','var(--teal)'],['Tower A','18 inside','53%','var(--blue2)'],['Tower B','12 inside','35%','var(--gold)'],['Loading Bay','4 inside','12%','rgba(255,255,255,.3)']] as [$g,$v,$pct,$c]): ?>
        <div style="background:rgba(255,255,255,.03);border:1px solid var(--border);border-radius:8px;padding:12px 14px">
          <div style="display:flex;justify-content:space-between;margin-bottom:6px">
            <span style="font-size:12px;font-weight:600"><?= $g ?></span>
            <span style="font-size:12px;color:<?= $c ?>;font-weight:700"><?= $v ?></span>
          </div>
          <div style="height:4px;background:rgba(255,255,255,.07);border-radius:2px"><div style="width:<?= $pct ?>;height:100%;background:<?= $c ?>;border-radius:2px"></div></div>
        </div>
        <?php endforeach; ?>
        <div style="background:rgba(0,201,167,.08);border:1px solid rgba(0,201,167,.2);border-radius:8px;padding:10px 14px;font-size:11px;color:var(--teal)">⚡ 3 overstay alerts · 2 approvals pending</div>
      </div>
    </div>
  </div>

  <!-- VMS Campus -->
  <div class="product-full reveal">
    <div class="product-header flip">
      <div>
        <div class="ph-badge" style="background:rgba(240,180,41,.12);color:var(--gold);border:1px solid rgba(240,180,41,.25)">🏫 Campus Edition</div>
        <div class="ph-name">VMS <em>Campus</em></div>
        <p class="ph-desc">Purpose-built for educational institutions, IT parks and residential societies. Manage student gate passes, parent visits, vehicle entry and contractor access — all in one platform.</p>
        <div class="ph-features">
          <?php foreach(['Student/staff gate passes','Parent visit booking','Vehicle entry logs','Contractor verification','Bulk pre-registration','Kiosk mode (self-service)','SMS to parents','Event visitor passes','Fee default block','ID card scanning','Daily attendance report','App for guards'] as $f): ?>
            <div class="ph-feat"><?= $f ?></div>
          <?php endforeach; ?>
        </div>
        <div style="display:flex;gap:12px;flex-wrap:wrap">
          <a href="contact.php" class="btn btn-primary">Get Campus Demo</a>
          <a href="pricing.php" class="btn btn-secondary">View Pricing</a>
        </div>
      </div>
      <div class="ph-visual">
        <div style="font-size:11px;color:var(--muted);text-transform:uppercase;letter-spacing:1px;font-weight:700">Campus Daily Summary</div>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:8px">
          <?php foreach([['👨‍🎓','Students Out','12','var(--gold)'],['👪','Parent Visits','28','var(--teal)'],['🚗','Vehicles','45','var(--blue2)'],['🔧','Contractors','7','var(--muted)']] as [$ic,$lb,$n,$c]): ?>
          <div style="background:rgba(255,255,255,.04);border:1px solid var(--border);border-radius:8px;padding:12px;text-align:center">
            <div style="font-size:22px;margin-bottom:4px"><?= $ic ?></div>
            <div style="font-size:18px;font-weight:800;color:<?= $c ?>"><?= $n ?></div>
            <div style="font-size:10px;color:var(--muted)"><?= $lb ?></div>
          </div>
          <?php endforeach; ?>
        </div>
        <div style="background:rgba(240,180,41,.08);border:1px solid rgba(240,180,41,.2);border-radius:8px;padding:10px 14px;font-size:11px;color:var(--gold)">📅 Parent-Teacher Day: 85 visitors pre-registered</div>
      </div>
    </div>
  </div>

  <!-- VMS Lite -->
  <div class="product-full reveal">
    <div class="product-header">
      <div>
        <div class="ph-badge" style="background:rgba(0,87,255,.12);color:var(--blue2);border:1px solid rgba(0,87,255,.25)">🚀 For SMEs</div>
        <div class="ph-name">VMS <em>Lite</em></div>
        <p class="ph-desc">Everything a small business needs to manage visitors professionally. Affordable, cloud-hosted, and ready to go live in under 30 minutes — no IT team required.</p>
        <div class="ph-features">
          <?php foreach(['Up to 3 gates','Unlimited visitors','Mobile-friendly portal','Basic badge printing','Email host alerts','Monthly reports','Phone support','99.9% uptime SLA'] as $f): ?>
            <div class="ph-feat"><?= $f ?></div>
          <?php endforeach; ?>
        </div>
        <div style="display:flex;gap:12px;flex-wrap:wrap">
          <a href="http://localhost/vms" class="btn btn-primary">Start Free Trial</a>
          <a href="pricing.php" class="btn btn-secondary">₹999/month</a>
        </div>
      </div>
      <div class="ph-visual" style="justify-content:center;align-items:center;gap:20px">
        <div style="text-align:center">
          <div style="font-size:56px;margin-bottom:10px">🚀</div>
          <div style="font-size:18px;font-weight:700;margin-bottom:6px">Live in 30 minutes</div>
          <div style="font-size:14px;color:var(--muted)">No installation · No IT team · No complexity</div>
        </div>
        <div style="display:flex;gap:10px;justify-content:center;flex-wrap:wrap">
          <?php foreach(['✓ Cloud hosted','✓ Auto backups','✓ SSL secured','✓ GDPR ready'] as $t): ?>
          <span style="padding:5px 12px;background:rgba(0,87,255,.12);border:1px solid rgba(0,87,255,.25);border-radius:20px;font-size:11px;color:var(--blue2);font-weight:600"><?= $t ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- All Modules -->
<section style="background:var(--ink2)">
  <div class="section-label reveal">Platform Modules</div>
  <div class="section-title reveal">Every feature you<br/><em>could ever need</em></div>
  <div class="module-cards">
    <?php
    $modules = [
      ['🔐','Check-In / Check-Out','Full visitor lifecycle from arrival to departure with time-stamps, photo and purpose log.'],
      ['📱','Pre-Registration & QR','Send invite emails with QR passes. Visitors scan at gate for instant check-in.'],
      ['🖨️','Badge Printing','Branded visitor badges with visitor name, host, purpose, date and QR code.'],
      ['⚠️','Blacklist Management','Maintain a blacklist. Every visitor auto-checked on check-in. Alert guard instantly.'],
      ['📊','Reports & Analytics','50+ report types — daily, weekly, monthly, host-wise, purpose-wise, overstay.'],
      ['🏢','Multi-Site Control','One account for all branches. Role-based access — each site admin sees only their site.'],
      ['🔗','Integrations','CCTV, HRMS, Slack, Teams, WhatsApp, email, SMS, access control, parking.'],
      ['📷','Photo & ID Capture','Webcam or mobile camera capture. Aadhaar, PAN, Passport scanning support.'],
      ['🔔','Smart Notifications','Host SMS, email and WhatsApp alerts. Overstay alerts to admin. Daily digest reports.'],
    ];
    foreach($modules as [$icon,$name,$desc]):
    ?>
    <div class="module-card reveal">
      <div class="mc-icon"><?= $icon ?></div>
      <div class="mc-name"><?= $name ?></div>
      <p class="mc-desc"><?= $desc ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
