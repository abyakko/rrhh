@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 style="text-align: center; background: linear-gradient(to right, #000000, #000000); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: bold; font-size: 36px; animation: jump 0.5s infinite alternate;">
    Principal</h1>
@stop

@section('content')
<div class="custom-bg">
    <p class="custom-text">Dirección de Talento Humano G.A.M.E.A.</p>
</div>
@stop


@section('css')
<link rel="stylesheet" href="css/menu.css">
<style>
    .sidebar-dark-primary {
        background: #052530 !important;
    }

    @keyframes jump {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0);
        }
    }

    .custom-bg {
        background: linear-gradient(to right, #FFA500, #0000FF);
        background-attachment: fixed;
        background-size: 200% 200%;
        animation: gradient 5s ease infinite;
        text-align: center;
    }

    .custom-text {
        font-size: 24px;
        font-weight: bold;
        color: white;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }
</style>

@stop

@section('js')
<script>
    console.log('Hyyi!');
</script>
@stop