$(document).ready function(){

  $.get("view.php", function(data){
    $("#table_content".html(data))
  }

$('#link_add').hide();
$('#show_add').click()(function())
$('#link_add').slideDown(500);
$('#show_add').hide();

});

$('#add').click(function(){

  var author = $('#author').val();
  var author = $('#Title').val();
  var author = $('#Publisher').val();
  var author = $('#Page_no').val();

$.ajax({

  url:"add.php",
  type:"post",
  data : {Author:author, title:title, Publisher:publisher, Page_no:Page_no},
  success: function(data, status, xhr){
    $('#author').val('');
    $('#title').val('');
    $('#publisher').val('');
    $('#Page_no').val('');

    $.get('view.php', function(html){

      $('#table_content').html(html);
    });
    $('#records_content').fadeout(1000).html(data);
  },

  console.error();
})


})
