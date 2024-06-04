<?php
$cur_tab = $this->uri->segment(2) == '' ? 'dashboard' : $this->uri->segment(2);
?>
<?php
$username = $this->session->userdata('username'); 
$role = $this->session->userdata('role_name'); 
?>

<div class="col-lg-2">
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-secondary navbar-dark">
            <a href="<?= base_url() ?>admin/dashboard" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="<?= base_url() ?>public/admin/img/profile.png" alt="" style="width: 40px; height: 40px;">
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0"><?= $username ?></h6>
                    <span><?= $role ?></span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <?php if ($this->session->userdata('role') === '1') : ?>               
                    <a href="<?=base_url('admin/dashboard');?>" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>DASHBOARD</a>
                    <a href="<?=base_url('admin/users');?>" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>USERS</a>
                    <a href="<?= base_url('admin/seo/seo_view'); ?>" class="nav-item nav-link"><i class="fa fa-th me-2"></i>SEO</a>
                    <a href="<?= base_url('admin/blog_detail/blog_detail_view'); ?>" class="nav-item nav-link"><i class="fa fa-th me-2"></i>BLOG</a>
                <?php endif; ?>
                
                <?php if ($this->session->userdata('role') === '3') : ?>                    
                    <a href="<?=base_url('admin/dashboard');?>" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>DASHBOARD</a>
                    <a href="<?= base_url('admin/seo/seo_view'); ?>" class="nav-item nav-link"><i class="fa fa-th me-2"></i>SEO</a>
                    <a href="<?= base_url('admin/blog/blog_view'); ?>" class="nav-item nav-link"><i class="fa fa-th me-2"></i>BLOG</a>
                <?php endif; ?>
            </div>
        </nav>
    </div>
</div>
