@extends('books.layout')

@section('content')
<div class='row' style="text-align:center;margin-top:15px;margin-bottom:15px">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Information</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('books.index')}}">Back</a>
        </div>
    </div>
</div>
<div calss="row" style="text-align:center;background:#FFF5F3;"> 
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Book Title:<br></strong>
            {{$book->book_title}}
        </div>
    </div>
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Author Name <br></strong>
            {{$book->author_name}}
        </div>
    </div>
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Student Name<br></strong>
            {{$book->student_name}}
        </div>
    </div>
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Contact Number<br></strong>
            {{$book->contact_number}}
        </div>
    </div>
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Issue Books<br></strong>
            {{$book->issue_books}}
        </div>
    </div>
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Return Books<br></strong>
            {{$book->return_books}}
        </div>
    </div>
    
</div>
@endsection