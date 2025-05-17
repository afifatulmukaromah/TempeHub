<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Tempe Gurih</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#produk">Produk</a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="?menu=4">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#Kontak">Kontak</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Masuk
  </button>
  
  <!-- Modal -->
 
                   
                    <button type="button" class="btn btn-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        Daftar
                      </button>
                </div>
            </div>
        </div>
</nav>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan E-Mail">
              </div>
              <label for="inputPassword5" class="form-label">Password</label>
<input type="password" id="inputPassword5" placeholder="Masukan Password" class="form-control" aria-describedby="passwordHelpBlock">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Login</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Pendaftaran</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Password">
            </div>
              <label for="inputPassword5" class="form-label">E-Mail</label>
<input type="E-Mail" id="inputPassword5" placeholder="Masukan E-Mail" class="form-control" aria-describedby="passwordHelpBlock">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="showPopup()">Daftar</button>
            <div id="popupModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closePopup()">&times;</span>
                    <p>Akun Anda Berhasil Dibuat!</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>