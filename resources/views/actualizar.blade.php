<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tecnologico de Estudios Superiores Ixtapaluca
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red overflow-hidden shadow-xl sm:rounded-lg">
           
            <title>ACTUALIZA TU INFORMACIÓN</title>    


        
        <br>
        <div class="container">
        <div class="row">
            
            <section class="form-register">
            <h1>ACTUALIZA TU INFORMACION</h1>
            
            
      <form  class="form" id="registro" name="registro" method="POST" action="guarda.php" autocomplete="off">
          
          <hr width=50% color=green>  
             <table class="a">
                 <tr class="col1">
             <th>
                     <div class="col-md-6">
             <label  class="form-label">CURP</label>
             <input type="text" class="form-control" name="curp" id="curp" placeholder="Introduce tu curp" autofocus required>
            </div>
                     </th>
                     <th>
            <div class="col-md-6">
             <label for="nombre" class="form-label">NOMBRE</label>
             <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Introduce tu nombre" required>
            </div>
                     </th>
                     <th>
            <div class="col-md-6">
             <label for="apellidop" class="form-label">APELLIDO PATERNO</label>
             <input type="text" class="form-control" name="apellidop" id="apellidop" placeholder="Introduce tu apellido paterno" required>
            </div>
                     </th>
                     <th>
            <div class="col-md-6">
             <label for="apellidom" class="form-label">APELLIDO MATERNO</label>
             <input type="text" class="form-control" name="apellidom" id="apellidom" placeholder="Introduce tu apellido materno" required>
            </div>
                     </th>
                     <th>
            <div class="col-md-6">
             <label for="edad" class="form-label">EDAD</label>
             <input type="text" class="form-control" name="edad" id="edad" placeholder="Introduce tu edad" required>
             </div>
                     </th>
                 </tr>
                 
                 <h2>DATOS PERSONALES</h2>
             </table>
          <hr width=100%; color= blue>
             
        <table class="b">
            <tr class="col2">
                <th>
             <div class="col-md-6">
             <label for="intitucion" class="form-label">INSTITUCIÓN</label>
             <input type="text" class="form-control" name="institucion" id="institucion" placeholder="Institución" required>
            </div>
                </th>
                
                <th>
             <div class="col-md-6">
             <label for="matricula" class="form-label">MATRICULA</label>
             <input type="text" class="form-control" name="matricula" id="matricula" placeholder="Introduce tu matricula" required>
            </div>
                </th>
                <th>
             <div class="col-md-6">
             <label for="carrera" class="form-label">CARRERA</label>
             <input type="text" class="form-control" name="carrera" id="carrera" placeholder="Carrera" required>
            </div>
                </th>
                <th>
             <div class="col-md-6">
             <label for="semestre" class="form-label">SEMESTRE</label>
             <input type="text" class="form-control" name="semestre" id="semestre" placeholder="Semestre en curso" required>
            </div>
                </th>
            </tr>
            
            <h2>INFORMACION ACADÉMICA</h2>
             </table>
          <hr width=100% color=yellow>
             
             <table class="c">
                 <tr class="col3">
                     
                     <th>
             <div class="col-md-6">
             <label for="calle" class="form-label">CALLE</label>
             <input type="text" class="form-control" name="calle" id=calle placeholder="Calle" required>
            </div>
                     
             <div class="col-md-6">
             <label for="número" class="form-label">NÚMERO</label>
             <input type="text" class="form-control" name="numero" id="numero" placeholder="Número" required>
            </div>
                     </th>
                     <th>
             <div class="col-md-6">
             <label for="colonia" class="form-label">COLONIA</label>
             <input type="text" class="form-control" name="colonia" id="colonia" placeholder="Colonia" required>
            </div>
                     
             <div class="col-md-6">
             <label for="localidad" class="form-label">LOCALIDAD</label>
             <input type="text" class="form-control" name="localidad" id="localidad" placeholder="Localidad" required>
            </div>
                     </th>
                     <th>
             <div class="col-md-6">
             <label for="municipio" class="form-label">MUNICIPIO</label>
             <input type="text" class="form-control" name="municipio" id="municipio" placeholder="Municipio" required>
            </div>
                         
                     
             <div class="col-md-6">
             <label for="estado" class="form-label">ESTADO</label>
                 <select class="controls" type="text" name="estado" placehorder="Estado" required>
                 <option value="1">Cuidad de México</option>
                     <option value="2">Estado de México</option>
                     <option value="3">Guadalajara</option>
                     <option value="4">Monterrey</option>
                     <option value="5">Veracruz</option>
                 </select>
                 <br><br>
            </div>
                     </th>
                     <th>
             <div class="col-md-6">
             <label for="cp" class="form-label">CÓDIGO POSTAL</label>
             <input type="text" class="form-control" name="cp" id="cp" placeholder="Codigo postal" required>
            </div>
                     </th>
                 </tr>
                 
                 <h2>DOMICILIO</h2>
             </table>
          <hr width=100% color=red> 
             <table class="d">
                 <tr class="col4">
                     <th>
             <div class="col-md-6">
             <label for="telefono" class="form-label">TELEFONO</label>
             <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" required>
            </div>
                     </th>
                     <th>
             <div class="col-md-6">
             <label for="correo" class="form-label">CORREO</label>
             <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo" required>
            </div>
                     </th>
                     <th>
             <div class="col-md-6">
             <label for="reds" class="form-label">RED SOCIAL</label>
             <input type="text" class="form-control" name="reds" id="reds" placeholder="Introduce una Red social" required>
            </div>
                     </th>

                 </tr>
                 
                 <h2>INFORMACION DE CONTACTO</h2>
             </table>
          <hr width=100% color=purple>
          <br>
            <div class="col-md-6">
                <input type="submit" value="Guardar"  onclick="Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'informacion actualizada correctamente',
  showConfirmButton: false,
  timer: 3500
})">
            </div>
        </form>
            </section>
    </div>
    </div>
            </div>
        </div>
    </div>
</x-app-layout>