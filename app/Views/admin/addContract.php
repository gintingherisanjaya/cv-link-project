<?= $this->extend('/layouts/default') ?>

<?= $this->section('content') ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Buat Kontrak Baru</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Surveyer</a></li>
                <li class="breadcrumb-item active">Kontrak</li>
            </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Formulir Pembuatan Kontrak Baru</h3>
                    </div>
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Client Name</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Budi</option>
                                    <option>Heri</option>
                                    <option>Rizki</option>
                                    <option>Dita</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Items</label>
                                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                                    <option>CCTV</option>
                                    <option>Kabel</option>
                                    <option>Pipa</option>
                                </select>
                            </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                        </div>
                        <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>