<?php 
    class testController {
        public function show() {
            $M = new testModel();
            $data = $M->get();
            $V = new testView();
            $V->display($data);
        }
    }


?>