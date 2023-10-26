<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once('class/noticias.php');

        $obj_noticias = new noticia();
        $noticias = $obj_noticia->consultar_noticias();


        $nfilas=count($noticias);

        if($nfilas > 0){
            print('');

            foreach($noticias as $resultado){
                print('');

                if($resultado['imagen']!=""){
                    print("<TD><A TARGET='_blank' HREF='img/".$resultado['imagen']."'><IMG BORDER='0' SRC='img/iconotexto.gif'></A></TD>\n");
                }
                else{
                    print('<TD>&nbs;</TD>\n');
                }
                print('</TR>\n');
            }
            print('</TABLE>\n');
        }
        else{
        print('No hay noticias disponibles');
        }
    ?>
</body>
</html>