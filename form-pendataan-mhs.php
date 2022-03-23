<!doctype html>
<html>
<head>
    <style>
        td {
            border: 1px solid black;
        }
        th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <form action="inputMhs.php" method="post">
    <table>
    <tr>
        <td>Nim</td>
        <td><input type="text" placeholder="Masukkan Nim" name="nim"></td>
    </tr>
    <tr>
        <td>Program Studi</td>
        <td>
        <select name="programStudi">
        <option value="TI">Teknik Informatika</option>
        <option value="SI">Sistem Informasi</option>
        <option value="Sastra">Sastra</option>
        </select>
    </td>
    </tr>
    <tr>
        <td>Nilai Tugas</td>
        <td><input type="number" name="nilaitugas"></td>
    </tr>
    <tr>
        <td>Nilai UTS</td>
        <td><input type="number" name="nilaiuts"></td>
    </tr>
    <tr>
        <td>Nilai UAS</td>
        <td><input type="number" name="nilaiuas"></td>
    </tr>
    <tr>
        <td>Catatan Khusus</td>
        <td><input type="checkbox" name="hadir" value="hadir">Kehadiran >=70%</td>
        <td><input type="checkbox" name="aktif" value="interaktif">Interaktif dikelas</td>
        <td><input type="checkbox" name="tugas" value="tidak terlambat">Tidak Terlambat mengumpulkan tugas</td>
    </tr>
    <tr>
        <td><input type="submit" value="masukkan" name="submit"></td>
    </tr>
    
    </table>
    </form>

    <?php
    if (isset($_POST["submit"])){
        $nim=$_POST["nim"];
        $programStudi=$_POST["programStudi"];
        $uts=$_POST["nilaiuts"];
        $uas=$_POST["nilaiuas"];
        $tugas=$_POST["nilaitugas"];
        $nilaiAkhir = (($uas*4/10)+($uts*3/10)+($tugas*3/10));
        
    }
    ?>

    <br>
    <table>
        <tr>
            <th>Program Studi</th>
            <th>NIM</th>
            <th>Nilai Akhir</th>
            <th>STATUS</th>
            <th>Catatan Khusus</th>
        </tr>
        <tr>
            <td><?php if (isset($_POST["submit"])){
            echo $programStudi;} 
            ?></td>
            <td><?php if (isset($_POST["submit"])){
            echo $nim;}
            ?></td>
            <td><?php if (isset($_POST["submit"])){
                if ($uas && $uts && $tugas >100){
                echo "Nilai UAS/UTS/Tugas tidak boeh lebih dari 100";} 
                else{
                    echo $nilaiAkhir;
                }
                    }
                ?>
            </td>
            <td><?php if (isset($_POST["submit"])){
                if ($nilaiAkhir >= 60){
                echo "LULUS";} 
                else{
                    echo "Tidak Lulus";
                }
                    }
                ?></td>
            <td><ul><?php
            if (isset($_POST["hadir"])){
                $catatan1=$_POST["hadir"];
                echo "<li>".$catatan1."</li>";
            }
            if (isset($_POST["aktif"])){
                $catatan2=$_POST["aktif"];
                echo "<li>".$catatan2."</li>";
            }
            if (isset($_POST["tugas"])){
                $catatan3=$_POST["tugas"];
                echo "<li>".$catatan3."</li>";
            }
            ?></ul></td>
        </tr>
    </table>
    
</body>
</html>
