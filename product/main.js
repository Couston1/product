// search for product in the search bar
const search = () =>{
    const searchbox = document.getElementById("search-item").value.toUpperCase();
    const storeitems = document.getElementById("product-list");
    const product = document.querySelectorAll(".product");
    const productname = storeitems.getElementsByTagName("h2");

    // for loop to check through if product exist
    for(var i=0; i < productname.length; i++){
        let productmatch = product[i].getElementsByTagName('h2')[0];

        // checking if product matches the search
        if(productmatch){
            let textvalue = productmatch.textContent || productmatch.innerHTML;

            if(textvalue.toUpperCase().indexOf(searchbox) > -1){
                product[i].style.display = '';
            }else{
                product[i].style.display = 'none';
            }
        }
    }
};

//preview passport image
function PreviewImage(input)
{
    var file = $("input[type=file]").get(0).files[0];

    if(file){
        var reader = new FileReader();

        reader.onload = function(){
            $("#previewImg").attr("src", reader.result);
        }

        reader.readAsDataURL(file);
    }
};

 // validating add food form
 function validateFields(){
    var productname = document.getElementById('productname').value;
    var productprice = document.getElementById('productprice').value;
    var productimage = document.getElementById('productimage').value;


    if(productname == ''){
        document.getElementById('error-productname').innerHTML = 'Enter product name';
        return false;
    }
    // if(!productname.match(/^[A-Za-z]+$/)){
    //     document.getElementById('error-productname').innerHTML = 'Only alphabets are required';
    //     return false;
    // }
    document.getElementById('error-productname').innerHTML ='';
    
    if(productprice == ''){
        document.getElementById('error-productprice').innerHTML = 'Price field required';
        return false;
    }
    if(isNaN(productprice)){
        document.getElementById('error-productprice').innerHTML = 'Only Numbers are allowed';
        return false;
    }
    document.getElementById('error-productprice').innerHTML ='<i class"fas fa-check-circle"></i>';


    if(productimage == ''){
        document.getElementById('error-productimage').innerHTML = 'Select image';
        return false;
    }
    document.getElementById('error-productimage').innerHTML ='<i class"fas fa-check-circle"></i>';
 }
 const notifications = document.querySelector('.notifications');
//remove toast function
const removeToast = (toast) =>{
    toast.classList.add('hide');
    setTimeout(() => removeToast(toast),500);
}

