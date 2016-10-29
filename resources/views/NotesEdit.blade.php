@extends('layouts.app')

@section('content')
{!!   Form::open(['url' => 'update']) !!}
   {{method_field('patch')}}
<!-- Form input -->
<div class="form-group input" >
        {!! Form::text('title',$note->title ,['class'=>'form-control', ]) !!}
</div>
<div class="form-group input" >
    {!! Form::textArea('body',$note->body,['class'=>'form-control' ]) !!}
</div>


<!-- submit input -->
<div class="form-group input">
    {!! Form::submit('publish',['class' => ' btn btn-primary']) !!}
</div>
{!! Form::close() !!}

    @stop