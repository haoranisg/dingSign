# /bin/bash
scrcpy & #打开手机控制窗口
sleep 2 #等待N秒钟
adb shell input swipe 500 1800 500 500 #向上滑动解锁 X,Y(滑动开始坐标点),X,Y(滑动截止坐标点)
sleep 2
adb shell input tap 604 1987 #点击X ,Y 轴坐标 输入密码  
sleep 1
adb shell input tap 604 1987 #点击X ,Y 轴坐标 输入密码
sleep 1
adb shell input tap 604 1623 #点击X ,Y 轴坐标 输入密码
sleep 1
adb shell input tap 604 1417 #点击X ,Y 轴坐标 输入密码
sleep 2
adb shell input tap 561 2118  #点击X ,Y 轴坐标 点击虚拟home键 打开手机主页
sleep 1
adb shell input tap 318 2118 #点击X ,Y 轴坐标 点击虚拟任务键 打开手机任务管理器
sleep 2
adb shell input tap 534 1978 #点击X ,Y 轴坐标 点击杀掉所有运行app
sleep 3
adb shell input tap 561 2118 #点击X ,Y 轴坐标 点击虚拟home键 返回手机主页
sleep 8
adb shell input tap 404 1800 #点击X ,Y 轴坐标 点击DingDing APP图标
sleep 8
adb shell input tap 504 1994 #点击X ,Y 轴坐标 点击钉钉中间tabbar 
sleep 8
adb shell input tap 145 1017 #点击X ,Y 轴坐标 点击钉钉考勤打卡 
sleep 7
adb shell input tap 568 1186 #点击X ,Y 轴坐标 点击钉钉考勤打卡大按钮
sleep 5
adb shell input tap 561 2118 #点击X ,Y 轴坐标 返回主页
sleep 3
adb shell input keyevent 26 # 锁屏
