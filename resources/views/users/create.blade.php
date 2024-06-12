<x-layout>
    <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="mb-0">Platinum Registration</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <form method="POST" action="/users">
                @csrf
                <h6 class="heading-small text-muted mb-4">Platinum information</h6>
                <div class="row">
                    {{-- Platinum Personal Information --}}
                    {{-- name input --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">Name</label>
                            <input type="text" class="form-control" name="platinum_name"
                                placeholder="Insert Platinum Name" value="{{ old('platinum_name') }}">

                            @error('platinum_name')
                                <p class="text-red text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    {{-- date of birth input --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">Date of Birth</label>
                            <input type="date" class="form-control" name="platinum_date_of_birth"
                                placeholder="Insert Platinum email" value="{{ old('platinum_date_of_birth') }}">

                            @error('platinum_date_of_birth')
                                <p class="text-red text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    {{-- gender input --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlSelect1">Gender</label>
                            <select class="form-control" name="platinum_gender">
                                <option value="" disabled selected>Select gender</option>
                                <option value='male'>Male</option>
                                <option value='female'>Female</option>
                            </select>

                            @error('platinum_gender')
                                <p class="text-red text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    {{-- race input --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlSelect1">Race</label>
                            <select class="form-control" name="platinum_race">
                                <option value="" disabled selected>Select race</option>
                                <option value='Malay'>Malay</option>
                                <option value='Chinese'>Chinese</option>
                                <option value='Indian'>Indian</option>
                                <option value='Others'>Others</option>
                            </select>

                            @error('platinum_race')
                                <p class="text-red text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    {{-- citizenship input --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">Citizenship</label>
                            <input type="text" class="form-control" name="platinum_citizenship"
                                placeholder="Insert Platinum Citizenship" value="{{ old('platinum_citizenship') }}">

                            @error('platinum_citizenship')
                                <p class="text-red text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    {{-- religion input --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlSelect1">Religion</label>
                            <select class="form-control" name="platinum_religion">
                                <option value="" disabled selected>Select religion</option>
                                <option value='Islam'>Islam</option>
                                <option value='Christian'>Christian</option>
                                <option value='Buddhist'>Buddhist</option>
                                <option value='Hindu'>Hindu</option>
                                <option value='Others'>Others</option>
                            </select>

                            @error('platinum_religion')
                                <p class="text-red text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    {{-- Marital status input --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlSelect1">Marital Status</label>
                            <select class="form-control" name="platinum_marital_status">
                                <option value="" disabled selected>Select Marital Status</option>
                                <option value='Single'>Single</option>
                                <option value='Married'>Married</option>
                            </select>

                            @error('platinum_religion')
                                <p class="text-red text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    {{-- Employment input --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlSelect1">Employment Status</label>
                            <select class="form-control" name="platinum_employment_status">
                                <option value="" disabled selected>Select Employment Status</option>
                                <option value='Contract Employee'>Contract Employee</option>
                                <option value='Full-Time Employee'>Full-Time Employee</option>
                                <option value='Independent Contractor'>Independent Contractor</option>
                                <option value='Part-Time Employee'>Part-Time Employee</option>
                                <option value='Self-Employed'>Self-Employed</option>
                                <option value='Full-Time Student'>Full-Time Student</option>
                            </select>

                            @error('platinum_employment_status')
                                <p class="text-red text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    {{-- monthly income input --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">Monthly Income</label>
                            <input type="text" class="form-control" name="platinum_monthly_income"
                                placeholder="Insert Platinum Monthly Income" value="{{ old('platinum_monthly_income') }}">

                            @error('platinum_monthly_income')
                                <p class="text-red text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr>

                {{-- Platinum Contact Information --}}
                <h6 class="heading-small text-muted mb-4">Platinum Contact</h6>
                <div class="row">
                    {{-- Address input --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">Address</label>
                            <input type="text" class="form-control" name="platinum_address"
                                placeholder="Insert Platinum Phone Num" value="{{ old('platinum_address') }}">

                            @error('platinum_address')
                                <p class="text-red text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    {{-- phone num input --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">Phone Number</label>
                            <input type="text" class="form-control" name="platinum_phone_num"
                                placeholder="Insert Platinum Phone Num" value="{{ old('platinum_phone_num') }}">

                            @error('platinum_phone_num')
                                <p class="text-red text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    {{-- email input --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">Email</label>
                            <input type="email" class="form-control" name="platinum_email"
                                placeholder="Insert Platinum email" value="{{ old('platinum_email') }}">

                            @error('platinum_email')
                                <p class="text-red text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr>
                {{-- Platinum Education Information --}}
                <h6 class="heading-small text-muted mb-4">Platinum Education</h6>
                <div class="row">
                    {{-- Student Status --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlSelect1">Education Level</label>
                            <select class="form-control" name="platinum_education_level">
                                <option value="" disabled selected>Select Education Level</option>
                                <option value='Masters Bachelor'>Masters Bachelor</option>
                                <option value='PHD'>PHD</option>
                            </select>

                            @error('platinum_education_level')
                                <p class="text-red text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    {{-- Field of expertise --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">Field of Expertise</label>
                            <input type="text" class="form-control" name="platinum_field_of_expertise"
                                placeholder="Insert Platinum Field of Expertise"
                                value="{{ old('platinum_field_of_expertise') }}">

                            @error('platinum_field_of_expertise')
                                <p class="text-red text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    {{-- University --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">University</label>
                            <input type="text" class="form-control" name="platinum_university"
                                placeholder="Insert Platinum University" value="{{ old('platinum_university') }}">

                            @error('platinum_university')
                                <p class="text-red text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    {{-- Supervisor --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">Supervisor</label>
                            <input type="text" class="form-control" name="platinum_supervisor"
                                placeholder="Insert Platinum Supervisor" value="{{ old('platinum_supervisor') }}">

                            @error('platinum_supervisor')
                                <p class="text-red text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    {{-- Supervisor Email --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">Supervisor Email</label>
                            <input type="email" class="form-control" name="platinum_supervisor_email"
                                placeholder="Insert Platinum Supervisor"
                                value="{{ old('platinum_supervisor_email') }}">

                            @error('platinum_supervisor_email')
                                <p class="text-red text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr>
                {{-- Platinum Package Type --}}
                <h6 class="heading-small text-muted mb-4">Platinum Package</h6>
                <div class="row">
                    {{-- Package type input --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlSelect1">Package Type</label>
                            <select class="form-control" name="platinum_package_type">
                                <option value="" disabled selected>Select Package Type</option>
                                <option value='Platinum Elite I'>Platinum Elite I</option>
                                <option value='Platinum Elite II'>Platinum Elite II</option>
                                <option value='Platinum Premier I'>Platinum Premier I</option>
                                <option value='Platinum Premier II'>Platinum Premier II</option>
                                <option value='Platinum Premier III'>Platinum Premier III</option>
                            </select>

                            @error('platinum_package_type')
                                <p class="text-red text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    {{-- submit button --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>
