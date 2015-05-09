<?php

$xyz_fsp_tinymce=get_option("xyz_fsp_tinymce");
$xyz_credit_link=get_option('xyz_credit_link');
$xyz_fsp_enable=get_option('xyz_fsp_enable');
$xyz_fsp_adds_enable=get_option('xyz_fsp_adds_enable');
$xyz_fsp_cache_enable=get_option('xyz_fsp_cache_enable');

?>
<h2>Basic Settings</h2>
<form method="post" >

<table  class="widefat" style="width:98%">

<tr valign="top" id="xyz_dbx">

<td scope="row" colspan="1" width="50%"><label for="xyz_fsp_tinymce">Enable tiny MCE filter to prevent auto removal of &lt br &gt and &lt p &gt tags ?</label>	</td>

<td><select name="xyz_fsp_tinymce" id="xyz_fsp_tinymce" >

<option value ="1" <?php if($xyz_fsp_tinymce=='1') echo 'selected'; ?> >Yes </option>

<option value ="0" <?php if($xyz_fsp_tinymce=='0') echo 'selected'; ?> >No </option>
</select>
</td>

</tr>

<tr valign="top" id="xyz_fsp">

<td scope="row" colspan="1"><label for="xyz_fsp_credit_link">Enable credit link to author ?</label>	</td><td><select name="xyz_credit_link" id="xyz_fsp_credit_link" >

<option value ="fsp" <?php if($xyz_credit_link=='fsp') echo 'selected'; ?> >Yes </option>

<option value ="<?php echo $xyz_credit_link!='fsp'?$xyz_credit_link:0;?>" <?php if($xyz_credit_link!='fsp') echo 'selected'; ?> >No </option>
</select>
</td></tr>


<tr valign="top" id="xyz_dbx">

<td scope="row" colspan="1" width="50%"><label for="xyz_fsp_enable">Enable Fullscreen Popup ?</label>	</td>

<td><select name="xyz_fsp_enable" id="xyz_fsp_enable" >

<option value ="1" <?php if($xyz_fsp_enable=='1') echo 'selected'; ?> >Yes </option>

<option value ="0" <?php if($xyz_fsp_enable=='0') echo 'selected'; ?> >No </option>
</select>
</td>

</tr>

<tr valign="top" id="xyz_dbx">

<td scope="row" colspan="1" width="50%"><label for="xyz_fsp_cache_enable">Compatible with cache plugin ?</label>	</td>

<td><select name="xyz_fsp_cache_enable" id="xyz_fsp_cache_enable" >

<option value ="1" <?php if($xyz_fsp_cache_enable=='1') echo 'selected'; ?> >Yes </option>

<option value ="0" <?php if($xyz_fsp_cache_enable=='0') echo 'selected'; ?> >No </option>
</select>
</td>

</tr>

<tr valign="top" id="xyz_dbx">

<td scope="row" colspan="1" width="50%"><label for="xyz_fsp_adds_enable">Enable premium version ads ?</label>	</td>

<td><select name="xyz_fsp_adds_enable" id="xyz_fsp_adds_enable" >
<option value ="0" <?php if($xyz_fsp_adds_enable=='0') echo 'selected'; ?> >No </option>
<option value ="1" <?php if($xyz_fsp_adds_enable=='1') echo 'selected'; ?> >Yes </option>


</select>
</td>

</tr>



<tr>
<td scope="row"> </td>
<td>
<input type="submit" value=" Update Settings " /></td>
</tr>


</table></form>
<?php 










































?>
