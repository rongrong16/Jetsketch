
<?php 
    session_start();
    require "./includes/head.php" 
?>

<section class="aboutus">
    <section class="breadcrumb breadcrumb_bg">
        <div class="decorative-shape shape-1"></div>
        <div class="decorative-shape shape-2"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>About Us</h2>
                            <p>Home <span style="margin: 0 10px; opacity: 0.7;">•</span> About Us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="company">
        <div class="companybackground">
            <div class="company-intro">
                <div class="intro-card">
                    <h3>Welcome to JetSketch</h3>
                    <p><strong>JetSketch</strong> is a revolutionary digital art platform that seamlessly transforms your hand-drawn sketches into stunning digital masterpieces. Our cutting-edge system empowers artists of all levels—from seasoned professionals to passionate students and creative hobbyists—to bridge the timeless charm of traditional sketching with the limitless possibilities of modern digital artistry.</p>
                    <br>
                    <p>Simply sketch your vision on paper, capture it with your camera or scanner, and witness the magic as our advanced image processing technology breathes new life into your creations. We enhance colors, refine lines, and add digital polish while preserving the authentic soul and emotional connection that makes hand-drawn art so special.</p>
                    <br>
                    <p>At JetSketch, we believe in celebrating the raw authenticity of pencil-to-paper creativity while providing innovative tools to share, edit, and showcase your artwork in our interconnected digital world. Our mission is to honor the personal touch and heartfelt expression of traditional sketching while unlocking the extraordinary potential that digital enhancement offers.</p>
                </div>
            </div>
        </div>

        <!-- Enhanced Gallery Section -->
        <div class="sketches-gallery">
            <h3 class="gallery-title">Featured Hand-Drawn Artwork</h3>
            
            <div class="gallery-grid">
                <div class="sketch-card">
                    <img src="img/about/port-study.jpg" alt="Portrait Sketch">
                    <div class="card-body">
                        <h5 class="card-title">Portrait Study</h5>
                        <p class="card-text">A masterful pencil portrait showcasing realistic shading techniques and meticulous attention to facial features, expressions, and human emotion captured through traditional artistry.</p>
                    </div>
                    <div class="card-footer">
                        <small>Pencil on Paper</small>
                    </div>
                </div>
                
                <div class="sketch-card">
                    <img src="img/about/nature.jpg" alt="Landscape Sketch">
                    <div class="card-body">
                        <h5 class="card-title">Nature Landscape</h5>
                        <p class="card-text">A breathtaking landscape drawing that captures nature's serene beauty through flowing lines and organic forms, demonstrating the perfect canvas for digital enhancement.</p>
                    </div>
                    <div class="card-footer">
                        <small>Charcoal Drawing</small>
                    </div>
                </div>
                
                <div class="sketch-card">
                    <img src="img/about/abstract.jpg" alt="Abstract Sketch">
                    <div class="card-body">
                        <h5 class="card-title">Abstract Composition</h5>
                        <p class="card-text">An experimental abstract masterpiece featuring dynamic geometric shapes and flowing curves that showcase the incredible versatility and creative potential of hand-drawn art.</p>
                    </div>
                    <div class="card-footer">
                        <small>Ink & Pencil</small>
                    </div>
                </div>
            </div>
            
            <div class="featured-grid">
                <div class="sketch-card featured-card">
                    <img src="img/about/char.jpg" alt="Character Design">
                    <div class="card-body">
                        <h5 class="card-title">Character Design</h5>
                        <p class="card-text">Innovative character illustrations demonstrating how JetSketch transforms initial concept sketches into polished, professional digital artwork perfect for animation, gaming, and commercial applications.</p>
                    </div>
                    <div class="card-footer">
                        <small>Digital Sketch</small>
                    </div>
                </div>
                
                <div class="sketch-card featured-card">
                    <img src="img/about/graphite.jpg" alt="Still Life Study">
                    <div class="card-body">
                        <h5 class="card-title">Still Life Study</h5>
                        <p class="card-text">A timeless still life drawing showcasing classical sketching techniques and artistic fundamentals that can be beautifully enhanced and permanently preserved through our digital platform.</p>
                    </div>
                    <div class="card-footer">
                        <small>Graphite Drawing</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Add smooth scrolling and intersection observer for animations
document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe all cards for scroll animations
    document.querySelectorAll('.sketch-card, .intro-card').forEach(card => {
        observer.observe(card);
    });

    // Add hover sound effect (optional)
    document.querySelectorAll('.sketch-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transition = 'all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
        });
    });
});
</script>

    <?php require "./includes/footer.php" ?>

    <script src="js/jquery-1.12.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/masonry.pkgd.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/custom.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7721ac2eee593390","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>

</html>
