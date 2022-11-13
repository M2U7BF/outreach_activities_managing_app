@extends('base-layout')

@section('title', 'メインページ | 情報資産一元管理アプリ')
@section('description', 'Github、Twitter、Qiitaなど分散した情報資産を一元管理するアプリケーション。')
@include('head')

@section('content')

    @foreach ($section_names as $section_name)
        <label for="section-of-service-{{ $loop->index }}">
            <input type="radio" name="section-of-service" id="section-of-service-{{ $loop->index }}">
            {{ $section_name }}
        </label>
    @endforeach


    @foreach ($activity_summaries as $activity_summary)
        <div>
            <h2>{{ $activity_summary->getTitle() }}</h2>
            <dl>
                <dt></dt>
                @foreach ($activity_summary->getParamaters() as $paramater)
                @endforeach
                <dd></dd>
            </dl>
        </div>
    @endforeach

@endsection
