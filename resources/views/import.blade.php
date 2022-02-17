@extends('layouts.app')
@section('content')
<div class="container">

<form action="post" action="users/import" enctype="multipart/form-data" class="form-group">@csrf


    <div class="form-group">
        <label for="my-input">filename</label>
        <input id="my-input" class="form-control" type="file" name="file">
        <button type="submit" class="btn btn-primary">Import</button>
    </div>


    </form>
</div>
@endsection
