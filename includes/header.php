<?php
// Per-page SEO overrides. Each page sets $page_title / $page_description / $page_keywords
// before including this file; sensible site-wide defaults are used otherwise.
$site_name   = 'Shanvi Tours & Travels';
$site_url    = 'https://www.shanvitoursandtravels.com';
$page_title       = isset($page_title) ? $page_title : 'Mini Bus & Bus Rental Bangalore - 12 to 49 Seater, With Driver';
$page_description = isset($page_description) ? $page_description : "Shanvi Tours & Travels: mini bus and bus rental in Bangalore since 2013. 12+1, 21+1, 33+1 & 49+1 seater vehicles with driver for corporate, wedding, school & outstation trips.";
$page_keywords    = isset($page_keywords) ? $page_keywords : 'mini bus rental bangalore, bus rental bangalore, bus hire bangalore, mini bus hire bangalore, tourist bus rental bangalore, bus rental near me, corporate bus rental bangalore';
$current_path      = isset($_SERVER['REQUEST_URI']) ? strtok($_SERVER['REQUEST_URI'], '?') : '/index.php';
$canonical_url      = $site_url . $current_path;
$og_image           = $site_url . '/images/img_1.jpeg';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?> | <?php echo htmlspecialchars($site_name); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="author" content="Shanvi Tours & Travels">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">

    <!-- Geo / local-business signals (GEO) -->
    <meta name="geo.region" content="IN-KA">
    <meta name="geo.placename" content="Bangalore">
    <meta name="geo.position" content="12.9634;77.5099">
    <meta name="ICBM" content="12.9634, 77.5099">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($site_name); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?> | <?php echo htmlspecialchars($site_name); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($og_image); ?>">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?> | <?php echo htmlspecialchars($site_name); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($og_image); ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/fav.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Preconnect to third-party origins used above the fold -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo filemtime(__DIR__ . '/../css/style.css'); ?>">

    <!-- LocalBusiness / TravelAgency structured data (site-wide, powers GEO / AI answer citations) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "TravelAgency",
        "name": "Shanvi Tours & Travels",
        "description": "Mini bus and bus rental company in Bangalore providing 12+1, 21+1, 33+1 and 49+1 seater vehicles with driver for corporate, wedding, school, college, pilgrimage and outstation travel.",
        "image": "<?php echo htmlspecialchars($og_image); ?>",
        "logo": "<?php echo htmlspecialchars($site_url); ?>/images/logo.png",
        "url": "<?php echo htmlspecialchars($site_url); ?>",
        "telephone": "+91-9611120023",
        "priceRange": "₹₹",
        "knowsAbout": ["Mini Bus Rental", "Bus Rental", "Tourist Bus Hire", "Corporate Bus Rental", "Wedding Bus Rental", "School and College Trip Bus Rental", "Pilgrimage Bus Rental", "Outstation Bus Rental"],
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "#2472/1, 3rd Block, SMV Layout, Doddabasthihalli, Near Vijaya Hospital, Nagadevanahalli",
            "addressLocality": "Bangalore",
            "addressRegion": "Karnataka",
            "postalCode": "560056",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 12.9634,
            "longitude": 77.5099
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "00:00",
            "closes": "23:59"
        },
        "areaServed": [
            { "@type": "City", "name": "Bangalore" },
            { "@type": "State", "name": "Karnataka" },
            { "@type": "State", "name": "Kerala" },
            { "@type": "State", "name": "Tamil Nadu" },
            { "@type": "State", "name": "Telangana" },
            { "@type": "State", "name": "Andhra Pradesh" }
        ],
        "serviceArea": {
            "@type": "GeoCircle",
            "geoMidpoint": { "@type": "GeoCoordinates", "latitude": 12.9634, "longitude": 77.5099 },
            "geoRadius": "40000"
        },
        "sameAs": [
            "https://facebook.com",
            "https://instagram.com",
            "https://twitter.com",
            "https://linkedin.com"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+91-9611120023",
            "contactType": "customer service",
            "areaServed": "IN",
            "availableLanguage": ["en", "kn", "hi"]
        }
    }
    </script>
</head>
<body<?php echo !empty($no_hero) ? ' data-no-hero="true"' : ''; ?>>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="Shanvi Tours & Travels Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fleet.php">Our Fleet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
