@extends('layouts.app')

@section('content')
{!!   Form::open(['url' => 'home']) !!}
<!-- Form input -->
<div class="form-group input" >
        {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Note Title' ]) !!}
</div>
<div class="form-group input" >
    {!! Form::textArea('body',null,['class'=>'form-control','placeholder'=>'Note Describtion' ]) !!}
</div>


<!-- submit input -->
<div class="form-group input">
    {!! Form::submit('publish',['class' => ' btn btn-primary']) !!}
</div>
{!! Form::close() !!}

    @stop