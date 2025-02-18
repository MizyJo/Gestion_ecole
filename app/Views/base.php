<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("css/bootstrap.min.css") ?>">
    <title><?= $this->renderSection('titre') ?></title>
</head>
<body style="background-image: url('<?= base_url("img/a.jpg") ?>');background-repeat : no-repeat; background-size: cover;">
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <script src="<?=base_url("js/bootstrtap.min.js") ?>"></script>
</body>
</html>