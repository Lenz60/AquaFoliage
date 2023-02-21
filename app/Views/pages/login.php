<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container my-5">
    <form action="/saveLogin" method="POST">
        <?= csrf_field(); //*csrf secure 
        ?>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <label class="ms-5 "><a href="#">Register</a></label>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>