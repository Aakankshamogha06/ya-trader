<div class="container-fluid pt-4 px-4">
<div class="row g-4 justify-content-center">
    <div class="col-lg-8">
                    
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                        <?php echo form_open(base_url('admin/users/add'));  ?>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name">
                            </div>
                            <br>
                            <div class="form-group col-md-12">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="">
                            </div>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="">
                        </div><br>
                        <div class="form-group">
                            <label for="mobile_no">Mobile No</label>

                            <input type="number" name="mobile_no" class="form-control" id="mobile_no" placeholder="">
                        </div><br>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="password">Password</label>

                                <input type="password" name="password" class="form-control" id="password" placeholder="">
                            </div><br>
                            <div class="form-group col-md-12">
                                <label for="role">Select Role</label>
                                <select name="user_role" class="form-control">
                                    <option value="">Select Role</option>
                                    <?php

                                    $role_fetch_data = $this->user_model->role_fetch();
                                    foreach ($role_fetch_data as $data) { ?>
                                        <option value="<?php echo $data['id']; ?>"><?php echo $data['role_name']; ?></option>
                                    <?php } ?>


                                </select>
                            </div>

                        </div>
                        <br>

                        <input type="submit" class="btn  btn-primary" name="submit" value="Add User">

                        <?php echo form_close(); ?>
                    
            </div>
            <!-- [ sample-page ] end -->
        </div>
    </div>
</div>
                                    </div>
