<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">   
    <title>Task_one</title>
</head>
<body>
<style>
        .pagination{
            float: right;
            margin-top: 10px;
        }
</style>



<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> MY TASK ONE </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('students.create')}}"> Create New Student</a>
            </div>
          

        </div>
    </div>
  
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered" >
        <tr>
            <th>SL</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Add/Edit Details</th>
            <th>Action</th>
        </tr>
        @foreach($students_data  as $student)
        <tr>
          
             <td>{{$student->id}}</td>
            <td>{{$student->fullname}} <br>
         

            </td>
            <td>{{$student->email}}</td>

            <td>{{$student->phone}}</td>

            <td>
            <a class="btn btn-primary" href="{{route('student.details',$student->id)}}">Edit</a>
            </td>
            <td>
              
       
                    <a class="btn btn-primary" href="{{route('student.edit',$student->id)}}">Edit</a>
                <form action="{{route('students.delete',$student->id)}}" method="get">
   
                    @csrf
             
                    <button type="submit"  class="btn btn-danger">Delete</button>
                </form>
            </td>
            @endforeach
        </tr>
   


     


        <div class="card-footer">
            <div class="row justify-content-between">
                <div class="col-md-6">
              
                </div>
                <div class="col-md-2">

                </div>





    </table>
  
  
</body>
</html>