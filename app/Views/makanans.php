<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Button Example <small>Users</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                            class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <table id="datatable-buttons" class="table table-striped table-bordered">
                <a href="<?php echo base_url('/home/tambah_m') ?>"><button><i class="fa fa-plus"></i></button></a>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Makanan</th>
                        <th>Harga</th>
                        <th>act </th>
                    </tr>
                </thead>


                <tbody>

                    <?php
                    $no = 1;
                    foreach ($dt as $td) {

                        ?>

                        <tr>
                            <td>
                                <?php echo $no++ ?>
                            </td>
                            <td>
                                <?php echo $td->makanan ?>
                            </td>
                            <td>
                                <?php echo $td->harga ?>
                            </td>
                            <td>
                                <a href="<?= base_url('home/edit_k/' . $td->id_makanan) ?>"><button class="fw fw-button"><i
                                            class="fa fa-edit"></i></button></a>
                                <a href="<?php echo base_url('home/hapus_k/' . $td->id_makanan); ?>"><button
                                        class="fw fw-button"><i class="fa fa-trash"></i></button>
                            </td></a>
                            </td>

                        </tr>

                        <?php
                    }
                    ?>


                </tbody>
            </table>
        </div>
    </div>
</div>