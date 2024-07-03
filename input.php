<!-- index.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Alumni</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="mt-5">Input Data Alumni</h2>
        <form action="saved.php" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nim">NIM:</label>
                        <input type="text" class="form-control" id="nim" name="nim" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap:</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                    </div>
                    <div class="form-group">
                        <label for="tahun_masuk">Tahun Masuk:</label>
                        <input type="number" class="form-control" id="tahun_masuk" name="tahun_masuk" required>
                    </div>
                    <div class="form-group">
                        <label for="tahun_lulus">Tahun Lulus:</label>
                        <input type="number" class="form-control" id="tahun_lulus" name="tahun_lulus" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_usaha">Nama Usaha:</label>
                        <input type="text" class="form-control" id="nama_usaha" name="nama_usaha">
                    </div>
                    <div class="form-group">
                        <label for="alamat_usaha">Alamat Usaha:</label>
                        <textarea class="form-control" id="alamat_usaha" name="alamat_usaha"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="website">Website:</label>
                        <input type="text" class="form-control" id="website" name="website">
                    </div>
                    <div class="form-group">
                        <label for="link_marketplace">Link ke Marketplace:</label>
                        <input type="text" class="form-control" id="link_marketplace" name="link_marketplace">
                    </div>
                    <div class="form-group">
                        <label for="no_telepon">No. Telepon Bisnis:</label>
                        <input type="text" class="form-control" id="no_telepon" name="no_telepon">
                    </div>
                    <div class="form-group">
                        <label for="instagram">Instagram:</label>
                        <input type="text" class="form-control" id="instagram" name="instagram">
                    </div>
                    <div class="form-group">
                        <label for="tiktok">TikTok:</label>
                        <input type="text" class="form-control" id="tiktok" name="tiktok">
                    </div>
                    <div class="form-group">
                        <label for="facebook">Facebook:</label>
                        <input type="text" class="form-control" id="facebook" name="facebook">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
