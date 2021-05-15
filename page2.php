<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="sty.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="file:///D:/HTML/Fontawesome/fontawesome-free-5.14.0-web/css/all.css">
        <link rel="stylesheet" href="asset/sty.css">
        <title>Home Page</title>
    </head>
    <body>
        <div class="container-fluid m-0 p-0">
            <!-- awal home page -->
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-light p-4">
                    <h5 class="text-black h4 pb-3">Dashboard</h5>
                    <hr>
                    <a href="index.php" class="btn btn-dark" style="border-color: white;">Pembelian</a>
                </div>
            </div>
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
            <!-- akhir navbar -->

            <div class="row p-5 m-0">
                <div class="col-12">
                    <h1 class="text-center">Dashboard Barang</h1>
                    <p class="text-center">Semua Barang</p>
                </div>
                <div class="col-12 p-3">
                <table class="table caption-top" id="tabel">
                    <caption>Data Barang</caption>
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Stok Barang</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Harga Sewa</th>
                            <th scope="col">Harga Denda</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include 'core/connection.php';

                            $data = mysqli_query($connenction, "SELECT barang.id, barang.nama_barang, barang.stok, barang.deskripsi, barang.harga_sewa, barang.harga_denda FROM barang");
                            
                            $number = 1;
                            while($item = mysqli_fetch_assoc($data)){
                        ?>
                        <tr>
                            <th scope="row"><?= $number++?></th>
                            <td><?=$item['nama_barang']?></td>
                            <td><?=$item['stok']?></td>
                            <td><?=$item['deskripsi']?></td>
                            <td><?=$item['harga_sewa']?></td>
                            <td><?=$item['harga_denda']?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        

        
        <div class="col-12 p-3">

        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.jss" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 

        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready( function () {
                $('#tabel').DataTable();
            } );
    </script> 
    </body>
</html>