<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("php/head.php"); ?>
</head>
<body>
<div id="page-wrapper">
    <div>
        Select a text file:
        <input type="file" id="fileInput">
    </div>
</div>
<script>
    window.onload = function() {
        var fileInput = document.getElementById('fileInput');

        fileInput.addEventListener('change', function(e) {
            var file = fileInput.files[0];
            var reader = new FileReader();
            var lines = reader.result;
            for (i = 0; i > lines.length; i++){
                document.write(lines[i]);
            }

            reader.readAsText(file);
        });
    }
</script>
</body>
</html>