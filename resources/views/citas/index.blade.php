@extends('layouts.master')

@section('title', 'Gestion de Citas - Hospital Isidro Ayora')

@section('content')
    <h1>Gestion de Citas</h1>
    <h2>Crear Nueva Cita</h2>
    <form action="cita_controller.php?action=crear" method="POST">
        <label>Paciente:</label>
        <input type="text" name="paciente" required><br>
        
        <label>Doctor:</label>
        <input type="text" name="medico" required><br>
        
        <label>Fecha:</label>
        <input type="date" name="fecha" required><br>
        
        <label>Hora:</label>
        <input type="time" name="hora" required><br>
        
        <button type="submit">Crear Cita</button>
    </form>

    <h2>Lista de Citas</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Paciente</th>
            <th>Doctor</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Acción</th>
        </tr>
        <tbody>
            
        

        </tbody>
    </table>
@endsection
