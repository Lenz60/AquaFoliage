<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <form method="GET" action="/logout">
                <button type="submit" class="button">
                    <h1>LOGOUT</h1>
                </button>
            </form>

            <p>This text here</p>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>