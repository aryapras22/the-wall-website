<div class="px-3 pt-4 pb-2">
    <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
            <div>
                <h5 class="card-title mb-0"><a href="#"> Mario
                    </a></h5>
            </div>
            
        </div>
        <div>
            
            <form  method="POST" action="{{ route('ideas.destroy', $idea->id) }}">
                @csrf
                @method('delete')
                <a href="{{route('ideas.show', $idea->id)}}">View</a>
                <a href="{{route('ideas.edit', $idea->id)}}">Edit</a>
                <button class="btn btn-danger btn-sm">
                    X
                </button>
            </form>
            
            
        </div>
    </div>
</div>
<div class="card-body">
    @if ($editing ?? false)
    <div class="row">
        <form action="{{route('ideas.update', $idea->id)}}" method="POST">
            @csrf
            @method('put')
        <div class="mb-3">
            <textarea name="content" class="form-control" id="content" rows="3">{{$idea->content}}</textarea>
            @error('content')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="">
            <button class="btn btn-dark"> Update </button>
        </div>
        </form>
    </div>
    @else
    <p class="fs-6 fw-light text-muted">
        {{ $idea->content }}
    </p>
    @endif
    <div class="d-flex justify-content-between">
        <div>
            <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                </span> {{$idea->likes}} </a>
        </div>
        <div>
            <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
               {{$idea->created_at}} </span>
        </div>
    </div>
    <div>
        <div class="mb-3">
            <textarea class="fs-6 form-control" rows="1"></textarea>
        </div>
        <div>
            <button class="btn btn-primary btn-sm"> Post Comment </button>
        </div>

        <hr>
        {{-- @foreach ($idea->comments as $comment) --}}
            @include('shared.comment-box')
        {{-- @endforeach --}}
    </div>
</div>