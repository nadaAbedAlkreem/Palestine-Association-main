<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>Association</title>

  @include('webApplication.assets.css')

  </head>
  <body>

  @include('webApplication.components.header')


  @yield('web_content')

  @include('webApplication.components.footer')

  @include('webApplication.assets.js')
  </body>
  </html>

