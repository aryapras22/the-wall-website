<h4> Share yours ideas </h4>
<div class="row">
    <form action="{{route('ideas.create')}}" method="POST">
        @csrf 
    <div class="mb-3">
        <textarea name="content" class="form-control" id="content" rows="3"></textarea>
        @error('content')
        <div class="text-danger"> {{ $message }} </div>
        @enderror
    </div>
    <div class="">
        <button class="btn btn-dark"> Share </button>
    </div>
    </form>
</div>