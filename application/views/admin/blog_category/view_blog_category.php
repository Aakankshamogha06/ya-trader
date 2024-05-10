<div class="content">

  <div class="container-fluid pt-4 px-4">
    <div class="row g-4 justify-content-center">
      <div class="col-lg-12">
        <div class="bg-secondary rounded p-4">
          <h6 class="mb-4">BLOG CATEGORY</h6>

            <a href="<?= base_url('admin/blog_category/add_blog_category'); ?>">
              <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add blog_category</button>
            </a>
          </div>

          <table id="table_id" class="table table-striped">
            <thead>
              <tr>
                <th>SR NO</th>
                <th>BLOG CATEGORY NAME</th>
                <th style="width: 150px;" class="text-right">Option</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $c = 1;
              foreach ($blog_category_view as $row) : ?>
                <tr>
                  <td><?= $c++; ?></td>
                  <td><?= $row->category ?></td>

                  <td class="text-right"><a href="<?= base_url('admin/blog_category/blog_category_edit/' . $row->id); ?>" class="ti ti-edit" style="font-size:40px; color:blue;"></a><a href="<?= base_url('admin/blog_category/blog_category_delete/' . $row->id); ?>" class="ti ti-trash" style="font-size:40px; color:red;" onclick="return confirm('Are you sure want to delete ?');"></a></td>
                </tr>
              <?php endforeach; ?>
            </tbody>

          </table>


        </div>
      </div>
    </div>
              </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script>
      jQuery(document).ready(function($) {
        $('#table_id').DataTable();
      });
    </script>

</body>

</html>