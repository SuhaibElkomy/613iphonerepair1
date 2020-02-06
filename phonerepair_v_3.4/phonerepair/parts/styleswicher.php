<div class="wd-front-panel close">
	<div class="wd-panel-cog">
	  <a href="#">
	  	<i class="fa fa-cog fa-spin"></i>
	  </a>
  </div>
	<table>
		<tr>
			<td><?php echo esc_html__('Use Boxed Layout', 'phonerepair'); ?></td>
			<td><input type="checkbox" name="phonerepair_boxed_front" value="on" id="phonerepair_boxed_front" class="cmn-toggle cmn-toggle-round"/>
	    <label for="phonerepair_boxed_front"></label></td>
		</tr>
		<tr>
			<td><?php echo esc_html__('Sticky Menu', 'phonerepair'); ?></td>
			<td><input type="checkbox" checked name="phonerepair_menu_front" value="on" id="phonerepair_menu_front" class="cmn-toggle cmn-toggle-round"/>
	    <label for="phonerepair_menu_front"></label></td>
		</tr>
		<tr>
			<td><?php echo esc_html__('RTL', 'phonerepair'); ?></td>
			<td><input type="checkbox" name="phonerepair_rtl_front" value="on" id="phonerepair_rtl_front" class="cmn-toggle cmn-toggle-round"/>
	    <label for="phonerepair_rtl_front"></label></td>
		</tr>
		<tr>
			<td><?php echo esc_html__('Header Style', 'phonerepair'); ?></td>
			<td>
				<select class="header_style">
					<option value="<?php echo esc_attr('creative') ?>" selected><?php echo esc_html__('creative', 'phonerepair') ?></option>
					<option value="<?php echo esc_attr('normal') ?>"><?php echo esc_html__('normal', 'phonerepair') ?></option>
				</select> 
			</td>
		</tr>
		<tr>
		<td>
			<?php echo esc_html__('Background image', 'phonerepair'); ?>
		</td>
		</tr>
		<tr>
			<td class="wd-bg-image clearfix" colspan="2">
				<label class="checkbox_image1" for="checkbox_image1"></label>
				<input type="radio" name="checkbox_image" value="on" id="checkbox_image1" class="checkbox-image"/>
				<label class="checkbox_image2" for="checkbox_image2"></label>
				<input type="radio" name="checkbox_image" value="on" id="checkbox_image2" class="checkbox-image"/>
				<label class="checkbox_image3" for="checkbox_image3"></label>
				<input type="radio" name="checkbox_image" value="on" id="checkbox_image3" class="checkbox-image"/>
				<label class="checkbox_image4" for="checkbox_image4"></label>
				<input type="radio" name="checkbox_image" value="on" id="checkbox_image4" class="checkbox-image"/>
			</td>
		</tr>
	</table>
</div>