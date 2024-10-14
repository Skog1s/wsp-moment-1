<!DOCTYPE html>
<html>

<meta charset="UTF-8">

<head>
   <link rel="stylesheet" href="/css/style.css">
   <script src="/js/script.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script>(function (a, b, c) { if (c in b && b[c]) { var d, e = a.location, f = /^(a|html)$i; a.addEventListener("click", function (a) { d = a.target; while (!f.test(d.nodeName)) d = d.parentNode; "href" in d && (d.href.indexOf("http") || ~d.href.indexOf(e.host)) && (a.preventDefault(), e.href = d.href) }, !1) } })(document, window.navigator, "standalone")</script>
</head>

/** include('inc/math.php'); */
<body>
<h1>Emil Skoglund</h1>
<?php
function add($t1, $t2){
   $sum = $t1 + $t2;
   return $sum;
}

function sub($t1, $t2) {
   $sum = $t1 - $t2;
   return $sum 
}

function mul($t1, $t2) {
   $prod = $t1 * $t2;
   return $prod;
}

function div($t1, $t2) {
   $kvot = $t1 / $t2;
   return $kvot;
}

?>
 
</body>

</html>




