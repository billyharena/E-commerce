@extends('client.templateClient.appClient')
@section('page-content')
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Log In</h2>
            </div>
            <form method="POST" action="#">
                @csrf
                @method('post')
                @if (session()->has('message'))
                    <div class="alert alert-warning">{{ session()->get('message')}}</div>
                @endif
                <div class="mb-3"><label class="form-label" for="email">Email</label><input class="form-control item" type="email" id="email"></div>
                <div class="mb-3"><label class="form-label" for="password">Password</label><input class="form-control" type="password" id="password"></div>
                <div class="mb-3">
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox"><label class="form-check-label" for="checkbox">Remember me</label></div>
                </div><button class="btn btn-primary" type="submit">Log In</button>
            </form>
        </div>
    </section>
@endsection
