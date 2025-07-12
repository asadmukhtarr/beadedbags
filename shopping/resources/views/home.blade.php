@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    Welcome {{ Auth::user()->name }} ! <br />
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur, voluptatem eos
                        exercitationem optio delectus accusantium commodi officia labore obcaecati mollitia cumque modi
                        sint autem dolor, quisquam explicabo voluptate, magni accusamus. Eaque nihil quidem in totam
                        sequi quae a voluptatem obcaecati minima debitis. Vel porro dolorum voluptatibus fugiat quam
                        quae rem sunt! Quas, dolorum a. Vitae beatae repellat necessitatibus recusandae, eos dolore
                        natus ipsum nemo exercitationem nobis repudiandae consequatur consequuntur illum nulla explicabo
                        qui est unde. Quo alias animi id minus dolores incidunt? Magnam, laborum facilis placeat nisi
                        recusandae ducimus, adipisci voluptates expedita reprehenderit deleniti sunt, exercitationem
                        eveniet! Fugiat, distinctio voluptatum.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection