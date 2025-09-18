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
                <title>Ektrakulikuler</title>
            </head>

            <body>
                <!-- Navbar -->
                <?php include 'header.php' ?>
                <!-- SECTION TUTUP NAVBAR -->

                <?php
                // Data eskul
                $eskul1 = [
                    ["img" => "galleri/paskibra.png", "nama" => "PASKIBRA"], 
                    ["img" => "galleri/pramuka..png", "nama" => "PRAMUKA"], 
                    ["img" => "galleri/pmr..png", "nama" => "PMR"], 
                    ["img" => "galleri/plh..png", "nama" => "PLH"], 
                    ["img" => "galleri/pd..jpg", "nama" => "PERISAI DIRI"], 
                    ["img" => "galleri/volly..jpeg", "nama" => "VOLLY"], 
                    ["img" => "galleri/sepakbola..jpeg", "nama" => "SEPAKBOLA"], 
                    ["img" => "galleri/irma..png", "nama" => "IRMA"], 
                    ["img" => "galleri/itclub.png", "nama" => "IT CLUB"], 
                    ["img" => "galleri/futsal..png", "nama" => "FUTSAL"], 
                    ["img" => "galleri/english..png", "nama" => "ENGLISH"], 
                    ["img" => "galleri/bulutangkis..png", "nama" => "BULUTANGKIS"], 
                    ["img" => "galleri/basket..png", "nama" => "BASKET"], 
                    ["img" => "galleri/cinematik.png", "nama" => "CINEMATOGRAPHY"], 
                ];


                ?>

                <!-- SECTION EKTRAKULIKULER -->

                <section>
                    <div class="container px-5 mt-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card border-0">
                                    <h3 class="mb-0"> Ektrakulikuler</h3>
                                    <h3 class="text-primary"> Siswa</h3>
                                    <div class="row">
                                        <?php foreach ($eskul1 as $item): ?>
                                        <div class="col-lg-4 ">
                                            <div class="card shadow rounded m-3 p-4 d-flex align-items-center ">
                                                <img src="<?= $item ['img']?>" alt="" width="150" height="150">
                                                <div class="card-body  border-0">
                                                    <h4><?= $item ['nama'] ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                    
                    <!-- SECTION FOOTER -->
                
                    <!-- TUTUP SECTION FOOTER -->
                <?php include 'footer.php' ?>
            </body>
            </html>