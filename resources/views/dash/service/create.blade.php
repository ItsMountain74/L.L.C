@include('dash.layouts.header')

<!-- Page Wrapper -->
<div id="wrapper">

    @include('dash.layouts.sidebar')
    <!-- End of Sidebar -->

    <div class="container">
        <div class="row">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 mt-4">
                        <div class="card">
                            <div class="card-header text-center">
                                <h3>Add New Service</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group col-md-12">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" value="{{ old('title') }}" name="title"
                                            id="title" placeholder="Enter Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">Description</label>
                                        <textarea name="desc" id="desc" class="form-control" cols="30"
                                                  rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control" value="{{ old('image') }}" name="image"
                                               id="image" placeholder="Upload image">
                                    </div>

                                    <input type="submit" value="Create" class="btn btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
@include('dash.layouts.footer')
