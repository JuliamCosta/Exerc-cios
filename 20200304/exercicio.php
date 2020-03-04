<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercicio</title>
        <script>
            function escreve_campos(nome, email, sexo, data_nasc){
                mensagem = "";

                if((nome != "") && (email != "") && (sexo != "") && (data_nasc != "")){
                    mensagem = "Nome: "+nome+" \nEmail: "+email+"\nSexo: "+sexo+"\nData de Nascimento: "+data_nasc+"";   
                    alert(mensagem);
                }
                

                 else {
                    mensagem="Faltam preencher os campos";

                    if(nome == ""){
                        mensagem+= "\n -Nome";
                    }
                    if(email == ""){
                        mensagem+= "\n -Email";
                    }
                    if(sexo == ""){
                        mensagem+= "\n -Sexo" ;
                    }
                    if(data_nasc == ""){
                        mensagem+= "\n -Data de Nascimento";
                    }
                    
                    alert(mensagem);
                }
            }
            
        
        </script>
    </head>
    <body>
        <form name="form">
            <p>
                <label>Nome:</label>
                <input type="text" name="nome"/><br>
            </p>
            <p>
            <label>Email:</label>
            <input type="text" name="email"/><br>
            </p>
            <p>
            <label>Sexo:</label>
            <select name="sexo">
                <option value=""> -- </option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">feminino</option>
            </select>
            <p>
            <label>Data de Nascimento:</label>
            <input type="date" name="data_nasc"/><br>
        </p>
            <input type="button" value="Exibir" onclick="escreve_campos(document.form.nome.value, document.form.email.value, document.form.sexo.value, document.form.data_nasc.value);"/>
        </form>
    </body>
</html>