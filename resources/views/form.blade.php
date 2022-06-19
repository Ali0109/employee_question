@extends('layouts.app')

@section('content')
    <h2 class="text-center">@lang('main.question')</h2>
    <p>{{$user->question->id}}) {{$user->question->$name}}</p>
    <form action="{{route('form_post')}}" method="post">
        @csrf
        <div class="questions d-flex">
            <div class="form-check mx-3">
                <label class="form-check-label" for="var1">
                    {{$user->question->$variant_1}}
                </label>
                <input class="form-check-input" type="radio" name="var" value="1" id="var1">
            </div>
            <div class="form-check mx-3">
                <label class="form-check-label" for="var2">
                    {{$user->question->$variant_2}}
                </label>
                <input class="form-check-input" type="radio" name="var" value="2" id="var2">
            </div>
            <div class="form-check mx-3">
                <label class="form-check-label" for="var3">
                    {{$user->question->$variant_3}}
                </label>
                <input class="form-check-input" type="radio" name="var" value="3" id="var3">
            </div>
        </div>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{--{{$errors->all()}}--}}
                <div class="text-danger">{{ $error }}</div>
            @endforeach
        @endif
        <input type="hidden" name="question_id" value="{{$user->question->id}}">
        <input type="hidden" name="user_id" value="{{$user->id}}">
        <button class="badge btn-success mt-4" type="submit">@lang('main.send')</button>
    </form>
@endsection

