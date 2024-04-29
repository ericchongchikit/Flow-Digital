
<div class="container ">
    <h1 class="text-center mt-5">All Blog Posted</h1>
    {{-- <div class="row mt-5"> --}}

      @foreach($posts as $post)
        <div class="col-sm-12 mt-5">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$post->title}}</h5>
              <p class="card-text">{{$post->metaDescription}}</p>
              <a href="/posts/{{$post->urlSlug}}" class="btn btn-primary">View Blog</a>
            </div>
          </div>
        </div>
      @endforeach
      
    
    
</div>