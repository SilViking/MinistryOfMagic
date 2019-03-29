@extends('layout')

@section('content')
    <form action = "{{ route('funcionarios.update', $funcionario) }}" method = "POST">
            @csrf
            @method('PUT')
            <div class = "form-group">
                <h1 id='cadastro_lab'>Edição de funcionário</h1> 
                <h2 id='nome_cad'>Nome</h2>
                <div>
                    <input type = "text" class = "form-control" id="dados_cad_1" name="nome" placeholder = "Digite o nome aqui">
                </div>
                <h2 id='senha_cad'>Senha</h2>
                <div>
                    <input type = "text" class = "form-control" id="dados_cad_2" name="senha" placeholder = "Digite a senha aqui">
                </div>
                <h2 id='end_cad'>Endereço</h2>
                <div>
                    <input type = "text" class = "form-control" id="dados_cad_3" name="endereço" placeholder = "Digite seu endereço aqui">
                </div>
                <h2 id='rub_cad'>RUB</h2>        
                <div>
                    <input type = "text" class = "form-control" id="dados_cad_4" name="rub" placeholder = "Digite o número do seu RUB aqui">
                </div>
                <h2 id ='sex_cad'>Sexo</h2>                    
                <div>
                    <input class="rad_but" id="rad_masc" type="radio" name="sexo" value="masculino">
                    <h2 id="lab_masc">Masculino</h2>
                    <input class="rad_but" id="rad_fem" type="radio" name="sexo" value="feminino">
                    <h2 id="lab_fem">Feminino</h2>
                </div>                
                <h2 id='foto_cad'>Foto
                <input type = "file" class = "form-control-file" id="foto" name="foto">
                </h2>
                <button type="submit" class="btn btn-outline-primary" id="cad_but">Editar</button>
            </div>
    </form>
@endsection        