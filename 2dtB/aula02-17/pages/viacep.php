<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>

     <form action="." method="get">
          <label for="">CEP:</label>
          <input name="cep" type="text" id="cep" value="">

     </form>

     <script>
          function limpa_formulário_cep() {
               document.getElementById('log').value = ""
               document.getElementById('bairro').value = ""
               document.getElementById('cid').value = ""
               document.getElementById('uf').value = ""
          }

          function meu_callback(conteudo) {
               if (!("erro" in conteudo)) {
                    document.getElementById('log').value = conteudo.logradouro
                    document.getElementById('bairro').value = conteudo.bairro
                    document.getElementById('cid').value = conteudo.localidade
                    document.getElementById('uf').value = conteudo.uf
               } else {
                    limpa_formulário_cep()
                    alert("CEP não encontrado.")
               }
          }

          function pesquisacep(valor) {
               var cep = valor.replace(/\D/g, '')

               if (cep != "") {
                    var validacep = /^[0-9]{8}$/
                    if (validacep.test(cep)) {
                         document.getElementById('log').value = "..."
                         document.getElementById('bairro').value = "..."
                         document.getElementById('cid').value = "..."
                         document.getElementById('uf').value = "..."

                         var script = document.createElement('script')

                         script.src = "https://viacep.com.br/ws/" + cep + "/json/?callback=meu_callback"

                         document.body.appendChild(script)
                    } else {
                         limpa_formulário_cep()
                         alert("Formato de CEP inválido.")
                    }
               } else {
                    limpa_formulário_cep()
               }
          }
     </script>
</body>

</html>