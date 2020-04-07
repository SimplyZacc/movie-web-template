<?php
//set page vars
$title = "Index";
//include page header
include "templates/header.php";
?>

<div class="contact-head">
    <div class="contact-head-body">
        <h2>Menu</h2>
        <hr>
        <p>Price of all food items.</p>
    </div>
</div>

<div class="container">
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Food Name</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include "templates/footer.php"; ?>