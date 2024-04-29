<div class="card mt-5">
    <div class="card-header text-center">
        <h1>Your Posts </h1>
      </div>
    <div class="card-body">
        <button wire:navigate href="/posts/create" class = "btn btn-success btn-sm ">Create</button>
        <livewire:flash-message/>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">URL Slug</th>
                    {{-- <th scope="col">Meta Description</th> --}}
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->urlSlug}}</td>
                    {{-- <td>{{$post->metaDescription}}</td> --}}
                    <td>
                        <button wire:navigate href="/posts/{{$post->urlSlug}}" class ="btn btn-primary btn-sm">View</button>
                        <button wire:navigate href="/posts/edit/{{$post->id}}" class ="btn btn-secondary btn-sm">Edit</button>
                        <button wire:click="deletepost({{$post->id}})" class ="btn btn-danger btn-sm">Delete</button>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>