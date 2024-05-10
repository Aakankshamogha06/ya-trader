<div class="content">

  <div class="container-fluid pt-4 px-4">
    <div class="row g-4 justify-content-center">
      <div class="col-lg-12">
        <div class="bg-secondary rounded p-4">
          <h6 class="mb-4">BLOG DETAIL</h6>
          <a href="<?= base_url('admin/blog_detail/add_blog_detail'); ?>">
            <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add</button>
          </a>
          <div class="table-container">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead style="color:#FEC83D;">
                  <tr>
                  <th>SR NO</th>
                  <th>SEO TITLE </th>
                  <th>SEO KEYWORDS</th>
                  <th>SEO DESCRIPTION</th>
                  <th>BLOG NAME</th>
                  <th>BLOG IMAGE</th>
                  <th>SLUG</th>
                  <th>BLOG DATE</th>
                  <th>BLOG DESCRIPTION</th>
                  <th style="width: 150px;" class="text-right">OPTION</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($blog_detail_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    <td><?= $row->title ?></td>
                    <td><?= $row->keywords ?></td>
                    <td><?= $row->meta_description ?></td>
                    <td><?= $row->blog_name ?></td>
                    <td>
                      <?php if ($row->blog_image) { ?>
                        <img src="<?php echo base_url('uploads/blog/') . $row->blog_image; ?>" style="width:50px;height:80px">
                      <?php } ?>
                    </td>
                    <td><?= $row->slug ?></td>
                    <td><?= $row->blog_date ?></td>
                    <td><?= substr(strip_tags($row->blog_desc),0,300) ?>....</td>

                    <td class="text-right">
                    <a href="<?= base_url('admin/blog_detail/blog_detail_edit/' . $row->id); ?>">
                      <i class="fas fa-edit" style="font-size: 24px; color: blue;"></i></a> 
                       <a href="<?= base_url('admin/blog_detail/blog_detail_delete/' . $row->id); ?>" onclick="return confirm('Are you sure want to delete ?');">
                        <i class="fas fa-trash-alt" style="font-size: 24px; color: red;"></i>                  </tr>
                <?php endforeach; ?>
              </tbody>

            </table>
        </div>
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

