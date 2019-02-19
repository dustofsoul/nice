<?php
/**
* 晴天说说
*
* @package custom
*/
?>

	<?php $this->need('header.php'); ?>
	<div class="cat">

	<!-- 晴天说说_v1.00 2018-08-26 星球彦 http://storeweb.cn -->
<br>
这些友情链接是来自<a href="http://storeweb.cn" target="_blank" class="site-friend-link-project">个站商店</a>的一个子项目 <a
        href="http://storeweb.cn" target="_blank" class="site-friend-link-project">『晴天说说』</a>，点<a href=""
                                                                                                  target="_blank"
                                                                                                  class="site-friend-link-homepage">
    这里 </a>访问我在个站商店上的主页
<br>
<br>
<br>
<!-- ----------------------------------- 配置 --------------------------------------- -->
<!-- HTTPS 加载此jquery：-->
<script src='https://libs.baidu.com/jquery/1.11.1/jquery.min.js'></script>
<!-- ----------------------------------- 配置 --------------------------------------- -->
<style type="text/css">
    .hide {
        display: none;
    }

    .clear {
        clear: both;
    }

    .storeweb-say div {
        margin-top: 10px;
        margin-bottom: 10px;
        padding: 10px 20px;
        background-color: #bed742;
        border-radius: 6px;
        font-size: 15px;
        color: #2e3a1f;
        line-height: 200%;
    }

    .storeweb-say-month {
        font-size: 30px;
    }

    .storeweb-say-day {
        font-size: 18px;
    }

    .storeweb-say-name {
        font-size: 18px;
        margin-left: 20px;
        color: #333 !important;
    }

    .storeweb-say-name:hover {
        color: #0074d9 !important;
        text-decoration: underline;
    }
</style>
<script data-no-instant>
    // ----------------------------------- 配置 ---------------------------------------
    //var url = "https://storeweb.cn/api/say";  // 如果你的网站是HTTPS，则用这一行代码
    var url = "http://storeweb.cn/api/say";     // 如果你的网站是HTTP
    // ----------------------------------- 配置 ---------------------------------------
    function get_say_api(timeout) {
        $.ajax({
            type: 'get',
            url: url,
            async: true,
            dataType: 'jsonp',
            data: {},
            timeout: 3000,
            success: function (result) {
                if (result.success == 1) {
                    //console.log(success['data']);
                    template_make(result.data, result.information);
                    set_storeweb_info(result.information);
                } else {
                    $('.site-friend-link').html(result.info);
                }
            },
            complete: function (XMLHttpRequest, status) { //请求完成后最终执行参数
                if (status == 'timeout') {//超时,status还有success,error等值的情况
                    if (timeout == 1) {
                        $('.storeweb-say').html('获取数据超时……请联系个站商店小彦');
                    } else {
                        url = "http://storeweb.cn/api/say";
                        $('.storeweb-say').html('https 获取数据超时……尝试http获取……');
                        get_say_api(1);
                    }
                }
            }
        });
    }

    $(function () {
        $('.storeweb-say').html('正在向『个站商店』请求友链数据……');
        get_say_api(0);
    })

    function template_make(data, information) {
        //console.log(data)
        $('.storeweb-say').html('');
        $.each(data, function (key, value) {
            //console.log(value.name);
            var template = $('#say-template').text();
            template = template.replace('%%content%%', value.content);
            template = template.replace('%%name%%', value.member.name);
            template = template.replace('%%month%%', value.create_at_month);
            template = template.replace('%%day%%', value.create_at_day);
            template = template.replace('%%url%%', information.storeweb + 'say/browse/' + value.member_id);
            var template_id = $(template);
            $('.storeweb-say').append(template_id);
        })
    }

    function set_storeweb_info(information) {
        $('.site-friend-link-homepage').attr('href', information['homepage']);
        $('.site-friend-link-project').attr('href', information['project']);
        //$('.site-friend-link-storeweb').attr('href',information['storeweb']);
    }
</script>
<div class="clear"></div>
<div class="storeweb-say">
</div>
<script type="text/html" id="say-template" data-no-instant>
    <span class="storeweb-say-month">%%month%%</span> <span class="storeweb-say-day">%%day%%</span> <a href="%%url%%"
                                                                                                       target="_blank"
                                                                                                       class="storeweb-say-name">%%name%%</a>
    <div>
        <div class="storeweb-say-content">%%content%%</div>
    </div>
</script>
<div class="clear"></div>
	</div>
	<?php $this->need('footer.php'); ?>
	
	