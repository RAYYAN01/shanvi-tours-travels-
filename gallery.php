<?php
$page_title = "Fleet Gallery - Tempo Traveller, Mini Bus & Luxury Bus";
$page_description = "Our real fleet: 12+1 Tempo Traveller, 21+1 Mini Bus, 33+1 Bus & 49+1 Luxury Bus. Real photos, real seating capacity, all AC and GPS-tracked.";
$page_keywords = "mini bus rental bangalore, bus hire bangalore, 12 seater mini bus rental bangalore, 21 seater mini bus rental bangalore, 33 seater bus rental bangalore, 49 seater bus rental bangalore, mini bus with driver bangalore, bus rental near me";
include 'includes/header.php';
include 'includes/fleet-data.php';
?>

<!-- Page Header -->
<section class="hero-section">
    <div class="carousel-item active">
        <img src="images/fleet/bus-exterior.jpg" alt="Shanvi Tours & Travels fleet — Bus, 33+1 seater">
        <div class="carousel-overlay">
            <div class="hero-content">
                <h1>Mini Bus & Bus Rental Fleet — Bangalore</h1>
                <p>Real vehicles, real seating capacity — from a 12+1 seater to a 49+1 seater</p>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="section-padding">
    <div class="container">
        <div class="section-title">
            <span class="eyebrow">Our Fleet</span>
            <h2>Mini Bus & Bus Rental Vehicles</h2>
            <p>Every photo below is our own vehicle — no stock photography</p>
        </div>

        <div class="gallery-grid">
            <?php foreach ($fleet as $v): ?>
            <div class="gallery-item">
                <span class="trip-badge"><?php echo htmlspecialchars($v['name'] . ' · ' . $v['seats']); ?></span>
                <img src="<?php echo $v['exterior']; ?>" alt="<?php echo htmlspecialchars('Shanvi Tours & Travels ' . $v['name'] . ', ' . $v['seats'] . ' — exterior'); ?>" loading="lazy">
                <div class="gallery-overlay">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            <div class="gallery-item">
                <span class="trip-badge"><?php echo htmlspecialchars($v['name'] . ' Interior'); ?></span>
                <img src="<?php echo $v['interior']; ?>" alt="<?php echo htmlspecialchars('Shanvi Tours & Travels ' . $v['name'] . ' — interior seating'); ?>" loading="lazy">
                <div class="gallery-overlay">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            <?php foreach (($v['extra'] ?? []) as $photo): ?>
            <div class="gallery-item">
                <span class="trip-badge"><?php echo htmlspecialchars($v['name'] . ' · ' . $photo['label']); ?></span>
                <img src="<?php echo $photo['src']; ?>" alt="<?php echo htmlspecialchars('Shanvi Tours & Travels ' . $v['name'] . ' — ' . $photo['label']); ?>" loading="lazy">
                <div class="gallery-overlay">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section-padding" style="background: var(--brand-navy); color: white;">
    <div class="container text-center">
        <h2 style="color: white; font-size: clamp(1.6rem, 4vw, 3rem); margin-bottom: 1.5rem;">Like What You See?</h2>
        <p style="font-size: clamp(1rem, 2.5vw, 1.3rem); margin-bottom: 2.5rem;">Check seating capacity and pricing on our fleet page, or book directly</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="fleet.php" class="btn-hero">See Our Fleet</a>
            <a href="tel:9611120023" class="btn-hero-outline">Call: 9611120023</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
