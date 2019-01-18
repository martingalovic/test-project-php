<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title>PHP Test Application</title>

    <link href="favicon.ico" type="image/x-icon" rel="icon"/>
    <link href="favicon.ico" type="image/x-icon" rel="shortcut icon"/>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
          href="assets/plugins/toastr/toastr.min.css?<?= filectime(APP_ROOT . '/assets/plugins/toastr/toastr.min.css') ?>">
    <link rel="stylesheet" type="text/css"
          href="css/application.css?<?= filectime(APP_ROOT . '/css/application.css') ?>">

    <script type="text/javascript" charset="utf-8" src="js/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf-8"
            src="assets/plugins/toastr/toastr.min.js?<?= filectime(APP_ROOT . '/assets/plugins/toastr/toastr.min.js') ?>"></script>
    <script type="text/javascript" charset="utf-8"
            src="js/application.js?<?= filectime(APP_ROOT . '/js/application.js') ?>"></script>

</head>
<body>

<div class="container">

    <?= $content ?>

</div>

</body>
</html>