<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coin Me</title>
    @include('adminLayouts.header')
</head>

<body>
    <div class="main-wrapper">
        @include('adminLayouts.nav')
        @include('adminLayouts.sidebar')
        <div class="page-wrapper">
            <div class="content">

                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Edit Profile</h4>
                    </div>
                </div>
                <form>
                    <div class="card-box">
                        <h3 class="card-title">Basic Informations</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap">
                                    <img class="inline-block"
                                        src="{{ auth()->user()->getFirstMediaUrl('profile_image') }}" alt="user">
                                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="upload" type="file">
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Name</label>
                                                <input type="text" class="form-control floating"
                                                    value="{{ auth()->user()->name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Email</label>
                                                <input type="text" class="form-control floating"
                                                    value="{{ auth()->user()->email }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Phone No</label>
                                                <div class="cal-icon">
                                                    <input class="form-control floating" type="text"
                                                        value="{{ auth()->user()->mobile_no }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus select-focus">
                                                <label class="focus-label">Gendar</label>
                                                <select class="select form-control floating">
                                                    <option value="{{ auth()->user()->gender }} selected">
                                                        {{ auth()->user()->gender }}</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus select-focus">
                                                <label class="focus-label">Address</label>
                                                <div class="cal-icon">
                                                    <input class="form-control floating" type="text"
                                                        value="{{ auth()->user()->address }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="text-center m-t-20">
                        <button class="btn btn-primary submit-btn" type="button">Save</button>
                    </div>
                </form>



            </div>

        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>

    @include('adminLayouts.footer')
    <script src="{{ url('assets/js/select2.min.js') }}"></script>
    <script src="{{ url('assets/js/moment.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
</body>


<!-- blank-page24:04-->

</html>
