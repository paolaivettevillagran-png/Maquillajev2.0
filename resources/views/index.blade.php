<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Éclat Beauty - Inicio</title>

  <!-- Bootstrap -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet" />

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            beige: '#f9f5f0',
            negro: '#1a1a1a',
            dorado: '#d4af37',
          }
        }
      }
    }
  </script>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body class="font-sans bg-[var(--beige)]">
  <!-- HEADER -->
  <header
    class="flex justify-between items-center px-6 py-4 bg-[var(--negro)] shadow-md sticky top-0 z-10">
    <h1 class="text-2xl font-bold text-white">Éclat Beauty</h1>
    <nav>
      <ul class="flex space-x-6">
        <li>
          <a href="{{ url('/') }}"
            class="text-white hover:text-[var(--dorado)] font-medium">Inicio</a>
        </li>
        <li>
          <a href="{{ url('/galeria') }}"
            class="text-white hover:text-[var(--dorado)] font-medium">Galería</a>
        </li>
        <li>
          <a href="{{ url('/contacto') }}"
            class="text-white hover:text-[var(--dorado)] font-medium">Contacto</a>
        </li>
        <li>
          <a href="{{ url('/quienessomos') }}"
            class="text-white hover:text-[var(--dorado)] font-medium">Quiénes Somos</a>
        </li>
      </ul>
    </nav>
  </header>
  <section class="relative h-[500px] overflow-hidden">
    <div
      class="absolute inset-0 hero-slide opacity-1 bg-[url('{{ asset('imagenes/Imagenh.jpg') }}')] bg-cover bg-center transition-opacity duration-1000"></div>
    <div
      class="absolute inset-0 hero-slide opacity-1 bg-[url('{{ asset('imagenes/Hero2.jpg') }}')] bg-cover bg-center transition-opacity duration-1000"></div>
    <div
      class="absolute inset-0 hero-slide opacity-1 bg-[url('{{ asset('imagenes/ImagenR.jpg') }}')] bg-cover bg-center transition-opacity duration-1000"></div>

    <div
      class="absolute inset-0 flex flex-col justify-center items-center text-center text-white bg-black/50 p-8">
      <h2 class="text-4xl font-bold mb-4">
        Arte y Moda en Maquillaje Profesional
      </h2>
      <p class="max-w-xl mx-auto mb-6">
        Descubre los últimos estilos de maquillaje de moda y transforma tu
        look con nuestros expertos.
      </p>
      <a href="{{ url('/galeria') }}"
        class="boton-dorado px-6 py-3 rounded-full bg-[var(--dorado)] text-white font-semibold shadow-lg hover:bg-[#b38d52] transition duration-300">Ver Galería</a>
    </div>
  </section>

  <!-- Script del carrusel -->
  <script>
    const slides = document.querySelectorAll(".hero-slide");
    let current = 0;
    setInterval(() => {
      slides[current].style.opacity = 0;
      current = (current + 1) % slides.length;
      slides[current].style.opacity = 1;
    }, 5000);
  </script>

  <!-- SECCIÓN DE MAQUILLAJE -->
  <section class="py-16 px-8 text-center bg-white">
    <h3 class="text-3xl font-semibold mb-6">Lo Más Reciente en Maquillaje</h3>
    <p class="max-w-4xl mx-auto text-gray-700 mb-10">
      Conoce las tendencias actuales en maquillaje profesional: colores
      vibrantes, técnicas modernas de contouring, looks para pasarela y
      sesiones fotográficas, y los productos más innovadores del mercado.
    </p>
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <img src="{{ asset('imagenes/Imagen1.jpg') }}" alt="Tendencia 1"
        class="hover-zoom w-full h-64 object-cover rounded-lg shadow-lg transition duration-300" />
      <img src="{{ asset('imagenes/Estudio.jpg') }}" alt="Tendencia 2"
        class="hover-zoom w-full h-64 object-cover rounded-lg shadow-lg transition duration-300" />
      <img src="{{ asset('imagenes/maq.jpg') }}" alt="Tendencia 3"
        class="hover-zoom w-full h-64 object-cover rounded-lg shadow-lg transition duration-300" />
    </div>
  </section>

  <!-- PROMOCIONES -->
  <section class="py-16 px-8 text-center bg-[var(--beige)]">
    <h3 class="text-3xl font-semibold mb-8">Promociones Especiales</h3>
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="card p-6 bg-white rounded-xl shadow-lg">
        <img src="{{ asset('imagenes/Maquillajep.jpg') }}" alt="Promo 1"
          class="w-full h-64 object-cover mb-4 rounded-lg" />
        <h4 class="font-bold text-xl mb-2">50% en Maquillaje de Pasarela</h4>
        <p>Aprovecha nuestra promoción especial para desfiles y sesiones de moda este mes.</p>
      </div>

      <div class="card p-6 bg-white rounded-xl shadow-lg">
        <img src="{{ asset('imagenes/fotigrafia1.jpg') }}" alt="Promo 2"
          class="w-full h-64 object-cover mb-4 rounded-lg" />
        <h4 class="font-bold text-xl mb-2">Sesión Fotográfica + Look Creativo</h4>
        <p>Reserva ahora y obtén un maquillaje profesional completo con 20% de descuento.</p>
      </div>

      <div class="card p-6 bg-white rounded-xl shadow-lg">
        <img src="{{ asset('imagenes/Asesoria.jpg') }}" alt="Promo 3"
          class="w-full h-64 object-cover mb-4 rounded-lg" />
        <h4 class="font-bold text-xl mb-2">Asesoría de Imagen</h4>
        <p>Promoción de lanzamiento: Coaching personalizado de maquillaje y estilo a precio especial.</p>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-[var(--negro)] text-white text-center py-8 mt-10">
    <div class="max-w-6xl mx-auto">
      <h4 class="font-bold text-lg mb-4">Contacto</h4>
      <p>📍 Calle de la Belleza 123, Lagos de Moreno</p>
      <p>📞 +52 55 1234 5678</p>
      <p>✉️ contacto@eclatbeauty.com</p>
      <p>© 2025 Éclat Beauty. Todos los derechos reservados.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>