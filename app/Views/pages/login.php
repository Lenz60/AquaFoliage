<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?php $validation = \Config\Services::validation(); ?>
<div class="container my-5">
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
            <button type="submit" class="btn btn-primary">Submit</button>
            <label class="ms-5 "><a href="/register">Register</a></label>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>