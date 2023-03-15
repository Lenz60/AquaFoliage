<?php if (!isset($_COOKIE['COOKIE-EXPIRED'])) {
    echo $this->extend('layout/template');
} elseif (isset($_COOKIE['COOKIE-BLACKLISTED'])) {
    echo $this->extend('layout/alert');
} elseif ($_COOKIE['COOKIE-EXPIRED']) {
    echo $this->extend('layout/alert');
} else {
    echo $this->extend('layout/alert');
} ?>
<?= $this->section('content'); ?>
<?php $validation = \Config\Services::validation(); ?>
<div class="container my-5">
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
    <form action="/login" method="POST">
        <?= csrf_field(); //*csrf secure 
        ?>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
            <?= $validation->getError('username'); ?>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            <?= $validation->getError('password'); ?>
        </div>
        <div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Submit</button>
            <label class="ms-5 "><a href="/register">Register</a></label>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>