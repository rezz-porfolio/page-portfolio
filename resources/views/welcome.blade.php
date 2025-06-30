@extends('layout.appLayout')
@section('content')
  @include('components.welcomeComponent', ['texts' => $texts])
  @include('components.aboutComponent', ['texts' => $texts])
  @include('components.skillComponent')
  @include('components.projectComponent', ['projects' => $projects])
  @include('components.contactComponent')
@endsection