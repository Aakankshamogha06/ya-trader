<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">

                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">SEO</h6>
                    <hr style="color: #ffc107; border:2px;">

                   <form class="form-horizontal" method="post" action="<?= base_url('blog_detail/blog_detail_submit_data'); ?>" enctype="multipart/form-data">
                       <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                       <div class="form-row">
                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">SEO Title <span class="text-danger">*</span> </label>
                               <input type="text" name="title" parsley-trigger="change" class="form-control" id="title" placeholder="SEO Title  " required>
                           </div>
                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">SEO Keywords <span class="text-danger">*</span> </label>
                               <input type="text" name="keywords" parsley-trigger="change" class="form-control" id="keywords" placeholder="SEO Keywords  " required>
                           </div>
                       </div>
                       <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">Slug <span class="text-danger">*</span> </label>
                               <input type="text" name="slug" parsley-trigger="change" class="form-control" id="slug" placeholder="Slug  " required>
                           </div>
                       <div class="form-row">
                           <div class="form-group col-md-12">
                               <label for="blog_name" class="form-label"> Blog Name <span class="text-danger">*</span></label>
                               <input type="text" id="blog_name" class="form-control" name="blog_name">

                           </div>
                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">SEO Description <span class="text-danger">*</span> </label>
                               <textarea type="text" name="meta_description" parsley-trigger="change" class="form-control" id="meta_description" placeholder="Meta Description " required></textarea>
                           </div>
                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">Blog Image <span class="text-danger">*</span> </label>
                               <input type="file" name="blog_image" parsley-trigger="change" class="form-control" id="blog_image" placeholder="Blog Image  " required>
                           </div>
        
                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">Blog Date <span class="text-danger">*</span> </label>
                               <input type="date" name="blog_date" parsley-trigger="change" class="form-control" id="blog_date" placeholder="Blog Date  " required>
                           </div>

                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">Blog Description <span class="text-danger">*</span> </label>
                               <textarea type="text" name="blog_desc" parsley-trigger="change" class="form-control" id="blog_desc" placeholder="Blog Description  " required></textarea>
                           </div>
                          

                       </div>

                       <div class="widget-footer text-left">

                           <button type="submit" name="submit" value="Add blog_detail" class="btn btn-primary " style="margin: 10px;">Add</button>
                           <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                       </div>
                   </form>

               </div>
               <!-- [ sample-page ] end -->
           </div>
       </div>
   </div>
   <!-- [ Main Content ] end -->
   <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>



   <script>
       CKEDITOR.replace('long_desc', {

           format_tags: 'p;h1;h2;h3;h4;h5;h6'

       });
       CKEDITOR.replace('blog_desc', {

           format_tags: 'p;h1;h2;h3;h4;h5;h6'

       });
   </script>