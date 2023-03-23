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

            <!-- Main Content -->
            <div id="content" class="mt-4 ml-3">
                <h1>Groups Page</h1>
                <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">Add Groups</button>
                
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Group</th>
                        <th scope="col">Teacher</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach($data as $dat)
                        <th scope="row">{{$dat->id}}</th>
                        <td>{{$dat->name}}</td>
                        <td>{{$dat->teacher}}</td>
                        <td>
                          <div class="button-box d-flex">
                            <a href ="{{ route('groups.edit',$dat->id) }}" class="btn btn-primary mr-3">Edit</a>
                            <form action="{{ route('groups.destroy',$dat->id) }}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                {{-- Add groups Modal --}}
                <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="addModalLabel">Add Group</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="{{ route('groups.store') }}" method="post"> <br>
                            @csrf
                            <label for="name">Group:</label> <br>
                            <input type="text" name="name"> <br>
                            <label for="teacher">Teacher:</label> <br>
                            <input type="text" name="teacher"> <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>