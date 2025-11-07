<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Éclat Beauty - Contacto</title>

  {{-- Tailwind y Bootstrap --}}
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet" />

  {{-- Archivo de estilos (usa public/css/style.css) --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body class="font-sans bg-[var(--beige)]">
  {{-- HEADER --}}
  <header
    class="flex justify-between items-center px-6 py-4 bg-[var(--negro)] shadow-md sticky top-0 z-10">
    <h1 class="text-2xl font-bold text-white">Éclat Beauty</h1>
    <nav>
      <ul class="flex space-x-6">
        <li>
          <a
            href="{{ url('/') }}"
            class="text-white hover:text-[var(--dorado)] font-medium">Inicio</a>
        </li>
        <li>
          <a
            href="{{ url('/galeria') }}"
            class="text-white hover:text-[var(--dorado)] font-medium">Galería</a>
        </li>
        <li>
          <a
            href="{{ url('/contacto') }}"
            class="text-white hover:text-[var(--dorado)] font-medium">Contacto</a>
        </li>
        <li>
          <a
            href="{{ url('/quienessomos') }}"
            class="text-white hover:text-[var(--dorado)] font-medium">Quiénes Somos</a>
        </li>
      </ul>
    </nav>
  </header>

  {{-- SECCIÓN: Mapa y Horario --}}
  <section class="py-16 px-8 text-center">
    <h2 class="text-3xl font-bold mb-6 text-[var(--negro)]">
      Visítanos en Lagos de Moreno
    </h2>
    <div class="grid md:grid-cols-2 gap-8 items-center max-w-6xl mx-auto">
      <div class="text-left md:text-right px-4">
        <h3 class="text-2xl font-semibold text-[var(--dorado)] mb-3">
          Horario de atención
        </h3>
        <p class="text-gray-800 leading-relaxed">
          Lunes a Viernes: 9:00 AM – 7:00 PM<br />
          Sábados: 10:00 AM – 5:00 PM<br />
          Domingos: Cerrado
        </p>
        <p class="mt-4 text-gray-700 italic">
          📍 Calle de la Belleza 123, Lagos de Moreno, Jalisco
        </p>
      </div>
      <div class="text-center">
        <a
          href="https://www.google.com/maps/place/Lagos+de+Moreno,+Jalisco"
          target="_blank"
          rel="noopener noreferrer">
          <img
            src="{{ asset('imagenes/mapa.png') }}"
            alt="Mapa de Lagos de Moreno"
            class="rounded-lg shadow-lg mx-auto hover:opacity-90 transition duration-300" />
        </a>
        <p class="text-sm text-gray-600 mt-2">
          Haz clic en el mapa para abrirlo en Google Maps
        </p>
      </div>
    </div>
  </section>

  {{-- SECCIÓN: Formulario --}}
  <section class="py-16 px-8 text-center bg-white">
    <h2 class="text-3xl font-bold mb-6">Contáctanos</h2>
    <p class="max-w-3xl mx-auto text-gray-700 mb-8">
      ¿Quieres reservar una sesión o aprender técnicas de maquillaje de moda?
      Déjanos tu mensaje y nos pondremos en contacto contigo.
    </p>

    <form class="max-w-md mx-auto bg-[var(--beige)] p-8 rounded-xl shadow-lg">
      <input
        type="text"
        placeholder="Nombre"
        class="w-full mb-4 p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[var(--dorado)]"
        required />
      <input
        type="text"
        placeholder="Apellido"
        class="w-full mb-4 p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[var(--dorado)]"
        required />
      <input
        type="email"
        placeholder="Correo electrónico"
        class="w-full mb-4 p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[var(--dorado)]"
        required />
      <textarea
        placeholder="Tu mensaje"
        class="w-full mb-4 p-3 h-32 resize-none rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[var(--dorado)]"
        required></textarea>
      <button
        type="submit"
        class="w-full py-3 bg-[var(--dorado)] text-white font-semibold rounded-full shadow-lg hover:bg-[#b38d52] hover:shadow-xl transition duration-300">
        Enviar Mensaje
      </button>
    </form>
  </section>

  {{-- FOOTER --}}
  <footer class="bg-[var(--negro)] text-white text-center py-8 mt-10">
    <div class="max-w-6xl mx-auto">
      <h4 class="font-bold text-lg mb-4">Contacto</h4>
      <p>📍 Calle de la Belleza 123, Lagos de Moreno</p>
      <p>📞 +52 55 1234 5678</p>
      <p>✉️ contacto@eclatbeauty.com</p>
      <p>© 2025 Éclat Beauty. Todos los derechos reservados.</p>
    </div>
  </footer>
</body>

</html>