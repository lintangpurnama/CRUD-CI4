<?= $this->extend('layout/template');?>

<?= $this->section('content');?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Daftar Komik</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="/img/tes.png" alt="" class ="sampul"></td>
                        <td>Otto</td>
                        <td><button type="button" class="btn btn-primary">Primary</button></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection('content');?>