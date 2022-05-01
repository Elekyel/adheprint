<?php
session_start();
date_default_timezone_set('UTC+1');
ini_set("display_errors", 1);
require_once 'inc/db.php';
$link = dbConnect();
require 'fpdf/fpdf.php';
$somme = 0;


// Création de la class PDF
class PDF extends FPDF {
    // Header
    function Header() {
        // Logo : 8 >position à gauche du document (en mm), 2 >position en haut du document, 80 >largeur de l'image en mm). La hauteur est calculée automatiquement.
        $this->Image('images/logo.png',10,13);
        // Saut de ligne 20 mm
        $this->SetFont('Helvetica','B',11);
        $this->SetX(-117);
        $this->Cell(100,6,utf8_decode('N° : '.$_GET['commande']."    ".'Date : '.date('j\/m\/Y')."    ".'Page : '.$this->PageNo().'/{nb}'),0,0,'L');
        $this->Ln(14);
        $this->SetX(-98);

        // Titre gras (B) police Helbetica de 11
        $this->SetFont('Helvetica','B',24);
        // fond de couleur gris (valeurs en RGB)
        //$this->setFillColor(230,230,230);
        // position du coin supérieur gauche par rapport à la marge gauche (mm)
        // Texte : 60 >largeur ligne, 8 >hauteur ligne. Premier 0 >pas de bordure, 1 >retour à la ligneensuite, C >centrer texte, 1> couleur de fond ok
        $this->Cell(60,8,'Commande fournisseur',0,1,'C');
        // Saut de ligne 10 mm
        $this->Ln(10);
        $this->SetFont('Helvetica','B',14);
        $str =  "\n                                 Fournisseur n ° 70434249 SARL ADHE-PRINT\n\n";
        $str .= "                  ZAC DE LAMIRAULT                 Tél : 01 60 35 11 24\n";
        $str .= "                  17 RUE DE LAMIRAULT            E-mail : adheprint@adheprint.fr\n";
        $str .= "                  77090 COLLEGIEN FRA\n ";
        $this->MultiCell(190,6,utf8_decode($str),1,'L');
        $this->ln(7);
    }
    // Footer
    function Footer() {
        // Positionnement à 1,5 cm du bas
        $this->SetY(-60);
        // Police Arial italique 8
        $this->SetFont('Helvetica','I',12);
        // Numéro de page, centré (C)
        //$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        $this->Cell(0,10,utf8_decode('Condition de règlement : 45 Jours Fin de Mois'),0,0,'L');
        // Positionnement à 1,5 cm du bas
        $this->SetY(-50);
        // Police Arial italique 8
        $this->SetFont('Helvetica','I',12);
        // Numéro de page, centré (C)
        //$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        $this->MultiCell(190,8,utf8_decode('Notre numéro de commande ci-dessus devra être indiqué sur la facture et une copie de la commande doit être jointe à votre envoi.'),1,'L','');
        // Saut de ligne 10 mm
        $this->Ln(5);
        $this->MultiCell(190,6,utf8_decode('Siège social : 9 AVENUE DIDIER DAURAT - BP 94226 - 31432 TOULOUSE CEDEX 4 - FRA'. "\n" .'Tél. : 0562192420'."\n".'SAS au capital de 53 000 000 EUR - RCS 343 403 531'),0,'C','');

    }
}


// On active la classe une fois pour toutes les pages suivantes
// Format portrait (>P) ou paysage (>L), en mm (ou en points > pts), A4 (ou A5, etc.)
$pdf = new PDF('P','mm','A4');

// Nouvelle page A4 (incluant ici logo, titre et pied de page)
$pdf->AddPage();
// Polices par défaut : Helvetica taille 9
$pdf->SetFont('Helvetica','B',9);
// Couleur par défaut : noir
$pdf->SetTextColor(0);
// Compteur de pages {nb}
$pdf->AliasNbPages();

$pdf->SetDrawColor(0); // Couleur du fond RVB
$pdf->SetFillColor(255,255,255); // Couleur des filets RVB
$pdf->SetTextColor(0); // Couleur du texte noir
// position de colonne 1 (10mm à gauche)
$pdf->SetX(10);
$pdf->Cell(70,8,utf8_decode('Affaire suivie par'),1,0,'L');
$pdf->SetX(80);
$pdf->Cell(60,8,utf8_decode('Adresse de livraison'),1,0,'L',1);
$pdf->SetX(140);
$pdf->Cell(60,8,utf8_decode('Adresse de facturation'),1,0,'L',1);
$pdf->SetXY(10,99);
$pdf->MultiCell(70,8,utf8_decode($_GET['lastname']."\n".$_GET['firstname']."\n".$_GET['tel']."\n".$_GET['mail']),1,'L');
$pdf->SetXY(80,99);
$pdf->MultiCell(60,32,utf8_decode($_GET['livraison']),1,'L');
$pdf->SetXY(140,99);
$pdf->Cell(60,32,utf8_decode($_GET['facturation']),1,0,'L',1);
$pdf->ln(40);


$pdf->Cell(10,8,utf8_decode('N°'),1,0,'L',1);  // 60 >largeur colonne, 8 >hauteur colonne
// position de la colonne 2 (70 = 10+60)
$pdf->SetX(20);
$pdf->Cell(100,8,utf8_decode('Désignation'),1,0,'L',1);
// position de la colonne 3 (130 = 70+60)
$pdf->SetX(120);
$pdf->Cell(20,8,utf8_decode('Qté'),1,0,'L',1);
$pdf->SetX(140);
$pdf->Cell(30,8,utf8_decode('Prix unit. HT'),1,0,'L',1);
$pdf->SetX(170);
$pdf->Cell(30,8,utf8_decode('Prix total HT'),1,0,'L',1);
$pdf->ln();

$i = 1;
foreach ($_SESSION['cart'] as $elm){
    if((int)$elm[2]>0) {
        if ($pdf->PageNo() > 1 && $i % 24 == 0) {
            $pdf->AddPage();
            $pdf->Cell(10, 8, utf8_decode('N°'), 1, 0, 'L', 1);  // 60 >largeur colonne, 8 >hauteur colonne
// position de la colonne 2 (70 = 10+60)
            $pdf->SetX(20);
            $pdf->Cell(100, 8, utf8_decode('Désignation'), 1, 0, 'L', 1);
// position de la colonne 3 (130 = 70+60)
            $pdf->SetX(120);
            $pdf->Cell(20, 8, utf8_decode('Qté'), 1, 0, 'L', 1);
            $pdf->SetX(140);
            $pdf->Cell(30, 8, utf8_decode('Prix unit. HT'), 1, 0, 'L', 1);
            $pdf->SetX(170);
            $pdf->Cell(30, 8, utf8_decode('Prix total HT'), 1, 0, 'L', 1);
            $pdf->ln();
        }
        if ($pdf->PageNo() == 1 && $i % 8 == 0) {
            $pdf->AddPage();
            $pdf->Cell(10, 8, utf8_decode('N°'), 1, 0, 'L', 1);  // 60 >largeur colonne, 8 >hauteur colonne
// position de la colonne 2 (70 = 10+60)
            $pdf->SetX(20);
            $pdf->Cell(100, 8, utf8_decode('Désignation'), 1, 0, 'L', 1);
// position de la colonne 3 (130 = 70+60)
            $pdf->SetX(120);
            $pdf->Cell(20, 8, utf8_decode('Qté'), 1, 0, 'L', 1);
            $pdf->SetX(140);
            $pdf->Cell(30, 8, utf8_decode('Prix unit. HT'), 1, 0, 'L', 1);
            $pdf->SetX(170);
            $pdf->Cell(30, 8, utf8_decode('Prix total HT'), 1, 0, 'L', 1);
            $pdf->ln();
        }
        $pdf->Cell(10, 8, (string)$i, 1, 0, 'L', 1);  // 60 >largeur colonne, 8 >hauteur colonne
// position de la colonne 2 (70 = 10+60)
        $pdf->SetX(20);
        $pdf->Cell(100, 8, utf8_decode($elm[0]), 1, 0, 'L', 1);
// position de la colonne 3 (130 = 70+60)
        $pdf->SetX(120);
        $pdf->Cell(20, 8, utf8_decode($elm[2]), 1, 0, 'L', 1);
        $pdf->SetX(140);
        $pdf->Cell(30, 8, utf8_decode($elm[1] . ',00'), 1, 0, 'L', 1);
        $pdf->SetX(170);
        $tot = (int)$elm[2] * (int)$elm[1];
        $somme += $tot;
        $pdf->Cell(30, 8, utf8_decode(((string)$tot) . ',00'), 1, 0, 'L', 1);
        $i++;
        $pdf->ln();
    }
}
$pdf->ln(2);
$pdf->SetX(-100);
$pdf->Cell(30,8,utf8_decode('Montant total HT :  '.(string)$somme.',00EUR'),0,0,'L',1);

$pdf->Ln(); // Retour à la ligne




// affichage à l'écran...
$pdf->Output('test.pdf','I');
//$pdf->Output('F', 'test.pdf');
?>