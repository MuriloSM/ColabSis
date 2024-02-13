<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ColabSIS</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <h1>ColabSIS </h1>

    <form action="/salvar-tarefa" method="post">
        @csrf
        <h2>Nova Tarefa</h2>
        <label for="Titulo">Titulo</label>
        <input type="text" name="titulo" required>
        <br>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" rows="4" cols="50"></textarea>
        <br>

        <label for="prazo">Prazo:</label>
        <input type="date" id="prazo" name="prazo" required>

        <br>
        <select name="responsavel">
            <option value="Murilo">Murilo</option>
            <option value="Nick">Nick</option>
            <option value="Rafael">Rafael</option>
            <option value="Thaina">Thaina</option> 
        </select>

        <br>
        <select name="Status">
            <option value="1">Concluido</option>
            <option value="2">Em andamento</option>
            <option value="4">Cancelado</option>
        </select>
        
        <br>

        <button type="submit">Salvar Tarefa</button>

        <br>
      

        
       

       
    
    </form>
    
</body>
</html>