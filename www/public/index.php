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

   <form action="calls.php" method="post">
      <label>Name</label><br>
      <input name="name" type="text">
      <br><br>
      <label>Age</label><br>
      <input name="age" type="text"><br><br>
      <input type="submit" value="Skicka">
   </form>
 
</body>

</html>




