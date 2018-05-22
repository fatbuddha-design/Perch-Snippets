<?php include('perch/runtime.php'); ?>

<?php
$contactDetails = perch_content_custom('Company Details', array(
'skip-template'=> true,
'page' => '/company_details.php'
));
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<?php perch_layout('head'); ?>


<?php perch_layout('header'); ?>


<?php perch_layout('nav'); ?>


<main id="content" class="content" role="main"><!-- main -->
    <h2><?php echo $contactDetails[0]['company_name']; ?> Sitemap</h2>
    <div class="sitemap-list">
        <?php perch_pages_navigation(array(
          'navgroup' =>'sitemap',
          'template' =>'sitemap_item',
          'hide-extensions' => true,
          'levels' => 2
        )); ?>
    </div>
</main><!-- main -->



<?php perch_layout('footer'); ?>
