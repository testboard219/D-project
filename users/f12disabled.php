<?php

?>

<html>
<head><title></title>
<style>
@media print {
    html, body {
       display: none;  /* hide whole page */
    }
}

</style>
<script>
document.addEventListener('keydown', function() {
  if (event.keyCode == 123) {
    alert("!");
    return false;
  } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
    alert("This function has been disabled !");
    return false;
  } else if (event.ctrlKey && event.keyCode == 85) {
    alert("!");
    return false;
  }
}, false);

if (document.addEventListener) {
  document.addEventListener('contextmenu', function(e) {
    alert("!");
    e.preventDefault();
  }, false);
} else {
  document.attachEvent('oncontextmenu', function() {
    alert("disabled!");
    window.event.returnValue = false;
  });
}
</script>
</head>
<body>
<h1>show room</h1>

<?php echo $time =date('d/m/Y');?>

<?php 
$link="../mirprime-logo/name.png";
$vt ='<img src="../mirprime-logo/name.png">';
//$vv="<img class="logo-light logo-img" src="../mirprime-logo/name.png" srcset="../../logo.png 2x" alt="logo">";
?>
<?php
echo $vt;
?>
<?php
echo $link;
?>



</body>
