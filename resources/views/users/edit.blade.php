@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">My Account</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.edit') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            {{--
                            <div class="form-group row">
                                <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>
                                <div class="col-md-6">
                                        <input type="file" name="avatar" class="form-control-image">
                                    </form>
                                </div>
                            </div>
                            --}}
                                <div class="form-group row">
                                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                                    <div class="col-md-6">
                                        <input type="text" name="username" value="{{ Auth::user()->name }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                                    <div class="col-md-6">
                                        <input type="text" name="email" value="{{ Auth::user()->email }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>
                                    <div class="col-md-6">
                                        <input type="text" name="lastname" value="{{ Auth::user()->lastname }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>
                                    <div class="col-md-6">
                                        <input type="text" name="firstname" value="{{ Auth::user()->firstname }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <input type="submit" value="Submit" class="btn btn-primary">
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection