<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">  
    <title>Add new student</title>
</head>
<body>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Student</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('students.list')}}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('students.list')}}" method='POST' >
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Full Name:</strong>
                <input type="text" name="fullname" class="form-control" placeholder="Type Your Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Email:</strong>
              <input type="text" name="email" class="form-control" placeholder="Type Your Email">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Phone:</strong>
              <input type="text" name="phone" class="form-control" placeholder="Type Your Phone Number">
            </div>
        </div>

        </div>
  

<br><br>
           <h4>Students Details </h4>

           <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Alternative Phone Number:</strong>
              <input type="text" name="alter_phone" class="form-control" placeholder="Type Your Alternative Phone Number">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Course:</strong>
              <input type="text" name="course" class="form-control" placeholder="Type Your Course Name">
            </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Roll Number:</strong>
              <input type="text" name="roll_number" class="form-control" placeholder="Type Your Roll">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" value="submit">Submit</button>
        </div>
             
</form>
   
        
 

</body>
</html>


