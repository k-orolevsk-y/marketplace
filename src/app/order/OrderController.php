<?php
	namespace MarketPlace\App\Order;

	class OrderController implements OrderInterface {
		/**
		 * Переменная, в которой храниться пользователь, которому принадлежит заказ
		 *
		 * @var UserInterface
		 */
		private UserInterface $user;
		/**
		 * Корзина данного пользователя, при оформлении заказа
		 *
		 * @var CartInterface
		 */
		private CartInterface $cart;
		/**
		 * Адрес доставки
		 *
		 * @var string
		 */
		private string $deliveryAddress;
		/**
		 * Цена доставки
		 *
		 * @var float
		 */
		private float $deliveryPrice;
		/**
		 * Выбранная система оплаты
		 *
		 * @var string
		 */
		private string $paymentMethod;

		/**
		 * Конструктор заказа
		 *
		 * @param UserInterface $user
		 * @param CartInterface $cart
		 */
		public function __construct(UserInterface $user, CartInterface $cart) {}

		/**
		 * Получить товары, которые оформлены в заказе
		 *
		 * @return array - Возвращает массив из товаров
		 */
        public function getProducts(): array {}

		/**
		 * Получить общую сумму заказа
		 *
		 * @return float - Возвращает цену в виде числа с плавающей точкой
		 */
        public function getTotal(): float {}

		/**
		 * Получить адрес доставки
		 *
		 * @return string - Возвращает адрес в виде строки
		 */
        public function getDeliveryAddress(): string {}

		/**
		 * Получить цену за доставку
		 *
		 * @return float - Возвращает цену доставки
		 */
        public function getDeliveryPrice(): float {}

		/**
		 * Получить платежную систему
		 *
		 * @return string - Возвращает название платежной системы
		 */
        public function getPaymentMethod(): string {}

		/**
		 * Оформить заказ через нужную платежную систему
		 *
		 * @return string|null - Возвращает ссылку на платежную систему или null, если не удалось создать заказ на платежной системе
		 */
        public function placeOrder(): ?string {}

		/**
		 * Установить адрес доставки
		 *
		 * @param string $address
		 *
		 * @return OrderInterface - Возвращаем этот же объект для совершения следующих действий
		 */
        public function setDeliveryAddress(string $address): OrderInterface {}

		/**
		 * Установить цену доставки
		 *
		 * @param float $price
		 *
		 * @return OrderInterface - Возвращаем этот же объект для совершения следующих действий
		 */
        public function setDeliveryPrice(float $price): OrderInterface {}

		/**
		 * Установить способ оплаты
		 *
		 * @param string $method
		 *
		 * @return OrderInterface - Возвращаем этот же объект для совершения следующих действий
		 */
        public function setPaymentMethod(string $method): OrderInterface {}

	}