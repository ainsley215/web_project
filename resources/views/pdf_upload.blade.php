<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload PDF dengan Dropzone</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css">
</head>
<body>

    <h2>Upload PDF dengan Dropzone</h2>
    <form action="{{ route('pdf.store') }}" method="post" class="dropzone" id="pdfDropzone">
        @csrf
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
    <script>
        Dropzone.options.pdfDropzone = {
            paramName: "file", // Sesuaikan dengan request
            maxFilesize: 10, // Maksimal 10MB
            acceptedFiles: ".pdf",
            success: function(file, response) {
                console.log(response);
            }
        };
    </script>

</body>
</html>