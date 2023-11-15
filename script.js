const acionaSubmit = (event) => {
    //É importante impedir que o evento recarregue a página antes de finalizar a requisição
    event.preventDefault(); 


    //Capturando os dados do form
    const nome = document.querySelector('input[name=nome]').value;
    const CPF = document.querySelector('input[name=CPF]').value;
    const Idade = document.querySelector('input[name=Idade]').value;
    const email = document.querySelector('input[name=email]').value;
    const telefone = document.querySelector('input[name=telefone]').value;
    const Estado = document.querySelector('input[name=telefone]').value;
    const Cidade = document.querySelector('input[name=telefone]').value;


    //Aqui é feita a chamada a API (substituindo o action)
    //Para isso é preciso passar alguns parâmetros de confuguração:
    //Especificar o método: POST, formata os dados para o formato JSON - função JSON.stringify)
    fetch("https://api.sheetmonkey.io/form/pFPgzsiwN4bkFzdEUoLA3a", {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
        },
        //Dados que serão enviados para o Google Sheet - Excel online
        body: JSON.stringify({nome,CPF,Idade, email, telefone, Estado, Cidade}),
    });
}


//Precisamos 'capturar' o formulário, ou seja, selecioná-lo e adicionar um evento de submit 
//Quando o evento de submit do form for disparado, será executada a função acionaSubmit
document.querySelector('form').addEventListener('submit', acionaSubmit);



