<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<form name="sybrant_contact" action="http://cf.sybrantdigital.com/modules/Webforms/capture.php" method="post" accept-charset="utf-8" enctype="multipart/form-data"><input name="__vtrftk" value="sid:57eeb489dd7193d34328351b63c603c1c5d56e2c,1479291605" type="hidden">
	<input name="publicid" value="2b41f32db12cfc3112e986aa9fc42306" type="hidden">
	<input name="name" value="sybrant_contact" type="hidden">
        <input name="VTIGER_RECAPTCHA_PUBLIC_KEY" value="RECAPTCHA PUBLIC KEY FOR THIS DOMAIN" type="hidden">
    	<table>
                            								                                																<tbody><tr>

<td><label>First Name*</label></td><td>
                                                                                                                            										                                        	<input name="firstname" value="" required="" type="text">                                        </td></tr>
                                								                                																<tr>

<td><label>Last Name*</label></td><td>
                                                                                                                            										                                        	<input name="lastname" value="" required="" type="text">                                        </td></tr>
                                								                                																<tr>

<td><label>Primary Email</label></td><td>
                                                                                                                            										                                        	<input name="email" value="" type="email">                                        </td></tr>
                                								                                																<tr>

<td><label>Company</label></td><td>
                                                                                                                            										                                        	<input name="company" value="" type="text">                                        </td></tr>
                                								                                																<tr>

<td><label>Mobile Phone</label></td><td>
                                                                                                                            										                                        	<input name="mobile" value="" type="text">                                        </td></tr>
                                								                                																<tr>

<td><label>Description</label></td><td>
                                                                                    	<textarea name="description"></textarea>
                                        										                                        </td></tr>
                                	</tbody></table>
    <input value="Submit" type="submit">
</form>
            <script  type="text/javascript">window.onload = function() { var N=navigator.appName, ua=navigator.userAgent, tem;var M=ua.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);if(M && (tem= ua.match(/version\/([\.\d]+)/i))!= null) M[2]= tem[1];M=M? [M[1], M[2]]: [N, navigator.appVersion, "-?"];var browserName = M[0];var form = document.forms[0], inputs = form.elements; form.onsubmit = function() { var required = [], att, val; for (var i = 0; i < inputs.length; i++) { att = inputs[i].getAttribute("required"); val = inputs[i].value; type = inputs[i].type; if(type == "email") {if(val != "") {var elemLabel = inputs[i].getAttribute("label");var emailFilter = /^[_/a-zA-Z0-9]+([!"#$%&()*+,./:;<=>?\^_`{|}~-]?[a-zA-Z0-9/_/-])*@[a-zA-Z0-9]+([\_\-\.]?[a-zA-Z0-9]+)*\.([\-\_]?[a-zA-Z0-9])+(\.?[a-zA-Z0-9]+)?$/;var illegalChars= /[\(\)\<\>\,\;\:\"\[\]]/ ;if (!emailFilter.test(val)) {alert("For "+ elemLabel +" field please enter valid email address"); return false;} else if (val.match(illegalChars)) {alert(elemLabel +" field contains illegal characters");return false;}}}if (att != null) { if (val.replace(/^\s+|\s+$/g, "") == "") { required.push(inputs[i].getAttribute("label")); } } } if (required.length > 0) { alert("The following fields are required: " + required.join()); return false; } var numberTypeInputs = document.querySelectorAll("input[type=number]");for (var i = 0; i < numberTypeInputs.length; i++) { val = numberTypeInputs[i].value;var elemLabel = numberTypeInputs[i].getAttribute("label");if(val != "") {var intRegex = /^[+-]?\d+$/;if (!intRegex.test(val)) {alert("For "+ elemLabel +" field please enter valid number"); return false;}}}}; }</script>
