
<!DOCTYPE html>
<html>
       
    <body>
    	<a href="/menu">Voltar</a>
        <b>Usuario</b>
        Categoria
        Produto
        <a href="/?logout=1">Sair</a>
        <br><br>

        <form method="post">
            login: <input type="text" name="loginUsuario"><br>
            senha: <input type="password" name="senhaUsuario"><br>
            nome: <input type="text" name="nomeUsuario"><br>
            perfil: <select name="perfilUsuario">
                        <option value="">Escolha</option>
                        <option value="A">Administrador</option>
                        <option value="C">Colaborador</option>
                    </select><br>
            Ativo: <input type="checkbox" name="usuarioAtivo"><br><br>
            <input type="submit" value="Gravar" name="btnGravar">
                
        </form>
    </body>
</html>