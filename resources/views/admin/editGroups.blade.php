<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Custom fonts for this template-->
    <link href="{{url('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        
        <x-layouts.sidebar>
        </x-layouts.sidebar>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content" class="mt-4 ml-3">
                <h1>Edit Page</h1>
                <div class="input-group">
                    <form method="POST" action="{{ route('groups.update',$data->id) }}" >
                        <div class="row">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <label for="name">Name</label> <br>
                            <input type="text" class="col-6" name="name" value="{{ $data->name }}"> <br>
                            </div>
                            <div class="mb-3">
                            <label for="group">Teacher</label> <br>
                            <input type="text" class="col-6" name="teacher" value="{{ $data->teacher }}"> <br>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="col-6 btn btn-primary" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>
