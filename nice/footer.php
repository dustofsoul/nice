	<?php $this->footer(); ?>

	<div class="grid_14" id="footer">



<div>
    <h6><font color="ff0000"></font><div class="text" style=" text-align:center;"><font color="ff0000"><img class="wp-smiley" src="https://cdn.qqsuu.net/Gallery/denglong.gif" title="灯笼" alt="灯笼">春节倒计时<img class="wp-smiley" src="https://cdn.qqsuu.net/Gallery/denglong.gif" title="灯笼" alt="灯笼"></font></div></h6>
    <h6 id="title-1"><div class="text" style=" text-align:center;">2019年春节时间：2019年2月05日 星期二 农历正月初一<img class="wp-smiley" src="https://cdn.qqsuu.net/Gallery/meigui.png" title="玫瑰" alt="玫瑰"></div></h6>
    <h6 id="title-2"><div class="text" style=" text-align:center;"><img class="wp-smiley" src="https://cdn.qqsuu.net/Gallery/taiyang.png" title="太阳" alt="太阳">距离2019年春节过年还有<img class="wp-smiley" src="https://cdn.qqsuu.net/Gallery/89.png"></div></h6>
    <div><div class="text" style=" text-align:center;">
        <span id="t_d">00</span>
        <span id="t_h">00</span>
        <span id="t_m">00</span>
        <span id="t_s">00</span>
    </div>
<script type="text/javascript">
    function getRTime(){
        var EndTime= new Date('2019/02/05 00:00:00'); //截止时间
        var NowTime = new Date();
        var t =EndTime.getTime() - NowTime.getTime();
        var d=Math.floor(t/1000/60/60/24);
        var h=Math.floor(t/1000/60/60%24);
        var m=Math.floor(t/1000/60%60);
        var s=Math.floor(t/1000%60);

        document.getElementById("t_d").innerHTML = d + " 天";
        document.getElementById("t_h").innerHTML = h + " 时";
        document.getElementById("t_m").innerHTML = m + " 分";
        document.getElementById("t_s").innerHTML = s + " 秒";
    }
    setInterval(getRTime,1000);
    </script>


	<p><p id="hitokoto">:D 获取中...</p>

<!-- 新 API 方法， 十分简洁 -->

<script src="https://v1.hitokoto.cn/?encode=js&select=%23hitokoto" defer></script></p>



<span id="cdn">鸣谢<a target="_blank" href="https://console.upyun.com/register/?invite=HyKiI8DKG" ><img src="https://cssj.fun/usr/themes/nice/img/upyun-logo.png" style="height:10px;"></a>提供CDN赞助</span><span>  ©2011-<?php echo date('Y'); ?>  <a target="_blank" href="http://www.miibeian.gov.cn" > 晋ICP备18002380号	</a></span>


	</div><!-- end #footer -->

</div>

</body>

</html>

