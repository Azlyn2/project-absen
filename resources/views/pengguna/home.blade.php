<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sabang Digital Indonesia</title>
    @include('Template.head')
</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('Template.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('Template.navbar')
                <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        
            <!-- Page Heading -->
            <h1 class="h3 mb-3 text-gray-800">Data Pengguna</h1>
            <a class="btn btn-primary mb-3"  href="{{ route('pengguna.tambahPengguna') }}" class="fa fa-plus"></lass=> Tambah Data</a>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Pengguna Sabang Digital Indonesia</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Jabatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pengguna as $index => $p) 
                                <tr>
                                    <td>{{$p->id}}</td>
                                    <td>{{$p->nama}}</td>
                                    <td>{{$p->email}}</td>
                                    <td>{{$p->jabatan}}</td>
                                    <td>
                                    <a href="#" class="btn btn-warning btn-circle">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <!-- Footer -->
    @include ('Template.footer')
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/login">Logout</a>
                </div>
            </div>
        </div>
    </div>

    @include ('Template.script')
</body>

</html>
