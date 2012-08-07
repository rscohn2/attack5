<?PHP
   require 'common.php';
?>
   
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>JS XSS Examples</title>
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="../../util/jquery-cookie.js"></script>
    <script src="js-xss.js"></script>
</head>
<body>
  <h1>JS XSS Examples</h1>
  <p>Examples of vulnerabilities and how to exploit them. The payload will be <?= $payload ?>. When you see the alert
      box, we have demonstrated that we can execute javascript code.
  </p>

  <h2>document.write</h2>

  <p>
      document.write is a form of eval, user input must be sanitized before being passed to it. This examples passes the
      content of an input box to document.write without sanitizing it first. Attacker emails link to page
      and tells user to cut and paste the payload into an input. Hit enter in the box to send the prepopulated input.
  </p>
  <input id="docWriteInput" size=60 value='<?= $attackString ?>'> </input>

  <h2>innerHTML</h2>

  <p>
      innerHTML is a form of eval, user input must be sanitized before assigning to it. This examples assigns the
      content of an input box to innerHTML without sanitizing it first. Attacker emails link to page
      and tells user to cut and paste the payload into an input. Hit enter in the box to send the prepopulated input.
  </p>
  <input id="innerHTMLInput" size=60 value='<?= 'innerHTML '.$attackString ?>'> </input>
  <p id='innerHTMLOutput'>Input box text will be copied here.</p>

  <h2>Tainted Cookie</h2>

  <p>
      Like previous example, but get input from cookie that was previously tainted. We assign it
      to innerHTML without sanitizing it first.
  </p>
  <p id='xssCookieInput'><?= $attackStringLiteral ?></p>
  <button id='cookieButton'>Press here</button>
  <p id='xssCookieOutput'>Cookie will be copied here.</p>

</body>
</html>
