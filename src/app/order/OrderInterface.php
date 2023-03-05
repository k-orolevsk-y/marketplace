<?php
	namespace MarketPlace\App\Order;

	interface OrderInterface {
		public function __construct(UserInterface $user, CartInterface $cart);
        public function getProducts(): array;
        public function getTotal(): float;
        public function getDeliveryAddress(): string;
        public function getDeliveryPrice(): float;
        public function getPaymentMethod(): string;
        public function placeOrder(): ?string;

        public function setDeliveryAddress(string $address): OrderInterface;
        public function setDeliveryPrice(float $price): OrderInterface;
        public function setPaymentMethod(string $method): OrderInterface;
	}