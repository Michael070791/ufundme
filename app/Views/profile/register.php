<?= $this->extend("layout/default") ?>
<!--title section-->
<?= $this->section("title")?> register <?= $this->endSection() ?>
<?= $this->section("body") ?>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" id="universal-card">
    <div class="panel panel-default">
            <div class="panel-body">
                <?php if (isset($validation)) : ?>
                       <div class="col-sm-6">
                           <div class="alert alert-danger" role="alert">
                                 <?= $validation->listErrors() ?>
                            </div>
                        </div>
                <?php endif; ?>
                <h1 id="title">Register</h1>
                <form class="row" action="<?= base_url('register') ?>" method="post">
                            
                        <div class="col-sm-6 mb-3">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name" aria-describedby="basic-addon1">
                        </div>
                            
                            
                        <div class="col-sm-6 mb-3">
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" aria-describedby="basic-addon1">
                        </div>
                           
                        <div class="mb-3">
                            <input type="text" class="form-control" name="email" placeholder="Email" aria-describedby="basic-addon1">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="phone_number" placeholder="Phone Number" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1" role="button" onClick="togglePassword()"><i id="togglePassword"  class="fa-sharp fa-solid fa-eye-slash"></i></span>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-describedby="basic-addon1">
                        </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
<?= $this->endSection() ?>