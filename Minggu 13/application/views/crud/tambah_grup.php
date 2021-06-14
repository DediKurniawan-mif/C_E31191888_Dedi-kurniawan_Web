    <div class="row">
        <div class="card shadow col-lg-7">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Tambah Grup</h1>
                </div>
                <form class="user" action="<?= base_url('Grup/input');?>" method="post">
                <!--Jika kalau tombol tersebut di submit maka yang akan terjadi adalah memproses data inputan ke function input yang berada di controller Mahasiswa-->
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="grup" name="grup" require>
                    </div>
                    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah" style="padding: 5px;">
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="<?=base_url('Grup');?>">Kembali</a>
                </div>
            </div>
        </div>
    </div>
