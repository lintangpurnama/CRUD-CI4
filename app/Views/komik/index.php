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
                    <?php $i=1;?>
                    <?php foreach ($komik as $k):?>
                    <tr>
                        <th scope="row"><?= $i++;?></th>
                        <td><img src="/img/<?= $k['sampul'];?>" alt="" class ="sampul"></td>
                        <td><?= $k['judul']; ?></td>
                        <td><button type="button" class="btn btn-primary">Primary</button></td>
                    </tr>
                        <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection('content');?>