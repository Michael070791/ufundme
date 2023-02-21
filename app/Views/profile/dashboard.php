<?= $this->extend("layout/default") ?>
<!--title section-->
<?= $this->section("title")?> funds <?= $this->endSection() ?>
<?= $this->section("body") ?>
    <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6">
            <?php if(!empty($inactive)):?>
                <div class="alert alert-warning" role="alert">
                    <i class="fa-sharp fa-solid fa-triangle-exclamation"></i> *Your new fundraiser will be activated in 24 hours, please ensure an image is added
                </div>
            <?php endif;?>
        </div>
        <div class="mb-3">

            <div>
                <?php if(count($userFunds) > 0): ?>
                    <table id="tableData" class="table table-striped">
                           <thead>
                           <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Target</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Actions</th>
                            </tr>
                           </thead>
                           <tbody>
                            <?php foreach($userFunds as $item):?>
                                <tr>
                                    <td>
                                    <img class="thumbnail" id="user-fund-img"  src="<?= $item['image'] ?>" alt="..."/>
                                    </td>
                                    <td><?= $item['title'];?></td>
                                    <td>UFC <?= $item['target_amount']?></td>
                                    <?php if($item['active'] == 1):?>
                                            <td><span class="badge text-bg-success"><i class="fa-sharp fa-solid fa-check"></i> Active</span></td>
                                        <?php else:?>
                                            <td><span class="badge text-bg-danger"><i class="fa-sharp fa-solid fa-ban"></i> Not Active</span></td>
                                    <?php endif;?>
                                    <td><?= $item['created_at']?></td>
                                    <td>
                                        <a class="btn btn-primary" href="<?php echo base_url('edit/'.$item['id'])?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a class="btn btn-danger" id="deleteProduct" href="<?php echo base_url('delete/'.$item['id'])?>"><i class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                           </tbody>
                        </table>
                    <?php else: ?>
                        <h2>Your have not added products</h2>
                    
                </div>
                <?php endif;?>
            </div>
    </div>
<?= $this->endSection() ?>