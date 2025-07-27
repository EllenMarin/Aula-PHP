---> Persistencia em ficheiro
 - Cookies = guarda ficheiros no browser, com tamanho maximo de 4kb, até 30/50 cookies no maximo
 - Session = ficheiros no servidor

Persistencia em ficheiros
 - armazenar dados entre ececuções sem recorrer a bases de dados (ex. logs de atividade, dados temporarios de utilizadores, configurações (JSON, INI, XML))

--
$ficheiro = fopen("dados.txt", "r"); //leitura
modos
r - leitura
w - escrita apaga o conteudo existente
a - escrita no final do ficheiro (append)
x - criação de ficheiro
r+ - leitura e escrita
w+ - leitura e escrita (apaga o conteudo existente)
a+ - leitura e escrita (append)

--- array de linhas
$linhas= file("dados.txt");
foreach($linhas as $linha){
    echo htmlspecialchars($linha);
}

-- conteudo total de um ficheiro de uma vez só
file_get_contents("dados.txt");

-- escrever num ficheiro 
$fh = fopen("dados.txt", "a");
fwrite($fh, "novo conteudo\n" .date("Y-m-d H:i:s") . "\n");
fclose($fh);

-- ou 
file_put_contents("dados.txt", "novo conteudo\n", FILE_APPEND );  

-- bloqueia o ficheiro para escrita
flock($fh, LOCK_EX); 


-- Serializar dados para guardar estruturas complexas
serialize() / unserialize() 
json_enconde() / json_decode()

-- Gestao de ficheiros e diretorios
unlink //apaga ficheiros
mkdir("meu_dir); //cria diretorio
rmdir("meu_dir"); //remove diretorio

file_exist
filesize
filemtime (data de criação)
pathinfo (nome e extensao do ficheiro)
basename (ultimo path)
dirname (ultimo dir)
globs (ficheiros)
scandir (tudo, incluindo diretorios)

is_dir
is_file


---> POO