
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="Modelo para demais projetos web estatico.">
  <meta name="keywords" content="projeto web, Modelo, padrao">
  <meta name="author" content="Valeria De Souza Teixeira">

  <title>Projeto 1 - Modelos</title>
  <!--comentario-->
  <link rel="stylesheet" href="./css/style.css">
</head>


<body>

  <header>
    <div class="container">

        <div id="marca">
            <h1><span class="Sublinhar">Modelo</span> Projeto 1</h1>
        </div>

        <nav>
            <ul>
              <li class="atual"><a href="index.html">Home</a></li>
              <li><a href="sobre.html">Sobre</a></li>
              <li><a href="servicos.html">Serviços</a></li>
            </ul>
        </nav>

    </div>
  </header>

  <section id="showcase">
    <div class="container">
        <h1>Págna estática</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet nunc at velit sagittis tincidunt.</p>
    </div>
  </section>

  <section id=newsletter>
    <div class="container">
      <h1>Inscreva-se para receber notícias</h1>
     <form>
       <input type="email" placeholder="Insira seu E-mail">
       <button type="submit" class="button">Inscrever</button>
     </form>
    </div>
  </section>

  <section id="sessao1">
      <div class="container">

        <div class="item">
          <img src=".\img\1.png" alt="Logo Item 1">
          <h3>Item 1</h3>
          <p> Duis finibus dignissim augue, non volutpat sapien dignissim sit amet. Fusce elementum bibendum velit a porttitor. Suspendisse potenti. Donec iaculis ex et ipsum vehicula, eu mattis est aliquam.</p>
        </div>

        <div class="item">
          <img src=".\img\2.png" alt="Logo Item 1">
          <h3>Item 2</h3>
          <p> Duis finibus dignissim augue, non volutpat sapien dignissim sit amet. Fusce elementum bibendum velit a porttitor. Suspendisse potenti. Donec iaculis ex et ipsum vehicula, eu mattis est aliquam.</p>
        </div>

        <div class="item">
          <img src=".\img\3.png" alt="Logo Item 1">
          <h3>Item 3</h3>
          <p> Duis finibus dignissim augue, non volutpat sapien dignissim sit amet. Fusce elementum bibendum velit a porttitor. Suspendisse potenti. Donec iaculis ex et ipsum vehicula, eu mattis est aliquam.</p>
        </div>
      </div>
  </section>

  <footer>
    <div class="container">

      <div id="infoprincipal">
        <p>Modelo - Projeto 1 / Cnpj: 0002.0009.0009-90 / Endereço Rua Lorem ipsum dolor, 102 - Rio Grande do Sul - 93089-000</p>
      </div>

      <div class="infoSecundaria">
        <div class="coluna", id=coluna1>
          <ul>
            <li><a href="sobre.html">Quem somos</a></li>
            <li><a href="servicos.html">Serviços</a></li>
            <li>Localização</li> <!--Enviar para sobre sessão do mapa-->
            <li>Formas de Pagamento</li> <!--Criar pagina para formas de pagamento-->
          </ul>
        </div>

        <div class="coluna", id="colunaSocial">
          <ul>
            <li><img src=".\img\fixo.png" alt="Telefone Fixo">(51)3748-9087 / (51)3748-4098<li>
            <li><img src=".\img\Whatsapp.png" alt="Whatsapp">(51)99748-2345</li>
            <li><img src=".\img\Facebook.png" alt="Facebook">facebok.com/modeloprojetos</li>
            <li><img src=".\img\email.png" alt="E-mail">E-mail</li>
          </ul>
        </div>
      </div>

      <div id="Copyright">
          <p>Designed by Valeria De Souza Teixeira | Copyright &copy; 2018</p>
      </div>
    </div>

  </footer>

</body>

</html>
