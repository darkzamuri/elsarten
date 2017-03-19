function addToCard(){
	var carrito= JSON.parse(localStorage.getItem('Carrito'));	
	$('.products').html('');
	if(carrito!=null){
		if(carrito.length>0){
			$('.ajax_cart_no_product').html(carrito.length);
			//console.log(carrito.length);
			for(var x in carrito){
				var imagen=false
				for(var y in carrito[x]['imagenes']){

					imagen=carrito[x]['imagenes'][y]['url'];
					break;

				}
				console.log(carrito);
				var template='<dt data-id="cart_block_product_19_679_0" class="first_item">'+
					'<a class="cart-images" href="" title="Avocado-Tool"><img src="'+'http://www.thebakerymadewithlove.com/wp-content/uploads/2014/08/placeholder.png'+'" style="width: 100px;" alt="Avocado-Tool"></a>'+
					'<div class="cart-info">'+
						'<div class="product-name">'+
							'<span class="quantity-formated">'+
								'<span class="quantity">'+carrito[x]['cantidad']+'</span>&nbsp;x&nbsp;'+
							'</span>'+
							'<a class="cart_block_product_name" href="" title="'+carrito[x]['art_des']+'">'+carrito[x]['art_des']+'</a>'+
						'</div>'+
					'</div>'+
					'<span class="remove_link">'+
						'<a class="" rel="nofollow" onclick="deleteItem('+carrito[x]['id']+')" title="remove this product from my cart">&nbsp;</a>'+
					'</span>'+
				'</dt>'+
				'<dd data-id="cart_block_combination_of_4_501_0" class="last_item">'+	 
				'</dd>';
				$('.products').append(template);
			}	
		}
		
		ajaxCart.nb_total_products=carrito.length;
	}
	
}

function itemCardView(){
	var carrito= JSON.parse(localStorage.getItem('Carrito'));
	$('.ajax_cart_no_product').html(carrito.length);	
	$('.itemCartView').html('');
	if(carrito!=null){
		if(carrito.length>0){
			for(var x in carrito){
				var imagen=false
				for(var y in carrito[x]['imagenes']){

					imagen=carrito[x]['imagenes'][y]['url'];
					break;

				}
				var template='<tr id="product_3_483_0_0" class="cart_item last_item first_item address_0 odd">'+
							'<td class="cart_product">'+
								'<a href="" alt="Holder-with-Tools-Set">'+
								'<img src="'+'http://www.thebakerymadewithlove.com/wp-content/uploads/2014/08/placeholder.png'+'" style="width: 100px;" alt="Avocado-Tool">'+
								'</a>'+
							'</td>'+
							'<td class="cart_description" data-title="Description">'+
									'<p class="product-name">'+
										'<a href="">'+carrito[x]['art_des']+'</a>'+
									'</p>'+
								'</small>'+
							'</td>'+
							'<td class="cart_avail"><span class="label label-success">En stock</span></td>'+
							'<td class="cart_quantity" data-title="Qty">'+
								'<input type="hidden" value="'+carrito[x]['cantidad']+'" name="quantity_3_483_0_0_hidden">'+
								'<input size="2" type="text" autocomplete="off" class="cart_quantity_input form-control grey" value="'+carrito[x]['cantidad']+'" name="quantity_3_483_0_0">'+
								'<div class="cart_quantity_button clearfix">'+
									'<a rel="nofollow" class="cart_quantity_down btn btn-default button-minus" id="cart_quantity_down_3_483_0_0" onclick="addToCartViewMenus('+carrito[x]['id']+')" title="Sustraer">'+
										'<span>'+
											'<i class="fa fa-minus"></i>'+
										'</span>'+
									'</a>'+
									'<a rel="nofollow" class="cart_quantity_up btn btn-default button-plus" id="cart_quantity_up_3_483_0_0" onclick="addToCartViewPlus('+carrito[x]['id']+')" title="Añadir">'+
										'<span>'+
											'<i class="fa fa-plus"></i>'+
										'</span>'+
									'</a>'+
								'</div>'+
							'</td>'+
							'<td class="cart_delete text-center">'+
								'<div>'+
									'<a rel="nofollow" title="Eliminar" class="cart_quantity_delete" id="3_483_0_0" onclick="deleteItem('+carrito[x]['id']+')"><i class="fa fa-trash-o"></i></a>'+
								'</div>'+
							'</td>'+
						'</tr>';
				$('.itemCartView').append(template);
			}	
		}
	}
}
function sendP(){
	var carrito= {carrito:JSON.parse(localStorage.getItem('Carrito'))};

	carrito.usuario={
		email:$('#email').val(),
		firstname:$('#firstname').val(),
		lastname:$('#lastname').val(),
		identification:$('#identification').val(),
		comment:$('#comment').val()
	};
	console.log(carrito);
	$('.products').html('');
	$.post('presupuestos/add',{carrito},function(data){
		if(data==1||data=='1'){
			$('.itemCartView').html('');
			localStorage.removeItem('Carrito');
			ajaxCart.nb_total_products=0;
			$('.ajax_cart_no_product').html('vacio');
			addToCard();
			alert('Se ha enviado una solicitud de presupuesto');

		}
	},'json');
	//alert();
}
