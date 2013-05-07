
<?php $title = $company['company_name'] ?>

<?php ob_start() ?>
    <h1><?php echo $company['company_name'] ?></h1>
<pre>
<?php var_export($company); ?>
</pre>
<?php $content = ob_get_clean() ?>


<?php require(TEMPLATES_DIR . '/layout.php'); ?>