  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
    <title>Beranda</title>
  </head>

  <body>
       <?php include 'header.php' ?>
    <!-- SECTION TUTUP NAVBAR -->


    <!--section galleri  -->
    <?php
      $galeri = [
        'galleri/1.JPG',
        'galleri/1.JPG'
        ];
        $i = 0;
    ?>
    <div class="container py-5">
      <h2 class="text-center mb-4">Upacara Peringatan HUT RI Ke-79</h2>
      <hr class="mb-5">

      <div class="row g-4"> 
        <?php while($i < count($galeri)): ?>
            <div class="col-md-4">
              <div class="card">
                <img src="<?=$galeri[$i]?>" class="card-img-top" alt="kegiatan 1">
              </div>
            </div>
          <?php $i++;?>;
        <?php endwhile;?>
      </div>
    </div>
    <!-- tutup section galleri -->


    <!-- SECTION FOOTER -->
      <?php include 'footer.php' ?>
    <!-- TUTUP SECTION FOOTER -->
  </body>

  </html>