<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

<div class="container-fluid">
    <h3><i class="fa fa-home"></i>This is a home page</h3>
</div>

<?php
    echo "<pre>";
    print_r($rows);
?>

<?php $this->view('includes/footer') ?>