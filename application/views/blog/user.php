  <!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo base_url('assets/') ?>img/about-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Users</h1>
            <span class="subheading">Daftar User.</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div style="margin:100px;">

    <!-- <?php if ($this->session->flashdata('notifikasi')) : ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Sukses!</strong> <?php echo $this->session->flashdata('notifikasi'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>

            <?php endif; ?> -->



    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Username</th>
          <th>Password</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($user as $u) :
        ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $u['username'] ?></td>
            <td><?= $u['password'] ?></td>

            <td><a href="<?= base_url() ?>user/hapus/<?= $u['id'] ?>" class="btn btn-danger">Hapus</a>
              <a href="<?= base_url() ?>user/formEdit/<?= $u['id'] ?>" class="btn btn-primary">Ubah</a>
            </td>
          </tr>
        <?php
        endforeach;
        ?>
      </tbody>
    </table>
  </div>
  </div>