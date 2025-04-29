
---

---

# Eloquent ORM en Laravel

---

## Introducción

- Representación de tablas como clases PHP.
- Filas de tabla como instancias de clases.
- Uso de Eloquent ORM integrado en Laravel.

---

## ¿Qué es un ORM? | ¿Qué es Eloquent?

- **ORM**: Mapeo Objeto-Relacional.
- Permite operar con bases de datos mediante objetos.
- **Eloquent**: ORM de Laravel, operaciones CRUD sencillas.

---

## Configuración de la Base de Datos

Configurar el archivo `.env`:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_base
DB_USERNAME=usuario
DB_PASSWORD=contraseña
```

---

## Crear un Modelo

Crear el modelo `Post`:

```bash
php artisan make:model Post
```

Laravel asume que la tabla será `posts`. Para especificar otro nombre:

```php
protected $table = 'nombre_tabla';
```

---

## Migraciones

- Definen la estructura de tablas.
- Crear migración:

```bash
php artisan make:migration create_posts_table
```

- Aplicar migraciones:

```bash
php artisan migrate
```

---

## Operaciones Básicas con Eloquent

- **Crear**: `save()` o `create()`
- **Leer**: `all()`, `find()`, `where()`
- **Actualizar**: `save()`, `update()`
- **Eliminar**: `delete()`, `destroy()`

---

## Crear Registros

**Usando objetos:**

```php
$post = new Post();
$post->title = 'Primer Post';
$post->content = 'Contenido';
$post->save();
```

**Asignación masiva:**

```php
Post::create([
    'title' => 'Segundo Post',
    'content' => 'Contenido'
]);
```

---

## Leer Registros

**Obtener todos:**

```php
Post::all();
```

**Buscar por ID:**

```php
Post::find(1);
```

**Buscar con condiciones:**

```php
Post::where('title', 'Primer Post')->first();
```

---

## Actualizar y Eliminar Registros

**Actualizar:**

```php
$post = Post::find(1);
$post->title = 'Nuevo Título';
$post->save();
```

**Eliminar:**

```php
Post::destroy(1);
```

---

## Relaciones entre Modelos

- **Uno a Muchos**: User y Posts.
- Un `User` tiene muchos `Posts`.
- Un `Post` pertenece a un `User`.

---

## Definir Relaciones

**User.php**

```php
public function posts()
{
    return $this->hasMany(Post::class);
}
```

**Post.php**

```php
public function user()
{
    return $this->belongsTo(User::class);
}
```

---

## Uso de Relaciones

**Obtener posts de un usuario:**

```php
$user->posts;
```

**Obtener usuario de un post:**

```php
$post->user;
```

---

## Ejemplo: Categorías

- Crear modelo y migración:

```bash
php artisan make:model Category -m
```

- Definir relaciones: Un `Post` pertenece a una `Category`.

---

## Relaciones Category - Post

**Post.php**

```php
public function category()
{
    return $this->belongsTo(Category::class);
}
```

**Category.php**

```php
public function posts()
{
    return $this->hasMany(Post::class);
}
```

---

## Crear Datos de Prueba

**Crear una categoría:**

```php
Category::create(['name' => 'Noticias']);
```

**Asociar un post:**

```php
$post = new Post([...]);
$category->posts()->save($post);
```

---

## Conclusión

- Representar tablas como modelos.
- Usar Eloquent para CRUD.
- Definir relaciones entre modelos.

**Consejo final:** *Comprender el flujo de Eloquent antes que memorizar códigos.*

---

# ¡Gracias!
