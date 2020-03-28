<?php
//set page vars
$title = "Contact Us";
//include page header
include "templates/header.php";
?>

<div class="contact-head">
    <div class="contact-head-body">
        <h2>CONTACT US</h2>
        <hr>
        <p>We offer many ways you can contact us.</p>
    </div>
</div>

<div class="contact-body">
    <div class="contact-body-sub">
        <div class="contact-right">
            <div class="contact-card">
                <div class="card" class="contact-card">
                    <div class="card-body">
                        <h5 class="card-title">Contact Us</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Limegrove Lifestyle Centre, Holetown <br> Barbados</h6>
                        <p class="card-text"><b>Phone:</b> 420-2000</p>
                        <p class="card-text"><b>Reservatuibs:</b> 271-0071</p>
                        <p class="card-text"><b>Email:</b> manager@limegrovecinemas.com</p>
                    </div>
                </div>
            </div>

            <div  class="contact-card">
                <div class="card" class="contact-card">
                    <div class="card-body">
                        <h5 class="card-title">Newsletter</h5>
                        <p class="card-text">Subscribe to our mailing list to get latest movie news to your email inbox!</p>
                        <input type="text" name="newsletter" placeholder="Your email address" class="contact-form-input">
                        <button type="submit" class="contact-form-button">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-left">
            <form action="/">
                <div class="contact-form-info">
                    <div class="contact-form-info2">
                        <h3 style="padding-top: 20px">Get In Touch</h3>
                        <p class="contact-form-text">Your Name</p>
                        <input type="text" name="name" class="contact-form-input">
                        <p class="contact-form-text">Your Email</p>
                        <input type="text" name="email" class="contact-form-input">
                        <p class="contact-form-text">Subject</p>
                        <input type="text" name="subject" class="contact-form-input">
                        <p class="contact-form-text">Your Message</p>
                        <input type="text" name="message" class="contact-form-textbox">
                        <br>
                        <button type="submit" class="contact-form-button">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include "templates/footer.php"; ?>