    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>About Shanvi Tours</h4>
                    <p>Bangalore-based mini bus and bus rental company — a 12+1 Tempo Traveller, 21+1 Mini Bus, 33+1 Bus, and 49+1 Luxury Bus, with drivers, for corporate, wedding, school, pilgrimage, and outstation trips.</p>
                    <div class="social-links">
                        <a href="https://facebook.com" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://instagram.com" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="services.php">Our Services</a>
                    <a href="fleet.php">Our Fleet</a>
                    <a href="gallery.php">Gallery</a>
                    <a href="contact.php">Contact</a>
                </div>
                
                <div class="footer-section">
                    <h4>Bus Rental Services</h4>
                    <a href="services.php#employee-transport">Employee Transport</a>
                    <a href="services.php#corporate">Corporate Bus Rental</a>
                    <a href="services.php#wedding">Wedding Bus Rental</a>
                    <a href="services.php#school-college">School &amp; College Trips</a>
                    <a href="services.php#outstation">Outstation Bus Rental</a>
                    <a href="services.php#package-tours">Pilgrimage &amp; Package Tours</a>
                </div>
                
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <p><i class="fas fa-map-marker-alt"></i> #2472/1, 3rd Block, SMV Layout,<br>Doddabasthihalli, Near Vijaya Hospital,<br>Nagadevanahalli, Bangalore - 560056</p>
                    <p><i class="fas fa-phone"></i> <a href="tel:9611120023">9611120023</a></p>
                    <p><i class="fas fa-phone"></i> <a href="tel:8050507333">8050507333</a></p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:info@shanvitoursandtravels.com">info@shanvitoursandtravels.com</a></p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Shanvi Tours & Travels. All Rights Reserved.</p>
                <p style="font-size: 0.75rem; opacity: 0.6; margin-top: 0.4rem;">Home page photo credits: mountain sunrise by LiteraryDP, Pondicherry sea sunrise by Mkamath1976 &mdash; Wikimedia Commons (<a href="https://creativecommons.org/licenses/by-sa/4.0" target="_blank" rel="noopener" style="color: inherit; text-decoration: underline;">CC BY-SA</a>)</p>
            </div>
        </div>
    </footer>
    
    <!-- WhatsApp Float Button -->
    <div class="whatsapp-float">
        <a href="https://wa.me/919611120023" target="_blank" class="whatsapp-btn" aria-label="Chat on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Call Float Button -->
    <div class="call-float">
        <a href="tel:+919611120023" class="call-btn" aria-label="Call Shanvi Tours & Travels">
            <i class="fas fa-phone"></i>
        </a>
    </div>

    <!-- BreadcrumbList structured data: page context for AI answer engines and rich results -->
    <?php
    $breadcrumb_labels = [
        'index.php'    => 'Home',
        'about.php'    => 'About Us',
        'services.php' => 'Our Services',
        'fleet.php'    => 'Our Fleet',
        'gallery.php'  => 'Gallery',
        'contact.php'  => 'Contact',
    ];
    $current_file = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    $breadcrumb_items = [['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $site_url . '/index.php']];
    if ($current_file !== 'index.php' && isset($breadcrumb_labels[$current_file])) {
        $breadcrumb_items[] = [
            '@type' => 'ListItem',
            'position' => 2,
            'name' => $breadcrumb_labels[$current_file],
            'item' => $site_url . '/' . $current_file,
        ];
    }
    ?>
    <script type="application/ld+json">
    <?php echo json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $breadcrumb_items,
    ], JSON_UNESCAPED_SLASHES); ?>
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>
</html>
