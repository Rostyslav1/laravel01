@extends('admin.admin-index')

@section('title', 'Додати запис');

@section('content')
    {!! Form::open(['route' => 'admin-panel.store']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Заголовок') }}
            {{ Form::text('title', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('slug', 'Слаг') }}
            {{ Form::text('slug', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('category_id', 'ID категорії') }}
            {{ Form::text('category_id', 0, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('content', 'Контент') }}
            {{ Form::textarea('content', null, ['class' => 'form-control']) }}
        </div>
        {{ Form::submit('Опублікувати', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection