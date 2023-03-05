<?php
	namespace MarketPlace\App\payments;

	class PaymentService implements PaymentInterface {
		/**
		 * Переменная, в которой хранится ключ для API внешней платежной системы
		 *
		 * @var string
		 */
		private string $apiKey;
		/**
		 * Переменная, в которой хранится точка входа в API (ссылка)
		 *
		 * @var string
		 */
        private string $apiUrl;
		/**
		 * Список заказов, которые были оформлены и перенаправлены на платежную систему
		 *
		 * @var array
		 */
        private array $orders;

		/**
		 * Конструктор для интеграции внешней платежной системы
		 *
		 * @param string $apiKey
		 * @param string $apiUrl
		 */
        public function __construct(string $apiKey, string $apiUrl) {}

		/**
		 * Оформить заказ через внешнюю платежную систему
		 *
		 * @param OrderInterface $order
		 *
		 * @return string|null - Возвращает ссылку на платежную систему или null, если не удалось создать заказ на платежной системе
		 */
        public function processPayment(OrderInterface $order): ?string {}

		/**
		 * Обновить статус заказа и проверить оплату
		 *
		 * @param OrderInterface $order
		 *
		 * @return string - Возвращает одно из этих значений: `pending` - в обработке, `success` - оплачен, `cancel` - отменён
		 */
        public function updatePaymentStatus(OrderInterface $order): string {}

		/**
		 * Получить список заказов отправленных на платежную систему
		 *
		 * @return array - Возвращает массив из заказов
		 */
        public function getOrders(): array {}

	}