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

<div style="text-align:center;">
	<form action="{{route('books.store')}}" method="POST">
 	 	@csrf
 	 	

 	 	<div>
 	 	 <strong>Book Title:</strong><br>
		 <input type="text" name="book_title" placeholder="Book Title">
		</div>
		<div>
 	 	 <strong>Author Nmae:</strong><br>
		 <input type="text" name="author_name" placeholder="Author Name">
		</div>
		<div>
 	 	 <strong>Student Name:</strong><br>
		<input type="text" name="student_name" placeholder="Student Name"> 
		</div>
		<div>
 	 	 <strong>Contact Number:</strong><br>
		 <input type="text" name="contact_number" placeholder="Contact Number">
		</div>
		<div>
 	 	 <strong>Issue Books:</strong><br>
		  <input type="text" name="issue_books" placeholder="Issue Books">
		</div>
		<div>
 	 	 <strong>Return Books:</strong><br>
		  <input type="text" name="return_books" placeholder="Return Books">

		</div><br>
		<button class="btn btn-primary" type="submit" >Register</button>

		</form>

</div>