<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?= $this->include('templates/css'); ?>
   <title>Absensi QR Code</title>
   <style>
      body {
         background-image: url(<?= base_url('public/assets/img/bg2.jpg'); ?>);
         background-size: cover;
      }

      .navbar-brand>b {
         color: white;
         text-shadow: 2px 2px 2px black;
      }

      .main-panel {
         position: relative;
         float: left;
         width: calc(100%);
         transition: 0.33s, cubic-bezier(0.685, 0.0473, 0.346, 1);
      }

      #previewKamera {
         background-color: grey;
         /* min-width: 200px; */
         min-height: 200px;
         max-width: 500px;
         max-height: 500px;
      }

      .form-select {
         min-width: 200px;
      }
   </style>
</head>

<body>
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
      <div class="container-fluid">
         <div class="navbar-wrapper">
            <p class="navbar-brand"><b><?= $title; ?></b></p>
         </div>
         <div class="collapse navbar-collapse justify-content-end">
            <?= $this->renderSection('navaction') ?>
         </div>
      </div>
   </nav>
   <!-- End Navbar -->
   <?= $this->renderSection('content') ?>
   <?= $this->include('templates/js'); ?>
</body>

</html>