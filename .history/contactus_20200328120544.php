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
        </div>
        <div class="contact-left">
            <form action="/">
                <h3>Get In Touch</h3>
                <div class="info">
                    <p>Your Name</p>
                    <input type="text" name="name">
                    <p>Your Email</p>
                    <input type="text" name="name">
                    <p>Subject</p>
                    <input type="text" name="name">
                    <p>Your Message</p>
                    <input type="text" name="name" style="height: 200px">
                </div>
                <button type="submit" href="/">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include "templates/footer.php"; ?>