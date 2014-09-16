@if(!empty($notFound))
<p>Sorry nothing found for your query!</p>
@else
@foreach($records as $record)
	<tr class='a_record'>
		<td class='book_id'>{{$record -> u_id}}
		</td>
		<td class='created_at'>借出时间</td>
		<td class='updated_at'>还书时间</td>
		<td claas='book_title'>书名</td>
		<td class='book_author'>作者</td>
		<td class='book_intro'>说明</td>
	</tr>
@endforeach
{{$posts->links()}}
@endif
