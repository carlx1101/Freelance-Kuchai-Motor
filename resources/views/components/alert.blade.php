@if (session('success'))
<div class="fixed-top justify-content-center d-flex mt-5" id="success-alert">
    <div class="alert alert-success" role="alert">
        <div class="d-flex">
            <div class="flex-shrink-0">
                <i class="bi bi-check-circle-fill"></i>
            </div>
            <div class="flex-grow-1 ms-2">
                {{ session('success') }}
            </div>
        </div>
    </div>
</div>
@endif

@if ($errors->any())
<div class="fixed-top justify-content-center d-flex mt-5" id="success-alert">
    <div class="alert alert-danger" role="alert">
        <div class="d-flex">
            <div class="flex-shrink-0">
                <i class="bi bi-exclamation-triangle-fill"></i>
            </div>
            <div class="flex-grow-1 ms-2">
                {{ __('Something went wront! Please try again later.') }}
            </div>
        </div>
    </div>
</div>
@endif