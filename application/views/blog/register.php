  <!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo base_url('assets/') ?>img/contact-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                  <div class="page-heading">
                      <h1>Register</h1>
                      <span class="subheading">Register Your Account</span>
                  </div>
              </div>
          </div>
      </div>
  </header>

  <!-- Main Content -->
  <div class="container">
      <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">

              <?php if ($this->session->flashdata('notifikasi')) : ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Sukses!</strong> <?php echo $this->session->flashdata('notifikasi'); ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>

              <?php endif; ?>

              <!-- form register -->

              <form method="POST" action="<?php echo site_url('auth/register') ?>">
                  <div class="form-group">
                      <label>Username</label>
                      <input name="username" value="<?php echo set_value('username'); ?>" type="text" class="form-control <?php echo (form_error('username')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <?php echo form_error('email'); ?>
                  </div>

                  <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input name="password1" value="<?php echo set_value('password1'); ?>" type="password" class="form-control <?php echo (form_error('password1')) ? 'is-invalid' : '' ?>" id="exampleInputPassword1">
                      <?php echo form_error('password1'); ?>
                  </div>

                  <div class="form-group">
                      <label for="exampleInputPassword2">Password Confirmation</label>
                      <input name="password2" value="<?php echo set_value('password2'); ?>" type="password" class="form-control <?php echo (form_error('password2')) ? 'is-invalid' : '' ?>" id="exampleInputPassword2">
                      <?php echo form_error('password2'); ?>
                  </div>

                  <button type="submit" class="btn btn-success btn-block mt-5">Register Now</button>
              </form>

          </div>
      </div>
  </div>