<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praktek php</title>
    <form action="proses.php" method="POST">
</head>
<body>
    <fieldset>
        <p>
            <label for="NIK">NIK :</label>
            <input type="number" name="NIK " />
        </p>
        <p>
            <label for="jenis_kendaraan">Jenis Kendaraan :</label>
            <select name="jenis_kendaraan">
                <option value="motor">motor</option>
                <option value="mobil">mobil</option>
                <option value="truk">truk</option>
                <option value="bis">bis</option>
                <option value="tossa">tossa</option>
            </select>
        </p>
        <p>
            <input type="submit" name="tambah" value="tambah">
</p>
    </fieldset>
</body>
</html>