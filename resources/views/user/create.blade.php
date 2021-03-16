@extends('layout.admin')

@section('content')
    <div class="container">
        <form class="form form-vertical" action="{{route('users.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="first-name-vertical">First Name</label>
                        <input type="text" id="first-name-vertical" class="form-control" name="name" placeholder="First Name">
                        @error('name') 
                        <span id="basic-default-name-error" class="error">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="email-id-vertical">Email</label>
                        <input type="email" id="email-id-vertical" class="form-control" name="email" placeholder="Email">
                        @error('email') 
                        <span id="basic-default-name-error" class="error">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="contact-info-vertical">Psssword</label>
                        <input type="password" id="contact-info-vertical" class="form-control" name="password" placeholder="Psssword">
                        @error('password') 
                        <span id="basic-default-name-error" class="error">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection