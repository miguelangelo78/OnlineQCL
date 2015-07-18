<?php 
	if(is_user_logged_in()){
		wp_redirect(home_url()); 
		exit;
	}
?>

<?php get_header(); 
	?>
	
		<style>
		#nav:hover{
			box-shadow: 0px 5px 5px #999999;
			
			background-color: #253E66 !important;
		    transition: background-color 0.5s ease, box-shadow 0.5s ease;
		}
	
		li {
			list-style-type: none;
		}
		
		.input, select{
			border-radius: 3px !important;
		}
		
		.input {
			width:100% !important;
		}
		
		.input:focus {
			box-shadow: 0px 0px 3px #BDBDBD;		
		}
		
		label{
			font-weight: 200;
			line-height: 30px;
			font-size: 0.75em;
			margin-right: 10px;
		}
		
		#loginContainer > .jumbotron{
			margin-top: 10px;
			margin-bottom: 10px;
		}
		
		#editTitle{
			margin-top: -30px;
		}
		
		#loginContent{
			background: white;
			border-radius: 5px;
			padding: 20px;
			box-shadow: 0px 0px 2px #C9C9C9;
			margin: 10px 0px -20px 0px;
			width: 500px;
		}
		
		#recoverPassTitle {
			font-size: 1.5em;
		}
		
		#wppb-recover-password > form > p {
			font-size: 1em;
		}
	</style>
	
	<?php 
	
	if(have_posts())
		while(have_posts()){ the_post(); ?>
	
	<div id='loginContainer' class='container'>
		<div class='jumbotron'>
			<div class='row'>
				<div class='col-md-12'>
					<h2 id='editTitle'><?php the_title(); ?></h2>
					<div id='titleBrk'></div>
				</div>
			</div>
			<div clasS='row'>
				<div class='col-md-offset-3 col-md-4'>
					<div id='loginContent'><?php the_content(); ?></div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	
<?php }else echo "<p>No content found :/</p>"; get_footer();?>

	<script>
	$(function(){
		$("#wppb-submit, #wppb-recover-password-button").addClass("btn btn-primary");
	});
	</script>