<?php
include "./function.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid">
        <?php include "navbar.php"; ?>
        <center>
            <?php if (!empty($_SESSION['success'])) { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>SUCCESS</strong> <?= $_SESSION['success'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
        </center>
        <div class="row row-sm m-3">
            <div class="col-lg-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div>
                            <h3 class="card-title mb-1">Table</h3>
                            <p class="text-muted card-sub-title">Table Display.</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table border text-nowrap text-md-nowrap table-striped mg-b-0">
                                <thead>
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Name</th>
                                        <th>email</th>
                                        <th>created at</th>
                                        <th>Date of birth</th>
                                        <th>Check</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM users ORDER BY id DESC";

                                    $result = $db_conn->query($sql);
                                    if ($result) {

                                        while ($data = mysqli_fetch_object($result)) {

                                    ?>
                                            <tr>
                                                <td><?= $data->user_name ?></td>
                                                <td><?= $data->email ?></td>
                                                <td><?= $data->created_at ?></td>
                                                <td><?= $data->dob ?></td>
                                                <td><?= $data->chk ?></td>
                                            </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>