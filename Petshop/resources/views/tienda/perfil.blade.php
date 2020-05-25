@extends('tienda.master')  {{-- hereda de master --}}

@section('title', 'Contacto') {{-- sobreescribo el valor del titulo --}}

@section('content')
    
<!-- Checkout -->

<div class="checkout">
		
    <div class="section_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="checkout_container d-flex flex-xxl-row flex-column align-items-start justify-content-start">
                        
                        <!-- PERFIL -->
                    
                        <div class="container" style="padding-top:100px;">
                            <div class="row">
                            

                            </div>
                              
                            <div class="home_title">Perfil de usuario</div>
                            <br>
                            <br>
                         
                                <div class="panel panel-info">
                                  <div class="panel-heading">
                                  </div>
                                  <div class="panel-body">
                                    <div class="row">
                                    
                                
                                      <div class=" col-md-9 col-lg-9 "> 
                                      
                                      <table class="table table-user-information">
                                          <tbody>
                                            <tr>
                                              <td><b>Nombre:</b></td>
                                              <td>{{ $user[0]->nombre }}</td>
                                            </tr>
                                            <tr>
                                              <td><b>Apellido:</b></td>
                                              <td>{{ $user[0]->apellido }}</td>
                                            </tr>
                                              <tr>
                                              <td><b>Email:</b></td>
                                              <td>{{ $user[0]->email }}</td>
                                            </tr>
                                           
                                          </tbody>
                                        </table>
                                        
                                        <a href="{{ url($user[0]->id.'/perfil_edit')}}" class="btn btn-primary">Editar perfil</a>
                                        {{-- <a href="#" class="btn btn-primary">Guardar</a> --}}
                                      </div>
                                    </div>
                                  </div>
                                       
                                  
                                </div>
                              </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection