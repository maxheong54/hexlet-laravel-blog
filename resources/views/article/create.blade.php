@extends('layouts.app')

@section('header')
    Creating a new artile
@endsection

@section('content')
    {{ html()->modelForm($article, 'POST', route('articles.store'))->open() }}
        <div>
            {{ html()->label('Title', 'name') }}
            {{ html()->input('text', 'name') }}
        </div>
        <div>
            {{ html()->label('Content', 'body') }}
            {{ html()->input('textarea', 'body') }}
        </div>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            {{ html()->submit('Create') }}
        </div>
    {{ html()->closeModelForm() }}
@endsection