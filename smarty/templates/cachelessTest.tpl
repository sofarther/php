<html>
<head>
 <meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<body>
<b>Hello World</b>
<br/>
已经缓存的：<{$smarty.now}>
<br/>
<{nocache}>
<b>没有缓存的：</b>
<u>Now is </u>
<{$smarty.now}>
<{/nocache}>
</body>
</html>
