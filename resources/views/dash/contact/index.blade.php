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
            <div class="col-md-12 col-lg-12 col-sm-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Messages From Clients</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <!-- <th scope="col">#</th> -->
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">View</th>
                                    <th scope="col">DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $id = 1;
                                @endphp
                                @foreach($contacts as $c)
                                <tr>
                                    <!-- <th scope="row">{{$c->id}}</th> -->
                                    <td>{{$id}}</td>
                                    <td>{{$c->name}}</td>
                                    <td>{{$c->email}}</td>
                                    <td>
                                        <a href="{{route('contact.show',$c->id)}}"
                                            class="btn btn-outline-primary">View</a>
                                    </td>
                                    <td>
                                        <form action="{{route('contact.destroy',$c->id)}}" method="POST">
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