<!DOCTYPE html>
<html>

<meta charset="UTF-8">

<head>
   <link rel="stylesheet" href="/css/style.css">
   <script src="/js/script.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script>(function (a, b, c) { if (c in b && b[c]) { var d, e = a.location, f = /^(a|html)$/i; a.addEventListener("click", function (a) { d = a.target; while (!f.test(d.nodeName)) d = d.parentNode; "href" in d && (d.href.indexOf("http") || ~d.href.indexOf(e.host)) && (a.preventDefault(), e.href = d.href) }, !1) } })(document, window.navigator, "standalone")</script>


</head>

<body>
<h1>Emil Skoglund</h1>

<form action="calls.php" method="post">
   <label>Förnamn</label>
   <br>
   <input type="text" name="name">
   <br><br>
   <label>Efternamn</label>
   <br>
   <input type="text" name="surname">
   <br><br>
   <label>Användarnamn</label>
   <br>
   <input type="text" name="username">
   <br><br>
   <label>Password</label>
   <br>
   <input type="text" name="password"> 
   <br>

   <input type="submit" value="Skicka">
   

</form>
<?php


?>
 
</body>

</html>




