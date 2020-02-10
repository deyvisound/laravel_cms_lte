# CMS com Laravel e Layout AdminLTE
Repositório base, laravel com layout AdminLTE. 

Como o template adminLTE é a opção de muitos desenvolvedores, inclusive a minha, no momento de desenvolver um sistema administrativo, resolvi criar este projeto para agilizar a criação deste tipo de sistema. 

A ideia é ter um CMS(Content management system), feito com Laravel que por sua vez irá gerenciar o layout administrativo AdminLTE. 

## Instalando: 

1. Clona o projeto: 
```bash
git clone https://github.com/deyvisound/laravel_cms_lte.git
```
2. Baixa as dependências: 
```bash 
php composer install 
```
2. Cria .env :
```bash 
cp .env.example .env 
```
3. configura banco de dados no .env
4. Executa migrações: 
```bash 
php artisan migrate --seed 
```
5. Inicia servidor: 
```bash 
 php artisan serve
```

Acesse: http://localhost:8000/

- Login: admin@admin.com
- Senha: admin
