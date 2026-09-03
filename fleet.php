<?php
$page_title = "Our Fleet - Tempo Traveller, Mini Bus, Bus & Luxury Bus";
$page_description = "Our fleet: 12+1 Tempo Traveller, 21+1 Mini Bus, 33+1 Bus & 49+1 Luxury Bus. Real vehicles, real seating capacity, all AC and GPS-tracked. Price on request.";
$page_keywords = "mini bus rental bangalore, bus hire bangalore, 12 seater mini bus rental bangalore, 21 seater mini bus rental bangalore, 33 seater bus rental bangalore, 49 seater bus rental bangalore, mini bus with driver bangalore, bus rental near me";
$no_hero = true;
include 'includes/header.php';
include 'includes/fleet-data.php';
?>

<!-- Vehicle Categories -->
<section class="section-padding section-padding-nav-offset">
    <div class="container">
        <div class="section-title">
            <span class="eyebrow">Pick Your Fit</span>
            <h1>Our Fleet at a Glance</h1>
            <p>Four vehicle sizes, one call away — choose by group size, not guesswork</p>
        </div>
        <div class="row g-4">
            <?php foreach ($fleet as $v): ?>
            <div class="col-md-6">
                <div class="service-card">
                    <div class="card-cover">
                        <img src="<?php echo $v['exterior']; ?>" alt="<?php echo htmlspecialchars($v['name'] . ', ' . $v['seats']); ?>" loading="lazy" width="400" height="200">
                    </div>
                    <div class="service-icon"><i class="fas <?php echo $v['icon']; ?>"></i></div>
                    <h3><?php echo htmlspecialchars($v['name']); ?> — <?php echo htmlspecialchars($v['seats']); ?></h3>
                    <p><?php echo htmlspecialchars($v['desc']); ?></p>
                    <p style="color: var(--primary-color); font-weight: 600; margin-top: 0.5rem;"><?php echo htmlspecialchars($v['ideal']); ?></p>
                    <a href="contact.php" class="btn-price" style="margin-top: 1rem;">Price on Request</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Vehicle structured data — lets AI answer engines and rich results
     answer "does Shanvi have a 49-seater bus" style queries directly. -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "itemListElement": [
        <?php foreach ($fleet as $i => $v): ?>
        {
            "@type": "ListItem",
            "position": <?php echo $i + 1; ?>,
            "item": {
                "@type": "Vehicle",
                "name": <?php echo json_encode('Shanvi Tours & Travels ' . $v['name']); ?>,
                "vehicleSeatingCapacity": <?php echo $v['seat_count']; ?>,
                "image": <?php echo json_encode($site_url . '/' . $v['exterior']); ?>,
                "description": <?php echo json_encode($v['desc']); ?>,
                "provider": { "@type": "TravelAgency", "name": "Shanvi Tours & Travels" }
            }
        }<?php echo $i < count($fleet) - 1 ? ',' : ''; ?>
        <?php endforeach; ?>
    ]
}
</script>

<!-- Features -->
<section class="section-padding" style="background: var(--light-bg);">
    <div class="container">
        <div class="section-title">
            <h2>Vehicle Features</h2>
            <p>All our vehicles come with premium amenities</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <h4><i class="fas fa-snowflake" style="color: var(--primary-color);"></i></h4>
                    <h5 style="font-size: 1.2rem; margin: 1rem 0;">Air Conditioned</h5>
                    <p>Climate control for comfortable journeys</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <h4><i class="fas fa-music" style="color: var(--primary-color);"></i></h4>
                    <h5 style="font-size: 1.2rem; margin: 1rem 0;">Entertainment</h5>
                    <p>Music systems and Bluetooth connectivity</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <h4><i class="fas fa-shield-alt" style="color: var(--primary-color);"></i></h4>
                    <h5 style="font-size: 1.2rem; margin: 1rem 0;">Safety First</h5>
                    <p>Airbags, seat belts, and safety features</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <h4><i class="fas fa-broom" style="color: var(--primary-color);"></i></h4>
                    <h5 style="font-size: 1.2rem; margin: 1rem 0;">Hygiene</h5>
                    <p>Clean and sanitized vehicles</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <h4><i class="fas fa-map-marked-alt" style="color: var(--primary-color);"></i></h4>
                    <h5 style="font-size: 1.2rem; margin: 1rem 0;">GPS Tracking</h5>
                    <p>Real-time location tracking</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <h4><i class="fas fa-couch" style="color: var(--primary-color);"></i></h4>
                    <h5 style="font-size: 1.2rem; margin: 1rem 0;">Comfortable Seats</h5>
                    <p>Plush, adjustable seating</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <h4><i class="fas fa-suitcase" style="color: var(--primary-color);"></i></h4>
                    <h5 style="font-size: 1.2rem; margin: 1rem 0;">Luggage Space</h5>
                    <p>Ample storage for your belongings</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <h4><i class="fas fa-charging-station" style="color: var(--primary-color);"></i></h4>
                    <h5 style="font-size: 1.2rem; margin: 1rem 0;">Charging Points</h5>
                    <p>USB and mobile charging facilities</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section-padding" style="background: var(--brand-navy); color: white;">
    <div class="container text-center">
        <h2 style="color: white; font-size: clamp(1.6rem, 4vw, 3rem); margin-bottom: 1.5rem;">Ready to Book a Vehicle?</h2>
        <p style="font-size: clamp(1rem, 2.5vw, 1.3rem); margin-bottom: 2.5rem;">Choose your preferred vehicle and start your journey with us today</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="contact.php" class="btn-hero">Book Now</a>
            <a href="tel:9611120023" class="btn-hero-outline">Call: 9611120023</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
