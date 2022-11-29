<?= $this->extend("layout/default") ?>
<!--title section-->
<?= $this->section("title")?> fundraise <?= $this->endSection() ?>
<?= $this->section("body") ?>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h3>We are here to assist you raise funds to support your cause</h3>
            <h5>please provide these relevant details to assist in your fundraising journey.</h5>
           <form action="" method="post" class="row g-3">
                <?php if(!empty(session()->get('message'))):?>
                    <div class="col-sm-12 alert alert-success" role="alert">
                        <?= session()->get('message') ?>
                    </div>
                <?php endif;?>
                <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Organisation optional" name="organisation">
                </div>
                <div class="col-sm-6">
                    <textarea type="text" class="form-control" required placeholder="*Cause" name="cause"></textarea>
                </div>
                <div class="md-3">
                    <input type="text" class="form-control" id="inputAddress" placeholder="*1234 Main St" name="address1">
                </div>
                <div class="md-3">
                    <input type="text" class="form-control" id="inputAddress2" placeholder="*Apartment, studio, or floor / gps code" name="address2">
                </div>
                <div class="col-sm-4">
                    <select id="inputCountry" name="country" class="form-select">
                        <option selected>*Country</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <select id="inputCity" name="city" class="form-select">
                        <option selected>*City</option>
                    </select>
                </div>
                <div class="input-group col-sm-4">
                <span class="input-group-text">UFC</span>
                    <input type="text" class="form-control" name="amount" placeholder="*Taget amount" aria-label="Amount in UFC">
                <span class="input-group-text">.00</span>
                </div>
                <div class="col-sm-12">
                    <input type="submit" class="btn btn-outline-primary" value="Create">
                </div>
           </form>
        </div>
        <div class="col-md-4"></div>
    </div>
<?= $this->endSection() ?>