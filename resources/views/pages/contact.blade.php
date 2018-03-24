@extends('layouts.app')

@section('content')


    <div class="card mt-auto">
        <div class="card-title mt-auto">
            <h1>Contact</h1>
            <p class="lead">Please use this form to contact the site owner</p>
            <div class="card-body">

                <form action="/contact" method="post">

                    @csrf
                    <div class="form-group">
                        <label for="subject">Subject of your message:</label>
                        <textarea name="subject" class="form-control" id="subject" rows="1"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="emai1 address">Your email address</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">`
                    </div>

                    <div class="form-group">
                        <label for="body">Your Message:</label>
                        <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>

@endsection