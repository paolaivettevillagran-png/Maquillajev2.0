<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Éclat Beauty - Galería</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Tailwind -->
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

  <!-- Tu CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body class="bg-[var(--beige)] font-sans">
  <header class="flex justify-between items-center px-6 py-4 bg-[var(--negro)] shadow-md sticky top-0 z-10">
    <h1 class="text-2xl font-bold text-white">Éclat Beauty</h1>
    <nav>
      <ul class="flex space-x-6">
        <li><a href="{{ url('/') }}" class="text-white hover:text-[var(--dorado)] font-medium">Inicio</a></li>
        <li><a href="{{ url('/galeria') }}" class="text-white hover:text-[var(--dorado)] font-medium">Galería</a></li>
        <li><a href="{{ url('/contacto') }}" class="text-white hover:text-[var(--dorado)] font-medium">Contacto</a></li>
        <li><a href="{{ url('/quienessomos') }}" class="text-white hover:text-[var(--dorado)] font-medium">Quiénes Somos</a></li>
      </ul>
    </nav>
  </header>

  <!-- GALERÍA -->
  <section class="py-16 px-8 text-center bg-white">
    <h2 class="text-3xl font-bold mb-6">Nuestra Galería de Maquillaje</h2>
    <p class="max-w-3xl mx-auto text-gray-700 mb-10">
      Explora algunos de nuestros looks de maquillaje de moda. Cada estilo está diseñado con creatividad, precisión y elegancia.
    </p>

    <div class="galeria-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 max-w-6xl mx-auto">
      <div class="galeria-item relative overflow-hidden rounded-lg shadow-lg hover:scale-105 transition-transform duration-300">
        <img src="{{ asset('imagenes/Tendencia1.jpg') }}" alt="Maquillaje 1" class="w-full h-full object-cover img-clickable" />
        <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-center py-2">Look 1</div>
      </div>

      <div class="galeria-item relative overflow-hidden rounded-lg shadow-lg hover:scale-105 transition-transform duration-300">
        <img src="{{ asset('imagenes/Look2.jpg') }}" alt="Maquillaje 2" class="w-full h-full object-cover img-clickable" />
        <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-center py-2">Look 2</div>
      </div>

      <div class="galeria-item relative overflow-hidden rounded-lg shadow-lg hover:scale-105 transition-transform duration-300">
        <img src="{{ asset('imagenes/Tendencia3.jpg') }}" alt="Maquillaje 3" class="w-full h-full object-cover img-clickable" />
        <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-center py-2">Look 3</div>
      </div>

      <div class="galeria-item relative overflow-hidden rounded-lg shadow-lg hover:scale-105 transition-transform duration-300">
        <img src="{{ asset('imagenes/Tendencia4.jpg') }}" alt="Maquillaje 4" class="w-full h-full object-cover img-clickable" />
        <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-center py-2">Look 4</div>
      </div>

      <div class="galeria-item relative overflow-hidden rounded-lg shadow-lg hover:scale-105 transition-transform duration-300">
        <img src="{{ asset('imagenes/Tendencia5.jpg') }}" alt="Maquillaje 5" class="w-full h-full object-cover img-clickable" />
        <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-center py-2">Look 5</div>
      </div>
    </div>
  </section>

  <!-- CATEGORÍAS -->
  <section class="py-12 px-8 text-center bg-white">
    <h3 class="text-3xl font-semibold mb-6">Categorías de Maquillaje</h3>
    <div class="flex flex-wrap justify-center gap-4">
      <button class="categoria-btn px-5 py-3 bg-[var(--dorado)] text-white rounded-full shadow-lg hover:shadow-xl hover:bg-[#b38d52] transition duration-300"
        data-link="https://www.google.com/search?q=maquillaje+natural&udm=2">Natural</button>

      <button class="categoria-btn px-5 py-3 bg-[var(--dorado)] text-white rounded-full shadow-lg hover:shadow-xl hover:bg-[#b38d52] transition duration-300"
        data-link="https://www.google.com/search?q=maquillaje+de+fiesta&udm=2">Fiesta</button>

      <button class="categoria-btn px-5 py-3 bg-[var(--dorado)] text-white rounded-full shadow-lg hover:shadow-xl hover:bg-[#b38d52] transition duration-300"
        data-link="https://www.google.com/search?q=maquillaje+de+editorial&udm=2">Editorial</button>

      <button class="categoria-btn px-5 py-3 bg-[var(--dorado)] text-white rounded-full shadow-lg hover:shadow-xl hover:bg-[#b38d52] transition duration-300"
        data-link="https://www.google.com/search?q=maquillaje+de+noche&udm=2">Noche</button>
    </div>
  </section>

  <!-- MODAL -->
  <div class="modal fade" id="imagenModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-transparent border-0">
        <div class="modal-header border-0 justify-content-center">
          <h5 class="modal-title text-white" id="modalTitulo"></h5>
          <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-2" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <img src="" id="modalImagen" class="w-100 rounded" />
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="bg-[var(--negro)] text-white text-center py-8 mt-10">
    <div>
      <h4 class="font-bold text-lg mb-4">Contacto</h4>
      <p>📍 Calle de la Belleza 123, Lagos de Moreno</p>
      <p>📞 +52 55 1234 5678</p>
      <p>✉️ contacto@eclatbeauty.com</p>
      <p>© 2025 Éclat Beauty. Todos los derechos reservados.</p>
    </div>
  </footer>

  <!-- SCRIPTS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const modalImagen = document.getElementById("modalImagen");
    const modalTitulo = document.getElementById("modalTitulo");
    const modal = new bootstrap.Modal(document.getElementById("imagenModal"));

    document.querySelectorAll(".img-clickable").forEach((img) => {
      img.addEventListener("click", () => {
        modalImagen.src = img.src;
        modalTitulo.textContent = img.alt;
        modal.show();
      });
    });

    document.querySelectorAll(".categoria-btn").forEach((btn) => {
      btn.addEventListener("click", () => {
        const url = btn.getAttribute("data-link");
        window.open(url, "_blank");
      });
    });
  </script>
</body>

</html>