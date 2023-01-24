

var button='<button class="close" type="button" title="Remove this page">×</button>';
var tabID = 1;
function resetTab(){
	var tabs=$("#tab-list li:not(:first)");
	var len=1
	$(tabs).each(function(k,v){
		len++;
		$(this).find('a').html('Tab ' + len + button);
	})
	tabID--;
}

$(function(){

  
  
  // toastr.success('Have fun storming the castle!', 'Miracle Max Says');

    

    function resp(response){

        if(response == "success"){
          toastr.remove()
          toastr.success('Record Added Successfully', 'Success');
          setTimeout(function(){
            window.location.reload();
          }, 2000);
        }
        

        

        else if(response == 'loginsuccess'){

            toastr.remove()
            toastr.options.progressBar = true;
            toastr.optionsOverride = 'positionclass = "toast-bottom-full-width"';
            toastr.options.positionClass = 'toast-top-full-width';
            toastr.success('login successful', 'Success');
            setTimeout(function(){
                window.location="index.php";
              }, 3000);
            

        }
        else if(response == 'registersuccess'){

            toastr.remove()
            toastr.options.progressBar = true;
            toastr.optionsOverride = 'positionclass = "toast-bottom-full-width"';
            toastr.options.positionClass = 'toast-top-full-width';
            toastr.success('Registration successful', 'Success');
            setTimeout(function(){
                window.location="index.php";
              }, 3000);

        }


        
        else{
          toastr.remove()

          toastr.error(response, 'Info');

        }


    }

    function before()
{
    toastr.options.showMethod = 'slideDown';
    toastr.options.progressBar = true;
    toastr.optionsOverride = 'positionclass = "toast-bottom-full-width"';
    toastr.options.positionClass = 'toast-top-full-width';
    // toastr.options.showEasing = 'easeOutBounce';
    
    
  toastr.info('Please wait...', 'Processing');
}



$('.userlogin').submit(function(e){

    e.preventDefault();
    // before();
    var user = {
        url: 'processor.php?action=userlogin',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(user);
});


$('.registeruser').submit(function(e){

    e.preventDefault();
    // before();
    var user = {
        url: 'processor.php?action=registeruser',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(user);
});


  





    
})








