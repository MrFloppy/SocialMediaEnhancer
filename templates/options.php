<div class="wrap">
	<div id="icon-options-general" class="icon32"><br></div>
	<h2><?php echo __('Einstellungen › SocialMediaEnhancer'); ?></h2>

	<p>Der SocialMediaEnhancer erweitert dein Blog durch Social-Media-Icons, zählt die Zugriffe und ermöglicht es deinen Besuchern, deine Inhalte leicht
	zu teilen.</p>

	<form action="options.php" method="post">
		<?php
			settings_fields('smeOptions');

			do_settings_sections('options');

			#do_settings_fields('smeAccounts', 'twitterUsername');
			#do_settings_fields('smeButtons', 'style');
		?>

		<h3>Allgemeine Einstellungen</h3>

		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row">Anzuzeigende Dienste</th>
					<td>
						<fieldset>
							<legend class="screen-reader-text"><span>Social-Media-Dienste</span></legend>

							<label for="default_pingback_flag">
								<input name="smeOptions[general][services][google]" type="checkbox" id="default_pingback_flag" value="1"<?php if($options['general']['services']['google'] == 1) echo ' checked="checked"'; ?>>
								Google+
							</label><br>

							<label for="default_ping_status">
								<input name="smeOptions[general][services][facebook]" type="checkbox" id="default_ping_status" value="1"<?php if($options['general']['services']['facebook'] == 1) echo ' checked="checked"'; ?>>
								Facebook+
							</label><br>

							<label for="default_comment_status">
								<input name="smeOptions[general][services][twitter]" type="checkbox" id="default_comment_status" value="1"<?php if($options['general']['services']['twitter'] == 1) echo ' checked="checked"'; ?>>
								Twitter
							</label><br>


							<label for="default_comment_status">
								<input name="smeOptions[general][services][linkedin]" type="checkbox" id="default_comment_status"<?php if($options['general']['services']['linkedin'] == 1) echo ' checked="checked"'; ?>>
								LinkedIn
							</label><br>

							<label for="default_comment_status">
								<input name="smeOptions[general][services][pinterest]" type="checkbox" id="default_comment_status"<?php if($options['general']['services']['pinterest'] == 1) echo ' checked="checked"'; ?>>
								Pinterest
							</label><br>

							<p class="description">Von jedem aktivierten Dienst wird der Teilen-Button auf auf der Webseite angezeigt. Zusätzlich
							werden von dem jeweiligen Dienst die aktuellen Zahlen abgerufen.</p>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">Button-Design</th>
					<td>
						<select name="smeOptions[general][style]" id="default_post_format">
							<option value="light"<?php if($options['general']['style'] == 'light') echo ' selected="selected"'; ?>>Standard (hell)</option>
							<option value="dark"<?php if($options['general']['style'] == 'dark') echo ' selected="selected"'; ?>>Standard (dunkel)</option>
							<option value="css"<?php if($options['general']['style'] == 'css') echo ' selected="selected"'; ?>>CSS-Version</option>
						</select><br>

						<p class="description">Bestimmt das Aussehen der Buttons.</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">Platzierung der Buttons</th>
					<td>
						<select name="smeOptions[general][embed]" id="default_post_format">
							<option value="begin"<?php if($options['general']['embed'] == 'begin') echo ' selected="selected"'; ?>>Am Anfang jedes Artikels (empfohlen)</option>
							<option value="end"<?php if($options['general']['embed'] == 'end') echo ' selected="selected"'; ?>>Am Ende jedes Artikels</option>
							<option value="disabled"<?php if($options['general']['embed'] == 'disabled') echo ' selected="selected"'; ?>>Manuelle Einbindung</option>
						</select><br>

						<p class="description">Wenn Sie manuelle Einbindung wählen, fügen Sie den Marker <code>[socialMediaEnhancer]</code> in den
						Quelltext ein.</p>
					</td>
				</tr>
			</tbody>
		</table>

		<br>

		<h3>Social-Media-Accounts</h3>

		<p>Tragen Sie bitte hier Ihre Social-Media-Account ein.</p>

		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row">Google+</th>
					<td>
						<input type="text" name="smeOptions[accounts][google]" value="<?php echo $options['accounts']['google']; ?>" class="regular-text ltr" placeholder="macx" />
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">Facebook</th>
					<td>
						<input type="text" name="smeOptions[accounts][facebook]" value="<?php echo $options['accounts']['facebook']; ?>" class="regular-text ltr" placeholder="macx" />
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">Twitter</th>
					<td>
						<input type="text" name="smeOptions[accounts][twitter]" value="<?php echo $options['accounts']['twitter']; ?>" class="regular-text ltr" placeholder="macx" />
					</td>
				</tr>
			</tbody>
		</table>

		<?php submit_button(); ?>
	</form>
</div>

