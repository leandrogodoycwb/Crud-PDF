<script>
        function confirma(){
            if (!confirm("Deseja excluir?")) {
                return false;
            }

            return true;
        }
</script>


<table class="table table-striped">
  <thead>
    <form action="/Usuarios/pesquisar" method="POST">
      <div class="mb-3 mb-md-4 align-items-start mt-2"  style="width: 331px;">	
        <div class="input-group search-area ml-auto d-inline-flex mr-3">
          <input type="text" class="search form-control" name="pesquisar" required placeholder="Digite o nome do usuário cadastrado">
          <div class="input-group-append">
            <button type="submit" class="input-group-text">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </form>
    <tr>
      <th scope="col">id</th>
      <th scope="col"></th>
      <th scope="col">nome</th>
      <th scope="col">cpf</th>
      <th scope="col">data nascimento</th>
      <th scope="col">email</th>
      <th scope="col">telefone</th>
      <th scope="col">endereço</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($usuarios as $usuarios_item) : ?>
        <tr>
            
              <th scope="row"><?php echo $usuarios_item['id'] ?></th>
              <td><a style="color: black;" href="<?php echo "/Usuarios/infoUsuario/".$usuarios_item['id'] ?>">Visualizar dados</a></td>
              <td><?php echo $usuarios_item['nome'] ?></td>
              <td><?php echo $usuarios_item['cpf'] ?></td>
              <td><?php echo $usuarios_item['data'] ?></td>
              <td><?php echo $usuarios_item['email'] ?></td>
              <td><?php echo $usuarios_item['telefone'] ?></td>
              <td><?php echo $usuarios_item['endereco'] ?></td>
            

            <td>
              <a href="/Usuarios/telaCadastro/">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
              </a>
            </td>

            <td>
              <a href="/Usuarios/edit/<?php echo $usuarios_item['id'] ?>">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="../../www.w3.org/2000/svg.html">
                    <path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </td>

            <td>
              <a href="/Usuarios/delete/<?php echo $usuarios_item['id'] ?>" onclick="return confirma()">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="../../www.w3.org/2000/svg.html">
                    <path d="M3 6H5H21" stroke="#F46B68" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#F46B68" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </td>

        </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php echo $pager->links('default', 'boostrap_pagination') ?> 