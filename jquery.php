<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
  $("#status").on('change',function(){
    var i = 0;
    var selecionados= [];
    $.each($("input[class='directions']:checked"), function(){
      // selecionados.push("{ email: '"+$(this).val()+"'}");
      selecionados.push("{ email: '"+$(this).attr("data-email")+"'}");
      i = i + 1;
    });
    if (i>0) {
     if (confirm('Confirma Ação :' + this.value +' ?')) {

   
       payload = "{ status:'"+this.value +"', lista: [" + selecionados.join(",")+"] }";
       alert("Payload: " +payload);
       location.reload();
     }
    }
   this.value = 'Selecione a Ação';
  });
});
</script>
</head>
<body>
<select id="status">
<option default>Selecione a Ação</option>
<option>Status 1</option>
<option>Status 2</option>
</select>
<h3>Select Day(s)</h3><table>
<tr><td>1</td><td><input type="checkbox" data-email="0mon@XXX" value="mon@XXX" class="directions"></td></tr>
<tr><td>2</td><td><input type="checkbox" data-email="1mon@XXX" value="tue@XXX" class="directions"></td></tr>
<tr><td>3</td><td><input type="checkbox" data-email="2mon@XXX" value="wed@xxx" class="directions"></td></tr>
<tr><td>4</td><td><input type="checkbox" data-email="3mon@XXX" value="thu@xxx" class="directions"></td></tr>
<tr><td>5</td><td><input type="checkbox" data-email="4mon@XXX" value="fri@xxx" class="directions"></td></tr>
</table>
<br> <br><button type="button" id="bbbb">Get selected day(s)</button>
</body>
</html>

update bancotalentos set status=(variuavel_status) where email in (lista de e-mails)