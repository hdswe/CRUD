@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

                @foreach($notes as $note)
            <div class="body">
                <div class="panel-heading">
                    <a href="#" class="btn btn-warning">comment</a>
                    @if(Auth::user()->id ==$note->user_id )
                        <a href="/update={{$note->id}}" class="btn btn-primary">update</a>
                        <a href="/delete={{$note->id}}" class="btn btn-danger">delete</a>
                        <br />
                    @endif

                </div>

                <div class="panel-body">
                    <div >


                            {{$note->title}}
                            </br >
                            {{$note->body}}
                    </div>
                </div>
            </div>
                    <div class="input comment">
                        @foreach($comments as $Comment)
                            <div class="commentpadding">
                                <h4>

                                    {{ $Comment->content }}
                                    {{--{{  dd( \App\User::post()) }}--}}
                                    <a role="button" href="deleteComment={{ $Comment->id }}" >delete</a>


                                </h4>
                            </div>
                        @endforeach
                    </div>
            {!!   Form::open(['url' => 'comment='.$note->id]) !!}
        <!-- Form input -->
            <div class="form-group input" >
                {!! Form::text('content',null,['class'=>'form-control']) !!}
            </div>

            <!-- submit input -->
            <div class="form-group input">
                <input type="hidden" name="note_id" value={{$note->id}}>
                {!! Form::submit('comment',['class'=>'btn btn-primary ']) !!}
            </div>
            {!! Form::close() !!}
                @endforeach

        </div>


    </div>
</div>
@endsection
