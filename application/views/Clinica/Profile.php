<div class="col-lg-5 col-lg-offset-2">
    <h1>Pagina de profile</h1>
	<p>Esta na pagina pos cadastro e login.</p>
	<?php if(isset($_SESSION['success'])){?>
		<div class="alert alert-sucess"> <?php echo $_SESSION['success'];?></div>
	<?php
	}?>
	
	Ola, <?php echo $_SESSION['nome']; ?>
	
	<br><br>
	
	<a href="<?php echo base_url(); ?>Clinica/logout">logout</a>
</div>