@extends('layouts.master') 

@section('title', 'Site Officiel TM-LINE GROUP')
@section('description', 'SPÉCIALISÉ DANS LA PÊCHE INDUSTRIELLE & VENTE ET LOCATION ÉQUIPEMENTS LOURDS DES BTP')

@section('content')

@include('about.index')

@include('service.index') 

@include('contact.index')

@endsection


