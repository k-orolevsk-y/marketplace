# Схемы интернет магазина

### Схема главной страницы
```mermaid
flowchart
    User[Пользователь]
    Auth[Регистрация/Авторизация]

    Catalog[Каталог товаров]
    Cabinet[Личный кабинет]

    AdminModule[Доступ к административному модулю]
    AdminOK[OK]
    
    User --> Auth
    User --> Catalog

    Auth --> Catalog
    Auth --> Cabinet
    Auth --> AdminOK{Администратор?}

    AdminOK --> |Да| AdminModule
```

### Схема каталога
```mermaid
flowchart
    Catalog[Каталог товаров]
    CatalogSearch[Поиск]
    CatalogCategories[Категории]
    CatalogSubCategories[Подкатегории]
    CatalogFilterAttributes[Фильтр по атрибутам]
    CatalogProducts[Товары]
    
    Product[Товар]

    Catalog ===> CatalogSearch
    Catalog ===> CatalogCategories
    Catalog ===> CatalogSubCategories
    Catalog ===> CatalogProducts

    CatalogSearch --> CatalogProducts
    
    CatalogCategories --> CatalogSearch
    CatalogCategories --> CatalogSubCategories
    CatalogCategories --> CatalogFilterAttributes
    CatalogCategories -.-> CatalogProducts

    CatalogSubCategories --> CatalogSearch
    CatalogSubCategories --> CatalogFilterAttributes
    CatalogSubCategories -.-> CatalogProducts

    CatalogFilterAttributes -.-> CatalogProducts

    CatalogProducts --> Product
```

### Схема работы с товаром
```mermaid
flowchart
    Product[Товар]
    AddToBasket[Добавить в корзину]
    TransferToBasket[Перейти в корзину]
    TransferToCatalog[Вернуться в каталог]
    Complain[Пожаловаться]


    Product ==> AddToBasket
    Product ==> Complain
    Product ==> TransferToCatalog
    AddToBasket -.-> TransferToBasket
    AddToBasket -.-> TransferToCatalog
```

### Схема личного кабинета & заказа товара
```mermaid
flowchart
   Cabinet[Личный кабинет]
   Basket[Корзина]
   Data[Личные данные]
   DeliveryAddresses[Адреса доставки]

   BasketChangeSumProduct[Изменить кол-во товара]
   BasketRemoveProduct[Удалить товар]
   BasketSetPromoCode[Добавить промокод]
   BasketConfirm[Оформить заказ]

   SelectDeliveryAddress[Выбрать адрес доставки]
   OrderPayment[Оплатить заказ]

   Cabinet ==> Basket
   Cabinet ==> Data 
   Cabinet ==> DeliveryAddresses

   Basket -.-> BasketChangeSumProduct
   Basket -.-> BasketRemoveProduct
   Basket -.-> BasketSetPromoCode
   Basket ==> BasketConfirm

   BasketConfirm -.-> SelectDeliveryAddress
   SelectDeliveryAddress ==> OrderPayment

```

### Схема панели администратора
```mermaid
flowchart
    AdminPanel[Панель администратора]

    Delivery[Система доставки]
    DeliveryNewStock[Добавить склад]
    DeliveryEditStock[Редактирование склада]
    DeliveryRemoveStock[Удаление склада]
    DeliveryEditZone[Редактирование зоны доставки]

    OrderProcessing[Система обработки заказов]
    OrderProcessingSelect[Заказ]
    OrderProcessingSelectSuccess[Принять]
    OrderProcessingSelectCancel[Отклонить]

    CatalogSystem[Система каталога]
    CatalogNewCategory[Добавление категории]
    CatalogNewSubCategory[Добавление подкатегории]
    CatalogNewProduct[Добавление товара]
    CatalogEdit[Редактирование категории/подкатегории/товара]
    CatalogRemove[Удаление категории/подкатегории/товара]

    AdminPanel ===> Delivery
    AdminPanel ===> OrderProcessing
    AdminPanel ===> CatalogSystem

    Delivery --> DeliveryNewStock
    Delivery --> DeliveryEditStock
    Delivery --> DeliveryRemoveStock
    Delivery --> DeliveryEditZone

    OrderProcessing --> OrderProcessingSelect
    OrderProcessingSelect --> OrderProcessingSelectSuccess
    OrderProcessingSelect --> OrderProcessingSelectCancel

    CatalogSystem --> CatalogNewCategory
    CatalogSystem --> CatalogNewSubCategory
    CatalogSystem --> CatalogNewProduct

    CatalogSystem --> CatalogEdit
    CatalogSystem --> CatalogRemove

    CatalogNewCategory -.-> CatalogNewSubCategory
    CatalogNewSubCategory -.-> CatalogNewProduct
```