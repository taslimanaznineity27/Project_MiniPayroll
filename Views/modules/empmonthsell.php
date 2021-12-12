<div class="content-wrapper">
    <section class="content-header">
        <h1>User Management</h1>
        <ol class="breadcrumb">
            <li>
                <a href="home"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class="active">User Management</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Title</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                div class="row">
                <div class="col">
                    <form method="post" action="{{ route('employee.registration.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <!-- 1st Row -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Stuff Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control" required="">
                                            </div>
                                        </div>
                                    </div> <!-- End Col md 4 -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Father's Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="fname" class="form-control" required="">
                                            </div>
                                        </div>
                                    </div> <!-- End Col md 4 -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Mother's Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="mname" class="form-control" required="">
                                            </div>
                                        </div>
                                    </div> <!-- End Col md 4 -->
                                </div> <!-- End 1stRow -->
                                <div class="row">
                                    <!-- 2nd Row -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Mobile Number <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="mobile" class="form-control" required="">
                                            </div>
                                        </div>
                                    </div> <!-- End Col md 4 -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Address <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="address" class="form-control" required="">
                                            </div>
                                        </div>
                                    </div> <!-- End Col md 4 -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Gender <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="gender" id="gender" required="" class="form-control">
                                                    <option value="" selected="" disabled="">Select Gender
                                                    </option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> <!-- End Col md 4 -->
                                </div> <!-- End 2nd Row -->
                                <div class="row">
                                    {{-- Address adding Column --}}
                                    <!-- 3rd Row -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Division <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="divisions" id="divisions" required="" class="form-control">
                                                    <option value="" selected="" disabled="">Select Religion
                                                    </option>
                                                    <option value="Khulna">Khulna</option>
                                                    <option value="Dhaka">Dhaka</option>
                                                    <option value="Rajshahi">Rajshahi</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> <!-- End Col md 4 -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>District <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="distract" id="distract" required="" class="form-control">
                                                    <option value="" selected="" disabled="">Select Religion
                                                    </option>
                                                    <option value="Jhenaidah">Jhenaidah</option>
                                                    <option value="Magura">Magura</option>
                                                    <option value="Jassoar">Jassoar </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> <!-- End Col md 4 -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Upozila <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="thana" id="thana" required="" class="form-control">
                                                    <option value="" selected="" disabled="">Select Religion
                                                    </option>
                                                    <option value="Harinakunda">Harinakunda</option>
                                                    <option value="Sador">Sador</option>
                                                    <option value="Mehepur">Mehepur</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> <!-- End Col md 4 -->
                                </div> <!-- End 3rd Row -->

                                {{-- Address adding Column --}}
                                <div class="row">
                                    <!-- 3rd Row -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Religion <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="religion" id="religion" required="" class="form-control">
                                                    <option value="" selected="" disabled="">Select Religion
                                                    </option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Christan">Christan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> <!-- End Col md 4 -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Date of Birth <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="date" name="dob" class="form-control" required="">
                                            </div>
                                        </div>
                                    </div> <!-- End Col md 4 -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Type Of Stuff <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="designation_id" id="designation_id" required="" class="form-control">
                                                    <option value="" selected="" disabled="">Select Type Of
                                                        Stuff
                                                    </option>
                                                    @foreach ($designations as $deg)
                                                    <option value="{{ $deg->id }}">
                                                        {{ $deg->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div> <!-- End Col md 4 -->
                                </div> <!-- End 3rd Row -->
                                <div class="row">
                                    <!-- 4TH Row -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Salary <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="salary" class="form-control" required="">
                                            </div>
                                        </div>
                                    </div> <!-- End Col md 4 -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <h5>Joining Date <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="date" name="join_date" class="form-control" required="">
                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- End Col md 4 -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Group <span class="text-danger">*</span></h5>
                                            <div class="controls">

                                            </div>
                                        </div>
                                    </div> <!-- End Col md 4 -->


                                </div> <!-- End 4TH Row -->
                                <div class="row">
                                    <!-- 5TH Row -->


                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <h5>Shift <span class="text-danger">*</span></h5>
                                            <div class="controls">

                                            </div>
                                        </div>

                                    </div> <!-- End Col md 4 -->




                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <h5>Profile Image <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="file" name="image" class="form-control" id="image">
                                            </div>
                                        </div>

                                    </div> <!-- End Col md 4 -->


                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <div class="controls">
                                                <img id="showImage" src="{{ url('upload/no_image.jpg') }}" style="width: 100px; width: 100px; border: 1px solid #000000;">

                                            </div>
                                        </div>

                                    </div> <!-- End Col md 4 -->


                                </div> <!-- End 5TH Row -->



                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-info md-5" value="Submit">
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.col -->
            </div>
        </div>
        <div class="box-footer">Footer</div>
</div>
</section>
</div>