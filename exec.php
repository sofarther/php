<?php
	//非阻塞执行系统命令
	// >/dev/null 表示命令的所有输出到/dev/null设备，故php程序不需要等待
	//&为守护进程
//	$cmd='./sleep.sh>/dev/null &';
	$cmd='cp /home/sofar/public_html/html5/tqsh.mp4 /home/sofar/rsync/ >/dev/null &';
	$res=array();
	exec($cmd,$res);
	var_dump($res);

?>
