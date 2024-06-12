<x-layout>
    @foreach ($platinum as $platinum)
        <section>
            <div class="container py-2">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                    alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">

                                {{-- platinum name --}}
                                <h5 class="my-3">{{ $platinum->platinum_name }}</h5>
                                {{-- platinum package --}}
                                <p class="text-muted mb-1">{{ $platinum->platinum_package_type }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                {{-- platinum personal information --}}
                                <h6 class="heading-small text-muted mb-4">Platinum information</h6>
                                {{-- dob --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Date
                                        of Birth</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $platinum->platinum_date_of_birth }}</p>
                                    </div>
                                </div>
                                {{-- gender --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Gender</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $platinum->platinum_gender }}</p>
                                    </div>
                                </div>
                                {{-- Race --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Race</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $platinum->platinum_race }}</p>
                                    </div>
                                </div>
                                {{-- citezenship --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Citezenship</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $platinum->platinum_citizenship }}</p>
                                    </div>
                                </div>
                                {{-- religion --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Religion</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $platinum->platinum_religion }}</p>
                                    </div>
                                </div>
                                {{-- Marital Status --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Marital Status</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $platinum->platinum_marital_status }}</p>
                                    </div>
                                </div>
                                {{-- Employment Status --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Employment Status</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $platinum->platinum_employment_status }}</p>
                                    </div>
                                </div>
                                {{-- Monthly Income --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Monthly Income</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $platinum->platinum_monthly_income }}</p>
                                    </div>
                                </div>

                                {{-- platinum contact information --}}
                                <h6 class="heading-small text-muted mb-4">Platinum Contact</h6>
                                {{-- Address --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Address</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $platinum->platinum_address }}</p>
                                    </div>
                                </div>
                                {{-- Phone Number --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Phone Number</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $platinum->platinum_phone_num }}</p>
                                    </div>
                                </div>
                                {{-- Email --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Email</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $platinum->platinum_email }}</p>
                                    </div>
                                </div>

                                {{-- platinum education information --}}
                                <h6 class="heading-small text-muted mb-4">Platinum Education</h6>
                                {{-- Education level --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Education Level</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $platinum->platinum_education_level }}</p>
                                    </div>
                                </div>
                                {{-- Field of Expertise --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Field of Expertise</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $platinum->platinum_field_of_expertise }}
                                        </p>
                                    </div>
                                </div>
                                {{-- University --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">University</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $platinum->platinum_university }}</p>
                                    </div>
                                </div>
                                {{-- Supervisor --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Supervisor</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $platinum->platinum_supervisor }}</p>
                                    </div>
                                </div>
                                {{-- Supervisor email --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Supervisor Email</label>
                                    <div class="col-md-10">
                                        <p class="text-muted mt-2 mb-0">{{ $platinum->platinum_supervisor_email }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="text-center">
                                            <a href="/profile/{{$platinum->id}}/edit"><button type="button" class="btn btn-primary">edit profile</button></a>
                                        </div>
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
