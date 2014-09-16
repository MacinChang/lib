@if(!empty($notFound))
<p>Sorry nothing found for your query!</p>
@else
@foreach($pro_books as $book)
	<div class='a_rec'>
		<div class='a_rec_cover'>
			<img src ='{{$book -> image_url}}'/>;
		</div><br>
		<span class='a_rec_title'>
			{{$book -> name}};
		</span><br>
		<span class='a_rec_author'>
			{{$book -> author}};
		</span><br>
		<span class='a_rec_press'>
			{{$book -> press}};
		</span><br>
	</div>
@endforeach
@endif
