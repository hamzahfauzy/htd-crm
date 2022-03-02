<?php load_templates('layouts/top') ?>
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Buat Bisnis Baru</h2>
                        <h5 class="text-white op-7 mb-2">Memanajemen data Bisnis Kustomer</h5>
                    </div>
                    <div class="ml-md-auto py-2 py-md-0">
                        <a href="index.php?r=business/index" class="btn btn-warning btn-round">Kembali</a>
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
                                    <label for="">Kustomer</label>
                                    <select name="business[customer_id]" class="form-control">
                                        <option value="" selected readonly>- Pilih Kustomer -</option>
                                        <?php foreach($customers as $customer): ?>
                                            <option value="<?=$customer->id?>"><?=$customer->name?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Paket</label>
                                    <select name="business[package_id]" class="form-control">
                                        <option value="" selected readonly>- Pilih Paket -</option>
                                        <?php foreach($packages as $package): ?>
                                            <option value="<?=$package->id?>"><?=$package->name?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="business[name]" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">No. Handphone</label>
                                    <input type="text" name="business[phone]" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="business[address]" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Token</label>
                                    <input type="text" name="business[token]" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">URL</label>
                                    <input type="text" name="business[business_url]" class="form-control" required>
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