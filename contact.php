<?php
$insert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
include 'connection.php';
$email = $_POST['email'];
$query = $_POST['query'];
$member = $_POST['member'];
$professor = $_POST['professor'];
$coder = $_POST['coder'];
$description = $_POST['description'];
$exits = false;
// Sql query to be executed

$sql = "INSERT INTO  `login`.`contact` (`email`, `query`, `member`, `professor`, `coder`, `description`, `date`) 
VALUES ( '$email', '$query', '$member', '$professor', '$coder', '$description', current_timestamp());";
$result = mysqli_query($conn, $sql);
if($result){ 
  // echo "success";
  $insert;

}
else{
  $showError = "Passwords do not match";
}
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>iCoder - Programmers Blog</title>
</head>

<body>
<?php require 'nav.php'; ?>

<?php
  if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your registration is completed 
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  if($showError) {
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Sorry!</strong> Please sign up  for the login
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>

    <div class="container my-4">
        <h2>Contact Us</h2>
        <form action = "/cwd/bootstrap/php bootstrap project/contact.php" method = "POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" name = "email" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select your Query</label>
                <select class="form-control" name = "query"id="exampleFormControlSelect1">
                    <option>Web</option>
                    <option>Tech Stack</option>
                    <option>Technology</option>
                    <option>Others</option>
                </select>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Are you a Member?</div>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1" name = "member">
                        <label class="form-check-label" for="gridCheck1">
                            Yes
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Are you a professor?</div>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck2" name = "professor">
                        <label class="form-check-label" for="gridCheck2">
                            Yes
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Are you a Coder?</div>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck3" name = "coder">
                        <label class="form-check-label" for="gridCheck3">
                            Yes
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Tell us about yourself</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name = "description" rows="3"></textarea>
            </div>
            
            <button class="btn btn-primary">Submit</button>
        </form>

    </div>

    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>© 2020-2021 iCoder, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>