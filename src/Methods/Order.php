<?php
namespace Shopiro;

class Order {
	
    private $shopiroClient;

    public function __construct(ShopiroClient $shopiroClient) {
        $this->shopiroClient = $shopiroClient;
    }
	
    public function getAll(int $count, int $offset) {
        $response = $this->shopiroClient->createRequest($endpoint=['get', 'orders'], $payload=["ct" => $count, "of"=>$offset]);
		return $response;
    }
	
	public function get(int $orderId){
        $response = $this->shopiroClient->createRequest($endpoint=['get', 'order'], $payload=["oid" => $orderId]);
		return $response;
	}

}