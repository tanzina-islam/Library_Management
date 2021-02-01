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
	<div style="text-align: center;">
	<form action="{{route('books.update',$book->id) }}" method="POST">
 	 	@csrf
 	 	@method('PUT')
 	 <div>
		<strong>Book Title:</strong><br>
		<input type="text" name="book_title" placeholder="Book Title"
		value="{{$book->book_title}}">
	</div>
	<div>
		<strong> Author Nmae:</strong><br>
		<input type="text" name="author_name" placeholder="Author Name"
		 value="{{$book->author_name}}">
    </div>
    <div>
		<strong>Student Name:</strong><br>
		<input type="text" name="student_name" placeholder="Student Name" 
		value="{{$book->student_name}}">
	</div>
	<div>
		<strong>Contact Number:</strong><br>
		<input type="text" name="contact_number" placeholder="Contact Number " 
		value="{{$book->contact_number}}"> 
	</div>
	<div>
		<strong>Issue Books:</strong><br>
		<input type="text" name="issue_books" placeholder="Issue Books"
		value="{{$book->issue_books}}"> 
	</div>
	<div>
		<strong>Return Books:</strong><br>
		<input type="text" name="return_books" placeholder="Return Books"
		value="{{$book->return_books}}">
	</div>
		<br> 
		<button class="btn btn-warning" type="submit" >Update</button>

	</form>
  </div>
</div>