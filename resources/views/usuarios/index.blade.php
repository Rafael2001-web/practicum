@extends('layouts.master')

@section('title', 'Usuarios - Hospital Isidro Ayora')
 
<!-- Bootstrap CSS -->

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

@section('content')
    <h1>Gestion de Usuarios</h1>
    
    <h2>Crear Nuevo Usuario</h2>
    <form action="UsuarioController.php?action=crear" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>
        
        <label>Email:</label>
        <input type="email" name="email" required><br>
        
        <label>Contraseña:</label>
        <input type="password" name="password" required><br>
        
        <button type="submit">Crear Usuario</button>
    </form>

    <h2>Lista de Usuarios</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acción</th>
        </tr>
        
    </table>

@endsection
