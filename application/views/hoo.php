<!DOCTYPE html>
<html>

<body>
    



<div class="col-sm-6">
 
<h2 style="text-transform:uppercase">
 <?php echo $type; ?>
</h2>
 
<h3>
<?php foreach($result  as $r): ?>
</h3>

<?php echo $r->eventname."<br>"; ?>

   
<?php endforeach; ?>

  <script src="js/home.js"></script>

  

</body>
</html>