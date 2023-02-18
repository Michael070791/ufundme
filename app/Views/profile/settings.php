<?= $this->extend("layout/default") ?>
<!--title section-->
<?= $this->section("title")?> settings <?= $this->endSection() ?>
<?= $this->section("body") ?>
<div class="row">
    <div class="col-sm-4">
        <form  enctype='multipart/form-data' action="<?= base_url('settings/'.$user['id']) ?>?>" class="row g-3" method="post">
            <div class="mb-3">
                <?php if(!is_null($user['image'])):?>
                    <img class="img-thumbnail" id="ajaxImgUpload" alt="Preview Image" src="<?php echo base_url($user['image']);?>" />
                <?php else:?>
                    <img class="img-thumbnail" id="ajaxImgUpload" alt="Preview Image" src="<?php echo base_url("assets/images/User.png");?>" />
                <?php endif;?>
            </div>
                <div class="col-sm-6">
                    <input type="file" class="form-control form-control-sm" accept="image/*" onchange="onFileUpload(this);" name="file" id="formFile">
                </div>
                <div class="col-sm-6">
                    <button type="submit" name="uploadUserImage" class="btn btn-outline-primary btn-sm" value="Upload"><i class="fa-solid fa-arrow-up-from-bracket"></i></button>
                </div>
        </form>
    </div>
    <div class="col-sm-4">
        <form action="" class="row g-3" action="<?= base_url('settings/'.$user['id']) ?>?>" method="post">
            <input type="password" class="form-control" id="password" name="oldPassword" placeholder="Old password" aria-describedby="basic-addon1">
            <input type="password" class="form-control" id="password" name="newPassword" placeholder="New password" aria-describedby="basic-addon1">
            <input type="password" class="form-control" id="password" name="repeatNewPassword" placeholder="repeat password" aria-describedby="basic-addon1">
            <div class="mb-3">
                <button type="submit" name="updatePassword" class="btn btn-outline-success">Save</button>
            </div>
        </form>
    </div>
    <div class="col-sm-4">
        <form class="row" action="<?= base_url('settings/'.$user['id']) ?>" method="post">
                            
                            <div class="col-sm-6 mb-3">
                                <input type="text" class="form-control" name="first_name" value="<?= $user['first_name']?>" placeholder="First Name" aria-describedby="basic-addon1">
                            </div>
                                
                                
                            <div class="col-sm-6 mb-3">
                                <input type="text" class="form-control" name="last_name" value="<?= $user['last_name']?>" placeholder="Last Name" aria-describedby="basic-addon1">
                            </div>
                               
                            <div class="mb-3">
                                <input type="text" class="form-control" name="email" value="<?= $user['email']?>" placeholder="Email" aria-describedby="basic-addon1">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="phone_number" value="<?= $user['phone_number']?>" placeholder="Phone Number" aria-describedby="basic-addon1">
                            </div>
                                <div class="mb-3">
                                    <button type="submit" name="updateDetails" class="btn btn-outline-success">Save</button>
                            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>