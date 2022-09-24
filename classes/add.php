<?php

include "../init.php";
use Models\Classes;

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Registration Form</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>

<section class="vh-100">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">
        <h1 class="text-black mb-4">Add a New Class</h1>

        <form action="add-class.php" enctype="multipart/form-data" method="POST">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body">

              <div class="row align-items-center pt-4 pb-3">
                <div class="col-md-3 ps-5">
                  <label for="name"><h6 class="mb-0">Class Name</h6></label>
                </div>
                <div class="col-md-9 pe-5">
                  <input type="text" name="name" id="name" class="form-control form-control-lg"required>
                </div>
              </div>

              <hr class="mx-n3">
              <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">
                <label for="description"><h6 class="mb-0">Description</h6></label>
                </div>
                <div class="col-md-9 pe-5">
                  <input type="text" name="description" id="description" class="form-control form-control-lg"required>
                </div>
              </div>

              <hr class="mx-n3">
              <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">
                <label for="class_code"><h6 class="mb-0">Class Code</h6></label>
                </div>
                <div class="col-md-9 pe-5">
                  <input type="text" name="class_code" id="class_code" class="form-control form-control-lg"required>
                </div>
              </div>

              <hr class="mx-n3">
              <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">
                <label for="teacher_id"><h6 class="mb-0">Teacher ID</h6></label>
                </div>
                <div class="col-md-9 pe-5">
                  <select type="text" name="teacher_id" id="teacher_id" class="form-control form-control-lg">
                    <option value="teacher_id"> </option>
                    <option value="teacher_id">001</option>
                  </select>
                </div>
              </div>

              <hr class="mx-n3">
              <div class="px-5 py-4">
                <button id="submit" type="submit" class="btn btn-primary btn-lg" style="background-color:#435d7d;"><b>Add Class</b></button>
              </div>

            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</section>
</body>

</html>