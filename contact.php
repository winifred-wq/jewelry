
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Winnie's Collection · Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="work.css" />
</head>
<body>
    <div class="container">

        <!-- TOP BAR -->
        <header class="top-bar">
            <div class="logo">
                <i class="fas fa-gem"></i>
                Winnie's <span>Collection</span>
            </div>
            <div class="nav-links">
                <a href="index.html">Home</a>
                <a href="rings.html">Rings</a>
                <a href="necklaces.html">Necklaces</a>
                <a href="earrings.html">Earrings</a>
                <a href="bracelets.html">Bracelets</a>
                <a href="watches.html">Watches</a>
                <a href="anklets.html">Anklets</a>
                <a href="about.html">About</a>
                <a href="contact.php" class="active">Contact</a>
            </div>
            
        </header>

        <!-- PAGE TITLE -->
        <h2 style="text-align:center;">Get in touch</h2>
        <div class="section-sub" style="text-align:center;"><b>we'd love to hear from you</b></div>

        <!-- SUCCESS / ERROR MESSAGES -->
        <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
            <div style="background: #d4edda; color: #155724; padding: 1rem; border-radius: 1rem; margin-bottom: 1.5rem; text-align: center; border: 1px solid #c3e6cb;">
                ✅ Thank you! Your inquiry has been sent. We'll get back to you within 24 hours.
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
            <div style="background: #f8d7da; color: #721c24; padding: 1rem; border-radius: 1rem; margin-bottom: 1.5rem; text-align: center; border: 1px solid #f5c6cb;">
                ❌ Sorry, something went wrong. Please try again or WhatsApp us directly.
            </div>
        <?php endif; ?>

        <!-- CONTACT GRID -->
        <div class="contact-grid" style="display:grid; grid-template-columns:1fr 1.5fr; gap:3rem; margin:2rem 0 3rem;">

            <!-- LEFT: CONTACT INFO - CENTERED -->
            <div class="contact-info" style="display:flex; justify-content:center; align-items:center;">
                <div style="display:flex; gap:1.8rem; flex-direction:column; text-align:center; width:100%; max-width:400px;">

                    <!-- Showroom -->
                    <div>
                        <i class="fas fa-map-pin" style="color:#c9a96e; font-size:1.8rem;"></i>
                        <strong style="font-weight:600; display:block; margin-top:0.3rem; font-size:1.1rem;">Visit our showroom</strong>
                        <p style="color:#5b4f47; margin-top:0.2rem; line-height:1.6;">
                            Rubaga, Kabaka Njagala Road<br />
                            Kampala, Uganda
                        </p>
                    </div>

                    <!-- Email -->
                    <div>
                        <i class="fas fa-envelope" style="color:#c9a96e; font-size:1.8rem;"></i>
                        <strong style="font-weight:600; display:block; margin-top:0.3rem; font-size:1.1rem;">Email</strong>
                        <p style="color:#5b4f47; margin-top:0.2rem;">
                            <a href="mailto:winifrednakimuli42@gmail.com" style="color:#5b4f47; text-decoration:none;">
                                winifrednakimuli42@gmail.com
                            </a>
                        </p>
                    </div>

                    <!-- Phone -->
                    <div>
                        <i class="fas fa-phone" style="color:#c9a96e; font-size:1.8rem;"></i>
                        <strong style="font-weight:600; display:block; margin-top:0.3rem; font-size:1.1rem;">Call us</strong>
                        <p style="color:#5b4f47; margin-top:0.2rem;">
                            <a href="tel:+256764401996" style="color:#5b4f47; text-decoration:none;">
                                +256 764 401 996
                            </a>
                        </p>
                    </div>

                    <!-- WhatsApp -->
                    <div>
                        <i class="fab fa-whatsapp" style="color:#25D366; font-size:2rem;"></i>
                        <strong style="font-weight:600; display:block; margin-top:0.3rem; font-size:1.1rem;">WhatsApp</strong>
                        <p style="color:#5b4f47; margin-top:0.2rem;">
                            <a href="https://wa.me/256780320648" target="_blank" style="color:#25D366; text-decoration:none; font-weight:500; font-size:1.1rem;">
                                +256 780 320 648
                            </a>
                        </p>
                    </div>

                    <!-- Hours -->
                    <div>
                        <i class="fas fa-clock" style="color:#c9a96e; font-size:1.8rem;"></i>
                        <strong style="font-weight:600; display:block; margin-top:0.3rem; font-size:1.1rem;">Opening Hours</strong>
                        <p style="color:#5b4f47; margin-top:0.2rem; line-height:1.6;">
                            Mon–Sat: 10am – 7pm<br />
                            Sunday: Closed
                        </p>
                    </div>

                    <!-- Note -->
                    <div style="margin-top:0.5rem; background:#faf3ed; padding:1.2rem; border-radius:1rem; border-left:4px solid #c9a96e; text-align:left;">
                        <p style="color:#5b4f47; font-size:0.95rem;">
                            <strong>💎 How to buy:</strong> Call, WhatsApp, or email us with the product name. We'll respond within 24 hours.
                        </p>
                    </div>

                </div>
            </div>

            <!-- RIGHT: CONTACT FORM -->
            <div class="contact-form">
                <form action="send-mail.php" method="POST" style="display:flex; flex-direction:column; gap:1.2rem;">

                    <div style="display:flex; gap:1rem; flex-wrap:wrap;">
                        <input type="text" name="Name" placeholder="Your name" style="flex:1; padding:0.9rem 1.2rem; border:1px solid #ddd6ce; border-radius:40px; background:#fcf9f6; font-size:1rem;" required />
                        <input type="email" name="Email" placeholder="Email address" style="flex:1; padding:0.9rem 1.2rem; border:1px solid #ddd6ce; border-radius:40px; background:#fcf9f6; font-size:1rem;" required />
                    </div>

                    <input type="tel" name="Phone" placeholder="Phone number" style="padding:0.9rem 1.2rem; border:1px solid #ddd6ce; border-radius:40px; background:#fcf9f6; font-size:1rem;" required />

                    <select name="Category" style="padding:0.9rem 1.2rem; border:1px solid #ddd6ce; border-radius:40px; background:#fcf9f6; font-size:1rem; color:#5b4f47; appearance:none; cursor:pointer;" required>
                        <option value="">-- Select a product category --</option>
                        <option value="Rings">Rings</option>
                        <option value="Necklaces">Necklaces</option>
                        <option value="Earrings">Earrings</option>
                        <option value="Bracelets">Bracelets</option>
                        <option value="Watches">Watches</option>
                        <option value="Anklets">Anklets</option>
                    </select>

                    <input type="text" name="Product" placeholder="Product name (e.g., Diamond Stud Earrings)" style="padding:0.9rem 1.2rem; border:1px solid #ddd6ce; border-radius:40px; background:#fcf9f6; font-size:1rem;" required />

                    <textarea name="Message" rows="4" placeholder="Your message..." style="padding:1rem 1.2rem; border:1px solid #ddd6ce; border-radius:1.5rem; background:#fcf9f6; font-size:1rem; resize:vertical;" required></textarea>

                    <button type="submit" class="btn" style="align-self:flex-start; cursor:pointer; padding:0.8rem 2.5rem;">Send Inquiry</button>

                </form>
            </div>

        </div>

        <!-- FOOTER -->
        <footer>
            <div>&copy; 2026 Winnie's Collection — luxury jewelry boutique</div>
            
        </footer>

    </div>
<a href="https://wa.me/256780320648?text=Hi%2C%20I%27m%20interested%20in%20one%20of%20your%20products"
   target="_blank"
   style="
     position: fixed;
     bottom: 25px;
     right: 25px;
     background: #25D366;
     color: #fff;
     width: 60px;
     height: 60px;
     border-radius: 50%;
     display: flex;
     align-items: center;
     justify-content: center;
     font-size: 2rem;
     box-shadow: 0 4px 12px rgba(0,0,0,0.25);
     z-index: 1000;
     text-decoration: none;
   ">
   <i class="fab fa-whatsapp"></i>
</a>

</body>
</html>
