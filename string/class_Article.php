<?php
 class Article{
  private $caption;
  private $content;
 function __construct($caption,$content,$parse=array()){
   $this->caption=$caption;
 if(!empty($parse)){
   foreach($parse as $val){
     switch ($val){
      case 0 : $content=$this->delHtmltags($content);
                break;
      case 1 : $content=$this->html2Text($content);
               break;
      case 2: $content=$this->UBBCode2Html($content);
              break;
     case 3 : $content=$this->parseURL($content);
             break;
     case 4 : $content=$this->disKeywords($content);
           break;
     case 5 : $content=$this->parsePHP($content);
             break;
    case 6 : $content=$this->parsePre($content);
                break;
    case 7 : $content=$this->nltobr($content);
              break;
}
}
}
 $this->content =$content;
}
function getCaption(){
   return "<center><h3>" .$this->caption."</h3></center>";
}
function getContent(){
  return $this->content;
}
private function delHtmltags($text){
   return strip_tags($text);
} 
private function html2Text($text){
  return htmlspecialchars(stripslashes($text));
}
private function UBBCode2Html($text){
   $pattern =array("/\[b\]/i","/\[\/b\]/i","/\[i\]/i","/\[\/i\]/i","/\[u\]/i",
                    "/\[\/u\]/i","/\[font=(\w)\]/","/\[color=([#\w]+?)\]/",
                   "/\[size=(\d+)\]/","/\[size=(\d+(\.\d+)?)(px|cm|em|pt|%)+?\]/",
               "/\[\/font\]/","/\[\/color\]/","/\[\/size\]/",
        "/\[align=(left|center|right)\]/","/\[\/align\]/",
     "/\[url=www.([^\"\[']+?)\](.+?)\[\/url\]/is",
    "/\[url=(https?|ftp|gopher|news|telnet){1}:\/\/([^\]\"']+?)\](.*)\[\/url\]/is",
 "/\[email=([a-z0-9\-_.+]+)@([a-z0-9\-_+]+[.][a-z0-9\-_.]+)\](.+?)\[\/email\]/is",
"/\[email\]\s*([a-z0-9\-_.+]+)@([a-z0-9\-_+]+[.][a-z0-9\-_.]+)\s*\[\/email\]/i",
"/\[img\](.+?)\[\/img\]/"
);
  $replace =array("<b>","</b>","<i>","</i>","<u>","</u>",'<font face="\\1">',
                  '<font color="\\1">','<font size="\\1">',
                  '<font style=\"font-size: \\1 \">',"</font>","</font>","</font>", "<p align=\"\\1\">","</p>",
           "<a href=\"http://www.\\1\" target=\"_blank\">\\2</a>",
          "<a href=\"\\1://\\2\" target=\"_blank\">\\3</a>",
          "<a href=\"mailto:\\1@\\2\" target=\"_blank\">\\3</a>",
          "<a href=\"mailto:\\1@\\2\"  target=\"_blank\">\\1@\\2</a>",
        "<img src=\"\\1\"/>");
return preg_replace($pattern,$replace,$text);
}
private function parseURL($text){
   $pattern= "/(www.|https?:\/\/|ftp:\/\/|news:\/\/|telnet:\/\/){1}([^\]\"']+?)(com|net|org)(\/[\w-\.\/\?\%\&\=]*)?/ei";
return preg_replace($pattern,"\$this->cuturl('\\1\\2\\3\\4')",$text);
}
private function cuturl($url){
   $length=65;
  $urllink="<a href=\"".(substr(strtolower($url),0,4)=='www.' ? "http://$url":$url).  "\" target = \"_blank\" title=\"$url\" >";
 if(strlen($url)>$length){
   $url =substr($url,0,intval($length*0.5))."...".substr($url,-intval($length*0.3));
}
  $urllink.=$url."</a>";
  return $urllink; 
}
private function disKeywords($text){
   $keywords= array("sofar","zhss","sofarther");
 return str_replace($keywords,"****",$text);
}
private function parsePHP($text){
  $tags="/(<\?(php)?.*\?>)/ise";
 $highlight='"<pre style=\"background:#ddd\">".highlight_string("\\1",true)."</pre>"';
return preg_replace($tags,$highlight,$text);
}
private function parsePre($text){
  return "<pre>$text</pre>";
}
private function nltobr($text){
return nl2br($text);
}
}
?>
