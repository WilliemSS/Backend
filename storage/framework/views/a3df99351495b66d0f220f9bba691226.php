<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Database</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #000000; /* black background color */
            color: #ffffff; /* white text color for better readability */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>API Links</h1>
        <div class="list-group">
            <a href="<?php echo e(url('/api/matkul')); ?>" class="list-group-item list-group-item-action">View Matkul API</a>
            <a href="<?php echo e(url('/api/mahasiswa')); ?>" class="list-group-item list-group-item-action">View Mahasiswa API</a>
            <a href="<?php echo e(url('/api/dosen')); ?>" class="list-group-item list-group-item-action">View Dosen API</a>
            <a href="<?php echo e(url('/api/daftar-pengajar')); ?>" class="list-group-item list-group-item-action">View Daftar Pengajar API</a>
        </div>
    </div>
    <!-- Include Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html><?php /**PATH C:\Study\Test Interview\Backend\resources\views/welcome.blade.php ENDPATH**/ ?>