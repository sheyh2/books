@extends('layouts.admin')

@push('addition-script')
    <script src="{{ asset('admin_assets/global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('admin_assets/global_assets/js/demo_pages/form_layouts.js') }}"></script>
@endpush

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Form Layouts</span> - Vertical</h4>
                <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-link btn-float text-body"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                    <a href="#" class="btn btn-link btn-float text-body"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                    <a href="#" class="btn btn-link btn-float text-body"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="form_layout_vertical.html" class="breadcrumb-item">Form layouts</a>
                    <span class="breadcrumb-item active">Vertical</span>
                </div>

                <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                    <a href="#" class="breadcrumb-elements-item">
                        <i class="icon-comment-discussion mr-2"></i>
                        Support
                    </a>

                    <div class="breadcrumb-elements-item dropdown p-0">
                        <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-gear mr-2"></i>
                            Settings
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                            <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                            <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <!-- Vertical form options -->
        <div class="row">
            <div class="col-lg-6">

                <!-- Basic layout-->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Basic layout</h5>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>

                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>

                            <div class="form-group">
                                <label>Your state:</label>
                                <select class="form-control form-control-select2" data-fouc>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="KY">Kentucky</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="d-block">Gender:</label>

                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="gender" checked>
                                    <span class="custom-control-label">Male</span>
                                </label>

                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="gender">
                                    <span class="custom-control-label">Female</span>
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Your avatar:</label>
                                <label class="custom-file">
                                    <input type="file" class="custom-file-input">
                                    <span class="custom-file-label">Choose file</span>
                                </label>
                                <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                            </div>

                            <div class="form-group">
                                <label>Tags:</label>
                                <select multiple="multiple" data-placeholder="Enter tags" class="form-control form-control-select2-icons" data-fouc>
                                    <optgroup label="Services">
                                        <option value="wordpress2" data-icon="wordpress2">Wordpress</option>
                                        <option value="tumblr2" data-icon="tumblr2">Tumblr</option>
                                        <option value="stumbleupon" data-icon="stumbleupon">Stumble upon</option>
                                        <option value="pinterest2" data-icon="pinterest2">Pinterest</option>
                                        <option value="lastfm2" data-icon="lastfm2">Lastfm</option>
                                    </optgroup>
                                    <optgroup label="File types">
                                        <option value="pdf" data-icon="file-pdf">PDF</option>
                                        <option value="word" data-icon="file-word">Word</option>
                                        <option value="excel" data-icon="file-excel">Excel</option>
                                        <option value="openoffice" data-icon="file-openoffice">Open office</option>
                                    </optgroup>
                                    <optgroup label="Browsers">
                                        <option value="chrome" data-icon="chrome" selected>Chrome</option>
                                        <option value="firefox" data-icon="firefox" selected>Firefox</option>
                                        <option value="safari" data-icon="safari">Safari</option>
                                        <option value="opera" data-icon="opera">Opera</option>
                                        <option value="IE" data-icon="IE">IE</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Your message:</label>
                                <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /basic layout -->

            </div>

            <div class="col-lg-6">

                <!-- Static mode -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Static mode</h5>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group">
                                <label class="font-weight-semibold">Name:</label>
                                <div class="form-control-plaintext">Eugene Kopyov</div>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-semibold">Password:</label>
                                <input type="password" class="form-control" readonly value="********">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-semibold">Your state:</label>
                                <select class="form-control form-control-select2" disabled data-fouc>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV" selected>Nevada</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="KY">Kentucky</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="d-block font-weight-semibold">Gender:</label>

                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="gender-disabled" disabled checked>
                                    <span class="custom-control-label">Male</span>
                                </label>

                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="gender-disabled" disabled>
                                    <span class="custom-control-label">Female</span>
                                </label>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-semibold">Your avatar:</label>
                                <div class="media mt-0">
                                    <div class="mr-3">
                                        <a href="#">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="60" height="60" class="rounded-pill" alt="">
                                        </a>
                                    </div>

                                    <div class="media-body">
                                        <label class="custom-file">
                                            <input type="file" class="custom-file-input" disabled>
                                            <span class="custom-file-label">Choose file</span>
                                        </label>
                                        <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-semibold">Tags:</label>
                                <select multiple="multiple" disabled data-placeholder="Enter tags" class="form-control form-control-select2-icons" data-fouc>
                                    <optgroup label="Services">
                                        <option value="wordpress2" data-icon="wordpress2">Wordpress</option>
                                        <option value="tumblr2" data-icon="tumblr2">Tumblr</option>
                                        <option value="stumbleupon" data-icon="stumbleupon">Stumble upon</option>
                                        <option value="pinterest2" data-icon="pinterest2">Pinterest</option>
                                        <option value="lastfm2" data-icon="lastfm2">Lastfm</option>
                                    </optgroup>
                                    <optgroup label="File types">
                                        <option value="pdf" data-icon="file-pdf">PDF</option>
                                        <option value="word" data-icon="file-word">Word</option>
                                        <option value="excel" data-icon="file-excel">Excel</option>
                                        <option value="openoffice" data-icon="file-openoffice">Open office</option>
                                    </optgroup>
                                    <optgroup label="Browsers">
                                        <option value="chrome" data-icon="chrome" selected>Chrome</option>
                                        <option value="firefox" data-icon="firefox" selected>Firefox</option>
                                        <option value="safari" data-icon="safari">Safari</option>
                                        <option value="opera" data-icon="opera">Opera</option>
                                        <option value="IE" data-icon="IE">IE</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-semibold">Your message:</label>
                                <div class="form-control-plaintext">
                                    <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment.</p>
                                    His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked.
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /static mode -->

            </div>
        </div>
        <!-- /vertical form options -->


        <!-- Centered forms -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <h5 class="card-title">Centered form</h5>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <form action="#">
                                    <div class="form-group">
                                        <label>Enter your name:</label>
                                        <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                    </div>

                                    <div class="form-group">
                                        <label>Enter your password:</label>
                                        <input type="password" class="form-control" placeholder="Your strong password">
                                    </div>

                                    <div class="form-group">
                                        <label>Select your state:</label>
                                        <select data-placeholder="Select your state" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Attach screenshot:</label>
                                        <label class="custom-file">
                                            <input type="file" class="custom-file-input">
                                            <span class="custom-file-label">Choose file</span>
                                        </label>
                                        <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                    </div>

                                    <div class="form-group">
                                        <label>Your message:</label>
                                        <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Centered card</h5>
                            </div>

                            <div class="card-body">
                                <form action="#">
                                    <div class="form-group">
                                        <label>Enter your name:</label>
                                        <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                    </div>

                                    <div class="form-group">
                                        <label>Enter your password:</label>
                                        <input type="password" class="form-control" placeholder="Your strong password">
                                    </div>

                                    <div class="form-group">
                                        <label>Select your state:</label>
                                        <select data-placeholder="Select your state" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Attach screenshot:</label>
                                        <label class="custom-file">
                                            <input type="file" class="custom-file-input">
                                            <span class="custom-file-label">Choose file</span>
                                        </label>
                                        <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                    </div>

                                    <div class="form-group">
                                        <label>Your message:</label>
                                        <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /form centered -->


        <!-- Fieldset legend -->
        <div class="row">
            <div class="col-lg-6">

                <!-- Basic legend -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Basic legend</h5>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <fieldset>
                                <legend class="font-weight-semibold">Enter your information</legend>

                                <div class="form-group">
                                    <label>Enter your name:</label>
                                    <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                </div>

                                <div class="form-group">
                                    <label>Enter your password:</label>
                                    <input type="password" class="form-control" placeholder="Your strong password">
                                </div>

                                <div class="form-group">
                                    <label>Repeat password:</label>
                                    <input type="password" class="form-control" placeholder="Repeat password">
                                </div>

                                <div class="form-group">
                                    <label>Your message:</label>
                                    <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend class="font-weight-semibold">Add personal details</legend>

                                <div class="form-group">
                                    <label>Your country:</label>
                                    <select data-placeholder="Select your country" class="form-control form-control-select2" data-fouc>
                                        <option value="USA">USA</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="...">...</option>
                                        <option value="Australia">Australia</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Select your state:</label>
                                    <select data-placeholder="Select your state" class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="KY">Kentucky</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="d-block">Gender:</label>

                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="gender2" checked>
                                        <span class="custom-control-label">Male</span>
                                    </label>

                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="gender2">
                                        <span class="custom-control-label">Female</span>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>Your CV:</label>
                                    <label class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <span class="custom-file-label">Choose file</span>
                                    </label>
                                    <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                </div>

                                <div class="form-group">
                                    <label>About yourself:</label>
                                    <textarea rows="5" cols="5" placeholder="Few words about yourself..." class="form-control"></textarea>
                                </div>
                            </fieldset>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /basic legend -->

            </div>

            <div class="col-lg-6">

                <!-- Advanced legend -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Advanced legend</h5>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <fieldset>
                                <legend class="font-weight-semibold">
                                    <i class="icon-file-text2 mr-2"></i>
                                    Enter your information
                                    <a href="#" class="float-right text-body" data-toggle="collapse" data-target="#demo1">
                                        <i class="icon-circle-down2"></i>
                                    </a>
                                </legend>

                                <div class="collapse show" id="demo1">
                                    <div class="form-group">
                                        <label>Enter your name:</label>
                                        <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                    </div>

                                    <div class="form-group">
                                        <label>Enter your password:</label>
                                        <input type="password" class="form-control" placeholder="Your strong password">
                                    </div>

                                    <div class="form-group">
                                        <label>Repeat password:</label>
                                        <input type="password" class="form-control" placeholder="Repeat password">
                                    </div>

                                    <div class="form-group">
                                        <label>Your message:</label>
                                        <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend class="font-weight-semibold">
                                    <i class="icon-reading mr-2"></i>
                                    Add personal details
                                    <a class="float-right text-body" data-toggle="collapse" data-target="#demo2">
                                        <i class="icon-circle-down2"></i>
                                    </a>
                                </legend>

                                <div class="collapse show" id="demo2">
                                    <div class="form-group">
                                        <label>Your country:</label>
                                        <select data-placeholder="Select your country" class="form-control form-control-select2" data-fouc>
                                            <option value="USA">USA</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="...">...</option>
                                            <option value="Australia">Australia</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Select your state:</label>
                                        <select data-placeholder="Select your state" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="KY">Kentucky</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="d-block">Gender:</label>

                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" name="gender3" checked>
                                            <span class="custom-control-label">Male</span>
                                        </label>

                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" name="gender3">
                                            <span class="custom-control-label">Female</span>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label>Your CV:</label>
                                        <label class="custom-file">
                                            <input type="file" class="custom-file-input">
                                            <span class="custom-file-label">Choose file</span>
                                        </label>
                                        <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                    </div>

                                    <div class="form-group">
                                        <label>About yourself:</label>
                                        <textarea rows="5" cols="5" placeholder="Few words about yourself..." class="form-control"></textarea>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /advanced legend -->

            </div>
        </div>
        <!-- /fieldset legend -->


        <!-- 2 columns form -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Multiple columns</h5>
            </div>

            <div class="card-body">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6">
                            <fieldset>
                                <legend class="font-weight-semibold"><i class="icon-reading mr-2"></i> Personal details</legend>

                                <div class="form-group">
                                    <label>Enter your name:</label>
                                    <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                </div>

                                <div class="form-group">
                                    <label>Enter your password:</label>
                                    <input type="password" class="form-control" placeholder="Your strong password">
                                </div>

                                <div class="form-group">
                                    <label>Select your state:</label>
                                    <select data-placeholder="Select your state" class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="KY">Kentucky</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Attach screenshot:</label>
                                    <label class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <span class="custom-file-label">Choose file</span>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>Your message:</label>
                                    <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                                </div>
                            </fieldset>
                        </div>

                        <div class="col-lg-6">
                            <fieldset>
                                <legend class="font-weight-semibold"><i class="icon-truck mr-2"></i> Shipping details</legend>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>First name:</label>
                                            <input type="text" placeholder="Eugene" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Last name:</label>
                                            <input type="text" placeholder="Kopyov" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="text" placeholder="eugene@kopyov.com" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Phone #:</label>
                                            <input type="text" placeholder="+99-99-9999-9999" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Country:</label>
                                            <select data-placeholder="Select your country" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>State/Province:</label>
                                            <input type="text" placeholder="Bayern" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>ZIP code:</label>
                                            <input type="text" placeholder="1031" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>City:</label>
                                            <input type="text" placeholder="Munich" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Address line:</label>
                                            <input type="text" placeholder="Ring street 12" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Additional message:</label>
                                    <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /2 columns form -->

    </div>
    <!-- /content area -->
@endsection
