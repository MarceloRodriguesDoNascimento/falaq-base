<<<<<<< HEAD
```sh
git clone https://github.com/nato-re/falaq-base.git
cd falaq-base
=======
# FalaQ - Projeto Laravel base para a 3ª Etapa

Rode os comandos a baixo no terminal na sua pasta de documentos para clonar e configurar o repositório
```sh
#git clone https://github.com/nato-re/falaq-base.git
#cd falaq-base
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
composer install
npm install
npm run build
cp .env.example .env
php artisan key:generate
<<<<<<< HEAD
php artisan migrate

```
=======
php artisan migrate:fresh --seed
```
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
