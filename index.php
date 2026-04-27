<?php
require_once 'includes/captcha.php';
$pageTitle = "Prime Policies | Your Trusted Insurance Partner in the UAE";
$pageDesc  = "Prime Policies offers tailored insurance solutions, from Personal to Commercial and Medical Insurance. Get your free quote today!";
$extraCss  = '<style>
/* ── Quote / Contact Form ──────────────────────────────────────── */
.quote-section { background: #f4f7fc; padding: 80px 0; }
.section-label { display: inline-block; background: var(--secondary-color); color: #fff; font-size: 0.8rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; padding: 5px 14px; border-radius: 20px; margin-bottom: 16px; }
.quote-section h2 { font-size: 2.6rem; color: var(--primary-color); margin-bottom: 12px; }
.quote-section .sub { font-size: 1.05rem; color: #555; margin-bottom: 40px; }
.quote-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: start; }
.quote-form-card { background: #fff; border-radius: 16px; padding: 40px; box-shadow: 0 8px 32px rgba(11,26,74,0.09); }
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.form-group { margin-bottom: 18px; }
.form-group label { display: block; font-size: 0.88rem; font-weight: 600; color: var(--primary-color); margin-bottom: 6px; }
.form-group input,
.form-group select,
.form-group textarea { width: 100%; padding: 11px 14px; border: 1.5px solid #d1d9e6; border-radius: 8px; font-size: 0.97rem; font-family: var(--font-body); color: #333; transition: border-color 0.2s; background: #fafbff; }
.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus { outline: none; border-color: var(--secondary-color); background: #fff; }
.form-group textarea { resize: vertical; min-height: 100px; }
.form-submit { width: 100%; padding: 14px; background: var(--primary-color); color: #fff; border: none; border-radius: 30px; font-size: 1rem; font-weight: 700; cursor: pointer; transition: background 0.2s; font-family: var(--font-heading); }
.form-submit:hover { background: var(--secondary-color); }
.form-msg { display: none; padding: 12px 16px; border-radius: 8px; margin-bottom: 16px; font-weight: 600; font-size: 0.95rem; }
.form-msg.is-success { display: block; background: #d1fae5; color: #065f46; border: 1px solid #6ee7b7; }
.form-msg.is-error   { display: block; background: #fee2e2; color: #991b1b; border: 1px solid #fca5a5; }
.quote-info h3 { font-size: 1.6rem; color: var(--primary-color); margin-bottom: 24px; }
.info-item { display: flex; gap: 16px; margin-bottom: 28px; align-items: flex-start; }
.info-icon { width: 48px; height: 48px; background: var(--secondary-color); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 1.2rem; flex-shrink: 0; }
.info-item h4 { font-size: 1rem; color: var(--primary-color); margin-bottom: 4px; }
.info-item p  { font-size: 0.92rem; color: #666; }

/* ── Newsletter ────────────────────────────────────────────────── */
.newsletter-section { background: var(--primary-color); padding: 70px 0; color: #fff; }
.nl-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
.nl-text h2 { font-size: 2.2rem; margin-bottom: 12px; }
.nl-text p  { opacity: 0.85; font-size: 1.05rem; }
.nl-form-row { display: flex; gap: 0; }
.nl-input { flex: 1; padding: 14px 18px; border: none; border-radius: 30px 0 0 30px; font-size: 1rem; font-family: var(--font-body); }
.nl-input:focus { outline: none; }
.nl-btn { padding: 14px 28px; background: var(--accent-color); color: var(--primary-color); border: none; border-radius: 0 30px 30px 0; font-size: 1rem; font-weight: 700; cursor: pointer; font-family: var(--font-heading); transition: opacity 0.2s; }
.nl-btn:hover { opacity: 0.85; }
.nl-msg { display: none; margin-top: 12px; font-size: 0.95rem; font-weight: 600; }
.nl-msg.is-success { display: block; color: #6ee7b7; }
.nl-msg.is-error   { display: block; color: #fca5a5; }

/* ── About ─────────────────────────────────────────────────────── */
.about-section { background: #fff; padding: 90px 0; }
.about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
.about-text .section-label { background: var(--accent-color); color: var(--primary-color); }
.about-text h2 { font-size: 2.6rem; color: var(--primary-color); margin-bottom: 16px; }
.about-text p  { font-size: 1.05rem; color: #555; margin-bottom: 20px; line-height: 1.8; }
.stat-row { display: flex; gap: 32px; margin-top: 32px; }
.stat-box { text-align: center; }
.stat-box .num { font-size: 2.4rem; font-weight: 800; color: var(--secondary-color); font-family: var(--font-heading); }
.stat-box .lbl { font-size: 0.85rem; color: #777; font-weight: 500; }
.about-cards { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; }
.about-card { background: #f4f7fc; border-radius: 12px; padding: 24px; }
.about-card i  { font-size: 1.8rem; color: var(--secondary-color); margin-bottom: 12px; }
.about-card h4 { font-size: 1rem; color: var(--primary-color); margin-bottom: 8px; }
.about-card p  { font-size: 0.88rem; color: #666; }

@media (max-width: 768px) {
    .quote-grid, .nl-grid, .about-grid { grid-template-columns: 1fr; }
    .form-row { grid-template-columns: 1fr; }
    .stat-row { gap: 20px; }
    .nl-form-row { flex-direction: column; }
    .nl-input  { border-radius: 30px; margin-bottom: 10px; }
    .nl-btn    { border-radius: 30px; }
    .about-cards { grid-template-columns: 1fr; }
}
</style>';
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-bg-animation">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="shape shape-4"></div>
            <div class="shape shape-5"></div>
            <div class="hero-sweep"></div>
            <div id="hero-particles"></div>
        </div>
        <div class="container hero-container relative-z">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fa-solid fa-shield-halved"></i>
                    Your Trusted Insurance Partner in the UAE
                </div>
                <h1>Discover Your <span class="hero-highlight">Perfect</span> Insurance</h1>
                <p>Effortlessly Smooth, Uncomplicated, and Seamless</p>
                <div class="hero-actions">
                    <a href="#quote" class="btn btn-large hero-cta">Get Custom Quote</a>
                    <a href="#about" class="btn-ghost">Learn More</a>
                </div>
                <div class="hero-trust">
                    <span class="trust-item"><i class="fa-solid fa-check-circle"></i> No Hidden Fees</span>
                    <span class="trust-item"><i class="fa-solid fa-check-circle"></i> 24/7 Support</span>
                    <span class="trust-item"><i class="fa-solid fa-check-circle"></i> Instant Quotes</span>
                    <span class="trust-item"><i class="fa-solid fa-check-circle"></i> Expert Advisors</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Cards -->
    <section class="services-cards">
        <div class="container">
            <div class="cards-grid">
                <a href="<?= BASE_PATH ?>/personal-insurance.php" class="service-card sc-personal">
                    <div class="sc-icon-wrap"><i class="fa-solid fa-user-shield"></i></div>
                    <h3>Personal Insurance</h3>
                    <p class="sc-desc">Motor, home, travel &amp; protection plans for individuals &amp; families.</p>
                    <span class="sc-cta">Explore Plans <i class="fa-solid fa-arrow-right"></i></span>
                </a>
                <a href="<?= BASE_PATH ?>/commercial-insurance.php" class="service-card sc-commercial">
                    <div class="sc-icon-wrap"><i class="fa-solid fa-building-columns"></i></div>
                    <h3>Commercial Insurance</h3>
                    <p class="sc-desc">Safeguard your business assets, operations &amp; liability exposure.</p>
                    <span class="sc-cta">Explore Plans <i class="fa-solid fa-arrow-right"></i></span>
                </a>
                <a href="<?= BASE_PATH ?>/medical-insurance.php" class="service-card sc-medical">
                    <div class="sc-icon-wrap"><i class="fa-solid fa-stethoscope"></i></div>
                    <h3>Medical Insurance</h3>
                    <p class="sc-desc">Individual &amp; group health plans for UAE residents &amp; expats.</p>
                    <span class="sc-cta">Explore Plans <i class="fa-solid fa-arrow-right"></i></span>
                </a>
                <a href="<?= BASE_PATH ?>/life-insurance.php" class="service-card sc-life">
                    <div class="sc-icon-wrap"><i class="fa-solid fa-shield-heart"></i></div>
                    <h3>Life Insurance</h3>
                    <p class="sc-desc">Term &amp; whole life plans to secure your family&rsquo;s financial future.</p>
                    <span class="sc-cta">Explore Plans <i class="fa-solid fa-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </section>

    <!-- Insurance Introductions -->
    <section class="ins-intro-section">
        <div class="container">
            <div class="section-header" style="text-align:center; margin-bottom:52px;">
                <p class="section-label">What We Cover</p>
                <h2>Comprehensive Insurance Solutions in the UAE</h2>
                <p class="section-sub">From protecting your family to safeguarding your business, we have the right coverage for every stage of life.</p>
            </div>

            <!-- Personal Insurance -->
            <div class="ins-intro-row">
                <div class="ins-intro-visual ins-personal">
                    <i class="fa-solid fa-user-shield ins-bg-icon"></i>
                    <div class="ins-badge">Personal</div>
                </div>
                <div class="ins-intro-content">
                    <h3>Personal Insurance</h3>
                    <p>Life in the UAE brings unique risks — from busy roads to international travel and expensive belongings. Our personal insurance plans are designed to give you and your family complete peace of mind, whatever comes your way.</p>
                    <ul class="ins-sub-list">
                        <li><a href="<?= BASE_PATH ?>/motor-insurance.php"><i class="fa-solid fa-car"></i> Motor Insurance</a></li>
                        <li><a href="<?= BASE_PATH ?>/travel-insurance.php"><i class="fa-solid fa-plane-departure"></i> Travel Insurance</a></li>
                        <li><a href="<?= BASE_PATH ?>/home-insurance.php"><i class="fa-solid fa-house"></i> Home Insurance</a></li>
                        <li><a href="<?= BASE_PATH ?>/gap-insurance.php"><i class="fa-solid fa-car-burst"></i> Gap Insurance</a></li>
                        <li><a href="<?= BASE_PATH ?>/protect-plus-insurance.php"><i class="fa-solid fa-shield-halved"></i> Protect Plus</a></li>
                        <li><a href="<?= BASE_PATH ?>/third-party-liability.php"><i class="fa-solid fa-handshake"></i> Third Party Liability</a></li>
                    </ul>
                    <a href="<?= BASE_PATH ?>/personal-insurance.php" class="ins-read-more">View All Personal Plans <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Commercial Insurance -->
            <div class="ins-intro-row ins-intro-row--reverse">
                <div class="ins-intro-visual ins-commercial">
                    <i class="fa-solid fa-building-columns ins-bg-icon"></i>
                    <div class="ins-badge">Commercial</div>
                </div>
                <div class="ins-intro-content">
                    <h3>Commercial Insurance</h3>
                    <p>Businesses in the UAE face complex risks — from property damage and engineering projects to marine cargo and aviation. Our commercial insurance portfolio covers every aspect of your operations so you can focus on growth, not risk.</p>
                    <ul class="ins-sub-list">
                        <li><a href="<?= BASE_PATH ?>/property-insurance.php"><i class="fa-solid fa-warehouse"></i> Property Insurance</a></li>
                        <li><a href="<?= BASE_PATH ?>/engineering-insurance.php"><i class="fa-solid fa-helmet-safety"></i> Engineering Insurance</a></li>
                        <li><a href="<?= BASE_PATH ?>/marine-cargo.php"><i class="fa-solid fa-ship"></i> Marine Cargo</a></li>
                        <li><a href="<?= BASE_PATH ?>/liability.php"><i class="fa-solid fa-scale-balanced"></i> Liability</a></li>
                        <li><a href="<?= BASE_PATH ?>/aviation-insurance.php"><i class="fa-solid fa-plane"></i> Aviation Insurance</a></li>
                        <li><a href="<?= BASE_PATH ?>/trade-credit.php"><i class="fa-solid fa-file-invoice-dollar"></i> Trade Credit</a></li>
                    </ul>
                    <a href="<?= BASE_PATH ?>/commercial-insurance.php" class="ins-read-more">View All Commercial Plans <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Medical Insurance -->
            <div class="ins-intro-row">
                <div class="ins-intro-visual ins-medical">
                    <i class="fa-solid fa-stethoscope ins-bg-icon"></i>
                    <div class="ins-badge">Medical</div>
                </div>
                <div class="ins-intro-content">
                    <h3>Medical Insurance</h3>
                    <p>Healthcare in the UAE is world-class — and so are the costs. Whether you're an individual, a family, or a business covering employees, our medical insurance plans ensure you and your people always have access to the best care without financial worry.</p>
                    <ul class="ins-sub-list">
                        <li><a href="<?= BASE_PATH ?>/medical-insurance.php#individual"><i class="fa-solid fa-user-doctor"></i> Individual Medical Insurance</a></li>
                        <li><a href="<?= BASE_PATH ?>/medical-insurance.php#group"><i class="fa-solid fa-people-group"></i> Group Medical Insurance</a></li>
                        <li><a href="<?= BASE_PATH ?>/medical-malpractice.php"><i class="fa-solid fa-briefcase-medical"></i> Medical Malpractice</a></li>
                    </ul>
                    <a href="<?= BASE_PATH ?>/medical-insurance.php" class="ins-read-more">View All Medical Plans <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Life Insurance -->
            <div class="ins-intro-row ins-intro-row--reverse">
                <div class="ins-intro-visual ins-life">
                    <i class="fa-solid fa-shield-heart ins-bg-icon"></i>
                    <div class="ins-badge">Life</div>
                </div>
                <div class="ins-intro-content">
                    <h3>Life Insurance</h3>
                    <p>Your family's financial future shouldn't be left to chance. Our life insurance plans provide a guaranteed safety net, ensuring your loved ones can maintain their lifestyle, pay off debts, and fund education — no matter what happens.</p>
                    <ul class="ins-sub-list">
                        <li><a href="<?= BASE_PATH ?>/individual-life-insurance.php"><i class="fa-solid fa-person"></i> Individual Life Insurance</a></li>
                        <li><a href="<?= BASE_PATH ?>/group-life-insurance.php"><i class="fa-solid fa-users"></i> Group Life Insurance</a></li>
                    </ul>
                    <a href="<?= BASE_PATH ?>/life-insurance.php" class="ins-read-more">View All Life Plans <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-text">
                    <span class="section-label">About Prime Policies</span>
                    <h2>Why Choose Prime Policies for Your Insurance?</h2>
                    <p>Prime Policies stands out for its tailored insurance solutions, exceptional customer service, and reliable coverage that meets diverse needs across individuals and businesses in the UAE.</p>
                    <p>We partner with leading insurers across the UAE to deliver comprehensive protection plans — from motor and medical to commercial and life insurance — all backed by a dedicated team of specialists.</p>
                    <div class="stat-row">
                        <div class="stat-box"><div class="num">50K+</div><div class="lbl">Satisfied Clients</div></div>
                        <div class="stat-box"><div class="num">15+</div><div class="lbl">Insurance Products</div></div>
                        <div class="stat-box"><div class="num">All 7</div><div class="lbl">Emirates Covered</div></div>
                    </div>
                </div>
                <div class="about-cards">
                    <div class="about-card">
                        <i class="fa-solid fa-shield-halved"></i>
                        <h4>Comprehensive Coverage</h4>
                        <p>Tailored insurance options designed to protect every aspect of your personal and business life.</p>
                    </div>
                    <div class="about-card">
                        <i class="fa-solid fa-headset"></i>
                        <h4>24/7 Support</h4>
                        <p>Dedicated customer support and claims assistance available around the clock.</p>
                    </div>
                    <div class="about-card">
                        <i class="fa-solid fa-tag"></i>
                        <h4>Competitive Premiums</h4>
                        <p>Maximum protection at market-leading rates, with no hidden fees or surprises.</p>
                    </div>
                    <div class="about-card">
                        <i class="fa-solid fa-handshake"></i>
                        <h4>Trusted Partnerships</h4>
                        <p>Working with the UAE's top-rated insurers to guarantee claim settlements and fast service.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote / Contact Form Section -->
    <section class="quote-section" id="quote">
        <div class="container" id="contact">
            <div style="text-align:center; margin-bottom:48px;">
                <span class="section-label">Get a Quote</span>
                <h2>Request Your Custom Insurance Quote</h2>
                <p class="sub">Fill in your details and one of our advisors will get back to you within 24 hours.</p>
            </div>
            <div class="quote-grid">
                <!-- Form -->
                <div class="quote-form-card">
                    <div class="form-msg" id="quote-msg"></div>
                    <form id="quote-form" method="POST" action="<?= BASE_PATH ?>/success.php">
                        <input type="hidden" name="form_type"    value="quote">
                        <input type="hidden" name="utm_url"      class="js-utm-url"      value="">
                        <input type="hidden" name="utm_source"   class="js-utm-source"   value="">
                        <input type="hidden" name="utm_medium"   class="js-utm-medium"   value="">
                        <input type="hidden" name="utm_campaign" class="js-utm-campaign" value="">
                        <input type="hidden" name="utm_content"  class="js-utm-content"  value="">

                        <div class="form-row">
                            <div class="form-group">
                                <label for="q-name">Full Name *</label>
                                <input type="text" id="q-name" name="name" required placeholder="Ahmed Al Mansouri">
                            </div>
                            <div class="form-group">
                                <label for="q-phone">Phone Number *</label>
                                <input type="tel" id="q-phone" name="phone" required placeholder="+971 50 000 0000">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="q-email">Email Address *</label>
                            <input type="email" id="q-email" name="email" required placeholder="you@example.com">
                        </div>
                        <div class="form-group">
                            <label for="q-challenge">Insurance Type *</label>
                            <select id="q-challenge" name="challenge" required>
                                <option value="" disabled selected>Select insurance type</option>
                                <option>Motor Insurance</option>
                                <option>Home Insurance</option>
                                <option>Medical Insurance</option>
                                <option>Life Insurance</option>
                                <option>Travel Insurance</option>
                                <option>Property Insurance</option>
                                <option>Commercial Insurance</option>
                                <option>Marine Cargo</option>
                                <option>Engineering Insurance</option>
                                <option>Liability Insurance</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="q-goal">Message / Additional Details</label>
                            <textarea id="q-goal" name="goal" placeholder="Tell us more about your coverage needs..."></textarea>
                        </div>

                        <?= captcha_html() ?>

                        <div style="margin-top:20px;">
                            <button type="submit" class="form-submit">Send Quote Request &rarr;</button>
                        </div>
                    </form>
                </div>

                <!-- Info -->
                <div class="quote-info">
                    <h3>We're Here to Help</h3>
                    <div class="info-item">
                        <div class="info-icon"><i class="fa-solid fa-phone"></i></div>
                        <div>
                            <h4>Call Us</h4>
                            <p>800 PRIME (77463)<br>Available Sun–Thu, 9 AM – 6 PM</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <h4>Email Us</h4>
                            <p>info@primepolicies.com<br>We reply within 24 hours</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div>
                            <h4>Visit Us</h4>
                            <p>Prime Tower, Business Bay<br>Dubai, UAE</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon"><i class="fa-solid fa-clock"></i></div>
                        <div>
                            <h4>Response Time</h4>
                            <p>Quote requests are reviewed and responded to within one business day.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section" id="newsletter">
        <div class="container">
            <div class="nl-grid">
                <div class="nl-text">
                    <h2>Stay Informed on Insurance</h2>
                    <p>Subscribe for UAE insurance news, coverage tips, and exclusive offers — delivered straight to your inbox. No spam, ever.</p>
                </div>
                <div>
                    <div class="nl-msg" id="nl-msg"></div>
                    <form id="nl-form" method="POST" action="<?= BASE_PATH ?>/newsletter.php">
                        <input type="hidden" name="source"       value="homepage">
                        <input type="hidden" name="page_url"     class="js-utm-url"      value="">
                        <input type="hidden" name="utm_source"   class="js-utm-source"   value="">
                        <input type="hidden" name="utm_medium"   class="js-utm-medium"   value="">
                        <input type="hidden" name="utm_campaign" class="js-utm-campaign" value="">
                        <input type="hidden" name="utm_content"  class="js-utm-content"  value="">
                        <input type="hidden" name="utm_term"     class="js-utm-term"     value="">
                        <div class="nl-form-row">
                            <input type="email" name="email" class="nl-input" placeholder="Enter your email address" required>
                            <button type="submit" class="nl-btn">Subscribe</button>
                        </div>
                        <?= captcha_html(true) ?>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-box">
                <h2>Ready to get protected?</h2>
                <p>Speak to our insurance experts today to find the perfect plan for you or your business.</p>
                <div class="cta-buttons">
                    <a href="#quote" class="btn btn-primary">Get Custom Quote</a>
                    <a href="<?= BASE_PATH ?>/blog.php" class="btn btn-outline">Read Our Blog</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

<script>
(function () {
    // ── Hero particles ──────────────────────────────────────────
    const wrap = document.getElementById('hero-particles');
    if (wrap) {
        const count = 28;
        for (let i = 0; i < count; i++) {
            const d = document.createElement('div');
            d.className = 'hero-particle';
            const size = Math.random() * 4 + 2;
            d.style.cssText = [
                'width:'  + size + 'px',
                'height:' + size + 'px',
                'left:'   + Math.random() * 100 + '%',
                'top:'    + (60 + Math.random() * 40) + '%',
                'animation-duration:' + (8 + Math.random() * 14) + 's',
                'animation-delay:-'   + (Math.random() * 12) + 's',
                'opacity:' + (0.2 + Math.random() * 0.5),
            ].join(';');
            wrap.appendChild(d);
        }
    }
})();

(function () {
    // Populate UTM hidden fields from sessionStorage
    const params  = new URLSearchParams(window.location.search);
    const utmKeys = ['source', 'medium', 'campaign', 'content', 'term'];
    utmKeys.forEach(k => {
        const v = params.get('utm_' + k);
        if (v) sessionStorage.setItem('utm_' + k, v);
    });
    if (params.toString()) sessionStorage.setItem('utm_url', window.location.href);

    document.querySelectorAll('.js-utm-url').forEach(el      => el.value = sessionStorage.getItem('utm_url')      || window.location.href);
    document.querySelectorAll('.js-utm-source').forEach(el   => el.value = sessionStorage.getItem('utm_source')   || '');
    document.querySelectorAll('.js-utm-medium').forEach(el   => el.value = sessionStorage.getItem('utm_medium')   || '');
    document.querySelectorAll('.js-utm-campaign').forEach(el => el.value = sessionStorage.getItem('utm_campaign') || '');
    document.querySelectorAll('.js-utm-content').forEach(el  => el.value = sessionStorage.getItem('utm_content')  || '');
    document.querySelectorAll('.js-utm-term').forEach(el     => el.value = sessionStorage.getItem('utm_term')     || '');

    // ── Quote form AJAX ─────────────────────────────────────────
    const qForm = document.getElementById('quote-form');
    const qMsg  = document.getElementById('quote-msg');
    if (qForm && qMsg) {
        qForm.addEventListener('submit', async function (e) {
            e.preventDefault();
            qMsg.className = 'form-msg';
            const btn  = qForm.querySelector('[type="submit"]');
            const orig = btn.innerHTML;
            btn.disabled = true;
            btn.innerHTML = 'Sending…';
            try {
                const res  = await fetch(qForm.action, {
                    method: 'POST',
                    body: new FormData(qForm),
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                });
                const data = await res.json();
                if (data.ok) {
                    qMsg.className = 'form-msg is-success';
                    qMsg.textContent = 'Thank you! Your quote request has been received. We\'ll be in touch within 24 hours.';
                    qForm.reset();
                } else {
                    qMsg.className = 'form-msg is-error';
                    qMsg.textContent = data.error || 'Something went wrong. Please try again.';
                }
            } catch {
                qMsg.className = 'form-msg is-error';
                qMsg.textContent = 'Network error. Please try again.';
            }
            btn.disabled  = false;
            btn.innerHTML = orig;
        });
    }

    // ── Newsletter form AJAX ────────────────────────────────────
    const nlForm = document.getElementById('nl-form');
    const nlMsg  = document.getElementById('nl-msg');
    if (nlForm && nlMsg) {
        nlForm.addEventListener('submit', async function (e) {
            e.preventDefault();
            nlMsg.className = 'nl-msg';
            const btn  = nlForm.querySelector('[type="submit"]');
            const orig = btn.innerHTML;
            btn.disabled = true;
            btn.innerHTML = 'Subscribing…';
            try {
                const res  = await fetch(nlForm.action, {
                    method: 'POST',
                    body: new FormData(nlForm),
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                });
                const data = await res.json();
                if (data.ok) {
                    nlMsg.className = 'nl-msg is-success';
                    nlMsg.textContent = "You're subscribed! Watch your inbox for insurance tips and updates.";
                    nlForm.reset();
                } else {
                    nlMsg.className = 'nl-msg is-error';
                    nlMsg.textContent = data.error || 'Something went wrong. Please try again.';
                }
            } catch {
                nlMsg.className = 'nl-msg is-error';
                nlMsg.textContent = 'Network error. Please try again.';
            }
            btn.disabled  = false;
            btn.innerHTML = orig;
        });
    }
})();
</script>
