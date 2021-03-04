<?php 
ini_set('date.timezone', 'Asia/Shanghai'); //设置时区
$day = ''; 
while(true){
	sleep(1);
	$h = date('H'); //获取当前时
	$i = date('i'); //获取当前分
	if(date('Ymd') != $day ){ //判断当前今天是否已赋值,天数一遍设为未打卡
		$day = date('Ymd');
		$dayup = $day.'_up'; //当日上班打卡寄存器
		$daydown = $day.'_down'; //当日打卡寄存器
		$$dayup = false; //当日上班打卡状态
		$$daydown = false; //当日下班打卡状态
	}
	if($h < 9 && $h >8){ //上班打卡时间段
		if(!$$dayup){
			$$dayup = true;
			sleep(1);
			shell_exec('./ding.sh'); //执行打卡shell
			echo $day.date('Y-m-d H:i:s').'上班打卡 ./ding.sh';
			
		}
	}
	if($h >18 && $i > 1 &&   $h <19  ){ //下班打卡时间段
		if(!$$daydown){
			$$daydown = true;
			shell_exec('./ding.sh'); //执行打卡shell
			echo $day.date('Y-m-d H:i:s').'下班打卡 ./ding.sh';
		}
	}

}


// shell_exec("scrcpy &");
// sleep(2);
// $is_lock = (shell_exec("adb shell dumpsys window policy|grep mShowingLockscreen"));
// $is_lock = explode(' ',trim($is_lock)) ;
// var_dump($is_lock);

// if(isset($is_lock[1])){
// 	$is_lock  =  explode('=',trim($is_lock[1]))[1];
// 	var_dump($is_lock);
// 	if(	$is_lock != 'false'){
// 		var_dump("未锁屏锁屏");
// 		sleep(2);

// 		shell_exec("adb shell input keyevent 26");
// 	}
// }
// sleep(2);
// shell_exec("adb shell input keyevent 26");

// exit;