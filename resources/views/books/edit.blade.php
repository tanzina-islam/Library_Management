@extends('books.layout')

@section('content')
@if ($errors->any())
    <div  >
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<div>
	<form action="{{route('books.update',$book->id) }}" method="POST">
 	 	@csrf
 	 	@method('PUT')
 	 	
		Book Title:<input type="text" name="book_title" placeholder="Book Title"
		value="{{$book->book_title}}"> 
		<br>
		Author Name:<input type="text" name="author_name" placeholder="Author Name"
		 value="{{$book->author_name}}">
		<br>

		Student Name: <input type="text" name="student_name" placeholder="Student Name" 
		value="{{$book->student_name}}">
		<br>

		Contact Number:<input type="text" name="contact_number" placeholder="Contact Number " 
		value="{{$book->contact_number}}"> 
		<br>
		Issue Books:<input type="text" name="issue_books" placeholder="Issue Books"
		value="{{$book->issue_books}}"> 
		<br>
		Return Books:<input type="text" name="return_books" placeholder="Return Books"
		value="{{$book->return_books}}">
		
	
		<br> <br>
		<button type="submit" >Update</button>

		


	</form>

</div>