<?= $this->extend("layout/default") ?>
<!--title section-->
<?= $this->section("title")?> funds <?= $this->endSection() ?>
<?= $this->section("body") ?>
    <div class="row">
        <div class="mb-3">
            <div>
  <?php if(count($userFunds) > 0): ?>
    <table class="table table-striped">
          
              <tr>
                <th>Image</th>
                <th>Cause</th>
                <th>Target</th>
                <th>Status</th>
                <th>Date</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              <?php foreach($userFunds as $item):?>
              <tr>
                <td>
                  <img class="thumbnail" id="user-product-img"  src="<?= $item['image'] ?>" alt="..."/>
                </td>
                <td><?= $item['cause'];?></td>
                <td>UFC <?= $item['target_amount']?></td>
                <?php if($item['active'] == 1):?>
                        <td><span class="badge text-bg-success"><i class="fa-sharp fa-solid fa-check"></i> Active</span></td>
                    <?php else:?>
                        <td><span class="badge text-bg-danger"><i class="fa-sharp fa-solid fa-ban"></i> Not Active</span></td>
                <?php endif;?>
                <td><?= $item['created_at']?></td>
                <td><p><a href="">Edit <i class="fa-solid fa-pen-to-square"></i></a></p></td>
                <td><p><a id="deleteProduct" href="">Delete <i class="fa-solid fa-trash-can"></i></a></p></td>
              </tr>
              <?php endforeach; ?>
          </table>
      <?php else: ?>
        <h2>Your have not added products</h2>
      
 </div>
<?php endif;?>
        </div>
    </div>
<?= $this->endSection() ?>