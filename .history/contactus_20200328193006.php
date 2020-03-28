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
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            
            <div  class="contact-card">
                <div class="card" class="contact-card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
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