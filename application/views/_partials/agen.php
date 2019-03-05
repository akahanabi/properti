<h1>Data Agen</h1>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Email</th>
                <th>No. HP</th>
                <th>No. Rumah</th>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</div>
<form action="" method=""style="margin-top:20px">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Nama</span>
        </div>
        <input class="form-control" type="text" name="nama_depan" placeholder="Nama Depan" required autocomplete="off">
        <input class="form-control" type="text" name="nama_belakang" placeholder="Nama Belakang" autocomplete="off">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Email</span>
        </div>
        <input class="form-control" type="email" name="email" required autocomplete="off">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Kontak</span>
        </div>
        <input class="form-control" type="number" min="0" name="no_tlp_hp" placeholder="No. HP" required autocomplete="off">
        <input class="form-control" type="number" min="0" name="no_tlp_rumah" placeholder="No. Rumah" autocomplete="off">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Username</span>
        </div>
        <input class="form-control" type="text" name="username" required autocomplete="off">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Password</span>
        </div>
        <input class="form-control" type="password" name="password" required autocomplete="off">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Re-Type Password</span>
        </div>
        <input class="form-control" type="retype_password" name="password" required autocomplete="off">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Tambah</button>
</form>