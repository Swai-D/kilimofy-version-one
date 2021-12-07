@extends('LayoutBladeFiles.group-account-layout')
@foreach($user as $user)

@section('title')
{{$user->name}}'s Timelines
@endsection

@section('timeline-menu-active', 'active')
@endforeach
