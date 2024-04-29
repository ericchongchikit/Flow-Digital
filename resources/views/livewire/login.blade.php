<div class="card offset-3 col-6 mt-5">
    <div class="card-header">
        Log in
      </div>
    <form wire:submit="loginUser">
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
            
            <button type ="submit" class="btn btn-success mb-2" style="float:right">Submit</button>
        </form>
        <div class="mb-3">
            <a wire:navigate href="/register">Don't have an account</a>
          </div>
    </div>

</div>