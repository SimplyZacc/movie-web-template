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
            Some text to go right
        </div>
        <div class="contact-left">
            <form action="/">
                <h1>Contact Us</h1>
                <div class="info">
                    <input class="fname" type="text" name="name" placeholder="Full name">
                    <input type="text" name="name" placeholder="Email">
                    <input type="text" name="name" placeholder="Phone number">
                    <input type="text" name="name" placeholder="Website">
                </div>
                <p>Message</p>
                <div>
                    <textarea rows="4"></textarea>
                </div>
                <button type="submit" href="/">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include "templates/footer.php"; ?>