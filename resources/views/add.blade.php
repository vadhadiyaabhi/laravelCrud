@extends('layout')

@section('content')
<div class="container">
    <h3>Add new restaurant :)</h3>

    <form method="POST" action="/add">
    @csrf
    <div class="mb-3 col-md-6">
        <label for="exampleInputEmail1" class="form-label">Restaurant Name</label>
        <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter name of the restaurant" required>
    </div>
    <div class="mb-3 col-md-6">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter valid email" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3 col-md-6">
        <label for="exampleFormControlTextarea1" class="form-label">Restaurant address</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="3" placeholder="Enter address of the restaurant" required></textarea>
    </div>
    <div class="mb-3 col-md-6">
        <div class="row">
            <div class="mb-3 col-md-5">
                <label for="open" class="form-label">Opening Time</label>
                <input type="time" name="open" class="form-control" required>
            </div>
            <div class="mb-3 col-md-5">
                <label for="close" class="form-label">Closing Time</label>
                <input type="time" name="close" class="form-control" required>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-outline-primary mb-4">Submit</button>
    </form>
</div>


@stop