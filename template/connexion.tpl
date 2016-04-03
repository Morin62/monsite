	{if isset($connect)}

        <div class="alert alert-error" id="notif">
			{$connect}
	   </div>


	{/if}
		<h2> Connexion</h2>
		<h4> Saisissez les identifiants choisis lors de votre inscription</h4>
		<div>
			<form action="connexion.php" method="post" enctype="multipart/form-data" id="form_connexion" name="form_connexion">
				<div class="clearfix">
					<label for="email">Email : </label>
					<div class="input">
						<input type="email" name="email" id="email" value=""/>
					</div>
				</div>    
				<div class="clearfix">
					<label for="passe">Mot de passe : </label>
					<div class="input">
						<input type="password" name="passe" id="passe" value=""/>
					</div>
				</div>   

				<div class="form-actions">
					<input type="submit" name="connexion" value="connexion" class="btn btn-large btn-primary" />
				</div>   
			</form>
		</div>
