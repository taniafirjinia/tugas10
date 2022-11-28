
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Entri mata kuliah</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2 title="taniafirjiniamahessa">ENTRI MATA KULIAH</h2>
  <form action="fc.php" method="POST">
    <div class="mb-3 mt-3">
      <label for="kmk">Kode Mata Kuliah</label>
      <input type="text" class="form-control" id="kmk" placeholder="Kode Mata Kuliah" name="kmk" title="Kode Mata Kuliah" required>
    </div>
    <div class="mb-3">
      <label for="mk">Mata Kuliah</label>
      <input type="text" class="form-control" id="mk" placeholder="Mata Kuliah" name="mk" title="Mata Kuliah" required>
    </div>
    <div class="mb-3">
      <label for="dp">Dosen Pengampuh</label>
      <input type="text" class="form-control" id="dp" placeholder="Dosen Pengampuh" name="dp" title="Dosen Pengampuh" required>
    </div>
    <button type="submit" name="tania" class="btn btn-primary" title="taniafirjiniamahessa">Simpan record</button> <a href="dft.php" class="btn btn-dark" title="taniafirjiniamahessa"> Daftar mata kuliah</a>
  </form>
</div>
</body>
</html>
