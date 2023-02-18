<?= $this->extend("layout/default") ?>
<!--title section-->
<?= $this->section("title")?> edit <?= $this->endSection() ?>
<?= $this->section("body") ?>
<div class="row">
    <?php if(!empty($fund)):?>
        <form enctype="multipart/form-data" action="<?php base_url('edit/'.$fund['id'])?>" method="post" class="row g-3">
            <?php if(!empty(session()->get('error'))):?>
                    <div class="col-sm-12 alert alert-danger" role="alert">
                        <?= session()->get('error') ?>
                    </div>
                <?php endif;?>
            <?php if(empty($fund['image'])):?>
                    <div class="col-sm-12">
                       <div class="row">
                            <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <img class="img-thumbnail" id="ajaxImgUpload" alt="Preview Image" src="<?php echo base_url("assets/images/default.png");?>" />
                                </div>
                            <div class="col-sm-4"></div>
                       </div>
                    </div>
                <?php else:?>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                                <img class="img-thumbnail" id="ajaxImgUpload" alt="Preview Image" src="<?php echo base_url($fund['image']);?>" />
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                    </div>
                <?php endif;?>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                       <div class="row">
                            <div class="col-sm-6">
                                <input type="file" class="form-control form-control-sm" accept="image/*" onchange="onFileUpload(this);" name="file" id="formFile">
                            </div>
                            <div class="col-sm-6">
                                <button type="submit" name="upload" class="btn btn-outline-primary btn-sm" value="Upload"><i class="fa-solid fa-arrow-up-from-bracket"></i></button>
                            </div>
                       </div>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
        </form>
        <form enctype="multipart/form-data" action="<?php base_url('edit/'.$fund['id'])?>" method="post" class="row g-3">
                <?php if(!empty(session()->get('message'))):?>
                    <div class="col-sm-12 alert alert-success" role="alert">
                        <?= session()->get('message') ?>
                    </div>
                <?php endif;?>
                <div class="col-sm-6">
                    <input type="text" class="form-control" value="<?= $fund['organisation']?>" placeholder="Organisation optional" name="organisation">
                </div>
                <div class="col-sm-6">
                    <textarea type="text" class="form-control" required placeholder="*Cause" name="cause"><?= $fund['cause']?></textarea>
                </div>
                <div class="md-3">
                    <input type="text" class="form-control" value="<?= $fund['title']?>" id="title" name="title">
                </div>
                <div class="md-3">
                    <input type="text" class="form-control" value="<?= $fund['address_one']?>" id="inputAddress" placeholder="*1234 Main St" name="address1">
                </div>
                <div class="md-3">
                    <input type="text" class="form-control" value="<?= $fund['address_two']?>" id="inputAddress2" placeholder="*Apartment, studio, or floor / gps code" name="address2">
                </div>
                <div class="col-sm-4">
                    <select id="inputCountry" name="country" class="form-select">
                        <option selected><?= $fund['country']?></option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <select id="inputCity" name="city" class="form-select">
                        <option selected><?= $fund['city']?></option>
                    </select>
                </div>
                <div class="input-group col-sm-4">
                <span class="input-group-text">UFC</span>
                    <input type="text" disabled value="<?= $fund['target_amount']?>" class="form-control" name="amount" placeholder="*Taget amount" aria-label="Amount in UFC">
                <span class="input-group-text">.00</span>
                </div>
                <div class="col-sm-12">
                    <input type="submit" name="updateDetails" class="btn btn-outline-primary" value="Save">
                </div>
           </form>
    <?php endif;?>
</div>
<?= $this->endSection() ?>