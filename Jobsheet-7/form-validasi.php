<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="my-form" method="POST" action="proses-validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" />
        <span id="nama-error" style="color: red"></span>
        <br />

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" />
        <span id="email-error" style="color: red"></span>
        <br />

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" />
        <span id="password-error" style="color: red"></span>
        <br />

        <input type="submit" value="Submit" />
    </form>

    <div id="hasil"></div>

    <script>
        $(document).ready(() => {
            $("#my-form").submit(event => {
                event.preventDefault(); // Mencegah pengiriman form secara default

                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                $("#nama-error").text("");
                $("#email-error").text("");
                $("#password-error").text("");

                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (password.length < 8) {
                    $("#password-error").text("Password harus minimal 8 karakter.");
                    valid = false;
                }

                if (valid) {
                    var form_data = $(this).serialize(); // Serialize form data

                    $.ajax({
                        url: "proses-validasi.php", // URL untuk mengirim data
                        type: "POST",
                        data: form_data,
                        success: (response) => {
                            $("#hasil").html(response); // Menampilkan hasil di div #hasil
                        },
                        error: (jqXHR, textStatus, errorThrown) => {
                            console.error(textStatus, errorThrown); // Menangani error
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>