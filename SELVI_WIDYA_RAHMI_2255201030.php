<!DOCTYPE html>
<html>
<body>

<?php
class Mahasiswa {
  // Properties 
  private $Nama;
  private $NIM;
  private $MataKuliah;
  private $dosenkiller;

  // Methods
  function set_Nama($Nomo) {
    $this->Nama = $Nomo;
  }
  function get_Nama() {
    return $this->Nama;
  }
  function set_NIM($NIM){
    $this-> NIM = $NIM;
  }
  function get_NIM(){
    return $this->NIM;
  }
  function set_MataKuliah($MataKuliah){
    $this-> MataKuliah = $MataKuliah;
  }
  function get_MataKuliah(){
    return $this -> MataKuliah;
  }
  function set_dosenkiller($dosenkiller){
    $this -> dosenkiller = $dosenkiller;
  }
  function get_dosenkiller(){
    return $this -> dosenkiller;
  }
}

$selviwidyarahmi = new Mahasiswa();
$selviwidyarahmi->set_Nama('selviwidyarahmi');
echo $selviwidyarahmi->get_Nama();
echo "<br>";
$selviwidyarahmi->set_NIM('2255201030');
echo $selviwidyarahmi->get_NIM();
echo "<br>";
$selviwidyarahmi->set_MataKuliah('PBO');
echo $selviwidyarahmi->get_MataKuliah();
echo "<br>";
$selviwidyarahmi->set_dosenkiller('Melati');
echo $selviwidyarahmi->get_dosenkiller();

?>
 
</body>
</html>