<?php 
require_once './app/models/Product.php';

class HomeController{
	$product = Product::all();
	include './app/view/homepage.php';
}