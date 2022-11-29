<?= $this->extend("layout/default") ?>
<!--title section-->
<?= $this->section("title")?> login <?= $this->endSection() ?>
<?= $this->section("body") ?>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php if (isset($validation)) : ?>
                       <div class="col-sm-6">
                           <div class="alert alert-danger" role="alert">
                                 <?= $validation->listErrors() ?>
                            </div>
                        </div>
                <?php endif; ?>
                <form class="row g-3" action="<?= base_url('login') ?>" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-sharp fa-solid fa-user"></i></span>
                                <input type="text" class="form-control" name="email" placeholder="Email" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1" role="button" onClick="togglePassword()"><i id="togglePassword" class="fa-sharp fa-solid fa-eye-slash"></i></span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-describedby="basic-addon1">
                            </div>
                        <div class="row">
                            <div class="col-md-6" >
                                <button type="submit" class="btn btn-outline-success">Login</button>
                            </div>
                            <div class="col-md-6">
                                <a class="forgot-password" href= "" >forgot password</a>
                            </div>
                        </div>
                </form>
                <hr/>
                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <a role="button" href="<?php echo base_url('register')?>" class="btn btn-outline-primary">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-4"></div>
</div>
<?= $this->endSection() ?>