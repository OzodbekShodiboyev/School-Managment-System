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

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" class="mt-4 ml-3">
                <h1>Students Page</h1>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Student</button>
                <hr>
                @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('message')}}
                    <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Group</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $dat)
                      <tr>
                        <th scope="row">{{$dat->id}}</th>
                        <td>{{$dat->name}}</td>
                        <td>{{$dat->group}}</td>
                        <td>{{$dat->phone}}</td>
                        <td>
                            <div class="button-box d-flex">
                            <a type="button" class="btn btn-primary mr-2" href="{{ route('students.edit',$dat->id) }}">Edit</a>
                            <form method="POST" action="{{ route('students.destroy', $dat->id) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete" />
                            </form>
                            </div>
						    
						
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- End of Main Content -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Add Students</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group">
                            <form action="{{route('students.store')}}" method="POST">
                                @csrf
                                <label for="name">Full Name</label> <br>
                                <input type="text" name="name"> <br>
                                <label for="group">Group Name</label> <br>
                                <input type="text" name="group"> <br>
                                <label for="phone">Phone</label> <br>
                                <input type="text" name="phone">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
            </div>

            
           
             
            
              <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('assets/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{url('assets/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{url('assets/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{url('assets/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>