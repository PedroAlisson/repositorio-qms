@extends('layout.layout-operador')

@section('conteudo')

	{{-- <h3 class="page-title">Cadastro de pacientes</h3> --}}
	<div class="row">
		<div class="col-md-12">
			<!-- PANEL HEADLINE -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Cadastro de pacientes</h3>
					<p class="panel-subtitle">(*) Campos obrigatórios</p>
				</div>
				<div class="panel-body">
					<div class="row">
						<hr>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h4>Nome do paciente:*</h4><input class="form-control" type="text" name="" value="" placeholder="Nome completo">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<h4>Sexo:*</h4>
							<select class="form-control">
								<option value="cheese">Selecione</option>
								<option value="tomatoes">Masculino</option>
								<option value="mozarella">Feminino</option>
							</select>
						</div>
						<div class="col-md-4">
							<h4>Data de nascimento:*</h4><input class="form-control" type="date" name="" value="">
						</div>
						<div class="col-md-4">
								<h4>Número do CNS:*</h4><input class="form-control" type="number" name="" value="" placeholder="Nome completo">
						</div>
					</div>
					{{-- isso só deve aparecer se o paciente for menor de 18 anos --}}
					{{-- <div class="row">
						<div class="col-md-12">
							<h4>Responsável pelo paciente:</h4><input class="form-control" type="text" name="" value="" placeholder="Nome completo">
						</div>
					</div> --}}
					<div class="row">
						<hr>
					</div>
					<div class="row">
						<div class="col-md-8">
							<h4>Rua:*</h4>
							<input type="text" name="rua" placeholder="Teste" class="form-control">
						</div>
						<div class="col-md-4">
							<h4>Número:*</h4>
							<input type="text" name="rua" placeholder="Teste" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h4>Complemento:</h4>
							<input type="text" name="rua" placeholder="Teste" class="form-control">
						</div>
						<div class="col-md-6">
							<h4>Bairro:*</h4>
							<input type="text" name="rua" placeholder="Teste" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h4>Cidade:*</h4>
							<input type="text" name="rua" placeholder="Teste" class="form-control">
						</div>
						<div class="col-md-4">
							<h4>Estado:*</h4>
							<input type="text" name="rua" placeholder="Teste" class="form-control">
						</div>
					</div>
					<div class="row">
						<hr>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h4>Telefone Principal:*</h4>
							<input type="text" name="rua" placeholder="Teste" class="form-control">
						</div>
						<div class="col-md-6">
							<h4>Telefone Adicional:*</h4>
							<input type="text" name="rua" placeholder="Teste" class="form-control">
						</div>
					</div>
					<div class="row">
						<hr>
					</div>
					<div class="row">
						<div class="col-md-3">
							<button type="button" class="btn btn-success"><i class="lnr lnr-checkmark-circle"></i> Cadastrar</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END PANEL HEADLINE -->
		</div>

	</div>

@endsection
