{{print_r($errors)}}

<form method="POST" action="/contato">
    @csrf
        <input type="text" name="nome" placeholder="Nome" class="borda-preta">
        <br>
        <input type="text" name="telefone" placeholder="Telefone" class="borda-preta">
        <br>
        <input type="text" name="email" placeholder="E-mail" class="borda-preta">
        <br>
        <select class="borda-preta" name="motivo_contato">
            <option value="">Qual o motivo do contato?</option>
            <option value="1">Dúvida</option>
            <option value="2">Elogio</option>
            <option value="3">Reclamação</option>
        </select>
        <br>
        <textarea class="borda-preta" name="mensagem" onfocus="this.value = ''" onblur="this.value = 'Digite aqui sua mensagem...'">Preencha aqui a sua mensagem</textarea>
        <br>
        <button type="submit" class="borda-preta">ENVIAR</button>
    </form>