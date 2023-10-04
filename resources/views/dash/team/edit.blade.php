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
                                <h3>Update Team Member: {{ $member->name }}</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('team.update',$member->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="input-group d-flex justify-content-between w-100">
                                        <div class="form-group col-md-6">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" value="{{ $member->name }}"
                                                name="name" id="name" placeholder="Enter Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="job_title">Job Title</label>
                                            <input type="text" class="form-control" value="{{ $member->job_title }}"
                                                name="job_title" id="job_title" placeholder="Enter Job Title">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="about">About</label>
                                        <textarea name="about" id="about" class="form-control" cols="30"
                                            rows="10">{{ $member->about }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Old Image</label>
                                        <img src="/storage/images/members/{{ $member->image }}" style="max-width: 150px"
                                            alt="">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">New Image</label>
                                        <input type="file" class="form-control" name="image" id="image"
                                            placeholder="Upload Image">
                                    </div>
                                    <input type="submit" value="Update" class="btn btn-primary">
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