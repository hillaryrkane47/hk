$(document).ready(function(){
  $('#name').keypress(function(e){
        var txt = String.fromCharCode(e.which);
        console.log(txt + ' : ' + e.which);
        if(!txt.match(/[A-Za-z+#.]/))//+#-.
        {
            return false;
        }
    });

    $("#sendMessage").click(function(){
      var name=$("#name").val();
      var email=$("#email").val();
      var message=$("#message").val();
        $.ajax({
          method:"POST",
            url:"form.php",
          data: {name:name,email:email,message:message},
          success:function(msg){
            alert(msg);
          }
        });
    });
});
