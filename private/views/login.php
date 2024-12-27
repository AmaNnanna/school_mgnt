<?php $this->view('includes/header') ?>

<div class="container-fluid">

    <div class="mt-5 p-4 mx-auto shadow rounded" style="width: 100%; max-width: 310px">
        <h2 class="text-center">My School</h2>
        <img src="<?= ROOT ?>/assets/images/logo.jpg" alt="My School logo" class="border border-primary d-block mx-auto rounded-circle" style="width: 100px;">
        <h3 class="text-center">Login Page</h3>
        <input class="form-control" type="email" name="email" placeholder="Enter Your Email" autofocus> <br>
        <input class="form-control" type="password" name="password" placeholder="Enter Your Password"> <br>
        <button class="btn btn-primary d-block mx-auto">Login</button>
    </div>
</div>

<?php $this->view('includes/footer') ?>