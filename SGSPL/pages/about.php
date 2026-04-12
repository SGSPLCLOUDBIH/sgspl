<?php $pageTitle = 'About Us — SGSPL Cloud'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/><meta name="viewport" content="width=device-width,initial-scale=1"/>
<title><?= $pageTitle ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="../assets/css/style.css"/>
<style>
.mission-grid { display:grid;grid-template-columns:1fr 1fr;gap:2px;background:var(--border);border-radius:var(--radius-lg);overflow:hidden;margin-top:48px; }
.mission-card { background:var(--ink2);padding:36px 32px; }
.mission-icon { font-size:36px;margin-bottom:16px; }
.mission-title { font-size:20px;font-weight:800;margin-bottom:10px; }
.mission-desc  { font-size:14px;color:var(--muted);line-height:1.75; }
.team-grid { display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:52px; }
.team-card { background:var(--ink2);border:1px solid var(--border);border-radius:var(--radius-lg);padding:28px 20px;text-align:center;transition:all .3s; }
.team-card:hover { border-color:rgba(0,201,167,.3);transform:translateY(-4px); }
.team-avatar { width:72px;height:72px;border-radius:50%;margin:0 auto 14px;display:flex;align-items:center;justify-content:center;font-size:24px;font-weight:800;color:#000; }
.team-name  { font-size:16px;font-weight:700;margin-bottom:4px; }
.team-role  { font-size:12px;color:var(--muted);margin-bottom:10px; }
.team-bio   { font-size:12px;color:rgba(255,255,255,.5);line-height:1.6; }
.timeline   { position:relative;padding-left:32px;margin-top:48px; }
.timeline::before { content:'';position:absolute;left:8px;top:0;bottom:0;width:2px;background:linear-gradient(to bottom,var(--teal),var(--blue)); }
.tl-item    { position:relative;margin-bottom:36px; }
.tl-dot     { position:absolute;left:-28px;top:4px;width:12px;height:12px;border-radius:50%;background:var(--teal);border:2px solid var(--ink2); }
.tl-year    { font-size:12px;font-weight:700;color:var(--teal);letter-spacing:1px;margin-bottom:6px; }
.tl-title   { font-size:17px;font-weight:700;margin-bottom:6px; }
.tl-desc    { font-size:14px;color:var(--muted);line-height:1.7; }
.values-grid { display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:48px; }
.val-card { background:var(--ink2);border:1px solid var(--border);border-radius:var(--radius-lg);padding:28px;transition:all .3s; }
.val-card:hover { border-color:rgba(0,201,167,.25);transform:translateY(-3px); }
.val-icon  { font-size:32px;margin-bottom:14px; }
.val-title { font-size:17px;font-weight:700;margin-bottom:8px; }
.val-desc  { font-size:13px;color:var(--muted);line-height:1.7; }
@media(max-width:768px){.team-grid,.values-grid{grid-template-columns:1fr 1fr}.mission-grid{grid-template-columns:1fr}}
@media(max-width:480px){.team-grid{grid-template-columns:1fr}}
</style>
</head>
<body>
<?php include '../includes/navbar.php'; ?>

<div class="page-hero">
  <div class="breadcrumb"><a href="../index.php">Home</a><span>/</span><span>About Us</span></div>
  <div class="badge badge-teal badge-live" style="margin-bottom:20px">Incorporated 2020</div>
  <h1 class="page-hero-title">We are <em>Security Gate Digital</em></h1>
  <p class="page-hero-sub">A product-first technology company on a mission to make every entrance in India intelligent, secure and frictionless.</p>
</div>

<!-- Mission & Vision -->
<section style="background:var(--ink2)">
  <div class="section-label reveal">Our Foundation</div>
  <div class="section-title reveal">Mission, Vision &<br/><em>Why We Exist</em></div>
  <div class="mission-grid reveal">
    <?php foreach([
      ['🎯','Our Mission','To empower every organisation — from a 10-person startup to a 50,000-employee enterprise — with world-class visitor management technology that is affordable, simple and deeply reliable.'],
      ['🔭','Our Vision','A future where every entrance in India is digital, every visitor is verified, and every security officer has the intelligence they need at their fingertips.'],
      ['💡','Our Values','We build with empathy. We ship with speed. We stand behind our product with 24×7 support. We believe great software should be accessible to everyone.'],
      ['🏆','Our Promise','No hidden fees. No complex setup. No vendor lock-in. Deploy in 30 minutes, get results on day one, and grow without limits.'],
    ] as [$icon,$title,$desc]): ?>
    <div class="mission-card">
      <div class="mission-icon"><?= $icon ?></div>
      <div class="mission-title"><?= $title ?></div>
      <p class="mission-desc"><?= $desc ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- Journey Timeline -->
<section style="background:var(--ink)" id="story">
  <div class="section-label reveal">Our Story</div>
  <div class="section-title reveal">From a startup idea<br/>to <em>India's #1 VMS</em></div>
  <div class="timeline reveal">
    <?php foreach([
      ['2020','Founded in New Delhi','Security Gate Digital Pvt Ltd incorporated. Initial product launched at a pilot site in Gurugram — a 500-person IT office.'],
      ['2021','First 50 Clients','Expanded to hospitals and educational institutions. Raised seed funding. Launched mobile app for Android and iOS.'],
      ['2022','Multi-Site & API Platform','Launched enterprise multi-site module. Published public API. Reached 150+ enterprise clients. Opened Mumbai office.'],
      ['2023','National Expansion','Crossed 300 clients across 12 cities. Launched VMS Campus for colleges. Signed MoU with a national hospital chain.'],
      ['2024','500+ Clients & sgspl.cloud','Rebranded to SGSPL Cloud. Launched sgspl.cloud domain. 500+ enterprise clients, 2M+ visitors managed annually.'],
      ['2025','Next: AI-Powered Security','Launching face recognition, AI-based anomaly detection and predictive overstay alerts. Expanding to Middle East.'],
    ] as [$year,$title,$desc]): ?>
    <div class="tl-item">
      <div class="tl-dot"></div>
      <div class="tl-year"><?= $year ?></div>
      <div class="tl-title"><?= $title ?></div>
      <p class="tl-desc"><?= $desc ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- Leadership Team -->
<section style="background:var(--ink2)" id="team">
  <div class="section-label reveal">Leadership</div>
  <div class="section-title reveal">The team building<br/><em>India's safest entrances</em></div>
  <div class="team-grid">
    <?php
    $team = [
      ['AS','Ajit Sharma','Founder & CEO','linear-gradient(135deg,var(--teal),var(--blue))','IIT Delhi, 12 years in enterprise SaaS. Former Head of Product at a Fortune 500.'],
      ['JS','Jyoti Sharma','Co-Founder & CTO','linear-gradient(135deg,#f59e0b,#e06c00)','BITS Pilani, ex-Amazon India. Architected systems handling 100M+ requests/day.'],
      ['AS','Ansh Sharma','VP Sales','linear-gradient(135deg,var(--blue),#9c5cfc)','15 years in B2B SaaS sales. Built teams at Zoho, Freshworks and Oracle India.'],
      ['AS','Abhas Sharma','Head of Customer Success','linear-gradient(135deg,#10b981,#059669)','MBA ISB. Passionate about zero-churn customer relationships. 200+ deployments led.'],
    ];
    foreach($team as [$init,$name,$role,$grad,$bio]):
    ?>
    <div class="team-card reveal">
      <div class="team-avatar" style="background:<?= $grad ?>"><?= $init ?></div>
      <div class="team-name"><?= $name ?></div>
      <div class="team-role"><?= $role ?></div>
      <p class="team-bio"><?= $bio ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- Values -->
<section style="background:var(--ink)">
  <div class="section-label reveal">Our Values</div>
  <div class="section-title reveal">What drives<br/><em>everything we do</em></div>
  <div class="values-grid">
    <?php foreach([
      ['🔒','Security First','Every line of code, every feature and every decision is made with security as the primary consideration.'],
      ['🚀','Bias for Speed','We believe fast shipping beats perfect planning. We iterate quickly, listen to customers, and deploy continuously.'],
      ['🤝','Customer Obsession','Our NPS is 72. We answer support tickets in under 30 minutes. Every customer has a dedicated success manager.'],
      ['🌏','India Scale','Built natively for India — supports Aadhaar, PAN, GST, Indian phone formats, Hindi/regional languages and IST timezone.'],
      ['🌱','Continuous Learning','We run fortnightly retrospectives, quarterly hackathons and invest 20% of engineering time in R&D.'],
      ['♻️','Responsibility','We are carbon-neutral (2023), fully SOC2 compliant and committed to GDPR and India PDPB data protection laws.'],
    ] as [$icon,$title,$desc]): ?>
    <div class="val-card reveal">
      <div class="val-icon"><?= $icon ?></div>
      <div class="val-title"><?= $title ?></div>
      <p class="val-desc"><?= $desc ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- CTA -->
<section style="background:var(--ink2);text-align:center;padding:80px 6%">
  <div class="section-title reveal">Want to join the<br/><em>SGSPL mission?</em></div>
  <p class="section-sub wide reveal" style="margin:14px auto 32px">We're hiring across engineering, sales, and customer success. Come build the future of physical security in India.</p>
  <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap" class="reveal">
    <a href="pages/contact.php" class="btn btn-primary">View Open Roles</a>
    <a href="pages/contact.php" class="btn btn-secondary">Talk to Us</a>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
