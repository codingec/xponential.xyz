var products = [{
	"id": "1",
	"name": "Google Pixel",
	"price": 45000,
	"qty": 1
}, {
	"id": "2",
	"name": "Iphone",
	"price": 60000,
	"qty": 1
}, {
	"id": "3",
	"name": "MacBook Pro",
	"price": 130000,
	"qty": 1
}, {
	"id": "4",
	"name": "Sony Headphones",
	"price": 12000,
	"qty": 1
}, {
	"id": "5",
	"name": "Play Station 4",
	"price": 60000,
	"qty": 1
}, {
	"id": "6",
	"name": "Microsoft Surface",
	"price": 55000,
	"qty": 1
}];

var purchase = [];

function retrievePurchase(){
	var purchase = JSON.parse(localStorage.getItem('purchases')?localStorage.getItem('purchases'):"[]");
	return purchase;
}


function savePurchase(){
	localStorage.setItem('purchases',JSON.stringify(purchase));
}


function updatePurchases(purch){
	localStorage.setItem('purchases',JSON.stringify(purch));

}


function savedetails(){
	return products;
}

function refreshTotal(total){
	var x = document.getElementById('totalLabel');
	x.innerText=total;
}


function refreshTable(){
	$('#item-table-body').html('');
	var pur = retrievePurchase();
	var t = JSON.parse(localStorage.getItem('total'));
	var total=0;

	for(var p of pur)
	{

		var pq = (p.qty)*(p.price)
		$('#item-table').append("<tr> <td>" + p.id + " </td> <td>" + p.name + "</td> <td>" + p.price + " </td> <td>" + p.qty + "  <button id=plus"+p.id+">+</button>"  + "  <button id=sub"+p.id+">-</button>" +  "</td> <td>" + pq + " </td></tr>")
		total+=pq;
	}


	$("button").click(function(e){
	    var idClicked = e.target.id;

	    var pp = retrievePurchase();

	    for(i=0;i<pp.length;i++)
	    {
	    	var ob=pp[i];

	    	if(("plus"+ob.id)===idClicked){
	    		console.log(ob.qty++);
	    	}
	    	if(("sub"+ob.id)===idClicked){
	    		ob.qty--;
	    		if(ob.qty<=0){
	    			console.log(pp.splice(i,1));

	    		}
    		}

	    }

    	updatePurchases(pp);
    	refreshTable();
	});

	refreshTotal(total);
}


function checkPurchases(id){
	var name = filter(products,  id.toString(), 'id');

	var pur = retrievePurchase();

	for(var p of pur)
	{

		if(p.id==name[0].id)
		{

			return p.qty;
		}
	}

	return 0;

}



$(function(){
	savedetails();
	retrievePurchase();
	refreshTable();

	$("button").click(function(e) {
	var idClicked = e.target.id.replace('btn','');
	var name = filter(products,  idClicked, 'id');
	var objects = retrievePurchase();
	var searchIfHasIt = filter(objects,  idClicked, 'id');

	if(objects.length > 0 ){

			if(searchIfHasIt.length === 0){

			   var newproducts = {
				"id": name[0].id,
				"name": name[0].name,
	            "price": name[0].price,
	            "qty": name[0].qty
				};
					objects.push(
						newproducts
						);
						localStorage.setItem('purchases',JSON.stringify(objects));
			} else{
					window.alert("This item exists in Cart. Kindly view your cart !");
			}


	}else{
		localStorage.setItem('purchases',JSON.stringify(name));
	}


	retrievePurchase();
	refreshTable();
	});


	function getDetails(id){
		var pro;
		var containsAlready = checkPurchases(id);
		var inc = containsAlready+1;
		var products = savedetails();
		//console.log(products)
	if(containsAlready==0)
	{
		for(p of products)
		{

			if(p.id===id)
			{
				pro =
				{
					name:p.name,
					price:p.price,
					qty:1
				}
			}
		}
	return pro
	}
	else
	{
		window.alert("This item exists in Cart. Kindly view your cart !");
		return 0;
	}

	}


})


function filter(array, value, key) {
    return array.filter(key ? function (a) {
        return a[key] === value;
    } : function (a) {
        return Object.keys(a).some(function (k) {
            return a[k] === value;
        });
    });
}
