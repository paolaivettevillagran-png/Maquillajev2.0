<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Éclat Beauty - Quiénes Somos</title>

  {{-- Tailwind y Bootstrap --}}
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet" />

  {{-- Archivo CSS local --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body class="bg-[var(--beige)] font-sans">
  {{-- HEADER --}}
  <header
    class="flex justify-between items-center px-6 py-4 bg-[var(--negro)] shadow-md sticky top-0 z-10">
    <h1 class="text-2xl font-bold text-white">Éclat Beauty</h1>
    <nav>
      <ul class="flex space-x-6">
        <li>
          <a href="{{ url('/') }}" class="text-white hover:text-[var(--dorado)] font-medium">Inicio</a>
        </li>
        <li>
          <a href="{{ url('/galeria') }}" class="text-white hover:text-[var(--dorado)] font-medium">Galería</a>
        </li>
        <li>
          <a href="{{ url('/contacto') }}" class="text-white hover:text-[var(--dorado)] font-medium">Contacto</a>
        </li>
        <li>
          <a href="{{ url('/quienessomos') }}" class="text-white hover:text-[var(--dorado)] font-medium">Quiénes Somos</a>
        </li>
      </ul>
    </nav>
  </header>

  {{-- SECCIÓN QUIÉNES SOMOS --}}
  <section class="py-16 px-8 text-center bg-white">
    <h2 class="text-4xl font-bold mb-6">Quiénes Somos</h2>
    <p class="max-w-3xl mx-auto text-gray-700 mb-10">
      En Éclat Beauty nos apasiona realzar la belleza de cada persona a través
      de técnicas profesionales de maquillaje y tendencias de moda. Nuestro
      equipo está conformado por expertos que buscan siempre ofrecer
      experiencias únicas y resultados impecables.
    </p>
    <img
      src="{{ asset('imagenes/Agencia1.jpg') }}"
      alt="Quiénes Somos"
      class="w-full h-auto rounded-lg" />
  </section>

  {{-- MISIÓN Y VISIÓN --}}
  <section class="py-16 px-8 bg-gray-100 text-center">
    <h3 class="text-3xl font-bold mb-12">Misión y Visión</h3>
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <h4 class="text-xl font-semibold mb-4">Misión</h4>
        <p class="text-gray-700">
          Ofrecer servicios de maquillaje de alta calidad que realcen la
          belleza individual de cada cliente, combinando creatividad,
          profesionalismo y tendencias de moda para brindar experiencias
          inolvidables.
        </p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <h4 class="text-xl font-semibold mb-4">Visión</h4>
        <p class="text-gray-700">
          Ser la empresa líder en servicios de maquillaje y estética en la
          región, reconocida por la innovación, excelencia y la satisfacción
          total de nuestros clientes.
        </p>
      </div>
    </div>
  </section>

  {{-- TESTIMONIOS --}}
  <section class="py-16 px-8 bg-white text-center">
    <h3 class="text-3xl font-bold mb-12">3 Testimonios de Personas</h3>
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
        <img
          src="{{ asset('imagenes/modelo1.jpg') }}"
          alt="Cliente 1"
          class="w-24 h-24 mx-auto rounded-full mb-4" />
        <h4 class="text-xl font-semibold mb-2">Ana G.</h4>
        <p class="text-gray-700">
          "El maquillaje que me hicieron fue espectacular. Me sentí hermosa y
          segura durante todo el evento."
        </p>
      </div>
      <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
        <img
          src="{{ asset('imagenes/modelo2.jpg') }}"
          alt="Cliente 2"
          class="w-24 h-24 mx-auto rounded-full mb-4" />
        <h4 class="text-xl font-semibold mb-2">María L.</h4>
        <p class="text-gray-700">
          "Profesionales y muy atentos. Me encantó cómo supieron resaltar mis
          rasgos sin exagerar."
        </p>
      </div>
      <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
        <img
          src="{{ asset('imagenes/modelo3.jpg') }}"
          alt="Cliente 3"
          class="w-24 h-24 mx-auto rounded-full mb-4" />
        <h4 class="text-xl font-semibold mb-2">Sofía R.</h4>
        <p class="text-gray-700">
          "La experiencia en Éclat Beauty fue increíble. La atención y el
          resultado final superaron mis expectativas."
        </p>
      </div>
    </div>
  </section>

  {{-- FOOTER --}}
  <footer class="bg-[var(--negro)] text-white text-center py-8 mt-10">
    <div>
      <h4 class="font-bold text-lg mb-4">Contacto</h4>
      <p>📍 Calle de la Belleza 123, Lagos de Moreno</p>
      <p>📞 +52 55 1234 5678</p>
      <p>✉️ contacto@eclatbeauty.com</p>
      <p>© 2025 Éclat Beauty. Todos los derechos reservados.</p>
    </div>
  </footer>

  {{-- Bootstrap JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>