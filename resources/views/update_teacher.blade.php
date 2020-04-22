<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Teacher</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <br>
    <h1>Update Teacher Details</h1>
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
                    swal("Done","Successfully Update Teacher Details !","success");
                }
            </script>

            <form method="post" action="/updateTeacher">
                <div class="text-center">
                    {{csrf_field()}}
                    <input type="text" class="form-control" name="First_Name" placeholder="Enter First Name" value="{{$teacher->f_name}}">
                    <br>
                    <input type="text" class="form-control" name="Last_Name" placeholder="Enter Last Name" value="{{$teacher->l_name}}">
                    <br>
                    <input type="text" class="form-control" name="contact_no" id="contact" onkeypress="return isNumber(event)" placeholder="Enter Contact Number" value="{{$teacher->contact_no}}">
                    <br>
                    <input type="email" class="form-control" name="Email" placeholder="Enter Email Address" value="{{$teacher->email}}">
                    <br>
                </div>
                <br>
                <input type="submit" class="btn btn-primary" value="Update Teacher">
                <a href="/ViewAllTeacher" class="btn btn-warning">Back</a>
                <input type="text" name="id" value="{{$teacher->id}}" hidden>
            </form>
            <script>
                function isNumber(evt)
                {
                    var charCode = (evt.which) ? evt.which : event.keyCode
                    if (charCode > 31 && (charCode < 48 || charCode > 57)){
                        return false;
                    }
                    document.getElementById("contact").maxLength = "10";

                    return true;
                }
            </script>
        </div>
    </div>

</div>
</body>
</html>
