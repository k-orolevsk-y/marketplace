<?php
	namespace MarketPlace\App\Cart;

	interface CartInterface {
		public function __construct();
		public function addProduct(Product $product, int $quantity): CartInterface;
		public function removeProduct(Product $product): CartInterface;
		public function editProductQuantity(Product $product, int $quantity): CartInterface;
		public function getProducts(): array;
		public function clear(): bool;
	}