<!DOCTYPE html>
<html>
    <head>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <title>Pendaftaran Siswa Baru | SMAN 5 Surabaya</title>
    </head>

<body>
    
<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark"">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SMAN 5 Surabaya</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="justify-content-end">
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul
              class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
              style="--bs-scroll-height: 100px"
            >
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://id.wikipedia.org/wiki/SMA_Negeri_5_Surabaya">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://maps.app.goo.gl/nef2rQ4jSYrP2Wvd6">LOCATION</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
      </div>
    </nav>

    <header>
        <h1 class="text-center mt-5">PENDAFTARAN SISWA BARU</h3>
        <h3 class="text-center mb-3">SMAN 5 Surabaya</h1>
    </header>

    <div class="container p-5">
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card" style="height: 25rem">
                    <div class="card-body">
                        <h5 class="card-title">JADILAH BAGIAN DARI SMALANE!</h5>
                        <p class="card-text">Anda dapat mendaftarkan diri untuk menjadi siswa di SMAN 5 Surabaya dengan mengikuti prosedur pendaftaran yang telah ditentukan oleh sekolah. Pendaftaran ini merupakan langkah awal yang penting dalam perjalanan pendidikan Anda di SMAN 5 Surabaya, sebuah institusi pendidikan yang telah berpengalaman dalam memberikan pendidikan berkualitas tinggi. Dengan mendaftar dan berpartisipasi dalam proses ini, Anda memiliki kesempatan untuk bergabung dengan komunitas siswa yang berfokus pada pembelajaran, pengembangan diri, dan prestasi akademik. SMAN 5 Surabaya menyambut calon siswa yang memiliki motivasi kuat untuk belajar dan berkontribusi dalam mencapai keunggulan pendidikan.</p>
                        <a href="form-daftar.php" class="btn btn-primary">Daftar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="height: 25rem">
                    <div class="card-body">
                        <h5 class="card-title">PENDAFTAR SISWA BARU SMAN 5 SURABAYA</h5>
                        <p class="card-text">Berikut ini merupakan daftar siswa dan siswi yang telah melakukan pendaftaran di SMAN 5 Surabaya. Mereka adalah calon-calon yang antusias dan bersemangat untuk bergabung dengan sekolah kami yang terkemuka, yang dikenal akan kualitas pendidikan unggul dan lingkungan belajar yang mendukung. Kami sangat berharap untuk menyambut mereka ke dalam komunitas pendidikan kami yang dinamis dan beragam, di mana mereka akan memiliki kesempatan untuk meraih prestasi yang luar biasa dan membangun masa depan yang cerah.</p>
                        <a href="list-siswa.php" class="btn btn-primary">Pendaftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if (isset($_GET['status'])) { ?>
    <script>
        <?php
            if ($_GET['status'] == 'sukses') {
                echo "Swal.fire({icon:'success',title:'Berhasil Menambahkan Data',text:'Berhasil registrasi di SMAN 5 Surabaya'})";
            } else {
                echo "Swal.fire({icon:'error',title:'Error Terjadi',text:'Gagal melakukan pendaftaran'})";
            }
        ?>
    </script>
<?php } ?>
    </body>
</html>
