<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>PHP Strong Password Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="custom-box d-flex flex-column align-items-center justify-content-center">
            <h1>Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>
            <div class="error my-3">
                <p><?php echo $msg ?></p>
            </div>
            