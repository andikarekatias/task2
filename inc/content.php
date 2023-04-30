<?php 
    if (!empty(@$_GET['url'])) {
        switch (@$_GET['url']) {
            case 'profile':
                include'profile.php';
                break;  
            case 'cart':
                include'cart.php';
                break;      
            default:
                echo "<h3>Halaman tidak ditemukan !!!</h3>";
                break;
        }
    }else{
        echo "<h1 class='display-4'>Products</h1>";
        echo "<div class='row'>";
        $item->showItem();
        echo "</div>";
        
    }
?>  