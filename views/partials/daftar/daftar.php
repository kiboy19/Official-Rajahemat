    <!-- Login -->
    <section class="container-fluid p-3 gradient1">
        <div class="container p-3">
            <div class="col-lg-8 mx-auto">
                <div class="gradient2 p-2 shadow rounded ">
                    <h3 class="text-light text-center">Silahkan Daftar untuk melanjutkan</h3>
                </div>
                <div class="bg-light p-3 rounded shadow">
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">Kami tidak akan membagikan email anda kesiapapun.</div>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nomor Whatsapp</label>
                            <input type="text" class="form-control" id="nama"  aria-describedby="nohelp">
                            <div id="nohelp" class="form-text">Kami tidak akan membagikan nomor whatsapp anda kesiapapun.</div>
                        </div>
                        <div class="mb-3">
                          <label for="sandi" class="form-label">Kata Sandi</label>
                          <input type="password" class="form-control" id="sandi">
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="tetapmasuk">
                          <label class="form-check-label" for="tetapmasuk">Biarkan tetap masuk</label>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">Daftar</button>
                        <div class="row">
                            <div class="col text-center">
                              <p>Lupa Kata Sandi? <a href="#">Reset</a></p>
                            </div>
                            <div class="col text-center">
                              <p>Sudah Memiliki Akun? <a href="masuk.php">Masuk</a></p>
                            </div>
                          </div>
                      </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Login -->