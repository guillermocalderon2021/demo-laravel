# Blade: Motor de Plantillas de Laravel

---

# Introducción a Blade

- Blade es el motor de plantillas de Laravel.
- Permite integrar PHP en vistas de forma elegante.
- Soporta herencia de plantillas y componentes.

---

# Características Principales

- Sintaxis sencilla y limpia.
- Extensión de plantillas.
- Inclusión de sub-vistas.
- Componentes y slots.
- Control de flujo (if, for, foreach).

---

# Sintaxis Básica

```blade
<h1>{{ \$titulo }}</h1>
<p>{{ \$contenido }}</p>
```

- `{{ }}` Escapa HTML.
- `{!! !!}` No escapa HTML.

---

# Condicionales

```blade
@if (count(\$posts) > 0)
    <p>Tienes posts.</p>
@else
    <p>No tienes posts.</p>
@endif
```

---

# Bucles

```blade
@foreach (\$posts as \$post)
    <h2>{{ \$post->title }}</h2>
@endforeach
```

---

# Extender Plantillas

- Crear plantilla base:

```blade
<!-- resources/views/layouts/app.blade.php -->
<html>
    <body>
        @yield('content')
    </body>
</html>
```

---

# Secciones

- Usar plantilla base:

```blade
@extends('layouts.app')

@section('content')
    <h1>Bienvenido</h1>
@endsection
```

---

# Incluir Sub-vistas

```blade
@include('partials.header')
```

- Reutilización de fragmentos de código.

---

# Componentes

- Crear un componente:

```blade
<!-- resources/views/components/alert.blade.php -->
<div class="alert">
    {{ \$slot }}
</div>
```

- Usarlo:

```blade
<x-alert>
    Este es un mensaje de alerta.
</x-alert>
```

---

# Slots con Nombre

```blade
<x-card>
    <x-slot name="header">
        Título del Card
    </x-slot>

    Contenido del card.
</x-card>
```

---

# Comentarios en Blade

```blade
{{-- Esto es un comentario en Blade --}}
```

---

# Consejos Finales

- Mantén las vistas simples.
- Usa componentes para código repetitivo.
- Separa lógica compleja en controladores.

---

# ¡Gracias!

- Aprende practicando.
- Consulta la documentación oficial de Laravel.
