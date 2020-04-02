<?php
//set page vars
$title = "Blog";
//include page header
include "templates/header.php";
?>
<div class="contact-head">
    <div class="contact-head-body">
        <h2>Movies</h2>
        <hr>
        <p>Current movies showing.</p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="movie-border">
                <div class="movie-inside">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="movie-img">
                                <img src="assets/images/photo-manipulation-1825450.jpg" style="width: 10px; height: 10px;" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="movie-txt">
                                <div class="movie-header">
                                    <h4>
                                        A new alien movie
                                    </h4>
                                </div>
                                <div class="movie-info">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum tempus egestas sed sed risus pretium quam vulputate. Ultricies mi quis hendrerit dolor magna. Amet commodo nulla facilisi nullam vehicula ipsum a arcu. Lorem ipsum dolor sit amet consectetur adipiscing. Mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Elementum facilisis leo vel fringilla est. Ut porttitor leo a diam sollicitudin tempor id eu nisl. Pretium fusce id velit ut tortor pretium viverra suspendisse potenti. Ut consequat semper viverra nam libero justo.
                                </div>
                                <div class="movie-info-bottom">
                                    <span style="color: gold"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></span>
                                    <hr>
                                    <span class="blog-info"><i class="far fa-user"></i> Admin <span style="padding-left: 10px">&nbsp;</span> <i class="far fa-calendar-alt"></i> March 30, 2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="movie-border">
                <div class="movie-inside">
                    <div class="movie-img">

                    </div>
                    <div class="movie-txt">
                        <div class="movie-header">

                        </div>
                        <div class="movie-info">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "templates/footer.php"; ?>