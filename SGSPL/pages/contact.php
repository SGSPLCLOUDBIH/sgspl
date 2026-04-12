<?php
$pageTitle = 'Contact Us — SGSPL Cloud';
$success = $error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $phone   = trim($_POST['phone'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $type    = trim($_POST['type'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (!$name || !$email || !$message) {
        $error = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
        // In production: send email via mail() or SMTP
        // For demo: just show success
        $success = "Thank you, <strong>{$name}</strong>! We've received your message and will get back to you within 24 hours.";
        // mail('hello@sgspl.cloud', "New Enquiry from $name", "Name:$name\nEmail:$email\nPhone:$phone\nCompany:$company\nType:$type\nMessage:$message");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/><meta name="viewport" content="width=device-width,initial-scale=1"/>
<title><?= $pageTitle ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="../assets/css/style.css"/>
<style>
.contact-grid { display:grid;grid-template-columns:5fr 4fr;gap:48px;align-items:start;margin-top:0; }
.contact-form-card { background:var(--ink2);border:1px solid var(--border);border-radius:var(--radius-lg);padding:36px; }
.form-grid-2 { display:grid;grid-template-columns:1fr 1fr;gap:16px; }
.form-group { display:flex;flex-direction:column;gap:6px;margin-bottom:16px; }
.form-label { font-size:11px;font-weight:700;color:var(--muted);text-transform:uppercase;letter-spacing:1.5px; }
.form-label .req { color:#f87171;margin-left:2px; }
.form-input {
  background:rgba(255,255,255,.05);border:1px solid var(--border);
  border-radius:var(--radius);color:var(--white);font-family:'Outfit',sans-serif;
  font-size:14px;padding:11px 14px;outline:none;transition:border-color .2s,background .2s;width:100%;
}
.form-input:focus { border-color:var(--teal);background:rgba(0,201,167,.04); }
.form-input::placeholder { color:rgba(255,255,255,.3); }
select.form-input option { background:var(--ink2);color:var(--white); }
textarea.form-input { resize:vertical;min-height:120px; }
.submit-btn { width:100%;padding:14px;background:var(--teal);color:#000;font-weight:800;font-size:16px;border:none;border-radius:var(--radius);cursor:pointer;transition:all .25s;margin-top:8px; }
.submit-btn:hover { background:var(--teal2);transform:translateY(-1px); }
.contact-info { display:flex;flex-direction:column;gap:20px; }
.contact-card { background:var(--ink2);border:1px solid var(--border);border-radius:var(--radius-lg);padding:24px; }
.cc-icon { font-size:28px;margin-bottom:10px; }
.cc-title { font-size:16px;font-weight:700;margin-bottom:6px; }
.cc-value { font-size:14px;color:var(--muted);line-height:1.7; }
.cc-value a { color:var(--teal); }
.offices-grid { display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:48px; }
.office-card { background:var(--ink2);border:1px solid var(--border);border-radius:var(--radius-lg);padding:24px;transition:all .3s; }
.office-card:hover { border-color:rgba(0,201,167,.25);transform:translateY(-2px); }
.office-city { font-size:18px;font-weight:800;margin-bottom:4px; }
.office-addr { font-size:13px;color:var(--muted);line-height:1.7; }
.office-tag  { display:inline-block;padding:3px 10px;border-radius:20px;font-size:10px;font-weight:700;text-transform:uppercase;margin-bottom:10px;letter-spacing:1px; }
@media(max-width:768px){.contact-grid,.offices-grid{grid-template-columns:1fr}.form-grid-2{grid-template-columns:1fr}}
</style>
</head>
<body>
<?php include '../includes/navbar.php'; ?>

<div class="page-hero">
  <div class="breadcrumb"><a href="../index.php">Home</a><span>/</span><span>Contact</span></div>
  <h1 class="page-hero-title">Let's <em>talk security</em></h1>
  <p class="page-hero-sub">Book a free demo, ask a question or just say hello. Our team responds within 30 minutes on business days.</p>
</div>

<section style="background:var(--ink)">
  <div class="contact-grid">

    <!-- Form -->
    <div class="contact-form-card reveal">
      <h2 style="font-family:'Playfair Display',serif;font-size:26px;font-weight:900;letter-spacing:-1px;margin-bottom:4px">Send us a message</h2>
      <p style="font-size:14px;color:var(--muted);margin-bottom:28px">We typically reply within 30 minutes on business days.</p>

      <?php if($success): ?>
        <div style="padding:16px 20px;background:rgba(16,185,129,.1);border:1px solid rgba(16,185,129,.3);border-radius:10px;color:#10b981;font-size:14px;margin-bottom:20px"><?= $success ?></div>
      <?php endif; ?>
      <?php if($error): ?>
        <div style="padding:16px 20px;background:rgba(239,68,68,.1);border:1px solid rgba(239,68,68,.3);border-radius:10px;color:#f87171;font-size:14px;margin-bottom:20px"><?= htmlspecialchars($error) ?></div>
      <?php endif; ?>

      <form method="POST" action="">
        <div class="form-grid-2">
          <div class="form-group">
            <label class="form-label">Full Name <span class="req">*</span></label>
            <input class="form-input" type="text" name="name" required placeholder="Your full name" value="<?= htmlspecialchars($_POST['name']??'') ?>"/>
          </div>
          <div class="form-group">
            <label class="form-label">Email Address <span class="req">*</span></label>
            <input class="form-input" type="email" name="email" required placeholder="you@company.com" value="<?= htmlspecialchars($_POST['email']??'') ?>"/>
          </div>
        </div>
        <div class="form-grid-2">
          <div class="form-group">
            <label class="form-label">Phone Number</label>
            <input class="form-input" type="tel" name="phone" placeholder="+91 7982023117" value="<?= htmlspecialchars($_POST['phone']??'') ?>"/>
          </div>
          <div class="form-group">
            <label class="form-label">Company / Organisation</label>
            <input class="form-input" type="text" name="company" placeholder="Your organisation" value="<?= htmlspecialchars($_POST['company']??'') ?>"/>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label">Enquiry Type</label>
          <select class="form-input" name="type">
            <option>Product Demo Request</option>
            <option>Pricing Enquiry</option>
            <option>Technical Support</option>
            <option>Partnership</option>
            <option>General Enquiry</option>
          </select>
        </div>
        <div class="form-group">
          <label class="form-label">Message <span class="req">*</span></label>
          <textarea class="form-input" name="message" required placeholder="Tell us about your organisation and what you're looking for…"><?= htmlspecialchars($_POST['message']??'') ?></textarea>
        </div>
        <button type="submit" class="submit-btn">Send Message →</button>
      </form>
    </div>

    <!-- Info -->
    <div class="contact-info reveal">
      <div class="contact-card">
        <div class="cc-icon">📞</div>
        <div class="cc-title">Phone Support</div>
        <div class="cc-value">
          <a href="tel:+917982023117">7982023117</a> (Toll Free)<br/>
          Mon–Sat: 9:00 AM – 7:00 PM IST<br/>
          Enterprise: 24×7 dedicated line
        </div>
      </div>
      <div class="contact-card">
        <div class="cc-icon">📧</div>
        <div class="cc-title">Email Us</div>
        <div class="cc-value">
          Sales: <a href="mailto:sales@sgspl.cloud">sales@sgspl.cloud</a><br/>
          Support: <a href="mailto:support@sgspl.cloud">support@sgspl.cloud</a><br/>
          General: <a href="mailto:hello@sgspl.cloud">hello@sgspl.cloud</a>
        </div>
      </div>
      <div class="contact-card">
        <div class="cc-icon">💬</div>
        <div class="cc-title">WhatsApp Business</div>
        <div class="cc-value">
          Message us on WhatsApp for quick support.<br/>
          <a href="#">+91 7982023117</a>
        </div>
      </div>
      <div class="contact-card" style="background:linear-gradient(135deg,rgba(0,201,167,.08),rgba(0,87,255,.06));border-color:rgba(0,201,167,.2)">
        <div class="cc-icon">🚀</div>
        <div class="cc-title" style="color:var(--teal)">Book a Live Demo</div>
        <div class="cc-value">
          See SGSPL VMS in action with a personalised 30-minute demo. Our product specialist will walk you through features relevant to your industry.
        </div>
        <a href="#" class="btn btn-primary btn-sm" style="margin-top:14px;display:inline-flex">Schedule Demo →</a>
      </div>
    </div>
  </div>
</section>

<!-- Offices -->
<section style="background:var(--ink2)">
  <div class="section-label reveal">Our Offices</div>
  <div class="section-title reveal">Find us across<br/><em>India</em></div>
  <div class="offices-grid">
    <?php foreach([
      ['New Delhi','HQ','Sector 18, Gurugram, Haryana 122015','Mon–Sat 9AM–7PM'],
      ['Mumbai','Regional','BKC, Bandra East, Mumbai 400051','Mon–Fri 10AM–6PM'],
      ['Bengaluru','Regional','Koramangala, Bengaluru 560034','Mon–Fri 10AM–6PM'],
    ] as [$city,$type,$addr,$hours]): ?>
    <div class="office-card reveal">
      <div class="office-tag" style="background:rgba(0,201,167,.12);color:var(--teal)"><?= $type ?></div>
      <div class="office-city"><?= $city ?></div>
      <p class="office-addr"><?= $addr ?><br/><span style="color:rgba(255,255,255,.4);font-size:12px"><?= $hours ?></span></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
