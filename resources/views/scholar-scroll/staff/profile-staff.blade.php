<x-layout>
    @foreach ($user as $staff)
        <section>
            <div class="container py-2">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                    alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">

                                {{-- platinum name --}}
                                <h5 class="my-3">{{ $staff->staff_name }}</h5>
                                {{-- platinum package --}}
                                <p class="text-muted mb-1"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                {{-- staff personal information --}}
                                <h6 class="heading-small text-muted mb-4">Staff information</h6>
                                {{-- dob --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Date
                                        of Birth</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $staff->staff_date_of_birth }}</p>
                                    </div>
                                </div>
                                {{-- gender --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Gender</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $staff->staff_gender }}</p>
                                    </div>
                                </div>
                                {{-- citezenship --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Citezenship</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $staff->staff_citizenship }}</p>
                                    </div>
                                </div>
                                {{-- religion --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Religion</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $staff->staff_religion }}</p>
                                    </div>
                                </div>

                                {{-- staff contact information --}}
                                <h6 class="heading-small text-muted mb-4">Staff Contact</h6>
                                {{-- Address --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Address</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $staff->staff_address }}</p>
                                    </div>
                                </div>
                                {{-- Phone Number --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Phone Number</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $staff->staff_phone_num }}</p>
                                    </div>
                                </div>
                                {{-- Email --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Email</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $staff->staff_email }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    @endforeach
</x-layout>
