<?= $this->extend("admin/layout/index") ?>
<!--title section-->
<?= $this->section("title")?> users <?= $this->endSection() ?>
<?= $this->section("body") ?>
<div class="row page-entry">
   <div class="col-sm-12">
   <h3>users</h3>
    <table id="tableData" class="table table-striped" style="width:100%">
      <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Created</th>
            <th>Profile</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $user):?>
            <tr>
                <td><?= $user['first_name']?> <?= $user['last_name']?></td>
                <td><?= $user['email']?></td>
                <td><?= $user['phone_number']?></td>
                <td><?= $user['created_at']?></td>
                <td>
                    <?php if($user['admin'] == 1):?>
                        <span class="badge text-bg-success">Admin</span>
                        <?php else:?>
                            <span class="badge text-bg-primary">User</span>
                    <?php endif;?>
                </td>
                <td>
                    <?php if($user['active'] == 1):?>
                        <span class="badge text-bg-success">Active</span>
                        <?php else:?>
                            <span class="badge text-bg-danger">Disabled</span>
                    <?php endif;?>
                </td>
                <td>
                            <?php if($user['active'] == 1):?>
                                    <a href="#" class="btn btn-sm btn-primary"><i class="fa-solid fa-unlock"></i></i></a>
                                <?php else:?>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-lock"></i></a>
                             <?php endif;?>
                           <?php if($user['admin'] == 0):?>
                                <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                            <?php endif;?>
                        </td>
            </tr>
        <?php endforeach;?>
      </tbody>
    </table>
   </div>
</div>
<?= $this->endSection() ?>