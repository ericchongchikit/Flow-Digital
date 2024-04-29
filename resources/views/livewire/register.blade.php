<div class="card offset-3 col-6 mt-5">
    <div class="card-header">
        Register
      </div>
    <form wire:submit="storeUser">
    <div class="card-body">
            <div class="form-group">
                <label for="emailLabel">Email address</label>
                <input wire:model="email" type="email" class="form-control mb-2" id="email" placeholder="name@example.com">
            </div>
            <div>
                @error('email')
                    <span class="text-danger mb-3">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="emailLabel">Password</label>
                <input wire:model="password"  type="password" class="form-control mb-2" id="password">
            </div>
            <div>
                @error('password')
                    <span class="text-danger mb-3">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nameLabel">Name</label>
                <input wire:model="name" class="form-control mb-2" id="name">
            </div>
            <div>
                @error('name')
                    <span class="text-danger mb-3">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="genderLabel">Gender</label>
                <select wire:model="gender"  class="form-control mb-2" id="gender">
                <option></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="others">Others</option>
                </select>
            </div>
            <div>
                @error('gender')
                    <span class="text-danger mb-3">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="date">Date of Birth</label>
                <input wire:model="dob"  type="text" id ="date" class ="form-control mb-2" placeholder="MM/DD/YYYY" x-data x-ref="datepicker" x-init="flatpickr($refs.datepicker)">
                {{-- <livewire:date-picker /> --}}
            </div>
            <button type ="submit" class="btn btn-success mb-2" style="float:right">Submit</button>
        </form>
        <div class="mb-3">
            <a wire:navigate href="/login">Already have an account</a>
          </div>
    </div>

</div>
