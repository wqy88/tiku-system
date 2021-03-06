<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>国家公考面试 -- 免费面试评测预约</title>
<meta name="keywords" content="面试,公务员面试,面试培训" />
<meta name="description" content="国家公考面试集训班" />
<link href="http://mianshi.buzhi.com/public/css/global.css" rel="stylesheet" type="text/css" />
<link href="http://mianshi.buzhi.com/public/css/ms-index.css" rel="stylesheet" type="text/css" />
<link href="http://mianshi.buzhi.com/public/css/ui-dialog.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="http://mianshi.buzhi.com/public/js/jquery1.8.js"></script>
<script language="javascript" src="http://mianshi.buzhi.com/public/js/dialog-min.js"></script>
</head>
<body>
<div class="ms-header">
  <div class="conter-auto">
    <div class="img logo left"><a href="#!" class="link"></a></div>
    <div class="right">
      <div class="link-list"><a href="#!" class="img xl-weibo"></a><a href="#!" class="img tx-weibo"></a><a href="#!" class="img qq-kj"></a><a href="#!" class="img weixing"></a></div>
      <div class="header-hotline">
        <h3>客服热线</h3>
        <span class="img hotline"></span>
        <p class="text">周一至周五8：30~17：30</p>
      </div>
    </div>
  </div>
</div>
<div class="ms-menu">
  <div class="conter-auto"><a href="/index.php/Home/Index/" class="link ">首页</a><a href="/index.php/Home/Index/question" class="link">上课须知</a><a href="/index.php/Home/Index/pay" class="link ">费用及付款方式</a><a href="/index.php/Home/Index/#goto-comment" class="link">用户评价</a><a href="/index.php/Home/Index/form" class="link current">面试模拟评测（免费）</a><a href="/index.php/Home/Index/#goto-baoguo" class="link ">培训包过吗？</a></div>
</div>
<div class="ms-banner">
  <div class="conter-auto">
    <div class="left">
      <p class="text">全国限招21名学员，每班1名班主任，每个学员配备1名助教！</p>
      <br />
      <p class="text">中政行测，中政申论VIP备考会员优先！</p>
    </div>
    <div class="right ms-video"><a class="link" href="javascript:show_video();"></a></div>
  </div>
</div>



<div class="box-video" style="display:none;"><script type="text/javascript"> var letvcloud_player_conf =  {"uu":"47448b57d7","vu":"cfc0abbff4","auto_play":1,"gpcflag":1,"width":640,"height":360};</script><script type="text/javascript" src="http://yuntv.letv.com/bcloud.js"></script>
</div>
<script language="javascript">

function show_video(){
	dialog({id:'vide-box', title: '2015国家公务员在线面试培训', content: $('.box-video').html(), padding:0}).showModal();
}

</script>



<div class="conter-auto wt-column1">
  <div class="wt-clause pc-clause">
    <div class="wt-title"><span class="img eva"></span>
      <h1>免费面试模拟评测：</h1>
	  <div>
      <p class="text"><b>1、面试评测时间：</b><strong>笔试结束后每天9:00-18:00</strong></p>
      <p class="text"><b>2、评测内容：</b>国家面试研究院权威研发试题</p>
      <p class="text"><b>3、评测方式：</b>考生在本页面“提交”预约信息，即可等待工作人员电话<br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;回复确认面试时间</p>
      <p class="text">&nbsp;&nbsp;&nbsp;&nbsp;温馨提示：考生均可免费进行面试测评，点击在线QQ客服还可领取500元国家面试集训班现金券。</p></div>
      <div class="pc-service"><span class="span1">如有疑问可咨询：<strong>400-000-5783</strong></span><span class="span2"></span></div>
    </div>
  </div>
  <div class="eva-block">
    <h2>预约面试评测</h2>
	<div class="overflow"><div class="input-link"><strong>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</strong><input id="form-username" type="text" placeholder="真实姓名" /></div>
	<div class="input-link"><strong>手机号码：</strong><input id="form-tel" onkeyup="value=value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" type="text" placeholder="13000000000" /></div>
    <div class="input-link"><strong>报考地区：</strong><input id="form-city" type="text" placeholder="河北 石家庄" /></div>
	<div class="input-link"><strong>笔试成绩：</strong><input id="form-exam" type="text" onkeyup="value=value.replace(/[^\d\.]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d\.]/g,''))" placeholder="80" /></div>
	</div>
<div><a class="conter-link js-form-submit" id="js-form-submit" style="cursor:pointer;">立即预约</a></div>
	</div>
</div>



<script language="javascript">
$(function(){
	
	//提交
	var btn	= $('.js-form-submit');
		btn.click(function(){
			
			var username	= $('#form-username').val();
			var tel			= $('#form-tel').val();
			var city		= $('#form-city').val();
			var exam		= $('#form-exam').val();
			
			var d			= dialog.get('show-msg');
			if(d){ d.close().remove(); }
			
			if(!username){
				var d = dialog({align: 'top', content: '请填写用户名!', id:'show-msg'});
				d.show(document.getElementById('form-username'));
				$('#form-username').focus();
				return;
			}
			
			if(!tel){
				var d = dialog({align: 'top', content: '请填写手机号码!', id:'show-msg'});
				d.show(document.getElementById('form-tel'));
				$('#form-tel').focus();
				return;
			}
			
			if(!city){
				var d = dialog({align: 'top', content: '请填写考试地区!', id:'show-msg'});
				d.show(document.getElementById('form-city'));
				$('#form-city').focus();
				return;
			}
			
			if(!exam){
				var d = dialog({align: 'top', content: '请填写笔试成绩!', id:'show-msg'});
				d.show(document.getElementById('form-exam'));
				$('#form-exam').focus();
				return;
			}
			
			if($(this).attr('ck') == 'ck'){ return;	}
			$(this).attr('ck', 'ck');
			
			var url			= '?c=Apply';
			var data		= 'username=' + username + '&tel=' + tel + '&city=' + city + '&exam=' + exam;
			
			btn.html('正在提交..');
			ajax(url, data, function(json){
				
				var d = dialog({align: 'top', content: json.msg, id:'show-msg'});
				d.show(document.getElementById('js-form-submit'));
				
				if(json.status == 0){ $(this).removeAttr('ck'); btn.html('立即预约'); 
				}else{ btn.html('成功预约'); }
			});
		});
		
		
		/**
		 * 全局公用 请求函数
		 *
		 * @param  string    url       请求模块
		 * @param  string    data      发送的数据
		 * @param  function  callback  回调函数
		 * @param  array     params    自定义参数[可覆盖默认配置]
		 */
		function ajax(url, data, callback, params){
			var config = {url: url, data:data, success: callback, dataType:'json', 
						  type: "POST",cache: false};
			for(var x in params){ config[x] = params[x]; }
			
			$.ajax(config);
		}	
});



</script>


<div class="ms-footer"><div class="conter-auto"><a class="link" href="http://www.zoobao.com/" target="_blank">关于我们</a>|<a class="link" href="http://www.zoobao.com/products/" target="_blank">产品服务</a>|<a class="link" href="http://www.zoobao.com/contact/" target="_blank">合作联系</a>|<a class="link" href="http://www.zoobao.com/?c=question" target="_blank">上课须知</a>|<a class="link" href="http://www.zoobao.com/?goto=comment#goto-comment" target="_blank">用户评价</a><p class="text">全国客服热线：<strong>400-000-5784</strong>  湘ICP备13008748号-4</p><p class="text">版权所有 @ 2005-2014 国家公务员考试资讯平台(zoobao.com) all right Reseverd</p></div></div>


</body>
</html>