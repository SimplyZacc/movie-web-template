<?php
//set page vars
$title = "Index";
//include page header
include "templates/header.php";
?>   

<div class="index-head">
    <div class="contact-head-body">
    </div>
</div>

<div class="container">
    <div class="row">
        <table class="table table-striped table-bordered">
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
                    <td>Large Popcorn</td>
                    <td>16.00</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Medium Popcorn</td>
                    <td>12.00</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Small Popcorn</td>
                    <td>9.00</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Bacon Cheddar Cheeseburger, Fries & Drink Combo</td>
                    <td>34.00</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include "templates/footer.php";?>