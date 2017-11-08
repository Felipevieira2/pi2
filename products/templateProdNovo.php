<!DOCTYPE html>
<html>
    <head>

        <title>Gandalf Store</title>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="..\css\estilo.css"></head>
        <meta charset="utf-8" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <script src="..\js\jquery.tablesorter.min.js"></script>
        <script src="..\js\jquery.tablesorter.pager.js"></script>
        <link rel="stylesheet" href="..\js\custom.css" media="screen"Store
    <body bgcolor="#FFFFFF">
            
        <div id="colorstrip1">
			
        </div>
        <div id="colorstrip2"><div id="menuAdmin">
				<a href="..\users\index.php?menu=users"> <button id="btnUsuario"> Usuario</button></a> 
				<a href="..\cat\index.php?menu=categories"> <button id="btCategoria">Categoria</button></a>
				<a href="..\products\index.php?menu=products"><button  id="btnProduto"> Produto</button></a>
				<a href='#'><button  id="btnConta">   Minha conta</button></a>
				<a href='..\logout.php'><button id="btnSair">Sair</button></a>
			</div>
        </div>

            <div id="content" cellpadding="1000px" cellspacing="4"> 
                
    <form method="post" action="exemplo.html" id="frm-filtro">
      <p>
        <a href="\products\index.php?menu=products&cadastrar=1"> Cadastrar </a>
        <label for="pesquisar">Pesquisar</label>
        <input type="text" id="pesquisar" name="pesquisar" size="30" />
       
      </p>
    </form>
    
    <table cellspacing="0" summary="Tabela de dados do produto">
      <thead>
        <tr>
          <th><input type="checkbox" value="1" id="marcar-todos" name="marcar-todos" /></th>
          <th>ID</th>
          <th>Produto</th>
          <th>Imagem</th>
          <th>Preço</th>
          <th>Ativo</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
         <?php 

                foreach ($produto as $idProduto => $dadosProduto) {
                    $img = base64_encode($dadosProduto['imagem']);
                    // <td style='width:400px;' id='teste'>${dadosProduto["descProduto"]}</td>
                    echo  "<tr>
                          <td> <input type='checkbox' value='${dadosProduto["idProduto"]}' name='marcar[]' /></td>
                          <td>${dadosProduto["idProduto"]}</td>
                          <td>${dadosProduto["nomeProduto"]}</td>
                          "                         
                          . '<td>
                          <img src="data:image/jpeg;base64,'.$img.'" style="width: 150px;"/>
                          </td>'.
                         " <td>${dadosProduto["precProduto"]}</td>";

                          if ($dadosProduto["ativoProduto"] == 1){
                            echo "<td>Ativo</td> </td>"; 
                          }else
                          {
                            echo "<td>Inativo</td></td>";
                          }

                         echo "<td> <a href='#'><img src='../js/edit.png' width='16' height='16' /> </a>
                                    <a href='#'><img src='..\js\delete.png' width='16' height='16' /></a>
                              </td>";                    
                }
            ?>
         
          
        </tr>
        <tr>

        </tr>    
      </tbody>
    </table>
    
    <div id="pager" class="pager">
      <form>
        <span>
          Exibir <select class="pagesize">
              <option selected="selected"  value="10">10</option>
              <option value="20">20</option>
              <option value="30">30</option>
              <option  value="40">40</option>
          </select> registros
        </span>

        <img src="..\js\first.png" class="first"/>
        <img src="..\js\prev.png" class="prev"/>
        <input type="..\js\text" class="pagedisplay"/>
        <img src="..\js\next.png" class="next"/>
        <img src="..\js\last.png" class="last"/>
      </form>
    </div>
    
    <script>
    $(function(){
      
      $('table > tbody > tr:odd').addClass('odd');
      
      $('table > tbody > tr').hover(function(){
        $(this).toggleClass('hover');
      });
      
      $('#marcar-todos').click(function(){
        $('table > tbody > tr > td > :checkbox')
          .attr('checked', $(this).is(':checked'))
          .trigger('change');
      });
      
      $('table > tbody > tr > td > :checkbox').bind('click change', function(){
        var tr = $(this).parent().parent();
        if($(this).is(':checked')) $(tr).addClass('selected');
        else $(tr).removeClass('selected');
      });
      
      $('form').submit(function(e){ e.preventDefault(); });
      
      $('#pesquisar').keydown(function(){
        var encontrou = false;
        var termo = $(this).val().toLowerCase();
        $('table > tbody > tr').each(function(){
          $(this).find('td').each(function(){
            if($(this).text().toLowerCase().indexOf(termo) > -1) encontrou = true;
          });
          if(!encontrou) $(this).hide();
          else $(this).show();
          encontrou = false;
        });
      });
      
      $("table") 
        .tablesorter({
          dateFormat: 'uk',
          headers: {
            0: {
              sorter: false
            },
            5: {
              sorter: false
            }
          }
        }) 
        .tablesorterPager({container: $("#pager")})
        .bind('sortEnd', function(){
          $('table > tbody > tr').removeClass('odd');
          $('table > tbody > tr:odd').addClass('odd');
        });
      
    });
    </script>
            </div>
            <aside>
                <nav>
                	<!--<a href="gandalf_briefing.html">A Empresa</a>-->
                    <img src="../images/Gandalflogo.jpg" style="width: 315px;"/>
                    
                </nav>
			</aside>