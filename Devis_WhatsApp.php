<?php
/**
* Plugin Name: Devis via WhatsApp
* Plugin URI: https://www.isilda-lukombo.com/
* Description: Ce plugin permet la demande de devis via WhatsApp
* Version: 1.0
* Author: Isilda Lukombo
* Author URI: https://www.isilda-lukombo.com/
**/




function Devis_WhatsApp(){ 
    
    $nom = $_POST['Nom'];
    $email = $_POST['mon_email'];
    $service = $_POST['serv'];
    
    $texto_whats = "Bonjour, je m'appelle*" . $Nom . "* Je veux un devis pour " .$serv . " Mon email est  ".  $email;   

    $msg_whats = str_replace(' ', '%20', $texto_whats);

    //Indiquez ici votre numéro Whatsapp
    $whats_app = "33";
    $action_url = "https://api.whatsapp.com/message/E4KSB7Y5NCWHP1";

  
    ?>


<?php if(isset($_POST['submit'])){ ?>

    <script type="text/javascript">
    window.location = "<?php echo $action_url; ?>";
    </script>   
    <?php } ?>


    <form action="" method="post">
    <label for="">Nom</label>
    <input type="text" name="Nom">

    <label for="">Email</label>
    <input type="text" name="mon_email">

    <label for="">Demander un devis</label>

    <select name="serv" id="">
        <option value="Cours WordPress">Cours WordPress</option>
        <option value="Je veux commander la réalisation d'un site">Je veux commander la réalisation d'un site</option>
        <option value="Accompagnement dans la digitalisation de mon activité">Accompagnement dans la digitalisation de mon activité</option>
    </select>

    <input type="submit" name="submit" value="Demander un devis">


    </form>

<?php
}
add_shortcode('devis','devis_whatsapp');