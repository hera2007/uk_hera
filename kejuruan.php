<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SMKN 4 Tasikmalaya</title>
  <link rel="stylesheet" href="./vendor/bs/bs.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php include 'header.php'; ?>

  <!-- SECTION KEJURUAN -->
  <section class="container py-5">
    <h3 class="fw-bold text-center">
      Konsentrasi <br /><span class="text-primary">Keahlian</span>
    </h3>

    <!-- Input Search -->
    <div class="mb-4 text-center">
      <input type="text" id="searchJurusan" class="form-control w-50 d-inline-block" placeholder="Cari konsentrasi keahlian...">
    </div>

    <!-- Container Cards -->
    <div class="row justify-content-center">

      <!-- TKJ -->
      <div class="col-lg-4 col-md-6" id="jurusan-tkj">
        <div class="card shadow rounded m-3 p-4 d-flex align-items-center text-center">
          <img src="galleri/tjkt.jpg" alt="TKJ" class="img-fluid" style="max-height: 120px;" />
          <div class="card-body">
            <h5 class="fw-bold">Teknik Komputer dan Jaringan (TKJ)</h5>
            <p>Konsentrasi ini fokus pada perancangan, pengelolaan, dan pemeliharaan jaringan komputer serta teknologi telekomunikasi.</p>
          </div>
        </div>
      </div>

      <!-- PPLG -->
      <div class="col-lg-4 col-md-6" id="jurusan-pplg">
        <div class="card shadow rounded m-3 p-4 d-flex align-items-center text-center">
          <img src="galleri/pplg.jpg" alt="PPLG" class="img-fluid" style="max-height: 120px;" />
          <div class="card-body">
            <h5 class="fw-bold">Pengembangan Perangkat Lunak dan Gim (PPLG)</h5>
            <p>Bidang ini mempersiapkan siswa untuk merancang, mengembangkan, dan mengelola perangkat lunak dan gim.</p>
          </div>
        </div>
      </div>

      <!-- TSM -->
      <div class="col-lg-4 col-md-6" id="jurusan-tsm">
        <div class="card shadow rounded m-3 p-4 d-flex align-items-center text-center">
          <img src="galleri/tbsm.jpg" alt="TSM" class="img-fluid" style="max-height: 120px;" />
          <div class="card-body">
            <h5 class="fw-bold">Teknik Sepeda Motor (TSM)</h5>
            <p>Konsentrasi ini mengajarkan keterampilan teknis dalam perbaikan, perawatan, dan modifikasi sepeda motor.</p>
          </div>
        </div>
      </div>

      <!-- DKV -->
      <div class="col-lg-4 col-md-6" id="jurusan-dkv">
        <div class="card shadow rounded m-3 p-4 d-flex align-items-center text-center">
          <img src="galleri/dkv.jpg" alt="DKV" class="img-fluid" style="max-height: 120px;" />
          <div class="card-body">
            <h5 class="fw-bold">Desain Komunikasi Visual (DKV)</h5>
            <p>Berfokus pada desain grafis, ilustrasi, animasi, dan komunikasi visual dalam industri kreatif.</p>
          </div>
        </div>
      </div>

      <!-- TOI -->
      <div class="col-lg-4 col-md-6" id="jurusan-toi">
        <div class="card shadow rounded m-3 p-4 d-flex align-items-center text-center">
          <img src="galleri/toi.jpg" alt="TOI" class="img-fluid" style="max-height: 120px;" />
          <div class="card-body">
            <h5 class="fw-bold">Teknik Otomasi Industri (TOI)</h5>
            <p>Mempelajari otomasi industri, robotika, pemrograman PLC, dan kontrol otomatis dalam industri manufaktur.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- SCRIPT PENCARIAN -->
  <script>
    const searchInput = document.getElementById('searchJurusan');

    searchInput.addEventListener('keyup', function () {
      const filter = this.value.toLowerCase();

      const tkj = document.getElementById('jurusan-tkj');
      const pplg = document.getElementById('jurusan-pplg');
      const tsm = document.getElementById('jurusan-tsm');
      const dkv = document.getElementById('jurusan-dkv');
      const toi = document.getElementById('jurusan-toi');

      // Reset semua jika input kosong
      if (filter === "") {
        tkj.style.display = "";
        pplg.style.display = "";
        tsm.style.display = "";
        dkv.style.display = "";
        toi.style.display = "";
      } else {
        // TKJ
        if (tkj.querySelector('h5').textContent.toLowerCase().includes(filter)) {
          tkj.style.display = "";
        } else {
          tkj.style.display = "none";
        }

        // PPLG
        if (pplg.querySelector('h5').textContent.toLowerCase().includes(filter)) {
          pplg.style.display = "";
        } else {
          pplg.style.display = "none";
        }

        // TSM
        if (tsm.querySelector('h5').textContent.toLowerCase().includes(filter)) {
          tsm.style.display = "";
        } else {
          tsm.style.display = "none";
        }

        // DKV
        if (dkv.querySelector('h5').textContent.toLowerCase().includes(filter)) {
          dkv.style.display = "";
        } else {
          dkv.style.display = "none";
        }

        // TOI
        if (toi.querySelector('h5').textContent.toLowerCase().includes(filter)) {
          toi.style.display = "";
        } else {
          toi.style.display = "none";
        }
      }
    });
  </script>

  <?php include 'footer.php'; ?>
</body>
</html>