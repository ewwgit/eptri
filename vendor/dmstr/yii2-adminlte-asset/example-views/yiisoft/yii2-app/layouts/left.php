<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->

        <!-- search form -->
<!--         <form action="#" method="get" class="sidebar-form"> -->
<!--             <div class="input-group"> -->
<!--                 <input type="text" name="q" class="form-control" placeholder="Search..."/> -->
<!--               <span class="input-group-btn"> -->
<!--                 <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i> -->
<!--                 </button> -->
<!--               </span> -->
<!--             </div> -->
<!--         </form> -->
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                		['label' => 'Dashboard', 'icon' => 'fa fa-home', 'url' => ['/']],
                		[
                		'label' => 'Roles',
                		'icon' => 'fa fa-user-secret',
                		'url' => '#',
                		'items' => [
                				['label' => 'Create', 'icon' => 'fa fa-plus', 'url' => ['/role/roles/create'],],
                				['label' => 'View All', 'icon' => 'fa fa-eye', 'url' => ['/role/roles/index'],],
                		],
                		
                		],
                		[
                		'label' => 'Vendors',
                		'icon' => 'fa fa-thumbs-o-up',
                		'url' => '#',
                		'items' => [
                				['label' => 'View All', 'icon' => 'fa fa-eye', 'url' => ['/vendor/vendor/index'],],
                		],
                		
                		],
                		[
                		'label' => 'Users',
                		'icon' => 'fa fa-users',
                		'url' => '#',
                		'items' => [
                				['label' => 'View All', 'icon' => 'fa fa-eye', 'url' => ['/user/user/index'],],
                		],
                				
                				],
                		
                		[
                		'label' => 'Membership',
                		'icon' => 'fa fa-credit-card',
                		'url' => '#',
                		'items' => [
                					['label' => 'Create', 'icon' => 'fa fa-plus', 'url' => ['/membershipdetails/membershipdetails/create'],],
                					['label' => 'View All', 'icon' => 'fa fa-eye', 'url' => ['/membershipdetails/membershipdetails/index'],],
                		],
                		        ],
                				
                		
                		
                		[
                		'label' => 'Products',
                		'icon' => 'fa fa-cubes',
                		'url' => '#',
                		'items' => [
                				['label' => 'Create', 'icon' => 'fa fa-plus', 'url' => ['/products/products/create'],],
                				['label' => 'View All', 'icon' => 'fa fa-eye', 'url' => ['/products/products/index'],],
                				['label' => 'Upload', 'icon' => 'fa fa-upload', 'url' => ['/products/products/createnew'],],
                				['label' => 'Nutritions', 'icon' => 'fa fa-cutlery', 'url' => ['/products/products/nutritions'],],
                		],
                				],
                		[
                		'label' => 'Units',
                		'icon' => 'fa fa-tachometer',
                		'url' => '#',
                		'items' => [
                				['label' => 'Create', 'icon' => 'fa fa-plus', 'url' => ['/units/units/create'],],
                				['label' => 'View All', 'icon' => 'fa fa-eye', 'url' => ['/units/units/index'],],
                		],
                		],
                		[
                		'label' => 'Priceunits',
                		'icon' => 'fa fa-money',
                		'url' => '#',
                		'items' => [
                				['label' => 'Create', 'icon' => 'fa fa-plus', 'url' => ['/priceunits/priceunits/create'],],
                				['label' => 'View All', 'icon' => 'fa fa-eye', 'url' => ['/priceunits/priceunits/index'],],
                		],
                		],
                		
                		[
                		'label' => 'Categories',
                		'icon' => 'fa fa-cogs',
                		'url' => '#',
                		'items' => [
                				['label' => 'Create', 'icon' => 'fa fa-plus', 'url' => ['/categories/categories/create'],],
                				['label' => 'View All', 'icon' => 'fa fa-eye', 'url' => ['/categories/categories/index'],],
                		],
                		],
                		[
                		'label' => 'Brands',
                		'icon' => 'fa fa-tag',
                		'url' => '#',
                		'items' => [
                				['label' => 'Create', 'icon' => 'fa fa-plus', 'url' => ['/brands/brands/create'],],
                				['label' => 'View All', 'icon' => 'fa fa-eye', 'url' => ['/brands/brands/index'],],
                		],
                		],
                		[
                		'label' => 'Products Brands',
                		'icon' => 'fa fa-tags',
                		'url' => '#',
                		'items' => [
                				['label' => 'Create', 'icon' => 'fa fa-plus', 'url' => ['/productsbrands/productsbrands/create'],],
                				['label' => 'View All', 'icon' => 'fa fa-eye', 'url' => ['/productsbrands/productsbrands/index'],],
                				['label' => 'Upload', 'icon' => 'fa fa-upload', 'url' => ['/productsbrands/productsbrands/createnew'],],
                		],
                		],
                		[
                		'label' => 'Sale Indicators',
                		'icon' => 'fa fa-indent',
                		'url' => '#',
                		'items' => [
                				['label' => 'Create', 'icon' => 'fa fa-plus', 'url' => ['/saleindicators/saleindicators/create'],],
                				['label' => 'View All', 'icon' => 'fa fa-eye', 'url' => ['/saleindicators/saleindicators/index'],],
                		],
                		],
                		[
                		'label' => 'Static Pages',
                		'icon' => 'fa fa-sticky-note',
                		'url' => '#',
                		'items' => [
                				['label' => 'Create', 'icon' => 'fa fa-plus', 'url' => ['/staticpages/static/create'],],
                				['label' => 'View All', 'icon' => 'fa fa-eye', 'url' => ['/staticpages/static/index'],],
                		],
                		],
 		
                ],
            ]
        ) ?>

    </section>

</aside>
