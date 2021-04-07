
    
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center mt-5">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-4" id="titulo">Dados do usuário</h4>

                                    <div class="form-group">
                                    <label class="mb-1"><strong>Nome:</strong></label>
                                        <?php echo $usuarios['nome'] ?>
                                    </div>
                                    <div class="form-group">
                                    <label class="mb-1"><strong>cpf:</strong></label>
                                        <?php echo $usuarios['cpf'] ?>
                                    </div>
                                    <div class="form-group">
                                    <label class="mb-1"><strong>Data de nascimento:</strong></label>
                                        <?php echo $usuarios['data'] ?>
                                    </div>
                                    <label class="mb-4"><strong>Email:</strong></label>
                                        <?php echo $usuarios['email'] ?>
                                    </div>
                                    <div class="form-group">
                                    <label class="mb-1"><strong>Telefone:</strong></label>
                                        <?php echo $usuarios['telefone'] ?>
                                    </div>
                                    <div class="form-group">
                                    <label class="mb-1"><strong>Endereço:</strong></label>
                                        <?php echo $usuarios['endereco'] ?>
                                    </div>
                                    <a class="btn btn-primary" href="/Usuarios/listaUsuariosPage" role="button">Voltar</a>
                                    <a class="btn btn-danger" href="/Usuarios/edit/<?php echo $usuarios['id'] ?>">Editar</a>
                                    <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

