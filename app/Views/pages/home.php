<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" type="text/css" href="/css/app.css" />
<div class="container">
    <div class="row">
        <div class="col">
            <form method="GET" action="/logout">
                <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    <h1>LOGOUT</h1>
                </button>
            </form>

            <p>This text here</p>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>