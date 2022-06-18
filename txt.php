<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>TinyMCE WYSIWYG Bootstrap</title>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script src="https://cdn.tiny.cloud/1/yu3m37oe5p7roe5ps1um0bllx1j6galzal6myu5xpplviit7/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
    tinymce.init({
        selector: 'textarea#editor',
        skin: 'bootstrap', //The TinyMCE Bootstrap skin
        plugins: 'lists, link, image, media',
        toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
        menubar: false,
        setup: (editor) => {
            // Apply the focus effect
            editor.on("init", () => {
                editor.getContainer().style.transition =
                    "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out";
            });
            editor.on("focus", () => {
                (editor.getContainer().style.boxShadow = "0 0 0 .2rem rgba(0, 123, 255, .25)"),
                (editor.getContainer().style.borderColor = "#80bdff");
            });
            editor.on("blur", () => {
                (editor.getContainer().style.boxShadow = ""),
                (editor.getContainer().style.borderColor = "");
            });
        },
    });
    </script>

</head>

<body>

    <div class="container mt-4 mb-4">
        <!--Bootstrap classes arrange web page components into columns and rows in a grid -->
        <div>
            <div>
                <div class="form-group">
                    <textarea name="message1" id="editor"><?=$announcement['message']?></textarea>
                </div>
            </div>
        </div>
    </div>

</body>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"
    integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA=="
    crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

</html>