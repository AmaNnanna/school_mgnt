<?php $this->view('includes/header') ?>

<div class="container-fluid">

    <div class="mt-5 p-4 mx-auto shadow rounded" style="width: 100%; max-width: 310px">
        <h2 class="text-center">My School</h2>
        <img src="<?= ROOT ?>/assets/images/logo.jpg" alt="My School logo" class="border border-primary d-block mx-auto rounded-circle" style="width: 100px;">
        <h3 class="text-center">Signup Page</h3>

        <input class="my-2 form-control" type="text" name="first_name" placeholder="Enter First Name">
        <input class="my-2 form-control" type="text" name="last_name" placeholder="Enter Last Name">
        <input class="my-2 form-control" type="email" name="email" placeholder="Create an Email">

        <select class="my-2 form-control" name="" id="">
            <option value="">--Select Gender--</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <select class="my-2 form-control" name="" id="">
            <option value="">--Select Role--</option>
            <option value="admin">Admin</option>
            <option value="teacher">Teacher</option>
            <option value="student">Student</option>
        </select>

        <input class="my-2 form-control" type="password" name="password" placeholder="Create Password">
        <input class="my-2 form-control" type="password" name="confirm_password" placeholder="Confirm Password">

        <button class="btn btn-primary float-end">Add User</button>
        <button class="btn btn-danger">Cancel</button>
    </div>
</div>

<?php $this->view('includes/footer') ?>