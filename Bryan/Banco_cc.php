<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Bancario - Conta Corrente </title>
    <link rel="stylesheet" href="estilos_cc.css">
</head>
<body>
    <form name="conta_corrente" method="post" action="conta_corrrente.php">
    <table>
        <caption>Cadrastro da conta corrente</caption>
        <tr>
            <td><label for ="nome"> Nome: </label></td>
            <td><input type="text" name="name" size="40" maxlength = "50" required placeholder="informe o nome do correntista">
        </tr>
<tr>
<td><label for="agencia">Agência:</td>
<td><input type="text" name="agencia" size="22" maxlength="20" required placeholder="Informe o número da Agência"></td>
</tr>  
    <tr>
        <td><label for="banco">Banco : </td>
        <td>
            <select name="banco">
                <option value ="#"></option>
                <option value ="caixa">Caixa Econômica Federal</option>
                <option value ="brasil">Banco do Brasil</option>
                <option value ="mercantil">Banco Mercantil</option>
                <option value ="santander">Banco Santander</option>
                <option value ="bradesco">Banco Bradesco</option>
            </select>
        </td>
    </tr>
<tr>
    <td><label for="conta_corrente">Conta corrente: </label></td>
    <td><input type ="text" name ="conta_corrente" size ="30" maxlenght="25" required placeholder="Informe o numero da conta corrente"></td>
</tr>
<tr>
    <td><label for ="tipo_conta"><strong>Tipo de conta: </strong></label></td>
    <td><input type ="radio" name ="tipo_conta">Conta Comum
        <input type ="radio" name ="tipo_conta">Conta Especial
</td>
</tr>
<tr>
    <td><label for ="data_abertura">Datade abertura: </label></td>
    <td><input type ="date" name ="data_abertura" required></label>
</tr>
<tr>
    <td><label for ="cpf"> CPF : </label></td>
    <td><input type ="text" name ="cpf" required size ="14" maxlength ="14"></td>
</tr>
<tr>
    <td><label for ="saldo_inicial">Saldo inicial</label></td>
    <td><input type ="number" name ="saldo_inicial" value ="0" step ="0.01"></td>
</tr>
<tr>
    <td colspan ="2" align ="center">
        <input type ="submit" value ="cadrastrar" name="cadastrar" class ="botao">   
</form>
</body>


</html>