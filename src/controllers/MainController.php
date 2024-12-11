<?php

class MainController
{
    // Page d'accueil
    public function home()
    {
        $this->render('home');
    }

    public function footer()
    {
        $this->render('footer');
    }

    public function header()
    {
        $this->render('header');
    }


    public function catalogue()
    {
        $this->render('catalogue');
    }

    public function login()
    {
        $this->render('login');
    }

    public function panier()
    {
        $this->render('panier');
    }

    public function voituremegane()
    {
        $this->render('voituremegane');
    }

    
    public function voiturecitroen()
    {
        $this->render('voiturecitroen');
    }

    
    public function voituregti()
    {
        $this->render('voituregti');
    }

    public function singin()
    {
        $this->render('singin');
    }


    // Page 404
    public function notFound()
    {
        http_response_code(404);
        echo "404 - Page Not Found!";
    }

    // Méthode pour inclure une vue
    private function render($view, $data = [])
    {
        // Transmet les données aux vues
        extract($data);

        // Inclut la vue demandée
        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            echo "View not found: $view";
        }
    }
}
