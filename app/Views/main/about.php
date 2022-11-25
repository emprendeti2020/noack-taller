<?php echo $this->extend("main/includes/principal.template.php") ?>

<?php echo $this->section("etms_main_page"); ?>
<!-- banner -->
<div class="inner_page_agile">
    <h3>About Us</h3>
    <p>Add Some Short Description</p>
</div>
<!--//banner -->
<!--/w3_short-->
<div class="services-breadcrumb_w3layouts">
    <div class="inner_breadcrumb">

        <ul class="short_w3ls" _w3ls>
            <li><a href="index.php">Home</a><span>|</span></li>
            <li>About Us</li>
        </ul>
    </div>
</div>
<!--//search_form -->
<?php echo view("main/includes/about.template.php"); ?>
<!-- //banner-bottom -->
<?php echo $this->endSection(); ?>