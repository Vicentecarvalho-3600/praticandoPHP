<h2>Contato</h2>

<form action="./pages/forms/contato.php" method="POST" role="form">
    

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Digite seu email">
    </div>

    <div class="form-group">
        <label for="">Assunto</label>
        <input type="text" class="form-control" name="subjact" placeholder="Digite um assunto">
    </div>

    <div class="form-group">
        <label for="">Mensagem</label>
        <textarea name="message" class="form-control"  cols="30" rows="10"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">enviar</button>
</form>