@extends('tienda.master')  {{-- hereda de master --}}

@section('title', 'Contacto') {{-- sobreescribo el valor del titulo --}}

@section('content')


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
                                            {!! Form::open(['url' => $user->id.'/perfil_edit']) !!}
                                              <td><b>Nombre:</b></td>
                                              <td> {!! Form::text('nombre', $user->nombre, ['class' => 'form-control']) !!}</td>
                                            </tr>
                                            <tr>
                                              <td><b>Apellido:</b></td>
                                              <td>{!! Form::text('apellido', $user->apellido, ['class' => 'form-control']) !!}</td>
                                            </tr>
                                              <tr>
                                              <td><b>Email:</b></td>
                                              <td>{!! Form::text('email', $user->email, ['class' => 'form-control']) !!}</td>
                                            </tr>
                                           
                                          </tbody>
                                        </table>
                                        
                                        {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                                        {!! Form::close() !!}
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