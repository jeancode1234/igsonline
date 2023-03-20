<?php

if (isset($_SESSION["message"])) {
     ?>
       
       <div class="w-full relative flex bg-yellow-200 p-4 mb-4 text-sm text-gray-800">
                <span class="text-xl inline-block mr-5 align-middle">
                    <i class="fas fa-bell"></i>
                </span>
                <span class="inline-block align-middle mr-8">
                    <b class="capitalize"><?php echo $_SESSION["message"] ;?></b>
                </span>
                <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">
                    <span>×</span>

                </button>
        </div>
<script>
  function closeAlert(event){
    let element = event.target;
    while(element.nodeName !== "BUTTON"){
      element = element.parentNode;
    }
    element.parentNode.parentNode.removeChild(element.parentNode);
  }
</script>
     
<?php

 unset($_SESSION["message"]);
}

?>
