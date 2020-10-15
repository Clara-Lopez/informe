@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Informe
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('informes.show_fields')
                    <a href="{{ route('informes.index') }}" class="btn btn-default">Salir</a>
                </div>
            </div>
        </div>
    </div>
@endsection
