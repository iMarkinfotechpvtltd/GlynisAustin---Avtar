<?php 
function wpgc_settings()
{ 
	global $wpdb; 
	$table_name = $wpdb->prefix . 'api_setting';
	if($_POST){
		$id_setting = intval($_POST['id_setting']);
		$clientID = sanitize_text_field($_POST['clientID']);
		$calendarID = sanitize_text_field($_POST['calendarID']);
		$lang = sanitize_text_field($_POST['lang']);
		//$defaultDate = sanitize_text_field($_POST['defaultDate']);
		if(isset($_POST['id_setting'])){
			$data = array(
				'id_setting' => $id_setting,
				'clientID' => $clientID,
				'calendarID' => $calendarID,
				'lang' => $lang,
				//'defaultDate' => $defaultDate
				);
			$wpdb->update($table_name,$data,array( 'id_setting' => $_POST['id_setting'] )); ?>
<p class="wpgc-done">Settings updated !</p>
			<?php
		}else{
			$data = array(
				'clientID' => $clientID,
				'calendarID' => $calendarID,
				'lang' => $lang,
				//'defaultDate' => $defaultDate
				);
			$wpdb->insert($table_name,$data); ?>
<p class="wpgc-done">Settings saved!</p>
			<?php
		}
		
	}
	$settings = $wpdb->get_row('select * from ' . $table_name );
	?>
	<div class="wrap">
	<form action="" method="post" id="insert-event">
	<?php if($settings){ ?>
	<input type="hidden" id="id_setting" name="id_setting" 
	value="<?php if($settings){ echo $settings->id_setting; } ?>" />
	<?php } ?>
	
	<table class="wpgc-setting-table">
		
		<tr>
			<td colspan="2" class="entry-view-field-name">Settings</td>
		</tr>
		
		<tr>
			<td>
				<h3><label for="clientID">client ID </label> </h3>
			</td>
			<td>
				
				<textarea id="description" name="clientID" rows="7" cols="62" class="wpgc-textarea"><?php if($settings){ echo esc_attr($settings->clientID); } ?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<h3><label for="calendarID">calendar ID </label> </h3>
			</td>
			<td>
				<input type="text" id="calendarID" class="wpgc-input" name="calendarID"
				value="<?php if($settings){ echo esc_attr($settings->calendarID); } ?>"/>
			</td>
		</tr>
		<tr>
			<td>
				<h3><label for="lang">Calendar Language </label> </h3>
			</td>
			<td>
				
				<select name="lang">
					<option value="en" <?php if($settings){ if($settings->lang == "en"){ echo 'selected'; } } ?>>English</option>
					<option value="ar" <?php if($settings){ if($settings->lang == "ar"){ echo 'selected'; } } ?>>Arabic</option>
					<option value="es" <?php if($settings){ if($settings->lang == "es"){ echo 'selected'; } } ?>>Spanish</option>
					<option value="fr" <?php if($settings){ if($settings->lang == "fr"){ echo 'selected'; } } ?>>French</option>
					<option value="nl" <?php if($settings){ if($settings->lang == "nl"){ echo 'selected'; } } ?>>Dutch</option>
					<option value="it" <?php if($settings){ if($settings->lang == "it"){ echo 'selected'; } } ?>>Italian</option>
					<option value="da" <?php if($settings){ if($settings->lang == "da"){ echo 'selected'; } } ?>>German </option>
					<option value="pt" <?php if($settings){ if($settings->lang == "pt"){ echo 'selected'; } } ?>>Portuguese</option>
					<option value="fa" <?php if($settings){ if($settings->lang == "fa"){ echo 'selected'; } } ?>>Persian</option>
					<option value="ja" <?php if($settings){ if($settings->lang == "ja"){ echo 'selected'; } } ?>>Japanese</option>
					<option value="hi" <?php if($settings){ if($settings->lang == "hi"){ echo 'selected'; } } ?>>Hindi</option>
					<option value="hu" <?php if($settings){ if($settings->lang == "hu"){ echo 'selected'; } } ?>>Hungarian</option>
					<option value="id" <?php if($settings){ if($settings->lang == "id"){ echo 'selected'; } } ?>>Indonesian</option>
					<option value="is" <?php if($settings){ if($settings->lang == "is"){ echo 'selected'; } } ?>>Icelandic</option>
					<option value="ko" <?php if($settings){ if($settings->lang == "ko"){ echo 'selected'; } } ?>>Korean</option>
					<option value="lv" <?php if($settings){ if($settings->lang == "lv"){ echo 'selected'; } } ?>>Latvian</option>
				</select>
			</td>
		</tr>
		
		<tr>
			
			<td colspan="2">
				<p>
					<input type="submit" name="submit" value="Save" id="search-submit" class="button" style="float:right; margin: 0 20px 10px 0" />
					<a href="<?php echo admin_url( 'admin.php?page=google-calendar-plg'); ?>" id="search-submit" class="button" style="float:right; margin: 0 20px 10px 0"/>Cancel</a>
				</p>

			</td>
		</tr>
	</table>
	
	<?php wp_nonce_field('calendar_event'); ?>
	</form>
	</div>
<?php
}