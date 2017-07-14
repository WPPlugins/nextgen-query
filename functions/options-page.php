<?php

if ( isset($_POST["ngq"]) ) {
  if ( isset($_POST['ngq_sterilize']) ) {
    update_option('ngq_sterilize', true);
  }
  else {
    update_option('ngq_sterilize', false);
  }
}

?>
<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h2>
		<?php _e( 'NextGen Query', 'ngq_trans_domain' ); ?>
	</h2>
	
	<p>Version <?php echo get_option('ngq_version'); ?></p>

  <?php if ( isset($_POST["ngq"]) ) : ?>
  <div id="message" class="updated fade">
    <p><strong><?php _e('Options saved.', 'ngq_trans_domain' ); ?></strong></p>
  </div>
  <?php endif; ?>

	<form name="ngq_options" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
		<input type="hidden" name="ngq" value="true">

    <table>
			<tbody>
				<tr>
          <td>
            <input type="checkbox" name="ngq_sterilize" <?php if ( get_option('ngq_sterilize') ) : ?>checked="checked"<?php endif; ?>>
          </td>
					<td>
						<span class="label">Sterilize Header</span>
					</td>
				</tr>
			</tbody>
		</table>
    
    <br>

    <input type="submit" name="submit" value="<?php _e("Save") ?>" class="button-primary">
	</form>
</div>