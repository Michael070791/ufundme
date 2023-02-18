<?= $this->extend("layout/default") ?>
<!--title section-->
<?= $this->section("title")?> donate <?= $this->endSection() ?>
<?= $this->section("body") ?>
<div class="row g-3">
    <div class="col-md-3"></div>
    <div class="col-md-6" id="donate-content">
        <?php if(!empty($fundraise) && !empty($author)):?>
            <div class="row g-3">
                <div class="col-sm-3">
                    <figure class="figure">
                        <img class="donate-img" src="<?php echo base_url($fundraise['image'])?>" alt="..">
                    </figure>
                </div>
                <div class="col-sm-9">
                <div class="vstack gap-2 col-sm-12 mx-auto donate-details">
                    <p>You are supporting <span><?= $fundraise['title']?></span></p>
                    <p class="author-section">Your donation will benefit <span class="author"><?= $author['last_name']?> <?= $author['first_name']?></span> </p>
                </div>
                </div>
            </div>
        <?php endif;?>
       <form action="" method="post" class="row g-3">
            <div class="input-group input-group-lg mb-3">
                <span class="input-group-text" id="postFix">UFC</span>
                <input type="text"  name="donatingAmount" id="donatingAmount" class="form-control float-end">
                <span class="input-group-text" id="postFix">.00</span>
            </div>
            <div class="mb-3">
                <h6>Payment method</h6>
                <div class="mb-3 payment-option1" for="flexRadioDefault1">
                    <div class="form-check">
                        <input checked class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                           <img id="ufc-icon" src="<?php echo base_url('assets/images/ufc.png')?>" alt=".."/> UFC
                        </label>
                    </div>
                </div>
                <div class="mb-3 payment-option2" for="flexRadioDefault2">
                    <div class="form-check">
                        <input class="form-check-input" disabled type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                        <i class="fa-solid fa-credit-card"></i> Credit or Debit
                        </label>
                    </div>
                </div>
                
            </div>
            <div class="mb-3">
                <h6>Your donation</h6>
               <div class="row g-3">
                    <div class="col-sm-6"><p><b>Amount</b></p></div>
                    <div class="col-sm-6"><p class="float-end currency">UFC <span id="donateAmount">0.00</span></p></div>
               </div>
               <div class="row g-3">
                    <div class="col-sm-6"><p><b>UFundme tip</b></p></div>
                    <div class="col-sm-6"><p class="float-end currency">UFC <span id="tipAmount">0.00</span></p></div>
               </div>
               <hr />
               <div class="row g-3">
                    <div class="col-sm-6"><p><b>Total due today</b></p></div>
                    <div class="col-sm-6"><p class="float-end currency">UFC <span id="totalAmount">0.00</span></p></div>
               </div>
            </div>
            <div class="vstack gap-2 col-sm-12 mx-auto">
                <a name="pay" type="submit" role="button" id="pay" class="btn btn-outline-success"><img id="ufc-icon" src="<?php echo base_url('assets/images/ufc.png')?>" alt=".."/> Pay</a>
            </div>
            <div class="mb-3">
                <p>By clicking 'Pay' you agree to <a href="#">our terms</a> and <a href="#">privacy policy</a></p>
            </div>
        </form>
    </div>
    <div class="col-md-3"></div>
</div>
<?= $this->endSection() ?>