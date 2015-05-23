
<?php

    class Home extends Controller
    {
        /**
         * PAGE: index
         * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
         */
        public function index()
        {
            // load views
            require APP . 'arch/view//template/header.php';
            require APP . 'arch/view/home/index.php';
            require APP . 'arch/view/template/footer.php';
        }
        public function loadModels(){

            require_once(APP . 'model/xml-model.php');
        }


    }
?>

