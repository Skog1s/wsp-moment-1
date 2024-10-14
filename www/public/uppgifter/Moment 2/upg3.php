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
<?php
 $page["head"] = "<h1>Välkommen</h1>";
 $page["main"] = "<p>Detta är innehållet på min sida</p>";
 $page["footer"] = "<hr><p>Min sidfoot</p>";

 foreach($page as $value) {
    echo $value;
 }
?>
 
</body>

</html>




