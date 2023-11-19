<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum PemWeb RA 121140197 - Daftar Data Mahasiswa</title>
</head>
<body>
    <div class="all">
        <div class="header">
            <h1>Data Mahasiswa</h1>
        </div>
        
        <div class="post">
            <h2>Daftar Data Mahasiswa</h2>
            <div class="post">
            <div class="form">
                <form action="" method="get">
                    <select name="search" class="in2" />
                        <option value=""></option>
                        <option value="AR">Arsitektur (AR)</option>
                        <option value="MA">Matematika (MA)</option>
                        <option value="EL">Teknik Elektro (EL)</option>
                        <option value="TF">Teknik Fisika (TF)</option>
                        <option value="TI">Teknik Industri</option>
                        <option value="IF">Teknik Informatika (IF)</option>
                        <option value="KL">Teknik Kelautan (KL)</option>
                        <option value="TK">Teknik Kimia (TK)</option>
                        <option value="TL">Teknik Lingkungan</option>
                        <option value="MT">Teknik Material (MT)</option>
                        <option value="TM">Teknik Mesin</option>
                        <option value="MG">Teknik Metalurgi (MG)</option>
                        <option value="PG">Teknik Pangan (PG)</option>
                        <option value="TA">Teknik Pertambangan (TA)</option>
                        <option value="SI">Teknik Sipil (SI)</option>
                    </select>
                    <input type="submit" class="btn1" value="Cari">
                </form>
            </div>

            <div class="hasil">
                <table>
                    <div class="stick">
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Program Studi</th>
                        </tr>
                    </div>
                    <?php
                    include 'koneksi.php';
                    $no = 1;

                    if (isset($_GET['search'])) {
                        $code = $_GET['search'];
                        $data = mysqli_query($conn, "SELECT * FROM mhs WHERE prodi LIKE '%".$code."%' ORDER BY nim asc");
                    } else {
                        $data = mysqli_query($conn, 'SELECT * FROM mhs');
                    }

                    while ($show = mysqli_fetch_array($data)) {
                        echo "
                        <tr>
                            <td>$no</td>
                            <td>$show[nim]</td>
                            <td>$show[nama]</td>
                            <td>$show[prodi]</td>
                        </tr>
                        ";
                        $no++;
                    };
                    ?>
                </table>
            </div>
        </div>

        <div class="post">
            <h2>Tambah Data Mahasiswa</h2>
            <div class="form">
                <form action="" method="post">
                    <label for="nim" class="lbl">NIM:</label>
                    <input type="text" name="nim" maxlength="9" class="in1" required><br>
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" maxlength="50" class="in1" required><br>
                    <label for="prodi">Prodi:</label>
                    <input type="text" name="prodi" maxlength="2" class="in1" required><br>
                    <input type="submit" class="btn1" value="Tambahkan">
                </form>
                <?php
                include 'koneksi.php';
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nim = $_POST['nim'];
                    $nama = $_POST['nama'];
                    $prodi = $_POST['prodi'];

                    $query = "INSERT INTO mhs (nim, nama, prodi) VALUES ('$nim','$nama','$prodi')";

                    if (mysqli_query($conn, $query)) {
                        echo "Data berhasil ditambahkan.";
                        echo "<a href='index1.php'>Kembali</a>";
                    } else {
                        echo "Error: " . $query . "<br>" . mysqli_error($conn);
                    }
                }
                ?>
            </div>
        </div>

        <div class="post">
            <h2>Edit Data Mahasiswa</h2>
            <div class="form">
                <form action="" method="post">
                    <label for="edit">NIM data yang diedit:</label>
                    <input type="text" name="edit" maxlength="9" class="in1" required><br>
                    <label for="nim">NIM:</label>
                    <input type="text" name="nim" maxlength="9" class="in1" required><br>
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" maxlength="50" class="in1" required><br>
                    <label for="prodi">Prodi:</label>
                    <input type="text" name="prodi" maxlength="2" class="in1" required><br>
                    <input type="submit" value="Edit" class="btn1"/>
                </form>
                <?php
                include 'koneksi.php';

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $edit = $_POST['edit'];
                    $nim = $_POST['nim'];
                    $nama = $_POST['nama'];
                    $prodi = $_POST['prodi'];

                    $query = "UPDATE mhs SET nim = '$nim', nama = '$nama', prodi = '$prodi' where nim = '$edit'";

                    if (mysqli_query($conn, $query)) {
                        echo "Data berhasil diedit.";
                        echo "<a href='index1.php'>Kembali</a>";
                    } else {
                        echo "Error: " . $query . "<br>" . mysqli_error($conn);
                    };
                }
                ?>
            </div>
        </div> 

        <div class="post">
            <h2>Hapus Data Mahasiswa</h2>
            <div class="form">
                <form action="" method="get">
                    <label for="del">NIM data yang dihapus:</label>
                    <input type="text" name="del" maxlength="9" class="in1" required><br>
                    <input type="submit" class="btn1" value="Hapus">
                </form>
                <?php
                include ("koneksi.php");
                if (isset($_GET['del'])) {
                    $delete_kode = $_GET['del'];
                    $delete_query = "DELETE FROM mhs WHERE nim = '$delete_kode'";

                    if (mysqli_query($conn, $delete_query)) {
                        echo "Data berhasil dihapus.";
                        echo "<a href='index1.php'>Kembali</a>";
                    } else {
                        echo "Error: " . $delete_query . "<br>" . mysqli_error($conn);
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>