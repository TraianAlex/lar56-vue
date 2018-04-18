@extends('layouts.app')
@section('content')
<div class="container">
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">

                   @include('partials.nav-vue')
                   <router-view></router-view>
                </div>
                    {{-- <to-do></to-do> --}}
            </div>
        </div>
</div>
@endsection
