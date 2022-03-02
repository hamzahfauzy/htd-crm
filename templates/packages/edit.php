<?php load_templates('layouts/top') ?>
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Edit Pengguna : <?=$data->name?></h2>
                        <h5 class="text-white op-7 mb-2">Memanajemen data pengguna</h5>
                    </div>
                    <div class="ml-md-auto py-2 py-md-0">
                        <a href="index.php?r=packages/index" class="btn btn-warning btn-round">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="row row-card-no-pd">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="packages[name]" class="form-control" value="<?=$data->name?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Harga</label>
                                    <input type="text" name="packages[price]" class="form-control" value="<?=$data->price?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Catatan</label>
                                    <input type="text" name="packages[note]" class="form-control" value="<?=$data->note?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Waktu Berlangganan</label>
                                    <select name="packages[subscription_time]" class="form-control" required>
                                        <option value="">- Pilih -</option>
                                        <option <?=$data->subscription_time=='Bulanan' ? 'selected=""' : ''?>>Bulanan</option>
                                        <option <?=$data->subscription_time=='Tahunan' ? 'selected=""' : ''?>>Tahunan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php load_templates('layouts/bottom') ?>