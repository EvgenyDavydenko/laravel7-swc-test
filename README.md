## Тестовое задание на вакансию Backend developer.

1.  Initial setup
2.  Отредактировал модель и миграцию "коробочной" сущности `User`. Создал модель, миграцию и фабрику для сущности `Event`: `php artisan make:model Models/Event --migration --factory`; `php artisan migrate`; `php artisan db:seed`
3.  Создал ресурсный контроллер для модели событий: `php artisan make:controller Api/EventController --api --model=Models/Event`. Получение всех событий. Получение одного события
4.  Создание события. Удаление события. Валидация создания события: `php artisan make:request EventStoreRequest`
5.  Установил и настроил пакет Sunctum
6.  Регистрация и аутентификации пользователя через api
