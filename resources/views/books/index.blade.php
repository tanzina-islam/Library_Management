@extends('books.layout')

@section('content')

<div>

	<h1> Student Profiles </h1>

	<br>
	<a href="{{ route('books.create') }}"> Register Student </a>

	<br>
	<hr>

	<table border="2" width="800">
		<tr>
			<th> Book Title </th>
			<th> Author Name </th>
			<th> Student Name </th>
			<th> Contact Number</th>
			<th> Issue Books </th>
			<th> Return Books </th>
			<th> Action </th>
		</tr>

		@foreach ($books as $book)
		<tr> 
			<td>{{$book->book_title}} </td>
			<td>{{$book->author_name}} </td>
			<td>{{$book->student_name}} </td>
			<td>{{$book->contact_number}} </td>
			<td>{{$book->issue_books}} </td>
			<td>{{$book->return_books}} </td>
			<td>
				<form action="{{ route('books.destroy', $book->id)}}" method="POST">
					<a href="{{route('books.show', $book->id)}}">Show</a>
					<a href="{{route('books.edit', $book->id)}}"> Edit </a>					
					@csrf
                    @method('DELETE') 

					<button type="submit" > Delete </button>
				</form>
			</td>
		</tr>
		@endforeach 

	</table>

</div>