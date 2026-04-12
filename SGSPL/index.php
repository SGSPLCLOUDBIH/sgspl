<?php
$pageTitle = 'SGSPL Cloud — Intelligent Visitor Management System';
$pageDesc  = 'Security Gate Digital Pvt Ltd — India\'s leading enterprise Visitor Management System. Smart check-in, pre-registration, badge printing and real-time security analytics.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<meta name="description" content="<?= $pageDesc ?>"/>
<title><?= $pageTitle ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="assets/css/style.css"/>
<style>
/* ── Hero ─────────────────────────────────────────────────── */
.hero {
  min-height: 100vh; display: flex; align-items: center;
  padding: 130px 6% 80px; position: relative; overflow: hidden;
}
.hero-bg-grid {
  position: absolute; inset: 0; pointer-events: none;
  background-image:
    linear-gradient(rgba(0,201,167,.045) 1px, transparent 1px),
    linear-gradient(90deg, rgba(0,201,167,.045) 1px, transparent 1px);
  background-size: 60px 60px;
  mask-image: radial-gradient(ellipse 80% 80% at 50% 40%, black 30%, transparent 100%);
  animation: gridDrift 25s linear infinite;
}
@keyframes gridDrift { to { background-position: 60px 60px; } }
.orb { position: absolute; border-radius: 50%; filter: blur(90px); pointer-events: none; }
.orb-1 { width: 700px; height: 700px; background: rgba(0,87,255,.14); top: -200px; right: -200px; animation: orbFloat 9s ease-in-out infinite; }
.orb-2 { width: 400px; height: 400px; background: rgba(0,201,167,.1); bottom: -100px; left: -80px; animation: orbFloat 11s ease-in-out infinite reverse; }

.hero-content { max-width: 720px; position: relative; z-index: 2; }
.hero-badge {
  display: inline-flex; align-items: center; gap: 8px;
  padding: 6px 16px; border-radius: 30px; margin-bottom: 28px;
  background: rgba(0,201,167,.1); border: 1px solid rgba(0,201,167,.25);
  font-size: 12px; font-weight: 700; color: var(--teal);
  letter-spacing: 1.5px; text-transform: uppercase;
  animation: fadeUp .7s ease forwards; opacity: 0;
}
.hero-badge::before { content: '●'; font-size: 8px; animation: pulseDot 2s infinite; }
@keyframes pulseDot { 0%,100%{opacity:1} 50%{opacity:.2} }
.hero-h1 {
  font-family: 'Playfair Display', serif;
  font-size: clamp(46px, 6.5vw, 88px);
  font-weight: 900; line-height: 1.02; letter-spacing: -3px;
  animation: fadeUp .7s ease .1s forwards; opacity: 0;
}
.hero-h1 em { font-style: italic; color: var(--teal); }
.hero-h1 .outline {
  -webkit-text-stroke: 1.5px rgba(255,255,255,.35); color: transparent;
}
.hero-sub {
  font-size: 18px; color: var(--muted); line-height: 1.75;
  margin: 22px 0 38px; max-width: 580px;
  animation: fadeUp .7s ease .2s forwards; opacity: 0;
}
.hero-actions {
  display: flex; align-items: center; gap: 14px; flex-wrap: wrap;
  animation: fadeUp .7s ease .3s forwards; opacity: 0;
}
.hero-stats-row {
  display: flex; gap: 48px; margin-top: 64px; padding-top: 36px;
  border-top: 1px solid var(--border);
  animation: fadeUp .7s ease .5s forwards; opacity: 0;
}
.hs-item .hs-num {
  font-family: 'Playfair Display', serif;
  font-size: 38px; font-weight: 900; line-height: 1;
  background: linear-gradient(135deg, var(--teal), var(--blue2));
  -webkit-background-clip: text; -webkit-text-fill-color: transparent;
}
.hs-item .hs-label { font-size: 12px; color: var(--muted); margin-top: 4px; font-weight: 500; }

/* Floating device */
.hero-device {
  position: absolute; right: 5%; top: 50%; transform: translateY(-50%);
  width: min(460px, 42vw); z-index: 2;
  animation: fadeUp .7s ease .4s forwards, deviceFloat 6s ease-in-out 1.5s infinite; opacity: 0;
}
@keyframes deviceFloat { 0%,100%{transform:translateY(-50%)} 50%{transform:translateY(calc(-50% - 14px))} }
.device-frame {
  background: var(--ink2); border: 1px solid rgba(255,255,255,.12);
  border-radius: 18px; overflow: hidden;
  box-shadow: 0 48px 96px rgba(0,0,0,.65), 0 0 0 1px rgba(255,255,255,.04), inset 0 1px 0 rgba(255,255,255,.07);
}
.device-chrome {
  background: rgba(255,255,255,.03); border-bottom: 1px solid var(--border);
  padding: 10px 14px; display: flex; align-items: center; gap: 6px;
}
.dc-dot { width: 9px; height: 9px; border-radius: 50%; }
.dc-url {
  flex: 1; margin: 0 8px; background: rgba(255,255,255,.06);
  border-radius: 5px; padding: 3px 10px; font-size: 10px; color: var(--muted); font-family: monospace;
}
.device-body { padding: 14px; }
/* Mini dashboard */
.mini-header {
  font-size: 11px; font-weight: 700; color: var(--muted);
  text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;
}
.mini-kpis { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; margin-bottom: 12px; }
.mini-kpi {
  background: rgba(255,255,255,.04); border: 1px solid var(--border);
  border-radius: 8px; padding: 9px 11px;
}
.mini-kpi-val { font-size: 20px; font-weight: 800; color: var(--teal); line-height: 1; }
.mini-kpi-lbl { font-size: 10px; color: var(--muted); margin-top: 2px; }
.mini-table-wrap { background: rgba(255,255,255,.02); border-radius: 8px; overflow: hidden; border: 1px solid var(--border); }
.mini-tbl { width: 100%; border-collapse: collapse; font-size: 10px; }
.mini-tbl th { padding: 6px 8px; text-align: left; color: var(--muted); border-bottom: 1px solid var(--border); font-weight: 600; }
.mini-tbl td { padding: 6px 8px; border-bottom: 1px solid rgba(255,255,255,.03); }
.mini-tbl tr:last-child td { border-bottom: none; }
.dot { display: inline-block; width: 6px; height: 6px; border-radius: 50%; margin-right: 4px; vertical-align: middle; }
.dot-g { background: #10b981; } .dot-b { background: #60a5fa; } .dot-a { background: #f59e0b; }

/* ── Marquee ─────────────────────────────────────────────── */
.marquee-strip { background: var(--teal); padding: 13px 0; overflow: hidden; }
.marquee-track { display: flex; width: max-content; animation: marquee 28s linear infinite; }
.marquee-track span {
  font-size: 12px; font-weight: 800; color: #000;
  padding: 0 36px; letter-spacing: 2.5px; text-transform: uppercase; white-space: nowrap;
}
.marquee-track span::after { content: '✦'; padding-left: 36px; opacity: .4; }
@keyframes marquee { from{transform:translateX(0)} to{transform:translateX(-50%)} }

/* ── Products Overview ───────────────────────────────────── */
.products-grid {
  display: grid; grid-template-columns: repeat(3,1fr);
  gap: 1px; background: var(--border); border-radius: var(--radius-lg);
  overflow: hidden; margin-top: 56px;
}
.prod-card {
  background: var(--ink2); padding: 36px 32px;
  position: relative; overflow: hidden; transition: all .3s;
}
.prod-card::before {
  content: ''; position: absolute; inset: 0;
  background: linear-gradient(135deg, rgba(0,201,167,.07), transparent);
  opacity: 0; transition: opacity .3s;
}
.prod-card:hover::before { opacity: 1; }
.prod-card:hover { transform: translateY(-3px); }
.prod-icon {
  width: 52px; height: 52px; border-radius: 14px; margin-bottom: 22px;
  display: flex; align-items: center; justify-content: center; font-size: 24px;
}
.prod-name { font-size: 19px; font-weight: 800; margin-bottom: 8px; letter-spacing: -.4px; }
.prod-desc { font-size: 14px; color: var(--muted); line-height: 1.7; margin-bottom: 20px; }
.prod-tag {
  position: absolute; top: 18px; right: 18px;
  padding: 3px 9px; border-radius: 20px; font-size: 10px; font-weight: 700;
  text-transform: uppercase; letter-spacing: 1px;
}
.prod-link { color: var(--teal); font-size: 13px; font-weight: 700; }
.prod-link:hover { text-decoration: underline; }

/* ── How It Works ────────────────────────────────────────── */
.how-section { background: var(--ink2); }
.steps { display: grid; grid-template-columns: repeat(4,1fr); gap: 0; margin-top: 56px; position: relative; }
.steps::before {
  content: ''; position: absolute;
  top: 36px; left: 12.5%; right: 12.5%;
  height: 1px; background: linear-gradient(90deg, transparent, var(--teal), transparent);
}
.step-item { text-align: center; padding: 0 20px; }
.step-circle {
  width: 72px; height: 72px; border-radius: 50%;
  background: linear-gradient(135deg, rgba(0,201,167,.15), rgba(0,87,255,.1));
  border: 1px solid rgba(0,201,167,.25);
  display: flex; align-items: center; justify-content: center;
  font-family: 'Playfair Display', serif; font-size: 28px; font-weight: 900; color: var(--teal);
  margin: 0 auto 24px; position: relative; z-index: 1;
  transition: all .3s;
}
.step-item:hover .step-circle { background: rgba(0,201,167,.2); transform: scale(1.1); }
.step-name { font-size: 16px; font-weight: 700; margin-bottom: 8px; }
.step-desc { font-size: 13px; color: var(--muted); line-height: 1.65; }

/* ── Features ────────────────────────────────────────────── */
.feature-row { display: grid; grid-template-columns: 1fr 1fr; gap: 72px; align-items: center; margin-top: 64px; }
.feature-row.flip { direction: rtl; }
.feature-row.flip > * { direction: ltr; }
.feature-visual-box {
  background: var(--ink2); border: 1px solid var(--border);
  border-radius: var(--radius-lg); padding: 28px; position: relative; overflow: hidden;
}
.feature-visual-box::after {
  content: ''; position: absolute;
  width: 250px; height: 250px;
  background: radial-gradient(circle, rgba(0,201,167,.12), transparent 70%);
  top: -60px; right: -60px; pointer-events: none;
}
.feature-list { display: flex; flex-direction: column; gap: 20px; }
.feature-item {
  display: flex; gap: 14px; padding: 18px;
  border-radius: var(--radius); background: rgba(255,255,255,.025);
  border: 1px solid var(--border); transition: all .25s;
}
.feature-item:hover { background: rgba(0,201,167,.05); border-color: rgba(0,201,167,.2); }
.fi-icon {
  width: 40px; height: 40px; border-radius: 10px; flex-shrink: 0;
  display: flex; align-items: center; justify-content: center; font-size: 18px;
}
.fi-title { font-size: 15px; font-weight: 700; margin-bottom: 3px; }
.fi-desc  { font-size: 13px; color: var(--muted); line-height: 1.6; }

/* ── Stats banner ────────────────────────────────────────── */
.stats-band {
  background: linear-gradient(135deg, rgba(0,201,167,.09), rgba(0,87,255,.07));
  border-top: 1px solid rgba(0,201,167,.15);
  border-bottom: 1px solid rgba(0,201,167,.15);
  padding: 70px 6%;
}
.stats-band-grid { display: grid; grid-template-columns: repeat(4,1fr); text-align: center; }
.sb-item { padding: 20px; border-right: 1px solid var(--border); }
.sb-item:last-child { border-right: none; }
.sb-num {
  font-family: 'Playfair Display', serif;
  font-size: 52px; font-weight: 900; letter-spacing: -2px; line-height: 1;
  background: linear-gradient(135deg, var(--teal), var(--blue2));
  -webkit-background-clip: text; -webkit-text-fill-color: transparent;
}
.sb-label { font-size: 14px; color: var(--muted); margin-top: 6px; font-weight: 500; }

/* ── Industries ──────────────────────────────────────────── */
.industries-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 16px; margin-top: 52px; }
.ind-card {
  background: var(--ink2); border: 1px solid var(--border);
  border-radius: var(--radius-lg); padding: 28px;
  display: flex; align-items: flex-start; gap: 16px; transition: all .3s;
}
.ind-card:hover { border-color: rgba(0,201,167,.3); transform: translateY(-3px); }
.ind-icon { font-size: 32px; flex-shrink: 0; }
.ind-name { font-size: 16px; font-weight: 700; margin-bottom: 6px; }
.ind-desc { font-size: 13px; color: var(--muted); line-height: 1.65; }

/* ── Testimonials ────────────────────────────────────────── */
.testimonials { background: var(--ink2); }
.testi-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 20px; margin-top: 52px; }
.testi-card {
  background: var(--ink3); border: 1px solid var(--border);
  border-radius: var(--radius-lg); padding: 28px; position: relative;
}
.testi-card::before {
  content: '"'; position: absolute; top: 14px; right: 22px;
  font-family: 'Playfair Display', serif; font-size: 64px; color: var(--teal);
  opacity: .2; line-height: 1;
}
.testi-text { font-size: 15px; line-height: 1.75; color: rgba(255,255,255,.8); margin-bottom: 22px; }
.testi-author { display: flex; align-items: center; gap: 12px; }
.testi-avatar {
  width: 44px; height: 44px; border-radius: 50%; flex-shrink: 0;
  display: flex; align-items: center; justify-content: center;
  font-weight: 800; font-size: 15px; color: #000;
}
.testi-name  { font-size: 14px; font-weight: 700; }
.testi-role  { font-size: 12px; color: var(--muted); }
.stars { color: var(--gold); font-size: 13px; margin-bottom: 12px; }

/* ── CTA ─────────────────────────────────────────────────── */
.cta-section {
  background: linear-gradient(135deg, var(--ink2), var(--ink3));
  text-align: center; padding: 100px 6%;
  position: relative; overflow: hidden;
}
.cta-section::before {
  content: ''; position: absolute; inset: 0; pointer-events: none;
  background: radial-gradient(ellipse 70% 70% at 50% 50%, rgba(0,201,167,.07), transparent);
}
.cta-title {
  font-family: 'Playfair Display', serif;
  font-size: clamp(32px,4.5vw,60px); font-weight: 900;
  letter-spacing: -2px; margin-bottom: 16px; position: relative; z-index: 1;
}
.cta-sub { font-size: 18px; color: var(--muted); margin-bottom: 36px; max-width: 560px; margin-left: auto; margin-right: auto; position: relative; z-index: 1; }
.cta-actions { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; position: relative; z-index: 1; }

/* ── Clients ─────────────────────────────────────────────── */
.clients-row {
  display: flex; align-items: center; justify-content: center;
  gap: 48px; flex-wrap: wrap; margin-top: 44px;
}
.client-logo {
  font-size: 13px; font-weight: 800; letter-spacing: 2px;
  text-transform: uppercase; color: rgba(255,255,255,.2);
  transition: color .25s; white-space: nowrap;
}
.client-logo:hover { color: rgba(255,255,255,.5); }

@media (max-width:900px) {
  .products-grid, .steps, .testi-grid, .industries-grid { grid-template-columns: 1fr; }
  .feature-row, .feature-row.flip { grid-template-columns: 1fr; direction: ltr; gap: 32px; }
  .hero-device { display: none; }
  .hero-content { max-width: 100%; }
  .stats-band-grid { grid-template-columns: 1fr 1fr; }
  .sb-item:nth-child(2) { border-right: none; }
  .hero-stats-row { gap: 28px; flex-wrap: wrap; }
}
</style>
</head>
<body>
<?php include 'includes/navbar.php'; ?>

<!-- ════ HERO ════ -->
<section class="hero">
  <div class="hero-bg-grid"></div>
  <div class="orb orb-1"></div>
  <div class="orb orb-2"></div>

  <div class="hero-content">
    <div class="hero-badge anim-fadeup"><span>India's #1 VMS Platform</span></div>
    <h1 class="hero-h1 anim-fadeup anim-delay-1">
      Secure Every<br/>
      <em>Entrance.</em><br/>
      <span class="outline">Intelligently.</span>
    </h1>
    <p class="hero-sub anim-fadeup anim-delay-2">
      Security Gate Digital delivers enterprise-grade Visitor Management Software that transforms how organisations manage access, identity and safety — from the front desk to the C-suite.
    </p>
    <div class="hero-actions anim-fadeup anim-delay-3">
      <a href="pages/contact.php" class="btn btn-primary btn-lg">Request Free Demo →</a>
      <a href="pages/products.php" class="btn btn-secondary btn-lg">Explore Products</a>
    </div>
    <div class="hero-stats-row anim-fadeup">
      <div class="hs-item">
        <div class="hs-num" data-count="500" data-suffix="+">500+</div>
        <div class="hs-label">Enterprise Clients</div>
      </div>
      <div class="hs-item">
        <div class="hs-num" data-count="2" data-suffix="M+">2M+</div>
        <div class="hs-label">Visitors Managed</div>
      </div>
      <div class="hs-item">
        <div class="hs-num" data-count="20" data-suffix="+">20+</div>
        <div class="hs-label">Cities Across India</div>
      </div>
      <div class="hs-item">
        <div class="hs-num" data-count="99.9" data-suffix="%">99.9%</div>
        <div class="hs-label">Uptime SLA</div>
      </div>
    </div>
  </div>

  <!-- Floating dashboard preview -->
  <div class="hero-device">
    <div class="device-frame">
      <div class="device-chrome">
        <div class="dc-dot" style="background:#ff5f57"></div>
        <div class="dc-dot" style="background:#febc2e"></div>
        <div class="dc-dot" style="background:#28c840"></div>
        <div class="dc-url">sgspl.cloud/vms</div>
        <span style="font-size:10px;color:var(--muted)">🔒</span>
      </div>
      <div class="device-body">
        <div class="mini-header">SGSPL VMS — Dashboard</div>
        <div class="mini-kpis">
          <div class="mini-kpi"><div class="mini-kpi-val">34</div><div class="mini-kpi-lbl">Inside Now</div></div>
          <div class="mini-kpi"><div class="mini-kpi-val" style="color:var(--blue2)">127</div><div class="mini-kpi-lbl">Today's Check-ins</div></div>
          <div class="mini-kpi"><div class="mini-kpi-val" style="color:var(--gold)">19</div><div class="mini-kpi-lbl">Pre-Registered</div></div>
          <div class="mini-kpi"><div class="mini-kpi-val" style="color:#f87171">3</div><div class="mini-kpi-lbl">Overstay Alerts</div></div>
        </div>
        <div class="mini-table-wrap">
          <table class="mini-tbl">
            <thead><tr><th>Visitor</th><th>Host</th><th>Status</th></tr></thead>
            <tbody>
              <tr><td>Rahul Sharma</td><td>Priya S.</td><td><span class="dot dot-g"></span>In</td></tr>
              <tr><td>Anita Desai</td><td>Rohit K.</td><td><span class="dot dot-g"></span>In</td></tr>
              <tr><td>Karan Verma</td><td>Deepa R.</td><td><span class="dot dot-b"></span>Pre-Reg</td></tr>
              <tr><td>Vikram Patel</td><td>Meera J.</td><td><span class="dot dot-a"></span>Overstay</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════ MARQUEE ════ -->

<!-- ════ TRUSTED BY ════ -->
<section style="padding:56px 6%;background:var(--ink2)">
  <p class="text-center" style="font-size:12px;color:var(--muted);letter-spacing:2px;text-transform:uppercase;font-weight:700;margin-bottom:32px">Trusted by leading organisations across India</p>
  <div class="clients-row">
    <?php foreach(['AIIMS Delhi','Infosys Campus','Tata Steel','HDFC Bank','Cipla Ltd','DLF Group','L&T Infotech','Oberoi Hotels','Airport Authority','DRDO HQ'] as $c): ?>
      <div class="client-logo"><?= $c ?></div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ════ PRODUCTS ════ -->
<section style="background:var(--ink)">
  <div class="section-label reveal">Our Platform</div>
  <div class="grid-center" style="display:flex;justify-content:space-between;align-items:flex-end;gap:24px">
    <div>
      <div class="section-title reveal">Everything you need to<br/><em>secure your premises</em></div>
      <p class="section-sub reveal">Three powerful products built for every scale — from a single gate to 50 campuses.</p>
    </div>
    <a href="pages/products.php" class="btn btn-secondary reveal" style="flex-shrink:0">All Products →</a>
  </div>
  <div class="products-grid reveal">
    <?php
    $products = [
      ['🏢','VMS Enterprise','For large enterprises, hospitals and government facilities with multi-site, multi-gate management.',['Multi-site dashboard','CCTV integration','Access control sync','Custom workflows','SLA-backed support'],'Flagship','background:rgba(0,201,167,.12);color:var(--teal)','tag-flagship'],
      ['🏫','VMS Campus','Purpose-built for educational institutions, IT parks and residential complexes.',['Student/staff passes','Vehicle entry logs','Parent visit booking','Bulk pre-registration','Kiosk mode'],'Popular','background:rgba(240,180,41,.12);color:var(--gold)','tag-new'],
      ['🚀','VMS Lite','Affordable cloud-hosted solution for SMEs, co-working spaces and small offices.',['Up to 3 gates','Unlimited visitors','Mobile app','Basic reports','Email support'],'For SMEs','background:rgba(0,87,255,.12);color:var(--blue2)','tag-enterprise'],
    ];
    foreach($products as [$icon,$name,$desc,$features,$tag,$tagStyle,$tagClass]):
    ?>
    <div class="prod-card">
      <span class="prod-tag" style="<?= $tagStyle ?>"><?= $tag ?></span>
      <div class="prod-icon" style="<?= $tagStyle ?>"><?= $icon ?></div>
      <div class="prod-name"><?= $name ?></div>
      <p class="prod-desc"><?= $desc ?></p>
      <ul style="margin-bottom:20px">
        <?php foreach($features as $f): ?>
          <li style="font-size:13px;color:rgba(255,255,255,.65);padding:4px 0;display:flex;align-items:center;gap:7px"><span style="color:var(--teal);font-weight:700">→</span><?= $f ?></li>
        <?php endforeach; ?>
      </ul>
      <a href="pages/products.php" class="prod-link">Learn more →</a>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ════ HOW IT WORKS ════ -->
<section class="how-section">
  <div class="text-center">
    <div class="section-label reveal">How It Works</div>
    <div class="section-title reveal">From visitor arrival to<br/><em>seamless departure</em></div>
    <p class="section-sub wide text-center reveal">Our streamlined workflow ensures security teams spend less time on paperwork and more on what matters.</p>
  </div>
  <div class="steps reveal">
    <?php
    $steps = [
      ['1','Pre-Register or Walk In','Visitors book online using a QR invite, or walk in and register at the kiosk/reception desk.'],
      ['2','ID Verification & Photo','Aadhaar, PAN, Passport or any government ID is scanned and cross-checked against the blacklist.'],
      ['3','Host Notification','The host receives an instant SMS, email or WhatsApp alert with visitor details and can approve/reject.'],
      ['4','Badge & Check-Out','A printed badge is issued with a QR code. Check-out is recorded automatically and reports are generated.'],
    ];
    foreach($steps as [$n,$title,$desc]):
    ?>
    <div class="step-item">
      <div class="step-circle"><?= $n ?></div>
      <div class="step-name"><?= $title ?></div>
      <p class="step-desc"><?= $desc ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ════ FEATURES ════ -->
<section style="background:var(--ink)">
  <div class="section-label reveal">Platform Features</div>
  <div class="section-title reveal">Built for <em>enterprise security</em><br/>at every scale</div>

  <div class="feature-row reveal">
    <div class="feature-visual-box">
      <div style="background:var(--ink);border-radius:12px;padding:20px">
        <div style="font-size:11px;color:var(--muted);letter-spacing:1px;margin-bottom:12px;text-transform:uppercase;font-weight:700">Live Gate Status</div>
        <?php foreach([['Main Gate','34 inside','var(--teal)'],['Gate 1','12 inside','var(--blue2)'],['VIP Entry','3 inside','var(--gold)']] as [$gate,$count,$color]): ?>
        <div style="display:flex;justify-content:space-between;align-items:center;padding:10px 12px;background:rgba(255,255,255,.03);border-radius:8px;margin-bottom:8px;border:1px solid var(--border)">
          <div style="font-size:13px;font-weight:600"><?= $gate ?></div>
          <div style="font-size:13px;color:<?= $color ?>;font-weight:700"><?= $count ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="feature-list">
      <?php
      $f1 = [
        ['🔐','Blacklist & Watchlist','Automatically cross-check every visitor against your blacklist and national watchlists in real time.','background:rgba(239,68,68,.12)'],
        ['📷','Photo & ID Capture','Webcam or mobile camera captures visitor photo and ID proof. Stored securely for 12 months.','background:rgba(0,201,167,.12)'],
        ['⚡','Instant Host Alerts','Push notifications, SMS, email and WhatsApp alerts sent to hosts the moment a visitor arrives.','background:rgba(240,180,41,.12)'],
      ];
      foreach($f1 as [$icon,$title,$desc,$bg]):
      ?>
      <div class="feature-item">
        <div class="fi-icon" style="<?= $bg ?>"><?= $icon ?></div>
        <div><div class="fi-title"><?= $title ?></div><div class="fi-desc"><?= $desc ?></div></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="feature-row flip reveal" style="margin-top:40px">
    <div class="feature-visual-box">
      <div style="background:var(--ink);border-radius:12px;padding:20px">
        <div style="font-size:11px;color:var(--muted);letter-spacing:1px;margin-bottom:12px;text-transform:uppercase;font-weight:700">This Week's Report</div>
        <?php $days=['Mon'=>42,'Tue'=>58,'Wed'=>75,'Thu'=>61,'Fri'=>89,'Sat'=>33]; ?>
        <?php foreach($days as $d=>$v): ?>
        <div style="display:flex;align-items:center;gap:10px;margin-bottom:8px">
          <div style="font-size:11px;color:var(--muted);width:30px"><?= $d ?></div>
          <div style="flex:1;height:6px;background:rgba(255,255,255,.07);border-radius:3px">
            <div style="width:<?= round($v/89*100) ?>%;height:100%;background:var(--teal);border-radius:3px"></div>
          </div>
          <div style="font-size:11px;width:24px;text-align:right"><?= $v ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="feature-list">
      <?php
      $f2 = [
        ['📊','Advanced Analytics','Daily, weekly and monthly reports on visitor traffic, peak hours, purpose breakdown and overstay analysis.','background:rgba(0,87,255,.12)'],
        ['🏢','Multi-Site Management','One dashboard to manage all your locations, branches and campuses. Role-based access per site.','background:rgba(192,132,252,.12)'],
        ['🔗','Integrations','Connects with CCTV, HRMS, access control, Slack, Microsoft Teams and 50+ enterprise tools.','background:rgba(0,201,167,.12)'],
      ];
      foreach($f2 as [$icon,$title,$desc,$bg]):
      ?>
      <div class="feature-item">
        <div class="fi-icon" style="<?= $bg ?>"><?= $icon ?></div>
        <div><div class="fi-title"><?= $title ?></div><div class="fi-desc"><?= $desc ?></div></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════ STATS BAND ════ -->
<div class="stats-band">
  <div class="stats-band-grid">
    <?php foreach([['500+','Enterprise Clients'],['2M+','Visitors Managed'],['99.9%','Uptime SLA'],['20+','Cities in India']] as [$num,$label]): ?>
    <div class="sb-item reveal">
      <div class="sb-num"><?= $num ?></div>
      <div class="sb-label"><?= $label ?></div>
    </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- ════ INDUSTRIES ════ -->
<section style="background:var(--ink2)">
  <div class="section-label reveal">Industries We Serve</div>
  <div class="section-title reveal">One platform,<br/><em>every industry</em></div>
  <div class="industries-grid">
    <?php
    $industries = [
      ['🏥','Hospitals & Healthcare','Manage patient visitors, vendor access and staff entry across OPD, ICU and wards.'],
      ['🏫','Colleges & Schools','Student gate passes, parent visits, event management and contractor access.'],
      ['🏢','Corporate Campuses','Multi-tower, multi-gate management with HRMS and access control integration.'],
      ['🏭','Factories & Warehouses','Heavy vehicle entry, contractor verification and loading bay management.'],
      ['🏨','Hotels & Hospitality','Guest check-in, event visitor passes, staff management and valet coordination.'],
      ['🏛️','Government Offices','Strict visitor verification with biometric option, blacklist check and audit trail.'],
    ];
    foreach($industries as [$icon,$name,$desc]):
    ?>
    <div class="ind-card reveal">
      <div class="ind-icon"><?= $icon ?></div>
      <div><div class="ind-name"><?= $name ?></div><p class="ind-desc"><?= $desc ?></p></div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ════ TESTIMONIALS ════ -->
<section class="testimonials">
  <div class="text-center">
    <div class="section-label reveal">Testimonials</div>
    <div class="section-title reveal">Trusted by security<br/><em>leaders nationwide</em></div>
  </div>
  <div class="testi-grid">
    <?php
    $testis = [
      ['SGSPL VMS has transformed how we manage 1,200+ daily visitors across three towers. The pre-registration and blacklist features are exceptional.','Rajesh Verma','Head of Security, Infosys Campus, Pune','RV','linear-gradient(135deg,var(--teal),var(--blue))'],
      ['Deployment was complete in 48 hours. The support team is outstanding. We reduced check-in time from 4 minutes to under 30 seconds.','Dr. Meena Sharma','Facilities Director, AIIMS New Delhi','MS','linear-gradient(135deg,var(--gold),#e06c00)'],
      ['The multi-site dashboard gives us a single pane of glass for all 14 branches. Reporting is comprehensive and audit-ready.','Suresh Nair','VP Operations, DLF Group','SN','linear-gradient(135deg,var(--blue),var(--purple,#9c5cfc))'],
    ];
    foreach($testis as [$text,$name,$role,$initials,$grad]):
    ?>
    <div class="testi-card reveal">
      <div class="stars">★★★★★</div>
      <p class="testi-text">"<?= $text ?>"</p>
      <div class="testi-author">
        <div class="testi-avatar" style="background:<?= $grad ?>"><?= $initials ?></div>
        <div><div class="testi-name"><?= $name ?></div><div class="testi-role"><?= $role ?></div></div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ════ CTA ════ -->
<section class="cta-section">
  <div class="section-label" style="justify-content:center">Get Started</div>
  <div class="cta-title reveal">Ready to secure<br/><em>your entrance?</em></div>
  <p class="cta-sub reveal">Join 500+ organisations that trust SGSPL Cloud. Start your free 30-day trial — no credit card required.</p>
  <div class="cta-actions reveal">
    <a href="pages/contact.php" class="btn btn-primary btn-lg">Request Free Demo</a>
    <a href="pages/pricing.php" class="btn btn-secondary btn-lg">View Pricing</a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
