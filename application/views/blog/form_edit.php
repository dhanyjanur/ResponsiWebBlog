  <!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo base_url('assets/') ?>img/about-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Edit Data</h1>
            <span class="subheading">Edit data disini</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="card" style="margin:100px;">
    <div class="card-body">
      <form action="<?= base_url() ?>user/ubahData" method="post">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <div class="form-group">
          <label for="exampleInputUsername">Username</label>
          <input type="text" name="username" class="form-control" value="<?= $user['username'] ?>" id="exampleInputUsername" placeholder="Enter username">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword">Password</label>
          <input type="password" name="password" class="form-control" value="<?= $user['password'] ?>" id="exampleInputPassword" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>