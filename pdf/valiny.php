
<?php

require('fpdf.php');
class PDF extends FPDF
{
    
// Page header
function Header()
{
    //--- Modification de la marge gauche ---
    $this->SetLeftMargin(20);
    // Logo
    $this->Image('images/logo.png',10,6,30);
    
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(50); //80 teo aloha
    // Title
    //$this->Cell(30,10,'Dossier étudiant',1,0,'C');
    $this->Cell(60,10,'DOSSIER ETUDIANT',1,0,'C');
    
    // Line break
    $this->Ln(25);//Ln(20);
}

// Pied de page
function Footer()
{
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    // Police Arial italique 8
    $this->SetFont('Arial','I',8);
    // Numéro de page
    //$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    $this->Cell(0,10,'Projet Recrutement Simplon (c) 2019',0,0,'C');
}

}
//--- ETAPE 1 ----
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$datenai=$_POST['date_naissance'];
$adresse=$_POST['adresse'];
$cp=$_POST['code_postal'];
$ville=$_POST['ville'];
$nat=$_POST['nationalite'];
$mail=$_POST['email'];
$tel=$_POST['tel']; 
$statut=$_POST['statut'];
$dipl=$_POST['diplome'];
$photo=$_POST['photo']; 

//--- ETAPE 2 ----
$heros=$_POST['heros'];
$hack=$_POST['hack'];
$pourk=$_POST['pourquoi'];
$park=$_POST['parcours'];
$futur=$_POST['futur'];

//--- ETAPE 3 ----
$php=$_POST['php'];
$html=$_POST['html_css'];
$autres=$_POST['autresp']; 
$anglais=$_POST['anglais'];



//********** PDF CREATION PAGE********* */
$pdf = new PDF();
$pdf->AddPage();
//$pdf->SetFont('Arial','',10);
//$pdf->Cell(0,10,'Nom : '.$nom,0,1);
//$this->Cell($w,9,$title,1,1,'C',true);

//$pdf->Image('images/sary8.jpg',60,6,30);
$pdf->Image('images/sary8.jpg',165,3,30);
/*
$pdf->Cell(30,15,'Nom : '.$nom,0,1);
$pdf->Cell(0,10,'Anarana : '.$nom,0,1,'L');
$pdf->Cell(0,15,'Prenom: '.$prenom,0,1,'L');
*/
$pdf->Ln();
$pdf->SetFont('Times','BI',13);

$pdf->Cell(170,10,' - ETAT CIVIL - ',1,2,'C');
$pdf->SetFillColor(180,180,180);
$pdf->SetFont('Arial','U',11);
$pdf->Cell(0,10,'Nom : '.$nom,0,10,'L');
$pdf->Cell(0,10,'Prenom: '.$prenom,0,10,'L');

$pdf->Cell(0,10,'Date de naissance : '.$datenai,0,10,'L');
$pdf->Cell(0,10,'Adresse personnelle : '.$adresse,0,10,'L');
$pdf->Cell(0,10,'Code postal : '.$cp,0,10,'L');
$pdf->Cell(0,10,'Ville : '.$ville,0,10,'L');
$pdf->Cell(0,10,'Nationalite : '.$nat,0,10,'L');
$pdf->Cell(0,10,'Adresse mail : '.$mail,0,10,'L');
$pdf->Cell(0,10,'Numero telephone : '.$tel,0,10,'L');
$pdf->Cell(0,10,'Statut : '.$statut,0,10,'L');
$pdf->Cell(0,10,'Diplome obtenu : '.$dipl,0,10,'L');
//$photo=$_POST['photo']; 

//--- ETAPE 2 ----
$pdf->SetFont('Times','BI',13);

$pdf->Cell(170,10,' - MOTIVATION - ',1,2,'C');
$pdf->SetFillColor(180,180,180);
$pdf->SetFont('Arial','',11);

$pdf->Cell(0,10,'Super-heros : '.$heros,0,10,'L');
$pdf->Cell(0,10,'Hacks : '.$hack,0,10,'L');
$pdf->Cell(0,10,'Pourquoi integrer la formation'.$pourk,0,10,'L');
$pdf->Cell(0,10,'Votre parcours : '.$park,0,10,'L');
$pdf->Cell(0,10,'Dans un an : '.$futur,0,10,'L');

//--- ETAPE 3 ----
$pdf->SetFont('Times','BI',13);

$pdf->Cell(170,10,' - PRE-REQUIS - ',1,2,'C');
$pdf->SetFillColor(180,180,180);
$pdf->SetFont('Arial','',11);
$pdf->Cell(0,10,'Pre-requis 1 : '.$php,0,10,'L');
$pdf->Cell(0,10,'Pre-requis 2 : '.$html,0,10,'L');
$pdf->Cell(0,10,'Autres : '.$autres,0,10,'L');
$pdf->Cell(0,10,'Niveau anglais : '.$anglais,0,10,'L');

$pdf->Output('etudiants/'.strtoupper($nom).'_'.$prenom.'.pdf','F');
$pdf->Output(strtoupper($nom).'_'.$prenom.'.pdf','D', 'isUTF8');

?>
