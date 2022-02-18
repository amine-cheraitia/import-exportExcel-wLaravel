@extends('layouts.app')
@section('content')
<div class="container">

    <div class="card-body">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{session('status')}}
            </div>
        @endif
    </div>

<form method="post" action="{{route('store')}}" enctype="multipart/form-data" class="form-group">
    @csrf


    <div class="form-group">
        <label for="my-input">filename</label>
        <input id="my-input" class="form-control" type="file" name="file">
        <button type="submit" class="btn btn-primary">Import</button>
    </div>


    </form>
</div>
@endsection
