<?php

require_once "includes/db.php";

$result=$conn->query('SELECT * FROM books order by id');


?>


<table class="table table-bordered">
  <tr class="info">
    <th> Id </th>
    <th> Title </th>
    <th> Author </th>
    <th> Action </th>
  </tr>

<?php

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){

    echo'
    <tr>
    <td>'.$row["id"].'</td>
    <td>'.$row["title"].'</td>
    <td>'.$row["author"].'</td>
    <td><button id ="'.$row["id"].'" class = "edit btn btn-info"> Edit </button>
    <button class= " del btn btn-danger" id="'.$row["id"].'"> delete </button>
    </td>
    </tr>';
  }

  echo "</table>";
}

 ?>

<script type="text/javascript">

$('.del').click(function(){

  var id = $(this).attr('id');
  $.ajax({
url: 'delete.php',
type: 'post',
data: {id: id},
success : function(data){
  $('#records_content').fadeout(1000).html(data);
  $.get("view.php",function(data){
    $('#table_content').html(data);
  })
}


  })
})

$('.edit').click(function(){
  var id = $(this).attr('id');
  $('#show_add').hide();

$.ajax({

  url: "Edit.php",
  type: "post",
  data: {id:id},
  success: function(data){
    $('#link_add').html(data);
    $('#link_add').show();
  }
});

})

</script>
