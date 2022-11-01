<?= $this->extend("layout/default") ?>
<!--title section-->
<?= $this->section("title")?> register <?= $this->endSection() ?>
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
                <form class="" action="<?= base_url('register') ?>" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                <input type="text" class="form-control" name="first_name" placeholder="First Name" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-sm-6">  
                                <div class="form-group">
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone_number" placeholder="Phone Number" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1" role="button" onClick="togglePassword()"><a class="glyphicon glyphicon-eye-close"></a></span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6" >
                                <button type="submit" class="btn btn-primary">Sig up</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
<?= $this->endSection() ?>