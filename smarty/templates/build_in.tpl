<html>
 <head><meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<body>
<{*insert 局部缓存:*}>
<h2>outputFiler</h2>
<h3>当前访问次数1:<{insert name=times}></h3>
<h3>当前访问次数2:<{nocache}><{$times}><{/nocache}></h3>
<h3>capture</h3>
<{*capture捕获包含的内容到一个指定name变量，该变量不需要assgin分配*}>
<{capture name="sofar"}>
 hello,world it from <{$myname}>
<{/capture}>
<{*使用capture捕获的变量内容*}>
<{$smarty.capture.sofar}>
<{*输出<{ }> *}>
<{ldelim}><{rdelim}>
<{*literal 包含的内容作为普通文本处理,只处理Smarty中的特殊字符为普通字符*}>
<{literal}>
 this is <{hello}><b>Blod</b>
<{/literal}>
<{*自定义函数*}>
<{*counter print=false 表示不输出第一个counter即0*}>
<{*counter start=0 skip=2 print=false*}>
<{*以下表示计数器自增，并输出值，若要在if中使用该值，则需要在声明时指定assign分配给一个变量，然后在if中使用该变量，但仍需要<{counter}>自增*}>
<{*counter*}>
<{*counter*}>
<{counter name=my start=1 skip=1 assign=mycounter}>
<{if $mycounter is odd}> 奇数<{/if}>
<{*自增*}>
<{counter name=my}>

<{if $mycounter is even}> 偶数<{/if}>
<{*html_checkboxes 接受传入的显示数据数组和value值数组，默认已选的value数组*}>
<{*options 为value=>output关联数组*}>
<{html_checkboxes name=hobby options=$hobbys selected=$sel}>
<{*也可以使用values指定value数组 output指定显示数组*}>
<{html_checkboxes name=fruit values=$value output=$output selected=$like}>
<br/>
<{*html_options 形成 option 标签，接受值与html_checkboxes相同*}>
<select name="bobby" multiple>
 <{html_options options=$hobbys selected=$sel}>
</select>
<br/>
<{*html_radios 单选按钮，接受参数与html_checkbox 类似， checked 接受默认选项*}>
<{html_radios name=hobby options=$hobbys checked=$checked}>
</body>
</html>
