<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

<div class="container-fluid p-4 m-4 shadow mx-auto" style="max-width: 1000px;">
    <h4><i class="fa fa-user"></i> Profile</h4>

    <?php $this->view('includes/breadcrumb') ?>

    <div class="row">
        <div class="col-sm-4 col-md-3">
            <img src="<?= ROOT ?>/assets/images/male-avater.jpg" class="border border-primary d-block max-auto rounded circle" style="max-width: 200px;" alt="">
            <h3 class="text-center">John Black</h3>
        </div>
        <div class="col-sm-8 col-md-9 bg-light p-2">
            <table class="table table-hover table-striped table-borderd">
                <tr>
                    <th class="col-3">First Name:</th>
                    <td class="col-9">John</td>
                </tr>
                <tr>
                    <th>Last Name:</th>
                    <td>Black</td>
                </tr>
                <tr>
                    <th>Gender:</th>
                    <td>Male</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>johnblack@email.com</td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td>1234567890</td>
                </tr>
                <tr>
                    <th>Date Created:</th>
                    <td>25th Dec. 2025</td>
                </tr>
            </table>
        </div>
    </div>

    <hr>

    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Basic Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Classes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tests</a>
            </li>
        </ul>

        <nav class="navbar bg-light">
            <form class="container-fluid">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                </div>
            </form>
        </nav>
    </div>
</div>

<?php $this->view('includes/footer') ?>