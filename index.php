<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tabel Mahasiswa</h1>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>Nama Mahasiswa</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
        </tr>

        <?php
        $nilaimhs = array(
            array (
            "namamhs" => "Raffi Ahmad",
            "tugas" => 95,
            "uts" => 100,
            "uas" => 65
        ),
        array(
            "namamhs" => "Ahmad Dani",
            "tugas" => 90,
            "uts" => 95,
            "uas" => 60
        )
        );

        foreach($nilaimhs as $nilaimahasiswa){
            ?>
        <tr>
            <td><?php echo $nilaimahasiswa['namamhs']; ?></td>
            <td><?php echo $nilaimahasiswa['tugas']; ?></td>
            <td><?php echo $nilaimahasiswa['uts']; ?></td>
            <td><?php echo $nilaimahasiswa['uas']; ?></td>
        </tr>
        <?php
        }
        ?>

    </table>
</body>

</html>