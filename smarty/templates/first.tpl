<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<!--使用smarty模板，开始符、结束符 与变量之间不能有空格-->
<title> <{$title}>  </title>
</head>
<body>
 <{$content}>
<br/>
<{*Smarty 可以直接识别替换在除Smarty语句中的嵌入在""中的变量和变量的数组元素或对象属性操作符*}>
<a href="<{$t->tt}>">T</a>
<br/>
<{*不能使用该形式访问魔术常量*}>
<{$smarty.const.__FILE__}>
<br/>
<{$smarty.const.MY_CONST}>
<br/>
<{$smarty.get.id}>
<br/>
<{* use the date_format modifier to show current date and time *}>
<{$smarty.now|date_format:"%Y-%m-%d %H:%M:%S"}> 
</body>
</html>
