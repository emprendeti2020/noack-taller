<?php echo $this->extend("main/includes/principal.template.php") ?>

<?php echo $this->section("etms_main_page"); ?>

<!-- banner -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Improving workplace <span>Productivity.</span></h3>
                    <p>Hire. Train. Retain.</p>
                    <div class="agileits-button top_ban_agile">
                        <a class="btn btn-primary btn-lg" href="single.html">Read More »</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item item2">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Inspiring leadership <span>innovation.</span></h3>
                    <p>Hire. Train. Retain.</p>
                    <div class="agileits-button top_ban_agile">
                        <a class="btn btn-primary btn-lg" href="single.html">Read More »</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item item3">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Improving workplace <span>Productivity.</span></h3>
                    <p>Hire. Train. Retain.</p>
                    <div class="agileits-button top_ban_agile">
                        <a class="btn btn-primary btn-lg" href="single.html">Read More »</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item item4">
            <div class="container">
                <div class="carousel-caption">

                    <h3>Inspiring leadership <span>innovation.</span></h3>
                    <p>Hire. Train. Retain.</p>
                    <div class="agileits-button top_ban_agile">
                        <a class="btn btn-primary btn-lg scroll" href="#welcome" role="button">Read More »</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="fa fa-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="fa fa-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!-- The Modal -->
</div>
<!--//banner -->

<!--//search_form -->
<?php echo view("main/includes/about.template.php"); ?>
<!-- //banner-bottom -->

<div class="team_work_agile">
    <h4>Whether we play a large or small role, by working together we achieve our objectives.</h4>
</div>

<?php echo $this->endSection(); ?>