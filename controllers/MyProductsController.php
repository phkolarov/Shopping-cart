<?php
/**
 * Created by PhpStorm.
 * User: Phill
 * Date: 10/4/2015
 * Time: 2:29 AM
 */

namespace controllers;

use viewModels\ProductsViewModel;
use repositories\Products;
use viewhelpers;
use views\View;


class MyProducts
{


    public function index()
    {
        $products = new Products();
        $productsArray = $products->getUserProducts();

        $productsHelper = new viewhelpers\ProductList();
        $viewHelperResult = $productsHelper->listProducts($productsArray);
        $model = new ProductsViewModel($viewHelperResult);

        return View::make($model);
    }







}