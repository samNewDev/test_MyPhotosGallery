@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Upload Image') }}</div>
                <div class="card-body">
                    <form action="image" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="image[]" class="form-control-image" multiple>
                        </div>
                        <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
        <div class="container mt-2">
            <div class="row">
                @forelse ($images as $image)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
                        <div class="card">
                            <a href="#" class="card-img-top"><img src="{{ asset($image->image) }}" alt="Broken" height="220"></a>
                            <div class="card-body">
                                <form action="image/{{ $image->id }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                     <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                <div class="card">
                    <div class="card-header">
                        {{ __('My images') }}
                    </div>
                    <div class="card-body">
                        <p>There are no uploads yet</p>
                    </div>
                </div>
                @endforelse
            </div>
            <div class="row justify-content-center">
                {{ $images->links()}}
            </div>
        </div>
        
    </div>
</div>
@endsection
