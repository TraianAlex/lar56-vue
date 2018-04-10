@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
        <tabs>
            <tab name="About Us" :selected="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris accumsan bibendum quam id lacinia. Aenean congue sem eget augue scelerisque mollis. Cras vel dignissim nisi. Suspendisse auctor, libero eu scelerisque ultricies, ligula sem facilisis lectus, eget maximus erat tellus cursus nibh. Vestibulum varius diam quis massa iaculis, id auctor odio varius. Vivamus fermentum interdum eros, vel euismod lorem bibendum ac. Donec iaculis est at dapibus scelerisque. Nam at condimentum justo.</p>
            </tab>
            <tab name="About Our Culture">
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis faucibus suscipit egestas. Donec finibus erat non tellus vehicula, ac tempus quam commodo. Sed condimentum diam placerat, euismod risus in, porttitor justo. Aenean lobortis efficitur vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam iaculis, sapien et venenatis finibus, nisi arcu iaculis lectus, non fringilla nulla turpis posuere enim.</p>
            </tab>
            <tab name="About Our Vision">
                <p>Phasellus elementum vestibulum nisi, sed porta magna sodales quis. Pellentesque consectetur viverra rhoncus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In finibus urna eu maximus bibendum. Vestibulum id magna a tortor fringilla luctus eget vitae lacus. Phasellus interdum orci sed mauris elementum mattis. Curabitur arcu lectus, iaculis eget convallis eget, rhoncus sed augue. Sed augue urna, tincidunt vel suscipit et, mollis nec ligula. Quisque quis lacus accumsan, maximus lorem et, malesuada enim. Ut tortor tortor, imperdiet et justo eu, tempor egestas augue. Donec placerat erat ac luctus faucibus. Proin pretium efficitur urna in maximus. Sed ornare, velit quis ultricies sagittis, libero libero facilisis nulla, in suscipit leo nibh ac purus. Donec feugiat vel ante sit amet feugiat. Aliquam imperdiet posuere metus, sit amet rutrum lorem venenatis sit amet.</p>
            </tab>
            <tab name="Another tab">
                <p>Maecenas urna ligula, tempor eu aliquet id, faucibus quis magna. Phasellus dictum convallis sem, nec suscipit lectus semper vel. Aenean dignissim ligula vel sem maximus, fringilla mattis augue consectetur. Donec id malesuada erat. Praesent libero ipsum, convallis at tortor ac, pretium sagittis lorem. Vestibulum scelerisque ipsum in nulla facilisis aliquet. Proin sollicitudin arcu nec scelerisque tempor. Etiam non dolor vel arcu lacinia viverra. Sed pharetra ligula a pharetra commodo. Morbi convallis vitae velit vitae suscipit. Nullam sagittis eget orci sed tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam id lacus semper, dapibus magna at, volutpat odio.</p>
            </tab>
        </tabs>
    </div>
</div>
@endsection