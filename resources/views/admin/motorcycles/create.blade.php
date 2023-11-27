<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Add Motorcycles | Kuchai Motor</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{asset('backend/vendor/bootstrap-icons/font/bootstrap-icons.css')}}">

  <link rel="stylesheet" href="{{asset('backend/vendor/tom-select/dist/css/tom-select.bootstrap5.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendor/quill/dist/quill.snow.css')}}">

  <!-- CSS Front Template -->

  <link rel="preload" href="{{asset('backend/css/theme.min.css')}}" data-hs-appearance="default" as="style">
  <link rel="preload" href="{{asset('backend/css/theme-dark.min.css')}}" data-hs-appearance="dark" as="style">
  <link rel="stylesheet" href="{{asset('backend/vendor/flatpickr/dist/flatpickr.min.css')}}">
  <style data-hs-appearance-onload-styles>
    * {
      transition: unset !important;
    }

    body {
      opacity: 0;
    }
  </style>

  <script>
    window.hs_config = {"autopath":"@@autopath","deleteLine":"hs-builder:delete","deleteLine:build":"hs-builder:build-delete","deleteLine:dist":"hs-builder:dist-delete","previewMode":false,"startPath":"/index.html","vars":{"themeFont":"https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap","version":"?v=1.0"},"layoutBuilder":{"extend":{"switcherSupport":true},"header":{"layoutMode":"default","containerMode":"container-fluid"},"sidebarLayout":"default"},"themeAppearance":{"layoutSkin":"default","sidebarSkin":"default","styles":{"colors":{"primary":"#377dff","transparent":"transparent","white":"#fff","dark":"132144","gray":{"100":"#f9fafc","900":"#1e2022"}},"font":"Inter"}},"languageDirection":{"lang":"en"},"skipFilesFromBundle":{"dist":["assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","assets/js/demo.js"],"build":["assets/css/theme.css","assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js","assets/js/demo.js","assets/css/theme-dark.css","assets/css/docs.css","assets/vendor/icon-set/style.css","assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js","assets/js/demo.js"]},"minifyCSSFiles":["assets/css/theme.css","assets/css/theme-dark.css"],"copyDependencies":{"dist":{"*assets/js/theme-custom.js":""},"build":{"*assets/js/theme-custom.js":"","node_modules/bootstrap-icons/font/*fonts/**":"assets/css"}},"buildFolder":"","replacePathsToCDN":{},"directoryNames":{"src":"./src","dist":"./dist","build":"./build"},"fileNames":{"dist":{"js":"theme.min.js","css":"theme.min.css"},"build":{"css":"theme.min.css","js":"theme.min.js","vendorCSS":"vendor.min.css","vendorJS":"vendor.min.js"}},"fileTypes":"jpg|png|svg|mp4|webm|ogv|json"}
            window.hs_config.gulpRGBA = (p1) => {
  const options = p1.split(',')
  const hex = options[0].toString()
  const transparent = options[1].toString()

  var c;
  if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)){
    c= hex.substring(1).split('');
    if(c.length== 3){
      c= [c[0], c[0], c[1], c[1], c[2], c[2]];
    }
    c= '0x'+c.join('');
    return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',' + transparent + ')';
  }
  throw new Error('Bad Hex');
}
            window.hs_config.gulpDarken = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = -parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            window.hs_config.gulpLighten = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
  </script>
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">

  <script src="{{asset('backend/js/hs.theme-appearance.js')}}"></script>

  <script src="{{asset('backend/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js')}}">
  </script>

  <!-- ========== HEADER ========== -->


  @include('admin.layouts.header')


  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <!-- Navbar Vertical -->


  @include('admin.layouts.sidebar')

  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-no-gutter">
                <li class="breadcrumb-item"><a class="breadcrumb-link"
                    href="{{ route('motorcycles.index') }}">Motorcycles</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Add Motorcycle</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Add Motorcycle</h1>

            {{-- <div class="mt-2">
              <a class="text-body me-3" href="javascript:;">
                <i class="bi-clipboard me-1"></i> Duplicate
              </a>
              <a class="text-body" href="javascript:;">
                <i class="bi-eye me-1"></i> Preview
              </a>
            </div> --}}
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <form action="{{ route('motorcycles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <div class="row">
          <div class="col-lg-8 mb-3 mb-lg-0">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">General information</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">


                <div class="row">
                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="modelLabel" class="form-label">Model</label>

                      <input type="text" class="form-control @error('model') is-invalid @enderror" name="model"
                        id="modelLabel" placeholder="eg. Sedan" aria-label="eg. Sedan" value="{{ old('model') }}">
                      @error('model')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <!-- End Form -->


                  </div>
                  <!-- End Col -->

                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="brandLabel" class="form-label">Brand</label>

                      <div class="input-group">
                        <input type="text" class="form-control @error('brand') is-invalid @enderror" name=" brand"
                          id="brandLabel" placeholder="eg. ABC Motors" aria-label="eg. ABC Motors"
                          value="{{ old('brand') }}">
                        @error('brand')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>

                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->



                <div class="row">
                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="capacityLabel" class="form-label">Capacity</label>

                      <input type="text" class="form-control @error('capacity') is-invalid @enderror" name="capacity"
                        id="capacityLabel" placeholder="eg. 2-person" aria-label="eg. 2-person"
                        value="{{ old('capacity') }}">
                      @error('capacity')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="colorLabel" class="form-label">Colour</label>

                      <div class="input-group">
                        <input type="text" class="form-control @error('colour') is-invalid @enderror" name="colour"
                          id="colorLabel" placeholder="eg. Blue" aria-label="eg. Blue" value="{{ old('colour') }}">
                        @error('colour')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>

                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->



                <div class="row">
                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="manufactureYearLabel" class="form-label">Manufacture Year</label>

                      <input type="number" class="form-control @error('manufacture_year') is-invalid @enderror"
                        name="manufacture_year" id="manufactureYearLabel" placeholder="eg. 2023" aria-label="eg. 2023"
                        value="{{ old('manufacture_year') }}">
                      @error('manufacture_year')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->


                </div>
                <!-- End Row -->

                <label class="form-label">Description <span class="form-label-secondary">(Optional)</span></label>

                <!-- Quill -->
                <div class="quill-custom">
                  <div class="js-quill" style="height: 15rem;" data-hs-quill-options='{
                     "placeholder": "Type your description...",
                      "modules": {
                        "toolbar": [
                          ["bold", "italic", "underline", "strike", "link", "image", "blockquote", "code", {"list": "bullet"}]
                        ]
                      }
                     }'>
                  </div>
                </div>
                <!-- End Quill -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->


            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Engine information</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">


                <div class="row">
                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="engineTypeLabel" class="form-label">Engine Type</label>

                      <input type="text" class="form-control @error('engine_type') is-invalid @enderror"
                        name="engine_type" id="engineTypeLabel" placeholder="eg. Petrol" aria-label="eg. Petrol"
                        value="{{ old('engine_type') }}">
                      @error('engine_type')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="displacementLabel" class="form-label">Displacement</label>

                      <div class="input-group">
                        <input type="text" class="form-control @error('displacement') is-invalid @enderror"
                          name="displacement" id="displacementLabel" placeholder="eg. 2000 cc" aria-label="eg. 2000 cc"
                          value="{{ old('displacement') }}">
                        @error('displacement')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror

                      </div>

                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->



                <div class="row">
                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="maxPowerLabel" class="form-label">Max Power</label>

                      <input type="text" class="form-control @error('max_power') is-invalid @enderror" name="max_power"
                        id="maxPowerLabel" placeholder="eg. 180 HP" aria-label="eg. 180 HP"
                        value="{{ old('max_power') }}">
                      @error('max_power')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="maxTorqueLabel" class="form-label">Max Torque</label>

                      <div class="input-group">
                        <input type="text" class="form-control @error('max_torque') is-invalid @enderror"
                          name="max_torque" id="maxTorqueLabel" placeholder="eg. 160 Nm" aria-label="eg. 160 Nm"
                          value="{{ old('max_torque') }}">
                        @error('max_torque')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror

                      </div>

                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->


                <div class="row">
                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="transmissionLabel" class="form-label">Transmission</label>

                      <input type="text" class="form-control @error('transmission') is-invalid @enderror"
                        name="transmission" id="transmissionLabel" placeholder="eg. Automatic"
                        aria-label="eg. Automatic" value="{{ old('transmission') }}">
                      @error('transmission')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="fuelSystemLabel" class="form-label">Fuel System</label>

                      <div class="input-group">
                        <input type="text" class="form-control @error('fuel_system') is-invalid @enderror"
                          name="fuel_system" id="fuelSystemLabel" placeholder="eg. Direct Injection"
                          aria-label="eg. Direct Injection" value="{{ old('fuel_system') }}">
                        @error('fuel_system')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror

                      </div>

                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->



                <div class="row">
                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="ignitionSystemLabel" class="form-label">Ignition System</label>

                      <input type="text" class="form-control @error('ignition_system') is-invalid @enderror"
                        name="ignition_system" id="ignitionSystemLabel" placeholder="eg. Electronic"
                        aria-label="eg. Electronic" value="{{ old('ignition_system') }}">
                      @error('ignition_system')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->

                </div>
                <!-- End Row -->

              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->




            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Chasis information</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">


                <div class="row">
                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="frameTypeLabel" class="form-label">Frame Type</label>

                      <input type="text" class="form-control @error('frame_type') is-invalid @enderror"
                        name="frame_type" id="frameTypeLabel" placeholder="eg. Monocoque" aria-label="eg. Monocoque"
                        value="{{ old('frame_type') }}">
                      @error('frame_type')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="FrontSuspensionLabel" class="form-label">Front Suspension</label>

                      <div class="input-group">
                        <input type="text" class="form-control @error('front_suspension') is-invalid @enderror"
                          name="front_suspension" id="FrontSuspensionLabel" placeholder="eg. MacPherson Strut"
                          aria-label="eg. MacPherson Strut" value="{{ old('front_suspension') }}">
                        @error('front_suspension')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror

                      </div>

                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->



                <div class="row">
                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="rearSuspensionLabel" class="form-label">Rear Suspension</label>

                      <input type="text" class="form-control @error('rear_suspension') is-invalid @enderror"
                        name="rear_suspension" id="rearSuspensionLabel" placeholder="eg. Multi-link"
                        aria-label="eg. Multi-link" value="{{ old('rear_suspension') }}">
                      @error('rear_suspension')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="fuelCapacityLabel" class="form-label">Fuel Capacity</label>

                      <div class="input-group">
                        <input type="text" class="form-control @error('fuel_capacity') is-invalid @enderror"
                          name="fuel_capacity" id="fuelCapacityLabel" placeholder="eg. 60 liters"
                          aria-label="eg. 60 liters" value="{{ old('fuel_capacity') }}">
                        @error('fuel_capacity')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror

                      </div>

                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->


                <div class="row">
                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="batteryLabel" class="form-label">Battery</label>

                      <input type="text" class="form-control @error('battery') is-invalid @enderror" name="battery"
                        id="batteryLabel" placeholder="eg. 12V Lithium-ion" aria-label="eg. 12V Lithium-ion"
                        value="{{ old('battery') }}">
                      @error('battery')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->


                </div>
                <!-- End Row -->




              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->


            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header card-header-content-between">
                <h4 class="card-header-title">Media</h4>

                <!-- Dropdown -->
                {{-- <div class="dropdown">
                  <a class="btn btn-ghost-secondary btn-sm" href="#!" id="mediaDropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Add media from URL <i class="bi-chevron-down"></i>
                  </a>

                  <div class="dropdown-menu dropdown-menu-end mt-1">
                    <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal"
                      data-bs-target="#addImageFromURLModal">
                      <i class="bi-link dropdown-item-icon"></i> Add image from URL
                    </a>
                    <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal"
                      data-bs-target="#embedVideoModal">
                      <i class="bi-youtube dropdown-item-icon"></i> Embed video
                    </a>
                  </div>
                </div> --}}
                <!-- End Dropdown -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <label for="SKULabel" class="form-label">Motor Cover</label>

                <!-- Dropzone -->
                <div id="attachFilesNewProjectLabel" class="js-dropzone dz-dropzone dz-dropzone-card">
                  <div class="dz-message">
                    <img class="avatar avatar-xl avatar-4x3 mb-3"
                      src="{{asset('backend/svg/illustrations/oc-browse.svg')}}" alt="Image Description"
                      data-hs-theme-appearance="default">
                    <img class="avatar avatar-xl avatar-4x3 mb-3"
                      src="{{asset('backend/svg/illustrations-light/oc-browse.svg')}}" alt="Image Description"
                      data-hs-theme-appearance="dark">

                    <h5>Drag and drop your file here</h5>

                    <p class="mb-2">or</p>

                    <span class="btn btn-white btn-sm">Browse files</span>
                  </div>
                </div>
                <!-- End Dropzone -->


                <label for="SKULabel" class="form-label mt-2">Motor Images</label>

                <!-- Dropzone -->
                <div id="attachFilesNewProjectLabel" class="js-dropzone dz-dropzone dz-dropzone-card">
                  <div class="dz-message">
                    <img class="avatar avatar-xl avatar-4x3 mb-3"
                      src="{{asset('backend/svg/illustrations/oc-browse.svg')}}" alt="Image Description"
                      data-hs-theme-appearance="default">
                    <img class="avatar avatar-xl avatar-4x3 mb-3"
                      src="{{asset('backend/svg/illustrations-light/oc-browse.svg')}}" alt="Image Description"
                      data-hs-theme-appearance="dark">

                    <h5>Drag and drop your file here</h5>

                    <p class="mb-2">or</p>

                    <span class="btn btn-white btn-sm">Browse files</span>
                  </div>
                </div>
                <!-- End Dropzone -->

              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            {{-- <div class="card">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Variants</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <h6 class="text-cap">Options</h6>

                <div class="js-add-field" data-hs-add-field-options='{
                    "template": "#addAnotherOptionFieldTemplate",
                    "container": "#addAnotherOptionFieldContainer",
                    "defaultCreated": 0
                  }'>
                  <div class="row mb-4">
                    <div class="col-sm-4 mb-2 mb-sm-0">
                      <!-- Select -->
                      <div class="tom-select-custom">
                        <select class="js-select form-select" data-hs-tom-select-options='{
                                "searchInDropdown": false,
                                "hideSearch": true
                              }'>
                          <option value="Size">Size</option>
                          <option value="Color">Color</option>
                          <option value="Material">Material</option>
                          <option value="Style">Style</option>
                          <option value="Title">Title</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="Enter tags" aria-label="Enter tags">
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->

                  <!-- Container For Input Field -->
                  <div id="addAnotherOptionFieldContainer"></div>

                  <a href="javascript:;" class="js-create-field form-link">
                    <i class="bi-plus"></i> Add another option
                  </a>
                </div>

                <!-- Add Another Option Input Field -->
                <div id="addAnotherOptionFieldTemplate" style="display: none;">
                  <div class="row mb-4">
                    <div class="col-sm-4 mb-2 mb-sm-0">
                      <!-- Select -->
                      <div class="tom-select-custom">
                        <select class="js-select-dynamic form-select" data-hs-tom-select-options='{
                                "searchInDropdown": false,
                                "hideSearch": true
                              }'>
                          <option value="Size">Size</option>
                          <option value="Color">Color</option>
                          <option value="Material">Material</option>
                          <option value="Style">Style</option>
                          <option value="Title">Title</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="Enter tags" aria-label="Enter tags">
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Add Another Option Input Field -->
              </div>
              <!-- Body -->
            </div> --}}
            <!-- End Card -->
          </div>
          <!-- End Col -->

          <div class="col-lg-4">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Pricing</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <!-- Form -->
                <div class="mb-4">
                  <label for="priceLabel" class="form-label">Price</label>

                  <div class="input-group">
                    <input type="text" class="js-input-mask form-control @error('pricing') is-invalid @enderror"
                      id="priceLabel" placeholder="RM x,xx.xx" data-hs-mask-options='{
                      "mask": "RM 00,000.00"
                    }' name="pricing" value="{{ old('pricing') }}">
                    @error('pricing')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
                <!-- End Form -->



                <hr class="my-4">

                <!-- Form Switch -->
                <label class="row form-check form-switch" for="availabilitySwitch1">
                  <span class="col-8 col-sm-9 ms-0">
                    <span class="text-dark">Availability <i class="bi-question-circle text-body ms-1"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Swith on to show in the listing page."></i></span>
                  </span>
                  <span class="col-4 col-sm-3 text-end">
                    <input type="checkbox" class="form-check-input @error('availability') is-invalid @enderror"
                      id="availabilitySwitch1" name="availability">
                  </span>
                  @error('availability')
                  <div class="invalid-feedback @error('availability') d-block @enderror">
                    {{ $message }}
                  </div>
                  @enderror
                </label>
                <!-- End Form Switch -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Contact Sales</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">


                <!-- Form -->
                <div class="mb-4">
                  <label for="categoryLabel" class="form-label">Sales Person</label>

                  <!-- Select -->
                  <!-- Select -->
                  <div class="tom-select-custom">
                    <select class="js-select form-select @error('salesman_id') is-invalid @enderror" autocomplete="off"
                      data-hs-tom-select-options='{
                            "placeholder": "Select sales person..."
                            }' name="salesman_id">
                      <option value="">Select a person...</option>
                      <option value="4">Thomas Edison</option>
                      <option value="1">Nikola</option>
                      <option value="3">Nikola Tesla</option>
                      <option value="5">Arnold Schwarzenegger</option>
                    </select>
                    @error('salesman_id')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <!-- End Select -->
                  <!-- End Select -->
                </div>
                <!-- Form -->




              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->


            <!-- Card -->
            <div class="card mt-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Used Motor Only</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">




                <!-- Form -->
                <div class="mb-4">

                  <label for="mileageLabel" class="form-label">Mileage (KM) </label>

                  <input type="text" class="form-control @error('mileage') is-invalid @enderror" name="mileage"
                    id="mileageLabel" placeholder="eg. 348121032" aria-label="eg. 348121032"
                    value="{{ old('mileage') }}">
                  @error('mileage')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <!-- End Form -->


                <!-- Form -->
                <div class="mb-4">

                  <label for="vehicleRegistrationDate" class="input-label">Vehicle Registration
                    Date</label>

                  <div id="projectDeadlineNewProjectFlatpickr" class="js-flatpickr mt-2 flatpickr-custom input-group"
                    data-hs-flatpickr-options='{
                                    "appendTo": "#projectDeadlineNewProjectFlatpickr",
                                    "dateFormat": "Y-m-d",
                                    "wrap": true
                                    }'>
                    <div class="input-group-prepend input-group-text" data-bs-toggle>
                      <i class="bi-calendar-week"></i>
                    </div>

                    <input type="text"
                      class="flatpickr-custom-form-control form-control @error('vehicle_registration_date') is-invalid @enderror"
                      id="vehicleRegistrationDate" placeholder="Select dates" data-input
                      name="vehicle_registration_date" value="{{ old('vehicle_registration_date') }}">
                    @error('vehicle_registration_date')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>

                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">

                  <label for="roadTaxExpiryDate" class="input-label">Road Tax Expiry Date</label>

                  <div id="projectDeadlineNewProjectFlatpickr" class="js-flatpickr mt-2 flatpickr-custom input-group"
                    data-hs-flatpickr-options='{
                                    "appendTo": "#projectDeadlineNewProjectFlatpickr",
                                    "dateFormat": "Y-m-d",
                                    "wrap": true
                                    }'>
                    <div class="input-group-prepend input-group-text" data-bs-toggle>
                      <i class="bi-calendar-week"></i>
                    </div>

                    <input type="text"
                      class="flatpickr-custom-form-control form-control @error('road_tax_expiry_date') is-invalid @enderror"
                      id="roadTaxExpiryDate" placeholder="Select dates" data-input name="road_tax_expiry_date"
                      value="{{ old('road_tax_expiry_date') }}">
                    @error('road_tax_expiry_date')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>

                </div>
                <!-- End Form -->


              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->


          </div>
          <!-- End Col -->
        </div>
        <div class="position-fixed start-50 bottom-0 translate-middle-x w-100 zi-99 mb-3" style="max-width: 40rem;">
          <!-- Card -->
          <div class="card card-sm bg-dark border-dark mx-2">
            <div class="card-body">
              <div class="row justify-content-center justify-content-sm-between">
                <div class="col">
                  <button type="button" class="btn btn-ghost-primary">Add motocycle to listing</button>
                </div>
                <!-- End Col -->

                <div class="col-auto">
                  <div class="d-flex gap-3">
                    <button type="button" class="btn btn-ghost-light">Discard</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
          </div>
          <!-- End Card -->
        </div>
      </form>
      <!-- End Row -->

    </div>
    <!-- End Content -->

    <!-- Footer -->


    @include('admin.layouts.footer')

    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Keyboard Shortcuts -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasKeyboardShortcuts"
    aria-labelledby="offcanvasKeyboardShortcutsLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasKeyboardShortcutsLabel" class="mb-0">Keyboard shortcuts</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Formatting</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="fw-semibold">Bold</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">b</kbd>
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <em>italic</em>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">i</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <u>Underline</u>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">u</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <s>Strikethrough</s>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">s</kbd>
              <!-- End Col -->
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="small">Small text</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <mark>Highlight</mark>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">e</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Insert</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Mention person <a href="#">(@Brian)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">@</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Link to doc <a href="#">(+Meeting notes)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">+</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <a href="#">#hashtag</a>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">#hashtag</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Date</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/date</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Time</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/time</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Note box</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/note</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Editing</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find and replace</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">r</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find next</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find previous</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Un-indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line up</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1"><i class="bi-arrow-up-short"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line down</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1"><i class="bi-arrow-down-short fs-5"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Add a comment</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">m</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Undo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">z</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Redo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">y</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
        <div class="list-group-item">
          <h5 class="mb-1">Application</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Create new doc</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Present</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Share</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Search docs</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">o</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Keyboard shortcuts</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">/</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>
    </div>
  </div>
  <!-- End Keyboard Shortcuts -->

  <!-- Activity -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivityStream"
    aria-labelledby="offcanvasActivityStreamLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasActivityStreamLabel" class="mb-0">Activity stream</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <!-- Step -->
      <ul class="step step-icon-sm step-avatar-sm">
        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar" src="{{ asset('backend/img/160x160/img9.jpg') }}" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Iana Robinson</h5>

              <p class="fs-5 mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i
                    class="bi-journal-bookmark-fill"></i> Fd-7</a></p>

              <ul class="list-group list-group-sm">
                <!-- List Item -->
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="{{ asset('backend/svg/brands/excel-icon.svg') }}"
                            alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate"
                            title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">12kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->

                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="{{ asset('backend/svg/brands/word-icon.svg') }}"
                            alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate"
                            title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">4kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </li>
                <!-- End List Item -->
              </ul>

              <span class="small text-muted text-uppercase">Now</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-dark">B</span>

            <div class="step-content">
              <h5 class="mb-1">Bob Dean</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i>
                  Fr-6</a> as <span class="badge bg-soft-success text-success rounded-pill"><span
                    class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Today</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="{{ asset('backend/img/160x160/img3.jpg') }}" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="h5 mb-1">Crane</h5>

              <p class="fs-5 mb-1">Added 5 card to <a href="#">Payments</a></p>

              <ul class="list-group list-group-sm">
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col">
                      <img class="img-fluid rounded" src="{{ asset('backend/svg/components/card-1.svg') }}"
                        alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="{{ asset('backend/svg/components/card-2.svg') }}"
                        alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="{{ asset('backend/svg/components/card-3.svg') }}"
                        alt="Image Description">
                    </div>
                    <div class="col-auto align-self-center">
                      <div class="text-center">
                        <a href="#">+2</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>

              <span class="small text-muted text-uppercase">May 12</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-info">D</span>

            <div class="step-content">
              <h5 class="mb-1">David Lidell</h5>

              <p class="fs-5 mb-1">Added a new member to Front Dashboard</p>

              <span class="small text-muted text-uppercase">May 15</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="{{ asset('backend/img/160x160/img7.jpg') }}" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Rachel King</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i>
                  Fr-3</a> as <span class="badge bg-soft-success text-success rounded-pill"><span
                    class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Apr 29</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="{{ asset('backend/img/160x160/img5.jpg') }}" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Finch Hoot</h5>

              <p class="fs-5 mb-1">Earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i> badge</p>

              <span class="small text-muted text-uppercase">Apr 06</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">
              <i class="bi-person-fill"></i>
            </span>

            <div class="step-content">
              <h5 class="mb-1">Project status updated</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i>
                  Fr-3</a> as <span class="badge bg-soft-primary text-primary rounded-pill"><span
                    class="legend-indicator bg-primary"></span>"In progress"</span></p>

              <span class="small text-muted text-uppercase">Feb 10</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->
      </ul>
      <!-- End Step -->

      <div class="d-grid">
        <a class="btn btn-white" href="javascript:;">View all <i class="bi-chevron-right"></i></a>
      </div>
    </div>
  </div>
  <!-- End Activity -->

  <!-- Welcome Message Modal -->
  <div class="modal fade" id="welcomeMessageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm" data-bs-dismiss="modal"
            aria-label="Close">
            <i class="bi-x-lg"></i>
          </button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body p-sm-5">
          <div class="text-center">
            <div class="w-75 w-sm-50 mx-auto mb-4">
              <img class="img-fluid" src="{{ asset('backend/svg/illustrations/oc-collaboration.svg') }}"
                alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid" src="{{ asset('backend/svg/illustrations-light/oc-collaboration.svg') }}"
                alt="Image Description" data-hs-theme-appearance="dark">
            </div>

            <h4 class="h1">Welcome to Front</h4>

            <p>We're happy to see you in our community.</p>
          </div>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer d-block text-center py-sm-5">
          <small class="text-cap text-muted">Trusted by the world's best teams</small>

          <div class="w-85 mx-auto">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid" src="{{ asset('backend/svg/brands/gitlab-gray.svg') }}" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="{{ asset('backend/svg/brands/fitbit-gray.svg') }}" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="{{ asset('backend/svg/brands/flow-xo-gray.svg') }}" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="{{ asset('backend/svg/brands/layar-gray.svg') }} alt=" Image Description">
              </div>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

  <!-- End Welcome Message Modal -->

  <!-- Add Image from URL Modal -->
  <div class="modal fade" id="addImageFromURLModal" tabindex="-1" aria-labelledby="addImageFromURLModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="addImageFromURLModalLabel">Add image from URL</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body">
          <label for="pasteImageURLNameLabel" class="form-label">Paste image URL</label>
          <input type="text" class="form-control" name="projectName" id="pasteImageURLNameLabel" placeholder="https://"
            aria-label="https://">
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer gap-3">
          <button type="button" class="btn btn-white" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          <button type="button" class="btn btn-primary">Add media</button>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>
  <!-- End Add Image from URL Modal -->

  <!-- Embed Video Modal -->
  <div class="modal fade" id="embedVideoModal" tabindex="-1" aria-labelledby="embedVideoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="embedVideoModalLabel">Embed video</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body">
          <label for="pasteVideoURLNameLabel" class="form-label">Paste image URL</label>
          <input type="text" class="form-control" name="projectName" id="pasteVideoURLNameLabel" placeholder="https://"
            aria-label="https://">
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer gap-3">
          <button type="button" class="btn btn-white" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          <button type="button" class="btn btn-primary">Add media</button>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>
  <!-- End Embed Video Modal -->

  <!-- Products Advanced Features Modal -->
  <div class="modal fade" id="productsAdvancedFeaturesModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm" data-bs-dismiss="modal"
            aria-label="Close">
            <i class="bi-x-lg"></i>
          </button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body">
          <div class="text-center mb-7">
            <h4 class="h1">Advanced features</h4>
            <p>"Compare to" Price, Bulk Discount Pricing, Inventory Tracking</p>

            <a class="btn btn-primary" href="#">
              <i class="bi-star-fill me-1"></i> Upgrade to get these features
            </a>
          </div>

          <!-- Media -->
          <div class="d-flex">
            <div class="flex-shrink-0 mb-3 mb-sm-0">
              <img class="avatar avatar-lg avatar-4x3"
                src="{{ asset('backend/svg/illustrations/oc-money-profits.svg') }}" alt="Image Description"
                data-hs-theme-appearance="default">
              <img class="avatar avatar-lg avatar-4x3"
                src="{{ asset('backend/svg/illustrations-light/oc-money-profits.svg') }}" alt="Image Description"
                data-hs-theme-appearance="dark">
            </div>

            <div class="flex-grow-1 ms-4">
              <h4>"Compare to" price</h4>
              <p>Use this feature when you want to put a product on sale or show savings off suggested retail pricing.
              </p>
            </div>
          </div>
          <!-- End Media -->

          <hr class="my-4">

          <!-- Media -->
          <div class="d-flex">
            <div class="flex-shrink-0 mb-3 mb-sm-0">
              <img class="avatar avatar-lg avatar-4x3" src="{{ asset('backend/svg/illustrations/oc-discount.svg') }}"
                alt="Image Description" data-hs-theme-appearance="default">
              <img class="avatar avatar-lg avatar-4x3"
                src="{{ asset('backend/svg/illustrations-light/oc-discount.svg') }}" alt="Image Description"
                data-hs-theme-appearance="dark">
            </div>

            <div class="flex-grow-1 ms-4">
              <h4>Bulk discount pricing</h4>
              <p>Encourage higher purchase quantities with volume discounts.</p>
            </div>
          </div>
          <!-- End Media -->

          <hr class="my-4">

          <!-- Media -->
          <div class="d-flex">
            <div class="flex-shrink-0 mb-3 mb-sm-0">
              <img class="avatar avatar-lg avatar-4x3" src="{{ asset('backend/svg/illustrations/oc-collection.svg') }}"
                alt="Image Description" data-hs-theme-appearance="default">
              <img class="avatar avatar-lg avatar-4x3"
                src="{{ asset('backend/svg/illustrations-light/oc-collection.svg') }}" alt="Image Description"
                data-hs-theme-appearance="dark">
            </div>

            <div class="flex-grow-1 ms-4">
              <h4>Inventory tracking</h4>
              <p>Automatically keep track of product availability and receive notifications when inventory levels get
                low.</p>
            </div>
          </div>
          <!-- End Media -->
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer gap-3">
          <button type="button" class="btn btn-white" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          <button type="button" class="btn btn-primary">Upgrade now</button>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

  <!-- End Products Advanced Features Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="{{asset('backend/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('backend/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('backend/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js')}}">
  </script>
  <script src="{{asset('backend/vendor/hs-form-search/dist/hs-form-search.min.js')}}"></script>

  <script src="{{asset('backend/vendor/hs-quantity-counter/dist/hs-quantity-counter.min.js')}}"></script>
  <script src="{{asset('backend/vendor/hs-add-field/dist/hs-add-field.min.js')}}"></script>
  <script src="{{asset('backend/vendor/tom-select/dist/js/tom-select.complete.min.js')}}"></script>
  <script src="{{asset('backend/vendor/quill/dist/quill.min.js')}}"></script>
  <script src="{{asset('backend/vendor/dropzone/dist/min/dropzone.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables.net.extensions/select/select.min.js')}}"></script>
  <script src="{{asset('backend/vendor/imask/dist/imask.min.js')}}"></script>
  <script src="{{asset('backend/vendor/flatpickr/dist/flatpickr.min.js')}}"></script>
  <!-- JS Front -->
  <script src="{{asset('backend/js/theme.min.js')}}"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {



      // INITIALIZATION OF DATATABLES
      // =======================================================
      HSCore.components.HSDatatables.init($('#datatable'), {
        select: {
          style: 'multi',
          selector: 'td:first-child input[type="checkbox"]',
          classMap: {
            checkAll: '#datatableCheckAll',
            counter: '#datatableCounter',
            counterInfo: '#datatableCounterInfo'
          }
        }
      });
    });
  </script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function () {


            // INITIALIZATION OF FLATPICKR
    // =======================================================
    HSCore.components.HSFlatpickr.init('.js-flatpickr')


            // INITIALIZATION OF INPUT MASK
    // =======================================================
    HSCore.components.HSMask.init('.js-input-mask')

        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        new HSFormSearch('.js-form-search')


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')


        // INITIALIZATION OF ADD FIELD
        // =======================================================
        new HSAddField('.js-add-field', {
          addedField: field => {
            HSCore.components.HSTomSelect.init(field.querySelector('.js-select-dynamic'))
          }
        })


        // INITIALIZATION OF  QUANTITY COUNTER
        // =======================================================
        new HSQuantityCounter('.js-quantity-counter')


        // INITIALIZATION OF DROPZONE
        // =======================================================
        HSCore.components.HSDropzone.init('.js-dropzone')


        // INITIALIZATION OF QUILLJS EDITOR
        // =======================================================
        HSCore.components.HSQuill.init('.js-quill')
      }
    })()
  </script>

  <!-- Style Switcher JS -->

  <script>
    (function () {
        // STYLE SWITCHER
        // =======================================================
        const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
        const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

        // Function to set active style in the dorpdown menu and set icon for dropdown trigger
        const setActiveStyle = function () {
          $variants.forEach($item => {
            if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
              $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
              return $item.classList.add('active')
            }

            $item.classList.remove('active')
          })
        }

        // Add a click event to all items of the dropdown to set the style
        $variants.forEach(function ($item) {
          $item.addEventListener('click', function () {
            HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
          })
        })

        // Call the setActiveStyle on load page
        setActiveStyle()

        // Add event listener on change style to call the setActiveStyle function
        window.addEventListener('on-hs-appearance-change', function () {
          setActiveStyle()
        })
      })()
  </script>

  <!-- End Style Switcher JS -->
</body>

</html>