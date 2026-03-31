<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="form" action="proses.php" method="post">
        Nilai : <input type="text" name="angka" /> 
        <br/>

        Jurusan :
        <select name = "jurusan">
            <option value=""> Pilih </option>
            <option value="ti"> Teknik Informatika </option>
            <option value="si"> Sistem Informasi </option>
            <option value="mi"> Manajemen Informatika </option>
            <option value="tk"> Teknik Komputer </option>
            <option value="ka"> Komputer Akuntansi </option>
        </select><br>
        <input type="submit" value="SUBMIT" />
    </form>
</body>
</html>