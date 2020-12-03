<?php

class NeManager extends Manager
{
    
    public function getMon()
    {
        $db = $this->dbConnect();
        $securite = password_hash($_POST['nom'], PASSWORD_DEFAULT);
        $prenom = $_POST['prenom'];
        $lui = $db->prepare('INSERT INTO pers(nom,prenom) VALUES (:nom,:prenom)');
        $elle = $lui->execute(array('nom'=>$securite ,'prenom'=>$prenom));
        return $elle;
        echo var_dump($elle);
        
    }
    public function verifNom()
    {
        $db = $this->dbConnect();
        $vers = $db->prepare('SELECT nom FROM pers WHERE prenom = :prenom');
        $vers->execute(array(
            'prenom'=> $_POST['prenom'] ));
        $verif = $vers->fetch();
        return $verif;
    }
    public function getMonCv()
    {
        try{
            $db= $this->dbConnect();
            $db->beginTransaction();

            $mess=$db->prepare('INSERT INTO infos(adresse,telephone,mail)VALUES(:adresse,:telephone,:mail)');
            $mes = $mess->execute(array('adresse'=>$_POST['adresse'],
            'telephone'=>$_POST['telephone'],'mail'=>$_POST['mail']));

            $idperso = $db->lastInsertId();

            $mess=$db->prepare('INSERT INTO cv(idperso,experience,competence,permis,langue,poli)VALUES(:idperso,:experience,:competence,:permis,:langue,:poli)');
            $mes = $mess->execute(array('idperso'=>$idperso,'experience'=>$_POST['experience'],
            'competence'=>$_POST['competence'],'permis'=>$_POST['permis'],'langue'=>$_POST['langue'],'poli'=>$_POST['poli']));

            $db->commit(); 
            echo 'tou';

            return $idperso;
           }
           catch(Exception $e) 
           {
            $db->rollback();
            echo 'rien';
            exit();
           }
       
    }
    public function getVoirCv($idperso)
    {
        $db= $this->dbConnect();
        $ver = $db->prepare('SELECT C.id,C.experience,C.competence,C.permis,C.langue,C.poli,
        I.idp,I.adresse,I.telephone,I.mail
        FROM cv C INNER JOIN infos I
        ON C.idperso=I.idp
        WHERE I.idp='.$idperso);
        $ver->execute();
        $vais = $ver->fetch();
        // echo var_dump($vais);
        return $vais;
        
       
    }
   
}