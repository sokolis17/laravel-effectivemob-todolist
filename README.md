# To-Do List API

Тестовое задание на позицию Junior PHP Developer в команду Effective Mobile.
Быстрое REST API для управления списком задач, написанное на **Laravel**.

##  Функционал

- Создание задачи (с валидацией)
- Просмотр списка всех задач
- Просмотр одной задачи по ID
- Обновление задачи (можно менять статус или текст)
- Удаление задачи

## Технологии

- **PHP**: 8.3+
- **Framework**: Laravel 12
- **Database**: PostgreSQL

---

##  Установка и запуск

Следуйте этим шагам, чтобы развернуть проект локально:

### 1. Клонирование репозитория
```bash
git clone https://github.com/sokolis17/laravel-effectivemob-todolist.git
```

### 2. Установка зависимостей
```bash
composer install
```

### 3. Настройка окружения
Создайте файл `.env` из примера:
```bash
cp .env.example .env
```
Откройте файл `.env` и пропишите настройки вашей базы данных (DB_DATABASE, DB_USERNAME и т.д.).

### 4. Ключ приложения и миграции
```bash
php artisan key:generate
php artisan migrate
```

### 5. Запуск сервера
```bash
php artisan serve
```
API будет доступно по адресу: `http://127.0.0.1:8000`



