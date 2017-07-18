<?php /*PAGE TEMPLATE NAME: UPDATEDATABASE*/ ?>
<?php get_header(); ?>
		<style>
			.updateDatabase-form
			{
				width: 410px;
				height: 199px;
				padding: 5rem;
				position: fixed;
				top: 2rem;
				left: 40rem;
				z-index: 99999;
				background: #fff;
			}

			.updateDatabase-form form div input
			{
				color: #000;
			}
		</style>
		<div class="updateDatabase-form">
			<form action="updateDatabaseCode" method="POST">
				<div class="ud-row">
					<label>Hostname: </label>
					<input type="text" name="ud-hostname">
				</div>
				<div class="ud-row">
					<label>Username: </label>
					<input type="text" name="ud-username">
				</div>
				<div class="ud-row">
					<label>Password: </label>
					<input type="password" name="ud-password">
				</div>
				<div class="ud-row">
					<button type="submit" class="btn btn-info" name="updateDatabase" value="updateDatabase">Update Database</button>
				</div>
			</form>
		</div>
		
<?php get_footer(); ?>