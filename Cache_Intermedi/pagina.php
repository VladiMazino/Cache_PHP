<html>
<head>
    <title>Página de teste</title>
</head>
<body>
    <?php
    try{
        $pdo = new PDO("mysql:dbname=blog;host=localhost", "root", "");

        $sql = "SELECT * FROM posts ORDER BY RAND()";
        $sql = $pdo->query($sql);
        foreach($sql->fetchAll() as $noticias){
            $cor = rand(0, 999999);
            $len = rand(0, 100);
            ?>
            <div style="width: 250px;float:left;margin:20px;background-color:#999;">
                <strong><?php echo $noticia['titulo']; ?> </strong><br/>
                <?php echo substr($noticia['corpo'], 0, $len); ?>
            </div>
            <?php
        }
    } catch (PDOException $e) {
        print_r($e->getMessage());
    }  

    ?>
</body>
</html>