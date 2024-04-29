<div class="card offset-3 col-6 mt-5">
  <livewire:flash-message/>
    <div class="card-header">
      User Profile
    </div>
    <div class="card-body">
        <table class="table ">
            <thead>
              <tr>
                <th scope="col-2">Name:</th>
                <td>{{$userProf->name}}</td>
                {{-- {{$post->urlSlug}} --}}
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="col">Email:</td>
                <td>{{$userProf->email}}</td>
              </tr>
              <tr>
                <th scope="row">Gender:</th>
                <td>{{$userProf->gender}}</td>
              </tr>
              <tr>
                <th scope="row">Date of Birth:</th>
                <td>{{$userProf->dob}}</td>
              </tr>
            </tbody>
          </table>
          <div class="clearfix">
            <button wire:navigate href= "{{ URL::previous() }}" type ="button" class="btn btn-primary" style="float:left">Back</button>
            <button wire:navigate href="/user/edit"class="btn btn-warning" style="float:right">Edit</button>
        </div>
    </div>

    
  </div>
