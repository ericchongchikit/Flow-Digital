<div class="card offset-3 col-6 mt-5">
    <div class="card-header">
      Create Post
    </div>
    <div class="card-body">
        <form wire:submit="save">
            <div class="form-group">
              <label for="titleLabel">Title</label>
              <input wire:model="title" type="text" class="form-control" id="title" >
            </div>
            <div>
                @error('title')
                    <span class="text-danger mb-3">{{$message}}</span>
                @enderror
            </div>

            {{-- <div class="form-group">
                <label for="urlSlugLabel">URL Slug</label>
                <input wire:model="urlSlug" type="text" class="form-control" id="urlSlug" >
            </div> --}}
            <div>
                @error('urlSlug')
                    <span class="text-danger mb-3">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="metaDescriptionLabel">Meta Description</label>
                <input wire:model="metaDescription" type="text" class="form-control" id="metaDescription" >
            </div>
            <div>
                @error('metaDescription')
                    <span class="text-danger mb-3">{{$message}}</span>
                @enderror
            </div>
            
            <div class="form-group ">
              <label for="descriptionLabel">Description</label>
              {{-- <textarea wire:model="description" class="form-control " id="description" rows="3"></textarea> --}}
                <div wire:ignore>
                    <textarea class="form-control" id="description" wire:model="description" ></textarea>
                </div>
            
            </div>
            <div>
                @error('metaDescription')
                    <span class="text-danger ">{{$message}}</span>
                @enderror
            </div>
            
            <div class="clearfix mt-3">
                <button wire:navigate href= "/posts" type ="button" class="btn btn-primary" style="float:left">Back</button>
                <button type ="submit" class="btn btn-success" style="float:right">Submit</button>
            </div>
          </form>
          
    </div>
  </div>

  @push('scripts')
  <script>
    $('#description').summernote({
      placeholder: 'Enter Description',
      height: 300,
      toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ],
        callbacks: {
                onChange: function(contents, $editable) {
                    @this.set('description',contents)
                }
        }
    });
  </script>
  @endpush