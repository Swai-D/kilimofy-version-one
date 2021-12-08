@extends('LayoutBladeFiles.app-layout')
@section('title','Nyumbani')
@section('menu-status-newsfeed','active')

@section('mini-user-forum-active')
 style="fill:yellow "
@endsection

@section('discription-title','Karibu Amigo !')
@section('discription-details','Welcome to kilimofy')
@include('LayoutBladeFiles.content-layout')
@include('LayoutBladeFiles.content-details-layout')
