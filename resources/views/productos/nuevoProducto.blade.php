@extends('plantilla')
@section('contenido')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">FORMULARIO NUEVO REGISTRO</h4>
            </div>
            <div class="card-body">
                <form id="" method="post">
                    <div class="col-lg-3">
                        <label>SELECCIONAR CATEGORIA</label>
                        <div class="form-group">
                            <select name="categoria_id" id="" class="form-control" required>
                                <option></option>
                            </select>
                        </div>
                    </div>

                  <div class="col-lg-3">
                        <label>IMAGEN</label>
                        <div class="form-group">
                            <input type="file" name="imagen" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <label>NOMBRE PRODUCTO</label>
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control" required>
                        </div>
                    </div>
                     
                     <div class="col-lg-6">
                        <label>DESCRIPCION PRODUCTO</label>
                        <div class="form-group">
                            <input type="text" name="descripcion" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <label>STOCK</label>
                        <div class="form-group">
                            <input type="text" name="stock" class="form-control" required>
                        </div>
                    </div>

                     <div class="col-lg-3">
                        <label>ITEM</label>
                        <div class="form-group">
                            <input type="text" name="item" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-lg-12">
                       <button type="submit" class="btn btn-primary btn-lg">GUARDAR DATOS</button>

                       <a href="" class="btn btn-primary btn-lg">SALIR</a>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
          
</div>

@endsection

