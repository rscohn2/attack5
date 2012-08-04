<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>JS XSS Attack Lab</title>
</head>
<body>
  <h1>JS XSS Attack Lab</h1>
  <p>Examples of vulnerabilities and how to turn them into exploits
  </p>
  
  <h2>document.write</h2>
  document.write is a form of eval, user input must be sanitized before being passed to it.
  <input id="writeInput"></input>
  
  <p id="hello"></p>
</body>
</html>
