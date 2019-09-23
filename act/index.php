<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <div>
            <form action="tarea.php" method="post">
                <label for="DIA">Dia:*
                    <input type="number" name="dia" id="DIA" min="1" max="31" >
                </label>
                <br/>
                <label for="MES">Mes:*
                    <select name="mes" id="MES">
                        <option value="enero">enero</option>
                        <option value="febrero">febrero</option>
                        <option value="marzo">marzo</option>
                        <option value="abril">abril</option>
                        <option value="mayo">mayo</option>
                        <option value="junio">junio</option>
                        <option value="julio">julio</option>
                        <option value="agosto">agosto</option>
                        <option value="septiembre">setiembre</option>
                        <option value="octubre">octubre</option>
                        <option value="noviembre">noviembre</option>
                        <option value="diciembre">diciembre</option>
                    </select>
                </label>
                <br/>
                <input type="submit" value="Calcular">
            </form>
        </div>
    </section>
    
</body>
</html>