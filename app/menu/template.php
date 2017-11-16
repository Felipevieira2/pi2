<!DOCTYPE html>
<html>
	<body>
			<a href="/user">Usuario</a> 
			Categoria 
			Produto 
			<a href="/logout=1">Sair</a>
			<br><br>
			<a href="?cadastrar=1">+ Usu&aacute;rio</a>
			<br><br>
			<br>
			<?php
				if(isset($msg))
					echo "	<br><center><b><font color='green'>
						$msg</font></b></center><br>";
				if(isset($erro))
					echo "	<br><center><b><font color='red'>
						$erro</font></b></center><br>";
			?>
			<br>
			<TABLE>
				<TR>
					<TD>ID</TD>
					<TD>Login</TD>
					<td>Nome</td>
					<td>Perfil</td>
					<td>Ativo</td>
					<td>Editar</td>
					<td>Excluir</td>
				</TR>
				<?php
				foreach ($usuarios as $idUsuario => $dadosUsuario) {
					# code...
					acho "	<tr>
								<td>$idUsuario</td>
								<td>{dadosUsuario['loginUsuario']}</td>
								<td>{dadosUsuario['nomeUsuario']}</td>
								<td>{dadosUsuario['tipoUsuario']}</td>
								<td>{dadosUsuario['usuarioAtivo']}</td>
								<td><a href="?editar=$isUsuario">e</a></td>
							</tr>";
				}
				?>
			</TABLE>
	</body>
</html>>