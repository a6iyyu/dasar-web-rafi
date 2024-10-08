<!doctype html>
<html>
  <head>
    <title>Contoh Form dengan PHP dan jQuery</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body>
    <h2>Form Contoh</h2>
    <form id="my-form">
      <label for="buah">Pilih Buah:</label>
      <select name="buah" id="buah">
        <option value="apel">Apel</option>
        <option value="pisang">Pisang</option>
        <option value="mangga">Mangga</option>
        <option value="jeruk">Jeruk</option>
      </select>
      <br />

      <label>Pilih Warna Favorit:</label><br />
      <input type="checkbox" name="warna[]" value="merah" /> Merah<br />
      <input type="checkbox" name="warna[]" value="biru" /> Biru<br />
      <input type="checkbox" name="warna[]" value="hijau" /> Hijau<br />
      <br />

      <label>Pilih Jenis Kelamin:</label><br />
      <input type="radio" name="jenis_kelamin" value="laki-laki" />
      Laki-laki<br />
      <input type="radio" name="jenis_kelamin" value="perempuan" />
      Perempuan<br />
      <br />

      <input type="submit" value="Submit" />
    </form>
    <div id="hasil">
      <!-- Hasil akan ditampilkan disini -->
    </div>
    <script>
      $(document).ready(() => {
        $("#my-form").submit((e) => {
          e.preventDefault();
          var form_data = $("#my-form").serialize();
          $.ajax({
            url: "proses-lanjut.php",
            type: "POST",
            data: form_data,
            success: (response) => {
              $("#hasil").html(response);
            },
          });
        });
      });
    </script>
  </body>
</html>
