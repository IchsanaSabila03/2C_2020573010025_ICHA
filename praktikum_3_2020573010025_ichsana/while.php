<html> 
    <body>
        <?php
            echo "<H3> Cara 1 </H3>";
            $i = 1;
            while ($i <=10)
            {
            print $i++;
            }
            echo "<br>";
            echo "<H3> cara 2 </H3>";
            $i = 1;
            while ($i <= 10):
            print $i;
            $i++;
            endwhile;
        ?>
    </body>
</html>