<?php
$page_title = "Contact Us - Book a Mini Bus or Bus Rental";
$page_description = "Reach us 24/7 at +91 9611120023 or WhatsApp to book a mini bus or bus rental in Bangalore. Visit our SMV Layout office or send us a message online.";
$page_keywords = "bus rental bangalore booking, mini bus rental near me, bus rental phone number, shanvi tours contact, whatsapp bus booking bangalore";
include 'includes/header.php';
?>

<!-- Page Header -->
<section class="hero-section">
    <div class="carousel-item active">
        <video autoplay muted loop playsinline poster="images/destinations/gokarna.jpg" aria-label="Cinematic FPV drone footage over a tropical beach cove">
            <source src="videos/scene-w1.mp4" type="video/mp4">
        </video>
        <div class="carousel-overlay">
            <div class="hero-content">
                <h1>Contact Us</h1>
                <p>We're here to help you plan your journey</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="section-padding contact-section">
    <div class="container">
        <div class="section-title">
            <h2>Get in Touch</h2>
            <p>Reach out to us for bookings, inquiries, or any assistance</p>
        </div>
        
        <div class="contact-content">
            <!-- Contact Information -->
            <div class="contact-info">
                <h3>Contact Information</h3>
                <p style="margin-bottom: 2rem;">Feel free to reach out to us through any of the following channels. We're available 24/7 to assist you with your travel needs.</p>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-text">
                        <h5>Our Address</h5>
                        <p>
                            #2472/1, 3rd Block, SMV Layout,<br>
                            Doddabasthihalli,<br>
                            Near Vijaya Hospital,<br>
                            Nagadevanahalli,<br>
                            Bangalore - 560056<br>
                            Karnataka, India
                        </p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="info-text">
                        <h5>Phone Numbers</h5>
                        <p>
                            <a href="tel:9611120023">+91 9611120023</a><br>
                            <a href="tel:8050507333">+91 8050507333</a>
                        </p>
                        <p style="font-size: 0.9rem; margin-top: 0.5rem;">Available 24/7 for bookings and support</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-text">
                        <h5>Email</h5>
                        <p>
                            <a href="mailto:info@shanvitoursandtravels.com">info@shanvitoursandtravels.com</a>
                        </p>
                        <p style="font-size: 0.9rem; margin-top: 0.5rem;">We'll respond within 24 hours</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div class="info-text">
                        <h5>WhatsApp</h5>
                        <p>
                            <a href="https://wa.me/919611120023" target="_blank">Chat with us on WhatsApp</a>
                        </p>
                        <p style="font-size: 0.9rem; margin-top: 0.5rem;">Quick bookings and instant replies</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="info-text">
                        <h5>Office Hours</h5>
                        <p>
                            Monday - Sunday: 24/7<br>
                            We're always available for your convenience
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="contact-form">
                <h3>Send us a Message</h3>
                <p style="margin-bottom: 2rem;">Fill out the form below and we'll get back to you as soon as possible.</p>
                
                <form onsubmit="submitForm(event)" method="POST">
                    <!-- Honeypot: hidden from real visitors via CSS, invisible to screen readers.
                         Bots that auto-fill every field trip this; contact-handler.php checks it. -->
                    <div style="position: absolute; left: -9999px; top: -9999px;" aria-hidden="true">
                        <label for="website">Website</label>
                        <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required placeholder="Enter your name">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required placeholder="Enter your email">
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" required placeholder="Enter your phone number">
                    </div>
                    
                    <div class="form-group">
                        <label for="service">Service Interested In</label>
                        <select id="service" name="service" style="width: 100%; padding: 12px 20px; border: 2px solid #e0e0e0; border-radius: 10px; font-family: 'Manrope', sans-serif;">
                            <option value="">Select a service</option>
                            <option value="Employee Transport">Employee Transport</option>
                            <option value="Corporate Bus Rental">Corporate Bus Rental</option>
                            <option value="Wedding Bus Rental">Wedding Bus Rental</option>
                            <option value="School/College Trip">School / College Trip</option>
                            <option value="Outstation">Outstation Bus Rental</option>
                            <option value="Package Tours">Pilgrimage &amp; Package Tours</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Your Message *</label>
                        <textarea id="message" name="message" required placeholder="Tell us about your requirements..."></textarea>
                    </div>
                    
                    <button type="submit" class="btn-submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="section-padding" style="background: white; padding-top: 0;">
    <div class="container">
        <div class="section-title">
            <h2>Find Us on Map</h2>
            <p>Visit our office in Bangalore</p>
        </div>
        <div style="border-radius: 20px; overflow: hidden; box-shadow: var(--shadow);">
            <iframe
                src="https://www.google.com/maps?q=Shanvi+Tours+%26+Travels%2C+SMV+Layout%2C+Nagadevanahalli%2C+Bangalore+560056&output=embed"
                width="100%"
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<!-- Quick Contact -->
<section class="section-padding" style="background: var(--light-bg);">
    <div class="container">
        <div class="section-title">
            <h2>Quick Contact Options</h2>
            <p>Choose the most convenient way to reach us</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="service-card text-center">
                    <div class="service-icon" style="margin: 0 auto 20px;"><i class="fas fa-phone-alt"></i></div>
                    <h3>Call Us Now</h3>
                    <p>Speak directly with our team for immediate assistance and bookings.</p>
                    <a href="tel:9611120023" class="btn-hero" style="margin-top: 1rem;">9611120023</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card text-center">
                    <div class="service-icon" style="margin: 0 auto 20px;"><i class="fab fa-whatsapp"></i></div>
                    <h3>WhatsApp Chat</h3>
                    <p>Quick and convenient messaging for bookings and inquiries.</p>
                    <a href="https://wa.me/919611120023" target="_blank" class="btn-hero" style="margin-top: 1rem;">Start Chat</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card text-center">
                    <div class="service-icon" style="margin: 0 auto 20px;"><i class="fas fa-envelope"></i></div>
                    <h3>Email Us</h3>
                    <p>Send detailed inquiries and we'll respond within 24 hours.</p>
                    <a href="mailto:info@shanvitoursandtravels.com" class="btn-hero" style="margin-top: 1rem;">Send Email</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Single source of truth for the FAQ copy — feeds both the visible accordion
// and the FAQPage structured data below, so the two can never drift apart.
$faqs = [
    [
        'q' => 'Where can I rent a mini bus in Bangalore?',
        'a' => "Shanvi Tours & Travels rents mini buses and buses directly, based out of SMV Layout, Nagadevanahalli, Bangalore. Book by phone, WhatsApp, or the form on this page — we're available 24/7."
    ],
    [
        'q' => 'Which bus is suitable for my group size?',
        'a' => 'We run four sizes: a 12+1 seater Tempo Traveller for small groups and families, a 21+1 seater Mini Bus for mid-size groups, a 33+1 seater Bus for larger groups, and a 49+1 seater Luxury Bus for the biggest events. Tell us your headcount and we\'ll recommend the right one.'
    ],
    [
        'q' => 'Can I rent a bus with a driver in Bangalore?',
        'a' => 'Yes — every vehicle comes with a professional, background-verified driver. We don\'t offer self-drive rentals.'
    ],
    [
        'q' => 'How much does a mini bus or bus rental cost in Bangalore?',
        'a' => 'Pricing depends on the vehicle size, trip distance, and duration — local, outstation, and multi-day trips are priced differently. Call or WhatsApp us with your route and group size for an exact quote.'
    ],
    [
        'q' => 'Do you provide AC mini buses and buses?',
        'a' => 'Yes, all four vehicles in our fleet are air-conditioned.'
    ],
    [
        'q' => 'Do you provide buses for weddings, corporate events, or school/college trips?',
        'a' => 'Yes — weddings, corporate travel, school and college trips, and pilgrimage tours are some of our most common bookings. See our Services page for what each vehicle size is best suited to.'
    ],
    [
        'q' => 'Which destinations do you cover from Bangalore?',
        'a' => 'We run outstation trips across Karnataka, Kerala, Tamil Nadu, Telangana, and Andhra Pradesh — including popular routes like Mysore, Coorg, Ooty, Wayanad, Hampi, and Tirupati.'
    ],
    [
        'q' => 'Do you provide one-way or round-trip bus rental?',
        'a' => 'Both. Outstation bookings can be one-way or round-trip, priced on a per-km or per-day basis depending on the route.'
    ],
    [
        'q' => 'What is your cancellation policy?',
        'a' => 'Cancellations made 24 hours before the scheduled pickup time are free of charge. Cancellations within 24 hours may incur a small fee. Please contact us for specific details.'
    ],
    [
        'q' => 'What payment methods do you accept?',
        'a' => 'We accept cash, UPI, bank transfers, credit/debit cards, and digital wallets. For corporate clients, we offer invoice-based billing with flexible payment terms.'
    ],
];
?>

<!-- FAQ Section -->
<section class="section-padding">
    <div class="container">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>Quick answers to common questions</p>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="faq-list">
                    <?php foreach ($faqs as $i => $faq): ?>
                    <div class="faq-item<?php echo $i === 0 ? ' is-open' : ''; ?>">
                        <button class="faq-question" type="button" aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>">
                            <span><?php echo htmlspecialchars($faq['q']); ?></span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p><?php echo htmlspecialchars($faq['a']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQPage structured data: lets AI answer engines (Google AI Overviews, ChatGPT, Perplexity) and rich results quote these answers directly -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        <?php foreach ($faqs as $i => $faq): ?>
        {
            "@type": "Question",
            "name": <?php echo json_encode($faq['q']); ?>,
            "acceptedAnswer": {
                "@type": "Answer",
                "text": <?php echo json_encode($faq['a']); ?>
            }
        }<?php echo $i < count($faqs) - 1 ? ',' : ''; ?>
        <?php endforeach; ?>
    ]
}
</script>

<?php include 'includes/footer.php'; ?>
