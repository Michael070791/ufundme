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
                <form class="" action="<?= base_url('login') ?>" method="post">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-user"></a></span>
                                <input type="text" class="form-control" name="email" placeholder="Email" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1" role="button" onClick="togglePassword()"><a class="glyphicon glyphicon-eye-close"></a></span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" >
                                <button type="submit" class="btn btn-success">Login</button>
                            </div>
                            <div class="col-md-6">
                                <a class="forgot-password" href= "" >forgot password</a>
                            </div>
                        </div>
                </form>
                <hr/>
                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <a role="button" href="<?php echo base_url('register')?>" class="btn btn-default">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-4"></div>
</div>
<?= $this->endSection() ?>