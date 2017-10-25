<div id="page-wrapper">
    <!-- isi kontentnya -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $title ?></h1>
        </div>
        <!-- /.col-lg-12 -->
        <a class="btn btn-primary" href="<?php echo base_url(); ?>alternatif/tambah"> Tambah alternatif</a>
    </div>

    <br>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>alternatif</th>
                        <th>deskripsi</th>
                        <th>gambar</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($alternatif as $item): ?>
                        <tr>
                            <td>
                                <?php echo $item->id; ?>
                            </td>
                            <td>
                                <?php echo $item->alternatif; ?>
                            </td>
                            <td>
                                <?php echo $item->deskripsi; ?>
                            </td>
                            <td>
                                <?php echo $item->gambar; ?>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
        <!-- /#page-wrapper -->