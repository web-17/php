<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BOOKS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"></link
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php require_once'includes/nav_bar.php';
    ?>



<div class="container-fluid">
<div class="jumbotron m-5">
<h1 class="text-center"> MY BOOKS </h1>

</div>
  </div>

<div class="container">
  <div class="row"></div>
    <div class="col-md-12"></div>
      <div class="pull-right"></div>
        <button class="btn btn-success" id="show_add" style="float:right"> Add New Book </button>
      </div>

<div class="form-inline">
<div class="form-group col-md-4" >
  <input type="text" name="title" value="" placeholder="Title" class="form-control" required
</div>

<div class="form-group col-md-4" >
  <input type="text" name="title" value="" placeholder="Author" class="form-control" required >

 </div>

 <div class="form-group col-md-4" >
   <input type="text" name="title" value="" placeholder="Publisher" class="form-control" required >

  </div>

 <div class="form-group col-md-4" >
     <input type="text" name="title" value="" placeholder="Page_no" class="form-control" required >

        </div>

    <div class="form-group col-md-4 my-2">
      <button type="button" name="button" class="btn-btn-outline-success form-group"> Add </button>
     <button type="button" name="button" class="btn-btn-outline-success form-group"> Add </button>

    </div>

    <div class="form-group col-md-4 my-2">
      <button type="button" name="Add" class="btn-btn-outline-success mx-3 px-4" id="add"> Add </button>
     <button type="button" name="button" class="btn-btn-outline-danger" href="javascript"> Add </button>

<div class="row">
  <div class="col-md-12">
    <div class="" id="records_content">
      <!-- kjo do manipulohet me javascript dom-->
</div>

<br>

<div class="col-md-offset-1 col-md-10" id="table_content">

 </div>

</div>


  </body>








</html>
