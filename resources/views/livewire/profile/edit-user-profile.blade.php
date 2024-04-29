<div class="card offset-3 col-6 mt-5">
    <livewire:flash-message/>
    <div class="card-header">
      Edit Post
    </div>
    <div class="card-body">
        <form wire:submit="updateProfile">
            <div class="form-group">
              <label for="">Name</label>
              <input wire:model="name" type="text" class="form-control " id="name" >
            </div>
            <div>
                @error('name')
                    <span class="text-danger mb-3">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input wire:model="email" type="text" class="form-control " id="email" >
            </div>
            <div>
                @error('email')
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

            <div class="clearfix">
                <button wire:navigate href= "/posts" type ="button" class="btn btn-primary" style="float:left">Back</button>
                <button type="submit"  class="btn btn-success" style="float:right">Save</button>
            </div>
          </form>
    </div>
  </div>
