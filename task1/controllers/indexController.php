<?php

class indexController {
    public function indexAction() {
        /* Once upon a time $shapes was extracted from $_REQUEST and successfully validated.
         *   And now $shapes is array like this:
         *   $shapes = [
         *       ['type' => 'circle', 'params' => [...]],
         *       ['type' => 'circle', 'params' => [...]]
         *   ];
         *
         *   We believe in it.
         */

        $shapes = Request::getShapes();

        $shapes = new ShapesCollection($shapes);

        $view = ViewFactory::getView(Request::getViewType());

        while($shape = $shapes->getShape()) {
            $view->assignShape($shape);
        }

        $view->render();
    }
}