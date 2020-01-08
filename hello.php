<!DOCTYPE HTML>
<html>
<head>
   <style>.error {color:red;}</style>
<title>PHP FORM</title>
</head>
<script src="jquery.js"> </script>

<body>  

   <h2>PHP FORM </h2>
   <form method="POST" action="form.php">  
    <input type="text" id="fname" name="fname" placeholder="First Name">
     <br><br>
     <input tyep="text" id="lname" name="lname" placeholder="Last Name">
     <br><br>
    <input type="text" id="full" name="fullname" placeholder="Full Name" disabled ><br><br>
     <input type="submit" name="submit" value="Submit">  
   </form>

<script type="text/javascript">
  $('#fname').keyup(()=>
  {
    document.getElementById('lname').value=""
    document.getElementById('full').value=$('#fname').val()+" "+$('lname').val();

  })
  $('#lname').keyup(()=>
  {
    document.getElementById('full').value=$('#fname').val()+" "+$('#lname').val();

  })

  </script>

</body>
</html>