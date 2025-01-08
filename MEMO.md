# sailの起動方法
` bash vendor/bin/sail up -d`

# sailの停止方法
` bash vendor/bin/sail down`

# portに関してのエラーが出たら
docker desktopからstopする

# sail なんたら ってコマンドを打てって言われたら
docker desktopひらいて起動しているコンテナのexecから実行する。 (sail以降のコマンドをうつ)

# コンテナ削除して作り直したとき
docker desktopのコンテナのexecから、php artisan migrate を実行

# PHPMyAdmin
http://localhost:8080
sail
password


# docker execについて
docker ps をして、sail-8.3/appのNAMEをコピーして、
`docker exec -it こぴーしたもの bash`
のようにするとcmdでも行ける

(例)
`docker exec -it b1d55b3d8b93f458c278af79d96e0140b5c20137a9e745ebc24374dd2aa20453-laravel.test-1 bash`