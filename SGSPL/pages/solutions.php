<?php $pageTitle = 'Solutions — SGSPL Cloud'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/><meta name="viewport" content="width=device-width,initial-scale=1"/>
<title><?= $pageTitle ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="../assets/css/style.css"/>
<style>
.solutions-nav { display:flex;gap:10px;flex-wrap:wrap;margin:32px 0; }
.sol-nav-btn { padding:8px 18px;border-radius:24px;font-size:13px;font-weight:600;border:1px solid var(--border);color:var(--muted);cursor:pointer;transition:all .2s;background:none; }
.sol-nav-btn:hover,.sol-nav-btn.active { background:rgba(0,201,167,.12);color:var(--teal);border-color:rgba(0,201,167,.3); }
.solution-card { background:var(--ink2);border:1px solid var(--border);border-radius:var(--radius-lg);padding:36px;display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:center;margin-bottom:20px;transition:all .3s; }
.solution-card:hover { border-color:rgba(0,201,167,.2); }
.sol-icon-big { font-size:56px;margin-bottom:16px; }
.sol-title { font-size:24px;font-weight:800;margin-bottom:10px;letter-spacing:-.5px; }
.sol-desc  { font-size:15px;color:var(--muted);line-height:1.75;margin-bottom:20px; }
.sol-points { display:flex;flex-direction:column;gap:8px; }
.sol-point { display:flex;align-items:flex-start;gap:10px;font-size:13px;color:rgba(255,255,255,.75); }
.sol-point span { color:var(--teal);font-weight:800;flex-shrink:0;margin-top:1px; }
.sol-visual { background:var(--ink);border:1px solid var(--border);border-radius:var(--radius);padding:22px;min-height:220px; }
.sol-stat-grid { display:grid;grid-template-columns:1fr 1fr;gap:10px; }
.sol-stat { background:rgba(255,255,255,.04);border-radius:8px;padding:14px;text-align:center; }
.sol-stat-val { font-size:28px;font-weight:900;color:var(--teal);line-height:1; }
.sol-stat-lbl { font-size:10px;color:var(--muted);margin-top:3px; }
.integration-grid { display:grid;grid-template-columns:repeat(4,1fr);gap:14px;margin-top:48px; }
.integration-card { background:var(--ink2);border:1px solid var(--border);border-radius:var(--radius);padding:20px;text-align:center;transition:all .3s; }
.integration-card:hover { border-color:rgba(0,201,167,.3);transform:translateY(-3px); }
.int-logo { font-size:32px;margin-bottom:10px; }
.int-name { font-size:13px;font-weight:700; }
.int-type { font-size:11px;color:var(--muted);margin-top:3px; }
@media(max-width:768px){.solution-card{grid-template-columns:1fr}.integration-grid{grid-template-columns:1fr 1fr}}
</style>
</head>
<body>
<?php include '../includes/navbar.php'; ?>

<div class="page-hero">
  <div class="breadcrumb"><a href="../index.php">Home</a><span>/</span><span>Solutions</span></div>
  <h1 class="page-hero-title">Industry <em>Solutions</em></h1>
  <p class="page-hero-sub">SGSPL VMS adapts to the unique security requirements of every industry — from hospitals to factories, colleges to corporate towers.</p>
</div>

<section style="background:var(--ink)">
  <div class="section-label reveal">By Industry</div>
  <div class="section-title reveal">Built for <em>your world</em></div>

  <?php
  $solutions = [
    ['🏥','Hospitals & Healthcare',
     'Patient visitor management, vendor access control and staff entry across OPD, ICU, wards and emergency.',
     ['Patient visitor time-slot booking','ICU/NICU restricted entry with host approval','Vendor & contractor entry log','Staff attendance integration','Emergency protocol — instant lockdown mode','Compliance-ready audit trail'],
     [['12K','Daily Visitors'],['98%','Compliance Rate'],['3 min','Avg Check-in'],['Zero','Security Breaches']]],
    ['🏫','Educational Institutions',
     'Student gate passes, parent visit booking, vehicle entry and contractor management for schools, colleges and universities.',
     ['Student late-pass / early-exit approval','Parent visit pre-booking system','Bus and vehicle entry log','Contractor & vendor verification','Event visitor pass management','Fee defaulter entry restriction'],
     [['45K','Students Managed'],['500+','Campuses'],['30 sec','Parent Check-in'],['100%','Digital Records']]],
    ['🏢','Corporate Campuses',
     'Multi-tower, multi-gate visitor management with HRMS integration and access control sync for large IT parks and offices.',
     ['Multi-gate, multi-tower dashboard','HRMS employee directory integration','Access card provisioning on check-in','Visitor escort assignment','Contractor permit management','Executive visitor protocol'],
     [['200K','Monthly Visitors'],['50+','Enterprise Clients'],['99.9%','Uptime'],['0 min','Manual Work']]],
    ['🏭','Factories & Warehouses',
     'Heavy vehicle entry, contractor verification, material gate pass and loading bay management.',
     ['Material gate pass (inward/outward)','Heavy vehicle entry log','Labour contractor portal','Weighbridge integration','Shift-wise visitor reports','Fire muster roll'],
     [['1000+','Daily Vehicles'],['80%','Less Paperwork'],['Real-time','Gate Status'],['Full','Audit Trail']]],
  ];
  foreach($solutions as $i=>[$icon,$title,$desc,$points,$stats]):
  ?>
  <div class="solution-card reveal">
    <?php if($i%2===0): ?>
    <div>
      <div class="sol-icon-big"><?= $icon ?></div>
      <div class="sol-title"><?= $title ?></div>
      <p class="sol-desc"><?= $desc ?></p>
      <div class="sol-points">
        <?php foreach($points as $p): ?>
        <div class="sol-point"><span>→</span><?= $p ?></div>
        <?php endforeach; ?>
      </div>
      <a href="contact.php" class="btn btn-primary" style="margin-top:24px;display:inline-flex">Get Industry Demo →</a>
    </div>
    <div class="sol-visual">
      <div style="font-size:11px;color:var(--muted);text-transform:uppercase;letter-spacing:1px;font-weight:700;margin-bottom:14px"><?= $title ?> at a glance</div>
      <div class="sol-stat-grid">
        <?php foreach($stats as [$val,$lbl]): ?>
        <div class="sol-stat"><div class="sol-stat-val"><?= $val ?></div><div class="sol-stat-lbl"><?= $lbl ?></div></div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php else: ?>
    <div class="sol-visual">
      <div style="font-size:11px;color:var(--muted);text-transform:uppercase;letter-spacing:1px;font-weight:700;margin-bottom:14px"><?= $title ?> at a glance</div>
      <div class="sol-stat-grid">
        <?php foreach($stats as [$val,$lbl]): ?>
        <div class="sol-stat"><div class="sol-stat-val"><?= $val ?></div><div class="sol-stat-lbl"><?= $lbl ?></div></div>
        <?php endforeach; ?>
      </div>
    </div>
    <div>
      <div class="sol-icon-big"><?= $icon ?></div>
      <div class="sol-title"><?= $title ?></div>
      <p class="sol-desc"><?= $desc ?></p>
      <div class="sol-points">
        <?php foreach($points as $p): ?>
        <div class="sol-point"><span>→</span><?= $p ?></div>
        <?php endforeach; ?>
      </div>
      <a href="contact.php" class="btn btn-primary" style="margin-top:24px;display:inline-flex">Get Industry Demo →</a>
    </div>
    <?php endif; ?>
  </div>
  <?php endforeach; ?>
</section>

<!-- Integrations -->
<section style="background:var(--ink2)">
  <div class="section-label reveal">Integrations</div>
  <div class="section-title reveal">Connects with your<br/><em>existing ecosystem</em></div>
  <p class="section-sub reveal">SGSPL VMS plugs into 50+ enterprise tools. If we don't support your tool, our REST API makes integration straightforward.</p>
  <div class="integration-grid">
    <?php foreach([
      ['📧','Microsoft 365','Productivity'],['💬','Slack','Communication'],['📱','WhatsApp','Messaging'],
      ['🔐','Hikvision','CCTV'],['🔑','HID Origo','Access Control'],['👥','SAP HR','HRMS'],
      ['📊','Power BI','Analytics'],['🖨️','Zebra','Badge Printing'],['🚗','Parking Mgmt','Vehicle'],
      ['☁️','AWS S3','Storage'],['🔒','Okta','SSO / Identity'],['📋','ServiceNow','ITSM'],
    ] as [$icon,$name,$type]): ?>
    <div class="integration-card reveal">
      <div class="int-logo"><?= $icon ?></div>
      <div class="int-name"><?= $name ?></div>
      <div class="int-type"><?= $type ?></div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
