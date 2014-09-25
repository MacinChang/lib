<html>
<head>
	<title>书本详情</title>
<meta charset='utf-8'>
<style type="text/css">
.show_book{border: 1px solid #ccc; margin: 50px 20%}
	.show_cover{border-right: 30px solid #ccc;width: 630px; border-top: 20px solid #eee; position: relative;box-shadow: -5px 5px 20px #ccc; margin: 20px 30px;}
		.left-top{position: absolute;width: 0;height: 0;overflow: hidden; top: -30px; left: -20px; border-top: 25px solid #fff; border-left: 25px solid #fff; border-right: 25px solid transparent; border-bottom: 25px solid transparent;}
		.right-bottom{position: absolute; right: -33px; bottom: -20; width: 0; height: 0; overflow: hidden;border-right: 28px solid #fff; border-bottom: 28px solid #fff; border-top: 25px solid transparent; border-left: 25px solid transparent;  }
	.show_cover img{width: 630px; height: 900px;}
	.show_detail{margin-top: 30px; line-height: 40px; padding-left: 80px;}
		.show_title{}
		.show_author{}
		.show_press{}
		.show_introduction{width: 630px; height: 100px; resize:none; outline: none; border: 1px solid #999; border-radius: 5px; box-shadow: 2px 10px 20px #eee;}

		.lend_times{}
		.lend_times span{display: inline-block; width: 30px ; height: 20px ; text-align: center; }
	.show_detail input{outline: none; width: 50px; height: 28px; background: #abc; line-height: 28px; color: #fafafa; font-size: 20px;}
		.is_cool{display: inline-block; margin-left: 320px;}
		.is_shit{}
		.state{}
		.borrow_btn{display: inline-block; margin-left: 350px;}
		.return_btn{display: inline-block; margin-left: 40px;}
</style> 
</head>
<body>
<!-- 这里放头部啊、搜索框什么的 -->



<!-- 以下是show-book页面 -->
<div class='show_book'>
	<div class='show_cover'>
		<span class='left-top'></span>
		<span class='right-bottom'></span>
		<!-- 这里放封面图片 --><img src="images/s1959967.jpg">
	</div>
	<div class='show_detail'>
		<span class='show_title'><!-- 这里放书名 --></span><br>
		<span class='show_author'><!-- 这里是作者 --></span><br>
		<span class='show_press'><!-- 这里是出版社 --></span><br>
		<textarea class='show_introduction' readonly></textarea><br>
		<span class='lend_times'>已被借过<span><!-- 这里写个数字 --></span>次了</span>
		<input type='button' class='is_cool' value='赞'/>（<span class='times_of_coll'></span>）
		<input type='button' class='is_shit' value='踩'/>（<span class='times_of_shit'></span>）<br>
		状态：<span class='state'></span>
		<input type='button' class='borrow_btn' value='借书'>
		<input type='button' class='return_btn' value='还书'>
	</div>
</div>

</body>
</html>