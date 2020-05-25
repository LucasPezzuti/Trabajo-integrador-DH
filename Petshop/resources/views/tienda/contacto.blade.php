@extends('tienda.master')  {{-- hereda de master --}}

@section('title', 'Contacto') {{-- sobreescribo el valor del titulo --}}

@section('content')
    
	<div class="checkout">
		
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="checkout_container d-flex flex-xxl-row flex-column align-items-start justify-content-start">
							
							<!-- contacto -->
							<div class="billing checkout_box">

									<div class="home_title" style="display: inline-block;padding: 100px; border-radius: 4px; text-decoration: none;">Contactanos<i class="fas fa-id-card"></i></div>
								<br>									
                                <form>
                                        <div class="form-group">
                                          <label for="exampleFormControlInput1">Email</label>
                                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com">
                                        </div>
                                        
                                        <div class="form-group">
                                          <label for="exampleFormControlTextarea1">Texto</label>
                                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                      </form>

							</div>
								
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    
@endsection