<!DOCTYPE html> 
<html lang="uk"> 
<head> 
<meta charset="utf-8"> 
<meta name="viewport" initial-scale=1"> content="width=device-width, 'Лабораторний <title>@yield('title', практикум')</title> </head> 
<body> 
<nav> <a href="{{ url('/') }}">Головна</a> <a href="{{ url('/about') }}">Про застосунок</a> <a href="{{ url('/contact') }}">Контакти</a> </nav> 
<main> @yield('content') </main> 
<footer> &copy; {{ date('Y') }} КПІ ім. Ігоря Сікорського </footer> 
</body> 
</html> 
