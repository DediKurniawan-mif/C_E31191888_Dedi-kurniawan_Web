<div class="row">
        <div class="card shadow col-lg-7">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Tambah User</h1>
                </div>
                <form class="user" action="<?= base_url('Mahasiswa/input');?>" method="post">
                <!-- Jika pada tombol di submit maka akan Terproses data yang kita inputkan ke function input yang berada pada controller Mahasiswa -->
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username Maximal 10 Character" require>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="pass" name="pass" placeholder="Password Maximal 6 Character" require>
                    </div>
                     <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Full Name" require>
                    </div>
                    <div class="form-group">
                        <select id="grup" class="form-control" name="grup" require>
                            <option value="0">Pilih Grup User</option>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah">
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="index">Kembali</a>
                </div>
            </div>
        </div>
    </div>