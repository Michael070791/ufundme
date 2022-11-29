<?= $this->extend("layout/default") ?>
<!--title section-->
<?= $this->section("title")?> fundraisers <?= $this->endSection() ?>
<?= $this->section("body") ?>
<div class="row">
    <?php if(!empty($fundraisers)):?>
        
    <?php endif;?>
</div>
<?= $this->endSection() ?>