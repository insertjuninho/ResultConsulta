<?php
    include 'phpconectamysql.php';
    $buscarConteudo = $con->prepare("SELECT * from conteudo WHERE imobiliariaID = 99901 ");
    $buscarConteudo->execute();
?>


<html>
<?php 

    while ($c = $buscarConteudo->fetch(PDO::FETCH_OBJ)){
        $id = $c->imobiliariaID;
        $titulo = $c->Titulo;
    }
?>
    <ul>
      <li><a href="#">Util</a><?=$id?></a>
        <ul>
          <li><a href="#">Sites Úteis</a></li>
            <li><a href="#">Sobre o Site Midas Personalizado</a><?=$id?>
        <ul>
        <li><a href="#">Dicionario Imobiliario </a><?=$id?>
            <ul>
            <li><a href="#">Depoimentos</a> <?=$id?>
                <ul>
                    <li><a href="#">Ultimo Nivel</a><?=$id?></li>
                </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Sobre Nos</a>
    <ul>
        <li><a href="#">Onde Estamos</a> <?=$id?></li>
        <li><a href="#">Quem Somos</a><?=$id?></li>
        <li><a href="#">Parceiros</a><?=$id?></li>
        <li><a href="#">Onde Estamos</a><?=$id?></li>
        <li><a href="#">Onde Estamos</a><?=$id?></li>
    </ul>
   </li>
   <li><a href="#">Financiamento</a>
        <ul>
            <li><a href="#">Dicas Financiamento</a><?=$id?></li>
            <li><a href="#">Documentos Necessarios</a><?=$id?></li>
            <li><a href="#">Financeiras</a><?=$id?></li>
        </ul>
   </li>
   <li><a href="#">Contato</a>
   <ul>
        <li><a href="#">Curriculo</a><?=$id?></li>
        <li><a href="#">Sugestoes</a><?=$id?></li>
        <li><a href="#">Fale COnosco</a><?=$id?></li>
        </ul>
   </li>
   <li><a href="#">VEnda seu imóvel</a><?=$id?></li>
   <li><a href="#">Compre seu imovel</a><?=$id?></li>
   <li><a href="#">Onde estamos</a><?=$id?></li>
</html>