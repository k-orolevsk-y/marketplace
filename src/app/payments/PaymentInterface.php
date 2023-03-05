<?php
	namespace MarketPlace\App\payments;

	interface PaymentInterface {
		public function __construct(string $apiKey, string $apiUrl);
		public function processPayment(OrderInterface $order): ?string;
		public function updatePaymentStatus(OrderInterface $order): string;
		public function getOrders(): array;
	}