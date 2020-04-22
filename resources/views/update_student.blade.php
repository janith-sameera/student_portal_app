<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Student</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <br>
    <h1>Update Student Details</h1>
    <br>
    <div class="row">
        <div class="col-md-5">
            @if(!empty($errors->first()))
                <div class="row col-lg-12">
                    <div class="alert alert-danger">
                        <span>{{ $errors->first() }}</span>
                    </div>
                </div>
            @endif

            <script>
                var msg = '{{Session::get('alert')}}';
                var exist = '{{Session::has('alert')}}';
                if(exist){
                    swal("Done","Successfully Updated !","success");
                }
            </script>

            <form method="post" action="/updateStudent">
                <div class="text-center">
                    {{csrf_field()}}
                    <input type="text" class="form-control" name="First_Name" value="{{$student->f_name}}" placeholder="Enter First Name">
                    <br>
                    <input type="text" class="form-control" name="Last_Name" value="{{$student->l_name}}" placeholder="Enter Last Name">
                    <br>
                    <input type="text" class="form-control" name="School_Name" value="{{$student->school_name}}" placeholder="Enter School Name">
                    <br>
                    <input type="email" class="form-control" name="Email" value="{{$student->email}}" placeholder="Enter Your Email">
                    <br>
                    <input type="text" class="form-control" name="Grade" value="{{$student->grade}}" placeholder="Enter Your Grade">
                    <br>
                </div>
                <br>
                <input type="submit" class="btn btn-primary" value="Update Student">
                <a href="/ViewAllStudent" class="btn btn-warning">Back</a>
                <input type="text" name="id" value="{{$student->id}}" hidden>
            </form>
        </div>
    </div>

</div>
</body>
</html>
