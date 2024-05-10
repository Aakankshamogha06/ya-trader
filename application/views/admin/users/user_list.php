
<div class="container-fluid pt-4 px-4">
  <div class="row g-4 justify-content-center">
    <div class="col-lg-8">
      <div class="bg-secondary rounded p-4">
        <h6 class="mb-4">USERS</h6>
        <a href="<?= base_url('admin/users/add'); ?>">
          <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add</button>
        </a>
        <div class="table-container">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead style="color:#FEC83D;">
                <tr>
                  <th>Sr No</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Mobile No.</th>
                  <th>Role</th>
                  <th style="width: 150px;" class="text-right">Option</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($all_users as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    <td><?= $row['firstname']; ?></td>
                    <td><?= $row['lastname']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['mobile_no']; ?></td>
                    <td><span class="btn  btn-primary btn-sm"><?= $row['role_name']; ?><span></td>
                    <td class="text-right">
                      <a href="<?= base_url('admin/users/edit/'  . $row['id']); ?>">
                        <i class="fas fa-edit" style="font-size: 24px; color: blue;"></i>
                      </a>
                      <a href="<?= base_url('admin/users/del/'  . $row['id']); ?>" onclick="return confirm('Are you sure want to delete ?');">
                        <i class="fas fa-trash-alt" style="font-size: 24px; color: red;"></i>
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>