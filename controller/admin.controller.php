<?php 
require_once __DIR__ . "/../model/admin.model.php";
spl_autoload_register( function($className) {
    if($className == "SimpleController") {
        $fullPath = "simple.controller.php";
    } else {
        $extension = ".controller.php";
        $fullPath = strtolower($className) . $extension;
    }
    require_once $fullPath;
});
/**
 * 
 */
class Admin extends SimpleController{

	public static function index() {
        if(!self::isLogin("admin")) {
            header('Location: /admin/login');
        }
        $adminModel = new AdminModel();

        $activeClient = $adminModel->getClients("ACTIVE");
        $waitingClient = $adminModel->getClients("WAITING");
        $activePt = $adminModel->getPts("ACTIVE");
        $waitingPt = $adminModel->getPts("WAITING");
        $allClients = $adminModel->getAllClients();
        $args = [
            'activeClient' => $activeClient,
            'waitingClient' => $waitingClient,
            'activePt' => $activePt,
            'waitingPt' => $waitingPt,
            'allClients' => $allClients
        ];
        self::adminHeader();
        self::view("admin", "index", $args);
		self::adminFooter();
    }

    public static function login() {
        if (self::isLogin("admin")) {
            header('Location: /admin/index');
        }
        self::view("admin", "login");
    }

    public static function signIn($args) {
        $modelArr = [
            "username" => $args['username'],
            "password" => hash('sha256', $args['password'])
        ];
        $adminModel = new AdminModel($modelArr);
        $admin = $adminModel->login();
        if (!$admin) {
            $args = [
                "error" => "Login Fail"
            ];
            self::view("admin", "login", $args);
        } else {
            $_SESSION['admin'] = $admin;
            header('Location: /admin/index');
        }
    }

    public static function signOut() {
        unset($_SESSION['admin']);
        header('Location: /admin/login');
    }

    public static function getSettings() {
        if(!self::isLogin("admin")) {
            header('Location: /admin/login');
        }
         $site = self::getFromAPI('site/getSettings');
         $args = [
             "settings" => $site->settings
         ];
        self::adminHeader();
        self::view("admin", "settings", $args);
    }

    public static function saveSettings() {
        if(!self::isLogin("admin")) {
            header('Location: /admin/login');
        }
        $adminModel = new AdminModel();
        $adminModel->saveSettings($_POST);
        header('Location: /admin/settings');
    }

    public static function blog() {
        if(!self::isLogin("admin")) {
            header('Location: /admin/login');
        }
        self::adminHeader();
        self::view("admin", "blog", $args);
    }

    public static function addBlog() {
        if(!self::isLogin("admin")) {
            header('Location: /admin/login');
        }
        $adminModel = new AdminModel();
        $adminModel->addBlog($_POST);
    }

    public static function getAllBlogs() {
        if(!self::isLogin("admin")) {
            header('Location: /admin/login');
        }
        $adminModel = new AdminModel();
        $blogs = $adminModel->getAllBlog();
    }

    public static function branchAdd() {
        if(!self::isLogin("admin")) {
            header('Location: /admin/login');
        }
        $pts = [];
        foreach (Pt::getPTs() as $pt) {
            $pts[$pt['id']] = $pt['name'] . ' ' . $pt['surname'];
        }
        $args = [
            'pts' => $pts
        ];
        self::adminHeader();
        self::view("admin", "branch", $args);
        self::adminFooter();
    }

    public static function createNewBranch() {
        if(!self::isLogin("admin")) {
            header('Location: /admin/login');
        }
        $adminModel = new AdminModel();
        $response = $adminModel->createBranch($_POST);
        $args = [
            "response" => $response
        ];
        self::adminHeader();
        self::view("admin", "branch", $args);
        self::adminFooter();
    }

    public static function ptAdd() {
        if(!self::isLogin("admin")) {
            header('Location: /admin/login');
        }
        $branches = [];
        foreach (Branch::getAll() as $branch) {
            $branches[$branch['id']] = $branch['name'];
        }
        $args = [
            'branches' => $branches
        ];
        self::adminHeader();
        self::view("admin", "pt", $args);
        self::adminFooter();
    }

    public static function createNewPt() {
        if(!self::isLogin("admin")) {
            header('Location: /admin/login');
        }
        $_POST['file'] = $_FILES['file'];
        $adminModel = new AdminModel();
        $response = $adminModel->createPt($_POST);
        
        foreach (Branch::getAll() as $branch) {
            $branches[$branch['id']] = $branch['name'];
        }
        $args = [
            'branches' => $branches,
            'response' => $response
        ];
        self::adminHeader();
        self::view("admin", "pt", $args);
        self::adminFooter();
    }

    public static function getAllBranches() {
        if(!self::isLogin("admin")) {
            header('Location: /admin/login');
        }
        $adminModel = new AdminModel();
        $branches = $adminModel->getAllBranches();
        $args = [
            "allBranches" => $branches
        ];
        self::adminHeader();
        self::view("admin", "branches", $args);
        self::adminFooter();
    }

    public static function getAllPts() {
        if(!self::isLogin("admin")) {
            header('Location: /admin/login');
        }
        $adminModel = new AdminModel();
        $pts = $adminModel->getAllPts();
        $args = [
            "allPts" => $pts
        ];
        self::adminHeader();
        self::view("admin", "pts", $args);
        self::adminFooter();
    }
}