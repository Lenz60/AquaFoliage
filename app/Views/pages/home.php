<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" type="text/css" href="/css/app.css" />
<div class="container">
    <div class="row">
        <div class="col">
            <form method="GET" action="/logout">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    <h1>LOGOUT</h1>
                </button>
            </form>

            <p>This text here</p>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>