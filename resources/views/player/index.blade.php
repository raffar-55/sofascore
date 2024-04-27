@extends('layouts.app')
@section('title')
    All players
@endsection
@section('content')
    <div class="container py-4 justify-content-star>
        <div class=" row g-4 ">
            <div class=" col-sm-8 col-md-6 col-xl-3">
                @include('app.filter')
            </div>
            <div class="col">
                <div class="row g-3 justify-content-end">
                    @forelse($objs as $obj)
                        <div class="col-12 ">
                            @include('app.player')
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="fs-1 text-center rounded border p-5">
                                Player not found :(
                            </div>
                        </div>
                    @endforelse
                </div>
                <div class="pt-4">
                    {{ $objs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
