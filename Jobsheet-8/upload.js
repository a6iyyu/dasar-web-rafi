$(document).ready(() => {
  $("#file").change(function() {
    this.files.length > 0 ? $("#upload-button").prop("disabled", false).css("opacity", 1) : $("#upload-button").prop("disabled", true).css("opacity", 0.5) ;
  });
  $("upload-form").submit((e) => {
    e.preventDefault();
    let form_data = new FormData(this);
    $.ajax({
      type: "POST",
      url: "upload-ajax.php",
      data: form_data,
      cache: false,
      contentType: false,
      processData: false,
      success: (response) => {
        $("#status").html(response);
      },
      error: () => {
        $("#status").html("Terjadi kesalahan saat mengungaah file.");
      },
    });
  });
});