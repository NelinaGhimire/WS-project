<?php ?>
<html>
    <head>
        <link href="<?= base_url('css/style.css')?>" rel="stylesheet">
    </head>
    <body>
    <h1>Hello Students </h1>
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Faculty</th>
        </tr>
        </thead>
        <!--tr>
            <td>1</td>
            <td>Sapana</td>
            <td>Ilam</td>
            <td>BCA</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Rachana</td>
            <td>Jhapa</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Christina Berglund</td>
            <td>Sweden</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Francisco Chang</td>
            <td>Mexico</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Roland Mendel</td>
            <td>Austria</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Helen Bennett</td>
            <td>UK</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Philip Cramer</td>
            <td>Germany</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Yoshi Tannamuri</td>
            <td>Canada</td>
        </tr-->
        <tbody>
            <?php foreach($students as $item){?>
            <tr>
                <td><?php echo $item['Id']?></td>
                <td><?php echo $item['Name']?></td>
                <td><?php echo $item['Address']?></td>
                <td><?php echo $item['Faculty']?></td>
            </tr>
            <?php } ?>
        </tbody>
 
</body>
            
</html>
