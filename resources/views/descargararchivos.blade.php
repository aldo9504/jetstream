<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tecnologico de Estudios Superiores Ixtapaluca
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red overflow-hidden shadow-xl sm:rounded-lg">
           <center>
  
                  
    <div class="docs">
      <p style="font-size: 20px">EN ESTA SECCIÓN PADRÁS DESCARGAR TODOS LOS ARCHIVOS NECESARIOS PARA PODER LLEVAR A CABO TU REGISTRO Y ETAPAS POSTERIORES A EL.</p>
    <br>

        <a class="botones" href="{{ asset('descarga/cartac.doc') }}" download="Carta de Presentacion">CARTA DE PRESENTACION</a><br><br>
        <a class="botones" href="{{ asset('descarga/checklist.doc') }}" download="Propuesta de proyecto">PROPUESTA DE PROYECTO</a><br><br>
        <a class="botones" href="{{ asset('descarga/evaluacion.pdf') }}" download="Carta compromiso">CARTA COMPROMISO</a><br><br>
        <a class="botones" href="{{ asset('descarga/informe.doc') }}" download="Informe mensual">REPORTE MENSUAL</a><br><br>
        <a class="botones" href="{{ asset('descarga/proyecto.doc') }}" download="Evaluacion">FORMATO EVALUACION</a><br><br>
        <a class="botones" href="{{ asset('descarga/solicitud.doc') }}" download="Checklist">CHECKLIST</a>

</center>

    </div>
            
            </div>
        </div>
    </div>
</x-app-layout>