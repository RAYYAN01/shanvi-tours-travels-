    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>About Shanvi Tours</h4>
                    <p>With over a decade of experience in the travel industry, Shanvi Tours & Travels has been Bangalore's trusted partner for all transportation needs. We pride ourselves on punctuality, safety, and exceptional customer service.</p>
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
                    <a href="gallery.php">Gallery</a>
                    <a href="contact.php">Contact</a>
                </div>
                
                <div class="footer-section">
                    <h4>Our Services</h4>
                    <a href="services.php#employee-transport">Employee Transport</a>
                    <a href="services.php#corporate">Corporate Services</a>
                    <a href="services.php#city-taxi">City Taxi Services</a>
                    <a href="services.php#car-rental">Car Rental</a>
                    <a href="services.php#outstation">Outstation Services</a>
                    <a href="services.php#package-tours">Package Tours</a>
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
            </div>
        </div>
    </footer>
    
    <!-- WhatsApp Float Button -->
    <div class="whatsapp-float">
        <a href="https://wa.me/919611120023" target="_blank" class="whatsapp-btn" aria-label="Chat on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
    
    <!-- Go to Top Button -->
    <div class="gotop-float">
        <button class="gotop-btn" onclick="scrollToTop()" aria-label="Go to top">
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>
    
    <!-- BreadcrumbList structured data: page context for AI answer engines and rich results -->
    <?php
    $breadcrumb_labels = [
        'index.php'    => 'Home',
        'about.php'    => 'About Us',
        'services.php' => 'Our Services',
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
