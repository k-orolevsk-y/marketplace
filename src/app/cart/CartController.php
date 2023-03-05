<?php
	namespace MarketPlace\App\Cart;

	class CartController implements CartInterface {
		/**
		 * Переменная, в которой хранятся товары в корзине
		 * @var array
		 */
		private array $products;

		/**
		 * Создание корзины
		 */
		public function __construct() {}

		/**
		 * Добавление товара в корзину
		 * @param Product $product - товар
		 * @param int $quantity - кол-во
		 *
		 * @return CartInterface Возвращаем этот же объект для совершения следующих действий
		 */
		public function addProduct(Product $product, int $quantity): CartInterface {}

		/**
		 * Удаление товара из корзину
		 * @param Product $product - товар
		 *
		 * @return CartInterface Возвращаем этот же объект для совершения следующих действий
		 */
		public function removeProduct(Product $product): CartInterface {}

		/**
		 * Изменение кол-ва товара в корзине
		 * @param Product $product - товар
		 * @param int $quantity - кол-во
		 *
		 * @return CartInterface Возвращаем этот же объект для совершения следующих действий
		 */
		public function editProductQuantity(Product $product, int $quantity): CartInterface {}

		/**
		 * Получить товары, которые есть в корзине
		 *
		 * @return array - Возвращаем массив из товаров в корзине
		 */
		public function getProducts(): array {}

		/**
		 * Функция очистки корзины
		 *
		 * @return bool - Возвращаем результат очищения корзины
		 */
		public function clear(): bool {}

	}