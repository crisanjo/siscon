<h3>Siscon</h3>
Esse projeto contém as seguintes tecnologias: docker + postgres 15 + php 8.3 + apache 2 + redis + template sbadmin2 com boostrap + datatable <br/>
<strong>PRIMEIRO PASSO:</strong><br/>
clonar o projeto<br/>
git clone https://github.com/crisanjo/siscon.git
<br/>
<h4>Mudando de branch</h4>
git checkout dev<br/>

<h4>ENV - copia</h4>
cp .env.example .env<br/>
<strong>Subindo os containes</strong><br/>
docker-compose up --build -d<br/>

<strong>Primeira VEZ</strong><br/>
docker exec siscon-docker.app composer install <br/>
docker exec siscon-docker.app php artisan migrate:fresh <br/>
sudo chmod 777 storage/ -R <br/>
<br/>
**Nesse ponto o sistema já vai está funcionando**
<br/>
<h4>Acessando o container</h4>
docker exec -it siscon-docker.app /bin/bash<br/>
<br/>
<strong>Todos os comando abaixo devem ser executados dentro do container da aplicação</strong><br/>
<br/>
<h6>Gerando a chave do sistema</h6>
docker exec siscon-docker.app php artisan key:generate<br/>
<h6>Execultar as migrações</h6>
docker exec siscon-docker.app php artisan migrate <br/>

<h6>Carregar os dados no banco</h6>
docker exec siscon-docker.app php artisan db:seed<br/>

<h6>Execultar os testes</h6>
docker exec siscon-docker.app php artisan test<br/>

<h6>Acessando</h6><br/>
http://localhost:8989/<br/>
Login: 84212138069 <br/>
Senha: 12345678 <br/>

<h6>Para criar um Model + Controler com metoodos padrões + Migration</h6>
docker exec siscon-docker.app php artisan make:model <Nome do Model> -mcr <br/>

-m, --migration Cria um novo arquivo de migração para o modelo<br/>
-c, --controller Cria um novo controlador para o modelo<br/>
-r, --resource Indica se o controlador gerado deve ser um controlador de recursos<br/>
-f, --factory Cria uma nova fábrica para o modelo<br/>
-s, --seed Cria um novo arquivo semeador para o modelo<br/>

<h6>Para criar um Fabricas</h6>
docker exec siscon-docker.app php artisan make:factory UserFactory<br/>

<h6>Para criar um Seed</h6>
docker exec siscon-docker.app php artisan make:seeder UserSeeder<br/>
docker exec siscon-docker.app php artisan db:seed --class=UserSeeder<br/>

<h6>Para criar um Teste</h6>
docker exec siscon-docker.app php artisan make:test UserTest<br/>

### Configurar upload de arquivos

#### Criar pasta para receber os arquivos
- Na pasta storage/app/public criar a pasta 'midias';
- dar permissão de escrita nesta pasta: chmod -R 777


<br/>
- Cristiano Lima Sobrinho (gerente do projeto)<br/>
- Eduardo Lima Sobrinho (desenvolvedor)<br/>
- Helida Mota Aguiar Lima (desenvolvedor)<br/>
