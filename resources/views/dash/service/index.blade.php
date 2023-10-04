@include('dash.layouts.header')

<!-- Page Wrapper -->
<div id="wrapper">

    @include('dash.layouts.sidebar')
    <!-- End of Sidebar -->

    <div class="container">
        <div class="row">
            @if (session('success'))
            <div class="alert alert-success w-100">
                {{ session('success') }}
            </div>
            @endif
            <div class="col-md-12 col-sm-12 col-lg-12 mt-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Service List</h3>
                        <a href="{{ route('service.create') }}" class="btn btn-primary float-right">Add New Service</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <!-- <th scope="col">#</th> -->
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $id = 1;
                                @endphp
                                @foreach($services as $s)
                                <tr>
                                    <td>{{$id}}</td>
                                    <td>{{$s->title}}</td>
                                    <td>
                                        <a href="{{ route('service.edit',$s->id) }}"
                                            class="btn btn-outline-warning">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{route('service.destroy',$s->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-outline-danger" value="DELETE">
                                        </form>
                                    </td>
                                </tr>
                                @php
                                $id++;
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
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