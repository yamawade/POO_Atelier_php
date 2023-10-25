<?php

//INTERFACE ETUDIANT
    Interface iEtudiant{
        public function presenter();
        public function FaireCours();
        public function FaireEvaluation();
    }

//INTERFACE PROFESSEUR
    Interface iProfesseur{
        public function presenter();
        public function EvaluerEtudiant($dateEvaluation);
    }

//CLASS PROFESSEUR
    class Professeur implements iProfesseur{
        private string $nom;
        private string $prenom;
        private string $voiture;
        private float $salaire;
        private string $matricule;

        public function __construct($nomProfesseur,$prenomProfesseur,$voitureProfesseur,$salaireProfesseur,$matriculeProfesseur){
            $this->nom=$nomProfesseur;
            $this->prenom=$prenomProfesseur;
            $this->voiture=$voitureProfesseur;
            $this->salaire=$salaireProfesseur;
            $this->matricule=$matriculeProfesseur;
        }
        public function presenter(){
            echo "je suis $this->prenom $this->nom ,spécialisé dans le domaine de l'informatique et de la programmation, j'ai une voiture: $this->voiture mon salaire est de $this->salaire et mon matricule est : $this->matricule <br>";
        }
        public function EvaluerEtudiant($dateEvaluation){
            echo "j'ai une evaluation prevu le $dateEvaluation <br>";

        }
        public function getNom(){
            return $this->nom;
        }
        public function setNom($nomProf){
            if(is_string($nomProf)){
                $this->nom=$nomProf;
            }else{
                echo "Le nom doit etre une chaine de caractere";
            }
            
        }
        public function getPrenom(){
            return $this->prenom;
        }
        public function setPrenom($prenomProf){
            if(is_string($prenomProf)){
                $this->prenom=$prenomProf;
            }else{
                echo "Le prenom doit etre une chaine de caractere";
            }
        }
        public function getMatricule(){
            return $this->matricule;
        }
        public function setMatricule($matProf){
            $this->matricule=$matProf;
        }
        public function getVoiture(){
            return $this->voiture;
        }
        public function setVoiture($voitureProf){
            if($voitureProf=='oui' || $voitureProf=='non'){
                $this->voiture=$voitureProf;
            }else{
                echo "La valeur de la voiture doit etre oui/non";
            }
            
        }
        public function getSalaire(){
            return $this->salaire;
        }
        public function setSalaire($salaireProf){
            $this->salaire=$salaireProf;
        }

    }
    $prof1= new Professeur("Kane","Samba","oui",3000000,"pr0987654678");
    $prof1->presenter();
    $prof1->EvaluerEtudiant(date("d/m/y"));
    echo "<br> <br>";
//CLASS ETUDIANT
    class Etudiant implements iEtudiant{
        private string $nom;
        private string $prenom;
        private string $matricule;
        public string $dateNaiss;

        public function __construct($nomEtudiant,$prenomEtudiant,$matriculeEtudiant,$dateNaissEtudiant){
            $this->nom=$nomEtudiant;
            $this->prenom=$prenomEtudiant;
            $this->matricule=$matriculeEtudiant;
            $this->dateNaiss=$dateNaissEtudiant;
        }

        public function presenter(){
            echo "je suis $this->prenom $this->nom mon matricule est $this->matricule je suis née le $this->dateNaiss <br>";
        }

        public function FaireCours(){
            echo "je dois faire un cours en gestion de projet <br>";
        }

        public function FaireEvaluation(){
            echo "Je dois faire une evaluation qui est prevu le ". date('d/m/y')."<br>";
        }

        public function getNom(){
            return $this->nom;
        }

        public function setNom($nomAp){
            $this->nom=$nomAp;
        }

        public function getPrenom(){
            return $this->prenom;
        }

        public function setPrenom($prenomAp){
            $this->prenom=$prenomAp;
        }

        public function getMatricule(){
            return $this->matricule;
        }

        public function setMatricule($matriculeAp){
            $this->matricule=$matriculeAp;
        }
    }
    $etudiant1 = new Etudiant("Wade","Mariama Mané","W2345654356","29/05/2002");
    $etudiant1->presenter();
    $etudiant1->FaireCours();
    $etudiant1->FaireEvaluation();

?>