<form method="POST">
    @csrf

    <label for="name">Nome</label> <br> 
    <input type="text" name="name" placeholder="Digite seu nome"> <br> <br>

    <label for="email">E-mail</label> <br> 
    <input type="email" name="email" placeholder="Digite seu email"> <br> <br>

    <label for="password">Senha</label> <br> 
    <input type="password" name="password" placeholder="Digite sua senha"> <br> <br>

    <label for="password_confirmed">Confirme sua senha</label>  <br> 
    <input type="password" name="password_confirmed" placeholder="Confirme sua senha">  <br> <br>

    <button type="submit">Salvar</button>

</form>