<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php
if($_SERVER['REQUEST_URI']=="") {
header("Location: /keyword");}
?>
<script>
function prettySubmit(form, evt) {
   evt.preventDefault();
   window.location = form.q.value.replace(/ /g, '-');
   return false;
}    
</script>
<?php 
$key= str_replace('-', ' ',$_GET['q']);
$keyword= str_replace('-', ', ',$_GET['q']);

?>
<title><?php echo ucwords($key); ?> </title>
  <meta name="description" content="<?php echo $key;?>" />
  <meta name="keywords" content="<?php echo $key;?>" />
  </head>
<body>
 <h1 style="font-size:18px;color:white;">Search Result: <?php echo ucwords($key); ?></h1>
 <form action="get" action="" onsubmit='return prettySubmit(this, event);' method="post">

		<input type="text" name="q" value="" placeholder="Search more course..." size="30px">

			
			<button type="submit"><i class="fa fa-search"></i></button>

		</form>
    
        
