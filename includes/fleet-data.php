<?php
// Single source of truth for the fleet — shared by fleet.php (vehicle
// cards + pricing CTA + schema) and gallery.php (photo grid), so both
// pages can never drift out of sync with each other.
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
