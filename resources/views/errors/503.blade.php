@extends('errors::illustrated-layout')

@section('title', __('Servidor fuera de servicio'))
@section('code', '503')
@section('message', __($exception->getMessage() ?: 'Servidor fuera de servicio'))
