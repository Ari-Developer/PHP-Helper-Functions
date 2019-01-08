<?php require_once('arindam_help_fun.php'); ?>
<script src="arindam_help_fun.js" type="text/javascript"></script>

<table cellpadding="12">
	<tr>
		<td>Only Number :</td>
		<td>
			<input type="text" onkeypress="return onlyNumber(event,this);">
		</td>
	</tr>
	<tr>
		<td>Number with Point :</td>
		<td>
			<input type="text" onkeypress="return numberWithpoint(event,this);">
		</td>
	</tr>
	<tr>
		<td>String Length :</td>
		<td>
			<input type="text" onkeypress="return ckStrLen(10, this.value);" oncopy="return false" onpaste="return false">
		</td>
	</tr>
	<tr>
		<td>Word Length :</td>
		<td>
			<input type="text" onkeypress="return ckWrdLen(4, this.value);" oncopy="return false" onpaste="return false">
		</td>
	</tr>
	<tr>
		<td>String Length Method 2 :</td>
		<td>
			<input type="text" id="txt1" onkeyup="ckStrLenValid(10, this.value, 'txt1')">
			<span id="span1"></span>
		</td>
	</tr>
</table>
