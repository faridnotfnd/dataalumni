<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Alumni</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico">
</head>

<body>
    <div class="container">
        <h2 class="mt-5">Data Alumni</h2>
        <form method="get" action="">
            <div class="form-group">
                <label for="search">Search:</label>
                <input type="text" class="form-control" id="search" name="search"
                    value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#filterModal">
                Filter
            </button>
            <button type="submit" class="btn btn-primary ml-2">Search</button>
        </form>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "alumni_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $search = isset($_GET['search']) ? $_GET['search'] : '';
        $sql = "SELECT * FROM alumni WHERE 1";

        if (!empty($search)) {
            $sql .= " AND (nim LIKE '%$search%' OR nama_lengkap LIKE '%$search%' OR nama_usaha LIKE '%$search%' OR alamat_usaha LIKE '%$search%' OR website LIKE '%$search%' OR link_marketplace LIKE '%$search%' OR no_telepon LIKE '%$search%' OR instagram LIKE '%$search%' OR tiktok LIKE '%$search%' OR facebook LIKE '%$search%')";
        }

        if (isset($_GET['tahun_masuk']) && !empty($_GET['tahun_masuk'])) {
            $tahun_masuk = $_GET['tahun_masuk'];
            $sql .= " AND tahun_masuk = '$tahun_masuk'";
        }

        $sql .= " ORDER BY tahun_masuk DESC";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table table-bordered mt-3">';
            echo '<thead><tr><th class="align-top">Nama Lengkap</th><th class="align-top">Tahun Masuk</th><th class="align-top">Tahun Lulus</th><th class="align-top">Nama Usaha</th><th class="align-top">Alamat Usaha</th><th class="align-top">Website</th><th class="align-top">Link ke Marketplace</th><th class="align-top">No. Telepon Bisnis</th><th class="align-top">Instagram</th><th class="align-top">TikTok</th><th class="align-top">Facebook</th></tr></thead>';
            echo '<tbody>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['nama_lengkap'] . '</td>';
                echo '<td>' . $row['tahun_masuk'] . '</td>';
                echo '<td>' . $row['tahun_lulus'] . '</td>';
                echo '<td>' . $row['nama_usaha'] . '</td>';
                echo '<td>' . $row['alamat_usaha'] . '</td>';
                echo '<td>' . $row['website'] . '</td>';
                echo '<td>' . $row['link_marketplace'] . '</td>';
                echo '<td>' . $row['no_telepon'] . '</td>';
                echo '<td>' . $row['instagram'] . '</td>';
                echo '<td>' . $row['tiktok'] . '</td>';
                echo '<td>' . $row['facebook'] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else {
            echo '<div class="alert alert-warning mt-3">No data found</div>';
        }

        $conn->close();
        ?>
    </div>
    <div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="filterModalLabel">Filter Data Alumni</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="get" action="">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="tahun_masuk">Tahun Masuk:</label>
                            <select class="form-control" id="tahun_masuk" name="tahun_masuk">
                                <option value="">Pilih Tahun</option>
                                <?php
                                $current_year = date("Y");
                                for ($tahun = $current_year; $tahun >= $current_year - 40; $tahun--) {
                                    echo '<option value="' . $tahun . '"';
                                    if (isset($_GET['tahun_masuk']) && $_GET['tahun_masuk'] == $tahun) {
                                        echo ' selected';
                                    }
                                    echo '>' . $tahun . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Apply Filter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>