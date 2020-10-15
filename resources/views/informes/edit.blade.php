@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Informe
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($informe, ['route' => ['informes.update', $informe->id], 'method' => 'patch']) !!}

                        @include('informes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection