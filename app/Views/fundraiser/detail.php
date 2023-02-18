<?= $this->extend("layout/default") ?>
<!--title section-->
<?= $this->section("title")?> detail <?= $this->endSection() ?>
<?= $this->section("body") ?>
<div class="row g-3">
<?php if(!empty($fund)):?>
    <h4>Help raise funds for <?= $fund['title']?></h4>
   <div class="col-md-7">
        <div class="mb-3">
            <img id="fund-img-wide" src="<?= base_url($fund['image'])?>" class="card-img-top" alt="...">
        </div>
         <div class="mb-3">
            <p><i class="fa-solid fa-user-tie"></i> <b><?= $organiser['first_name']?> <?= $organiser['last_name']?></b> is organising this fundraiser</p>
         </div>
        <hr />
        <span>Created on <?= $fund['created_at']?></span>
        <hr />
        <div class="mb-3">
            <p><?= $fund['cause']?></p>
        </div>
   </div>
   <div class="col-md-5">
        <div class="card">
                <div class="card-body">
                    <p>UFC0.00 <span>raised of UFC<?= $fund['target_amount']?> target</span> </p> 
                    <div class="mb-3">
                        <div class="skill-bar skill1">
                            <span class="skill-count1"></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <span><?= count($donations)?> donations</span>
                    </div>
                    
                    <div class="vstack gap-2 col-sm-12 mx-auto">
                        <a href="<?= base_url($fund['id'].'/donate')?>" class="btn btn-success col-12"><i class="fa-solid fa-circle-dollar-to-slot"></i> Donate now</a>
                        <a href="#" class="btn btn-primary col-12"><i class="fa-solid fa-share-nodes"></i> Share </a>
                    </div>
                </div>
            </div> 
   </div>
<?php endif?>
</div>
<?= $this->endSection() ?>