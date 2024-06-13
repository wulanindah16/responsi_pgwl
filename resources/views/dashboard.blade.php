<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card shadow">
            <div class="card-header">
                <h3 class="card-title">Data Destinasi Wisata</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="alert alert-primary" role="alert">
                           <h4><i class="fa-solid fa-location-dot"></i> Total Points</h4>
                           <p style="font-size: 32pt">{{$total_points}}</p>
                          </div>
                    </div>
                    {{-- <div class="col">
                        <div class="alert alert-success" role="alert">
                            <h4><i class="fa-solid fa-route"></i> Total Polylines</h4>
                            <p style="font-size: 32pt">{{$total_polylines}}</p>
                           </div>
                    </div>
                    <div class="col">
                        <div class="alert alert-danger" role="alert">
                            <h4><i class="fa-solid fa-draw-polygon"></i> Total Polygons</h4>
                            <p style="font-size: 32pt">{{$total_polygons}}</p>
                           </div>
                    </div> --}}
                </div>
                <hr>
                <p>Anda login sebagai <b>{{ Auth::user()->name }}</b> dengan email
                <i>{{ Auth::user()->email }}</i></p>

            </div>
        </div>
    </div>

</x-app-layout>
