@if(!empty($notFound))
<p>Sorry nothing found for your query!</p>
@else
@foreach($books as $book)
	<div class='a_book'>
		<div class='book_cover'>
			<img src = '{{$book -> image_url}}'/>
		</div>
		<div class='detail'>
			<span class='book_title'>
				{{link_to_route('book.index',$book -> name, $book -> id)}}
			</span><br/>
			<span class='author'>
				<!-- 作者 -->
				{{$book -> author}}
			</span><br/>
			<span class='press'>
				<!-- 出版社 -->
				{{$book -> press}}
			</span><br>
			<textarea class='introduction' noresize='true' readonly>
				{{$book -> detail}}
			</textarea>
		</div>
	</div>
@endforeach
{{$books->links()}}
@endif
