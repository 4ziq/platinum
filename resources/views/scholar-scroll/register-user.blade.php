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
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Insert Platinum Name"
                                value="{{ old('name') }}">

                            @error('name')
                                <p class="text-red text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">Email</label>
                            <input type="email" class="form-control" name="email"
                                placeholder="Insert Platinum email" value="{{ old('email') }}">

                            @error('email')
                                <p class="text-red text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
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
