# Nedir ?
Hazırlanan program bir yii2 modülüdür. Basitçe satıcıları ve hangi satıcıda hangi ürünlerin bulunduğunu bilgisini tutmaya yarar.

# Kurulum

Modülü kullanmak için projenizin bulunduğu dizine gidip "composer" aracıyla modülü gerekli paket olarak ekleyin. Bunun için aşağıdaki komutu kullanın.

    composer require emreyelbey/content "dev-main"

Eğer bu adım hatasız şekilde tamamlanmışsa projenizin *vendor* klasörü altında *emreyelbey* adında bir dizin oluşmuş olmalıdır. Bundan sonra modülü backend ya da frontend tarafında kullanmak üzere konfigüre etmeniz gerekir.

    Frontend için: /frontend/config/main.php
    Backend için: /backend/config/main.php

dosyalarındaki gerekli kısmı aşağıdaki parçaya uygun şekilde düzenleyin.

    'modules' => [
	    'blogmodule' =>[
	        'class' => 'emreyelbey\content\Module'
	    ]
    ],

Bu adımdan sonra modülde kullanılacak olan tabloları oluşturmak için projenizin ana dizinine gidip aşağıdaki komutu çalıştırın.

    php yii migrate/up --migrationPath=@vendor/emreyelbey/content/src/migrations

Bu adım da tamamlandıktan sonra modülü kullanmaya başlayabilirsiniz. Kurulum yaptığınız yere göre;

    Frontend için: http://[proje kalsorunuz]frontend/web/index.php?r=content/home/index.php
    Backend için : http://[proje kalsorunuz]backend/web/index.php?r=content/home/index.php

adresleri üzerinden modülü kullanabilirsiniz.

# Ekran Görüntüleri ve Modül Kullanımı

Yukarıdaki linkleri kullanarak modülün ana sayfasına ulaşıp modülü kullanmaya başlayabilirsiniz.
Bu sayfada üzerlerinde sırasıyla "Sellers", "Products" ve "Stocklists" yazan üç adet buton bulunur.

![home](https://user-images.githubusercontent.com/43052610/105200277-b6f5b780-5b50-11eb-8dda-fb6d11734119.PNG)

>  - Sellers Butonu

Bu butona tıkladığınızda veri tabanına kaydedilmiş satıcıların listesi görüntülenir.

![sellersmainpage](https://user-images.githubusercontent.com/43052610/105202800-6764bb00-5b53-11eb-96d2-480bb9e645cb.PNG)

"Create Sellers" butonu aracılığıyla ise bilgilerini girdiğiniz bir satıcıyı veri tabanına kaydedebilirsiniz.

![createseller](https://user-images.githubusercontent.com/43052610/105203031-ac88ed00-5b53-11eb-909f-f52c348ef657.PNG)

>  - Products Butonu

Bu butona tıkladığınızda veri tabanına kaydedilmiş ürünlerin listesi görüntülenir.

![productsmainpage](https://user-images.githubusercontent.com/43052610/105203227-ea861100-5b53-11eb-9e03-75df11a15f51.PNG)

"Create Products" butonu aracılığıyla ise bilgilerini girdiğiniz bir ürünü veri tabanına kaydedebilirsiniz.

![createproduct](https://user-images.githubusercontent.com/43052610/105203488-38027e00-5b54-11eb-85fa-72ad49f7d54b.PNG)

>  - Stocklists Butonu

Bu butona tıkladığınızda veri tabanında kayıtlı satıcıların hangisinde hangi ürünün bulunduğu bilgisi görüntülenir.

![stocklistsmainpage](https://user-images.githubusercontent.com/43052610/105203961-bf4ff180-5b54-11eb-8bcb-69297c58dc77.PNG)

 - "Create Stocklists" butonu aracılığıyla ise satıcı ve ürünler arasında ilişki oluşturabilirsiniz. Bu işlem ilişkilendirdiğiniz ürünün ilişkilendirilen satıcıda stokta bulunduğu anlamına gelir.

![createstocklist](https://user-images.githubusercontent.com/43052610/105204618-6e8cc880-5b55-11eb-8d57-804258ad9422.PNG)
