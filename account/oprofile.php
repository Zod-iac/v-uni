<?php
  session_start();                                                           
  if(isset($_SESSION["logged"])){                              
   // if(isset($_GET['mem']))
        $mail1 = $_GET['mem'];

      $mysqli= new mysqli('127.0.0.1','root','','pfe');       // it will stock a big amount of posts
    //$mail1=$_SESSION["mail"];
     $req_membre="SELECT * from MEMBRE where email='$mail1'";
      $res=$mysqli->query($req_membre);
      while($membre= $res->fetch_assoc())
        {
          $id_membre= $membre['ID_MEMBRE'];
          $phone = $membre['TELEPHONE'];
          $natio = $membre['NATIONALITE'];
          $role1 = $membre['role'];
          $photo="../assets/images/faces/".$membre['photo'];
          $fullnami = ucwords($membre['PRENOM'])." ".strtoupper($membre['NOM']); 
        
        }
       // $phone = $_SESSION['phone'];
       
      //  $natio = $_SESSION['NATIONALITE'];
       //$id_membre = $_SESSION['id_membre'];
    //  $req_profile="SELECT * FROM MEMBRE WHERE EMAIL='$mail1'";
      $req_filiere="SELECT * FROM ETUDIANT WHERE ID_MEMBRE =$id_membre";
    
      //$res_profile=$mysqli->query($req_profile);
      $res_filiere=$mysqli->query($req_filiere);
   // $Departement1 = "hello";
      if ($role1 == "s") {
    
            $Departement1 = NULL;
            $ppr = NULL;
            
      }
            else
            {
              $cne = NULL;
              $appoge = NULL;
            
              
          $req_pro = "SELECT * FROM professeur WHERE ID_MEMBRE =$id_membre";
          $res_pro = $mysqli->query($req_pro);
          while($pro=$res_pro->fetch_assoc()) {
            $ppr = $pro['PPR'];
            $Departement1 = $pro['DEPARTEMENT'];
          }
            }
            while ($f=$res_filiere->fetch_assoc()){                    
                $filiere = $f['FILIERE']; 
                //  echo "hello";
                  $cne = $f['CNE'];
                  $appoge = $f['APOGEE'];
            }
                                                        //extraire nom de filiere a partir de la table ETUDIANT
        
        
     
    }
  include('oprofile.html');
?>
