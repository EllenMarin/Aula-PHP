--> 
//inializar servidor php => php -S localhost:8080

--> se a requisição vier via post(pelo formulario) é executado, caso contrario é "morta" a operacao
if($_SERVER['REQUEST_METHOD']!== 'POST'){
    //codigo de resposta
}

--> redirecionamento no http fazem no headers
header("Location : index.php?total=$total");