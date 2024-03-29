<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>-->
        <script src="https://kit.fontawesome.com/71f8dcc9b3.js" crossorigin="anonymous"></script>
        <!-- Styles -->
        <!--<style>
           
            html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
           body {
                font-family: 'Nunito', sans-serif;
            }
        </style>-->
            <script>
    </head>
    
    <body>
        <h1 class="text-center p-2">CATALOGO DE PRODUCTOS</h1>  
        @if (session("correcto"))
            <div class="alert alert-success">{{session("correcto")}}</div>
        @endif
        @if (session("incorrecto"))
            <div class="alert alert-danger">{{session("incorrecto")}}</div>
        @endif          
        <div class="modal fade" id="modalRegistrar" tabindex="-1" aria-labelledby="modalRegistrarLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="modalRegistrarLabel">Agregar producto</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('crud.create')}}" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="camporeg1" class="form-label">Código del producto:</label>
                                                    <input type="text" class="form-control" id="camporeg1" name="txtid">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="camporeg2" class="form-label">Nombre del producto:</label>
                                                    <input type="text" class="form-control" id="camporeg2" name="txtnombre">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="camporeg3" class="form-label">Categoría:</label>
                                                    <select name="txtcategoria" class="form-select">
                                                        <option>Informática</option>
                                                        <option>Limpieza</option>
                                                        <option>Muebles</option>
                                                        <option>Iluminación</option>
                                                        <option>Accesorios informática</option>
                                                        <option>Audio</option>
                                                        <option>Energía</option>
                                                        <option>Telefonía</option>
                                                    </select>
                                                    <!--<input type="text" class="form-control" id="campoeg3" name="txtcategoria">-->
                                                </div>
                                                <div class="mb-3">
                                                    <label for="camporeg4" class="form-label">Precio unitario:</label>
                                                    <input type="text" class="form-control" id="camporeg4" name="txtprecio">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-primary">Registrar</button>
                                                </div>
                                            </form>
                                        </div>   
                                    </div>
                                </div>
         </div>
        
        <div class="p-5 table-responsive">
            <button class="btn btn-success btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#modalRegistrar" ><i class="fa-solid fa-plus"></i>&nbspAgregar producto</button>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-primary text-white text-center">
                    <th scope="col">CODIGO</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">CATEGORIA</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @php $cats = array("Informática","Limpieza","Muebles","Iluminación","Accesorios informática","Audio","Energía","Telefonía"); @endphp
                    @foreach ($datos as $item)
                        <tr>
                        <td scope="row">{{$item->id_producto}}</td>
                        <td>{{$item->nombre_producto}}</td>
                        <td>{{$item->categoria}}</td>
                        <td align="right"><b>$</b>&nbsp{{$item->p_venta}}</td>
                        <td class="text-center">
                            <a href="" data-bs-toggle="modal" data-bs-target="#modalEditar{{$item->id_producto}}" class="btn btn-warning btn-sm">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a href="{{route('crud.delete',$item->id_producto)}}" cnclick="ret confirmar()" class="btn btn-danger btn-sm">
                                <i class="fa-solid fa-trash"></i>
                            </a></td>

                            <!-- Modal EDITAR-->
                            <div class="modal fade" id="modalEditar{{$item->id_producto}}" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="modalEditarLabel">Editar registro</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('crud.update')}}" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="campo1" class="form-label">Código del producto:</label>
                                                    <input type="text" class="form-control" id="campo1" name="editid" value="{{$item->id_producto}}" readonly>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="campo2" class="form-label">Nombre del producto:</label>
                                                    <input type="text" class="form-control" id="campo2" name="editnombre" value="{{$item->nombre_producto}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="campo3" class="form-label">Categoría:</label>
                                                    @php
                                                        $cadena="";
                                                        foreach($cats as $catname){
                                                            $sel="";
                                                            if($item->categoria==$catname){$sel=" SELECTED";}
                                                            $cadena.="<option".$sel.">".$catname."</option>";
                                                        }
                                                    @endphp
                                                    <select name="editcategoria" id="campo3" class="form-select">
                                                        @php echo $cadena; @endphp
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="campo4" class="form-label">Precio unitario:</label>
                                                    <input type="text" class="form-control" id="campo4" name="editprecio" value="{{$item->p_venta}}">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
