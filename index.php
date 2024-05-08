<?php 
 include "function.php";
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
    <div class="row m-5">
        <div class="col-lg-12 col-xl-10 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form</h4>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="" method="POST">
                        <div class=" row mb-4">
                            <label for="inputName" class="col-md-3 form-label">User Name</label>
                            <div class="col-md-9">
                                <input type="text" name="user_name" value="<?=$userName ?? "" ?>" class="form-control" id="inputName" placeholder="Name">
                                <em class="text-danger ">
                                    <?=$erroruserName?>
                                </em>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label for="inputEmail3" class="col-md-3 form-label">Email</label>
                            <div class="col-md-9">
                                <input type="email" name="email" class="form-control" value="<?=$email ?? "" ?>"  id="inputEmail3" placeholder="Email" >
                                <em class="text-danger "><?=$errorEmail?></em>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label for="inputPassword3" class="col-md-3 form-label">Password</label>
                            <div class="col-md-9">
                                <input type="password" name="password" value="<?=$password ?? "" ?>" class="form-control" id="inputPassword3" placeholder="Password">
                                <em class="text-danger "><?=$errorPassword?></em>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label for="inputPassword3" class="col-md-3 form-label">Confirm Password</label>
                            <div class="col-md-9">
                                <input type="password" name="confirmPassword" value="<?=$confirmPassword ?? "" ?>" class="form-control" id="inputPassword3" placeholder="Password">
                                <em class="text-danger "><?=$errorPasswordConfirm?></em>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label for="inputPassword3" class="col-md-3 form-label">Date of Birth</label>
                            <div class="col-md-9">
                                <input type="date" name="dob" value="<?=$dob ?? "" ?>" class="form-control" id="inputPassword3" placeholder="date of birth">
                                <em class="text-danger "><?=$errordob?></em>
                            </div>
                        </div>
                        <div class="mb-0 row justify-content-end">
                            <div class="col-md-9">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox"class="custom-control-input" name="checkbox" value="Yes">
                                    <em class="custom-control-label">Check me Out</em>
                                </label>
                            </div>
                        </div>
                        <div class="mb-0 mt-4 row justify-content-end">
                            <div class="col-md-9">
                                <button  class="btn btn-primary" name="simple_form" type="submit">Create</button>
                                <button  class="btn btn-secondary" type="reset">Cancel</button>
                            </div>
                        </div>
                    </form>
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