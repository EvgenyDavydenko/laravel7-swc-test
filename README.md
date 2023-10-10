## Тестовое задание на вакансию Backend developer.

1.  Initial setup
2.  Отредактировал модель и миграцию "коробочной" сущности `User`. Создал модель, миграцию и фабрику для сущности `Event`: `php artisan make:model Models/Event --migration --factory`; `php artisan migrate`; `php artisan db:seed`
3.  Создал ресурсный контроллер для модели событий: `php artisan make:controller Api/EventController --api --model=Models/Event`. Получение всех событий. Получение одного события
