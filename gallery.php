<?php
$page_title = "Fleet Gallery - Tempo Traveller, Mini Bus & Luxury Bus";
$page_description = "Our real fleet: 12+1 Tempo Traveller, 21+1 Mini Bus, 33+1 Bus & 49+1 Luxury Bus. Real photos, real seating capacity, all AC and GPS-tracked.";
$page_keywords = "tempo traveller rental bangalore, 12 seater tempo traveller, mini bus rental bangalore, 21 seater bus, 33 seater bus rental, 49 seater luxury bus bangalore, group travel bus bangalore";
include 'includes/header.php';

// Single source of truth for the fleet — feeds the gallery grid, the
// vehicle cards, and the Vehicle structured data below, so all three
// can never drift out of sync with each other.
$fleet = [
    [
        'name' => 'Tempo Traveller',
        'seats' => '12+1 Seater',
        'seat_count' => 13,
        'icon' => 'fa-shuttle-van',
        'exterior' => 'images/fleet/tempo-traveller-exterior.jpg',
        'interior' => 'images/fleet/tempo-traveller-interior.jpg',
        'plate' => 'KA 51 AM 0045',
        'desc' => 'Our most-booked vehicle for small groups and families. Pushback captain seats, curtained windows, and a roof-mounted AC make it ideal for weekend getaways, airport runs, and corporate pickups.',
        'ideal' => 'Best for: families, small groups, corporate pickups',
    ],
    [
        'name' => 'Mini Bus',
        'seats' => '21+1 Seater',
        'seat_count' => 22,
        'icon' => 'fa-bus-alt',
        'exterior' => 'images/fleet/mini-bus-exterior.jpg',
        'interior' => 'images/fleet/mini-bus-interior.jpg',
        'plate' => 'KA 51 AB 8485',
        'desc' => 'A Mercedes-chassis mini coach built by Singh Motor Coach Builders, right-sized for mid-size groups — college trips, office outings, and wedding parties that have outgrown a Tempo Traveller.',
        'ideal' => 'Best for: college trips, office outings, mid-size groups',
    ],
    [
        'name' => 'Bus',
        'seats' => '33+1 Seater',
        'seat_count' => 34,
        'icon' => 'fa-bus',
        'exterior' => 'images/fleet/bus-exterior.jpg',
        'interior' => 'images/fleet/bus-interior.jpg',
        'extra' => [
            ['src' => 'images/fleet/bus-city-street.jpg', 'label' => 'On a Bangalore city route'],
            ['src' => 'images/fleet/bus-road-angle.jpg', 'label' => 'On the road'],
        ],
        'plate' => 'KA 51 AL 7388',
        'desc' => 'A full-size touring coach with pushback reclining seats and generous legroom, built for long outstation routes across Karnataka, Kerala, Tamil Nadu, Telangana, and Andhra Pradesh.',
        'ideal' => 'Best for: outstation tours, large groups, pilgrimage trips',
    ],
    [
        'name' => 'Luxury Bus',
        'seats' => '49+1 Seater',
        'seat_count' => 50,
        'icon' => 'fa-gem',
        'exterior' => 'images/fleet/luxury-bus-exterior.jpg',
        'interior' => 'images/fleet/luxury-bus-interior.jpg',
        'extra' => [
            ['src' => 'images/fleet/luxury-bus-parked.jpg', 'label' => 'Parked and ready'],
            ['src' => 'images/fleet/luxury-bus-temple-1.jpg', 'label' => 'On a pilgrimage trip'],
            ['src' => 'images/fleet/luxury-bus-temple-2.jpg', 'label' => 'On a pilgrimage trip'],
        ],
        'plate' => 'KA 51 AL 4498',
        'desc' => 'Our flagship coach — premium upholstered seating, an onboard entertainment screen, and a red-carpet aisle, built for the largest groups: weddings, school batches, and multi-day South India tours.',
        'ideal' => 'Best for: weddings, school/college batches, large tours',
    ],
];
?>

<!-- Page Header -->
<section class="hero-section">
    <div class="carousel-item active">
        <img src="images/fleet/bus-exterior.jpg" alt="Shanvi Tours & Travels fleet — Bus, 33+1 seater">
        <div class="carousel-overlay">
            <div class="hero-content">
                <h1>Our Fleet Gallery</h1>
                <p>Real vehicles, real seating capacity — from a 12-seater to a 49-seater</p>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="section-padding">
    <div class="container">
        <div class="section-title">
            <span class="eyebrow">Our Fleet</span>
            <h2>Our Vehicle Collection</h2>
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

<!-- Vehicle Categories -->
<section class="section-padding" style="background: var(--light-bg);">
    <div class="container">
        <div class="section-title">
            <span class="eyebrow">Pick Your Fit</span>
            <h2>Our Fleet at a Glance</h2>
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
<section class="section-padding">
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
<section class="section-padding" style="background: linear-gradient(135deg, var(--brand-navy), var(--secondary-color)); color: white;">
    <div class="container text-center">
        <h2 style="color: white; font-size: 3rem; margin-bottom: 1.5rem;">Ready to Book a Vehicle?</h2>
        <p style="font-size: 1.3rem; margin-bottom: 2.5rem;">Choose your preferred vehicle and start your journey with us today</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="contact.php" class="btn-hero">Book Now</a>
            <a href="tel:9611120023" class="btn-hero-outline">Call: 9611120023</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
