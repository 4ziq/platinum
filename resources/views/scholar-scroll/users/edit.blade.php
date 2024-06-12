<x-layout>
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
                            <form action="/profile/{{ $platinum->id }}" method="POST">
                                @csrf
                                @method('PUT')
                                {{-- platinum personal information --}}
                                <h6 class="heading-small text-muted mb-4">Platinum information</h6>
                                {{-- dob --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Date
                                        of Birth</label>
                                    <div class="col-md-10">
                                        <input type="date" class="form-control" name="platinum_date_of_birth"
                                            value="{{ $platinum->platinum_date_of_birth }}">
                                    </div>
                                </div>
                                {{-- gender --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Gender</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="platinum_gender">
                                            @if ($platinum->platinum_gender == 'male')
                                                <option value='male' selected>Male</option>
                                                <option value='female'>Female</option>
                                            @elseif($platinum->platinum_gender == 'female')
                                                <option value='male'>Male</option>
                                                <option value='female' selected>Female</option>
                                            @endif
                                        </select>
                                        <p class="text-muted mt-2 mb-0"></p>
                                    </div>
                                </div>
                                {{-- Race --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Race</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="platinum_race">
                                            @if ($platinum->platinum_race == 'Malay')
                                                <option value='Malay' Selected>Malay</option>
                                                <option value='Chinese'>Chinese</option>
                                                <option value='Indian'>Indian</option>
                                                <option value='Others'>Others</option>
                                            @elseif($platinum->platinum_race == 'Chinese')
                                                <option value='Malay'>Malay</option>
                                                <option value='Chinese'Selected>Chinese</option>
                                                <option value='Indian'>Indian</option>
                                                <option value='Others'>Others</option>
                                            @elseif($platinum->platinum_race == 'Indian')
                                                <option value='Malay'>Malay</option>
                                                <option value='Chinese'>Chinese</option>
                                                <option value='Indian'Selected>Indian</option>
                                                <option value='Others'>Others</option>
                                            @elseif($platinum->platinum_race == 'Others')
                                                <option value='Malay'>Malay</option>
                                                <option value='Chinese'>Chinese</option>
                                                <option value='Indian'>Indian</option>
                                                <option value='Others'Selected>Others</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                {{-- citezenship --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Citezenship</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="platinum_citizenship"
                                            placeholder="Insert Platinum Citizenship"
                                            value="{{ $platinum->platinum_citizenship }}">
                                    </div>
                                </div>
                                {{-- religion --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Religion</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="platinum_religion">
                                            @if ($platinum->platinum_religion == 'Islam')
                                                <option value='Islam' selected>Islam</option>
                                                <option value='Christian'>Christian</option>
                                                <option value='Buddhist'>Buddhist</option>
                                                <option value='Hindu'>Hindu</option>
                                                <option value='Others'>Others</option>
                                            @elseif($platinum->platinum_religion == 'Christian')
                                                <option value='Islam'>Islam</option>
                                                <option value='Christian' selected>Christian</option>
                                                <option value='Buddhist'>Buddhist</option>
                                                <option value='Hindu'>Hindu</option>
                                                <option value='Others'>Others</option>
                                            @elseif($platinum->platinum_religion == 'Buddhist')
                                                <option value='Islam'>Islam</option>
                                                <option value='Christian'>Christian</option>
                                                <option value='Buddhist' selected>Buddhist</option>
                                                <option value='Hindu'>Hindu</option>
                                                <option value='Others'>Others</option>
                                            @elseif($platinum->platinum_religion == 'Hindu')
                                                <option value='Islam'>Islam</option>
                                                <option value='Christian'>Christian</option>
                                                <option value='Buddhist'>Buddhist</option>
                                                <option value='Hindu' selected>Hindu</option>
                                                <option value='Others'>Others</option>
                                            @elseif($platinum->platinum_religion == 'Others')
                                                <option value='Islam'>Islam</option>
                                                <option value='Christian'>Christian</option>
                                                <option value='Buddhist'>Buddhist</option>
                                                <option value='Hindu'>Hindu</option>
                                                <option value='Others' selected>Others</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                {{-- Marital Status --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Marital Status</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="platinum_marital_status">
                                            @if ($platinum->platinum_marital_status == 'Single')
                                                <option value='Single' Selected>Single</option>
                                                <option value='Married'>Married</option>
                                            @elseif($platinum->platinum_marital_status == 'Married')
                                                <option value='Single'>Single</option>
                                                <option value='Married'Selected>Married</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                {{-- Employment Status --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Employment Status</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="platinum_employment_status">
                                            @if ($platinum->platinum_employment_status == 'Contract Employee')
                                                <option value='Contract Employee' Selected>Contract Employee</option>
                                                <option value='Full-Time Employee'>Full-Time Employee</option>
                                                <option value='Independent Contractor'>Independent Contractor</option>
                                                <option value='Part-Time Employee'>Part-Time Employee</option>
                                                <option value='Self-Employed'>Self-Employed</option>
                                                <option value='Full-Time Student'>Full-Time Student</option>
                                            @elseif($platinum->platinum_employment_status == 'Full-Time Employee')
                                                <option value='Contract Employee'>Contract Employee</option>
                                                <option value='Full-Time Employee' Selected>Full-Time Employee</option>
                                                <option value='Independent Contractor'>Independent Contractor</option>
                                                <option value='Part-Time Employee'>Part-Time Employee</option>
                                                <option value='Self-Employed'>Self-Employed</option>
                                                <option value='Full-Time Student'>Full-Time Student</option>
                                            @elseif($platinum->platinum_employment_status == 'Independent Contractor')
                                                <option value='Contract Employee'>Contract Employee</option>
                                                <option value='Full-Time Employee'>Full-Time Employee</option>
                                                <option value='Independent Contractor'Selected>Independent Contractor
                                                </option>
                                                <option value='Part-Time Employee'>Part-Time Employee</option>
                                                <option value='Self-Employed'>Self-Employed</option>
                                                <option value='Full-Time Student'>Full-Time Student</option>
                                            @elseif($platinum->platinum_employment_status == 'Part-Time Employee')
                                                <option value='Contract Employee'>Contract Employee</option>
                                                <option value='Full-Time Employee'>Full-Time Employee</option>
                                                <option value='Independent Contractor'>Independent Contractor</option>
                                                <option value='Part-Time Employee' Selected>Part-Time Employee</option>
                                                <option value='Self-Employed'>Self-Employed</option>
                                                <option value='Full-Time Student'>Full-Time Student</option>
                                            @elseif($platinum->platinum_employment_status == 'Self-Employed')
                                                <option value='Contract Employee'>Contract Employee</option>
                                                <option value='Full-Time Employee'>Full-Time Employee</option>
                                                <option value='Independent Contractor'>Independent Contractor</option>
                                                <option value='Part-Time Employee'>Part-Time Employee</option>
                                                <option value='Self-Employed' Selected>Self-Employed</option>
                                                <option value='Full-Time Student'>Full-Time Student</option>
                                            @elseif($platinum->platinum_employment_status == 'Full-Time Student')
                                                <option value='Contract Employee'>Contract Employee</option>
                                                <option value='Full-Time Employee'>Full-Time Employee</option>
                                                <option value='Independent Contractor'>Independent Contractor</option>
                                                <option value='Part-Time Employee'>Part-Time Employee</option>
                                                <option value='Self-Employed'>Self-Employed</option>
                                                <option value='Full-Time Student' Selected>Full-Time Student</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                {{-- Monthly Income --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Monthly Income</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="platinum_monthly_income"
                                            placeholder="Insert Platinum Monthly Income"
                                            value="{{ $platinum->platinum_monthly_income }}">

                                    </div>
                                </div>

                                {{-- platinum contact information --}}
                                <h6 class="heading-small text-muted mb-4">Platinum Contact</h6>
                                {{-- Address --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Address</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="platinum_address"
                                            placeholder="Insert Platinum Phone Num"
                                            value="{{ $platinum->platinum_address }}">
                                    </div>
                                </div>
                                {{-- Phone Number --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Phone Number</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="platinum_phone_num"
                                            placeholder="Insert Platinum Phone Num"
                                            value="{{ $platinum->platinum_phone_num }}">
                                    </div>
                                </div>
                                {{-- Email --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Email</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" name="platinum_email"
                                            placeholder="Insert Platinum email"
                                            value="{{ $platinum->platinum_email }}">
                                    </div>
                                </div>

                                {{-- platinum education information --}}
                                <h6 class="heading-small text-muted mb-4">Platinum Education</h6>
                                {{-- Education level --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Education Level</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="platinum_education_level">
                                            @if ($platinum->platinum_education_level == 'Masters Bachelor')
                                                <option value='Masters Bachelor' Selected>Masters Bachelor</option>
                                                <option value='PHD'>PHD</option>
                                            @elseif($platinum->platinum_education_level == 'PHD')
                                                <option value='Masters Bachelor'>Masters Bachelor</option>
                                                <option value='PHD' Selected>PHD</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                {{-- Field of Expertise --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Field of Expertise</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="platinum_field_of_expertise"
                                            placeholder="Insert Platinum Field of Expertise"
                                            value="{{ $platinum->platinum_field_of_expertise }}">
                                        </p>
                                    </div>
                                </div>
                                {{-- University --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">University</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="platinum_university"
                                            placeholder="Insert Platinum University"
                                            value="{{ $platinum->platinum_university }}">
                                    </div>
                                </div>
                                {{-- Supervisor --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Supervisor</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="platinum_supervisor"
                                            placeholder="Insert Platinum Supervisor"
                                            value="{{ $platinum->platinum_supervisor }}">
                                    </div>
                                </div>
                                {{-- Supervisor email --}}
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label form-control-label">Supervisor Email</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" name="platinum_supervisor_email"
                                            placeholder="Insert Platinum Supervisor"
                                            value="{{ $platinum->platinum_supervisor_email }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Update Profile</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</x-layout>
