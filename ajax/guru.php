<?php
require '../admin/functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM guru
                WHERE
            nama LIKE '%$keyword%' OR
            nip LIKE '%$keyword%' OR
            jabatan LIKE '%$keyword%'
        ";
$guru = query($query);




?>

<div class="row mt-3 ">
    <?php foreach ($guru as $row) : ?>
        <div class="col-lg-4 mb-5 mb-sm-0 my-3 ">
            <div class="card h-100 " style="border: 3px solid  #14274E">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="guru/image/<?= $row["foto"];  ?>" class="img-fluid rounded-start" alt="guru">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row["nama"]; ?></h5>
                            <p class="card-text ">
                            <ul class="list-unstyled">
                                <li><b>NIP : </b><?= $row["nip"]; ?> </li>
                                <li><b>Jabatan : </b> <?= $row["jabatan"]; ?> </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>