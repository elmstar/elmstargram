@extends('layouts.default')
    @section('content')
        <div>
            <div class="content">
                <div>
                   <p>Список интересных тем</p>
                    @php
                    dump(request()->route_name);
                    @endphp
                </div>
            </div>
        </div>
    @endsection
