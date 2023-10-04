@include('dash.layouts.header');

    <!-- Page Wrapper -->
    <div id="wrapper">

      @include('dash.layouts.sidebar');
        <!-- End of Sidebar -->

        <div class="container">
            <div class="row">
                <div class="col col-md-6 col-lg-6 col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h3>Message From: {{$contact->name}}</h3>
                        </div>
                        <div class="card-body">
                            <p>email : {{$contact->email}}</p>
                            <hr>
                            <!-- <textarea name="form-control" disabled cols="30" rows="10"> -->
                               <p>
                               {{$contact->message}}
                               </p><a href="{{route('contact.index')}}" class="btn btn-primary w-100">Back</a>

                            <!-- </textarea> -->
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
@include('dash.layouts.footer');