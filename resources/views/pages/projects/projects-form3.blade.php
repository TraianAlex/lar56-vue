@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @foreach($projects as $project)
            {{ $project->name }} 
            <!--<button class="btn btn-danger btn-xs" @click="deletePro({{ $project->id }})"><i class="fa fa-trash-o" aria-hidden="true"></i></button>-->
        @endforeach
    </div>
    <hr>
    <form-create></form-create>
</div>
@endsection