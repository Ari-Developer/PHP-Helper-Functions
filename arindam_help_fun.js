function numberWithpoint(evt, obj) {
	var charCode = (evt.which) ? evt.which : event.keyCode
	var value = obj.value;
	var dotcontains = value.indexOf(".") != -1;
	if (dotcontains)
		if (charCode == 46) return false;
	if (charCode == 46) return true;
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}

function onlyNumber(evt, obj) {
	var charCode = (evt.which) ? evt.which : event.keyCode
	var value = obj.value;
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}

function ckStrLen(max, str) {
	var len = str.length;
	if(len <= max)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function ckWrdLen(max, str) {
	var len = str.split(" ").length;
	if(len <= max)
	{
		return true;
	}
	else
	{
		return false;
	}
}



var oldValue = '';
function ckStrLenValid(max, str, id)
{
	var maxLen = max;
	var strLen = str.length;
	if(strLen <= maxLen)
	{
		oldValue = str;
		document.getElementById('span1').innerHTML = strLen;
	}
	else
	{
		document.getElementById(id).value = oldValue;
	}
}