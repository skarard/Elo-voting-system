<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>
<script type="text/javascript">
	function hideFocus(str, id) {
		var a = document.getElementById(id);
		var b = document.getElementById(id+'hide');
		if (a.value == ' ') {
			b.style.display = 'none';
			a.value = '';
			a.style.color = 'rgba(1,1,1,1)';
		} else if (a.value == '') {
			b.style.display = 'block';
			a.value = ' ';
			a.style.color = 'rgba(0,0,0,0)';
		}
	}
</script> 
</head>
<body>