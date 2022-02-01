<div class="form-group">
    <label class="mb-2" for="url"> Url </label>
    <input type="text" name="url" id="url" class="form-control @error('url') is-invalid @enderror" value="{{ old('url',$icon->url) }}">
    @error('url')
        <p class="text-danger">{{ $message }}</p>
    @enderror

    <label class="mb-2" for="name"> Icon name </label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name',$icon->name) }}">
    @error('name')
        <p class="text-danger">{{ $message }}</p>
    @enderror

    <label class="mt-2"for="img"> Icon </label>
    <input type="file" name="img" id="img" class="form-control @error('img') is-invalid @enderror">
    @error('img')
    <p class="text-danger">{{ $message }}</p>
    @enderror 
    @if (!$icon->img =='')
        <img src="{{ asset($icon->img) }}" alt="{{ $icon->name }}" width="60" height="40" class="img-fluid float-end">  
        <input type="hidden" name="old_img" value="{{$icon->img}}"> 
    @endif  
    <button type="submit" class="btn btn-outline-primary mt-3"> Save </button>
</div>