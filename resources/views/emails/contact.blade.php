@component('mail::message')

# Nuevo mensaje recibido desde el formulario de contacto

**Asunto:**

{{ $title }}

**Mensaje enviado por el usuario:**

{{ $messageText }}

@endcomponent