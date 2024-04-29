<div class="card mt-5">
    <div class="card-body ">
        <div class="text-center">
            <h1 class="card-title">{{$post->title}}</h1>
            <span class="text-center "> {{$post->metaDescription}} </span>
        </div>
      <p class="card-text">{!! $post->description !!}</p>

      <p class="font-italic">Created By: <b>{{$post->createdBy}}</b></p>
      
      <button wire:navigate href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
    </div>
  </div>