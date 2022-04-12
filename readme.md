Sistema de Cadastro

Intuito do aplicação é ser utilizado como um sistema de cadastro
de funcionários, junto a seus equipamentos(desktop,notebook,etc),
a principio foi criado como uma forma de colocar em prática os estudos
do meu curso da faculdade em Sistemas para internet, pensando no padrão
cliente-servidor, assim como meus cursos a parte em PHP com banco de dados(SQL).

As tecnologias utilizadas no projeto até o momento são :

*Front-end : HTML,CSS,BootStrap,Javascript,JQuery
*Back-end : PHP, MySql


De inicio a aplicação é utilizada de maneira local, podendo futuramente ser utilizada
de forma remota via browser, porém para isso será ainda necessário trabalhar toda a parte de segurança do projeto!

O banco de dados ainda está em processo de modelagem, então a parte de back-end no PHP ainda está em construção!

Sobre o banco, os seguintes campos vão ser unicos :
*CPF
*Telefone
*E-mail


<h4>Versões</h4>
0.1
-Adicionado função em JQuery, para habilitar o formulário de cadastro de equipamentos com base na seleção do radio button!
-Adicionado função em JS, para habilitar os inputs dos equipamentos com base na seleção dos checkbox!
-Adicionado função em JQuery nos botões de cadastrar e pesquisa, para carregamento dos formulários na index!

0.2
-Adicionado a verificação de CPF já cadastrado do usuário, sendo esse campo unico! As verificações de e-mail e telefone estão em desenvolvimento!
-Adicionado botão de link direto para whatsapp web na pagina lista.php responsavel por trazer os dados buscados, o botão foi adicionado ao lado do
telefone do funcionário!