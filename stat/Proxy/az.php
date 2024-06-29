<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proxy</title>
  <script defer src="script.js"></script>
  <style>
    .option{
        display:none;
    }
    .default{
        margin: 10vw 5vw;
        border:2px solid black;
        background:rgb(170, 152, 142);
        font-weight:2vw;
        font-size:1.5vw;
    }
    form{
        margin: 10vw 5vw;
        border:2px solid black;
        background:rgb(170, 152, 142);
        font-size:1.5vw;
    }
  </style>
</head>
<body>
<h1>Configuration enregistrée</h1>
<div class="default">
        <?php
        echo '';
            $cmd = "sudo cat /etc/squid/squid.conf |grep -v ^#|grep [a-zA-Z0-9]| grep -v '^refresh\|^acl\|^http_access\|^include\|^url_rewrite_program\|^core' | sed -e 's/always_direct/une_liste_URL_que_Squid_doit_toujours_télécharger_directement,_sans_les_mettre_en_cache/g' -e 's/visible_hostname/le_nom_dhôte_que_Squid_affiche_aux_clients/g' -e 's/maximum_object_size_in_memory/la_taille_maximale_des_objets_que_Squid_peut_mettre_en_cache/g' -e 's/cache_dir/le_répertoire_où_Squid_stocke_les_fichiers_mis_en_cache/g' -e 's/http_port/le_port_TCP_sur_lequel_Squid_écoute_les_requêtes_HTTP./g' -e 's/logformat/le_format_des_fichiers_journaux_de_Squid/g' -e 's/reply_body_max_size/taille_du_telechargement_maximum/g'";
            $a = array();
           exec($cmd ,$a , $return );

            // echo "<p>$return</p>";
            foreach( $a as $elmt ){
                $t=""; $s="";
                sscanf($elmt , "%s %[^\n]",$t,$s);
                $t = str_replace("_" , " " , $t);
                // if(str_contains($s,"var"))
                echo "<p>$t : $s</p>";
            }
        ?>
    </div>
    <h1>Modifier la configuration</h1>
    <form action="http://www.andrana.com/test.php" method="post">

        Type de stockage de cache : 
        <select id="sens" name="contact">
            <option value="1" >Système de fichier</option>
            <option value="2" >Memoire</option>
        </select><br>
        <div class="option"></div>
        taille du telechargement maximum autorisé <input type="number" min="0" name="body_size"> <br>
        Taille maximale de mis en cache (en MB): <input type="number" min="0" name="taille" id="" placeholder="4 MB"><br>
        Ajouter une liste d'URL à télécharger directement : <input type="text" name="url_download" id="" placeholder="*.exe *.zip"><br>
        Format des fichiers journaux : 
        <select id="sens" name="log">
            <option value="common" >common</option>
            <option value="squid" >squid</option>
        </select><br>
        Nom d'hôte que Squid affiche aux clients : <input type="text" name="hote" id="" placeholder="www.example.com"><br>
        <br>
        <br>
        <input type="submit" value="Configure">
    </form>

    
    
</body>