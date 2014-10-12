@if($source == 'look')
<html>
<head>
	<title>ASCII 图书管理系统</title>
	<meta charset="utf-8" >
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<style type="text/css">

</style>
<body>
<php? include'top.blade.php'; ?>
<div id='container' class=''>
	<div id='main'>
		<div id='main_cont'>
			<div id='nav'>
				<a id='category' class = 'setNav'>图书汇总</a><a id='search'>查找图书</a><a id='record'>借阅记录</a>
			</div>
			<div id='books' class='a_cont'>
				{{$book_list}}                                       
			</div>
			<div id= 'search_result' class='a_cont' > 
				{{$search_result}}
			</div>
			<div id='borrow_record' class='a_cont' >
				<table>
					<th>
						<td>id</td>
						<td>借出时间</td>
						<td>还书时间</td>
						<td>书名</td>
						<td>作者</td>
						<td>说明</td>
					</th>
					{{$borrow_record}}
				</table>
			</div>
		</div>
	</div>
	<div id='rec_cont'>
		<div id='upper'>向上翻</div>
		<div id='all_rec'>
			<div id='rec_container'>
				{{$propose_list}}
		</div>
		</div>
		<div id='downer'>向下翻</div>
	</div>
</div>

<script type="text/javascript" src=js/index.js>

</script>
</body>
@else 
	{{$states}}
@endif