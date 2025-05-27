@extends('layout.appLayout')
@section('content')
  @include('components.welcomeComponent')
  @include('components.aboutComponent')
  @include('components.skillComponent')
  @include('components.projectComponent', ['projects' => $projects])
  @include('components.contactComponent')
@endsection