<?= $this->extend("admin/layout/index") ?>
<!--title section-->
<?= $this->section("title")?> fundraisers <?= $this->endSection() ?>
<?= $this->section("body") ?>
<div class="row">
    <div class="col-sm-12">
        <h3>Fundraisers</h3>
        <table id="tableData" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Country</th>
                    <th>Target</th>
                    <th>Raised</th>
                    <th>Created</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($funds as $fund):?>
                    <tr>
                        <td><?= $fund['email']?></td>
                        <td><?= $fund['title']?></td>
                        <td><img class="fund-table-img" src="<?= base_url().$fund['image']?>" alt="img"></td>
                        <td><?= $fund['country']?></td>
                        <td><b>UFC <?= $fund['target_amount']?></b></td>
                        <td><b>UFC <?= $fund['amount_raised']?></b></td>
                        <td><?= $fund['created_at']?></td>
                        <td>
                            <?php if($fund['active'] == 1):?>
                                <span class="badge text-bg-success">Active</span>
                                <?php else:?>
                                    <span class="badge text-bg-danger">Disabled</span>
                            <?php endif;?>
                        </td>
                        <td>
                            <?php if($fund['active'] == 1):?>
                                    <a href="<?php echo base_url('admin/fund/'.$fund['id'])?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-ban"></i></a>
                                <?php else:?>
                                    <a href="<?php echo base_url('admin/fund/'.$fund['id'])?>" class="btn btn-sm btn-success"><i class="fa-sharp fa-solid fa-square-check"></i></a>
                             <?php endif;?>
                            <a href="<?php echo base_url('admin/fund/delete/'.$fund['id'])?>"  class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
    </table>
    </div>
</div>
<?= $this->endSection() ?>