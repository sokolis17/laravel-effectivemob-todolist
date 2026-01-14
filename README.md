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

Отличный README, он уже выглядит чисто! Давай добавим в него **примеры использования API**, чтобы закрыть Пункт 9 ревью.

Я подготовлю тебе готовый блок Markdown, который можно просто скопировать и вставить в конец твоего файла.

---

### Что нужно сделать:
1.  Открой файл `README.md` в редакторе кода.
2.  Скопируй текст ниже.
3.  Вставь его в самый низ файла (после раздела "Запуск сервера" или "About").
4.  Сохрани, добавь (`git add README.md`), закоммить и запушь.

---

### Примеры использования API (Documentation)

Вы можете тестировать API через **Postman**, **Insomnia** или консольную утилиту **curl**.

### 1. Получить список всех задач
Возвращает массив задач.

**Запрос:**
```bash
GET /api/tasks
```

**Пример curl:**
```bash
curl -X GET http://127.0.0.1:8000/api/tasks \
  -H "Accept: application/json"
```

---

### 2. Создать новую задачу
Создает задачу со статусом `pendпеing` по умолчанию.

**Запрос:**
```bash
POST /api/tasks
```

**Тело запроса (JSON):**
```json
{
    "title": "Изучить Laravel Resources",
    "description": "Понять зачем нужны API Resources",
    "status": "pending"
}
```

**Пример curl:**
```bash
curl -X POST http://127.0.0.1:8000/api/tasks \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d '{"title": "Купить молоко", "description": "В магазине у дома"}'
```

---

### 3. Получить задачу по ID
Возвращает данные одной конкретной задачи.

**Запрос:**
```bash
GET /api/tasks/{id}
```

**Пример curl:**
```bash
curl -X GET http://127.0.0.1:8000/api/tasks/1 \
  -H "Accept: application/json"
```

---

### 4. Обновить задачу
Обновляет только переданные поля (частичное обновление).

**Запрос:**
```bash
PUT /api/tasks/{id}
```

**Тело запроса (JSON):**
```json
{
    "status": "completed"
}
```

**Пример curl:**
```bash
curl -X PUT http://127.0.0.1:8000/api/tasks/1 \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d '{"status": "completed"}'
```

---

### 5. Удалить задачу
Удаляет задачу безвозвратно. Возвращает пустой ответ (204 No Content).

**Запрос:**
```bash
DELETE /api/tasks/{id}
```

**Пример curl:**
```bash
curl -X DELETE http://127.0.0.1:8000/api/tasks/1 \
  -H "Accept: application/json"
```
```
