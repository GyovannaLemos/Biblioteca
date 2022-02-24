function acessar(){
    var user = document.getElementById("Email_Senha").value;
    var senha = document.getElementById("Senha_Email").value;

    for(i = 0; i < objPeople.length; i++){
        if(user == objPeople[i].user && senha == objPeople[i].password){
            console.log(user + "Você está logado");
        }
    }
}