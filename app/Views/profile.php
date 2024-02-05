<title>Edit</title>
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Ganti Password</h4>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="<?= base_url('home/aksi_edit_p/') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $dt->id_user ?>">

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Ganti Password"
                                    name="password" value="" required>
                            </div>



                            <!-- bagian tombol submit -->
                            <div class="col-12 d-flex justify-content-end">
                                <div class="form-group mb-2">
                                    <div class="col-md-0 col-md-offset-0">
                                        <a href="javascript:history.back()" class="btn btn-danger me-2">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <!-- bagian tombol submit -->