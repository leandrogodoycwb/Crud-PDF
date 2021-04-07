<div class="container h-100">
    <div class="row justify-content-center h-100 align-items-center mt-5">
        <div class="col-md-6">
            <div class="authincation-content">
                <div class="row no-gutters">
                    <div class="col-xl-12">
                        <div class="auth-form">
                            <h4 class="text-center mb-4" id="titulo">Cadastrar usuário</h4>
                            <form action="/Usuarios/insere" method="POST">
                                <div class="form-group">
                                    <label class="mb-1"><strong>NOME</strong></label>
                                    <input type="text" class="form-control" required title="Digite seu nome" name="nome" placeholder="seu nome" id="nome" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" value="<?php echo isset($nome) ? $nome : '' ?>">
                                </div>
                                <div class="form-group">
                                    <label class="mb-1"><strong>CPF</strong></label>
                                    <input type="text" class="form-control" id="RegraValida" required placeholder="cpf" name="cpf" id="cpf" onkeyup="cpfCheck(this)" maxlength="18" onkeydown="javascript: fMasc( this, mCPF );" value="<?php echo isset($cpf) ? $cpf : '' ?>">
                                    <span id="cpfResponse"></span>
                                </div>
                                <div class="form-group">
                                    <label class="mb-1"><strong>DATA DE NASCIMENTO</strong></label>
                                    <input type="date" class="form-control" required placeholder="data de nascimento" name="data" id="data" value="<?php echo isset($data) ? $data : '' ?>">
                                </div>
                                <div class="form-group">
                                    <label class="mb-1"><strong>EMAIL</strong></label>
                                    <input type="email" class="form-control" required placeholder="seu email" name="email" id="email" value="<?php echo isset($email) ? $email : '' ?>">
                                </div>
                                <div class="form-group">
                                    <label class="mb-1"><strong>TELEFONE</strong></label>
                                    <input type="tel" class="form-control" required placeholder="seu telefone" name="telefone" id="telefone" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="<?php echo isset($telefone) ? $telefone : '' ?>">
                                </div>
                                <div class="form-group">
                                    <label class="mb-1"><strong>ENDEREÇO</strong></label>
                                    <input type="text" class="form-control" required placeholder="endereço" name="endereco" id="endereco" value="<?php echo isset($endereco) ? $endereco : '' ?>">
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-block validation">Cadastrar</button>
                                    <a href="/Usuarios/listaUsuariosPage" class="btn btn-danger btn-block mb-5">Voltar</a>
                                </div>
                                <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>