<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<style>
    .w-100 {
        width: 100%;
    }
</style>

<body>
    <!-- <div class="row p-3">
        <div class="col-12">
            <input id="kode-barang" class="form-control" type="text" placeholder="Kode Barang">
        </div>
        <div class="col-12 mt-3">
            <input id="nilai-komoditas" class="form-control" type="text" placeholder="Nilai Komoditas">
        </div>
        <div class="col-12 mt-3">
            <button onclick="insertDB()" class="btn btn-primary w-100">SAVE</button>
        </div>
    </div> -->
</body>

</html>

<script>
    var kode_barang = 10079000;
    var nilai_komoditas = 30;

    var uraian_barang = "";
    var bm = "";

    var fd = new FormData();

    $.ajax({
        type: "GET",
        url: "https://insw-dev.ilcs.co.id/my/n/barang?hs_code=10079000",
        data: fd,
        enctype: 'multipart/form-data',
        cache: false,
        processData: false,
        async: false,
        contentType: false,
        success: function(response) {
            // console.log(response.data);
            uraian_barang = response.data[0].sub_header;
        },
        error: function(response) {
            alert("URAIAN BARANG FAILED!");
        }
    });

    $.ajax({
        type: "GET",
        url: "https://insw-dev.ilcs.co.id/my/n/tarif?hs_code=10079000",
        data: fd,
        enctype: 'multipart/form-data',
        cache: false,
        processData: false,
        async: false,
        contentType: false,
        success: function(response) {
            // console.log(response.data);
            bm = response.data[0].bm;
        },
        error: function(response) {
            alert("BM FAILED!");
        }
    });

    insertDB();

    function insertDB() {
        // var kode_barang = $("#kode-barang").val();
        // var nilai_komoditas = $("#nilai-komoditas").val();
        var fd = new FormData();

        fd.append("kode_barang", kode_barang);
        fd.append("uraian_barang", uraian_barang);
        fd.append("bm", bm);
        fd.append("nilai_komoditas", nilai_komoditas);
        fd.append("nilai_bm", nilai_komoditas * bm / 100);

        $.ajax({
            type: "POST",
            url: "http://localhost/pt_ilcs/backend.php",
            data: fd,
            enctype: 'multipart/form-data',
            cache: false,
            processData: false,
            async: false,
            contentType: false,
            success: function(response) {
                alert("INSERT DATA BERHASIL");
            },
            error: function(response) {
                alert("INSERT DATA GAGAL!");
            }
        });
    }
</script>