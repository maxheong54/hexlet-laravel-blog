@extends('layouts.app')

@section('content')
    <h1>{{ $article->name }}</h1>
    <div>{{ $article->body }}</div>
@endsection


@section('content')
    {{-- BEGIN (write your solution here) --}}
    {{ html()->modelForm($category, 'POST', route('article_categories.store'))->open() }}
        <div>
            {{ html()->input('Title', 'name') }}
            {{ html()->input('text', 'name') }}
        </div>
        <div>
            {{ html()->label('Description', 'description') }}
            {{ html()->input('text', 'description') }}
        </div>
        <div>
            {{ html()->label('State', 'state') }}
            {{ html()->select('state', ['draft' => 'draft', 'published' => 'published']) }}
        </div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <small>{{ $error }}</small>
                <br>
            @endforeach
        @endif
        <div>
            {{ html()->submit('Create') }}
        </div>
    {{ html()->closeModelForm() }}
    {{-- END --}}
@endsection