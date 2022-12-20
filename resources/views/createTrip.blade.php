@extends('layouts.app')

@section('content')

<div>
    <form class="row g-3" action="?action=store" method="post">
        @method('create')
        @csrf
        <div class="col-md-6">
            <label class="form-label">Origin City</label>
            <input type="text" class="form-control" name="childName">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Destination City</label>
            <input type="number" class="form-control" name="age">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Price</label>
            <input type="text" class="form-control" name="place" placeholder="in the school playground">
        </div>
        <div class="col-12">
            <label class="form-label">Seats</label>
            <input type="text" class="form-control" name="giftSuggestion">
                </div>
                <div class="buttons">
                    <button type ="submit" value="create" class="btn btn-primary">Create</button>
                    <button type="reset" value="reset" class="btn btn-primary">Reset</button>
                    <a href="./index.php"><button class="btn btn-primary">Return</button></a>
                </div>
    </form>
    </div>
@endsection