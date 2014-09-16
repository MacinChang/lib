@if(!empty($notFound))
<p>Sorry nothing found for your query!</p>
@else
@foreach($records as $record)
	<tr class='a_record'>
		<td class='book_id'>
			{{$record -> u_id}}
		</td>
		<td class='created_at'>
			{{$record -> created_at}}
		</td>
		<td class='updated_at'>
			{{$record -> updated_at}}
		</td>
		<td claas='book_title'>
			{{$record -> name}}
		</td>
		<td class='book_author'>
			{{$record -> author}}
		</td>
		<td class='book_intro'>
		</td>
	</tr>
@endforeach
{{$posts->links()}}
@endif
