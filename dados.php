<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include "contato.php"; 
  if(isset($_POST['Nome1']) && $_POST['Nome1']!=''){
    $Name = $_POST['Nome1'];
  };
  if(isset($_POST['Email1']) && $_POST['Email1']!=''){
    $Email = $_POST['Email1'];
  };
  if(isset($_POST['Number1']) && $_POST['Number1']!=''){
    $Tel = $_POST['Number1'];
  };
  if(isset($_POST['Assunto1']) && $_POST['Assunto1']!=''){
    $Assunto = $_POST['Assunto1'];
  };
  if(isset($_POST['Menssagem1']) && $_POST['Menssagem1']!=''){
    $Menssagem1 = $_POST['Menssagem1'];
  };
  $contato = new contato();
  $contato -> __set('usu_Nome',$Name);
  $contato -> __set('usu_Email',$Email);
  $contato -> __set('usu_Tel',$Tel);
  $contato -> __set('usu_Assunto',$Assunto);
  $contato -> __set('usu_Menssagem',$Menssagem1);
  echo "Nome: ".$contato ->__get('usu_Nome')." Email: ".$contato ->__get('usu_Email')." Telefone: ".$contato ->__get('usu_Tel')." Assunto: ".$contato ->__get('usu_Assunto')." Menssagem: ".$contato ->__get('usu_Menssagem');
  ?>
</head>
<body>
</body>
</html>