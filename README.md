# Nedir ?
Hazırlanan program bir yii2 modülüdür. Basitçe satıcıları ve hangi satıcıda hangi ürünlerin bulunduğunu bilgisini tutmaya yarar.

# Kurulum

Modülü kullanmak için projenizin bulunduğu dizine gidip "composer" aracıyla modülü gerekli paket olarak ekleyin. Bunun için aşağıdaki komutu kullanın.

    composer require emreyelbey/content "dev-main"

Eğer bu adım hatasız şekilde tamamlanmışsa projenizin *vendor* klasörü altında *emreyelbey* adında bir dizin oluşmuş olmalıdır. Bundan sonra modülü backend ya da frontend tarafında kullanmak üzere konfigüre etmeniz gerekir.

> Frontend için: **/frontend/config/main.php**
> Backend için: **/backend/config/main.php**

dosyalarındaki gerekli kısmı aşağıdaki parçaya uygun şekilde düzenleyin.

    'modules' => [
	    'blogmodule' =>[
	        'class' => 'emreyelbey\content\Module'
	    ]
    ],

Bu adımdan sonra modülde kullanılacak olan tabloları oluşturmak için projenizin ana dizinine gidip aşağıdaki komutu çalıştırın.

    php yii migrate/up --migrationPath=@vendor/emreyelbey/content/src/migrations

Bu adım da tamamlandıktan sonra modülü kullanmaya başlayabilirsiniz. Kurulum yaptığınız yere göre;

    Frontend için: http://...frontend/web/index.php?r=content/home/index.php
    Backend için : http://...backend/web/index.php?r=content/home/index.php

adresleri üzerinden modülü kullanabilirsiniz.
