<?php
// footer.php
?>

<style>
  /* General Reset */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  /* Footer Styling */
  .footer {
    background-color: #222;
    color: #fff;
    padding: 40px 20px;
    font-family: Arial, sans-serif;
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: space-between;
  }

  .footer .section {
    flex: 1;
    min-width: 250px;
    margin: 10px 0;
  }

  .footer h3 {
    font-size: 1.5em;
    margin-bottom: 20px;
    color: #f39c12;
  }

  .footer .links ul {
    list-style: none;
  }

  .footer .links ul li {
    margin: 10px 0;
  }

  .footer .links ul li a {
    text-decoration: none;
    color: #fff;
    font-size: 1em;
  }

  .footer .links ul li a:hover {
    color: #f39c12;
  }

  .footer .social-icons a {
    color: #fff;
    margin: 0 10px;
    font-size: 1.5em;
  }

  .footer .social-icons a:hover {
    color: #f39c12;
  }

  .footer .newsletter input[type="email"] {
    padding: 10px;
    border: none;
    width: 70%;
    margin-right: 10px;
    font-size: 1em;
  }

  .footer .newsletter button {
    padding: 10px 20px;
    background-color: #f39c12;
    border: none;
    color: #fff;
    font-size: 1em;
    cursor: pointer;
  }

  .footer .newsletter button:hover {
    background-color: #e67e22;
  }

  .footer-bottom {
    text-align: center;
    padding: 20px;
    background-color: #111;
    color: #aaa;
    font-size: 0.9em;
  }

  /* Cookie Consent Styling */
  #cookieConsent {
    position: fixed;
    bottom: 0;
    width: 100%;
    background: #222;
    color: #fff;
    padding: 10px;
    text-align: center;
  }

  #cookieConsent button {
    background-color: #f39c12;
    border: none;
    padding: 10px;
    color: #fff;
    cursor: pointer;
  }

  /* Back to Top Button */
  #backToTop {
    position: fixed;
    bottom: 20px;
    right: 20px;
    display: none;
    background-color: #f39c12;
    color: #fff;
    border: none;
    padding: 10px;
    cursor: pointer;
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .footer {
      flex-direction: column;
    }
  }
</style>

<div class="footer">
  <div class="section about">
    <h3>About Us</h3>
    <p>Welcome to our website!Urdu Mein Help offers top tools, blogging tips, and valuable Islamic resources. Your one-stop platform for digital knowledge and spiritual growth. Explore more on urdumeinhelp.com.</p>
  </div>

  <div class="section links">
    <h3>Quick Links</h3>
    <ul>
      <li><a href="<?php echo site_url('/about-us'); ?>">About</a></li>
    
     <li><a href="<?php echo site_url('/contact-us'); ?>">Contact</a></li>
        <li><a href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a></li>
      <li><a href="<?php echo site_url('/disclaimer'); ?>">disclaimer </a></li>
      <li><a href="<?php echo site_url('/terms-conditions'); ?>">Terms Conditions </a></li>
    </ul>
  </div>

  <div class="section social-icons">
    <h3>Follow Us</h3>
    <a href="https://facebook.com/urdumeinhelp1" target="_blank" aria-label="Follow us on Facebook"><i class="fab fa-facebook-f"></i></a>
    <a href="https://twitter.com/urdumeinhelp" target="_blank" aria-label="Follow us on Twitter"><i class="fab fa-twitter"></i></a>
    <a href="https://instagram.com/urdumeinhelp" target="_blank" aria-label="Follow us on Instagram"><i class="fab fa-instagram"></i></a>
    <a href="https://linkedin.com/urdumeinhelp" target="_blank" aria-label="Follow us on LinkedIn"><i class="fab fa-linkedin"></i></a>
  </div>

  <div class="section newsletter">
    <h3>Newsletter</h3>
    <form action="#" method="post">
      <input type="email" name="email" placeholder="Enter your email" required>
      <button type="submit">Subscribe</button>
    </form>
  </div>
</div>

<div class="footer-bottom">
  <p>&copy; <?php echo date("Y"); ?> UrduMeinHelp. All Rights Reserved.</p>
</div>

<!-- Back to Top Button -->
<button onclick="scrollToTop()" id="backToTop">Back to Top</button>

<!-- Cookie Consent -->
<div id="cookieConsent">
  <p>We use cookies to improve your experience on our site. <a href="/privacy-policy">Learn more</a></p>
  <button onclick="acceptCookies()">Accept</button>
</div>

<script>
  // Back to Top Button Functionality
  window.onscroll = function() {
    document.getElementById('backToTop').style.display = (window.scrollY > 300) ? 'block' : 'none';
  };

  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  // Cookie Consent Script
  function acceptCookies() {
    document.getElementById("cookieConsent").style.display = "none";
    localStorage.setItem("cookieAccepted", "true");
  }
  if (localStorage.getItem("cookieAccepted")) {
    document.getElementById("cookieConsent").style.display = "none";
  }

  // Hover Effect for Links
  document.querySelectorAll('.footer .links a').forEach(link => {
    link.addEventListener('mouseover', () => {
      link.style.color = '#e67e22';
    });
    link.addEventListener('mouseout', () => {
      link.style.color = '#fff';
    });
  });
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "urdumeinhelp",
  "url": "https://urdumeinhelp.com",
  "logo": "https://urdumeinhelp.com/home/assets/images/logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "whatsapp": "+17793392845",
    "contactType": "Customer Service"
  },
  "sameAs": [
    "https://facebook.com/urdumeinhelp1",
    "https://twitter.com/urdumeinhelp",
    "https://instagram.com/urdumeinhelp",
    "https://linkedin.com/urdumeinhelp"
  ]
}
</script>
