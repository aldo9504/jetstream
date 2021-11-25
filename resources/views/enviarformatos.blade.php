<x-app-layout>
   <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-700 leading-tight">
       Tecnologico de Estudios Superiores Ixtapaluca
        </h2>
        
       

    </x-slot>
    <!-- component -->
  

   
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red overflow-hidden shadow-xl sm:rounded-lg">
              
            <center>
   
   
                 
             <h1 style="font-size: 20px; color:red" >¡VERIFICA TU ARCHIVO ANTES DE SUBIRLO!.</h1>
       
            <form method="post" action="" enctype="multipart/form-data">
                <table>
                   
                    <tr>
                        <td colspan="2"><input type="file" id="documento" name="archivo"></td>
                    </tr>       
                    <tr>
                        <td><input type="submit" class="btns" value="subir" name="subir"></td>
                        <embed id="vistaPre" type="application/pdf" width="350px" height="350px" class="sm:px-7 lg:px-9">
                    </tr>
                </table>
            </form>            
</center>
<br>

</div>
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> 



                  </div>
            </div>
        </div>
    </div>
    
<script src="{{ asset('js/vista.js') }}"></script>
</x-app-layout>

<!-- Required font awesome -->
<link
  rel="stylesheet"
  href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
/>

<footer class="text-white body-font">
  <div
    class="
      container
      px-5
      py-24
      mx-auto
      flex
      md:items-center
      lg:items-start
      md:flex-row md:flex-nowrap
      flex-wrap flex-col
      bg-black
    "
  >
    <div
      class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left text-white"
    >
      <a
        href=""
        class="
          flex
          title-font
          font-medium
          items-center
          md:justify-start
          justify-center
          text-gray-900
        "
      >
      <i class="fas fa-tv fa-lg text-purple-500"></i>
        
        <span class="ml-3 text-xl text-white">Tecnologico de Estudios Superiores Ixtapaluca</span>
      </a>
      <p class="mt-2 text-sm text-white">
      Secretaría de Educación Pública
Km. 7 de la carretera Ixtapaluca-Coatepec s/n San Juan, Distrito de Coatepec, Ixtapaluca, Estado de México C.P.56580
( 55 ) 13148150
      </p>
    </div>
    <div
      class="
        flex-grow flex flex-wrap
        md:pl-20
        -mb-10
        md:mt-0
        mt-10
        md:text-left
        text-center
      "
    >
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2
          class="
            title-font
            font-medium
            text-gray-900
            tracking-widest
            text-sm
            mb-3
          "
        >
        <i class="fas fa-globe"></i>
          ACERCA DEL SITIO
        </h2>
        <nav class="list-none mb-10">
          <li>
            <a href="" class="text-gray-600 hover:text-gray-800"
              >AVISOS LEGALES</a
            >
          </li>
         
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2
          class="
            title-font
            font-medium
            text-gray-900
            tracking-widest
            text-sm
            mb-3
          "
        >
        <i class="fas fa-envelope"></i>
          CONTACTO
        </h2>
        <nav class="list-none mb-10">
          <li>
            <a href="" class="text-gray-600 hover:text-gray-800"
              >residenciasprof@tesi.edu.mx</a
            >
          
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2
          class="
            title-font
            font-medium
            text-gray-900
            tracking-widest
            text-sm
            mb-3
          "
        >
          CATEGORIES
        </h2>
        <nav class="list-none mb-10">
          <li>
            <a href="" class="text-gray-600 hover:text-gray-800"
              >First Link</a
            >
          </li>
          <li>
            <a href="" class="text-gray-600 hover:text-gray-800"
              >Second Link</a
            >
          </li>
          <li>
            <a href="" class="text-gray-600 hover:text-gray-800"
              >Third Link</a
            >
          </li>
          <li>
            <a href="" class="text-gray-600 hover:text-gray-800"
              >Fourth Link</a
            >
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2
          class="
            title-font
            font-medium
            text-gray-900
            tracking-widest
            text-sm
            mb-3
          "
        >
          CATEGORIES
        </h2>
        <nav class="list-none mb-10">
          <li>
            <a href="" class="text-gray-600 hover:text-gray-800"
              >First Link</a
            >
          </li>
          <li>
            <a href="" class="text-gray-600 hover:text-gray-800"
              >Second Link</a
            >
          </li>
          <li>
            <a href="" class="text-gray-600 hover:text-gray-800"
              >Third Link</a
            >
          </li>
          <li>
            <a href="" class="text-gray-600 hover:text-gray-800"
              >Fourth Link</a
            >
          </li>
        </nav>
      </div>
    </div>
  </div>
  <div class="bg-gray-100">
    <div
      class="
        container
        mx-auto
        py-4
        px-5
        flex flex-wrap flex-col
        sm:flex-row
      "
    >
      <p class="text-gray-500 text-sm text-center sm:text-left">
        © 2021 Copyright:
        <a
          href="https://www.tailwind-elements.com/"
          class="text-gray-600 ml-1"
          target="_blank"
          >Tecnologico de Estudios Superiores Ixtapaluca</a
        >
      </p>
      <span
        class="
          inline-flex
          sm:ml-auto sm:mt-0
          mt-2
          justify-center
          sm:justify-start
        "
      >
        <a href="" class="text-gray-500">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="ml-3 text-gray-500">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="ml-3 text-gray-500">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="" class="ml-3 text-gray-500">
          <i class="fab fa-youtube"></i>
        </a>
        <a href="" class="ml-3 text-gray-500">
          <i class="fab fa-instagram"></i>
        </a>
      </span>
    </div>
  </div>
</footer>
