<?php

require_once "includes/db.php";

$id = $_POST['id'];

if(empty ($id)){

  <div class="text-center"> No records found <a href="#" onclick="$('#link_add').hide(); $('#show_add').show(600)"> </div>
}

sql = "SELECT * FROM books WHERE id='$id'";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
  echo "lali";
}
 ?>

<div class="form-inline" id="edit-data">
<div class="form-group col-md-3" >
  <input type="text" name="title" id="title" value="<?php echo $row['Title'];?>" placeholder="Title" class="form-control" required >
</div>

<div class="form-group col-md-3" >
  <input type="text" name="Author" id="Author" value="<?php echo $row['Author'];?>" placeholder="Author" class="form-control" required >

 </div>

 <div class="form-group col-md-3" >
   <input type="text" name="Publisher" id="Publisher" value="<?php echo $row['Publisher'];?>" placeholder="Publisher" class="form-control" required >

  </div>

 <div class="form-group col-md-3" >
     <input type="text" name="Page_no" id="Page_no" value="<?php echo $row['Page_no'];?>" placeholder="Page_no" class="form-control" required >

        </div>

        <div class="form-group col-md-3">
          <button type="button" name="Update" class="btn-btn-outline-success mx-3" id="<?php echo $row['id'];?>"> Update </button>
         <button type="button" name="Add" class="btn-btn-outline-danger" href="javascript:void(0);" id="cancel"
         onclick="$('#link_add').slideUp(500); $('#show_add').show(700);"> Cancel </button>
        </div>
      </div>


      <?php



 ?>

<script type="text/javascript">

$('.update').click (function(){

  var id= $(this).attr('id');

  var author = $('#author').val();
  var title = $('#title').val();
  var publisher = $('#publisher').val();

  $.ajax({

    url: "update.php",
    type: "post",
    data: {"id: id, author:author , title:title, publisher:publisher Page_no:Page_no"},
    success : function(data, status, xhr){
      $('#author').val('');
      $('#title').val('');
      $('#publisher').val('');
      $('#records_content').fadeOut(1100).html(data);
      $.get("view.php", function(html){

        $('#table_content').html(html);
      })
      $('#records_content').fadeOut(1100).html(data);
    }

    complete: function(){
      $('#link_add').hide();
      $('#show_add').show(750);

    }

  })



})






</script>
