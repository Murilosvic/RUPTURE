const form = document.getElementById("formCadastro");
console.log(form);

form.addEventListener("submit", async (event) => {
event.preventDefault();
alert("Úsuário Registrado!");

const nome = document.getElementById("yourname").value;
const email = document.getElementById("youremail").value;
const senha = document.getElementById("yoursenha").value;

try {
const response = await fetch("http://localhost/RUPTURE/Controller/cadastro.php", {

method: "POST",

headers: {
    "Content-Type": "application/json"
    //Infoma ao servidor que esta mandando dados em formato JSON
    //Sem isso o backend pode não entender os dados
},
    body: JSON.stringify({
    nome,
    email,
    senha
    //converte o objeto JS em uma string JSON
    //é isso que o back end recebe no @requestBody

    })
});

const data = await response.json();
//converte a resposta do servidor em um objeto JS
//converte de JSON para obsjeto JavaScript

if (response.ok) {
    alert("Cadastro realizado com sucesso!");
    console.log(data);

} else {
    alert(data.mensagem || "Erro ao realizar cadastro");
}

}  catch (error) {
    console.error("Erro na requisição", error);
    alert("Erro de conexão com o servidor");
    }

});

