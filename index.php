<?php 
session_start();
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;700&display=swap" rel="stylesheet">
    <title>Meu Portifolio Eng. Inocêncio</title>
</head>

<body>

    <div class="header">
        <div class="interface">
            <div class="logo">
                <a href="">
                    <!-- <h1>DevCêncio</h1> -->
                    <img src="img/img.png" style="width:150px; margin-top: 5px;" alt="Logo da agencia">
                </a>
            </div><!--Fachando logo-->
            <nav class="menu-desktop">
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>

                    <li>
                        <a href="#especialidades">Especialidades</a>
                    </li>

                    <li>
                        <a href="#sobre">Sobre</a>
                    </li>

                    <li>
                        <a href="#projecto">Projectos</a>
                    </li>
                </ul>
            </nav>
            <div class="btn-contato">
                <a href="#contato">
                    <button>Contato</button>
                </a>
            </div>
            </div>
            <div class="btn-abrir-menu" id="btn-menu">
                <i class="bi bi-list"></i>
            </div>
            <div class="menu-mobile" id="menu-mobile">
                <div class="btn-fechar">
                    <i class="bi bi-x-lg"></i>
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="">Home</a>
                        </li>
    
                        <li>
                            <a href="#especialidades">Especialidades</a>
                        </li>
    
                        <li>
                            <a href="#sobre">Sobre</a>
                        </li>
    
                        <li>
                            <a href="#projecto">Projectos</a>
                        </li>
                        
                        <li>
                            <a href="#contato">Contato</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="overlay-menu" id="overlay-menu">

           

        </div><!--FEchando Interface-->

    </div><!--Header-->
    <main>
        <section class="topo-do-site">
            <div class="interface">
                <div class="flex">
                    <div class="text-topo-site">
                        <h1>Transformando ideias em
                            realidades digital<span>.</span></h1>
                        <p>Criatividade e Inovação andam lado a lado, com uma combinação
                            única de <br>design impactante funcionalidade intuitiva e otmização para <br>resultados
                            estou pronto para criar a presença <br>online dos seus sonhos.
                        </p>

                        <div class="btn-contato">
                            <a href="#contacto"><button>Entre em contato</button></a>
                        </div>
                    </div>
                    <div class="img-topo-site">
                        <img src="img/img5.png" style="width: 200px;" alt="DevCêncio">
                    </div>
                </div>
            </div>
        </section>
        <section class="especialidades" id="especialidades">
            <div class="interface">
                <h2 class="titulo">Minhas <span>Especialidades.</span></h2>
                <div class="flex">
                    <div class="especialidades-box">
                        <i class="bi bi-code-square"></i>
                        <h3>WebSites</h3>
                        <div class="logo2">
                            <img src="img/img8.png" alt="">
                            <img src="img/img7.png" alt="">
                            <img src="img/img14.png" alt="">

                        </div>
                        <div class="logo2" style="margin-top: -50px;">
                            <img src="img/img12.png" alt="">
                            <img src="img/img10.png" alt="">
                            <img src="img/img24.png" alt="">

                        </div>
                    </div>
                    <div class="especialidades-box">
                        <i class="bi bi-cart2"></i>
                        <h3>Loja Online</h3>
                        <p>Com mais de 3 anos de experiência no desenvolvimento web
                            para lojas online, estou dedicado
                            a criar experiência de comércio eletrônico envolventes e funcionais
                            Trabalho pra tranformar conceitos em realidade digital.</p>
                    </div>
                    <div class="especialidades-box">
                        <i class="bi bi-wordpress"></i>
                        <h3>Blog</h3>
                        <p>Com experiência especializada no desenvolvimento de blogs dinâmicos e
                            envolventes, estou empenhado em criar plataformas digitais que contem
                            de forma cativante e inpiradora historias
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="sobre" id="sobre">
            <div class="interface">
            <h2 class="titulo" style="margin-bottom: 60px;">Sobre <span>Mim.</span></h2>
                <div class="flex">
                    <div class="img-sobre">
                        <img src="img/img2.jpg" alt="">
                    </div>
                    <div class="txt-sobre">
                        <h2>Muito Prazer <span>
                                Sou Inocêncio Bumba</span>
                        </h2>

                        <p>Mais do que apenas um programador web. Sou um solucionador de problemas apaixonado,
                            um criador incansável e um colaborador dedicado.
                            Minha jornada no mundo da programação começou com um fascínio por transformar ideias em
                            realidade digital.
                            Ao longo dos anos, aprimorei minhas habilidades,
                            buscando sempre a excelência em cada linha de código que escrevo.</p>
                        <p>O que me diferencia é minha abordagem centrada no cliente. Para mim,
                            não se trata apenas de entregar um produto funcional, mas sim de entender profundamente as
                            necessidades e
                            metas do cliente para criar soluções sob medida que superam as expectativas.</p>
                <div class="sub">
                    <form method="post">
                        <h2 style="text-align:center; font-size:18px">SUBSCREVA</h2>
                        <p style="text-align:center; margin-top: -20px;">Esteja dentro de todas a novidades, fazendo a sua subscrição</p>
                            <input class="enter"  type="email" name="email" placeholder="Digite seu e-mail" required />
                            <div class="btn-enviar">
                        <input type="submit" value="Enviar">
                    </div>                         
                
                </form>
                <?php
                        if (isset($_POST['email']))
                        {
                        $email = addslashes($_POST['email']);

                        if ((!empty($email))) {
                        $cmd = $pdo->prepare("INSERT INTO tb_subscricao (email) VALUES(:e)");
                        $cmd->bindValue(':e', $email);
                        $cmd->execute();

                }
                else
                {
                echo "Preencha";
                }
                }
                ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="portifolio" id="projecto">
            <div class="interface">
                <h2 class="titulo">Meu <span>portifolio.</span></h2>
                <div class="flex">
                    <div class="img-port" style="background-image: url(img/img22.png);">
                        <div class="overlay">
                            Gestor De Tarefas
                        </div>
                    </div>
                    <div class="img-port" style="background-image: url(img/img25.png);">
                        <div class="overlay">
                            Loja virtual vendas online
                        </div>
                    </div>
                    <div class="img-port" style="background-image: url(img/img23.png);">
                        <div class="overlay">
                            Turismo & Cultura
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="formulario" id="contato">
            <div class="interface">
                <h2 class="titulo">Fala <span>Comigo.</span></h2>
                <form method="POST" style="margin-top: 40px;">
                    <input type="text" name="cliente" placeholder="Seu nome" required>
                    <input type="email" name="email" placeholder="Seu email" required>
                    <input type="text" name="telefone" placeholder="Telefone" required>
                    <textarea name="mensagem" placeholder="Mensagem"></textarea>
                    <div class="btn-enviar">
                        <input type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </section>
        <?php
                    if (isset($_POST['cliente']))
                    {
                      $cliente = addslashes($_POST['cliente']);
                      $email = addslashes($_POST['email']);
                      $telefone = addslashes($_POST['telefone']);
                      $mensagem = addslashes($_POST['mensagem']);
                    

                      if ((!empty($cliente)) && (!empty($mensagem))) {
                        $cmd = $pdo->prepare("INSERT INTO tb_Mensagem (cliente, email, telefone, mensagem) VALUES(:n, :e, :t, :m)");
                        $cmd->bindValue(':n', $cliente);
                        $cmd->bindValue(':e', $email);
                        $cmd->bindValue(':t', $telefone);
                        $cmd->bindValue(':m', $mensagem);
                        $cmd->execute();

                        echo "Enviado com sucesso";
                 
                      }
                      else
                      {
                        echo "Preencha";
                      }
                    }
                  ?>
        <main>
            <footer>
                <div class="interface">
                    <div class="line-footer">
                        <div class="flex">
                            <div class="logo-footer">
                                <img src="img/img.png" style="width: 100px;" alt="">
                            </div>
                            <div class="btn-social">
                                <a href=""><button><i class="bi bi-facebook"></i></button></a>
                                <a href=""><button><i class="bi bi-whatsapp"></i></button></a>
                                <a href=""><button><i class="bi bi-instagram"></i></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="line-footer borda">
                        <p><i class="bi bi-envelope"></i><a
                                href="mailto:inocenciobumba2021@gmail.com">inocenciobumba2021@gmail.com</a></p>
                    </div>
                </div>
            </footer>
            <div class="interface">
                <div class="btn-social">
                    <a class="voltar-topo" href="#"><button><i class="bi bi-arrow-up-circle"></i></button></a>
                </div>
            </div>

            <script src="js/min.js"></script>
</body>

</html>