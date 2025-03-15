<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Upload dengan Dropzone</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css">
</head>

<body>

    <h2>Upload File dengan Dropzone</h2>
    
    <form action="{{ route('dropzone.store') }}" method="post" class="dropzone" id="dropzoneForm">
        @csrf
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
    <script>
        Dropzone.options.dropzoneForm = {
            paramName: "file",
            maxFilesize: 5, // Maksimal ukuran file 5MB
            acceptedFiles: "*", // Menerima semua jenis file
            uploadMultiple: false, // Upload satu per satu
            parallelUploads: 5, // Maksimal 5 file dalam satu sesi
            dictDefaultMessage: "Seret dan lepaskan file di sini atau klik untuk mengunggah.",
            success: function (file, response) {
                console.log(response);
                alert(response.success); // Tampilkan alert sukses
            },
            error: function (file, response) {
                console.log(response);
                alert('Gagal upload file!');
            },
            removedfile: function (file) {
                file.previewElement.remove(); // Hapus file dari tampilan jika dibatalkan
            }
        };
    </script>

</body>

</html>