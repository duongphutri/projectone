<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('backend/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href=".{{ asset('backend/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('backend/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('backend/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('backend/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
      @include('backend.pages.header')
      @include('backend.pages.sidebar')
        <!-- partial -->
        
        {{-- <div class="container-fluid page-body-wrapper">
            <!-- partial:{{ asset('backend/vendors/feather/feather.css') }}partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border me-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab"
                            aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab"
                            aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                        aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <form class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn"
                                        id="add-task">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="list-wrapper px-3">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Team review meeting at 3.00 PM
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Prepare for presentation
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Resolve all the low priority tickets due today
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Schedule meeting for next week
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Project review
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                            </ul>
                        </div>
                        <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary me-2"></i>
                                <span>Feb 11 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                            <p class="text-gray mb-0">The total number of sessions</p>
                        </div>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary me-2"></i>
                                <span>Feb 7 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                            <p class="text-gray mb-0 ">Call Sarah Graves</p>
                        </div>
                    </div>
                    <!-- To do section tab ends -->
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                            <small
                                class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See
                                All</small>
                        </div>
                        <ul class="chat-list">
                            <li class="list active">
                                <div class="profile"><img src="{{ asset('backend/vendors/feather/feather.css') }}images/faces/face1.jpg" alt="image"><span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="{{ asset('backend/vendors/feather/feather.css') }}images/faces/face2.jpg" alt="image"><span
                                        class="offline"></span></div>
                                <div class="info">
                                    <div class="wrapper d-flex">
                                        <p>Catherine</p>
                                    </div>
                                    <p>Away</p>
                                </div>
                                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                <small class="text-muted my-auto">23 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="{{ asset('backend/vendors/feather/feather.css') }}images/faces/face3.jpg" alt="image"><span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="{{ asset('backend/vendors/feather/feather.css') }}images/faces/face4.jpg" alt="image"><span
                                        class="offline"></span></div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="{{ asset('backend/vendors/feather/feather.css') }}images/faces/face5.jpg" alt="image"><span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="{{ asset('backend/vendors/feather/feather.css') }}images/faces/face6.jpg" alt="image"><span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Sarah Graves</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">47 min</small>
                            </li>
                        </ul>
                    </div>
                    <!-- chat tab ends -->
                </div>
            </div>
            <!-- partial -->

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Default form</h4>
                                    <p class="card-description">
                                        Basic form layout
                                    </p>
                                    <form class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Username</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1"
                                                placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputConfirmPassword1">Confirm Password</label>
                                            <input type="password" class="form-control"
                                                id="exampleInputConfirmPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                Remember me
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Horizontal Form</h4>
                                    <p class="card-description">
                                        Horizontal form layout
                                    </p>
                                    <form class="forms-sample">
                                        <div class="form-group row">
                                            <label for="exampleInputUsername2"
                                                class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputUsername2"
                                                    placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2"
                                                class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="exampleInputEmail2"
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputMobile"
                                                class="col-sm-3 col-form-label">Mobile</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputMobile"
                                                    placeholder="Mobile number">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputPassword2"
                                                class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control"
                                                    id="exampleInputPassword2" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputConfirmPassword2"
                                                class="col-sm-3 col-form-label">Re Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control"
                                                    id="exampleInputConfirmPassword2" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                Remember me
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Basic form elements</h4>
                                    <p class="card-description">
                                        Basic form elements
                                    </p>
                                    <form class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Name</label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail3"
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword4">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword4"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Gender</label>
                                            <select class="form-control" id="exampleSelectGender">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>File upload</label>
                                            <input type="file" name="img[]" class="file-upload-default">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled
                                                    placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary"
                                                        type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputCity1">City</label>
                                            <input type="text" class="form-control" id="exampleInputCity1"
                                                placeholder="Location">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Textarea</label>
                                            <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Input size</h4>
                                    <p class="card-description">
                                        Add classes like <code>.form-control-lg</code> and
                                        <code>.form-control-sm</code>.
                                    </p>
                                    <div class="form-group">
                                        <label>Large input</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Username"
                                            aria-label="Username">
                                    </div>
                                    <div class="form-group">
                                        <label>Default input</label>
                                        <input type="text" class="form-control" placeholder="Username"
                                            aria-label="Username">
                                    </div>
                                    <div class="form-group">
                                        <label>Small input</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Username"
                                            aria-label="Username">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Select size</h4>
                                    <p class="card-description">
                                        Add classes like <code>.form-control-lg</code> and
                                        <code>.form-control-sm</code>.
                                    </p>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Large select</label>
                                        <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2">Default select</label>
                                        <select class="form-control" id="exampleFormControlSelect2">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect3">Small select</label>
                                        <select class="form-control form-control-sm" id="exampleFormControlSelect3">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Basic input groups</h4>
                                    <p class="card-description">
                                        Basic bootstrap input groups
                                    </p>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">@</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Username"
                                                aria-label="Username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-primary text-white">$</span>
                                            </div>
                                            <input type="text" class="form-control"
                                                aria-label="Amount (to the nearest dollar)">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">0.00</span>
                                            </div>
                                            <input type="text" class="form-control"
                                                aria-label="Amount (to the nearest dollar)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control"
                                                placeholder="Recipient's username" aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-sm btn-primary" type="button">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-sm btn-outline-primary dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">Dropdown</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control"
                                                aria-label="Text input with dropdown button">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Find in facebook"
                                                aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-sm btn-facebook" type="button">
                                                    <i class="ti-facebook"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Checkbox Controls</h4>
                                    <p class="card-description">Checkbox and radio controls (default appearance is in
                                        primary color)</p>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input">
                                                            Default
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" checked>
                                                            Checked
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" disabled>
                                                            Disabled
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" disabled
                                                                checked>
                                                            Disabled checked
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input"
                                                                name="optionsRadios" id="optionsRadios1" value="">
                                                            Default
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input"
                                                                name="optionsRadios" id="optionsRadios2" value="option2"
                                                                checked>
                                                            Selected
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input"
                                                                name="optionsRadios2" id="optionsRadios3"
                                                                value="option3" disabled>
                                                            Disabled
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input"
                                                                name="optionsRadio2" id="optionsRadios4" value="option4"
                                                                disabled checked>
                                                            Selected and disabled
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <p class="card-description">Add class <code>.form-check-{color}</code> for checkbox
                                        and radio controls in theme colors</p>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-check form-check-primary">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" checked>
                                                            Primary
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-success">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" checked>
                                                            Success
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-info">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" checked>
                                                            Info
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-danger">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" checked>
                                                            Danger
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-warning">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" checked>
                                                            Warning
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-check form-check-primary">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input"
                                                                name="ExampleRadio1" id="ExampleRadio1" checked>
                                                            Primary
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-success">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input"
                                                                name="ExampleRadio2" id="ExampleRadio2" checked>
                                                            Success
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-info">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input"
                                                                name="ExampleRadio3" id="ExampleRadio3" checked>
                                                            Info
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-danger">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input"
                                                                name="ExampleRadio4" id="ExampleRadio4" checked>
                                                            Danger
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-warning">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input"
                                                                name="ExampleRadio5" id="ExampleRadio5" checked>
                                                            Warning
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Inline forms</h4>
                                    <p class="card-description">
                                        Use the <code>.form-inline</code> class to display a series of labels, form
                                        controls, and buttons on a single horizontal row
                                    </p>
                                    <form class="form-inline">
                                        <label class="sr-only" for="inlineFormInputName2">Name</label>
                                        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2"
                                            placeholder="Jane Doe">

                                        <label class="sr-only"
                                            for="inlineFormInputGroupUsername2">Username</label>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">@</div>
                                            </div>
                                            <input type="text" class="form-control"
                                                id="inlineFormInputGroupUsername2" placeholder="Username">
                                        </div>
                                        <div class="form-check mx-sm-2">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" checked>
                                                Remember me
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Horizontal Two column</h4>
                                    <form class="form-sample">
                                        <p class="card-description">
                                            Personal info
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">First Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Last Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Gender</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control">
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Date of Birth</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" placeholder="dd/mm/yyyy" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Category</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control">
                                                            <option>Category1</option>
                                                            <option>Category2</option>
                                                            <option>Category3</option>
                                                            <option>Category4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Membership</label>
                                                    <div class="col-sm-4">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input"
                                                                    name="membershipRadios" id="membershipRadios1"
                                                                    value="" checked>
                                                                Free
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input"
                                                                    name="membershipRadios" id="membershipRadios2"
                                                                    value="option2">
                                                                Professional
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="card-description">
                                            Address
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Address 1</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">State</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Address 2</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Postcode</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">City</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Country</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control">
                                                            <option>America</option>
                                                            <option>Italy</option>
                                                            <option>Russia</option>
                                                            <option>Britain</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Select 2</h4>
                                    <div class="form-group">
                                        <label>Single select box using select 2</label>
                                        <select class="js-example-basic-single w-100">
                                            <option value="AL">Alabama</option>
                                            <option value="WY">Wyoming</option>
                                            <option value="AM">America</option>
                                            <option value="CA">Canada</option>
                                            <option value="RU">Russia</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Multiple select using select 2</label>
                                        <select class="js-example-basic-multiple w-100" multiple="multiple">
                                            <option value="AL">Alabama</option>
                                            <option value="WY">Wyoming</option>
                                            <option value="AM">America</option>
                                            <option value="CA">Canada</option>
                                            <option value="RU">Russia</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Typeahead</h4>
                                    <p class="card-description">
                                        A simple suggestion engine
                                    </p>
                                    <div class="form-group row">
                                        <div class="col">
                                            <label>Basic</label>
                                            <div id="the-basics">
                                                <input class="typeahead" type="text" placeholder="States of USA">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label>Bloodhound</label>
                                            <div id="bloodhound">
                                                <input class="typeahead" type="text" placeholder="States of USA">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:{{ asset('backend/vendors/feather/feather.css') }}partials/_footer.html -->
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div> --}}
        <!-- page-body-wrapper ends -->
        @include('backend.pages.footer')
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('backend/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('backend/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('backend/js/off-canvas.js') }}"></script>
    <script src="{{ asset('backend/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('backend/js/template.js') }}"></script>
    <script src="{{ asset('backend/js/settings.js') }}"></script>
    <script src="{{ asset('backend/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('backend/js/file-upload.js') }}"></script>
    <script src="{{ asset('backend/js/typeahead.js') }}"></script>
    <script src="{{ asset('backend/js/select2.js') }}"></script>
    <!-- End custom js for this page-->
</body>

</html>
