@extends('client.templateClient.appClient')
@section('page-content')
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Registration</h2>
            </div>
            <form method="POST" action="{{route('registration')}}">
                @csrf
                @method('post')
                @if (session()->has('success'))
                    <div class="alert alert-success">{{ session()->get('success')}}</div>
                @endif
                @if (session()->has('fail'))
                    <div class="alert alert-danger">{{ session()->get('fail')}}</div>
                @endif
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label><input class="form-control item" type="text" name="name" value="{{old('name')}}">
                    <span class="text-danger">@error('name') {{$message}} @enderror</span>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label><input class="form-control item" type="email" name="email" value="{{old('email')}}">
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Password</label><input class="form-control item" type="password" name="password">
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>
                <button class="btn btn-primary" type="submit">Sign Up</button>
            </form>
        </div>
    </section>
@endsection
