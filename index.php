<html>
    <head></head>
    <body>
        <p>
            <?php 
            
            $files=scandir('pages');
            unset($files[0],$files[1]);
            if(isset($_GET['page'])&& in_array("{$_GET['file']}.txt",$files))
                echo "<h3> Contents of pages/{$_GET['file']}.txt'</h3>";
               include("pages/{$_GET['page']}");
                ?>
        </p>
       
    </body>
</html>
