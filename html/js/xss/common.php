<?PHP
	$payload = 'alert("You have been pwned!");';
	$attackString = '<script> ' . $payload . ' </script>';
    $attackStringLiteral = str_replace('>','&gt', str_replace('<','&lt;',$attackString));
?>
